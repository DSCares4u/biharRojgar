@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Add New Candidate Plan</h3>
            </div>
            <div class="p-3">
                <form id="insertPlan">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Plan Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                            <input type="hidden" name="isCandidate" value="1">
                    </div>
                    <div class="mb-4">
                        <label for="features" class="block text-sm font-medium text-gray-700">Features</label>
                            <textarea name="features" id="features" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required ></textarea>
                    </div>
                        <div class="mb-4 w-1/2">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" id="price" name="price"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 1500">
                        </div>
                    <div class="">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add New Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("#insertPlan").submit(function(e) {
        e.preventDefault();
        
        let formData = new FormData(this);
        let features = $("#features").val().split("\n");

        features = features.filter(feature => feature.trim() !== '');
        formData.append('features', JSON.stringify(features));

        // Send AJAX request
        $.ajax({
            type: "POST",
            url: "{{ route('hire.plan.store') }}",
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#insertPlan").trigger("reset");
                window.open("{{url('/admin/manage-candidate/plan')}}", "_self");
            },
            error: function(xhr, status, error) {
                swal("Error", xhr.responseText, "error");
            }
        });
    });
});

</script>

@endsection
