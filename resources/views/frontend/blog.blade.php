@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
  <body>
  

    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
      <div class="container">
         <div class="flex flex-wrap -mx-4"> 
            @foreach ($blog as $blog) 
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
                           href="/content"
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
                        href="/content/{{ $blog->id }}"
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
            @endforeach

           
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
     
  </body>
  @endsection