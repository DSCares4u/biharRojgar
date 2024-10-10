@extends('admin.adminBase')
@section('content')
    <div class="flex-1 flex mt-20 items-center justify-between">
        <h1 class="text-lg font-semibold py-2">Manage Yojna (<span id="counting">0</span>)</h1>
        <a href="{{url('/admin/manage-yojna/insert')}}" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
            <i class="fas fa-plus"></i> Add New Yojna
        </a>
    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="search-container text-center mb-3"></div>
            <table class="min-w-full bg-white border border-gray-200" id="callingPlan">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">Sr. No.</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">Hindi Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">English Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">Price</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">Status</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm text-center">Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th colspan="5" class="p-3 flex items-center justify-center">
                            <div id="pagination" class=""></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="flex justify-end mt-4">
        <button onclick="printTable()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Print This Page
        </button>
    </div>

    <script>
        $(document).ready(function() {
            let dataTable = $('#callingPlan').DataTable({
                "searching": true,
                "paging": true,
                "info": true,
                "destroy": true,
                "dom": '<"search-container"f>t<"bottom"p>',
                "language": {
                    "search": "",
                    "searchPlaceholder": "Search..."
                },
                "columnDefs": [{
                    "orderable": false,
                    "targets": [1,2,3,4] // Make 'Actions' column non-sortable
                }],
                "drawCallback": function(settings) {
                    alignTableHeaders();
                }
            });

            // Center the search box
            $('.search-container').addClass('d-flex justify-content-center').css('margin-bottom', '10px');

            // Function to fetch and display data
            let callingPlans = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.index') }}",
                    success: function(response) {
                        let tableBody = $("#callingPlan tbody");
                        tableBody.empty();
                        let data = response.data;

                        // Update count
                        let len = data.length;
                        $("#counting").html(len);

                        // Populate rows
                        data.forEach((data, index) => {
                            tableBody.append(`
                                <tr class="mt-5 text-center border-b border-gray-200">
                                    <td class="flex justify-center item-center text-center px-3 py-2 text-sm">${index + 1}</td> 
                                    <td class=" px-3 py-2 text-sm">${data.hname}</td> 
                                    <td class=" px-3 py-2 text-sm">${data.ename}</td> 
                                    <td class=" px-3 py-2 text-sm">Rs.${data.fees}</td>
                                     <td class="text-sm border-b border-gray-200 p-2" style="text-align:center;">
                                        <label class="inline-flex items-center mb-5 cursor-pointer">
                                                <input type="checkbox" class="sr-only peer status-toggle" data-id="${data.id}" ${data.status == 1 ? 'checked' : ''}>
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </td>
                                    <td class=" px-3 flex justify-center py-2 text-sm">
                                        <a href="{{url('/admin/manage-yojna/${data.id}')}}" class="py-1 px-2">
                                            <svg class="w-5 h-5 text-gray-500 transition duration-75 hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>    
                            `);
                        });

                        // Redraw DataTable with updated data
                        dataTable.clear().rows.add($(tableBody).find('tr')).draw();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingPlans();

            $(document).on('change', '.status-toggle', function() {
                let id = $(this).data('id');
                let status = $(this).is(':checked') ? 1 : 0;
                
                $.ajax({
                    type: 'PUT',
                    url: `{{url('/api/yojna/status/${id}')}}`,
                    data: { status: status },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response); 
                        swal("Success", response.message, "success");
                        callingPlans(); 
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Details:', error);
                    }
                });
            });
        });

        function alignTableHeaders() {
            $('#callingPlan thead th').each(function(index) {
                $(this).css('text-align', 'center');
            });
        }

        function printTable() {
            let printContents = document.getElementById('callingPlan').outerHTML;
            let originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

  
@endsection
