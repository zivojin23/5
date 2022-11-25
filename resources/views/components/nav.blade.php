<nav class="p-3">
    <div class="flex justify-end">
        <div class="flex">

        @auth
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm bg-blue-200 rounded-lg focus:ring-4 focus:ring-gray-300" 
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <div class="py-2.5 px-5">{{ $user->first_name }}</div>
            </button>
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="user-dropdown" 
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 9.77778px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900 mb-1">{{ $user->first_name }}</span>
                    <span class="block text-sm font-medium text-gray-500 truncate">{{ $user->email }}</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                    <li><a href="logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li><a href="/home" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Home</a></li>
                <li><a href="/my-projects" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">My Projects</a></li>
                <li><a href="/employees" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Employees</a></li>
                <li><a href="/roles" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Roles</a></li>
            </ul>
        </div>

        @else
            <a href="login" class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 focus:outline-none">Login</a>
            <a href="register" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 focus:outline-none">Sign up</a>
        @endauth

        </div>
    </div>
</nav>