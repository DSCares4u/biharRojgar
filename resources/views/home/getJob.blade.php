@extends('home.homebase')
@section('content')

<div class="container mx-auto ">
    <div class="bg-gray-100 mx-12 border border-gray mt-3 w-8/12">
        <h2 class="text-lg font-semibold mb-2 bg-yellow-500 p-2 text-white">Job Application Form</h2>
        <form class="p-5 mx-20 flex flex-col">
            <div class="mb-3 flex  items-center">
                <label for="name" class="block text-gray-700 font-bold mb-2 w-3/12">Your Name :</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="email" class="block text-gray-700 font-bold mb-2 w-3/12">Email ID :</label>
                <input type="text" id="email" name="email" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="mobile" class="block text-gray-700 font-bold mb-2 w-3/12">Mobile :</label>
                <input type="text" id="mobile" name="mobile" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label class="block text-gray-700 font-bold mb-2 w-3/12">Gender :</label>
                <div class="flex gap-2">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="others" name="others" value="others">
                    <label for="others">Others</label>
                </div>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="qualification" class="block text-gray-700 font-bold mb-2 w-3/12">Qualification :</label>
                <input type="text" id="qualification" name="qualification" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="experience" class="block text-gray-700 font-bold mb-2 w-3/12">Work Experience :</label>
                <input type="text" id="experience" name="experience" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="skills" class="block text-gray-700 font-bold mb-2 w-3/12">Key Skills :</label>
                <input type="text" id="skills" name="skills" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="area" class="block text-gray-700 font-bold mb-2 w-3/12">Area :</label>
                <input type="text" id="area" name="area" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="city" class="block text-gray-700 font-bold mb-2 w-3/12">City :</label>
                <input type="text" id="city" name="city" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="state" class="block text-gray-700 font-bold mb-2 w-3/12">State :</label>
                <input type="text" id="state" name="state" class="shadow appearance-none border py-1 px-2 w-2/3" required>
            </div>
            <div class="mb-3 flex  items-center">
                <label for="resume" class="block text-gray-700 font-bold mb-2 w-3/12">Attach Resume :</label>
                <input type="file" id="resume" name="resume" class="" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 float-left text-white font-bold py-2 w-3/4 rounded focus:outline-none focus:shadow-outline">
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