<?php
$page_title = "email-website-designing"; ?>

<?php include "include/header.php"; ?>

<!DOCTYPE html>
<html lang="en">


<body>

    <?php
    include "include/navbar.php";
    ?>

    <section class="relative h-[85vh] max-lg:h-[40vh] max-md:h-[60vh]  w-full overflow-hidden bg-gradient-to-br from-blue-50 via-white to-white py-20 max-lg:py-10">
        <div class="container mx-auto w-[85%] flex flex-col md:flex-row items-center gap-10">

            <div class="flex-1 text-left space-y-6">
                <h1 class="text-5xl max-lg:text-3xl  max-md:text-3xl font-extrabold text-gray-900 leading-tight">
                    Premium <span class="text-blue-600">Landing Page</span> Designs <br>
                    for Your Business
                </h1>
                <p class=" text-gray-600 max-w-xl">
                    We craft elegant, high-performing landing pages that captivate users and drive measurable business results.
                </p>
                <a href="/getaquote"
                    class="inline-block px-8 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-all">
                    Get a Quote
                </a>
            </div>


            <div class="flex-1 relative max-md:hidden">
                <img src="/asset/landing.png"
                    alt="Landing Page Design"
                    class="w-full ">
                <div class="absolute inset-0 bg-blue-500/10 rounded-3xl blur-3xl"></div>
            </div>
        </div>
    </section>


    <!-- Services Section - Zigzag Layout -->
    <section id="services" class="py-16 max-lg:py-12   bg-gradient-to-b from-blue-50 via-white to-white">
        <div class="w-[80%] max-lg:w-[85%] mx-auto ">
            <div class="text-center mb-20 max-lg:mb-8">
                <h2 class="text-5xl max-lg:text-3xl  font-bold mb-4">Landing Page Services</h2>
                <p class=" text-gray-600">Complete solutions for impactful web presence</p>
            </div>

            <!-- Service 1 - Left aligned -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-32 max-lg:mb-12 stagger-fade max-lg:gap-8">
                <div>

                    <h3 class="text-4xl max-lg:text-2xl  font-bold mb-6">Custom Landing Page Design</h3>
                    <p class=" text-gray-600 mb-6 leading-relaxed">
                        Every pixel matters. We design unique, eye-catching landing pages that reflect your brand identity and speak directly to your target audience with compelling visuals and clear messaging.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Responsive Design for All Devices</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Brand-Aligned Visual Identity</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Modern UI/UX Best Practices</span>
                        </li>
                    </ul>
                </div>
                <div class="relative ">
                    <img src="/asset/l1.avif" class="w-full h-[50vh] max-lg:h-[30vh]  object-cover rounded-xl" alt="">
                </div>
            </div>

            <!-- Service 2 - Right aligned -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-32 max-lg:mb-12 stagger-fade max-lg:gap-8">
                <div class="order-2 md:order-1 relative ">
                    <img src="/asset/devteam.jpg" class="w-full h-[50vh] max-lg:h-[30vh]  object-cover rounded-xl" alt="">
                </div>
                <div class="order-1 md:order-2">

                    <h3 class="text-4xl max-lg:text-2xl  font-bold mb-6">Conversion Optimization</h3>
                    <p class=" text-gray-600 mb-6 leading-relaxed">
                        Design that drives results. We implement proven conversion strategies, compelling CTAs, and strategic content placement to maximize your visitor-to-customer conversion rate.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>A/B Testing & Analytics Integration</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Strategic Call-to-Action Placement</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Lead Capture Forms & Automation</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 - Left aligned -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-32 max-lg:mb-0 stagger-fade max-lg:gap-8">
                <div>

                    <h3 class="text-4xl max-lg:text-2xl  font-bold mb-6">Fast & SEO-Optimized</h3>
                    <p class=" text-gray-600 mb-6 leading-relaxed">
                        Speed meets visibility. We build lightning-fast landing pages with clean code, optimized images, and SEO best practices to ensure your page ranks well and loads instantly.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Lightning-Fast Load Times (< 2s)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>SEO-Friendly Structure & Meta Tags</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3 ">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span>Mobile-First Development Approach</span>
                        </li>
                    </ul>
                </div>
                <div class="relative ">
                    <img src="/asset/seo.webp" class="w-full h-[50vh] max-lg:h-[30vh]  object-cover rounded-xl" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section - Timeline Flow -->
    <section id="process" class="py-16 max-lg:py-12 px-6 bg-gradient-to-b from-gray-50 to-white">
        <div class="w-[80%] max-lg:w-[90%] mx-auto">
            <!-- Heading -->
            <div class="text-center mb-20 max-lg:mb-10">
                <h2 class="text-5xl max-md:text-3xl font-bold mb-4">
                    Our <span class="text-blue-600">Process</span>
                </h2>
                <p class="text-gray-600 text-base max-md:text-sm">
                    From idea to launch in four clear steps
                </p>
            </div>

            <div class="relative">
                <!-- Center Line (Desktop only) -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-blue-400 transform -translate-x-1/2"></div>

                <!-- Step 1 -->
                <div class="relative mb-20 max-md:mb-10">
                    <div class="md:flex items-center">
                        <!-- Left Content -->
                        <div class="md:w-1/2 md:pr-16 mb-8 md:mb-0 text-right max-md:text-center">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                                Step 01
                            </div>
                            <h3 class="text-3xl max-md:text-2xl font-bold mb-4 text-gray-900">
                                Consultation & Strategy
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-md:text-base">
                                We discuss your goals, audience, and brand vision to form a
                                strategy that ensures a high-converting website.
                            </p>
                        </div>

                        <!-- Connector Circle -->
                        <div class="hidden md:flex w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full absolute left-1/2 transform -translate-x-1/2 items-center justify-center shadow-lg">
                            <span class="w-7 h-7 bg-white text-blue-700 font-semibold rounded-full flex items-center justify-center text-sm">1</span>
                        </div>

                        <div class="md:w-1/2 md:pl-16"></div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative mb-20 max-md:mb-10">
                    <div class="md:flex items-center">
                        <div class="md:w-1/2 md:pr-16"></div>
                        <div class="hidden md:flex w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full absolute left-1/2 transform -translate-x-1/2 items-center justify-center shadow-lg">
                            <span class="w-7 h-7 bg-white text-blue-700 font-semibold rounded-full flex items-center justify-center text-sm">2</span>
                        </div>
                        <div class="md:w-1/2 md:pl-16 max-md:text-center">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                                Step 02
                            </div>
                            <h3 class="text-3xl max-md:text-2xl font-bold mb-4 text-gray-900">
                                Design & Prototype
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-md:text-base">
                                Our creative team designs pixel-perfect mockups and interactive
                                prototypes, ensuring an engaging user experience.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative mb-20 max-md:mb-10">
                    <div class="md:flex items-center">
                        <div class="md:w-1/2 md:pr-16 text-right max-md:text-center">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                                Step 03
                            </div>
                            <h3 class="text-3xl max-md:text-2xl font-bold mb-4 text-gray-900">
                                Development & Testing
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-md:text-base">
                                We develop responsive, optimized, and fast websites while testing
                                thoroughly to ensure flawless performance.
                            </p>
                        </div>
                        <div class="hidden md:flex w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full absolute left-1/2 transform -translate-x-1/2 items-center justify-center shadow-lg">
                            <span class="w-7 h-7 bg-white text-blue-700 font-semibold rounded-full flex items-center justify-center text-sm">3</span>
                        </div>
                        <div class="md:w-1/2 md:pl-16"></div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative">
                    <div class="md:flex items-center">
                        <div class="md:w-1/2 md:pr-16"></div>
                        <div class="hidden md:flex w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full absolute left-1/2 transform -translate-x-1/2 items-center justify-center shadow-lg">
                            <span class="w-7 h-7 bg-white text-blue-700 font-semibold rounded-full flex items-center justify-center text-sm">4</span>
                        </div>
                        <div class="md:w-1/2 md:pl-16 max-md:text-center">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                                Step 04
                            </div>
                            <h3 class="text-3xl max-md:text-2xl font-bold mb-4 text-gray-900">
                                Launch & Optimize
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-md:text-base">
                                Once live, we track results, analyze user behavior, and continuously
                                optimize to improve engagement and conversions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20 max-lg:py-12 overflow-hidden">
        <div class="absolute inset-0 bg-[url('/assets/pattern.svg')] opacity-10"></div>

        <div class="container mx-auto w-[80%] relative z-10 text-center">

            <h2 class="text-4xl max-lg:text-2xl   font-bold mb-6 leading-tight">
                Ready to Build a Website That Elevates Your Business?
            </h2>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact"
                    class="px-8 py-4 bg-white text-blue-800 font-semibold rounded-full shadow-md hover:shadow-lg hover:-translate-y-1 transition-all">
                    Get a Free Consultation
                </a>

            </div>
        </div>
    </section>



    <?php include "include/marquee.php"; ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>


</body>

</html>