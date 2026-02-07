<?php
$page_title = "website-designing"; ?>

<?php include "include/header.php"; ?>
<!DOCTYPE html>
<html lang="en">


<body>
    <?php
    include "include/navbar.php";
    ?>

    <section class="relative w-full h-[85vh] max-md:h-[70vh] flex items-center justify-center overflow-hidden">

        <div class="absolute inset-0 z-0">
            <img src="/asset/image/ebg.jpg" alt="E-Commerce Background"
                class="w-full h-full object-cover object-center scale-105" />

            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 text-center">

            <p class="text-xs md:text-sm font-bold tracking-[0.2em] text-gray-300 uppercase mb-6 animate-fade-in-down">
                RudraTech Portfolio
            </p>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-8 tracking-tight leading-tight drop-shadow-lg">
                E-Commerce <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-purple-200 to-blue-400">
                    Excellence.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto mb-12 font-light leading-relaxed opacity-90">
                We build digital storefronts that blend high-fashion aesthetics with powerful backend technology.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">

                <a href="/portfolio"
                    class="px-10 py-4 bg-white text-black rounded-full font-bold hover:bg-gray-200 transition-all duration-300 transform hover:-translate-y-1 shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                    View Projects
                </a>

                <a href="/getquote"
                    class="px-10 py-4 border border-white/30 bg-white/5 backdrop-blur-sm text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300">
                    Start Project
                </a>
            </div>

        </div>
    </section>
    <section class="relative overflow-hidden h-auto max-lg:h-[40vh] max-md:h-[80vh] bg-white  flex items-center w-full ">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[500px] h-[500px] bg-gray-50 rounded-full z-0"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[400px] h-[400px] bg-blue-50/50 rounded-full z-0"></div>
        <div class="relative z-20 w-[90%] mx-auto flex flex-col py-20  items-center justify-center  gap-10">
            <!-- Text Block -->
            <div class="w-full lg:w-1/2 text-black space-y-5 text-center">
                <h1 class="max-md:text-2xl max-lg:text-4xl text-5xl font-bold leading-tight">
                    Smart Ecommerce <br>Solutions by <span class="text-blue-600">RudraTech</span>
                </h1>
                <p class="text-lg text-gray-600">
                    Launch faster. Sell more. Scale seamlessly.
                </p>

            </div>

            <!-- Optional Image -->
            <div class="  flex justify-center ">
                <img src="/asset/bnr/1 (1).png" alt="Ecommerce Illustration" class="w-full h-[80vh] max-lg:h-[30vh] object-contain rounded-xl">
            </div>
        </div>
    </section>



    <section class="w-full bg-gradient-to-b from-pink-100 to-white py-16 rounded-t-[80px] max-lg:rounded-t-[40px] ">
        <div class="w-[80%] mx-auto space-y-6">

            <!-- Row 1: Desktop E-commerce -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full">
                    <img src="/asset/image/e2.png" alt="Desktop E-commerce" class="w-full h-auto object-contain">
                </div>
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Desktop E-commerce Experience</h2>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Create responsive, high-performing e-commerce websites with smooth navigation, product showcases, and fast checkout—optimized for desktops.
                    </p>
                </div>
            </div>

            <!-- Row 2: Mobile E-commerce -->
            <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Mobile-Optimized Commerce</h2>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Deliver a fast, intuitive, mobile-first shopping experience with touch-friendly design and seamless one-click checkout.
                    </p>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center">
                    <img src="/asset/image/e3.png" alt="Mobile E-commerce" class="w-full h-auto object-contain">
                </div>
            </div>

            <!-- Row 3: Admin Panel -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full flex justify-center">
                    <img src="/asset/image/e4.png" alt="Admin Panel" class="w-full h-auto object-contain">
                </div>
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Powerful Admin Panel</h2>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Easily manage products, orders, and reports through a secure, user-friendly dashboard built for control and efficiency.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-white flex items-center justify-center">
        <div class="w-[80%] mx-auto max-lg:w-[85%] max-lg:border-t flex flex-col py-20 max-md:py-12 items-center justify-center bg-white max-md:border-t border-gray-200">
            <h2 class="max-lg:text-3xl text-4xl font-normal text-gray-800 mb-4 max-lg:text-center">Key Features of Our E-commerce Website</h2>

            <div class="grid max-md:grid-cols-1 grid-cols-3 max-lg:grid-cols-2 gap-10  mt-10 max-md:gap-4">

                <!-- Feature 1: Responsive Layout -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-mobile-alt text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Mobile-Friendly Design</h3>
                    </div>
                </div>

                <!-- Feature 2: User-Centric Design -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-user-circle text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Customer-Focused UI</h3>
                    </div>
                </div>

                <!-- Feature 3: Cross-Browser Compatibility -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-globe text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Cross-Device Compatibility</h3>
                    </div>
                </div>

                <!-- Feature 4: High-Speed Performance -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-gauge-high text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">High-Speed Performance</h3>
                    </div>
                </div>

                <!-- Feature 5: SEO Optimization -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-chart-line text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">SEO-Optimized Structure</h3>
                    </div>
                </div>

                <!-- Feature 6: Custom Design & Branding -->
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-pen-nib text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Custom Branding & UI</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>