@extends('home.homebase')
@section('content')
    <div class="container mx-auto font-sans">
        <div class="bg-gray-100 w-1/2 mx-auto border border-gray mt-10">
            {{-- <form id="addData" class="p-4  flex flex-col">
               <div class="mb-2">
                   <label for="name" class="block text-gray-700 text-xs mb-1 ">Name :</label>
                   <input type="text" id="name" name="name"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                       placeholder="Name">
               </div>
               <div class="mb-2">
                   <label for="father" class="block text-gray-700 text-xs mb-1 ">Father's Name :</label>
                   <input type="text" id="father" name="father"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                       placeholder="father">
               </div>
               <div class="mb-2">
                   <label for="mobile" class="block text-gray-700 text-xs mb-1 ">Mobile No. :</label>
                   <input type="tel" id="mobile" name="mobile"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                       placeholder="Phone">
               </div>
               <div class=" mb-2">
                   <label for="email" class="block text-gray-700 text-xs mb-1 ">Email :</label>
                   <input type="email" id="email" name="email"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded"
                       placeholder="Email">
               </div>
               <div class=" mb-2">
                   <label for="landmark" class="block text-gray-700 text-xs mb-1 ">Landmark :</label>
                   <input type="text" id="landmark" name="landmark"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
               </div>
               <div class=" mb-2">
                   <label for="village" class="block text-gray-700 text-xs mb-1 ">Village :</label>
                   <input type="text" id="village" name="village"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
               </div>
               <div class=" mb-2">
                   <label for="pincode" class="block text-gray-700 text-xs mb-1 ">Pincode :</label>
                   <input type="number" id="pincode" name="pincode" onchange="getDistrictAndState()"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
               </div>
               <div class="flex gap-1">
                   <div class=" mb-2">
                       <label for="city" class="block text-gray-700 text-xs mb-1 ">City :</label>
                       <input type="text" id="city" name="city"
                           class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                   </div>
                   <div class=" mb-2">
                       <label for="state" class="block text-gray-700 text-xs mb-1 ">State :</label>
                       <input type="text" id="state" name="state"
                           class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded">
                   </div>
               </div>
               <div class="mb-2">
                   <label for="yojna_id" class="block text-gray-700 text-xs mb-1 ">Yojna Selected :</label>
                   <select name="yojna_id" id="callingYojna"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 border border-gray-300 rounded text-gray-500">
                   </select>
               </div>
               <div class=" mb-2">
                   <label for="photo" class="block text-gray-700 text-xs mb-1 ">Upload Your Photo :</label>
                   <input type="file" id="photo" name="photo"
                       class="form-input w-full shadow-sm sm:text-sm py-2 px-2 ">
               </div>
               <div class="mt-4">
                   <button type="submit"
                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Submit</button>
               </div>
            </form> --}}

            <div class="bg-white rounded-lg p-6 shadow-lg max-w-md mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Thank You for Choosing Us!</h2>
                <p class="text-gray-600 mb-4">We appreciate your trust in us and are excited to connect with you soon. Our team is already working on your request, and we'll get in touch shortly.</p>
                <p class="text-gray-600">If you have any questions in the meantime, feel free to <a href="contact-us.html" class="text-blue-500 underline">contact us</a>.</p>
                <div class="mt-6">
                  <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow-md hover:bg-blue-600 transition duration-300">Return to Home</a>
                </div>
              </div>
              
        </div>
    </div>
@endsection
