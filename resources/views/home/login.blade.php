@extends('home.homebase')
@section('title', 'Login')
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

    <div class=" bg-[#273c75] min-h-screen max-w-screen px-4 py-8">
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
                <div class="shadow-md rounded pt-5 px-8 pb-8 bg-[#006266] max-w-md mx-auto">
                    <h1 class="text-xl sm:text-2xl font-bold mb-4 text-center text-white">Login</h1>
                    <form id="loginUser">
                        @csrf
                        <div id="login-fields">
                            <div class="mb-4">
                                <label for="email" class="block text-white text-sm font-semibold mb-2">Email</label>
                                <input id="email" type="email" name="email"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter your email">
                                <p id="email-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-white text-sm font-semibold mb-2">Role</label>
                                <select name="type" id="type"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Select Type</option>
                                    <option value="candidate">Candidate</option>
                                    <option value="hirer">Hirer</option>
                                </select>
                                <p id="type-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="mb-4 flex justify-center">
                                <button type="button" id="sendOtpButton"
                                    class="bg-green-400 hover:bg-green-300 font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto">
                                    Send OTP
                                </button>
                            </div>
                        </div>

                        <div id="otp-fields" class="hidden">
                            <div class="mb-4">
                                <label for="otp" class="block text-white text-sm font-semibold mb-2">Enter Your
                                    OTP</label>
                                <input id="otp" type="number" name="otp"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p id="otp-error" class="text-red-500 text-xs hidden"></p>
                            </div>
                            <div class="mb-4 flex justify-center">
                                <button type="submit"
                                    class="bg-green-400 hover:bg-green-300 font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto">
                                    Verify and Login
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center justify-between mt-8">

                            <a href="{{ url('/register') }}"
                                class="text-white hover:text-gray-300 font-bold rounded focus:outline-none focus:shadow-outline">Don't
                                have an Account?</a>
                            <button type="submit"
                                class="bg-[#ffa801] hover:bg-[#ffa601c0] font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto mb-4 sm:mb-0">
                                Login now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#sendOtpButton').on('click', function(e) {
                e.preventDefault();

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
                        if (response.success) {
                            // Hide registration fields and show OTP fields
                            $('#login-fields').addClass('hidden');
                            $('#otp-fields').removeClass('hidden');
                            swal("Success", response.message, "success");
                        } else {
                            swal("Error", response.message, "error");
                        }
                    },
                    error: function(xhr) {
                        swal("Error", xhr.responseJSON?.message || "Something went wrong!",
                            "error");
                    }
                });
            });

            // Handle OTP Verification
            $('#loginUser').on('submit', function(e) {
                e.preventDefault();

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
                        if (response.success) {
                            swal("Success", response.message, "success").then(() => {
                                window.location.reload();
                            });
                        } else {
                            swal("Error", response.message, "error");
                        }
                    },
                    error: function(xhr) {
                        swal("Error", xhr.responseJSON?.message || "Something went wrong!",
                            "error");
                    }
                });
            });
        });
    </script>

@endsection
