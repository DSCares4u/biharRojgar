@extends('home.homebase')
@section('title', 'Hire')
@section('content')

    <style>
        /* Remove spin buttons for number inputs */
        input[type="number"].no-spin::-webkit-inner-spin-button,
        input[type="number"].no-spin::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"].no-spin {
            -moz-appearance: textfield;
            /* Firefox */
        }
    </style>

    <div class="container font-sans flex flex-col md:flex-col mb-10">
        <div class="bg-white lg:mx-8 border border-gray md:mt-3 w-full md:8/12 lg:w-9/12">
            <form class="md:p-5 p-2 flex flex-col" id="addHirer">
                <h2 class="text-lg font-semibold mb-2">Post a job</h2>
                <div class="flex flex-col border rounded border-gray-300 p-2">
                    <div class="overflow-x-auto font-normal">
                        <table class="table-auto border-collapse w-full" id="table">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-1 text-sm font-normal">Job Title</th>
                                    <th class="px-4 py-1 text-sm font-normal">Job Profile</th>
                                    <th class="px-4 py-1 text-sm font-normal">No. of Post</th>
                                    <th class="px-2 py-1 text-sm font-normal">Experience</th>
                                    <th class="px-4 py-1 text-sm font-normal">Gender</th>
                                    <th class="px-4 py-1 text-sm font-normal">Preferred Language</th>
                                    {{-- <th class="px-4 py-1 text-sm font-normal">Type</th> --}}
                                    <th class="px-4 py-1 text-sm font-normal">Qualification</th>
                                    <th class="px-4 py-1 text-sm font-normal">Salary</th>
                                    {{-- <th class="px-4 py-1 text-sm font-normal">Add / Remove JOBS</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1"><input type="text" name="inputs[0][title]" placeholder="Job Title"
                                            class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1"><input type="text" name="inputs[0][profile]"
                                            placeholder="Job Name" class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1"><input type="number" min="1" name="inputs[0][no_of_post]"
                                            placeholder="Number" class="appearance border py-2 px-2 w-full text-xs"></td>
                                    {{-- <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400 md:items-center md:justify-center md:flex md:flex-row flex-row ">
                                           <span>Min:</span><input type="text" min="0" name="inputs[0][min_experience]"
                                                placeholder="0"
                                                class="appearance border text-black md:px-1 ml-1 md:py-2 w-1/4 text-xs">
                                            <span>Max: </span><input type="text" min="0" name="inputs[0][max_experience]"
                                                placeholder="5y"
                                                class="appearance text-black md:px-1 border md:py-2 w-1/4 text-xs">
                                        </div>
                                    </td> --}}
                                    <td class="py-1 text-center">
                                        <div
                                            class="text-xs text-gray-400 gap-1 flex flex-col md:flex-row md:items-center md:justify-center">
                                            <div
                                                class="flex flex-row border items-center justify-between w-full md:w-auto group ">
                                                <span class="pl-2">Min:</span>
                                                <input type="number" min="0" name="inputs[0][min_experience]"
                                                    placeholder="0"
                                                    class="focus:outline-none appearance-none text-black px-1 py-2 w-1/2 text-xs no-spin" />
                                            </div>
                                            <div
                                                class="text-xs text-gray-400 flex flex-col md:flex-row md:items-center md:justify-center">
                                                <div
                                                    class="flex flex-row border items-center justify-between w-full md:w-auto group ">
                                                    <span class="pl-2">Max:</span>
                                                    <input type="number" min="0" name="inputs[0][max_experience]"
                                                        placeholder="0"
                                                        class="focus:outline-none appearance-none text-black px-1 py-2 w-1/2 text-xs no-spin" />
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-1 text-xs">
                                        <select name="inputs[0][gender]"
                                            class="border text-center py-2 mx-auto w-full text-sm text-gray-400"
                                            id="gender">
                                            <option value="" class="">Select</option>
                                            <option value="male" class="">Male</option>
                                            <option value="female" class="">Female</option>
                                            <option value="male & female" class="">Male & Female
                                            </option>
                                            <option value="others" class="">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[0][preferred_lang]"
                                            class="border text-center py-2  w-full mx-auto text-sm text-gray-400"
                                            id="preferred_lang">
                                            <option value="" class="">Select</option>
                                            <option value="english" class="">English</option>
                                            <option value="hindi" class="">Hindi</option>
                                            <option value="hindi english" class="">Hindi + English
                                            </option>
                                        </select>
                                    </td>
                                    {{-- <td class="py-1">
                                        <select name="inputs[0][type]"
                                            class="border text-center py-2 px-2 w-full text-sm text-gray-400"
                                            id="type">
                                            <option value="" class="border text-center w-full">Select</option>
                                            <option value="full-time" class="border w-full text-sm">Full-Time</option>
                                            <option value="part-time" class="border w-full text-sm">Part-Time</option>
                                            <option value="temporary" class="border w-full text-sm">Temporary</option>
                                            <option value="work from Home" class="border w-full text-sm">Work From Home
                                            </option>
                                        </select>
                                    </td> --}}
                                    <td class="py-1">
                                        <select name="inputs[0][qualification]"
                                            class="border text-center mx-auto py-2  w-full text-sm text-gray-400"
                                            id="qualification">
                                            <option value="" class="">Select</option>
                                            <option value="masters" class="">Masters</option>
                                            <option value="graduate" class="">Graduate</option>
                                            <option value="12th Pass" class="">12th Pass</option>
                                            <option value="10th Pass" class="">10th Pass</option>
                                            <option value="below 10th" class="">Below 10th</option>
                                            <option value="others" class="">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400 flex gap-1">
                                            <input type="number" name="inputs[0][min_salary]" placeholder="From"
                                                class="border no-spin py-2 px-2 w-1/2 text-black text-sm">
                                            <input type="number" name="inputs[0][max_salary]" placeholder="To"
                                                class="py-2 no-spin px-2 text-black border w-1/2 text-sm">
                                        </div>
                                    </td>
                                    {{-- <td class="py-2 flex justify-center mt-4 md:mt-0">
                                        <button type="button" name="add"
                                            class="add bg-green-500 px-3 py-1 rounded text-white"><i
                                                class="fa-solid fa-user-plus"></i></button>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p id="error-roles" class="text-red-500 text-xs mb-4 font-semibold error-message"></p>
                <div class="mb-4 flex flex-col gap-2">
                    <label class="block text-sm font-normal text-gray-700">
                        Job Type <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-10 text-sm">
                        <!-- Full Time Jobs -->
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="inputs[0][type]" value="Full time"
                                class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" /> <span
                                class="text-gray-700 font-normal">Full Time Jobs</span>
                        </label>

                        <!-- Part Time Jobs -->
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="inputs[0][type]" value="Part time"
                                class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" /> <span
                                class="text-gray-700 font-normal">Part Time Jobs</span>
                        </label>

                        <label class="flex items-center space-x-2">
                            <input type="radio" name="inputs[0][type]" value="Temporary"
                                class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" /> <span
                                class="text-gray-700 font-normal">Temporary Job</span>
                        </label>

                        <!-- Work From Home -->
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="inputs[0][type]" value="Work from home"
                                class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" /> <span
                                class="text-gray-700 font-normal">Work From Home</span>
                        </label>

                        <!-- Internships -->
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="inputs[0][type]" value="Internships"
                                class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" /> <span
                                class="text-gray-700 font-normal">Internships</span>
                        </label>

                    </div>
                </div>

                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2 font-normal">
                        <label for="city" class="block text-gray-700 text-sm mb-2 font-normal">City <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="city" name="city"
                            class="shadow appearance-none border py-1 px-2 w-full font-light"placeholder="Purnea" required>
                        <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-3  items-center w-1/2 font-normal">
                        <label for="state"
                            class="block text-gray-700 text-sm appearance-none mb-2  px-2 w-full font-normal">State <span
                                class="text-red-500">*</span></label>
                        <select id="state" name="state"
                            class="shadow appearance-none border py-1 px-2 w-full font-light">
                            <option value="">Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman
                                and Diu</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        </select>
                        <p id="error-state" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                </div>
                <div class="mb-3  items-center font-normal">
                    <label for="description" class="block text-gray-700 text-sm mb-2 ">Job Description <span
                            class="text-red-500">*</span></label>
                    <textarea name="description" id="description" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                        class="shadow appearance-none border py-1 px-2 w-full font-light"></textarea>
                    <p id="error-description" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div class="mb-3 flex items-center">
                    <h3 class=" font-semibold">Recruiter details</h3>
                </div>
                <div class="mb-3 flex gap-2 font-normal">
                    <div class="mb-3 items-center w-1/2">
                        <label for="company_name" class="block text-gray-700 text-sm mb-2 ">Hiring for (Company
                            name) <span class="text-red-500">*</span></label>
                        <input type="text" id="company_name" name="company_name"
                            class="shadow appearance-none border py-1 px-2 w-full font-light"placeholder="Abc Pvt. Ltd."
                            required>
                        <p id="error-company_name" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="website" class="block text-gray-700 text-sm mb-2 ">Company's Website (if any)</label>
                        <input type="url" id="website" name="website"
                            class="shadow appearance-none border py-1 px-2 w-full font-light"placeholder="abc.com"
                            required>
                        <p id="error-website" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                </div>
                <div class="mb-3 flex gap-2 font-normal">
                    <div class="mb-3  items-center w-1/2">
                        <label for="mobile" class="block text-gray-700 text-sm mb-2 ">Phone <span
                                class="text-red-500">*</span></label>
                        <input type="tel" id="mobile" name="mobile"
                            class="shadow appearance-none border py-1 px-2 w-full font-light"placeholder="9876543210"
                            required>
                        <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="alt_mobile" class="block text-gray-700 text-sm mb-2 ">Alternate Phone</label>
                        <input type="tel" id="alt_mobile" name="alt_mobile"
                            class="shadow appearance-none border py-1 px-2 w-full font-light"placeholder="9876543210"
                            required>
                        <p id="error-alt_mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                </div>
                <div class="flex gap-2 items-center font-normal">
                    <div class="mb-3  items-center w-1/2">
                        <label for="email" class="block text-gray-700 text-sm mb-2 ">Email <span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border py-1 px-2 w-full font-light" placeholder="roni@gmail.com"
                            required>
                        <p id="error-email" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-3 items-center w-1/2">
                        <label for="logo" class="block text-gray-700 text-sm mb-2 ">Company's Logo / Image</label>
                        <input type="file" id="logo" name="logo" class="py-1 px-2 w-full" required>
                        <p id="error-logo" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                </div>
                <div class="mb-4 flex gap-2 md:mt-8" id="plan_card">
                    <label
                        class="md:w-[25%] md:h-[350px] w-[200px] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
                        data-plan="free">
                        <input type="radio" name="address_id" value="1" class="hidden" />
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Free</h3>
                            <h3 class="text-lg font-semibold">Rs. 0</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="text-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2">
                                <img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="" />Limited
                                applications
                            </li>
                        </ul>
                    </label>
                </div>
                <input type="hidden" name="payment_mode" id="paymentMode" value="">
                <div class="flex justify-center gap-5">
                    <div id="payBtn1" class="mb-3 flex justify-center">
                        <button type="button" id="payNowBtn"
                            class="bg-yellow-400 px-4 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black">
                            Post Job
                        </button>
                    </div>
                    <div id="payLater" class="mb-3 flex justify-center">
                        <a href="#" id="payLaterBtn"
                            class="bg-green-400 px-4 hover:bg-green-500 float-left font-semibold py-3 rounded focus:outline-none focus:shadow-outline text-black">
                            Pay Later
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="md:w-3/12 md:fixed md:right-3 ">
            <div
                class=" md:mt-10 mb-10 md:w-[100%] w-full bg-white border p-3 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                <div class="price mt-2 mb-4">
                    <h3 class="text-lg font-semibold">Job Posting Service</h3>
                </div>
                <ul id="planCharge">
                    <li class="flex justify-between text-base text-gray-500 font-medium">
                        <p>Free Localities</p>
                        <p class="font-medium">Rs. 500</p>
                    </li>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Gold Job</p>
                        <p class="font-medium">Rs. 500</p>
                    </li>
                    <hr>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Total Payment</p>
                        <p class="font-medium">Rs. 1000</p>
                    </li>
                </ul>
                <div id="payBtn2" class=" flex justify-center items-center">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
                        Post Job
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Hidden by Default) -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-6 w-96 shadow-lg">
            <div class="flex justify-between">
                <h2 id="modalTitle" class="text-xl font-normal mb-4">Plan Features</h2>
                <h2 id="modalPrice" class="text-xl font-normal mb-4">Plan Price</h2>
            </div>
            <p class="text-gray-700">This plan includes the following features:</p>
            <ul id="modalFeatures" class="list-disc list-inside text-gray-600 mt-2">
                <!-- Features will be added dynamically here -->
            </ul>
            <div class="flex justify-end mt-4">
                <button id="closeModal" class="bg-red-500 text-white px-4 py-2 rounded-lg">Close</button>
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function() {
            var i = 0;

            // Add new row
            $('#table').on('click', '.add', function() {
                ++i;
                $('#table tbody').append(
                    `<tr data-index="${i}">
                            <td class="py-1"><input type="text" name="inputs[${i}][title]" placeholder="Job Title"
                                class="border py-2 px-2 w-full text-xs"></td>
                            <td class="py-1"><input type="text" name="inputs[${i}][profile]" placeholder="Job Name"
                                class="border py-2 px-2 w-full text-xs"></td>
                            <td class="py-1"><input type="number" min="1" name="inputs[${i}][no_of_post]"
                                placeholder="Number" class="border py-2 px-2 w-full text-xs">
                            </td>
                             <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400 flex flex-col md:flex-row md:items-center md:justify-center">
                                            <div class="flex flex-row items-center justify-between w-full md:w-auto">
                                                <span>Min:</span>
                                                <input type="text" min="0" name="inputs[${i}][min_experience]" placeholder="0"
                                                    class="appearance-none border text-black px-1 py-2 w-1/2 text-xs ml-1">
                                            </div>
                                            <div class="flex flex-row items-center justify-between w-full md:w-auto mt-1 md:mt-0 md:ml-2">
                                                <span>Max:</span>
                                                <input type="text" min="0" name="inputs[${i}][max_experience]" placeholder="5y"
                                                    class="appearance-none border text-black px-1 py-2 w-1/2 text-xs ml-1">
                                            </div>
                                        </div>
                                    </td>
                            <td class="py-1 text-xs">
                                        <select name="inputs[${i}][gender]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="gender">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="male & female" class="border w-full text-sm">Male & Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[${i}][preferred_lang]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="preferred_lang">
                                            <option value="">Select</option>
                                            <option value="english">English</option>
                                            <option value="hindi">Hindi</option>
                                            <option value="hindi & english" class="border w-full text-sm ">Hindi + English</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[${i}][type]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="type">
                                            <option value="">Select</option>
                                            <option value="full-time">Full-Time</option>
                                            <option value="part-time">Part-Time</option>
                                            <option value="temporary">Temporary</option>
                                            <option value="work from ome" class="border w-full text-sm">Work From Home</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[${i}][qualification]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="qualification">
                                            <option value="">Select</option>
                                            <option value="no education required" class="border w-full text-sm">No Education Required</option>
                                            <option value="masters">Masters</option>
                                            <option value="graduate">Graduate</option>
                                            <option value="12th Pass">12th Pass</option>
                                            <option value="10th Pass">10th Pass</option>
                                            <option value="below 10th">Below 10th</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </td>
                            <td class="py-1 text-center">
                                <div class="text-xs text-gray-400 flex gap-1">
                                    <input type="text" name="inputs[${i}][min_salary]" placeholder="From" class="border py-2 px-2 w-1/2 text-black text-sm">
                                    <input type="text" name="inputs[${i}][max_salary]" placeholder="To" class="py-2 px-2 text-black border w-1/2 text-sm">
                                </div>
                            </td>
                            <td class="py-2 flex justify-center mt-4 md:mt-0">
                                <button type="button" name="add" class="remove bg-red-500 px-3 py-1 rounded text-white"><i class="fa-solid fa-user-minus"></i></button>
                            </td>
                        </tr>`
                );
            });

            // Remove row and corresponding title
            $('#table').on('click', '.remove', function() {
                var index = $(this).closest('tr').data('index');
                $(this).closest('tr').remove();
                $('#title_input .title-wrapper[data-index="' + index + '"]').remove();
            });


            // Handle form submission
            $("#payNowBtn").click(function() {
                $("#paymentMode").val("pay_now");
                $("#addHirer").submit();
            });

            $("#payLaterBtn").click(function(e) {
                e.preventDefault();
                $("#paymentMode").val("pay_later");
                $("#addHirer").submit();
            });

            $("#addHirer").submit(function(e) {
                e.preventDefault();

                if (!$("#paymentMode").val()) {
                    console.log("Payment mode is not set.");
                    return;
                }

                var formData = new FormData(this);

                // Get the current date and format it as needed
                var currentDate = new Date();
                var formattedDate = ('0' + currentDate.getDate()).slice(-2) + '-' + ('0' + (currentDate
                    .getMonth() + 1)).slice(-2) + '-' + currentDate.getFullYear();

                // Append the date to the FormData object
                formData.append('date_of_start', formattedDate);

                $.ajax({
                    type: "POST",
                    url: "{{ route('hire.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        // swal("Success", response.message, "success");
                        $("#addHirer").trigger("reset");
                        window.open("{{ url('/home-hirer') }}", "_self");
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
            // plan card calling work

            $.ajax({
                type: "GET",
                url: "{{ route('home.hire.plan.index') }}",
                success: function(response) {
                    let select = $("#plan_card");
                    select.empty();

                    response.data.forEach((plan, index) => {
                        // Remove square brackets and double quotes from the features string
                        let cleanedFeatures = plan.features.replace(/[\[\]"]/g, '');

                        // Split the features by comma and remove the first and last element
                        let featuresArray = cleanedFeatures.split(',');

                        // Map each feature to an HTML list item and join them into a single string
                        let features = featuresArray.map(feature =>
                            `<li class="flex font-light text-[12px] mt-2overflow-y-hidden"><img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="">${feature}</li>`
                        ).join('');

                        let Line = '';
                        let Background = '';

                        if (plan.price == '0') {
                            Line = `<div class="line bg-green-500 mt-10">
                                        <hr class="h-2">
                                    </div>`;
                            Background = `bg-white hover:bg-green-200`;
                        } else if (plan.price == '266') {
                            Line = `<div class="line bg-orange-500 mt-10">
                                        <hr class="h-2">
                                    </div>`;
                            Background = `bg-white hover:bg-orange-200`;
                        } else {
                            Line = `<div class="line bg-blue-500 mt-10">
                                        <hr class="h-2">
                                    </div>`;
                            Background = `bg-white hover:bg-blue-100`;
                        }

                        select.append(`
                                <label class="md:w-[25%] ${Background}  md:h-[350px] w-[200px] h-[300px]  border border-[#006266] p-2 rounded shadow cursor-pointer">
                                    <input type="radio" name="plan_id" value="${plan.id}" data-plan-name="${plan.name}" data-plan-charge="${plan.price}" class="hidden" />
                                    <div class="price flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-medium">${plan.name}</h3>
                                            <h3 class="text-sm font-light" >Most Popular</h3>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-medium">₹ ${plan.price}</h3>
                                            <h3 class="text-sm font-light">Unlimited</h3>
                                            </div>
                                    </div>
                                     <button type='button' class='openModal text-xs text-blue-400 hover:text-blue-600' 
                                        data-features="${cleanedFeatures}" 
                                        data-name="${plan.name}"
                                        data-price="${plan.price}">
                                        See Preview
                                    </button>
                                    ${Line}
                                    <ul class="mt-3 ">
                                        <li class="text-gray-600 text-[13px]">Features : </li>
                                        ${features}
                                    </ul>
                                </label>
                            `);
                    });

                    // Add click event listener to the dynamically added labels
                    document.querySelectorAll('#plan_card label').forEach(label => {
                        label.addEventListener('click', () => {
                            document.querySelectorAll('#plan_card label').forEach(l => l
                                .classList.remove('border-orange-500',
                                    'bg-teal-100'));
                            label.classList.add('border-orange-500');
                            label.classList.add('bg-teal-100');
                            label.querySelector('input[type="radio"]').checked = true;
                            updatePlanDetails(label);
                        });
                    });
                }
            });

            function updatePlanDetails(label) {
                let selectedPlan = label.querySelector('input[type="radio"]');
                let PlanFee = parseInt(selectedPlan.dataset.planCharge);
                let PlanName = selectedPlan.dataset.planName;
                let Platform = '';
                if (PlanFee == '0') {
                    Platform = 0;
                } else {
                    Platform = 200;
                }

                // Update the fee display
                $('#planCharge').html(`
                        <li class="flex justify-between text-base text-gray-500 font-medium">
                            <p>${PlanName}</p>
                            <p class="font-medium">Rs. ${PlanFee}</p>
                        </li>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Platform Fees</p>
                            <p class="font-medium">Rs. ${Platform}</p>
                        </li>
                        <hr>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Total Payment</p>
                            <p class="font-medium">Rs. ${PlanFee + Platform}</p>
                        </li>
                    `);

                //         $('#payBtn1').html(`
            //     <button type="button" id="payNowBtn"
            //     class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 px-4 py-2 border border-yellow-500 w-full">
            //         Pay Rs. ${PlanFee + Platform} & Post Job
            //     </button>
            // `);

                $('#payBtn2').html(`
                        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
                            Pay Rs. ${PlanFee + Platform} & Post Job
                        </button>
                    `);

                //         $('#payLater').html(`
            //     <a href="#" id="payLaterBtn"
            //         class="bg-green-400 hover:bg-green-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline px-4 text-black mt-3 py-2 border border-yellow-500 w-full">
            //     Pay Later ${PlanFee + Platform}
            //     </a>
            // `);
            }

            document.addEventListener("click", function(event) {
                if (event.target.classList.contains("openModal")) {
                    // Get plan name & features from button data attributes
                    const planName = event.target.getAttribute("data-name");
                    const planPrice = event.target.getAttribute("data-price");
                    const features = event.target.getAttribute("data-features").split(",");

                    // Set modal title
                    document.getElementById("modalTitle").innerText = planName;
                    document.getElementById("modalPrice").innerText = `₹${planPrice}`;
                    // Generate features list dynamically
                    const featureList = document.getElementById("modalFeatures");
                    featureList.innerHTML = ""; // Clear old content
                    features.forEach(feature => {
                        featureList.innerHTML += `<li class="text-gray-600 text-sm flex items-center">
                            <img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="">${feature}
                        </li>`;
                                });

                    // Show the modal
                    document.getElementById("modal").classList.remove("hidden");
                }
            });

            // Close modal when clicking the close button
            document.getElementById("closeModal").addEventListener("click", function() {
                document.getElementById("modal").classList.add("hidden");
            });

            // Close modal when clicking outside the modal
            window.addEventListener("click", function(event) {
                const modal = document.getElementById("modal");
                if (event.target === modal) {
                    modal.classList.add("hidden");
                }
            });

        });
    </script>


@endsection
