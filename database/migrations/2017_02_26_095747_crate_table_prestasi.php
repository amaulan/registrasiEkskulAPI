<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTablePrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function(Blueprint $table){
            $table->increments('id');
            $table->string('prestasi_nama');
            $table->text('desc');
            $table->integer('ekskul_id')->unsigned();
            $table->timestamps();

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
        //
    }
}
