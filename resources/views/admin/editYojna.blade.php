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
                        <select name="yojna_category_id" id="callingPlans" class="w-1/2 shadow-sm sm:text-sm rounded-md" required></select>
                    </div>
                    <div class="mb-4">
                        <label for="ename" class="block text-sm font-medium text-gray-700">Yojna English Name</label>
                        <input type="text" id="ename" name="ename" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="hname" class="block text-sm font-medium text-gray-700">Yojna Hindi Name</label>
                        <input type="text" id="hname" name="hname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="features" class="block text-sm font-medium text-gray-700">Yojna Features/Benefits</label>
                        <textarea name="features" id="features" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="documents" class="block text-sm font-medium text-gray-700">Required Documents</label>
                        <textarea name="documents" id="documents" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="market_fees" class="block text-sm font-medium text-gray-700">Market Fees</label>
                        <input type="number" id="market_fees" name="market_fees" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="fees" class="block text-sm font-medium text-gray-700">Yojna Fees</label>
                        <input type="number" id="fees" name="fees" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4 w-1/2">
                        <label for="logo" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="logo" name="logo">
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Plan</button>
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
                url: `/api/yojna/view/` + id,
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
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Yojna details for editing:', error);
                }
            });
        }

        function fetchCategories() {
            $.ajax({
                type: "GET",
                url: "{{ route('yojna.category.index') }}",
                success: function(response) {
                    console.log(response); // Debugging response
                    let select = $("#callingPlans");
                    select.empty();
                    select.append(`<option value="">Select Category</option>`);
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

        // Auto-execute the function when the page loads
        fetchYojnaDetail();
        fetchCategories();

        $('#addYojna').submit(function(e) {
            e.preventDefault();
            let id = getIdFromUrlPath();
            let formData = {
                ename: $('#ename').val(),
                hname: $('#hname').val(),
                features: $('#features').val(),
                description: $('#description').val(),
                yojna_category_id: $('#callingPlans').val(),
                documents: $('#documents').val(),
                market_fees: $('#market_fees').val(),
                fees: $('#fees').val(),
                logo:$('#logo').val()
            };
            $.ajax({
                type: 'PUT',
                url: `/api/yojna/edit/${id}`,
                data: formData,
                success: function(response) {
                    console.log(response); // Debugging response
                    $("#addYojna").trigger("reset");
                    window.open("/admin/manage-yojna", "_self");
                },
                error: function(xhr, status, error) {
                    console.error('Error updating Yojna Details:', error);
                }
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

        $('#ename').on('input', function() {
            let englishText = $(this).val();
            transliterateToHindi(englishText, function(hindiText) {
                $('#hname').val(hindiText);
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
