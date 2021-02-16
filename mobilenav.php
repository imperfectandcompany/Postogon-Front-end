                <!-- Mobile navbar -->
                <div
                        @click.away="isMobileMainMenuOpen = false"
                        class="border-b md:hidden dark:border-primary-darker"
                        x-show="isMobileMainMenuOpen"
                >
                    <nav aria-label="Main" class="px-2 py-4 space-y-2">
                        <!-- Dashboards links -->
                        <div x-data="{ isActive: true, open: true}">
                            <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                            <a
                                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                                    :class="{'bg-primary-100 dark:bg-primary': isActive || open}"
                                    @click="$event.preventDefault(); open = !open"
                                    aria-haspopup="true"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                    href="#"
                                    role="button"
                            >
                    <span aria-hidden="true">
                      <svg
                              class="w-5 h-5"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                        />
                      </svg>
                    </span>
                                <span class="ml-2 text-sm"> Home </span>
                                <span aria-hidden="true" class="ml-auto">
                      <!-- active class 'rotate-180' -->
                      <svg
                              :class="{ 'rotate-180': open }"
                              class="w-4 h-4 transition-transform transform"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      </svg>
                    </span>
                            </a>
                            <div aria-label="Dashboards" class="mt-2 space-y-2 px-7" role="menu" x-show="open">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a
                                        class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                                        href="index.html"
                                        role="menuitem"
                                >
                                    Timeline
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>