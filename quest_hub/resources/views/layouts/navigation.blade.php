<nav x-data="{ open: false }" class="bg-[#323232] border-b-[0.5vh] border-[#6db193]">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-[10vh]">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex align-middle">
                    <a href="welcome">
                        <img src="..\public\img\icon.png" alt="Icon" title="QuestHub icon" class="h-full w-full">
                    </a>
                </div>
                <div
                    class=" text-center self-center text-[#f8edd6] mx-16
                 font-mono font-extrabold min-w-[10vw] max-w-[15vw]">
                    <h1 class="text-5xl">QuestHub</h1>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="order-2 md:order-3">
                    <button
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                        <!-- Heroicons - Login Solid -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Login</span>
                    </button>
                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()?->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="op en = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()?->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()?->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
{{-- Secondary navbar - selection Menu --}}


<!-- component -->
<nav class="bg-[#313a37] text-[#f8edd6] w-100 px-8 md:px-auto">
    <div
        class="text-[#f8edd6]  font-bold text-2xl order-3 w-full lg:w-auto md:w-auto md:order-2 md:h-16 sm:w-10/12 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
        <a href="#" class="w-full sm:w-3/12 md:w-3/12 lg:w-3/12 px-auto ml-auto  hover:text-[#c2d2b1]">Profile</a>
        <a href="#" class="w-full sm:w-3/12 md:w-3/12 lg:w-3/12 px-auto ml-auto  hover:text-[#c2d2b1]">Collection</a>
        <a href="#" class="w-full sm:w-3/12 md:w-3/12 lg:w-3/12 px-auto ml-auto  hover:text-[#c2d2b1]">Forum</a>
        <div class="max-w-full sm:w-3/12 md:w-3/12 lg:w-3/12 px-auto ml-auto hover:text-[#c2d2b1]"><button type="button"
                data-dropdown-toggle="dropdown">Find Fellows</button>
            <div class="hidden bg-[#313a37] max-w-full text-base rounded-l px-1 items-center" id="dropdown">
                <ul class="py-1 mx-w-10/12  " aria-labelledby="dropdown">
                    <li class="roundend-3xl bg-[#2C5246] mt-1 ">
                        <a href="{{ route('accounts.index') }}" class="text-lg text-[#f8edd6] block px-4 py-2">Users</a>
                    </li>
                    <li class="roundend-3xl bg-[#2C5246] mt-1">
                        <a href="{{ route('groups.index') }}" class="text-lg  text-[#f8edd6] block px-4 py-2">Groups</a>
                    </li>
                    <li class="roundend-3xl bg-[#2C5246] mt-1">
                        <a href="{{ route('adventures.index') }}" class="text-lg  text-[#f8edd6] block px-4 py-2">Campaigns</a>
                    </li>
                    </ul>
            </div>
        </div>

    </div>
</nav>

{{-- Hamburger secondary TODO --}}

<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
