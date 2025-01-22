@extends('home.homebase')
@section('title', 'Home')
<style>
    .faq-item {
        cursor: pointer;
        color: blue;
    }

    .faq-answer {
        display: none;
    }

    .faq-item.active .faq-answer {
        display: block;
    }
</style>

@section('content')

    <div class="section text-start md:mt-32 px-4 lg:px-16 flex flex-col md:flex-row md:gap-20 lg:mb-20">
        <div class="">
            <p class="text-green-700 font-semibold mb-3 md:mb-5 text-lg md:text-xl tracking-wider">
                BIHAR’S #1 BEST JOB PLATFORM
            </p>
            <h2 class="text-2xl md:text-5xl font-bold leading-tight mb-3 md:mb-5">
                Your job search ends here
            </h2>
            <p class="md:text-2xl text-lg font-light text-gray-700">
                Discover 50 lakh+ career opportunities
            </p>
            <div class="relative mt-4">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                <input type="text" placeholder="Search for job"
                    class="rounded-xl border border-gray-400 bg-blue-100 py-2 px-12 md:py-4 w-full font-normal focus:outline-none focus:ring-0 "
                    id="search-box">
            </div>
            <ul id="search-results" class=" font-normal mt-4 px-1 mb-2 md:mb-0 md:px-10"></ul>


            <div class="button flex flex-col sm:flex-row justify-center gap-5 lg:mt-14 sm:items-start md:py-8">
                <a href="{{ url('/get-job/t&c') }}" class="flex flex-col items-center group">
                    <button
                        class="text-white bg-yellow-500 p-3 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300 ease-in-out px-10 md:px-12 text-lg md:text-xl">
                        Apply for Private Job
                    </button>
                    <p
                        class="text-center text-blue-500 text-sm mt-2 group-hover:underline transition duration-300 ease-in-out">
                        प्राइवेट नौकरी के लिए आवेदन करे
                    </p>
                </a>
                <a href="{{ url('/hire/t&c') }}" class="flex flex-col items-center group">
                    <button
                        class="text-white bg-yellow-500 p-3 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300 ease-in-out px-10 md:px-12 text-lg md:text-xl">
                        Hire a Candidate
                    </button>
                    <p
                        class="text-center text-blue-500 text-sm mt-2 group-hover:underline transition duration-300 ease-in-out">
                        कर्मचारी चयन करे
                    </p>
                </a>
            </div>
        </div>
        <div class="flex items-start md:mt-10 md:ml-32">
            <img src="{{ asset('/landing.png') }}" class="h-72 sm:h-80 md:h-96 lg:h-96 object-cover" alt="Job Platform">
        </div>
    </div>

    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-medium text-gray-600 mb-8">Get started in 3 easy steps</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Step 1 -->
                <div class="bg-white p-6">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('/icons/c2.svg') }}" alt="Step 1 Image" class="w-64 h-64">
                    </div>
                    <h3 class="text-lg font-medium mb-2">Post a Job</h3>
                    <p class="text-gray-600 font-light text-sm">Tell us what you need in a candidate.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-6">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('/icons/c3.svg') }}" alt="Step 2 Image" class="w-64 h-64">
                    </div>
                    <h3 class="text-lg font-medium mb-2">Get Verified</h3>
                    <p class="text-gray-600 font-light text-sm">Our team will call to verify your employer account.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-6">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('/icons/c1.svg') }}" alt="Step 3 Image" class="w-64 h-64">
                    </div>
                    <h3 class="text-lg font-medium mb-2">Get calls. Hire.</h3>
                    <p class="text-gray-600 font-light text-sm">You will get calls from relevant candidates.</p>
                </div>

            </div>

            <!-- Button -->
            <div class="mt-8">
                <a href="{{ url('/hire') }}"
                    class="bg-white text-indigo-600 px-7 py-2 rounded border border-indigo-600 hover:bg-indigo-700 hover:text-white">Post
                    a
                    Job</a>
            </div>
        </div>
    </section>


    <div class=" p-6  mb-10">
        <h2 class="text-3xl font-medium text-gray-600 mb-8 text-center">Choose a job type</h2>
        <div class="grid grid-cols-6 gap-10 text-center mt-20">

            <!-- Work from home -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-house-laptop text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Work from home</span>
            </div>

            <!-- Internship -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-user-graduate text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Internship</span>
            </div>

            <!-- Part time -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-clock text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Part time</span>
            </div>

            <!-- Full time -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-briefcase text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Full time</span>
            </div>

            <!-- Government job -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-building text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Government job</span>
            </div>

            <!-- Work abroad -->
            <div class="flex flex-col items-center group cursor-pointer">
                <i class="fas fa-passport text-4xl text-gray-600 group-hover:text-blue-600 mb-2"></i>
                <span class="text-sm font-medium text-gray-600 group-hover:text-blue-600">Work abroad</span>
            </div>

        </div>
    </div>


    <div class="py-8 px-4 bg- overflow-hidden ">
        <h2 class="text-3xl font-medium text-gray-600 mb-8 text-center">Trending job roles on Taskinn</h2>
        <div class="relative overflow-hidden mt-10">
            <!-- Scrolling container -->
            <marquee behavior="" direction="" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="flex items-center gap-4" id="callingPrivateCard">
                    <!-- Job role card -->
                    <a href="">
                        <div
                            class="flex-none w-72 p-4 bg-white hover:bg-orange-100 border border-gray-300 hover:border-orange-400 rounded-lg shadow-sm hover:shadow-md transition duration-150">
                            <div class="flex items-center gap-3">
                                <img src="/path/to/icon.png" alt="Counsellor" class="w-8 h-8">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-800 hover:text-orange-800">Counsellor (Career /
                                        Ed.)</h3>
                                    <p class="text-xs text-gray-500 hover:text-orange-600">395 openings</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Add more cards as needed -->
                </div>
            </marquee>
            <marquee behavior="" direction="" class="mt-5" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="flex items-center gap-4" id="callingSarkariCard">
                    <!-- Job role card -->
                    <a href="">
                        <div
                            class="flex-none w-72 p-4 bg-white hover:bg-orange-100 border border-gray-300 hover:border-orange-400 rounded-lg shadow-sm hover:shadow-md transition duration-150">
                            <div class="flex items-center gap-3">
                                <img src="/path/to/icon.png" alt="Counsellor" class="w-8 h-8">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-800 hover:text-orange-800">Counsellor (Career
                                        /
                                        Ed.)</h3>
                                    <p class="text-xs text-gray-500 hover:text-orange-600">395 openings</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Add more cards as needed -->
                </div>
            </marquee>
        </div>

    </div>


    <div class="bg-green-50 rounded-lg shadow border p-8 flex items-center justify-between m-20 px-20">
        <!-- Left Section: Image -->
        <div class="flex-shrink-0">
            <img src="{{asset('/landing_.png')}}" alt="People" class="h-96 object-cover rounded-lg">
        </div>

        <!-- Right Section: Content -->
        <div class="ml-8 text-center md:text-left">
            <!-- Tagline -->
            <div
                class="bg-green-100 text-green-700 text-base uppercase font-semibold px-3 py-1 rounded-full inline-block mb-4">
                TASKINN FOR EMPLOYERS
            </div>

            <!-- Main Text -->
            <h1 class="text-2xl md:text-7xl font-bold text-green-900 my-10 mb-2">Want to hire?</h1>
            <p class="text-gray-700 text-lg mb-6">
                Find the best candidate from 5 crore+ active job seekers!
            </p>
            <div class="mt-8">
                <a href="{{ url('/hire') }}"
                    class="bg-white text-green-600 px-8 py-2 rounded border border-green-600 hover:bg-green-700 hover:text-white">Post
                    a
                    Job →</a>
            </div>
        </div>

    </div>


    <div class="max-w-full mx-auto md:px-20 bg-white md:p-10 p-5  mb-20">
        <h2 class="text-4xl font-normal text-gray-600 mb-4">Frequently Asked Questions (Employer)</h2>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-base p-2 font-light text-blue-400">
                <span class="mr-4">+</span>Please articulate the core idea of your work?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-500">
                The core idea of our work is to...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-base p-2 font-light text-blue-400">
                <span class="mr-4">+</span>What is the main social problem this idea is attempting to solve? What is
                the
                impact of the problem and why does it persist?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-500">
                The main social problem we are addressing is...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-base p-2 font-light text-blue-400">
                <span class="mr-4">+</span>What is the scale of the impact of your work to date?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-500">
                The scale of our impact to date includes...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-base p-2 font-light text-blue-400">
                <span class="mr-4">+</span>Why are you personally dedicated to the issue?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-500">
                I am personally dedicated to this issue because...
            </div>
        </div>

    </div>

    <div class="bg-gray-100 py-10 mb-20">
        <!-- Section: Find Jobs -->
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <h3 class=" font-bold mb-4  text-base">Find Sarkari Jobs</h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-2   w-full font-normal md:text-sm text-xs"
                id="callingSarkariJob">
                <a href="" class="hover:underline hover:text-blue-400">
                    <li>Jobs in Agra</li>
                </a>
            </div>
            <div class="co mt-10 flex justify-center items-center">
                <a href="{{ url('/sarkari-job') }}"
                    class="text-gray-400 font-normal cursor-pointer hover:underline hover:text-gray-600">View More <span
                        class="font-bold">▼</span></a>
            </div>
        </div>
        <hr>

        <div class=" max-w-5xl mx-auto px-4 sm:px-6  lg:px-8 mb-10 mt-10">
            <h3 class=" font-bold mb-4  text-base">Find Private Jobs</h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-2  font-normal md:text-sm text-xs" id="callingPrivateJob">
                <a href="" class="hover:underline hover:text-blue-400">
                    <li>Jobs in Agra</li>
                </a>
            </div>
            <div class="mt-10 flex justify-center items-center">
                <a href="{{ url('/private-job') }}"
                    class="text-gray-400 font-normal cursor-pointer hover:underline hover:text-gray-600">View More <span
                        class="font-bold">▼</span></a>
            </div>
        </div>
        <hr>

        <div class=" max-w-5xl mx-auto px-4 sm:px-6  lg:px-8 mb-10 mt-10">
            <h3 class=" font-bold mb-4  text-base">Sarkari Yojnas</h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 font-normal md:text-sm text-xs" id="callingYojna">
                <a href="" class="hover:underline hover:text-blue-400">
                    <li>Jobs in Agra</li>
                </a>
            </div>
            <div class="mt-10 flex justify-center items-center">
                <a href="{{ url('/sarkari-yojna') }}"
                    class="text-gray-400 font-normal cursor-pointer hover:underline hover:text-gray-600">View More <span
                        class="font-bold">▼</span></a>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingSarkariJobs = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('home.sarkari-job.index') }}",
                    success: function(response) {
                        let table = $("#callingSarkariJob");
                        let card = $("#callingSarkariCard");
                        card.empty();
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                                <a href="{{ url('/sarkari-job') }}" class="hover:underline hover:text-blue-400"><li>${data.name}</li></a>
                            `);

                            let logo = data.logo ?
                                `<img src="{{ asset('/image/sarkari/logo/${data.logo}') }}" class="w-8 h-8" alt="">` :
                                `<div class="w-8 h-8">${data.name.charAt(0)}</div>`;
                            card.append(`
                                 <a href="{{ url('/sarkari-job') }}">
                                    <div
                                        class="flex-none w-72 p-4 bg-white hover:bg-orange-100 border border-gray-300 hover:border-orange-400 rounded-lg shadow-sm hover:shadow-md transition duration-150">
                                        <div class="flex items-center gap-3">
                                            ${logo}
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-800 hover:text-orange-800">
                                                    ${data.name.length > 25 ? data.name.substr(0, 25) + '...' : data.name}
                                                </h3>
                                                <p class="text-xs text-gray-500 hover:text-orange-600">${data.no_of_post} openings</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `);
                        });

                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "{{ route('home.role.index') }}",
                    success: function(response) {
                        let table = $("#callingPrivateJob");
                        let card = $("#callingPrivateCard");
                        card.empty();
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                                <a href="{{ url('/private-job') }}" class="hover:underline hover:text-blue-400"><li>${data.title}</li></a>
                            `);
                            let logo = data.hire.logo ?
                                `<img src="{{ asset('/image/company/logo/${data.hire.logo}') }}" class="w-8 h-8" alt="">` :
                                `<div class="w-8 h-8">${data.title.charAt(0)}</div>`;
                            card.append(`
                                 <a href="{{ url('/private-job') }}">
                                    <div class="flex-none w-72 p-4 bg-white hover:bg-orange-100 border border-gray-300 hover:border-orange-400 rounded-lg shadow-sm hover:shadow-md transition duration-150">
                                        <div class="flex items-center gap-3">
                                            ${logo}
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-800 hover:text-orange-800">
                                                    ${data.title.length > 25 ? data.title.substr(0, 25) + '...' : data.title}
                                                </h3>
                                                <p class="text-xs text-gray-500 hover:text-orange-600">${data.no_of_post} openings</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `);
                        });

                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "{{ route('home.yojna.index') }}",
                    success: function(response) {
                        let table = $("#callingYojna");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                                <a href="{{ url('/sarkari-yojna-form/${data.id}') }}" class="hover:underline hover:text-blue-400 capitalize text-sm"><li>${data.ename}</li></a>
                            `);
                        });

                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingSarkariJobs();

        });
    </script>

    <script>
        $(document).ready(function() {
            const $searchInput = $("#search-box");
            const $resultsContainer = $("#search-results"); // Ensure a container for displaying results

            // Event listener for search input
            $searchInput.on("input", function() {
                const query = $(this).val().trim();

                if (query.length > 2) {
                    fetchResults(query);
                } else {
                    $resultsContainer.html(""); // Clear results if query is too short
                }
            });

            function fetchResults(query) {
                $.ajax({
                    url: "{{ route('home.search.index') }}", // Laravel route for the search endpoint
                    type: "POST",
                    data: {
                        search: query,
                        _token: "{{ csrf_token() }}" // Include CSRF token for security
                    },
                    success: function(data) {
                        renderResults(data);
                    },
                    error: function(xhr) {
                        console.error("Error fetching search results:", xhr.responseText);
                    }
                });
            }

            function renderResults(data) {
                $resultsContainer.html(""); // Clear previous results

                if (!data.sarkariJobs.length && !data.privateJobs.length && !data.yojnas.length) {
                    $resultsContainer.append("<li>No results found</li>");
                    return;
                }

                // Render Sarkari Jobs
                if (data.sarkariJobs.length) {
                    // $resultsContainer.append("<h3>Sarkari Jobs:</h3>");
                    data.sarkariJobs.forEach(job => {
                        $resultsContainer.append(
                            `<li><a href="{{ url('/sarkari-job') }}" class="hover:underline hover:text-blue-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>${job.name}
                     </a></li>`
                        );
                    });
                }

                // Render Private Jobs
                if (data.privateJobs.length) {
                    // $resultsContainer.append("<h3>Private Jobs:</h3>");
                    data.privateJobs.forEach(job => {
                        $resultsContainer.append(
                            `<li><a href="{{ url('/private-job') }}" class="hover:underline hover:text-blue-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i> ${job.title}
                     </a></li>`
                        );
                    });
                }

                // Render Yojnas
                if (data.yojnas.length) {
                    // $resultsContainer.append("<h3>Yojnas:</h3>");
                    data.yojnas.forEach(yojna => {
                        $resultsContainer.append(
                            `<li><a href="{{ url('/sarkari-yojna-form/${yojna.id}') }}" class="hover:underline hover:text-blue-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i> ${yojna.ename}
                     </a></li>`
                        );
                    });
                }
            }
        });
    </script>





@endsection
