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
            $table->string('brand')->nullable();           
            $table->decimal('price', 6 , 2);
            $table->enum('madein', ['Italia','Estero','Altro']);
            $table->string('origin_description')->nullable(); 
            $table->string('manufacturing')->nullable();
            $table->string('band')->nullable();
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
