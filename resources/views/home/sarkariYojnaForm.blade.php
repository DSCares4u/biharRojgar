@extends('home.homebase')
@section('content')
    <div class="container mx-auto flex font-sans">

        <div class="w-3/4 p-10" id="callingYojnaFeatures">
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
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with Our
                        Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with
                        Our Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with
                        Our Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                </ul>
                <h5 class="text-xl font-bold mt-5 underline">Documents Required</h5>
                <ul class="mt-3 text-sm">
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with Our
                        Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with Our
                        Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with
                        Our Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                    <li class="mt-4 flex">
                        <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>Safeguard your brand identity
                        with
                        Our Trademark Registration Service, designed to navigate the legal landscape and secure your unique
                        trademark effortlessly.
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-gray-100 w-1/4 float-end border border-gray mt-10">
            <form id="addData" class="p-4 flex flex-col">
                <div class=" py-1 px-1 justify-between">
                    <div class="mb-2">
                        <label for="name" class="block text-gray-700 text-xs mb-1 ">Name :</label>
                        <input type="text" id="name" name="name"
                            class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                            placeholder="Name">
                        <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-2">
                        <label for="mobile" class="block text-gray-700 text-xs mb-1 ">Mobile No. :</label>
                        <input type="tel" id="mobile" name="mobile"
                            class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                            placeholder="Phone">
                        <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mb-2">
                        <label for="wtsp_mobile" class="block text-gray-700 text-xs mb-1 ">Whatsapp No. :</label>
                        <input type="tel" id="wtsp_mobile" name="wtsp_mobile"
                            class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                            placeholder="Phone">
                        <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class=" mb-2">
                        <label for="email" class="block text-gray-700 text-xs mb-1 ">Email :</label>
                        <input type="email" id="email" name="email"
                            class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                            placeholder="Email">
                        <p id="error-email" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="flex gap-1">
                        <div class=" mb-2">
                            <label for="city" class="block text-gray-700 text-xs mb-1 ">City/Village :</label>
                            <input type="text" id="city" name="city"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                            <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                        </div>
                        <div class=" mb-2">
                            <label for="state" class="block text-gray-700 text-xs mb-1 ">State :</label>
                            <input type="text" id="state" name="state"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                            <p id="error-state" class="text-red-500 text-xs font-semibold error-message"></p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="yojna_id" class="block text-gray-700 text-xs mb-1 ">Yojna Selected :</label>
                        <select name="yojna_id" id="callingYojna"
                            class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded text-gray-500">
                        </select>
                        <p id="error-yojna_id" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Submit</button>
                    </div>
                </div>
            </form>
            <div class="fees p-3">
                <h5 class="text-xl font-bold mt-5 underline mb-3">Pricing Summary</h5>
                <p class="text-sm font-medium flex gap-5 mt-2">Market Price: <span class="font-light text-green-700">Rs. 1500</span></p>
                <p class="text-sm font-medium flex gap-5 mt-2">You Saved: <span class="font-light text-green-700">Rs. 1500</span></p>
                <p class="text-sm font-medium flex gap-5 mt-2">Government Price: <span class="font-light text-green-700">Rs. 1500</span></p>
                <p class="text-sm font-medium flex gap-5 mt-2">Total Price: <span class="font-light text-green-700">Rs. 4500</span></p>
            </div>
        </div>
    </div>

    <div class="w-full flex mt-8 p-10 border-t-gray-300 border">
        <div class="w-1/4 p-5">
            <div class="image text-center ">
                <i class="fa-solid fa-pen-to-square text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Fill The Enquiry Form</h5>
            <p class="text-gray-400 mt-3 text-center">Choose your required Registration and Add-Ons to get maximum </p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl"></i>
        <div class="w-1/4 p-5">
            <div class="image text-center ">
                <i class="fa-solid fa-phone text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Call From Us</h5>
            <p class="text-gray-400 mt-3 text-center">We Will Call You For the Required Documents</p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl"></i>
        <div class="w-1/4 p-5">
            <div class="image text-center ">
                <i class="fa-solid fa-check text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Verification Process</h5>
            <p class="text-gray-400 mt-3 text-center">Documents And Form will be verified By Our Team</p>
        </div>
        <i class="fa-solid fa-arrow-right my-auto text-gray-500 text-3xl"></i>
        <div class="w-1/4 p-5">
            <div class="image text-center ">
                <i class="fa-solid fa-download text-5xl text-gray-500"></i>
            </div>
            <h5 class="font-semibold mt-4 text-center">Get Your Certificate</h5>
            <p class="text-gray-400 mt-3 text-center">We will Follow-up and Respond to any objections raised and get your
                Certificate </p>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            //insert application details

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
                        window.open("/", "_self")
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
                    },
                })
            })

            $.ajax({
                type: "GET",
                url: "{{ route('yojna.index') }}",
                success: function(response) {
                    let select = $("#callingYojna");
                    let selectedId = getIdFromUrlPath();

                    select.empty();
                    select.append(`
                    <option value="">Select Plan</option>`);
                    response.data.forEach((plan) => {
                        let isSelected = plan.id == selectedId ? 'selected' : '';
                        select.append(`
                    <option value="${plan.id}" ${isSelected}>${plan.ename}</option>
                    `);
                    });
                }
            });

            // Function for taking id from URL
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            // calling Features and description work

            $.ajax({
                type: "GET",
                url: "{{ route('yojna.index') }}",
                success: function(response) {
                    let select = $("#callingYojnaFeatures");
                    let selectedId = getIdFromUrlPath();

                    select.empty();
                    response.data.forEach((plan, index) => {
                        // Remove square brackets and double quotes from the features string
                        let cleanedFeatures = plan.features.replace(/[\[\]"]/g, '');

                        // Split the features by comma and remove the first and last element
                        let featuresArray = cleanedFeatures.split(',');

                        // Map each feature to an HTML list item and join them into a single string
                        let features = featuresArray.map(feature =>
                            `<li class="mt-4 flex">
                            <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>${feature}</li>`
                        ).join('');

                    response.data.forEach((docs, index) => {
                        // Remove square brackets and double quotes from the features string
                        let cleanedDocuments = docs.documents.replace(/[\[\]"]/g, '');

                        // Split the features by comma and remove the first and last element
                        let array = cleanedDocuments.split(',');

                        // Map each feature to an HTML list item and join them into a single string
                        let documents = array.map(document =>
                            `<li class="mt-4 flex">
                            <p><i class="fa-solid fa-circle-check text-green-500 mr-2"></i></p>${document}</li>`
                        ).join('');

                        select.append(`
                                <div>
                                    <h5 class="text-3xl font-extrabold">${plan.ename}</h5>
                                    <p class="mt-5 text-xl text-gray-500 line-clamp-2 description">${plan.description}</p>
                                    <button class="toggleButton mt-4 text-blue-500">Read More</button>
                                    <h5 class="text-xl font-bold mt-5 underline">Benefits</h5>
                                    <ul class="mt-3 text-sm">
                                        ${features}
                                    </ul>
                                    <h5 class="text-xl font-bold mt-5 underline">Documents Required</h5>
                                    <ul class="mt-3 text-sm">
                                        ${documents}
                                    </ul>
                                </div>
                            `);
                    });
                    });
                }
            });
        });

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
    </script>
@endsection
