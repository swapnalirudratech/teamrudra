<?php
$page_title = "Logistics & Delivery IT Solutions | Rudratech";
$meta_description = "Rudratech provides smart digital solutions for logistics & delivery businesses including websites, CRM, cloud platforms, automation, and AMC services to streamline operations and scale faster.";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php include "include/header.php"; ?>

<style>
    /* Apexus Signature Bottom Border Hover Effect */
    .service-card {
        position: relative;
        transition: all 0.3s ease;
    }

    .service-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 4px;
        background-color: #0b5df5;
        /* Accent Color */
        transition: width 0.4s ease;
    }

    .service-card:hover::after {
        width: 100%;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>

<body class="text-slate-700 bg-slate-50">

    <?php include "include/navbar.php" ?>

    <div class="relative w-full min-h-[85vh] flex items-center justify-center bg-secondary ">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2940&auto=format&fit=crop"
                alt="Logistics Digital Transformation"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/70"></div>
        </div>

        <div class="relative z-10 w-[85%] mx-auto py-20 flex flex-col items-center justify-center">

            <div class="w-full text-center flex flex-col items-center" data-aos="fade-up" data-aos-duration="1000">

                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-[2px] w-8 md:w-12 bg-blue-500 "></div>
                    <span class="text-white font-bold tracking-widest text-sm uppercase">Smart Digital Solutions</span>
                    <div class="h-[2px] w-8 md:w-12 bg-blue-500 "></div>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-[1.1] mb-6">
                    Digital Transformation for <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-400">Logistics & Delivery</span>
                </h1>

                <p class="text-lg md:text-xl text-slate-300 leading-relaxed mb-10 font-sans max-w-3xl px-4">
                    Rudratech empowers logistics and delivery companies with custom web platforms, CRM systems, cloud infrastructure, and automation tools to improve visibility, efficiency, and customer experience.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/get-in-touch" class="px-8 py-4 bg-blue-600 hover:bg-blue-400 text-white font-bold uppercase tracking-wide transition-all duration-300 flex items-center gap-2">
                        Get Free Consultation <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#services" class="px-8 py-4 bg-transparent border border-white hover:bg-white hover:text-black text-white font-bold uppercase tracking-wide transition-all duration-300">
                        Explore Solutions
                    </a>
                </div>

            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="w-[85%] mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 text-center">

                <div class="flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center text-white text-3xl mb-6 shadow-lg shadow-orange-500/30 transform group-hover:-translate-y-2 transition-all duration-300">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fast & Reliable Shipping</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
                        Ensure timely deliveries with optimized routes and real-time tracking.
                    </p>
                </div>

                <div class="flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center text-white text-3xl mb-6 shadow-lg shadow-orange-500/30 transform group-hover:-translate-y-2 transition-all duration-300">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Global Reach</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
                        Seamlessly connect to a worldwide network for international logistics.
                    </p>
                </div>

                <div class="flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center text-white text-3xl mb-6 shadow-lg shadow-orange-500/30 transform group-hover:-translate-y-2 transition-all duration-300">
                        <i class="fa-solid fa-box-archive"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Secure Handling</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
                        Guaranteed safe transport for all your packages, big or small.
                    </p>
                </div>

                <div class="flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center text-white text-3xl mb-6 shadow-lg shadow-orange-500/30 transform group-hover:-translate-y-2 transition-all duration-300">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Efficient Operations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
                        Streamline your supply chain with our advanced logistics solutions.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="relative pt-24 pb-12 bg-white  overflow-hidden font-sans">

        <div class="absolute top-20 left-1/2 -translate-x-1/2 w-full text-center z-0 pointer-events-none select-none overflow-hidden">
            <span class="text-[12rem] md:text-[18rem] font-black text-slate-200/60 leading-none tracking-tighter">
                PORTFOLIO
            </span>
        </div>

        <div class="relative w-[85%] mx-auto z-10">

            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 tracking-tight">
                    Our Pre-Built Logistics Solutions
                </h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                    Deploy powerful, ready-to-use logistics websites and software dashboards with a single click. Customize everything to match your brand.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">

                <div class="flex flex-col items-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative w-full aspect-[4/2] bg-slate-800 rounded-[2rem] p-3  shadow-2xl transition-transform duration-500 group-hover:-translate-y-2">
                        <div class="absolute top-1/2 left-2 md:left-3 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-slate-600 hidden md:block"></div>
                        <div class="w-full h-full bg-white rounded-xl overflow-hidden relative border border-slate-700">
                            <img src="/asset/software/animocare.jpg"
                                alt="Logistics Website Template"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                            <div class="absolute inset-0 bg-gradient-to-tr from-white/10 to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mt-8 mb-2">Corporate Website</h3>
                    <p class="text-slate-500 text-center text-sm px-4">Informative portals with tracking integrations and quote request forms.</p>
                </div>

                <div class="flex flex-col items-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative w-full aspect-[4/2] bg-slate-800 rounded-[2rem] p-3  shadow-2xl transition-transform duration-500 group-hover:-translate-y-2">
                        <div class="absolute top-1/2 left-2 md:left-3 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-slate-600 hidden md:block"></div>
                        <div class="w-full h-full bg-slate-100 rounded-xl overflow-hidden relative border border-slate-700">
                            <img src="/asset/software/nk.jpg"
                                alt="Logistics Software Dashboard"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">


                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mt-8 mb-2">Admin Login</h3>
                    <p class="text-slate-500 text-center text-sm px-4">Powerful CRM and dispatch management software for your internal team.</p>
                </div>

            </div>
        </div>
    </section>


    <style>
        /* Custom utility to hide scrollbar for the horizontal showcase */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Light theme vertical stripes background (mimicking the dark theme stripes from your image) */
        .bg-vertical-stripes-light {
            background-color: #ffffff;
            background-image: linear-gradient(to right, #f1f5f9 1px, transparent 1px);
            background-size: 80px 100%;
        }
    </style>

    <section class="relative w-full py-32 md:py-40 bg-fixed bg-center bg-cover bg-no-repeat"
        style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2940&auto=format&fit=crop');">

        <div class="absolute inset-0 bg-slate-900/70 z-0"></div>

        <div class="relative z-10 w-[90%] max-w-4xl mx-auto text-center" data-aos="fade-up">
            <span class="inline-block py-1 px-4 mb-6 text-sm font-bold tracking-widest text-blue-500  uppercase bg-white/10 backdrop-blur-sm border border-white/20 rounded-full">
                Enterprise Grade Infrastructure
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Scale Your Logistics Operations With Absolute Confidence.
            </h2>
            <p class="text-lg md:text-xl text-slate-300 leading-relaxed mb-10">
                From warehouse floors to last-mile delivery, our digital systems are engineered to handle the complexities of modern supply chains. Minimize downtime, maximize transparency.
            </p>
            <a href="/get-in-touch" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-slate-900 hover:bg-slate-100 font-bold uppercase tracking-wide rounded shadow-xl transition-transform hover:-translate-y-1">
                Talk To A Solutions Architect <i class="fa-solid fa-arrow-right text-blue-500 "></i>
            </a>
        </div>
    </section>



    <style>
        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #2294ff !important;
        }
    </style>

    <section class="relative py-24 bg-vertical-stripes-light overflow-hidden border-t border-slate-200">
        <div class="w-[85%] mx-auto">

            <div class="text-center mb-10" data-aos="fade-up">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-blue-500"></div>
                    <span class="text-sm font-bold text-slate-500 uppercase tracking-widest">Inside The Platform</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">
                    Explore Our Powerful <br> Logistics Dashboard
                </h2>
                <p class="text-slate-500 max-w-3xl mx-auto text-lg leading-relaxed">
                    Get a glimpse into the software that powers modern supply chains. Our intuitive interface gives your team complete control over fleet management, route optimization, and real-time delivery tracking—all from one centralized hub.
                </p>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10 mb-16" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-2 text-slate-700 font-semibold text-sm md:text-base">
                    <i class="fa-solid fa-circle-check text-blue-500 text-xl"></i> Live Fleet Tracking
                </div>
                <div class="flex items-center gap-2 text-slate-700 font-semibold text-sm md:text-base">
                    <i class="fa-solid fa-circle-check text-blue-500 text-xl"></i> Smart Route Optimization
                </div>
                <div class="flex items-center gap-2 text-slate-700 font-semibold text-sm md:text-base">
                    <i class="fa-solid fa-circle-check text-blue-500 text-xl"></i> Automated Dispatching
                </div>
                <div class="flex items-center gap-2 text-slate-700 font-semibold text-sm md:text-base">
                    <i class="fa-solid fa-circle-check text-blue-500 text-xl"></i> Comprehensive Analytics
                </div>
            </div>

            <div class="owl-carousel owl-theme pb-8" data-aos="fade-up" data-aos-delay="200">

                <div class="item bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-200 overflow-hidden group hover:-translate-y-2 transition-transform duration-300 mx-2 my-4">
                    <div class="h-[250px] w-full overflow-hidden bg-slate-100">
                        <img src="/asset/software/nk (4).jpg"
                            alt="Live Dispatch Board" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="item bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-200 overflow-hidden group hover:-translate-y-2 transition-transform duration-300 mx-2 my-4">
                    <div class="h-[250px] w-full overflow-hidden bg-slate-100">
                        <img src="/asset/software/nk.jpg"
                            alt="Fleet Management View" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="item bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-200 overflow-hidden group hover:-translate-y-2 transition-transform duration-300 mx-2 my-4">
                    <div class="h-[250px] w-full overflow-hidden bg-slate-100">
                        <img src="/asset/software/nk (1).jpg"
                            alt="Live Tracking Map" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="item bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-200 overflow-hidden group hover:-translate-y-2 transition-transform duration-300 mx-2 my-4">
                    <div class="h-[250px] w-full overflow-hidden bg-slate-100">
                        <img src="/asset/software/nk (2).jpg"
                            alt="Analytics and Reports" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="item bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-200 overflow-hidden group hover:-translate-y-2 transition-transform duration-300 mx-2 my-4">
                    <div class="h-[250px] w-full overflow-hidden bg-slate-100">
                        <img src="/asset/software/nk (3).jpg"
                            alt="Order Management Module" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <a href="/get-in-touch" class="inline-block px-10 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded shadow-lg shadow-blue-600/30 transition-all duration-300 transform hover:-translate-y-1">
                    Request a Live Demo
                </a>
            </div>

        </div>
    </section>




    <style>
        /* FAQ Accordion Styles */
        details>summary {
            list-style: none;
        }

        details>summary::-webkit-details-marker {
            display: none;
        }
    </style>

    <section class="py-24 bg-white overflow-hidden border-t border-gray-100">
        <div class="w-[85%] mx-auto">

            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <div class="flex items-center justify-center gap-2 mb-4 text-sm font-semibold text-slate-500">
                    <div class="w-2 h-2 bg-blue-500"></div>
                    <span class="uppercase tracking-widest">End-to-End ERP</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 tracking-tight leading-tight">
                    Complete Control Over Freight, Customs & Finances
                </h2>
                <p class="text-lg text-slate-500 leading-relaxed">
                    A unified logistics ERP designed to manage everything from Port Transit and Transport dispatch to advanced P&L and Cashbook accounting.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div data-aos="fade-right">
                    <div class="flex items-center gap-2 mb-4 text-sm font-semibold text-slate-500">
                        <div class="w-2 h-2 bg-blue-500"></div>
                        <span class="uppercase tracking-widest">Intelligent Operations</span>
                    </div>

                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">
                        Streamline Transport & Operational Accounting
                    </h3>

                    <p class="text-slate-600 mb-10 leading-relaxed text-lg">
                        Stop using separate software for dispatch and accounting. Our platform seamlessly connects your ETD tracking, Custom Transitor workflows, Purchases, and Sales into one automated system, giving you real-time visibility into your Profit & Loss.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-4 text-slate-800 font-medium">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Transport & Dispatch
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Customs & Port Transit
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Purchase & Sales Orders
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Automated P&L Reports
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Cashbook & Expense Tracking
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </div>
                            Payment & Capital Management
                        </div>
                    </div>
                </div>

                <div class="relative w-full h-[500px] lg:h-[600px]" data-aos="fade-left">
                    <div class="absolute top-10 right-0 w-4/5 h-auto bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-slate-100 overflow-hidden z-10">
                        <div class="h-6 bg-slate-100 flex items-center px-3 gap-1.5 border-b border-slate-200">
                            <div class="w-2 h-2 rounded-full bg-red-400"></div>
                            <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                            <div class="w-2 h-2 rounded-full bg-green-400"></div>
                        </div>
                        <img src="/asset/software/nk.jpg" alt="Logistics ERP Dashboard" class="w-full h-full object-cover">
                    </div>

                    <div class="absolute bottom-10 left-0 w-2/5 md:w-1/2 bg-white rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.15)] border border-slate-100 overflow-hidden z-20 transform -translate-y-4">
                        <img src="/asset/software/nk (3).jpg" alt="Financial Reports View" class="w-full h-48 object-cover object-left-top">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-t border-slate-200 font-sans">
        <div class="w-[85%] md:w-[60%]  mx-auto">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-4 tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-slate-500">
                    Everything you need to know about our logistics solutions and software implementation.
                </p>
            </div>

            <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">

                <details class="group bg-white border border-slate-200 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none font-bold text-slate-900 text-lg">
                        <span>What is included in your custom logistics software?</span>
                        <span class="transition group-open:rotate-180 text-blue-500 ">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed">
                        Our software is modular. A standard build includes a central admin dashboard, order ingestion & management, automated dispatch, live fleet tracking, and an electronic Proof of Delivery (ePOD) system. We also provide dedicated driver mobile apps and a customer tracking portal.
                    </div>
                </details>

                <details class="group bg-white border border-slate-200 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none font-bold text-slate-900 text-lg">
                        <span>Can the platform integrate with our existing ERP or accounting tools?</span>
                        <span class="transition group-open:rotate-180 text-blue-500 ">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed">
                        Yes, absolutely. We build our solutions with modern API architectures, allowing seamless integration with popular tools like SAP, Oracle, QuickBooks, Shopify, and other third-party CRM or warehouse management systems (WMS).
                    </div>
                </details>

                <details class="group bg-white border border-slate-200 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none font-bold text-slate-900 text-lg">
                        <span>Do you provide a mobile app for drivers?</span>
                        <span class="transition group-open:rotate-180 text-blue-500 ">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed">
                        Yes. We develop native or cross-platform mobile apps for your delivery agents. The app allows them to receive route assignments, navigate using GPS, collect digital signatures, take photos of delivered items, and communicate with dispatch.
                    </div>
                </details>

                <details class="group bg-white border border-slate-200 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none font-bold text-slate-900 text-lg">
                        <span>Is the platform scalable as our fleet grows?</span>
                        <span class="transition group-open:rotate-180 text-blue-500 ">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed">
                        We host our logistics software on highly scalable cloud infrastructure (like AWS or Google Cloud). Whether you are managing 10 vehicles or scaling up to 1,000+, the system will automatically handle the increased data load without performance drops.
                    </div>
                </details>

                <details class="group bg-white border border-slate-200 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none font-bold text-slate-900 text-lg">
                        <span>Do you provide ongoing support and maintenance (AMC)?</span>
                        <span class="transition group-open:rotate-180 text-blue-500 ">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed">
                        Yes, we offer comprehensive Annual Maintenance Contracts (AMC). This includes 24/7 server monitoring, security patching, regular database backups, bug fixes, and continuous technical support to ensure your business experiences zero downtime.
                    </div>
                </details>

            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false, // Turn off prev/next buttons
                dots: true, // Turn on dots pagination
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1 // 1 item on mobile
                    },
                    600: {
                        items: 2 // 2 items on tablets
                    },
                    1000: {
                        items: 3 // 4 items on desktop
                    }
                }
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    </script>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>