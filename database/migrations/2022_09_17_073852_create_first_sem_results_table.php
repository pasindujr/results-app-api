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
        Schema::create('first_sem_results', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('personal_computer_application');
            $table->string('computer_hardware');
            $table->string('structured_programming');
            $table->string('data_representation_and_organization');
            $table->string('database_management_system');
            $table->string('web_development');
            $table->string('mathematics_for_computing');
            $table->string('english_for_technology_1');
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
        Schema::dropIfExists('first_sem_results');
    }
};
