@extends('admin.adminBase')

@section('content')
    <div class="flex-1 flex mt-20 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Job Forms (<span id="counting">0</span>)</h1>
        <div class="flex space-x-4 md:order-3 mt-4 md:mt-0">
            <form action="" id="uploadForm">
                <label class="inline-block px-4 py-2 text-white bg-green-500 rounded cursor-pointer hover:bg-green-700">
                    Upload New Form
                    <input type="file" name="form" class="hidden" id="formFile" />
                </label>
            </form>
        </div>
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
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Photo</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Form</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Proof</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Certificate</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody id="callingData"></tbody>
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
    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingHire = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('manual.job.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                            <tr class="mt-5 capitalize">
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.id}</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.name}</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <a href="/image/manualJob/photo/${data.photo}" target="_blank" class="inline-block px-4 py-2">
                                    <img src="/image/manualJob/photo/${data.photo}" class="w-16" alt="Form Thumbnail">
                                </a>
                            </td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <a href="/image/manualJob/form/${data.form}" target="_blank" class="inline-block px-4 py-2">
                                    <img src="/image/manualJob/form/${data.form}" class="w-16" alt="Form Thumbnail">
                                </a>
                            </td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <a href="/image/manualJob/id_proof/${data.id_proof}" target="_blank" class="inline-block px-4 py-2">
                                    <img src="/image/manualJob/id_proof/${data.id_proof}" class="w-16" alt="Form Thumbnail">
                                </a>
                            </td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <a href="/image/manualJob/certificate/${data.certificate}" target="_blank" class="inline-block px-4 py-2">
                                    <img src="/image/manualJob/certificate/${data.certificate}" class="w-16" alt="Form Thumbnail">
                                </a>
                            </td>
                           <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                               <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>

                               <button type='button' class='delete-btn py-1 px-2  '><svg  class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
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
            callingHire();
        });

        $(document).ready(function() {
            // Event listener for file input change
            $('#formFile').change(function() {
                // Check if a file has been selected
                if (this.files && this.files[0]) {
                    // Trigger the form submit
                    $('#uploadForm').submit();
                }
            });

            // Form submit handler
            $("#uploadForm").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('manual.job.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#uploadForm").trigger("reset");
                        window.open("/admin/manage/manual-job", "_self");
                    },
                    error: function(xhr, status, error) {
                        alert('Unable to Upload');
                        console.error('Error:', error);
                    }
                });
            });
                // Delete Yojna with confirmation
                $(document).on('click', '.delete-btn', function() {
                    let id = getIdFromUrlPath();

                    // Confirm deletion
                    if (confirm("Are you sure you want to delete this Form ?")) {
                        $.ajax({
                            type: 'DELETE',
                            url: `/api/manual-job/delete/${id}`,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                console.log('Form deleted successfully:', response);
                                window.location.href =
                                "/admin/manage/manual-job"; // Redirect to manage page
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
