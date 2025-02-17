@extends('hirer.hirerBase')
@section('title', 'Application')
@section('content')
<div class="mb-4 flex gap-2 w-[90%] mx-auto" id="plan_card">
    <label
        class="md:w-[25%] md:h-[350px] w-[200px] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
        data-plan="free">
        <input type="radio" name="address_id" value="1" class="hidden" />
        <div class="price flex justify-between">
            <h3 class="text-lg font-semibold">Free</h3>
            <h3 class="text-lg font-semibold">Rs. 0</h3>
        </div>
        <div class="line bg-orange-500 mt-20">
            <hr class="h-2">
        </div>
        <ul class="mt-3">
            <li class="text-gray-600 text-[13px]">Normal x applications</li>
            <li class="flex font-medium text-[13px] mt-2">
                <img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="" />Limited
                applications
            </li>
        </ul>
    </label>
</div>

<div
    class=" md:mt-10 mb-10 mx-auto md:w-[50%] w-full bg-white border p-3 rounded shadow-lg dark:bg-gray-800 dark:border-gray-700 ">
    <div class="price mt-2 mb-4">
        <h3 class="text-lg font-semibold">Plan Charge Bill</h3>
    </div>
    <ul id="planCharge">
        <li class="flex justify-between text-base text-gray-500">
            <p>Free Localities</p>
            <p class="font-bold">Rs. 0</p>
        </li>
        <li class="flex justify-between text-base text-gray-500">
            <p>Gold Job</p>
            <p class="font-bold">Rs. 0</p>
        </li>
        <hr>
        <li class="flex justify-between text-base text-gray-500">
            <p>Total Payment</p>
            <p class="font-bold">Rs. 0</p>
        </li>
    </ul>
    <div id="payBtn2" class=" flex justify-center items-center">
        <button type="submit"
            class="bg-yellow-400 hover:bg-yellow-500 float-left font-semibold rounded focus:outline-none focus:shadow-outline text-black mt-3 py-2 border border-yellow-500 w-full">
            Buy Now
        </button>
    </div>
</div>


<script>
$.ajax({
    type: "GET",
    url: "{{ route('hire.plan.index') }}",
    success: function(response) {
        let select = $("#plan_card");
        select.empty();

        response.data.forEach((plan, index) => {
            // Remove square brackets and double quotes from the features string
            let cleanedFeatures = plan.features.replace(/[\[\]"]/g, '');

            // Split the features by comma and remove the first and last element
            let featuresArray = cleanedFeatures.split(',');

            // Map each feature to an HTML list item and join them into a single string
            let features = featuresArray.map(feature =>
                `<li class="flex font-medium text-[13px] mt-2overflow-y-hidden"><img src="{{ url('/icons/correct.png') }}" class="h-4 mr-2 mt-1" alt="">${feature}</li>`
            ).join('');

            select.append(`
                        <label class="md:w-[25%] md:h-[350px] w-[200px] h-[300px] bg-white border border-[#006266] p-2 rounded shadow dark:bg-gray-800 dark:border-gray-700 cursor-pointer">
                            <input type="radio" name="plan_id" value="${plan.id}" data-plan-name="${plan.name}" data-plan-charge="${plan.price}" class="hidden" />
                            <div class="price flex justify-between">
                                <h3 class="text-lg font-semibold">${plan.name}</h3>
                                <h3 class="text-lg font-semibold">Rs. ${plan.price}</h3>
                            </div>
                            <div class="line bg-orange-500 mt-20">
                                <hr class="h-2">
                            </div>
                            <ul class="mt-3 ">
                                <li class="text-gray-600 text-[13px]">Normal x applications</li>
                                ${features}
                            </ul>
                        </label>
                    `);
        });

        // Add click event listener to the dynamically added labels
        document.querySelectorAll('#plan_card label').forEach(label => {
            label.addEventListener('click', () => {
                document.querySelectorAll('#plan_card label').forEach(l => l
                    .classList.remove('border-orange-500'));
                label.classList.add('border-orange-500');
                label.querySelector('input[type="radio"]').checked = true;
                updatePlanDetails(label);
            });
        });
    }
});

function updatePlanDetails(label) {
    let selectedPlan = label.querySelector('input[type="radio"]');
    let PlanFee = parseInt(selectedPlan.dataset.planCharge);
    let PlanName = selectedPlan.dataset.planName;
    let Platform = '';
    if (PlanFee == '0') {
        Platform = 0;
    } else {
        Platform = 200;
    }

    // Update the fee display
    $('#planCharge').html(`
                <li class="flex justify-between text-base text-gray-500">
                    <p>${PlanName}</p>
                    <p class="font-bold">Rs. ${PlanFee}</p>
                </li>
                <li class="flex justify-between text-base text-gray-500">
                    <p>Platform Fees</p>
                    <p class="font-bold">Rs. ${Platform}</p>
                </li>
                <hr>
                <li class="flex justify-between text-base text-gray-500">
                    <p>Total Payment</p>
                    <p class="font-bold">Rs. ${PlanFee + Platform}</p>
                </li>
            `);
}
</script>

@endsection