<div class="roll-ball">
    <div class="ball-1"></div> 
    <div class="ball-2"></div> 
    <div class="ball-3"></div> 
    <div class="ball-4"></div> 
    <div class="ball-5"></div> 
    <div class="ball-6"></div> 
    <div class="ball-7"></div> 
    <div class="ball-8"></div> 
    <div class="ball-9"></div> 
</div>

<style> 
    /* General Reset */
    /* body {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: #f0f0f0;
    overflow: hidden;
    } */

    /* Ball Style */
    .ball-1 {
    width: 50px;
    height: 50px;
    background-color: red;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 7s infinite linear;
    } 

    .ball-2 {
    width: 50px;
    height: 50px;
    background-color: blue;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 6.5s infinite linear;
    }

    .ball-3 {
    width: 50px;
    height: 50px;
    background-color: white;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 6s infinite linear;
    }

    .ball-4 {
    width: 50px;
    height: 50px;
    background-color: orange;
    border-radius: 50%;
    position: absolute; 
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 5.5s infinite linear;
    }

    .ball-5 {
    width: 50px;
    height: 50px;
    background-color: green;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 5s infinite linear;
    }

    .ball-6 {
    width: 50px;
    height: 50px;
    background-color: aqua;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 4.5s infinite linear;
    }

    .ball-7 {
    width: 50px;
    height: 50px;
    background-color: skyblue;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 4s infinite linear;
    }

    .ball-8 {
    width: 50px;
    height: 50px;
    background-color: pink;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 3.5s infinite linear;
    }

    .ball-9 {
    width: 50px;
    height: 50px;
    background-color: brown;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: calc(97% - 25px); /* Center the ball vertically */
    animation: roll 3s infinite linear;
    }

    /* Rolling Animation */
    @keyframes roll {
    0% {
        transform: translateX(0) rotate(0deg);
    }
    100% {
        transform: translateX(100vw) rotate(360deg);
    }
    }

</style>

<script>
    document.addEventListener('roll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-lightblue', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-lightblue', 'shadow-lg');
        }
    });
</script>