@extends('hirer.hirerBase')
@section('title', 'Job Post')
@section('content')

@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6',
        });
    });
</script>
@endif
@if ($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Whoops! Something went wrong.',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33',
        });
    });
</script>
@endif

<main class="p-6">
        <!-- Stats Section -->
    <main>
        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4 border-b border-gray-200 flex justify-between">
                <h3 class="text-lg font-semibold">Recent Job Posted</h3>
                <a href="{{url('/hirer/job-post/insert')}}" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
                    <i class="fas fa-plus"></i> Add New Job Role</a>
            </div>
            <table class="w-full text-left table-auto">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-4 py-2">Job Title</th>
                        <th class="px-4 py-2">Job Profile</th>
                        <th class="px-4 py-2">No. of Post</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forEach($job->roles as $i => $data)
                    <tr>
                        <td class="px-4 py-2">{{$data->profile}}</td>
                        <td class="px-4 py-2">{{$data->title}}</td>
                        <td class="px-4 py-2">{{$data->no_of_post}}</td>
                        <td class="px-4 py-2">
                            <span class="bg-green-100 text-green-800 text-sm px-2 py-1 rounded">Shortlisted</span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="{{url(`/hirer/job-post/edit/${$data->id}`)}}">
                                <button class="text-blue-600 hover:underline">View</button>
                            </a>
                            <button class="text-red-600 hover:underline ml-2">Reject</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
