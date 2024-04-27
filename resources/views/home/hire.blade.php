@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans ">
        <div class="bg-gray-100 mx-12 border border-gray mt-3 w-8/12">
            <form class="p-5 flex flex-col">
                <h2 class="text-lg font-semibold mb-2  ">Post a job</h2>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border py-1 px-2 w-full"
                        required>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Role</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border py-1 px-2 "
                        required>
                </div>
                <div class="mb-3 flex gap-6">
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Monthly Salary</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">Experience</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                </div>
                <div class="mb-3 flex gap-6">
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">City</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="mb-3  items-center w-1/2">
                        <label for="name" class="block text-gray-700 text-sm mb-2 ">State</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                </div>
                <div class="mb-3  items-center">
                    <label for="name" class="block text-gray-700 text-sm mb-2 ">Job Title</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>


                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 float-left text-white font-bold py-2 w-3/4 rounded focus:outline-none focus:shadow-outline">
                    Submit Application
                </button>
            </form>

        </div>
        <div class="w-4/12">
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
