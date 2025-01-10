@extends('home.homebase')
@section('title', 'Profile')
@section('content')

    <div class="min-h-screen bg-gray-100">
        <!-- Main Content -->
        <main class="container mx-auto p-6">
            <!-- Profile Header -->
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center space-x-6">
                <img class="w-24 h-24 rounded-full border border-gray-300" src="https://via.placeholder.com/100"
                    alt="Profile Photo" />
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">John Doe</h2>
                    <p class="text-gray-600">Software Engineer</p>
                    <p class="mt-2 text-gray-500">Passionate about creating innovative solutions and bringing impactful
                        changes through technology.</p>
                </div>
            </div>

            <!-- Details Section -->
            <div class="mt-6">
                <!-- Tabs -->
                <div class="flex space-x-4 border-b border-gray-200">
                    <button
                        class="px-4 py-2 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-blue-500 focus:outline-none focus:border-blue-500">
                        <a href="#profile"> Personal Information</a>
                    </button>
                    <button
                        class="px-4 py-2 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-blue-500 focus:outline-none focus:border-blue-500">
                        <a href="#skills">Skills</a>
                    </button>
                    <button
                        class="px-4 py-2 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-blue-500 focus:outline-none focus:border-blue-500">
                        <a href="#experience">Experience</a>
                    </button>
                    {{-- <button class="px-4 py-2 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-blue-500 focus:outline-none focus:border-blue-500">
            <a href="#resume">Resume</a>            
          </button> --}}
                </div>

                <!-- Content -->
                <div class="mt-6">
                    <!-- Personal Information -->
                    <section>
                        <h3 class="text-lg font-semibold text-gray-800">Personal Information</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4" id="profile">
                            <div>
                                <p class="text-gray-600">Email</p>
                                <p class="text-gray-800">john.doe@example.com</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Phone</p>
                                <p class="text-gray-800">+1 234 567 890</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Location</p>
                                <p class="text-gray-800">New York, USA</p>
                            </div>
                        </div>
                    </section>

                    <!-- Skills -->
                    <section class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800">Skills</h3>
                        <div class="flex flex-wrap gap-2 mt-4" id="skill">
                            <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">JavaScript</span>
                            <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">React</span>
                            <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Node.js</span>
                            <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Python</span>
                        </div>
                    </section>

                    <!-- Experience -->
                    <section class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800">Experience</h3>
                        <ul class="mt-4 space-y-4" id="experience">
                            <li class="bg-white p-4 rounded-lg shadow-md">
                                <h4 class="text-gray-800 font-semibold">Software Engineer</h4>
                                <p class="text-gray-600">ABC Tech - Jan 2020 to Present</p>
                                <p class="text-gray-500 mt-2">Developed and maintained scalable web applications using React
                                    and Node.js.</p>
                            </li>
                            <li class="bg-white p-4 rounded-lg shadow-md">
                                <h4 class="text-gray-800 font-semibold">Frontend Developer</h4>
                                <p class="text-gray-600">XYZ Solutions - Jun 2018 to Dec 2019</p>
                                <p class="text-gray-500 mt-2">Designed user-friendly interfaces and optimized web
                                    applications for performance.</p>
                            </li>
                        </ul>
                    </section>

                    <!-- Resume -->
                    {{-- <section class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Resume</h3>
            <div class="mt-4" id="resume">
              <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Resume</button>
              <button class="ml-2 bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Upload Resume</button>
            </div>
          </section> --}}
                </div>
            </div>
        </main>
    </div>
@endsection
