<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lek', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->text('opis_leku');
            $table->string('rozmiar'); 
            $table->integer('ilosc'); 
            $table->decimal('cena', 8, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leks');
    }
};
