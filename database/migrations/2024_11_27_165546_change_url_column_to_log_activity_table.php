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
        Schema::table('log_activities', function (Blueprint $table) {
            $table->dropColumn('url');
        });

        Schema::table('log_activities', function (Blueprint $table) {
            $table->text('url')->after('subject')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('log_activity', function (Blueprint $table) {
            Schema::table('log_activities', function (Blueprint $table) {
                $table->dropColumn('url');
            });
    
            Schema::table('log_activities', function (Blueprint $table) {
                $table->string('url')->after('subject');
            });
        });
    }
};
