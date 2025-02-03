<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <img class="size-64 drop-shadow-lg" src="https://ouch-cdn2.icons8.com/5iRXIex6ENAJfhSm6GxYntqBKoM2lSzRffmJl3YSyws/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNTEz/L2ExMTRiYjEzLWUz/ZjktNGVlZS1hMTcy/LTgzYmM4OWE5MDQ1/YS5wbmc.png" alt="Loot">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Aboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('add')" :active="request()->routeIs('add')">
                        {{ __('Add') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-900 dark:text-slate-900 bg-white dark:bg-yellow-300 hover:text-red-700 dark:hover:text-red-800 dark:hover:font-bold focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="75" height="75" viewBox="0 0 64 64">
                                    <path fill="orange" d="M55,25C55,13.954,44.703,5,32,5S9,13.954,9,25c0,2.906,0.718,5.664,2,8.155v6.036	C11,44.056,14.944,48,19.809,48H20v4c0,2.209,1.791,4,4,4s4-1.791,4-4c0,2.209,1.791,4,4,4s4-1.791,4-4c0,2.209,1.791,4,4,4	s4-1.791,4-4v-4h0.191C49.056,48,53,44.056,53,39.191v-6.036C54.282,30.664,55,27.906,55,25z"></path><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M14.738,18.317c1.936-3.533,5.358-6.374,9.586-7.953"></path><ellipse cx="32" cy="61" opacity=".3" rx="13" ry="3"></ellipse><circle cx="22.5" cy="36.5" r="6.5" fill="#9c34c2"></circle><path fill="#9c34c2" d="M33,47c-0.355,0-0.699-0.095-1-0.269c-0.479,0.275-1.066,0.354-1.633,0.166 c-1.048-0.35-1.614-1.482-1.265-2.53l1-3C30.375,40.551,31.139,40,32,40s1.625,0.551,1.897,1.368l1,3 c0.35,1.048-0.217,2.18-1.265,2.53C33.423,46.967,33.209,47,33,47z"></path><path d="M54.294,20.071C51.87,20.417,50,22.48,50,25c0,2.028-0.486,4.002-1.446,5.869 C48.189,31.576,48,32.36,48,33.155V37c0,2.1-9,5-9,11v4c0,1.582,0.749,2.975,1.895,3.891C42.672,55.483,44,53.9,44,52v-4h0.191 C49.056,48,53,44.056,53,39.191v-6.036c1.282-2.491,2-5.25,2-8.155C55,23.299,54.754,21.648,54.294,20.071z" opacity=".15"></path><path fill="#fff" d="M32,10c2.601,0,4.712-1.993,4.953-4.53C35.357,5.165,33.701,5,32,5 C19.297,5,9,13.954,9,25c0,2.906,0.718,5.664,2,8.155v5.001c0.001,0,0.003,0,0.004,0c0.77,0,1.552-0.178,2.283-0.555 c2.455-1.263,3.422-4.277,2.159-6.733C14.486,29.002,14,27.028,14,25C14,16.729,22.075,10,32,10z" opacity=".3"></path><circle cx="41.5" cy="36.5" r="6.5" fill="#9c34c2"></circle>
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
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
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
