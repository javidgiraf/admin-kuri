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
        Schema::create('schemes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scheme_type_id');
            $table->string('title_en')->nullable();
            $table->string('title_ml')->nullable();
            $table->integer('total_period')->default(0)->nullable();
            $table->longtext('payment_terms_en')->nullable();
            $table->longtext('payment_terms_ml')->nullable();
            $table->longtext('description_en')->nullable();
            $table->longtext('description_ml')->nullable();
            $table->longtext('terms_and_conditions_en')->nullable();
            $table->longtext('terms_and_conditions_ml')->nullable();
            $table->string('pdf_file')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->foreign('scheme_type_id')->references('id')->on('scheme_types')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemes');
    }
};
