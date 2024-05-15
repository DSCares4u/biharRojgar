@extends('home.homebase')
@section('content')

    <div class="flex justify-center items-center mt-10">
        <div class="bg-white shadow-md rounded pt-5 px-8 pb-8 mb-4 w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Register</h1>
            <form method="POST" id="registerUser" >
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" 
                        autocomplete="name" autofocus
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="name-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile No.</label>
                    <input id="mobile" type="tel" name="mobile" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="mobile-error" class="text-red-500 text-xs italic hidden"></p>
                </div>
                <div class="mb-2">
                    <a  id="sendOTP" class="text-green-500 text-sm hover:underline">Send Otp</a>
                </div>
                <div class="mb-4" id="otpSection" style="display:none;">
                    <label for="otp" class="block text-gray-700 font-bold mb-1">Enter Your OTP:</label>
                    <input type="text" id="otp" name="otp" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Enter your OTP">
                    <button type="button" id="verifyOTP"class="mt-2 w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " >Verify OTP</button>
                </div>

                {{-- <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-Mail Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" 
                        autocomplete="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="email-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input id="password" type="password" name="password"  autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="password-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                        Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" 
                        autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div> --}}

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                    <a href="/otp/login" class=" hover:text-blue-500 font-bold rounded focus:outline-none focus:shadow-outline">Already have an Account ?</a>

                </div>                
            </form>

        </div>
    </div>

{{-- <div id="myModal" class="modal  fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="modal-content bg-white p-8 rounded shadow-md w-1/2">
        <span id="closeBtn" class="absolute text-3xl text-gray-600 cursor-pointer right-96">&times;</span>
        <!-- Form content as provided -->
        <div class="bg-gray-100  mx-auto border border-gray mt-8">
            <form id="registerUser" class="p-4 flex flex-col">
                <div class="flex py-1 px-1 justify-between">
                    <div class="w-5/12">
                        <h2 class="text-center text-3xl font-semibold uppercase">Enquire Now</h2>
                        <p class="text-gray-400 mt-5 text-xs">Vesta Elder Care services embodies integrity,
                            professionalism and care
                            provided by highly
                            trained
                            caregivers especially certified to provide empathetic and loving support to its patrons.</p>
                        <div class="phone mt-4 text-xl  flex text-green-500">
                            <p><i class="fa-solid fa-phone"></i> +91-8895456416</p>
                        </div>
                        <div class="phone mt-4 text-xl  text-green-500">
                            <p><i class="fa-regular fa-envelope"></i> info@vestaeldercare.com</p>
                        </div>
                    </div>
                    <div class=" w-6/12 ">
                        <div class="mb-2">
                            <input type="text" id="name" name="name"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Name" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" id="mobile" name="mobile"
                                class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                                placeholder="Phone" required>
                        </div>
                        <div class="mt-5 float-end">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<script>
    // Get the modal
    // const modal = document.getElementById("myModal");

    // // Get the button that opens the modal
    // const btn = document.getElementById("openFormBtn");

    // // Get the close button
    // const closeBtn = document.getElementById("closeBtn");

    // // When the user clicks on the button, open the modal
    // btn.addEventListener("click", () => {
    //     modal.classList.remove("hidden");
    // });

    // // When the user clicks on the close button, close the modal
    // closeBtn.addEventListener("click", () => {
    //     modal.classList.add("hidden");
    // });

    // // When the user clicks anywhere outside of the modal, close it
    // window.addEventListener("click", (event) => {
    //     if (event.target === modal) {
    //         modal.classList.add("hidden");
    //     }
    // });

    $(document).ready(function() {

        // $('#sendOTP').on('click',function(){
        // let mobile = $('input[name="mobile"]').val();

        // $.ajax({
        //     type: "POST",
        //     url: 'api/login',
        //     data: {
        //         mobile: mobile 
        //     },
        //     success: function(response){
        //         console.log(response.data);
        //         $('#otpSection').show();
        //         $('#message').html(response.message);
        //     },
        //     error: function(xhr,status,error){
        //         $('#message').html(xhr.responseJSON.message);
        //     }
        // });
 
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
                        $("#" + key + "-error").text(value[0]).removeClass("hidden");
                    });
                }
            })
        })
    });
    
</script>
@endsection
