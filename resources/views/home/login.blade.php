@extends('home.homebase')
@section('title', 'Login')
@section('content')

    <div class=" bg-gradient-to-b from-[#0E3B4C] to-black min-h-screen max-w-screen px-4 py-8">
        <div class="flex flex-col-reverse lg:flex-row">
            <!-- Left Section -->
            <div class="lg:w-7/12 mx-auto lg:mx-8 mt-10">
                <h5 class="font-bold text-2xl sm:text-3xl text-white mt-5 text-center lg:text-left">TASKINN LOGIN</h5>
                <p class="font-semibold text-base md:text-lg text-white mt-5 text-center lg:text-left">Unlock the flavors of
                    success with RegisterKaro's. Get FSSAI Registration service - your recipe for food business excellence!
                </p>
                <ul class="mt-6 space-y-4">
                    <li class="text-white text-base sm:text-lg"><i
                            class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Initial
                        consultation to determine FSSAI registration requirements</li>
                    <li class="text-white text-base sm:text-lg"><i
                            class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Assistance with the
                        application process</li>
                    <li class="text-white text-base sm:text-lg"><i
                            class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Guidance on
                        compliance with FSSAI regulations</li>
                    <li class="text-white text-base sm:text-lg"><i
                            class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Support in
                        obtaining necessary approvals</li>
                </ul>
            </div>

            <!-- Right Section -->
            <div class="lg:w-5/12 mt-8 lg:mt-24 mx-auto lg:mx-0">
                <div class="shadow-md rounded pt-5 px-8 pb-8 bg-white max-w-md mx-auto">
                    <h1 class="text-xl sm:text-2xl font-medium mb-4  text-black">Login</h1>
                    <p class="text-base font-normal text-gray-800">Login to Taskinn Solutions</p>
                    <form id="loginUser">
                        @csrf
                        <div id="login-fields">
                            <div class="mb-4">
                                <label for="email" class="block text-white text-sm font-semibold mb-2">Email</label>
                                <input id="email" type="email" name="email"
                                    class="shadow appearance-none font-normal border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-black focus:shadow-outline bg-gray-100"
                                    placeholder="Enter your email">
                                <p id="email-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-white text-sm font-semibold mb-2">Role</label>
                                <select name="is_hirer" id="is_hirer"
                                    class="shadow appearance-none font-normal bg-gray-100 border rounded w-full py-2 px-3 text-gray-400 leading-tight focus:outline-black focus:shadow-outline">
                                    <option value="">Select Type</option>
                                    <option value="0">Candidate</option>
                                    <option value="1">Hirer</option>
                                </select>
                                <p id="type-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-center justify-between mt-8">
                                <a href="{{ url('/register') }}"
                                    class="text-black hover:text-blue-600 font-normal hover:underline rounded focus:outline-none focus:shadow-outline">Don't
                                    have an Account? Create now</a>
                                <button type="button" id="sendOtpButton"
                                    class="bg-white outline outline-[#0E3B4C] hover:bg-[#0E3B4C] hover:text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto mb-4 sm:mb-0">
                                    Login now
                                </button>
                            </div>
                        </div>

                        <div id="otp-fields" class="hidden">
                            <div class="mb-4">
                                <label for="otp" class="block text-white text-sm font-semibold mb-2">Enter Your
                                    OTP</label>
                                <input id="otp" type="number" name="otp"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your Otp">
                                <p id="otp-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="mb-4 flex justify-center">
                                <button type="submit"
                                    class="bg-green-400 hover:bg-green-300 font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto">
                                    Verify and Login
                                </button>
                            </div>
                        </div>

                    </form>
                    <div id="loader" style="display: none;">
                        <img src="{{ asset('loader.gif') }}" alt="Loading..." />
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#sendOtpButton').on('click', function(e) {
                e.preventDefault();
                $('#loader').show();

                const email = $('#email').val().trim();

                let formData = new FormData();
                formData.append('email', email);

                // Add CSRF token to the headers
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Send OTP Request
                $.ajax({
                    type: "POST",
                    url: "{{ route('login.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $('#login-fields').addClass('hidden');
                        $('#otp-fields').removeClass('hidden');
                        $('#loader').hide();
                        // alert("Success: " + response.message);
                        swal("Success", response.message, "success");
                    },
                    error: function(xhr, status, error) {
                        $('#loader').hide();
                        // alert(xhr.responseText);
                         swal("Error", xhr.responseText, "error");
                    }
                });
            });

            // Handle OTP Verification
            $('#loginUser').on('submit', function(e) {
                e.preventDefault();
                $('#loader').show();
                const otp = $('#otp').val().trim();
                const email = $('#email').val().trim();

                // Validate OTP
                if (!otp) {
                    swal("Error", "OTP is required!", "error");
                    return;
                }

                let formData = new FormData();
                formData.append('otp', otp);
                formData.append('email', email);

                // Add CSRF token to the headers
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Verify OTP Request
                $.ajax({
                    type: "POST",
                    url: "{{ route('login.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        // alert("Success: " + response.message);
                        $('#loader').hide();
                        if (response.isHirer) { // Ensure `isHirer` is returned in the response
                            window.location.href = "{{ url('/home-hirer') }}";
                        } else {
                            window.location.href = "{{ url('/profile') }}";
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#loader').hide();
                        // alert(xhr.responseText);
                        swal("Error", xhr.responseText, "error");
                    }
                });
            });
        });
    </script>

@endsection
