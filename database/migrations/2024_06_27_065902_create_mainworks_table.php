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
        Schema::create('mainworks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('workid');
            $table->string('keyword');
            $table->string('worklink')->default(2);
            $table->string('workDetails');
            $table->integer('point')->default(10);
            $table->string('date');
            $table->string('search_site_img');
            $table->integer('link_click_count')->default(0);
            $table->string('added_by');
            $table->string('status');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mainworks');
    }
};
