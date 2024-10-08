<!-- login.blade.php -->

@extends('home.homebase')
@section('content')
    <div class="flex justify-center items-center  mt-10">
        <div class="bg-white shadow-md border rounded px-8 pt-6 pb-8 w-full max-w-md">

            @if (session('success'))
                <div class="bg-green-500 text-white" role="alert">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="bg-red-500 text-white" role="alert">{{ session('error') }}</div>
            @endif

            <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
            <form method="POST" id="otp-form" class="p-4 flex flex-col" action="{{ route('otp.generate') }}">
                @csrf
                <div class="mb-2">
                    <label for="mobile" class="block text-gray-700 text-sm mb-1 font-medium ">Mobile :</label>
                    <input type="tel" id="mobile" name="mobile"
                        class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                        placeholder="Enter Your Register Mobile No." min="10" max="11" required>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Generate
                        Otp</button>
                </div>
                <a href="{{url('/register')}}"
                    class="hover:text-blue-500 font-bold rounded focus:outline-none focus:shadow-outline">Don't have an
                    Account?</a>
            </form>

            <!-- OTP message will be displayed here -->
            <div id="otp-message"></div>
        </div>
    </div>

@endsection
