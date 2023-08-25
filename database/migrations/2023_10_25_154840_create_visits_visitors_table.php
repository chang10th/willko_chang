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
        // Création d'une table pivot due à une relation N N (MCD)
        Schema::create('visits_visitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visit_id')->default(0);
            $table->unsignedBigInteger('visitor_id')->default(0);
            $table->timestamps();

            $table->foreign('visit_id', 'vv_ibfk_1')->references('id')->on('visits');
            $table->foreign('visitor_id', 'vv_ibfk_2')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits_visitors');
    }
};
