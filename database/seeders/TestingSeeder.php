<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Page;
use App\Models\Question;
use App\Models\Responder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 responders
        $responders = Responder::factory()->count(5)->create();

        // Survey
        Page::factory(5)->has(
            Question::factory(3)->has(
                Answer::factory(2)->hasAttached($responders, [
                    'text' => fake()->sentence,
                    'checked' => fake()->boolean,
                ])->state(function () {
                    return ['next_page' => random_int(0, 1) == 1 ? Page::inRandomOrder()->first()->id : null];
                })
            ))->create();
    }
}
