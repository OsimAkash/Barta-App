<nav x-data="{ mobileMenuOpen: false, userMenuOpen: false }" class="bg-[#09091a] shadow">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <h2 class="text-2xl text-white font-bold">Barta</h2>
                    </a>
                </div>
            </div>
            @auth
            <div class="hidden gap-2 sm:ml-6 sm:flex sm:items-center">
                <div class="relative ml-3" x-data="{ open: false }">
                    <div>
                        <button @click="open = !open" type="button"
                            class="flex text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            @if ( auth()->user()->avatar)
                                <img class="w-8 h-8 rounded-full" src="{{ asset("storage/". auth()->user()->avatar) }}" alt="{{ auth()->user()->firstName }} {{ auth()->user()->lastName }}" />
                            @else
                                <svg
                                    class="w-8 h-8 text-gray-400 border border-gray-500 rounded-full"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    aria-hidden="true">
                                    <path
                                    fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                                </svg>
                            @endif
                        </button>
                    </div>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="{{ route('edit-profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Edit Profile</a>
                        <a href="{{ route('password-change') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Change Password</a>
                        <button form="logout" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100" role="menuitem"
                            tabindex="-1" id="user-menu-item-2">Sign out</button>
                    </div>
                </div>
            </div>
            @endauth
            @header
            <div class="hidden gap-2 sm:ml-6 sm:flex sm:items-center">
                <div class="relative ml-3">
                    <a href="{{ route('login') }}"
                    class="px-4 py-2 text-base font-medium rounded-md 
            bg-[#1DA1F2]
            shadow-md shadow-[#1DA1F2]/40 
            text-white 
            hover:bg-sky-600">Login</a>
        
                    <a href="{{ route('register') }}"
                    class="px-4 py-2 text-base font-medium rounded-md 
            bg-[#1DA1F2]
            shadow-md shadow-[#1DA1F2]/40 
            text-white  
            hover:bg-sky-600 ]">Register</a>
                </div>
            </div>
            @endheader
            <div class="flex items-center -mr-2 sm:hidden">
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg x-show="!mobileMenuOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <!-- Icon when menu is open -->
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobileMenuOpen" class="sm:hidden" id="mobile-menu">
        @auth
            <a href="{{ route('profile') }}"
                class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800">Your
                Profile</a>
            <a href="{{ route('edit-profile') }}"
                class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800">Edit
                Profile</a>
            <a href="{{ route('password-change') }}"
                class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800">Change Password</a>
            <button form="logout"
                class="block w-full px-4 py-2 text-base font-medium text-left text-gray-500 hover:bg-gray-100 hover:text-gray-800">Sign
                out</button>
        @endauth
        @header
            <a href="{{ route('login') }}"
            class="block px-8 py-3 text-base font-mediumrounded-md 
            bg-[#1DA1F2]
            shadow-md shadow-[#1DA1F2]/40 
            text-white 
            hover:bg-sky-600">Login</a>

            <a href="{{ route('register') }}"
            class="block  px-8 py-3 text-base font-medium rounded-md 
            bg-[#1DA1F2]
            shadow-md shadow-[#1DA1F2]/40 
            text-white 
            hover:bg-sky-600">Register</a>
        @endheader
    </div>
</nav>

<form action="{{ route('logout') }}" id="logout" method="post">
    @csrf
    @method('DELETE')
</form>