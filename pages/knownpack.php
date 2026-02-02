<?php
$page_title = "home"
?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>

    <!-- Minimal Banner Section with Tailwind CSS -->
    <div class="relative overflow-hidden rounded-xl bg-cover bg-center h-96" style="background-image: url('/asset/bnr3.png');">


        <!-- Content Container -->
        <div class="relative h-full flex items-center">
            <div class="w-[90%] mx-auto px-6 ">
                <!-- Main Heading - Simple and Direct -->
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-3">
                    Professional IT Solutions at Affordable Prices
                </h2>

                <!-- Price Focus Subheading -->
                <p class="text-xl text-slate-600 mb-6">
                    Starting at just <span class="text-red-700 font-bold">$49/month</span>
                </p>

                <!-- Single CTA Button -->
                <a href="#packages" class="inline-block px-6 py-3 bg-black hover:bg-red-700 text-white font-medium rounded-lg transition duration-300">
                    View Price Packages
                </a>
            </div>
        </div>
    </div>



    <!-- Package Cards Container -->
    <div id="packages" class="w-[80%] mx-auto my-16 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Package Card 1 - Basic -->
            <div class="relative group">
                <!-- Background pattern -->
                <div class="absolute inset-0 bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl transform -rotate-1 scale-[1.01] group-hover:rotate-0 group-hover:scale-[1.02] transition-all duration-300"></div>

                <!-- Card Content -->
                <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col h-full">
                    <!-- Card Header -->
                    <div class="relative p-6 bg-gradient-to-r from-gray-400 to-gray-300 text-white">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-gray-600 rounded-full opacity-20"></div>
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="px-3 py-1 bg-gray-900 text-white text-sm font-semibold rounded-full">Static</span>
                                <h3 class="mt-2 text-lg font-bold">Basic Package</h3>
                                <p class=" text-gray-300 text-xs">Perfect for small businesses</p>
                            </div>
                            <div class="ml-4 flex flex-col items-end">
                                <span class="absolute  right-0  bg-red-700 text-white text-lg px-3 py-1 rounded-bl-lg font-bold shadow-md">
                                    ₹9,999
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Service Status -->
                    <div class="px-6 py-2 bg-gray-50">
                        <span class="flex items-center text-gray-800 text-xs">
                            <span class="relative flex h-3 w-3 mr-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                            </span>
                            Available Now
                        </span>
                    </div>

                    <!-- Features List -->
                    <div class="px-6 py-4 flex-grow">
                        <ul class="space-y-1 text-xs">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Technology:</span> HTML5, CSS3</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Responsive design</span> for Mobile</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Basic Theme</span></span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Two Banners</span> in Home page</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Up to 4-page</span> Website</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Query form</span> with 4 fields</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">Social Media page Linking</span></span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-gray-600">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                </div>
                                <span class="ml-3"><span class="font-medium text-gray-800">3 Working days</span> delivery</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="p-4 bg-gray-50 border-t border-gray-100">
                        <div class="flex flex-col sm:flex-row gap-3 text-xs">
                            <a href="#" class="inline-flex  items-center justify-center  px-4 py-2 border border-transparent rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg font-semibold w-full sm:w-auto">
                                Order Now
                            </a>
                            <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg text-gray-600 bg-white hover:bg-gray-50 transition-colors font-semibold w-full sm:w-auto">
                                Enquire
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package Card 2 - Premium -->
            <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col h-full">
                <!-- Card Header -->
                <div class="relative p-6 bg-gradient-to-r from-gray-400 to-gray-300 text-white">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-gray-600 rounded-full opacity-20"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="px-3 py-1 bg-gray-900 text-white text-sm font-semibold rounded-full">Static</span>
                            <h3 class="mt-2 text-lg font-bold">Basic Package</h3>
                            <p class=" text-gray-300 text-xs">Perfect for small businesses</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <span class="absolute  right-0  bg-red-700 text-white text-lg px-3 py-1 rounded-bl-lg font-bold shadow-md">
                                ₹9,999
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Service Status -->
                <div class="px-6 py-2 bg-gray-50">
                    <span class="flex items-center text-gray-800 text-xs">
                        <span class="relative flex h-3 w-3 mr-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                        </span>
                        Available Now
                    </span>
                </div>

                <!-- Features List -->
                <div class="px-6 py-4 flex-grow">
                    <ul class="space-y-1 text-xs">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Technology:</span> HTML5, CSS3</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Responsive design</span> for Mobile</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Basic Theme</span></span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Two Banners</span> in Home page</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Up to 4-page</span> Website</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Query form</span> with 4 fields</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Social Media page Linking</span></span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-gray-600">
                                    <i class="fas fa-clock text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">3 Working days</span> delivery</span>
                        </li>
                    </ul>
                </div>

                <!-- CTA Buttons -->
                <div class="p-4 bg-gray-50 border-t border-gray-100">
                    <div class="flex flex-col sm:flex-row gap-3 text-xs">
                        <a href="#" class="inline-flex  items-center justify-center  px-4 py-2 border border-transparent rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg font-semibold w-full sm:w-auto">
                            Order Now
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg text-gray-600 bg-white hover:bg-gray-50 transition-colors font-semibold w-full sm:w-auto">
                            Enquire
                        </a>
                    </div>
                </div>
            </div>

            <!-- Package Card 3 - Business (Popular) -->
            <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col h-full">
                <!-- Card Header -->
                <div class="relative p-6 bg-gradient-to-r from-gray-400 to-gray-300 text-white">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-gray-600 rounded-full opacity-20"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="px-3 py-1 bg-gray-900 text-white text-sm font-semibold rounded-full">Static</span>
                            <h3 class="mt-2 text-lg font-bold">Basic Package</h3>
                            <p class=" text-gray-300 text-xs">Perfect for small businesses</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <span class="absolute  right-0  bg-red-700 text-white text-lg px-3 py-1 rounded-bl-lg font-bold shadow-md">
                                ₹9,999
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Service Status -->
                <div class="px-6 py-2 bg-gray-50">
                    <span class="flex items-center text-gray-800 text-xs">
                        <span class="relative flex h-3 w-3 mr-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                        </span>
                        Available Now
                    </span>
                </div>

                <!-- Features List -->
                <div class="px-6 py-4 flex-grow">
                    <ul class="space-y-1 text-xs">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Technology:</span> HTML5, CSS3</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Responsive design</span> for Mobile</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Basic Theme</span></span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Two Banners</span> in Home page</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Up to 4-page</span> Website</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Query form</span> with 4 fields</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-blue-600">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">Social Media page Linking</span></span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 pt-1">
                                <div class="h-5 w-5 flex items-center justify-center rounded-full bg-gray-100 text-gray-600">
                                    <i class="fas fa-clock text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3"><span class="font-medium text-gray-800">3 Working days</span> delivery</span>
                        </li>
                    </ul>
                </div>

                <!-- CTA Buttons -->
                <div class="p-4 bg-gray-50 border-t border-gray-100">
                    <div class="flex flex-col sm:flex-row gap-3 text-xs">
                        <a href="#" class="inline-flex  items-center justify-center  px-4 py-2 border border-transparent rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg font-semibold w-full sm:w-auto">
                            Order Now
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg text-gray-600 bg-white hover:bg-gray-50 transition-colors font-semibold w-full sm:w-auto">
                            Enquire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div id="contact" class="container mx-auto mb-16 px-4">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row items-center ">
            <!-- Text Content -->
            <div class="relative md:w-1/2 flex flex-col justify-center text-center md:text-left p-8 md:p-12">

                <div class="relative text-white">
                    <h2 class="text-lg md:text-3xl font-bold mb-4">Need a Custom Solution?</h2>
                    <p class="mb-6 max-w-md">We can create a tailored package that perfectly matches your business requirements and budget.</p>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-lg text-gray-900 bg-white hover:bg-gray-100 transition-colors shadow-md hover:shadow-lg font-semibold">
                        Request Custom Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="md:w-1/2 h-full flex items-center justify-center">
                <img src="/asset/New-Graphic.png" alt="Custom Solutions" class="w-auto h-72 object-contain">
            </div>
        </div>
    </div>

   <?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>