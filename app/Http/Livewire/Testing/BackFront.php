<?php

namespace App\Http\Livewire\Testing;

use App\Models\Page;
use Livewire\Component;

class BackFront extends Component
{
    public $name, $nim, $email, $phone, $birth_date;


    public $page_number, $page, $questions, $answer_options;
    public $next_page;
    public $prev_page;
    public $last_page = false;
    public $last_page_number;


    public $selectedRadio = null;
    public $inputText = null;

    public function mount() {
        $this->page_number = 1;
        $this->loadPage(1);

        /* Get last page */
        $last_page = Page::orderBy('order', 'desc')->first();
        $this->last_page_number = $last_page->order;
    }

    public function render(){
        return view('testing.back-front');
    }

    public function selectRadio($value, $next_page){
        $this->selectedRadio = $value;
        $this->next_page = $next_page;
    }

    public function loadPage($order) {
        $this->page = Page::with('questions.answers')->where('order', $order)->firstOrFail();
        $this->page_number = $order;
    }

    public function prevPage(){
        $this->next_page = $this->prev_page + 1;
        $this->loadPage($this->prev_page);
        $this->prev_page = $this->prev_page - 1;

        $this->last_page = $this->next_page > $this->last_page_number;
    }

    public function nextPage($page_number = 0) {
        $this->prev_page = $this->page_number;
        if ($page_number == 0){
            $this->loadPage($this->next_page);
            $this->next_page = $this->next_page + 1;
        }else {
            $this->loadPage($page_number);
            $this->next_page = $page_number + 1;
        }
        $this->last_page = $this->next_page > $this->last_page_number;
    }

    public function submitQuestion($isNext, $number_page) {

    }

    public function submitIdentity() {
        /*
        $this->validate([
            'name' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth_date' => 'required',
        ]);*/

        $this->next_page = 2;
        $this->nextPage();
    }

    public function done() {

    }
}
