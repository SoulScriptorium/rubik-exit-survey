
<div class="hero-content">
    <button class="btn btn-outline" wire:click="loadContent">Load me</button>

    <div wire:loading.delay>
        <h1>Loading...</h1>
    </div>
    <div wire:loading.remove>
        <h1>Worked</h1>
    </div>
</div>
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
