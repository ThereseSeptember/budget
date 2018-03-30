<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function periods()
    {
        return $this->hasMany(BudgetPeriod::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function recurrings()
    {
        return $this->hasMany(Recurring::class);
    }
}
