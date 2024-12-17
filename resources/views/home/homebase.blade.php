<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>Taskinn Solution - @yield('title')</title>

    <style>
        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        body {
            font-family: "Roboto", sans-serif;
        }

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

<body class="roboto-medium bg-gray-100">

    <nav class="bg-[#4834d4] border-gray-200 dark:bg-gray-900 md:fixed w-full md:top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-4">

            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex  items-center px-1 py-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <a href="{{ url('') }}" class="flex flex-col space-x-3 rtl:space-x-reverse">
                <span
                    class="self-center text-3xl font-bold text-white whitespace-nowrap dark:text-white tracking-widest">Taskinn Solutions
                </span>
            </a>
            <div class="hidden w-full md:flex md:w-auto md:order-1 md:justify-between" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                    <li>
                        <a href="{{ url('') }}"
                            class="block py-2 px-3 text-white  bg-blue-500 rounded md:bg-transparent md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/private-job') }}"
                            class="block py-2 px-3  text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-950 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Private
                            Job</a>
                    </li>
                    <li>
                        <a href="{{ url('/sarkari-job') }}"
                            class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-950 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sarkari
                            Job</a>
                    </li>
                    @guest
                        <li>
                            <a href="{{ url('/hire/t&c') }}"
                                class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-950 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hire
                                Now</a>
                        </li>
                    @endguest
                    <li>
                        <a href="{{ url('/sarkari-yojna') }}"
                            class="block py-4 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-950 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ">Sarkari
                            Yojna</a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ url('/image/manual_form.jpg') }}" download
                                class="inline-block px-4 py-1 text-white  bg-blue-500 rounded hover:bg-blue-700">Download
                                Form</a>
                        </li>
                        <li>
                            <a href="{{ url('/manual-form') }}"
                                class="inline-block px-4 py-1 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">Upload
                                Form</a>
                        </li>
                        <li class="md:hidden">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                                @csrf
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="md:hidden">
                            <a href="{{ url('/otp/login') }}"
                                class="inline-block px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-700">Sign In</a>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="hidden items-center md:flex md:justify-end space-x-4 md:space-x-6 md:order-2">
                @auth
                    <div class="flex space-x-4 md:flex md:justify-end ">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                        </form>
                    </div>
                @endauth
                @guest
                    <a href="{{ url('/otp/login') }}"
                        class="inline-block px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-700">Sign In</a>
                @endguest
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


 <div class="md:mt-20 mt-8">
    @yield('content')
    @show
 </div>

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
{{-- <footer class="bg-gray-800 text-white py-3 fixed bottom-0 w-full mt-10">
    <div class="container mx-auto flex items-center justify-center px-4">
        <p>&copy; 2024 Taskinn Solution. All rights reserved.</p>
    </div>
</footer> --}}


<a href="https://api.whatsapp.com/send?phone=+91-9955232260&text=Welcome To Taskinn Solutions PURNEA, BIHAR" target="_blank" class="fixed md:bottom-10 bottom-20 right-2 md:right-10 z-20">
    <div class="bg-green-500 rounded-full p-5 shadow-lg text-white hover:text-gray-100 hover:bg-green-600">
        <i class="fa-brands fa-whatsapp fa-2xl  " style="line-height: 1;"></i>
    </div>
</a>
{{-- <a href="https://wa.me/9955232260" target="_blank" class="fixed md:bottom-10 bottom-20 right-2 md:right-10 z-20">
    <div class="bg-green-500 rounded-full p-5 shadow-lg text-white hover:text-gray-100 hover:bg-green-600">
        <i class="fa-brands fa-whatsapp fa-2xl  " style="line-height: 1;"></i>
    </div>
</a> --}}

<footer class="bg-gray-900 text-gray-400 py-10 sticky">
    <div class="container mx-auto px-4 md:px-5">
        <div class="flex flex-col md:flex-row justify-between md:gap-10">
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">About Us</h4>
                <p class="text-gray-400">Welcome to our Taskinn Solutions ! Connecting people with the right job opportunities to build fulfilling careers.</p>
            </div>

            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Quick Links</h4>
                <ul class="list-none">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    {{-- <li><a href="#" class="hover:text-white"></a></li> --}}
                    <li><a href="{{ url('brand-story') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ url('order-now') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Contact Us</h4>
                <p><i class="fas fa-map-marker-alt mr-2"></i>Rambagh, Purnea, Bihar</p>
                <p><i class="fas fa-phone mr-2"></i>(+91) {{ env('PHONE_NO') }}</p>
                <p><i class="fas fa-envelope mr-2"></i>taskinnsolution@gmail.com</p>
            </div>

            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-700 pt-6 text-center">
            <p>&copy; 2024 Taskinn Solutions. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>

</html>
