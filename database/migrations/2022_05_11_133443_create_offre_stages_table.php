<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_stages', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->boolean('job_paid');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table -> foreignId('companys_id') -> constrained() -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre_stages');
    }
}
