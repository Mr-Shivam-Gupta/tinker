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
        Schema::create('contact_tbl', function (Blueprint $table) {
            $table->id();
        $table->string('name', 50);
        $table->string('email', 50);
        $table->string('phone', 50);
        $table->string('subject', 50);
        $table->string('message', 50);
        $table->string('ip_address', 50)->nullable()->default(null);
        $table->string('browser', 50);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_tbl');
    }
};
