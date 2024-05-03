<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    
    <nav class="bg-yellow-500 p-1">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-white text-lg font-semibold">JobHire</a>
                <!-- Add your logo here if you have one -->
            </div>
            <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop()"
                onmouseout="this.start()" scrollDelay="10"><a href="/sarkari-job">Click Here For Any Sarkari Jobs</a></marquee>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="/get-job/t&c" class="text-white hover:text-gray-300">Jobs</a></li>
                    <li><a href="/private-job" class="text-white hover:text-gray-300">Private Jobs</a></li>
                    <li><a href="/sarkari-yojna" class="text-white hover:text-gray-300">Sarkari Jobs</a></li>
                    <li><a href="/hire/t&c" class="text-white hover:text-gray-300">Hire</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
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
