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
                    <div class="mb-3 flex items-center border rounded border-gray-300">
                        <table class="table-auto border-collapse" id="table">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-1 text-sm font-normal">Title</th>
                                    <th class="px-4 py-1 text-sm font-normal">Job Profile</th>
                                    <th class="px-4 py-1 text-sm font-normal">No.of Post</th>
                                    <th class="px-2 py-1 text-sm font-normal">Experience</th>
                                    <th class="px-4 py-1 text-sm font-normal">Gender</th>
                                    <th class="px-4 py-1 text-sm font-normal">Preferred Language</th>
                                    <th class="px-4 py-1 text-sm font-normal">Type</th>
                                    <th class="px-4 py-1 text-sm font-normal">Qualification</th>
                                    <th class="px-4 py-1 text-sm font-normal">Salary</th>
                                    <th class="px-4 py-1 text-sm font-normal">Add / Remove JOBS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1"><input type="text" name="inputs[0][title]" placeholder="Job Name"
                                            class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1"><input type="text" name="inputs[0][profile]" placeholder="Job Name"
                                            class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1"><input type="number" min="1" name="inputs[0][no_of_post]"
                                            placeholder="Number" class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400">
                                            Min: <input type="number" min="0" name="inputs[0][min_experience]"
                                                placeholder="0" class="appearance-none border text-black px-1 py-1 w-1/4 text-xs">
                                            Max: <input type="number" min="0" name="inputs[0][max_experience]"
                                                placeholder="5y" class="appearance-none text-black px-1 border py-1 w-1/4 text-xs">
                                        </div>
                                    </td>
                                    <td class="py-1 text-xs">
                                        <select name="inputs[0][gender]"
                                            class=" border text-center py-2 px-2 w-full text-sm text-gray-400" id="gender">
                                            <option value="" class=" border text-center w-full">Select
                                            </option>
                                            <option value="male" class="border w-full text-sm">Male</option>
                                            <option value="female" class="border w-full text-sm">Female</option>
                                            <option value="male & female" class="border w-full text-sm">Male & Female</option>
                                            <option value="others" class="border w-full text-sm">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[0][preferred_lang]"
                                            class=" border text-center py-2 px-3 w-full text-sm text-gray-400"
                                            id="preferred_lang">
                                            <option value="" class=" border text-center w-full">Select
                                            </option>
                                            <option value="english" class="border w-full text-sm">English</option>
                                            <option value="hindi" class="border w-full text-sm">Hindi</option>
                                            <option value="hindi & english" class="border w-full text-sm ">Hindi + English
                                            </option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[0][type]"
                                            class=" border text-center py-2 px-2 w-full text-sm text-gray-400" id="type">
                                            <option value="" class=" border text-center w-full">Select
                                            </option>
                                            <option value="full-time" class="border w-full text-sm">Full-Time</option>
                                            <option value="part-time" class="border w-full text-sm">Part-Time</option>
                                            <option value="temporary" class="border w-full text-sm">Temporary</option>
                                            <option value="work from ome" class="border w-full text-sm">Work From Home</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select name="inputs[0][qualification]"
                                            class=" border text-center py-2 px-2 w-full text-sm text-gray-400"
                                            id="qualification">
                                            <option value="" class=" border text-center w-full">Select
                                            </option>
                                            <option value="no education required" class="border w-full text-sm">No Education Required</option>
                                            <option value="masters" class="border w-full text-sm">Masters</option>
                                            <option value="graduate" class="border w-full text-sm">Graduate</option>
                                            <option value="12th Pass" class="border w-full text-sm">12th Pass</option>
                                            <option value="10th Pass" class="border w-full text-sm">10th Pass</option>
                                            <option value="below 10th" class="border w-full text-sm">Below 10th</option>
                                            <option value="others" class="border w-full text-sm">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400 flex gap-1">
                                            <input type="number" name="inputs[0][min_salary]" placeholder="From"
                                                class=" border appearance-none py-1 px-2 w-1/2 text-black text-sm">
                                            <input type="number" name="inputs[0][max_salary]" placeholder="To"
                                                class=" py-1 px-2 appearance-none text-black border w-1/2 text-sm">
                                        </div>
                                    </td>
                                    <td class="py-2 flex justify-center">
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
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Purnea" >
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                            <input type="text" id="state" name="state"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Bihar" >
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
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="Abc Pvt. Ltd." >
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Company's Website (if
                                any)</label>
                            <input type="text" id="website" name="website"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="abc.com" >
                        </div>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Phone</label>
                            <input type="tel" id="mobile" name="mobile"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" >
                        </div>
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Alternate Phone</label>
                            <input type="tel" id="alt_mobile" name="alt_mobile"
                                class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" >
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="mb-3  items-center w-1/2">
                            <label for="name" class="block text-gray-700 text-sm mb-2 ">Email</label>
                            <input type="email" id="email" name="email"
                                class="shadow appearance-none border py-1 px-2 w-full" placeholder="roni@gmail.com"
                                >
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="logo" class="block text-gray-700 text-sm mb-2 ">Company's Logo / Image</label>
                            <input type="file" id="logo" name="logo"  class="py-1 px-2 w-full"  >
                        </div>
                    </div>
                    <select name="isApproved" id="isApproved" hidden>
                        <option value="">Update</option>
                        <option value="1" selected>Approve Now</option>
                        <option value="0">Not Approved</option>
                    </select>
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
                var newRow = `
                    <tr data-index="${i}">
                        <td class="py-1"><input type="text" name="inputs[${i}][title]"        placeholder="Job Name" class="border py-2 px-2 w-full text-xs"></td>
                        <td class="py-1"><input type="text" name="inputs[${i}][profile]"            placeholder="Job Name" class="border py-2 px-2 w-full text-xs"></td>
                        <td class="py-1"><input type="number" min="1" name="inputs[${i}][no_of_post]" placeholder="Number" class="border py-2 px-2 w-full text-xs"></td>
                        <td class="py-1 text-center">
                            <div class="text-xs text-gray-400">
                                Min: <input type="number" min="0" name="inputs[${i}][min_experience]" placeholder="0" class="border text-black px-1 py-1 w-1/4 text-xs">
                                Max: <input type="number" min="0" name="inputs[${i}][max_experience]" placeholder="5y" class="text-black px-1 border py-1 w-1/4 text-xs">
                            </div>
                        </td>
                        <td class="py-1 text-xs">
                            <select name="inputs[${i}][gender]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="gender">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </td>
                        <td class="py-1">
                            <select name="inputs[${i}][preferred_lang]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="preferred_lang">
                                <option value="">Select</option>
                                <option value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="other">Others</option>
                            </select>
                        </td>
                        <td class="py-1">
                            <select name="inputs[${i}][type]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="type">
                                <option value="">Select</option>
                                <option value="full-time">Full-Time</option>
                                <option value="part-time">Part-Time</option>
                                <option value="temporary">Temporary</option>
                            </select>
                        </td>
                        <td class="py-1">
                            <select name="inputs[${i}][qualification]" class="border text-center py-2 px-2 w-full text-sm text-gray-400" id="qualification">
                                <option value="">Select</option>
                                <option value="masters">Masters</option>
                                <option value="graduate">Graduate</option>
                                <option value="12th Pass">12th Pass</option>
                                <option value="10th Pass">10th Pass</option>
                                <option value="below 10th">Below 10th</option>
                                <option value="others">Others</option>
                            </select>
                        </td>
                        <td class="py-1 text-center">
                            <div class="text-xs text-gray-400 flex gap-1">
                                <input type="number" name="inputs[${i}][min_salary]" placeholder="From" class="border py-1 px-2 w-1/2 text-black text-sm">
                                <input type="number" name="inputs[${i}][max_salary]" placeholder="To" class="py-1 px-2 text-black border w-1/2 text-sm">
                            </div>
                        </td>
                        <td class="py-2 flex justify-center">
                            <button type="button" name="add" class="remove bg-red-500 px-3 py-1 rounded text-white"><i class="fa-solid fa-user-minus"></i></button>
                        </td>
                    </tr>
                `;
                $('#table tbody').append(newRow);
                });
    
            // Remove row and corresponding title
            $('#table').on('click', '.remove', function() {
                var index = $(this).closest('tr').data('index');
                $(this).closest('tr').remove();
                $('#title_input .title-wrapper[data-index="' + index + '"]').remove();
            });
    
            // Insert application details
            $("#addHirer").submit(function(e) {
                e.preventDefault();
    
                // if (!$("#paymentMode").val()) {
                //     console.log("Payment mode is not set.");
                //     return;
                // }
    
                var formData = new FormData(this);
    
                // Get the current date and format it as needed
                var currentDate = new Date();
                var formattedDate = ('0' + currentDate.getDate()).slice(-2) + '-' + ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' + currentDate.getFullYear();

                // Append the date to the FormData object
                formData.append('date_of_start', formattedDate); 

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
                        window.open("/admin/manage-hire", "_self");
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
    
            // Fetch calling plans
            $.ajax({
                type: "GET",
                url: "{{ route('hire.plan.index') }}",
                success: function(response) {
                    let select = $("#callingPlans");
                    select.empty();
                    select.append(`<option value="">Select Plan</option>`)
                    response.data.forEach((plan) => {
                        select.append(`
                            <option value="${plan.id}" data-plan-charge="${plan.price}">${plan.name}</option>
                        `);
                    });
                }
            });
    
            // Update plan charge display
            $('#callingPlans').change(function() {
                let selectedPlan = $(this).children("option:selected");
                let planCharge = selectedPlan.data('plan-charge');    
                $('#planCharge').html(`Plan Charge Rs. ${planCharge}`);
            });
        });
    </script>
    
    
@endsection
