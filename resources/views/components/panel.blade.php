@php
    $classes = 'p-3 bg-white/5 rounded-xl border border-transparent hover:border-blue group transition-colors duration-300'
@endphp

<div {{ $attributes(['class' => $classes]) }}> 
    {{ $slot }}
</div>