<?php
$page_title = "website-designing";

?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<style>
    .diagonal-box {
        position: relative;
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        transform: skewY(-5deg);
        transform-origin: top left;
    }

    .diagonal-content {
        transform: skewY(5deg);
        transform-origin: top left;
    }

    .accent-line {
        height: 3px;
        width: 0;
        background: #ff3e3e;
        transition: width 1.5s ease;
    }

    .animated-text span {
        display: inline-block;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.8s forwards;
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .word-1 {
        animation-delay: 0.1s;
    }

    .word-2 {
        animation-delay: 0.2s;
    }

    .word-3 {
        animation-delay: 0.3s;
    }

    .word-4 {
        animation-delay: 0.4s;
    }

    .word-5 {
        animation-delay: 0.5s;
    }

    .word-6 {
        animation-delay: 0.6s;
    }

    .floating-element {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .circle {
        border-radius: 50%;
        position: absolute;
        z-index: 0;
        opacity: 0.6;
    }

    .reveal-trigger:hover .accent-line {
        width: 80px;
    }

    .highlight-word {
        position: relative;
        display: inline-block;
    }

    .highlight-word::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        background-color: rgba(255, 62, 62, 0.25);
        z-index: -1;
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-10px);
    }
</style>



<body>

    <?php include "include/navbar.php" ?>

    <!-- Hero Section for CRM Development -->
    <section class="relative h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center justify-center text-center px-4 py-20">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/asset/crmbg.jpg');"></div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="relative z-10 text-white max-w-2xl">
            <h1 class="text-4xl md:text-4xl lg:text-5xl xl:text-5xl font-extrabold mb-6">
                Tailored CRM Development Services
            </h1>
            <p class="text-md text-gray-200 mb-8">
                Design smarter customer relationships with scalable, intuitive, and business-ready CRM solutions.
            </p>
            <a href="/getquote" class="inline-block px-6 py-3 border border-white rounded-md text-white hover:bg-blue-600 hover:border-blue-600 transition duration-300">
                Start Project
            </a>
        </div>
    </section>



    <section class="bg-white py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto  flex flex-col-reverse lg:flex-row items-center justify-between gap-12 lg:gap-16">

            <!-- Image Section -->
            <div class="w-full lg:w-1/2">
                <img src="/asset/crm.jpg" alt="CRM Features Illustration"
                    class="w-full rounded-xl shadow-xl max-lg:h-[30vh] h-[50vh] object-cover" />
            </div>

            <!-- Features Content -->
            <div class="w-full lg:w-1/2 text-left">
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-4">
                    Features of Our CRM Development Services
                </h2>
                <p class="text-gray-600 mb-8 max-w-xl">
                    Discover the powerful tools and capabilities our custom CRM solutions offer to elevate your business performance.
                </p>

                <div class="space-y-6">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-4">
                        <div class="bg-black text-white p-3 rounded-md">
                            <i class="fas fa-mobile-alt text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-800">Mobile-Friendly Interface</h4>
                            <p class="text-sm text-gray-600">Optimized for seamless access across all devices for on-the-go management.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-4">
                        <div class="bg-black text-white p-3 rounded-md">
                            <i class="fas fa-user-circle text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-800">User-Centric Dashboard</h4>
                            <p class="text-sm text-gray-600">Intuitive dashboards for better team collaboration and visibility.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-4">
                        <div class="bg-black text-white p-3 rounded-md">
                            <i class="fas fa-globe text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-800">Cloud-Based Accessibility</h4>
                            <p class="text-sm text-gray-600">Access your CRM securely from anywhere, at any time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class=" mx-auto  py-12 w-[80%]  max-lg:w-[85%] max-lg:py-10 max-lg:border-t">
        <!-- Header -->
        <div class="mb-12 text-center lg:text-left max-md:mb-0">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div>
                    <h1 class="text-4xl max-md:text-3xl  mb-4 max-md:mb-2 ">
                        <span class="text-blue-500">3 Smart Ways</span>
                        <span class="text-gray-800">Our CRM Solutions</span>
                    </h1>
                    <h1 class="text-4xl text-gray-800 mb-6 max-md:text-3xl ">
                        Accelerate Business Growth
                    </h1>
                    <p class="text-gray-600 mb-8 max-w-2xl">
                        We build powerful custom CRMs that help you connect, convert, and grow — all tailored to your unique workflows.
                    </p>

                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <section class="section-divider">
            <div class="flex flex-col lg:flex-row max-lg:flex-row max-md:flex-col items-center max-md:mb-6 w-full">
                <div class="lg:w-1/3 max-lg:w-1/2 mb-8 max-md:w-full ">
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="/asset/images1/crm1.jpeg" alt="Streamline Customer Management" class="w-full h-auto">
                    </div>
                </div>
                <div class="lg:w-1/3 max-lg:w-1/2 px-8 max-md:w-full max-md:px-0 max-md:flex max-md:gap-4 max-md:justify-center max-md:items-center">
                    <div class="text-blue-500 text-8xl font-bold mb-4 max-lg:text-6xl ">01</div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 max-lg:text-sm max-md:text-lg">Streamline Customer Management</h2>
                </div>
                <div class="lg:w-1/3 max-lg:w-1/2 max-md:w-full ">
                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Customer Data Hub</h3>
                        </div>

                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Smart Workflows</h3>
                        </div>

                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Full Customer View</h3>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Section 2 -->
        <section class="section-divider">
            <div class="flex flex-col lg:flex-row max-lg:flex-row max-md:flex-col items-center max-md:mb-6 w-full">
                <!-- Left: Image -->
                <div class="lg:w-1/3 max-lg:w-1/2 mb-8 max-md:w-full">
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="/asset/images1/crm2.avif" alt="Data-Driven Insights" class="w-full h-auto">
                    </div>
                </div>

                <!-- Center: Number + Heading -->
                <div class="lg:w-1/3 max-lg:w-1/2 px-8 max-md:w-full max-md:px-0 max-md:flex max-md:gap-4 max-md:items-center">
                    <div class="text-blue-500 text-8xl font-bold mb-4 max-lg:text-6xl">02</div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 max-lg:text-sm max-md:text-lg">Data-Driven Insights</h2>
                </div>

                <!-- Right: Points -->
                <div class="lg:w-1/3 max-lg:w-1/2 max-md:w-full">
                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Custom Dashboard</h3>
                        </div>
                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Sales Forecasting</h3>
                        </div>
                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Customer Segmentation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="section-divider">
            <div class="flex flex-col lg:flex-row max-lg:flex-row max-md:flex-col items-center max-md:mb-6 w-full">
                <!-- Left: Image -->
                <div class="lg:w-1/3 max-lg:w-1/2 mb-8 max-md:w-full">
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="/asset/images1/crm3.jpeg" alt="Seamless Integration" class="w-full h-auto object-cover">
                    </div>
                </div>

                <!-- Center: Number + Heading -->
                <div class="lg:w-1/3 max-lg:w-1/2 px-8 max-md:w-full max-md:px-0 max-md:flex max-md:gap-4  max-md:items-center">
                    <div class="text-blue-500 text-8xl font-bold mb-4 max-lg:text-6xl">03</div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 max-lg:text-sm max-md:text-lg">Seamless Integration</h2>
                </div>

                <!-- Right: Points -->
                <div class="lg:w-1/3 max-lg:w-1/2 max-md:w-full">
                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">System Integration</h3>
                        </div>
                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">Mobile Friendly</h3>
                        </div>
                    </div>

                    <div class="mb-6 max-md:mb-2">
                        <div class="benefit-header flex items-center cursor-pointer mb-2">
                            <div class="mr-2 benefit-icon">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800">API-Ready</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>





<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>