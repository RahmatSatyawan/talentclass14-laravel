<div id="default-carousel" class="relative w-full mb-8" data-carousel="slide">
	<!-- Carousel wrapper -->
	<div class="relative h-64 overflow-hidden rounded-lg md:h-80 lg:h-96">
		@foreach ($news->take(5) as $index => $newsItem)
			<div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
				<img src="{{ $newsItem['image_url'] }}" class="absolute block w-full h-full object-cover" alt="{{ $newsItem['title'] }}">
				<div class="absolute bottom-0 left-0 bg-black bg-opacity-50 w-full p-4">
					<h2 class="text-white text-lg md:text-xl lg:text-2xl font-bold">{{ $newsItem['title'] }}</h2>
				</div>
			</div>
		@endforeach
	</div>
	<!-- Slider indicators -->
	<div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-3 rtl:space-x-reverse">
		@foreach ($news->take(5) as $index => $newsItem)
			<button type="button" class="w-2.5 h-2.5 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-gray-300' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
		@endforeach
	</div>
	<!-- Slider controls -->
	<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
		<span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
			<svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
			</svg>
			<span class="sr-only">Previous</span>
		</span>
	</button>
	<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
		<span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
			<svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
			</svg>
			<span class="sr-only">Next</span>
		</span>
	</button>
</div>
<!-- End of new carousel -->



{{-- <div class="flex items-center justify-center gap-4 rounded-lg bg-white my-6 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 lg:pb-10 dark:bg-zinc-900 ">
	<div class="w-full max-w-lg">
		<div class="relative">
			<div class="carousel">
				<!-- Slide 1 -->
				<div class="carousel-item">
					<img class="min-h-52 max-h-62 w-full" src="https://via.placeholder.com/800" alt="Slide 1">
					<p>image 1</p>
				</div>
				
				<!-- Slide 2 -->
				<div class="carousel-item">
					<img class="min-h-32 max-h-62"  src="https://via.placeholder.com/800" alt="Slide 2">
					<p>image 2</p>
				</div>
				
				<!-- Slide 3 -->
				<div class="min-h-32 max-h-32"  class="carousel-item">
					<img src="https://via.placeholder.com/800" alt="Slide 3">
					<p>image 3</p>
				</div>
			</div>
			
			<!-- Slider controls -->
			<div class="carousel-controls">
				<button class="carousel-control prev">
					<svg class="w-6 h-6" viewBox="0 0 24 24">
						<path fill="currentColor" d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
					</svg>
				</button>
				<button class="carousel-control next">
					<svg class="w-6 h-6" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>

</div>

<style>
	.carousel {
		display: flex;
		overflow-x: scroll;
		scroll-snap-type: x mandatory;
		-webkit-overflow-scrolling: touch;
	}
	
	.carousel-item {
		flex: 0 0 auto;
		width: 100%;
		scroll-snap-align: start;
	}
	
	.carousel img {
		width: 100%;
		height: auto;
	}
	
	.carousel-controls {
		position: absolute;
		top: 50%;
		left: 0;
		right: 0;
		display: flex;
		justify-content: space-between;
		transform: translateY(-50%);
	}
	
	.carousel-control {
		background-color: rgba(0, 0, 0, 0.5);
		color: #fff;
		border: none;
		padding: 0.5rem;
		cursor: pointer;
	}
</style> --}}