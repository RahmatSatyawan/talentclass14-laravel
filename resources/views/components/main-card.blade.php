<div class="card flex items-center justify-center gap-4 rounded-lg bg-white my-6 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]  dark:bg-zinc-900">
	
	
	<div class="h-max-20 w-max-16 basis-1/3 flex-initial shrink grow-0 w-16">
	<img class="object-cover w-full h-max-20 h-auto rounded-t-lg" src="{{ $news['image_url'] }}" alt="{{ $news['image_caption']}}">
	</div>


	<div class="card-body w-60 basis-2/3 flex-auto grow">
		<article class="flex max-w-xl flex-col items-start justify-between">
			<div class="flex items-center gap-x-4 text-xs">
			  <time datetime="2020-03-16" class="text-gray-500 dark:text-white">{{ $news['date']}}</time>
			<a href="{{ route('category', ['category' => $news['category']]) }}" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 hover:bg-gray-100 ring-1 ring-inset ring-gray-500/10">{{ ucfirst($news['category']) }}</a>
			</div>
			<div class="group relative">
			  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 
			   dark:text-white group-hover:text-gray-600">
				<a href="#">
				  <span class="absolute inset-0"></span>
				  {{ $news['title'] }}
				</a>
			  </h3>
			  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-white">{{ Str::limit($news['body'], 150, '...') }}</p>
			</div>
			<div class="relative mt-8 flex items-center gap-x-4">
			  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
			  <div class="text-sm leading-6">
				<p class="font-semibold text-gray-900">
				  <a href="#">
					<span class="absolute inset-0"></span>
					Michael Foster
				  </a>
				</p>
				<p class="text-gray-600">Co-Founder / CTO</p>
			  </div>
			</div>
		  </article>

		<div>
		<a href="{{ route('news.show', ['news' => $news['id']]) }}"><button
			class="mt-4 px-2 py-2 text-sm text-black dark:text-white bg-red-100 rounded-md block"
		>
			Read More <svg class=" inline size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
		</button></a>
	</div>
	</div>
</div>

