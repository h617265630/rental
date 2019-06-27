<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Model\Company;

class RoomController extends Controller
{
    /*
     * 登记房间
     */
    public function registRoomView(){
        return view('room/registRoomView');
    }
    /*
     * 登记房间
     */

    public function registRoom(Input $input){
        $params = $input->get();
        $result =  DB::table('room')->insert([
            'room_no'=>$params['room_no'],
            'room_space'=>$params['room_space'],
            'building_id'=>$params['building_no']
        ]);

        if($result){
            $msg = '登记成功';
        }else{
            $msg = '登记失败';
        }
        return redirect('registRoom')->with('msg',$msg);
    }

    /*
     * 获取房间列表
     */
    public function roomList($id){
       $data = DB::table('room')->select('*')->where('building_id','=',$id)->get();
//       dump($data);
       return view('room/roomList')->with('data',$data);
    }

    /*
     * 获取关联的房间信息
     */
    public function getRooms($id){
        $data = DB::select('select room_no from room where building_id = '.$id);
        return response($data);
    }
}
