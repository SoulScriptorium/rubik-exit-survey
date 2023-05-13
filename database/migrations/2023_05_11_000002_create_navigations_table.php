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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('question_navigation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('next_page')->constrained(table: 'pages')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('prev_page')->constrained(table: 'pages')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_navigation');
        Schema::dropIfExists('pages');
    }
};
