@props(['course'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm text-gray">{{ $course->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue transition-colors duration-300 text-xl font-bold">{{ $course->course }}</h3>
        <p class="text-sm mt-4">{{ $course->price }}</p> 
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($course->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-course-logo-sm></x-course-logo-sm>
    </div>
</x-panel>