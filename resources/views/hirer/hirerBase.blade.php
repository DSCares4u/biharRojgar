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
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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

<body>
    <div class="min-h-screen flex bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md ">
            <div class="p-4">
                <h1 class="text-xl font-bold text-gray-800">Taskinn Solutions</h1>
            </div>
            <nav class="mt-6">
                <a href="{{ url('/home-hirer') }}" class="block py-2 px-8 text-gray-700 hover:bg-gray-200">
                    Dashboard
                </a>
                <a href="{{ url('/hirer/job-post') }}" class="block py-2 px-8 text-gray-700 hover:bg-gray-200">
                    Job Posts
                </a>
                <a href="{{ url('/hirer/applications') }}" class="block py-2 px-8 text-gray-700 hover:bg-gray-200">
                    Applications
                </a>
                <a href="#" class="block py-2 px-8 text-gray-700 hover:bg-gray-200">
                    Settings
                </a>
            </nav>
            <nav class="fixed bottom-0 ">
                <a href="#" class="block w-full py-2 px-8 text-gray-700 hover:bg-gray-200">
                    <i class="fa-solid fa-angles-up"></i> Upgrade plan
                </a>
            </nav>

        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold">Hirer Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <p>Welcome {{ Auth::user()->name }}</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Dashboard Content -->

            <div class="md:mt-20 mt-8">
                @yield('content')
            @show
        </div>

    </div>
</div>


<a href="https://api.whatsapp.com/send?phone=+91-9955232260&text=Welcome To Taskinn Solutions PURNEA, BIHAR"
    target="_blank" class="fixed md:bottom-10 bottom-20 right-2 md:right-10 z-20">
    <div class="bg-green-500 rounded-full p-5 shadow-lg text-white hover:text-gray-100 hover:bg-green-600">
        <i class="fa-brands fa-whatsapp fa-2xl  " style="line-height: 1;"></i>
    </div>
</a>

{{-- <footer class="bg-gray-900 text-gray-400 py-10 sticky">
    <div class="container mx-auto px-4 md:px-5">
        <div class="flex flex-col md:flex-row justify-between md:gap-10">
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">About Us</h4>
                <p class="text-gray-400">Welcome to our Taskinn Solutions ! Connecting people with the right job
                    opportunities to build fulfilling careers.</p>
            </div>

            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-white text-lg mb-4">Quick Links</h4>
                <ul class="list-none">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
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
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
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
</footer> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
