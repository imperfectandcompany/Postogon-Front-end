<?php
function createpost()
{
    include_once("createpost.php");
}

function post($amt)
{
    $i = 0;

    while ($i < $amt) {
        include("skeleton.php");
        $i++;
    }

    $i = 0;

    while ($i < $amt) {
        include("post.php");
        $i++;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <title>Home - Postogon</title>
    <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
            rel="stylesheet"
    />
    <script src="scripts/main.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <link href="build/css/tailwind.css" rel="stylesheet"/>


    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script>
</head>
<body>
<div :class="{ 'dark': isDark}" x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-darker dark:text-light">
        <!-- Loading screen -->
        <div
                class="fixed inset-0 z-50 flex items-center w-full justify-center animate-pulse text-2xl font-semibold text-white bg-primary-darker"
                x-ref="loading"
        >
            <img
                    class="h-32 w-32 mx-auto"
                    style="filter:brightness(0.1)"
                    src="https://postogon.com/home/assets/logo.svg"
                    alt="postogon logo"/>
            <div class="h-16 flex items-center mx-auto">Loading.....</div>
        </div>

        <!-- Sidebar -->
        <aside class="flex-shrink-0 hidden w-64 bg-white shadow dark:bg-darker md:block">
            <div class="flex flex-col h-full">
                <!-- Sidebar links -->
                <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                    <!-- Dashboards links -->
                    <div x-data="{ isActive: true, open: true}">
                        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                        <a
                                :aria-expanded="(open || isActive) ? 'true' : 'false'"
                                :class="{'font-bold dark:font-bold': isActive || open}"
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
                            <span class="ml-2 text-sm"> Main </span>
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
                                    class="block p-2 text-sm font-semibold text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                                    href="index.html"
                                    role="menuitem"
                            >
                                Timeline
                            </a>
                        </div>
                        <div aria-label="Dashboards" class="mt-2 space-y-2 px-7" role="menu" x-show="open">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                    class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                                    href="index.html"
                                    role="menuitem"
                            >
                                Profile Page
                            </a>
                        </div>
                        <div aria-label="Dashboards" class="mt-2 space-y-2 px-7" role="menu" x-show="open">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                    class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                                    href="index.html"
                                    role="menuitem"
                            >
                                Settings
                            </a>
                        </div>
                        <div aria-label="Dashboards" class="mt-2 space-y-2 px-7" role="menu" x-show="open">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                    class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                                    href="index.html"
                                    role="menuitem"
                            >

                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Sidebar footer -->
                <div class="flex-shrink-0 px-2 py-4 space-y-2">
                    <button
                            @click="openSettingsPanel"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
                            type="button"
                    >
                <span aria-hidden="true">


                </span>
                        <span>Log out</span>
                    </button>
                </div>
            </div>
        </aside>

        <div class="flex-1 h-full overflow-y-auto">
            <!-- Navbar -->
            <header class="relative bg-white hidden md:block z-20 shadow dark:bg-dark">
                <div class="flex items-center justify-between p-2">
                    <!-- Brand -->
                    <a
                            class="inline-block ml-3 text-2xl font-bold tracking-wider uppercase text-primary-dark dark:text-light"
                            href="index.html"
                    >
                        Postogon
                    </a>
                    <a
                            class="inline-block ml-3 text-2xl font-bold tracking-wider uppercase animate-pulse text-primary-dark dark:text-primary dark:text-light"
                            href="index.html"
                    >
                        DEV
                    </a>
                    <!-- Mobile sub menu button -->
                    <button
                            @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
                            class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring"
                    >
                        <span class="sr-only">Open sub menu</span>
                        <span aria-hidden="true">
                  <svg
                          class="w-8 h-8"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                    />
                  </svg>
                </span>
                    </button>

                    <!-- Desktop Right buttons -->
                    <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">
                        <!-- Toggle dark theme button -->
                        <button @click="toggleTheme" aria-hidden="true" class="relative focus:outline-none" x-cloak>
                            <div
                                    class="w-12 h-6 transition rounded-full outline-none bg-green-100 dark:bg-green-lighter"
                            ></div>
                            <div
                                    :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-white': isDark }"
                                    class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
                            >
                                <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="#60a5fa"
                                        viewBox="0 0 24 24"
                                        x-show="!isDark"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                    />
                                </svg>
                                <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="#facc15"
                                        viewBox="0 0 24 24"
                                        x-show="isDark"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                    />
                                </svg>
                            </div>
                        </button>

                        <!-- Notification button -->
                        <button
                                @click="openNotificationsPanel"
                                class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker"
                        >
                            <span class="sr-only">Open Notification panel</span>
                            <svg
                                    aria-hidden="true"
                                    class="w-7 h-7"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                />
                            </svg>
                        </button>

                        <!-- Search button -->
                        <button
                                @click="openSearchPanel"
                                class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker"
                        >
                            <span class="sr-only">Open search panel</span>
                            <svg
                                    aria-hidden="true"
                                    class="w-7 h-7"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                />
                            </svg>
                        </button>

                        <!-- Settings button -->
                        <button
                                @click="openSettingsPanel"
                                class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker"
                        >
                            <span class="sr-only">Open settings panel</span>
                            <svg
                                    aria-hidden="true"
                                    class="w-7 h-7"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                />
                                <path
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                />
                            </svg>
                        </button>

                        <!-- Contacts avatar button -->
                        <div class="relative" x-data="{ open: false }">
                            <button
                                    :aria-expanded="open ? 'true' : 'false'"
                                    @click="open = !open; $nextTick(() => { if(open){ $refs.ContactsMenu.focus() } })"
                                    aria-haspopup="true"
                                    class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
                                    type="button"
                            >
                                <span class="sr-only">Contacts menu</span>
                                <div class="my-auto">
                                    <div class="w-10 h-10 font-bold text-center text-white transition bg-gray-600 border-4 border-gray-500 rounded-full shadow-inner">
                                        <div class="my-1 select-none">?</div>
                                    </div>
                                </div>
                            </button>

                            <!-- Contacts dropdown menu -->
                            <div
                                    @click.away="open = false"
                                    @keydown.escape="open = false"
                                    aria-label="Contacts menu"
                                    aria-orientation="vertical"
                                    class="absolute right-0 z-10 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                                    role="menu"
                                    tabindex="-1"
                                    x-ref="ContactsMenu"
                                    x-show="open"
                                    x-transition:enter="transition-all transform ease-out"
                                    x-transition:enter-end="translate-y-0 opacity-100"
                                    x-transition:enter-start="translate-y-1/2 opacity-0"
                                    x-transition:leave="transition-all transform ease-in"
                                    x-transition:leave-end="translate-y-1/2 opacity-0"
                                    x-transition:leave-start="translate-y-0 opacity-100"
                            >
                                <a
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                                        href="#"
                                        role="menuitem"
                                >
                                    Your Profile
                                </a>
                                <a
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                                        href="#"
                                        role="menuitem"
                                >
                                    Settings
                                </a>
                                <a
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                                        href="#"
                                        role="menuitem"
                                >
                                    Logout
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <?php
            include('mobilesubmenu.php');
            ?>


            <!-- Main content -->
            <div class="flex justify-center h-full">
                <main class="flex flex-col border-l dark:border-darker">
                    <!-- Content header -->

                    <!-- create a post -->
                    <div x-data="{ open: false }" class="z-10">
                        <div class="dark:border-none transition bg-white shadow-sm dark:bg-darker">
                            <div class="flex justify-between flex-shrink-0 px-6 py-4 border-b dark:border-darker border-gray-300">
                                <h1 class="px-6 text-xl font-semibold">Hi, Profile</h1>
                                <button @click="open = !open" :aria-expanded="open ? 'true' : 'false'"
                                        :class="{'font-semibold': open, 'active': open}"
                                        class="px-2 p-1 focus:outline-none text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
                                    New post
                                    <svg :class="{ 'rotate-180': open }"
                                         class="ml-1 transform inline-block text-dark text-primary-lighter  dark:text-primary-lighter  w-4 h-4 transition-transform"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div x-show="open"
                             x-transition:enter="transition ease-in duration-100"
                             x-transition:enter-start="opacity-0 transform translate-y-0"
                             x-transition:enter-end="opacity-100 transform -translate-y-3"
                             x-transition:leave="transition ease-in-out duration-100"
                             x-transition:leave-end="opacity-0 transform -translate-y-3"> <?php createpost(); ?></div>
                    </div>


                    <!-- Content -->
                    <!-- skeleton loading post -->
                    <!-- post -->
                    <div class="flex-1 md:hidden overflow-y-auto" id="post-scroll">
                        <?php post(5); ?>
                    </div>
                    <div class="flex-1 hidden md:block" id="post-scroll">
                        <?php post(5); ?>
                    </div>

                    <span id="preload" class="invisible text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

                </main>


            </div>

        </div>


        <button
                @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
                class=""
        >
            <span class="sr-only">Open sub menu</span>
            <span aria-hidden="true">
        <div class="fixed flex flex-col-reverse w-12 h-12 bg-white z-50 rounded-full shadow cursor-pointer right-6 bottom-20 p-1 transition-colors duration-200 text-primary-light bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-primary-lighter dark:hover:bg-primary-dark dark:text-light dark:bg-darker md:hidden focus:outline-none focus:ring ">
            <svg
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
            >
                <path
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1"
                />
            </svg>
                            </span>
    </div>
    </button>
    <!-- Panels -->

    <!-- Settings Panel -->
    <!-- Backdrop -->
    <div
            @click="isSettingsPanelOpen = false"
            aria-hidden="true"
            class="fixed inset-0 z-20 bg-primary-darker"
            style="opacity: 0.5"
            x-show="isSettingsPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-end="opacity-100"
            x-transition:enter-start="opacity-0"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-end="opacity-0"
            x-transition:leave-start="opacity-100"
    ></div>
    <!-- Panel -->
    <section
            @keydown.escape="isSettingsPanelOpen = false"
            aria-labelledby="settinsPanelLabel"
            class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
            tabindex="-1"
            x-ref="settingsPanel"
            x-show="isSettingsPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:enter-end="translate-x-0"
            x-transition:enter-start="translate-x-full"
            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:leave-end="translate-x-full"
            x-transition:leave-start="translate-x-0"
    >
        <div class="absolute left-0 p-2 transform -translate-x-full">
            <!-- Close button -->
            <button
                    @click="isSettingsPanelOpen = false"
                    class="p-2 text-white rounded-md focus:outline-none"
            >
                <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </button>
        </div>
        <!-- Panel content -->
        <div class="flex flex-col h-screen">
            <!-- Panel header -->
            <div
                    class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-primary-dark"
            >
              <span aria-hidden="true" class="text-gray-500 dark:text-primary">
                <svg
                        class="w-8 h-8"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                  />
                </svg>
              </span>
                <h2 class="text-xl font-medium text-gray-500 dark:text-light" id="settinsPanelLabel">Settings</h2>
            </div>
            <!-- Content -->
            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
                <!-- Theme -->
                <div class="p-4 space-y-4 md:p-8">
                    <h6 class="text-lg font-medium text-gray-400 dark:text-light">Mode</h6>
                    <div class="flex items-center space-x-8">
                        <!-- Light button -->
                        <button
                                :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': !isDark, 'text-gray-500 dark:text-primary-light': isDark }"
                                @click="setLightTheme"
                                class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                        >
                    <span>
                      <svg
                              class="w-6 h-6"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                        />
                      </svg>
                    </span>
                            <span>Light</span>
                        </button>

                        <!-- Dark button -->
                        <button
                                :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': isDark, 'text-gray-500 dark:text-primary-light': !isDark }"
                                @click="setDarkTheme"
                                class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                        >
                    <span>
                      <svg
                              class="w-6 h-6"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                        />
                      </svg>
                    </span>
                            <span>Dark</span>
                        </button>
                    </div>
                </div>

                <!-- Colors -->
                <div class="p-4 space-y-4 md:p-8">
                    <h6 class="text-lg font-medium text-gray-400 dark:text-light">Colors</h6>
                    <div>
                        <button
                                @click="setColors('cyan')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-cyan)"
                        ></button>
                        <button
                                @click="setColors('green')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-green)"
                        ></button>
                        <button
                                @click="setColors('fuchsia')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-fuchsia)"
                        ></button>
                        <button
                                @click="setColors('orange')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-orange)"
                        ></button>
                        <button
                                @click="setColors('yellow')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-yellow)"
                        ></button>
                        <button
                                @click="setColors('red')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-red)"
                        ></button>
                        <button
                                @click="setColors('teal')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-teal)"
                        ></button>
                        <button
                                @click="setColors('blue')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-blue)"
                        ></button>
                        <button
                                @click="setColors('violet')"
                                class="w-10 h-10 rounded-full"
                                style="background-color: var(--color-violet)"
                        ></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notification panel -->
    <!-- Backdrop -->
    <div
            @click="isNotificationsPanelOpen = false"
            aria-hidden="true"
            class="fixed inset-0 z-20 bg-primary-darker"
            style="opacity: 0.5"
            x-show="isNotificationsPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-end="opacity-100"
            x-transition:enter-start="opacity-0"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-end="opacity-0"
            x-transition:leave-start="opacity-100"
    ></div>
    <!-- Panel -->
    <section
            @keydown.escape="isNotificationsPanelOpen = false"
            aria-labelledby="notificationPanelLabel"
            class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
            tabindex="-1"
            x-ref="notificationsPanel"
            x-show="isNotificationsPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:enter-end="translate-x-0"
            x-transition:enter-start="-translate-x-full"
            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:leave-end="-translate-x-full"
            x-transition:leave-start="translate-x-0"
    >
        <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button
                    @click="isNotificationsPanelOpen = false"
                    class="p-2 text-white rounded-md focus:outline-none"
            >
                <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-col h-screen" x-data="{ activeTabe: 'Activity' }">
            <!-- Panel header -->
            <div class="flex-shrink-0">
                <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-primary-darker">
                    <h2 class="pb-4 font-semibold" id="notificationPanelLabel">Notifications</h2>
                    <div class="space-x-2">
                        <button
                                :class="{'border-primary-dark dark:border-primary': activeTabe == 'Activity', 'border-transparent': activeTabe != 'Activity'}"
                                @click.prevent="activeTabe = 'Activity'"
                                class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                        >
                            Activity
                        </button>
                        <button
                                :class="{'border-primary-dark dark:border-primary': activeTabe == 'Contacts', 'border-transparent': activeTabe != 'Contacts'}"
                                @click.prevent="activeTabe = 'Contacts'"
                                class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                        >
                            Contacts
                        </button>
                    </div>
                </div>
            </div>

            <!-- Panel content (tabs) -->
            <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
                <!-- Activity tab -->
                <div class="space-y-4" x-show.transition.in="activeTabe == 'Activity'">
                    <a class="block" href="#">
                        <div class="flex px-4 space-x-4">
                            <div class="relative flex-shrink-0">
                      <span
                              class="z-10 inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                      >
                        <svg
                                class="w-7 h-7"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                          />
                        </svg>
                      </span>
                                <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                                    Ethan Epp liked your post
                                </h5>
                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                    Ethan Epp liked "When will Postogon be finished...
                                </p>
                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 9h ago </span>
                            </div>
                        </div>
                    </a>
                    <a class="block" href="#">
                        <div class="flex px-4 space-x-4">
                            <div class="relative flex-shrink-0">
                      <span
                              class="inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                      >
                        <svg
                                class="w-7 h-7"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                          />
                        </svg>
                      </span>
                                <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                                    Ayhem Hanna-Kachl shared your post
                                </h5>
                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                    Ayhem Hanna-Kachl shared "When will Postogon be finished...
                                </p>
                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 2d ago </span>
                            </div>
                        </div>
                    </a>
                    <template x-for="i in 20" x-key="i">
                        <a class="block" href="#">
                            <div class="flex px-4 space-x-4">
                                <div class="relative flex-shrink-0">
                        <span
                                class="inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                        >
                          <svg
                                  class="w-7 h-7"
                                  fill="none"
                                  stroke="currentColor"
                                  viewBox="0 0 24 24"
                                  xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                            />
                          </svg>
                        </span>
                                    <div
                                            class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"
                                    ></div>
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                                        Daiyaan Ijaz viewed your post
                                    </h5>
                                    <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                        Daiyaan Ijaz viewed "When will Postogon be finished...
                                    </p>
                                    <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 9h ago </span>
                                </div>
                            </div>
                        </a>
                    </template>
                </div>

                <!-- Contacts tab -->
                <div class="space-y-4" x-show.transition.in="activeTabe == 'Contacts'">
                    <a class="block" href="#">
                        <div class="flex px-4 space-x-4">
                            <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                                alt="Daiyaan Ijaz"
                                class="object-cover rounded-full w-9 h-9"
                                src="https://media-exp1.licdn.com/dms/image/C4E03AQHAR1PhrwJzmg/profile-displayphoto-shrink_200_200/0/1603263069216?e=1618444800&v=beta&t=cucG4ZtbGyO2g0Qn5n31mHvlTXmLuERQ8GsC-cqK-GU"
                        />
                      </span>
                                <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Daiyaan Ijaz</h5>
                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                    Posted "Postogon has been two years in the making but soon!
                                </p>
                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 1d ago </span>
                            </div>
                        </div>
                    </a>
                    <a class="block" href="#">
                        <div class="flex px-4 space-x-4">
                            <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                                alt="Alpac Inc"
                                class="object-cover rounded-full w-9 h-9"
                                src="https://alpacinc.com/wp4/wp-content/uploads/main_logo.png"
                        />
                      </span>
                                <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Al-Azhar F. Pacha </h5>
                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                    Invited you to UI/UX using Figma with the Postogon Team this Friday
                                </p>
                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 10h ago </span>
                            </div>
                        </div>
                    </a>
                    <a class="block" href="#">
                        <div class="flex px-4 space-x-4">
                            <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                                alt="Imperfect and Company"
                                class="object-cover rounded-full w-9 h-9"
                                src="https://res-3.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco/mqaferankgzck8y7flrc"
                        />
                      </span>
                                <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Imperfect and
                                    Company</h5>
                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                    Picked up two interns for Postogon! Welcome Ethan and Ayhem!!
                                </p>
                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 20d ago </span>
                            </div>
                        </div>
                    </a>
                    <template x-for="i in 10" x-key="i">
                        <a class="block" href="#">
                            <div class="flex px-4 space-x-4">
                                <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img
                                  alt="Matthew Robinson"
                                  class="object-cover rounded-full w-9 h-9"
                                  src="https://cdn.britannica.com/07/5207-050-5BC9F251/Gray-wolf.jpg"
                          />
                        </span>
                                    <div
                                            class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"
                                    ></div>
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Matthew
                                        Robinson</h5>
                                    <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                        Shared "Our all purpose database class, all database queries are run through
                                        here in order to ensure security consistency and allows for logging and error
                                        handling"
                                    </p>
                                    <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 20d ago </span>
                                </div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Search panel -->
    <!-- Backdrop -->
    <div
            @click="isSearchPanelOpen = false"
            aria-hidden="ture"
            class="fixed inset-0 z-20 bg-primary-darker"
            style="opacity: 0.5"
            x-show="isSearchPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-end="opacity-100"
            x-transition:enter-start="opacity-0"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-end="opacity-0"
            x-transition:leave-start="opacity-100"
    ></div>
    <!-- Panel -->
    <section
            @keydown.escape="isSearchPanelOpen = false"
            class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
            x-show="isSearchPanelOpen"
            x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:enter-end="translate-x-0"
            x-transition:enter-start="-translate-x-full"
            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:leave-end="-translate-x-full"
            x-transition:leave-start="translate-x-0"
    >
        <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button @click="isSearchPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none">
                <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </button>
        </div>

        <h2 class="sr-only">Search panel</h2>
        <!-- Panel content -->
        <div class="flex flex-col h-screen">
            <!-- Panel header (Search input) -->
            <div
                    class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-primary-darker dark:focus-within:text-light focus-within:text-gray-700"
            >
              <span class="absolute inset-y-0 inline-flex items-center px-4">
                <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                  />
                </svg>
              </span>
                <input
                        class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring"
                        placeholder="Search..."
                        type="text"
                        x-ref="searchInput"
                />
            </div>

            <!-- Panel content (Search result) -->
            <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
                <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
                <a class="flex space-x-4" href="#">
                    <div class="flex-shrink-0">
                        <img alt="Post cover" class="w-10 h-10 rounded-lg"
                             src="https://res-5.cloudinary.com/crunchbase-production/image/upload/c_thumb,h_170,w_170,f_auto,g_faces,z_0.7,b_white,q_auto:eco/rbhnc669yxia6atdj7yf"/>
                    </div>
                    <div class="flex-1 max-w-xs overflow-hidden">
                        <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Daiyaan Ijaz</h4>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                            When will Postogon be finished? Hopefully soon!
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Post </span>
                    </div>
                </a>
                <a class="flex space-x-4" href="#">
                    <div class="flex-shrink-0">
                        <img alt="Secret Crrush" class="w-10 h-10 rounded-lg"
                             src="https://i.pinimg.com/736x/59/f2/82/59f282fc5d90135b51b10c3c7c8ef40f.jpg"/>
                    </div>
                    <div class="flex-1 max-w-xs overflow-hidden">
                        <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Secret Crush</h4>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                            Last online 3h ago.
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-primary-darker"> Offline </span>
                    </div>
                </a>
                <a class="flex space-x-4" href="#">
                    <div class="flex-shrink-0">
                        <img alt="Imperfect and Company" class="w-10 h-10 rounded-lg"
                             src="https://res-3.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco/mqaferankgzck8y7flrc"/>
                    </div>
                    <div class="flex-1 max-w-xs overflow-hidden">
                        <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Imperfect and Company</h4>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                            Internships available at imperfectandcompany.com!
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-primary-light">Post</span>
                    </div>
                </a>
                <template x-for="i in 10" x-key="i">
                    <a class="flex space-x-4" href="#">
                        <div class="flex-shrink-0">
                            <img alt="Imperfect Sounds" class="w-10 h-10 rounded-lg"
                                 src="https://i.imgur.com/B6n5lv5.png"/>
                        </div>
                        <div class="flex-1 max-w-xs overflow-hidden">
                            <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Imperfect Sounds</h4>
                            <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                Chudda will be dropping his track "all of this work" very soon!
                            </p>
                            <span class="text-sm font-normal text-gray-400 dark:text-primary-light">Post</span>
                        </div>
                    </a>
                </template>
            </div>
        </div>
    </section>
</div>
</div>



<script src="build/js/script.js"></script>
<script>
    const setup = () => {
        const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
            }

            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
        }

        const getColor = () => {
            if (window.localStorage.getItem('color')) {
                return window.localStorage.getItem('color')
            }
            return 'red'
        }

        const setColors = (color) => {
            const root = document.documentElement
            root.style.setProperty('--color-primary', `var(--color-${color})`)
            root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
            root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
            root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
            root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
            root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
            root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
            this.selectedColor = color
            window.localStorage.setItem('color', color)
            //
        }

        return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
            },
            setLightTheme() {
                this.isDark = false
                setTheme(this.isDark)
            },
            setDarkTheme() {
                this.isDark = true
                setTheme(this.isDark)
            },
            color: getColor(),
            selectedColor: 'cyan',
            setColors,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            openSettingsPanel() {
                this.isSettingsPanelOpen = true
                this.$nextTick(() => {
                    this.$refs.settingsPanel.focus()
                })
            },
            isNotificationsPanelOpen: false,
            openNotificationsPanel() {
                this.isNotificationsPanelOpen = true
                this.$nextTick(() => {
                    this.$refs.notificationsPanel.focus()
                })
            },
            isSearchPanelOpen: false,
            openSearchPanel() {
                this.isSearchPanelOpen = true
                this.$nextTick(() => {
                    this.$refs.searchInput.focus()
                })
            },
            isMobileSubMenuOpen: false,
            openMobileSubMenu() {
                this.isMobileSubMenuOpen = true
                this.$nextTick(() => {
                    this.$refs.mobileSubMenu.focus()
                })
            },
            isMobileMainMenuOpen: false,
            openMobileMainMenu() {
                this.isMobileMainMenuOpen = true
                this.$nextTick(() => {
                    this.$refs.mobileMainMenu.focus()
                })
            },
        }
    }

    //define
    const delay = ms => new Promise(res => setTimeout(res, ms));


    window.addEventListener('load', (event) => {
        swap();
    });


    const swap = async () => {
        await delay(500);
        //puts all posts with id skeleton post into an array, one for each normal post
        var divs = document.querySelectorAll('#skeletonpost');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.add('hidden');
        }


        const div = document.querySelectorAll("div.skeleton");
        for (var i = 0; i < div.length; i++) {
            //i is index of each, it loops until its empty
            div[i].classList.remove('container');
            div[i].classList.add('overflow-y-scroll');
        }

        var divs = document.querySelectorAll('#preload');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.remove('invisible');
            divs[i].classList.add('hidden');
        }

        var divs = document.querySelectorAll('#normalpost');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.remove('hidden');
        }

    };
</script>
</body>
</html>
