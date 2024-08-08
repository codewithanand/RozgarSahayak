<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathersName');
            $table->string('email');
            $table->string('mobile');
            $table->string('gender');
            $table->string('status');
            $table->string('age');
            $table->string('qualification');
            $table->string('state_code');
            $table->string('district_code');
            $table->string('religion');
            $table->string('caste');
            $table->string('jobExperience');
            $table->string('govJobVsPrivate');
            $table->string('startupExperience');
            $table->string('privateCompaniesRole');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
