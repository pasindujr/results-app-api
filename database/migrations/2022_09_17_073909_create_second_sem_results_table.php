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
        Schema::create('second_sem_results', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('object_oriented_programming');
            $table->string('graphics_and_multimedia');
            $table->string('data_structures_and_algorithm');
            $table->string('system_analysis_and_design');
            $table->string('data_communication_and_networking');
            $table->string('statistics_for_it');
            $table->string('human_values_and_professional_ethics');
            $table->string('english_for_technology_2');
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
        Schema::dropIfExists('second_sem_results');
    }
};
