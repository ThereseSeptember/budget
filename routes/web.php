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
Route::get('budgets')->uses('BudgetController@overview')->name('overview')->middleware('auth');
Route::get('budgets/{budget}')->uses('BudgetController@display')->name('details')->middleware('auth');
Route::get('budgets/{budget}/new')->uses('BudgetController@newEntry')->name('newEntry')->middleware('auth');
Route::get('budgets/{budget}/categories')->uses('BudgetController@categories')->name('categories')->middleware('auth');
Route::get('budgets/{budget}/categories/new')->uses('BudgetController@newCategory')->name('newCategory')->middleware('auth');
Route::get('budgets/{budget}/recurring')->uses('BudgetController@recurring')->name('recurring')->middleware('auth');
Route::get('budgets/{budget}/recurring/new')->uses('BudgetController@newRecurring')->name('newRecurring')->middleware('auth');
Route::get('budgets/{budget}/recurring/{recurring}/toggle-status')->uses('BudgetController@recurringToggleStatus')->name('recurringToggleStatus')->middleware('auth');


Auth::routes();
