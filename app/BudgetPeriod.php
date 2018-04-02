<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetPeriod extends Model
{
    public function items()
    {
        return $this->belongsToMany(BudgetItem::class, 'budget_item_links', 'budget_period_id', 'budget_item_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_periods', 'period_id', 'category_id')->withPivot('budgeted')->withTimestamps();
    }

    public function previous()
    {
        return BudgetPeriod::find(BudgetPeriod::where('id', '<', $this->id)->where('budget_id', $this->budget_id)->max('id'));
    }

    public function next()
    {
        return BudgetPeriod::find(BudgetPeriod::where('id', '>', $this->id)->where('budget_id', $this->budget_id)->min('id'));
    }
}
