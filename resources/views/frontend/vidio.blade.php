@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
  <body>
      
    <div class="w-full bg-white">
      <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-24">
          <div class="text-center pb-12">
              <h2 class="text-base text-4xl font-bold text-indigo-600">
                Gallery
              </h2>
    <div>
      <div class="flex justify-center items-center">
          <div class="bg-gray-200 rounded-sm">
        <div class="inline-flex rounded-sm">
          <input type="radio" name="room_type" id="roomPrivate"  hidden/>
          <label for="roomPrivate" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/galery">Galerry</a></label>
        </div>
        <div class="inline-flex rounded-sm">
          <input type="radio" name="room_type" id="roomPublic" checked hidden/>
          <label for="roomPublic" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/vidio">vidio</a></label>
        </div>
        </div>
        </div>
    </div>
    <main class="py-4">
      <div class="px-4">
        <div class="block lg:flex justify-between md:-mx-2">
          @foreach ($vidio as $vid)
          <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
            <div class="bg-white rounded-lg overflow-hidden shadow relative">
              <video controls>
                  <source src="{{ $vid->video }}" type="video/webm">
              </video>
              <div class="p-4 h-auto md:h-40 lg:h-48">
                <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                  {{$vid->text}}
                </a>
                
                <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
                  <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#something</a>
                  <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sky</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
          
        </div>
      </div>
    </main>
  </section>
</div>
    <!-- component -->
    
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
</html>
@endsection