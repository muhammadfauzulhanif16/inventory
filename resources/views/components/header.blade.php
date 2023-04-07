<header class="bg-slate-50 dark:bg-slate-900 border-b border-b-slate-300 dark:border-b-slate-600 px-4 lg:px-6 py-2.5 flex flex-wrap justify-between items-center flex-none">
    <div class="flex justify-start items-center">
        <a href="https://flowbite.com" class="flex mr-4">
            <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="Inventory Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Inventory</span>
        </a>
        {{--                <form action="#" method="GET" class="hidden lg:block lg:pl-2">--}}
        {{--                    <label for="topbar-search" class="sr-only">Search</label>--}}
        {{--                    <div class="relative mt-1 lg:w-96">--}}
        {{--                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">--}}
        {{--                            <svg class="w-5 h-5 text-slate-500 dark:text-slate-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>--}}
        {{--                        </div>--}}
        {{--                        <input type="text" name="email" id="topbar-search" class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">--}}
        {{--                    </div>--}}
        {{--                </form>--}}
    </div>
    <div class="flex items-center lg:order-2">
        <button id="toggleSidebarMobileSearch" type="button" class="p-2 text-slate-500 rounded-lg lg:hidden hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
            <span class="sr-only">Search</span>
            <!-- Search icon -->
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </button>
        <button type="button" class="flex mx-3 text-sm bg-slate-800 rounded-full md:mr-0 focus:ring-4 focus:ring-slate-300 dark:focus:ring-slate-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-slate-100 shadow dark:bg-slate-700 dark:divide-slate-600" id="dropdown">
            <div class="py-3 px-4">
                <span class="block text-sm font-semibold text-slate-900 dark:text-white">{{ auth()->user()->full_name }}</span>
            </div>
            <ul class="py-1 font-light text-slate-500 dark:text-slate-400" aria-labelledby="dropdown">
                <li>
                    <button onclick="window.location=''" class="w-full text-start py-2 px-4 text-sm hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hover:text-white">Account settings</button>
                </li>
            </ul>
            <ul class="py-1 font-light text-slate-500 dark:text-slate-400" aria-labelledby="dropdown">
                <li>
                  <form action="/logout" method="post">
                    @csrf

                    <button class="w-full text-start py-2 px-4 text-sm hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Sign out</button>
                  </form>
                </li>
            </ul>
        </div>
    </div>
</header>
