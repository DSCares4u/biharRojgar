@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg mt-2">
                    <h3 class="text-xl font-semibold mt-2">Add New Candidate</h3>
                </div>
                <form class="p-4 flex flex-col" id="addData">
                    <div class="border p-4 border-gray mt-2">
                        <h2 class="text-lg font-semibold mb-2  ">Personal Details</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="flex gap-5">
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Full Name as
                                        recorded in
                                        Matriculation(10th class) Certificate/Marks list</label>
                                    <input type="text" id="name"
                                        name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="gender" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                    <select name="gender" id="gender"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded"
                                        required>
                                        <option value="">Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="marital" class="block text-gray-700 text-sm mb-2 ">Marital
                                        Status</label>
                                    <select name="marital" id="marital"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded"
                                        required>
                                        <option value="">Select Status</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">UnMarried</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="preferred_lang" class="block text-gray-700 text-sm mb-2 ">Preferred Language</label>
                                    <select name="preferred_lang" id="preferred_lang"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded"
                                        required>
                                        <option value="">Choose Language</option>
                                        <option value="english">English</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="dob" class="block text-gray-700 text-sm mb-2 ">Date of Birth as
                                        recorded in
                                        Matriculation (10th class) Certificate/Marks</label>
                                    <input type="date" id="dob"
                                        name="dob" class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="father" class="block text-gray-700 text-sm mb-2 ">Father’s
                                        Name</label>
                                    <input type="text" id="father"
                                        name="father"placeholder="Eg. Sales executives needed urgently for ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="email" class="block text-gray-700 text-sm mb-2 ">Email
                                        Address</label>
                                    <input type="email" id="email" name="email"placeholder="Eg. abc@gmail.com"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="religion" class="block text-gray-700 text-sm mb-2 ">Religion</label>
                                    <input type="text" id="religion" name="religion"placeholder="Eg. Hindu"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="mother" class="block text-gray-700 text-sm mb-3 ">Mother’s
                                        Name</label>
                                    <input type="text" id="mother" name="mother"placeholder="Eg. abc Devi ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="mobile" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                    <input type="tel" id="mobile" name="mobile"placeholder="Eg. 7892456123"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="id_mark" class="block text-gray-700 text-sm mb-3 ">Permanent visible
                                        mark of
                                        identification </label>
                                    <input type="text" id="id_mark"
                                        name="id_mark"placeholder="Permanent visible mark of identification"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
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
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                        <option value="">Select</option>
                                        <option value="ur">UR(Unreserve)</option>
                                        <option value="sc">SC(Schedule Caste)</option>
                                        <option value="st">ST(Schedule Tribe)</option>
                                        <option value="obc">OBC(Other Backward Clases)</option>
                                        <option value="ews">EWS(Economically Weake Section)</option>
                                    </select>
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
                                        name="village" placeholder="Eg. abc nagar ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="landmark" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                    <input type="text" id="landmark"
                                        name="landmark" placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="pincode" class="block text-gray-700 text-sm mb-2 ">Pincode</label>
                                    <input type="number" id="pincode" name="pincode"placeholder="Eg. 789456"
                                        class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="flex gap-5">
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="city" class="block text-gray-700 text-sm mb-2 ">City</label>
                                        <input type="text" id="city"
                                            name="city"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                                    </div>
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="state" class="block text-gray-700 text-sm mb-2 ">State</label>
                                        <input type="text" id="state"
                                            name="state"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="border border-gray mt-3 p-4">
                        <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="flex justify-evenly gap-3">
                            <div class="mb-3 items-center">
                                <label for="qualification" class="block text-sm mb-2 ">Qualification</label>
                                <input type="text" id="qualification"
                                            name="qualification"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                            </div>
                            <div class="mb-3 items-center">
                                <label for="q_state" class="block text-sm mb-2 ">State</label>
                                <input type="text" id="q_state"
                                            name="q_state"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                            </div>
                            <div class="mb-3 items-center">
                                <label for="board" class="block text-sm mb-2 ">Board</label>
                                <input type="text" id="board"
                                    name="board"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full rounded" required>
                            </div>
                            <div class="mb-3 items-center">
                                <label for="passing_year" class="block text-sm mb-2 ">Year Of Passing</label>
                                <input type="month" id="passing_year" name="passing_year"
                                    class="shadow appearance-none border py-1 px-2 w-full rounded" required>
                            </div>
                        </div>
                    
                        <div class="mb-3  items-center">
                            <label for="experience" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                            <input type="text" id="experience" name="experience" placeholder="Eg. abc..."
                                class="shadow appearance-none border py-1 px-2 w-full rounded" required>
                        </div>
                        <div class="mb-3  items-center">
                            <label for="skills" class="block text-gray-700 text-sm mb-2 ">Skills</label>
                            <input type="text" id="skills" name="skills"placeholder="Eg. abc..."
                                class="shadow appearance-none border py-1 px-2 w-full rounded" required>
                        </div>
                    </div>
                    <div class="border border-gray mt-2 p-4">
                        <h2 class="text-lg font-semibold mb-2  ">Essential Documents</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="mt-2 mb-2">
                            <div class="mb-4 items-center">
                                <label for="photo" class="block text-sm mb-2 ">Upload Your Photo</label>
                                <input type="file" id="photo" name="photo" required>
                            </div>
                            <div class="mb-4 items-center">
                                <label for="signature" class="block text-sm mb-2 ">Upload Your Signature</label>
                                <input type="file" id="signature" name="signature" required>
                            </div>
                            <div class="flex gap-10">
                                <div class="mb-4 items-center">
                                    <label for="id_proof_type" class="block text-sm mb-2 ">Choose Id Proof</label>
                                    <select name="id_proof_type"id="id_proof_type" class="border py-2 px-5 w-3/4 rounded" required>
                                        <option value="">Select Id</option>
                                        <option value="aadhar">Aadhar Card</option>
                                        <option value="pan">Pan Card</option>
                                        <option value="dl">Driving Licence</option>
                                        <option value="v_id">Voter Id Card</option>
                                    </select>
                                </div>
                                <div class="mb-4 items-center">
                                    <label for="id_proof" class="block text-sm mb-2 ">Upload Selected Id</label>
                                    <input type="file" id="id_proof" name="id_proof" required>
                                </div>
                            </div>
                            <div class="mb-4 items-center">
                                <label for="quali_certificate" class="block text-sm mb-2 ">Upload Your Latest Qualification
                                    Certificate</label>
                                <input type="file" id="quali_certificate" name="quali_certificate" required>
                            </div>
                            <div class="mb-4 items-center">
                                <h4 for="other_certificate" class="text-sm mb-2 flex">Any Other Certificate <p
                                        class="text-sm">(i.e.
                                        Computer Certificate, Skill Certificate, etc)</p>
                                </h4>
                                <input type="file" id="other_certificate" name="other_certificate" required>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-center">
                            <button type="submit"
                                class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-2 w-1/4 rounded focus:outline-none focus:shadow-outline text-black">
                                Apply Now
                            </button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

