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
        Schema::create('yojna_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('yojna_id')->constrained()->onDelete("cascade");
            $table->string('name');
            $table->string('dob');
            $table->string('photo');
            $table->string('id_proof');
            $table->string('mobile');
            $table->string('email');
            $table->string('landmark')->nullable();
            $table->string('village');
            $table->string('pincode');
            $table->string('city');
            $table->string('state');
            $table->enum('gender',['male','female','others']);
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
        Schema::dropIfExists('yojna_forms');
    }
};
