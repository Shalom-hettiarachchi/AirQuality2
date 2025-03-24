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
    Schema::create('sensors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('lat', 10, 7);
        $table->decimal('lng', 10, 7);
        $table->integer('aqi')->default(0); // Default AQI to 0
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
