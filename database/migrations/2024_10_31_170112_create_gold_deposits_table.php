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
    Schema::create('gold_deposits', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('deposit_id');
      $table->float('gold_weight', 10, 3)->nullable();
      $table->string('gold_unit')->nullable();
      $table->tinyInteger('status')->nullable();
      $table->foreign('deposit_id')
        ->references('id')
        ->on('deposits')
        ->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('gold_deposits');
  }
};
