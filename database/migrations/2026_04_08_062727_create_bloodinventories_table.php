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
        Schema::create('bloodinventories', function (Blueprint $table) {
            $table->id();
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']);
            $table->enum('status', ['Available', 'Unavailable', 'Expired']);
            $table->date('expiry_date');
            $table->date('collection_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodinventories');
    }
};
