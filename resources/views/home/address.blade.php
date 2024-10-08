@extends('home.homebase')
@section('title', 'Add Candidate')
@section('content')
    {{-- <div class="container mx-auto font-sans mb-10 ">
        <div class="bg-gray-100 mx-4 ">
            <form class="p-5 flex flex-col" id="insertData">
                <div class="container mx-auto font-sans ">
                    <div class="bg-gray-100 mx-4 ">
                        <div class="p-5 flex flex-col">
                            <div class="border border-gray mt-3 p-4">
                                <h2 class="text-lg font-semibold mb-2  ">Essential Qualification</h2>
                                <hr class="h-1 rounded bg-gray-600 mb-4">
                                <div class="flex justify-evenly mt-10">
                                    <div class="mb-3 items-center">
                                        <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                                        <label for="qualification" class="block text-sm mb-2 ">Qualification</label>
                                        <input type="text" id="qualification"
                                            name="qualification"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                            <span class="error text-red-500 text-xs font-semibold " id="qualificationError"></span>
                                    </div>
                                    <div class="mb-3 items-center">
                                        <label for="q_state" class="block text-sm mb-2 ">State</label>
                                        <input type="text" id="q_state" name="q_state"placeholder="Eg. abc chowk ..."
                                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                                            <span class="error text-red-500 text-xs font-semibold " id="q_stateError"></span>
                                            
                                    </div>
                                    <div class="mb-3 items-center">
                                        <label for="board" class="block text-sm mb-2 ">Board</label>
                                        <input type="text" id="board"
                                            name="board"placeholder="Eg. Sales executives needed urgently for ..."
                                            class="shadow appearance-none border py-1 px-2 w-full">
                                            <span class="error text-red-500 text-xs font-semibold " id="boardError"></span>
                                    </div>
                                    <div class="mb-3 items-center">
                                        <label for="passing_year" class="block text-sm mb-2 ">Year Of Passing</label>
                                        <input type="month" id="passing_year" name="passing_year"
                                            class="shadow appearance-none border py-1 px-2 w-full">
                                            <span class="error text-red-500 text-xs font-semibold " id="passing_yearError"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-gray mt-3 p-4">
                                <div class="mb-3 items-center w-1/2">
                                    <label for="experience" class="block text-gray-700 text-sm mb-2">Working Experience</label>
                                    <div class="flex items-center">
                                        <input type="number" id="experience" name="experience" placeholder="" class="shadow appearance-none border py-1 px-2 w-1/6 mr-2">
                                        <span class="mr-2">Years</span>
                                    </div>
                                        <span class="error text-red-500 text-xs font-semibold" id="experienceError"></span>
                                </div>
                                
                                <div class="mb-3 flex flex-col">
                                    <label for="skills" class="block text-gray-700 text-sm mb-2 ">Any Other Diploma Degree</label>
                                    <input type="text" id="skills" name="skills"placeholder="Eg. abc..."
                                        class="shadow appearance-none border py-1 px-2 w-1/4">
                                    <span class="error text-red-500 text-xs font-semibold " id="skillsError"></span>
                                </div>
                            </div>
                            <div class="button flex justify-between ml-10 mt-8">
                                <div class="previous">
                                    <a
                                        href="/add-candidate"class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</a>
                                </div>
                                <div class="next">
                                    <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save &
                                        Next</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div> --}}

    <div class="container mx-auto font-sans mb-10">
        <div class="bg-gray-100 mx-4">
            <form class="p-5 flex flex-col" id="insertData">
                <div class="border border-gray mt-3 p-4">
                    <h2 class="text-lg font-semibold mb-2">Essential Qualification</h2>
                    <hr class="h-1 rounded bg-gray-600 mb-4">
                    <div class="flex flex-wrap gap-5 mt-10">
                        <div class="w-full md:w-1/2 lg:w-1/4 mb-3">
                            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
                            <label for="qualification" class="block text-sm mb-2">Qualification</label>
                            <input type="text" id="qualification" name="qualification" placeholder="Eg. abc chowk ..."
                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                            <span class="error text-red-500 text-xs font-semibold" id="qualificationError"></span>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/4 mb-3">
                            <label for="q_state" class="block text-sm mb-2">State</label>
                            <input type="text" id="q_state" name="q_state" placeholder="Eg. abc chowk ..."
                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                            <span class="error text-red-500 text-xs font-semibold" id="q_stateError"></span>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/4 mb-3">
                            <label for="board" class="block text-sm mb-2">Board</label>
                            <input type="text" id="board" name="board" placeholder="Eg. Sales executives needed urgently for ..."
                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                            <span class="error text-red-500 text-xs font-semibold" id="boardError"></span>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/4 mb-3">
                            <label for="passing_year" class="block text-sm mb-2">Year Of Passing</label>
                            <input type="month" id="passing_year" name="passing_year"
                                class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                            <span class="error text-red-500 text-xs font-semibold" id="passing_yearError"></span>
                        </div>
                    </div>
                </div>
                <div class="border border-gray mt-3 p-4">
                    <div class="mb-3 w-full md:w-1/2">
                        <label for="experience" class="block text-gray-700 text-sm mb-2">Working Experience</label>
                        <div class="flex items-center">
                            <input type="number" id="experience" name="experience" placeholder=""
                                class="shadow appearance-none border py-1 px-2 w-1/6 mr-2">
                            <span class="mr-2">Years</span>
                        </div>
                        <span class="error text-red-500 text-xs font-semibold" id="experienceError"></span>
                    </div>
                    <div class="mb-3 flex flex-col w-full md:w-1/2">
                        <label for="skills" class="block text-gray-700 text-sm mb-2">Any Other Diploma Degree</label>
                        <input type="text" id="skills" name="skills" placeholder="Eg. abc..."
                            class="shadow appearance-none border py-1 px-2 w-full bg-gray-300 rounded">
                        <span class="error text-red-500 text-xs font-semibold" id="skillsError"></span>
                    </div>
                </div>
                <div class="button flex justify-between ml-10 mt-8">
                    <div class="previous">
                        <a href="{{url('/manual-form')}}" class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</a>
                    </div>
                    <div class="next">
                        <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white">Save & Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script>

        $(document).ready(function() {

            function fetchJobDetailsAndOpenModal() {
                let userId = {{ auth()->user()->id }};

                $.ajax({
                    type: 'GET',
                    url: `{{url('/api/address/view/${userId}')}}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                    $('#id').val(response.data.id);
                    $('#qualification').val(response.data.qualification);
                    $('#q_state').val(response.data.q_state);
                    $('#board').val(response.data.board);
                    $('#passing_year').val(response.data.passing_year);
                    $('#experience').val(response.data.experience);
                    $('#skills').val(response.data.skills);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

        });

        $('#insertData').submit(function(e) {
            e.preventDefault();
            let userId = {{ auth()->user()->id }};
            let formData = {
                user_id: $('#id').val(),
                qualification: $('#qualification').val(),
                q_state: $('#q_state').val(),
                board: $('#board').val(),
                passing_year: $('#passing_year').val(),
                experience: $('#experience').val(),
                skills: $('#skills').val(),
            };
            $.ajax({
                type: 'PUT',
                url: `{{url('/api/address/edit/${userId}')}}`,
                data: formData,
                success: function(response) {
                    // swal("Success", response.message, "message");
                    $("#insertData").trigger("reset");
                    window.open("/documents", "_self");
                },
                error: function(xhr) {
                            // Clear previous error messages
                            $('.error').text('');

                            // Display validation errors
                            if (xhr.responseJSON && xhr.responseJSON.error) {
                                $.each(xhr.responseJSON.error, function(key, value) {
                                    $('#' + key + 'Error').text(value[0]);
                                });
                            }
                        }
            });
        });

    </script>
@endsection

