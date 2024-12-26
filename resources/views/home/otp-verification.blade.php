@extends('home.homebase')
@section('content')

<div class="flex justify-center items-center mt-10 h-screen">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">

        @if (session('success'))
        <div class="bg-green-500 text-white" role="alert">{{session('success')}}</div>
        @endif

        @if (session('error'))
        <div class="bg-red-500 text-white" role="alert">{{session('error')}}</div>
        @endif

        <h1 class="text-2xl font-bold mb-4 text-center">Enter Otp</h1>
        <form method="POST" id="otp-form" class="p-4 flex flex-col"action="{{route('otp.getlogin')}}">
            @csrf
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <div class="mb-2">
                <label for="otp" class="block text-gray-700 text-sm mb-1 font-medium ">Otp :</label>
                <input type="number" id="otp" name="otp"
                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                    placeholder="Enter Your Otp" required>
            </div>
            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Login Now</button>
            </div>
            <a href="{{url('/otp/login')}}"
                class="hover:text-blue-500 font-bold rounded focus:outline-none focus:shadow-outline">Generate Again?</a>
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
