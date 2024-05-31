<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .flashing-yojna {
            animation: flash 1.8s infinite;
        }

        @keyframes flash {

            0%,
            50%,
            100% {
                color: #ffffff;
                background-color: #ff6b6b;
                padding-left: 5px;
                padding-right: 5px;
            }

            25%,
            75% {
                color: #ff6b6b;
                background-color: #ffffff;
            }
        }
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
    </style>
</head>

<body>
    {{-- 
    <nav class="bg-yellow-500 px-6 py-1">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-white text-lg font-semibold">JobHire</a>
                <!-- Add your logo here if you have one -->
            </div>
            <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop()"
                onmouseout="this.start()" scrollDelay="10"><a href="/sarkari-yojna">Click Here For Any Sarkari Yojna</a>
            </marquee>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="/private-job" class="text-white hover:text-gray-300">Private Jobs</a></li>
                    <li><a href="/sarkari-job" class="text-white hover:text-gray-300">Sarkari Jobs</a></li>
                    <li><a href="/hire/t&c" class="text-white hover:text-gray-300">Hire</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300"><button
                                id="openApplyJobBtn">Contact</button></a></li>
                    <!-- Add more navbar items as needed -->

                    @auth
                        <a href="" class="nav-link nav-item active text-capitalize">{{ auth()->user()->name }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @endauth

                    @guest
                        <a href="/otp/login" class="nav-link nav-item active">Login</a>
                    @endguest
                </ul>
            </div>
            <div class="md:hidden">
                <!-- Mobile menu button -->
                <button class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav> --}}

    {{--  new --}}

    <nav class="bg-[#74b9ff] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">JobHire</span>
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#74b9ff] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/private-job"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Private
                            Job</a>
                    </li>
                    <li>
                        <a href="/sarkari-job"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sarkari
                            Job</a>
                    </li>
                    <li>
                        <a href="/hire/t&c"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hire
                            Now</a>
                    </li>
                    <li>
                        <a href="/sarkari-yojna"
                            class="block py-4 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 flashing-yojna">Sarkari
                            Yojna</a>
                    </li>
                </ul>
            </div>
            @auth
            <div class="flex space-x-4 md:order-3 mt-4 md:mt-0">
                <a href="/image/manual_form.jpg" download class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Download Form</a>
                <a href="/manual-form"class="inline-block px-4 py-2 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">Upload Form</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button type="submit">Logout</button>
                </form>  
            </div>
            @endauth
        </div>
    </nav>
    {{-- <div class="flex p-5 items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
            class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
            @auth
                <a href="/"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hi,
                    {{ auth()->user()->name }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
                <button type="submit">Logout</button>
            </form>   
            @endauth

            @guest
                <a href="/"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hi,
                    Guest</a>
            @endguest
        </button>
    </div> --}}

    @section('content')
    @show

</body>

</html>
