@extends('home.homebase')
@section('content')
    <hr class="bg-gray-300 h-1 rounded-xl">
    <div class="container mx-auto p-6 rounded-lg">
        <div class="heading text-center mb-6 flex justify-center" id="yojnaCat">
            <h2 class="text-3xl  px-4 py-1 font-semibold text-orange-400 uppercase">Our Services</h2>
        </div>
        <div class="main flex flex-wrap justify-around" id="callingYojna">
        </div>
    </div>

    <hr class="bg-gray-300 h-1 rounded-xl">

    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingYojna = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.index') }}",
                    success: function(response) {
                        let table = $("#callingYojna");
                        table.empty();
                        let data = response.data;
                        data.forEach((data) => {
                            table.append(`
                                <a href="/sarkari-yojna-form/${data.id}" class="forms w-1/4 mt-4 mb-4 py-2 px-2">
                                    <div class="image flex justify-center mb-2">
                                        <img src="/image/yojna/logo/${data.logo}" class="shadow rounded-sm w-[25%]"
                                            alt="">
                                    </div>
                                    <div class="title text-center">
                                        <h3 class="text-base font-semibold">${data.hname}</h3>
                                        <h3 class="text-sm">${data.ename}</h3>
                                    </div>
                                </a>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingYojna();

            // Function to fetch and display appointment
            let callingYojnaCat = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.category.index') }}",
                    success: function(response) {
                        let table = $("#yojnaCat");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);
                        data.forEach((data) => {
                            table.append(`  
                            <h2 class="text-3xl  px-4 py-1 font-semibold text-orange-500 uppercase">${data.name}</h2>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingYojnaCat();
        });
    </script>
@endsection
