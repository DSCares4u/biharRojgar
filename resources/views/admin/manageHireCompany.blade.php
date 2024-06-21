@extends('admin.adminBase')
@section('content')
    <div class="flex-1 flex mt-20 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Companies (<span id="counting">0</span>)</h1>
    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Company Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Mobile</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Address</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Action</th>
                    </tr>
                </thead>
                <tbody id="callingData"></tbody>
                <tfoot>
                    <tr>
                        <th colspan="10" class="p-3 flex items-center justify-center">
                            <div id="pagination" class=""></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    {{-- edit company modal --}}

    <div id="default-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="editModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4">Edit Company Detail</h5>
                    <form id="editForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="id">
                        <div class="mb-3 flex gap-2">
                            <div class="mb-3 items-center w-1/2">
                                <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                                <input type="text" id="city" name="city"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="Purnea">
                            </div>
                            <div class="mb-3 items-center w-1/2">
                                <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                                <input type="text" id="state" name="state"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="Bihar">
                            </div>
                        </div>
                        <div class="mb-3 items-center">
                            <label for="description" class="block text-gray-700 text-sm mb-2">Job Description</label>
                            <textarea name="description" id="description" name="description" cols="20" rows="2"
                                placeholder="Type Or Details Of Job Here" class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                        </div>
                        <div class="mb-3 flex items-center">
                            <h3 class="font-semibold">Recruiter details</h3>
                        </div>
                        <div class="mb-3 flex gap-2">
                            <div class="mb-3 items-center w-1/2">
                                <label for="company_name" class="block text-gray-700 text-sm mb-2">Hiring for (Company
                                    name)</label>
                                <input type="text" id="company_name" name="company_name"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="Abc Pvt. Ltd.">
                            </div>
                            <div class="mb-3 items-center w-1/2">
                                <label for="website" class="block text-gray-700 text-sm mb-2">Company's Website (if
                                    any)</label>
                                <input type="url" id="website" name="website"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="abc.com">
                            </div>
                        </div>
                        <div class="mb-3 flex gap-2">
                            <div class="mb-3 items-center w-1/2">
                                <label for="mobile" class="block text-gray-700 text-sm mb-2">Phone</label>
                                <input type="tel" id="mobile" name="mobile"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="9876543210">
                            </div>
                            <div class="mb-3 items-center w-1/2">
                                <label for="alt_mobile" class="block text-gray-700 text-sm mb-2">Alternate Phone</label>
                                <input type="tel" id="alt_mobile" name="alt_mobile"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="9876543210">
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div class="mb-3 items-center w-1/2">
                                <label for="email" class="block text-gray-700 text-sm mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                    class="shadow appearance-none border py-1 px-2 w-full" placeholder="roni@gmail.com">
                            </div>
                            <div class="mb-3 items-center w-1/2">
                                <img id="logo-preview" src="" alt="Logo Preview" class="mt-2"
                                    style="max-width: 100px;">
                                <input type="file" name="logo" class="">

                            </div>
                        </div>
                        <div class="flex">
                            <div class="mb-4 w-1/2">
                                <select name="plan_id" id="callingPlans">
                                    <option>Select Plan</option>
                                </select>

                            </div>
                            <div class="items-center w-1/2">
                                <label for="city" class="block text-gray-700 text-sm mb-2">Date Of Start</label>
                                <input type="text" id="date_of_start" name="date_of_start"
                                    class="shadow appearance-none border py-1 px-2 w-1/2"disabled >
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEdit"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
                            <button type="button" id="delete"
                                class="delete-btn inline-block px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                        </div>
                    </form>
                </div>
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

            // Function to fetch and display appointment
            let callingPlans = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('hire.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                            <tr class="mt-5">
                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.id}</td> 
                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.company_name}</td> 
                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.mobile}</td> 
                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.city},${data.state}</td> 

                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                    <button class=" py-1 px-2 editBtn "data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                </td>
                            </tr>    
                        `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            // Edit  Work

            $(document).on('click', '.editBtn', function() {
                let id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `/api/hire/view/${id}`,
                    success: function(response) {
                        $('#id').val(response.data.id);
                        $('#company_name').val(response.data.company_name);
                        $('#date_of_start').val(response.data.date_of_start);
                        $('#state').val(response.data.state);
                        $('#city').val(response.data.city);
                        $('#website').val(response.data.website);
                        $('#description').val(response.data.description);
                        $('#email').val(response.data.email);
                        $('#mobile').val(response.data.mobile);
                        $('#alt_mobile').val(response.data.alt_mobile);
                        $('#callingPlans').val(response.data.plan_id);
                        $('#logo-preview').attr('src', '/image/company/logo/' + response.data
                            .logo);
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching  details for editing:', error);
                    }
                });
            });

            $('#editForm').submit(function(e) {
                e.preventDefault();
                let id = $('#id').val();
                let formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: `/api/hire/edit/${id}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#default-modal').addClass('hidden');
                            swal("success", response.message, "message");
                            callingPlans();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Details:', error);
                    }
                });
            });

            // Cancel edit Doctor button click handler
            $('#cancelEdit').click(function() {
                $('#default-modal').addClass('hidden');
            });

            $(document).on('click', '.delete-btn', function() {
                let id = $('#id').val();

                // Confirm deletion
                if (confirm("Are you sure you want to delete this Company?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `/api/hire/delete/${id}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#default-modal').addClass('hidden');
                            swal("success", response.message, "message");
                            callingPlans();
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Data:', error);
                        }
                    });
                }
            });
            callingPlans();
        });
    </script>
@endsection
