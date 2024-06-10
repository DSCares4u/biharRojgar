@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg mt-2">
                    <h3 class="text-xl font-semibold mt-2">Add New Hirer</h3>
                </div>
                <form class="p-5 flex flex-col" id="addHirer">
                    <h2 class="text-lg font-semibold mb-2  ">Verify a Hirer</h2>
                    <div class="mb-3  items-center">
                    {{-- <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                    <input type="text" id="name"
                        name="name"placeholder="Eg. Sales executives needed urgently for ..."
                        class="shadow appearance-none border py-1 px-2 w-full" >
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
                        <input type="file" id="logo" name="logo"  class="py-1 px-2 w-full"  >
                    </div>
                </div>
                <div class="mb-4">
                    <select name="plan_id" id="callingPlans">
                        <option value="">Select Plan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <div id="planCharge"></div>
                </div> --}}
                    <div class="mb-4">
                        <select name="isApproved" id="isApproved">
                            <option value="">Update</option>
                            <option value="1">Approve Now</option>
                            <option value="0">Don't Approved </option>
                        </select>
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
        // Set CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Function to fetch job details and open modal
        function fetchJobDetailsAndOpenModal() {
            let userId = getIdFromUrlPath();

            $.ajax({
                type: 'GET',
                url: `/api/hire/view/` + userId,
                success: function(response) {
                    $('#id').val(response.data.id);
                    $('#isApproved').val(response.data.isApproved);
                    $('#name').val(response.data.name);
                    $('#city').val(response.data.city);
                    $('#state').val(response.data.state);
                    $('#description').val(response.data.description);
                    $('#company_name').val(response.data.company_name);
                    $('#website').val(response.data.website);
                    $('#mobile').val(response.data.mobile);
                    $('#alt_mobile').val(response.data.alt_mobile);
                    $('#email').val(response.data.email);
                    $('#callingPlans').val(response.data.callingPlans);
                    // Handling file input separately due to browser security
                    // $('#logo').val(response.data.logo); // Not applicable for file inputs
                    // Assuming response.data.inputs is an array of objects
                    if (response.data.inputs && response.data.inputs.length > 0) {
                        let input = response.data.inputs[0]; // Assuming only one input object is returned
                        $('[name="inputs[0][\'profile\']"]').val(input.profile);
                        $('[name="inputs[0][\'no_of_post\']"]').val(input.no_of_post);
                        $('[name="inputs[0][\'experience\']"]').val(input.min_experience);
                        $('[name="inputs[0][\'gender\']"]').val(input.gender);
                        $('[name="inputs[0][\'preferred_lang\']"]').val(input.preferred_lang);
                        $('[name="inputs[0][\'type\']"]').val(input.type);
                        $('[name="inputs[0][\'qualification\']"]').val(input.qualification);
                        $('[name="inputs[0][\'salary\']"]').val(input.min_salary);
                    }
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
            let formData = {
                // name: $('#name').val(),
                // city: $('#city').val(),
                // state: $('#state').val(),
                // description: $('#description').val(),
                // company_name: $('#company_name').val(),
                // website: $('#website').val(),
                // mobile: $('#mobile').val(),
                // alt_mobile: $('#alt_mobile').val(),
                // email: $('#email').val(),
                // plan_id: $('#callingPlans').val(),
                isApproved: $('#isApproved').val(),
                // logo: $('#logo').prop('files')[0],
                // inputs: [
                //     {
                //         profile: $('[name="inputs[0][\'profile\']"]').val(),
                //         no_of_post: $('[name="inputs[0][\'no_of_post\']"]').val(),
                //         min_experience: $('[name="inputs[0][\'experience\']"]').val(),
                //         gender: $('[name="inputs[0][\'gender\']"]').val(),
                //         preferred_lang: $('[name="inputs[0][\'preferred_lang\']"]').val(),
                //         type: $('[name="inputs[0][\'type\']"]').val(),
                //         qualification: $('[name="inputs[0][\'qualification\']"]').val(),
                //         min_salary: $('[name="inputs[0][\'salary\']"]').val(),
                //         max_salary: $('[name="inputs[0][\'salary\']"]').val()
                //     }
                // ]
            };

            $.ajax({
                type: 'PUT',
                url: `/api/hire/edit/${userId}`,
                data: formData,
                success: function(response) {
                    alert("Success: " + response.message); // Use alert for success message
                    $("#addHirer").trigger("reset");
                    window.location.href = "/admin/manage-hire"; // Use window.location.href instead of window.open for navigation
                },
                error: function(xhr, status, error) {
                    console.error('Error updating Plan Details:', error);
                }
            });
        });
    });
</script>

@endsection
