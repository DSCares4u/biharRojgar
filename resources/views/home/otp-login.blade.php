{{-- @extends('home.homebase')
@section('content')

<div class="flex justify-center items-center mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
        <form method="POST" >
            @csrf

            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
                <input id="mobile" type="tel" name="mobile"  required  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>


            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Generate Otp
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route("login.submit") }}',
                data: formData,
                success: function(response) {
                    // Redirect to dashboard upon successful login
                    window.location.href = '/dashboard';
                },
                error: function(xhr) {
                    // Display error message
                    alert(xhr.responseJSON.message);
                }
            });
        });
    });
</script>


@endsection --}}

<!-- resources/views/otp-login.blade.php -->

@extends('home.homebase')
@section('content')

<form id="otp-form" action="{{ route('otp.generate') }}" method="POST">
    @csrf
    <label for="mobile">Enter Mobile Number:</label>
    <input type="text" id="mobile" name="mobile">
    <button type="submit">Generate OTP</button>
</form>

<div id="otp-message"></div>

<script>
    $(document).ready(function() {
        $('#otp-form').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#otp-message').html('<div class="alert alert-success">' + response.message + '</div>');
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';

                    $.each(errors, function(key, value) {
                        errorMessage += '<div class="alert alert-danger">' + value[0] + '</div>';
                    });

                    $('#otp-message').html(errorMessage);
                }
            });
        });
    });
</script>

@endsection

