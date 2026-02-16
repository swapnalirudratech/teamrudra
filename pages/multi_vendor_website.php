<?php
$page_title = "multivendor-website";


?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>




<style>
    /* Premium Dot Styling */
    .process-carousel .owl-dots {
        margin-top: 40px !important;
    }

    .process-carousel .owl-dot span {
        width: 12px !important;
        height: 12px !important;
        background: #e2e8f0 !important;
        transition: all 0.3s ease;
    }

    .process-carousel .owl-dot.active span {
        width: 30px !important;
        background: #2563eb !important;
    }
</style>


<body>

    <?php include "include/navbar.php" ?>

    <section class="relative w-full h-[90vh] max-md:h-auto max-md:py-20 max-md:py-10  flex items-center justify-center overflow-hidden bg-gray-900">

        <div class="absolute inset-0">
            <img src="/asset/image/w4.jpg" alt="Multi-Vendor Website Development Mumbai"
                class="w-full h-full object-cover object-center scale-105 animate-[pulse_10s_ease-in-out_infinite]" />

            <div class="absolute inset-0 bg-gradient-to-b from-blue-900/30 via-black/30 to-black/50 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <div class="relative z-20 text-center w-[70%] max-md:w-[85%] mx-auto flex flex-col items-center">

            <span class="max-md:text-xs mb-4 inline-block rounded-full bg-blue-500/20 px-4 py-1.5 text-sm font-semibold text-blue-300 border border-blue-500/30 backdrop-blur-sm uppercase tracking-wider">
                Custom Multi-Vendor Website Development in Mumbai
            </span>

            <h1 class="text-white font-extrabold tracking-tight leading-tight drop-shadow-2xl text-2xl sm:text-5xl md:text-6xl lg:text-7xl mb-6">
                Build Powerful <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-400">Multi-Vendor Marketplaces</span> That Scale Your Business
            </h1>

            <p class=" max-md:text-xs text-gray-200   drop-shadow-md leading-relaxed mb-6">
                Launch your own Amazon-like marketplace with secure vendor panels, smart commission systems, and seamless customer experiences. At RudraTech IT Services, we design scalable multi-vendor platforms tailored to your business goals.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-10 text-white/90  text-[12px] font-medium">
                <div class="flex items-center gap-2"><span class="text-blue-400">✔</span> Vendor Dashboard</div>
                <div class="flex items-center gap-2"><span class="text-blue-400">✔</span> Admin Control Panel</div>
                <div class="flex items-center gap-2"><span class="text-blue-400">✔</span> Payment Gateway Integration</div>
                <div class="flex items-center gap-2"><span class="text-blue-400">✔</span> Mobile-Responsive Design</div>
                <div class="flex items-center gap-2"><span class="text-blue-400">✔</span> SEO-Optimized Architecture</div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/get-in-touch"
                    class="max-md:text-xs inline-flex items-center justify-center bg-blue-500 hover:bg-blue-400 
                   text-white font-bold text-base sm: px-8 py-4 rounded-full 
                   shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:shadow-[0_0_30px_rgba(59,130,246,0.6)] 
                   transition-all duration-300 ease-in-out transform hover:-translate-y-1 ">
                    👉 Start Your Marketplace Today
                </a>
            </div>
        </div>
    </section>







    <!-- <section class="py-20 max-md:py-10  max-lg:py-12 bg-white border-t border-gray-300">
        <div class="container mx-auto w-[80%] max-md:w-[85%]  max-lg:w-[85%]">
            <div class="flex items-center justify-center mb-16 max-lg:mb-4">
                <div class="w-16 h-0.5 bg-blue-600 mr-4 max-md:hidden"></div>
                <h2 class="text-3xl font-medium max-lg:text-2xl max-md:text-center">Multivendor Design Complexity</h2>
                <div class="w-16 h-0.5 bg-blue-600 ml-4 max-md:hidden"></div>
            </div>

            <div class="max-w-4xl mx-auto text-center mb-16 max-lg:mb-8">
                <p class="text-gray-800 text-base">The complexity of your marketplace design directly influences the cost. Different levels of design complexity are outlined below:</p>
            </div>

            <div class="grid max-md:grid-cols-1 max-lg:grid-cols-1 grid-cols-3 gap-1  mb-16 max-lg:gap-4">

                <div class="group overflow-hidden max-lg:flex max-md:flex-col ">
                    <img src="/asset/basic.jpg" alt="Basic Design" class="w-full h-80 max-md:h-40 max-lg:w-1/2  max-md:w-full object-cover transform scale-110 group-hover:scale-100 transition duration-500">
                    <div class="flex flex-col justify-end p-8 bg-black text-white max-lg:w-1/2  max-md:w-full max-lg:justify-center max-lg:items-center max-lg:text-center">
                        <h3 class="text-2xl font-medium mb-2">Basic Design</h3>
                        <p class="text-gray-400 mb-4">Simple marketplace setup with basic templates and vendor management</p>


                        <div class="w-0 group-hover:w-full h-1 bg-blue-600 transition-all duration-300 mt-4"></div>
                    </div>
                </div>


                <div class="group overflow-hidden max-lg:flex max-md:flex-col ">
                    <img src="/asset/moderate.jpg" alt="Moderate Design" class="w-full h-80 max-md:h-40 max-lg:w-1/2  max-md:w-full object-cover transform scale-110 group-hover:scale-100 transition duration-500">
                    <div class="flex flex-col justify-end p-8 bg-black text-white max-lg:w-1/2  max-md:w-full max-lg:justify-center max-lg:items-center max-lg:text-center">
                        <h3 class="text-2xl font-medium mb-2">Moderate Design</h3>
                        <p class="text-gray-400 mb-4">Custom designs with advanced vendor dashboards and product management</p>

                        <div class="w-0 group-hover:w-full h-1 bg-blue-600 transition-all duration-300 mt-4"></div>
                    </div>
                </div>


                <div class="group overflow-hidden max-lg:flex max-md:flex-col ">
                    <img src="/asset/advance.jpg" alt="Advanced Design" class="w-full h-80 max-md:h-40 max-lg:w-1/2  max-md:w-full object-cover transform scale-110 group-hover:scale-100 transition duration-500">
                    <div class="flex flex-col justify-end p-8 bg-black text-white max-lg:w-1/2  max-md:w-full max-lg:justify-center max-lg:items-center max-lg:text-center">

                        <h3 class="text-2xl font-medium mb-2">Advanced Design</h3>
                        <p class="text-gray-400 mb-4">Highly interactive marketplace with custom features, advanced analytics, and integrations</p>

                        <div class="w-0 group-hover:w-full h-1 bg-blue-600 transition-all duration-300 mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="py-20 max-md:py-10  bg-white ">
        <div class="w-[80%] max-md:w-[85%]  mx-auto ">

            <div class="grid lg:grid-cols-2 gap-16 items-center max-md:gap-4">

                <div class="relative max-md:order-2">
                    <img src="/asset/software/multivendor1.png" alt="Multi-Vendor Marketplace Ecosystem"
                        class="relative z-10 rounded-2xl shadow-2xl w-full object-cover h-[500px] max-md:h-[300px]" />
                </div>

                <div class="space-y-8">
                    <div>

                        <h3 class="text-2xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                            What Is a <span class="text-blue-500">Multi-Vendor</span> Website?
                        </h3>
                    </div>

                    <p class=" text-gray-600 leading-relaxed">
                        A multi-vendor website is an online marketplace where multiple sellers can register, list products or services, manage orders, and receive payments — all under one centralized platform.
                    </p>

                    <div class="space-y-4">
                        <h4 class="font-bold text-gray-800 ">Think of platforms where:</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-gray-700">
                                <span class="text-blue-500 font-bold">✔</span> Vendors manage their own inventory
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <span class="text-blue-500 font-bold">✔</span> Customers browse from multiple sellers
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <span class="text-blue-500 font-bold">✔</span> Admin controls commissions & approvals
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <span class="text-blue-500 font-bold">✔</span> Payments are split automatically
                            </li>
                        </ul>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <h4 class="font-bold text-gray-900 mb-4 ">We build custom multi-vendor websites for:</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700 text-sm font-medium border border-gray-200">E-commerce marketplaces</span>
                            <span class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700 text-sm font-medium border border-gray-200">Service aggregators</span>
                            <span class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700 text-sm font-medium border border-gray-200">B2B platforms</span>
                            <span class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700 text-sm font-medium border border-gray-200">Digital product portals</span>
                            <span class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700 text-sm font-medium border border-gray-200">Local business marketplaces</span>
                        </div>
                    </div>

                    <p class="text-blue-600 font-bold text-sm italic">
                        Every solution is fully scalable, secure, and SEO-ready.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-20 max-md:py-12 bg-gray-50 overflow-hidden">
        <div class="w-[80%] max-md:w-[85%]  mx-auto ">

            <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-16 border-b border-gray-100 pb-12">
                <div class="max-w-2xl">
                    <h2 class="text-blue-600 font-bold tracking-[0.2em] uppercase text-xs mb-4">Development Excellence</h2>
                    <h3 class="text-2xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-6">
                        Why Choose Our Multi-Vendor Development Services?
                    </h3>
                    <p class=" text-slate-600 font-medium">
                        Your Trusted Multi-Vendor Website Developers in Mumbai
                    </p>
                </div>
                <div class="hidden lg:block">
                    <p class="text-slate-400 text-sm max-w-lg text-left leading-relaxed">
                        We don’t use cookie-cutter templates. Every marketplace is built from scratch to match your workflow.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-md:gap-4 max-md:text-sm">

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Custom Vendor Registration System</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Advanced Admin Dashboard</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Commission & Revenue Management</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Razorpay / Stripe / PayPal Integration</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Product Approval Workflow</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Order & Return Management</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Mobile Responsive UI</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Speed-Optimized Architecture</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

                <div class="group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h4 class=" font-bold text-slate-800">Search Engine Friendly Code</h4>
                    </div>
                    <div class="h-[1px] w-full bg-gray-100 group-hover:bg-blue-200 transition-colors"></div>
                </div>

            </div>

            <div class="max-md:hidden mt-20 p-8 rounded-3xl bg-slate-900 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl shadow-blue-200">
                <div class="flex items-center gap-6 text-white">
                    <div class="h-16 w-16 bg-blue-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold">Lifetime Technical Support</h4>
                        <p class="text-slate-400">We stand by our code forever. Launch with absolute confidence.</p>
                    </div>
                </div>
                <p class="text-white  font-medium italic text-center md:text-right max-w-sm">
                    "Whether you’re launching a startup marketplace or upgrading an enterprise platform — we deliver."
                </p>
            </div>

        </div>
    </section>




    <section class="py-20 max-md:py-12 bg-white overflow-hidden">
        <div class="w-[80%] max-md:w-[85%]  mx-auto ">

            <div class="flex flex-col lg:flex-row items-center gap-12 mb-20 max-md:gap-6 max-md:mb-6">
                <div class="lg:w-1/2">
                    <h2 class="text-blue-600 font-bold tracking-[0.2em] uppercase text-xs mb-4">Marketplace Architecture</h2>
                    <h3 class="text-2xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                        Core Features of Our <br /> Multi-Vendor Platforms
                    </h3>
                    <p class=" text-slate-500 max-w-xl leading-relaxed">
                        Powerful Marketplace Capabilities designed for scale, security, and seamless management.
                    </p>
                </div>


            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-20 max-md:text-xs max-md:gap-2 max-md:mb-6">

                <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-white shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                    <div class="h-14 w-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-6">Admin Panel</h4>
                    <ul class="space-y-4 max-md:space-y-2 text-slate-600">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Vendor approval</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Commission control</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Sales analytics</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> User management</li>
                    </ul>
                </div>

                <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-white shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                    <div class="h-14 w-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-6">Vendor Panel</h4>
                    <ul class="space-y-4 max-md:space-y-2 text-slate-600">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Product upload</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Order tracking</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Earnings dashboard</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Inventory management</li>
                    </ul>
                </div>

                <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-white shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                    <div class="h-14 w-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-6">Customer Experience</h4>
                    <ul class="space-y-4 max-md:space-y-2 text-slate-600">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Advanced search & filters</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Wishlist & cart</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Secure checkout</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Real-time order tracking</li>
                    </ul>
                </div>

                <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-white shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                    <div class="h-14 w-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                        <i class="fas fa-laptop-code text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-6">Technology Stack</h4>
                    <ul class="space-y-4 max-md:space-y-2 text-slate-600">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> PHP / Laravel / Node</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Custom CMS</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> REST APIs</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> Cloud Hosting Ready</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-blue-500 text-sm"></i> SEO-optimized structure</li>
                    </ul>
                </div>
            </div>

            <div class="bg-slate-900 rounded-[3rem] p-12 max-md:p-6 relative overflow-hidden">

                <div class="absolute top-0 right-0 text-[10rem] max-md:text-[5rem] font-black text-white/[0.03] leading-none pointer-events-none select-none">
                    CODE
                </div>

                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-12 max-md:gap-6 w-2/3 max-md:w-full">

                    <div class="text-center md:text-left max-md:w-full">
                        <h4 class="text-white text-3xl max-md:text-xl font-bold mb-3">
                            Ready to Build Your Marketplace?
                        </h4>

                        <p class="text-slate-400 max-md:text-sm">
                            Transform your business idea into a scalable multi-vendor reality with our expert team in Mumbai.
                        </p>
                    </div>

                    <div class="flex shrink-0 max-md:w-full max-md:justify-center">
                        <a href="/get-in-touch"
                            class="group flex items-center gap-3 bg-white px-8 py-4 max-md:px-6 max-md:py-3 rounded-full text-slate-900 font-bold shadow-lg hover:bg-blue-500 hover:text-white transition-all duration-500 transform hover:-translate-y-1">

                            <span>Get Started</span>

                            <div class="bg-blue-500 group-hover:bg-white w-8 h-8 rounded-full flex items-center justify-center text-white group-hover:text-blue-500 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 max-md:py-10 bg-white overflow-hidden">
        <div class="w-[80%] max-md:w-[85%]  mx-auto ">

            <div class="text-center max-w-3xl mx-auto mb-16 max-md:mb-6">
                <h2 class="text-blue-600 font-bold tracking-[0.2em] uppercase text-xs mb-4">Strategic Workflow</h2>
                <h3 class="text-2xl md:text-5xl font-extrabold text-slate-900 mb-6">Our Multi-Vendor Development Process</h3>
                <p class=" text-slate-500 font-medium">Simple. Transparent. Result-Driven.</p>
            </div>

            <div class="owl-carousel owl-theme process-carousel">

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500 h-full">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-blue-200">1</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">Requirement Analysis</h4>
                        <p class="text-slate-500 text-sm">Deep dive into your business goals.</p>
                    </div>
                </div>

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-full transition-all duration-500">
                        <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-slate-200">2</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">UI/UX Design</h4>
                        <p class="text-slate-500 text-sm">Crafting intuitive user journeys.</p>
                    </div>
                </div>

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-full transition-all duration-500">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-blue-200">3</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">Development & Integration</h4>
                        <p class="text-slate-500 text-sm">Building core marketplace logic.</p>
                    </div>
                </div>

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-full transition-all duration-500">
                        <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-slate-200">4</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">Testing & Security Audit</h4>
                        <p class="text-slate-500 text-sm">Ensuring bug-free performance.</p>
                    </div>
                </div>

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-full transition-all duration-500">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-blue-200">5</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">Deployment</h4>
                        <p class="text-slate-500 text-sm">Launching to the live server.</p>
                    </div>
                </div>

                <div class="item p-4">
                    <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-full transition-all duration-500">
                        <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-3xl font-black mb-8 shadow-lg shadow-slate-200">6</div>
                        <h4 class="text-2xl max-md:text-xl font-bold text-slate-900 mb-4 tracking-tight">Post-Launch Support</h4>
                        <p class="text-slate-500 text-sm">Ongoing maintenance and updates.</p>
                    </div>
                </div>

            </div>

            <div class="max-md:mt-6 mt-20 p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 flex flex-col md:flex-row items-center justify-center gap-8 text-center md:text-left">
                <div class="flex -space-x-4 overflow-hidden">
                    <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-blue-600 flex items-center justify-center text-white"><i class="fas fa-file-alt"></i></div>
                    <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-slate-900 flex items-center justify-center text-white"><i class="fas fa-graduation-cap"></i></div>
                    <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-blue-400 flex items-center justify-center text-white"><i class="fas fa-tools"></i></div>
                </div>
                <p class="text-slate-700  font-semibold">
                    You get <span class="text-blue-600 underline decoration-blue-200 underline-offset-4">full documentation</span>, training, and ongoing maintenance.
                </p>
            </div>
        </div>
    </section>

    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/asset/software/1.jpeg" alt="Background" class="w-full h-full object-cover" />

            <div class="absolute inset-0 bg-gradient-to-r max-md:bg-gradient-to-b from-white via-white/20 max-md:via-white/50  to-transparent"></div>
        </div>

        <div class="relative z-10 w-[80%] max-md:w-[85%]  mx-auto ">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <div class="lg:w-1/3">
                    <h2 class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3">Target Audience</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                        Who Should Use Multi-Vendor Websites?
                    </h3>
                    <p class="text-slate-900 font-medium italic leading-relaxed">
                        If you want multiple sellers on one platform, this solution is for you.
                    </p>
                </div>

                <div class="lg:w-2/3 grid grid-cols-2 md:grid-cols-3 gap-4 ">
                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Startup founders</span>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Retail aggregators</span>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Service providers</span>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Local business networks</span>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Wholesale marketplaces</span>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 backdrop-blur-md border border-white shadow-sm flex items-center gap-4 hover:bg-blue-600 hover:text-white group transition-all duration-300">
                        <span class="text-blue-500 group-hover:text-white font-bold ">✔</span>
                        <span class="font-bold text-slate-800 group-hover:text-white text-xs md:text-base transition-colors">Digital entrepreneurs</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-20 max-md:py-10  bg-white ">
        <div class="w-[80%] max-md:w-[85%]  mx-auto ">

            <div class="mb-12 max-md:mb-3">
                <h3 class="text-2xl md:text-5xl font-bold text-[#111827] tracking-tight mb-2">
                    Success Stories
                </h3>
                <p class=" text-gray-600 font-semibold">
                    Completed Multi-Vendor Projects: Real Marketplaces Built by Our Team
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-md:text-sm">

                <div class="bg-white rounded-[2rem] p-5 shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-2">
                    <div class="rounded-[1.5rem] overflow-hidden mb-8 h-72 max-md:h-40 bg-gray-100">
                        <img src="/asset/software/m1.avif" alt="Local Grocery Marketplace" class="w-full h-full object-cover" />
                    </div>
                    <div class="px-2 pb-4 max-md:pb-0">
                        <h4 class="text-2xl max-md:text-lg font-bold text-[#111827] mb-3"> Local Grocery Marketplace</h4>
                        <div class="text-gray-500 leading-relaxed mb-8 space-y-1">
                            <p><strong class="text-gray-700">Industry:</strong> Grocery Delivery</p>
                            <p><strong class="text-gray-700">Features:</strong> Vendor dashboard, live inventory, payment gateway, order tracking</p>
                            <p class="mt-4 p-3 bg-blue-50 rounded-xl border border-blue-100 text-blue-800">
                                <strong class="text-blue-900">Result:</strong> 3× increase in vendor onboarding within 60 days
                            </p>
                        </div>

                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-5 shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-2">
                    <div class="rounded-[1.5rem] overflow-hidden mb-8 h-72 max-md:h-40 bg-gray-100">
                        <img src="/asset/software/m2.jpeg" alt="Medical Equipment Marketplace" class="w-full h-full object-cover" />
                    </div>
                    <div class="px-2 pb-4 max-md:pb-0">
                        <h4 class="text-2xl max-md:text-lg font-bold text-[#111827] mb-3"> Medical Equipment Marketplace</h4>
                        <div class="text-gray-500 leading-relaxed mb-8 space-y-1">
                            <p><strong class="text-gray-700">Industry:</strong> Healthcare</p>
                            <p><strong class="text-gray-700">Features:</strong> Multi-seller product catalog, quotation system, admin analytics</p>
                            <p class="mt-4 p-3 bg-blue-50 rounded-xl border border-blue-100 text-blue-800">
                                <strong class="text-blue-900">Result:</strong> Reduced manual order processing by 70%
                            </p>
                        </div>

                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-5 shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-transform duration-300 hover:-translate-y-2">
                    <div class="rounded-[1.5rem] overflow-hidden mb-8 h-72 max-md:h-40 bg-gray-100">
                        <img src="/asset/software/m3.jpeg" alt="Fashion Multi-Vendor Store" class="w-full h-full object-cover" />
                    </div>
                    <div class="px-2 pb-4 max-md:pb-0">
                        <h4 class="text-2xl max-md:text-lg font-bold text-[#111827] mb-3"> Fashion Multi-Vendor Store</h4>
                        <div class="text-gray-500 leading-relaxed mb-8 space-y-1">
                            <p><strong class="text-gray-700">Industry:</strong> Apparel</p>
                            <p><strong class="text-gray-700">Features:</strong> Seller commissions, coupon system, mobile-friendly UI</p>
                            <p class="mt-4 p-3 bg-blue-50 rounded-xl border border-blue-100 text-blue-800">
                                <strong class="text-blue-900">Result:</strong> 40% boost in monthly sales
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12 bg-white max-md:py-0">
        <div class="w-[80%] max-md:w-[100%]  mx-auto ">
            <div class="max-md:rounded-none relative bg-slate-900 rounded-[3rem] p-16 text-center overflow-hidden shadow-3xl max-md:p-8">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-blue-600/20 rounded-full blur-3xl"></div>

                <div class="relative z-10 flex justify-between  items-center max-md:flex-col">
                    <div class="flex flex-col text-left">
                        <h3 class="text-3xl max-md:text-xl text-white font-bold mb-6 leading-tight">
                            Ready to Launch Your Own <br /> Multi-Vendor Marketplace?
                        </h3>
                        <p class="text-slate-400  mb-12 max-w-2xl mx-auto max-md:text-xs">
                            Partner with Mumbai’s trusted multi-vendor website development company and turn your idea into a revenue-generating platform.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6 max-md:gap-3">
                        <a href="/get-in-touch" class="max-md:text-xs w-full sm:w-auto px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-blue-500 hover:text-white transition-all transform hover:-translate-y-1">
                            Request Free Consultation
                        </a>
                        <a href="/get-in-touch" class="max-md:text-xs w-full sm:w-auto px-8 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-lg shadow-blue-900/50 transition-all transform hover:-translate-y-1">
                            Get Custom Quote Today
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $(".process-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>


</body>

</html>