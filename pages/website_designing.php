<?php
$page_title = "website-designing";

include "include/header.php";

?>

<!Doctype html>
<html lang="en">

<body>

    <?php include "include/navbar.php"; ?>

    <section class="relative w-full h-screen max-md:h-[70vh] flex items-center justify-center overflow-hidden bg-black">
        <div class="absolute inset-0">
            <img src="asset/realtime_node.jpg" alt="Website Designing Background"
                class="w-full h-full object-cover object-center scale-105 animate-[pulse_10s_ease-in-out_infinite]" />

            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
            <div class="absolute inset-0 bg-black/40 mix-blend-multiply"></div>
        </div>

        <div class="relative z-20 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto flex flex-col items-center">

            <span class="mb-6 inline-block rounded-full bg-blue-600/20 px-4 py-1.5 text-sm font-semibold text-blue-300 border border-blue-500/30 backdrop-blur-sm">
                Top-Tier Development
            </span>

            <h1 class="text-transparent bg-clip-text bg-gradient-to-r from-white via-blue-100 to-gray-400 
                   font-extrabold tracking-tight leading-tight 
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl mb-6 drop-shadow-2xl">
                Website Designing
            </h1>

            <p class="text-gray-300 text-base sm:text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-8">
                Elevate your brand with <span class="text-white font-medium">cutting-edge web design</span> that builds trust and delivers exceptional results.
            </p>

            <div class="group relative inline-flex">
                <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-full blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"></div>

                <a href="/getin-touch"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 border border-gray-700">
                    Get Started Today
                    <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
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
                    Website Designing <span class="text-blue-600"> Designed for Your Brand</span>
                </h2>
                <p class="text-sm  max-md:text-center text-gray-600 mb-6 leading-relaxed">
                    At RudraTech, we do more than just make websites visually appealing. We create user-focused, responsive, and high-performing websites that build credibility for your brand and deliver results.
                </p>

                <ul class="space-y-4 text-sm text-gray-700">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Fully responsive & mobile-friendly designs
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                       Custom UI/UX designs that align with your brand identity
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                        Fast, SEO-friendly, and conversion-optimized designs
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                        </svg>
                       Scalable designs built on the latest frameworks
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

    <section class="bg-gray-50 py-20 lg:py-28 overflow-hidden">
        <div class="w-[80%] max-md:w-full mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-10 lg:gap-24">

            <div class="flex-1 w-full">
                <div class="mb-4">
                    <span class="text-blue-600 font-semibold tracking-wider uppercase text-sm">Why Choose Us</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4 leading-tight">
                        Features that drive <br class="hidden lg:block" /> real growth.
                    </h2>
                    <p class="text-gray-600 text-lg">We build digital experiences that are as functional as they are beautiful.</p>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                        <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                            <i class="fas fa-mobile-alt text-blue-600 text-xl group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Modern & Responsive</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Adaptable design that offers an optimized experience on all devices and screen sizes.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                        <div class="shrink-0 w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center group-hover:bg-indigo-600 transition-colors duration-300">
                            <i class="fas fa-user-circle text-indigo-600 text-xl group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">User-Centric Design</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Designed to create intuitive flows that guide users effortlessly to conversion points.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                        <div class="shrink-0 w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center group-hover:bg-pink-600 transition-colors duration-300">
                            <i class="fas fa-pen-nib text-pink-600 text-xl group-hover:text-white transition-colors"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Custom Branding</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Custom designs that perfectly align with your brand’s unique vision and goals.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 w-full relative lg:h-auto">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-gray-200 rounded-full opacity-50 blur-xl"></div>
                <div class="absolute -bottom-8 -left-8 w-64 h-64 border-2 border-gray-200 rounded-full opacity-40"></div>

                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="/asset/contact.jpg" alt="Features Image" class="w-full h-auto object-cover transform hover:scale-105 transition duration-700 ease-in-out" />

                    <div class="absolute bottom-6 left-6 max-md:hidden bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg max-w-xs">
                        <p class="text-sm font-semibold text-gray-800">"Great design is intelligence made visible."</p>
                    </div>
                </div>
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