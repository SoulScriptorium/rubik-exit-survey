{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
{{-- IT IS MAIN VIEW FOR QUESTIONNAIRE - IT SHOULD BE DYNAMIC FORM --}}
<div class="shadow-2xl p-6 my-12 mx-12">
    {{-- max-w-4xl max-w-screen-xl  --}}
    <div class="p-6 mx-auto max-w-4xl max-w-screen-xl flex-col">
        <div class="mx-auto max-w-lg text-center">{{-- Start Title --}}
            <h1 class="text-2xl font-bold text-wrap">{{ $page->title }} Current {{ $current_page_number  }} - Next {{ $next_page }} - Prev {{ $prev_page }}</h1>
            <p class="text-lg">{{ $last_page_number }}- {{ $page->description }}</p>
        </div>{{-- End Title --}}

        {{--{{ $selectedOther ? 'true' : 'false' }}--}}
        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($current_page_number == 1)
            <form wire:submit.prevent="submitIdentity"
                class="grid grid-cols-6 gap-12 mt-16 mx-auto max-w-screen"> {{-- Start Form --}}
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="name" wire:model="name"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="name" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                        Nama Lengkap
                    </label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="nim" wire:model="nim"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="nim" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                        Nomor Induk Mahasiswa (NIM)
                    </label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="email" wire:model="email"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="email"
                           class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                        Email pribadi aktif
                    </label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="phone" wire:model="phone"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="phone" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                        Nomor Handphone (Aktif)
                    </label>
                </div>

                <div class="relative col-span-6 md:col-span-4 md:col-start-2">

                    <input type="text" id="birth" wire:model="birth_date"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer"
                           onclick="this.setAttribute('type', 'date');"
                           placeholder=" ">
                    <label for="birth"
                           class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2
                       peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-6
                       peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4
                       left-1">Tanggal Kelahiran</label>

                </div>

                <div class="col-span-6 grid grid-cols-6 gap-6 px-0 md:px-32">
                    <button class="btn btn-ghost
                    col-span-6 order-last lg:col-span-2 lg:order-first" disabled>< Back</button>
                    <button type="submit"
                            class="btn btn-outline col-span-6 order-first lg:col-span-2 lg:order-last">
                        Next >
                    </button>

                </div>
            </form> {{-- End Form --}}
        @else
            <form class="mt-16 mx-auto max-w-screen" {{--wire:submit.prevent="nextPage"--}}> {{-- Start Form --}}

                @foreach($page->questions as $item_question)

                    @switch($item_question->type)
                        @case('text')
                            <div class="grid grid-cols-6 gap-12">
                                <div class="relative col-span-12">
                                    <input type="text" id="name" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                                    <label for="name" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Nama Lengkap
                                    </label>
                                </div>
                            </div>
                        @break

                        @case('radio')
                            <ul class="grid gap-4 col-span-6 md:col-span-4">
                                @foreach($item_question->answers as $item_answer)

                                    <li>
                                        <label class="grid grid-cols-6 items-center justify-between w-full p-5 bg-white border border-base-content rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-100 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 hover:bg-primary"
                                               for="radio_answer_{{ $item_answer->id }}">

                                            <div class="relative col-span-6 {{ $item_answer->type == 'text' ? 'md:col-span-2' : '' }} inline-flex">
                                                <input type="radio" id="radio_answer_{{ $item_answer->id }}"
                                                       name="radio_question_{{ $item_question->id }}"
                                                       value="{{ $item_answer->id }}"
                                                       class=" radio radio-primary hover:border-gray-200"
                                                       wire:model="selectedAnswers.{{ $item_question->id }}"
                                                       required
                                                       wire:click="selectRadio({{ $item_answer->id }}, {{ $item_answer->next_page }}, {{ $item_answer->type }})">
                                                <div class=" ms-3 text-lg font-semibold">{{ $item_answer->label }}</div>
                                            </div>

                                            @if($item_answer->type == 'text')
                                                <input class="relative col-span-6 md:col-span-4 input block ms-3 px-2.5 pb-2.5 pt-4  bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer"
                                                       placeholder=" " {{ isset($selectedAnswers[$item_question->id]) && $selectedAnswers[$item_question->id] == $item_answer->id ? 'required' : '' }}
                                                       wire:model="inputText.{{ $item_question->id }}"
                                                       type="text" id="radio_answer_{{ $item_answer->id }}" />
                                            @endif

                                        </label>
                                    </li>

                                @endforeach
                            </ul>
                        @break


                        @case('checkbox')
                            <ul class="grid gap-4 col-span-6 md:col-span-4">
                                @foreach($item_question->answers as $item_answer)

                                    <li class="form-control">
                                        <label class="grid grid-cols-6 label cursor-pointer items-center justify-between w-full p-5 bg-white border border-base-content rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-100 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 hover:bg-primary"
                                               for="radio_answer_{{ $item_answer->id }}">

                                            <div class="relative col-span-6 {{ $item_answer->type == 'text' ? 'md:col-span-2' : '' }} inline-flex">
                                                <input type="checkbox" id="radio_answer_{{ $item_answer->id }}"
                                                       name="radio_question_{{ $item_question->id }}"
                                                       value="{{ $item_answer->id }}"
                                                       class="checkbox checkbox-primary hover:border-gray-200"
                                                       wire:click="selectRadio({{ $item_answer->id }}, {{ $item_answer->next_page }})">
                                                <span class="label-text ms-3 text-lg font-semibold">{{ $item_answer->label }}</span>
                                            </div>

                                            @if($item_answer->type == 'text')
                                                <input class="relative col-span-6 md:col-span-4 input block ms-3 px-2.5 pb-2.5 pt-4  bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer"
                                                       placeholder=" " {{--{{ $selectedRadio == $item_answer->id ? 'required' : '' }}--}}
                                                       type="text" id="radio_answer_{{ $item_answer->id }}" />
                                            @endif

                                        </label>
                                    </li>

                                @endforeach
                            </ul>
                        @break


                    @endswitch

                @endforeach

                <div class="col-span-6 grid grid-cols-6 gap-6 mt-12 px-0 md:px-32">
                    <button wire:click="prevPage"
                            class="btn btn-ghost col-span-6 order-last lg:col-span-2 lg:order-first" >
                        < Back
                    </button>
                    @if($last_page)
                        <button wire:click="done" type="submit"
                                class="btn btn-outline col-span-6 order-first lg:col-span-2 lg:order-last">
                            Selesai & Kirim
                        </button>
                    @else
                        <button type="submit" wire:click="nextPage"
                                class="btn btn-outline col-span-6 order-first lg:col-span-2 lg:order-last">
                            Next >
                        </button>
                    @endif
                </div>
            </form> {{-- End Form --}}
        @endif
    </div>
</div>




