<!doctype html>
<html lang="en">

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

    <title>Taskinn Solution - @yield('title')</title>

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

        @media print {
            body * {
                visibility: hidden;
            }

            #printable-area,
            #printable-area * {
                visibility: visible;
            }

            #printable-area {
                position: absolute;
                left: 0;
                top: 0;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    {{-- <nav class="bg-[#74b9ff] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Taskinn
                    Solution</span>
            </a>
            <div class="flex items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-user">
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
                    @guest
                        <li>
                            <a href="/hire/t&c"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hire
                                Now</a>
                        </li>
                    @endguest
                    <li>
                        <a href="/sarkari-yojna"
                            class="block py-4 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 flashing-yojna">Sarkari
                            Yojna</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center space-x-4 md:space-x-6 md:order-2">
                @guest
                    <a href="/otp/login"
                        class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Sign In</a>
                @endguest
                @auth
                    <div class="flex space-x-4">
                        <a href="/image/manual_form.jpg" download
                            class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Download
                            Form</a>
                        <a href="/manual-form"
                            class="inline-block px-4 py-2 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">Upload
                            Form</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav> --}}

    <nav class="bg-[#74b9ff] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Taskinn
                    Solution</span>
            </a>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
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
                    @guest
                        <li>
                            <a href="/hire/t&c"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hire
                                Now</a>
                        </li>
                    @endguest
                    <li>
                        <a href="/sarkari-yojna"
                            class="block py-4 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ">Sarkari
                            Yojna</a>
                    </li>
                    @auth
                        <li>
                            <a href="/image/manual_form.jpg" download
                                class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Download
                                Form</a>
                        </li>
                        <li>
                            <a href="/manual-form"
                                class="inline-block px-4 py-2 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">Upload
                                Form</a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                                @csrf
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li>
                            <a href="/otp/login"
                                class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Sign In</a>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="flex items-center md:flex md:justify-end space-x-4 md:space-x-6 md:order-2">
                @auth
                    <div class="flex space-x-4 md:flex md:justify-end">
                        {{-- <a href="/image/manual_form.jpg" download
                            class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Download
                            Form</a>
                        <a href="/manual-form"
                            class="inline-block px-4 py-2 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">Upload
                            Form</a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.querySelector('[data-collapse-toggle="navbar-user"]');
            const navbarMenu = document.getElementById('navbar-user');

            toggleButton.addEventListener('click', function() {
                navbarMenu.classList.toggle('hidden');
            });
        });
    </script>


    @yield('content')
@show

{{-- <footer class="bg-gray-900 text-gray-400 py-12 z-30">
    <div class="container mx-auto px-4 md:px-5">
        <div class="flex justify-between">
            <!-- About Us Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">About Us</h4>
                <p class="text-gray-400">Welcome to our Mithila Idli ! We offer the finest cuisine with fresh
                    ingredients and a welcoming atmosphere.</p>
            </div>

            <!-- Quick Links Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Quick Links</h4>
                <ul class="list-none">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">Menu</a></li>
                    <li><a href="#" class="hover:text-white">About</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Us Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Contact Us</h4>
                <p><i class="fas fa-map-marker-alt mr-2"></i>Panchwati Chowk, Purnea, Bihar</p>
                <p><i class="fas fa-phone mr-2"></i>(123) 456-7890</p>
                <p><i class="fas fa-envelope mr-2"></i>info@mithilaidli.com</p>
            </div>

            <!-- Social Media Section -->
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-700 pt-6 text-center">
            <p>&copy; 2024 Mithila Idli. All rights reserved.</p>
        </div>
    </div>
</footer> --}}
<footer class="bg-gray-800 text-white py-3 fixed bottom-0 w-full mt-10">
    <div class="container mx-auto flex items-center justify-center px-4">
        <p>&copy; 2024 Taskinn Solution. All rights reserved.</p>
    </div>
</footer>


</body>

</html>
