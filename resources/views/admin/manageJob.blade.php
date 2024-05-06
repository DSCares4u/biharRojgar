@extends('admin.adminBase')

@section('content')
    <div class="flex-1 flex mt-20 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Applied Jobs (<span id="counting">0</span>)</h1>
        <a href="/admin/manage-job/insert" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
            <i class="fas fa-plus"></i> Add New Candidate</a>

    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="pb-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" name="query" id="searchInput"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Candidate By Name">
                </div>
            </div>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Age/Gender</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Mobile</th>
                        
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody id="callingAppointment">
                     <tr class="mt-5 capitalize">
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Line Bazar, Purnea</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">894561236</td>

                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                {{-- <button class="mx-8 text-sm"><svg xmlns="http://www.w3.org/2000/svg"class="h-5" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></button> --}}

                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                <button type='button' class='py-1 px-2  '><svg  class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </td>
                        </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="10" class="p-3 flex items-center justify-center">
                            <div id="pagination" class="">
                            </div>
                        </th>
                    </tr>
                </tfoot>
        </div>
    </div>

    {{-- edit modal --}}
    <div id="default-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="editAppointmentModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4" id="editAppointment">Edit Appointment</h5>
                    <form id="editAppointmentForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="editAppointmentId" name="id">
                        <div class="flex gap-2 mb-4">
                            <div class="w-1/2">
                                <label for="editName" class="block text-sm font-medium text-gray-700">Patient's Name</label>
                                <input type="text" id="editName" name="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. abc kumar">
                            </div>
                            <div class=" w-1/2">
                                <label for="editMobile" class="block text-sm font-medium text-gray-700">Contact
                                    No.</label>
                                <input type="tel" id="editMobile" name="mobile"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 1234567890">
                            </div>
                        </div>
                        <div class="flex gap-2 mb-4">
                            <div class=" w-1/2">
                                <label for="editAge" class="block text-sm font-medium text-gray-700">Age</label>
                                <input type="number" id="editAge" name="age"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 45">
                            </div>
                            <div class=" w-1/2">
                                <label for="editGender" class="block text-sm font-medium text-gray-700">Gender</label>
                                <select name="gender" id="editGender"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                                    <option value="">Select Gender</option>
                                    <option selected value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-2 mb-4">
                            <div class=" w-1/2">
                                <label for="editCallingDoctors"
                                    class="block text-sm font-medium text-gray-700">Doctor</label>
                                <select name="doctor_id" id="editCallingDoctors"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                                    <option value="">Select Doctor / Hospital</option>
                                    <!-- calling doctor dynamically -->
                                </select>
                            </div>
                            <div class=" w-1/2">
                                <label for="editAppointmentDate" class="block text-sm font-medium text-gray-700">Date Of
                                    Appointment</label>
                                <select name="appointment_date" id="editAppointmentDate"
                                    class="border border-gray-300  shadow-sm  w-full rounded-md mt-1">
                                    <option value="{{ \Carbon\Carbon::now()->toDateString() }}" selected>Today <p
                                            id="isAvailable"></p>
                                    </option>
                                    @for ($i = 1; $i <= 3; $i++)
                                        <option value="{{ \Carbon\Carbon::now()->addDays($i)->toDateString() }}">
                                            {{ \Carbon\Carbon::now()->addDays($i)->format('D d M') }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="editAddress" class="block text-sm font-medium text-gray-700">Address</label>
                            <textarea name="address" id="editAddress" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </textarea>
                        </div>
                        <div class=" w-1/2 mb-2">
                            <label for="editPaymentStatus" class="block text-sm font-medium text-gray-700">Payment
                                Status</label>
                            <select name="payment_status" id="editPaymentStatus"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                                <option value="">Choose</option>
                                <option value="paid">PaY Now</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEditAppointment"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- 
    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingAppointment = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('appointment.index') }}",
                    success: function(response) {
                        let table = $("#callingAppointment");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                            <tr class="hover:bg-gray-100 mt-5 px-3 py-3 capitalize">
                                <td class="border-b border-gray-200 text-center text-sm">${data.id}</td>      
                                <td class="border-b border-gray-200 text-center text-sm">${data.name}</td>      
                                <td class="border-b border-gray-200 text-center text-sm">${data.age}/${data.gender}</td>      
                                <td class="border-b border-gray-200 text-center text-sm">${data.mobile}</td>      
                                <td class="border-b border-gray-200 text-center text-sm">${data.doctor.name}</td>      
                                <td class="border-b border-gray-200 text-center text-sm">${data.appointment_date}</td>      
                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                    <a href='/admin/manage-appointment/view/${data.id}'>
                                        <button class=" py-1 px-2 "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                                    </a>  
                                    <button type='button' class="py-1 px-2 editBtn" data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                    </button>
                                    <button type='button' class='py-1 px-2 delete-btn' data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                    </button>
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
            $(document).on('click', '.delete-btn', function() {
                let appointmentId = $(this).data('id');
                let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token
                $.ajax({
                    type: 'DELETE',
                    url: `/api/admin/manage-appointment/delete/${appointmentId}`,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                    },
                    success: function(response) {
                        // console.log("Delete Data Successfully");
                        swal("message", response.message, "message");
                        callingAppointment(); // Fetch students again after successful deletion
                    },
                    error: function(xhr, status, error) {
                        console.error("Error Deleting Data:", error);
                    }
                });
            });
            // Edit Appointment Work

            $(document).on('click', '.editBtn', function() {
                let appointmentId = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `/api/admin/manage-appointment/edit/${appointmentId}`,
                    success: function(response) {
                        $('#editAppointmentId').val(response.data.id);
                        $('#editName').val(response.data.name);
                        $('#editMobile').val(response.data.mobile);
                        $('#editAge').val(response.data.age);
                        $('#editGender').val(response.data.gender);
                        $('#editCallingDoctors').val(response.data.doctor_id);
                        $('#editAddress').val(response.data.address);
                        $('#editAppointmentDate').val(response.data.appointment_date);
                        $('#editPaymentStatus').val(response.data.payment_status);
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Appointment details for editing:', error);
                    }
                });
            });

            $('#editAppointmentForm').submit(function(e) {
                e.preventDefault();
                let AppointmentId = $('#editAppointmentId').val();
                let formData = {
                    name: $('#editName').val(),
                    mobile: $('#editMobile').val(),
                    age: $('#editAge').val(),
                    gender: $('#editGender').val(),
                    address: $('#editAddress').val(),
                    appointment_date: $('#editAppointmentDate').val(),
                    payment_status: $('#editPaymentStatus').val(),
                    appointment_type: $('input[name="inline-radio-group"]:checked').val(),
                    doctor_id: $('#editCallingDoctors').val(),
                };
                // formData.append('appointment_type', $('input[name="inline-radio-group"]:checked').val());

                $.ajax({
                    type: 'PUT',
                    url: `/api/admin/manage-appointment/edit/${AppointmentId}`,
                    data: formData,
                    success: function(response) {
                        swal("Success", response.message, "message");
                        $('#default-modal').addClass('hidden');
                        swal("Success", response.message, "message");
                        callingAppointment(); // Assuming you have a function to fetch Docotor
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Appointment:', error);
                    }
                });
            });

            // AJAX call to fetch doctors
            $.ajax({
                type: "GET",
                url: "{{ route('doctor.index') }}",
                success: function(response) {
                    let select = $("#editCallingDoctors");
                    select.empty();
                    select.append(`<option value="">Select Doctor / Hospital</option>`)
                    response.data.forEach((doctor) => {
                        select.append(`
                            <option value="${doctor.id}"
                                data-visiting-fee="${doctor.visiting_charge}" data-online-fee="${doctor.online_charge}"> ${doctor.name}
                            </option>
                         `);
                    });
                }
            });

            // Function to update fees based on appointment type
            function updateFees(appointmentType) {
                if (appointmentType === 'video') {
                    $('#visitingCharge').empty();
                    $('#onlineCharge').html('<p>Online Consultation Fee: $XX</p>'); // Replace $XX with actual fee
                } else if (appointmentType === 'clinic') {
                    $('#onlineCharge').empty();
                    $('#visitingCharge').html('<p>Visiting Clinic Fee: $XX</p>'); // Replace $XX with actual fee
                }
            }

            // Event listener for doctor selection
            $('#editCallingDoctors').change(function() {
                let selectedDoctor = $(this).children("option:selected");
                let visitingFee = selectedDoctor.data('visiting-fee');
                let onlineFee = selectedDoctor.data('online-fee');

                // Update the fee display
                $('#visitingCharge').html(
                    `<input id="inline-radio" type="radio" value="clinic" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visiting Charge Rs. ${visitingFee}</label>`
                );

                $('#onlineCharge').html(
                    `<input id="inline-radio" type="radio" value="video" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Video Consult Rs. ${onlineFee}</label>`
                );
            });


            // Event listener for appointment type selection
            $('input[name="inline-radio-group"]').change(function() {
                let appointmentType = $(this).val();
                updateFees(appointmentType);
            });

            // Cancel edit Appointment button click handler
            $('#cancelEditAppointment').click(function() {
                $('#default-modal').addClass('hidden');
            });

            callingAppointment();
        });
    </script> --}}
@endsection
