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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->unsignedBigInteger('group_id');
            // $table->foreign('group_id')
            // ->references('id')->on('groups')
            // ->onDelete('cascade');

            $table->string('surname')->nullable()->default('Pupkin');
            $table->string('name')->nullable()->default('Vasya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
