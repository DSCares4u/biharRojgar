@extends('home.homebase')
@section('content')
    <div class="container mx-auto flex">
        <div class="bg-gray-100 p-6 rounded-lg w-8/12">
            <h2 class="text-lg font-bold mb-4">Terms and Conditions</h2>
            <ul class="list-disc list-inside mb-4">
                <li class="mb-2">
                    <label for="term1">You must be legally eligible to work in the specified country.</label>
                </li>
                <li class="mb-2">
                    <label for="term2">You agree to undergo any necessary background checks as part of the hiring
                        process.</label>
                </li>
                <li class="mb-2">
                    <label for="term3">You agree to abide by the company's code of conduct and policies.</label>
                </li>
                <li class="mb-2">
                    <label for="term4">You understand that any false information provided may result in termination of
                        employment.</label>
                </li>
                <li class="mb-2">
                    <label for="term5">You consent to the processing of your personal data for the purpose of this job
                        application.</label>
                </li>
            </ul>
            <a href="/get-job">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Proceed Now
                </button>
            </a>
        </div>
        <div class="w-4/12">
            <div class=" mt-10 w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                <div class="price mt-2 mb-4">
                    <h3 class="text-lg font-semibold">Our Services</h3>
                    <div class="line bg-orange-500">
                    <hr class="h-1">
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
