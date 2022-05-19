<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table-> string('email');
            $table->string('tel');
            $table->integer('company_size');
            $table->string('lien');
            $table -> string('logo') -> nullable();
            $table->string('description');
            $table->date('founded');
            $table-> string('nom');
            $table -> string('password');
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
        Schema::dropIfExists('companys');
    }
}
