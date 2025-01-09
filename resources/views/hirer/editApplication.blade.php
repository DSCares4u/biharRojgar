@extends('hirer.hirerBase')
@section('title', 'Edit Job Post')
@section('content')

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6',
                });
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Whoops! Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33',
                });
            });
        </script>
    @endif

    {{-- <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-md rounded-md">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Edit Job Posting Form</h2>
        <form action="{{ url('/hirer/application/edit/' . $data->id)}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="profile" class="block text-sm font-medium text-gray-700">Profile</label>
                <input type="text" id="profile" value="{{$data->role->profile }}" name="profile"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Enter profile name">
                @error('profile')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div> --}}

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

                <div class="max-w-4xl mx-auto bg-white shadow-md rounded-md p-6 mt-5">
                    <!-- Header -->
                    <div class="text-center mb-6">
                        <h1 class="text-lg font-bold uppercase">Uploaded Documents</h1>
                    </div>

                    <!-- Upload Section -->
                    <div class="grid grid-cols-2 gap-8">
                        <!-- Uploaded Photo -->
                        <div>
                            <div class="border border-gray-300 rounded-md p-4 flex flex-col items-center">
                                <div
                                    class="w-24 h-32 border border-gray-400 rounded-md flex items-center justify-center bg-gray-50">
                                    <img id="" src="{{ asset('image/candidate/photo/' . $data->photo) }}"
                                        alt="Photo" class="w-24 h-24 object-cover" />
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">
                                Passport size Photograph
                            </p>
                        </div>
                        <div>
                            <div class="border border-gray-300 rounded-md p-4 flex flex-col items-center">
                                <div
                                    class="w-24 h-32 border border-gray-400 rounded-md flex items-center justify-center bg-gray-50">
                                    <img id="" src="{{ asset('image/candidate/photo/' . $data->photo) }}"
                                        alt="Photo" class="w-24 h-24 object-cover" />
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">
                                Uploaded Resume
                            </p>
                        </div>

                        <!-- Uploaded Signature -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function fetchJobDetailsAndOpenModal() {
                let userId = {{ $data->user->id }};
                $.ajax({
                    type: 'GET',
                    url: `{{ url('/api/candidate/view/${userId}') }}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (!response.data || $.isEmptyObject(response.data)) {
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
                        // if (response.data.name == '') {
                        window.location.href = `{{ url('/add-candidate') }}`;
                        // }
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
                        $('#photo').attr('src', '/image/candidate/photo/' + response.data.photo);
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
        });
    </script>

@endsection
