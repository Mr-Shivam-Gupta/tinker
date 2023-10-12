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
        $table->string('name', 50)->collation('latin1_swedish_ci');
        $table->string('email', 50)->collation('latin1_swedish_ci');
        $table->string('phone', 50)->collation('latin1_swedish_ci');
        $table->string('subject', 50)->collation('latin1_swedish_ci');
        $table->string('message', 50)->collation('latin1_swedish_ci');
        $table->string('ip_address', 50)->nullable()->default(null)->collation('latin1_swedish_ci');
        $table->string('browser', 50)->collation('latin1_swedish_ci');
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
