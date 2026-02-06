<?php
$page_title = "static_website_design";

include "include/header.php";

?>
<!Doctype html>
<html lang="en">

<body>

    <?php include "include/navbar.php"; ?>

    <section class="relative w-full h-[90vh] max-md:h-[70vh] flex items-center justify-center overflow-hidden">

        <div class="absolute inset-0">
            <img src="/asset/image/staticwebsite.jpg" alt="Static Web Design"
                class="w-full h-full object-cover object-center animate-[pulse_10s_ease-in-out_infinite] scale-105" />

            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-blue-900/30 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 flex flex-col items-center justify-center text-center">

            <div class="mb-6 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-500/10 border border-green-500/20 backdrop-blur-md">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="text-xs font-semibold text-green-400 uppercase tracking-wide">100/100 Google PageSpeed</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-2xl">
                Static Websites. <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">
                    Blazing Fast.
                </span>
                Secure.
            </h1>

            <p class="text-lg sm:text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed font-light max-md:hidden">
                Stop losing customers due to slow loading speeds. Give your brand the power of a static website designed for lightning-fast speeds and maximum security.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/getquote"
                    class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-[0_0_20px_rgba(37,99,235,0.5)] hover:shadow-[0_0_30px_rgba(37,99,235,0.6)] transition-all duration-300 transform hover:-translate-y-1">
                    Begin Your Build
                </a>
                <!-- <a href="#learn-more"
                    class="px-8 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                    How It Works
                </a> -->
            </div>
        </div>
    </section>

    <!-- Modern Web Development Services Section -->
    <section class="relative py-20 max-lg:py-12  overflow-hidden bg-gradient-to-t from-white to-gray-50">


        <!-- Section Content -->
        <div class="container relative z-10 mx-auto w-[80%] ">
            <!-- Section Header -->
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-4xl max-md:text-2xl font-extrabold tracking-tight text-gray-900">
                    <span class="relative inline-block">
                        Web Design

                    </span>
                    <span class="text-blue-600"> that Matches Your Vision</span>
                </h2>
                <p class="mt-5 text-lg text-gray-600">
                    We design beautiful websites that reflect your brand's identity and provide an exceptional user experience that drives results.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                <!-- Left: Services Showcase -->
                <div class="relative p-6  max-lg:p-0">
                    <!-- <div class="absolute -top-4 -left-4 px-4 py-2 bg-blue-600 text-white font-medium rounded-lg">
                        Our Approach
                    </div> -->

                    <!-- Service Cards -->
                    <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2">
                        <!-- Card 1 -->
                        <div class="p-5 transition-all outline outline-1 outline-transparent border border-gray-300 bg-white rounded-lg hover:shadow-md hover:bg-white group">
                            <div class="p-3 mb-3 text-white bg-blue-600 rounded-full w-14 h-14 flex items-center justify-center group-hover:bg-blue-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-md font-bold text-gray-900">Responsive Design</h3>
                            <p class="text-xs text-gray-600">Optimized for all devices with fluid designs and visuals</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="p-5 border border-gray-300 bg-white rounded-lg hover:shadow-md hover:bg-white group">
                            <div class="p-3 mb-3 text-white bg-blue-600 rounded-full w-14 h-14 flex items-center justify-center group-hover:bg-blue-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-md font-bold text-gray-900">Custom UI/UX</h3>
                            <p class="text-xs text-gray-600">Brand-specific designs that boost user engagement</p>
                        </div>

                        <!-- Card 3 -->
                        <div class="p-5 border border-gray-300 bg-white rounded-lg hover:shadow-md hover:bg-white group">
                            <div class="p-3 mb-3 text-white bg-blue-600 rounded-full w-14 h-14 flex items-center justify-center group-hover:bg-blue-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-md font-bold text-gray-900">Performance</h3>
                            <p class="text-xs text-gray-600">Lightning-fast loading speeds with optimized code and assets</p>
                        </div>

                        <!-- Card 4 -->
                        <div class="p-5 border border-gray-300 bg-white rounded-lg hover:shadow-md hover:bg-white group">
                            <div class="p-3 mb-3 text-white bg-blue-600 rounded-full w-14 h-14 flex items-center justify-center group-hover:bg-blue-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-md font-bold text-gray-900">Modern Frameworks</h3>
                            <p class="text-xs text-gray-600">Developed using the latest tech for scalable growth</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image + CTA -->
                <div class="relative flex flex-col items-center justify-center lg:pl-8 mt-4">
                    <div class="relative w-full overflow-hidden ">
                        <!-- Main image -->
                        <img src="/asset/website1.jpg" alt="Professional Web Design" class="w-full h-full max-lg:h-[40vh] rounded-lg object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-24 bg-blue-50 rounded-tl-[80px]  relative overflow-hidden max-lg:py-12 ">
        <div class="w-[80%] mx-auto ">
            <div class="text-center mb-16">
                <h2 class="text-4xl max-md:text-2xl font-extrabold text-gray-900">
                    Strategic Digital Excellence
                </h2>
            </div>

            <div class="grid grid-cols-3 max-lg:grid-cols-2 max-md:grid-cols-1 gap-10 relative">

                <!-- Card 1 -->
                <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold text-gray-800">Proven Formula</h3>
                        <div class="relative w-12 h-12">
                            <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                            <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                            <i class="fas fa-chart-line text-white text-xl absolute top-3 left-3 z-10"></i>
                        </div>
                    </div>
                    <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                    <p class="text-gray-600">100s of websites optimized. 1,000s of first-page rankings across industries.</p>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold text-gray-800">Winning Team</h3>
                        <div class="relative w-12 h-12">
                            <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                            <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                            <i class="fas fa-users text-white text-xl absolute top-3 left-3 z-10"></i>
                        </div>
                    </div>
                    <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                    <p class="text-gray-600">A team of skilled designers, SEO experts, developers, and strategists who deliver results.</p>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold text-gray-800">ROI Oriented</h3>
                        <div class="relative w-12 h-12">
                            <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                            <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                            <i class="fas fa-chart-pie text-white text-xl absolute top-3 left-3 z-10"></i>
                        </div>
                    </div>
                    <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                    <p class="text-gray-600">Get measurable returns that far exceed your investment in web design and SEO.</p>
                </div>

            </div>
        </div>
    </section>




    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "./include/footer.php" ?>
</body>

</html>