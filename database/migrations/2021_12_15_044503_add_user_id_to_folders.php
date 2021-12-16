<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToFolders extends Migration
{

     // * Run the migrations.
     // *
     // * @return void

    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
        });
    }


     // * Reverse the migrations.
     // *
     // * @return void

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
}
