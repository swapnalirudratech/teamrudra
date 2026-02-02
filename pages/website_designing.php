<?php
$page_title = "website-designing";

include "include/header.php";

?>

<!Doctype html>
<html lang="en">

<body>

    <?php include "include/navbar.php"; ?>

    <section class="relative w-full h-screen max-lg:h-[40vh] max-md:h-[60vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Gradient Overlay -->
        <div class="absolute inset-0">
            <img src="asset/realtime_node.jpg" alt="Website Designing Background"
                class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-20 text-center px-6 sm:px-8 md:px-12 flex flex-col items-center justify-center animate-fade-in-down">
            <h1
                class="text-white font-extrabold tracking-tight leading-tight drop-shadow-lg 
      text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl mb-4">
                Website Designing
            </h1>

            <p
                class="text-gray-200 text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl mx-auto drop-shadow-md leading-relaxed">
                Elevate your brand with cutting-edge web design that builds trust and delivers exceptional results.
            </p>

            <!-- Call to Action -->
            <div class="mt-6 sm:mt-8">
                <a href="/getin-touch"
                    class="inline-block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-indigo-600 hover:to-blue-700 
        text-white font-semibold text-sm sm:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-full 
        shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-1">
                    Get Started Today
                </a>
            </div>
        </div>
    </section>

    <section class="relative bg-white py-24 overflow-hidden max-lg:py-10">
        <div class="w-[80%]  max-md:w-[85%] mx-auto flex max-lg:flex-col justify-between gap-16 max-lg:gap-8 items-center">

            <!-- Left: Image/Illustration (Creative Design) -->
            <div class="relative w-1/2 max-md:w-full max-lg:w-full">
                <img src="/asset/image/bgimg5.png" alt="Modern Web Design Illustration" class="relative z-10 w-full ">
            </div>

            <!-- Right: Content -->
            <div class="relative z-10 w-1/2 max-lg:w-full">
                <h2 class="text-2xl max-md:text-center sm-text-4xl md:text-3xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    Website Designing <span class="text-blue-600">Built for Your Brand</span>
                </h2>
                <p class="text-sm  max-md:text-center text-gray-600 mb-6 leading-relaxed">
                    At RudraTech, we go beyond just making websites look good. We design user-centric, responsive, and high-performing websites that establish your credibility and drive results.
                </p>

                <ul class="space-y-4 text-sm text-gray-700">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Fully responsive & mobile-friendly layouts
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Custom UI/UX to match your brand identity
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Optimized for speed, SEO, and conversions
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Built on scalable, modern frameworks
                    </li>
                </ul>

                <div class="mt-8 max-md:text-center">
                    <a href="/getin-touch" class="inline-block px-8 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-full text-sm font-medium transition-all shadow-md">
                        Let's Design Your Website
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-24 max-lg:py-12 ">
        <div class="w-[80%] max-md:w-[85%] mx-auto flex flex-col lg:flex-row items-start gap-16">
            <!-- Left Column: Features -->
            <div class="flex-1">
                <h2 class="text-4xl max-md:text-3xl font-medium uppercase text-gray-900 mb-16 tracking-tight max-md:mb-8">
                    Features
                </h2>

                <div class="flex flex-col gap-8">
                    <!-- Feature items -->
                    <div class="flex items-start gap-8 hover:scale-105 transition duration-300">
                        <i class="fas fa-mobile-alt text-gray-800 text-3xl"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Modern & Responsive Layout</h3>
                            <p class="text-sm text-gray-600">Adaptable design that provides an optimized experience across all devices.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-8 hover:scale-105 transition duration-300">
                        <i class="fas fa-user-circle text-gray-800 text-3xl"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">User-Centric Design</h3>
                            <p class="text-sm text-gray-600">Focused on creating intuitive and seamless user experiences.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-8 hover:scale-105 transition duration-300">
                        <i class="fas fa-chart-line text-gray-800 text-3xl"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">SEO-Ready Structure</h3>
                            <p class="text-sm text-gray-600">Built with search engine optimization in mind to boost visibility.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-8 hover:scale-105 transition duration-300">
                        <i class="fas fa-pen-nib text-gray-800 text-3xl"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Custom Design & Branding</h3>
                            <p class="text-sm text-gray-600">Tailored designs that align with your brand’s vision and goals.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="flex-1">
                <img src="/asset/contact.jpg" alt="Features Image" class="w-full h-[70vh] max-lg:h-[40vh] object-cover rounded-xl shadow-md" />
            </div>
        </div>
    </section>



    <section class="py-24 bg-white relative overflow-hidden max-lg:py-12 ">
        <div class="w-[80%] mx-auto  max-md:w-[85%] ">
            <div class="text-center mb-16 max-md:mb-8">
                <h2 class="text-4xl max-md:text-2xl font-extrabold text-gray-900">
                    Strategic Digital Excellence
                </h2>
            </div>

            <div class="grid grid-cols-3 max-lg:grid-cols-2 max-md:grid-cols-1 gap-10 relative">

                <!-- Card 1 -->
                <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl max-md:text-lg font-semibold text-gray-800">Proven Formula</h3>
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
                        <h3 class="text-xl  max-md:text-lg font-semibold text-gray-800">Winning Team</h3>
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
                        <h3 class="text-xl  max-md:text-lg font-semibold text-gray-800">ROI Oriented</h3>
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