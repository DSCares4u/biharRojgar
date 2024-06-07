@extends('admin.adminBase')
@section('content')
   
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow-md rounded p-6">
            <h1 class="text-2xl font-bold mb-6">View Company</h1>
            <div class="mb-4">
                <label class="block text-gray-700">Company Name</label>
                <p class="border rounded p-2"></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <p class="border rounded p-2"></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Website</label>
                <p class="border rounded p-2"></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Date of Application</label>
                <p class="border rounded p-2"></p>
            </div>
            <a href="{{ route('hire.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to List</a>
        </div>
    </div>

@endsection
