<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    
    <nav class="bg-yellow-500 px-6 py-1">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-white text-lg font-semibold">JobHire</a>
                <!-- Add your logo here if you have one -->
            </div>
            <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop()"
                onmouseout="this.start()" scrollDelay="10"><a href="/sarkari-yojna">Click Here For Any Sarkari Yojna</a></marquee>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="/get-job/t&c" class="text-white hover:text-gray-300">Jobs</a></li>
                    <li><a href="/private-job" class="text-white hover:text-gray-300">Private Jobs</a></li>
                    <li><a href="/sarkari-job" class="text-white hover:text-gray-300">Sarkari Jobs</a></li>
                    <li><a href="/hire/t&c" class="text-white hover:text-gray-300">Hire</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300"><button id="openApplyJobBtn">Contact</button></a></li>
                    <!-- Add more navbar items as needed -->
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
    </nav>

    @section('content')
    @show

</body>

</html>
