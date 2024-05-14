@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="mx-4 ">
            <form class="p-5 flex flex-col" id="applyJob">
                <div class="border p-4 border-gray mt-3">
                    <h2 class="text-lg font-semibold mb-2  ">Personal Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/3">
                            {{-- <input type="hidden" name="user_id" value="{{$user_id}}"> --}}
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Full Name as recorded in
                                    Matriculation(10th class) Certificate/Marks list</label>
                                <input type="text" id="name"
                                    name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded">
                                <p id="name-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="gender" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                <select name="gender" id="gender"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded">
                                    <option value="">Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <p id="gender-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="marital" class="block text-gray-700 text-sm mb-2 ">Marital Status</label>
                                <select name="marital" id="marital"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded">
                                    <option value="">Select Status</option>
                                    <option value="married">Married</option>
                                    <option value="unmarried">UnMarried</option>
                                </select>
                                <p id="marital-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="preferred_lang" class="block text-gray-700 text-sm mb-2 ">Choice of Language for
                                    Examination</label>
                                <select name="preferred_lang" id="preferred_lang"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded">
                                    <option value="">Choose Language</option>
                                    <option value="english">English</option>
                                    <option value="hindi">Hindi</option>
                                </select>
                                <p id="preferred_lang-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="dob" class="block text-gray-700 text-sm mb-2 ">Date of Birth as
                                    recorded in
                                    Matriculation (10th class) Certificate/Marks</label>
                                <input type="date" id="dob"
                                    name="dob"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="dob-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="father" class="block text-gray-700 text-sm mb-2 ">Father’s Name</label>
                                <input type="text" id="father"
                                    name="father"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="father-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="email" class="block text-gray-700 text-sm mb-2 ">Email Address</label>
                                <input type="email" id="email" name="email"placeholder="Eg. abc@gmail.com"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="email-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="religion" class="block text-gray-700 text-sm mb-2 ">Religion</label>
                                <input type="text" id="religion" name="religion"placeholder="Eg. Hindu"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="religion-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="mother" class="block text-gray-700 text-sm mb-3 ">Mother’s Name</label>
                                <input type="text" id="mother" name="mother"placeholder="Eg. abc Devi ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="mother-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="mobile" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                <input type="tel" id="mobile" name="mobile"placeholder="Eg. 7892456123"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="mobile-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="id_mark" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark
                                    of
                                    identification 1</label>
                                <input type="text" id="id_mark"
                                    name="id_mark"placeholder="Permanent visible mark of identification"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="id_mark-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border mt-3 p-4">
                    <h2 class="text-lg font-semibold mb-2  ">Community Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="community" class="block text-gray-700 text-sm mb-2 ">Community</label>
                                <select name="community" id="community"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">Select</option>
                                    <option value="ur">UR(Unreserve)</option>
                                    <option value="sc">SC(Schedule Caste)</option>
                                    <option value="st">ST(Schedule Tribe)</option>
                                    <option value="obc">OBC(Other Backward Clases)</option>
                                    <option value="ews">EWS(Economically Weake Section)</option>
                                </select>
                                <p id="community-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border p-4 mt-3">
                    <h2 class="text-lg font-semibold mb-2  ">Postal Address Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/2">
                            <div class="mb-3  items-center">
                                <label for="village" class="block text-gray-700 text-sm mb-2 ">Village/Town/City</label>
                                <input type="text" id="village" name="village"placeholder="Eg. abc nagar ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="village-error" class="text-red-500 text-xs italic hidden"></p>

                            </div>
                            <div class="mb-3  items-center">
                                <label for="landmark" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                <input type="text" id="landmark" name="landmark"placeholder="Eg. abc chowk ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="landmark-error" class="text-red-500 text-xs italic hidden"></p>

                            </div>
                            <div class="mb-3 items-center">
                                <label for="area" class="block text-gray-700 text-sm mb-2">Area</label>
                                <input type="text" id="area" name="area"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                <p id="area-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="mb-3 items-center">
                                <label for="pincode" class="block text-gray-700 text-sm mb-2">Pincode</label>
                                <input type="number" id="pincode" name="pincode" placeholder="Eg. 789456"
                                    class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded"
                                    onchange="getDistrictAndState()">
                                <p id="pincode-error" class="text-red-500 text-xs italic hidden"></p>
                            </div>
                            <div class="flex gap-5">
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                                    <input type="text" id="city" name="city" placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <p id="city-error" class="text-red-500 text-xs italic hidden"></p>
                                </div>
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                                    <input type="text" id="state" name="state" placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <p id="state-error" class="text-red-500 text-xs italic hidden"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button flex gap-5 justify-end ml-10 mt-8">
                    <div class="next">
                        <a class="editBtn bg-[#316fb6] hover:bg-[#2f5081] rounded px-3 py-1 text-white">Edit</a>
                    </div>
                    <div class="next">
                        <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save &
                            Next</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            //insert application details

            $("#applyJob").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('job.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("success", response.message, "success");
                        $("#applyJob").trigger("reset");
                        window.open("/address", "_self")
                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.error;
                        $.each(errors, function(key, value) {
                            $("#" + key + "-error").text(value[0]).removeClass(
                                "hidden");
                        });
                    }
                })
            })
        });

        $(document).on('click', '.editBtn', function() {
            // Get the user ID from the logged-in session
            let userId = {{ auth()->user()->id }};

            // Now, proceed with your AJAX request
            $.ajax({
                type: 'GET',
                url: `/api/job/view`,
                success: function(response) {
                    // Populate form fields with response data
                    $('#id').val(response.data.id);
                    $('#name').val(response.data.name);
                    $('#gender').val(response.data.gender);
                    $('#marital').val(response.data.marital);
                    $('#preferred_lang').val(response.data.preferred_lang);
                    $('#dob').val(response.data.dob);
                    $('#father').val(response.data.father);
                    $('#email').val(response.data.email);
                    $('#religion').val(response.data.religion);
                    $('#mother').val(response.data.mother);
                    $('#mobile').val(response.data.mobile);
                    $('#id_mark').val(response.data.id_mark);
                    $('#default-modal').removeClass('hidden');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Job details for editing:', error);
                }
            });
        });

        $('#applyJob').submit(function(e) {
            e.preventDefault();
            let userId = {{ auth()->user()->id }};
            let formData = {
                name: $('#name').val(),
                gender: $('#gender').val(),
                marital: $('#marital').val(),
                preferred_lang: $('#preferred_lang').val(),
                dob: $('#dob').val(),
                father: $('#father').val(),
                email: $('#email').val(),
                religion: $('#religion').val(),
                mother: $('#mother').val(),
                mobile: $('#mobile').val(),
                id_mark: $('#id_mark').val(),
            };
            $.ajax({
                type: 'PUT',
                url: `/api/job/edit/${userId}`,
                data: formData,
                success: function(response) {
                    swal("Success", response.message, "message");
                },
                error: function(xhr, status, error) {
                    console.error('Error updating Plan Details:', error);
                }
            });
        });

        // function to get distict and state details

        function getDistrictAndState() {
            var pincode = document.getElementById('pincode').value;
            fetch('/get-district-and-state?pincode=' + pincode)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('city').value = data.district;
                    document.getElementById('state').value = data.state;
                    // document.getElementById('name').value = data.name;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
