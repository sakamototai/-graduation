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

        return $this->tag;
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
