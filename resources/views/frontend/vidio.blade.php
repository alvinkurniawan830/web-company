@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
  <body>
    
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