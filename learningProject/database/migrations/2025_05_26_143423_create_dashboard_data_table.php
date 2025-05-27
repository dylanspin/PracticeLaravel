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
        Schema::create('dashboard_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dash_board_title', 255);
            $table->string('support_email', 255);
            $table->string('footer_text', 255);
            $table->string('default_language', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard_data');
    }
};
