<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Model\Company;

class CompanyController extends Controller
{
    /*
     * 登记公司页面
    */
    public function registCompanyView(){
        return view('company/registCompanyView');
    }
    /*
     * 登记公司
     */
    public function registCompany(Input $input){
        $parameters = $input->get();
//        dump($parameters);
        $result = DB::table('company')->insert([
            'code_id'=>$parameters['code_id'],
            'name'=>$parameters['company_name'],
            'category'=>$parameters['category'],
            'main_business'=>$parameters['main_business'],
            'corporation'=>$parameters['corporation'],
            'corporation_contact'=>$parameters['corporation_contact'],
            'corporation_id'=>$parameters['corporation_id'],
            'household'=>$parameters['household'],
            'graduated_school'=>$parameters['graduated_school'],
            'graduated_time'=>$parameters['graduated_time'],
            'graduated_degree'=>$parameters['graduated_degree'],
            'company_admin_name'=>$parameters['company_admin_name'],
            'company_admin_contact'=>$parameters['contact']
        ]);
        if($result){
            $msg = '登记成功';
        }else{
            $msg = '登记失败';
        }
        return redirect('registCompany')->with('msg',$msg);
    }

    /*
    * 公司信息细节页面
    */
    public function companyList(){

        $result = DB::table('company')->select('*')->get();
        return view('company/companyList')->with('data',$result);;
    }

    /*
     * 获取公司信息
     */
    public function getCompany(){
        $result = DB::select('select * from company');
        return response($result);
    }
}
