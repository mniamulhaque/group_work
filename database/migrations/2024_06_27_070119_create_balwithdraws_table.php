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
        Schema::create('balwithdraws', function (Blueprint $table) {
            $table->id();
            $table->string('peymentGetwayName');
            $table->integer('recivedAccountNumber');
            $table->integer('amount');
            $table->integer('total_amount');
            $table->string('apply_by');
            $table->string('approve_by');
            $table->integer('status');
            $table->integer('user_id');
            $table->string('member_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balwithdraws');
    }
};
