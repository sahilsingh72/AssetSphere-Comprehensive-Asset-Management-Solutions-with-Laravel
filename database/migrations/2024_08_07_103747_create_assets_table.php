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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->date('purchase_date');
            $table->string('status');
            $table->date('warranty_end_date');
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('location_id')->constrained('locations');
            $table->string('picture')->nullable(); // For storing picture path or URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
