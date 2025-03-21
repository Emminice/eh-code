<div class="carousel-container text-md">
  <div class="carousel-wrapper">
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Inclusivity</p>
        <p>
          At EH Code, we believe that coding and web development are for everyone. We are committed to creating an environment that welcomes individuals from diverse backgrounds, skill levels, and experiences.
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Empowerment</p>
        <p>
          Our mission is to equip learners with the confidence and skills they need to bring their ideas to life. We empower individuals to take control of their learning journey and achieve their goals.
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Innovation</p>
        <p>
          We embrace creativity and forward-thinking in our approach to education, encouraging learners to think outside the box and solve real-world problems with innovative solutions.          
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Excellence</p>
        <p>
          EH Code is dedicated to providing high-quality content, resources, and support. We continuously strive for excellence in every aspect of our platform to ensure the best possible learning experience.                
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Community</p>
        <p>
          Collaboration is at the heart of EH Code. We foster a supportive community where learners can share knowledge, build networks, and grow together in their web development journeys.
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Accessibility</p>
        <p>
          Education should be available to everyone, regardless of financial or geographical limitations. EH Code is committed to making web development education affordable and accessible to all.
        </p>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <p class="font-bold text-xl">Growth</p>
        <p>
          Learning never stops. We encourage continuous improvement, both for our learners and our platform, to ensure everyone stays ahead in the ever-evolving tech landscape.
        </p>
      </div>
    </div> 
  </div>
  <div class="carousel-controls flex justify-center">
    <button class="prev mx-2" onclick="plusSlides(-1)">&#10094;</button>
    <button class="next mx-2" onclick="plusSlides(1)">&#10095;</button>
  </div>
</div>

<style>
  .carousel-container {
    position: relative;
    max-width: 100%;
    overflow: hidden;
  }

  .carousel-wrapper {
    display: flex;
    transition: transform 0.6s ease;
  }

  .carousel-slide {
    min-width: 100%;
    box-sizing: border-box;
  }

  .carousel-content {
    padding: 20px;
  }

  .carousel-controls {
    position: absolute;
    right: 10px;
    gap: 10px;
    display: flex;
    justify-content: center;
  }

  .prev, .next {
    position: static;
    top: 50%;
    transform: none;
    display: inline-block;
    color: white;
    background-color: #EB6200; /* Dark Orange */
    border: none; 
    border-radius: 50%; 
    width: 40px;
    height: 40px;
    line-height: 40px; /* Center text vertically */
    text-align: center;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .prev:hover, .next:hover {
    background-color: #0d6efd; /* Light blue */
  }

  .prev {
    left: 10px;
  }

  .next {
    right: 10px;
  }
</style>

<script>
  let slideIndex = 0;

  function showSlides() {
    const slidesWrapper = document.querySelector(".carousel-wrapper");
    const slides = document.querySelectorAll(".carousel-slide");
    const totalSlides = slides.length;

    slideIndex = (slideIndex + 1) % totalSlides;
    slidesWrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
  }

  // Auto-slide every 5 seconds
  setInterval(showSlides, 7000);

  // Next/previous controls
  function plusSlides(n) {
    const slidesWrapper = document.querySelector(".carousel-wrapper");
    const slides = document.querySelectorAll(".carousel-slide");
    const totalSlides = slides.length;

    slideIndex = (slideIndex + n + totalSlides) % totalSlides;
    slidesWrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
  }
</script> 

