<div class="card flex items-center justify-center gap-4 rounded-lg bg-white my-6 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]  dark:bg-zinc-900">
	<div class="h-max-20">
	<img class="object-cover w-full h-max-20 h-auto rounded-t-lg" src="{{ $news['image_url'] }}" alt="{{ $news['image_caption']}}">
	</div>
	<div class="card-body">
		<h5 class="card-title text-xl font-semibold text-black dark:text-white">{{ $news['title'] }}</h5>
		<p class="card-text text-m text-black dark:text-white">News description goes here.</p>

		<div class="mt-4 flex gap-3">
			<span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">{{ ucfirst($news['category']) }}</span>
			<span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Luar Negeri</span>
			<span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Politik</span>
		</div>

		<div>
		<button
			class="mt-4 px-2 py-2 text-sm text-black dark:text-white bg-red-100 rounded-md block"
		>
			Read More <svg class=" inline size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
		</button>
	</div>
	</div>
</div>

<article class="flex max-w-xl flex-col items-start justify-between">
	<div class="flex items-center gap-x-4 text-xs">
	  <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
	  <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
	</div>
	<div class="group relative">
	  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
		<a href="#">
		  <span class="absolute inset-0"></span>
		  Boost your conversion rate
		</a>
	  </h3>
	  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
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