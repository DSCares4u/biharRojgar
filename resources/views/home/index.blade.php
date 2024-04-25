@extends('home.homebase')
@section('content')
    <div class="section text-center mt-8">
        <h3 class="text-4xl">Bihar's <strong>Largest</strong> Job Portal</h3>
        <h3 class="text-xl mt-4">Bihar Rojgar helps you hire staff in 3 days</h3>
        <div class="image flex justify-center"><img src="/landing.jpg" class="h-96" alt=""></div>
    </div>

    <div class="button flex justify-center gap-5">
        <a href="/hire/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Hire now</button>
        </a>
        <a href="/get-job/t&c">
            <button class="text-white bg-yellow-500 p-2 rounded-lg shadow-lg hover:bg-yellow-600 px-12 text-xl">Get a job</button>
        </a>
    </div>
@endsection
