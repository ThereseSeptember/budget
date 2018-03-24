<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function overview()
    {
        return view('home', [
            'title'=>'Budgets',
            'subtitle'=>'- Welcome back!'
        ]);
    }

    public function display($budget)
    {
        return view('details', [
            'title'=>'MAD!'
        ]);
    }
}
