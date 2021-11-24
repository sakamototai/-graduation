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
    public function getTag(){
        return $this->tag;
    }
    public function getUpdatetime(){
        return $this->updatetime;
    }
    public function getPosttime(){
        return $this->birth;
    }
    public function getHeading(){
        return $this->kisotu;
    }
    // $this -> photo. ',' .$this -> subtitle. ',' .$this -> content
    public function getPhoto(){
        return $this->photo;
    }
    public function getSubtitle(){
        return $this->photo;
    }
    public function getContent(){
        return $this->photo;
    }
}
