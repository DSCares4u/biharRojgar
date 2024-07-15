@extends('home.homebase')
@section('title', 'Home Page')
@section('content')
    <div class="section text-center mt-8">
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
    </div>
@endsection
