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
    Schema::create('scheme_settings', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('scheme_id');
      $table->float('max_payable_amount')->nullable();
      $table->float('min_payable_amount')->nullable();
      $table->float('denomination')->nullable();
      $table->integer('due_duration')->nullable();
      $table->integer('start_from')->nullable();
      $table->integer('end_to')->nullable();
      $table->tinyInteger('status');
      $table->foreign('scheme_id')->references('id')->on('schemes')->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('scheme_settings');
  }
};
