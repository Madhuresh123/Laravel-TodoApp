<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 

class Usercontroller extends Controller
{
    //
    public function index(){

        // DB::insert('insert into users (name,email,password) values (?, ?,?)', ['Rohan', 'rohan@gmail.com', 'rohan123']);
        // $userData  = DB::select('select * from users');

        // DB::update('update users where set= ? where id = 2', ['roshan']);
        // DB::delete('delete from user where id = 1');
        // return $userData;
        // $user = new User();
        // return dd($user);
        return view('home');

    }
}
