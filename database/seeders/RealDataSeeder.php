<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Page;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'order' => 1,
            'title' => 'Pick three of your favorite Star Wars films',
            'description' => 'You could leave life right now. Let that determine what you do and say and think.'
        ])->id;// user identity question

        $page2 = Page::create([
            'order' => 2,
            'title' => 'This is page 2',
            'description' => 'How we spend our days is, of course, how we spend our lives.'
        ])->id;
        $page3 = Page::create([
            'order' => 3,
            'title' => 'Third page',
            'description' => 'The secret of being miserable is to have the leisure to bother about whether you are happy or not'
        ])->id;
        $page4 = Page::create([
            'order' => 4,
            'title' => 'Fourth page desu',
            'description' => "Nothing, to my way of thinking, is a better proof of a well ordered mind than a man's ability to stop just where he is and pass some time in his own company"
        ])->id;
        $page5 = Page::create([
            'order' => 5,
            'title' => 'This is the last one desu',
            'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $q2 = Question::create([
            'label'=>'Kapan Anda mulai pekerjaan tetap?',
            'type' => 'multiple',
            'page_id' => $page2
        ])->id;
        Answer::create([
            'label' => 'Sebelum wisuda',
            'type' => 'radio',
            'question_id' => $q2,
            'next_page' => $page4
        ]);
        Answer::create([
            'label' => 'Setelah wisuda',
            'type' => 'radio',
            'question_id' => $q2,
            'next_page' => $page4
        ]);
        Answer::create([
            'label' => 'Saya tidak mencari pekerjaan',
            'type' => 'radio',
            'question_id' => $q2,
            'next_page' => $page3
        ]);


        $q3 = Question::create([
            'label'=>'Apa alasan utama Anda tidak mencari pekerjaan setelah lulus kuliah?',
            'type' => 'multiple',
            'page_id' => $page3
        ])->id;
        Answer::create([
            'label' => 'Saya memiliki bisnis sendiri',
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);
        Answer::create([
            'label' => 'Saya sudah memperoleh pekerjaan sebelum lulus',
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);
        Answer::create([
            'label' => 'Saya melanjutkan kuliah',
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);
        Answer::create([
            'label' => 'Saya belum melanjutkan kuliah',
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);
        Answer::create([
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);

        $q4 = Question::create([
            'label'=>'Kira kira berapa bulan?',
            'type' => 'single',
            'page_id' => $page4
        ])->id;
        Answer::create([
            'label' => 'Berapa',
            'type' => 'text',
            'question_id' => $q4,
            'next_page' => $page5
        ]);

        $q5 = Question::create([
            'label'=>'Done',
            'type'=>'single',
            'page_id' => $page5
        ])->id;
        Answer::create([
            'label' => 'Saya memiliki bisnis sendiri',
            'type' => 'text',
            'question_id' =>$q5,
            'next_page' => $page5
        ]);
    }
}
