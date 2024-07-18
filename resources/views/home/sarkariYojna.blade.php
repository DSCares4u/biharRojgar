@extends('home.homebase')
@section('title', 'Sarkari Yojna')
@section('content')
<hr class="bg-gray-300 h-1 rounded-xl">

<div class="flex flex-row mb-4 mt-5 ml-10 lg:w-1/3 lg:ml-10 w-full">
    <input type="text" id="searchName" placeholder="Search by Name or Category" class="border p-1 lg:w-1/2 mr-2 rounded-lg w-1/2">
    <button id="searchButton" class="mt-2 lg:mt-0 bg-blue-500 text-white p-2 rounded-lg">Search</button>
</div>
<div class="container mx-auto p-6 rounded-lg mb-10">
    <div class="heading text-center mb-6 capitalize" id="yojnaCat">
        <!-- Categories will be appended here -->
    </div>
    <div class="main capitalize" id="callingYojna">
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
                            <h2 class="text-3xl px-4 py-1 font-semibold text-orange-500 uppercase category-title" data-cat-id="${category.id}">${category.name}</h2>
                            <div class="category-group grid grid-cols-3 mb-6 md:grid-cols-4" id="category-${category.id}">
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
        let callingYojna = (searchName = '') => {
            $.ajax({
                type: "GET",
                url: "{{ route('yojna.index') }}",
                success: function(response) {
                    let yojnas = response.data;
                    let filteredYojnas = yojnas.filter(yojna => {
                        let matchName = true;

                        // Check if searchName matches yojna name or category name
                        if (searchName) {
                            matchName = yojna.ename.toLowerCase().includes(searchName) || yojna.hname.toLowerCase().includes(searchName) || 
                                        categories.some(category => category.id === yojna.yojna_category_id && category.name.toLowerCase().includes(searchName));
                        }
                        return matchName;
                    });

                    // Clear previous yojnas and hide empty categories
                    $('.category-group').empty();
                    $('.category-title').hide();

                    // Append filtered yojnas
                    filteredYojnas.forEach((yojna) => {
                        let categoryGroup = $(`#category-${yojna.yojna_category_id}`);
                        if (categoryGroup.length > 0) {
                            categoryGroup.append(`
                                <a href="/sarkari-yojna-form/${yojna.id}" class="forms mt-4 mb-4 py-2 md:px-6 px-1 block w-full md:w-auto">
                                    <div class="image flex justify-center mb-2">
                                        <img src="/image/yojna/logo/${yojna.logo}" class="shadow rounded-full w-16 h-16 md:w-20 md:h-20" alt="">
                                    </div>
                                    <div class="title text-center">
                                        <h3 class="text-sm md:text-base font-semibold">${yojna.hname}</h3>
                                        <h3 class="text-xs md:text-sm">${yojna.ename}</h3>
                                    </div>
                                </a>

                            `);
                            // Show category title if it has matching yojnas
                            $(`.category-title[data-cat-id="${yojna.yojna_category_id}"]`).show();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        };

        // Fetch categories first, then fetch yojnas
        callingYojnaCat().then(() => {
            callingYojna();

            // Add event listeners after the initial data is loaded
            $('#searchName').on('keyup', function() {
                let searchName = $(this).val().toLowerCase();
                callingYojna(searchName);
            });

            $('#searchButton').on('click', function() {
                let searchName = $('#searchName').val().toLowerCase();
                callingYojna(searchName);
            });
        });
    });
</script>
@endsection


