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
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
		
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
        <!-- ========================= header end ========================= -->
<!-- component -->
<div class="w-full bg-white">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-24">
        <div class="text-center pb-12">
            <h2 class="text-base text-4xl font-bold text-indigo-600">
              Gallery
            </h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        @foreach ($gallery as $gallery)
            <div class="w-full bg-blue-600 rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                <div class="w-full md:w-2/5 h-80">
                    <img class="object-center object-cover w-full h-full" src="{{ $gallery->image }}" alt="photo">
                </div>
                <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                    <p class="text-xl text-white font-bold">{{ $gallery->name }}</p>
                    <p class="text-base text-white font-normal">Software Engineer</p>
                </div>
            </div>
        @endforeach
        </div>
    </section>
</div>
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
