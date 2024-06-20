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
        Schema::table('sellers', function (Blueprint $table) {
            $table->after("token", function ($table) {
                $table->string('bank_name')->nullable();
                $table->string('account_number')->nullable();
                $table->string('account_holder_name')->nullable();
                $table->string('bank_Qr')->nullable();
                $table->string('esewa_id')->nullable();
                $table->string('esewa_Qr')->nullable();
                $table->string('khalti_id')->nullable();
                $table->string('khalti_Qr')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sellers', function (Blueprint $table) {
            //
        });
    }
};
