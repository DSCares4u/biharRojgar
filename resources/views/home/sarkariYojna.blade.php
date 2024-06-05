@extends('home.homebase')
@section('content')
    <hr class="bg-gray-300 h-1 rounded-xl">
    <div class="container mx-auto p-6 rounded-lg">
        <div class="heading text-center mb-6" id="yojnaCat">
            <!-- Categories will be appended here -->
        </div>
        <div class="main" id="callingYojna">
            <!-- Yojnas will be appended here under respective categories -->
        </div>
    </div>

    <hr class="bg-gray-300 h-1 rounded-xl">

    <script>
        $(document).ready(function() {
            let categories = [];

            // Function to fetch and display categories
            let callingYojnaCat = () => {
                return $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.category.index') }}",
                    success: function(response) {
                        categories = response.data;
                        let catContainer = $("#yojnaCat");
                        catContainer.empty();
                        categories.forEach((category) => {
                            catContainer.append(`  
                                <h2 class="text-3xl px-4 py-1 font-semibold text-orange-500 uppercase" data-cat-id="${category.id}">${category.name}</h2>
                                <div class="category-group flex flex-wrap justify-around mb-6" id="category-${category.id}">
                                    <!-- Yojnas for this category will be appended here -->
                                </div>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };

            // Function to fetch and display yojnas
            let callingYojna = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('yojna.index') }}",
                    success: function(response) {
                        let yojnas = response.data;
                        yojnas.forEach((yojna) => {
                            let categoryGroup = $(`#category-${yojna.yojna_category_id}`);
                            if (categoryGroup.length > 0) {
                                categoryGroup.append(`
                                    <a href="/sarkari-yojna-form/${yojna.id}" class="forms w-1/4 mt-4 mb-4 py-2 px-2">
                                        <div class="image flex justify-center mb-2">
                                            <img src="/image/yojna/logo/${yojna.logo}" class="shadow rounded-sm w-[25%]" alt="">
                                        </div>
                                        <div class="title text-center">
                                            <h3 class="text-base font-semibold">${yojna.hname}</h3>
                                            <h3 class="text-sm">${yojna.ename}</h3>
                                        </div>
                                    </a>
                                `);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };

            // Fetch categories first, then fetch yojnas
            callingYojnaCat().then(callingYojna);
        });
    </script>
@endsection
