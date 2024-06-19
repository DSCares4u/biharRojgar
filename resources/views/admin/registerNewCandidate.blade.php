@extends('admin.adminBase')
@section('content')
<div class="container h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Register</h1>
        <div class="shadow-md rounded px-8 py-6 pb-8 mb-4 bg-gray-200">
            <form method="POST" id="registerUser">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold mb-2">Name</label>
                    <input id="name" type="text" name="name"
                        autocomplete="name" autofocus
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="name-error" class="text-red-500 text-xs hidden"></p>
                </div>
                <div class="mb-4">
                    <label for="mobile" class="block text-sm font-semibold mb-2">Mobile No.</label>
                    <input id="mobile" type="tel" name="mobile"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="mobile-error" class="text-red-500 text-xs hidden"></p>
                </div>

                <div class="flex items-center justify-center mt-8">
                    <button type="submit"
                        class=" bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#registerUser").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ route('register.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    $("#registerUser").trigger("reset");
                    if (response && response.user_id) {
                        console.log("New user ID:", response.user_id);
                        // Redirect to the specified URL after successful registration
                        window.location.href = `/admin/manage-candidate/insert/${response.user_id}`;
                    } else {
                        console.error("User ID not found in response:", response);
                        // Handle the case where user_id is not found in response
                    }
                },
                error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.error;
                    $.each(errors, function(key, value) {
                        $("#" + key + "-error").text(value[0]).removeClass("hidden");
                    });
                }
            });
        });
    });
</script>

@endsection
