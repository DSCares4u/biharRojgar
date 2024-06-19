@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="flex">
            <div class="bg-gray-100 mx-4 w-8/12">
                <form class="p-5 flex flex-col" id="addDocument" enctype="multipart/form-data">
                    <div class="container mx-auto font-sans ">
                        <div class="p-5 flex flex-col">
                            <div class="border border-gray mt-2 p-4">
                                <h2 class="text-lg font-semibold mb-2">Essential Documents</h2>
                                <hr class="h-1 rounded bg-gray-600 mb-2">
                                <div class="mt-2">
                                    <div class="mb-4 items-center">
                                        <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                                        <label for="photo" class="block text-sm mb-3">Upload Your Photo</label>
                                        <input type="file" id="photo" name="photo">
                                        <img id="photoPreview" src="#" alt="Photo Preview" class=" w-24 h-24 object-cover mt-2"/>
                                        <p id="error-photo" class="text-red-500 text-xs font-semibold error-message"></p>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="signature" class="block text-sm mb-3">Upload Your Signature</label>
                                        <input type="file" id="signature" name="signature">
                                        <img id="signaturePreview" src="#" alt="Signature Preview" class="w-24 h-24 object-cover mt-2"/>
                                        <p id="error-signature" class="text-red-500 text-xs font-semibold error-message"></p>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="mb-4 items-center">
                                            <label for="id_proof_type" class="block text-sm mb-3">Choose Id Proof</label>
                                            <select name="id_proof_type" id="id_proof_type" class="border py-2 px-5 w-full rounded">
                                                <option value="">Select</option>
                                                <option value="aadhar">Aadhar Card</option>
                                                <option value="pan">Pan Card</option>
                                                <option value="dl">Driving Licence</option>
                                                <option value="voter-id">Voter Id Card</option>
                                            </select>
                                        </div>
                                        <div class="mb-4 items-center">
                                            <label for="id_proof" class="block text-sm mb-3">Upload Selected Id</label>
                                            <input type="file" id="id_proof" name="id_proof">
                                            <img id="idProofPreview" src="#" alt="id Proof Preview" class=" w-24 h-24 object-cover mt-2"/>
                                        </div>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="quali_certificate" class="block text-sm mb-3">Upload Your Latest Qualification Certificate</label>
                                        <input type="file" id="quali_certificate" name="quali_certificate">
                                        <img id="qualiCertificatePreview" src="#" alt="Quali Certificate Preview" class="w-24 h-24 object-cover mt-2"/>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="other_certificate" class="text-sm mb-3 flex">Any Other Certificate <p class="text-sm">(i.e. Computer Certificate, Skill Certificate, etc)</p></label>
                                        <input type="file" id="other_certificate" name="other_certificate">
                                        <img id="otherCertificatePreview" src="#" alt="Other Certificate Preview" class="w-24 h-24 object-cover mt-2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="button flex justify-between ml-10 mt-2">
                                <div class="previous">
                                    <a href="/address" class="bg-blue-500 hover:bg-blue-700 rounded px-3 py-1 text-white">Previous</a>
                                </div>
                                <div class="next">
                                    <button type="submit" class="bg-green-500 hover:bg-green-600 rounded px-3 py-1 text-white">Submit</button>
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
                        <label for="term2">You agree to undergo any necessary background checks as part of the hiring process.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term3">You agree to abide by the company's code of conduct and policies.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term4">You understand that any false information provided may result in termination of employment.</label>
                    </li>
                    <li class="mb-2">
                        <label for="term5">You consent to the processing of your personal data for the purpose of this job application.</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function() {
        function fetchJobDetailsAndOpenModal(userId) {
            if (userId) {
                $.ajax({
                    type: 'GET',
                    url: `/api/document/view/${userId}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.data) {
                            $('#id').val(response.data.id);
                            $('#photoPreview').attr('src','/image/candidate/photo/'+ response.data.photo);
                            $('#signaturePreview').attr('src','/image/candidate/signature/'+ response.data.signature);
                            $('#id_proof_type').val( response.data.id_proof_type);
                            $('#idProofPreview').attr('src','/image/candidate/id_proof/'+ response.data.id_proof);
                            $('#qualiCertificatePreview').attr('src','/image/candidate/quali_certificate/'+ response.data.quali_certificate);
                            $('#otherCertificatePreview').attr('src','/image/candidate/other_certificate/'+ response.data.other_certificate);
                        } else {
                            console.error('No data found in response.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching document details for editing:', error);
                    }
                });
            } else {
                console.error('User ID is not defined.');
            }
        }
        // Preview the image files
        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(previewId).attr('src', e.target.result).removeClass('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#photo').change(function() {
            previewImage(this, '#photoPreview');
        });

        $('#signature').change(function() {
            previewImage(this, '#signaturePreview');
        });
        $('#id_proof').change(function() {
            previewImage(this, '#idProofPreview');
        });
        $('#quali_certificate').change(function() {
            previewImage(this, '#qualiCertificatePreview');
        });
        $('#other_certificate').change(function() {
            previewImage(this, '#otherCertificatePreview');
        });

        // Auto-execute the function when the page loads
        let userId = {{ auth()->user()->id }};
        fetchJobDetailsAndOpenModal(userId);

        // Handle form submission
        $('#addDocument').submit(function(e) {
            e.preventDefault();            
            let userId = {{ auth()->user()->id }};            
            if (userId) {
                let formData = new FormData(this); 
                $.ajax({
                    type: 'POST',
                    url: `/api/document/edit/${userId}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addDocument").trigger("reset");
                        window.open("/", "_self");
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            } else {
                console.error('User ID is not defined.');
            }
        });
    });
</script>
@endsection

