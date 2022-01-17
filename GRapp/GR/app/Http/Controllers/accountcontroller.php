<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\TblColumn;
class accountController extends Controller
{
 
    public function login(){
        $items = DB::select('select * from test');
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
        if($item == NULL){
            return redirect('/column');
        }
        // $items = DB::select('select * from tbl_column');
        return view('column.columncontents',['item'=> $item,'id'=>$id]);
    }
    public function columntag(){

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
        // $count= DB::select('select * from tbl_column');
        $count = DB::select('select MAX(id) AS Maxnumber  from tbl_column');
        $item =[10];
        $number;
        foreach($count as $counts){
            $number = $counts->Maxnumber;
        }
        for($i = 0 ; $i <= 10 && $i <= $number; $i++){
        $matchThese = ['id' => $i];
        $item[$i] = TblColumn::where($matchThese)->first();
        }
        // var_dump($item[1]);
        return view('user.column',['number'=>$number,'item'=>$item]);
    }
    public function onlinereserve(){
        return view('user.online');
    }
}
