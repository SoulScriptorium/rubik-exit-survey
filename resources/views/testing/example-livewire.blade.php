<x-layout.questionnaire >
    <div class="shadow-2xl p-6 pt-0 mx-16">
        {{-- max-w-4xl max-w-screen-xl  --}}
        <div class="p-6 mx-auto max-w-4xl max-w-screen-xl flex-col">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold text-wrap">Pick three of your favorite Star Wars films</h1>
                <p class="text-lg">Select up to 3 options</p>
            </div>
            <form class="grid grid-cols-6 gap-12 mt-16 mx-auto max-w-screen">
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="email" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="email" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="name" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="name" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nama Lengkap</label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="nim" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="nim" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nomor Induk Mahasiswa (NIM)</label>
                </div>
                <div class="relative col-span-6 md:col-span-3">
                    <input type="text" id="phone" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
                    <label for="phone" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nomor Handphone (Aktif)</label>
                </div>
                <div class="relative col-span-6 md:col-span-4 md:col-start-2">
                    {{--
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    --}}
                    <input type="text"
                           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer"
                           onclick="this.setAttribute('type', 'date');"
                           placeholder=" ">
                    <label for="floating_outlined"
                           class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2
                       peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-6
                       peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4
                       left-1">Tanggal Kelahiran</label>
                    {{--
                    ml-10
                    peer-focus:-translate-x-10
                    --}}
                </div>
                <div class="col-span-6 grid grid-cols-6 gap-6 px-0 md:px-32">
                    <button class="btn btn-ghost
                    col-span-6 order-last lg:col-span-2 lg:order-first">< Back</button>
                    <button class="btn btn-outline
                    col-span-6 order-first lg:col-span-2 lg:order-last">Next ></button>

                </div>
            </form>
        </div>
    </div>
</x-layout.questionnaire>


{{--
<div class="hero-content">
    <button class="btn btn-outline" wire:click="loadContent">Load me</button>

    <div wire:loading.delay>
        <h1>Loading...</h1>
    </div>
    <div wire:loading.remove>
        <h1>Worked</h1>
    </div>
</div>
--}}

{{--

<div wire:init="loadContent">
    @if(is_null($data))
        <h1>Loading content</h1>
    @else
        <h1>From load content</h1>
    @endif
</div>
--}}

{{--

<div wire:loading.remove class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <a class="btn btn-primary" href="{{ route('survey') }}">Get Started</a>
    </div>
</div>--}}
