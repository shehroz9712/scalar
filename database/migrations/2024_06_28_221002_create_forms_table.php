<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->string('partner');
            $table->string('kids');
            $table->string('support');
            $table->string('annualIncome');
            $table->string('homeOwnership');
            $table->text('advisor');
            $table->string('localAdvisor');
            $table->string('languagePreference');
            $table->text('otherConsiderations');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('birthYear');
            $table->string('zipCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
