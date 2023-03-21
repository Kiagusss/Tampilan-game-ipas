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
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script></title>

	<style>
		/* width */
		::-webkit-scrollbar {
		  width: 10px;
		}
		
		/* Track */
		::-webkit-scrollbar-track {
		  box-shadow: inset 0 0 5px grey; 
		  border-radius: 5px;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: white; 
		  border-radius: 5px;
		}
		
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: white 50%; 
		}
		</style>
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
			  <li class="nav__list-item active-nav"><a href="#hero" class="hover-target">Home</a></li>
			  <li class="nav__list-item"><a href="#solar-system" class="hover-target">Solar-System</a></li>
			  <li class="nav__list-item"><a href="#planet" class="hover-target">Planet</a></li>
			  <li class="nav__list-item"><a href="#games" class="hover-target">Game</a></li>
			  <li class="nav__list-item"><a href="#about" class="hover-target">About</a></li>
			</ul>
		  </div>
		</div>
		
	
	
		<div class="hero full-height " id="hero">
		  <div class="title">
			<h1 class=" pt-[0.3vw] cursor-pointer text-[5vw] ml-[38vw] animate__animated animate__fadeIn " id="titles" style="font-family: 'space grotesk'; font-weight: 500;">Awesomic</h1>
			<h1 class="hover-target mt-[-1.4vw] cursor-pointer text-[2vw] ml-[40.9vw] w-[20vw] animate__animated animate__fadeIn  animate__delay-1s" id="mean-title" style="font-family: 'space grotesk'; font-weight: 500;">{Awesome Cosmic}</h1>
		  </div>
		  <div class="title-2">
			<h1 class="ml-[50%] mt-[2%] text-[3vw] font-[600] cursor-default " id="judul-title2" style="font-family: 'Space Grotesk'">Did you know about our Galaxy?</h1>
			<h2  class="hover-target w-[45vw] text-justify font-[Raleway] text-[2vw] ml-[50%] mt-[1.5%] font-[500] cursor-default text-neutral-600" id="subjudul-title2">A galaxy is a collection of stars,h2 gas, dust, and dark matter held together by gravity. There are billions of galaxies in the universe, each with unique shapes and sizes. The Milky Way is a spiral galaxy that contains our solar system. The study of galaxies helps us understand the structure and evolution of the universe.</h2>
		  </div>
		  <div class="scroll animate__animated animate__fadeIn animate__slower animate__delay-2s" id="serol">
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<a href="#solar-system"><lottie-player src="comp 1.json"  background="transparent"  speed="1.3" id="serol"  style="width: 5vw; height: 5vw; margin-left:73%; margin-top: 4%"  loop autoplay  ></lottie-player></a>
			
		  </div>
		  
		
		 
	  </div>
	  
	  <div class="solar-system items-center flex flex-col mt-[30%]" style="" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="500"  data-aos-once="true" id="solar-system">
		<h1 class="text-[3.5vw] mt-[-10%] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;" >This Is What Our Solar System Look Alike</h1>
		<div  id="solar-system" class="mt-[-200px]"></div>
	  </div>
	  
	  <div class='cursor' id="cursor"></div>
		<div class='cursor2' id="cursor2"></div>
		<div class='cursor3' id="cursor3"></div>


		<section class="clearfix" >

			<ul class="solarsystem" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="500"  data-aos-once="true">
			  <li class="sun"><a href="#sun"><span>Sun</span></a></li>
			  <li class="mercury"><a href="#mercury"><span>Mercury</span></a></li>
			  <li class="venus"><a href="#venus"><span>Venus</span></a></li>
			  <li class="earth"><a href="#earth"><span>Earth<span class="moon"> &amp; Moon</span></span></a></li>
			  <li class="mars"><a href="#mars"><span>Mars</span></a></li>
			  <li class="asteroids_meteorids"><span>Asteroids &amp; Meteorids</span></li>
			  <li class="jupiter"><a href="#jupiter"><span>Jupiter</span></a></li>
			  <li class="saturn"><a href="#saturn"><span>Saturn &amp; <span class="ring">Ring</span></span></a></li>
			  <li class="uranus"><a href="#uranus"><span>Uranus</span></a></li>
			  <li class="neptune"><a href="#neptune"><span>Neptune</span></a></li>
			</ul>
			
			<ul id="descriptions" class="hover-target" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="500"  data-aos-once="true">
				<li>
				<h2 id="sun">Sun</h2>
				<p>The Sun is a star, a hot ball of glowing gases at the heart of our solar system. Its influence extends far beyond the orbits of distant Neptune and Pluto. Without the Sun's intense energy and heat, there would be no life on Earth. And though it is special to us, there are billions of stars like our Sun scattered across the Milky Way galaxy.</p>
				</li>
				
				<li>
				<h2 id="mercury">Mercury</h2>
				<p>Sun-scorched Mercury is only slightly larger than Earth's Moon. Like the Moon, Mercury has very little atmosphere to stop impacts and it is covered with craters. Mercury's dayside is super heated by the Sun, but at night temperatures drop hundreds of degrees below freezing. Ice may even exist in craters. Mercury's egg-shaped orbit takes it around the Sun every 88 days.</p>
				</li>
				
				<li>
				<h2 id="venus">Venus</h2>
				<p>Venus is a dim world of intense heat and volcanic activity. Similar in structure and size to Earth, Venus' thick, toxic atmosphere traps heat in a runaway 'greenhouse effect.' The scorched world has temperatures hot enough to melt lead. Glimpses below the clouds reveal volcanoes and deformed mountains. Venus spins slowly in the opposite direction of most planets.</p>
				</li>
				
				<li>
				<h2 id="earth">Earth</h2>
				<p>Earth is an ocean planet. Our home world's abundance of water - and life - makes it unique in our solar system. Other planets, plus a few moons, have ice, atmospheres, seasons and even weather, but only on Earth does the whole complicated mix come together in a way that encourages life - and lots of it.</p>
				</li>
				
				<li>
				<h2 id="mars">Mars</h2>
				<p>Though details of Mars' surface are difficult to see from Earth, telescope observations show seasonally changing features and white patches at the poles. For decades, people speculated that bright and dark areas on Mars were patches of vegetation, that Mars could be a likely place for life-forms, and that water might exist in the polar caps. When the Mariner 4 spacecraft flew by Mars in 1965, many were shocked to see photographs of a bleak, cratered surface. Mars seemed to be a dead planet. Later missions, however, have shown that Mars is a complex member of the solar system and holds many mysteries yet to be solved.</p>
				</li>
				
				<li>
				<h2 id="jupiter">Jupiter</h2>
				<p>The most massive planet in our solar system, with four large moons and many smaller moons, Jupiter forms a kind of miniature solar system. Jupiter resembles a star in composition. In fact, if it had been about 80 times more massive, it would have become a star rather than a planet.</p>
				</li>
				
				<li>
				<h2 id="saturn">Saturn</h2>
				<p>Saturn was the most distant of the five planets known to the ancients. Like Jupiter, Saturn is made mostly of hydrogen and helium. Its volume is 755 times greater than that of Earth. Winds in the upper atmosphere reach 500 meters (1,600 feet) per second in the equatorial region. These super-fast winds, combined with heat rising from within the planet's interior, cause the yellow and gold bands visible in the atmosphere.</p>
				</li>
				
				<li>
				<h2 id="uranus">Uranus</h2>
				<p>The first planet found with the aid of a telescope, Uranus was discovered in 1781 by astronomer William Herschel. The seventh planet from the Sun is so distant that it takes 84 years to complete one orbit.</p>
				</li>
				
				<li>
				<h2 id="neptune">Neptune</h2>
				<p>Nearly 4.5 billion kilometers (2.8 billion miles) from the Sun, Neptune orbits the Sun once every 165 years. It is invisible to the naked eye because of its extreme distance from Earth. Interestingly, the unusual elliptical orbit of the dwarf planet Pluto brings Pluto inside Neptune's orbit for a 20-year period out of every 248 Earth years</p>
				</li>
			</ul>
			
		</section>
		

		<div class="planet flex flex-col" id="planet">
			<div class="title-planet mt-[15%] m-auto" >
				<h1 class="text-[3.5vw] mt-[-10%] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Planets In Our Solar System</h1>
			</div>
			<div class="merkurius mt-[10%] flex">
				<div class="text-merkurius ml-[10%]">
					<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Mercury</h1>
					<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">Mercury is the smallest planet in our solar system, and it is also the closest planet to the sun. It is named after the Roman messenger god, Mercury, who was known for his speed, which is appropriate since the planet Mercury moves very quickly in its orbit around the sun.

						Mercury is a rocky planet, with a heavily cratered surface similar to the Earth's moon. It has a diameter of approximately 4,880 kilometers (3,032 miles), which is about one-third the diameter of Earth. Due to its proximity to the sun, Mercury experiences extreme temperature fluctuations, with surface temperatures ranging from -173°C (-280°F) at night to 427°C (800°F) during the day.
						
						</h2>
				</div>
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/77713a8337f44e5b86d87e482fce5088/embed"  width="500px" height="500px" class="ml-[20%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
			</div>
			<div class="venus mt-[10%] flex">
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/0e37b5bb3fbc4d3da134b0a5494fe14c/embed"  width="500px" height="500px" class="ml-[30%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
					<div class="text-venus ml-[10%]">
						<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Venus</h1>
						<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">Venus is a planet in our solar system that is known for its thick atmosphere made up mostly of carbon dioxide. It is often referred to as the Earth's sister planet because of its similar size and composition. It is a terrestrial planet with a rocky surface, and it is the second planet from the sun. Venus has a slow rotation on its axis, taking 243 Earth days to complete one rotation. Its thick atmosphere creates a greenhouse effect that traps heat, making it the hottest planet in our solar system. Despite its proximity to Earth and its brightness in the sky, Venus is a harsh and inhospitable world, with a surface temperature hot enough to melt lead.
							</h2>
					</div>
			</div>
			<div class="bumi mt-[10%] flex">
				<div class="text-bumi ml-[10%]">
					<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Earth</h1>
					<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">
						Earth is a unique and diverse planet in our solar system that is well-suited to support life as we know it. It is a terrestrial planet with a solid and rocky surface, covered with oceans, forests, deserts, and other biomes. The planet's surface is constantly changing due to natural processes like erosion, tectonic activity, and volcanic eruptions.

						Earth has a thin atmosphere that contains a mix of gases, including oxygen, nitrogen, and carbon dioxide. The atmosphere plays a critical role in regulating the planet's temperature and protecting life from harmful radiation from space. It also allows for the cycling of water and other important elements like carbon and nitrogen, which are essential for life.
						</h2>
				</div>
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/41fc80d85dfd480281f21b74b2de2faa/embed"  width="500px" height="500px" class="ml-[20%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
			</div>
			<div class="mars mt-[10%] flex">
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/5fc8b7168b044527a05ed3903c998b65/embed"  width="500px" height="500px" class="ml-[30%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
					<div class="text-mars ml-[10%]">
						<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Mars</h1>
						<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">Mars is the fourth planet from the Sun and is often referred to as the Red Planet because of its reddish appearance in the night sky. It is a terrestrial planet with a rocky surface and a thin atmosphere that is mostly composed of carbon dioxide. Mars has a fascinating history, with evidence suggesting that liquid water once flowed on its surface, and scientists continue to study the planet for signs of past or present life.
							</h2>
					</div>
			</div>
			<div class="jupiter mt-[10%] flex">
				<div class="text-jupiter ml-[10%]">
					<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Jupiter</h1>
					<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">
						Jupiter is the fifth planet from the Sun and is the largest planet in our solar system. It is a gas giant planet, with no solid surface, and a thick atmosphere composed mostly of hydrogen and helium. Jupiter has a complex system of moons and rings, and it is known for its giant storms, including the famous Great Red Spot, a storm larger than the size of the Earth.
						</h2>
				</div>
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/61671f29ca0a4fa39dc9653290282418/embed"  width="500px" height="500px" class="ml-[20%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
			</div>
			<div class="saturnus mt-[10%] flex">
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/81bcb0c25c4f4e03bb7387e7bfbd44f7/embed"  width="500px" height="500px" class="ml-[30%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
					<div class="text-saturnus ml-[10%]">
						<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Saturn</h1>
						<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">Saturn is the sixth planet from the Sun and is another gas giant planet, with a similar composition to Jupiter. It is known for its spectacular system of rings, made up of ice particles and debris. Saturn also has numerous moons, with its largest moon, Titan, being the only moon in the solar system with a dense atmosphere and a stable liquid on its surface.
							</h2>
					</div>
			</div>
			<div class="uranus mt-[10%] flex">
				<div class="text-uranus ml-[10%]">
					<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Uranus</h1>
					<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">
						Uranus is the seventh planet from the Sun and is an ice giant planet, with a thick atmosphere composed mostly of hydrogen, helium, and methane. It is tilted on its side, causing its axis of rotation to be nearly parallel to the plane of its orbit. Uranus also has a system of rings and moons, including the interesting moon Miranda, with its unique geological features.
						</h2>
				</div>
				<div class="sketchfab-embed-wrapper"> <iframe title="Earthss" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b488282fa28344009fa8c8cdb3384456/embed"  width="500px" height="500px" class="ml-[20%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
			</div>
			<div class="neptunus mt-[10%] flex">
				<div class="sketchfab-embed-wrapper"> <iframe title="" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/947a405a0a4348f9a49ff4bd3ed3cc4b/embed"  width="500px" height="500px" class="ml-[30%]"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </div>
					<div class="text-neptunus ml-[10%]">
						<h1 class="text-[3.5vw] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Neptune</h1>
						<h2 style="font-family: 'Space Grotesk'; font-weight: 600; width: 800px" class="text-[1.5vw] text-justify mt-[20px]">Neptune is the eighth and farthest planet from the Sun, and it is also an ice giant planet. It has a thick atmosphere, similar to Uranus, and its blue color is caused by the presence of methane in its atmosphere. Neptune has a system of rings and moons, including its largest moon Triton, which is the coldest object in the solar system, with a temperature of -235 degrees Celsius.
							</h2>
					</div>
			</div>
		</div>

		<div class="games flex flex-col" id="games">
			<div class="title-games mt-[15%] m-auto" >
				<h1 class="text-[3.5vw] mt-[-10%] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Try Our Games</h1>
			</div>
			<a href="https://play.unity.com/mg/other/webgl-builds-325024" class="mt-[5%]">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_tbwn0lpb.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px; position: absolute; margin-left: 700px; margin-top: 150px"  loop  autoplay ></lottie-player>
				<img src="assets/image/Game-logo.jpg" alt="" srcset="" class="m-auto " id="gambar-game"  width="800px" height="500px" >
			</a>
		</div>
		<div class="about flex flex-col" id="about">
			<div class="title-about mt-[15%] m-auto">
				<h1 class="text-[3.5vw] mt-[-10%] animate__animated animate__fadeIn animate__slower animate__delay-5s"  style="font-family: 'Space Grotesk'; font-weight: 600; --animate-delay:2s;">Meet Our Team</h1>
			</div>
			<img src="assets/image/Poci-fullteam.png" alt="" srcset="" width="700px" height="700px" style="margin: auto; margin-top: 100px">
		</div>

		<div class="footer" style="border: solid 1px black">
			
		</div>
	</div>
	

	
	
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous"></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js'></script>
	<script src='//s3-us-west-2.amazonaws.com/s.cdpn.io/141228/OrbitControls.js'></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js'></script>
	<script src="/assets/js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
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