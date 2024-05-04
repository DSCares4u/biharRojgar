@extends('home.homebase')
@section('content')
    {{-- <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg">
        <div class="heading text-center mb-6">
            <h2 class="text-2xl font-semibold">Bihar Sarkari Jobs</h2>
        </div>
        <div class="main flex flex-wrap">
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms w-3/12 mt-4 mb-4">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-blue-600 rounded-full h-12 w-12" width="50" alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-lg font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-base">Land Parcel Map</h3>
                </div>
            </a>

        </div>
    </div> --}}

    <button id="openFormBtn" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Open
        Form</button>
    <div class="container mx-auto p-6 rounded-lg">
        <div class="heading text-center mb-6 flex justify-center">
            <h2 class="text-xl rounded-full px-4 py-1 font-bold bg-green-600 text-white">Registration & Tax Filling Services
            </h2>
        </div>
        <div class="main flex flex-wrap gap-4 justify-center">
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-yojna-form" class="forms mt-4 mb-4 bg-green-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>


        </div>
    </div>

    <hr class="bg-gray-300 h-1 rounded-xl">

    <div class="container mx-auto p-6 rounded-lg">
        <div class="heading text-center mb-6 flex justify-center">
            <h2 class="text-xl rounded-full px-4 py-1 font-bold bg-orange-500 text-white">Travel Services</h2>
        </div>
        <div class="main flex flex-wrap gap-4 justify-center">
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/job-app-forms" class="forms mt-4 mb-4 bg-orange-500 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
        </div>
    </div>

    <hr class="bg-gray-300 h-1 rounded-xl">

    <div class="container mx-auto p-6 rounded-lg">
        <div class="heading text-center mb-6 flex justify-center">
            <h2 class="text-xl rounded-full px-4 py-1 font-bold bg-blue-600 text-white">Educational Services</h2>
        </div>
        <div class="main flex flex-wrap gap-4 justify-center">
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>
            <a href="/sarkari-job-form" class="forms mt-4 mb-4 bg-blue-600 text-white py-5 px-2">
                <div class="image flex justify-center mb-2">
                    <img src="/sarkari/court.png" class="border border-solid rounded-full h-16 w-16" width="50"
                        alt="">
                </div>
                <div class="title text-center">
                    <h3 class="text-base font-semibold">व्यवहार न्याय प्रकरण</h3>
                    <h3 class="text-sm">Civil Court Case</h3>
                </div>
            </a>

        </div>
    </div>

    <hr class="bg-gray-300 h-1 rounded-xl">




    <div id="myModal" class="modal  fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-white p-8 rounded shadow-md w-1/2">
            <span id="closeBtn" class="absolute text-3xl text-gray-600 cursor-pointer right-96">&times;</span>
            <!-- Form content as provided -->
            <div class="bg-gray-100  mx-auto border border-gray mt-8">
                <form id="applyForm" class="p-4 flex flex-col">
                    <div class="flex py-1 px-1 justify-between">
                        <div class="w-5/12">
                            <h2 class="text-center text-3xl font-semibold uppercase">Enquire Now</h2>
                            <p class="text-gray-400 mt-5 text-xs">Vesta Elder Care services embodies integrity,
                                professionalism and care
                                provided by highly
                                trained
                                caregivers especially certified to provide empathetic and loving support to its patrons.</p>
                            <div class="phone mt-4 text-xl  flex text-green-500">
                                <p><i class="fa-solid fa-phone"></i> +91-8895456416</p>
                            </div>
                            <div class="phone mt-4 text-xl  text-green-500">
                                <p><i class="fa-regular fa-envelope"></i> info@vestaeldercare.com</p>
                            </div>
                        </div>
                        <div class=" w-6/12 ">
                            <div class="mb-2">
                                <input type="text" id="name" name="name"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                    placeholder="Name" required>
                            </div>
                            <div class="mb-2">
                                <input type="tel" id="mobile" name="mobile"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                    placeholder="Phone" required>
                            </div>
                            <div class=" mb-2">
                                <input type="email" id="email" name="email"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                    placeholder="Email" required>
                            </div>
                            <div class="mb-2">
                                <select name="service_id" id="callingServices"required
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded text-gray-500">
                                    <option value="">Select Service</option>
                                    <option value="">abcd</option>
                                    <option value="">testing</option>
                                </select>
                            </div>
                            <div class="mt-5">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        const modal = document.getElementById("myModal");

        // Get the button that opens the modal
        const btn = document.getElementById("openFormBtn");

        // Get the close button
        const closeBtn = document.getElementById("closeBtn");

        // When the user clicks on the button, open the modal
        btn.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });

        // When the user clicks on the close button, close the modal
        closeBtn.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        // When the user clicks anywhere outside of the modal, close it
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>
@endsection
