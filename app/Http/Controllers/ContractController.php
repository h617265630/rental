<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Model\Company;

class ContractController extends Controller
{
    /*
      * 签署合同页面
      */
    public function signContractView(){
        return view('contract/signContractView');
    }
    /*
     * 签署合同
     */
    public function signContract(Input $input){

        $params = $input->get();


        // 计算合同到期时间 和结束时间

        // 存储数据
        $result =  DB::table('contract')->insert([
            'contract_no'=>$params['contract_no'],
            'provides'=>$params['provides'],
            'contract_start_time'=>$params['contract_start_time'],
            'contract_end_time'=>$params['contract_end_time'],
            'building_id'=>$params['building_id'],
            'room_no'=>$params['room_no'],
            'room_space'=>$params['room_space'],
            'rented_space'=>$params['rented_space'],
            'unit_price'=>$params['unit_price'],
            'available'=>1
        ]);


        //保存好后 修改 room 的可用状态
        $room_no = $params['room_no'];
        DB::table('room')->where('room_no',$room_no)
            ->update(array('available'=>0));
        if($result){
            $msg = '登记成功';
        }else{
            $msg = '登记失败';
        }
        return redirect('signContract')->with('msg',$msg);
    }
    /*
  * 合同细节页面
  */
    public function contractList(){
//    $t1 = DB::select('select * from contract as t1, room as t2, contract_relationship as t3 where t3.room_id = t2.room_id and t3.contract_no= t1.contract_no');
        $t1 = DB::select('select * from contract');
        return view('contract/contractList')->with('data',$t1);;
    }

    /*
     *计算房间可用面积
     */
    public function calcAvailableSpace($building_id){


        //这个大楼下 所有房间的总面积
        $availableSpace = DB::select('select sum(room_space) as a_space from room where building_id = '.$building_id.' and available = 1 ');

//        dump($availableSpace);

        return response($availableSpace);
//        $availableSpace = $totalSpace - $usedSpace;
//        return $availableSpace;
    }

}
