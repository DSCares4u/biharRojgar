@extends('home.homebase')
@section('content')

    <div class="flex justify-center items-center mt-10">
        <div class="bg-white shadow-md rounded pt-5 px-8 pb-8 mb-4 w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Register</h1>
            <form method="POST" id="registerUser">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" 
                        autocomplete="name" autofocus
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="name-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile No.</label>
                    <input id="mobile" type="tel" name="mobile" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="email-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                {{-- <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-Mail Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" 
                        autocomplete="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="email-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input id="password" type="password" name="password"  autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <p id="password-error" class="text-red-500 text-xs italic hidden"></p>
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                        Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" 
                        autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div> --}}

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>

                
            </form>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            //insert application details

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
                        swal("Success", response.message, "success");
                        // $("#registerUser").trigger("reset");
                        window.open("/login", "_self")
                    },
                    // // error: function(xhr, status, error) {
                    // //     var errors = xhr.responseJSON.error;
                    // //     $.each(errors, function(key, value) {
                    // //         $("#" + key + "-error").text(value[0]).removeClass("hidden");
                    // //     });
                    // }
                })
            })
        });
    </script>

@endsection
