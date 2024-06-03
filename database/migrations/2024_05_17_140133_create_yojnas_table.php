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
        Schema::create('yojnas', function (Blueprint $table) {
            $table->id();
            $table->string('hname');
            $table->string('ename');
            $table->string('logo');
            $table->longText('features');
            $table->longText('description');
            $table->longText('documents');
            $table->longText('fees');
            $table->longText('market_fees');
            $table->foreignId('yojna_category_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('yojnas');
    }
};
