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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('email')->nullable();
            $table->string('businessname')->nullable();
            $table->date('establishdate')->nullable();
            $table->text('activities')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('vatno')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('postaladdress')->nullable();
            $table->text('registration_documents')->nullable();
            $table->text('vat_registration_documents')->nullable();
            $table->string('otp')->nullable();
            $table->string('status')->nullable();
            $table->string('password')->nullable();
            $table->text('remarks')->nullable();
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
