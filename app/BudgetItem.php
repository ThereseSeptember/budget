<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'occured_at'
    ];

    public function recurring()
    {
        return $this->hasOne(Recurring::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
