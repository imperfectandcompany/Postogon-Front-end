			<div class="flex-none md:flex py-4">
			<div class="w-1/5">
			</div>	
  <div class=" md:w-3/5 md:rounded-lg transition border-b-2 ">
  <style>
    #sortbox:checked ~ #sortboxmenu {
        opacity: 1;
    }
</style>

<div class="relative flex flex-row-reverse">
    <input type="checkbox" id="sortbox" class="hidden absolute">
    <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
    <span class="text-lg">Sort By</span>
    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </label>

        <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-gray-300 border border-gray-400 transition delay-75 ease-in-out z-10">
        <ul class="block text-right text-gray-900">
            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Feed One</a></li>
            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Feed Two</a></li>
        </ul>
    </div>
</div>
</div>
			<div class="w-1/5">
			</div>
</div>		