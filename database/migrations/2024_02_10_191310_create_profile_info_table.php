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
        Schema::create('profile_info', function (Blueprint $table) {
            $table->id();
            $table->string('dob');
            $table->string('blood_type');
            $table->string('drug_allergies');
            $table->string('food_allergies');
            $table->string('gender');
            $table->string('image');
            $table->integer('height');
            $table->integer('weight');
            $table->foreignId('patient_id')->constrained("patients")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('profile_info');
    }
};
