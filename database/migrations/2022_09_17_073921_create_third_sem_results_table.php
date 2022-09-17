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
        Schema::create('third_sem_results', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('computer_systems_and_computer_security');
            $table->string('it_project_management');
            $table->string('principles_of_management_and_applied_economics');
            $table->string('rapid_application_development');
            $table->string('principles_of_software_engineering');
            $table->string('object_oriented_analysis_and_design');
            $table->string('group_project');
            $table->string('english_for_technology_3');
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
        Schema::dropIfExists('third_sem_results');
    }
};
