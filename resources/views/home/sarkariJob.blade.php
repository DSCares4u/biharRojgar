@extends('home.homebase')
@section('title', 'Sarkari Jobs')
@section('content')
    <div class="flex flex-col md:flex-row">
        <div class="container p-6 bg-gray-100 rounded-lg w-full md:w-3/4 md:mb-10">
            <div class="heading mb-6">
                <h2 class="md:text-2xl text-xl font-semibold">Sarkari Jobs</h2>
                <p class="text-xs text-red-500 mt-4 font-medium md:text-sm">To avoid last minute rush, you are advised to
                    submit your
                    online application much before the last date. RRBs shall not be responsible if applicants are not able
                    to
                    submit their online application including payment of fee within the last date for any reason whatsoever.
                </p>
            </div>
            <div class="flex flex-col md:flex-row mb-4 w-full">
                <input type="text" id="searchNameRole" placeholder="Search by Title/ Name"
                    class="border font-light p-2 w-full md:w-1/2 mr-0 md:mr-2 rounded-lg mb-2 md:mb-0">
                <input type="text" id="searchCityState" placeholder="Search by Location"
                    class="border font-light p-2 w-full md:w-1/2 ml-0 md:ml-2 rounded-lg">
                <button id="searchButton"
                    class="mt-2 md:mt-0 md:ml-2 bg-blue-500 text-white p-2 rounded-lg w-full md:w-auto">Search</button>
            </div>
            <div class="card" id="callingData"></div>
        </div>

        <div class="p-4 bg-white rounded-lg shadow mt-12">
            <h2 class="text-lg font-semibold mb-4">Filters</h2>

            <!-- Date Posted Filter -->
            <div class="mb-6">
                <h3 class="font-medium text-gray-700 mb-2">Date posted</h3>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="date-posted" class="text-indigo-600" checked />
                        <span>All</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="date-posted" class="text-indigo-600" />
                        <span>Last 24 hours</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="date-posted" class="text-indigo-600" />
                        <span>Last week</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="date-posted" class="text-indigo-600" />
                        <span>Last month</span>
                    </label>
                </div>
            </div>

            <!-- Distance Filter -->
            <div class="mb-6">
                <h3 class="font-medium text-gray-700 mb-2">Location</h3>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="distance" class="text-indigo-600" checked />
                        <span>All</span>
                    </label>
                </div>
            </div>

            <!-- Salary Filter -->
            <div class="mb-">
                <h3 class="font-medium text-gray-700 mb-2">Experience</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-700">₹0</span>
                    <input type="range" min="0" max="5"
                        class="flex-1 h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-indigo-600" />
                    <span class="text-gray-700">5</span>
                </div>
                <p class="text-sm text-gray-500 mt-2">Minimum monthly salary</p>
            </div>
            <div>
                <h3 class="font-medium text-gray-700 mb-2">Salary</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-700">₹0</span>
                    <input type="range" min="0" max="150000"
                        class="flex-1 h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-indigo-600" />
                    <span class="text-gray-700">1.5 Lakhs</span>
                </div>
                <p class="text-sm text-gray-500 mt-2">Minimum monthly salary</p>
            </div>
        </div>
        {{-- <div class="flex flex-col w-full md:w-1/4 md:fixed right-2 top-1 mt-6 md:mt-20 ">
            <div
                class="w-full bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 mb-5 md:mb-0">
                <div class="price mt-2 mb-4">
                    <h3 class="text-lg font-semibold">Our Services</h3>
                    <div class="line bg-blue-500">
                        <hr class="h-1">
                    </div>
                    <div class="flex flex-col text-sm mt-3">
                        <a href="" class="mt-3 font-semibold">Manpower Recruitment</a>
                        <a href="" class="mt-3 font-semibold">Placement Recruitment</a>
                        <a href="" class="mt-3 font-semibold">Career Consultant</a>
                        <a href="" class="mt-3 font-semibold">Job Placement</a>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="price mt-2 mb-4">
                    <h3 class="text-lg font-semibold">Contact Us</h3>
                    <div class="line bg-blue-500">
                        <hr class="h-1">
                    </div>
                    <div class="flex flex-col mt-3">
                        <h3 class="mt-2 text-sm font-medium">Taskinn Solution</h3>
                        <hr class="mt-2">
                        <h3 class="mt-2 font-normal text-xs">Near Panchwati Chowk</h3>
                        <h3 class="font-normal text-xs">Professor Colony, Rambagh</h3>
                        <h3 class="font-normal text-xs">Purnea Bihar - 854301, India</h3>
                        <hr class="mt-2 mb-2">
                        <h3 class="text-sm"><strong>Mobile: </strong> +91-8677889960, 8268222299</h3>
                        <hr class="mt-2 mb-2">
                        <h3 class="text-sm"><strong>Call Us: </strong> 08677889960</h3>
                        <hr class="mt-2 mb-2">
                        <h3 class="text-sm"><strong>E-mail: </strong> taskinnsolution@gmail.com</h3>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <script>
        $(document).ready(function() {
            let callingSarkariJobs = (searchNameRole = '', searchCityState = '') => {
                $.ajax({
                        type: "GET",
                        url: "{{ route('home.sarkari-job.index') }}",
                        success: function(response) {
                            let table = $("#callingData");
                            table.empty();

                            let data = response.data;
                            data = data.filter(job => {
                                let matchNameRole = true;
                                let matchCityState = true;

                                // Check if searchNameRole matches job name or role
                                if (searchNameRole) {
                                    matchNameRole = job.name.toLowerCase().includes(
                                            searchNameRole) ||
                                        job.role.toLowerCase().includes(searchNameRole);
                                }

                                // Check if searchCityState matches job city or state
                                if (searchCityState) {
                                    matchCityState = job.location.toLowerCase().includes(
                                        searchCityState);
                                }

                                return matchNameRole && matchCityState;
                            });

                            data.forEach((job) => {
                                    // Check if the user is logged in
                                    @auth
                                    let logIn = true; // User is logged in
                                @else
                                    let logIn = false; // User is not logged in
                                @endauth

                                if (!logIn) {
                                    // Generate logo using the first letter of the job name if no logo is provided
                                    let logo = job.logo ?
                                        `<img src="{{asset('/image/sarkari/logo/${job.logo}')}}" class="rounded-full w-20 h-20" alt="">` :
                                        `<div class="generated-logo rounded-full w-20 h-20 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.name.charAt(0)}</div>`;

                                    table.append(`
                                   <div class="block max-w-full mt-4 p-4 bg-white border capitalize border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <h5 class="mb-2 text-xl py-2 px-3 leading-5 bg-purple-400 font-bold rounded-full text-white dark:text-white">${job.name}</h5>
                                        <div class="details flex flex-col mt-4 md:flex-row">
                                            <div class="logo w-full md:w-2/12 flex justify-center md:justify-start mb-4 md:mb-0">${logo}</div>
                                            <div class="w-full md:w-6/12 flex flex-col md:ml-4">
                                                <div class="flex justify-between text-blue-500 font-medium">
                                                    <h5>${job.role}</h5>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="text-sm text-gray-500 font-medium">No. Of Post: ${job.no_of_post}</h5>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-medium">Age: ${job.min_age} - ${job.max_age} Years</h5>
                                                    </div>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-medium">Salary: ${job.min_salary} - ${job.max_salary}</h5>
                                                    </div>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="text-sm text-gray-500 font-medium">Job Type: ${job.job_type} Government</h5>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="text-sm text-gray-500 font-medium">Qualification: ${job.qualification}</h5>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="text-sm text-gray-500 font-medium">Skills req: ${job.skills}</h5>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="mt-1">
                                                        <h5 class="font-semibold text-red-700 rounded text-base">Form Fees: Rs. ${job.fees}</h5>
                                                        <p class="text-[12px]">(Including gov. fees)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full md:w-3/12 flex flex-col justify-between">
                                                <div class="mt-2">
                                                    <h5 class="text-gray-500 font-medium">Opening Date: ${job.opening_date}</h5>
                                                    <h5 class="text-gray-500 font-medium">Closing Date: ${job.closing_date}</h5>                                                    
                                                    <h5 class="text-sm text-gray-500 font-medium">Openings for: ${job.location}</h5>
                                                </div>
                                                <div class="button flex justify-end mt-4 md:mt-0">
                                                    <a href="{{url('/viewSarkariJobForm/${job.id}')}}">
                                                            <button class="bg-green-600 hover:bg-green-700 rounded text-white px-2 py-1 mt-2">Apply Now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `);
                                } else {
                                    // Check if the user has already applied for this job
                                    $.ajax({
                                        type: "GET",
                                        url: `{{url('checkApplicationStatus/${job.id}')}}`,
                                        success: function(applicationResponse) {
                                            let applyButton;
                                            if (applicationResponse.already_applied) {
                                                applyButton =
                                                    `<button class="bg-gray-600 rounded text-center text-white py-1 px-1 w-full" disabled>Already Applied</button>`;
                                            } else {
                                                applyButton =
                                                    `<a href="/viewSarkariJobForm/${job.id}"><button class="bg-green-600 hover:bg-green-700 rounded text-white px-1 py-1">Apply Now</button></a>`;
                                            }
                                            let logo = job.logo ?
                                                `<img src="{{asset('/image/sarkari/logo/${job.logo}')}}" class="rounded-full w-20 h-20" alt="">` :
                                                `<div class="generated-logo rounded-full w-20 h-20 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.name.charAt(0)}</div>`;

                                            table.append(`
                                            <div class="block max-w-full mt-4 p-4 bg-white border capitalize border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                            <h5 class="mb-2 text-xl py-2 px-3 leading-5 bg-purple-400 font-bold rounded-full text-white dark:text-white">${job.name}</h5>
                                            <div class="details flex flex-col mt-4 md:flex-row">
                                                <div class="logo w-full md:w-2/12 flex justify-center md:justify-start mb-4 md:mb-0">${logo}</div>
                                                <div class="w-full md:w-6/12 flex flex-col md:ml-4">
                                                    <div class="flex justify-between text-blue-500 font-bold">
                                                        <h5>${job.role}</h5>
                                                    </div>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-semibold">No. Of Post: ${job.no_of_post}</h5>
                                                        <div class="mt-1">
                                                            <h5 class="text-sm text-gray-500 font-semibold">Age: ${job.min_age} - ${job.max_age} Years</h5>
                                                        </div>
                                                        <div class="mt-1">
                                                            <h5 class="text-sm text-gray-500 font-semibold">Salary: ${job.min_salary} - ${job.max_salary}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-semibold">Job Type: ${job.job_type} Government</h5>
                                                    </div>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-semibold">Qualification: ${job.qualification}</h5>
                                                    </div>
                                                    <div class="mt-1">
                                                        <h5 class="text-sm text-gray-500 font-semibold">Skills req: ${job.skills}</h5>
                                                    </div>
                                                    <div class="flex justify-between mt-2">
                                                        <div class="mt-1">
                                                            <h5 class="font-semibold text-red-700 rounded text-base">Form Fees: Rs. ${job.fees}</h5>
                                                            <p class="text-[12px]">(Including gov. fees)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-3/12 flex flex-col justify-between">
                                                    <div class="mt-2">
                                                        <h5 class="text-gray-500 font-semibold">Opening Date: ${job.opening_date}</h5>
                                                        <h5 class="text-gray-500 font-semibold">Closing Date: ${job.closing_date}</h5>                                                    
                                                        <h5 class="text-sm text-gray-500 font-semibold">Openings for: ${job.location}</h5>
                                                    </div>
                                                    <div class="button flex justify-end mt-4 md:mt-0">
                                                        ${applyButton}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        `);
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error checking application status:',error);
                                        }
                                    });
                                }
                            });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
        };

        // Call the function initially to load all jobs
        callingSarkariJobs();

        $('#searchName, #searchRole').on('keyup', function() {
            let searchName = $('#searchName').val();
            let searchRole = $('#searchRole').val();
            callingSarkariJobs(searchName, searchRole);
        });

        $('#searchNameRole').on('keyup', function() {
            let searchNameRole = $(this).val().toLowerCase();
            let searchCityState = $('#searchCityState').val().toLowerCase();
            callingSarkariJobs(searchNameRole, searchCityState);
        });

        $('#searchCityState').on('keyup', function() {
            let searchNameRole = $('#searchNameRole').val().toLowerCase();
            let searchCityState = $(this).val().toLowerCase();
            callingSarkariJobs(searchNameRole, searchCityState);
        });
        });
    </script>
@endsection
