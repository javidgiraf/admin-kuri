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
        Schema::table('schemes', function (Blueprint $table) {
            $table->text('payment_terms_en')->after('scheme_type_id')->nullable();
            $table->text('payment_terms_ml')->after('payment_terms_en')->nullable();
            $table->text('description_en')->after('payment_terms_ml')->nullable();
            $table->text('description_ml')->after('description_en')->nullable();
            $table->text('terms_and_conditions_en')->after('description_en')->nullable();
            $table->text('terms_and_conditions_ml')->after('terms_and_conditions_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schemes', function (Blueprint $table) {
            $table->dropColumn([
                    'payment_terms_en', 
                    'payment_terms_ml', 
                    'description_en', 
                    'description_ml',
                    'terms_and_conditions_en',
                    'terms_and_conditions_ml'
            ]);
        });
    }
};
