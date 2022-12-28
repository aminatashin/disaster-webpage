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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('use')->nullable();
            $table->string('significance')->nullable();
            $table->longText('description')->nullable();
            $table->longText('recomendation')->nullable();
            $table->string('email')->nullable();
            $table->string('fullname')->nullable();
            $table->integer('number')->nullable();
            $table->string('keywords')->nullable();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->longText('explanation')->nullable();
            $table->string('logo')->nullable();
            $table->string('picture')->nullable();
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
