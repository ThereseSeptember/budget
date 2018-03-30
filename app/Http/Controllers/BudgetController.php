<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('budgets.overview.main', [
            'title'=>$budget->name, //$title
            'subtitle'=>'Overview', //$subtitle
            'budget'=>$budget       //$budget
        ]);
    }

    public function categories($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        $budget->load([
            'categories' => function($query){
                $query->whereNull('parent_id')->orderBy('name');
            }, 
            'categories.subCategories' => function($query) {
                $query->orderBy('name');
            }]);
        return view('budgets.categories.main', [
            'title'=>$budget->name,
            'subtitle'=>'Categories',
            'budget'=>$budget
        ]);
    }

    public function recurring($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        return view('budgets.recurring.main', [
            'title'=>$budget->name,
            'subtitle'=>'Recurring',
            'budget'=>$budget
        ]);
    }

    public function newEntry($budgetId)
    {
        $budget = \App\Budget::find($budgetId);
        return view('budgets.overview.new', [
            'title'=>$budget->name,
            'subtitle'=>'New Entry',
            'budget'=>$budget
        ]);
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


}
