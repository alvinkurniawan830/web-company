<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"/>
    

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
      <div class="navbar-area bg-blue-600">
        <div class="container relative ">
          <div class="row ">
            <div class="w-full ">
              <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-blue shadow lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-blue lg:shadow-none" id="navbarOne">
                  <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                    <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/">Home</a>
                    </li>
                     <li class="nav-item ml-5 lg:ml-11">
                      <a  href="/profil">Profil</a>
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
	@foreach ($misi as $misi)
	<div class='flex items-center justify-center min-h-screen mt-48'>
		<section class="text-center mx-6 lg:w-2/3">
			<img class="m-auto w-24 lg:w-48" src="{{ $misi->image }}" />
			<h1 class="mt-2 mb-1 text-2xl lg:text-3xl">We'll be back soon!</h1>
			<div>
				<p>
					{{ $misi->text }}
				</p>
				<p class="mt-4">Team Pharmawala</p>
			</div>

			<div class="grid grid-cols-2 gap-8 place-items-stretch h-48 mt-16 mb-12">
				<div class="text-2xl font-bold text-blue-900">VISI</div>
				<div class="text-2xl font-bold text-blue-900">MISI</div>
				<div>{{ $misi->visi }}</div>
				<div>{{ $misi->misi }}</div>
			</div>

		</section>
	</div>
	
		@endforeach
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
  </body>
</html>