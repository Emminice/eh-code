@props(['label', 'name']) 

@php
    $defaults = [
        'type' => 'text', 
        'id' => $name, 
        'name' => $name, 
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-3 mb-4 w-full focus:outline-none focus:ring focus:ring-blue-300', 
        'value' => old($name) 
]; 
@endphp

<x-forms.field>
    <input {{ $attributes($defaults) }}> 
</x-forms.field>
