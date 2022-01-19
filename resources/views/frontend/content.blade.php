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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
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
        <!-- ========================= header end ========================= -->
        @foreach ($blog as $blog)
        <section  class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120">
          <div class="section-title text-center">
            <h3 class="mb-8 text-5xl font-bold">{{ $blog->tittle }}</h3>
          </div>
         <div>
           <img class="m-auto w-1/2 max-h-64 mb-12 rounded-lg "src="{{ $blog->image }}" alt="">
        </div>
          <div class=" m-auto w-3/4 ">
          <div class="whitespace-normal ...">
          <p class="indent-8 font-medium" style="font-family: 'Poppins', sans-serif;">{{ $blog->content }}</p>
        </div>
         </div>
      </section>      
        @endforeach

        <!-- ========================= footer start ========================= -->
        <footer class="bg-blue-600 text-white ">
          <div class="container flex flex-col p-4 mx-auto md:p-8 lg:flex-row divide-coolGray-400">
            <ul class="self-center py-6 space-y-4 text-center sm:flex sm:space-y-0 sm:justify-around sm:space-x-4 lg:flex-1 lg:justify-start">
              <li>Shop</li>
              <li>About</li>
              <li>Blog</li>
              <li>Pricing</li>
              <li>Contact</li>{{  }}
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
