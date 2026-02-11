<?php
$page_title = "website-designing";

include "include/header.php";

?>

<!Doctype html>
<html lang="en">

<body>

    <?php include "include/navbar.php"; ?>


    <section class="relative h-[90vh] flex items-center py-20 max-md:py-10 max-md:h-[80vh]  bg-white overflow-hidden">

        <!-- <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
            <img src="/asset/software/q.webp"
                class="w-full h-full object-cover object-center opacity-[0.2] max-md:h-[50vh]"
                alt="Background Pattern">
        </div> -->

        <div class="w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-16 md:gap-24 relative z-10 max-md:gap-0 ">

            <div class="lg:w-1/2 space-y-8  lg:text-left ">
                <div>
                    <span class="text-blue-600 font-bold uppercase tracking-[0.4em] text-[10px] mb-6 block">Premium Digital Solutions</span>
                    <h1 class="text-3xl md:text-6xl font-bold tracking-tighter text-slate-950 leading-[0.85] mb-8">
                        Crafting
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-500 italic font-light">High-Growth</span> <br>
                        Websites.
                    </h1>
                    <p class="text-slate-500 font-medium tracking-tight max-w-lg mx-auto lg:mx-0">
                        Engineered for speed and built with <strong class="text-slate-900">Tailwind CSS</strong> to ensure your business ranks #1.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 pt-6 border-t border-slate-100">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_8px_rgba(37,99,235,0.4)]"></div>
                        <span class="text-slate-900 font-bold text-xs md:text-sm tracking-tight">SEO-First Site Architecture</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_8px_rgba(37,99,235,0.4)]"></div>
                        <span class="text-slate-900 font-bold text-xs md:text-sm tracking-tight">Core Web Vital Optimization</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_8px_rgba(37,99,235,0.4)]"></div>
                        <span class="text-slate-900 font-bold text-xs md:text-sm tracking-tight">Custom UI/UX Frameworks</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_8px_rgba(37,99,235,0.4)]"></div>
                        <span class="text-slate-900 font-bold text-xs md:text-sm tracking-tight">Rapid Mobile Deployment</span>
                    </div>
                </div>

                <div class="pt-8 max-md:pt-4  flex flex-col sm:flex-row gap-6 items-center justify-start max-md:items-start">
                    <a href="/get-in-touch" class="px-10 py-5 max-md:text-xs  max-md:px-8 max-md:rounded-lg max-md:py-2  bg-slate-950 text-white rounded-2xl font-bold hover:bg-blue-600 transition-all duration-500 shadow-2xl hover:-translate-y-1">Start Free Consultation</a>
                </div>
            </div>

            <div class="lg:w-1/2 relative group w-full h-[350px]   mt-12 lg:mt-0 max-md:hidden">

                <div class="absolute top-0 right-0 w-full h-full aspect-video rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl border border-slate-100 bg-white z-10 transform transition duration-700 group-hover:-translate-y-2">
                    <img src="/asset/software/nova.jpg"
                        alt="Desktop Web Design Rudra Tech"
                        class="w-full h-full object-cover">

                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md p-4 rounded-2xl border border-white/40 shadow-xl hidden md:block">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-[8px] font-black text-slate-400 uppercase tracking-widest">Optimized</span>
                        </div>
                        <p class=" font-black text-slate-900 leading-none">98% SEO</p>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 w-[29%] aspect-[8/16] rounded-[1.3rem] md:rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-15px_rgba(0,0,0,0.3)] border-[6px] border-slate-950 z-30 transform transition duration-1000 group-hover:translate-x-4 group-hover:-translate-y-4">
                    <img src="/asset/software/nova-1.jpg"
                        alt="Mobile Responsive Design"
                        class="w-full h-full object-cover">
                </div>




            </div>

            <style>
                @keyframes float {

                    0%,
                    100% {
                        transform: translateY(0) rotate(-2deg);
                    }

                    50% {
                        transform: translateY(-15px) rotate(2deg);
                    }
                }

                .animate-float {
                    animation: float 5s ease-in-out infinite;
                }

                @keyframes spin-slow {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                .animate-spin-slow {
                    animation: spin-slow 12s linear infinite;
                }
            </style>
        </div>
    </section>

    <section class="py-24 max-md:py-0 bg-white overflow-hidden">
        <div class=" w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-8 md:gap-24">

            <div class="lg:w-1/2 relative">
                <div class="relative w-80 h-80 md:w-[550px] md:h-[550px] bg-blue-50/50 rounded-full flex items-center justify-center">
                    <div class="w-[85%] h-[85%] max-md:w-full rounded-full max-md:rounded-lg overflow-hidden border-8 border-white shadow-2xl">
                        <img src="/asset/software/onlineexam.webp" class="w-full h-full object-cover max-md:object-top" alt="Rudra Tech Web Team">
                    </div>

                    <div class="absolute top-10 right-4 max-md:rounded-lg max-md:right-2 w-12 h-12 md:w-36 md:h-36 rounded-full border-4 border-white shadow-xl overflow-hidden animate-bounce-slow">
                        <img src="/asset/1 (1).jpeg" class="w-full h-full object-cover" alt="Kesarbaug Project">
                    </div>

                    <div class="absolute bottom-10 left-4 max-md:rounded-lg max-md:left-2 w-12 h-12 md:w-28 md:h-28 rounded-full border-4 border-white shadow-xl overflow-hidden">
                        <img src="/asset/1 (2).jpeg" class="w-full h-full object-cover" alt="NK Distributor UI">
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 space-y-8  text-sm max-md:pb-10">
                <div class="space-y-4">

                    <h2 class="text-3xl md:text-6xl font-bold tracking-tighter text-slate-900 leading-[0.95]">
                        Stay Modern <br>
                        Stay Optimized <br>
                        <span class="text-blue-600">Stay Ahead.</span>
                    </h2>
                    <div class="flex gap-4 items-start pt-4">
                        <div class="w-1 h-12 bg-blue-600 rounded-full"></div>
                        <p class="text-slate-500 font-medium leading-relaxed max-w-md italic">
                            Our technical expertise allows your brand to streamline digital workflows and maximize conversion rates.
                        </p>
                    </div>
                </div>

                <p class="text-slate-600  leading-relaxed max-w-xl">
                    At <strong class="text-slate-900">Rudra Tech IT Services</strong>, we specialize in high-performance web architecture using <strong class="text-blue-600">Tailwind CSS</strong> and custom <strong class="text-blue-600">PHP logic</strong>. No matter the industry, from the lush aesthetics of <strong class="text-slate-900">Pranaa Landscaping</strong> to the global logistics of <strong class="text-slate-900">NK Distributor</strong>, we provide industry-compliant solutions.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full border border-slate-100 flex items-center justify-center text-blue-600 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Tracking Systems</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Custom Analytics Integration</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full border border-slate-100 flex items-center justify-center text-blue-600 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Growth Business</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Conversion Architecture</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <style>
        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .animate-bounce-slow {
            animation: bounce-slow 4s ease-in-out infinite;
        }
    </style>
    <section class="relative h-screen max-md:h-full w-full flex flex-col md:flex-row items-center overflow-hidden font-sans bg-white">

        <div class="relative w-full md:w-[45%] h-[400px] md:h-screen max-md:hidden">
            <img
                src="/asset/1 (3).jpeg"
                alt="Web Design"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/5"></div>
        </div>

        <div class="relative w-full md:w-[55%] max-md:h-[70vh] h-screen flex items-center justify-center px-8 md:pl-32 md:pr-16 bg-[#fffafa]">
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000" class="w-full h-full object-cover grayscale" />
            </div>

            <div class="relative max-w-2xl z-10">
                <p class="text-blue-500 font-bold text-xl mb-4">Our Creative Process</p>
                <h1 class="text-3xl md:text-6xl font-bold text-[#422a4c] leading-[1.1] mb-12">
                    Modern Website Design For Your Digital Growth.
                </h1>

                <div class="relative inline-block w-full">
                    <div class="relative overflow-hidden rounded-sm shadow-sm group">
                        <video class="w-full h-auto object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-500" autoplay loop muted playsinline>
                            <source src="/asset/software/website.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </div>

        <div class="absolute top-1/2 left-[45%] -translate-x-1/2 -translate-y-1/2 z-40 hidden md:block">
            <div class="bg-white py-16 px-12 shadow-[0_20px_50px_rgba(0,0,0,0.15)] rounded-sm min-w-[320px]">
                <ul class="space-y-10 text-xl font-medium text-gray-400">
                    <li class="hover:text-[#422a4c] cursor-pointer transition">Creative Strategy</li>

                    <li class="relative flex items-center text-[#422a4c] font-bold cursor-pointer">
                        <span class="absolute -left-6 w-14 h-14 bg-red-50 rounded-full -z-10"></span>
                        UI/UX Designing
                    </li>

                    <li class="hover:text-[#422a4c] cursor-pointer transition">Development</li>
                    <li class="hover:text-[#422a4c] cursor-pointer transition">SEO Optimization</li>
                    <li class="hover:text-[#422a4c] cursor-pointer transition">Launch & Support</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-10 bg-gray-50 font-sans">
        <div class="w-[80%] mx-auto">
            <div class="flex items-end gap-2 mb-16 max-md:mb-8">
                <span class="text-8xl max-md:text-6xl font-bold text-blue-500">3</span>
                <div>
                    <h2 class="text-3xl md:text-6xl font-bold text-gray-900">Featured Projects</h2>
                    <p class="text-2xl max-md:text-lg font-serif italic text-gray-600">Explore <span class="text-gray-900 font-sans not-italic font-bold">our latest work </span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="group">
                    <a href="preview-page.php?project=rudra-tech" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/nova.png" class="w-full h-full object-cover object-top" alt="Rudra Tech IT Services">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest">Nova Clothing <span class="text-blue-500">
                            <i class="fa-solid fa-arrow-right mr-4"></i>
                        </span></p>
                </div>
                <div class="group">
                    <a href="preview-page.php?project=weconnect" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/weconnect.png" class="w-full h-full object-cover object-top" alt="weconnect beauty">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest">Weconnect Beauty<span class="text-blue-500">
                            <i class="fa-solid fa-arrow-right mr-4"></i>
                            </span></p>
                </div>

                <div class="group">
                    <a href="preview-page.php?project=pranaa" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/pranna.png" class="w-full h-full object-cover object-top" alt="Pranaa Landscaping">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest">Pranaa Landscaping <span class="text-blue-500">
                            <i class="fa-solid fa-arrow-right mr-4"></i>
                        </span></p>
                </div>

                <!-- <div class="group">
                    <a href="preview-page.php?project=nk-export" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/nk_export.jpg" class="w-full h-full object-cover object-top" alt="NK Import Export">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest">NK Import & Export <span class="text-blue-500">_</span></p>
                </div> -->

            </div>
        </div>
    </section>




    <section class="relative py-24 max-md:py-10 bg-white overflow-hidden border-t border-slate-50">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-50/20 to-transparent -z-10"></div>

        <div class="w-[90%] md:w-[85%] mx-auto relative">

            <div class="flex flex-col lg:flex-row justify-between items-center mb-20 gap-12 ">
                <div class="max-w-4xl text-center lg:text-left">
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-[0.3em] mb-8 block">The Engineering Behind the Design</p>
                    <h2 class="text-3xl md:text-6xl font-black tracking-tighter max-md:tracking-tight text-slate-900 leading-[0.85] mb-8">
                        High-Performance <br>
                        <span class="text-blue-600 italic font-light">Digital Ecosystems.</span>
                    </h2>
                    <p class="text-slate-500  font-medium tracking-tight">
                        We specialize in transforming complex requirements into conversion-ready platforms optimized for high-velocity growth.
                    </p>
                </div>

                <div class="pt-4 lg:pt-0">
                    <a href="/get-in-touch" class="px-10 py-5 max-md:text-xs max-md:py-3 bg-slate-950 text-white rounded-2xl font-bold hover:bg-blue-600 transition-all duration-500 shadow-2xl hover:-translate-y-1">Get Technical Audit</a>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-start gap-16 lg:gap-0 ">

                <div class="w-full lg:w-1/2 relative h-[500px] max-md:h-[200px]">
                    <div class="absolute top-0 left-0 w-[90%] max-md:w-full aspect-video rounded-[3rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.12)] border border-slate-100 bg-white group">
                        <img src="/asset/bnr/24.png" class="w-full h-full object-cover transform transition duration-1000 group-hover:scale-105" alt="Web Engineering">

                        <!-- <div class="absolute bottom-8 right-8 bg-white/95 backdrop-blur-md p-6 rounded-3xl border border-white/40 shadow-2xl">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Global Status</span>
                        </div>
                        <p class="text-2xl font-black text-slate-950 tracking-tighter">0.8s Core Load</p>
                    </div> -->
                    </div>
                </div>

                <div class="w-full lg:w-1/2 space-y-0 border-t border-slate-100">

                    <div class="group border-b border-slate-100 py-12 max-md:py-8 flex flex-row max-md:flex-col-reverse items-center max-md:items-start justify-between hover:bg-slate-50 transition-all px-8 max-md:px-6">
                        <p class="text-slate-500 text-[11px] max-w-xs italic opacity-0 md:group-hover:opacity-100 max-md:opacity-100 max-md:mt-4 transition-opacity leading-relaxed">
                            Data-driven UI/UX designed to handle intricate logic flows and enterprise-grade operational management.
                        </p>

                        <div class="flex items-center justify-between max-md:w-full gap-8">
                            <div class="flex items-center gap-4">
                                <svg class="w-5 h-5 text-blue-600 -rotate-90 opacity-0 md:group-hover:opacity-100 max-md:opacity-100 transition-all" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 22h20L12 2z" />
                                </svg>
                                <h3 class="text-sm md:text-2xl font-black text-slate-900 tracking-tight">Logic Design</h3>
                            </div>
                            <span class="text-slate-200 text-3xl font-black italic">01</span>
                        </div>
                    </div>

                    <div class="group border-b border-slate-100 py-12 max-md:py-8 flex flex-row max-md:flex-col-reverse items-center max-md:items-start justify-between hover:bg-slate-50 transition-all px-8 max-md:px-6">
                        <p class="text-slate-500 text-[11px] max-w-xs italic opacity-0 md:group-hover:opacity-100 max-md:opacity-100 max-md:mt-4 transition-opacity leading-relaxed">
                            Hardened security protocols and encrypted database structures to protect global business infrastructure.
                        </p>

                        <div class="flex items-center justify-between max-md:w-full gap-8">
                            <div class="flex items-center gap-4">
                                <svg class="w-5 h-5 text-blue-600 -rotate-90 opacity-0 md:group-hover:opacity-100 max-md:opacity-100 transition-all" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 22h20L12 2z" />
                                </svg>
                                <h3 class="text-sm md:text-2xl font-black text-slate-900 tracking-tight">Secure Systems</h3>
                            </div>
                            <span class="text-slate-200 text-3xl font-black italic">02</span>
                        </div>
                    </div>

                    <div class="group py-12 max-md:py-8 flex flex-row max-md:flex-col-reverse items-center max-md:items-start justify-between hover:bg-slate-50 transition-all px-8 max-md:px-6">
                        <p class="text-slate-500 text-[11px] max-w-xs italic opacity-0 md:group-hover:opacity-100 max-md:opacity-100 max-md:mt-4 transition-opacity leading-relaxed">
                            Continuous performance mapping and Core Web Vital optimization to maintain peak search engine visibility.
                        </p>

                        <div class="flex items-center justify-between max-md:w-full gap-8">
                            <div class="flex items-center gap-4">
                                <svg class="w-5 h-5 text-blue-600 -rotate-90 opacity-0 md:group-hover:opacity-100 max-md:opacity-100 transition-all" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 22h20L12 2z" />
                                </svg>
                                <h3 class="text-sm md:text-2xl font-black text-slate-900 tracking-tight">Growth Mapping</h3>
                            </div>
                            <span class="text-slate-200 text-3xl font-black italic">03</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="py-16 bg-white border-t border-slate-100 overflow-hidden relative">
        <div class="w-[90%] md:w-[85%] mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">

                <div class="text-center md:text-left space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                        </span>
                        <span class="text-[9px] font-black text-blue-600 uppercase tracking-widest">Accepting New Projects</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black tracking-tighter text-slate-950 leading-tight">
                        Let's Build Your <br> <span class="text-blue-600 italic font-light">Digital Future.</span>
                    </h2>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-blue-600 rounded-[2rem] blur opacity-10 group-hover:opacity-20 transition duration-500"></div>

                    <a href="/get-in-touch" id="cta-btn" class="relative flex items-center gap-4 bg-white border border-slate-200 p-2 pr-6 rounded-[2rem] hover:shadow-xl transition-all duration-500 hover:-translate-y-1 z-10">
                        <div class="w-12 h-12 bg-slate-950 rounded-full flex items-center justify-center text-white transition-colors group-hover:bg-blue-600">
                            <svg class="w-5 h-5 group-hover:rotate-45 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <span class="block text-xs font-black text-slate-950 uppercase tracking-tight">Start Project</span>
                            <span class="block text-[10px] text-slate-400 font-bold">Free Technical Audit</span>
                        </div>
                    </a>


                </div>

            </div>


        </div>
    </section>















    <div class="hidden">
        <section class="relative w-full h-screen max-md:h-[70vh] flex items-center justify-center overflow-hidden bg-black">
            <div class="absolute inset-0">
                <img src="asset/realtime_node.jpg" alt="Website Designing Background"
                    class="w-full h-full object-cover object-center scale-105 animate-[pulse_10s_ease-in-out_infinite]" />

                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                <div class="absolute inset-0 bg-black/40 mix-blend-multiply"></div>
            </div>

            <div class="relative z-20 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto flex flex-col items-center">

                <span class="mb-6 inline-block rounded-full bg-blue-600/20 px-4 py-1.5 text-sm font-semibold text-blue-300 border border-blue-500/30 backdrop-blur-sm">
                    Top-Tier Development
                </span>

                <h1 class="text-transparent bg-clip-text bg-gradient-to-r from-white via-blue-100 to-gray-400 
                   font-extrabold tracking-tight leading-tight 
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl mb-6 drop-shadow-2xl">
                    Website Designing
                </h1>

                <p class="text-gray-300 text-base sm: md: max-w-2xl mx-auto leading-relaxed mb-8">
                    Elevate your brand with <span class="text-white font-medium">cutting-edge web design</span> that builds trust and delivers exceptional results.
                </p>

                <div class="group relative inline-flex">
                    <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-full blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"></div>

                    <a href="/getin-touch"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 border border-gray-700">
                        Get Started Today
                        <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="relative bg-white py-24 max-md:py-10 overflow-hidden max-lg:py-10">
            <div class="w-[80%]  max-md:w-[85%] mx-auto flex max-lg:flex-col justify-between gap-16 max-lg:gap-8 items-center">

                <!-- Left: Image/Illustration (Creative Design) -->
                <div class="relative w-1/2 max-md:w-full max-lg:w-full">
                    <img src="/asset/image/bgimg5.png" alt="Modern Web Design Illustration" class="relative z-10 w-full ">
                </div>

                <!-- Right: Content -->
                <div class="relative z-10 w-1/2 max-lg:w-full">
                    <h2 class="text-2xl max-md:text-center sm-text-4xl md:text-3xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                        Website Designing <span class="text-blue-600"> Designed for Your Brand</span>
                    </h2>
                    <p class="text-sm  max-md:text-center text-gray-600 mb-6 leading-relaxed">
                        At RudraTech, we do more than just make websites visually appealing. We create user-focused, responsive, and high-performing websites that build credibility for your brand and deliver results.
                    </p>

                    <ul class="space-y-4 text-sm text-gray-700">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                            </svg>
                            Fully responsive & mobile-friendly designs
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                            </svg>
                            Custom UI/UX designs that align with your brand identity
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                            </svg>
                            Fast, SEO-friendly, and conversion-optimized designs
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z" />
                            </svg>
                            Scalable designs built on the latest frameworks
                        </li>
                    </ul>

                    <div class="mt-8 max-md:text-center">
                        <a href="/getin-touch" class="inline-block px-8 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-full text-sm font-medium transition-all shadow-md">
                            Let's Design Your Website
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-20 lg:py-28 overflow-hidden">
            <div class="w-[80%] max-md:w-full mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-10 lg:gap-24">

                <div class="flex-1 w-full">
                    <div class="mb-4">
                        <span class="text-blue-600 font-semibold tracking-wider uppercase text-sm">Why Choose Us</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4 leading-tight">
                            Features that drive <br class="hidden lg:block" /> real growth.
                        </h2>
                        <p class="text-gray-600 ">We build digital experiences that are as functional as they are beautiful.</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                            <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i class="fas fa-mobile-alt text-blue-600  group-hover:text-white transition-colors"></i>
                            </div>
                            <div>
                                <h3 class=" font-bold text-gray-900 mb-1">Modern & Responsive</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Adaptable design that offers an optimized experience on all devices and screen sizes.</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                            <div class="shrink-0 w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center group-hover:bg-indigo-600 transition-colors duration-300">
                                <i class="fas fa-user-circle text-indigo-600  group-hover:text-white transition-colors"></i>
                            </div>
                            <div>
                                <h3 class=" font-bold text-gray-900 mb-1">User-Centric Design</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Designed to create intuitive flows that guide users effortlessly to conversion points.</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-6 p-4 rounded-2xl transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-gray-100">
                            <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i class="fas fa-pen-nib text-blue-600  group-hover:text-white transition-colors"></i>
                            </div>
                            <div>
                                <h3 class=" font-bold text-gray-900 mb-1">Custom Branding</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Custom designs that perfectly align with your brand’s unique vision and goals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-1 w-full relative lg:h-auto">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-gray-200 rounded-full opacity-50 blur-xl"></div>
                    <div class="absolute -bottom-8 -left-8 w-64 h-64 border-2 border-gray-200 rounded-full opacity-40"></div>

                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="/asset/contact.jpg" alt="Features Image" class="w-full h-auto object-cover transform hover:scale-105 transition duration-700 ease-in-out" />

                        <div class="absolute bottom-6 left-6 max-md:hidden bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg max-w-xs">
                            <p class="text-sm font-semibold text-gray-800">"Great design is intelligence made visible."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-24 max-md:py-10 bg-white relative overflow-hidden max-lg:py-12 ">
            <div class="w-[80%] mx-auto  max-md:w-[85%] ">
                <div class="text-center mb-16 max-md:mb-8">
                    <h2 class="text-4xl max-md:text-2xl font-extrabold text-gray-900">
                        Strategic Digital Excellence
                    </h2>
                </div>

                <div class="grid grid-cols-3 max-lg:grid-cols-2 max-md:grid-cols-1 gap-10 relative">

                    <!-- Card 1 -->
                    <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class=" max-md: font-semibold text-gray-800">Proven Formula</h3>
                            <div class="relative w-12 h-12">
                                <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                                <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                                <i class="fas fa-chart-line text-white  absolute top-3 left-3 z-10"></i>
                            </div>
                        </div>
                        <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                        <p class="text-gray-600">100s of websites optimized. 1,000s of first-page rankings across industries.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="  max-md: font-semibold text-gray-800">Winning Team</h3>
                            <div class="relative w-12 h-12">
                                <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                                <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                                <i class="fas fa-users text-white  absolute top-3 left-3 z-10"></i>
                            </div>
                        </div>
                        <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                        <p class="text-gray-600">A team of skilled designers, SEO experts, developers, and strategists who deliver results.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="group bg-white border-t-4 border-blue-600 rounded-xl shadow-lg p-8 transition-all hover:shadow-xl relative">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="  max-md: font-semibold text-gray-800">ROI Oriented</h3>
                            <div class="relative w-12 h-12">
                                <div class="absolute inset-0 bg-black rounded-md transform rotate-0 group-hover:rotate-12 transition duration-300"></div>
                                <div class="absolute -top-2 -left-2 w-12 h-12 border-2 border-black rounded-md transform rotate-0 group-hover:-rotate-12 transition duration-300"></div>
                                <i class="fas fa-chart-pie text-white  absolute top-3 left-3 z-10"></i>
                            </div>
                        </div>
                        <div class="h-px bg-gradient-to-r from-blue-500 to-transparent mb-6"></div>
                        <p class="text-gray-600">Get measurable returns that far exceed your investment in web design and SEO.</p>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "./include/footer.php" ?>
</body>

</html>