@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="flex">
            <div class="bg-gray-100 mx-4 w-8/12">
                <form class="p-5 flex flex-col" id="addDocument">
                    <div class="container mx-auto font-sans ">

                        <div class="p-5 flex flex-col">
                            <div class="border border-gray mt-2 p-4">
                                <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                <hr class="h-1 rounded bg-gray-600 mb-2">
                                <div class="mt-2">
                                    <div class="mb-4 items-center">
                                        <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                                        <label for="photo" class="block text-sm mb-3 ">Upload Your
                                            Photo</label>
                                        <input type="file" id="photo" name="photo">
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="signature" class="block text-sm mb-3 ">Upload Your
                                            Signature</label>
                                        <input type="file" id="signature" name="signature">
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="mb-4 items-center">
                                            <label for="id_proof_type" class="block text-sm mb-3 ">Choose Id
                                                Proof</label>
                                            <select name="id_proof_type"id="id_proof_type"
                                                class="border py-2 px-5 w-full rounded">
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
                                            <input type="file" id="id_proof" name="id_proof">
                                        </div>
                                    </div>
                                    <div class="mb-4 items-center">
                                        <label for="quali_certificate" class="block text-sm mb-3 ">Upload Your Latest
                                            Qualification
                                            Certificate</label>
                                        <input type="file" id="quali_certificate" name="quali_certificate">
                                    </div>
                                    <div class="mb-4 items-center">
                                        <h4 for="other_certificate" class="text-sm mb-3 flex">Any Other Certificate <p
                                                class="text-sm">(i.e.
                                                Computer Certificate, Skill Certificate, etc)</p>
                                        </h4>
                                        <input type="file" id="other_certificate" name="other_certificate">
                                    </div>
                                </div>
                            </div>
                            <div class="button flex justify-between ml-10 mt-2">
                                <div class="previous">
                                    <div class="previous">
                                        <a
                                            href="/address"class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</a>
                                    </div>
                                </div>
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
            //insert new call request

            $("#addDocument").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('document.store') }}",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addDocument").trigger("reset");
                        window.open("/", "_self")
                    }
                })
            })
        });

        $(document).ready(function() {

            function fetchJobDetailsAndOpenModal() {
                let userId = {{ auth()->user()->id }};

                $.ajax({
                    type: 'GET',
                    url: `/api/document/view/` + userId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#id').val(response.data.id);
                    $('#photo').val(response.data.photo);
                    $('#signature').val(response.data.signature);
                    $('#id_proof_type').val(response.data.id_proof_type);
                    $('#id_proof').val(response.data.id_proof);
                    $('#quali_certificate').val(response.data.quali_certificate);
                    $('#other_certificate').val(response.data.other_certificate);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

        });

        $('#addDocument').submit(function(e) {
            e.preventDefault();
            let userId = {{ auth()->user()->id }};
            let formData = {
                user_id: $('#id').val(),
                photo: $('#photo').val(),
                signature: $('#signature').val(),
                id_proof_type: $('#id_proof_type').val(),
                id_proof: $('#id_proof').val(),
                quali_certificate: $('#quali_certificate').val(),
                other_certificate: $('#other_certificate').val(),
            };
            $.ajax({
                type: 'PUT',
                url: `/api/documents/edit/${userId}`,
                data: formData,
                success: function(response) {
                    swal("Success", response.message, "message");
                    $("#addDocument").trigger("reset");
                    window.open("/", "_self")

                },
                error: function(xhr, status, error) {
                    console.error('Error updating Plan Details:', error);
                }
            });
        });
    </script>
@endsection
