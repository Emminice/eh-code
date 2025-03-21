@props(['label', 'name']) 

<div class="col-sm-3">
    {{ $slot }}
</div> 


    {{-- <div>
        @if ($label)
            <x-forms.label :$name :$label />
        @endif 
    
        <div class="mt-1">
            {{ $slot }} 
    
            <x-forms.error :error="$errors->first($name)"></x-forms>
        </div>
    </div>  --}}