@extends('home.homebase')
@section('title', 'Job Application Form')
@section('content')

    <div class="container mb-20 flex flex-col justify-center mx-auto">
        <div id="printable-area" class="container w-full lg:w-[70%] mx-auto bg-blue-50 shadow-lg border border-gray-400">
            <h1 class="text-xl sm:text-3xl font-bold text-center mb-1 text-white bg-teal-500 p-2">माता कलावती देवी फाउंडेशन
            </h1>
            <p class="text-lg sm:text-xl text-center underline text-white bg-blue-500 p-2">JOB APPLICATION FORM</p>

            <div class="p-4">
                <!-- Personal Details -->
                <h2 class="text-lg md:text-xl underline font-semibold mb-4 text-gray-800">Personal Details / व्यक्तिगत विवरण
                </h2>
                <div class="flex flex-col-reverse sm:flex-row justify-between items-start">
                    <div class="md:w-full  space-y-4 ">
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium text-gray-700 text-sm">1. Name (As per Aadhar Card) / नाम (आधार
                                कार्ड अनुसार) :</label>
                            <p class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="name"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">2. Father's Name / पिता का नाम
                                :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="father"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">3. Mother's Name / माता का नाम
                                :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="mother"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">4. D.O.B. / जन्म तिथि :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="dob"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">5. Gender / लिंग :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="gender"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">6. Marital Status / वैवाहिक स्थिति
                                :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="marital"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">7. Religion / धर्म :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="religion"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">8. Category / वर्ग :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="community"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">9. Mobile No. / मोबाइल नं :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="mobile"></p>
                        </div>
                        <div class="flex w-full">
                            <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">10. Email ID / ईमेल आईडी :</label>
                            <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                                id="email"></p>
                        </div>
                    </div>
                    {{-- <div class="photo  flex items-center mb-5 justify-center mt-4 sm:mt-0">
                        <img src="{{ asset('/image/photo/1715085122.jpg') }}"
                            class="border border-gray-500 w-32 h-32 shadow-lg" alt="Applicant Photo">
                    </div> --}}
                </div>

                <!-- Address Details -->
                <h2 class="text-lg md:text-xl underline font-semibold mt-4 mb-3 text-gray-800">Address Details / पता का
                    विवरण</h2>
                <div class="md:w-full space-y-4">
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">11. Landmark :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="landmark"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">12. Village / गांव :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="village"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">13. Post Office / डाक घर :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="area"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">14. PIN Code / पिन कोड :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="pincode"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">15. District / जिला :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="city"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">16. State / राज्य :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="state"></p>
                    </div>
                </div>

                <!-- Educational Details -->
                <h2 class="text-lg md:text-xl underline font-semibold mt-4 mb-3 text-gray-800">Educational Details / शैक्षिक
                    विवरण</h2>
                <div class="w-full  space-y-4">
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">18. Last Qualification / अंतिम शिक्षा
                            :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="qualification"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">19. Board / University :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="board"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">20. Experience :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="experience"></p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">21. Skills :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"
                            id="skills"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center flex flex-col sm:flex-row justify-evenly mt-5 mb-4">
            <a href="{{ url('/add-candidate') }}" id="editButton"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 sm:mb-0">
                Edit
            </a>
            <button onclick="window.print()"
                class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 mb-4 sm:mb-0">Print
                Confirmation</button>
            <form action="" id="applySarkariJob" class="w-full sm:w-auto">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full sm:w-auto">
                    Apply Now
                </button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function fetchJobDetailsAndOpenModal() {
                let userId = {{ auth()->user()->id }};
                $.ajax({
                    type: 'GET',
                    url: `{{ url('/api/candidate/view/${userId}') }}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (!response.data || $.isEmptyObject(response.data)) {
                            // Redirect to the add-candidate page if data is missing
                            window.location.href = `{{ url('/add-candidate') }}`;
                            return;
                        }
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
                        window.location.href = `{{ url('/add-candidate') }}`;
                        console.error('Error fetching Job details for editing:', error);
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: `{{ url('/api/address/view/${userId}') }}`,
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
                    url: `{{ url('/api/document/view/${userId}') }}`,
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

                let userId = {{ auth()->user()->id }};
                // Append the job ID to the form data
                var formData = new FormData(this);
                formData.append('sarkari_job_id', jobId);
                formData.append('user_id', userId);

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
