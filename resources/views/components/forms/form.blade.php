<form {{ $attributes(["class" => "max-w-md mx-auto", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET'))
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>