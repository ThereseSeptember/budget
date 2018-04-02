<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function items()
    {
        return $this->hasMany(BudgetItem::class);
    }

    public function periods()
    {
        return $this->belongsToMany(BudgetPeriod::class, 'category_periods', 'category_id', 'period_id')->withPivot('budgeted')->withTimestamps();
    }

}
