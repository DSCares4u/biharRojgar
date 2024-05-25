@extends('home.homebase')
@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md mx-auto w-full max-w-md">
        <form action="" id="applyJob">
            <h2 class="text-2xl font-bold mb-6 text-center">Personal Information</h2>
            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <div id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <div id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <div id="mobile"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="text-center flex justify-between">
                <a href="/add-candidate" id="editButton"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Proceed To Payment
                </button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            function fetchJobDetailsAndOpenModal() {
                let userId = {{ auth()->user()->id }};
                $.ajax({
                    type: 'GET',
                    url: `/api/candidate/view/` + userId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#name').text(response.data.name);
                        $('#email').text(response.data.email);
                        $('#mobile').text(response.data.mobile);
                        $('#address').text(response.data.address);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Job details for editing:', error);
                    }
                });
            }

            // Auto-execute the function when the page loads
            fetchJobDetailsAndOpenModal();

            // applying for job

            $("#applyJob").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('sarkari.job.apply.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("success", response.message, "success");
                        $("#applyJob").trigger("reset");
                        window.open("/sarkari-job/confirm", "_self")
                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.error;
                        $.each(errors, function(key, value) {
                            $("#" + key + "-error").text(value[0]).removeClass(
                                "hidden");
                        });
                    }
                })
            });
        });
    </script>
@endsection
