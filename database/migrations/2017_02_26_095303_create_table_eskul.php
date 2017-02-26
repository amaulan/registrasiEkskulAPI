<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEskul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekskul', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ekskul_nama');
            $table->string('pembina');
            $table->text('desc');
            $table->text('picture');
            $table->timestamps();
        });

        Schema::create('siswa_ekskul', function(Blueprint $table){
            $table->increments('id');
            $table->integer('siswa_id')->unsigned();
            $table->integer('ekskul_id')->unsigned();
            $table->text('alasan');
            $table->timestamps();

            $table->foreign('siswa_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('ekskul_id')
            ->references('id')
            ->on('ekskul')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_ekskul');
        Schema::dropIfExists('ekskul');
    }
}