{{-- <script>
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


    $('#addData').submit(function(e) {
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
                $("#addData").trigger("reset");
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
            })
            .catch(error => console.error('Error:', error));
    }
</script>

<script>

    $(document).ready(function() {

        function fetchJobDetailsAndOpenModal() {
            let userId = {{ auth()->user()->id }};

            $.ajax({
                type: 'GET',
                url: `/api/address/view/` + userId,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                $('#id').val(response.data.id);
                $('#qualification').val(response.data.qualification);
                $('#q_state').val(response.data.q_state);
                $('#board').val(response.data.board);
                $('#passing_year').val(response.data.passing_year);
                $('#experience').val(response.data.experience);
                $('#skills').val(response.data.skills);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Job details for editing:', error);
                }
            });
        }

        // Auto-execute the function when the page loads
        fetchJobDetailsAndOpenModal();

    });

    $('#addData').submit(function(e) {
        e.preventDefault();
        let userId = {{ auth()->user()->id }};
        let formData = {
            user_id: $('#id').val(),
            qualification: $('#qualification').val(),
            q_state: $('#q_state').val(),
            board: $('#board').val(),
            passing_year: $('#passing_year').val(),
            experience: $('#experience').val(),
            skills: $('#skills').val(),
        };
        $.ajax({
            type: 'PUT',
            url: `/api/address/edit/${userId}`,
            data: formData,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                console.error('Error updating Plan Details:', error);
            }
        });
    });

</script>

