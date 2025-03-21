<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Home Page</title> 
    <link rel="shortcut icon" href="{{ asset('img/eh-logoo.png') }}"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 


<body class="bg-semiblack text-white pb-20 w-full font-poppins">

  <div class="px-10" id="/">
    <nav id="navbar" class="flex justify-around px-2 py-4 items-center border-b border-white/10 fixed top-0 left-0 z-50 w-full bg-transparent transition-colors duration-300"> 

      @auth
          <div class="flex items-center">
            <a href="/">
              <img src="{{ auth()->user()->profile_picture 
              ? asset('storage/' . auth()->user()->profile_picture) 
              : asset('img/eh-logoo.png') }}" style="height: 40px; border-radius: 50%" 
              alt="{{ auth()->user()->name }}">
            </a> 


            <div class="dropdown"> 
              <button class="dropdown-button flex items-center font-bold text-orange focus:outline-none focus:text focus:text-blue" onclick="toggleDropdown()"> 
                {{ auth()->user()->name }}
                <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="toggleDropdown()">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button> 
              <div class="dropdown-content bg-white/30"> 
                <a class="text-white hover:bg-white/50 transition-colors duration-300" href="/profile"> Profile </a> 
                <form class="text-red hover:text-white hover:bg-red transition-colors duration-300" method="POST" action="/logout"> 
                  @csrf 
                  @method('DELETE') 
                    <button class="logout text-red hover:text-white hover:bg-red transition-colors duration-300"> Logout </button> 
                </form>
              </div>
            </div> 


          </div>
        @else 
          <div class="flex items-center"> 
            <a href="">
              <img src="{{ asset('img/eh-logoo.png') }}" style="height:40px" alt="Guest">
            </a>
            <div class="flex font-bold text-orange">
              <p class="font-bold text-white text-center px-2 py-1">Hello, </p>
              <a class="hover:text-blue pr-2 py-1 rounded-lg transition-colors duration-300" href="/register">Sign Up</a>
              <p class="font-bold mt-1">|</p>
              <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/login">Login</a>
            </div>
          </div>
      @endauth

      <div class="space-x-4 font-bold pr-20">
        <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/">Home</a>
        <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/packages">Packages</a>
        <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/about">About</a>
        <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/courses">Courses</a> 
        <a class="hover:text-blue px-2 py-1 rounded-lg transition-colors duration-300" href="/contact">Contact</a>
      </div> 

      
      <div class="text-center">
        <x-forms.form action="/search" class="flex items-center"> 
            <input id="search" class="rounded-l-xl bg-white/10 items-center border border-white/10 px-3 py-1 w-full focus:outline-none focus:ring focus:ring-blue-300" name="q" placeholder="I'm looking for..." />
            <span id="searchicon" class=" items-center cursor-pointer rounded-r-xl bg-white/10 border border-white/10 hover:bg-white/30 focus:border-blue py-1 px-2">
              <i class="fas fa-search text-gray-500 id="iconSearch"></i> 
            </span> 
        </x-forms.form>
      </div> 
    </nav>
  </div>

  {{-- <div x-data="{ open: false }">
    <nav class="bg-lightblue border-b border-gray-100"> 
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
        <div class="flex justify-between h-16"> 
          <div class="flex items-center"> 
            <!-- Logo --> 
            <div class="flex-shrink-0 flex items-center"> 
              <a href="/home" class="text-2xl font-bold"> School<span class="text-orange-500">X</span> </a> 
            </div> 
          </div> 
            <!-- Desktop Navigation --> 
            <div class="hidden md:flex md:items-center md:space-x-6"> 
              <a href="/home" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> Home </a> 
              <a href="/features" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> Features </a> 
              <a href="/pricing" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> Pricing </a> 
              <a href="/contact" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> Contact </a> 
              <a href="/faq" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> FAQ </a> 
              <a href="/demo" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium"> Demo </a> 
              <button class="px-4 py-2 text-white bg-orange-500 rounded-md text-sm font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> Teachers </button> 
              <button class="px-4 py-2 text-white bg-orange-500 rounded-md text-sm font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> Admin </button> 
              <button class="px-4 py-2 text-white bg-orange-500 rounded-md text-sm font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> School Signup </button> 
            </div> 
            <!-- Mobile menu button --> 
            <div class="flex items-center md:hidden"> 
              <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500"> 
              <span class="sr-only">Open main menu</span> 
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"> 
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /> 
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /> 
              </svg> 
            </button> 
          </div> 
        </div> 
      </div> 

      <!-- Mobile menu --> 
      <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden"> 
        <div class="bg-lightblue divide-y divide-gray-200 rounded-b-lg shadow-lg ring-1 ring-black ring-opacity-5"> 
          <div class="px-5 pt-4 pb-6 space-y-1"> 
            <a href="/" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> Home </a> 
            <a href="/features" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> Features </a> 
            <a href="/pricing" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> Pricing </a> 
            <a href="/contact" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> Contact </a> 
            <a href="/faq" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> FAQ </a> 
            <a href="/demo" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md"> Demo </a> 
          </div> 
          <div class="px-5 py-6 space-y-3"> 
            <button class="w-full px-4 py-2 text-white bg-orange-500 rounded-md text-base font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> Teachers </button> 
            <button class="w-full px-4 py-2 text-white bg-orange-500 rounded-md text-base font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> Admin </button> 
            <button class="w-full px-4 py-2 text-white bg-orange-500 rounded-md text-base font-medium hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> School Signup </button> 
          </div> 
        </div> 
      </div> 
    </nav> 
  </div> --}}



  <main class="mt-10">
    {{ $slot }}
  </main>

