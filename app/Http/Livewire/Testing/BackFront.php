<?php

namespace App\Http\Livewire\Testing;

use App\Models\Page;
use App\Models\Responder;
use Livewire\Component;

class BackFront extends Component
{
    public $stack_navigation = [];

    public $name, $nim, $email, $phone, $birth_date;
    public $responder_id;

    public $current_page_number, $page, $questions, $answer_options;
    public $next_page;
    public $prev_page;
    public $last_page = false;
    public $last_page_number;


    public $selectedAnswers = [];
    public $inputText = [];
    public $selectedOther = false; // it means the selected option has text => then it must be required if selected

    public function mount() {
        $this->current_page_number = 1;
        $this->loadPage(1);

        $this->stack_navigation[] = $this->current_page_number;

        /* Get last page */
        $last_page = Page::orderBy('order', 'desc')->first();
        $this->last_page_number = $last_page->order;
    }

    public function render(){
        return view('testing.back-front');
    }

    public function selectRadio($value, $next_page, $answer_type){
        $this->selectedRadio = $value;
        $this->next_page = $next_page;

        $this->selectedOther = $answer_type == 'text';
    }

    public function loadPage($order) {
        $this->page = Page::with('questions.answers')->where('order', $order)->firstOrFail();
        $this->next_page = $order + 1;
        $this->current_page_number = $order;

        $this->last_page = $this->next_page >= $this->last_page_number;
    }

    public function prevPage(){
        $recent_page = count($this->stack_navigation) - 1;
        $this->loadPage($this->stack_navigation[$recent_page - 1]);
        unset($this->stack_navigation[$recent_page]);
        $this->prev_page = $this->stack_navigation[count($this->stack_navigation) - 1];

        $this->loadAnswered();
    }

    public function nextPage($page_number = 0) {
        $new_page = $page_number == 0 ? $this->next_page : $page_number;

        $this->stack_navigation[] = $new_page;
        /*
        if ($this->current_page_number > 1){
            $this->submitQuestion();
        }
        */
        $this->loadPage($new_page);


    }

    public function submitQuestion() {

        if (isset($this->selectedAnswers)){
            foreach ($this->page->questions as $question){
                switch ($question->type){
                    case 'radio':
                        if ($this->selectedOther){
                            $this->validate([
                                'selectedAnswers.'.$question->id => 'required'
                            ]);
                        } else {
                            $this->validate([
                                'selectedAnswers.'.$question->id => 'required',
                                'inputText.'.$question->id => 'required'
                            ]);
                        }
                    break;
                }
            }
        }

    }

    public function submitIdentity() {

        $this->validate([
            'name' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth_date' => 'required',
        ]);

        $data = [
            'name' => $this->name,
            'nim' => $this->nim,
            'email' => $this->email,
            'phone' => $this->phone,
            'birth' => $this->birth_date
        ];

        if (is_null($this->responder_id)){
            $this->responder_id =
                Responder::create($data)->id;
        } else {
            Responder::where('id', $this->responder_id)->update($data);
        }



        $this->next_page = 2;
        $this->nextPage();
    }

    public function loadAnswered() {
        // if question identity
        if ($this->prev_page == 1){
            $responder = Responder::findOrFail($this->responder_id);
            $this->name = $responder->name;
            $this->nim = $responder->nim;
            $this->email= $responder->email;
            $this->phone = $responder->phone;
            $this->birth_date = $responder->birth;
        }
    }

    public function done() {

    }

    public function resetVar(){
        $this->selectedOther = false;
    }
}
