@extends('layouts.frontend')

@section('tittle','blog')
    @section('content')
  <body>

        <!-- ========================= header end ========================= -->
      
        <section  class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120">
          <div class="section-title text-center">
            <h3 class="mb-8 text-5xl font-bold">{{ $blog->tittle }}</h3>
          </div>
         <div>
           <img class="m-auto w-1/2 max-h-64 mb-12 rounded-lg "src="/{{ $blog->image }}" alt="ggg">
        </div>
          <div class=" m-auto w-3/4 ">
            <div class="whitespace-normal ...">
          <p class="indent-8 font-medium" style="font-family: 'Poppins', sans-serif;">{!! $blog->content !!}</p>
            </div>
         </div>
         <div class="section-title text-center">
          <h6 class="mb-8 text-1xl font-bold">{{ $blog->author }}</h6>
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
    
  </body>
  @endsection
