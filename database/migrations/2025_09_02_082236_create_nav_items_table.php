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
        Schema::create('nav_items', function (Blueprint $table) {
            $table->id();
             $table->string('title'); // The display name of the menu
                $table->string('url')->nullable(); // Link the menu should go to
                $table->unsignedBigInteger('parent_id')->nullable(); // For dropdowns
                $table->integer('order')->default(0); // Sorting order
                $table->string('role')->nullable(); // Optional: restrict by user role
                        $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nav_items');
    }
};
