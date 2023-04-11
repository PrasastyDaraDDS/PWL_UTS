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
        Schema::create('roti', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('merk', 50);
            $table->string('rasa', 50);
            $table->date('kadaluarsa');
            $table->integer('berat', false);
            $table->integer('harga', false);
            $table->integer('qty', false);
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
        Schema::dropIfExists('rotis');
    }
};
