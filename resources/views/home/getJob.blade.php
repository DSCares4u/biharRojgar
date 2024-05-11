@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="mx-4 ">
            <form class="p-5 flex flex-col" id="applyJob">
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
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="gender" class="block text-gray-700 text-sm mb-2 ">Gender</label>
                                    <select name="gender" id="gender"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" >
                                        <option value="">Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="marital" class="block text-gray-700 text-sm mb-2 ">Marital Status</label>
                                    <select name="marital" id="marital"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" >
                                        <option value="">Select Status</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">UnMarried</option>
                                    </select>
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="preferred_lang" class="block text-gray-700 text-sm mb-2 ">Choice of Language for
                                        Examination</label>
                                    <select name="preferred_lang" id="preferred_lang"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-200 rounded" >
                                        <option value="">Choose Language</option>
                                        <option value="english">English</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="dob" class="block text-gray-700 text-sm mb-2 ">Date of Birth as
                                        recorded in
                                        Matriculation (10th class) Certificate/Marks</label>
                                    <input type="date" id="dob"
                                        name="dob"placeholder="Eg. Sales executives needed urgently for ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="father" class="block text-gray-700 text-sm mb-2 ">Father’s Name</label>
                                    <input type="text" id="father"
                                        name="father"placeholder="Eg. Sales executives needed urgently for ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="email" class="block text-gray-700 text-sm mb-2 ">Email Address</label>
                                    <input type="email" id="email" name="email"placeholder="Eg. abc@gmail.com"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="religion" class="block text-gray-700 text-sm mb-2 ">Religion</label>
                                    <input type="text" id="religion" name="religion"placeholder="Eg. Hindu"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="mb-3  items-center">
                                    <label for="mother" class="block text-gray-700 text-sm mb-3 ">Mother’s Name</label>
                                    <input type="text" id="mother" name="mother"placeholder="Eg. abc Devi ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="mobile" class="block text-gray-700 text-sm mb-3 ">Mobile No.</label>
                                    <input type="tel" id="mobile" name="mobile"placeholder="Eg. 7892456123"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="id_mark" class="block text-gray-700 text-sm mb-3 ">Permanent visible mark
                                        of
                                        identification 1</label>
                                    <input type="text" id="id_mark"
                                        name="id_mark"placeholder="Permanent visible mark of identification"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded" >
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
                                    <label for="community" class="block text-gray-700 text-sm mb-2 ">Community</label>
                                    <select name="community" id="community"
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        >
                                        <option value="">Select</option>
                                        <option value="ur">UR(Unreserve)</option>
                                        <option value="sc">SC(Schedule Caste)</option>
                                        <option value="st">ST(Schedule Tribe)</option>
                                        <option value="obc">OBC(Other Backward Clases)</option>
                                        <option value="ews">EWS(Economically Weake Section)</option>
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
                                    <label for="village"
                                        class="block text-gray-700 text-sm mb-2 ">Village/Town/City</label>
                                    <input type="text" id="village" name="village"placeholder="Eg. abc nagar ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="landmark" class="block text-gray-700 text-sm mb-2 ">Landmark</label>
                                    <input type="text" id="landmark" name="landmark"placeholder="Eg. abc chowk ..."
                                        class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                        >
                                </div>
                                <div class="mb-3  items-center">
                                    <label for="pincode" class="block text-gray-700 text-sm mb-2 ">Pincode</label>
                                    <input type="number" id="pincode" name="pincode"placeholder="Eg. 789456"
                                        class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded" >
                                </div>
                                <div class="flex gap-5">
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="city" class="block text-gray-700 text-sm mb-2 ">City</label>
                                        <input type="text" id="city"
                                            name="city"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            >
                                    </div>
                                    <div class="mb-3 w-1/2 items-center">
                                        <label for="state" class="block text-gray-700 text-sm mb-2 ">State</label>
                                        <input type="text" id="state"
                                            name="state"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            >
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
                            <div class="p-5 flex flex-col">
                                <div class="border border-gray mt-3 p-4">
                                    <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                    <hr class="h-1 rounded bg-gray-600 mb-4">
                                    <div class="flex justify-evenly mt-10">
                                        <div class="mb-3 items-center">
                                            <label for="qualification" class="block text-sm mb-2 ">Qualification</label>
                                            <input type="text" id="qualification"
                                            name="qualification"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            >
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="q_state" class="block text-sm mb-2 ">State</label>
                                            <input type="text" id="q_state"
                                            name="q_state"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded"
                                            >
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="board" class="block text-sm mb-2 ">Board</label>
                                            <input type="text" id="board"
                                                name="board"placeholder="Eg. Sales executives needed urgently for ..."
                                                class="shadow appearance-none border py-1 px-2 w-full" >
                                        </div>
                                        <div class="mb-3 items-center">
                                            <label for="passing_year" class="block text-sm mb-2 ">Year Of Passing</label>
                                            <input type="month" id="passing_year" name="passing_year"
                                                class="shadow appearance-none border py-1 px-2 w-full" >
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray mt-3 p-4">
                                    <div class="mb-3  items-center">
                                        <label for="experience" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                                        <input type="text" id="experience" name="experience"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-full" >
                                    </div>
                                    <div class="mb-3  items-center">
                                        <label for="skills" class="block text-gray-700 text-sm mb-2 ">Skills</label>
                                        <input type="text" id="skills" name="skills"placeholder="Eg. abc..."
                                            class="shadow appearance-none border py-1 px-2 w-full" >
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
                            </div>

                        </div>
                    </div>
                </div>
                <div id="step3" class="step hidden p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="container mx-auto font-sans ">
                        <div class="flex">
                            <div class="bg-gray-100 mx-4 w-8/12">
                                <div class="p-5 flex flex-col">
                                    <div class="border border-gray mt-2 p-4">
                                        <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                        <hr class="h-1 rounded bg-gray-600 mb-2">
                                        <div class="mt-2">
                                            <div class="mb-4 items-center">
                                                <label for="photo" class="block text-sm mb-3 ">Upload Your
                                                    Photo</label>
                                                <input type="file" id="photo" name="photo" >
                                            </div>
                                            <div class="mb-4 items-center">
                                                <label for="signature" class="block text-sm mb-3 ">Upload Your
                                                    Signature</label>
                                                <input type="file" id="signature" name="signature" >
                                            </div>
                                            <div class="flex gap-3">
                                                <div class="mb-4 items-center">
                                                    <label for="id_proof_type" class="block text-sm mb-3 ">Choose Id
                                                        Proof</label>
                                                    <select name="id_proof_type"id="id_proof_type" class="border py-2 px-5 w-full rounded"
                                                        >
                                                        <option value="">Select</option>
                                                        <option value="aadhar">Aadhar Card</option>
                                                        <option value="pan">Pan Card</option>
                                                        <option value="dl">Driving Licence</option>
                                                        <option value="voter-id">Voter Id Card</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 items-center">
                                                    <label for="id_proof" class="block text-sm mb-3 ">Upload Selected
                                                        Id</label>
                                                    <input type="file" id="id_proof" name="id_proof" >
                                                </div>
                                            </div>
                                            <div class="mb-4 items-center">
                                                <label for="quali_certificate" class="block text-sm mb-3 ">Upload Your Latest
                                                    Qualification
                                                    Certificate</label>
                                                <input type="file" id="quali_certificate" name="quali_certificate" >
                                            </div>
                                            <div class="mb-4 items-center">
                                                <h4 for="other_certificate" class="text-sm mb-3 flex">Any Other Certificate <p
                                                        class="text-sm">(i.e.
                                                        Computer Certificate, Skill Certificate, etc)</p>
                                                </h4>
                                                <input type="file" id="other_certificate" name="other_certificate" >
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
                                                class="bg-green-500 hover:bg-green-600 rounded px-3 py-1 text-white">Submit</button>
                                        </div>
                                    </div>
                                </div>
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
            //insert application details

            $("#applyJob").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('job.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#applyJob").trigger("reset");
                        window.open("/", "_self")
                    }
                })
            })
        });
    </script>
@endsection
