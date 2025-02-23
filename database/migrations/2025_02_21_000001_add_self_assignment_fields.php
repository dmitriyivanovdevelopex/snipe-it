<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->boolean('allow_self_checkout')->default(false);
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->boolean('available_for_self_checkout')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('allow_self_checkout');
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('available_for_self_checkout');
        });
    }
};
