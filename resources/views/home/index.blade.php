@extends('home.homebase')
@section('title', 'Home Page')
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
    {{-- <div class="section text-center mt-8">
        <h3 class="text-4xl">Bihar's <strong>Largest</strong> Job Portal</h3>
        <h3 class="text-xl mt-4">Taskinn Solution helps you hire staff in very less time</h3>
        <div class="image flex justify-center"><img src="/landing.jpg" class="h-96" alt=""></div>
    </div>

    <div class="button flex justify-center gap-5 mb-20">
        <a href="/get-job/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Apply for Private job</button>
            <p class="text-center text-blue-500 text-sm mt-1 hover:underline">प्राइवेट नौकरी के लिए आवेदन करे</p>
        </a>
        <a href="/hire/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Hire a Candidate</button>
            <p class="text-center text-blue-500 text-sm hover:underline mt-1">कर्मचारी चयन करे</p>
        </a>       
    </div> --}}

    {{-- <div class="section text-start mt-20 px-4 mx-32 ">

        <p class="text-green-700 font-semibold md:mb-5 md:text-xl">BIHAR’S #1 BEST JOB PLATFORM </p>
        <h2 class="md:text-6xl text-xl md:mb-5">Your job search ends here </h2>
        <p class="md:text-2xl font-normal text-xl"> Discover 50 lakh+ career opportunities</p>

    </div>
    <div class="flex justify-between mx-32">
        <div class="button flex flex-col sm:flex-row justify-center gap-5 mt-6 mb-20 items-end py-32">
            <a href="{{ url('/get-job/t&c') }}" class="flex flex-col items-center">
                <button
                    class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl sm:text-lg">Apply
                    for Private job</button>
                <p class="text-center text-blue-500 text-sm mt-1 hover:underline">प्राइवेट नौकरी के लिए आवेदन करे</p>
            </a>
            <a href="{{ url('/hire/t&c') }}" class="flex flex-col items-center">
                <button
                    class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl sm:text-lg">Hire
                    a Candidate</button>
                <p class="text-center text-blue-500 text-sm hover:underline mt-1">कर्मचारी चयन करे</p>
            </a>
        </div>
        <div class="image flex justify-end ">
            <img src="{{ asset('/landing.png') }}" class="h-96 md:h-96 sm:h-48" alt="">
        </div>
    </div> --}}

    <div class="section text-start mt-20 px-4 lg:px-32">
        <p class="text-green-700 font-semibold mb-3 md:mb-5 text-lg md:text-xl tracking-wider">
            BIHAR’S #1 BEST JOB PLATFORM
        </p>
        <h2 class="text-2xl md:text-6xl font-bold leading-tight mb-3 md:mb-5">
            Your job search ends here
        </h2>
        <p class="md:text-2xl text-lg font-light text-gray-700">
            Discover 50 lakh+ career opportunities
        </p>
    </div>

    <div class="flex flex-col lg:flex-row justify-between items-center lg:mx-32 space-y-10 lg:space-y-0">
        <div
            class="button flex flex-col sm:flex-row justify-center gap-5 mt-6 lg:mt-0 items-center sm:items-start lg:items-end py-8">
            <a href="{{ url('/get-job/t&c') }}" class="flex flex-col items-center group">
                <button
                    class="text-white bg-yellow-500 p-3 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300 ease-in-out px-10 md:px-12 text-lg md:text-xl">
                    Apply for Private Job
                </button>
                <p class="text-center text-blue-500 text-sm mt-2 group-hover:underline transition duration-300 ease-in-out">
                    प्राइवेट नौकरी के लिए आवेदन करे
                </p>
            </a>
            <a href="{{ url('/hire/t&c') }}" class="flex flex-col items-center group">
                <button
                    class="text-white bg-yellow-500 p-3 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300 ease-in-out px-10 md:px-12 text-lg md:text-xl">
                    Hire a Candidate
                </button>
                <p class="text-center text-blue-500 text-sm mt-2 group-hover:underline transition duration-300 ease-in-out">
                    कर्मचारी चयन करे
                </p>
            </a>
        </div>

        <div class="image pb-32">
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

    <div class="max-w-full mx-auto px-20 bg-white p-10  mt-20 mb-20">
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

            <div class="grid grid-cols-1 md:grid-cols-3 w-full font-normal text-sm">
                <div>
                    <ul class="space-y-2">
                        <li>Jobs in Agra</li>
                        <li>Jobs in Ajmer</li>
                        <li>Jobs in Asansol</li>
                        <li>Jobs in Belagavi</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0">
                        <li>Jobs in Ahmedabad</li>
                        <li>Jobs in Aligarh</li>
                        <li>Jobs in Aurangabad</li>
                        <li>Jobs in Bengaluru</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0">
                        <li>Jobs in Ahmednagar</li>
                        <li>Jobs in Amritsar</li>
                        <li>Jobs in Bareilly</li>
                        <li>Jobs in Bhavnagar</li>
                    </ul>
                </div>
            </div>
            <div class="co mt-10 flex justify-center items-center">
                <a href="{{ url('/sarkari-job') }}"
                    class="text-gray-400 font-normal cursor-pointer hover:underline hover:text-gray-600">View More <span
                        class="font-bold">▼</span></a>
            </div>
        </div>
        <hr>

        <div class=" max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 mt-10">
            <h3 class=" font-bold mb-4  text-base">Find Private Jobs</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 font-normal text-sm">
                <div>
                    <ul class="space-y-2 ">
                        <li>Jobs in Agra</li>
                        <li>Jobs in Ajmer</li>
                        <li>Jobs in Asansol</li>
                        <li>Jobs in Belagavi</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0">
                        <li>Jobs in Ahmedabad</li>
                        <li>Jobs in Aligarh</li>
                        <li>Jobs in Aurangabad</li>
                        <li>Jobs in Bengaluru</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0 ">
                        <li>Jobs in Ahmednagar</li>
                        <li>Jobs in Amritsar</li>
                        <li>Jobs in Bareilly</li>
                        <li>Jobs in Bhavnagar</li>
                    </ul>
                </div>
            </div>
            <div class="mt-10 flex justify-center items-center">
                <a href="{{ url('/private-job') }}"
                    class="text-gray-400 font-normal cursor-pointer hover:underline hover:text-gray-600">View More <span
                        class="font-bold">▼</span></a>
            </div>
        </div>
        <hr>

        <div class=" max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 mt-10">
            <h3 class=" font-bold mb-4  text-base">Sarkari Yojnas</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 font-normal text-sm">
                <div>
                    <ul class="space-y-2 ">
                        <li>Jobs in Agra</li>
                        <li>Jobs in Ajmer</li>
                        <li>Jobs in Asansol</li>
                        <li>Jobs in Belagavi</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0">
                        <li>Jobs in Ahmedabad</li>
                        <li>Jobs in Aligarh</li>
                        <li>Jobs in Aurangabad</li>
                        <li>Jobs in Bengaluru</li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 mt-8 md:mt-0 ">
                        <li>Jobs in Ahmednagar</li>
                        <li>Jobs in Amritsar</li>
                        <li>Jobs in Bareilly</li>
                        <li>Jobs in Bhavnagar</li>
                    </ul>
                </div>
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

@endsection
