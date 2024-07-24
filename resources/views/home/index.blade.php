@extends('home.homebase')
@section('title', 'Home Page')
@section('content')
    {{-- <div class="section text-center mt-8">
        <h3 class="text-4xl">Bihar's <strong>Largest</strong> Job Portal</h3>
        <h3 class="text-xl mt-4">Taskinn Solution helps you hire staff in very less time</h3>
        <div class="image flex justify-center"><img src="/landing.jpg" class="h-96" alt=""></div>
    </div>

    <div class="button flex justify-center gap-5 mb-20">
        <a href="/get-job/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Apply for Private job</button>
            <p class="text-center text-blue-500 text-sm mt-1 hover:underline">प्राइवेट नौकरी के लिए आवेदन करे</p>
        </a>
        <a href="/hire/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Hire a Candidate</button>
            <p class="text-center text-blue-500 text-sm hover:underline mt-1">कर्मचारी चयन करे</p>
        </a>       
    </div> --}}

    <div class="section text-center mt-8 px-4">
        <h3 class="text-4xl md:text-3xl sm:text-2xl">Bihar's <strong>Largest</strong> Job Portal</h3>
        <h3 class="text-xl mt-4 md:text-lg sm:text-base">Taskinn Solution helps you hire staff in very less time</h3>
        <div class="image flex justify-center mt-4">
            <img src="/landing.jpg" class="h-96 md:h-96 sm:h-48" alt="">
        </div>
    </div>
    
    <div class="button flex flex-col sm:flex-row justify-center gap-5 mt-6 mb-20">
        <a href="/get-job/t&c" class="flex flex-col items-center">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl sm:text-lg">Apply for Private job</button>
            <p class="text-center text-blue-500 text-sm mt-1 hover:underline">प्राइवेट नौकरी के लिए आवेदन करे</p>
        </a>
        <a href="/hire/t&c" class="flex flex-col items-center">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl sm:text-lg">Hire a Candidate</button>
            <p class="text-center text-blue-500 text-sm hover:underline mt-1">कर्मचारी चयन करे</p>
        </a>
    </div>
    
@endsection
