@extends('home.homebase')
@section('content')
    <div class="container mx-auto p-8 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-center mb-4">माता कलावती देवी फाउंडेशन</h1>
        <p class="text-center mb-4 underline">JOB APPLICATION FORM</p>
            <!-- Personal Details -->
            <h2 class="text-lg underline font-semibold mb-2">Personal Details / व्यक्तिगत विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium text-sm mt-1">Name (As per Aadhar Card) / नाम (आधार कार्ड अनुसार)</label>
                    <p class="w-full border border-gray-300 capitalize p-2 rounded-md text-sm mt-2" id="name"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Father's Name / पिता का नाम</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="father"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Mother's Name / माता का नाम</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="mother"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">D.O.B. / जन्म तिथि</label>
                    <p class="w-full border border-gray-300 p-2 rounded-md text-sm mt-2" id="dob"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Gender / लिंग</label>
                    <p class="w-full border border-gray-300 p-2 rounded-md capitalize text-sm mt-2" id="gender"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Marital Status / वैवाहिक स्थिति</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="marital"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Religion / धर्म</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="religion"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Category / वर्ग</label>
                    <p class="w-full border border-gray-300 capitalize p-2 rounded-md text-sm mt-2" id="community"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Mobile No. / मोबाइल नं</label>
                    <p class="w-full border border-gray-300 p-2 rounded-md text-sm mt-2" id="mobile"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Email ID / ईमेल आईडी</label>
                    <p class="w-full border border-gray-300 p-2 lowercase rounded-md text-sm mt-2" id="email"></p>
                </div>
            </div>
    
            <!-- Address Details -->
            <h2 class="text-lg underline font-semibold mt-4 mb-1">Address Details / पता का विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium text-sm mt-1">Landmark</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="landmark"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Village / गांव</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="village"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Post Office / डाक घर</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="area"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">District / जिला</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="city"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">State / राज्य</label>
                    <p class="w-full border border-gray-300 p-2 capitalize rounded-md text-sm mt-2" id="state"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">PIN Code / पिन कोड</label>
                    <p class="w-full border border-gray-300 p-2 rounded-md text-sm mt-2" id="pincode"></p>
                </div>
            </div>
    
            <!-- Educational Details -->
            <h2 class="text-lg underline font-semibold mt-4 mb-2">Educational Details / शैक्षिक विवरण</h2>
            <div class="mt-2">
                <div>
                    <label class="block font-medium text-sm mt-1">Last Qualification / अंतिम शिक्षा</label>
                    <p class="w-1/2 border border-gray-300 p-2 text-sm mt-2 capitalize rounded-md" id="qualification"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Board / University</label>
                    <p class="w-1/2 border border-gray-300 p-2 text-sm mt-2 capitalize rounded-md" id="board"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Experience</label>
                    <p class="w-1/2 border border-gray-300 p-2 text-sm mt-2 capitalize rounded-md" id="experience"></p>
                </div>
                <div>
                    <label class="block font-medium text-sm mt-1">Skills</label>
                    <p class="w-1/2 border border-gray-300 p-2 text-sm mt-2 capitalize rounded-md" id="skills"></p>
                </div>
            </div>
        <div class="text-center flex justify-evenly mt-5">
            <a href="/add-candidate" id="editButton"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Edit
            </a>
            <button onclick="window.print()"
                class=" bg-blue-500 text-white rounded-md px-2 hover:bg-blue-600">Print
                Confirmation</button>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Proceed To Payment
            </button>
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
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

            // applying for job

            $("#applyJob").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
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
                        $("#applyJob").trigger("reset");
                        window.open("/sarkari-job/confirm", "_self")
                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.error;
                        $.each(errors, function(key, value) {
                            $("#" + key + "-error").text(value[0]).removeClass(
                                "hidden");
                        });
                    }
                })
            });
        });
    </script>


    @endsection


