<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('users');
            $table->foreign('users')->references('id')->on('users');
            $table->unsignedBigInteger('books');
            $table->foreign('books')->references('id')->on('books');
            $table->date('rent_date');
            $table->date('return_date');
            $table->string('status_pinjam', 255);
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
        Schema::dropIfExists('rent_logs');
    }
}
