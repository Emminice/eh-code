<!DOCTYPE html>
<head>
    <title>Courses - EH Code</title>
</head>

<x-layout>
    <div class="max-w-[986px] mx-auto">
        <x-image-3></x-image-3>
        <div class="space-y-10 pt-20">
            {{-- <section class="text-center">
                <h1 class="font-bold text-4xl">Let's Find You A Course</h1> 
                <x-forms.form action="/search" class="mt-6"> 
                    <x-forms.input name="q" placeholder="Web Developer..." />
                </x-forms.form>
            </section> --}}
            @auth
                <div class="text-right">
                    <a class="bg-lightblue font-bold border border-lightblue hover:bg-white hover:text-lightblue hover:border-lightblue transition-colors duration-300 px-2 py-2 rounded-lg" href="/enrollment">Enroll for a Course</a>
                </div>
            @endauth
            <section>
                <x-section-heading>Available Courses</x-section-heading> 
    
                <div class="grid lg:grid-cols-3 gap-8 mt-6"> 
                    @foreach ($featuredCourses as $course)
                        <x-course-card :$course></x-course-card>
                    @endforeach
                </div>
    
            </section>
    
            {{-- <section class="pt-0">
                <x-waves></x-waves>
            </section> --}}
    
            <section>
                <x-section-heading>Tags</x-section-heading>
    
                <div class="mt-6 space-x-1">
                    @foreach ($tags as $tag)
                        <x-tag :$tag>Mon</x-tag>
                    @endforeach
    
                </div>
            </section>
    
            <section>
                <x-section-heading>Upcoming Courses</x-section-heading>
    
                <div class="mt-6 space-y-6">
                    @foreach ($courses as $course)
                    <x-course-card-wide :$course></x-course-card-wide>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-layout>


<script>
      document.addEventListener('scroll', function () {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > -100) {
          navbar.classList.add('bg-lightblue', 'shadow-lg');
          navbar.classList.remove('bg-transparent');
      } else {
          navbar.classList.add('bg-transparent');
          navbar.classList.remove('bg-lightblue', 'shadow-lg');
      }
  });
</script>