<?php
$page_title = "travel-transport";
include "include/header.php";
?>

<!Doctype html>
<html lang="en">

<body>

    <?php include "include/navbar.php"; ?>

    <section class="relative w-full h-[90vh] max-lg:h-[40vh] max-md:h-[60vh]  bg-gradient-to-r from-blue-50 to-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/asset/image/BGTRAVEL.jpg" alt="Tours and Travel" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/40"></div> <!-- Dark Overlay -->
        </div>

        <!-- Content -->
        <div class="relative container mx-auto h-full flex flex-col justify-center w-[80%] max-lg:w-[85%] text-white z-10">
            <div class="max-w-2xl">
                <!-- Main Heading -->
                <h1 class="max-lg:text-3xl text-6xl font-bold leading-snug">
                    Explore the World with Confidence
                </h1>

                <!-- Sub Text -->
                <p class="mt-4 max-lg:text-base text-xl text-white">
                    We provide end-to-end tours & travel solutions. Plus, we create professional websites & custom software tailored for travel businesses.
                </p>

                <!-- Call to Action Buttons -->
                <div class="mt-6 flex flex-wrap gap-4">

                    <a href="/get-in-touch" class="px-6 py-3 bg-transparent border-2 border-white text-white rounded-lg hover:bg-white hover:text-black transition">
                        Build My Travel Website
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-12 flex justify-center w-full">
        <div class="flex items-center gap-6 w-full justify-center max-md:flex-col max-lg:gap-0 max-lg:w-[80%]">

            <!-- Location Pin with Image -->
            <div class="relative w-32 h-32 flex-shrink-0">
                <img src="/asset/image/LOCATION.webp"
                    class="absolute inset-0 w-full h-full object-contain"
                    alt="Location Icon">
            </div>

            <!-- White Feature Box -->
            <div id="featureSlider"
                class="flex bg-white rounded-2xl shadow-xl max-md:shadow-none overflow-hidden lg:overflow-hidden w-[80%] max-lg:w-[90%]
                   max-lg:overflow-x-auto max-lg:space-x-4 max-lg:divide-x-0 max-lg:scroll-smooth max-lg:snap-x max-lg:snap-mandatory">

                <!-- Feature 1 -->
                <div class="px-6 py-4 flex flex-col items-center justify-center text-center 
                        w-1/5 min-w-[150px] hover:bg-blue-50 transition-all
                        max-lg:min-w-full max-lg:flex-shrink-0 max-lg:snap-center">
                    <h3 class="font-semibold text-gray-800 text-lg max-md:text-4xl">Travel Websites</h3>
                    <p class="text-gray-500 text-sm mt-1">Beautiful, responsive designs for agencies.</p>
                </div>

                <!-- Feature 2 -->
                <div class="px-6 py-4 flex flex-col items-center justify-center text-center 
                        w-1/5 min-w-[150px] hover:bg-blue-50 transition-all
                        max-lg:min-w-full max-lg:flex-shrink-0 max-lg:snap-center">
                    <h3 class="font-semibold text-gray-800 text-lg max-md:text-4xl">Booking Apps</h3>
                    <p class="text-gray-500 text-sm mt-1">Custom Android & iOS booking solutions.</p>
                </div>

                <!-- Feature 3 -->
                <div class="px-6 py-4 flex flex-col items-center justify-center text-center 
                        w-1/5 min-w-[150px] hover:bg-blue-50 transition-all
                        max-lg:min-w-full max-lg:flex-shrink-0 max-lg:snap-center">
                    <h3 class="font-semibold text-gray-800 text-lg max-md:text-4xl">Itinerary Tools</h3>
                    <p class="text-gray-500 text-sm mt-1">Plan & share trips with ease.</p>
                </div>

                <!-- Feature 4 -->
                <div class="px-6 py-4 flex flex-col items-center justify-center text-center 
                        w-1/5 min-w-[150px] hover:bg-blue-50 transition-all
                        max-lg:min-w-full max-lg:flex-shrink-0 max-lg:snap-center">
                    <h3 class="font-semibold text-gray-800 text-lg max-md:text-4xl">Cab Integrations</h3>
                    <p class="text-gray-500 text-sm mt-1">Built-in taxi & transport booking features.</p>
                </div>

                <!-- Feature 5 -->
                <div class="px-6 py-4 flex flex-col items-center justify-center text-center 
                        w-1/5 min-w-[150px] hover:bg-blue-50 transition-all
                        max-lg:min-w-full max-lg:flex-shrink-0 max-lg:snap-center">
                    <h3 class="font-semibold text-gray-800 text-lg max-md:text-4xl">Custom Solutions</h3>
                    <p class="text-gray-500 text-sm mt-1">Tailored software for your travel business.</p>
                </div>

            </div>
        </div>
    </section>




    <section class="py-16 bg-white max-lg:pb-10 max-lg:pt-0">
        <div class="  grid lg:grid-cols-2 gap-12 items-center max-lg:gap-4">

            <!-- Left Image (Full Height, Clean) -->
            <div class="w-full h-full">
                <img src="/asset/image/travel2.jpg"
                    alt="Travel App Mockup"
                    class="w-full h-full max-lg:hidden object-cover ">
            </div>

            <!-- Right Content -->
            <div class="px-12 max-md:px-8">
                <h2 class="max-lg:text-3xl max-md:text-center  text-4xl font-bold text-gray-800 leading-snug">
                    Build Your Travel Website & App<br>
                    <span class="text-blue-600">With Powerful Features</span>
                </h2>
                <p class="mt-4 text-gray-600 max-md:text-center">
                    We design and develop feature-rich, high-performance travel portals and apps — integrating booking engines,
                    payment systems, and customer-friendly tools that streamline your travel business.
                </p>

                <!-- Features -->
                <div class="mt-8 space-y-6">
                    <div class="pb-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">01. Custom Travel Portals</h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Personalized websites for travel agencies, tour operators, and booking companies with your branding.
                        </p>
                    </div>
                    <div class="pb-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">02. Online Booking & Payments</h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Integrated booking systems with secure payment gateways for flights, hotels, and tours.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">03. Customer Management Tools</h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Manage clients, reservations, and itineraries with an intuitive, easy-to-use backend dashboard.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-8 bg-white max-lg:py-0">
        <div class="w-[80%]  max-lg:w-[85%]  mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">

                <!-- Stat Item -->
                <div class="relative flex flex-col items-center">
                    <div class="w-32 h-28 bg-[url('/asset/image/trvelbg.png')] bg-contain bg-no-repeat bg-center flex items-center justify-center">
                        <h3 class="text-5xl font-medium text-gray-800">200+</h3>
                    </div>
                    <p class="mt-2 text-gray-500">Travel Websites Created</p>
                </div>

                <!-- Stat Item -->
                <div class="relative flex flex-col items-center">
                    <div class="w-32 h-28 bg-[url('/asset/image/trvelbg.png')] bg-contain bg-no-repeat bg-center flex items-center justify-center">
                        <h3 class="text-5xl font-medium text-gray-800">50+</h3>
                    </div>
                    <p class="mt-2 text-gray-500">Destinations Covered</p>
                </div>

                <!-- Stat Item -->
                <div class="relative flex flex-col items-center">
                    <div class="w-32 h-28 bg-[url('/asset/image/trvelbg.png')] bg-contain bg-no-repeat bg-center flex items-center justify-center">
                        <h3 class="text-5xl font-medium text-gray-800">100%</h3>
                    </div>
                    <p class="mt-2 text-gray-500">Client Satisfaction</p>
                </div>

                <!-- Stat Item -->
                <div class="relative flex flex-col items-center">
                    <div class="w-32 h-28 bg-[url('/asset/image/trvelbg.png')] bg-contain bg-no-repeat bg-center flex items-center justify-center">
                        <h3 class="text-5xl font-medium text-gray-800">10+</h3>
                    </div>
                    <p class="mt-2 text-gray-500">Years Experience</p>
                </div>

            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 pt-8">
        <!-- Block 1: Parallax Image -->
        <div class="h-[80vh] max-lg:h-[50vh] bg-[url('/asset/image/ballon.jpg')] bg-fixed bg-center bg-cover"></div>

        <!-- Block 2: Service Intro -->
        <div class="bg-white px-20 flex flex-col justify-center max-lg:px-6 max-lg:py-4">
            <h2 class="max-lg:text-3xl text-4xl font-bold text-gray-800 leading-snug mb-4">
                Build Stunning Travel Websites & Apps
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6 sm:mb-8">
                From captivating visuals to seamless booking experiences, we create travel platforms
                that inspire exploration and simplify your customer’s journey. Every feature is designed
                for performance, security, and scalability.
            </p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 text-gray-700 text-sm sm:text-base">
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> Custom Website Design</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> Mobile App Development</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> Secure Payment Gateways</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> Live Itinerary Tools</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> Multi-language Support</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">✔</span> API Integrations</li>
            </ul>
        </div>

        <!-- Block 3: About Services -->
        <!-- Block 3: Our Process -->
        <div class="bg-white p-6 max-lg:px-6 px-20 flex flex-col justify-center">
            <h3 class="text-xl sm:text-4xl font-semibold text-gray-800 mb-4">Our Process</h3>
            <p class="text-gray-600 leading-relaxed mb-6 sm:mb-8">
                We follow a structured yet flexible process to bring your travel platform to life —
                ensuring every stage from idea to launch runs smoothly and meets your expectations.
            </p>
            <ul class="space-y-3 text-gray-700 text-sm sm:text-base">
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">-</span> Discovery & Strategy Planning</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">-</span> Design & Prototype Creation</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">-</span> Development & Testing</li>
                <li class="flex items-center"><span class="text-blue-600 text-lg mr-2">-</span> Launch & Ongoing Support</li>
            </ul>
        </div>


        <!-- Block 4: Parallax Image -->
        <div class="h-[80vh] max-lg:h-[50vh] bg-[url('/asset/image/ballon.jpg')] bg-fixed bg-center bg-cover max-md:hidden"></div>
    </section>

    <section class="relative w-full py-32 bg-center bg-cover max-md:py-10 max-lg:py-16 max-md:border-t border-gray-200"
        style="background-image: url('/asset/image/travel1.jpg');">

        <!-- Content -->
        <div class="relative container mx-auto px-6 lg:px-20 text-black">
            <div class="w-full">
                <div class="max-w-3xl max-md:text-center">
                    <!-- Heading -->
                    <h2 class="text-5xl max-lg:text-3xl font-bold leading-tight">
                        Power Your Travel Business<br>
                        <span class="text-blue-600">With Websites & Apps That Convert</span>
                    </h2>
                    <p class="mt-4 text-lg text-gray-800 max-w-2xl">
                        Modern solutions to boost bookings, manage tours, and grow your travel brand.
                    </p>
                </div>

                <!-- Features -->
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <div class="bg-black/10 p-5 rounded-lg backdrop-blur-sm hover:bg-blue-600 hover:text-white transition">
                        <h3 class="font-semibold text-lg">Travel Websites</h3>
                    </div>
                    <div class="bg-black/10 p-5 rounded-lg backdrop-blur-sm hover:bg-blue-600 hover:text-white transition">
                        <h3 class="font-semibold text-lg">Booking Apps</h3>
                    </div>
                    <div class="bg-black/10 p-5 rounded-lg backdrop-blur-sm hover:bg-blue-600 hover:text-white transition">
                        <h3 class="font-semibold text-lg">Itinerary Tools</h3>
                    </div>
                    <div class="bg-black/10 p-5 rounded-lg backdrop-blur-sm hover:bg-blue-600 hover:text-white transition">
                        <h3 class="font-semibold text-lg">API Integrations</h3>
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-10 flex max-md:justify-center max-md:pb-4">
                    <a href="/get-in-touch"
                        class="bg-blue-600 hover:bg-blue-500  text-white px-6 py-3 rounded-lg font-semibold shadow-lg">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-16 bg-white max-lg:py-10">
        <div class="container mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl max-lg:text-3xl font-bold text-gray-800">Our Tours & Travel Project</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover our premium travel website designed to inspire and connect travelers worldwide.
                </p>
            </div>

            <!-- Single Project Card -->
            <div class="group relative overflow-hidden  max-w-4xl mx-auto">
                <img src="/asset/bnr/10.png" alt="Travel Website"
                    class="w-full h-full object-fit ">

            </div>
        </div>
    </section>


    <section class="py-32 bg-cover bg-center bg-no-repeat" style="background-image: url('/asset/image/travel3.jpg');">
        <div class="container mx-auto px-6 lg:px-20">

            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="max-lg:text-3xl text-4xl font-bold text-gray-800">
                    Why Choose Our Travel Website & App Solutions
                </h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    We craft innovative, user-friendly, and high-performance platforms for the travel industry.
                    Here’s what sets our services apart.
                </p>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-4 max-md:grid-cols-1 max-lg:grid-cols-2 gap-8 text-center">

                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-laptop-code text-blue-600 text-5xl"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Custom Travel Portals</h3>
                    <p class="text-gray-600 text-sm">
                        Fully tailored websites and apps designed to match your brand and meet your business goals.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-calendar-check text-blue-600 text-5xl text-light mb-6"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Integrated Booking Systems</h3>
                    <p class="text-gray-600 text-sm">
                        Real-time booking for flights, hotels, tours, and activities with secure payment gateways.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-network-wired text-blue-600 text-5xl text-light mb-6"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">API & Travel Data Integration</h3>
                    <p class="text-gray-600 text-sm">
                        Connect with global travel suppliers for live prices, availability, and itinerary management.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-mobile-screen text-blue-600 text-5xl text-light mb-6"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Mobile-Friendly & Scalable</h3>
                    <p class="text-gray-600 text-sm">
                        Fully responsive design that looks stunning on every device, ready to grow with your business.
                    </p>
                </div>

            </div>
        </div>
    </section>



  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("featureSlider");
            const slides = slider.children;
            let index = 0;

            function autoScroll() {
                if (window.innerWidth <= 1024) { // Only on mobile/tablet
                    index = (index + 1) % slides.length;
                    slider.scrollTo({
                        left: slides[index].offsetLeft,
                        behavior: 'smooth'
                    });
                }
            }

            setInterval(autoScroll, 3000); // Change every 3 seconds
        });
    </script>

<?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "./include/footer.php" ?>
</body>

</html>