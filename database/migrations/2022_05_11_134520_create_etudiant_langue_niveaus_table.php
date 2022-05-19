<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantLangueNiveausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_langue_niveaus', function (Blueprint $table) {
            $table->string('niveau');
            $table -> primary(['etudiants_id', 'langues_id']);
            $table -> foreignId('etudiants_id') -> constrained() -> onDelete('cascade');
            $table -> foreignId('langues_id') -> constrained() -> onDelete('cascade');
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
        Schema::dropIfExists('etudiant_langue_niveaus');
    }
}
