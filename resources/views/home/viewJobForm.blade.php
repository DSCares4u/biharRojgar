@extends('home.homebase')
@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md mx-auto w-full max-w-md">
        <form action="" id="applyJob">
            <h2 class="text-2xl font-bold mb-6 text-center">Personal Information</h2>
            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Candidate Name</label>
                <div id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="father" class="block text-gray-700 text-sm font-bold mb-2">Father’s Name</label>
                <div id="father"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="mother" class="block text-gray-700 text-sm font-bold mb-2">Mother’s Name</label>
                <div id="mother"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date Of Birth</label>
                <div id="dob"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <div id="email"
                    class="shadow lowercase appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <div id="mobile"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                <div id="gender"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="marital" class="block text-gray-700 text-sm font-bold mb-2">Marital status</label>
                <div id="marital"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="id_mark" class="block text-gray-700 text-sm font-bold mb-2">Identificatiion Mark</label>
                <div id="id_mark"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="preferred_lang" class="block text-gray-700 text-sm font-bold mb-2">Preferred Language</label>
                <div id="preferred_lang"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="religion" class="block text-gray-700 text-sm font-bold mb-2">Religion</label>
                <div id="religion"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="community" class="block text-gray-700 text-sm font-bold mb-2">Community</label>
                <div id="community"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="village" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <div id="village"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="landmark" class="block text-gray-700 text-sm font-bold mb-2">Landmark</label>
                <div id="landmark"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="area" class="block text-gray-700 text-sm font-bold mb-2">Area</label>
                <div id="area"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="pincode" class="block text-gray-700 text-sm font-bold mb-2">Pincode</label>
                <div id="pincode"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                <div id="city"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="state" class="block text-gray-700 text-sm font-bold mb-2">State</label>
                <div id="state"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="text-center flex justify-between">
                <a href="/add-candidate" id="editButton"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Proceed To Payment
                </button>
            </div>
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
