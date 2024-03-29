<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantSkillsNiveausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_skills_niveaus', function (Blueprint $table) {
            $table->string('niveau');
            $table->integer('nb_years');
            $table -> primary(['etudiants_id', 'skills_id']);
            $table -> foreignId('etudiants_id') -> constrained() -> onDelete('cascade');
            $table -> foreignId('skills_id') -> constrained() -> onDelete('cascade');
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
        Schema::dropIfExists('etudiant_skills_niveaus');
    }
}
