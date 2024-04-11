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
        Schema::create('tax_payer', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('company_id');
            $table->foreign('user_id')->references('id')->on('users')->index()->name('fk_tax_payer_user_id');
            $table->foreign('company_id')->references('id')->on('company')->index()->name('fk_tax_payer_company_id');
            $table->string('payer_type');
            $table->integer('amount');
            $table->dateTime('paid_date');
            $table->tinyInteger('status');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_payer');
    }
};
