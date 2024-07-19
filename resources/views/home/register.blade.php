@extends('home.homebase')
@section('title', 'Registration')
@section('content')
    {{-- <div class="container bg-[#273c75] h-screen">
        <div class="flex ">
            <div class="w-7/12 mx-8 mt-10">
                <h5 class="font-bold text-3xl text-white mt-5">FSSAI REGISTRATION</h5>
                <p class="font-semibold text-2xl text-white mt-5">Unlock the flavors of success with RegisterKaro's. Get
                    FSSAI Registration service - your recipe for food business excellence!</p>
                <ul>
                    <li class="mt-5 text-white text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-xl"></i>Initial consultation to determine FSSAI registration requirements
                    </li>
                    <li class="mt-5 text-white text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-xl"></i>Initial consultation to determine FSSAI registration requirements
                    </li>
                    <li class="mt-5 text-white text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-xl"></i>Initial consultation to determine FSSAI registration requirements
                    </li>
                    <li class="mt-5 text-white text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-xl"></i>Initial consultation to determine FSSAI registration requirements
                    </li>
                </ul>
            </div>
            <div class="w-5/12 mt-24">
                <div class=" shadow-md rounded pt-5 px-8 pb-8 mb-4 w-full max-w-md bg-[#006266]">
                    <h1 class="text-2xl font-bold mb-4 text-center text-white">Register</h1>
                    <form method="POST" id="registerUser">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-white text-sm font-semibold mb-2">Name</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"
                                autocomplete="name" autofocus
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p id="name-error" class="text-red-500 text-xs hidden"></p>
                        </div>

                        <div class="mb-4">
                            <label for="mobile" class="block text-white text-sm font-semibold mb-2">Mobile No.</label>
                            <input id="mobile" type="tel" name="mobile"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p id="mobile-error" class="text-red-500 text-xs  hidden"></p>
                        </div>
                        <div class="mb-4" id="otpSection" style="display:none;">
                            <label for="otp" class="block text-gray-700 font-bold mb-1">Enter Your OTP:</label>
                            <input type="text" id="otp" name="otp"
                                class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                placeholder="Enter your OTP">
                            <button type="button"
                                id="verifyOTP"class="mt-2 w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Verify
                                OTP</button>
                        </div>
                        <div class="flex items-center justify-between mt-8">
                            <button type="submit"
                            class="bg-[#ffa801] hover:bg-[#ffa601c0] font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Register
                            </button>
                            <a href="/otp/login"
                                class=" hover:text-white font-bold rounded focus:outline-none focus:shadow-outline">Already
                                have an Account ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <div class=" bg-[#273c75] min-h-screen max-w-screen px-4 py-8">
    <div class="flex flex-col-reverse lg:flex-row">
        <!-- Left Section -->
        <div class="lg:w-7/12 mx-auto lg:mx-8 mt-10">
            <h5 class="font-bold text-2xl sm:text-3xl text-white mt-5 text-center lg:text-left">FSSAI REGISTRATION</h5>
            <p class="font-semibold text-base md:text-lg text-white mt-5 text-center lg:text-left">Unlock the flavors of success with RegisterKaro's. Get FSSAI Registration service - your recipe for food business excellence!</p>
            <ul class="mt-6 space-y-4">
                <li class="text-white text-base sm:text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Initial consultation to determine FSSAI registration requirements</li>
                <li class="text-white text-base sm:text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Assistance with the application process</li>
                <li class="text-white text-base sm:text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Guidance on compliance with FSSAI regulations</li>
                <li class="text-white text-base sm:text-lg"><i class="fa-regular fa-square-check mr-3 text-green-400 text-sm md:text-xl"></i>Support in obtaining necessary approvals</li>
            </ul>
        </div>

        <!-- Right Section -->
        <div class="lg:w-5/12 mt-8 lg:mt-24 mx-auto lg:mx-0">
            <div class="shadow-md rounded pt-5 px-8 pb-8 bg-[#006266] max-w-md mx-auto">
                <h1 class="text-xl sm:text-2xl font-bold mb-4 text-center text-white">Register</h1>
                <form method="POST" id="registerUser">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-white text-sm font-semibold mb-2">Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                            autocomplete="name" autofocus
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <p id="name-error" class="text-red-500 text-xs hidden"></p>
                    </div>

                    <div class="mb-4">
                        <label for="mobile" class="block text-white text-sm font-semibold mb-2">Mobile No.</label>
                        <input id="mobile" type="tel" name="mobile"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <p id="mobile-error" class="text-red-500 text-xs hidden"></p>
                    </div>

                    <div class="mb-4" id="otpSection" style="display:none;">
                        <label for="otp" class="block text-gray-700 font-bold mb-1">Enter Your OTP:</label>
                        <input type="text" id="otp" name="otp"
                            class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your OTP">
                        <button type="button"
                            id="verifyOTP" class="mt-2 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Verify OTP</button>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between mt-8">
                        <button type="submit"
                            class="bg-[#ffa801] hover:bg-[#ffa601c0] font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full sm:w-auto mb-4 sm:mb-0">
                            Register
                        </button>
                        <a href="/otp/login"
                            class="text-white hover:text-gray-300 font-bold rounded focus:outline-none focus:shadow-outline">Already have an Account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function() {

            //insert application details

            $("#registerUser").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('register.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#registerUser").trigger("reset");
                        window.open("/otp/login", "_self")
                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.error;
                        $.each(errors, function(key, value) {
                            $("#" + key + "-error").text(value[0]).removeClass(
                            "hidden");
                        });
                    }
                })
            })
        });
    </script>
@endsection
