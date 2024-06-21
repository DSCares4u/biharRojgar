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
        Schema::create('sarkari_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->integer('no_of_post');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->string('qualification');
            $table->string('skills');
            $table->integer('fees');
            $table->integer('r_fees')->nullable();
            $table->string('logo')->nullable();
            $table->string('job_type');
            $table->string('location');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->string('opening_date');
            $table->string('closing_date');
            $table->softDeletes();
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
        Schema::dropIfExists('sarkari_jobs');
    }
};
