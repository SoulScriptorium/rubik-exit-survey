<ul class="grid relative col-span-6 md:col-span-4">
    @foreach($item_question->answers as $item_answer)

        <li>
            <label class="inline-flex items-center justify-between w-full p-5 bg-white border border-base-content rounded-lg cursor-pointer
                    dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600
                    hover:text-gray-100 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 hover:bg-primary"
                   for="hosting-small" >
                <input type="radio" id="hosting-small" name="radio_question_{{ $item_question->id }}"
                       class="radio radio-primary hover:border-gray-200" required >

                {{-- Text or using label only --}}

                {{--<div class="ms-3 w-full text-lg font-semibold">Good for large websites</div>--}}
                <input class="input block ms-3 px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" "
                       type="text" id="name" />
            </label>
        </li>

    @endforeach
</ul>
