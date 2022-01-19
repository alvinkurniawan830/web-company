<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="css/tiny-slider.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/tailwindcss.css"/>
	<script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>	
		<!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container relative">
          <div class="row items-center">
            <div class="w-full">
              <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                  <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                    <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/">Home</a>
                    </li>
                     <li class="nav-item ml-5 lg:ml-11">
                      <a  href="profil">Profil</a>
                    </li>
                    <li class="nav-item ml-5 lg:ml-11">
                      <a href="/portofolio">Portofolio</a>
                    </li>

                    <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/blog">Blog</a>
                    </li>
                    <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/kontak">kontak</a>
                    </li>
                    <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/galery">Gallery</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
	@foreach ($home as $home)
    <section  class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120" style="background-image: url('img/hero/hero-bg.svg')">
      <div class="container">
        <div class="row flex items-center relative">
          <div class="w-full lg:w-1/2">
            <div class="hero-content mb-0 lg:mb-6">
              <h1 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">{{ $home->title }}</h1>
              <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
				{{ $home->text }}
              </p>
            </div>
			</div>
			<div class="w-full lg:w-1/2">
				<div class="hero-img pt-8 lg:pt-0">
					<img src="{{ $home->image }}" alt="" class="w-full lg:w-auto">
				</div>
			</div>
        </div>
		</div>
    </section>
	@endforeach
		
		<!-- ========================= about2-section start ========================= -->
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row flex items-center">
					<div class="w-full lg:w-1/2">
						<div class="about-content">
							<div class="section-title mb-8">
								<h1 class="mb-6 text-4xl md:text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl">Easy to Use with Tons of Awesome Features</h1>
								<p class="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
							<ul class="about-feature">
								<li>Quick Access</li>
								<li>Easily to Manage</li>
								<li>24/7 Support</li>
							</ul>
							<a href="javascript:void(0)" class="main-btn btn-hover border-btn ">Learn More</a>
						</div>
					</div>
					<div class="w-full lg:w-1/2 order-first lg:order-last">
						<div class="about-img-2 relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
							<img src="img/about/about-2.png" alt="" class="w-100">
							<img src="img/about/about-right-shape.svg" alt="" class="shape shape-1">
							<img src="img/about/right-dots.svg" alt="" class="shape shape-2">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="why" class="feature-extended-section pt-25">
			<div class="feature-extended-wrapper py-18 bg-theme-color bg-opacity-10">
				<div class="container">
					<div class="row flex justify-center">
						<div class="w-full md:w-9/12 lg:w-8/12 xl:w-6/12">
							<div class="section-title text-center mb-15">
								<h1 class="mb-6">Why Choose SaaSpal</h1>
								<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
							</div>
						</div>
					</div>

					<div class="row flex flex-wrap">
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-display"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">SaaS Focused</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-leaf"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">Awesome Design</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-grid-alt"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">Ready to Use</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-javascript"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">Vanilla JS</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-layers"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">Essential Sections</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-rocket"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">Highly Optimized</h3>
									<p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
    <!-- ========================= footer start ========================= -->
	<footer class="bg-blue-600 text-white ">
		<div class="container flex flex-col p-4 mx-auto md:p-8 lg:flex-row divide-coolGray-400">
			<ul class="self-center py-6 space-y-4 text-center sm:flex sm:space-y-0 sm:justify-around sm:space-x-4 lg:flex-1 lg:justify-start">
				<li>Shop</li>
				<li>About</li>
				<li>Blog</li>
				<li>Pricing</li>
				<li>Contact</li>
			</ul>
			<div class="flex flex-col justify-center pt-6 lg:pt-0">
				<div class="flex justify-center space-x-4">
					©️Copyright Alvin
				</div>
			</div>
		</div>
	</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="js/tiny-slider.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
