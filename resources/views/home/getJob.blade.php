@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="bg-gray-100 mx-4 ">
            <form class="p-5 flex flex-col">
                <div class="border p-4 border-gray mt-3">
                    <h2 class="text-lg font-semibold mb-2  ">Personal Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Full Name as recorded in
                                    Matriculation(10th class) Certificate/Marks list</label>
                                <input type="text" id="name"
                                    name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                <select name="" id=""
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                    <option value="">Choose Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Marital Status</label>
                                <select name="" id=""
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                    <option value="">Select Status</option>
                                    <option value="">Married</option>
                                    <option value="">UnMarried</option>
                                </select>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Choice of Language for
                                    Examination</label>
                                <select name="" id=""
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                    <option value="">Choose Language</option>
                                    <option value="">English</option>
                                    <option value="">Hindi</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Date of Birth as recorded in
                                    Matriculation (10th class) Certificate/Marks list</label>
                                <input type="date" id="name"
                                    name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Father’s Name</label>
                                <input type="text" id="name"
                                    name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Email Address</label>
                                <input type="email" id="name" name="name"placeholder="Eg. abc@gmail.com"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Religion</label>
                                <input type="text" id="name" name="name"placeholder="Eg. Hindu"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-3 ">Mother’s Name</label>
                                <input type="text" id="name" name="name"placeholder="Eg. abc Devi ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-4 ">Mobile No.</label>
                                <input type="tel" id="name" name="name"placeholder="Eg. 7892456123"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark of
                                    identification 1</label>
                                <input type="text" id="name"
                                    name="name"placeholder="Permanent visible mark of identification"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark of
                                    identification 2</label>
                                <input type="text" id="name"
                                    name="name"placeholder="Permanent visible mark of identification"
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="mb-3  items-center">
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
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                    <textarea name="" id="" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                        class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Salary Expectation</label>
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
                --}}

                <div class="border border-gray mt-3 p-4">
                    <h2 class="text-lg font-semibold mb-2  ">Community Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/3">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Community</label>
                                <select name="" id=""
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                    <option value="">Select</option>
                                    <option value="">UR(Unreserve)</option>
                                    <option value="">SC(Schedule Caste)</option>
                                    <option value="">ST(Schedule Tribe)</option>
                                    <option value="">OBC(Other Backward Clases)</option>
                                    <option value="">EWS(Economically Weake Section)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border p-4 border-gray mt-3">
                    <h2 class="text-lg font-semibold mb-2  ">Postal Address Details</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex gap-5">
                        <div class="w-1/2">
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Village/Town/City</label>
                                <input type="text" id="name" name="name"placeholder="Eg. abc nagar ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                <input type="text" id="name" name="name"placeholder="Eg. abc chowk ..."
                                    class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                            </div>
                            <div class="mb-3  items-center">
                                <label for="name" class="block text-gray-700 text-sm mb-2 ">Pincode</label>
                                <input type="number" id="name" name="name"placeholder="Eg. 789456"
                                    class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded" required>
                            </div>
                            <div class="flex gap-5">
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">City</label>
                                    <input type="text" id="name" name="name"placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3 w-1/2 items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                                    <input type="text" id="name" name="name"placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="button flex justify-between ml-10 mt-8">
                    <div class="previous">
                        <button class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</button>
                    </div>
                    <div class="next">
                        <a href="/address">
                            <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save &
                                Next</button>
                        </a>
                    </div>
                </div>
            </form>

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
