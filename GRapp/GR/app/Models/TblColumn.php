<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblColumn extends Model
{
    protected $table = 'tbl_column';
    use HasFactory;
    public function getData1()
    {
        return $this -> id. ',' .$this -> title. ',' .$this -> tag. ',' .$this -> updatetime. ',' .$this ->posttime. ',' .$this -> heding. ',' .$this -> photo. ',' .$this -> subtitle. ',' .$this -> content;
    }
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getTag(int $c){//途中
        // オンラインデート$婚活$オンラインパーティ$結婚$
        $text = $this->tag;
        $textleng = strlen($text);
        echo "文字数".strlen($text)."個";
        // var_dump($text);
        $ddd = mb_strpos($text,'$',0);
        // var_dump($ddd);

        //２個目のタグ表示

        // echo substr($text,$ddd*3+1,6);
        $eee = mb_strpos($text,'$',$ddd+1);
        
        
        //３つ目
        
        echo substr($text,$eee*3-1,27);
        //4爪

        $xxx = mb_strpos($text,'$',$eee+1);
        var_dump($xxx*3-$eee*3);
        $word4 = $textleng-$xxx*3+2;
        $zzz = mb_strpos($text,'$',$xxx+1);
        // echo($zzz);
        substr($text,$zzz*3,1);
        if($c==1){
            return substr($text,0,$ddd*3);
        }else if($c==2){
            return substr($text,);
        }else if($c==3){
            
        }else if($c==4){
            return substr($text,$xxx*3-3,$word4);
        }else{
            return "error";
        }
    }
    public function getUpdatetime(){
        return $this->updatetime;
    }
    public function getPosttime(){
        return $this->birth;
    }
    public function getIntroduction(){
        return $this->introduction;
    }
    public function getHeding(int $x){
        if($x == 1){
            return $this->heding1;
        }else if($x == 2){
            return $this->heding2;
        }else{
            return $this->heding3;
        }
    }
    // $this -> photo. ',' .$this -> subtitle. ',' .$this -> content
    public function getPhoto(int $d){
        if($d == 1){
            return $this->photo1;
        }else if($d == 2){
            return $this->photo2;
        }else{
            return $this->photo3;
        }
    }
    public function getSamnail(){
        return $this->samnail;
    }
    public function getSubheding(string $g){
        if($g == '11'){
            return $this->subheding11;
        }else if($g == '12'){
            return $this->subheding12;
        }else if($g == '21'){
            return $this->subheding21;
        }else if($g == '22'){
            return $this->subheding22;
        }else if($g == '31'){
            return $this->subheding31;
        }else{
            return $this->subheding32;
        }
    }
    public function getContent(string $x){
        if($x == '11'){
            return $this->content11;
        }else if($x == '12'){
            return $this->content12;
        }else if($x == '21'){
            return $this->content21;
        }else if($x == '22'){
            return $this->content22;
        }else if($x == '31'){
            return $this->content31;
        }else{
            return $this->content32;
        }
    }
}
