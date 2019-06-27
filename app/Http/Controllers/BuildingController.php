<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Model\Company;

class BuildingController extends Controller
{
    /*
     * 登记大楼
     */
    public function registBuildingView(){
        return view('building/registBuildingView');
    }
    /*
     * 获取大楼信息
     */
    public function getBuildings(){
        $result = DB::select('select * from building');
        return response($result);
    }
    /*
     * 登记大楼
     */
    public function registBuilding(Input $input){
        $params = $input->get();
        $result =  DB::table('building')->insert([
            'building_name'=>$params['building_name'],
        ]);

        if($result){
            $msg = '登记成功';
        }else{
            $msg = '登记失败';
        }
        return redirect('registBuilding')->with('msg',$msg);
    }
    /*
     * 大楼列表
     */
    public function buildingList(){
        $result = DB::select('select * from building');
        return view('building/buildingList')->with('data',$result);
    }
}
