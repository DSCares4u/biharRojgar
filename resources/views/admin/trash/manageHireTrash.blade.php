@extends('admin.adminBase')
@section('content')
<div class="flex-1 flex gap-3  items-center  mt-20 mb-5">
    <a href="{{url('/admin/manage/trash/sarkari-job')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Sarkari Job Trash</button></a>
    <a href="{{url('/admin/manage/trash/yojna')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Yojna Trash</button></a>
    <a href="{{url('/admin/manage/trash/yojna-category')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Yojna Category Trash</button></a>
    <a href="{{url('/admin/manage/trash/candidate')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Candidate Trash</button></a>
    <a href="{{url('/admin/manage/trash/role')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Private Job Trash</button></a>
    <a href="{{url('/admin/manage/trash/hire')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Hire Company Trash</button></a>
    <a href="{{url('/admin/manage/trash/hire-plan')}}"><button class="py-2 px-4 rounded-lg text-white restore-btn bg-orange-400 hover:bg-orange-500">Hire Plan Trash</button></a>
</div>

    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class="mb-2">Hire Company Trash</h1>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Address</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Action</th>
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
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{url('/api/hire/trash')}}",
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
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.city},${data.state}</td>
                                        <td class="border-b border-gray-200 px-3  flex gap-2 justify-center py-2 text-sm">
                                            <button class="py-2 px-4 rounded-lg text-white restore-btn bg-green-500" data-id="${data.id}">Restore</button>
                                            <button class="py-2 px-4 rounded-lg text-white force-delete-btn bg-red-500" data-id="${data.id}">Delete</button>
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

            // Restoring data

            $(document).on('click', '.restore-btn', function() {
                let id = $(this).data('id');
                    $.ajax({
                    type: "PATCH",
                    url: `{{url('/api/hire/restore/${id}')}}`,
                    success: function(response) {
                        alert(response.message);
                        callingData();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

            // Permanent Delete  Of data

            $(document).on('click', '.force-delete-btn', function() {
                let id = $(this).data('id');

                // Confirm deletion
                if (confirm("Are you sure you want to Permanently delete this Data?")) {
                    $.ajax({
                        type: 'DELETE',
                        url: `{{url('/api/hire/forceDelete/${id}')}}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            swal("success", response.message, "message");
                            callingData();
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting Data:', error);
                        }
                    });
                }
            });
            callingData();
        });
    </script>
@endsection
