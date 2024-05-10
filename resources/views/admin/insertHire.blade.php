@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg mt-2">
                    <h3 class="text-xl font-semibold mt-2">Add New Hirer</h3>
                </div>
                <form class="p-5 flex flex-col" id="addHirer">
                    <h2 class="text-lg font-semibold mb-2  ">Post a job</h2>
                    <div class="mb-3  items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                        <input type="text" id="name"
                            name="name"placeholder="Eg. Sales executives needed urgently for ..."
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="mb-3 flex items-center border rounded border-gray-300">
                        <table class="table-auto border-collapse " id="table">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-1 text-sm font-normal">Profile</th>
                                    <th class="px-4 py-1 text-sm font-normal">No. Of Post</th>
                                    <th class="px-4 py-1 text-sm font-normal">Experience</th>
                                    <th class="px-4 py-1 text-sm font-normal">Gender</th>
                                    <th class="px-4 py-1 text-sm font-normal">Preferred Language</th>
                                    <th class="px-4 py-1 text-sm font-normal">Type</th>
                                    <th class="px-4 py-1 text-sm font-normal">Salary</th>
                                    <th class="px-4 py-1 text-sm font-normal">Qualification</th>
                                    <th class="px-4 py-1 text-sm font-normal">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" py-1"><input type="text" name="inputs[0]['profile']" placeholder="Enter"
                                            class="appearance-none border text-center py-2 px-2 w-full"></td>
                                    <td class=" py-1"><input type="number" min="1" name="inputs[0]['no_of_post']"
                                            placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full">
                                    </td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['experience']"
                                            placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full">
                                    </td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['gender']" placeholder="Enter"
                                            class="appearance-none border text-center py-2 px-2 w-full"></td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['preferred_lang']"
                                            placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full">
                                    </td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['type']" placeholder="Enter"
                                            class="appearance-none border text-center py-2 px-2 w-full"></td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['salary']" placeholder="Enter"
                                            class="appearance-none border text-center py-2 px-2 w-full"></td>
                                    <td class=" py-1"><input type="text" name="inputs[0]['qualification']"
                                            placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full">
                                    </td>
                                    <td class=" py-2 flex justify-center">
                                        <button type="button" name="add"
                                            class="add bg-green-500 px-3 py-1 rounded text-white"><i
                                                class="fa-solid fa-user-plus"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">City</label>
                            <input type="text" id="city" name="city"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Purnea" required>
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                            <input type="text" id="state" name="state"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Bihar" required>
                        </div>
                    </div>
                    <div class="mb-3  items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Description</label>
                        <textarea name="description" id="description" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                            class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                    </div>
                    <div class="mb-3 flex items-center">
                        <h3 class=" font-semibold">Recruiter details</h3>
                        {{-- <h3 class="text-sm ml-1"> (Cannot be changed later)</h3> --}}
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3 items-center w-1/2">
                            <label for="" class="block text-gray-700 text-sm mb-2 ">Hiring for (Company
                                name)</label>
                            <input type="text" id="company_name" name="company_name"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Abc Pvt. Ltd." required>
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Company's Website (if
                                any)</label>
                            <input type="text" id="website" name="website"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="abc.com" required>
                        </div>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Phone</label>
                            <input type="tel" id="mobile" name="mobile"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Alternate Phone</label>
                            <input type="tel" id="alt_mobile" name="alt_mobile"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Email</label>
                            <input type="email" id="email" name="email"
                                class="shadow appearance-none border py-1 px-2 w-full" placeholder="roni@gmail.com"
                                required>
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="logo" class="block text-gray-700 text-sm mb-2 ">Company's Logo / Image</label>
                            <input type="file" id="logo" name="logo"  class="py-1 px-2 w-full"  required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <select name="plan_id" id="callingPlans">
                            <option value="">Select Plan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <div id="planCharge"></div>
                    </div>
                    <div class="mb-3 flex justify-center">
                        <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-black">
                            Post Job
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var i = 0;

            // Add new row
            $('#table').on('click', '.add', function() {
                ++i;
                $('#table').append(
                    `<tr>
                    <td class="py-1"><input type="text" name="inputs[${i}]['profile']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="number" min="1"
                                name="inputs[${i}]['no_of_post']" placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['experience']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['gender']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['preferred_lang']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['type']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['salary']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}]['qualification']"
                                placeholder="Enter" class="appearance-none border text-center py-2 px-2 w-full"></td>
                        <td class="py-2 flex justify-center">
                            <button type="button" class="remove bg-red-500 px-3 py-1 rounded text-white"><i class="fa-solid fa-user-xmark"></i></button>
                        </td>
        </tr>`
                );
            });

            // Remove row
            $('#table').on('click', '.remove', function() {
                $(this).closest('tr').remove();
            });
        });

        $(document).ready(function() {
            //insert application details

            $("#addHirer").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('hire.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addHirer").trigger("reset");
                        window.open("/admin/manage-hire", "_self")
                    }
                })
            });

            $.ajax({
                type: "GET",
                url: "{{ route('hire.plan.index') }}",
                success: function(response) {
                    let select = $("#callingPlans");
                    select.empty();
                    select.append(`<option value="">Select Plan</option>`)
                    response.data.forEach((plan) => {
                        select.append(`
                    <option value="${plan.id}"  data-plan-charge="${plan.price}">${plan.name}</option>
                    `);
                    });
                }
            });

            $('#callingPlans').change(function() {
                let selectedPlan = $(this).children("option:selected");
                let PlanFee = selectedPlan.data('plan-charge');

                // Update the fee display
                $('#planCharge').html(
                    `<input  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Charge Rs. ${PlanFee}</label>`
                );
            });
        })
    </script>
@endsection
