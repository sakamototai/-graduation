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
    public function columntag($xxx = 'xxx'){
        $matchThese1 = ['tag1' => $xxx];
        $matchThese2 = ['tag2' => $xxx];
        $matchThese3 = ['tag3' => $xxx];
        $matchThese4 = ['tag4' => $xxx];
        $item1 = TblColumn::where($matchThese1)->get();
        $item2 = TblColumn::where($matchThese2)->get();
        $item3 = TblColumn::where($matchThese3)->get();
        $item4 = TblColumn::where($matchThese4)->get();
        // var_dump($item4);
        $item =[10];
        $number = count($item1)+count($item2)+count($item3)+count($item4);
        $item = $item1.$item2.$item3.$item4;
        // $item = $item4;
        // var_dump($item);
        // var_dump($item1);
        // for($i = 0;$i <= 10 && $i < $count;$i++){
        //     // $item = array();
        //     for($j = $i,$v = 0;$j < count($item1);$j++,$v++ ){
                
        //         array_push($item[$j],$item1[$v]);
        //     }

        // }
        
        // var_dump(count($item2)+count($item3));
        if($item1 == "[]"&& $item2 == "[]" && $item3 == "[]" && $item4 == "[]" ){
            return redirect('/column');
        }
        return view('user.column',['number'=>$number,'item'=>$item]);
        

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
        // var_dump($item[2]);
        return view('user.column',['number'=>$number,'item'=>$item]);
    }
    public function onlinereserve(){
        return view('user.online');
    }
}
