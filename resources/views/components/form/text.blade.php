@props([
    'id' => null, 'name',
    'text' => 'text',
    'label' => '',
    'required' => true,
])

<div class="relative col-span-6 md:col-span-3">
    <input type="text"
           {{ $attributes->merge(['id' => $id ?? $name, 'name' => $name, 'type' => 'text']) }}
           class="input block px-2.5 pb-2.5 pt-4 w-full bg-transparent rounded-lg border-1 border-base-content appearance-none focus:outline-none focus:ring-0 focus:border-accent-focus peer" placeholder=" " />
    <label for="{{ $id ?? $name }}"
           class="absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-base-100 px-2 peer-focus:px-2 peer-focus:text-accent-focus peer-focus:dark:text-accent-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-6 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">{{ $label }}</label>
</div>
