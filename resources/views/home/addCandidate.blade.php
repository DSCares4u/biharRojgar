@extends('home.homebase')
@section('title', 'Add Candidate')
@section('content')
    <div class="container mx-auto font-sans mb-10 ">
        <div class="mx-4 ">
            <form class="p-5 flex flex-col" id="applyJob">
                <div class="border p-4 border-gray mt-3">
                    <h2 class="text-lg font-semibold mb-2  ">Personal Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/3">
                            {{-- <input type="hidden" name="user_id" value="{{$user_id}}"> --}}
                            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Full Name as recorded in
                                    Matriculation(10th class) Certificate/Marks list</label>
                                <input type="text" id="name"
                                    name="name"placeholder="सर्टिफिकेट के अनुसार अपना नाम डालें"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="nameError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="gender" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                <select name="gender" id="gender"
                                    class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <span class="error text-red-500 text-xs font-semibold " id="genderError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="marital" class="block text-gray-700 text-sm mb-2 ">Marital Status</label>
                                <select name="marital" id="marital"
                                    class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">Select Status</option>
                                    <option value="married">Married</option>
                                    <option value="unmarried">UnMarried</option>
                                </select>
                                <span class="error text-red-500 text-xs font-semibold " id="maritalError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="preferred_lang" class="block text-gray-700 text-sm mb-2 ">Choice of Language for
                                    Examination</label>
                                <select name="preferred_lang" id="preferred_lang"
                                    class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">Choose Language</option>
                                    <option value="english">English</option>
                                    <option value="hindi">Hindi</option>
                                </select>
                                <span class="error text-red-500 text-xs font-semibold " id="preferred_langError"></span>
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
                                <span class="error text-red-500 text-xs font-semibold " id="dobError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="father" class="block text-gray-700 text-sm mb-2 ">Father’s Name</label>
                                <input type="text" id="father"
                                    name="father"placeholder="अपने पिता का नाम लिखें"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="fatherError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="email" class="block text-gray-700 text-sm mb-2 ">Email Address</label>
                                <input type="email" id="email" name="email"placeholder="अपना ईमेल लिखें"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="emailError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="religion" class="block text-gray-700 text-sm mb-2 ">Religion</label>
                                <select name="religion" id="religion"
                                    class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">अपना धर्म चुनें</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="sikh">Sikh</option>
                                    <option value="christian">Christian</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="error text-red-500 text-xs font-semibold " id="religionError"></span>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="mother" class="block text-gray-700 text-sm mb-3 ">Mother’s Name</label>
                                <input type="text" id="mother" name="mother"placeholder="अपनी माँ का नाम लिखें"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="motherError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="mobile" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                <input type="tel" id="mobile" name="mobile"placeholder="अपना मोबाइल नंबर लिखें"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="mobileError"></span>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="id_mark" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark of identification</label>
                                <input type="text" id="id_mark"
                                    name="id_mark"placeholder="आपके शरीर पर पहचान का स्थायी निशान"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="id_markError"></span>
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
                                    class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                    <option value="">अपना समुदाय चुनें</option>
                                    <option value="ur">UR(Unreserve)</option>
                                    <option value="sc">SC(Schedule Caste)</option>
                                    <option value="st">ST(Schedule Tribe)</option>
                                    <option value="obc">OBC(Other Backward Clases)</option>
                                    <option value="ews">EWS(Economically Weake Section)</option>
                                </select>
                                <span class="error text-red-500 text-xs font-semibold " id="communityError"></span>
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
                                <input type="text" id="village" name="village"placeholder="अपने गांव का नाम लिखें."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="villageError"></span>

                            </div>
                            <div class="mb-3  items-center">
                                <label for="landmark" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                <input type="text" id="landmark" name="landmark"placeholder="अपना लैंडमार्क लिखे"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="landmarkError"></span>

                            </div>
                            <div class="mb-3 items-center">
                                <label for="area" class="block text-gray-700 text-sm mb-2">Area</label>
                                <input type="text" id="area" name="area" placeholder="अपने एरिया का नाम लिखे"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="areaError"></span>
                            </div>
                            <div class="mb-3 items-center">
                                <label for="pincode" class="block text-gray-700 text-sm mb-2">Pincode</label>
                                <input type="number" id="pincode" name="pincode" placeholder="अपना पिनकोड नंबर दर्ज करें"
                                    class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded"
                                    onchange="getDistrictAndState()">
                                    <span class="error text-red-500 text-xs font-semibold " id="pincodeError"></span>
                            </div>
                            <div class="flex gap-5">
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                                    <input type="text" id="city" name="city" placeholder="अपने शहर का नाम लिखे"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                        <span class="error text-red-500 text-xs font-semibold " id="cityError"></span>
                                    </div>
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                                    <input type="text" id="state" name="state" placeholder="अपने राज्य का नाम लिखे"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                        <span class="error text-red-500 text-xs font-semibold " id="stateError"></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button flex justify-end ml-10 mt-8">
                    <div class="next">
                        <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save & Next</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            function fetchJobDetailsAndOpenModal() {
                let userId = {{ auth()->user()->id }};

                $.ajax({
                    type: 'GET',
                    url: `/api/candidate/view/` + userId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
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
                        $('#community').val(response.data.community);
                        $('#village').val(response.data.village);
                        $('#landmark').val(response.data.landmark);
                        $('#area').val(response.data.area);
                        $('#pincode').val(response.data.pincode);
                        $('#state').val(response.data.state);
                        $('#city').val(response.data.city);
                        $('#id_mark').val(response.data.id_mark);
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

        });


        $('#applyJob').submit(function(e) {
            e.preventDefault();
            let userId = {{ auth()->user()->id }};
            let formData = {
                user_id: $('#id').val(),
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
                community: $('#community').val(),
                village: $('#village').val(),
                landmark: $('#landmark').val(),
                area: $('#area').val(),
                pincode: $('#pincode').val(),
                state: $('#state').val(),
                city: $('#city').val(),
                id_mark: $('#id_mark').val(),
            };
            $.ajax({
                type: 'PUT',
                url: `/api/candidate/edit/${userId}`,
                data: formData,
                success: function(response) {
                    // swal("Success", response.message, "message");
                    $("#applyJob").trigger("reset");
                    $('.error').text('');
                    window.open("/address", "_self")
                },
                error: function(xhr) {
                            // Clear previous error messages
                            $('.error').text('');

                            // Display validation errors
                            if (xhr.responseJSON && xhr.responseJSON.error) {
                                $.each(xhr.responseJSON.error, function(key, value) {
                                    $('#' + key + 'Error').text(value[0]);
                                });
                            }
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
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
