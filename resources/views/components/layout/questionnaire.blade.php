<x-layout.app>
    <x-layout.header/>
    <div class="pt-24">

        {{ $slot }}

    </div>
    <x-layout.progress value="50" class="fixed bottom-0 left-0 right-0" />
</x-layout.app>
