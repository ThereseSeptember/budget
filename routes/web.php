<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('budgets')->uses('BudgetController@overview')->name('overview');
Route::get('budgets/{budget}')->uses('BudgetController@display')->name('details');


//Auth::routes();
