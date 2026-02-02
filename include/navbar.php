<style>
    .arrow-icon {
        display: inline-block;
        transition: transform 0.3s ease-in-out;
    }

    a:hover .arrow-icon {
        transform: translateX(10px);
    }

    .menu-nav {
        font-family: 'Poppins';
    }

    /* Default State */
    .flip-icon {
        transition: transform 0.8s ease;
    }

    /* Anchor Hover Triggers Icon Flip */
    .hover-trigger:hover .flip-icon {
        animation: double-flip 0.8s ease;
    }

    /* Keyframes for Double Flip */
    @keyframes double-flip {
        0% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(180deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }
</style>


<style>
    .submenu {
        display: none;
    }

    .submenu.active {
        display: block;
    }

    .submenu li {
        position: relative;
        padding-left: 1.5rem;
        /* extra space for alignment */
        display: flex;
        align-items: center;
        /* vertically center content */
        gap: 0.5rem;
        /* space between icon/bullet and text */
    }

    .submenu li::before {
        content: "->";
        /* or "-" */
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        /* center vertically */
        color: #3B82F6;
        /* Tailwind blue-500 */
        font-size: 1.2em;
        /* adjust bullet size */
    }
</style>


<div class="w-full menu-nav flex flex-col items-center bg-white  justify-center   shadow-sm sticky  top-0 z-[999] ">


    <!-- <div class="w-full bg-black flex items-center justify-between p-1  max-lg:hidden relative">
        <div class="flex items-center justify-between w-[95%]">
            <div>
                <h2 class="text-gray-800 text-2xl font-bold tracking-wider"></h2>
            </div>
            <div>
                <ul class="flex space-x-6 text-sm">
                    <li><a href="/web-calculator" class="<?= ($page_title == "web-calculator") ? 'text-blue-200 font-normal' : 'text-white ' ?>   transition-all cursor-pointer">Website Calculator</a></li>
                    <li><a href="/packages" class=" <?= ($page_title == "packages") ? 'text-blue-200 font-normal' : 'text-white ' ?>  transition-all cursor-pointer">Packages</a></li>
                    <li><a href="/client" class=" <?= ($page_title == "client") ? 'text-blue-200 font-normal' : 'text-white ' ?>  transition-all cursor-pointer">Clients</a></li>
                    <li><a href="/testimonial" class="text-white hover:text-blue-500 transition-all cursor-pointer">Testimonial</a></li>
                    <li><a href="/getquote" class="<?= ($page_title == "getquote") ? 'text-blue-200 font-normal' : 'text-white ' ?>  transition-all cursor-pointer">Get A Quote</a></li>
                </ul>

            </div>
        </div>
    </div> -->


    <nav class="flex items-center justify-between py-2 max-lg:py-6 z-10 relative w-[90%] ">


        <a href="/">
            <div class="flex items-center max-md:text-3xl text-4xl font-[Play] font-semibold tracking-tight text-gray-900">
                <span class="text-blue-600">Rudra</span><span class="text-gray-800">Tech</span>
            </div>
        </a>


        <div class="flex justify-center items-center py-4  w-[65%] max-lg:hidden">

            <div class="hidden md:flex items-center gap-8 text-sm ">

                <div class="relative group mega-menu-container  overflow-visible" data-menu-id="website-designing-menu">
                    <a href="/website-designing" aria-haspopup="true" aria-expanded="false"
                        class="<?= ($page_title == "website-designing") ? 'text-blue-600 font-normal' : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center  font-medium transition-colors duration-300">
                        Website Designing<i class="fa-solid fa-chevron-down ml-1 text-xs"></i>
                    </a>


                    <div class="mega-menu hidden absolute group-hover:block  top-11 border-t border-blue-500 left-80 transform -translate-x-1/2 w-[1400px]  z-50 bg-white shadow-xl rounded-b-3xl  pb-10 px-16 transition-all duration-300 ease-in-out">


                        <section class="w-full bg-white py-6">
                            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 ">


                                <div class="lg:col-span-4 flex flex-col gap-8 border-r border-gray-300 pr-8 ">

                                    <div>
                                        <h2 class="text-2xl font-semibold text-gray-800 leading-tight">
                                            Join Leading Businesses <br />
                                            Across Sectors Who <br />
                                            <span class="text-black">Trust Us To Drive Innovation.</span>
                                        </h2>
                                        <a href="/getin-touch" class="inline-flex items-center mt-4 text-sm font-bold text-black underline">
                                            Get Started
                                            <span class="inline-block bg-green-400 text-white rounded-full ml-2 w-5 h-5 text-center">→</span>
                                        </a>
                                    </div>


                                    <div class="bg-yellow-200 p-3   flex flex-col items-center text-center gap-4  ">

                                        <div class="owl-carousel navbar-carousel owl-theme  rounded-lg overflow-hidden w-full">
                                            <div class="item">
                                                <img src="/asset/image/s (1).jpg" alt="Slide 1" class="w-full h-32 object-contain " />
                                            </div>
                                            <div class="item">
                                                <img src="/asset/image/s (2).jpg" alt="Slide 2" class="w-full h-32 object-contain " />
                                            </div>
                                            <div class="item">
                                                <img src="/asset/image/s (5).jpg" alt="Slide 3" class="w-full h-32 object-contain " />
                                            </div>
                                            <div class="item">
                                                <img src="/asset/image/s (6).jpg" alt="Slide 3" class="w-full h-32 object-contain " />
                                            </div>
                                            <div class="item">
                                                <img src="/asset/image/s (7).jpg" alt="Slide 3" class="w-full h-32 object-contain " />
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="lg:col-span-8 flex flex-col gap-8 ">
                                    <div class=" md:grid md:grid-cols-3 gap-8  text-sm ">

                                        <!-- <a href="/website-designing" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                               
                                                <span class="text-gray-800 font-medium">Website Designing</span>
                                            </div>
                                        </a> -->

                                        <a href="/static-website-designing" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/staticweb.webp" alt="Static Website Design" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Static Website Design</span>
                                            </div>
                                        </a>

                                        <a href="/e-commerce-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/ecom.webp" alt="E-commerce Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">E-commerce Website</span>
                                            </div>
                                        </a>

                                        <a href="/landing-page-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/landing.webp" alt="Landing Page Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Landing Page Website</span>
                                            </div>
                                        </a>

                                        <a href="/dynamic-website-designing" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/dynamic.jpg" alt="Dynamic Website Design" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Dynamic Website Design</span>
                                            </div>
                                        </a>

                                        <a href="/corporate-website-design" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/corporate.webp" alt="Corporate Website Design" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Corporate Website Design</span>
                                            </div>
                                        </a>



                                        <a href="/custom-website-development" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/custom.webp" alt="Custom Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Custom Website</span>
                                            </div>
                                        </a>

                                        <a href="/multi-vendor-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/multivendor.webp" alt="Multi Vendor Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Multi Vendor Website</span>
                                            </div>
                                        </a>

                                        <a href="/business-profile-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/businessprofile.webp" alt="Business Profile Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Business Profile Website</span>
                                            </div>
                                        </a>

                                        <a href="/informative-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/informative.webp" alt="Informative Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Informative Website</span>
                                            </div>
                                        </a>

                                        <a href="/portfolio-website" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/portfolio.webp" alt="Portfolio Website" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">Portfolio Website</span>
                                            </div>
                                        </a>

                                        <a href="/CMS-development" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300   rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/webp" alt="CMS Development" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">CMS Development</span>
                                            </div>
                                        </a>

                                        <a href="/CRM-development" class="block">
                                            <div class="flex items-center space-x-3 bg-white border-b border-gray-300    rounded hover-trigger transition">
                                                <!-- <img src="/asset/icon/crm.webp" alt="CRM Development" class="w-10 h-10 object-contain flip-icon" /> -->
                                                <span class="text-gray-800 font-medium">CRM Development</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="flex  gap-6">
                                        <a href="/customizewebsite"
                                            class="text-white bg-black text-xs font-bold py-3 px-6 rounded-lg hover:scale-105 hover:shadow-lg transition-all flex items-center">
                                            <span>Customize Your Website</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="/packages"
                                            class="border-2 border-black text-black font-bold py-2 px-6 text-xs rounded-lg hover:scale-105 hover:shadow-lg transition-all flex items-center">
                                            <span>Know Packages</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 " viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>


                <a href="/software-development"
                    class="<?= ($page_title == "software-development") ? 'text-blue-600 font-normal' : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Software
                    Development</a>



                <div class="relative group mega-menu-container  overflow-visible" data-menu-id="services-menu">

                    <a href="#" class="relative h-full flex items-center justify-center text-gray-800 font-medium transition-colors duration-300
                    group-hover:text-blue-600 after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-blue-600
                    after:w-0 group-hover:after:w-full after:transition-all">
                        Services <i class="fa-solid fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="mega-menu hidden absolute group-hover:block absolute top-11 border-t border-blue-500 -left-2/3 transform -translate-x-1/2 w-[1400px]  z-50 bg-white shadow-xl rounded-b-3xl pt-3 pb-10 px-16 transition-all duration-300 ease-in-out">


                        <section class="w-full bg-white py-6">
                            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">


                                <div class="lg:col-span-4 flex flex-col gap-8 border-r border-gray-300 pr-8">
                                    <div>
                                        <h2 class="text-2xl font-semibold text-gray-800 leading-tight">
                                            Join Leading Businesses <br />
                                            Across Sectors Who <br />
                                            <span class="text-black">Trust Us To Drive Innovation.</span>
                                        </h2>
                                        <a href="/getin-touch" class="inline-flex items-center mt-4 text-sm font-bold text-black underline">
                                            Get Started
                                            <span class="inline-block bg-green-400 text-white rounded-full ml-2 w-5 h-5 text-center">→</span>
                                        </a>
                                    </div>


                                    <div class="bg-white flex flex-col items-center text-center gap-4 ">
                                        <img src="/asset/image/2 (2).png" alt="Sector Illustration" class="w-full h-40 bg-yellow-200 p-3 object-contain rounded-lg" />

                                        <div class="flex items-center gap-2 w-full">
                                            <a href="/web-calculator" class="text-white bg-black text-xs font-semibold py-2 px-3 rounded-lg w-full text-center hover:bg-gray-800">
                                                Website Calculator
                                            </a>

                                            <a href="/packages" class="text-white bg-blue-500 text-xs font-semibold py-2 px-4 rounded-lg w-full text-center hover:bg-blue-600">
                                                Known Packages
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="lg:col-span-8 flex flex-col gap-8 ">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-sm">
                                        <!-- Each service card with link -->
                                        <!-- <a href="/software-development" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                        <span class="text-gray-800 font-medium">Software Development</span>
                                    </a> -->
                                        <a href="/mobileapp_developement" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Mobile App Development</span>
                                        </a>
                                        <a href="/wordpress" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">WordPress</span>
                                        </a>
                                        <a href="/cloud_services" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Cloud Solutions</span>
                                        </a>
                                        <!-- <a href="/shopify" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Shopify</span>
                                        </a> -->
                                        <a href="/website" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Web Development</span>
                                        </a>
                                        <a href="/email_hosting" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Email Hosting</span>
                                        </a>
                                        <a href="/domain" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Domain</span>
                                        </a>
                                        <a href="/amc" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">AMC</span>
                                        </a>
                                        <a href="/blockchain" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Blockchain</span>
                                        </a>
                                        <a href="/it-consult" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">IT Consulting Advisory</span>
                                        </a>
                                        <a href="/food-and-beverage" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Food & Beverage</span>
                                        </a>
                                        <a href="/Logistics-delivery-service" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Logistics & Delivery</span>
                                        </a>
                                        <a href="/fitness" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Fitness</span>
                                        </a>
                                        <a href="/travel-transport" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Travel & Transport</span>
                                        </a>
                                        <a href="/education" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Education</span>
                                        </a>
                                        <a href="/realestate" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Real Estate</span>
                                        </a>
                                        <a href="/healthcare" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Healthcare</span>
                                        </a>
                                        <a href="/fintech" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">FinTech</span>
                                        </a>
                                        <a href="/dating" class="flex items-center space-x-3 bg-white border-b border-gray-300 rounded hover:shadow-sm">
                                            <span class="text-gray-800 font-medium">Dating App</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </section>


                    </div>
                </div>

                <a href="/portfolio"
                    class="
                    <?= ($page_title == "portfolio") ? 'text-blue-600 font-normal' : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Portfolio</a>
                <!-- <a href="#" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'brands.php') ? 'text-blue-600 hover:text-blue-500' : 'text-gray-800 hover:text-blue-600'; ?> font-medium transition-colors duration-300">Brands</a>-->
                <!-- <a href="/media"
                    class="<?= ($page_title == "media") ? 'text-blue-600 font-normal' : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Media</a> -->
                <a href="/career"
                    class="<?= ($page_title == "career") ? 'text-blue-600 font-normal' : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Career</a>

                <a href="/client" class=" <?= ($page_title == "client") ? 'text-blue-200 font-normal'  : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Clients</a>

                  <a href="/software" class=" <?= ($page_title == "software") ? 'text-blue-200 font-normal'  : 'text-gray-800 hover:text-blue-600' ?> relative after:hover:w-full after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:absolute after:bottom-0 after:left-0 h-full flex items-center justify-center text-gray-800 hover:text-blue-600 font-medium transition-colors duration-300">Software</a>
            </div>
        </div>


        <div class="flex items-center max-lg:hidden">
            <a href="getin-touch"
                class="relative inline-flex items-center gap-2 border border-blue-600 text-blue-600 font-medium text-sm py-2 px-4 rounded-lg overflow-hidden 
              transition-all duration-500  
              hover:text-white group">

                <span class="absolute inset-0 bg-blue-600 w-0 group-hover:w-full transition-all duration-500  z-0"></span>

                <span class="relative z-10">Get In Touch</span>
                <span class="relative z-10 arrow-icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
        </div>

        <button id="hamburgerMenu" class=" text-blue-500 font-bold   lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16m-16 6h16"></path>
            </svg>
        </button>


        <div id="mobileMenu"
            class="fixed inset-0   z-50 bg-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col">

            <div class="flex justify-between px-4 py-6 bg-white border-b border-gray-200 shadow-xs">
                <a href="/">
                    <div class="flex items-center text-3xl md:text-4xl font-[Play] font-semibold tracking-tight text-gray-900">
                        <span class="text-blue-600">Rudra</span><span class="text-gray-800">Tech</span>
                    </div>
                </a>

                <button id="closeMenu" class="text-blue-900 font-extrabold  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>


            <div class=" overflow-y-auto relative ">
                <ul class="flex flex-col">
                    <li>
                        <a href="/"
                            class="block flex justify-start py-3 px-4 border-b border-gray-50  text-gray-800  hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-house mr-2 text-blue-700 text-sm"></i></span> <span>Home</span></p>
                        </a>
                    </li>

                    <li>
                        <a href="/website-designing" class="nav-item block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-800 hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-brush mr-2 text-blue-700 text-sm"></i></span> Website Designing</p>
                            <span class="menu-item-icon text-xs "><i class="fa-solid fa-chevron-right"></i></span>
                        </a>
                        <ul class="submenu bg-gray-50 pl-8">
                            <li><a href="/website-designing" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Website Designing</a></li>
                            <li><a href="/static-website-designing" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Static Website Design</a></li>
                            <li><a href="/dynamic-website-designing" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Dynamic Website Design</a></li>
                            <li><a href="/corporate-website-design" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Corporate Website Design</a></li>
                            <li><a href="/CMS-development" class="block py-2 px-4 text-gray-600 hover:text-blue-500">CMS Development</a></li>
                            <li><a href="/CRM-development" class="block py-2 px-4 text-gray-600 hover:text-blue-500">CRM Development</a></li>
                            <li><a href="/e-commerce-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">E-commerce Website</a></li>
                            <li><a href="/landing-page-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Landing Page Website</a></li>
                            <li><a href="/custom-website-development" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Custom Website Development</a></li>
                            <li><a href="/multi-vendor-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Multi Vendor Website</a></li>
                            <li><a href="/business-profile-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Business Profile Website</a></li>
                            <li><a href="/informative-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Informative Website</a></li>
                            <li><a href="/portfolio-website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Portfolio Website</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="/software-development"
                            class="block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-800  hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-laptop-code mr-2 text-blue-700 text-xs"></i></span> <span>Software Development</span></p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-item block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-700 hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-gear mr-2 text-blue-700 text-sm"></i></span> Services</p>
                            <span class="menu-item-icon text-xs"><i class="fa-solid fa-chevron-right"></i></span>
                        </a>
                        <ul class="submenu bg-gray-50 pl-8">
                            <li><a href="/mobileapp_developement" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Mobile App Development</a></li>
                            <li><a href="/wordpress" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Wordpress</a></li>
                            <li><a href="/cloud_services" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Cloud Solutions</a></li>
                            <li><a href="/shopify" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Shopify Development</a></li>

                            <li><a href="/website" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Web Development</a></li>
                            <li><a href="/blockchain" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Blockchain Solutions</a></li>
                            <li><a href="/email_hosting" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Email Hosting</a></li>
                            <li><a href="/domain" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Domain Services</a></li>
                            <li><a href="/amc" class="block py-2 px-4 text-gray-600 hover:text-blue-500">AMC (Annual Maintenance Contract)</a></li>
                            <li><a href="/it-consult" class="block py-2 px-4 text-gray-600 hover:text-blue-500">IT Consulting Advisory </a></li>
                            <!-- Additional industries from your list -->
                            <li><a href="/food-and-beverage" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Food & Beverage Solutions</a></li>
                            <li><a href="/Logistics-delivery-service" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Logistics & Delivery</a></li>
                            <li><a href="/fitness" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Fitness Apps & Solutions</a></li>
                            <li><a href="/travel-transport" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Travel & Transport</a></li>
                            <li><a href="/education" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Education Technology</a></li>
                            <li><a href="/realestate" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Real Estate Solutions</a></li>
                            <li><a href="/healthcare" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Healthcare Solutions</a></li>
                            <li><a href="/fintech" class="block py-2 px-4 text-gray-600 hover:text-blue-500">FinTech Solutions</a></li>
                            <li><a href="/dating" class="block py-2 px-4 text-gray-600 hover:text-blue-500">Dating Apps</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="/portfolio"
                            class="block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-800  hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-user-tie mr-2 text-blue-700 text-sm"></i></span> <span> Portfolio</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="/media"
                            class="block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-800 hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-image mr-2 text-blue-700 text-sm"></i></span> <span> Media</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="/career"
                            class="block flex justify-between py-3 px-4 border-b border-gray-50 text-gray-800  hover:bg-blue-50 transition-colors duration-200">
                            <p><span><i class="fa-solid fa-briefcase mr-2 text-blue-700 text-sm"></i></span> <span> Career</span></p>
                        </a>
                    </li>


                    <li><a href="/web-calculator" class="flex items-center py-3 px-5 hover:bg-blue-50">
                            <i class="fa-solid fa-calculator mr-3 text-blue-700 text-sm"></i> Website Calculator
                        </a></li>
                    <li><a href="/packages" class="flex items-center py-3 px-5 hover:bg-blue-50">
                            <i class="fa-solid fa-box mr-3 text-blue-700 text-sm"></i> Packages
                        </a></li>
                    <li><a href="/client" class="flex items-center py-3 px-5 hover:bg-blue-50">
                            <i class="fa-solid fa-users mr-3 text-blue-700 text-sm"></i> Clients
                        </a>
                    </li>

                </ul>
            </div>

            <div class="p-4 border-t border-gray-200 flex gap-3">
                <a href="/getin-touch"
                    class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Get in Touch
                </a>
                <a href="/getquote"
                    class="flex-1 text-center border border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition">
                    Get a Quote
                </a>
            </div>



            <div class="flex justify-center gap-4 py-3 bg-gray-50 border-t border-gray-200">
                <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-black hover:text-blue-600"><i class="fa-brands fa-x-twitter"></i>
                    <a href="#" class="text-pink-500 hover:text-pink-700"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.navbar-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 2500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1024: {
                            items: 1
                        }
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.nav-item').click(function(e) {
                    e.preventDefault();
                    const submenu = $(this).siblings('.submenu');
                    const icon = $(this).find('.fa-chevron-right');

                    // Close other submenus
                    $('.submenu').not(submenu).removeClass('active');
                    $('.fa-chevron-right').not(icon).removeClass('fa-rotate-90');

                    // Toggle current submenu
                    submenu.toggleClass('active');
                    icon.toggleClass('fa-rotate-90');
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all mega menu containers
                const menuContainers = document.querySelectorAll('.mega-menu-container');

                // Store timeouts for each menu
                const menuTimeouts = {};

                menuContainers.forEach(container => {
                    const menuId = container.getAttribute('data-menu-id');
                    const megaMenu = container.querySelector('.mega-menu');

                    // Function to determine the display style
                    function getDisplayStyle(menu) {
                        // Check if the menu is fixed-position (services) or absolute (website designing)
                        return menu.classList.contains('fixed') ? 'flex' : 'block';
                    }

                    // Function to show the menu
                    function showMenu() {
                        if (menuTimeouts[menuId]) {
                            clearTimeout(menuTimeouts[menuId]);
                        }
                        megaMenu.classList.remove('hidden');
                        megaMenu.classList.add(getDisplayStyle(megaMenu));
                    }

                    // Function to hide the menu with delay
                    function hideMenuWithDelay() {
                        menuTimeouts[menuId] = setTimeout(() => {
                            megaMenu.classList.remove('flex', 'block');
                            megaMenu.classList.add('hidden');
                        }, 300); // 300ms delay before hiding
                    }

                    // Show menu when hovering over the container
                    container.addEventListener('mouseenter', showMenu);

                    // Set timeout to hide menu when leaving the container
                    container.addEventListener('mouseleave', hideMenuWithDelay);

                    // If mouse enters the mega menu itself, cancel the hiding
                    megaMenu.addEventListener('mouseenter', showMenu);

                    // When mouse leaves the mega menu, hide it with delay
                    megaMenu.addEventListener('mouseleave', hideMenuWithDelay);
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const hamburgerMenu = document.getElementById('hamburgerMenu');
                const mobileMenu = document.getElementById('mobileMenu');
                const closeMenu = document.getElementById('closeMenu');

                hamburgerMenu.addEventListener('click', function() {
                    mobileMenu.classList.remove('-translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                });

                closeMenu.addEventListener('click', function() {
                    mobileMenu.classList.remove('translate-x-0');
                    mobileMenu.classList.add('-translate-x-full');
                });
            });
        </script>

    </nav>

</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>