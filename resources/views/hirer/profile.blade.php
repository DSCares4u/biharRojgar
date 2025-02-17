@extends('hirer.hirerBase')
@section('title', 'Profile')
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

    <div class="container mb-20 flex flex-col justify-center mx-auto">
        <div id="printable-area" class="container w-full lg:w-[70%] mx-auto bg-blue-50 shadow-lg border border-gray-400">
            <p class="text-lg sm:text-xl text-center underline text-white bg-blue-500 p-2">COMPANY'S DETAILS</p>
            <div class="p-4">
                <!-- Personal Details -->
                <h2 class="text-lg md:text-xl underline font-semibold mt-4 mb-3 text-gray-800">Plan Details</h2>
                <div class="md:w-full space-y-4">
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Active Plan name :</label>
                        <a href="#plan_card" class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200"><p class=" font-normal" >
                            {{ $data->hire_plan->name }}</p></a>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Plan Purchase Price :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            {{ $data->hire_plan->price }}</p>
                    </div>
                    <div class="flex w-full">
                        <label class="w-2/4 font-medium p-1 text-gray-700 text-sm">Plan Expiry Date :</label>
                        <p class="w-2/4 capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal"></p>
                    </div>
                </div>
                <h2 class="text-lg md:text-xl underline font-semibold my-4 text-gray-800">Company's Details
                </h2>
                <form action="{{ url('/hirer/application/edit/' . $data->id) }}" method="POST">
                    <div class="flex flex-col-reverse sm:flex-row justify-between items-start">
                        <div class="md:w-full  space-y-4 ">
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Company's Name :</label>
                                <input type="text" name="name" value="{{ $data->company_name }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Mobile no. :</label>
                                <input type="text" name="name" value="{{ $data->mobile }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Other Mobile no. :</label>
                                <input type="text" name="name" value="{{ $data->alt_mobile }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Email :</label>
                                <input type="text" name="name" value="{{ $data->email }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Website :</label>
                                <input type="text" name="name" value="{{ $data->website }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-1/2 font-medium text-gray-700 text-sm">City :</label>
                                <input type="text" name="name" value="{{ $data->city }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-1/2 font-medium text-gray-700 text-sm">State :</label>
                                <input type="text" name="name" value="{{ $data->state }}"
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal">
                            </div>
                            <div class="flex w-full mb-5">
                                <label class="w-1/3 font-medium text-gray-700 text-sm">Logo :</label>
                                <img src="{{ asset('/image/candidate/photo/' . $data->logo) }}" class="w-1/3"
                                    alt="">
                                <input type="file" name="logo" class="w-1/3 text-sm p-1 font-normal">
                            </div>
                            <div class="flex w-full">
                                <label class="w-2/4 font-medium text-gray-700 text-sm">Description :</label>
                                <textarea name="" id=""
                                    class="w-2/4  capitalize text-sm p-1 border border-gray-400 bg-gray-200 font-normal" cols="2" rows="4">{{ $data->description }}</textarea>
                            </div>
                            <div class="flex w-1/2 mx-auto">
                                <button type="submit"
                                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

       

@endsection
