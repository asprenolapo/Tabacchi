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
            $table->string('tripa')->nullable();
            $table->longText('description');
            //$table->string('img')->default('/asset/default.jpg');
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
