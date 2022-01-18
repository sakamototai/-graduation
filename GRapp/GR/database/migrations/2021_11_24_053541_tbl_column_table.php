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
        Schema::create('gr',function(Blueprint $table){
        $table->integer('id');
        $table->char('title',50);
        $table->char('tag1',30);
        $table->char('tag2',30);
        $table->char('tag3',30);
        $table->char('tag4',30);
        $table->char('updatetime',10);
        $table->char('posttime',10);
        $table->text('introduction');
        $table->char('heding1',20);
        $table->char('heding2',20);
        $table->char('heding3',20);
        $table->char('photo1',50);
        $table->char('photo2',50);
        $table->char('photo3',50);
        $table->char('samnail',50);
        $table->char('subheding11',30);
        $table->char('subheding12',30);
        $table->char('subheding21',30);
        $table->char('subheding22',30);
        $table->char('subheding31',30);
        $table->char('subheding32',30);
        $table->text('content11');
        $table->text('content12');
        $table->text('content21');
        $table->text('content22');
        $table->text('content31');
        $table->text('content32');
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
