<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
      date_default_timezone_set("Asia/Jakarta");

      Schema::create('transactions', function (Blueprint $table) {
        $table->ulid("id");
        $table->string("code");
        $table->bigInteger("quantity");
        $table->bigInteger("total_price");
        $table->timestampsTz();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
