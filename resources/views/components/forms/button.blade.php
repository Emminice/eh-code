<button {{ $attributes->merge(['class' => 'rounded-50% bg-blue px-4 py-2 hover:bg-blue/70 transition-colors duration-200 font-bold', 'type' => 'submit']) }}>
    {{ $slot }} 
</button>

