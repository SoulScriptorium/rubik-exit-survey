<?php

namespace App\Http\Livewire\Testing;

use Livewire\Component;

class ExampleLivewire extends Component
{
    public $data = null;

    public function render()
    {
        return view('testing.example-livewire');
    }

    public function loadContent(){
        sleep(3);
        $this->data ='<h1>Hello  from load content</h1>';
    }
}
