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
        Schema::create('salle', function (Blueprint $table) {
            $table->id();
            $table->string('nom_du_salle');
            $table->string('adresse');
            $table->string('nbr_place');
            $table->string('equipements');
            $table->string('ville');
            $table->string('etage');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('salle');
    }
};
