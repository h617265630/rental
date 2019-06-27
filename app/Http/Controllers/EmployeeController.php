<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Model\Company;

class EmployeeController extends Controller
{
    /*
     * 登记雇员页面
     */
    public function registEmployeeView(){
        return view('employee/registEmployeeView');
    }
    /*
     * 登记雇员
     */
    public function registEmployee(Input $input){
        $result =  DB::table('employee')->insert([
            'id'=>$input->get('employee_id'),
            'name'=>$input->get('employee_name'),
            'social_insurance_id'=>$input->get('social_insurance_id'),
            'phone'=>$input->get('phone'),
            'job'=>$input->get('job')
        ]);
        if($result){
            $msg = '登记成功';
        }else{
            $msg = '登记失败';
        }
        return redirect('registEmployee')->with('msg',$msg);
    }
    /*
     * 员工细节页面
     */
    public function employeeList(){
        $result = DB::table('employee')->select('*')->get();
        return view('employee/employeeList')->with('data',$result);
    }
}
