<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

<!-- This is an example component -->
<div
      class="bg-grayDark"
    x-data="{ atTop: true }"
    x-on:scroll.window="atTop =( window.pageYOffset > 10) ? false : true "
     >
    <!-- Navbar -->
    <div
      class="w-full text-gray-700 bg-white h-16 fixed top-0 animated z-40"
      x-bind:class='{ "bg-black shadow-lg": !atTop }'
    >
      <div
        x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row"
      >
        <div class="p-4 flex flex-row items-center justify-between">
          <a
            href="home.html"
            class="tracking-widest rounded-lg focus:outline-none focus:shadow-outline"
          >

                        <object data="assets/logo.svg" height="32" width="32	" style="filter:brightness(0.1);
                           "></object>
  
		  
          </a>
          <!-- Button Mobile Nav -->
          <button
            class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
			@click.away="open = false"
            @click="open = !open"
          >
            <span class="text-lg text-primary"
              ><i class="fas fa-bell"></i
            ></span>
          </button>
          <!-- End Button Mobile Nav -->
        </div>
        <!-- Navbar Mobile -->
        <nav
          :class="{'flex': open, 'hidden': !open}"
          class=" flex-grow relative hidden bg-white shadow-lg rounded-b"
        >
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 origin-top transition shadow-lg md:w-48"
            >

            <div class="bg-white  shadow-lg">
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Sarah_Palin_by_Gage_Skidmore_2.jpg/220px-Sarah_Palin_by_Gage_Skidmore_2.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Sarah Palin</span> liked your comment <span class="font-bold text-blue-500" href="#">sarah fell off</span> <div class="ml-auto">2m</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2020/3/6/8e2e4e604117477a9621dafd02f2abd7_18.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Joe Biden</span> start following you. <div class="ml-auto">45m</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://static01.nyt.com/images/2021/01/20/multimedia/20xp-trumppardonslist-BANNON2/20xp-trumppardonslist-BANNON2-mediumSquareAt3X.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Not Trump</span> liked your comment <span class="font-bold text-blue-500" href="#">I wonder if Trump made a new acc...</span> <div class="ml-auto">1h</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg5ODI4MTEw/barack-obama-12782369-1-402.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Barack Obama</span> start following you. <div class="ml-auto">3h</div>
                    </p>
                </a>
            </div>
            <a href="#" class="block bg-red-500  shadow-lg text-white text-center rounded-b-lg font-bold py-2">See all notifications</a>
        </div>
	
        </nav>
        <!-- End Navbar Mobile -->
        <nav
          class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row bg-white"
        >
          <a
            class="flex items-center px-3 py-1 mt-2 text-lg font-semibold text-primary rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            href="#"
          >
            <i class="fas fa-envelope"></i>
          </a>
          <div
            @click.away="open = false"
            class="relative"
            x-data="{ open: false }"
          >
            <button
              @click="open = !open"
              class="flex flex-row items-center w-full px-3 py-1 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:mt-0 md:ml-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            >
              <span class="text-lg text-primary"
                ><i class="fas fa-bell"></i
              ></span>
            </button>
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
            >

            <div class="py-2 bg-white rounded-lg shadow-sm">
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Sarah_Palin_by_Gage_Skidmore_2.jpg/220px-Sarah_Palin_by_Gage_Skidmore_2.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Sarah Palin</span> liked your comment <span class="font-bold text-blue-500" href="#">sarah fell off</span> <div class="ml-auto">2m</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2020/3/6/8e2e4e604117477a9621dafd02f2abd7_18.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Joe Biden</span> start following you. <div class="ml-auto">45m</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://static01.nyt.com/images/2021/01/20/multimedia/20xp-trumppardonslist-BANNON2/20xp-trumppardonslist-BANNON2-mediumSquareAt3X.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Not Trump</span> liked your comment <span class="font-bold text-blue-500" href="#">I wonder if Trump made a new acc...</span> <div class="ml-auto">1h</div>
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b rounded-lg transition hover:bg-gray-100 hover:shadow-sm hover:underline -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg5ODI4MTEw/barack-obama-12782369-1-402.jpg" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Barack Obama</span> start following you . <div class="ml-auto">3h</div>
                    </p>
                </a>
            </div>
            <a href="#" class="block bg-red-500 text-white text-center rounded-b-lg font-bold py-2 ">See all notifications</a>
        </div>
          </div>
          <div
            @click.away="open = false"
            class="relative"
            x-data="{ open: false }"
          >

		  <div class="flex flex-row items-center w-full px-1 py-1 mt-6 text-sm font-semibold text-left bg-transparent rounded-full md:w-auto md:mt-0 md:ml-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
		  							        <div class="cursor-pointer  w-6 h-6 bg-gray-700 transition hover:bg-gray-600 border-2 border-gray-500 text-center font-bold text-white rounded-full shadow-inner" @click="open = !open" @click.away="open = false" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" style="background-image: url('')"><div class="select-none text-sm">?</div>
		</div>			
		</div>			

            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
            >
              <div class="px-2 py-2 bg-white rounded-md shadow">
                <a
                  class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="#"
                  >Profile</a
                >
                <a
                  class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="chat.html"
                  >Settings</a
                >
                <a
                  class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="#"
                  >Log out</a
                >
              </div>
            </div>
			
          </div>

        </nav>
      </div>
    </div>

</div>
