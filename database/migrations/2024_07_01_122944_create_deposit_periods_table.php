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
        Schema::create('deposit_periods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deposit_id');
            $table->double('scheme_amount', 16, 2)->default(0.00)->nullable();
            $table->date('due_date')->nullable();
            $table->tinyInteger('is_due')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('deposit_periods');
    }
};
