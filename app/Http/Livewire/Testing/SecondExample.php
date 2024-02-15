<?php

namespace App\Http\Livewire\Testing;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class SecondExample extends Component
{
    use WithPagination;


    public function render()
    {
        return view('testing.second-example', [
            'data' => Page::with('questions.answers')->paginate(1)
        ]);
    }
}
