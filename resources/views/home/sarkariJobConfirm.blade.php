@extends('home.homebase')
@section('content')
    <div class="container flex justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mx-auto mb-4" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2l4 -4m0 8a9 9 0 100-18 9 9 0 000 18z" />
            </svg>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Application Received</h2>
            <p class="text-gray-600 mb-6">Thank you for applying! We appreciate your interest and will review your
                application shortly.</p>

            {{-- <div class="bg-gray-50 p-4 rounded-lg shadow-inner text-left">
                <h3 class="text-lg font-medium text-gray-800 mb-2">Your Information</h3>
                <p class="text-gray-700"><strong>Name:</strong> John Doe</p>
                <p class="text-gray-700"><strong>Email:</strong> john.doe@example.com</p>
                <p class="text-gray-700"><strong>Phone:</strong> (123) 456-7890</p>
            </div> --}}

            <a href="/sarkari-job">
                <button class="mt-6 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Apply for more Jobs</button>
            </a>
        </div>
    </div>
@endsection
