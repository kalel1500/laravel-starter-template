<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3"> {{-- px-4 lg:px-6 py-2.5 --}}
        <div class="flex items-center justify-between flex-wrap">
            <!-- Left side -->
            <div class="flex items-center justify-start rtl:justify-end">
                {{-- 1 --}}
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-expanded="true" aria-controls="logo-sidebar" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg class="w-[18px] h-[18px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex mr-4">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
                </a>
                {{-- 2 --}}
            </div>

            <!-- Right side -->
            <div class="flex items-center lg:order-2">
                {{-- 3 --}}
                <!-- User image -->
                <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                <!-- User dropdown -->
                <div class="z-50 hidden my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <!-- Name and mail -->
                    <div class="px-4 py-3">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil sims</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <!-- Other links -->
                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <!-- Links 1 -->
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My profile</a>
                        </li>
                        <!-- Links 2 -->
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account settings</a>
                        </li>
                    </ul>
                    {{-- 4 --}}
                </div>
            </div>
        </div>
    </div>
</nav>
