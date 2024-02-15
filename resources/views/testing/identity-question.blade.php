<form class="grid grid-cols-6 gap-12 mt-16 mx-auto max-w-screen"> {{-- Start Form --}}
    <div class="relative col-span-6 md:col-span-3">
        <input type="text" id="name" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
        <label for="name" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
            Nama Lengkap
        </label>
    </div>
    <div class="relative col-span-6 md:col-span-3">
        <input type="text" id="nim" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
        <label for="nim" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
            Nomor Induk Mahasiswa (NIM)
        </label>
    </div>
    <div class="relative col-span-6 md:col-span-3">
        <input type="text" id="email" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
        <label for="email"
               class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
            Email pribadi aktif
        </label>
    </div>
    <div class="relative col-span-6 md:col-span-3">
        <input type="text" id="phone" class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
        <label for="phone" class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
            Nomor Handphone (Aktif)
        </label>
    </div>

    <div class="relative col-span-6 md:col-span-4 md:col-start-2">

        <input type="text" id="birth"
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
