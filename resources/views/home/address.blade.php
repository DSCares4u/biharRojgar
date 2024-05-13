@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
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
                                        <a href="/get-job"class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</a>
                                    </div>
                                    <div class="next">
                                        <button class="bg-[#EA2027] hover:bg-[#ff4747] rounded px-3 py-1 text-white"
                                            >Save &
                                            Next</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            //insert new call request

            $("#insertData").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('address.store') }}",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#insertData").trigger("reset");
                        window.open("/documents", "_self")
                    }
                })
            })
        })
    </script>
@endsection
