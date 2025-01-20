@extends('home.homebase')
@section('title', 'Profile')
@section('content')


    <div class="flex mt-10 bg-gray-300">
        <!-- Sidebar -->
        <!-- Main Content -->
        <div class="flex-1 flex flex-col  ">
            <!-- Navbar -->
            <div class="min-h-screen bg-gray-50 p-4 md:p-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Header Section -->
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Candidate detailed overview</h1>
                            <p class="text-gray-600 mt-2">Review the submitted details below.</p>
                        </div>
                        <div class="flex gap-5">
                           
                            <a href="{{ url('/add-candidate') }}">
                                <button
                                    class="flex items-center gap-2 bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition-colors">
                                    <i class="fas fa-edit"></i> Edit Details
                                </button>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline-block">
                                @csrf
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-700"> <i class="fa fa-signout"></i> Logout</button>
                            </form>
                        </div>


                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Personal Details Section -->
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center gap-3 mb-4">
                                <i class="fas fa-user text-teal-600 text-xl"></i>
                                <img src="" class="h-10  object-contain rounded-full">

                                <h2 class="text-xl font-semibold">Personal Details</h2>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Full name</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->name ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Date of Birth</p>
                                    <p class="font-medium">{{ $data->candidate->dob ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Gender</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->gender ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Religion</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->religion ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Father's name</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->father ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Mother's name</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->mother ?? 'N/a' }}</p>
                                </div>

                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Contact Number</p>
                                    <p class="font-medium">{{ $data->candidate->mobile ?? 'N/a' }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-medium">{{ $data->candidate->email ?? 'N/a' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Banking Details Section -->
                        <div class="bg-white p-6 rounded-xl shadow-md">

                            <div class="flex items-center gap-3 mb-4">
                                <i class="fas fa-university text-teal-600 text-xl"></i>
                                <h2 class="text-xl font-semibold">Education Details</h2>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-10">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">Highest Qualification</p>
                                        <p class="font-medium">{{ $data->address->qualification ?? 'N/a' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">College /Board</p>
                                        <p class="font-medium">{{ $data->address->board ?? 'N/a' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">State</p>
                                        <p class="font-medium">{{ $data->address->q_state ?? 'N/a' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">Passing year</p>
                                        <p class="font-medium">{{ $data->address->passing_year ?? 'N/a' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">Experience</p>
                                        <p class="font-medium">{{ $data->address->experience ?? 'N/a' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-500">Skills</p>
                                        <p class="font-medium">{{ $data->address->skills ?? 'N/a' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address Details Section -->
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center gap-3 mb-4">
                                <i class="fas fa-map-marker-alt text-teal-600 text-xl"></i>
                                <h2 class="text-xl font-semibold">Address Details</h2>
                            </div>
                            <div class="space-y-3 grid grid-cols-2 gap-4 mt-10">
                                <div>
                                    <p class="text-sm text-gray-500">Village</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->village ?? 'N/a' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Landmark</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->landark ?? 'N/a' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Area</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->area ?? 'N/a' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Postal Code</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->pincode ?? 'N/a' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">City</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->city ?? 'N/a' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">State</p>
                                    <p class="font-medium capitalize">{{ $data->candidate->state ?? 'N/a' }}</p>
                                </div>
                                {{-- <div>
                                    <p class="text-sm text-gray-500">Country</p>
                                    <p class="font-medium">India</p>
                                </div> --}}
                            </div>
                        </div>

                        <!-- Documents Section -->
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center gap-3 mb-4">
                                <i class="fas fa-file-alt text-teal-600 text-xl"></i>
                                <h2 class="text-xl font-semibold">Uploaded Documents</h2>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="text-sm text-gray-500">
                                            <img src="{{ $data->document && $data->document->photo ? asset('/image/candidate/photo/' . $data->document->photo) : asset('/image/default-placeholder.png') }}"  alt="Candidate Photo"  class="h-20 w-auto"></p>
                                        <span class="bg-orange-100 px-3 rounded-xl mt-4 py-1">Profile photo</span>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">
                                            <img src="{{ $data->document && $data->document->id_proof ? asset('/image/candidate/id_proof/' . $data->document->id_proof) : asset('/image/default-placeholder.png') }}"  alt="Candidate Photo"  class="h-20 w-auto"></p>
                                        <span class="bg-orange-100 px-3 rounded-xl mt-4 py-1">Id Proof</span>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">
                                            <img src="{{ $data->document && $data->document->other_certificate ? asset('/image/candidate/other_certificate/' . $data->document->other_certificate) : asset('/image/default-placeholder.png') }}"  alt="Candidate Photo"  class="h-20 w-auto"></p>
                                        <span class="bg-orange-100 px-3 rounded-xl mt-4 py-1">Other Certificate</span>
                                    </div>
                                </div>
                                {{-- <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                      <div>
                        <p class="font-medium">Salary Slip</p>
                        <p class="text-sm text-gray-500">2024-12-01</p>
                      </div>
                      <div class="flex gap-2">
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-download"></i>
                        </button>
                      </div>
                    </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Additional Documents Section (Optional) -->
                    {{-- <div class="bg-white shadow-lg rounded-lg mt-4 mb-6">
                        <div class="flex items-center gap-3 p-6">
                            <i class="fas fa-file-alt text-teal-600 text-xl"></i>
                            <h4 class="text-lg font-semibold">Additional Documents</h4>
                        </div>
                        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <p><strong>Name:</strong> </p>
                                <a href="" target="_blank" class="text-blue-500 underline">
                                    View Document
                                </a>
                            </div>
                        </div>
                    </div> --}}
                   
                    <div class="bg-white shadow-lg rounded-lg mt-4 mb-6">
                        <div class="flex items-center gap-3 p-6">
                            <i class="fas fa-file-alt text-teal-600 text-xl"></i>
                            <h4 class="text-lg font-semibold">Applied Applications</h4>
                        </div>
                        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($jobs as $item)
                           <div class="flex justify-between bg-gray-100 p-2">                           
                            <div class=" p-4 rounded-lg">
                                <p><strong>Company name : </strong>{{$item->role->hire->company_name}}</p>
                                <p class="capitalize"><strong>Address : </strong>{{$item->role->hire->city}}, {{$item->role->hire->state}}</p>
                                <p><strong>Job profie : </strong>{{$item->role->profile}}</p>
                                <p><strong>Job title : </strong>{{$item->role->title}}</p>
                                <p><strong>No. of post : </strong>{{$item->role->no_of_post}}</p>
                                <p><strong>Job type : </strong>{{$item->role->type}}</p>
                                <p><strong>Experience : </strong>{{$item->role->min_experience}} - {{$item->role->max_experience}} </p>
                                <p><strong>Expected Salary : </strong>{{$item->role->min_salary}} - {{$item->role->max_salary}} </p>
                                <p><strong>Website : </strong> <a href="{{ url($item->role->hire->website) }}" target="_blank" class="text-blue-600 hover:text-blue-500 hover:underline" rel="noopener noreferrer">{{ $item->role->hire->website }}
                                 </a></p>
                            </div>
                            <img src="{{ asset('/image/company/logo/' . $item->role->hire->logo)}}"  alt="Candidate Photo"  class="h-20 w-auto">
                        </div>
                            @endforeach
                        </div>
                    </div>
                   

                    <!-- Action Buttons -->
                    {{-- <div class="mt-8 flex flex-wrap gap-4">
                <button class="flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
                  <i class="fas fa-download"></i> Download All Documents
                </button>
                <button class="flex items-center gap-2 bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition-colors">
                  Submit Final
                </button>
              </div> --}}
                </div>
            </div>

        </div>
    </div>

@endsection
