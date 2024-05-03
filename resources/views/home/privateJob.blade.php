@extends('home.homebase')
@section('content')

<div class="flex">

    <div class="container  p-6 bg-gray-100 rounded-lg w-3/4 ">
        <div class="heading mb-6">
            <h2 class="text-2xl font-semibold">Private Jobs</h2>
            <p class="text-sm text-red-500 mt-4 font-medium">To avoid last minute rush, you are advised to submit your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="card">
            <a href="#"
                class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
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
                        <div class="flex gap-10 mt-2">
                            <h5><Strong>Opening Date :</Strong> 15/04/2024</h5>
                            <h5><Strong>Closing Date :</Strong> 14/05/2024</h5>
                        </div>
                        <div class="mt-1">
                            <h5><Strong>No. Of Post : </Strong> 50</h5>
                        </div>
                        <div class="mt-1">
                            <h5><Strong>Min Age : </Strong> 20</h5>
                        </div>
                        <div class="mt-1">
                            <h5><Strong>Skills req : </Strong> Good Communication Skills</h5>
                        </div>
                        <div class="mt-1">
                            <h5><Strong>Qualification : </Strong> Graduate in any field</h5>
                        </div>
                    </div>
                </div>
                <div class="button flex justify-end">
                    <button class="bg-green-600 rounded text-white px-1 py-1">Apply Now</button>
                </div>
            </a>
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
        <div class=" mt-5 w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
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
    
@endsection
