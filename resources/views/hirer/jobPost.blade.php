@extends('hirer.hirerBase')
@section('title', 'Job Post')
@section('content')<main class="p-6">
        <!-- Stats Section -->
    <main>
        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Recent Job Posted</h3>
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
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-2">Reject</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
