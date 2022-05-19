<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table -> id();
            $table->string('adresse');
            $table->string('tel');
            $table -> string('nom');
            $table -> string('prenom');
            $table -> string('email');
            $table -> string('logo');
            $table -> string('cin');
            $table -> foreignId('niveauxes_id') -> constrained() -> onDelete('cascade');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
