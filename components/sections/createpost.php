<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

            <div class="flex-none md:flex mb-6 pb-2 mt-4">
                  <div class="md:w-1/5 text-center py-3">
                     <div class="">
                        <span class="text-3xl"></span>
                     </div>
                  </div>  
				  
				  
  <div class="bg-white md:w-3/5 p-6 rounded-lg transition shadow-sm">
  <div class="md:flex md:flex-col">
	<div class="flex">
	<div class="my-auto">
	        <div class="w-10 h-10 bg-gray-700 transition  border-4 border-gray-500 text-center font-bold text-white bg-cover bg-center rounded-full mr-3 shadow-inner" @click="open = !open" @click.away="open = false" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" style="background-image: url('')"><div class="my-1 select-none">?</div>
		</div>
	</div>	
      <textarea class="bg-gray-200 w-full p-2 rounded-lg border focus:outline-none " placeholder="What's Poppin'?"></textarea>
	  
	</div>	
    <!-- icons -->
    <div class="icons flex text-gray-500 m-2 ml-14">
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
      <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
    </div>
    <!-- buttons -->
    <div class="buttons flex flex-row-reverse">

      <div class="btn border border-red-500 p-1 px-4 font-semibold rounded-md cursor-pointer text-white transition hover:bg-red-600 ml-2 bg-red-500">Post</div>
    </div>
	</div>
  </div>

	

	

                  <div class="md:w-1/5 text-center py-3">
                     <div class="">
                        <span class="text-3xl"></span>
                     </div>
                  </div>  
		</div>

		
