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


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//
Route::get('/', function () {
    return view('welcome');
});

//ゲスト
Route::get('guest-expense','GuestExpenseController@show')->name('guest-expense.show');
Route::post('guest-expense','GuestExpenseController@store')->name('guest-expense.store');

Route::get('guest-chart','GuestChartController@show')->name('guest-chart.show');
Route::post('guest-chart','GuestChartController@store')->name('guest-chart.store');

////ログインユーザー
Route::group(['middleware' => ['auth']], function () {
    Route::get('expense','ExpenseController@show')->name('expense.show');
    Route::post('expense','ExpenseController@store')->name('expense.store');
    
    Route::get('chart','ChartController@show')->name('chart.show');

});


