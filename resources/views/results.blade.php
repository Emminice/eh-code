<head>
    <title>Results - EH Code</title> 
    <link rel="shortcut icon" href="{{ asset('img/eh-logoo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-semiblack text-white pb-20">
    <x-image-3 />
    <main class="mt-10 max-w-[986px] mx-auto">
        @if ($courses->isEmpty())
            <x-page-heading>Search "{{ $query }}" not found!</x-page-heading>
            <p class="text-center pb-10">Sorry, we could not find any result relating to your search.</p> 
            <div class="text-center">
                <a class="bg-gray px-4 py-2 hover:bg-gray/70 px-4 py-1 rounded-50% transition-colors duration-300" href="/courses">Back</a>
            </div>  
        @else
        <x-page-heading>Search Result(s) for "{{ $query }}"</x-page-heading> 
            <div class="space-y-6">
                @foreach ($courses as $course)
                    <x-course-card-wide :$course></x-course-card-wide> 
                @endforeach 
            </div><br> 
        
            <div>
                <a class="bg-gray px-4 py-2 hover:bg-gray/70 px-4 py-1 rounded-50% transition-colors duration-300" href="/courses">Back</a>
            </div> 
        @endif
    </main>
</body>

