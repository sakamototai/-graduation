<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_column',function(Blueprint $table){
        $table->increments('id');
        $table->char('title',50);
        $table->char('tag',30);
        $table->char('updatetime',10);
        $table->char('posttime',10);
        $table->char('heding',50);
        $table->char('photo',50);
        $table->char('subtitle',20);
        $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
