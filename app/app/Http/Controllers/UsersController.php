<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // dd(DB::table('carts')->select(['p.name as p_name', 'u.name as u_name'])->where('user_id', 1)->join('products as p', 'carts.product_id','=','p.id')->join('users as u', 'carts.user_id', '=', 'u.id')->get());
        return view('users.index', [
            'users' => \DB::table('users')->get()
        ]);
    }

    public function show(int $id)
    {
        return view('users.show', [
            'user' => ($user = \DB::table('users')->find($id))?$user:abort(404)
        ]);
    }
}
