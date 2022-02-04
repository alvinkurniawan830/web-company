@extends('layouts.frontend')

@section('title','Home')
    @section('content')
  
  <body>	
		<!-- ========================= header start ========================= -->

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
	@foreach ($about as $item)
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row flex items-center">
					<div class="w-full lg:w-1/2">
						<div class="about-content">
							<div class="section-title mb-8">
								<h1 class="mb-6 text-4xl md:text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl">{{$item->title}}</h1>
								<p class="">{{$item->text}}</p>
							</div>
							<ul class="about-feature">
								<li>{{$item->a}}</li>
								<li>{{$item->b }}</li>
								<li>{{$item->c }}</li>
							</ul>
							
						</div>
					</div>
					<div class="w-full lg:w-1/2 order-first lg:order-last">
						<div class="about-img-2 relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
							<img src="{{$item->image}}" alt="" class="w-100">
							<img src="img/about/about-right-shape.svg" alt="" class="shape shape-1">
							<img src="img/about/right-dots.svg" alt="" class="shape shape-2">
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach

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
						@foreach ($hero as $item)
							
						
						<div class="w-full md:w-1/2 lg:w-4/12">
							<div class="p-8 lg:px-3">
								<div class="feature-icon-2 mb-8 text-theme-color leading-none">
									<i class="lni lni-display"></i>
								</div>
								<div class="content">
									<h3 class="mb-5">{{ $item->title}}</h3>
									<p class="text-lg">{{ $item->text }}</p>
								</div>
							</div>
						</div>

						@endforeach
						
					</div>
				</div>
			</div>
		</section>
		

    <!-- ========================= footer start ========================= -->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1a53ff" fill-opacity="1" d="M0,64L40,53.3C80,43,160,21,240,53.3C320,85,400,171,480,192C560,213,640,171,720,170.7C800,171,880,213,960,192C1040,171,1120,85,1200,58.7C1280,32,1360,64,1400,80L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
   
  </body>
@endsection
