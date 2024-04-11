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
        Schema::create('tax_return', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('tax_type_id');
            $table->unsignedInteger('tax_due_date_id');
            $table->foreign('user_id')->references('id')->on('users')->index()->name('fk_tax_return_user_id');
            $table->foreign('company_id')->references('id')->on('company')->index()->name('fk_tax_return_company_id');
            $table->foreign('tax_type_id')->references('id')->on('tax_type')->index()->name('fk_tax_return_tax_type_id');
            $table->foreign('tax_due_date_id')->references('id')->on('tax_due_date')->index()->name('fk_tax_return_tax_due_date_id');
            $table->integer('amount');
            $table->dateTime('paid_date');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_return');
    }
};
