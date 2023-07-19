<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up(): void
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->id();
            $table->string('room_id');
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->string('desc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_details');
    }
};
