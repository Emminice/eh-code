@props(['label', 'name'])

<div>
    <span class="w-2 h-2 bg-white inline-block"></span>
    <label {{ $attributes->merge(['class' => 'space-y-6 font-bold', 'label' => 'name']) }}>{{ $slot }}</label>
</div>