</body>

@if (session('welcome_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            alert("{{ session('welcome_message') }}");
        });
    </script>
@endif

@if (session('create_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            alert("{{ session('create_message') }}");
        });
    </script>
@endif 

<script>
  document.addEventListener('scroll', function () {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
          navbar.classList.add('bg-lightblue', 'shadow-lg');
          navbar.classList.remove('bg-transparent');
      } else {
          navbar.classList.add('bg-transparent');
          navbar.classList.remove('bg-lightblue', 'shadow-lg');
      }
  });

  document.addEventListener('scroll', function () {
      const search = document.getElementById('search');
      if (window.scrollY > 50) {
          search.classList.add('bg-black/50');
          search.classList.remove('bg-white/10');
      } else {
          search.classList.add('bg-white/10');
          search.classList.remove('bg-black/50');
      }
  });

  document.addEventListener('scroll', function () {
      const searchicon = document.getElementById('searchicon');
      if (window.scrollY > 50) {
          searchicon.classList.add('bg-black/50');
          searchicon.classList.remove('bg-white/10');
      } else {
          searchicon.classList.add('bg-white/10');
          searchicon.classList.remove('bg-black/50');
      }
  });
</script> 

<style>

  .dropdown {
      position: relative;
      display: inline-block;
  }

  .dropdown-button {
      padding: 10px 20px;
      border: none;
      cursor: pointer;
  }

  .dropdown-content {
      display: none; /* Hidden by default */
      position: absolute; 
      margin-left: 20px; 
      /* background-color: #f9f9f9; */
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
  }

  .dropdown-content a {
      /* color: black; */
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .logout {
      /* color: black; */
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  /* Show the dropdown menu when the button is clicked */
  .dropdown.active .dropdown-content {
      display: block; 
  }
</style> 

<script>
  // JavaScript to toggle the dropdown
  function toggleDropdown() {
      const dropdown = document.querySelector('.dropdown');
      dropdown.classList.toggle('active');
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
      if (!event.target.matches('.dropdown-button')) {
          const dropdowns = document.querySelectorAll('.dropdown');
          dropdowns.forEach(dropdown => {
              if (dropdown.classList.contains('active')) {
                  dropdown.classList.remove('active');
              }
          });
      }
  };
</script>

</html>
