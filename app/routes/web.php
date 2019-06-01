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

Route::get('/', function () {
    // dd(DB::table('carts')->select(['p.name as p_name', 'u.name as u_name'])->where('user_id', 1)->join('products as p', 'carts.product_id','=','p.id')->join('users as u', 'carts.user_id', '=', 'u.id')->get());
    return view('pages.home');
})->name('home');
