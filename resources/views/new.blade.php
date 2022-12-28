<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">Twenty <span>by HTML5 UP</span></a></h1>
					<nav id="nav">
						<ul>
							@auth
							<li class="btn btn-warning"> <span class="font-bold uppercase"> WellCome {{auth()->user()->name}} </span> </li>
							<li ><a href="/disaster/manage" class="button primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
								<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
							  </svg> Manage</a></li>
							  <li>
								<form method="POST"  action="/logout" >
								@csrf
								<button type="submit" class="btn btn-dark justify-content-center">	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed-fill mr-2" viewBox="0 0 16 16">
									<path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								  </svg>Logout</button>

							
								</form>
							  </li>
							  @else
						
							<li><a href="/#projects" class="button primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill mr-2" viewBox="0 0 16 16">
								<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
							  </svg>Shared By You</a></li>
							 
							<li><a href="/register" class="button primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right mr-2" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
								<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
							  </svg>Sign Up</a></li>
							  <li><a href="/login" class="button primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
								<path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
							  </svg>Log In</a></li>
						
							@endauth
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>TWENTY</h2>
						</header>
						<p>This is <strong>Twenty</strong>, a free
						<br />
						responsive template
						<br />
						by <a href="http://html5up.net">HTML5 UP</a>.</p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">
					

					<header class="special container" >
						<form action="">
						<div class="input-group mb-4 "  >
						
							<input type="text" name="search" style="height: 5rem" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="button-addon2">
							<div class="input-group-append  ">
							  <button class="btn btn-outline-secondary"  type="submit" id="button-addon2">Search</button>
							</div>
						
						  </div>
						</form>
						
						<span class="icon solid fa-chart-bar"></span>
						<h2 class="mt-2" >As this is my <strong>twentieth</strong> freebie for HTML5 UP
						<br />
						I decided to give it a really creative name.</h2>
						<p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,
						<br />
						it's minimally designed, fully responsive, built on HTML5/CSS3,
						and, like all my stuff,
						<br />
						released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
									<footer>
										<ul class="buttons">
											<li><a href="#" class="button">Find Out More</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<li><span class="icon fa-clock"><span class="label">Feature 1</span></span></li>
										<li><span class="icon solid fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon solid fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon solid fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon solid fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>

					

<!-- Two -->
				
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Next look at this <strong>Projects</strong></h2>
							</header>


							<x-static />

						</section>




            	<!-- Three -->
            <section id="projects" class="wrapper style1 container special">
				<h2>Shared By You</h2>
							<div class="row">
                @foreach($listings as $listing)
								<div class="col-4 col-12-narrower">

									<x-listing-card :listing="$listing"  />

								</div>
               @endforeach
				
							</div>
							<a href='disaster/create'>	
								<button type="button" style="min-width: 6rem" class="btn btn-dark justify-content-center mt-4">Create Your Disaster</button>
							 </a>
						</section>
						
						
				</article>
				

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button primary">Take My Money</a></li>
							<li><a href="#" class="button">LOL Wut</a></li>
						</ul>
					</footer>

				</section>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>