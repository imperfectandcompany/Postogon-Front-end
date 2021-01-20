<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>



            <div class="flex mb-6 pb-2 sticky top-0">
                  <div class="w-1/5 text-center py-8">
                     <div class="text-grey-darker px-2 mb-2">
                        <span class="text-3xl"></span>
                     </div>
                  </div>
				  
				  
                  <div class="bg-white md:w-3/5 rounded-lg  shadow-sm">
    <div class="p-4">
	<div class="flex">

	<div class="my-auto">
	        <div class="cursor-pointer w-10 h-10 bg-gray-700 transition hover:bg-gray-600 border-4 border-gray-500 text-center font-bold text-white bg-cover bg-center rounded-full mr-3 shadow-inner" @click="open = !open" @click.away="open = false" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" style="background-image: url('')"><div class="my-1 select-none">?</div>
		</div>
	</div>	
      <textarea class="bg-gray-200 w-full p-2 rounded-lg border focus:outline-none " placeholder="What's Poppin'?"></textarea>
	</div>
		
      
      <div class=" flex mt-3">
	  <div class="w-1/3"></div>
	  <div class="w-1/3"></div>
	  <div class="w-1/3">	  
	            <button type="button" class="float-right bg-red-500 transition hover:bg-red-600 text-white p-3 rounded-lg">Submit</button>
		</div>
      </div>
    </div>		 
    </div>

	
	
	

                  <div class="w-1/5 text-center py-8">
                     <div class="text-grey-darker px-2 mb-2">
                        <span class="text-3xl"></span>
                     </div>
                  </div>
		</div>
		
		
