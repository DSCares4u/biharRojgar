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
        Schema::create('manual_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('form');
            $table->string('name');
            $table->string('mobile');
            $table->string('id_proof');
            $table->string('certificate');
            $table->string('photo');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('manual_jobs');
    }
};
