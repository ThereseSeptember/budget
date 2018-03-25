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
        return view('budgets.overview.main', [
            'title'=>'MAD!',
            'subtitle'=>'Overview'
        ]);
    }

    public function categories($budget)
    {
        return view('budgets.categories.main', [
            'title'=>'MAD!',
            'subtitle'=>'Categories'
        ]);
    }

    public function recurring($budget)
    {
        return view('budgets.recurring.main', [
            'title'=>'MAD!',
            'subtitle'=>'Recurring'
        ]);
    }

    public function newEntry($budget)
    {
        return view('budgets.overview.new', [
            'title'=>'MAD!',
            'subtitle'=>'New Entry'
        ]);
    }

    public function newCategory($budget)
    {
        return view('budgets.categories.new', [
            'title'=>'MAD!',
            'subtitle'=>'New Category'
        ]);
    }

    public function newRecurring($budget)
    {
        return view('budgets.recurring.new', [
            'title'=>'MAD!',
            'subtitle'=>'New Recurring'
        ]);
    }


}
