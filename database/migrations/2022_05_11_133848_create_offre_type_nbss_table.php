<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreTypeNbssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_type_nbss', function (Blueprint $table) {
            $table->integer('nb');
            $table -> primary(['offre_stages_id', 'type_stages_id']);
            $table -> foreignId('offre_stages_id') -> constrained() -> onDelete('cascade');
            $table -> foreignId('type_stages_id') -> constrained() -> onDelete('cascade');
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
        Schema::dropIfExists('offre_type_nbss');
    }
}
