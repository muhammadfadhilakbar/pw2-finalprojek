<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->integer('type_id');
            $table->integer('cost_per_day');
            $table->integer('year');
            $table->string('license_plate');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
