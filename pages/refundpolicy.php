<?php
$page_title = "hire-php-developer";
?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>



<body>

    <?php include "include/navbar.php" ?>

<main class="w-full mx-auto py-12 max-md:py-24 max-md:text-sm">
    <div class="flex flex-col lg:flex-row gap-8  w-[90%] mx-auto">
        <!-- Left: Main Content -->
        <div class="flex-1 max-w-3xl bg-white  rounded-lg shadow-md p-8 max-md:p-4 max-md:shadow-none ">
            <h1 class="text-3xl max-md:text-2xl font-bold text-blue-900 mb-6">Refund Policy</h1>

            <!-- Introduction -->
            <div class="mb-8">
                <p class="mb-4">At RudraTech IT Services, we are committed to ensuring complete customer satisfaction. This refund policy outlines the terms and conditions for refunds on our services and products.</p>
                <p class="text-sm text-gray-600">Last Updated: April 23, 2025</p>
            </div>

            <!-- Refund Eligibility -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-blue-800 mb-3">Refund Eligibility</h2>
                <div class="pl-4 border-l-4 border-blue-100">
                    <p class="mb-3">Our refund policy varies based on the type of service provided:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><span class="font-medium">Subscription Services:</span> Cancellations within the first 7 days of a new subscription are eligible for a full refund.</li>
                        <li><span class="font-medium">One-time Services:</span> Request within 14 days if you're not satisfied.</li>
                        <li><span class="font-medium">Custom Development Projects:</span> Refunds are assessed case-by-case based on your agreement.</li>
                    </ul>
                </div>
            </div>

            <!-- Refund Process -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-blue-800 mb-3">Refund Process</h2>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="mb-3">To initiate a refund request:</p>
                    <ol class="list-decimal ml-6 space-y-2">
                        <li>Contact our support at <span class="text-blue-600">support@rudratech.com</span>.</li>
                        <li>Provide reason and order details.</li>
                        <li>We’ll review within 2 business days.</li>
                        <li>If approved, refund processed in 5–7 days.</li>
                    </ol>
                </div>
            </div>

            <!-- Non-Refundable Items -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-blue-800 mb-3">Non-Refundable Items</h2>
                <div class="pl-4 border-l-4 border-red-100">
                    <p class="mb-3">These services are not eligible for refunds:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li>Fully delivered & accepted services.</li>
                        <li>Subscriptions active beyond 7 days.</li>
                        <li>Approved custom milestone work.</li>
                        <li>Activated 3rd-party software licenses.</li>
                    </ul>
                </div>
            </div>

            <!-- Cancellation Policy -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-blue-800 mb-3">Cancellation Policy</h2>
                <p class="mb-3">For subscription services:</p>
                <div class="bg-blue-50 p-4 rounded">
                    <ul class="list-disc ml-6 space-y-2">
                        <li>Cancel monthly subscriptions anytime. No partial refunds.</li>
                        <li>Annual plans may get prorated refunds (less 15% fee).</li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="bg-gray-100 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-3">Questions About Our Refund Policy?</h2>
                <p class="mb-4">Contact us if you have any questions:</p>
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span>business@teamrudra.com</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span>+91-720 834 4434</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Sticky Image -->
        <div class="hidden lg:block w-full max-w-sm">
            <div class="sticky top-20">
                <img src="/asset/refund.jpg" alt="Refund Policy" class="">
            </div>
        </div>
    </div>
</main>


<?php include "include/footer.php" ?>

</body>

</html>