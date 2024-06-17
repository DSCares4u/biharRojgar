@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-16">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                    <h3 class="text-xl font-semibold">Private Job Applied Form</h3>
                </div>
                <div class="p-3">
                    <form id="addData">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Candidate's Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="flex gap-1">
                            <div class=" mb-2 w-1/2">
                                <label for="sarkari_job_id" class="block text-gray-700 text-xs mb-1 ">Applied For :</label>
                                <input type="text" id="sarkari_job" name="sarkari_job" disabled
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                                <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class=" mb-2 w-1/2">
                                <label for="payment_status" class="block text-gray-700 text-xs mb-1 ">Payment Status:</label>
                                <input type="text" id="payment_status" name="payment_status" disabled
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                                <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="w-1/2 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            function fetchDetails() {
                let id = getIdFromUrlPath();

                $.ajax({
                    type: 'GET',
                    url: `/api/job/view/${id}`,
                    success: function(response) {
                        console.log(response);
                        $('#id').val(response.data.id);
                        $('#name').val(response.data.user.name);
                        $('#job').val(response.data.job.name);
                        $('#payment_status').val(response.data.payment_mode);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Applied details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchDetails();

            // Function to extract ID from URL path
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            // Form submission handler
            $('#addData').submit(function(e) {
                e.preventDefault();
                let userId = getIdFromUrlPath();
                let formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: `/api/job/edit/${userId}`,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert("Success: " + response.message);
                        $("#addData").trigger("reset");
                        window.location.href = "/admin/manage/yojna-form";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Details:', error);
                    }
                });
            });
        });
    </script>
@endsection
