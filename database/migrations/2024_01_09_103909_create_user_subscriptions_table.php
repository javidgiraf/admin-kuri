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
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('scheme_id');
            $table->float('subscribe_amount')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('reason')->nullable();
            $table->dateTime('claim_date')->nullable();
            $table->boolean('claim_status')->default(false);
            $table->integer('same_scheme')->nullable();
            $table->tinyInteger('is_closed')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('scheme_id')
                ->references('id')
                ->on('schemes')
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
        Schema::dropIfExists('user_subscriptions');
    }
};
