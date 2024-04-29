@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="bg-gray-100 mx-12 border border-gray mt-3 w-8/12">
            <form class="p-5 flex flex-col">
                <h2 class="text-lg font-semibold mb-2  ">Apply For job</h2>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Your Name</label>
                    <input type="text" id="name"
                        name="name"placeholder="Eg. Sales executives needed urgently for ..."
                        class="shadow appearance-none border py-1 px-2 w-full" required>
                </div>
                <div class="gap-3 mb-3 ">
                    <label for="time" class="text-gray-700 text-sm mb-2 flex-1 ">Applying For</label>
                    <div class="grid lg:flex-[3] lg:grid-cols-10 sm:grid-cols-5 grid-cols-4 justify-start gap-1">
                        @php
                            $time = ['Accountant', 'Tellecaller', 'Sales', 'Communication'];
                        @endphp
                        @foreach ($time as $item)
                            <div class="flex md:flex-col md:items-start">
                                <input id="{{ $loop->index }}" type="radio" class="hidden peer" name="preferred_time"
                                    value="{{ $item }}">
                                <label for="{{ $loop->index }}"
                                    class="inline-flex items-center rounded-2xl justify-between py-1 px-2 font-medium tracking-tight border border-slate-200 cursor-pointer bg-brand-light text-brand-black border-slate-200-green-700 peer-checked:border border-slate-200-green-400 peer-checked:bg-green-700 peer-checked:text-white">
                                    <div class="flex items-center justify-center md:w-full">
                                        <div class="text-xs text-brand-black text-nowrap">{{ $item }}</div>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="w-1/2 items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Email</label>
                        <input type="text" id="name" name="name" placeholder="Type a Role"
                            class="shadow appearance-none border py-1 px-2 w-full " required>
                    </div>
                    <div class="w-1/2 items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Mobile</label>
                        <input type="tel" id="name" name="name" placeholder="Type a Role"
                            class="shadow appearance-none border py-1 px-2 w-full " required>
                    </div>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                    <input type="radio" name="gender" id="" class="mr-2">Male
                    <input type="radio" name="gender" id="" class="mr-2">Female
                    <input type="radio" name="gender" id="" class="mr-2">Others
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">City</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Purnea" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Bihar" required>
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3 items-center w-1/2">
                        <label for="" class="block text-gray-700 text-sm mb-2 ">Qualification</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Abc Pvt. Ltd." required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Field</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="abc.com" required>
                    </div>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Skills</label>
                    <textarea name="" id="" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                        class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                </div>
                <div class="mb-4  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Upload Resume</label>
                    <input type="file" id="name" name="name" required>
                </div>
                <div class="mb-3 flex justify-center">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-black">
                        Apply Now
                    </button>
                </div>

            </form>

        </div>
        <div class="w-4/12">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //insert new call request

            $("#requestCall").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('job.store') }}",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#requestCall").trigger("reset");
                        window.open("/", "_self")
                    }
                })
            })
        })
    </script>
@endsection
