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
        Schema::create('sarkari_job_applies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete("cascade");
            $table->foreignId('sarkari_job_id')->constrained()->onDelete("cascade");
            $table->enum('payment_mode',['pay_now','pay_later'])->nullable();
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
        Schema::dropIfExists('sarkari_job_applies');
    }
};
