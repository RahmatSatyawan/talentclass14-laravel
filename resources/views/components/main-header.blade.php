
<div class="min-h-full">
	<nav x-data="{ isOpen: false }" class="bg-gray-800" > 
		{{-- x-data is open --}}
	  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-16 items-center justify-between">
		  <div class="flex items-center">
			<div class="flex-shrink-0">
				<a href="/">
			  <img class="w-auto h-8" src="/img/logo-no-background.png">
			</a>
			</div>
			<div class="hidden md:block">
			  <div class="ml-10 flex items-baseline space-x-4">
				<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
				@foreach ($categories as $category )
				<a href="{{ route('category', ['category' => strtolower($category)]) }}" class="{{ request()->category == strtolower($category) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">{{ $category}}</a>
					
				@endforeach
			  </div>
			</div>
		  </div>

		  <div class="hidden md:block">
			<div class="ml-4 flex items-center md:ml-6">
				{{-- Dark mode button --}}
				<button id="theme-toggle" type="button"
					class="text-gray-200 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700 focus:outline-none  dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
					<svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
					</svg>
					<svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
							fill-rule="evenodd" clip-rule="evenodd"></path>
					</svg>
				</button>
			  <!-- Profile dropdown -->
			  <div class="relative ml-3">
				<div>
					
					
				  <button @click="isOpen= !isOpen" type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
					<span class="absolute -inset-1.5"></span>
					<span class="sr-only">Open user menu</span>
					<img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
				  </button>
				</div>

				<div
				x-show="isOpen"
				x-transition:enter="transition ease-out duration-100 transform"
				x-transition:enter-start="opacity-0 scale-95"
				x-transition:enter-end="opacity-100 scale-100"
				x-transition:leave="transition ease-in duration-75 transform"
				x-transition:leave-start="opacity-100 scale-100"
				x-transition:leave-end="opacity-0 scale-95"
				class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
				  <!-- Active: "bg-gray-100", Not Active: "" -->
				  @if (Route::has('login'))
					@auth
				  <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
				  <form method="POST" action="{{ route('logout') }}" x-data>
					@csrf
		
					<a class="block px-4 py-2 text-sm text-gray-700" tabindex="-1" id="user-menu-item-0" href="{{ route('logout') }}"
@click.prevent="$root.submit();">
						{{ __('Log Out') }}
					</a>
				</form>
					@else
					<a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Log in</a>
					@if (Route::has('register'))
					<a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Register</a>
					@endif
					@endauth
				@endif

				</div>
			  </div>
			</div>
		  </div>



		  <div class="-mr-2 flex md:hidden">
			
			<!-- Mobile menu button -->
			<button @click="isOpen= !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
			  <span class="absolute -inset-0.5"></span>
			  <span class="sr-only">Open main menu</span>
			  <!-- Menu open: "hidden", Menu closed: "block" -->
			  <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			  </svg>
			  <!-- Menu open: "block", Menu closed: "hidden" -->
			  <svg :class="{'block': isOpen, 'hidden': !isOpen}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			  </svg>
			</button>
		  </div>
		</div>
	  </div>
  
	  <!-- Mobile menu, show/hide based on menu state. -->
	  <div x-show='isOpen' class="md:hidden" id="mobile-menu">
		<div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
		  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
		  @foreach ($categories as $category )
		  <a href="{{ route('category', ['category' => strtolower($category)]) }}" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">{{ $category}}</a>
		  @endforeach
		
		
		  {{-- Dark mode button --}}
		  <button class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" id="theme-toggle-mobile" type="button"
		  class="text-gray-200 dark:text-gray-200 hover:bg-gray-700 dark:hover:bg-gray-700 focus:outline-none  dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
		  <svg id="theme-toggle-dark-icon-mobile" class="hidden inline w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
			  xmlns="http://www.w3.org/2000/svg">
			  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
		  </svg>
		  <svg id="theme-toggle-light-icon-mobile" class="hidden inline w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
			  xmlns="http://www.w3.org/2000/svg">
			  <path
				  d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
				  fill-rule="evenodd" clip-rule="evenodd"></path>
		  </svg> <span>Dark/Light Mode</span>
	  </button>
		</div>



		
		<div class="border-t border-gray-700 pb-3 pt-4">
		  <div class="flex items-center px-5">
			<div class="flex-shrink-0">
			  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
			</div>
			<div class="ml-3">
			  <div class="text-base font-medium leading-none text-white">Tom Cook</div>
			  <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
			</div>
		  </div>
		  <div class="mt-3 space-y-1 px-2">
			@if (Route::has('login'))
			@auth
		  <a href="{{ url('/dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
		  {{-- <a href="{{ url('/logout') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a> --}}

		  <!-- Authentication -->
		  <form method="POST" action="{{ route('logout') }}" x-data>
			@csrf

			<a class="block px-4 py-2 text-sm text-gray-700" tabindex="-1" id="user-menu-item-0" href="{{ route('logout') }}"
@click.prevent="$root.submit();">
				{{ __('Log Out') }}
			</a>
		</form>
			@else
			<a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Log in</a>
			@if (Route::has('register'))
			<a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Register</a>
			@endif
			@endauth
		@endif
			{{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
			<a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
			<a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a> --}}
		  </div>
		</div>
	  </div>
	</nav>
  

  </div>
  