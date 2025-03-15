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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id');
            $table->unsignedBigInteger('order_id')->unique()->nullable();
            $table->string('user_type')->nullable();
            $table->string('payment_type')->nullable();
            $table->double('total_scheme_amount', 16, 2)->default(0.00)->nullable();
            $table->double('service_charge', 16, 2)->default(0.00)->nullable();
            $table->double('gst_charge', 16, 2)->default(0.00)->nullable();
            $table->double('final_amount', 16, 2)->default(0.00)->nullable();
            $table->dateTime('date_of_payment')->nullable();
            $table->date('paid_at')->nullable();
            $table->longText('remarks')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('subscription_id')
                ->references('id')
                ->on('user_subscriptions')
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
        Schema::dropIfExists('deposits');
    }
};
