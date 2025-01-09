@extends('hirer.hirerBase')
@section('title', 'Profile')
@section('content')

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6',
                });
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Whoops! Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33',
                });
            });
        </script>
    @endif

    <div class="container mb-20 flex flex-col justify-center mx-auto">
        <div id="printable-area" class="container w-full lg:w-[70%] mx-auto bg-blue-50 shadow-lg border border-gray-400">
            <p class="text-lg sm:text-xl text-center underline text-white bg-blue-500 p-2">COMPANY'S DETAILS</p>
            <div class="p-4">
                <!-- Personal Details -->
                <h2 class="text-lg md:text-xl underline font-semibold mt-4 mb-3 text-gray-800">Plan Details</h2>
                <div class="md:w-full space-y-4">
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Active Plan name :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            {{ $data->hire_plan->name }}</p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Plan Purchase Price :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            {{ $data->hire_plan->price }}</p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Plan Expiry Date :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"></p>
                    </div>
                </div>
                <h2 class="text-lg md:text-xl underline font-semibold my-4 text-gray-800">Company's Details
                </h2>
                <form action="{{ url('/hirer/application/edit/' . $data->id) }}" method="POST">
                    <div class="flex flex-col-reverse sm:flex-row justify-between items-start">
                        <div class="md:w-full  space-y-4 ">
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Company's Name :</label>
                                <input type="text" name="name" value="{{ $data->company_name }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Mobile no. :</label>
                                <input type="text" name="name" value="{{ $data->mobile }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Other Mobile no. :</label>
                                <input type="text" name="name" value="{{ $data->alt_mobile }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Email :</label>
                                <input type="text" name="name" value="{{ $data->email }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Website :</label>
                                <input type="text" name="name" value="{{ $data->website }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-1/2 font-medium text-gray-700 text-sm">City :</label>
                                <input type="text" name="name" value="{{ $data->city }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-1/2 font-medium text-gray-700 text-sm">State :</label>
                                <input type="text" name="name" value="{{ $data->state }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full mb-5">
                                <label class="w-1/3 font-medium text-gray-700 text-sm">Logo :</label>
                                <img src="{{ asset('/image/candidate/photo/' . $data->logo) }}" class="w-1/3"
                                    alt="">
                                <input type="file" name="logo" class="w-1/3 text-sm p-1 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Description :</label>
                                <textarea name="" id=""
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal" cols="2" rows="4">{{ $data->description }}</textarea>
                            </div>
                            <div class="flex w-1/2 mx-auto">
                                <button type="submit"
                                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="mb-4 flex gap-2 w-[90%] mx-auto" id="plan_card">
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

        <div
            class=" md:mt-10 mb-10 mx-auto md:w-[50%] w-full bg-white border p-3 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
            <div class="price mt-2 mb-4">
                <h3 class="text-lg font-semibold">Job Posting Service</h3>
            </div>
            <ul id="planCharge">
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
            <div id="payBtn2" class=" flex justify-center items-center">
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
                    Post Job
                </button>
            </div>
    </div>


    <script>
        $.ajax({
            type: "GET",
            url: "{{ route('hire.plan.index') }}",
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
                        `<li class="flex font-medium text-[13px] mt-2overflow-y-hidden"><img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="">${feature}</li>`
                    ).join('');

                    select.append(`
                                <label class="md:w-[25%] md:h-[350px] w-[200px] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 cursor-pointer">
                                    <input type="radio" name="plan_id" value="${plan.id}" data-plan-name="${plan.name}" data-plan-charge="${plan.price}" class="hidden" />
                                    <div class="price flex justify-between">
                                        <h3 class="text-lg font-semibold">${plan.name}</h3>
                                        <h3 class="text-lg font-semibold">Rs. ${plan.price}</h3>
                                    </div>
                                    <div class="line bg-orange-500 mt-20">
                                        <hr class="h-2">
                                    </div>
                                    <ul class="mt-3 ">
                                        <li class="text-gray-600 text-[13px]">Normal x applications</li>
                                        ${features}
                                    </ul>
                                </label>
                            `);
                });

                // Add click event listener to the dynamically added labels
                document.querySelectorAll('#plan_card label').forEach(label => {
                    label.addEventListener('click', () => {
                        document.querySelectorAll('#plan_card label').forEach(l => l
                            .classList.remove('border-orange-500'));
                        label.classList.add('border-orange-500');
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
                        <li class="flex justify-between text-base text-gray-500">
                            <p>${PlanName}</p>
                            <p class="font-bold">Rs. ${PlanFee}</p>
                        </li>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Platform Fees</p>
                            <p class="font-bold">Rs. ${Platform}</p>
                        </li>
                        <hr>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Total Payment</p>
                            <p class="font-bold">Rs. ${PlanFee + Platform}</p>
                        </li>
                    `);
        }
    </script>

@endsection
