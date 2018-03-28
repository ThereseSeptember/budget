<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function periods()
    {
        return $this->hasMany(BudgetPeriod::class);
    }
}
