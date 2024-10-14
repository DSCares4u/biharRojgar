@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full lg:w-full md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg mt-2">
                    <h3 class="text-xl font-semibold mt-2">View Hirer</h3>
                </div>
                <form class="p-5 flex flex-col" id="addHirer">
                    <div class="mb-3 items-center">
                        <label for="date_of_start" class="block text-gray-700 text-sm mb-2">Job Posted Date</label>
                        <input type="text" id="date_of_start" placeholder="Eg. Sales executives needed urgently for ..."
                            class="shadow appearance-none border py-1 px-2 w-1/2" disabled>
                    </div>
                    <div class="mb-3 items-center">
                        <label for="title" class="block text-gray-700 text-sm mb-2">Job Title</label>
                        <input type="text" id="title" name="title"
                            placeholder="Eg. Sales executives needed urgently for ..."
                            class="shadow appearance-none border py-1 px-2 w-full">
                    </div>
                    <div class="mb-3 flex items-center border rounded border-gray-300">
                        <table class="table-auto border-collapse" id="table">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-1 text-sm font-normal">Job Profile</th>
                                    <th class="px-4 py-1 text-sm font-normal">No.of Post</th>
                                    <th class="px-2 py-1 text-sm font-normal">Experience</th>
                                    <th class="px-4 py-1 text-sm font-normal">Gender</th>
                                    <th class="px-4 py-1 text-sm font-normal">Preferred Language</th>
                                    <th class="px-4 py-1 text-sm font-normal">Type</th>
                                    <th class="px-4 py-1 text-sm font-normal">Qualification</th>
                                    <th class="px-4 py-1 text-sm font-normal">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1"><input type="text" name="profile" id="profile"
                                            placeholder="Job Name" class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1"><input type="number" min="1" id="no_of_post"
                                            name="no_of_post" placeholder="Number"
                                            class="appearance border py-2 px-2 w-full text-xs"></td>
                                    <td class="py-1 text-center">
                                        <div class="text-xs text-gray-400">
                                            Min: <input type="number" min="0" id="min_experience"
                                                name="min_experience" placeholder="0"
                                                class="appearance border text-black px-1 py-1 w-1/4 text-xs">
                                            Max: <input type="number" min="0" id="max_experience"
                                                name="max_experience" placeholder="5y"
                                                class="appearance text-black px-1 border py-1 w-1/4 text-xs">
                                        </div>
                                    </td>
                                    <td class="py-1 text-xs">
                                        <select id="gender" name="gender"
                                            class="border text-center py-2 px-2 w-full text-sm text-gray-400">
                                            <option value="" class="border text-center w-full">Select</option>
                                            <option value="male" class="border w-full text-sm">Male</option>
                                            <option value="female" class="border w-full text-sm">Female</option>
                                            <option value="male & female" class="border w-full text-sm">Male & Female</option>
                                            <option value="others" class="border w-full text-sm">Others</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select id="preferred_lang" name="preferred_lang"
                                            class="border text-center py-2 px-3 w-full text-sm text-gray-400">
                                            <option value="" class="border text-center w-full">Select</option>
                                            <option value="english" class="border w-full text-sm">English</option>
                                            <option value="hindi" class="border w-full text-sm">Hindi</option>
                                            <option value="hindi english" class="border w-full text-sm">Hindi + English
                                            </option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select id="type" name="type"
                                            class="border text-center py-2 px-2 w-full text-sm text-gray-400">
                                            <option value="" class="border text-center w-full">Select</option>
                                            <option value="full-time" class="border w-full text-sm">Full-Time</option>
                                            <option value="part-time" class="border w-full text-sm">Part-Time</option>
                                            <option value="temporary" class="border w-full text-sm">Temporary</option>
                                            <option value="part-time&full-time" class="border w-full text-sm">Part-Time & Full-Time</option>
                                            <option value="work from ome" class="border w-full text-sm">Work From Home</option>
                                        </select>
                                    </td>
                                    <td class="py-1">
                                        <select id="qualification" name="qualification"
                                            class="border text-center py-2 px-2 w-full text-sm text-gray-400">
                                            <option value="" class="border text-center w-full">Select</option>
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
                                            <input type="number" id="min_salary" name="min_salary" placeholder="From"
                                                class="border py-1 px-2 w-1/2 text-black text-sm">
                                            <input type="number" id="max_salary" name="max_salary" placeholder="To"
                                                class="py-1 px-2 text-black border w-1/2 text-sm">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3 items-center w-1/2">
                            <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                            <input type="text" id="city" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="Purnea" disabled>
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                            <input type="text" id="state" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="Bihar" disabled>
                        </div>
                    </div>
                    <div class="mb-3 items-center">
                        <label for="description" class="block text-gray-700 text-sm mb-2">Job Description</label>
                        <textarea name="description" id="description" cols="20" rows="2"
                            placeholder="Type Or Details Of Job Here" class="shadow appearance-none border py-1 px-2 w-full" disabled></textarea>
                    </div>
                    <div class="mb-3 flex items-center">
                        <h3 class="font-semibold">Recruiter details</h3>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3 items-center w-1/2">
                            <label for="company_name" class="block text-gray-700 text-sm mb-2">Hiring for (Company
                                name)</label>
                            <input type="text" id="company_name"
                                class="shadow appearance-none border py-1 px-2 w-full" placeholder="Abc Pvt. Ltd."
                                disabled>
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="website" class="block text-gray-700 text-sm mb-2">Company's Website (if
                                any)</label>
                            <input type="url" id="website" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="abc.com" disabled>
                        </div>
                    </div>
                    <div class="mb-3 flex gap-2">
                        <div class="mb-3 items-center w-1/2">
                            <label for="mobile" class="block text-gray-700 text-sm mb-2">Phone</label>
                            <input type="tel" id="mobile" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="9876543210" disabled>
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="alt_mobile" class="block text-gray-700 text-sm mb-2">Alternate Phone</label>
                            <input type="tel" id="alt_mobile" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="9876543210" disabled>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="mb-3 items-center w-1/2">
                            <label for="email" class="block text-gray-700 text-sm mb-2">Email</label>
                            <input type="email" id="email" class="shadow appearance-none border py-1 px-2 w-full"
                                placeholder="roni@gmail.com" disabled>
                        </div>
                        <div class="mb-3 items-center w-1/2">
                            <label for="logo" class="block text-gray-700 text-sm mb-2">Company's Logo / Image</label>
                            <img id="logo-preview" src="" alt="Logo Preview" class="mt-2"
                                style="max-width: 100px;">

                        </div>
                    </div>
                    <div class="mb-4">
                        <select name="plan_id" id="callingPlans">
                            <option>Select Plan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <div id="planCharge"></div>
                    </div>
                    <div class="mb-4">
                        <select name="isApproved" id="isApproved">
                            <option value="">Update</option>
                            <option value="1">Approve Now</option>
                            <option value="0">Not Approved</option>
                        </select>
                    </div>
                    <div class="mb-3 flex justify-center gap-5">
                        <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-white">
                            Update Now
                        </button>
                        <button type="button"
                            class="delete-btn bg-red-600 hover:bg-red-700 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-white">
                            Delete Job
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            // Function to fetch job details 

            $.ajax({
                type: "GET",
                url: "{{ route('hire.plan.index') }}",
                success: function(response) {
                    let select = $("#callingPlans");
                    response.data.forEach((plan) => {
                        select.append(`<option value="${plan.id}">${plan.name}</option>`);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching calling plans:', error);
                }
            });

            function fetchJobDetailsAndOpenModal() {
                let id = getIdFromUrlPath();

                $.ajax({
                    type: 'GET',
                    url: `{{url('/api/hire-role/view/${id}')}}`,
                    success: function(response) {
                        console.log(response);
                        $('#id').val(response.data.id);
                        $('#title').val(response.data.title);
                        $('#profile').val(response.data.profile);
                        $('#no_of_post').val(response.data.no_of_post);
                        $('#min_experience').val(response.data.min_experience);
                        $('#max_experience').val(response.data.max_experience);
                        $('#min_salary').val(response.data.min_salary);
                        $('#max_salary').val(response.data.max_salary);
                        $('#gender').val(response.data.gender);
                        $('#preferred_lang').val(response.data.preferred_lang);
                        $('#type').val(response.data.type);
                        $('#qualification').val(response.data.qualification);
                        $('#isApproved').val(response.data.isApproved);
                        $('#name').val(response.data.hire.name);
                        $('#city').val(response.data.hire.city);
                        $('#state').val(response.data.hire.state);
                        $('#description').val(response.data.hire.description);
                        $('#company_name').val(response.data.hire.company_name);
                        $('#website').val(response.data.hire.website);
                        $('#mobile').val(response.data.hire.mobile);
                        $('#alt_mobile').val(response.data.hire.alt_mobile);
                        $('#email').val(response.data.hire.email);
                        $('#date_of_start').val(response.data.hire.date_of_start);
                        $('#callingPlans').val(response.data.hire.hire_plan_id);
                        $('#logo-preview').attr('src', '/image/company/logo/' + response.data.hire.logo);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

            // Function to extract ID from URL path
            function getIdFromUrlPath() {
                let pathArray = window.location.pathname.split('/');
                return pathArray[pathArray.length - 1];
            }

            // Form submission handler
            $('#addHirer').submit(function(e) {
                e.preventDefault();
                let userId = getIdFromUrlPath();
                let formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: `{{url('/api/hire-role/edit/${userId}')}}`,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert("Success: " + response.message);
                        $("#addHirer").trigger("reset");
                        window.location.href = "/admin/manage-hire";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Plan Details:', error);
                    }
                });
            });

            // Delete Yojna with confirmation
            $(document).on('click', '.delete-btn', function() {
                let id = getIdFromUrlPath();

                // Confirm deletion
                if (confirm("Are you sure you want to delete this Job?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `{{url('/api/hire-role/delete/${id}')}}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log('Hire deleted successfully:', response);
                            window.location.href =
                            "/admin/manage-hire"; // Redirect to manage page
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Data:', error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
