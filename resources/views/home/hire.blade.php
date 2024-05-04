@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans flex">
        <div class="bg-gray-100 mx-12 border border-gray mt-3 w-8/12">
            <form class="p-5 flex flex-col">
                <h2 class="text-lg font-semibold mb-2  ">Post a job</h2>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                    <input type="text" id="name"
                        name="name"placeholder="Eg. Sales executives needed urgently for ..."
                        class="shadow appearance-none border py-1 px-2 w-full" required>
                </div>
                <div class="gap-3 mb-3 ">
                    {{-- <label for="time" class="text-gray-700 text-sm mb-2 flex-1 ">Job Types</label> --}}
                    {{-- <div class="grid lg:flex-[3] lg:grid-cols-10 sm:grid-cols-5 grid-cols-4 justify-start gap-1">
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
                    </div> --}}
                    {{-- <select name="select" style="Width:30em" multiple >
                        <option>Select</option>
                        <option>Accountant</option>
                        <option>Telecaller</option>
                        <option>Sales</option>
                        <option>Communication</option>
                    </select> --}}
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Role</label>
                    <input type="text" id="name" name="name" placeholder="Type a Role"
                        class="shadow appearance-none border py-1 px-2 w-1/2 " required>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                    <input type="radio" name="gender" id="" class="mr-2">Male
                    <input type="radio" name="gender" id="" class="mr-2">Female
                    <input type="radio" name="gender" id="" class="mr-2">Any
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Monthly Salary</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Rs.15000" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="5 Years" required>
                    </div>
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
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Description</label>
                    <textarea name="" id="" cols="20" rows="2"placeholder="Type Or Details Of Job Here"
                        class="shadow appearance-none border py-1 px-2 w-full"></textarea>
                </div>
                <div class="mb-3 flex items-center">
                    <h3 class=" font-semibold">Recruiter details</h3>
                    <h3 class="text-sm ml-1"> (Cannot be changed later)</h3>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3 items-center w-1/2">
                        <label for="" class="block text-gray-700 text-sm mb-2 ">Hiring for (Company name)</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="Abc Pvt. Ltd." required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Company's Website (if any)</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="abc.com" required>
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Phone</label>
                        <input type="tel" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Alternate Phone</label>
                        <input type="tel" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full"placeholder="9876543210" required>
                    </div>
                </div>
                <div class="mb-3  items-center w-1/2">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Email</label>
                    <input type="email" id="name" name="name"
                        class="shadow appearance-none border py-1 px-2 w-full"placeholder="roni@gmail.com" required>
                </div>
                <div class="mb-4  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Any Document</label>
                    <input type="file" id="name" name="name" required>
                </div>

                {{-- Option card --}}
                <div class="mb-4 flex gap-2">
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Free</h3>
                            <h3 class="text-lg font-semibold">Rs. 0</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div>
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Gold</h3>
                            <h3 class="text-lg font-semibold">Rs. 999</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Top of page promotion
                            </li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Unlimited applications
                            </li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Highlighted as 'Gold'
                            </li>
                        </ul>
                    </div>
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Rapid Hire</h3>
                            <h3 class="text-lg font-semibold">Rs. 1299</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div>
                    <div
                        class=" w-[25%] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="price flex justify-between">
                            <h3 class="text-lg font-semibold">Spotlight</h3>
                            <h3 class="text-lg font-semibold">Rs. 999</h3>
                        </div>
                        <div class="line bg-orange-500 mt-20">
                            <hr class="h-2">
                        </div>
                        <ul class="mt-3">
                            <li class="font-gray-600 text-[13px]">Normal x applications</li>
                            <li class="flex font-medium text-[13px] mt-2 "><img
                                    src="/icons/correct.png"class="h-4 mr-2 mt-1" alt="">Limited applications</li>
                        </ul>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="block font-semibold text-sm mb-2 ">Can this job be done remotely
                        ?</label>
                    <div class="btn text-gray-700 text-sm items-center">
                        <input type="radio" class="ml-2 mr-1 form-radio h-3 w-3" name="type" id="">Yes
                        <input type="radio"class="ml-10 mr-1 form-radio h-3 w-3" name="type" id="">No
                    </div>
                </div>

                <div class="mb-3 flex justify-center">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold py-3 w-1/4 rounded focus:outline-none focus:shadow-outline text-black">
                        Post Job
                    </button>
                </div>

            </form>

        </div>
        <div class="w-4/12 ">
                <div class=" mt-10 w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="price mt-2 mb-4">
                        <h3 class="text-lg font-semibold">Job Posting Service</h3>
                    </div>
                    <ul>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Free Localities</p>
                            <p class="font-bold">Rs. 500</p>
                        </li>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Gold Job</p>
                            <p class="font-bold">Rs. 500</p>
                        </li>
                        <hr>
                        <li class="flex justify-between text-base text-gray-500">
                            <p>Total Payment</p>
                            <p class="font-bold">Rs. 1000</p>
                        </li>
                    </ul>
                    <div class=" flex justify-center items-center">
                        <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
                            Post Job
                        </button>
                    </div>
                
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
