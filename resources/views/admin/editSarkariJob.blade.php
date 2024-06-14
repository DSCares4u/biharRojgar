@extends('admin.adminBase')
@section('content')
<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Edit Sarkari Job </h3>
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
                                class="mt-1 appearance-auto focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
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
                        <img id="logo-preview" src="" alt="Logo Preview" class="mt-2" style="max-width: 100px;">
                        <label for="logo" class="block text-sm font-medium text-gray-700">Job Logo</label>
                        <input type="file" id="logo" name="logo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300" >
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
        function fetchYojnaDetail() {
            let id = getIdFromUrlPath();

            $.ajax({
                type: 'GET',
                url: `/api/admin/sarkari-job/view/` + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response); // Debugging response
                    $('#name').val(response.data.name);
                    $('#role').val(response.data.role);
                    $('#no_of_post').val(response.data.no_of_post);
                    $('#min_age').val(response.data.min_age);
                    $('#max_age').val(response.data.max_age);
                    $('#qualification').val(response.data.qualification);
                    $('#skills').val(response.data.skills);
                    $('#fees').val(response.data.fees);
                    $('#logo-preview').attr('src','/image/sarkari/logo/'+ response.data.logo);

                    // Parsing dates to yyyy-mm-dd format if necessary
                    $('#opening_date').val(new Date(response.data.opening_date).toISOString().split('T')[0]);
                    $('#closing_date').val(new Date(response.data.closing_date).toISOString().split('T')[0]);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Yojna details for editing:', error);
                }
            });
        }

        // Auto-execute the function when the page loads
        fetchYojnaDetail();

        $('#insertData').submit(function(e) {
            e.preventDefault();
            let id = getIdFromUrlPath();
            let formData = new FormData(this); 
            $.ajax({
                type: 'POST',
                url: `/api/admin/sarkari-job/edit/${id}`,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response); // Debugging response
                    $("#insertData").trigger("reset");
                    window.open("/admin/manage/sarkari-job", "_self");
                },
                error: function(xhr, status, error) {
                    console.error('Error updating Yojna Details:', error);
                }
            });
        });

        // Function for taking id from URL
        function getIdFromUrlPath() {
            let pathArray = window.location.pathname.split('/');
            return pathArray[pathArray.length - 1];
        }
    });
</script>
@endsection
