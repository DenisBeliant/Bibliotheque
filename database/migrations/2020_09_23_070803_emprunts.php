<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Emprunts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->on('emprunteurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('livres_id')
                ->on('livres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dateTime('date_location');
            $table->dateTime('fin_location');
            $table->dateTime('date_rendue')->nullable();
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
        Schema::dropIfExists('emprunts');
    }
}
