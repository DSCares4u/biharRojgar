@extends('admin.adminBase')
@section('content')

<div class="flex-1 flex mt-20 items-center justify-between ">
    <h1 class="text-lg font-semibold  py-2">Sarkari Job Applied Forms (<span id="counting">0</span>)</h1>
    {{-- <a href="/admin/manage/yojna-form/insert" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
        <i class="fas fa-plus"></i>Add New Yojna Form</a> --}}
</div>
<div class="overflow-x-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Yojna</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
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
        </div>
    </div>
    <script>
         $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('sarkari.job.apply.index') }}",
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
                                 <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.name}</td> 
                                 <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.yojna.ename}</td> 
                                  <td class="border-b border-gray-200 px-3  flex justify-center py-2 text-sm">
                                        <a href='/admin/manage/yojna-form/${data.id}'
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
            callingData();
        });
    </script>


@endsection