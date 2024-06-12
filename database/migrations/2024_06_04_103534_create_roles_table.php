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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('title');
            $table->integer('no_of_post');
            $table->integer('min_experience');
            $table->integer('max_experience');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->string('gender');
            $table->string('preferred_lang');
            $table->string('type');
            $table->string('qualification');
            $table->foreignId('hire_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('roles');
    }
};
