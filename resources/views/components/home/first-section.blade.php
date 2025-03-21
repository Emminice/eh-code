<div class="w-full max-w-[986px] mx-auto space-y-6 text-center text-lg pt-10">
    <h1 class="text-6xl font-bolder mt-20">EH CODE: Your Gateway to Web Development Mastery.</h1>
    <p class="text-lg px-6">
        EH CODE is a dynamic platform dedicated to teaching people how to code and create websites, regardless of their experience level.
    </p> 

    <div class="space-x-4 text-lg font-bold">
        <a href="/about" class="bg-darkorange border border-darkorange hover:bg-white hover:text-darkorange transition-colors duration-300 px-8 py-4 rounded">Learn More</a>
        <a href="/courses" class="bg-lightblue border border-lightblue hover:bg-white hover:text-lightblue transition-colors duration-300 px-8 py-4 rounded">Register for a Course</a>
    </div> 

    <div class="flex justify-center space-x-4 pt-4" style="height: 10rem;">
        <img src="{{ asset('img/laravel-image-2.jfif') }}" class="hover:scale-110 transition-transform duration-300" style="border-radius: 10px; overflow: hidden; animation: float-1 3s infinite;" alt="">
        <img src="{{ asset('img/php-image.jfif') }}" class="hover:scale-110 transition-transform duration-300" style="border-radius: 10px; overflow: hidden; animation: float-2 3s infinite;" alt="">
        <img src="{{ asset('img/bootstrap.png') }}" class="hover:scale-110 transition-transform duration-300" style="border-radius: 10px; overflow: hidden; animation: float-3 3s infinite;" alt="">
        <img src="{{ asset('img/javascript-image.jfif') }}" class="hover:scale-110 transition-transform duration-300" style="border-radius: 10px; overflow: hidden; animation: float-4 3s infinite;" alt="">
    </div>

    {{-- <x-rolling-ball /> --}}
</div> 


<style>
    @keyframes float-1 {
        0% {
            transform: translateY(5px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(5px);
        }
    }

    @keyframes float-2 {
        0% {
            transform: translateY(-10px);
        }
        50% {
            transform: translateY(5px);
        }
        100% {
            transform: translateY(-10px);
        }
    }

    @keyframes float-3 {
        0% {
            transform: translateY(5px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(5px);
        }
    }

    @keyframes float-4 {
        0% {
            transform: translateY(-10px);
        }
        50% {
            transform: translateY(5px);
        }
        100% {
            transform: translateY(-10px);
        }
    }
</style>

