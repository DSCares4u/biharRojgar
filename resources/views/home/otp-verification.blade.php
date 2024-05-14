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

        <h1 class="text-2xl font-bold mb-4 text-center">Enter Otp</h1>
        <form method="POST" action="{{route('otp.getlogin')}}">
            @csrf

            <div class="mb-4">
                <label for="otp" class="block text-gray-700 text-sm font-bold mb-2">Otp</label>
                <input id="otp" type="number" name="otp"  required  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>


            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

{{-- <script>
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
</script> --}}


@endsection
