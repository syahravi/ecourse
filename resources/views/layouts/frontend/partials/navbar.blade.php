<div class="w-full shadow-sm bg-white z-50 p-5  fixed dark:bg-slate-800">
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-around ">
            <ul class="flex justify-start items-center  gap-5">

                <li>
                    <a href="/" class="flex items-center ">
                        <img src="{{ asset('asset/logo1.png') }}" alt="unusia course" class="w-24 lg:w-32  h-auto">

                    </a>
                </li>

            </ul>
            <!-- NavMenu -->
            <ul class="flex justify-center items-center  gap-7">
                <li class="hidden lg:flex">
                    <a href="{{ route('home') }}"
                        class="text-sm font-semibold text-slate-700 dark:text-white  hover:text-teal-500 transition-colors  flex items-center gap-2   {{ activeNav('home') }} ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home w-5 h-5"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <a href="{{ route('course.index') }}"
                        class="text-sm font-semibold text-slate-700  hover:text-teal-500 transition-colors flex items-center gap-2 {{ activeNav('course.index') }} dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="19" x2="21" y2="19"></line>
                            <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                        </svg>
                        Course
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <div class="relative " x-data="{ isOpen: false, isHovered: false }" @mouseenter="isHovered = true"
                        @mouseleave="isHovered = false">
                        <button @click="isOpen = !isOpen; isHovered = false" @keydown.escape="isOpen = false"
                            class="flex items-center gap-2 text-sm text-slate-700 dark:text-white  hover:text-teal-500 transition-colors {{ activeNav('category*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-category-2 w-5 h-5" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 4h6v6h-6z"></path>
                                <path d="M4 14h6v6h-6z"></path>
                                <circle cx="17" cy="17" r="3"></circle>
                                <circle cx="7" cy="7" r="3"></circle>
                            </svg>
                            Category
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                class="icon icon-tabler icon-tabler-chevron-down w-4 h-4" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-cloak x-show="isOpen"
                                class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 15 12 9 18 15"></polyline>
                            </svg>
                        </button>
                        <ul x-cloak x-show="isOpen || isHovered" @click.away="isOpen = false"
                            class="absolute font-normal bg-white dark:bg-slate-800 shadow overflow-hidden rounded-lg w-48 mt-2 py-2 left-0 z-20">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category', $category->slug) }}"
                                        class="flex items-center p-3 hover:text-teal-500 rounded-lg text-sm text-black dark:text-white">
                                        <span class="ml-2">{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>


                <li class="hidden lg:flex">
                    <a href="{{ route('review') }}"
                        class="text-sm font-semibold text-slate-700 flex dark:text-white   hover:text-teal-500 transition-colors items-center gap-2 {{ activeNav('review') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-5 h-5"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                            </path>
                            <line x1="8" y1="9" x2="16" y2="9"></line>
                            <line x1="8" y1="13" x2="14" y2="13"></line>
                        </svg>
                        Review
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <a href="{{ route('showcase') }}"
                        class="text-sm font-semibold text-slate-700 dark:text-white   hover:text-teal-500 transition-colors flex items-center gap-2 {{ activeNav('showcase') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-source-code w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                            <path d="M6 5l-2 2l2 2"></path>
                            <path d="M10 9l2 -2l-2 -2"></path>
                        </svg>
                        Showcase
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>

            </ul>
            <!-- NavProfile -->
            <div class="hidden md:flex items-center gap-2 text-teal-500">

                @guest
                    <a href="{{ route('login') }}"
                        class="text-black hover:text-teal-500 dark:text-white  font-semibold flex items-center px-8 py-2 gap-2 rounded-lg text-base transition-colors">
                        Masuk
                    </a>

                    <a href="{{ route('register') }}"
                        class="font-semibold text-white bg-teal-500 hover:bg-teal-600 flex items-center px-8 py-2 gap-2 rounded-lg text-base transition-colors">
                        Daftar
                    </a>

                @endguest
                @auth
                    <div class="rounded-lg  px-4 py-2 ">
                        <a href="{{ route('cart.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-basket w-5 h-5 text-black dark:text-white hover:text-teal-500 transition-colors {{ Route::is('cart.index') ? 'text-teal-500' : '' }}"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="7 10 12 4 17 10"></polyline>
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                <circle cx="12" cy="15" r="2"></circle>
                            </svg>
                        </a>
                    </div>
                    <div class="relative" x-data="{ isOpen: false, isHovered: false }">
                        <button @click="isOpen = !isOpen; isHovered = false" @mouseenter="isHovered = true"
                            @mouseleave="isHovered = false" class="flex items-center gap-2 px-4 py-2 rounded-lg">
                            <img src="{{ Auth::user()->avatar }}" alt="avatar" class="w-7 h-7 shadow-sm rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                class="icon icon-tabler icon-tabler-chevron-down w-4 h-4 dark:text-white" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-cloak x-show="isOpen"
                                class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 15 12 9 18 15"></polyline>
                            </svg>
                        </button>
                        <ul x-cloak x-show="isOpen || isHovered" @click.away="isOpen = false"
                            class="absolute font-normal bg-white dark:bg-slate-800 shadow overflow-hidden rounded-lg w-48 mt-2 py-1 right-0 z-20">
                            <li>
                                @role('admin')
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            <line x1="14" y1="7" x2="20" y2="7"></line>
                                            <line x1="17" y1="4" x2="17" y2="10"></line>
                                        </svg>
                                        <span class="ml-2">Dashboard</span>
                                    </a>
                                @else
                                    <a href="{{ route('member.dashboard') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            <line x1="14" y1="7" x2="20" y2="7"></line>
                                            <line x1="17" y1="4" x2="17" y2="10"></line>
                                        </svg>
                                        <span class="ml-2">Dashboard</span>
                                    </a>
                                @endrole
                            </li>
                            <li class="">
                                @role('admin')
                                    <a href="{{ route('admin.user.profile') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <circle cx="12" cy="10" r="3"></circle>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                @else
                                    <a href="{{ route('member.profile.index') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <circle cx="12" cy="10" r="3"></circle>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                @endrole
                            </li>
                            <a href="{{ route('logout') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-logout w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                </svg>
                                <span class="ml-2">Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                            </li>
                        </ul>
                    </div>

                @endauth
            </div>
            <!-- Mobile Nav -->
            <div class="flex gap-1 items-center md:hidden">

                <div class="rounded-lg px-4 py-2 bg-white dark:bg-slate-800 hover:text-teal-500">
                    <a href="{{ route('cart.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-basket w-5 h-5 dark:text-white {{ Route::is('cart.index') ? 'text-blue-500' : '' }}"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="7 10 12 4 17 10"></polyline>
                            <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                            <circle cx="12" cy="15" r="2"></circle>
                        </svg>
                    </a>
                </div>
                <button
                    class="theme-toggle-mobile text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg class="theme-toggle-dark-icon-mobile hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg class="theme-toggle-light-icon-mobile hidden w-5 h-5" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>


                <div class="text-slate-700 dark:text-white relative" x-data="{ isOpen: false }">
                    @guest
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                            class="flex items-center gap-2  rounded-lg px-4 py-2 hover:text-teal-500 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                class="icon icon-tabler icon-tabler-align-right w-5 h-5" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="6" x2="20" y2="6"></line>
                                <line x1="10" y1="12" x2="20" y2="12"></line>
                                <line x1="6" y1="18" x2="20" y2="18"></line>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-cloak x-show="isOpen"
                                class="icon icon-tabler icon-tabler-x w-5 h-5" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    @endguest
                    @auth
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                            class="flex items-center gap-2  px-4 py-2 rounded-lg text-sm  ">
                            <img src="{{ Auth::user()->avatar }}" alt="avatar" class="w-5 h-5 rounded-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                class="icon icon-tabler icon-tabler-chevron-down w-4 h-4" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen"
                                class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 15 12 9 18 15"></polyline>
                            </svg>
                        </button>
                    @endauth
                    <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                        class="absolute font-normal bg-white dark:bg-slate-800 shadow overflow-hidden rounded-lg w-48  mt-2 py-1 -right-14 z-20">
                        <li>
                            <a href="{{ route('home') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500 {{ activeNav('home') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-home w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course.index') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500 {{ activeNav('course*') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="3" y1="19" x2="21" y2="19"></line>
                                    <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                                </svg>
                                Course
                            </a>
                        </li>
                        <li>
                            <div class="relative" x-data="{ isOpen: false }">
                                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                                    class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500 {{ activeNav('category*') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-category-2 w-5 h-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 4h6v6h-6z"></path>
                                        <path d="M4 14h6v6h-6z"></path>
                                        <circle cx="17" cy="17" r="3"></circle>
                                        <circle cx="7" cy="7" r="3"></circle>
                                    </svg>
                                    Category
                                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                        class="icon icon-tabler icon-tabler-chevron-down w-4 h-4" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen"
                                        class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 15 12 9 18 15"></polyline>
                                    </svg>
                                </button>
                                <ul x-cloak x-show="isOpen" @click.away="isOpen = false" class="mt-2 py-1">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('category', $category->slug) }}"
                                                class="flex items-center p-3 hover:text-teal-500 text-sm text-slate-700 dark:text-white ml-3">
                                                <img src="{{ $category->image }}" class="w-5 h-5 object-cover" />
                                                <span class="ml-2">{{ $category->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('review') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500 {{ activeNav('review') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-message-2 w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                    </path>
                                    <line x1="8" y1="9" x2="16" y2="9"></line>
                                    <line x1="8" y1="13" x2="14" y2="13"></line>
                                </svg>
                                Review
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('showcase') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500 {{ activeNav('showcase') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-source-code w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5">
                                    </path>
                                    <path d="M6 5l-2 2l2 2"></path>
                                    <path d="M10 9l2 -2l-2 -2"></path>
                                </svg>
                                Showcase
                            </a>
                        </li>
                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                    class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-check w-5 h-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 11l2 2l4 -4"></path>
                                    </svg>
                                    <span class="ml-2">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-plus w-5 h-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 11h6m-3 -3v6"></path>
                                    </svg>
                                    <span class="ml-2">Register</span>
                                </a>
                            </li>
                        @endguest
                        @auth
                            @role('admin')
                                <li class="border-t border-dashed border-slate-700">
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            <line x1="14" y1="7" x2="20" y2="7"></line>
                                            <line x1="17" y1="4" x2="17" y2="10"></line>
                                        </svg>
                                        <span class="ml-2">Dashboard</span>
                                    </a>
                                </li>
                                <li class="border-b border-dashed border-slate-700">
                                    <a href="{{ route('admin.user.profile') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <circle cx="12" cy="10" r="3"></circle>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                </li>
                            @endrole
                            @role('member')
                                <li class="border-t border-dashed border-slate-700">
                                    <a href="{{ route('member.dashboard') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            <line x1="14" y1="7" x2="20" y2="7"></line>
                                            <line x1="17" y1="4" x2="17" y2="10"></line>
                                        </svg>
                                        <span class="ml-2">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('member.profile.index') }}"
                                        class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <circle cx="12" cy="10" r="3"></circle>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                </li>
                            @endrole
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="p-3 rounded-lg text-sm font-semibold text-slate-700 dark:text-white flex items-center gap-2 hover:text-teal-500"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-logout w-5 h-5" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                        </path>
                                        <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                    </svg>
                                    <span class="ml-2">Logout</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
