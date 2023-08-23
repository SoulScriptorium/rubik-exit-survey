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
            'next_order' => 2,
            'prev_order' => -1,
            'title' => 'Halo!',
            'description' => 'Tuliskan data diri Anda'
        ])->id;// user identity question

        $page2 = Page::create([
            'order' => 2,
            'next_order' => 3,
            'prev_order' => 1,
            'title' => 'Kapan Anda Mulai mencari Pekerjaan Tetap ?',
            //'description' => 'How we spend our days is, of course, how we spend our lives.'
        ])->id;
        $page3 = Page::create([
            'order' => 3,
            'next_order' => 5,
            'prev_order' => 2,
            'title' => 'Apa alasan utama anda Tidak mencari pekerjaan setelah lulus kuliah ?',
            //'description' => 'The secret of being miserable is to have the leisure to bother about whether you are happy or not'
        ])->id;
        $page4 = Page::create([
            'order' => 4,
            'next_order' => 5,
            'prev_order' => 2,
            'title' => 'Kira kira berapa bulan ?',
            //'description' => "Nothing, to my way of thinking, is a better proof of a well ordered mind than a man's ability to stop just where he is and pass some time in his own company"
        ])->id;
        $page5 = Page::create([
            'order' => 5,
            'next_order' => 4,
            'prev_order' => 6,
            'title' => 'Saat anda membutuhkan info peluang kerja, bagaimana anda akan mencarinya ? (jawaban bisa lebih dari satu)',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $page6 = Page::create([
            'order' => 6,
            'next_order' => 7,
            'prev_order' => 5,
            'title' => 'Bagaimana anda mengambarkan situasi anda saat ini ?',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $page7 = Page::create([
            'order' => 7,
            'next_order' => 8,
            'prev_order' => 6,
            'title' => 'Apakah anda bekerja saat ini ?',
            'description' => 'Silahkan menjawab "Ya" jika anda bekerja sendiri ataupun sudah diterima kerja tetapi belum mulai bekerja'
        ])->id;
/*
        $page8 = Page::create([
            'order' => 8,
            'next_order' => 11,
            'prev_order' => 7,
            'title' => 'Tuliskan beberapa informasi terkait istansi tempat Anda bekerja',
            'description' => 'tuliskan "Freelance" untuk usaha sendiri'
        ])->id;

        $page9 = Page::create([
            'order' => 9,
            'next_order' => 10,
            'prev_order' => 7,
            'title' => 'Apakah anda aktif mencari pekerjaan dalam 2 minggu terakhir ?',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $page10 = Page::create([
            'order' => 10,
            'next_order' => 11,
            'prev_order' => 9,
            'title' => 'Jika Anda sedang menunggu hasil lamaran kerja, pada instansi dan jabatan apa saja Anda Mengirimkannya ?',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $page11 = Page::create([
            'order' => 11,
            'next_order' => 12,
            'prev_order' => 10,
            'title' => 'Seberapa erat hubungan antara bidang studi dengan pekerjaan Anda saat ini /yang akan Anda lamar ?',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;

        $page12 = Page::create([
            'order' => 12,
            'next_order' => -1,
            'prev_order' => 11,
            'title' => 'Tuliskan Informasi terkait studi lanjut Anda :',
            //'description' => 'If you want to accomplish uncommon things, you need to live everyday of your life uncommonly. If you spend your day like everyone else, you will end up like everyone else'
        ])->id;*/

        $q2 = Question::create([
            'label'=>'Kapan Anda mulai pekerjaan tetap?',
            'type' => 'radio',
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
            'type' => 'text',
            'question_id' => $q2,
            'next_page' => $page3
        ]);


        $q3 = Question::create([
            'label'=>'Apa alasan utama Anda tidak mencari pekerjaan setelah lulus kuliah?',
            'type' => 'radio',
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
            'label' => 'Saya belum mencari pekerjaan',
            'type' => 'radio',
            'question_id' => $q3,
            'next_page' => $page5
        ]);
        Answer::create([
            'label' => 'Lainnya',
            'type' => 'text',
            'question_id' => $q3,
            'next_page' => $page5
        ]);

        $q4 = Question::create([
            'label'=>'Kira kira berapa bulan?',
            'type' => 'text',
            'page_id' => $page4
        ])->id;
        Answer::create([
            'label' => 'Berapa bulan',
            'type' => 'text',
            'question_id' => $q4,
            'next_page' => $page5
        ]);

        $q5 = Question::create([
            'label'=>'Saat anda membutuhkan info peluang kerja, bagaimana anda akan mencarinya ?',
            'type'=>'checkbox',
            'page_id' => $page5
        ])->id;
        Answer::create([
            'label' => 'Melalui iklan di koran/majalah, brosur',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Melamar ke prusahaan tanpa mengetahui lowongan yang ada',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Pergi ke bursa / pameran kerja',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Mencari lewat internet / iklan online / milis',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Dihubungi oleh perusahaan',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Menghubungi agen tenaga kerja komersial / swasta',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Memperoleh informasi dari Rubik / kantor pengembangan karir Universitas',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Membangun Network sejak masih kuliah',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Melalui relasi (misalnya : Dosen, orang tua, saudara, teman, dll)',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Membangun bisnis sendiri',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Melalui penempatan kerja atau magang',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah',
            'type' => 'checkbox',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);
        Answer::create([
            'label' => 'Lainnya',
            'type' => 'text',
            'question_id' =>$q5,
            'next_page' => $page6
        ]);

        $q6 = Question::create([
            'label'=>'Bagaimana anda mengambarkan situasi anda saat ini ?',
            'type'=>'radio',
            'page_id' => $page6
        ])->id;
        Answer::create([
            'label' => 'Saya masih belajar / melanjutkan kuliah profesi atau pasca sarjana',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Saya Menikah',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Saya studi lanjut',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Saya sekarang sedang mencari pekerjaan',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Saya sudah mendapatkan pekerjaan saat ini',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'saya akan berwirausaha setelah lulus',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Lainnya',
            'type' => 'text',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);


        /* Seven */
        $q7 = Question::create([
            'label'=>'Apakah anda bekerja saat ini ?',
            'type'=>'radio',
            'page_id' => $page7
        ])->id;
        Answer::create([
            'label' => 'Ya',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
        Answer::create([
            'label' => 'Tidak',
            'type' => 'radio',
            'question_id' =>$q6,
            'next_page' => $page7
        ]);
    }
}
