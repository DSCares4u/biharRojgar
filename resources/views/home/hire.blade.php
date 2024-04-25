@extends('home.homebase')
@section('content')

<div class="container mx-auto">
    <div class="bg-gray-100 p-6 rounded-lg">
        <h2 class="text-lg font-bold mb-4">Hiring Form</h2>
        <form>
            <div class="mb-4">
                <label for="job_title" class="block text-gray-700 font-bold mb-2">Job Title</label>
                <input type="text" id="job_title" name="job_title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="department" class="block text-gray-700 font-bold mb-2">Department</label>
                <input type="text" id="department" name="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-bold mb-2">Location</label>
                <input type="text" id="location" name="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Job Description</label>
                <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label for="requirements" class="block text-gray-700 font-bold mb-2">Job Requirements</label>
                <textarea id="requirements" name="requirements" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit Job Posting
            </button>
        </form>
    </div>
</div>


@endsection