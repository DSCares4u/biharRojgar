@extends('home.homebase')
@section('content')
    <div id="printable-area" class="container mx-auto w-[65%] p-8 mt-3 bg-white shadow-lg border border-gray-400">
        <h1 class="text-3xl font-extrabold text-center mb-4 text-gray-900">माता कलावती देवी फाउंडेशन</h1>
        <p class="text-xl text-center mb-4 underline text-gray-700">JOB APPLICATION FORM</p>
        <!-- Personal Details -->
        <h2 class="text-2xl underline font-semibold mb-4 text-gray-800">Personal Details / व्यक्तिगत विवरण</h2>
        <div class="flex justify-between items-start">
            <div class="w-3/4 space-y-4">
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Name (As per Aadhar Card) / नाम (आधार कार्ड
                        अनुसार) :</label>
                    <p class="w-1/4 capitalize text-sm" id="name">John Doe</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Father's Name / पिता का नाम :</label>
                    <p class="w-2/4 capitalize text-sm" id="father">Richard Roe</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Mother's Name / माता का नाम :</label>
                    <p class="w-2/4 capitalize text-sm" id="mother">Jane Doe</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">D.O.B. / जन्म तिथि :</label>
                    <p class="w-2/4 capitalize text-sm" id="dob">01/01/1990</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Gender / लिंग :</label>
                    <p class="w-2/4 capitalize text-sm" id="gender">Male</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Marital Status / वैवाहिक स्थिति :</label>
                    <p class="w-2/4 capitalize text-sm" id="marital">Single</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Religion / धर्म :</label>
                    <p class="w-2/4 capitalize text-sm" id="religion">Hindu</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Category / वर्ग :</label>
                    <p class="w-2/4 capitalize text-sm" id="community">General</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Mobile No. / मोबाइल नं :</label>
                    <p class="w-2/4 capitalize text-sm" id="mobile">9876543210</p>
                </div>
                <div class="flex w-full">
                    <label class="w-2/4 font-medium text-gray-700 text-sm">Email ID / ईमेल आईडी :</label>
                    <p class="w-2/4 capitalize text-sm" id="email">john.doe@example.com</p>
                </div>
            </div>
            <div class="photo w-1/4 flex justify-center">
                <img src="/image/photo/1715085122.jpg" class="border border-gray-500 w-32 h-32  shadow-lg"
                    alt="Applicant Photo">
            </div>
        </div>

        <!-- Address Details -->
        <h2 class="text-2xl underline font-semibold mt-4 mb-3 text-gray-800">Address Details / पता का विवरण :</h2>
        <div class="w-3/4 space-y-4">
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Landmark :</label>
                <p class="w-2/4 capitalize text-sm" id="landmark">Near Park</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Village / गांव :</label>
                <p class="w-2/4 capitalize text-sm" id="village">Springfield</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Post Office / डाक घर :</label>
                <p class="w-2/4 capitalize text-sm" id="area">Main PO</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">PIN Code / पिन कोड :</label>
                <p class="w-2/4 capitalize text-sm" id="pincode">123456</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">District / जिला :</label>
                <p class="w-2/4 capitalize text-sm" id="city">Metro City</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">State / राज्य :</label>
                <p class="w-2/4 capitalize text-sm" id="state">Example State</p>
            </div>
        </div>

        <!-- Educational Details -->
        <h2 class="text-2xl underline font-semibold mt-4 mb-3 text-gray-800">Educational Details / शैक्षिक विवरण</h2>
        <div class="w-3/4 space-y-4">
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Last Qualification / अंतिम शिक्षा :</label>
                <p class="w-2/4 capitalize text-sm" id="qualification">B.Sc. in Computer Science</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Board / University :</label>
                <p class="w-2/4 capitalize text-sm" id="board">ABC University</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Experience :</label>
                <p class="w-2/4 capitalize text-sm" id="experience">5 Years in Software Development</p>
            </div>
            <div class="flex w-full">
                <label class="w-2/4 font-medium text-gray-700 text-sm">Skills :</label>
                <p class="w-2/4 capitalize text-sm" id="skills">JavaScript, React, Node.js</p>
            </div>
        </div>
    </div>
    <div class="text-center flex justify-evenly mt-5">
        <a href="/add-candidate" id="editButton"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
        </a>
        <button onclick="window.print()" class=" bg-blue-500 text-white rounded-md px-2 hover:bg-blue-600">Print
            Confirmation</button>
        <form action="" id="applySarkariJob">
            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Proceed To Payment
            </button>
        </form>
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
                        $('#name').text(response.data.name);
                        $('#email').text(response.data.email);
                        $('#mother').text(response.data.mother);
                        $('#father').text(response.data.father);
                        $('#dob').text(response.data.dob);
                        $('#mobile').text(response.data.mobile);
                        $('#gender').text(response.data.gender);
                        $('#marital').text(response.data.marital);
                        $('#id_mark').text(response.data.id_mark);
                        $('#preferred_lang').text(response.data.preferred_lang);
                        $('#religion').text(response.data.religion);
                        $('#community').text(response.data.community);
                        $('#village').text(response.data.village);
                        $('#landmark').text(response.data.landmark);
                        $('#pincode').text(response.data.pincode);
                        $('#area').text(response.data.area);
                        $('#city').text(response.data.city);
                        $('#state').text(response.data.state);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: `/api/address/view/` + userId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#qualification').text(response.data.qualification);
                        $('#q_state').text(response.data.q_state);
                        $('#board').text(response.data.board);
                        $('#passing_year').text(response.data.passing_year);
                        $('#experience').text(response.data.experience);
                        $('#skills').text(response.data.skills);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: `/api/document/view/` + userId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#id').val(response.data.id);
                        $('#photo').val(response.data.photo);
                        $('#signature').val(response.data.signature);
                        $('#id_proof_type').val(response.data.id_proof_type);
                        $('#id_proof').val(response.data.id_proof);
                        $('#quali_certificate').val(response.data.quali_certificate);
                        $('#other_certificate').val(response.data.other_certificate);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

            // Function for taking id from URL
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            // applying for job
            $("#applySarkariJob").submit(function(e) {
                e.preventDefault();

                // Get the job ID from the URL
                var jobId = getIdFromUrlPath();

                // Append the job ID to the form data
                var formData = new FormData(this);
                formData.append('job_id', jobId);

                $.ajax({
                    type: "POST",
                    url: "{{ route('sarkari.job.apply.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("success", response.message, "success");
                        $("#applySarkariJob").trigger("reset");
                        setTimeout(function() {
                            window.open("/sarkari-job/confirm", "_self");
                        }, 3000); // Redirect after 3 seconds
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 409) {
                            swal("error", "You have already applied for this job.", "error");
                        } else if (xhr.status === 403) {
                            // Handle missing candidate profile or documents
                            var message = xhr.responseJSON.message;
                            swal("error", message, "error").then(function() {
                                // Redirect based on the message
                                if (message.includes("candidate profile")) {
                                    window.open("/add-candidate", "_self");
                                } else if (message.includes("add Qualification")) {
                                    window.open("/address", "_self");
                                } else if (message.includes("required documents")) {
                                    window.open("/documents", "_self");
                                }
                            });
                        } else {
                            var errors = xhr.responseJSON.error;
                            $.each(errors, function(key, value) {
                                $("#" + key + "-error").text(value[0]).removeClass(
                                    "hidden");
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
