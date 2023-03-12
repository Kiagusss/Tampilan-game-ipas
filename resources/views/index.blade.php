<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script></title>
</head>
<body>

	
	<div class="containerss">
		<header class="cd-header">
		  <div class="header-wrapper">
	
			<div class="nav-but-wrap animate__animated animate__fadeIn animate__slower animate__delay-2s">
			  <div class="menu-icon hover-target">
				<span class="menu-icon__line menu-icon__line-left"></span>
				<span class="menu-icon__line"></span>
				<span class="menu-icon__line menu-icon__line-right"></span>
			  </div>
			</div>
		  </div>
		</header>
	
		<div class="nav">
		  <div class="nav__content">
			<ul class="nav__list">
			  <li class="nav__list-item active-nav"><a href="#" class="hover-target">Home</a></li>
			  <li class="nav__list-item"><a href="#" class="hover-target">Galaxy</a></li>
			  <li class="nav__list-item"><a href="#" class="hover-target">Planet</a></li>
			  <li class="nav__list-item"><a href="#" class="hover-target">Game</a></li>
			  <li class="nav__list-item"><a href="#" class="hover-target">About</a></li>
			</ul>
		  </div>
		</div>
		
	
	
		<div class="hero full-height ">
		  <div class="title">
			<h1 class=" pt-[0.3vw] cursor-pointer text-[5vw] ml-[38vw] animate__animated animate__fadeIn " id="titles" style="font-family: 'space grotesk'; font-weight: 500;">Awesomic</h1>
			<h1 class="hover-target mt-[-1.4vw] cursor-pointer text-[2vw] ml-[40.9vw] w-[20vw] animate__animated animate__fadeIn  animate__delay-1s" id="mean-title" style="font-family: 'space grotesk'; font-weight: 500;">{Awesome Cosmic}</h1>
		  </div>
		  <div class="title-2">
			<h1 class="ml-[50%] mt-[2%] text-[3vw] font-[Raleway] font-[600] cursor-default " id="judul-title2">Did you know about our Galaxy?</h1>
			<h2  class="hover-target w-[45vw] text-justify font-[Raleway] text-[2vw] ml-[50%] mt-[1.5%] font-[500] cursor-default text-neutral-600" id="subjudul-title2">A galaxy is a collection of stars,h2 gas, dust, and dark matter held together by gravity. There are billions of galaxies in the universe, each with unique shapes and sizes. The Milky Way is a spiral galaxy that contains our solar system. The study of galaxies helps us understand the structure and evolution of the universe.</h2>
		  </div>
		  <div class="scroll animate__animated animate__fadeIn animate__slower animate__delay-2s" id="serol">
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="comp 1.json"  background="transparent"  speed="1.3" id="serol"  style="width: 5vw; height: 5vw; margin-left:73%; margin-top: 4%"  loop autoplay ></lottie-player>
			{{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets9.lottiefiles.com/packages/lf20_H6LAE4.json"  background="transparent"  speed="1.3"  style="width: 10vw; height: 10vw; margin-left: 70%"  loop autoplay></lottie-player> --}}
		  </div>

		  {{-- <div class="solar-system items-center flex flex-col " style="background: linear-gradient(180deg, #05090E 53.12%, #183054 100%);">
			<h1 class="text-[3vw] mt-[5%]">This is what our Solar System look alike</h1>
		  </div> --}}
	  </div>
	  

	  
	  <div class='cursor' id="cursor"></div>
		<div class='cursor2' id="cursor2"></div>
		<div class='cursor3' id="cursor3"></div>


	</div>
	

	
	
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous"></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js'></script>
	<script src='//s3-us-west-2.amazonaws.com/s.cdpn.io/141228/OrbitControls.js'></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js'></script>
	<script src="/assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>

<script>
    gsap.registerPlugin(TextPlugin);
    gsap.from("#subjudul-title2", {
      duration: 10,
      text: "",
      delay: 6
    })
    gsap.registerPlugin(TextPlugin);
    gsap.from("#judul-title2", {
      duration: 2,
      text: "",
      delay: 4
    })
  </script>
	
</body>
</html>