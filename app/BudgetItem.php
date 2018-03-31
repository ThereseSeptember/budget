<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model
{
    public function recurring()
    {
        return $this->hasOne(Recurring::class);
    }
}
