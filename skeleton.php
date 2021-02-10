<div class="bg-white dark:bg-darker px-4 py-4  rounded-lg transition shadow-sm " id="skeletonpost">
    <div class="flex">
        <!-- profile picture -->
        <div class="w-10 h-10 animate-pulse bg-gray-200 dark:bg-dark border-4 border-gray-300 dark:border-darker text-center font-bold text-white bg-cover bg-center rounded-full mr-3 shadow-inner" style="background-image: url('')">
        </div>
        <div>
            <div class="flex items-center animate-pulse">
                <div class="bg-gray-200 dark:bg-dark rounded-sm h-4 w-3/6 mr-1"></div><div class="bg-gray-200 dark:bg-dark rounded-full w-4 h-4"></div>
            </div>
            <div class="flex items-center text-xs text-gray-600">
                <div class="bg-gray-200 dark:bg-dark rounded-sm h-2 w-20 mr-1"></div>
                <div class="py-1">
                    <div class="bg-gray-200 dark:bg-dark rounded-full h-1 w-1 mr-1"></div>
                </div>
                <div class="bg-gray-200 dark:bg-dark rounded-sm h-2 w-10 mr-1"></div>
            </div>
        </div>
        <!-- more options -->
        <div class="flex-shrink-0 flex flex-col ml-auto text-center leading-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 title-font leading-none fill-current animate-pulse transition duration-300 text-gray-200 hover:text-gray-200" viewBox="0 0 60 60" @click="open = !open" @click.away="open = false" :class="{'transform transition duration-300 text-gray-700': open}" x-transition:enter-end="transform duration-300 opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"><path d="M8 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM52 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM30 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path></svg>

        </div>
    </div>
    <div class="mt-4 mb-4">
        <div class="text-gray-600 pl-5 space-y-2">
            <div class="bg-gray-200 dark:bg-dark rounded-sm h-2 w-full animate-pulse"></div>
            <div class="bg-gray-200 dark:bg-dark rounded-sm h-2 w-5/6 animate-pulse"></div>
            <div class="bg-gray-200 dark:bg-dark rounded-sm h-2 w-4/6 animate-pulse"></div>
        </div>
    </div>
    <div class=" flex flex-row-reverse">
        <div class="mt-1 bg-gray-200 dark:bg-dark rounded-sm h-2 w-1/6 animate-pulse"></div>
    </div>
    <div class="mt-4 ml-2 flex items-center">
        <div class="flex font-semibold text-gray-700 mr-auto text-sm  ">
            <div class="w-4 h-4 mr-1 mb-1">
                <div class="bg-gray-200 dark:bg-dark rounded-sm h-4 w-12 animate-pulse"></div>
            </div>
        </div>
        <div class="flex mr-2 text-gray-700 text-sm mr-3">
            <div class="bg-gray-200 dark:bg-dark rounded-sm h-3 w-6 animate-pulse"></div>
        </div>
        <div class="flex mr-1 text-gray-700 text-sm">
            <div class="bg-gray-200 dark:bg-dark rounded-sm h-3 w-6 animate-pulse"></div>
        </div>
    </div>
    <div class="mt-6 border-gray-100 dark:border-primary-light animate-pulse border-t flex justify-between">
        <div class="bg-gray-200 dark:bg-dark rounded-sm w-24 h-4 ml-2 mt-4 animate-pulse"></div>
        <div class="flex pt-4">
            <button class="hover:opacity-75 transition  container focus:outline-none">
                <div class="bg-gray-200 dark:bg-dark rounded-full h-6 w-6 animate-pulse"></div>

            </button>
        </div>
    </div>
</div>
