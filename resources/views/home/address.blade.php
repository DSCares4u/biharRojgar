@extends('home.homebase')
@section('content')
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
                            <input type="date" id="name"
                            name="name" class="shadow appearance-none border py-1 px-2 w-full" required>
                        </div>
                    </div>
                </div>
                <div class="border border-gray mt-3 p-4">
                    <div class="mb-3  items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                        <input type="text" id="name"
                            name="name"placeholder="Eg. abc..."
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="mb-3  items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Skills</label>
                        <input type="text" id="name"
                            name="name"placeholder="Eg. abc..."
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="mb-3  items-center">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Salary Expectation</label>
                        <input type="text" id="name"
                            name="name"placeholder="Eg. abc..."
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                </div>
                <div class="button flex justify-between ml-10 mt-8">
                    <div class="previous">
                        <button class="bg-[#1B9CFC] hover:bg-[#57aff7] rounded px-3 py-1 text-white">Previous</button>
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
