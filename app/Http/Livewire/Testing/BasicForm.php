<?php

namespace App\Http\Livewire\Testing;

use Livewire\Component;

class BasicForm extends Component
{
    public $name, $gender, $hobby, $birth_date;

    public function render()
    {
        return view('testing.basic-form');
    }
}
