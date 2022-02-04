@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
  <body>
    
    <!-- component -->
    
    <div class="w-full bg-white" >
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-24 ">
            <div class="text-center pb-12">
                <h2 class="text-base text-4xl font-bold text-indigo-600">
                  Gallery
                </h2>
                <div>
                  <div class="flex justify-center items-center">
                      <div class="bg-gray-200 rounded-sm">
                    <div class="inline-flex rounded-sm">
                      <input type="radio" name="room_type" id="roomPrivate"  hidden/>
                      <label for="roomPrivate" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/galery">Gallery</a></label>
                    </div>
                    <div class="inline-flex rounded-sm">
                      <input type="radio" name="room_type" id="roomPublic" checked hidden/>
                      <label for="roomPublic" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/vidio">vidio</a></label>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
              @foreach ($gallery as $item)
              <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                 <div class="shadow-lg bg-white rounded-lg overflow-hidden mb-10">
                    <img
                       src="{{$item->image}}"
                       alt="image"
                       class="h-64 bg-cover lg:rounded-lg lg:h-full"

                       />
                    <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                       <h3 class="
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
                       ">
                         {{ $item->title }} 
                       </h3>
                       <p class="text-base text-body-color leading-relaxed mb-7">
                          {{ $item->text }}
                       </p>
                    </div>
                 </div>
              </div>
              @endforeach
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


   
  </body>

@endsection