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
        Schema::create('tax_return_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tax_return_id');
            $table->foreign('tax_return_id')->references('id')->on('tax_return')->index()->name('fk_tax_return_detail_tax_return_id');
            $table->string('name');
            $table->integer('amount');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_return_detail');
    }
};
