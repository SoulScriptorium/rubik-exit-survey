<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Question;
use App\Models\Responder;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
        $data = Responder::with('answers')->find(1);
/*
        $questionsAndAnswers = $data->answers->map(function ($answer) {
            return [
                'question' => $answer->question,
                'answer' => $answer,
                'responderAnswers' => $answer->answer->text,
            ];
        });

        $a = Page::with(['questions' => function ($query) {
            return $query->with(['answers' => function ($query) {
                return $query->with('nextPage');
            }]);
        }])->find(2);

        $b = Question::with(['answers.responders'])
            ->get();
        */
        //$page = Page::with(['questions.answers'])->get();
        //$page = Page::with('questions.answers')->where('order', 2)->firstOrFail();
        $page = Page::orderBy('order', 'desc')->first();
        return $page;
    }
}
