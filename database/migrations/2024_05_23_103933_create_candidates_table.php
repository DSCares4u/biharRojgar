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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete("cascade");
            $table->string('name');
            $table->string('dob');
            $table->string('email')->unique();
            $table->string('mother');
            $table->string('father');
            $table->enum('gender',['male','female','others']);
            $table->string('mobile');
            $table->enum('marital',['married','unmarried']);
            $table->string('id_mark');
            $table->enum('preferred_lang',['english','hindi']);
            $table->string('religion');
            $table->enum('community',['ur','sc','st','obc','ews']);
            $table->string('village');
            $table->string('landmark');
            $table->integer('pincode');
            $table->string('area');
            $table->string('city');
            $table->string('state');
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
        Schema::dropIfExists('candidates');
    }
};
