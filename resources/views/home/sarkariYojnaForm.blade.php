@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans">
        <div class="bg-gray-100 w-1/2 mx-auto border border-gray mt-3">
            <form id="addData" class="p-4 flex flex-col">
                <div class="flex py-1 px-1 justify-between">
                    <div class="w-5/12">
                        <h2 class="text-center text-3xl font-semibold uppercase">Enquire Now</h2>
                        <p class="text-gray-400 mt-5 text-xs">Vesta Elder Care services embodies integrity, professionalism
                            and care
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
                            <label for="name" class="block text-gray-700 text-xs mb-1 ">Name :</label>
                            <input type="text" id="name" name="name"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Name">
                        </div>
                        <div class="mb-2">
                            <label for="father" class="block text-gray-700 text-xs mb-1 ">Father's Name :</label>
                            <input type="text" id="father" name="father"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="father">
                        </div>
                        <div class="mb-2">
                            <label for="mother" class="block text-gray-700 text-xs mb-1 ">Mother's Name :</label>
                            <input type="text" id="mother" name="mother"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="mother">
                        </div>
                        <div class="flex justify-between">
                        <div class="mb-2">
                            <label for="gender" class="block text-gray-700 text-xs mb-1 ">Gender :</label>
                            <select name="gender" id="gender"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                required>
                                <option value="">Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class=" mb-2">
                            <label for="dob" class="block text-gray-700 text-xs mb-1 ">Date Of Birth :</label>
                            <input type="date" id="dob" name="dob"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                        </div>
                        </div>
                        <div class="mb-2">
                            <label for="mobile" class="block text-gray-700 text-xs mb-1 ">Mobile No. :</label>
                            <input type="tel" id="mobile" name="mobile"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Phone">
                        </div>
                        <div class=" mb-2">
                            <label for="email" class="block text-gray-700 text-xs mb-1 ">Email :</label>
                            <input type="email" id="email" name="email"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Email">
                        </div>
                        <div class=" mb-2">
                            <label for="landmark" class="block text-gray-700 text-xs mb-1 ">Landmark :</label>
                            <input type="text" id="landmark" name="landmark"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                        </div>
                        <div class=" mb-2">
                            <label for="village" class="block text-gray-700 text-xs mb-1 ">Village :</label>
                            <input type="text" id="village" name="village"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                        </div>
                        <div class=" mb-2">
                            <label for="pincode" class="block text-gray-700 text-xs mb-1 ">Pincode :</label>
                            <input type="number" id="pincode" name="pincode" onchange="getDistrictAndState()"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                        </div>
                        <div class="flex gap-1">
                            <div class=" mb-2">
                                <label for="city" class="block text-gray-700 text-xs mb-1 ">City :</label>
                                <input type="text" id="city" name="city"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                            </div>
                            <div class=" mb-2">
                                <label for="state" class="block text-gray-700 text-xs mb-1 ">State :</label>
                                <input type="text" id="state" name="state"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="yojna_id" class="block text-gray-700 text-xs mb-1 ">Yojna Selected :</label>
                            <select name="yojna_id" id="callingYojna"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded text-gray-500">
                            </select>
                        </div>
                        <div class=" mb-2">
                            <label for="photo" class="block text-gray-700 text-xs mb-1 ">Upload Your Photo :</label>
                            <input type="file" id="photo" name="photo"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 ">
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            //insert application details

            $("#addData").submit(function(e) {
                e.preventDefault();
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
                    error: function(xhr, status, error) {
                        alert('not')
                        console.error('Error:', error);
                    }
                })
            })

            // $.ajax({
            //     type: "GET",
            //     url: "{{ route('yojna.index') }}",
            //     success: function(response) {
            //         let select = $("#callingYojna");
            //         select.empty();
            //         select.append(`<option value="">Select Plan</option>`)
            //         response.data.forEach((plan) => {
            //             select.append(`
        //             <option value="${plan.id}">${plan.ename}</option>
        //             `);
            //         });
            //     }
            // });

            // // function for taking id from url

            // function getIdFromUrlPath() {
            //     let pathArray = window.location.pathname.split('/');
            //     return pathArray[pathArray.length - 1];
            // }

            $.ajax({
                type: "GET",
                url: "{{ route('yojna.index') }}",
                success: function(response) {
                    let select = $("#callingYojna");
                    let selectedId = getIdFromUrlPath();

                    select.empty();
                    select.append(`<option value="">Select Plan</option>`);
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

        });

         // function to get distict and state details

         function getDistrictAndState() {
            var pincode = document.getElementById('pincode').value;
            fetch('/get-district-and-state?pincode=' + pincode)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('city').value = data.district;
                    document.getElementById('state').value = data.state;
                })
                .catch(error => console.error('Error:', error));
        };
    </script>
@endsection
