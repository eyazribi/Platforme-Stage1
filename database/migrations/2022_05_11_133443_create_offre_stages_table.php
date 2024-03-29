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
            $table->longText('description');
       //     $table->date('start_date');
         //   $table->date('end_date');
            $table -> string('tags');
            $table -> foreignId('companies_id') -> constrained() -> onDelete('cascade');
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
        Schema::dropIfExists('offre_stages');
    }
}
