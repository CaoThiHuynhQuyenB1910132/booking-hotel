<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up(): void
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->string('room_type_id');
            $table->integer('room_quantity');
            $table->date('date');
            $table->integer('room_price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
