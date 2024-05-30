@extends('home.homebase')
@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md mx-auto w-full max-w-md">
        <form action="" id="applyJob">
            <h2 class="text-2xl font-bold mb-6 text-center">Personal Information</h2>
            <input type="hidden" id="id" name="user_id" value="{{ Auth::id() }}">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Candidate Name</label>
                <div id="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="father" class="block text-gray-700 text-sm font-bold mb-2">Father’s Name</label>
                <div id="father"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="mother" class="block text-gray-700 text-sm font-bold mb-2">Mother’s Name</label>
                <div id="mother"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date Of Birth</label>
                <div id="dob"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <div id="email"
                    class="shadow lowercase appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <div id="mobile"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                <div id="gender"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="marital" class="block text-gray-700 text-sm font-bold mb-2">Marital status</label>
                <div id="marital"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="id_mark" class="block text-gray-700 text-sm font-bold mb-2">Identificatiion Mark</label>
                <div id="id_mark"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="preferred_lang" class="block text-gray-700 text-sm font-bold mb-2">Preferred Language</label>
                <div id="preferred_lang"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="religion" class="block text-gray-700 text-sm font-bold mb-2">Religion</label>
                <div id="religion"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="community" class="block text-gray-700 text-sm font-bold mb-2">Community</label>
                <div id="community"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="village" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <div id="village"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="landmark" class="block text-gray-700 text-sm font-bold mb-2">Landmark</label>
                <div id="landmark"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="area" class="block text-gray-700 text-sm font-bold mb-2">Area</label>
                <div id="area"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="pincode" class="block text-gray-700 text-sm font-bold mb-2">Pincode</label>
                <div id="pincode"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                <div id="city"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
                </div>
            </div>
            <div class="mb-4">
                <label for="state" class="block text-gray-700 text-sm font-bold mb-2">State</label>
                <div id="state"
                    class="shadow capitalize appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-gray-100">
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
                        $('#mother').text(response.data.mother);
                        $('#father').text(response.data.father);
                        $('#dob').text(response.data.dob);
                        $('#mobile').text(response.data.mobile);
                        $('#gender').text(response.data.gender);
                        $('#marital').text(response.data.marital);
                        $('#id_mark').text(response.data.id_mark);
                        $('#preferred_lang').text(response.data.preferred_lang);
                        $('#religion').text(response.data.religion);
                        $('#community').text(response.data.community);
                        $('#village').text(response.data.village);
                        $('#landmark').text(response.data.landmark);
                        $('#pincode').text(response.data.pincode);
                        $('#area').text(response.data.area);
                        $('#city').text(response.data.city);
                        $('#state').text(response.data.state);
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
    {{-- <div class="container mx-auto p-4 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-center mb-4">माता कलावती देवी फाउंडेशन</h1>
        <p class="text-center mb-4">JOB APPLICATION FORM</p>
        <form>
            <!-- Personal Details -->
            <h2 class="text-xl font-semibold mb-2">Personal Details / व्यक्तिगत विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block font-medium">Name (As per Aadhar Card) / नाम (आधार कार्ड अनुसार)</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="fathers-name" class="block font-medium">Father's Name / पिता का नाम</label>
                    <input type="text" id="fathers-name" name="fathers-name" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="mothers-name" class="block font-medium">Mother's Name / माता का नाम</label>
                    <input type="text" id="mothers-name" name="mothers-name" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="dob" class="block font-medium">D.O.B. / जन्म तिथि</label>
                    <input type="date" id="dob" name="dob" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="gender" class="block font-medium">Gender / लिंग</label>
                    <select id="gender" name="gender" class="w-full border border-gray-300 p-2 rounded-md">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="nationality" class="block font-medium">Nationality / राष्ट्रीयता</label>
                    <input type="text" id="nationality" name="nationality" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="marital-status" class="block font-medium">Marital Status / वैवाहिक स्थिति</label>
                    <input type="text" id="marital-status" name="marital-status" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="religion" class="block font-medium">Religion / धर्म</label>
                    <input type="text" id="religion" name="religion" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="category" class="block font-medium">Category / वर्ग</label>
                    <div class="flex space-x-4">
                        <label><input type="checkbox" name="category" value="SC"> SC</label>
                        <label><input type="checkbox" name="category" value="ST"> ST</label>
                        <label><input type="checkbox" name="category" value="OBC"> OBC</label>
                        <label><input type="checkbox" name="category" value="EBC"> EBC</label>
                        <label><input type="checkbox" name="category" value="GEN"> GEN</label>
                    </div>
                </div>
                <div>
                    <label for="mother-tongue" class="block font-medium">Mother Tongue / मातृ भाषा</label>
                    <input type="text" id="mother-tongue" name="mother-tongue" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="mobile-no" class="block font-medium">Mobile No. / मोबाइल नं</label>
                    <input type="text" id="mobile-no" name="mobile-no" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="email" class="block font-medium">Email ID / ईमेल आईडी</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>
            
            <!-- Address Details -->
            <h2 class="text-xl font-semibold mt-4 mb-2">Address Details / पता का विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="village" class="block font-medium">Village / गांव</label>
                    <input type="text" id="village" name="village" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="post-office" class="block font-medium">Post Office / डाक घर</label>
                    <input type="text" id="post-office" name="post-office" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="police-station" class="block font-medium">Police Station / थाना</label>
                    <input type="text" id="police-station" name="police-station" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="district" class="block font-medium">District / जिला</label>
                    <input type="text" id="district" name="district" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="state" class="block font-medium">State / राज्य</label>
                    <input type="text" id="state" name="state" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="pin-code" class="block font-medium">PIN Code / पिन कोड</label>
                    <input type="text" id="pin-code" name="pin-code" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>
            
            <!-- Other Details -->
            <h2 class="text-xl font-semibold mt-4 mb-2">Other Details / अन्य विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium">Are you a person with disability? / क्या आप विकलांग व्यक्ति हैं?</label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="disability" value="yes"> Yes</label>
                        <label><input type="radio" name="disability" value="no"> No</label>
                    </div>
                </div>
                <div>
                    <label class="block font-medium">Have you had any legal action taken against you? / क्या आपके खिलाफ कोई कानूनी कार्रवाई की गई है?</label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="legal-action" value="yes"> Yes</label>
                        <label><input type="radio" name="legal-action" value="no"> No</label>
                    </div>
                </div>
                <div>
                    <label class="block font-medium">Do you have any job experience? / क्या आपके पास कोई नौकरी का अनुभव है?</label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="job-experience" value="yes"> Yes</label>
                        <label><input type="radio" name="job-experience" value="no"> No</label>
                    </div>
                </div>
            </div>

            <!-- Educational Details -->
            <h2 class="text-xl font-semibold mt-4 mb-2">Educational Details / शैक्षिक विवरण</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="last-qualification" class="block font-medium">Last Qualification / अंतिम शिक्षा</label>
                    <input type="text" id="last-qualification" name="last-qualification" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="other-qualification" class="block font-medium">Other Qualification / अन्य शिक्षा</label>
                    <input type="text" id="other-qualification" name="other-qualification" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <!-- Instructions -->
            <h2 class="text-xl font-semibold mt-4 mb-2">Instructions / निर्देश</h2>
            <ul class="list-disc list-inside">
                <li>Please Attach Follow / कृपया संलग्न करें
                    <ul class="ml-4 list-decimal">
                        <li>Photo Copy of Aadhar Card / आधार कार्ड की छायाप्रति</li>
                        <li>Photo Copy of Educational Qualification Certificates / शैक्षिक योग्यता का प्रमाण पत्र की छायाप्रति</li>
                        <li>Photo Copy of any other Certificates / किसी अन्य प्रमाण पत्र की छायाप्रति</li>
                        <li>Payment Reference No. / भुगतान संदर्भ संख्या</li>
                    </ul>
                </li>
                <li>Rs. 500/- will have to be paid to fill the application form / आवेदन पत्र भरने के लिए 500/- रु. का भुगतान करना होगा</li>
                <li>If you're paying online then use the A/c No. or Scanner to pay / यदि आप ऑनलाइन भुगतान करना चाहते हैं तो दिए गए अकाउंट नंबर या स्कैनर का उपयोग करें
                    <ul class="ml-4 list-disc">
                        <li>Mata Kalavati Devi Foundation</li>
                        <li>A/c No: 071205004624</li>
                        <li>IFSC Code: ICIC0000712</li>
                    </ul>
                </li>
                <li>Mention your Payment details / भुगतान विवरण का उल्लेख करें</li>
            </ul>

            <!-- Payment Details -->
            <div class="mt-4">
                <label for="payment-details" class="block font-medium">Payment Details / भुगतान विवरण</label>
                <input type="text" id="payment-details" name="payment-details" class="w-full border border-gray-300 p-2 rounded-md">
            </div>

            <div class="mt-4">
                <label for="payment-reference" class="block font-medium">Payment Reference No. or Transaction Id / भुगतान संदर्भ संख्या या लेनदेन आईडी</label>
                <input type="text" id="payment-reference" name="payment-reference" class="w-full border border-gray-300 p-2 rounded-md">
            </div>

            <div class="mt-4">
                <label for="account-holder" class="block font-medium">Name of the A/c Holder through which the payment is done / खाता धारक का नाम जिसके माध्यम से भुगतान किया गया है</label>
                <input type="text" id="account-holder" name="account-holder" class="w-full border border-gray-300 p-2 rounded-md">
            </div>

            <!-- Declaration -->
            <h2 class="text-xl font-semibold mt-4 mb-2">Declaration / घोषणा</h2>
            <p class="mb-4">I hereby declare that the information given above and in the enclosed documents is true to the best of my knowledge and belief and nothing has been concealed therein. I understand that if the information given by me is proved false/not true, I will have to face the punishment as per the law. / मैं एतद्द्वारा घोषणा करता/करती हूं कि उपर्युक्त जानकारी मेरे सर्वोत्तम ज्ञान के अनुसार सत्य है और इसमें कुछ भी छुपाया नहीं गया है। मुझे समझ है कि मेरे द्वारा दी गई जानकारी गलत / असत्य पाई गई तो मुझे कानून के अनुसार सजा भुगतनी होगी।</p>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="applicant-signature" class="block font-medium">Applicant Signature / आवेदक हस्ताक्षर</label>
                    <input type="text" id="applicant-signature" name="applicant-signature" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="application-date" class="block font-medium">Application Date / आवेदन की तारीख</label>
                    <input type="date" id="application-date" name="application-date" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <!-- For Office Use Only -->
            <h2 class="text-xl font-semibold mt-4 mb-2">For Office Use Only</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="office-application-no" class="block font-medium">Application No. / आवेदन संख्या</label>
                    <input type="text" id="office-application-no" name="office-application-no" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="office-application-date" class="block font-medium">Application Date / आवेदन की तारीख</label>
                    <input type="date" id="office-application-date" name="office-application-date" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="document-verification-officer" class="block font-medium">Document Verification Officer's Name / दस्तावेज़ सत्यापन अधिकारी का नाम</label>
                    <input type="text" id="document-verification-officer" name="document-verification-officer" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="checked-by" class="block font-medium">Checked By / द्वारा जाँच की गई</label>
                    <input type="text" id="checked-by" name="checked-by" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="approved-by" class="block font-medium">Approved By / द्वारा स्वीकृत</label>
                    <input type="text" id="approved-by" name="approved-by" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
        </form>
    </div> --}}

