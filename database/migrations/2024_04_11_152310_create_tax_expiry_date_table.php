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
        Schema::create('tax_expiry_date', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tax_type_id');
            $table->foreign('tax_type_id')->references('id')->on('tax_type')->index()->name('fk_tax_expiry_date_tax_type_id');
            $table->unsignedInteger('tax_due_date_id');
            $table->foreign('tax_due_date_id')->references('id')->on('tax_due_date')->index()->name('fk_tax_expiry_date_tax_due_date_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_expiry_date');
    }
};
