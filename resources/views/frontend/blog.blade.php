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


    

    @foreach ($blog as $blog) 
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
      <div class="container">
         <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 px-4">
               <div class="bg-white rounded-lg overflow-hidden mb-10">
                  <img
                     src="{{ $blog->image }}"
                     alt="image"
                     class="w-full"
                     />
                  <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                     <h3>
                        <a
                           href="javascript:void(0)"
                           class="
                           font-semibold
                           text-dark text-xl
                           sm:text-[22px]
                           md:text-xl
                           lg:text-[22px]
                           xl:text-xl
                           2xl:text-[22px]
                           mb-4
                           block
                           hover:text-primary
                           "
                           >
                        {{ $blog->tittle }}
                        </a>
                     </h3>
                     <p class="text-base text-body-color leading-relaxed mb-7">
                       {{ $blog->author }}
                     </p>
                     <a
                        href="/content"
                        class="
                        inline-block
                        py-2
                        px-7
                        border border-[#E5E7EB]
                        rounded-full
                        text-base text-body-color
                        font-medium
                        hover:border-primary hover:bg-primary hover:text-black
                        transition
                        "
                        >
                     Read More
                     </a>
                  </div>
               </div>
            </div>

           
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
