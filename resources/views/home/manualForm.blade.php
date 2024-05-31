@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="flex">
            <div class="bg-gray-100 mx-4 w-8/12">
                <form class=" flex flex-col" id="uploadForm">
                    <div class="container mx-auto font-sans ">
                        <div class="p-5 flex flex-col">
                            <h2 class="text-lg font-semibold mb-2  underline">Manual Job Application Form</h2>
                            <div class="border border-gray mt-2 p-4">
                                <div class="mt-2">
                                    <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                                    <div class="mb-3  items-center">
                                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Full Name</label>
                                        <input type="text" id="name"
                                            name="name"placeholder="सर्टिफिकेट के अनुसार अपना नाम डालें"
                                            class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded">
                                        <p id="error-name" class="text-red-500 text-xs capitalize hidden"></p>
                                    </div>
                                    <div class="mb-3  items-center">
                                        <label for="mobile" class="block text-gray-700 text-sm mb-2 ">Mobile No</label>
                                        <input type="tel" id="mobile"
                                            name="mobile"placeholder="अपना मोबाइल नंबर लिखें"
                                            class="shadow appearance-none border py-1 px-2 w-1/2 bg-gray-300 rounded">
                                        <p id="error-mobile" class="text-red-500 text-xs capitalize  hidden"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="photo" class="block text-sm mb-3 ">Upload Your Photo</label>
                                        <input type="file" id="photo" name="photo">
                                        <p id="error-photo" class="text-red-500 text-xs capitalize  hidden"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="form" class="block text-sm mb-3 ">Upload Your Form</label>
                                        <input type="file" id="form" name="form">
                                        <p id="error-form" class="text-red-500 text-xs capitalize hidden"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="id_proof" class="block text-sm mb-3 ">Upload Your
                                            Id Proof</label>
                                        <input type="file" id="id_proof" name="id_proof">
                                        <p id="error-id_proof" class="text-red-500 text-xs capitalize hidden"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <h4 for="certificate" class="text-sm mb-3 flex">Upload Any Certificate <p
                                                class="text-sm">(i.e.
                                                Computer Certificate, Skill Certificate, etc)</p>
                                        </h4>
                                        <input type="file" id="certificate" name="certificate">
                                        <p id="error-certificate" class="text-red-500 text-xs capitalize hidden"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="button flex justify-end p-2 mt-2">
                                <div class="next">
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-600 rounded px-3 py-1 text-white">Submit</button>
                                </div>
                            </div>
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
            $("#uploadForm").submit(function(e) {
                e.preventDefault();
                $('.text-red-500').html(''); // Clear previous error messages

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('manual.job.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#uploadForm").trigger("reset");
                        window.open("/", "_self");
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]).removeClass('hidden');
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    },
                });
            });
        });
    </script>
@endsection
