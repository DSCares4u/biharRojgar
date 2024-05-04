@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans">
        <div class="bg-gray-100 w-1/2 mx-auto border border-gray mt-10">
            <form id="applyForm" class="p-4 flex flex-col">
                <div class="flex py-1 px-1 justify-between">
                    <div class="w-5/12">
                        <h2 class="text-center text-3xl font-semibold uppercase">Enquire Now</h2>
                        <p class="text-gray-400 mt-5 text-xs">Vesta Elder Care services embodies integrity, professionalism and care
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
                                placeholder="Name">
                        </div>
                        <div class="mb-2">
                            <input type="tel" id="mobile" name="mobile"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Phone">
                        </div>
                        <div class=" mb-2">
                            <input type="email" id="email" name="email"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <select name="service_id" id="callingServices"
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
@endsection
