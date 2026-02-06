<?php
$page_title = "realestate";
include "include/header.php";
?>

<!Doctype html>
<html lang="en">




<body>

    <?php include "include/navbar.php"; ?>

    <section class="bg-white relative overflow-hidden">
        <div class="w-[85%] mx-auto h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] grid max-md:grid-cols-1 grid-cols-2 items-center gap-10">

            <!-- Left Content -->
            <div class="relative z-10 max-md:text-center flex flex-col max-md:items-center">
                <h1 class="text-3xl max-md:text-3xl lg:text-5xl font-bold text-gray-900 leading-snug">
                    Professional Real Estate Website Development
                </h1>
                <p class="mt-4 text-gray-600">
                    We design modern, responsive, and feature-rich websites tailored for the real estate industry.
                </p>
                <div class="mt-6 flex gap-4">
                    <a href="/get-started" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-medium transition">
                        Get Started
                    </a>

                </div>
            </div>

            <!-- Right Image -->
            <div class="relative max-md:hidden">
                <img src="/asset/Hero-Section.png" alt="Real Estate Website" class=" w-full ">
            </div>

        </div>
    </section>

    <section class="py-24 max-lg:py-12 bg-gradient-to-b from-blue-50 to-blue-100 relative overflow-hidden">
        <div class="w-[85%] mx-auto text-center relative z-10 max-md:text-left">

            <!-- Decorative Gradient Circle -->
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50 max-md:hidden"></div>
            <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50 max-md:hidden"></div>

            <!-- Main Heading with Animated Underline -->
            <h3 class="relative inline-block text-2xl md:text-4xl font-extrabold text-gray-900 mt-3 mb-4">
                Real Estate Websites for Builders & Consultants
                <span class="absolute left-0 bottom-[-6px] w-full h-[3px] bg-gradient-to-r from-blue-500 to-blue-300 animate-[expand_1s_ease-out]"></span>
            </h3>

            <!-- Features -->
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto max-md:text-left">
                From premium property showcases to powerful inquiry systems, our websites are designed for real estate consultants and builders to impress clients and close deals faster.
            </p>

            <div class="flex flex-wrap justify-center gap-6 mt-6 text-gray-700 text-sm md:text-base max-md:justify-start">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Project Showcase Ready</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Lead Capture Optimized</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Responsive & SEO Friendly</span>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-20 w-[85%] mx-auto max-lg:mt-12">

            <!-- Card 1 -->
            <div class="bg-white rounded shadow-lg overflow-hidden border border-gray-200 scroll-hover">
                <div class="overflow-hidden h-[50vh]">
                    <img src="/asset/vr.png" alt="VR Consultant Real Estate Website" class="w-full object-cover">
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-900">VR Consultant – Real Estate Consulting Platform</h4>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded shadow-lg overflow-hidden border border-gray-200 scroll-hover">
                <div class="overflow-hidden h-[50vh]">
                    <img src="/asset/laxmi.png" alt="Laxmikamal Group Website" class="w-full object-cover">
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-900">Laxmikamal Group – Builders & Developers Website</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 max-lg:py-12  bg-gray-50">
        <div class="w-[85%] mx-auto text-center">

            <!-- Heading -->
            <h2 class="text-3xl font-bold text-gray-900">
                Map Platforms Integration
            </h2>
            <p class="mt-2 text-gray-600">
                Choose the best option to control and manage map data on your website.
            </p>

            <!-- Cards -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-md:mt-8 max-lg:gap-4">

                <!-- Card 1 -->
                <div class=" p-6 max-lg:p-3 hover:shadow-lg transition">
                    <div class="overflow-hidden rounded-lg border-2 border-transparent hover:border-blue-500 transition">
                        <img src="/asset/1m.png" alt="OpenStreetMap" class="w-full h-48 object-cover">
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-2">
                        <img src="/asset/openstreetmap.png" alt="OpenStreetMap Logo" class="h-10">

                    </div>
                    <p class="mt-2 text-gray-600 text-sm max-lg:text-xs">
                        OpenStreetMap is a free versatile mapping source allowing to display and edit maps with free geographic data.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-6 max-lg:p-3 hover:shadow-lg transition">
                    <div class="overflow-hidden rounded-lg border-2 border-transparent hover:border-blue-500 transition">
                        <img src="/asset/2m.png" alt="Google Maps" class="w-full h-48 object-cover">
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-2">
                        <img src="/asset/google_maps.png" alt="Google Maps Logo" class="h-10">

                    </div>
                    <p class="mt-2 text-gray-600 text-sm max-lg:text-xs">
                        Google Maps is a universal, paid mapping service offering a $200 credit monthly to support your needs.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class=" p-6 max-lg:p-3 hover:shadow-lg transition">
                    <div class="overflow-hidden rounded-lg border-2 border-transparent hover:border-blue-500 transition">
                        <img src="/asset/3m.png" alt="Mapbox" class="w-full h-48 object-cover">
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-2">
                        <img src="/asset/map_box.png" alt="Mapbox Logo" class="h-10">

                    </div>
                    <p class="mt-2 text-gray-600 text-sm max-lg:text-xs">
                        Mapbox is a free and flexible mapping platform for building custom-designed maps and visualizing property details.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 max-lg:py-12  bg-white">
        <div class="w-[85%] mx-auto text-center">

            <!-- Heading -->
            <h2 class="text-3xl font-bold text-gray-900">Special Features</h2>
            <p class="mt-2 text-gray-600 max-w-3xl mx-auto">
                We provide a wide range of powerful features to make your real estate website more engaging, functional, and client-friendly.
            </p>

            <!-- Features Grid -->
            <div class="mt-12 grid max-md:grid-cols-1 grid-cols-3 max-lg:grid-cols-2  gap-8 max-lg:gap-3">

                <!-- Feature 1 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/1b.png" alt="Mortgage Calculator" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i1.jpg" alt="Mortgage Icon" class="h-14 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">Mortgage Calculator</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                Help your clients calculate mortgage payments instantly with our easy-to-use calculator widget.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Feature 2 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/2b.png" alt="Saved Properties" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i2.jpg" alt="Saved Properties Icon" class="h-16 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">Saved Properties</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                Let users organize and save their favorite properties for future visits with a simple click.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/3b.png" alt="Compare Listings" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i3.jpg" alt="Compare Icon" class="h-14 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">Compare Listings</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                Allow users to compare properties side-by-side to find the best match for their needs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/b3.png" alt="Page Statistics" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i4.jpg" alt="Page Statistics Icon" class="h-14 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">Page Statistics</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                Each property page has an optional page statistics view, giving owners and agencies insights into audience numbers for their listings.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/b4.png" alt="Agencies & Agents" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i5.jpg" alt="Agencies & Agents Icon" class="h-14 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">100% Mobile Ready</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                HomePress is fully responsive and ready for any mobile device. Property pages, saved properties, and all other pages fit perfectly.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="group p-6 border border-gray-300">
                    <div class="overflow-hidden rounded-lg relative">
                        <img src="/asset/b1.png" alt="Quick View" class="w-full h-56 object-cover">
                        <div class="absolute bottom-0 left-0 w-14 h-14 bg-blue-600"></div>
                    </div>
                    <div class="mt-6 flex items-start text-left gap-3">
                        <div class="flex-shrink-0">
                            <img src="/asset/icon/i6.jpg" alt="Quick View Icon" class="h-14 w-auto">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-900">Quick View</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                Instantly preview property details in a popup without leaving the listings page, and quickly return to browsing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Real Estate Parallax Section -->
    <section class="relative w-full h-[70vh] max-lg:h-[40vh] max-md:h-[60vh] bg-fixed bg-center bg-cover"
        style="background-image: url('/asset/build.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
            <h2 class="text-4xl max-md:text-2xl md:text-5xl font-bold text-white leading-tight">
                Building Dreams, One Property at a Time
            </h2>
            <p class="mt-4 text-lg md:text-xl text-gray-200 max-w-3xl">
                From modern apartments to luxury villas, we connect you to the perfect spaces that suit your lifestyle and investment goals.
            </p>
            <a href="/contact"
                class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-full shadow-lg transition">
                Get Started Today
            </a>
        </div>
    </section>



    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>