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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable();
            $table->enum('type',[
                'text', 'checkbox', 'radio'
            ])->default('text');

            $table->enum('type_input', [
                'text', 'date'
            ])->default('text');

            $table->foreignId('question_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('next_page')->nullable()
                ->constrained(table: 'pages')
                ->cascadeOnUpdate()->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
