@extends('home.homebase')
@section('title', 'Private Job')
@section('content')

    <div class="container p-2 rounded-lg mb-10 ">
        <div class="heading mb-6 w-full md:w-4/5">
            <h2 class="md:text-2xl text-xl font-semibold">Private Job</h2>
            <p class="md:text-sm text-xs text-red-500 mt-4 font-medium ">To avoid last minute rush, you are advised to submit
                your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="flex flex-col w-full md:justify-between  md:flex-row mx-4 md:mx-10 ">
            <div class="flex flex-col w-full md:w-3/4">
                <div class="flex flex-col md:flex-row mb-4 w-full">
                    <input type="text" id="searchNameRole" placeholder="Search by Company/Profile/Title"
                        class="border p-2 font-light w-full md:w-1/2 mr-0 md:mr-2 rounded-lg mb-2 md:mb-0">
                    <input type="text" id="searchCityState" placeholder="Search by Location"
                        class="border p-2 font-light w-full md:w-1/2 ml-0 md:ml-2 rounded-lg ">
                    <button id="searchButton"
                        class="mt-2 md:mt-0 md:ml-2 bg-blue-500 text-white p-2 rounded-lg w-full md:w-auto">Search</button>
                </div>
                <div id="searchResults" class="mt-4"></div>
                <div class="w-full" id="callingHire"></div>
            </div>
{{-- 
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
                            <span>Last 3 days</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="date-posted" class="text-indigo-600" />
                            <span>Last 7 days</span>
                        </label>
                    </div>
                </div>

                <!-- Distance Filter -->
                <div class="mb-6">
                    <h3 class="font-medium text-gray-700 mb-2">Distance</h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="distance" class="text-indigo-600" checked />
                            <span>All</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="distance" class="text-indigo-600" />
                            <span>Within 5 km</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="distance" class="text-indigo-600" />
                            <span>Within 10 km</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="distance" class="text-indigo-600" />
                            <span>Within 20 km</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="distance" class="text-indigo-600" />
                            <span>Within 50 km</span>
                        </label>
                    </div>
                </div>

                <!-- Salary Filter -->
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
            </div> --}}

            <div class="flex flex-col w-full md:w-1/4 md:fixed right-5 top-1 mt-6 md:mt-20 ">
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
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let callingSarkariJobs = (searchNameRole = '', searchCityState = '') => {
                $.ajax({
                        type: "GET",
                        url: "{{ route('home.role.index') }}",
                        success: function(response) {
                            let table = $("#callingHire");
                            table.empty();
                            let data = response.data;

                            data = data.filter(job => {
                                let matchNameRole = true;
                                let matchCityState = true;

                                if (searchNameRole) {
                                    matchNameRole = job.hire.company_name.toLowerCase()
                                        .includes(searchNameRole) ||
                                        job.title.toLowerCase().includes(searchNameRole) ||
                                        job.profile.toLowerCase().includes(searchNameRole) ||
                                        job.type.toLowerCase().includes(searchNameRole);
                                }

                                if (searchCityState) {
                                    matchCityState = job.hire.city.toLowerCase().includes(
                                            searchCityState) ||
                                        job.hire.state.toLowerCase().includes(searchCityState);
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
                                    if (job.isApproved == true) {
                                        // Generate logo using the first letter of the job name if no logo is provided
                                        let logo = job.hire.logo ?
                                            ` <img src="{{ asset('/image/company/logo/${job.hire.logo}') }}" class="rounded w-12 h-12" alt="">` :
                                            `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                        table.append(`
                                            <div class="card w-full md:w-3/4 mb-4 capitalize">
                                                <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                    <div class="flex md:flex-row justify-between flex-col">
                                                        <div class="flex gap-5">
                                                            <div class="logo">
                                                                ${logo}
                                                            </div>
                                                            <div class="name flex-col flex">
                                                                <h5 class="font-semibold text-black">${job.title}</h5>
                                                                <p class="text-gray-500 text-sm capitalize">${job.hire.company_name}</p>
                                                                <p class="text-gray-500 text-xs capitalize">${job.hire.city},${job.hire.state}</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-end flex-col">
                                                            <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date: </strong>${job.hire.date_of_start}</p>
                                                            <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a target="_blank" href='${job.hire.website}' class='lowercase hover:underline'>${job.hire.website}</a></p>
                                                            <div class="mb-2">
                                                                <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>No. of Post: </p><p class="text-sm">${job.no_of_post}</p></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="body mt-2 mb-2">
                                                        <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Profile: </p><p class="text-sm">${job.profile}</p></h5>
                                                    </div>
                                                    <div class="mb-2 mt-2">
                                                        <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Type: </p><p class="text-sm">${job.type}</p></h5>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Experience: </p><p class="text-sm">${job.min_experience}-${job.max_experience} Years</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Language Required: </p><p class="text-sm">${job.preferred_lang}</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Qualification: </p><p class="text-sm">${job.qualification}</p></h5>
                                                        </div>
                                                    </div>
                                                    <div class="main flex justify-start text-gray-500">
                                                        <div class="mb-2">
                                                            <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Salary: </p><p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.min_salary}</p> -<p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.max_salary}</p></h5>
                                                        </div>
                                                    </div>
                                                    <hr class="bg-gray-500">
                                                    <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                                                        <p class="description line-clamp-2">${job.hire.description}</p>
                                                        <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                    <div class="button flex gap-5 mt-5">
                                                        <a href={{ url('/viewPrivateJobForm/${job.id}') }} class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job</a>
                                                        <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="/viewPrivateJobForm/${job.id}"><img src="{{ url('/icons/share.png') }}" class="h-6 mr-1" alt="">Share</button>
                                                    </div>
                                                </div>
                                            </div>
                                        `);
                                    }
                                } else {

                                    // Check if the user has already applied for this job
                                    $.ajax({
                                        type: "GET",
                                        url: `{{ url('/checkApplicationStatus/${job.id}') }}`, // The endpoint
                                        success: function(applicationResponse) {
                                            let applyButton;
                                            if (applicationResponse.already_applied) {
                                                applyButton =
                                                    `<button class="bg-gray-600 rounded text-center text-white py-1 w-1/2" disabled>Already Applied</button>`;
                                            } else {
                                                applyButton =
                                                    `<a href="/viewPrivateJobForm/${job.id}" class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job</a>`;
                                            }

                                            if (job.isApproved == true) {
                                                // Generate logo using the first letter of the job name if no logo is provided
                                                let logo = job.hire.logo ?
                                                    ` <img src="{{ url('/image/company/logo/${job.hire.logo}') }}" class="rounded w-12 h-12" alt="">` :
                                                    `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                                table.append(`
                                                    <div class="card w-full md:w-3/4 mb-4 capitalize">
                                                        <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                            <div class="flex md:flex-row justify-between flex-col">
                                                                <div class="flex gap-5">
                                                                    <div class="logo">
                                                                        ${logo}
                                                                    </div>
                                                                    <div class="name flex-col flex">
                                                                        <h5 class="font-semibold text-black">${job.title}</h5>
                                                                        <p class="text-gray-500 text-sm capitalize">${job.hire.company_name}</p>
                                                                        <p class="text-gray-500 text-xs capitalize">${job.hire.city},${job.hire.state}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-end flex-col">
                                                                    <p class="text-gray-600 text-sm"><strong class="text-red-600">Opening Date: </strong>${job.hire.date_of_start}</p>
                                                                    <p class="text-gray-600 text-sm"><strong class="text-blue-600">Website: </strong><a target="_blank" href='${job.hire.website}' class='lowercase hover:underline'>${job.hire.website}</a></p>
                                                                    <div class="mb-2">
                                                                        <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>No. of Post: </p><p class="text-sm">${job.no_of_post}</p></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="body mt-2 mb-2">
                                                                <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Profile: </p><p class="text-sm">${job.profile}</p></h5>
                                                            </div>
                                                            <div class="mb-2 mt-2">
                                                                <h5 class="text-sm font-normal text-gray-500 flex gap-2"><p class='font-semibold text-gray-500'>Job Type: </p><p class="text-sm">${job.type}</p></h5>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Experience: </p><p class="text-sm">${job.min_experience}-${job.max_experience} Years</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Language Required: </p><p class="text-sm">${job.preferred_lang}</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Qualification: </p><p class="text-sm">${job.qualification}</p></h5>
                                                                </div>
                                                            </div>
                                                            <div class="main flex justify-start text-gray-500">
                                                                <div class="mb-2">
                                                                    <h5 class="text-sm font-normal flex gap-2"><p class='font-semibold text-gray-500'>Salary: </p><p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.min_salary}</p> -<p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${job.max_salary}</p></h5>
                                                                </div>
                                                            </div>
                                                            <hr class="bg-gray-500">
                                                            <div class="footer flex gap-6 font-medium mt-2 capitalize text-xs">
                                                                <p class="description line-clamp-2">${job.hire.description}</p>
                                                                <button class="toggleButton text-blue-500"><i class="fa-solid fa-angle-down"></i></button>
                                                            </div>
                                                            <div class="button flex gap-5 mt-5">${applyButton}
                                                                <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="{{ url('/viewPrivateJobForm/${job.id}') }}"><img src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                `);
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(
                                                'Error checking application status:',
                                                error);
                                        }
                                    });
                                }
                            });
                        $(".share-btn").on("click", function() {
                            let shareUrl = $(this).data("share-url");
                            if (navigator.share) {
                                navigator.share({
                                    title: 'Job Opportunity',
                                    url: shareUrl,
                                }).then(() => {
                                    console.log('Thanks for sharing!');
                                }).catch(console.error);
                            } else {
                                // Fallback for browsers that do not support the Web Share API
                                prompt("Copy this link to share:", shareUrl);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
        };

        // Toggle button functionality
        $(document).on('click', '.toggleButton', function() {
            const description = $(this).siblings('.description');
            if (description.hasClass('line-clamp-2')) {
                description.removeClass('line-clamp-2');
                $(this).html('<i class="fa-solid fa-angle-up"></i>');
            } else {
                description.addClass('line-clamp-2');
                $(this).html('<i class="fa-solid fa-angle-down"></i>');
            }
        });

        callingSarkariJobs();


        $('#searchNameRole, #searchCityState').on('keyup', function() {
            let searchNameRole = $('#searchNameRole').val();
            let searchCityState = $('#searchCityState').val();
            callingSarkariJobs(searchNameRole, searchCityState);
        });

        // Search by role or name
        $('#searchNameRole').on('keyup', function() {
            let searchNameRole = $(this).val().toLowerCase();
            let searchCityState = $('#searchCityState').val().toLowerCase();
            callingSarkariJobs(searchNameRole, searchCityState);
        });

        // Search by city or state
        $('#searchCityState').on('keyup', function() {
            let searchNameRole = $('#searchNameRole').val().toLowerCase();
            let searchCityState = $(this).val().toLowerCase();
            callingSarkariJobs(searchNameRole, searchCityState);
        });
        });
    </script>
@endsection
