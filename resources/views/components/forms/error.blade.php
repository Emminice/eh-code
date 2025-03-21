@props(['name'])

@error($name)
<p class="text-red" style="font-style: italic">{{ $message }}</p>
@enderror 
