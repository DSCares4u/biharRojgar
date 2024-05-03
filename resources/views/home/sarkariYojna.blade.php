@extends('home.homebase')
@section('content')
    <div class="container p-2 bg-gray-100 rounded-lg ">
        <div class="heading mb-6">
            <h2 class="text-2xl font-semibold">Sarkari Yojna</h2>
            <p class="text-sm text-red-500 mt-4 font-medium">To avoid last minute rush, you are advised to submit your online
                application much before the last date. RRBs shall not be responsible if applicants are not able to submit
                their online application including payment of fee within the last date for any reason whatsoever.</p>
        </div>
        <div class="flex gap-2">
            <div class="card w-1/2 mb-4">
                <a href="#"
                    class="block max-w-full p-4 bg-white border border-purple-300 rounded-lg  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="upper flex gap-5">
                        <div class="logo mt-2">
                            <img src="/sarkari/private.png" class="rounded w-18" alt="">
                        </div>
                        <div class="name">
                            <h5 class="font-semibold text-black">Insurance Sales Executive</h5>
                            <p class="text-gray-500 text-sm">Bajaj Allianz Life Insurance Company Limited</p>
                        </div>
                        <p class="text-red-600 ml-8"><strong>Last Date : </strong> 04/05/2024</p>

                    </div>
                    <div class="body mt-4">
                        <h5 class="flex gap-2 text-gray-500"><img src="/icons/home.png" class="w-5 h-5" alt="">Work
                            From Home</h5>
                        <h5 class="flex gap-5 text-gray-500 text-sm mt-2">
                            <p>Rs. 15000</p> -<p>Rs. 25000</p>monthly*
                        </h5>
                    </div>
                    <div class="main flex justify-evenly text-gray-500 mt-6">
                        <div class="mb-3">
                            <h5 class="text-sm font-normal">Fixed</h5>
                            <h5 class="flex gap-1 font-semibold text-gray-500 text-sm mt-2">
                                <p>Rs. 15000</p> -<p>Rs. 25000</p>
                            </h5>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-sm font-normal">Average Incentives*</h5>
                            <h5 class="flex gap-1 font-semibold text-gray-500 text-sm mt-2">Rs. 25000</h5>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-sm font-normal">Earning Potential</h5>
                            <h5 class="flex gap-1 font-semibold text-gray-500 text-sm mt-2">Rs. 40000</h5>
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
                        <button class=" rounded text-green-700 border border-green-700 text-center px-auto flex justify-center py-1 w-1/2"><img
                                src="/icons/share.png" class="h-6 mr-1" alt="">Share</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
