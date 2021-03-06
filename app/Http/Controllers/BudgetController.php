<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class BudgetController extends Controller
{
    public function overview()
    {
        $budgets = \App\Budget::whereUserId(auth()->id())->with('periods')->get();
        return view('home', [
            'title'=>'Budgets',
            'subtitle'=>'- Welcome back!',
            'budgets'=>$budgets
        ]);
    }

    public function display($budgetId)
    {
        $budget = \App\Budget::find($budgetId);

        $period = \App\BudgetPeriod::where('budget_id', $budgetId)->where('start_date', '<=', \DB::raw('now()'))->where('end_date', '>=', \DB::raw('now()'))->first();
        if (is_null($period))
        {
            $period = new \App\BudgetPeriod;
            $startDate = new Carbon;
            $startDate->hour = 0;
            $startDate->minute = 0;
            $startDate->second = 0;
            $startDate->day = $budget->start_day;

            $period->start_date = $startDate->toDateTimeString(); // april
            $period->end_date = $startDate->copy()->addMonth()->subDay()->toDateTimeString(); // maj

            $period->name = $startDate->format('F Y');
            $period->budget_id = $budgetId;
            $period->save();

            $savedIds = [];
            $recurrings = \App\Recurring::where('budget_id', $budgetId)->where('status', 'active')->with('item')->get();
            foreach($recurrings as $recurring)
            {
                $budgetItem = new \App\BudgetItem;
                $budgetItem->category_id = $recurring->item->category_id;
                $budgetItem->name = $recurring->item->name;
                $budgetItem->store = $recurring->item->store;
                $budgetItem->price = $recurring->item->price;
                $budgetItem->type = $recurring->item->type;
                $budgetItem->recurring = 0;
                $budgetItem->location = $recurring->item->location;
                
                $occuredAt = $startDate->copy();
                if ($recurring->start_day < $budget->start_day)
                    $occuredAt->addMonth();
                $occuredAt->day = $recurring->start_day;
                $budgetItem->occured_at = $occuredAt->toDateTimeString();
                $budgetItem->save();
                $savedIds[] = $budgetItem->id;
            }
            $period->items()->attach($savedIds);   
            
            $lastPeriod = $period->previous()->load('categories');
            if(!is_null($lastPeriod))
            {
                foreach($lastPeriod->categories as $category)
                {
                    $period->categories()->attach($category->id, ['budgeted' => $category->pivot->budgeted]);
                }
            }

            
        }

        $upcomming = $period->items()->where('occured_at', '>', \DB::raw('now()'))->orderBy('occured_at')->with('category')->get();

        return view('budgets.overview.main', [
            'title'=>$budget->name, //$title
            'subtitle'=>'Overview', //$subtitle
            'budget'=>$budget,
            'upcomming'=> $upcomming       //$budget
        ]);
    }

    public function categories($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        $currentPeriod = \App\BudgetPeriod::where('budget_id', $budgetId)->latest()
        ->with(['categories' => function($query) {
            $query->orderBy('parent_id');
        }])->first();

        $list = [];
        foreach($currentPeriod->categories as $category)
        {
            $category = $category->toArray();
            if (is_null($category['parent_id']))
            {
                $list[$category['id']] = $category;
                $list[$category['id']]['sub'] = [];
            }
            else
                $list[$category['parent_id']]['sub'][] = $category;
        }
        return view('budgets.categories.main', [
            'title'=>$budget->name,
            'subtitle'=>'Categories',
            'budget'=>$budget,
            'categories' => $list
        ]);
    }

    public function recurring($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        $budget->load('recurrings.item.category');
        return view('budgets.recurring.main', [
            'title'=>$budget->name,
            'subtitle'=>'Recurring',
            'budget'=>$budget
        ]);
    }

    public function newEntry($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        $categories = $budget->categories()->get();
        return view('budgets.overview.new', [
            'title'=>$budget->name,
            'subtitle'=>'New Entry',
            'budget'=>$budget,
            'categories' => $categories
        ]);
    }

    public function doNewEntry($budgetId)
    {
        $currentPeriod = \App\BudgetPeriod::where('budget_id', $budgetId)->latest()->first();
        $budget = \App\Budget::find($budgetId);
        $item = new \App\BudgetItem;
        $item->category_id = request('category');
        $item->name = request('name');
        $item->store = "";
        $item->price = str_replace(',', '.', request('amount'));
        $item->type = request('type');
        $item->occured_at = date('Y-m-d H:i:s');
        $item->save();

        $currentPeriod->items()->attach($item->id);
        return redirect()->route('details', [$budgetId]);
    }

    public function newCategory($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        return view('budgets.categories.new', [
            'title'=>$budget->name,
            'subtitle'=>'New Category',
            'budget'=>$budget
        ]);
    }

    public function newRecurring($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        return view('budgets.recurring.new', [
            'title'=>$budget->name,
            'subtitle'=>'New Recurring',
            'budget'=>$budget
        ]);
    }

    public function recurringToggleStatus($budgetId, $recurringId)
    {
        $recurring = \App\Recurring::where('budget_id', '=', $budgetId)->where('id', '=', $recurringId)->first();
        if ($recurring->status == 'active')
            $recurring->status = 'disabled';
        else
            $recurring->status = 'active';
        $recurring->save();
        return redirect()->route('recurring', [$budgetId]);
    }


}
