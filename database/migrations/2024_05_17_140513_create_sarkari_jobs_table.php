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
            $table->integer('no_of_post');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->string('qualification');
            $table->string('skills');
            $table->integer('fees');
            $table->string('logo');
            $table->string('opening_date');
            $table->string('closing_date');
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
