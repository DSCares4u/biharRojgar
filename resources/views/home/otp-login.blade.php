<!-- login.blade.php -->

@extends('home.homebase')
@section('content')

<div class="flex justify-center items-center mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">

        @if (session('success'))
        <div class="bg-green-500 text-white" role="alert">{{session('success')}}</div>
        @endif

        @if (session('error'))
        <div class="bg-red-500 text-white" role="alert">{{session('error')}}</div>
        @endif

        <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
        <form method="POST" id="otp-form" action="{{ route('otp.generate') }}">
            @csrf

            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
                <input id="mobile" type="tel" name="mobile" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p id="mobile-error" class="text-red-500 text-xs italic hidden"></p>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Generate OTP
                </button>
                <a href="/register" class="hover:text-blue-500 font-bold rounded focus:outline-none focus:shadow-outline">Don't have an Account?</a>
            </div>
        </form>

        <!-- OTP message will be displayed here -->
        <div id="otp-message"></div>
    </div>
</div>

<script>
// $(document).ready(function() {
//     $('#otp-form').submit(function(e) {
//         e.preventDefault();

//         var mobile = $('#mobile').val();

//         $.ajax({
//             type: 'POST',
//             url: "{{ route('otp.generate') }}",
//             data: {
//                 mobile: mobile,
//                 _token: '{{ csrf_token() }}'
//             },
//             alert('generated');
            // success: function(response) {
            //     if(response.success) {
            //         // Show OTP on the screen
            //         $('#otp-message').html('<div class="bg-green-500 text-white">Your OTP is: ' + response.otp + '</div>');
            //     } else {
            //         $('#otp-message').html('<div class="bg-red-500 text-white">Error: Unable to generate OTP</div>');
            //     }
            // },
            // error: function(xhr, status, error) {
            //     $('#otp-message').html('<div class="bg-red-500 text-white">Error: ' + error + '</div>');
            // }
        });
    });
});



// <script>
//     $(document).ready(function() {
//         $('#otp-form').submit(function(event) {
//             event.preventDefault();
//             var formData = $(this).serialize();

//             $.ajax({
//                 url: $(this).attr('action'),
//                 type: 'POST',
//                 data: formData,
//                 success: function(response) {
//                     $('#otp-message').html('<div class="alert alert-success">' + response.message + '</div>');
//                 },
//                 error: function(xhr, status, error) {
//                     var errors = xhr.responseJSON.error;
//                     $.each(errors, function(key, value) {
//                         $("#" + key + "-error").text(value[0]).removeClass("hidden");
//                     });
//                 }
//             });
//         });
//     });
// </script>
    
 <script>
//     $(document).ready(function() {
//         $('#otp-form').submit(function(event) {
//             event.preventDefault();
//             var formData = $(this).serialize();

//             $.ajax({
//                 url: $(this).attr('action'),
//                 type: 'POST',
//                 data: formData,
//                 success: function(response) {
//                     // Log the OTP to the console
//                     console.log(response.otp);

//                     // Display the OTP message on the page
//                     $('#otp-message').html('<div class="alert alert-success">OTP generated: ' + response.otp + '</div>');
//                 },
//                 error: function(xhr, status, error) {
//                     var errors = xhr.responseJSON.error;
//                     $.each(errors, function(key, value) {
//                         $("#" + key + "-error").text(value[0]).removeClass("hidden");
//                     });
//                 }
//             });
//         });
//     });
</script> 


@endsection

