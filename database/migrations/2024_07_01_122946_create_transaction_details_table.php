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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deposit_id');
            $table->string('transaction_no')->unique()->nullable();
            $table->string('receipt_upload')->nullable();
            $table->longText('remark')->nullable();
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('transaction_details');
    }
};
