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

                        <div class="flex gap-2">
                            <div class="mb-4">
                                <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No.</label>
                                <input type="text" id="mobile" name="mobile"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="wtsp-mobile" class="block text-sm font-medium text-gray-700">Whatsapp
                                    No.</label>
                                <input type="text" id="wtsp_mobile" name="wtsp_mobile"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>

                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Id</label>
                            <input type="text" id="email" name="email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="flex gap-1">
                            <div class=" mb-2 w-1/2">
                                <label for="city" class="block text-gray-700 text-xs mb-1 ">City:</label>
                                <input type="text" id="city" name="city"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                                <p id="error-city" class="text-red-500 text-xs font-semibold error-message"></p>
                            </div>
                            <div class=" mb-2 w-1/2">
                                <label for="state" class="block text-gray-700 text-xs mb-1">State :</label>
                                <select id="state" name="state"
                                    class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                                    <option value="">Select State</option>
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
                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and
                                        Daman
                                        and Diu</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                </select>
                                <p id="error-state" class="text-red-500 text-xs font-semibold error-message"></p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="block text-sm font-medium text-gray-700">Select Category</label>
                            <select name="yojna_id" id="callingYojna" class="w-1/2 shadow-sm sm:text-sm rounded-md"
                                required></select>
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
                        window.open("{{url('/admin/manage/yojna-form')}}", "_self")
                    },
                    error: function(xhr) {
                        if (xhr.status === 409) {
                            swal("error", "Already applied for this Yojna.", "error");
                        }
                        else if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
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
