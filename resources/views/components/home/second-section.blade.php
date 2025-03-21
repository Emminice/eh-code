    <!-- Full-Width Container -->
    <div class="bg-white text-black pt-4" style="height: 40rem;">
        <div class="fade-in"> 
            <div class="w-full max-w-[1100px] mx-auto space-y-3 text-left text-lg pt-10">
                <h1 class="text-left font-bold text-4xl">We provide accessible and engaging content</h1> 
                <p class="text-black/50">Breaking down barriers to entry in the tech industry</p> 
                <div class="flex space-x-10">
                    <img src="{{ asset('img/screens.jpg') }}" style="height: 27rem" alt="screen">
                    <x-carousel /> 
                </div>
            </div>
        </div> 
    </div> 


    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
        }
    </style>

    <script>
        document.addEventListener('scroll', function() {
            const fadeInSection = document.querySelector('.fade-in');
            const sectionPosition = fadeInSection.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (sectionPosition < screenPosition) {
                fadeInSection.classList.add('visible');
            } else {
                fadeInSection.classList.remove('visible');
            }

            if (sectionPosition > screenPosition) {
                fadeInSection.classList.remove('visible');
            } else {
                fadeInSection.classList.add('visible');
            }
        });
    </script>