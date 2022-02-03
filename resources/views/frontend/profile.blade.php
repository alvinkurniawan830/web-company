@extends('layouts.frontend')

@section('title','Profile')
    @section('content')
  
  <body>
   
	@foreach ($profile as $misi)
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
@endsection