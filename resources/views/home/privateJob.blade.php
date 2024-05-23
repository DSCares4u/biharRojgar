@extends('home.homebase')
@section('content')
    <div class="container p-2 bg-gray-100 rounded-lg ">
        <div class="heading mb-6">
            <h2 class="text-2xl font-semibold">Private Job</h2>
            <p class="text-sm text-red-500 mt-4 font-medium">To avoid last minute rush, you are advised to submit your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="flex mx-10">
            <div class=" w-3/4 " id="callingHire">
                <div class="card w-3/4 mb-4">
                    <a href="/get-job/t&c"
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
                                class=" rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"><img
                                    src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/4 fixed right-5 top-5 mt-32">
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
            // Function to fetch and display appointment
            let callingHire = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('hire.index') }}",
                    success: function(response) {
                        let table = $("#callingHire");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((item) => {
                            let rolesData = JSON.parse(item.roles.replace(/\\/g, ""));
                            let rolesData2 = JSON.parse(item.roles);
                            console.log(rolesData);

                            let profile = rolesData[0]['profile'];
                            console.log(profile);

                            table.append(`
                            <div class="card w-3/4 mb-4">
                                <div 
                                    class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <div class="upper flex gap-5">
                                        <div class="logo mt-2">
                                            <img src="/image/company/logo/${item.logo}" class="rounded-sm" width="50px" alt="">
                                        </div>
                                        <div class="name">
                                            <h5 class="font-semibold text-black">${item.company_name}</h5>
                                            <p class="text-gray-500 text-sm">Bajaj Allianz Life Insurance Company Limited</p>
                                        </div>
                                        <p class="text-gray-600 text-sm ml-8"><strong class="text-red-600">Last Date : </strong> 04/05/2024
                                        </p>

                                    </div>
                                    <div class="body mt-4">
                                        <h5 class="flex gap-2 text-gray-500"><img src="/icons/home.png" class="w-5 h-5" alt="">Work
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
                                    <hr class="bg-gray-500">
                                    <div class="footer flex gap-6 font-medium mt-5 text-gray-500 text-sm">
                                        <p>Part Time</p>
                                        <p>Full Time</p>
                                        <p>Freshers Only</p>
                                        <p>No English Required</p>
                                    </div>
                                    <div class="button flex gap-5 mt-5">
                                        <a href="/private-job/${item.id}/confirm" class="bg-green-600 rounded hover:bg-green-700 text-center text-white py-1 w-1/2">Apply For Job </a>
                                        <button
                                            class=" rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"><img
                                                src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                                    </div>
                                </div>
                            </div>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingHire();
        });
    </script>
@endsection
