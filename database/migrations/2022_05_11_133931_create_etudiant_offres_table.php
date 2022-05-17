<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_offres', function (Blueprint $table) {
            $table->date('date_applied');
            $table->boolean('status');
            $table -> primary(['personnes_id', 'offre_stages_id']);
            $table -> foreignId('personnes_id') -> constrained() -> onDelete('cascade');
            $table -> foreignId('offre_stages_id') -> constrained() -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant_offres');
    }
}
