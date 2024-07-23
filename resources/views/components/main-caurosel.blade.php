<div class="flex items-center justify-center gap-4 rounded-lg bg-white my-6 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 lg:pb-10 dark:bg-zinc-900 ">
	<div class="w-full max-w-lg">
		<div class="relative">
			<div class="carousel">
				<!-- Slide 1 -->
				<div class="carousel-item">
					<img class="min-h-32 max-h-32" src="slide1.jpg" alt="Slide 1">
					<p>image 1</p>
				</div>
				
				<!-- Slide 2 -->
				<div class="carousel-item">
					<img class="min-h-32 max-h-32"  src="slide2.jpg" alt="Slide 2">
					<p>image 2</p>
				</div>
				
				<!-- Slide 3 -->
				<div class="min-h-32 max-h-32"  class="carousel-item">
					<img src="slide3.jpg" alt="Slide 3">
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

{{-- <style>
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