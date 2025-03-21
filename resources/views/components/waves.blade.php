<div class="">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgb(245,245,220,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgb(245,245,220,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgb(245,245,220,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(245,245,220)" />
        </g>
    </svg>

    <style>
        /* Wave effect */

.waves {
	position: relative;
	width: 100%;
	height: 15vh;
	margin-bottom: -7px;
	/*Fix for safari gap*/
	min-height: 100px;
	max-height: 150px;
	/* margin-top: -50px; */
}

.parallax>use {
	animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
}

.parallax>use:nth-child(1) {
	animation-delay: -2s;
	animation-duration: 7s;
}

.parallax>use:nth-child(2) {
	animation-delay: -3s;
	animation-duration: 10s;
}

.parallax>use:nth-child(3) {
	animation-delay: -4s;
	animation-duration: 13s;
}

.parallax>use:nth-child(4) {
	animation-delay: -5s;
	animation-duration: 20s;
}

@keyframes move-forever {
	0% {
		transform: translate3d(-90px, 0, 0);
	}

	100% {
		transform: translate3d(85px, 0, 0);
	}
}

/*Shrinking for mobile*/
@media (max-width: 768px) {
	.waves {
		height: 90px;
		min-height: 40px;
	}

	.content {
		height: 30vh;
	}

	h1 {
		font-size: 24px;
	}
}

    </style>
</div> 