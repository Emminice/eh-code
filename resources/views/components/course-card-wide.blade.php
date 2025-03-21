@props(['course'])

<x-panel class="flex gap-x-6">
    <div>
        <x-course-logo-lg></x-course-logo-lg>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray">{{ $course->employer->name }}</a> 

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue transition-colors duration 300">{{ $course->course }}</h3>
        <p class="text-sm text-gray mt-auto">{{ $course->price }}</p>
    </div>

    <div>
        @foreach ($course->tags as $tag)
            <x-tag :$tag size="mid" />
        @endforeach
    </div>
</x-panel>

