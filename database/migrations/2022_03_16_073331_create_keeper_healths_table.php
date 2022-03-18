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
        Schema::create('keeper_healths', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('weight');
            $table->float('bmi');
            $table->float('bodyFatRate');
            $table->integer('bodyAge');
            $table->float('muscle');
            $table->float('boneMass');
            $table->float('water');
            $table->float('visceralFat');
            $table->integer('bmr');
            $table->float('protein');
            $table->float('subcutaneousFat');
            $table->float('weightWithoutFat');
            $table->float('skeletalMuscleRate');
            $table->integer('score');
            $table->date('date');
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
        Schema::dropIfExists('keeper_healths');
    }
};
