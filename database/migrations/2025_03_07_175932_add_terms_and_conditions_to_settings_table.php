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
        Schema::table('settings', function (Blueprint $table) {
           $table->text('terms_and_conditions_en')->after('option_value')->nullable();
           $table->text('terms_and_conditions_ml')->after('terms_and_conditions_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['terms_and_conditions_en', 'terms_and_conditions_ml']);
        });
    }
};
