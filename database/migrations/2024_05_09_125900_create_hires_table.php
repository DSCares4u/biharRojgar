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
        Schema::create('hires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete("cascade");
            $table->string('date_of_start');
            $table->string('city');
            $table->string('state');
            $table->longText('description');
            $table->string('company_name');
            $table->string('website');
            $table->string('mobile');
            $table->string('alt_mobile');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->enum('payment_mode',['pay_now','pay_later'])->nullable();            
            $table->foreignId('hire_plan_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('hires');
    }
};
