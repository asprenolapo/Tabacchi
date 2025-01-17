<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cigars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 6 , 2);
            $table->string('madein');
            $table->string('vitoladegalera')->nullable();
            $table->string('cepo')->nullable();
            $table->string('tripa')->nullable();
            $table->integer('packaging')->default(0);
            $table->string('intensity');
            $table->integer('smoketime');
            $table->longText('flavors');
            $table->boolean('bestSellers');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cigars');
    }
};
