@extends('home.homebase')
@section('content')
    <div class="container p-2 bg-gray-100  rounded-lg ">
        <div class="heading mb-6 w-[70%]">
            <h2 class="text-2xl font-semibold">Private Job</h2>
            <p class="text-sm text-red-500 mt-4 font-medium">To avoid last minute rush, you are advised to submit your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="flex mx-10">
            <div class="flex flex-col">
                <div class="flex mb-4 w-1/2">
                    <input type="text" id="searchName" placeholder="Search by Name" class="border p-2 w-1/2 mr-2 rounded-lg">
                    <input type="text" id="searchLocation" placeholder="Search by Location" class="border p-2 w-1/2 ml-2 rounded-lg">
                    <button id="searchButton" class="ml-2 bg-blue-500 text-white p-2 rounded-lg">Search</button>
                </div>
                <!-- Results will be displayed here -->
                <div id="searchResults" class="mt-4"></div>
            <div class=" w-3/4 " id="callingHire">
                {{-- <div class="card w-3/4 mb-4">
                    <div
                        class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="upper flex gap-5">
                            <div class="logo mt-2">
                                <img src="/sarkari/private.png" class="rounded w-18" alt="">
                            </div>
                            <div class="name">
                                <h5 class="font-semibold text-black">Insurance Sales Executive</h5>
                                <p class="text-gray-500 text-sm">Bajaj Allianz Life Insurance Company Limited</p>
                            </div>
                            <p class="text-gray-600 text-sm ml-8"><strong class="text-red-600">Last Date : </strong>
                                04/05/2024
                            </p>

                        </div>
                        <div class="body mt-4">
                            <h5 class="flex gap-2 text-gray-500"><img src="/icons/home.png" class="w-5 h-5"
                                    alt="">Work
                                From Home</h5>
                        </div>
                        <div class="main flex justify-start text-gray-500 mt-6">
                            <div class="mb-3">
                                <h5 class="text-sm font-normal">Salary</h5>
                                <h5 class="flex gap-1 font-semibold text-gray-500 text-sm mt-2">
                                    <p>Rs. 15000</p> -<p>Rs. 25000</p>
                                </h5>
                            </div>
                        </div>
                        <div class="main flex justify-start text-gray-500">
                            <div class="mb-3">
                                <h5 class="text-sm font-normal flex gap-2">
                                    <p>Experience :</p>
                                    <p class="font-semibold text-gray-500 text-sm"> 1 - 2 Years </p>
                                </h5>
                            </div>
                        </div>
                        <hr class="bg-gray-500">
                        <div class="footer flex gap-6 font-medium mt-5 text-gray-500 text-sm">
                            <p>Part Time</p>
                            <p>Full Time</p>
                            <p>Freshers Only</p>
                            <p>No English Required</p>
                        </div>
                        <div class="button flex gap-5 mt-5">
                            <button class="bg-green-700 rounded text-white py-1 w-1/2">Apply For Job</button>
                            <button
                                class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"><img
                                    src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                        </div>
                    </div>
                </div> --}}
            </div>
            </div>
            <div class="w-1/4 fixed right-5 top-1 mt-20">
                <div class="w-[100%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="price mt-2 mb-4">
                        <h3 class="text-lg font-semibold">Our Services</h3>
                        <div class="line bg-blue-500">
                            <hr class="h-1">
                        </div>
                        <div class="flex flex-col text-sm mt-3">
                            <a href="" class="mt-3 font-semibold">Manpower Recruitment</a>
                            <a href="" class="mt-3 font-semibold">Placement Recruitment</a>
                            <a href="" class="mt-3 font-semibold">Career Consultant</a>
                            <a href="" class="mt-3 font-semibold">Corporate Training Services</a>
                        </div>
                    </div>
                </div>
                <div class=" mt-5 w-[100%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="price mt-2 mb-4">
                        <h3 class="text-lg font-semibold">Contact Us</h3>
                        <div class="line bg-blue-500">
                            <hr class="h-1">
                        </div>
                        <div class="flex flex-col  mt-3">
                            <h3 href="" class="mt-2 text-sm font-medium">Pensive Supremo Edu Pvt. Ltd.</h3>
                            <hr class="mt-2">
                            <h3 href="" class="mt-2 font-normal text-xs">House No. 59 Ground Floor, Shukriya</h3>
                            <h3 href="" class=" font-normal text-xs">Manzil, , Behind Hotel Crystal Inn,</h3>
                            <h3 href="" class=" font-normal text-xs">Hatigaon, Guwahati, Assam - 781038, India</h3>
                            <hr class="mt-2 mb-2">
                            <h3 class="text-sm"><strong>Mobile : </strong> +91-9365447219, 7578999821</h3>
                            <hr class="mt-2 mb-2">
                            <h3 class="text-sm"><strong>Call Us : </strong> 09365447219</h3>
                            <hr class="mt-2 mb-2">
                            <h3 class="text-sm"><strong>E-mail : </strong> info@pensivesupremoedu.in</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let callingSarkariJobs = () => {
                $.ajax({
                        type: "GET",
                        url: "{{ route('role.index') }}",
                        success: function(response) {
                            let table = $("#callingHire");
                            table.empty();
                            let data = response.data;

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
                                        let logo = job.hire.logo ? ` <img src="/image/company/logo/${job.hire.logo}" class="rounded w-12 h-12" alt="">` : `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                    table.append(`
                                            <div class="card w-3/4 mb-4 capitalize">
                                                <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                    <div class="flex justify-between">
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
                                                        <div>
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
                                                        <a href="/viewPrivateJobForm/${job.id}" class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job</a>
                                                        <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="/viewPrivateJobForm/${job.id}"><img src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                                                    </div>
                                                </div>
                                            </div>
                                        `);
                                    }
                                } else {

                                    // Check if the user has already applied for this job
                                    $.ajax({
                                        type: "GET",
                                        url: `/checkApplicationStatus/${job.id}`, // The endpoint
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
                                                let logo = job.hire.logo ? ` <img src="/image/company/logo/${job.hire.logo}" class="rounded w-12 h-12" alt="">` : `<div class="generated-logo rounded w-12 h-12 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${job.hire.company_name.charAt(0)}</div>`;

                                                table.append(`
                                                    <div class="card w-3/4 mb-4 capitalize">
                                                        <div class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                            <div class="flex justify-between">
                                                                <div class="flex gap-5">
                                                                    <div class="logo">
                                                                        ${logo}
                                                                    </div>
                                                                    <div class="name flex flex-col">
                                                                        <h5 class="font-semibold text-black">${job.title}</h5>
                                                                        <p class="text-gray-500 text-sm capitalize">${job.hire.company_name}</p>
                                                                        <p class="text-gray-500 text-xs capitalize">${job.hire.city},${job.hire.state}</p>
                                                                    </div>
                                                                </div>
                                                                <div>
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
                                                                ${applyButton}
                                                                <button class="share-btn rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2" data-share-url="/viewPrivateJobForm/${job.id}"><img src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
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
        });
    </script>
@endsection
