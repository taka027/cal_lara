<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Holiday extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
Schema::create('holidays', function (Blueprint $table) { 
$table->increments('id'); 
$table->date('day')->unique(); 
$table->string('description'); 
$table->timestamps(); 

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
Schema::drop('holidays'); 
    }
}
