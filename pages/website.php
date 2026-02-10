<?php
$page_title = "website"

?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>



<body >

    <?php include "include/navbar.php" ?>








    
    <div class="w-full flex flex-col items-center justify-center ">

        <style>
            .heading-font {
                font-family: 'Syne', sans-serif;
            }

            .body-font {
                font-family: 'Inter', sans-serif;
            }

            .gradient-text {
                background: linear-gradient(90deg, #3B82F6 0%, #8B5CF6 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .blob-shape {
                border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
                animation: morph 8s ease-in-out infinite;
            }

            @keyframes morph {
                0% {
                    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
                }

                50% {
                    border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
                }

                100% {
                    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
                }
            }

            .card {
                backdrop-filter: blur(16px) saturate(180%);
                background-color: rgba(255, 255, 255, 0.75);
                border: 1px solid rgba(209, 213, 219, 0.3);
            }

            .glass-button {
                backdrop-filter: blur(16px) saturate(180%);
                background-color: rgba(59, 130, 246, 0.5);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }


            .heading-font {
                font-family: 'Space Grotesk', sans-serif;
            }

            .feature-card:hover .icon-container {
                transform: translateY(-5px);
            }

            .feature-card:hover .feature-title {
                color: #4F46E5;
            }

            .bg-pattern {
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234F46E5' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }

            .gradient-circle {
                background: radial-gradient(circle, rgba(79, 70, 229, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            }

            .clip-path-card {
                clip-path: polygon(0 0, 100% 0, 100% 85%, 85% 100%, 0 100%);
            }

            .industry-card {
                transition: all 0.3s ease;
            }

            .industry-card:hover {
                background-color: rgb(247, 201, 201);
                transform: translateY(-5px);
                color: white;
            }

            .service-card {
                transition: all 0.3s ease;
                overflow: hidden;
                position: relative;
            }

            .service-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .service-card:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 0%, rgba(0, 0, 0, 0) 100%);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .service-card:hover:before {
                opacity: 1;
            }

            .service-icon {
                transition: all 0.3s ease;
            }

            .service-card:hover .service-icon {
                transform: scale(1.1);
            }

            .heading-underline {
                position: relative;
                display: inline-block;
            }

            .heading-underline:after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -4px;
                width: 40px;
                height: 3px;
                background-color: rgb(54, 98, 243);
                transition: width 0.3s ease;
            }

            .service-card:hover .heading-underline:after {
                width: 100%;
            }
        </style>





        <section class="w-full h-full ">
            <div class="flex flex-col md:flex-row relative overflow-hidden">

                <!-- Linked Banner Image -->
                <a href="/customizewebsite" class="w-full h-[90vh] max-lg:h-full max-md:h-full relative overflow-hidden block">
                    <img src="/asset/banner2.png" alt="Banner Image" class="w-full h-full object-cover">
                </a>

            </div>
        </section>




        <!-- Container -->
        <section class="w-full bg-white py-16 max-lg:py-12">
            <div class="w-[80%] max-lg:w-[85%] mx-auto text-center">
                <div class="w-full items-center justify-center flex flex-col mb-8 space-y-4">
                    <p class="text-sm font-semibold tracking-wide text-white uppercase bg-blue-600 w-fit px-4 py-1 rounded-full">Trusted by Thousands</p>
                    <h2 class="text-3xl max-md:text-2xl font-normal text-gray-900 leading-tight">Our Numbers Speak for Themselves</h2>

                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Card 1 -->
                    <div class="group border border-blue-600 rounded-tl-[50px] rounded-br-[50px] shadow-md p-6 flex gap-6  items-center justify-center transition-all transform hover:scale-105 hover:shadow-lg">
                        <img src="/asset/3445765.png" alt="Websites Delivered" class="w-12 h-12 mb-4 group-hover:animate-bounce">
                        <div class="text-start ">
                            <h3 class="text-3xl font-bold text-gray-900">300+</h3>
                            <p class="text-gray-600 mt-1 text-base">Websites Delivered</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group border border-blue-600 rounded-tl-[50px] rounded-br-[50px] shadow-md p-6 flex gap-6  items-center justify-center transition-all transform hover:scale-105 hover:shadow-lg">
                        <img src="/asset/345647.png" alt="Clients Worldwide" class="w-12 h-12 mb-4 group-hover:animate-bounce">
                        <div class="text-start">
                            <h3 class="text-3xl font-bold text-gray-900">100+</h3>
                            <p class="text-gray-600 mt-1">Clients Worldwide</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="group border border-blue-600 rounded-tl-[50px] rounded-br-[50px] shadow-md p-6 flex gap-6  items-center justify-center transition-all transform hover:scale-105 hover:shadow-lg">
                        <img src="/asset/1953.png" alt="Web Developers" class="w-12 h-12 mb-4 group-hover:animate-bounce">
                        <div class="text-start">
                            <h3 class="text-3xl font-bold text-gray-900">10+</h3>
                            <p class="text-gray-600 mt-1">Web Developers</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="group border border-blue-600 rounded-tl-[50px] rounded-br-[50px] shadow-md p-6 flex gap-6  items-center justify-center transition-all transform hover:scale-105 hover:shadow-lg">
                        <img src="/asset/experience.png" alt="Years of Experience" class="w-12 h-12 mb-4 group-hover:animate-bounce">
                        <div class="text-start">
                            <h3 class="text-3xl font-bold text-gray-900">5+</h3>
                            <p class="text-gray-600 mt-1">Years of Experience</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <div class="flex flex-col lg:flex-row items-center justify-center w-full min-h-screen bg-gray-100 overflow-hidden">

            <!-- Left Side - Industry Grid -->
            <div class="flex justify-center items-center w-full lg:w-1/2 p-4 sm:p-6 md:p-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 w-full max-w-5xl">

                    <!-- Banking -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M2 10h20M5 14h2m4 0h2m4 0h2M4 18h16a2 2 0 002-2V8a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2z" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">BANKING &<br>FINANCE</h3>
                    </div>

                    <!-- Transportation -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M16 3h-8a2 2 0 00-2 2v14a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2z" stroke="#4169E1" stroke-width="2" />
                                <path d="M18 9h4M18 14h4M6 9H2M6 14H2" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">TRANSPORTATION<br>& LOGISTICS</h3>
                    </div>

                    <!-- Lifestyle -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2v3m0 0c-1.1 0-2 .9-2 2v2h4V7c0-1.1-.9-2-2-2zm-9 7v10h18V9H3z" stroke="#4169E1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">LIFESTYLE</h3>
                    </div>

                    <!-- Healthcare -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M16 16v1.5a2.5 2.5 0 01-2.5 2.5h-7A2.5 2.5 0 014 17.5v-11A2.5 2.5 0 016.5 4h7A2.5 2.5 0 0116 6.5V8M12 9v6M9 12h6" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">HEALTHCARE</h3>
                    </div>

                    <!-- Real Estate -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M3 12l9-9 9 9M5 10v10h14V10" stroke="#4169E1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">REAL ESTATE</h3>
                    </div>

                    <!-- Manufacturing -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M4 20h16v-8h-4V4H8v8H4v8z" stroke="#4169E1" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">MANUFACTURING</h3>
                    </div>

                    <!-- Education -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2l9 5-9 5-9-5 9-5zM12 12v10M4 7v6c0 1 4 3 8 3s8-2 8-3V7" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">EDUCATION</h3>
                    </div>

                    <!-- Sports -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="#4169E1" stroke-width="2" />
                                <path d="M2 12h20M12 2a10 10 0 010 20" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">SPORTS</h3>
                    </div>

                    <!-- Enterprise -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="3" width="7" height="7" stroke="#4169E1" stroke-width="2" />
                                <rect x="14" y="3" width="7" height="7" stroke="#4169E1" stroke-width="2" />
                                <rect x="3" y="14" width="7" height="7" stroke="#4169E1" stroke-width="2" />
                                <rect x="14" y="14" width="7" height="7" stroke="#4169E1" stroke-width="2" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">ENTERPRISE</h3>
                    </div>

                    <!-- OTT -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M4 4h16v16H4V4z" stroke="#4169E1" stroke-width="2" />
                                <path d="M10 8l6 4-6 4V8z" fill="#4169E1" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">OTT & MEDIA</h3>
                    </div>

                    <!-- Travel -->
                    <div class="industry-card bg-white shadow-md rounded-xl py-6 sm:py-8 text-center hover:shadow-lg transition">
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none">
                                <path d="M2 12h20M10 2l2 10 2-10M10 22l2-10 2 10" stroke="#4169E1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-xs md:text-sm">TRAVEL & TOURISM</h3>
                    </div>

                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="flex w-full lg:w-1/2 bg-black rounded-t-[50px] lg:rounded-tl-[100px] lg:rounded-br-[100px] text-white mt-10 lg:mt-0">
                <div class="flex flex-col justify-center text-center lg:text-left p-6 sm:p-10 md:p-14 lg:p-20 w-full">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6">Industries Catered</h2>
                    <div class="border-t border-gray-600 mb-6 w-1/4 mx-auto lg:mx-0"></div>
                    <p class="mb-8 border-b border-gray-600 pb-6 text-gray-300">
                        We provide a complete range of services to turn your great ideas into profitable business solutions.
                    </p>
                    <p class="text-gray-400 mb-8">Don't worry if your industry is not listed here!</p>
                    <a href="/getin-touch" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 transition px-6 py-3 text-white font-medium rounded-md mx-auto lg:mx-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                        Book A Free Demo
                    </a>
                </div>
            </div>

        </div>

        <div class="w-[80%] max-lg:w-[85%] mx-auto  py-16 max-lg:py-12">
            <div class="text-center mb-16 max-md:mb-8">
                <span class="bg-blue-600 text-white text-sm font-medium px-4 py-1 rounded-full">Website Development </span>
                <h2 class="text-4xl font-normal mt-4 text-gray-800 max-lg:text-3xl">Take Your Business To The Next Level</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Portal Development -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-slate-800">
                        <span class="heading-underline">Web Portal Development</span>
                    </h3>
                    <p class="text-gray-600 text-sm">Customer-focused web portals with all the necessary functionalities to help expand your business digitally</p>
                </div>

                <!-- Custom Web Development -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-gray-800">
                        <span class="heading-underline">Custom Web Development</span>
                    </h3>
                    <p class="text-gray-600 text-sm">Fully-customized websites to speed up business processes, improve productivity, & multiply revenue</p>
                </div>

                <!-- E-commerce Development -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-gray-800">
                        <span class="heading-underline">E-commerce Development</span>
                    </h3>
                    <p class="text-gray-600 text-sm">E-commerce solutions to simplify online shopping, increase revenue & attract a larger customer base</p>
                </div>

                <!-- CMS Web Development -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-gray-800">
                        <span class="heading-underline">CMS Web Development</span>
                    </h3>
                    <p class="text-gray-600 text-sm">Easy-to-use CMS web applications to manage your digital content efficiently & gain competitive advantage</p>
                </div>

                <!-- Enterprise Web Development -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-gray-800">
                        <span class="heading-underline">Enterprise Web Development</span>
                    </h3>
                    <p class="text-gray-600 text-sm">Highly functional ERP web solution for better team collaborations, improved user engagement, & transparent results</p>
                </div>

                <!-- Support & Maintenance -->
                <div class="service-card bg-white border border-gray-200 rounded-xl p-8 shadow-md">
                    <div class="service-icon h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center mb-6 text-blue-600 text-2xl">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-base font-medium mb-3 text-gray-800">
                        <span class="heading-underline">Support & Maintenance</span>
                    </h3>
                    <p class="text-gray-600 text-sm">Unmatched maintenance support & services to make sure your website is functional, secure, and bug-free</p>
                </div>
            </div>

        </div>


        <section class="w-full bg-white py-12 border-t border-gray-200">
            <div class="w-[80%] max-lg:w-[85%] mx-auto grid grid-cols-1 md:grid-cols-2 gap-24 max-lg:gap-10 ">

                <!-- Left Section (Heading + Image) -->
                <div class="flex flex-col space-y-8">
                    <!-- Heading -->
                    <div class="space-y-4">
                        <!-- Label with a more premium look -->
                        <p class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-blue-400 text-white px-6 py-2 rounded-full shadow-sm w-fit animate-fadeIn">
                            Driving Innovation of
                        </p>


                    </div>

                    <!-- Image -->
                    <div class="relative w-full overflow-hidden rounded-lg">
                        <img src="/asset/coding.jpg" alt="Web Development" class="w-full h-full max-lg:h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Right Section (Stats) -->
                <div class="flex flex-col justify-center space-y-6">
                    <div class="flex flex-col items-end justify-end pb-4 border-b border-gray-200 max-md:items-start">
                        <!-- Main heading with gradient text -->
                        <h2 class="text-3xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-500 leading-tight animate-slideUp">
                            5+ Years
                        </h2>

                        <!-- Subtext with subtle animation -->
                        <p class="text-lg text-gray-600 animate-fadeIn">
                            As A Top Web App Development Company
                        </p>
                    </div>
                    <div class="flex items-center justify-between border-b pb-4">
                        <h2 class="text-6xl font-bold text-slate-800 max-lg:text-4xl">100+</h2>
                        <p class="text-gray-700">Successful Projects</p>
                    </div>
                    <div class="flex items-center justify-between border-b pb-4">
                        <h2 class="text-6xl font-bold text-slate-800 max-lg:text-4xl">98%</h2>
                        <p class="text-gray-700">Client Retention Rate</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-6xl font-bold text-slate-800 max-lg:text-4xl">10+</h2>
                        <p class="text-gray-700">Expert Developers</p>
                    </div>
                </div>

            </div>
        </section>




        <style>
            .process-container {
                position: relative;
            }

            .process-item {
                position: relative;
                z-index: 1;
                transition: all 0.3s ease;
            }

            .process-icon {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.4s ease;
                background-color: #f3f4f6;
                border: 3px solid #e5e7eb;
            }

            .process-icon svg {
                width: 30px;
                height: 30px;
                color: #9ca3af;
                transition: all 0.4s ease;
            }

            .process-text {
                font-weight: 500;
                color: #6b7280;
                transition: all 0.3s ease;
            }

            .process-item.active .process-icon {
                background-color: rgb(23, 124, 240);
                border-color: rgb(187, 215, 247);
                box-shadow: 0 0 15px rgba(74, 138, 222, 0.4);
            }

            .process-item.active .process-icon svg {
                color: white;
            }

            .process-item.active .process-text {
                color: #111827;
                font-weight: 600;
            }

            .image-carousel {
                position: relative;
                overflow: hidden;
                border-radius: 12px;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .carousel-slide {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .carousel-item {
                min-width: 100%;
                position: relative;
            }

            .carousel-content {
                position: absolute;
                bottom: 0;
                right: 0;
                background: white;
                padding: 20px;
                border-top-left-radius: 12px;
                max-width: 350px;
                box-shadow: 0 -10px 15px -3px rgba(0, 0, 0, 0.1);
                margin: 10px;
            }

            .carousel-indicator {
                display: none;
                justify-content: center;
                margin-top: 10px;
            }

            .indicator-dot {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background-color: #d1d5db;
                margin: 0 5px;
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .indicator-dot.active {
                background-color: #4ade80;
                transform: scale(1.5);
            }

            /* Mobile adjustments */
            @media (max-width: 768px) {
                .process-container {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                }

                .process-item {
                    flex: 1 1 calc(50% - 10px);
                    padding: 8px;
                }

                .process-icon {
                    width: 50px;
                    height: 50px;
                }

                .process-icon svg {
                    width: 22px;
                    height: 22px;
                }

                .carousel-content {
                    position: relative;
                    margin: 0px;
                    box-shadow: none;
                    border-top-left-radius: 0px;

                }
            }
        </style>

        <div class="w-[80%] max-lg:w-[85%] mx-auto py-16 max-lg:py-12 ">
            <div class="text-center mb-12">
                <span class="bg-blue-600 text-white text-sm font-medium px-4 py-1 rounded-full">Development Process</span>
                <h2 class="text-3xl md:text-4xl font-normal mt-4 text-gray-800">Grow your business with ease</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Process Steps -->
                <div class="lg:col-span-4 order-1 lg:order-none max-lg:hidden">
                    <div class="process-container">
                        <div class="process-item active mb-2" data-index="0">
                            <div class="flex items-center">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div class="ml-4 process-text">Planning</div>
                            </div>
                        </div>
                        <div class="process-item mb-2" data-index="1">
                            <div class="flex items-center">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                                <div class="ml-4 process-text">Design</div>
                            </div>
                        </div>
                        <div class="process-item mb-2" data-index="2">
                            <div class="flex items-center">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <div class="ml-4 process-text">Development</div>
                            </div>
                        </div>
                        <div class="process-item mb-2" data-index="3">
                            <div class="flex items-center">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div class="ml-4 process-text">QA & Launch</div>
                            </div>
                        </div>
                        <div class="process-item" data-index="4">
                            <div class="flex items-center">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="ml-4 process-text">Maintenance</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Carousel -->
                <div class="lg:col-span-8 order-2 lg:order-none">
                    <div class="image-carousel">
                        <div class="carousel-slide">
                            <div class="carousel-item">
                                <img src="/asset/planing.jpg" alt="Planning phase" class="w-full h-56 sm:h-72 md:h-96 object-cover" />
                                <div class="carousel-content">
                                    <h3 class="text-base font-semibold mb-2">Planning</h3>
                                    <p class="text-gray-600 text-sm">We analyze your requirements, define goals, & create the project schedule</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/asset/design.jpg" alt="Design phase" class="w-full h-56 sm:h-72 md:h-96 object-cover" />
                                <div class="carousel-content">
                                    <h3 class="text-base font-semibold mb-2">Design</h3>
                                    <p class="text-gray-600 text-sm">Create wireframes, UI/UX design, and prototypes for your mobile application</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/asset/develope.jpg" alt="Development phase" class="w-full h-56 sm:h-72 md:h-96 object-cover" />
                                <div class="carousel-content">
                                    <h3 class="text-base font-semibold mb-2">Development</h3>
                                    <p class="text-gray-600 text-sm">Build the frontend and backend infrastructure with clean and efficient code</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/asset/QA.jpg" alt="QA and Launch phase" class="w-full h-56 sm:h-72 md:h-96 object-cover" />
                                <div class="carousel-content">
                                    <h3 class="text-base font-semibold mb-2">QA & Launch</h3>
                                    <p class="text-gray-600 text-sm">Rigorous testing, bug fixing and deploying your app to the app stores</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/asset/maintanace.jpg" alt="Maintenance phase" class="w-full h-56 sm:h-72 md:h-96 object-cover" />
                                <div class="carousel-content">
                                    <h3 class="text-base font-semibold mb-2">Maintenance</h3>
                                    <p class="text-gray-600 text-sm">Regular updates, performance monitoring, and continuous improvement</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicator hidden">
                            <div class="indicator-dot active" data-index="0"></div>
                            <div class="indicator-dot" data-index="1"></div>
                            <div class="indicator-dot" data-index="2"></div>
                            <div class="indicator-dot" data-index="3"></div>
                            <div class="indicator-dot" data-index="4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carouselSlide = document.querySelector('.carousel-slide');
                const carouselItems = document.querySelectorAll('.carousel-item');
                const dots = document.querySelectorAll('.indicator-dot');
                const processItems = document.querySelectorAll('.process-item');

                let counter = 0;
                let size = carouselItems[0].clientWidth;

                const interval = 4000;
                let slideInterval = setInterval(nextSlide, interval);

                window.addEventListener('resize', () => {
                    size = carouselItems[0].clientWidth;
                    updateCarousel();
                });

                function updateCarousel() {
                    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
                    dots.forEach(dot => dot.classList.remove('active'));
                    dots[counter].classList.add('active');
                    processItems.forEach(item => item.classList.remove('active'));
                    processItems[counter].classList.add('active');
                }

                function nextSlide() {
                    counter = (counter + 1) % carouselItems.length;
                    updateCarousel();
                }

                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        counter = index;
                        updateCarousel();
                        resetInterval();
                    });
                });

                processItems.forEach((item, index) => {
                    item.addEventListener('click', () => {
                        counter = index;
                        updateCarousel();
                        resetInterval();
                    });
                });

                const carousel = document.querySelector('.image-carousel');
                carousel.addEventListener('mouseenter', () => clearInterval(slideInterval));
                carousel.addEventListener('mouseleave', resetInterval);

                function resetInterval() {
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, interval);
                }
            });
        </script>










    </div>

    <?php include 'pages/company.php' ?>
    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>


</body>

</html>