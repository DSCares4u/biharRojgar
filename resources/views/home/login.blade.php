@extends('home.homebase')
@section('title', 'Login')
@section('content')

<div class="flex justify-center items-center mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
        <form method="POST" >
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-Mail Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>


            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login 
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


@endsection
