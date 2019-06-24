<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /*
     * 主页
     */
    public function index(){
        return view('rentalIndex');
    }
    /*
     * 登记公司页面
    */
    public function registCompanyView(){
        return view('registCompanyView');
    }
    /*
     * 登记雇员页面
     */
    public function registEmployeeView(){
        return view('registEmployeeView');
    }
    /*
    * 签署合同页面
    */
    public function signContractView(){
        return view('signContractView');
    }
}
