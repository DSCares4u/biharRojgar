@extends('hirer.hirerBase')
@section('title', 'Application')
@section('content')

<main class="p-6">
        <!-- Stats Section -->
    <main>
       
        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Pending Applications</h3>
            </div>
            <table class="w-full text-left table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Candidate Name</th>
                        <th class="px-4 py-2">Applied for</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>    

                <tbody>                    
                    @foreach ($applications as $item)
                    <tr>
                        <td class="px-4 py-2">{{$item->user->name}}</td>
                        <td class="px-4 py-2">{{$item->role->title}}</td>
                        <td class="px-4 py-2">
                            <span class="bg-green-100 text-green-800 text-sm px-2 py-1 rounded">Pending</span>
                            <select class="ml-2 border border-gray-300 text-sm px-2 py-1 rounded">
                                <option value="">Select</option>
                                <option value="approve">Approve</option>
                                <option value="reject">Reject</option>
                            </select>
                        </td>
                        
                        <td class="px-4 py-2">{{$item->created_at}}</td>
                        <td class="px-4 py-2">
                            <a href="{{ url('hirer/application/edit/' . $item->id) }}">
                                <button class="text-blue-600 hover:underline">View</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
