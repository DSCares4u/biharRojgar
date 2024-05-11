@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="mx-4 ">
            <form class="p-5 flex flex-col" id="addUser">
                <div id="step1" class="step block p-6 space-y-4 md:space-y-6 sm:p-8">
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
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                    <select name="" id=""
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" required>
                                        <option value="">Choose Gender</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Marital Status</label>
                                    <select name="" id=""
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" required>
                                        <option value="">Select Status</option>
                                        <option value="">Married</option>
                                        <option value="">UnMarried</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Choice of Language for
                                        Examination</label>
                                    <select name="" id=""
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" required>
                                        <option value="">Choose Language</option>
                                        <option value="">English</option>
                                        <option value="">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Date of Birth as
                                        recorded in
                                        Matriculation (10th class) Certificate/Marks</label>
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
                                    <label for="name" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                    <input type="tel" id="name" name="name"placeholder="Eg. 7892456123"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark
                                        of
                                        identification 1</label>
                                    <input type="text" id="name"
                                        name="name"placeholder="Permanent visible mark of identification"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark
                                        of
                                        identification 2</label>
                                    <input type="text" id="name"
                                        name="name"placeholder="Permanent visible mark of identification"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border mt-3 p-4">
                        <h2 class="text-lg font-semibold mb-2  ">Community Details</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="flex gap-5">
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Community</label>
                                    <select name="" id=""
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
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

                    <div class="border p-4 mt-3">
                        <h2 class="text-lg font-semibold mb-2  ">Postal Address Details</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-4">
                        <div class="flex gap-5">
                            <div class="w-1/2">
                                <div class="mb-3  items-center">
                                    <label for="name"
                                        class="block text-gray-700 text-sm mb-2 ">Village/Town/City</label>
                                    <input type="text" id="name" name="name"placeholder="Eg. abc nagar ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                    <input type="text" id="name" name="name"placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        required>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Pincode</label>
                                    <input type="number" id="name" name="name"placeholder="Eg. 789456"
                                        class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded" required>
                                </div>
                                <div class="flex gap-5">
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">City</label>
                                        <input type="text" id="name"
                                            name="name"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                                    </div>
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                                        <input type="text" id="name"
                                            name="name"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="button flex justify-end ml-10 mt-8">
                        <div class="next">
                            <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white"
                                onclick="nextStep()">Save &
                                Next</button>
                        </div>
                    </div>
                </div>
                <div id="step2" class="step hidden p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="container mx-auto font-sans ">
                        <div class="bg-gray-100 mx-4 ">
                            <form class="p-5 flex flex-col">
                                <div class="border border-gray mt-3 p-4">
                                    <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                    <hr class="h-1 rounded bg-gray-600 mb-4">
                                    <div class="flex justify-evenly mt-10">
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">Qualification</label>
                                            <select name=""id="" class="border py-2 px-5 w-full rounded" required>
                                                <option value="">Select</option>
                                                <option value="">10th</option>
                                                <option value="">12th</option>
                                                <option value="">Graduation</option>
                                                <option value="">Masters</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">State</label>
                                            <select name=""id="" class="border py-2 px-5 w-full rounded" required>
                                                <option value="">Select</option>
                                                <option value="">Bihar</option>
                                                <option value="">Delhi</option>
                                                <option value="">Mumbai</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">District</label>
                                            <select name=""id="" class="border py-2 px-5 w-full rounded" required>
                                                <option value="">Select</option>
                                                <option value="">Purnea</option>
                                                <option value="">Katihar</option>
                                                <option value="">Bhagalpur</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">Board</label>
                                            <input type="text" id="name"
                                                name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                                class="shadow appearance-none border py-1 px-2 w-full" required>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">Roll No</label>
                                            <input type="text" id="name"
                                                name="name"placeholder="Eg. Sales executives needed urgently for ..."
                                                class="shadow appearance-none border py-1 px-2 w-full" required>
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="name" class="block text-sm mb-2 ">Date Of Passing</label>
                                            <input type="date" id="name" name="name"
                                                class="shadow appearance-none border py-1 px-2 w-full" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray mt-3 p-4">
                                    <div class="mb-3  items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                                        <input type="text" id="name" name="name"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-full" required>
                                    </div>
                                    <div class="mb-3  items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Skills</label>
                                        <input type="text" id="name" name="name"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-full" required>
                                    </div>
                                    <div class="mb-3  items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Salary
                                            Expectation</label>
                                        <input type="text" id="name" name="name"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-full" required>
                                    </div>
                                </div>
                                <div class="button flex justify-between ml-10 mt-8">
                                    <div class="previous">
                                        <button class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white"
                                            onclick="prevStep()">Previous</button>
                                    </div>
                                    <div class="next">
                                        <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white"
                                            onclick="nextStep()">Save &
                                            Next</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div id="step3" class="step hidden p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="container mx-auto font-sans ">
                        <div class="flex">
                            <div class="bg-gray-100 mx-4 w-8/12">
                                <form class="p-5 flex flex-col">
                                    <div class="border border-gray mt-2 p-4">
                                        <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                        <hr class="h-1 rounded bg-gray-600 mb-2">
                                        <div class="mt-2">
                                            <div class="mb-2 items-center">
                                                <label for="name" class="block text-sm mb-2 ">Upload Your
                                                    Photo</label>
                                                <input type="file" id="name" name="name" required>
                                            </div>
                                            <div class="mb-2 items-center">
                                                <label for="name" class="block text-sm mb-2 ">Upload Your
                                                    Signature</label>
                                                <input type="file" id="name" name="name" required>
                                            </div>
                                            <div class="flex ">
                                                <div class="mb-2 items-center">
                                                    <label for="name" class="block text-sm mb-2 ">Choose Id
                                                        Proof</label>
                                                    <select name=""id="" class="border py-2 px-5 w-1/2 rounded"
                                                        required>
                                                        <option value="">Select</option>
                                                        <option value="">Aadhar Card</option>
                                                        <option value="">Pan Card</option>
                                                        <option value="">Driving Licence</option>
                                                        <option value="">Voter Id Card</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2 items-center">
                                                    <label for="name" class="block text-sm mb-2 ">Upload Selected
                                                        Id</label>
                                                    <input type="file" id="name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="mb-2 items-center">
                                                <label for="name" class="block text-sm mb-2 ">Upload Your Latest
                                                    Qualification
                                                    Certificate</label>
                                                <input type="file" id="name" name="name" required>
                                            </div>
                                            <div class="mb-2 items-center">
                                                <h4 for="name" class="text-sm mb-2 flex">Any Other Certificate <p
                                                        class="text-sm">(i.e.
                                                        Computer Certificate, Skill Certificate, etc)</p>
                                                </h4>
                                                <input type="file" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button flex justify-between ml-10 mt-2">
                                        <div class="previous">
                                            <button class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white"
                                                onclick="prevStep()">Previous</button>
                                        </div>
                                        <div class="next">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-500 rounded px-3 py-1 text-white">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-gray-100 p-6 rounded-lg w-4/12">
                                <h2 class="text-lg font-bold mb-4">Terms and Conditions</h2>
                                <ul class="list-disc list-inside mb-4">
                                    <li class="mb-2">
                                        <label for="term1">You must be legally eligible to work in the specified
                                            country.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term2">You agree to undergo any necessary background checks as part
                                            of the hiring
                                            process.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term3">You agree to abide by the company's code of conduct and
                                            policies.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term4">You understand that any false information provided may result
                                            in termination
                                            of
                                            employment.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term5">You consent to the processing of your personal data for the
                                            purpose of this
                                            job
                                            application.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term1">You must be legally eligible to work in the specified
                                            country.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term2">You agree to undergo any necessary background checks as part
                                            of the hiring
                                            process.</label>
                                    </li>
                                    <li class="mb-2">
                                        <label for="term3">You agree to abide by the company's code of conduct and
                                            policies.</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        // Registration Button functions

        let currentStep = 1;
        const totalSteps = 3;

        function nextStep() {
            if (currentStep < totalSteps) {
                document.getElementById(`step${currentStep}`).classList.remove('block');
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
                document.getElementById(`step${currentStep}`).classList.add('block');
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                document.getElementById(`step${currentStep}`).classList.remove('block');
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
                document.getElementById(`step${currentStep}`).classList.add('block');
            }
        }

        $(document).ready(function() {
            //insert new call request

            $("#addUser").submit(function(e) {
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
                        $("#addUser").trigger("reset");
                        window.open("/", "_self")
                    }
                })
            })
        })
    </script>
@endsection
