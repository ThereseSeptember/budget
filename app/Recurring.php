<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurring extends Model
{
    public function item()
    {
        return $this->belongsTo(BudgetItem::class, 'budget_item_id');
    }
}
