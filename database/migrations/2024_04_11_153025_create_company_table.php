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
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tax_code');
            $table->string('name');
            $table->string('telephone');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('website_url');
            $table->string('business');
            $table->string('representative');
            $table->tinyInteger('is_active');
            $table->tinyInteger('failure_num');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
