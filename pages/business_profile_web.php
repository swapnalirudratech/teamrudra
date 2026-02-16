<?php
$page_title = "biseness-profile";

?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>


    <!-- Hero Section -->
    <section class="relative w-full h-[90vh] max-md:h-[70vh] flex items-center justify-center overflow-hidden bg-gray-900">

        <div class="absolute inset-0">
            <img src="/asset/businesspro.jpg" alt="Business Profile Background"
                class="w-full h-full object-cover object-center scale-105 animate-[pulse_10s_ease-in-out_infinite]" />

            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/80 via-slate-900/60 to-black/90"></div>
        </div>

        <div class="relative z-20 text-center px-6 sm:px-8 md:px-12 max-w-4xl mx-auto flex flex-col items-center">

            <div class="mb-6 max-md:hidden inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-600/20 border border-blue-500/30 backdrop-blur-sm">
                <i class="fas fa-check-circle text-blue-400 text-xs"></i>
                <span class="text-xs font-bold text-blue-100 uppercase tracking-widest">Professional Identity</span>
            </div>

            <h1 class="text-white font-extrabold tracking-tight leading-tight drop-shadow-2xl
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl mb-6">
                Business Profile <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">
                    Website Design
                </span>
            </h1>

            <p class="text-gray-300 max-md:hidden text-base sm:text-lg md:text-xl max-w-2xl mx-auto drop-shadow-md leading-relaxed mb-10 font-light">
                First impressions are important. Enhance your brand with a modern, online headquarters that instills confidence and fosters client interaction.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                <a href="/get-in-touch"
                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 
                       text-white font-bold text-base px-8 py-4 rounded-full 
                       shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_30px_rgba(37,99,235,0.6)] 
                       transition-all duration-300 transform hover:-translate-y-1">
                    Establish Your Brand
                </a>

                <a href="/portfolio"
                    class="inline-flex items-center justify-center px-8 py-4 text-white border border-white/20 rounded-full 
                       hover:bg-white/10 backdrop-blur-md transition-all duration-300">
                    View Samples
                </a>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="relative py-24 max-lg:py-16 bg-white w-full">
        <div class="container mx-auto w-[80%] max-lg:w-[85%]">
            <div class="flex items-center mb-12 max-lg:mb-4">
                <div class="w-16 h-0.5 bg-blue-600 mr-4"></div>
                <h2 class="text-3xl font-medium">Business Profile Website Features</h2>
            </div>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                At <span class="text-blue-600 font-semibold">RudraTech</span>,we create beautiful business profile websites that represent your brand, your vision, and your professionalism. Whether it is a new business or an existing one, our websites are designed to make a statement.
            </p>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                Our team is dedicated to responsive design, fast loading, and brand-oriented layouts to ensure a smooth user experience on all devices. Each page is designed to convey your value to clients and partners.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-lg:gap-2">
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Responsive Design</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Designed for mobile, tablet, and computer viewing.</p>
                </div>
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Fast & Lightweight</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Quick-loading pages for improved SEO and user experience.</p>
                </div>
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Brand-Oriented UI</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Custom layouts that match your business identity.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24 bg-gray-50 overflow-hidden">
        <div class="w-[80%] max-lg:w-full mx-auto px-6 lg:px-8">

            <div class="w-full mb-16 flex max-lg:flex-col justify-between md:gap-16">
                <div class="max-w-2xl">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-6">
                        Solutions crafted for <br>
                        <span class="text-blue-600 relative inline-block">
                            Business Growth
                            <svg class="absolute w-full h-3 -bottom-1 left-0 text-blue-200 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="none" />
                            </svg>
                        </span>
                    </h2>
                </div>
                <div class="max-w-2xl">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        RudraTech IT Services develops high-performance digital ecosystems. We don't just build websites; we build your digital identity.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                <div class="space-y-8 lg:space-y-12">
                    <div class="group relative bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity transform group-hover:scale-110 duration-500">
                            <img src="https://img.icons8.com/ios-filled/100/000000/rocket--v1.png" class="w-32 h-32" alt="Watermark" />
                        </div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <img src="https://img.icons8.com/ios-filled/50/currentcolor/rocket--v1.png" class="w-7 h-7" alt="Icon" />
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Digital Marketing</h3>
                            <p class="text-gray-500 mb-6">Targeted campaigns and SEO plans designed to dominate your market.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-blue-500 mr-3"></span> SEO & Visibility
                                </li>
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-blue-500 mr-3"></span> Social Media Mgmt
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="group relative bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity transform group-hover:scale-110 duration-500">
                            <img src="https://img.icons8.com/ios-filled/100/000000/combo-chart--v1.png" class="w-32 h-32" alt="Watermark" />
                        </div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                                <img src="https://img.icons8.com/ios-filled/50/currentcolor/combo-chart--v1.png" class="w-7 h-7" alt="Icon" />
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Plan Implementation</h3>
                            <p class="text-gray-500 mb-6">Agile methodologies and result-oriented execution strategies.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-purple-500 mr-3"></span> Strategic Launch
                                </li>
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-purple-500 mr-3"></span> Agile Development
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-8 lg:space-y-12 md:mt-24">
                    <div class="group relative bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity transform group-hover:scale-110 duration-500">
                            <img src="https://img.icons8.com/ios-filled/100/000000/clipboard.png" class="w-32 h-32" alt="Watermark" />
                        </div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center mb-6 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <img src="https://img.icons8.com/ios-filled/50/currentcolor/clipboard.png" class="w-7 h-7" alt="Icon" />
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Business Management</h3>
                            <p class="text-gray-500 mb-6">Workflow integration and scalable solutions for effortless expansion.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-emerald-500 mr-3"></span> Workflow Automation
                                </li>
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-emerald-500 mr-3"></span> Task Management
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="group relative bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity transform group-hover:scale-110 duration-500">
                            <img src="https://img.icons8.com/ios-filled/100/000000/source-code.png" class="w-32 h-32" alt="Watermark" />
                        </div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                                <img src="https://img.icons8.com/ios-filled/50/currentcolor/source-code.png" class="w-7 h-7" alt="Icon" />
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Web Development</h3>
                            <p class="text-gray-500 mb-6">Secure, scalable code structure optimized for speed and SEO.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-indigo-500 mr-3"></span> Responsive Design
                                </li>
                                <li class="flex items-center text-sm font-medium text-gray-700">
                                    <span class="w-6 h-px bg-indigo-500 mr-3"></span> Speed Optimization
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Project Spotlight</h2>
                <h3 class="text-4xl font-extrabold text-gray-900">Innovation in Every Pixel</h3>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                <div class="w-full lg:w-1/4 space-y-12 text-right order-2 lg:order-1">
                    <div class="group">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">Modern UI/UX</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We design interfaces that are not only beautiful but conversion-focused, ensuring your users stay engaged.
                        </p>
                    </div>
                    <div class="group">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">Lightning Speed</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Optimized with Tailwind CSS and clean JS to ensure 99+ Core Web Vital scores for better SEO ranking.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-2/4 order-1 lg:order-2">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-blue-100 rounded-full blur-3xl opacity-30 group-hover:opacity-50 transition duration-1000"></div>

                        <div class="relative bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden transform group-hover:scale-[1.02] transition duration-500">

                            <div class="bg-gray-100 px-4 py-3 flex items-center gap-1.5 border-b border-gray-200">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                                <div class="ml-4 bg-white h-5 w-full rounded-md border border-gray-200 flex items-center px-2">
                                    <div class="w-2 h-2 rounded-full bg-gray-200 mr-2"></div>
                                    <div class="h-1.5 w-24 bg-gray-100 rounded"></div>
                                </div>
                            </div>

                            <div class="aspect-video bg-slate-900 flex items-center justify-center overflow-hidden">
                                <video
                                    class="w-full h-full object-cover"
                                    autoplay
                                    loop
                                    muted
                                    playsinline>
                                    <source src="/asset/software/madasky-v.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            <div class="bg-white border-t border-gray-50 px-4 py-2 flex justify-between items-center">
                                <span class="text-[10px] font-bold text-blue-600 uppercase tracking-tighter">Live Preview: RudraTech Admin</span>
                                <div class="flex gap-2">
                                    <div class="h-1.5 w-1.5 rounded-full bg-green-500 animate-pulse"></div>
                                    <span class="text-[10px] text-gray-400">System Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4 space-y-12 text-left order-3">
                    <div class="group">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">SEO Ready</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Built-in semantic HTML structure to make your business easily discoverable on Google and Bing.
                        </p>
                    </div>
                    <div class="group">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">Admin Control</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Every website we build comes with a custom dashboard to manage your content without touching a line of code.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white overflow-hidden">
        <div class="w-[80%] mx-auto ">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                <div class="lg:w-2/5 space-y-8">
                    <div>
                        <h2 class="text-blue-600 font-bold tracking-[0.2em] uppercase text-xs mb-4">Why Businesses Choose Us</h2>
                        <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-6">
                            Websites That <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Convert Visitors</span> Into Customers.
                        </h3>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            We don't just build websites; we build high-performance business engines designed to dominate your local market.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex gap-5 group items-center">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Ultra-Fast Loading</h4>
                                <p class="text-slate-500 text-sm font-medium">Core Web Vitals optimized for instant browsing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/5 w-full relative">
                    <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-80 h-80 bg-blue-100 rounded-full blur-[100px] opacity-60"></div>

                    <div class="swiper business-carousel p-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rounded-3xl shadow-2xl border-[10px] border-white overflow-hidden ">
                                    <img src="/asset/software/weldfb.jpg" class="w-full h-auto" alt="Business Website Portfolio">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rounded-3xl shadow-2xl border-[10px] border-white overflow-hidden ">
                                    <img src="/asset/software/madsky.jpg" class="w-full h-auto" alt="Premium Business UI">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rounded-3xl shadow-2xl border-[10px] border-white overflow-hidden ">
                                    <img src="/asset/software/wadmin.png" class="w-full h-auto" alt="Admin Dashboard">
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-4 mt-12 justify-center lg:justify-start">
                            <div class="swiper-prev bg-slate-900 text-white w-12 h-12 rounded-full flex items-center justify-center cursor-pointer hover:bg-blue-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </div>
                            <div class="swiper-next bg-slate-900 text-white w-12 h-12 rounded-full flex items-center justify-center cursor-pointer hover:bg-blue-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto ">

            <div class="mb-16">
                <span class="inline-block px-4 py-1 mb-6 text-xs font-bold tracking-widest text-blue-600 uppercase bg-blue-50 rounded-full">
                    The Future of Business, Now
                </span>
                <h3 class="text-2xl md:text-5xl font-bold text-slate-900 leading-tight mb-8">
                    Our <span class="text-blue-600">Business Website</span> Creative Process <br /> From Vision to Launch.
                </h3>
                <p class=" text-slate-500 max-w-3xl leading-relaxed">
                    We blend cutting-edge design with complex logic to build storefronts that scale. At RudraTech IT Services, we design scalable platforms tailored to your business goals.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/1.jpeg" class="w-full h-full object-cover " alt="Strategy">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-bold  text-slate-950 shadow-lg">01</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-bold  text-slate-950 mb-2 uppercase tracking-tighter">Strategy & Discovery</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Understanding your brand and market to lay a high-conversion foundation.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/2.jpeg" class="w-full h-full object-cover " alt="UI Design">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-bold  text-slate-950 shadow-lg">02</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-bold  text-slate-950 mb-2 uppercase tracking-tighter">UI/UX & Design</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Crafting intuitive interfaces engineered with Tailwind CSS for rapid mobile deployment.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/3.jpeg" class="w-full h-full object-cover " alt="PHP Dev">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-bold  text-slate-950 shadow-lg">03</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-bold  text-slate-950 mb-2 uppercase tracking-tighter">Logic & Development</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Implementing secure custom PHP frameworks and API integrations for enterprise scale.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/4.jpg" class="w-full h-full object-cover " alt="Launch">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-bold  text-slate-950 shadow-lg">04</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-bold  text-slate-950 mb-2 uppercase tracking-tighter">Launch & Growth</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Post-launch SEO optimization and continuous technical support for global success.</p>
                    </div>
                </div>

            </div>
            <div class="mt-24 max-md:mt-12 text-center">
                <a href="/portfolio" class="inline-flex items-center gap-4 group">
                    <span class="text-xs font-bold  uppercase tracking-[0.3em] text-slate-950 border-b-2 border-slate-950 pb-1 group-hover:text-blue-600 group-hover:border-blue-600 transition-all">View Our Portfolio</span>
                    <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-16 bg-white font-sans">
        <div class="w-[80%] mx-auto ">
            <div class="flex items-end gap-4 mb-20 max-md:mb-12">
                <span class="text-8xl max-md:text-6xl font-black text-blue-600 leading-none">05</span>
                <div>
                    <h2 class="text-4xl md:text-6xl font-extrabold text-gray-900 tracking-tighter">Business Portals</h2>
                    <p class="text-2xl max-md:text-lg font-serif italic text-gray-500">
                        Explore <span class="text-blue-600 font-sans not-italic font-bold">our corporate & industrial work</span>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <div class="group">
                    <a href="preview-page.php?project=madasky" target="_blank" class="block bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-500 hover:-translate-y-3 hover:shadow-blue-900/10">
                        <div class="h-[500px] overflow-hidden bg-slate-50">
                            <img src="/asset/software/madasky1.png" class="w-full h-full object-cover object-top " alt="Madasky Business Website">
                        </div>
                    </a>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tighter">Madasky</h4>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">Consulting & Services</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </span>
                    </div>
                </div>

                <div class="group">
                    <a href="preview-page.php?project=weldfab" target="_blank" class="block bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-500 hover:-translate-y-3 hover:shadow-blue-900/10">
                        <div class="h-[500px] overflow-hidden bg-slate-50">
                            <img src="/asset/software/weldfab1.png" class="w-full h-full object-cover object-top " alt="Weldfab Tech Times">
                        </div>
                    </a>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tighter">Weldfab Tech</h4>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">Industrial Media</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </span>
                    </div>
                </div>



                <div class="group">
                    <a href="preview-page.php?project=aartha" target="_blank" class="block bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-500 hover:-translate-y-3 hover:shadow-blue-900/10">
                        <div class="h-[500px] overflow-hidden bg-slate-50">
                            <img src="/asset/software/aartha.png" class="w-full h-full object-cover object-top " alt="Aartha Wealth Management">
                        </div>
                    </a>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tighter">Aartha</h4>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">Financial Services</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </span>
                    </div>
                </div>

                <div class="group">
                    <a href="preview-page.php?project=stallion-wealth" target="_blank" class="block bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-500 hover:-translate-y-3 hover:shadow-blue-900/10">
                        <div class="h-[500px] overflow-hidden bg-slate-50">
                            <img src="/asset/software/stallion.png" class="w-full h-full object-cover object-top " alt="Stallion Wealth Management">
                        </div>
                    </a>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tighter">Stallion Wealth</h4>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">Wealth Advisory</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </span>
                    </div>
                </div>

                <div class="group">
                    <a href="preview-page.php?project=fbmto" target="_blank" class="block bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-500 hover:-translate-y-3 hover:shadow-blue-900/10">
                        <div class="h-[500px] overflow-hidden bg-slate-50">
                            <img src="/asset/software/fbmto.png" class="w-full h-full object-cover object-top " alt="FBMTO Business Portal">
                        </div>
                    </a>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tighter">FBMTO</h4>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">E-Commerce & Retail</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 bg-white border-t border-slate-100">
        <div class="w-[85%] mx-auto">
            <div class="relative bg-slate-900 rounded-[3rem] p-10 md:p-16 overflow-hidden shadow-2xl shadow-blue-900/20">

                <div class="absolute top-0 right-0 w-80 h-80 bg-blue-600/15 rounded-full blur-[100px] -mr-40 -mt-40"></div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-10">

                    <div class="max-w-xl text-center lg:text-left">
                        <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                            Let’s Build a Website That <span class="text-blue-400">Works for Your Business.</span>
                        </h3>
                        <p class="text-slate-400 text-lg font-medium leading-relaxed">
                            Partner with **RudraTech IT Services** to transform your digital presence into a high-performance growth engine.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full lg:w-auto">
                        <a href="/get-in-touch"
                            class="flex-1 lg:flex-none px-10 py-5 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-500 transition-all transform hover:-translate-y-1 shadow-lg shadow-blue-600/40 text-center">
                            Establish Your Brand
                        </a>

                    </div>

                </div>
            </div>


        </div>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.business-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            // This creates the sliding motion you want
            speed: 800,
            effect: 'slide',
        });
    </script>



    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>