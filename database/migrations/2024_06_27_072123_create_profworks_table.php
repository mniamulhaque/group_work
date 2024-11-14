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
        Schema::create('profworks', function (Blueprint $table) {
            $table->id();
            $table->integer('mainworkid');
            $table->string('date');
            $table->string('checking_code');
            $table->string('completed_code');
            $table->string('completed_code_update_time');
            $table->integer('add_show_quantity');
            $table->integer('point');
            $table->string('prof_img_one');
            $table->string('prof_img_two');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profworks');
    }
};
