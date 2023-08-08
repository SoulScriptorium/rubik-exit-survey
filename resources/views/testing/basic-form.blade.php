{{-- Do your work, then step back. --}}
<div class="shadow-2xl p-6 pt-0 mx-16">
    <div class="p-6 mx-auto max-w-4xl max-w-screen-xl flex-col">
        <form class="grid grid-cols-6 gap-12 mt-16 mx-auto max-w-screen">

            <div class="relative col-span-6 md:col-span-3">
                <input class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" "
                       type="text" id="name" wire:model="name" />
                <label class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
                       for="name">{!! $name !!}</label>
            </div>

            <ul class="grid relative col-span-6 md:col-span-4">
                <li>
                    <label class="inline-flex items-center justify-between w-full p-5 bg-white border border-base-content rounded-lg cursor-pointer
                    dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600
                    hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 hover:bg-gray-700"
                           for="hosting-small" >
                        <input type="radio" id="hosting-small" wire:model="gender"  class="radio" required >
                        <div class="ms-3 w-full text-lg font-semibold">Good for large websites</div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="hosting-big" wire:model="gender" class="hidden peer">
                    <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">500-1000 MB</div>
                            <div class="w-full">Good for large websites</div>
                        </div>
                        <svg aria-hidden="true" class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </label>
                </li>
            </ul>


        </form>
    </div>
</div>
