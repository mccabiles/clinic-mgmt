<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedsTable extends Migration
{
   
    public function up()
    {
        /*Schema::create('meds', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();

            $table->integer('supply_id');
            $table->integer('qty_onhand');
            $table->integer('qty_debit');
            $table->integer('qty_credit');
            $table->integer('request_id');
        }); */
    }

    public function down()
    {
        //Schema::drop('meds');
    }
}
