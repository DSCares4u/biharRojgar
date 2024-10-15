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
            $table->string('mobile');
            $table->string('wtsp_mobile');
            $table->string('email');
            $table->string('city');
            $table->string('state');
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
        Schema::dropIfExists('yojna_forms');
    }
};
