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
        Schema::create('fourth_sem_results', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('web_application_development');
            $table->string('enterprise_architecture');
            $table->string('professional_issues_in_it');
            $table->string('computer_architecture');
            $table->string('mobile_application_development');
            $table->string('free_and_open_source_systems');
            $table->string('individual_project');
            $table->string('english_for_technology_4');
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
        Schema::dropIfExists('fourth_sem_results');
    }
};
