<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class IndexController extends Controller
{
    /*
     * 主页
     */
    public function index(){
       $users =  DB::select('select id,username,gender,age,phone from user');
        return view('rentalIndex')->with('users',$users);
    }
}