<script>
    $(document).ready(function() {
        function fetchJobDetailsAndOpenModal(userId) {
            if (userId) {
                $.ajax({
                    type: 'GET',
                    url: `/api/document/view/${userId}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.data) {
                            $('#id').val(response.data.id);
                            $('#photoPreview').attr('src','/image/candidate/photo/'+ response.data.photo);
                            $('#signaturePreview').attr('src','/image/candidate/signature/'+ response.data.signature);
                            $('#id_proof_type').val( response.data.id_proof_type);
                            $('#idProofPreview').attr('src','/image/candidate/id_proof/'+ response.data.id_proof);
                            $('#qualiCertificatePreview').attr('src','/image/candidate/quali_certificate/'+ response.data.quali_certificate);
                            $('#otherCertificatePreview').attr('src','/image/candidate/other_certificate/'+ response.data.other_certificate);
                        } else {
                            console.error('No data found in response.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching document details for editing:', error);
                    }
                });
            } else {
                console.error('User ID is not defined.');
            }
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

        // Auto-execute the function when the page loads
        let userId = {{ auth()->user()->id }};
        fetchJobDetailsAndOpenModal(userId);

        // Handle form submission
        $('#addData').submit(function(e) {
            e.preventDefault();            
            let userId = {{ auth()->user()->id }};            
            if (userId) {
                let formData = new FormData(this); 
                $.ajax({
                    type: 'POST',
                    url: `/api/document/edit/${userId}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $("#addData").trigger("reset");
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
            } else {
                console.error('User ID is not defined.');
            }
        });
    });
</script>
 --}}

{{-- <script>
    $(document).ready(function() {
    $("#addData").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        // Send AJAX request
        $.ajax({
            type: "POST",
            url: "{{ route('register.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('candidate.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('address.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('document.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('document.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#addData").trigger("reset");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
    });
});

</script> --}}
<script>
//     $(document).ready(function() {
//     $("#addData").submit(function(e) {
//         e.preventDefault();
//         var formData = new FormData(this);

//         // First AJAX request to register the user
//         $.ajax({
//             type: "POST",
//             url: "{{ route('register.store') }}",
//             data: formData,
//             dataType: "JSON",
//             contentType: false,
//             cache: false,
//             processData: false,
//             success: function(response) {
//                 if (response.status === 200) {
//                     var userId = response.data.user_id; // Assuming the response contains the user_id

//                     // Adding user_id to formData for the next requests
//                     formData.append('user_id', userId);

//                     // Second AJAX request to store candidate data
//                     $.ajax({
//                         type: "POST",
//                         url: "{{ route('candidate.store') }}",
//                         data: formData,
//                         dataType: "JSON",
//                         contentType: false,
//                         cache: false,
//                         processData: false,
//                         success: function(response) {
//                             // Handle success
//                         },
//                         error: function(xhr, status, error) {
//                             swal("Error", xhr.responseText, "error");
//                         }
//                     });

//                     // Third AJAX request to store address data
//                     $.ajax({
//                         type: "POST",
//                         url: "{{ route('address.store') }}",
//                         data: formData,
//                         dataType: "JSON",
//                         contentType: false,
//                         cache: false,
//                         processData: false,
//                         success: function(response) {
//                             // Handle success
//                         },
//                         error: function(xhr, status, error) {
//                             swal("Error", xhr.responseText, "error");
//                         }
//                     });

//                     // Fourth AJAX request to store document data
//                     $.ajax({
//                         type: "POST",
//                         url: "{{ route('document.store') }}",
//                         data: formData,
//                         dataType: "JSON",
//                         contentType: false,
//                         cache: false,
//                         processData: false,
//                         success: function(response) {
//                             $("#addData").trigger("reset");
//                         },
//                         error: function(xhr, status, error) {
//                             swal("Error", xhr.responseText, "error");
//                         }
//                     });
//                 }
//             },
//             error: function(xhr, status, error) {
//                 swal("Error", xhr.responseText, "error");
//             }
//         });
//     });
// });

$(document).ready(function() {
    $("#addData").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        // First AJAX request to register the user
        $.ajax({
            type: "POST",
            url: "{{ route('register.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.status === 200) {
                    var userId = response.data.user_id; // Assuming the response contains the user_id

                    // Adding user_id to formData for the next requests
                    formData.append('user_id', userId);

                    // Second AJAX request to store candidate data
                    $.ajax({
                        type: "POST",
                        url: "{{ route('candidate.store') }}",
                        data: formData,
                        dataType: "JSON",
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            // Third AJAX request to store address data
                            $.ajax({
                                type: "POST",
                                url: "{{ route('address.store') }}",
                                data: formData,
                                dataType: "JSON",
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(response) {
                                    // Fourth AJAX request to store document data
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('document.store') }}",
                                        data: formData,
                                        dataType: "JSON",
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: function(response) {
                                            $("#addData").trigger("reset");
                                        },
                                        error: function(xhr, status, error) {
                                            swal("Error", xhr.responseText, "error");
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    swal("Error", xhr.responseText, "error");
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            swal("Error", xhr.responseText, "error");
                        }
                    });
                } else {
                    swal("Error", response.message, "error");
                }
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
    });
});


</script>

    
@endsection
