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
        Schema::create('domain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('name', 100);
            $table->string('extension', '10');
            $table->enum('status', ['valid', 'expired']);
            $table->string('host', 50);
            $table->string('ip_address', 50);
            $table->date('created');
            $table->date('expiration');
            $table->date('updated');

            $table->foreign('owner_id')->references('id')->on('owner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain');
    }
};
