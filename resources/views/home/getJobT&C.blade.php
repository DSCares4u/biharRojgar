@extends('home.homebase')
@section('title', 'Terms & Conditions')
@section('content')

<div class="container mx-auto flex flex-wrap lg:flex-nowrap">
    <div class="bg-gray-100 p-6 rounded-lg w-full lg:w-8/12">
        <h2 class="text-lg font-bold mb-4">Terms and Conditions</h2>
        <ul class="list-inside list-decimal mb-4 text-sm md:text-base">
            <li class="mb-2">
                <label for="term1">Taskinn Solutions एक निजी जॉब्स हायरिंग एजेंसी है।</label>
            </li>
            <li class="mb-2">
                <label for="term2">हमारी सेवाएं नियोक्ता और नौकरी तलाशने वालों के बीच संपर्क स्थापित करती हैं।</label>
            </li>
            <li class="mb-2">
                <label for="term3">उपयोगकर्ता को सेवाओं का उपयोग करने के लिए 18 वर्ष या उससे अधिक आयु का होना चाहिए।</label>
            </li>
            <li class="mb-2">
                <label for="term4">उपयोगकर्ता द्वारा प्रदान की गई जानकारी सटीक और सत्य होनी चाहिए।</label>
            </li>
            <li class="mb-2">
                <label for="term5">Taskinn Solutions केवल कनेक्शन स्थापित करने के लिए जिम्मेदार है, नौकरी की गारंटी नहीं देता।</label>
            </li>
            <li class="mb-2">
                <label for="term6">शुल्क और भुगतान से जुड़े नियम वेबसाइट पर स्पष्ट रूप से बताए जाएंगे।</label>
            </li>
            <li class="mb-2">
                <label for="term7">आप पर किसी भी तरह की क़ानूनी कार्यवाही या मुक़दमा नहीं चल रहा हो या पहले कभी चला हो।</label>
            </li>
            <li class="mb-2">
                <label for="term8">आप इस नौकरी के आवेदन के लिए अपने व्यक्तिगत डेटा को हमारे साथ साझा करने की सहमति देते हैं।</label>
            </li>
            <li class="mb-2">
                <label for="term9">आप समझते हैं कि आपके दवारा दी गई गलत जानकारी से आपकी नौकरी आवेदन को रद्द किया जा सकता है।</label>
            </li>
            <li class="mb-2">
                <label for="term10">Taskinn Solutions बिना पूर्व सूचना के शर्तें बदलने का अधिकार रखता है।</label>
            </li>
        </ul>
        <div class="flex items-center mb-4">
            <input 
                type="checkbox" 
                id="agreeTerms" 
                class="mr-2 cursor-pointer w-5 h-5"
            >
            <label for="agreeTerms" class="text-lg">मैं सभी शर्तों और नियमों से सहमत हूं।</label>
        </div>
        <div class="flex flex-col justify-center items-center">
            <p id="errorMessage" class="text-red-500 text-sm mt-4 hidden">
                कृपया पहले सभी शर्तों से सहमत हों।
            </p>
            <button 
                id="proceedButton" 
                onclick="validateAgreement()" 
                class="bg-green-600 hover:bg-green-70 w-1/4 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Proceed Now
            </button>
        </div>
    </div>
    <div class="w-full lg:w-4/12 mt-4 lg:mt-0">
        <div class="mt-4 lg:mt-10 mx-auto w-full md:w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <div class="price mt-2 mb-4">
                <h3 class="text-lg font-semibold">Our Services</h3>
                <div class="line bg-blue-500">
                    <hr class="h-1">
                </div>
                <div class="flex flex-col text-sm mt-3">
                    <a href="" class="mt-3 font-semibold">Manpower Recruitment</a>
                    <a href="" class="mt-3 font-semibold">Placement Recruitment</a>
                    <a href="" class="mt-3 font-semibold">Career Consultant</a>
                    <a href="" class="mt-3 font-semibold">Corporate Training Services</a>
                </div>
            </div>
        </div>
        <div class="mt-4 lg:mt-5 mx-auto w-full md:w-[80%] bg-white border p-2 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <div class="price mt-2 mb-4">
                <h3 class="text-lg font-semibold">Contact Us</h3>
                <div class="line bg-blue-500">
                    <hr class="h-1">
                </div>
                <div class="flex flex-col mt-3">
                    <h3 class="mt-2 text-sm font-medium">Taskinn Solutions </h3>
                    <hr class="mt-2">
                    <h3 class="mt-2 font-normal text-xs">Near Panchwati Chowk, </h3>
                    <h3 class="font-normal text-xs">Rambagh, Purnea, Bihar - 854301, India</h3>
                    <hr class="mt-2 mb-2">
                    <h3 class="text-sm"><strong>Mobile :</strong> +91-8268222299</h3>
                    <hr class="mt-2 mb-2">
                    <h3 class="text-sm"><strong>Call Us :</strong> (+91) 8268222299</h3>
                    <hr class="mt-2 mb-2">
                    <h3 class="text-sm"><strong>E-mail :</strong> taskinnsolution@gmail.com</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateAgreement() {
        const checkbox = document.getElementById('agreeTerms');
        const errorMessage = document.getElementById('errorMessage');
        if (checkbox.checked) {
            window.location.href = "{{url('/add-candidate')}}";
        } else {
            errorMessage.classList.remove('hidden');
        }
    }
</script>

@endsection
