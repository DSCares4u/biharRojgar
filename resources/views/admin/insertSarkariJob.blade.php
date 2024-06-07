@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Add New Sarkari Job Hiring</h3>
            </div>
            <div class="p-3">
                <form id="insertData">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Job Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <input type="text" id="role" name="role"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="no_of_post" class="block text-sm font-medium text-gray-700">No Of Post</label>
                        <input type="number" id="no_of_post" name="no_of_post"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <div class="mb-4 flex gap-2">
                        <div class="">
                        <input type="number" id="min_age" name="min_age"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block  shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required placeholder="Min Age">
                        </div>
                        <div class="">
                        <input type="number" id="max_age" name="max_age" placeholder="Max Age"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    </div>
                    <div class="mb-4">
                        <label for="qualification" class="block text-sm font-medium text-gray-700">Qualification</label>
                        <input type="text" id="qualification" name="qualification"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="skills" class="block text-sm font-medium text-gray-700">Skills</label>
                        <input type="text" id="skills" name="skills"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="fees" class="block text-sm font-medium text-gray-700">Fees</label>
                        <input type="number" id="fees" name="fees"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4 flex gap-2">
                        <div class="date w-1/2">
                            <label for="opening_date" class="block text-sm font-medium text-gray-700 ">Opening Dates</label>
                            <input type="date" id="opening_date" name="opening_date"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="date w-1/2">
                            <label for="closing_date" class="block text-sm font-medium text-gray-700 ">Closing Dates</label>
                        <input type="date" id="closing_date" name="closing_date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <input type="file" id="logo" name="logo"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300"
                            required>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add New Job</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("#insertData").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        // Send AJAX request
        $.ajax({
            type: "POST",
            url: "{{ route('sarkari-job.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#insertData").trigger("reset");
                window.open("/admin/manage/sarkari-job", "_self");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
    });
});

</script>
@endsection
