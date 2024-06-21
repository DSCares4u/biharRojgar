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
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                            <input type="text" id="role" name="role"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="no_of_post" class="block text-sm font-medium text-gray-700">No Of Post</label>
                            <input type="number" id="no_of_post" name="no_of_post"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                        <div class="mb-4 flex gap-2">
                            <div class="">
                                <input type="number" id="min_age" name="min_age"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block  shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="Min Age">
                            </div>
                            <div class="">
                                <input type="number" id="max_age" name="max_age" placeholder="Max Age"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="qualification" class="block text-sm font-medium text-gray-700">Qualification</label>
                            <input type="text" id="qualification" name="qualification"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="skills" class="block text-sm font-medium text-gray-700">Skills</label>
                            <input type="text" id="skills" name="skills"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="flex gap-5">
                            <div class="mb-4 items-center">
                                <label for="job_type" class="block text-sm font-medium text-gray-700">Job Type</label>
                                <select name="job_type"
                                    class=" sm:text-sm py-2 px-2 items-center border border-gray-300 rounded mt-1"
                                    id="job_type">
                                    <option value="" class=" border text-center w-full">Select
                                    </option>
                                    <option value="Central" class="border w-full text-sm">Central Government</option>
                                    <option value="State" class="border w-full text-sm">State Government</option>
                                    <option value="District" class="border w-full text-sm">District Government</option>
                                    <option value="Local" class="border w-full text-sm">Local Government</option>
                                </select>
                            </div>
                            <div class="mb-4 items-center w-1/2">
                                <label for="category"
                                    class="block text-sm font-medium text-gray-700">Category </label>
                                <select name="category"
                                    class=" sm:text-sm py-2 px-2 items-center border border-gray-300 rounded mt-1"
                                    id="category">
                                    <option value="" class=" border text-center w-full">Select
                                    </option>
                                    <option value="all categories" class="border w-full text-sm">All Categories</option>
                                    <option value="General" class="border w-full text-sm">General</option>
                                    <option value="Sc / St" class="border w-full text-sm">Sc / St</option>
                                    <option value="OBC" class="border w-full text-sm">OBC</option>
                                    <option value="General & Obc" class="border w-full text-sm">General & Obc</option>
                                    <option value="OBC & SC & ST" class="border w-full text-sm">OBC & SC & ST</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <select id="location" name="location"
                                class="sm:text-sm py-2 px-2 items-center border border-gray-300 rounded mt-1">
                                <option value="">Select State</option>
                                <option value="All Over India">All Over India</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            </select>
                            <p id="error-state" class="text-red-500 text-xs font-semibold error-message"></p>
                        </div>
                        <div class="flex">
                            <div class="mb-4 w-1/2">
                                <label for="fees" class="block text-sm font-medium text-gray-700">Form Fees</label>
                                <input type="number" id="fees" name="fees"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="mb-4 w-1/2">
                                <label for="r_fees" class="block text-sm font-medium text-gray-700">SC/ST Form
                                    Fees</label>
                                <input type="number" id="r_fees" name="r_fees"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="mb-4 flex gap-2">
                            <div class="date w-1/2">
                                <label for="min_salary" class="block text-sm font-medium text-gray-700 ">Minimum
                                    Salary</label>
                                <input type="number" id="min_salary" name="min_salary"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="date w-1/2">
                                <label for="max_salary" class="block text-sm font-medium text-gray-700 ">Maximum
                                    Salary</label>
                                <input type="number" id="max_salary" name="max_salary"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="mb-4 flex gap-2">
                            <div class="date w-1/2">
                                <label for="opening_date" class="block text-sm font-medium text-gray-700 ">Opening
                                    Dates</label>
                                <input type="date" id="opening_date" name="opening_date"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="date w-1/2">
                                <label for="closing_date" class="block text-sm font-medium text-gray-700 ">Closing
                                    Dates</label>
                                <input type="date" id="closing_date" name="closing_date"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="mb-3 items-center">
                            <label for="description" class="block text-gray-700 text-sm mb-2">Job Description</label>
                            <textarea name="description" id="description" cols="20" rows="2"
                                placeholder="Type Or Details Of Job Here" class="shadow appearance-none border py-1 px-2 w-full" disabled></textarea>
                        </div>
                        <div class="mb-4">
                            <img id="logo-preview" src="" alt="Logo Preview" class="mt-2"
                                style="max-width: 100px;">
                            <label for="logo" class="block text-sm font-medium text-gray-700">Job Logo</label>
                            <input type="file" id="logo" name="logo"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                        </div>
                        <div class="flex justify-center gap-5">
                            <button type="submit"
                                class="w-3/2 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update
                                Job</button>
                            <button type="submit"
                                class="delete-btn w-3/2 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Delete
                                Job</button>
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
                        $('#min_salary').val(response.data.min_salary);
                        $('#max_salary').val(response.data.max_salary);
                        $('#location').val(response.data.location);
                        $('#job_type').val(response.data.job_type);
                        $('#qualification').val(response.data.qualification);
                        $('#description').val(response.data.description);
                        $('#category').val(response.data.category);
                        $('#skills').val(response.data.skills);
                        $('#fees').val(response.data.fees);
                        $('#r_fees').val(response.data.r_fees);
                        $('#logo-preview').attr('src', '/image/sarkari/logo/' + response.data.logo);
                        // Parsing dates to yyyy-mm-dd format if necessary
                        $('#opening_date').val(new Date(response.data.opening_date).toISOString().split(
                            'T')[0]);
                        $('#closing_date').val(new Date(response.data.closing_date).toISOString().split(
                            'T')[0]);
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
            // Delete Yojna with confirmation
            $(document).on('click', '.delete-btn', function() {
                let id = getIdFromUrlPath();

                // Confirm deletion
                if (confirm("Are you sure you want to delete this Job?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `/api/admin/sarkari-job/delete/${id}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log('Job deleted successfully:', response);
                            window.location.href =
                                "/admin/manage/sarkari-job"; // Redirect to manage page
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Data:', error);
                        }
                    });
                }
            });

            // Function for taking id from URL
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }
        });
    </script>
@endsection
