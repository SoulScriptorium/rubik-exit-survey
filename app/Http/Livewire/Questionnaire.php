<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Questionnaire extends Component
{
    public $name, $gender, $hobby, $birth_date;
    public function render()
    {
        return view('testing.basic-form');
        //return view('questionnaire');
    }
}
