@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="flex">
            <div class="bg-gray-100 mx-4 w-8/12">
                <form class="p-5 flex flex-col">
                    <div class="border border-gray mt-2 p-4">
                        <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                        <hr class="h-1 rounded bg-gray-600 mb-2">
                        <div class="mt-2">
                            <div class="mb-2 items-center">
                                <label for="name" class="block text-sm mb-2 ">Upload Your Photo</label>
                                <input type="file" id="name" name="name"
                                    class="shadow appearance-none border py-1 px-2 w-full" required>
                            </div>
                            <div class="mb-2 items-center">
                                <label for="name" class="block text-sm mb-2 ">Upload Your Signature</label>
                                <input type="file" id="name" name="name"
                                    class="shadow appearance-none border py-1 px-2 w-full" required>
                            </div>
                            <div class="mb-2 items-center">
                                <label for="name" class="block text-sm mb-2 ">Choose Id Proof</label>
                                <select name=""id="" class="border py-2 px-5 w-full rounded" required>
                                    <option value="">Select</option>
                                    <option value="">Aadhar Card</option>
                                    <option value="">Pan Card</option>
                                    <option value="">Driving Licence</option>
                                    <option value="">Voter Id Card</option>
                                </select>
                            </div>
                            <div class="mb-2 items-center">
                                <label for="name" class="block text-sm mb-2 ">Upload Selected Id</label>
                                <input type="file" id="name" name="name"
                                    class="shadow appearance-none border py-1 px-2 w-full" required>
                            </div>
                            <div class="mb-2 items-center">
                                <label for="name" class="block text-sm mb-2 ">Upload Your Latest Qualification
                                    Certificate</label>
                                <input type="file" id="name" name="name"
                                    class="shadow appearance-none border py-1 px-2 w-full" required>
                            </div>
                            <div class="mb-2 items-center">
                                <h4 for="name" class="text-sm mb-2 flex">Any Other Certificate <p class="text-sm">(i.e.
                                        Computer Certificate, Skill Certificate, etc)</p>
                                </h4>
                                <input type="file" id="name" name="name"
                                    class="shadow appearance-none border py-1 px-2 w-full" required>
                            </div>
                        </div>
                    </div>
                    <div class="button flex justify-between ml-10 mt-2">
                        <div class="previous">
                            <button class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</button>
                        </div>
                        <div class="next">
                            <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save &
                                Next</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg w-4/12">
                <h2 class="text-lg font-bold mb-4">Terms and Conditions</h2>
                <ul class="list-disc list-inside mb-4">
                    <li class="mb-2">
                        <label for="term1">You must be legally eligible to work in the specified country.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term2">You agree to undergo any necessary background checks as part of the hiring
                            process.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term3">You agree to abide by the company's code of conduct and policies.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term4">You understand that any false information provided may result in termination
                            of
                            employment.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term5">You consent to the processing of your personal data for the purpose of this
                            job
                            application.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term1">You must be legally eligible to work in the specified country.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term2">You agree to undergo any necessary background checks as part of the hiring
                            process.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term3">You agree to abide by the company's code of conduct and policies.</label>
                    </li>
                </ul>
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
