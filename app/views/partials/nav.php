<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-10">
	<div class="w-full max-w-screen-lg mx-auto align-middle flex">
		<div class="flex items-center flex-shrink-0 text-white mr-16">
			<svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
			</svg>
			<span class="font-semibold text-xl tracking-tight"><a href="/">M2 Server List</a></span>
		</div>
		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>
		<div id="nav-content" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
			<div class="text-sm lg:flex-grow">
				<a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
					Home
				</a>
				<a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
					About
				</a>
			</div>
			<div>
				<a href="/add-server" class="inline-block text-sm px-5 py-3 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0">Add new server</a>
			</div>
		</div>
	</div>
</nav>

