@extends('admin.adminBase')

@section('content')
    <div class="flex-1 flex mt-20 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Candidate (<span id="counting">0</span>)</h1>
        <a href="/admin/manage-candidate/register" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
            <i class="fas fa-plus"></i> Add New Candidate</a>

    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- <div class="pb-4">
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
            </div> --}}
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">DOB/Gender</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Mobile</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Email</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">City</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">State</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody id="callingCandidates"></tbody>
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
            let callingCandidates = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('candidate.index') }}",
                    success: function(response) {
                        let table = $("#callingCandidates");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                        <tr class="mt-5">
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.id}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.name}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.dob}/${data.gender}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.mobile}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.email}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.city}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.state}</td> 
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <a href='/admin/manage-candidate/edit/${data.id}'>
                                    <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                </a>
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
            callingCandidates();
        });
    </script>
@endsection
