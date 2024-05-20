@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Add New Form</h3>
            </div>
            <div class="p-3">
                <form id="addData">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Candidate's Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="father" class="block text-sm font-medium text-gray-700">Father's Name</label>
                        <input type="text" id="father" name="father"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="mother" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                        <input type="text" id="mother" name="mother"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="dob" class="block text-sm font-medium text-gray-700">Date Of Birth</label>
                        <input type="date" id="dob" name="dob"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                        <select name="gender" id="gender"
                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded"
                            required>
                            <option value="">Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No.</label>
                        <input type="text" id="mobile" name="mobile"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>                   
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Id</label>
                        <input type="text" id="email" name="email"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="block text-sm font-medium text-gray-700">Select Category</label>
                        <select name="yojna_id" id="callingYojna"  class="w-1/2 shadow-sm sm:text-sm rounded-md"
                        required></select>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Address</label>
                        <textarea name="address" id="address" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                            class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                    </div>
                        <div class="mb-4 w-1/2">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" id="photo" name="photo"
                                class=""
                                required >
                        </div>
                        <div class="mb-4 w-1/2">
                            <label for="document" class="block text-sm font-medium text-gray-700">Document</label>
                            <input type="file" id="document" name="document"
                                class=""
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

        $("#addData").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ route('yojna.form.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Success", response.message, "success");
                    $("#addData").trigger("reset");
                    window.open("/admin/manage/yojna-form", "_self")
                },
                error: function(xhr, status, error) {
                    alert('not')
                    console.error('Error:', error);
                }
            })
        })

        $.ajax({
                type: "GET",
                url: "{{ route('yojna.index') }}",
                success: function(response) {
                    let select = $("#callingYojna");
                    select.empty();
                    select.append(`<option value="">Select Plan</option>`)
                    response.data.forEach((plan) => {
                        select.append(`
                    <option value="${plan.id}">${plan.ename}</option>
                    `);
                    });
                }
            });
    });
</script>

@endsection
