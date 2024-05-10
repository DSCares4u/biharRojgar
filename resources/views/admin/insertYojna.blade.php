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
                        <label for="name" class="block text-sm font-medium text-gray-700">Yojna English Name</label>
                        <input type="text" id="ename" name="ename"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Yojna Hindi Name</label>
                        <input type="text" id="hname" name="hname"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                        <div class="mb-4 w-1/2">
                            <label for="logo" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="number" id="logo" name="logo"
                                class="w-full shadow-sm sm:text-sm rounded-md"
                                required >
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
        //insert application details

        $("#addYojna").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
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
    });
</script>

@endsection
