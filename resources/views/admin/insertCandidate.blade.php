@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="mx-4 ">
            <form action=""id="insertData" enctype="multipart/form-data">
                <div class="p-5 flex flex-col">
                    <div class="border p-4 border-gray mt-3">
                        <h2 class="text-lg font-semibold mb-2  ">Personal Details</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="flex gap-5">
                            <div class="w-1/3">
                                <input type="hidden" id="id" name="user_id" value="">
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
                                    <label for="preferred_lang" class="block text-gray-700 text-sm mb-2 ">Choice of Language
                                        for
                                        Examination</label>
                                    <select name="preferred_lang" id="preferred_lang"
                                        class="shadow border py-1 px-2 w-full bg-gray-300 rounded">
                                        <option value="">Choose Language</option>
                                        <option value="english">English</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                    <span class="error text-red-500 text-xs font-semibold " id="preferred_langError"></span>
                                    </p>
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
                                    <span class="error text-red-500 text-xs font-semibold " id="dobError"></span>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="father" class="block text-gray-700 text-sm mb-2 ">Father’s Name</label>
                                    <input type="text" id="father" name="father"placeholder="अपने पिता का नाम लिखें"
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
                                    <input type="text" id="mother"
                                        name="mother"placeholder="अपनी माँ का नाम लिखें"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="motherError"></span>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="mobile" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                    <input type="tel" id="mobile"
                                        name="mobile"placeholder="अपना मोबाइल नंबर लिखें"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="mobileError"></span>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="id_mark" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark
                                        of
                                        identification</label>
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
                                        <option value="ews">EWS(Economically weaker Section)</option>
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
                                    <label for="village"
                                        class="block text-gray-700 text-sm mb-2 ">Village/Town/City</label>
                                    <input type="text" id="village"
                                        name="village"placeholder="अपने गांव का नाम लिखें."
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
                                    <input type="text" id="area" name="area"
                                        placeholder="अपने एरिया का नाम लिखे"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                    <span class="error text-red-500 text-xs font-semibold " id="areaError"></span>
                                </div>
                                <div class="mb-3 items-center">
                                    <label for="pincode" class="block text-gray-700 text-sm mb-2">Pincode</label>
                                    <input type="number" id="pincode" name="pincode"
                                        placeholder="अपना पिनकोड नंबर दर्ज करें"
                                        class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded"
                                        onchange="getDistrictAndState()">
                                    <span class="error text-red-500 text-xs font-semibold " id="pincodeError"></span>
                                </div>
                                <div class="flex gap-5">
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                                        <input type="text" id="city" name="city"
                                            placeholder="अपने शहर का नाम लिखे"
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                        <span class="error text-red-500 text-xs font-semibold " id="cityError"></span>
                                    </div>
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                                        <input type="text" id="state" name="state"
                                            placeholder="अपने राज्य का नाम लिखे"
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                        <span class="error text-red-500 text-xs font-semibold " id="stateError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 flex flex-col">
                    <div class="container mx-auto font-sans ">
                        <div class="bg-gray-100 mx-4 ">
                            <div class="p-5 flex flex-col">
                                <div class="border border-gray mt-3 p-4">
                                    <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                    <hr class="h-1 rounded bg-gray-600 mb-4">
                                    <div class="flex justify-evenly mt-10">
                                        <div class="mb-3 items-center">
                                            <input type="hidden" id="id" name="user_id"
                                                value="{{ Auth::id() }}">
                                            <label for="qualification" class="block text-sm mb-2 ">Qualification</label>
                                            <input type="text" id="qualification"
                                                name="qualification"placeholder="Eg. abc chowk ..."
                                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                            <span class="error text-red-500 text-xs font-semibold "
                                                id="qualificationError"></span>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="q_state" class="block text-sm mb-2 ">State</label>
                                            <input type="text" id="q_state"
                                                name="q_state"placeholder="Eg. abc chowk ..."
                                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                            <span class="error text-red-500 text-xs font-semibold "
                                                id="q_stateError"></span>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="board" class="block text-sm mb-2 ">Board</label>
                                            <input type="text" id="board"
                                                name="board"placeholder="Eg. Sales executives needed urgently for ..."
                                                class="shadow appearance-none border py-1 px-2 w-full">
                                            <span class="error text-red-500 text-xs font-semibold "
                                                id="boardError"></span>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="passing_year" class="block text-sm mb-2 ">Year Of Passing</label>
                                            <input type="month" id="passing_year" name="passing_year"
                                                class="shadow appearance-none border py-1 px-2 w-full">
                                            <span class="error text-red-500 text-xs font-semibold "
                                                id="passing_yearError"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray mt-3 p-4">
                                    <div class="mb-3 items-center w-1/2">
                                        <label for="experience" class="block text-gray-700 text-sm mb-2">Working Experience</label>
                                        <div class="flex items-center">
                                            <input type="number" id="experience" name="experience" placeholder="" class="shadow appearance-none border py-1 px-2 w-1/6 mr-2">
                                            <span class="mr-2">Years</span>
                                        </div>
                                            <span class="error text-red-500 text-xs font-semibold" id="experienceError"></span>
                                    </div>
                                    
                                    <div class="mb-3 flex flex-col">
                                        <label for="skills" class="block text-gray-700 text-sm mb-2 ">Any Other Diploma Degree</label>
                                        <input type="text" id="skills" name="skills"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-1/4">
                                        <span class="error text-red-500 text-xs font-semibold " id="skillsError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 flex flex-col">
                    <div class="container mx-auto font-sans ">
                        <div class="p-5 flex flex-col">
                            <div class="border border-gray mt-2 p-4">
                                <h2 class="text-lg font-semibold mb-2">Essential Documents</h2>
                                <hr class="h-1 rounded bg-gray-600 mb-2">
                                <div class="mt-2">
                                    <div class="mb-4 items-center">
                                        <input type="hidden" id="id" name="user_id">
                                        <label for="photo" class="block text-sm mb-3">Upload Your Photo</label>
                                        <input type="file" id="photo" name="photo" class="appearance-none">
                                        <img id="photoPreview" src="#" alt="Photo Preview"
                                            class=" w-24 h-24 object-cover mt-2" />
                                        <p id="error-photo" class="text-red-500 text-xs font-semibold error-message"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="signature" class="block text-sm mb-3">Upload Your Signature</label>
                                        <input type="file" id="signature" name="signature">
                                        <img id="signaturePreview" src="#" alt="Signature Preview"
                                            class="w-24 h-24 object-cover mt-2" />
                                        <p id="error-signature" class="text-red-500 text-xs font-semibold error-message">
                                        </p>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="mb-4 items-center">
                                            <label for="id_proof" class="block text-sm mb-3">Upload Your Id</label>
                                            <input type="file" id="id_proof" name="id_proof">
                                            <img id="idProofPreview" src="#" alt="id Proof Preview"
                                                class=" w-24 h-24 object-cover mt-2" />
                                        </div>
                                        <div class="mb-4 items-center">
                                            <label for="id_proof_type" class="block text-sm mb-3">Choose Id Proof</label>
                                            <select name="id_proof_type" id="id_proof_type"
                                                class="border py-2 px-5 w-full rounded">
                                                <option value="">Select</option>
                                                <option value="aadhar">Aadhar Card</option>
                                                <option value="pan">Pan Card</option>
                                                <option value="dl">Driving Licence</option>
                                                <option value="voter-id">Voter Id Card</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="quali_certificate" class="block text-sm mb-3">Upload Your Latest
                                            Qualification Certificate</label>
                                        <input type="file" id="quali_certificate" name="quali_certificate">
                                        <img id="qualiCertificatePreview" src="#" alt="Quali Certificate Preview"
                                            class="w-24 h-24 object-cover mt-2" />
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="other_certificate" class="text-sm mb-3 flex">Any Other Certificate <p
                                                class="text-sm">(i.e. Computer Certificate, Skill Certificate, etc)</p>
                                        </label>
                                        <input type="file" id="other_certificate" name="other_certificate">
                                        <img id="otherCertificatePreview" src="#" alt="Other Certificate Preview"
                                            class="w-24 h-24 object-cover mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="button flex justify-center ml-10 mt-2">
                                <div class="next">
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-600 rounded px-3 py-1 text-white">Add New
                                        Candidate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function fetchCandidateDetailsAndOpenModal() {
                let userId = getIdFromUrlPath();
                $.ajax({
                    type: 'GET',
                    url: `{{url('/api/show-all/view/${userId}')}}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#id').val(response.data.candidate.id);
                        $('#name').val(response.data.candidate.name);
                        $('#gender').val(response.data.candidate.gender);
                        $('#marital').val(response.data.candidate.marital);
                        $('#preferred_lang').val(response.data.candidate.preferred_lang);
                        $('#dob').val(response.data.candidate.dob);
                        $('#father').val(response.data.candidate.father);
                        $('#email').val(response.data.candidate.email);
                        $('#religion').val(response.data.candidate.religion);
                        $('#mother').val(response.data.candidate.mother);
                        $('#mobile').val(response.data.candidate.mobile);
                        $('#community').val(response.data.candidate.community);
                        $('#village').val(response.data.candidate.village);
                        $('#landmark').val(response.data.candidate.landmark);
                        $('#area').val(response.data.candidate.area);
                        $('#pincode').val(response.data.candidate.pincode);
                        $('#state').val(response.data.candidate.state);
                        $('#city').val(response.data.candidate.city);
                        $('#id_mark').val(response.data.candidate.id_mark);
                        $('#photoPreview').attr('src', '/image/candidate/photo/' + response.data
                            .document.photo);
                        $('#signaturePreview').attr('src', '/image/candidate/signature/' + response.data
                            .document.signature);
                        $('#id_proof_type').val(response.data.document.id_proof_type);
                        $('#idProofPreview').attr('src', '/image/candidate/id_proof/' + response.data
                            .document.id_proof);
                        $('#qualiCertificatePreview').attr('src',
                            '/image/candidate/quali_certificate/' + response.data.document
                            .quali_certificate);
                        $('#otherCertificatePreview').attr('src',
                            '/image/candidate/other_certificate/' + response.data.document
                            .other_certificate);
                        $('#qualification').val(response.data.address.qualification);
                        $('#q_state').val(response.data.address.q_state);
                        $('#board').val(response.data.address.board);
                        $('#passing_year').val(response.data.address.passing_year);
                        $('#experience').val(response.data.address.experience);
                        $('#skills').val(response.data.address.skills);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching candidate details for editing:', error);
                    }
                });
            }

            // Preview the image files
            function previewImage(input, previewId) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(previewId).attr('src', e.target.result).removeClass('hidden');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#photo').change(function() {
                previewImage(this, '#photoPreview');
            });

            $('#signature').change(function() {
                previewImage(this, '#signaturePreview');
            });
            $('#id_proof').change(function() {
                previewImage(this, '#idProofPreview');
            });
            $('#quali_certificate').change(function() {
                previewImage(this, '#qualiCertificatePreview');
            });
            $('#other_certificate').change(function() {
                previewImage(this, '#otherCertificatePreview');
            });

            // Handle form submission
            $('#insertData').submit(function(e) {
                e.preventDefault();
                let userId = getIdFromUrlPath();
                if (userId) {
                    let formData = new FormData(this);
                    formData.append('user_id', userId);
                    $.ajax({
                        type: 'POST',
                        url: `{{url('/api/update-all/edit/${userId}')}}`,
                        data: formData,
                        contentType: false,
                        processData: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            swal("Success", response.message, "success");
                            $('.error').text('');
                            // $("#insertData").trigger("reset");
                            window.open("/admin/manage-candidate", "_self");
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
                } else {
                    console.error('User ID is not defined.');
                }
            });

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


            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            fetchCandidateDetailsAndOpenModal();

            // Delete Yojna with confirmation
            $(document).on('click', '.delete-btn', function() {
                let id = getIdFromUrlPath();

                // Confirm deletion
                if (confirm("Are you sure you want to delete this Candidate?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `{{url('/api/candidate/delete/${id}')}}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log('Candidate deleted successfully:', response);
                            window.location.href = "{{url('/admin/manage-candidate')}}";
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Data:', error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
