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
        Schema::create('disaster', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('use');
            $table->string('significance');
            $table->string('description');
            $table->string('recomendation');
            $table->string('email');
            $table->string('fullname');
            $table->integer('number');
            $table->string('keywords');
            $table->string('link');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('disaster');
    }
};
