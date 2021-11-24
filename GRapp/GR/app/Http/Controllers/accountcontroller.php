<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\TblColumn;
class accountController extends Controller
{
 
    public function login(){
        $items = DB::select('select * from user');
        return view('user.login',['item'=> $items]);
    }   
    public function home(){
        return view('user.home');
    }
    public function schedule(){
        return view('user.schedule');
    }
    public function column1($id ='0'){
        $matchThese = ['id' =>$id];
        $item = TblColumn::where($matchThese)->first();
        // $items = DB::select('select * from tbl_column');
        return view('column.columncontents',['item'=> $item,'id'=>$id]);
    }
    public function budget(){
        return view('user.budget');
    }
    public function chat(){
        return view('user.chat');
    }
    public function bridalfair(){
        return view('user.bridal_fair');
    }
    public function column(){
        return view('user.column');
    }
    public function onlinereserve(){
        return view('user.online_reserve');
    }
}
