@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-16">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                    <h3 class="text-xl font-semibold">Add New Plan</h3>
                </div>
                <div class="p-3">
                    <form id="addYojna" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="callingPlans" class="block text-sm font-medium text-gray-700">Select Category</label>
                            <select name="yojna_category_id" id="callingPlans" class="w-1/2 shadow-sm sm:text-sm rounded-md"
                                required></select>
                        </div>
                        <div class="mb-4">
                            <label for="ename" class="block text-sm font-medium text-gray-700">Yojna English Name</label>
                            <input type="text" id="ename" name="ename"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="hname" class="block text-sm font-medium text-gray-700">Yojna Hindi Name</label>
                            <input type="text" id="hname" name="hname"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="features" class="block text-sm font-medium text-gray-700">Yojna
                                Features/Benefits</label>
                            <textarea name="features" id="features" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="documents" class="block text-sm font-medium text-gray-700">Required
                                Documents</label>
                            <textarea name="documents" id="documents" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="market_fees" class="block text-sm font-medium text-gray-700">Market Fees</label>
                            <input type="number" id="market_fees" name="market_fees"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="fees" class="block text-sm font-medium text-gray-700">Yojna Fees</label>
                            <input type="number" id="fees" name="fees"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <img id="logo-preview" src="" alt="Logo Preview" class="mt-2"
                                style="max-width: 100px;">
                            <label for="logo" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" id="logo" name="logo">
                        </div>
                        <div class="flex gap-4 justify-center">
                            <button type="submit"
                                class="w-3/2 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update
                                Yojna</button>
                            <button type="button"
                                class="delete-btn w-3/2 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Delete
                                Yojna</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            // Fetch Yojna details on page load
            function fetchYojnaDetail() {
                let id = getIdFromUrlPath();

                $.ajax({
                    type: 'GET',
                    url: `/api/yojna/view/${id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response); // Debugging response
                        $('#ename').val(response.data.ename);
                        $('#hname').val(response.data.hname);
                        $('#features').val(response.data.features);
                        $('#description').val(response.data.description);
                        $('#callingPlans').val(response.data.yojna_category_id);
                        $('#documents').val(response.data.documents);
                        $('#market_fees').val(response.data.market_fees);
                        $('#fees').val(response.data.fees);
                        $('#logo-preview').attr('src', `/image/yojna/logo/${response.data.logo}`);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Yojna details for editing:', error);
                    }
                });
            }

            // Fetch Categories for dropdown
            function fetchCategories() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.category.index') }}",
                    success: function(response) {
                        console.log(response); // Debugging response
                        let select = $("#callingPlans");
                        response.data.forEach((plan) => {
                            select.append(`
                    <option value="${plan.id}">${plan.name}</option>
                `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching categories:', error);
                    }
                });
            }

            // Auto-execute functions on page load
            fetchYojnaDetail();
            fetchCategories();

            // Submit form to update Yojna details
            $('#addYojna').submit(function(e) {
                e.preventDefault();
                let id = getIdFromUrlPath();
                let formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: `/api/yojna/edit/${id}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response); // Debugging response
                        $("#addYojna").trigger("reset");
                        window.location.href = "/admin/manage-yojna";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Yojna Details:', error);
                    }
                });
            });

            // Transliterate English text to Hindi
            $('#ename').on('input', function() {
                let englishText = $(this).val();
                transliterateToHindi(englishText, function(hindiText) {
                    $('#hname').val(hindiText);
                });
            });

            // Function to transliterate English text to Hindi
            function transliterateToHindi(englishText, callback) {
                $.ajax({
                    type: "GET",
                    url: `https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=hi&dt=t&q=${encodeURI(englishText)}`,
                    success: function(response) {
                        console.log(response); // Debugging response
                        let hindiText = response[0][0][0];
                        callback(hindiText);
                    },
                    error: function() {
                        console.error('Error in transliteration');
                    }
                });
            }

            // Function to extract ID from URL path
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            // Delete Yojna with confirmation
            $(document).on('click', '.delete-btn', function() {
                let id = getIdFromUrlPath();

                // Confirm deletion
                if (confirm("Are you sure you want to delete this Yojna?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `/api/yojna/delete/${id}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log('Yojna deleted successfully:', response);
                            window.location.href =
                            "/admin/manage-yojna"; // Redirect to manage page
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Yojna:', error);
                        }
                    });
                }
            });

        });
    </script>
@endsection
