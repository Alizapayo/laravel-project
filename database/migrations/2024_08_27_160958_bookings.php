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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id'); // เพิ่มคอลัมน์สำหรับชื่อช่าง
            $table->date('date');
            $table->time('time');
            $table->string('phone_number');
            $table->text('additional_requests')->nullable();
            $table->string('price')->nullable();
            
            $table->timestamps();
        
            // กำหนด Foreign Key
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Foreign Key ช่าง
            $table->foreign('price')->references('id')->on('service_prices')->onDelete('cascade');

            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
