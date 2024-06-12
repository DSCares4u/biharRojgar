@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-16">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                    <h3 class="text-xl font-semibold">Add New Plan</h3>
                </div>
                <div class="p-3">
                    <form id="addYojna">
                        <div class="mb-4">
                            <label for="" class="block text-sm font-medium text-gray-700">Select Category</label>
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
                            <label for="features" class="block text-sm font-medium text-gray-700">Yojna Features /Benefits</label>
                                <textarea name="features" id="features" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required ></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required ></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="documents" class="block text-sm font-medium text-gray-700">Required Documents</label>
                                <textarea name="documents" id="documents" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required ></textarea>
                        </div>
                        <label for="market_fees" class="block text-sm font-medium text-gray-700">Market Fees </label>
                        <input type="number" id="market_fees" name="market_fees"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                        <label for="fees" class="block text-sm font-medium text-gray-700">Yojna Fees </label>
                        <input type="number" id="fees" name="fees"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>

                        <div class="mb-4 w-1/2">
                            <label for="logo" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" id="logo" name="logo" class="" required>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                                New Plan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //insert application details

            $("#addYojna").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                let features = $("#features").val().split("\n");

                features = features.filter(feature => feature.trim() !== '');
                formData.append('features', JSON.stringify(features));

                let documents = $("#documents").val().split("\n");

                documents = documents.filter(document => document.trim() !== '');
                formData.append('documents', JSON.stringify(documents));

                $.ajax({
                    type: "POST",
                    url: "{{ route('yojna.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addYojna").trigger("reset");
                        window.open("/admin/manage-yojna", "_self")
                    }
                })
            })

            $.ajax({
                type: "GET",
                url: "{{ route('yojna.category.index') }}",
                success: function(response) {
                    let select = $("#callingPlans");
                    select.empty();
                    select.append(`<option value="">Select Category</option>`)
                    response.data.forEach((plan) => {
                        select.append(`
                    <option value="${plan.id}">${plan.name}</option>
                    `);
                    });
                }
            });
        });



        // Function to transliterate English text to Hindi
        // function transliterateToHindi(englishText, callback) {
        //     $.ajax({
        //         type: "POST",
        //         url: 'https://google-translate1.p.rapidapi.com/language/translate/v2/detect', // Replace with actual API endpoint
        //         data: JSON.stringify({
        //             text: englishText
        //         }),
        //         contentType: "application/json",
        //         success: function(response) {
        //             callback(response.hindiText);
        //         },
        //         error: function() {
        //             console.error('Error in transliteration');
        //         }
        //     });
        // }

        // $(document).ready(function() {
        //     $('#ename').on('input', function() {
        //         let englishText = $(this).val();
        //         transliterateToHindi(englishText, function(hindiText) {
        //             $('#hname').val(hindiText);
        //         });
        //     });
        // });
    </script>
@endsection
