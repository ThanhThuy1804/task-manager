<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->softDeletes('delete_at');
            // $table->integer('task_id')->unsigned();
            // $table->integer('project_id')->unsigned();
            $table->timestamps();
        });
        /* Schema::table('users',function($table){
             $table->foreign('task_id')->references('id')->on('tasks');
             $table->foreign('project_id')->references('id')->on('projects');
         });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

