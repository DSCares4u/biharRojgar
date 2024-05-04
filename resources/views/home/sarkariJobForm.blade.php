@extends('home.homebase')

@section('content')
    <div class="container mx-auto font-sans">
        <div class="bg-gray-100 mx-16 border border-gray mt-3">
            <form id="applyForm" class="p-5 flex flex-col mx-10">
                <h2 class="text-lg font-semibold mb-2">Apply For Sarkari job</h2>
                <div class="mb-3">
                    <label for="name" class="block text-gray-700 text-sm mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Eg. Sales executives needed urgently for ..."
                        class="shadow appearance-none border py-1 px-2 w-full" required>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="w-1/2">
                        <label for="email" class="block text-gray-700 text-sm mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="example@example.com"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="w-1/2">
                        <label for="mobile" class="block text-gray-700 text-sm mb-2">Mobile</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm mb-2">Gender</label>
                    <div class="flex items-center">
                        <input type="radio" name="gender" id="male" class="mr-2" value="male" required>
                        <label for="male" class="mr-4">Male</label>
                        <input type="radio" name="gender" id="female" class="mr-2" value="female" required>
                        <label for="female" class="mr-4">Female</label>
                        <input type="radio" name="gender" id="others" class="mr-2" value="others" required>
                        <label for="others">Others</label>
                    </div>
                </div>
                <div class="mb-3 flex gap-2">
                    <div class="w-1/2">
                        <label for="city" class="block text-gray-700 text-sm mb-2">City</label>
                        <input type="text" id="city" name="city" placeholder="City Name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                    <div class="w-1/2">
                        <label for="state" class="block text-gray-700 text-sm mb-2">State</label>
                        <input type="text" id="state" name="state" placeholder="State Name"
                            class="shadow appearance-none border py-1 px-2 w-full" required>
                    </div>
                </div>
                <div class="mb-3 flex justify-center mt-5">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 font-semibold py-2 px-5 rounded focus:outline-none focus:shadow-outline text-black">
                        Apply Now
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Submit form via AJAX
            $("#applyForm").submit(function(e) {
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
                        $("#applyForm").trigger("reset");
                        window.open("/", "_self");
                    },
                    error: function(xhr, status, error) {
                        swal("Error", "Something went wrong. Please try again later.", "error");
                    }
                });
            });
        });

    </script>
@endsection
