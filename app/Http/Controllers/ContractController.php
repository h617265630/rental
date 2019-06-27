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

//        dump($input->get());
        $params = $input->get();
        $result =  DB::table('contract')->insert([
            'contract_no'=>$params['contract_no'],
            'provides'=>$params['provides'],
            'start_time'=>$params['start_time'],
            'end_time'=>$params['end_time'],
            'room_space'=>$params['room_space'],
            'rented_space'=>$params['rented_space'],
            'unit_price'=>$params['unit_price'],
            'available'=>1
        ]);

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
}
