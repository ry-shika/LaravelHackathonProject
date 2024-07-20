<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            // オプションの長さのVARCHAR相当の列を追加する
            $table->string('name', 20);
            $table->string('place', 20);
            $table->string('color', 20);
            $table->string('shape', 20);
            $table->string('time', 20);
            // created_atとupdated_atのTIMESTAMPに相当する列を追加する
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
        Schema::dropIfExists('folders');
    }
};
