@extends('home.homebase')
@section('content')

<div class="flex">

    <div class="container  p-6 bg-gray-100 rounded-lg w-3/4 ">
        <div class="heading mb-6">
            <h2 class="text-2xl font-semibold">Sarkari Jobs</h2>
            <p class="text-sm text-red-500 mt-4 font-medium">To avoid last minute rush, you are advised to submit your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="card" id="callingData">
            {{-- <a href="/get-job"
                class="block max-w-full mt-4 p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-xl py-2 px-3 leading-5 bg-purple-400 font-bold rounded-full text-white dark:text-white">
                    CENTRALISED EMPLOYMENT NOTICE (CEN) No.RPF 01/2024 Sub-Inspector (Executive)</h5>
                <div class="details flex mt-4">
                    <div class="logo w-2/12">
                        <img src="/sarkari/rrb.png" class="rounded-full w-20" alt="">
                    </div>
                    <div class="w-10/12 mb-1">
                        <div class="flex justify-between text-blue-500 font-bold">
                            <h5>CEN No. RPF 01/2024</h5>
                            <h5>Important Instruction</h5>
                        </div>
                        <div class="mt-1 flex justify-between">
                            <div class="mt">
                                <h5 class="text-sm text-gray-500 font-semibold"> No. Of Post : 50</h5>
                                <div class="mt-1">
                                    <h5 class="text-sm text-gray-500 font-semibold">Age : 20 -45 Years</h5>
                                </div>
                            </div>
                            <div class="">
                                <h5 class="text-gray-500 font-semibold">Opening Date : 15/04/2024</h5>
                                <h5 class="text-gray-500 font-semibold">Closing Date : 14/05/2024</h5>
                            </div>
                        </div>
                        
                        <div class="mt-1">
                            <h5 class="text-sm text-gray-500 font-semibold">Qualification :  Graduate in any field</h5>
                        </div>
                        <div class="mt-1">
                            <h5 class="text-sm text-gray-500 font-semibold">Skills req :  Good Communication Skills</h5>
                        </div>
                        
                      
                    </div>
                </div>
                <div class="flex justify-between ml-1">
                    <div class="fees mt-2 ml-36 flex">
                        <h5 class=" font-semibold text-red-700 w-32 rounded text-base">Fees : Rs. 1000</h5>
                        <p class="text-[12px]">(Including gov. fees)</p>
                    </div>
                    <div class="button">
                        <button class="bg-green-600 rounded text-white px-1 py-1">Apply Now</button>
                    </div>
                </div>
                
                
            </a> --}}
        </div>
    </div>
    <div class="w-1/4">
        <div class=" mt-10 w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
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
        <div class=" mt-5 w-[85%] bg-white border p-3 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
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

    <script>
        $(document).ready(function() {
           // Function to fetch and display appointment
           let callingSarkariJobs = () => {
                $.ajax({
                   type: "GET",
                   url: "{{ route('sarkari-job.index') }}",
                   success: function(response) {
                       let table = $("#callingData");
                       table.empty();
                       let data = response.data;

                       console.log(data);

                       data.forEach((data) => {
                           table.append(`
                           <div class="block max-w-full mt-4 p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-xl py-2 px-3 leading-5 bg-purple-400 font-bold rounded-full text-white dark:text-white">${data.name}</h5>
                                <div class="details flex mt-4">
                                    <div class="logo w-2/12">
                                        <img src="/image/sarkari/logo/${data.logo}" class="rounded-full w-20" alt="">
                                    </div>
                                    <div class="w-10/12 mb-1">
                                        <div class="flex justify-between text-blue-500 font-bold">
                                            <h5>CEN No. RPF 01/2024</h5>
                                            <h5>Important Instruction</h5>
                                        </div>
                                        <div class="mt-1 flex justify-between">
                                            <div class="mt">
                                                <h5 class="text-sm text-gray-500 font-semibold"> No. Of Post : ${data.no_of_post}</h5>
                                                <div class="mt-1">
                                                    <h5 class="text-sm text-gray-500 font-semibold">Age : ${data.min_age} - ${data.max_age} Years</h5>
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="text-gray-500 font-semibold">Opening Date : ${data.opening_date}</h5>
                                                <h5 class="text-gray-500 font-semibold">Closing Date : ${data.closing_date}</h5>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-1">
                                            <h5 class="text-sm text-gray-500 font-semibold">Qualification : ${data.qualification}</h5>
                                        </div>
                                        <div class="mt-1">
                                            <h5 class="text-sm text-gray-500 font-semibold">Skills req : ${data.skills}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between ml-1">
                                    <div class="fees mt-2 ml-36 flex">
                                        <h5 class=" font-semibold text-red-700 w-32 rounded text-base">Fees : Rs. ${data.fees}</h5>
                                        <p class="text-[12px]">(Including gov. fees)</p>
                                    </div>
                                    <div class="button">
                                        <a href="/viewJobForm">
                                            <button class="bg-green-600 hover:bg-green-700 rounded text-white px-1 py-1">Apply Now</button>
                                        </a>
                                        
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
           callingSarkariJobs();
        });
    </script>
    {{-- <a href="/sarkari-job/${data.id}/confirm">
        <button class="bg-green-600 hover:bg-green-700 rounded text-white px-1 py-1">Apply Now</button>
    </a> --}}
@endsection
