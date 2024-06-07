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
            $table->string('name');
            $table->string('date_of_start');
            $table->string('city');
            $table->string('state');
            $table->string('description');
            $table->string('company_name');
            $table->string('website');
            $table->string('mobile');
            $table->string('alt_mobile');
            $table->string('email');
            $table->string('logo');
            $table->string('isApproved')->default(false);
            $table->enum('payment_mode',['pay_now','pay_later']);
            $table->foreignId('hire_plan_id')->constrained()->onDelete("cascade");
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
