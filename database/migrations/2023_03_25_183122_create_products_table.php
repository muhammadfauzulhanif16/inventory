<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    date_default_timezone_set("Asia/Jakarta");

    Schema::create('incoming_products', function (Blueprint $table) {
      $table->ulid("id");
      $table->string("name");
      $table->foreignUlid("category_id");
      $table->bigInteger("quantity");
      $table->foreignUlid("unit_id");
      $table->bigInteger("capital");
      $table->foreignUlid("supplier_id");
      $table->timestampsTz();
    });

    Schema::create('available_products', function (Blueprint $table) {
      $table->ulid("id");
      $table->string("name");
      $table->string("slug")->unique();
      $table->foreignUlid("category_id");
      $table->bigInteger("quantity");
      $table->foreignUlid("unit_id");
      $table->bigInteger("selling_price");
      $table->timestampsTz();
    });

    Schema::create('outgoing_products', function (Blueprint $table) {
      $table->ulid("id");
      $table->string("name");
      $table->bigInteger("quantity");
      $table->bigInteger("total_price");
      $table->foreignUlid("transaction_id");
      $table->timestampsTz();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
