<?php
$page_title = "home"
?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>


    <div class="container mx-auto py-8 w-[90%] max-md:py-32 ">
        <div class="w-full flex items-start justify-between flex-wrap lg:flex-nowrap gap-8">
            <!-- Left side content container -->
            <div id="leftContent" class="w-full lg:w-3/5 flex flex-col justify-start items-start">
                <!-- Step 1: Website Type Selection (Initially visible) -->
                <div id="step1" class="w-full rounded-lg shadow-sm bg-white p-8 max-md:p-0">
                    <!-- Header -->
                    <div class="text-left mb-6">
                        <h2 class="text-2xl text-gray-800 mb-2 leading-tight"><span class="text-4xl font-medium">W</span>hat Type of Website Are You Looking For?</h2>
                        <p class="text-gray-600 text-xs">Select the best option for your business needs</p>
                    </div>

                    <!-- Website Options Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10 w-full">
                        <!-- Website options as in original design -->
                        <div class="bg-white  border border-gray-300 rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Static Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Dynamic Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Landing Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Corporate Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Customized Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Blogging Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Shopify Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Portal Development</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Website Maintenance</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2  flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">WordPress Website</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">One Page Site</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-300  rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Multivendor Ecommerce</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Business Category (Hidden initially) -->
                <div id="step2" class="w-full hidden rounded-lg shadow-sm bg-white p-8 max-md:p-0">
                    <!-- Header -->
                    <div class="text-left mb-4">
                        <h2 class="text-2xl text-gray-800 mb-2 leading-tight"><span class="text-3xl font-medium">W</span>hat Kind of Business Do You Have?</h2>
                        <p class="text-gray-600">Select the category that best describes your business</p>
                    </div>

                    <!-- Search Box -->
                    <div class="mb-8">
                        <div class="relative w-1/2 max-md:w-full">
                            <input type="text" placeholder="Choose your Business Category..." class="w-full border border-gray-300 rounded-lg py-2 text-xs px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button class="absolute right-0 top-0 bg-red-600 text-white h-full px-4 rounded-r-lg">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Categories Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10 w-full">
                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Technology</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Healthcare</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200  bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Education</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Retail</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Finance</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200  bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Food & Beverage</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Travel & Tourism</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Entertainment</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 bg-white rounded-lg shadow hover:shadow-md transition-all duration-300 group cursor-pointer">
                            <div class="px-4 py-2 flex items-center justify-between">
                                <h3 class="text-xs text-gray-800">Real Estate</h3>
                                <div class="text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Compact Contact Form -->
                <div id="step3" class="w-full hidden bg-white rounded-lg shadow p-6">
                    <!-- Header -->
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">
                            <span class="text-2xl text-blue-600 font-bold">P</span>rovide Your Contact Info
                        </h2>
                        <p class="text-xs text-gray-500 mt-1">We’ll contact you shortly after you submit your details.</p>
                    </div>

                    <!-- Form Fields -->
                    <form class="space-y-4 text-xs">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-600 mb-1">First Name</label>
                                <input type="text" placeholder="Rahul" class="w-full px-3 py-1.5 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs">
                            </div>
                            <div>
                                <label class="block text-gray-600 mb-1">Last Name</label>
                                <input type="text" placeholder="Deshmukh" class="w-full px-3 py-1.5 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs">
                            </div>
                            <div>
                                <label class="block text-gray-600 mb-1">Email</label>
                                <input type="email" placeholder="rahul@example.com" class="w-full px-3 py-1.5 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs">
                            </div>
                            <div>
                                <label class="block text-gray-600 mb-1">Phone</label>
                                <input type="tel" placeholder="+91 98765 43210" class="w-full px-3 py-1.5 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-600 mb-1">Business Name</label>
                            <input type="text" placeholder="RudraTech" class="w-full px-3 py-1.5 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs">
                        </div>

                        <div>
                            <label class="block text-gray-600 mb-1">Project Description</label>
                            <textarea rows="3" placeholder="Brief about your project..." class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400 text-xs resize-none"></textarea>
                        </div>
                    </form>
                </div>



                <!-- Step 4: Website Configuration Form (Hidden initially) -->
                <div id="step4" class="w-full hidden rounded-lg shadow-sm bg-white p-8 max-md:p-0">
                    <!-- Header -->
                    <div class="text-left mb-6 flex items-center justify-between max-md:flex-col max-md:gap-4">
                        <h2 class="text-2xl text-gray-800 font-semibold">Are You Looking For?
                            <span class="text-blue-500 text-xs font-normal cursor-pointer hover:underline">Edit</span>
                        </h2>
                        <!-- Website Type Selection -->
                        <div class="flex gap-3">
                            <div class="bg-black text-white rounded-md border border-gray-200 px-4 py-2 flex items-center gap-3">
                                <img src="/asset/wordpress (1).png" alt="WordPress Icon" class="w-6 h-6">
                                <span class="text-xs">WordPress Website</span>
                            </div>
                            <div class="bg-black text-white rounded-md border border-gray-200 px-4 py-2 flex items-center gap-2">
                                <input type="checkbox" id="advertising" class="w-4 h-4 text-blue-600" checked>
                                <label for="advertising" class="text-xs">Advertising</label>
                            </div>
                        </div>
                    </div>

                    <!-- Number of Pages -->
                    <div class="mb-6 rounded-md text-xs">
                        <h3 class="w-full bg-gray-200 p-3 text-gray-700 font-medium mb-4">Number Of Pages</h3>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="radio" id="pages1-4" name="pageCount" class="w-4 h-4 text-blue-600" checked>
                                <label for="pages1-4" class="ml-2 text-gray-700">1 - 4</label>
                            </div>
                            <div class="flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="radio" id="pages5-8" name="pageCount" class="w-4 h-4 text-blue-600">
                                <label for="pages5-8" class="ml-2 text-gray-700">5 - 8</label>
                            </div>
                            <div class="flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="radio" id="pages9-20" name="pageCount" class="w-4 h-4 text-blue-600">
                                <label for="pages9-20" class="ml-2 text-gray-700">9 - 20</label>
                            </div>
                            <div class="flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="radio" id="pages20-25" name="pageCount" class="w-4 h-4 text-blue-600">
                                <label for="pages20-25" class="ml-2 text-gray-700">20 - 25</label>
                            </div>

                            <div class="flex items-center ml-auto">
                                <button class="bg-white w-8 h-8 rounded-full flex items-center justify-center text-red-500 shadow-md">
                                    <i class="fas fa-minus text-xs"></i>
                                </button>
                                <span class="mx-3 font-medium">4</span>
                                <button class="bg-white w-8 h-8 rounded-full flex items-center justify-center text-green-600 shadow-md">
                                    <i class="fas fa-plus text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Page Names -->
                    <div class="rounded-md mb-6 text-xs">
                        <h3 class="w-full bg-gray-200 p-3 text-gray-700 font-medium mb-4">Pages Name</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="home" class="w-4 h-4 text-blue-600" checked>
                                <label for="home" class="ml-2 text-gray-700">Home</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="testingPage" class="w-4 h-4 text-blue-600">
                                <label for="testingPage" class="ml-2 text-gray-700">Testing Page</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="aboutUs" class="w-4 h-4 text-blue-600" checked>
                                <label for="aboutUs" class="ml-2 text-gray-700">About Us</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="contactUs" class="w-4 h-4 text-blue-600" checked>
                                <label for="contactUs" class="ml-2 text-gray-700">Contact Us</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="services" class="w-4 h-4 text-blue-600" checked>
                                <label for="services" class="ml-2 text-gray-700">Services</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="career" class="w-4 h-4 text-blue-600">
                                <label for="career" class="ml-2 text-gray-700">Career</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="gallery" class="w-4 h-4 text-blue-600">
                                <label for="gallery" class="ml-2 text-gray-700">Gallery</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="product" class="w-4 h-4 text-blue-600">
                                <label for="product" class="ml-2 text-gray-700">Product</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="productDetail" class="w-4 h-4 text-blue-600">
                                <label for="productDetail" class="ml-2 text-gray-700">Product Detail</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="portfolio" class="w-4 h-4 text-blue-600">
                                <label for="portfolio" class="ml-2 text-gray-700">Portfolio</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="media" class="w-4 h-4 text-blue-600">
                                <label for="media" class="ml-2 text-gray-700">Media</label>
                            </div>
                            <div class="p-3 rounded flex items-center border border-gray-200 rounded-md px-4 py-2">
                                <input type="checkbox" id="testimonial" class="w-4 h-4 text-blue-600">
                                <label for="testimonial" class="ml-2 text-gray-700">Testimonial</label>
                            </div>
                        </div>

                        <!-- Add New Page Button -->
                        <div class="mt-4 bg-black text-white px-4 py-2 inline-block rounded text-xs cursor-pointer hover:bg-gray-900 transition duration-200">
                            Add New Page
                        </div>

                        <!-- Add New Page Input -->
                        <div class="mt-4 flex items-center gap-3">
                            <input type="text" placeholder="Add New Page" class="border border-gray-300 rounded p-3 w-full">
                            <button class="bg-black text-white px-5 py-3 rounded">
                                <i class="fas fa-plus"></i> Add
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
                        <div>
                            <!-- Domain Selection -->
                            <div class="flex items-center justify-between bg-gray-100 px-5 py-3 rounded-md shadow-sm mb-4">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-gray-800 font-semibold">Do You Want Domain?</h3>
                                    <div class="bg-gray-700 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs cursor-pointer">
                                        <i class="fas fa-question"></i>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="wantDomain" class="w-5 h-5 text-blue-600">
                                    <label for="wantDomain" class="ml-2 text-gray-700">Yes</label>
                                </div>
                            </div>

                            <!-- Domain Selection Dropdown -->
                            <div class="mb-4">
                                <select class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition">
                                    <option>-- Select Domain --</option>
                                    <option>.Com</option>
                                    <option>.test</option>
                                    <option>.in</option>
                                    <option>.co.in</option>
                                    <option>.org</option>
                                    <option>.edu</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <!-- Hosting Selection -->
                            <div class="flex items-center justify-between bg-gray-100 px-5 py-3 rounded-md shadow-sm mb-4">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-gray-800 font-semibold">Do You Want Hosting?</h3>
                                    <div class="bg-gray-700 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs cursor-pointer">
                                        <i class="fas fa-question"></i>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="wantHosting" class="w-5 h-5 text-blue-600">
                                    <label for="wantHosting" class="ml-2 text-gray-700">Yes</label>
                                </div>
                            </div>

                            <!-- Hosting Selection Dropdown -->
                            <div class="mb-4">
                                <select class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition">
                                    <option>-- Select Hosting --</option>
                                    <option>AWS</option>
                                    <option>Shared Cpanel</option>
                                    <option>Azure</option>
                                    <option>Unlimited Cpanel</option>
                                    <option>Shared</option>
                                    <option>Dedicated</option>
                                    <option>VPS</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <!-- SSL Certificate -->
                            <div class="flex items-center justify-between bg-gray-100 px-5 py-3 rounded-md shadow-sm mb-4">
                                <div class="flex items-center justify-start gap-3">
                                    <h3 class="text-gray-800 font-semibold">Do You Want SSL Certificate?</h3>

                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="wantSSL" class="w-5 h-5 text-blue-600">
                                    <label for="wantSSL" class="ml-2 text-gray-700">Yes</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <!-- Official Email IDs -->
                            <div class="flex items-center justify-between bg-gray-100 px-5 py-3 rounded-md shadow-sm mb-4">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-gray-800 font-semibold">Do You Want Official Email IDs?</h3>

                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="wantEmail" class="w-5 h-5 text-blue-600">
                                    <label for="wantEmail" class="ml-2 text-gray-700">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="max-w-4xl mx-auto   p-2 ">

                        <!-- CMS and Style of Design -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-xs font-medium text-gray-800">Select CMS</label>
                                <select class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                                    <option>WordPress</option>
                                    <option>Shopify</option>
                                    <option>Custom</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-gray-800">Style of Design</label>
                                <select class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                                    <option>Modern</option>
                                    <option>Minimal</option>
                                    <option>Classic</option>
                                </select>
                            </div>
                        </div>

                        <!-- Advanced Settings -->
                        <div class="mb-6 border-b pb-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Advanced Settings</h3>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                <label class="inline-flex items-center text-xs text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">GT Metrix</span>
                                </label>
                                <label class="inline-flex items-center text-xs text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">Google Speed</span>
                                </label>
                                <label class="inline-flex items-center text-xs text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">No Inline CSS</span>
                                </label>
                                <label class="inline-flex items-center text-xs text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">Enable 404 Page</span>
                                </label>

                            </div>
                        </div>


                        <!-- Third-Party Integration and Payment Gateways -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-xs font-medium text-gray-800">Third-Party Integration</label>
                                <select class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                                    <option>None</option>
                                    <option>Google Analytics</option>
                                    <option>Facebook Pixel</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-gray-800">Payment Gateways</label>
                                <select class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                                    <option>None</option>
                                    <option>PayPal</option>
                                    <option>Stripe</option>
                                </select>
                            </div>
                        </div>

                        <div class="max-w-4xl mx-auto  p-2 text-xs">

                            <!-- Responsive Checkbox -->
                            <div class="mb-6">
                                <label class="inline-flex items-center text-xs text-gray-700">
                                    <input type="checkbox" checked class="form-checkbox text-blue-600">
                                    <span class="ml-2 font-medium">Responsive (Compulsory)</span>
                                </label>
                            </div>

                            <!-- Step Guide -->
                            <h2 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Quick 4-Step Guide to Submit Your Information</h2>

                            <!-- Special Requirements -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Google Translator</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>SEO Friendly</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>On-Page SEO</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Banner Dynamic</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Admin Panel</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Edit Pages</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Manage Pages</span>
                                </label>
                                <label class="inline-flex items-center text-xs gap-2 text-gray-700 border border-gray-200 rounded-md px-4 py-2">
                                    <input type="checkbox" class="form-checkbox "> <span>Content Writing</span>
                                </label>
                            </div>

                            <!-- Technology Selection -->
                            <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Technology</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 mb-6">
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>Bootstrap</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span> Translator</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>WordPress</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>HTML</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>CSS</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>jQuery</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>AJAX</span>
                                </label>
                                <label class="bg-blue-200 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>JavaScript</span>
                                </label>
                            </div>

                            <!-- WordPress Plugins -->
                            <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">WordPress Plugins</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 mb-6">
                                <label class="bg-yellow-100 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>Flash Cache</span>
                                </label>
                                <label class="bg-yellow-100 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>Yoast SEO</span>
                                </label>
                                <label class="bg-yellow-100 px-3 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> <span>Mail SMTP</span>
                                </label>
                            </div>

                            <!-- Content for Pages -->
                            <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Content for Pages</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 mb-6">
                                <label class="bg-blue-300 px-6 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> Home
                                </label>
                                <label class="bg-blue-300 px-6 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> About Us
                                </label>
                                <label class="bg-blue-300 px-6 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> Contact Us
                                </label>
                                <label class="bg-blue-300 px-6 py-2 rounded-full text-xs font-medium flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox"> Services
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-center items-center w-full  mt-6">
                    <button id="backBtn" class="hidden text-gray-600 hover:text-gray-800 px-8 py-3 rounded font-medium transition-colors duration-300 focus:outline-none">
                        <i class="fa-solid fa-left-long"></i> Go Back
                    </button>
                    <a href="/getin-touch" class="ml-auto max-md:ml-0 bg-black hover:bg-gray-800 text-white px-8 py-3 rounded font-medium transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                        Next <i class="fa-solid fa-right-long ml-2"></i>
                    </a>
                </div>

            </div>

            <!-- Right side content (Static Package Section) -->
            <div class="w-1/3  bg-white border-l-4 border-blue-500  p-6 mb-10 sticky z-[50] top-32 max-md:w-full max-md:border-l-0 max-md:border-t-4">
                <div class="flex items-center justify-between mb-2">
                    <div>
                        <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-0.5 rounded-full">Package</span>
                        <h2 class="text-xs text-gray-800 mt-1">Static / Information</h2>
                    </div>
                    <span class="bg-blue-600 text-white px-3 py-1 rounded text-xs">Most Popular</span>
                </div>

                <div class="space-y-2 text-xs">
                    <div class="flex items-center justify-between py-1 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="bg-blue-50  rounded-full mr-3">
                                <i class="fas fa-file-alt text-blue-500"></i>
                            </div>
                            <span class="text-gray-700">Basic</span>
                        </div>
                        <span class="text-gray-800">$0</span>
                    </div>

                    <div class="flex items-center justify-between py-1 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="bg-blue-50  rounded-full mr-3">
                                <i class="fas fa-copy text-blue-500"></i>
                            </div>
                            <span class="text-gray-700">No. Of Pages</span>
                        </div>
                        <span class="text-gray-800">0</span>
                    </div>

                    <div class="flex items-center justify-between py-1 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="bg-blue-50 rounded-full mr-3">
                                <i class="fas fa-truck text-blue-500"></i>
                            </div>
                            <span class="text-gray-700">Express Delivery</span>
                        </div>
                        <span class="text-gray-800">$0</span>
                    </div>

                    <div class="flex items-center justify-between pt-2 pb-2">
                        <span class="text-md text-gray-800">Grand Total</span>
                        <span class="text-md font-medium text-blue-600">$0</span>
                    </div>
                </div>

                <div class="mt-2 flex flex-col sm:flex-row gap-4 justify-between items-center">
                    <button class="w-full sm:w-auto bg-red-600 hover:bg-red-700 text-white py-1 px-2 rounded text-xs font-medium transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                        Proceed To Pay
                    </button>
                    <button class="w-full sm:w-auto border border-red-600 text-red-600 hover:bg-red-50 py-1 px-2 rounded text-xs font-medium transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 flex justify-center items-center">
                        <i class="fas fa-download mr-2"></i> Download Quotation
                    </button>
                </div>

                <div class="mt-3 pt-3 border-t border-gray-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-blue-100 p-1 rounded mr-2">
                            <i class="fas fa-clock text-blue-700"></i>
                        </div>
                        <h2 class="font-medium text-gray-800 text-xs">Estimated Delivery</h2>
                    </div>

                    <div class="space-y-2 bg-gray-50 p-2 rounded text-xs">
                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center">
                                <i class="fas fa-calendar-day text-gray-500 mr-3"></i>
                                <span class="text-gray-700">DH</span>
                            </div>
                            <span class="text-gray-800">0</span>
                        </div>

                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center">
                                <i class="fas fa-calendar-week text-gray-500 mr-3"></i>
                                <span class="text-gray-700">WD</span>
                            </div>
                            <span class="text-gray-800">0</span>
                        </div>

                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center">
                                <i class="fas fa-calendar-alt text-gray-500 mr-3"></i>
                                <span class="text-gray-700">EDD</span>
                            </div>
                            <span class="text-gray-800">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script>
        // Current step tracker
        let currentStep = 1;
        const totalSteps = 4;

        // Get DOM elements
        const nextBtn = document.getElementById('nextBtn');
        const backBtn = document.getElementById('backBtn');

        // Handle next button click
        nextBtn.addEventListener('click', function() {
            if (currentStep < totalSteps) {
                // Hide current step
                document.getElementById(`step${currentStep}`).classList.add('hidden');

                // Show next step
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');

                // Show back button after first step
                if (currentStep > 1) {
                    backBtn.classList.remove('hidden');
                }

                // Change next button text on last step
                if (currentStep === totalSteps) {
                    nextBtn.textContent = 'Submit';
                }
            } else {
                // Handle form submission (just an alert for demo)
                alert('Form submitted successfully!');
            }
        });

        // Handle back button click
        backBtn.addEventListener('click', function() {
            if (currentStep > 1) {
                // Hide current step
                document.getElementById(`step${currentStep}`).classList.add('hidden');

                // Show previous step
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');

                // Hide back button at first step
                if (currentStep === 1) {
                    backBtn.classList.add('hidden');
                }

                // Reset next button text
                nextBtn.textContent = 'Next';
            }
        });
    </script>
    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>