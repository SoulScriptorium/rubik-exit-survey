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
        Schema::create('question_answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->enum('type',[
                'text', 'checkbox', 'radio'
            ]);

            $table->foreignId('question_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('next_page')->constrained(table: 'pages')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_answers');
    }
};
