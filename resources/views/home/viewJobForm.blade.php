@extends('home.homebase')
@section('content')


<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Personal Information</h2>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
        <div id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
            John Doe
        </div>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <div id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
            john.doe@example.com
        </div>
    </div>
    <div class="mb-4">
        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
        <div id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
            (123) 456-7890
        </div>
    </div>
    <div class="mb-4">
        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
        <div id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
            123 Main Street, Hometown, USA
        </div>
    </div>
</div>

@endsection