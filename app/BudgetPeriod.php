<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetPeriod extends Model
{
    public function items()
    {
        return $this->belongsToMany(BudgetItem::class, 'budget_item_links', 'budget_item_id', 'budget_period_id');
    }

}
