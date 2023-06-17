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
        Page::create(['order' => 1])->id;// user identity question
        $page2 = Page::create(['order' => 2])->id;
        $page3 = Page::create(['order' => 3])->id;
        $page4 = Page::create(['order' => 4])->id;
        $page5 = Page::create(['order' => 5])->id;

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
    }
}
