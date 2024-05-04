@extends('home.homebase')
@section('content')
    <div class="section text-center mt-8">
        <h3 class="text-4xl">Bihar's <strong>Largest</strong> Job Portal</h3>
        <h3 class="text-xl mt-4">Bihar Rojgar helps you hire staff in 3 days</h3>
        <div class="image flex justify-center"><img src="/landing.jpg" class="h-96" alt=""></div>
    </div>

    <div class="button flex justify-center gap-5">
        <a href="/get-job/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Get a job</button>
        </a>
        <a href="/hire/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Hire now</button>
        </a>       
    </div>

    {{-- <button id="openApplyJobBtn">Contact</button> --}}
    <!-- sarkari Job pop-up Work -->

{{-- <div id="applyJobForm" class="hidden fixed inset-0 items-center justify-center z-50 ">
    <div
        class="modal-content  bg-white w-11/12 md:max-w-lg mx-auto mt-2  rounded shadow-lg z-50 overflow-y-auto h-[70%]">
        <div class="flex justify-end pt-1 pr-4">
            <button id="closeFormButton" class="text-3xl leading-none hover:text-gray-300">&times;</button>
        </div>
        <div class="flex py-1 px-1">
            <div class="w-5/12">
                <h2>Enquire Now</h2>
                <p>Vesta Elder Care services embodies integrity, professionalism and care provided by highly trained caregivers especially certified to provide empathetic and loving support to its patrons.</p>
            </div>
            <div class=" w-7/12 ">
                <form class="p-4" id="bookService">
                    <div class="mb-2">
                        <input type="text" id="name" name="name"
                            class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Name">
                    </div>
                    <div class="flex gap-3 mb-2">
                        <div class="w-1/2">
                            <input type="tel" id="mobile" name="mobile"
                                class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                placeholder="Phone">
                        </div>
                        <div class=" w-1/2">
                            <input type="email" id="email" name="email"
                                class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-2">
                        <select name="service_id" id="callingServices"
                            class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-gray-500">
                            <option value="">Select Service</option>
                            <option value="">abcd</option>
                            <option value="">testing</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    // JavaScript to handle opening and closing of booking Service Form
    document.addEventListener('DOMContentLoaded', function() {
        let openFormButton = document.getElementById('openApplyJobBtn');
        let closeFormButton = document.getElementById('closeFormButton');
        let applyJobForm = document.getElementById('applyjobForm');

        openFormButton.addEventListener('click', function() {
            applyJobForm.classList.remove('hidden');
        });

        closeFormButton.addEventListener('click', function() {
            applyJobForm.classList.add('hidden');
        });
    });
</script> --}}

@endsection
