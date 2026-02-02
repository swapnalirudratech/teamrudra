<?php
$page_title = "portfolio"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>


    <div class="w-full flex h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] ">

        <div class="w-[70%] max-lg:w-[80%] max-md:w-full relative bg-black flex flex-col justify-center px-6 md:px-20 z-10 rounded-br-[50%] max-md:rounded-br-none">
            <div class="w-[90%] mx-auto max-lg:w-full ">
                <h2 class="text-4xl max-lg:text-3xl  lg-text-5xl xl:text-5xl font-extrabold text-white leading-tight">
                    Our Creative
                    <span class="block mt-2">Digital Portfolio</span>
                </h2>
                <p class="mt-6 text-lg text-gray-300 w-3/4 max-md:w-full">
                    Explore our innovative solutions and successful projects. We transform ideas into powerful digital experiences.
                </p>
                <div class="mt-8 flex space-x-4">

                    <a href="/getin-touch" class="px-6 py-3 max-md:text-xs border border-white text-white font-medium rounded-md hover:bg-white hover:text-black transition transform hover:-translate-y-1">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
        <div class="w-[50%] block absolute top-48 right-0  z-50 max-md:hidden">
            <img src="/asset/pc (1).png" alt="Laptop Screenshot" class=" w-[100%]  h-auto object-contain">
        </div>
    </div>


    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="w-full flex items-center justify-center py-10  ">
        <div class="w-[80%]  mx-auto max-md:w-[95%]">

            <div class="flex flex-wrap gap-2 py-12 max-md:py-0 max-md:mb-8 max-md:grid max-md:grid-cols-2 ">
                <button class="category-btn active-pill tab px-5 py-2 flex items-center gap-2 rounded-full  border border-green-400 text-sm max-md:text-xs font-medium transition-all duration-300"
                    data-target="ecommerce"><i data-lucide="shopping-cart" class="w-4 h-4"></i> E-Commerce</button>
                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="education"><i data-lucide="book-open" class="w-4 h-4"></i> Education</button>
                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="healthcare"><i data-lucide="heart-pulse" class="w-4 h-4"></i> Healthcare</button>
                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="restaurant"><i data-lucide="pizza" class="w-4 h-4"></i> Restaurant</button>

                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="realestate"><i data-lucide="home" class="w-4 h-4"></i> Real Estate</button>

                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="manufacturing"><i data-lucide="settings" class="w-4 h-4"></i> Manufacturing</button>

                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="travel"><i data-lucide="plane" class="w-4 h-4"></i> Travel & Tourism</button>

                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="corporate"><i data-lucide="briefcase" class="w-4 h-4"></i> Corporate </button>
                <button class="category-btn tab px-5 py-2 flex items-center gap-2 rounded-full border border-gray-300 text-sm max-md:text-xs font-medium hover:bg-gray-100 transition-all duration-300"
                    data-target="others"><i data-lucide="users" class="w-4 h-4"></i>
                    Others</button>
            </div>


            <div id="tab-contents" class=" bg-white w-full transition-all duration-500">
                <div id="ecommerce" class="tab-content">

                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">

                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">

                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/1.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">

                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>


                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>


                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>


                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">

                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/2.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">

                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>


                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>


                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>


                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">

                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/3.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">

                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>



                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>


                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>
                                            GO TO WEBSITE
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/4.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/5.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


                <div id="corporate" class="tab-content hidden">

                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/17.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/18.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>
                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>
                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/19.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/27.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/33.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="realestate" class="tab-content hidden">

                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/6.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/7.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>
                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>
                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


                <div id="healthcare" class="tab-content hidden">
                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/14.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/16.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="restaurant" class="tab-content hidden">
                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/15.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/image/WhatsApp Image 2025-03-08 at 11.24.55 AM (1).png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>
                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>
                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/image/WhatsApp Image 2025-03-08 at 11.24.55 AM (1).png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/image/WhatsApp Image 2025-03-08 at 11.24.55 AM (1).png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/image/WhatsApp Image 2025-03-08 at 11.24.55 AM (1).png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="manufacturing" class="tab-content hidden">
                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/8.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/9.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>
                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>
                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="travel" class="tab-content hidden">
                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/10.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="education" class="tab-content hidden">
                    <div class="grid max-md:grid-cols-1 grid-cols-3 gap-6 max-lg:grid-cols-2">
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/13.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/12.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>
                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>
                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>
                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                            <!-- Image Preview -->
                            <div class="md:w-full p-4 ">
                                <img src="/asset/bnr/11.png" alt="Website Screenshot" class="w-full h-auto object-cover " />
                            </div>

                            <div class="max-w-md mx-auto p-4">
                                <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                    <!-- Year Badge -->
                                    <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        2024
                                    </span>

                                    <!-- Technology Label Tab -->
                                    <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                        Technology
                                    </div>

                                    <!-- Tech Features -->
                                    <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Responsive Design
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Bootstrap 5
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tailwind CSS
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            React.js
                                        </div>
                                    </div>

                                    <!-- Website Button -->
                                    <div class="mt-4 flex justify-center w-full">
                                        <a href="#" target="_blank"
                                            class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                            </svg>

                                            GO TO WEBSITE
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div id="others" class="tab-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <?php
                        // Image range
                        for ($i = 23; $i <= 34; $i++) {
                        ?>
                            <div class="flex flex-col items-center bg-white border border-gray-400 rounded-xl shadow-md overflow-hidden transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
                                <!-- Image Preview -->
                                <div class="md:w-full p-4">
                                    <img src="/asset/bnr/<?php echo $i; ?>.png" alt="Website Screenshot" class="w-full h-auto object-cover" />
                                </div>

                                <div class="max-w-md mx-auto p-4">
                                    <div class="relative bg-white border rounded-xl shadow-sm p-4">
                                        <!-- Year Badge -->
                                        <span class="absolute top-2 right-2 bg-blue-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                            2024
                                        </span>

                                        <!-- Technology Label Tab -->
                                        <div class="absolute -top-3 left-4 bg-gray-800 text-white text-sm font-semibold px-4 py-1 rounded-full shadow">
                                            Technology
                                        </div>

                                        <!-- Tech Features -->
                                        <div class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-800 font-medium">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Responsive Design
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Bootstrap 5
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Tailwind CSS
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                React.js
                                            </div>
                                        </div>

                                        <!-- Website Button -->
                                        <div class="mt-4 flex justify-center w-full">
                                            <a href="#" target="_blank"
                                                class="inline-flex items-center w-full flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded-md transition-all duration-300 shadow">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-[45deg]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7M12 3v18" />
                                                </svg>

                                                GO TO WEBSITE
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        const tabButtons = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active-pill', 'border-green-400'));
                button.classList.add('active-pill', 'border-green-400');

                const targetId = button.getAttribute('data-target');
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                    if (content.id === targetId) content.classList.remove('hidden');
                });
            });
        });
    </script>

    <style>
        .active-pill {
            background-color: #e6f4ea;
            color: #14532d;
            font-weight: 600;
        }
    </style>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>


</body>

</html>