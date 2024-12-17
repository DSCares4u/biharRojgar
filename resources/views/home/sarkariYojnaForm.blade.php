@extends('home.homebase')
@section('title', 'Yojna Application')
@section('content')


    <div class="container mx-auto flex flex-wrap font-sans mb-10">
        <div class="w-full lg:w-3/4 p-10" id="callingYojnaFeatures">
            <div>
                <h5 class="text-3xl font-extrabold">Trademark Registration</h5>
                <p class="mt-5 text-xl text-gray-500 line-clamp-2" id="description">A Trademark or service mark is a word,
                    name, symbol, or device used to
                    indicate the source, quality and ownership of a product or service. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Sit, reiciendis quam alias ratione similique unde nobis dolores sed illum?
                    Deserunt exercitationem sapiente quod iusto blanditiis ad pariatur error eos repellat rerum iure
                    voluptatem asperiores esse, molestiae optio! Omnis incidunt voluptas provident ab atque saepe.
                    Laboriosam numquam magnam ullam est earum quae totam assumenda, voluptatum magni fugiat omnis repellat
                    explicabo autem alias odit nobis, eius itaque cum tenetur labore ea dolores! Inventore numquam nisi rem
                    tempora modi quibusdam, in natus eveniet necessitatibus magnam assumenda, repellat omnis, provident
                    quaerat quae repudiandae. Accusantium amet similique a ex saepe consequatur debitis in non quod.
                </p>
                <button id="toggleButton" class="mt-4 text-blue-500">Read More</button>
    
                <h5 class="text-xl font-bold mt-5 underline">Benefits</h5>
                <ul class="mt-3 text-sm">
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with Our
                        Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <!-- Repeated benefits list items omitted for brevity -->
                </ul>
                <h5 class="text-xl font-bold mt-5 underline">Documents Required</h5>
                <ul class="mt-3 text-sm">
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with Our
                        Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <!-- Repeated documents list items omitted for brevity -->
                </ul>
            </div>
        </div>
    
        <div class="bg-gray-100 w-full   flex-col-reverse lg:w-1/4 border border-gray flex md:flex-col md:h-[90%]  md:right-5 md:fixed">
            <div class="w-[100%] bg-white border p-2 rounded dark:bg-gray-800 dark:border-gray-700 ">
                <div class="price mt-1 mb-2">
                    <h3 class="text-lg font-semibold underline">Pricing Summary</h3>
                </div>
                <ul id="yojnaFees">
                    <li class="flex justify-between text-base text-gray-500">
                        <p>Market Price</p>
                        <p class="font-bold text-black"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i><del>500</del></p>
                    </li>
                    <li class="flex justify-between text-base text-gray-500">
                        <p>MKDF Discounted Price</p>
                        <p class="font-bold text-black"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>200</p>
                    </li>
                    <li class="flex justify-between text-base text-red-500">
                        <p class="text-sm ">Total Savings</p>
                        <p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>50</p>
                    </li>
                    <hr>
                    <li class="flex justify-between text-base items-center text-gray-500">
                        <p>Actual Amount</p>
                        <p class="text-sm">(including 18% Gst)</p>
                        <p class="font-bold text-green-600"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>1000</p>
                    </li>
                </ul>
            </div>
            <hr class="bg-black">
            <form id="addData" class="p-2 flex flex-col">
                <div class="px-1 justify-between ">
                    <div class="mb-1">
                        <label for="name" class="block text-gray-700 text-xs mb-1 font-semibold">Name :</label>
                        <input type="text" id="name" name="name"
                            class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded"
                            placeholder="Name">
                        <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-1">
                        <label for="mobile" class="block text-gray-700 text-xs mb-1 font-semibold">Mobile No. :</label>
                        <input type="tel" id="mobile" name="mobile"
                            class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded"
                            placeholder="Phone">
                        <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-1">
                        <label for="wtsp_mobile" class="block text-gray-700 text-xs mb-1 font-semibold">Whatsapp No. :</label>
                        <input type="tel" id="wtsp_mobile" name="wtsp_mobile"
                            class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded"
                            placeholder="Whatsapp No.">
                        <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-1">
                        <label for="email" class="block text-gray-700 text-xs mb-1 font-semibold">Email :</label>
                        <input type="email" id="email" name="email"
                            class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded"
                            placeholder="Email">
                        <p id="error-email" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="flex gap-1">
                        <div class="mb-2 w-1/2">
                            <label for="city" class="block text-gray-700 text-xs mb-1 font-semibold">City:</label>
                            <input type="text" id="city" name="city"
                                class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded">
                            <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                        </div>
                        <div class="mb-2 w-1/2">
                            <label for="state" class="block text-gray-700 text-xs mb-1 font-semibold">State :</label>
                            <select id="state" name="state"
                                class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded">
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
                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            </select>
                            <p id="error-state" class="text-red-500 text-xs font-semibold error-message"></p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="yojna_id" class="block text-gray-700 text-xs mb-1 font-semibold">Yojna Selected :</label>
                        <select name="yojna_id" id="callingYojna"
                            class="form-input w-full shadow-sm sm:text-sm py-1 px-2 border border-gray-300 rounded text-gray-500 capitalize">
                        </select>
                        <p id="error-yojna_id" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded-md">Apply Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="w-full lg:w-3/4 flex flex-col lg:flex-row mt-8 p-10 border-t-gray-300 border mb-5">
        <div class="lg:w-1/4 p-5">
            <div class="image text-center">
                <i class="fa-solid fa-pen-to-square text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Fill The Enquiry Form</h5>
            <p class="text-gray-400 mt-3 text-center">Choose your required Registration and Add-Ons to get maximum</p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl hidden lg:block"></i>
        <div class="lg:w-1/4 p-5 mt-5 lg:mt-0">
            <div class="image text-center">
                <i class="fa-solid fa-phone text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Call From Us</h5>
            <p class="text-gray-400 mt-3 text-center">We Will Call You For the Required Documents</p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl hidden lg:block"></i>
        <div class="lg:w-1/4 p-5 mt-5 lg:mt-0">
            <div class="image text-center">
                <i class="fa-solid fa-check text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Verification Process</h5>
            <p class="text-gray-400 mt-3 text-center">Documents And Form will be verified By Our Team</p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl hidden lg:block"></i>
        <div class="lg:w-1/4 p-5 mt-5 lg:mt-0">
            <div class="image text-center">
                <i class="fa-solid fa-download text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Get Your Certificate</h5>
            <p class="text-gray-400 mt-3 text-center">We will Follow-up and Respond to any objections raised and get your Certificate</p>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            let yojnaData = [];
            
            // Function to get the Yojna data from the server
            function fetchYojnaData() {
                return $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.index') }}",
                    success: function(response) {
                        yojnaData = response.data;
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                    }
                });
            }
    
            // Populate the Yojna dropdown
            function populateYojnaDropdown() {
                let select = $("#callingYojna");
                let selectedId = getIdFromUrlPath();
    
                select.empty();
                select.append('<option value="">Select Plan</option>');
                yojnaData.forEach((plan) => {
                    let isSelected = plan.id == selectedId ? 'selected' : '';
                    select.append(`<option value="${plan.id}" data-market-charge="${plan.market_fees}" data-plan-charge="${plan.fees}" ${isSelected}>${plan.ename}</option>`);
                });
    
                select.trigger('change');
            }
    
            // Display selected Yojna details
            function displaySelectedYojnaDetails(selectedYojna) {
                let cleanedFeatures = selectedYojna.features.replace(/[\[\]"]/g, '').split(',');
                let features = cleanedFeatures.map(feature => `<li class="mt-4 flex"><p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>${feature}</li>`).join('');
    
                let cleanedDocuments = selectedYojna.documents.replace(/[\[\]"]/g, '').split(',');
                let documents = cleanedDocuments.map(document => `<li class="mt-4 flex"><p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>${document}</li>`).join('');
    
                $("#callingYojnaFeatures").html(`
                    <div class='capitalize'>
                        <h5 class="text-3xl font-bold capitalize">${selectedYojna.ename}</h5>
                        <p class="mt-5 text-base text-gray-500 line-clamp-2 description">${selectedYojna.description}</p>
                        <button class="toggleButton mt-4 text-blue-500">Read More</button>
                        <h5 class="text-xl font-bold mt-5 underline">Benefits</h5>
                        <ul class="mt-3 text-sm">${features}</ul>
                        <h5 class="text-xl font-bold mt-5 underline">Documents Required</h5>
                        <ul class="mt-3 text-sm">${documents}</ul>
                    </div>
                `);
            }
    
            // Event handler for Yojna dropdown change
            $('#callingYojna').change(function() {
                let selectedPlanId = $(this).val();
                let selectedPlan = yojnaData.find(plan => plan.id == selectedPlanId);
                if (selectedPlan) {
                    let PlanFee = Number(selectedPlan.fees) || 0; // Default to 0 if no plan is selected
                    let MarketFee = Number(selectedPlan.market_fees) || 0; // Default to 0 if no plan is selected
                    let TotalFee = Math.round(Math.abs(PlanFee + (PlanFee*0.18)));
                    let savings = Math.round(Math.abs(TotalFee - MarketFee));
    
                    // Update the fee display
                    $('#yojnaFees').html(`
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Market Price</p>
                            <p class="font-bold text-black"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i><del>${MarketFee}</del></p>
                        </li>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>MKDF Discounted Price</p>
                            <p class="font-bold text-black"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${PlanFee}</p>
                        </li>
                        <li class="flex justify-between text-base text-red-500">
                            <p class="text-sm ">Total Savings</p><p><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${savings}</p>
                        </li>
                        <hr>
                        <li class="flex justify-between text-base items-center text-gray-500">
                            <p>Actual Amount</p><p class="text-sm">(including 18% Gst)</p>
                            <p class="font-bold text-green-600"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>${TotalFee}</p>
                        </li>
                    `);
    
                    // Display the selected Yojna details
                    displaySelectedYojnaDetails(selectedPlan);
                } else {
                    // Clear the details if no plan is selected
                    $("#callingYojnaFeatures").empty();
                    $('#yojnaFees').empty();
                }
            });
    
            // Function for taking id from URL
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }
    
            // Initialize the page
            fetchYojnaData().then(populateYojnaDropdown);
    
            // Toggle button functionality
            $(document).on('click', '.toggleButton', function() {
                const description = $(this).siblings('.description');
                if (description.hasClass('line-clamp-2')) {
                    description.removeClass('line-clamp-2');
                    $(this).text('Show Less');
                } else {
                    description.addClass('line-clamp-2');
                    $(this).text('Read More');
                }
            });
    
            // Insert apply data for yojna details
            $("#addData").submit(function(e) {
                e.preventDefault();
                $('.error-message').html(''); // Clear previous error messages
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('yojna.form.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addData").trigger("reset");
                        setTimeout(function() {
                            window.open("/", "_self");
                        }, 1000000); // Redirect after  seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 409) {
                            swal("error", "You have already applied for this Yojna.", "error");
                        }
                        else if (xhr.status === 422) {
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
        });
    </script>
    
@endsection
