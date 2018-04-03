<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('animals', function (Blueprint $table) {
        //     $table->unsignedInteger('ownerId')->nullable();
        //     $table->foreign('ownerId')->references('id')->on('owners');
        // });
        // Schema::table('clinics', function (Blueprint $table) {
        //     $table->unsignedInteger('gestionnaireId')->nullable();
        //     $table->foreign('gestionnaireId')->references('id')->on('employees');
        // });
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedInteger('clinicId')->nullable();
            $table->foreign('clinicId')->references('id')->on('clinics');
        });
        Schema::table('exams', function (Blueprint $table) {
            $table->unsignedInteger('examiner')->nullable();
            $table->foreign('examiner')->references('id')->on('employees');
        });
        Schema::table('exams', function (Blueprint $table) {
            $table->unsignedInteger('animalId')->nullable();
            $table->foreign('animalId')->references('id')->on('animals');
        });
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedInteger('animalId')->nullable();
            $table->foreign('animalId')->references('id')->on('animals');
        });
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedInteger('examId')->nullable();
            $table->foreign('examId')->references('id')->on('exams');
        });
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedInteger('treatmentId')->nullable();
            $table->foreign('treatmentId')->references('id')->on('treatments');
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
    }
}
