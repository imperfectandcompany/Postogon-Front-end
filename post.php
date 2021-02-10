             <div class="px-4 py-4 transition bg-white rounded-lg shadow-sm dark:bg-darker">
                    <div class="flex">
                        <!-- profile picture -->
                        <div x-data="{ open: false }">
                            <div :class="{'border-indigo-700 transform transition duration-300 ': open}" @click="open = !open" @click.away="open = false" class="w-10 h-10 mr-3 font-bold text-center text-white transition bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full shadow-inner cursor-pointer hover:bg-gray-600" style="background-image: url('')" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"><div class="my-1 select-none">?</div>
                            </div>
                        </div>
                        <!-- profile name -->
                        <div>
                            <div class="flex items-center transition duration-500 transform hover:-translate-y-1">
                                <p class="mr-1 font-bold cursor-pointer text-primary-dark dark:text-light hover:underline">Profile</p><svg class="h-6 py-1 leading-none text-gray-500 transition cursor-pointer fill-current title-font hover:text-gray-700" viewBox="1 -18 511.999 511" xmlns="http://www.w3.org/2000/svg">
                                <defs/>
                                <path d="M208.113 319.57c0 11.371 9.246 20.618 20.617 20.618h94.934c11.371 0 20.621-9.25 20.621-20.618v-95.554H208.113zm53.086-52.558c0-8.285 6.715-15 15-15 8.281 0 15 6.715 15 15v30.18c0 8.285-6.719 15-15 15-8.285 0-15-6.715-15-15zm0 0"/>
                                <path d="M442.973 70.082C398.433 25.211 339.203.5 276.199.5c-63.004 0-122.234 24.71-166.777 69.582-44.512 44.84-69.024 104.453-69.024 167.856 0 36.714 8.512 73.175 24.664 105.828-7.738 29.07-28.375 53.222-56.03 65.226-7.598 3.297-11.087 12.133-7.79 19.73.66 1.52 1.54 2.872 2.586 4.04 19.942 22.836 48.676 35.925 78.867 35.925 26.508 0 51.739-10.007 71-27.828 36.86 22.621 78.946 34.516 122.504 34.516 63.004 0 122.235-24.71 166.774-69.582C487.484 360.953 512 301.34 512 237.937s-24.516-123.015-69.027-167.855zM374.285 319.57c0 27.914-22.707 50.618-50.62 50.618H228.73c-27.91 0-50.617-22.708-50.617-50.618V214.762c0-11.438 9.305-20.746 20.746-20.746h17.172v-40.164c0-33.176 26.992-60.168 60.168-60.168 33.172 0 60.164 26.992 60.164 60.168v40.164h17.176c11.438 0 20.746 9.308 20.746 20.746zm0 0"/>
                                <path d="M306.363 153.852c0-16.633-13.531-30.168-30.164-30.168-16.633 0-30.168 13.53-30.168 30.168v40.164h60.332zm0 0"/>
                            </svg>
                            </div>
                            <!-- post timestamp -->
                            <div class="flex items-center text-xs text-gray-600">
                                <p>20 September 2020</p>
                                <p class="px-1">•</p>
                                <p>10:47 PM</p>
                            </div>
                        </div>
                        <!-- post options -->
                        <div class="flex flex-col flex-shrink-0 ml-auto leading-none text-center">
                            <div x-data="{ open: false }">
                                <svg :class="{'transform transition duration-300 text-gray-700': open}" @click="open = !open" @click.away="open = false" class="h-4 leading-none text-gray-500 transition duration-300 cursor-pointer fill-current title-font hover:text-gray-700" viewBox="0 0 60 60" x-transition:enter-end="transform duration-300 opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" xmlns="http://www.w3.org/2000/svg"><path d="M8 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM52 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM30 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <!-- post content -->
                    <div class="mt-4 mb-4">
                        <p class="ml-5 mr-5 text-sm antialiased break-words dark:text-light sm:subpixel-antialiased md:antialiased">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </p>
                    </div>
                    <!-- post bio -->
                    <div class="flex flex-row-reverse">
                        <div class="flex items-center text-xs text-gray-400 transition hover:text-gray-500">
                            <p class="mt-1">Yale '22, Studying Engineering 💻</p>
                        </div>
                    </div>
                    <!-- like, comments, and share -->
                    <div class="flex items-center mt-4 ml-2">
                        <div class="flex mr-2 mr-3 text-sm text-primary dark:text-light">
                            <svg class="w-4 h-4 mr-1 animate-bounce" fill="none"  stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                            <span class="">12</span>
                        </div>
                        <div class="flex mr-1 text-sm text-primary dark:text-light">
                            <svg class="w-4 h-4 mr-1 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                            <span>8</span>
                        </div>
                        <div class="flex ml-auto text-sm font-bold transition duration-500 transform cursor-pointer text-primary-dark dark:text-light hover:-translate-y-1">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                            <span>Share</span>
                        </div>
                    </div>
                    <!-- create a comment -->
                    <div class="flex justify-between mt-6 border-t border-gray-100 dark:border-primary-light">
                        <input class="w-full pt-4 ml-2 text-gray-700 placeholder-gray-300 dark:bg-darker dark:text-light focus:outline-none" placeholder="Add comment" type="text">
                        <div class="flex pt-4">
                            <button class="transition hover:opacity-75 focus:outline-none">
                                <i>
                                    <svg
                                            class="w-6 h-6 text-gray-300 transition fill-current hover:text-gray-700"
                                            height="512"
                                            viewBox="0 0 511.072 511.072"
                                            width="512"
                                    >
                                        <path
                                                d="M74.39 480.536H38.177l25.607-25.607c13.807-13.807 22.429-31.765 24.747-51.246-36.029-23.644-62.375-54.751-76.478-90.425C-2.04 277.611-3.811 238.37 6.932 199.776c12.89-46.309 43.123-88.518 85.128-118.853 45.646-32.963 102.47-50.387 164.33-50.387 77.927 0 143.611 22.389 189.948 64.745 41.744 38.159 64.734 89.63 64.734 144.933 0 26.868-5.471 53.011-16.26 77.703-11.165 25.551-27.514 48.302-48.593 67.619-46.399 42.523-112.042 65-189.83 65-28.877 0-59.01-3.855-85.913-10.929-25.465 26.123-59.972 40.929-96.086 40.929zm182-420c-124.039 0-200.15 73.973-220.557 147.285-19.284 69.28 9.143 134.743 76.043 175.115l7.475 4.511-.23 8.727c-.456 17.274-4.574 33.912-11.945 48.952 17.949-6.073 34.236-17.083 46.99-32.151l6.342-7.493 9.405 2.813c26.393 7.894 57.104 12.241 86.477 12.241 154.372 0 224.682-93.473 224.682-180.322 0-46.776-19.524-90.384-54.976-122.79-40.713-37.216-99.397-56.888-169.706-56.888z"
                                        />
                                    </svg>
                                </i>
                            </button>
                        </div>
                    </div>

                </div>