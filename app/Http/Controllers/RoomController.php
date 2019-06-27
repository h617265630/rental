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
     * 获取房间列表
     */
    public function roomList($id){
       $data = DB::table('room')->select('*')->where('building_id','=',$id);
       return view('room/roomList')->with('data',$data);
    }
}
