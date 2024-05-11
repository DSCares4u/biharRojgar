@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans flex">
        <div class="bg-gray-100 mx-12 border border-gray mt-3 w-8/12">
            <form class="p-5 flex flex-col">
                <h2 class="text-lg font-semibold mb-2  ">Post a job</h2>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                    <input type="text" id="name"
                        name="name"placeholder="Eg. Sales executives needed urgently for ..."
                        class="shadow appearance-none border py-1 px-2 w-full" required>
                </div>
                <div class="mb-3 flex items-center border rounded border-gray-300">
                    <table class="table-auto border-collapse " id="table">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-1 text-sm font-normal">Job Profile</th>
                                <th class="px-4 py-1 text-sm font-normal">No.of Post</th>
                                <th class="px-2 py-1 text-sm font-normal">Experience</th>
                                <th class="px-4 py-1 text-sm font-normal">Gender</th>
                                <th class="px-4 py-1 text-sm font-normal">Preferred Language</th>
                                <th class="px-4 py-1 text-sm font-normal">Type</th>
                                <th class="px-4 py-1 text-sm font-normal">Qualification</th>
                                <th class="px-4 py-1 text-sm font-normal">Salary</th>
                                <th class="px-4 py-1 text-sm font-normal">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=" py-1"><input type="text" name="inputs[0]['profile']" placeholder="Job Name"
                                        class="appearance-none border py-2 px-2 w-full text-xs"></td>
                                <td class=" py-1"><input type="" min="1" name="inputs[0]['no_of_post']"
                                        placeholder="Number"
                                        class="appearance-none border py-2 px-2 w-full text-xs">
                                </td>
                                {{-- <td class=" py-1"><input type="number" name="inputs[0]['experience']"
                                        placeholder="Experience"
                                        class="appearance-none border text-center py-2 px-2 w-full  text-sm"></td> --}}
                                <td class="py-1 text-center">
                                    <div class="text-xs text-gray-400">
                                        Min: <input type="number" min="0" name="inputs[0]['min_experience']" placeholder="0"
                                            class="appearance-none border px-2 w-1/2 text-sm">
                                        Max: <input type="number" max="1" name="inputs[0]['max_experience']" placeholder="5y"
                                            class="appearance-none  px-2 border w-1/2 text-sm">
                                    </div>
                                </td>

                                <td class=" py-1 text-xs">
                                    <select name="inputs[0]['gender']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="gender">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="male" class=" border  w-full text-sm">Male</option>
                                        <option value="female" class=" border  w-full text-sm">Female</option>
                                        <option value="others" class=" border  w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1">
                                    <select name="inputs[0]['preferred_lang']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="preferred_lang">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="english" class=" border  w-full text-sm">English</option>
                                        <option value="hindi" class=" border  w-full text-sm">Hindi</option>
                                        <option value="other" class=" border w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1"><select name="inputs[0]['type']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="type">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="full-time" class=" border  w-full text-sm">Full-Time</option>
                                        <option value="part-time" class=" border  w-full text-sm">Part-Time</option>
                                        <option value="temporary" class=" border  w-full text-sm">Temporary</option>
                                    </select>
                                </td>
                                <td class=" py-1">
                                    <select name="inputs[0]['qualification']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="qualification">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="masters" class=" border  w-full text-sm">Masters</option>
                                        <option value="graduate" class=" border  w-full text-sm">Graduate</option>
                                        <option value="12th Pass" class=" border  w-full text-sm">12th Pass</option>
                                        <option value="10th Pass" class=" border  w-full text-sm">10th Pass</option>
                                        <option value="below 10th" class=" border  w-full text-sm">Below 10th</option>
                                        <option value="others" class=" border  w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1"><input type="number" name="inputs[0]['salary']"
                                        placeholder="5000-10000"
                                        class="appearance-none border py-2 px-1  w-full  text-xs">
                                </td>
                                {{-- <td class="py-1 text-center">
                                    <div class="text-sm text-gray-400">
                                        Min: <input type="number" name="inputs[0]['min_salary']" placeholder="0"
                                            class="appearance-none border py-1 px-2 w-1/2 text-sm">
                                        Max: <input type="number" name="inputs[0]['max_salary']" placeholder="5y"
                                            class="appearance-none py-1 px-2 border w-1/2 text-sm">
                                    </div>
                                </td> --}}
                                <td class=" py-2 flex justify-center">
                                    <button type="button" name="add"
                                        class="add bg-green-500 px-3 py-1 rounded text-white"><i
                                            class="fa-solid fa-user-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2">
                        <label for="city" class="block text-gray-700 text-sm mb-2 ">City</label>
                        <input type="text" id="city" name="city"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Purnea" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="state" class="block text-gray-700 text-sm mb-2 ">State</label>
                        <input type="text" id="state" name="state"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Bihar" required>
                    </div>
                </div>
                <div class="mb-3  items-center">
                    <label for="description" class="block text-gray-700 text-sm mb-2 ">Job Description</label>
                    <textarea name="description" id="description" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                        class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                </div>
                <div class="mb-3 flex items-center">
                    <h3 class=" font-semibold">Recruiter details</h3>
                    <h3 class="text-sm ml-1"> (Cannot be changed later)</h3>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3 items-center w-1/2">
                        <label for="company_name" class="block text-gray-700 text-sm mb-2 ">Hiring for (Company
                            name)</label>
                        <input type="text" id="company_name" name="company_name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Abc Pvt. Ltd." required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="website" class="block text-gray-700 text-sm mb-2 ">Company's Website (if any)</label>
                        <input type="text" id="website" name="website"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="abc.com" required>
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2">
                        <label for="mobile" class="block text-gray-700 text-sm mb-2 ">Phone</label>
                        <input type="tel" id="mobile" name="mobile"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="alt_mobile" class="block text-gray-700 text-sm mb-2 ">Alternate Phone</label>
                        <input type="tel" id="alt_mobile" name="alt_mobile"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="mb-3  items-center w-1/2">
                        <label for="email" class="block text-gray-700 text-sm mb-2 ">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border py-1 px-2 w-full" placeholder="roni@gmail.com" required>
                    </div>
                    <div class="mb-3 items-center w-1/2">
                        <label for="logo" class="block text-gray-700 text-sm mb-2 ">Company's Logo / Image</label>
                        <input type="file" id="logo" name="logo" class="py-1 px-2 w-full" required>
                    </div>
                </div>

                {{-- Option card --}}
                <div class="mb-4 flex gap-2" id="plan_card">
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Free</h3>
                            <h3 class="text-lg font-semibold">Rs. 0</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div>
                    {{-- <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Gold</h3>
                            <h3 class="text-lg font-semibold">Rs. 999</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Top of page promotion
                            </li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Unlimited applications
                            </li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Highlighted as 'Gold'
                            </li>
                        </ul>
                    </div>
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Rapid Hire</h3>
                            <h3 class="text-lg font-semibold">Rs. 1299</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div>
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Spotlight</h3>
                            <h3 class="text-lg font-semibold">Rs. 999</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div> --}}
                </div>

                <div class="mb-3 flex justify-center">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-black">
                        Post Job
                    </button>
                </div>

            </form>

        </div>
        <div class="w-4/12 ">
            <div class=" mt-10 w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                <div class="price mt-2 mb-4">
                    <h3 class="text-lg font-semibold">Job Posting Service</h3>
                </div>
                <ul>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Free Localities</p>
                        <p class="font-bold">Rs. 500</p>
                    </li>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Gold Job</p>
                        <p class="font-bold">Rs. 500</p>
                    </li>
                    <hr>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Total Payment</p>
                        <p class="font-bold">Rs. 1000</p>
                    </li>
                </ul>
                <div class=" flex justify-center items-center">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
                        Post Job
                    </button>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                var i = 0;

                // Add new row
                $('#table').on('click', '.add', function() {
                    ++i;
                    $('#table').append(
                        `<tr>
                                <td class=" py-1"><input type="text" name="inputs[${i}]['profile']" placeholder="Job Name"
                                        class="appearance-none border py-2 px-2 w-full text-xs"></td>
                                <td class=" py-1"><input type="" min="1" name="inputs[${i}]['no_of_post']"
                                        placeholder="Number"
                                        class="appearance-none border py-2 px-2 w-full text-xs">
                                </td>
                                <td class="py-1 text-center">
                                    <div class="text-sm text-gray-400">
                                        Min: <input type="number" min="0" name="inputs[${i}]['min_experience']" placeholder="0"
                                            class="appearance-none border px-2 w-1/2 text-sm">
                                        Max: <input type="number" max="1" name="inputs[${i}]['max_experience']" placeholder="5y"
                                            class="appearance-none px-2 border w-1/2 text-sm">
                                    </div>
                                </td>

                                <td class=" py-1 text-xs">
                                    <select name="inputs[${i}]['gender']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="gender">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="male" class=" border  w-full text-sm">Male</option>
                                        <option value="female" class=" border  w-full text-sm">Female</option>
                                        <option value="others" class=" border  w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1">
                                    <select name="inputs[${i}]['preferred_lang']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="preferred_lang">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="english" class=" border  w-full text-sm">English</option>
                                        <option value="hindi" class=" border  w-full text-sm">Hindi</option>
                                        <option value="other" class=" border w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1"><select name="inputs[${i}]['type']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="type">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="full-time" class=" border  w-full text-sm">Full-Time</option>
                                        <option value="part-time" class=" border  w-full text-sm">Part-Time</option>
                                        <option value="temporary" class=" border  w-full text-sm">Temporary</option>
                                    </select>
                                </td>
                                <td class=" py-1">
                                    <select name="inputs[${i}]['qualification']"
                                        class="appearance-none border text-center py-2 px-2 w-full text-sm text-gray-400"
                                        id="qualification">
                                        <option value="" class="appearance-none border text-center w-full  ">Select
                                        </option>
                                        <option value="masters" class=" border  w-full text-sm">Masters</option>
                                        <option value="graduate" class=" border  w-full text-sm">Graduate</option>
                                        <option value="12th Pass" class=" border  w-full text-sm">12th Pass</option>
                                        <option value="10th Pass" class=" border  w-full text-sm">10th Pass</option>
                                        <option value="below 10th" class=" border  w-full text-sm">Below 10th</option>
                                        <option value="others" class=" border  w-full text-sm">Others</option>
                                    </select>
                                </td>
                                <td class=" py-1"><input type="number" name="inputs[${i}]['salary']"
                                        placeholder="5000-10000"
                                        class="appearance-none border py-2 px-1  w-full  text-xs">
                                </td>
                                <td class=" py-2 flex justify-center">
                                    <button type="button" name="remove"
                                        class="remove bg-red-500 px-3 py-1 rounded text-white"><i
                                            class="fa-solid fa-user-minus"></i></button>
                                </td>
                            </tr>`
                    );
                });

                // Remove row
                $('#table').on('click', '.remove', function() {
                    $(this).closest('tr').remove();
                });
            });

            $(document).ready(function() {
                //insert application details

                $("#addHirer").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('hire.store') }}",
                        data: formData,
                        dataType: "JSON",
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            swal("Success", response.message, "success");
                            $("#addHirer").trigger("reset");
                            window.open("/admin/manage-hire", "_self")
                        }
                    })
                });

                // $.ajax({
                //     type: "GET",
                //     url: "{{ route('hire.plan.index') }}",
                //     success: function(response) {
                //         let select = $("#plan_card");
                //         select.empty();
                //         response.data.forEach((plan) => {
                //             select.append(`
        //             <div class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
        //                 <div class="price flex justify-between">
        //                     <h3 class="text-lg font-semibold">${plan.name}</h3>
        //                     <h3 class="text-lg font-semibold">Rs. ${plan.price}</h3>
        //                 </div>
        //                 <div class="line bg-orange-500 mt-20">
        //                     <hr class="h-2">
        //                 </div>
        //                 <ul class="mt-3">
        //                     <li class="flex font-medium text-[13px] mt-2 "><img src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">${plan.features}</li>
        //                     <li class="flex font-medium text-[13px] mt-2 "><img src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">${plan.features}</li>
        //                     <li class="flex font-medium text-[13px] mt-2 "><img src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">${plan.features}</li>
        //                     <li class="flex font-medium text-[13px] mt-2 "><img src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">${plan.features}</li>
        //                     <li class="flex font-medium text-[13px] mt-2 "><img src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">${plan.features}</li>
        //                 </ul>
        //             </div>
        //             `);
                //         });
                //     }
                // });

                $.ajax({
                    type: "GET",
                    url: "{{ route('hire.plan.index') }}",
                    success: function(response) {
                        let select = $("#plan_card");
                        select.empty();
                        response.data.forEach((plan) => {
                            // Split the features string by newline character
                            let featuresArray = plan.features[0].split('\n');

                            // Generate list items for each feature
                            let listItems = featuresArray.map(feature => {
                                return `<li class="flex font-medium text-[13px] mt-2"><img src="/icons/correct.png" class="h-4 mr-2 mt-1" alt="">${feature}</li>`;
                            }).join('');

                            select.append(`
                            
                            <div class="w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="price flex justify-between">
                                    <h3 class="text-lg font-semibold">${plan.name}</h3>
                                    <h3 class="text-lg font-semibold">Rs. ${plan.price}</h3>
                                </div>
                                <div class="line bg-orange-500 mt-20">
                                    <hr class="h-2">
                                </div>
                                <ul class="mt-3">
                                    ${listItems}
                                </ul>
                            </div>
                            `);
                        });
                    }
                });


                // $('#callingPlans').change(function() {
                //     let selectedPlan = $(this).children("option:selected");
                //     let PlanFee = selectedPlan.data('plan-charge');

                //     // Update the fee display
                //     $('#planCharge').html(
                //         `<input  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        // <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Charge Rs. ${PlanFee}</label>`
                //     );
                // });
            })
        </script>
    @endsection
