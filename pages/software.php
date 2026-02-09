<?php
$page_title = "AI Custom Software & ERP Solutions | RudraTech";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include "include/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- <style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    /* Custom Scrollbar (Blue/Black) */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #0f172a;
    }

    ::-webkit-scrollbar-thumb {
        background: #1e40af;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #3b82f6;
    }

    /* Animations */
    @keyframes scan-vertical {

        0%,
        100% {
            top: 5%;
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        50% {
            top: 90%;
        }
    }

    @keyframes fall-blue {
        to {
            transform: translateY(500px) rotate(720deg);
            opacity: 0;
        }
    }

    .glass-dark {
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(59, 130, 246, 0.2);
    }
</style>
<style>
    /* 1. Base State: Hidden & Slightly to the right */
    .feature-popup {
        opacity: 0;
        visibility: hidden;
        transform: translateX(50px);
        /* Start 50px to the right */
        transition: all 0.8s ease-out;
    }

    /* 2. Active State: Visible & In Position */
    .owl-item.active .feature-popup {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
        /* Slide into place */
    }

    /* 3. Custom Dots Styling */
    .owl-theme .owl-dots {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 30;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 30px;
        /* Long bars instead of dots */
        height: 4px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .owl-theme .owl-dots .owl-dot.active span {
        background: #3b82f6;
        /* Blue active bar */
        width: 50px;
        /* Grow when active */
    }
</style> -->



<style>
    .owl-stage {
        padding-bottom: 8px;
        padding-top: 8px;
    }
</style>


<body>


    <?php include "include/navbar.php" ?>



    <section class="relative h-[85vh]  max-md:h-auto max-md:py-10 flex items-center py-20 bg-white overflow-hidden">


        <div class="w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-16 md:gap-24 max-md:flex-col-reverse">

            <div class="lg:w-1/2 space-y-8 z-10 max-md:w-full max-md:space-y-4">
                <div>
                    <span class="text-blue-600 font-bold uppercase tracking-[0.3em] text-[10px] mb-4 block">India's #1 Software Development Partner</span>
                    <h1 class="text-2xl md:text-6xl font-bold  tracking-tighter text-slate-950 leading-[0.85] mb-6">
                        Next-Gen <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-500">Software Logic.</span>
                    </h1>
                    <p class=" text-slate-500 font-medium tracking-tight">
                        Scalable. Secure. Performance-Driven.
                    </p>
                </div>

                <div class="space-y-6 text-slate-600  leading-relaxed max-w-xl">
                    <p>
                        <strong class="text-slate-900">Rudra Tech IT Services</strong> is recognized as a premier destination for enterprise-level software engineering. We specialize in transforming complex business requirements into streamlined <span class="text-slate-900 font-semibold border-b-2 border-blue-600/10">Billing Systems, CRM, and HRMS</span> platforms.
                    </p>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-5 gap-x-10 pt-4 border-t border-slate-100 mt-10">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                        <span class="text-slate-900 font-bold text-sm tracking-tight">Custom ERP & CRM Architecture</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                        <span class="text-slate-900 font-bold text-sm tracking-tight">Automated Billing (Bharat Bill Book)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                        <span class="text-slate-900 font-bold text-sm tracking-tight">AI-Driven HRMS Modules</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-600 rounded-full shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                        <span class="text-slate-900 font-bold text-sm tracking-tight">Cloud-Native Development</span>
                    </div>
                </div>

                <div class="pt-8 flex flex-wrap gap-6 items-center">
                    <a href="#quote" class="px-10 py-5 max-md:text-xs bg-slate-950 text-white rounded-2xl font-bold hover:bg-blue-600 transition-all duration-500 shadow-2xl hover:-translate-y-1">Start Your Project</a>
                    <div class="flex items-center gap-3">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-white bg-slate-200" src="/asset/1 (1).jpeg" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white bg-slate-200" src="/asset/1 (2).jpeg" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white bg-slate-200" src="/asset/1 (3).jpeg" alt="">
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">150+ Success Cases</span>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 relative group">
                <div class="relative rounded-3xl overflow-hidden shadow-[0_60px_100px_-20px_rgba(0,0,0,0.1)] border border-slate-100 bg-slate-50 ">
                    <video autoplay muted loop playsinline class="w-full h-full object-cover">
                        <source src="/asset/software/billing.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="absolute -bottom-10 -right-2 max-md:-bottom-4 md:-right-16 w-44 h-44 max-md:w-16 max-md:h-16 bg-blue-600 rounded-full flex items-center justify-center shadow-2xl animate-spin-slow group-hover:bg-slate-950 transition-colors duration-700">
                    <svg viewBox="0 0 100 100" class="w-full h-full p-2">
                        <path id="softCircle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                        <text class="fill-white text-[11px] font-bold tracking-[0.2em] uppercase">
                            <textPath xlink:href="#softCircle">Full-Stack Experts • Rudra Tech • </textPath>
                        </text>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <svg class="w-10 h-10 max-md:w-4 max-md:h-4 text-white -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 15s linear infinite;
        }
    </style>


    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8 max-md:items-start">
                <div class="max-w-3xl max-md:text-center">
                    <span class="text-blue-600 font-bold uppercase tracking-[0.2em] text-[10px] mb-4 block">India's Leading Billing Ecosystem</span>
                    <h2 class="text-2xl md:text-6xl font-bold  tracking-tighter text-slate-950 leading-[0.9]">
                        Bharat Bill Book: <br>
                        <span class="text-blue-600">The Modern Standard.</span>
                    </h2>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold italic">B</div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 uppercase">Product Status</p>
                            <p class="text-[10px] text-green-500 font-bold tracking-widest uppercase">Live & Scaling</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="relative group">
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-blue-50 rounded-full -z-10 group-hover:scale-110 transition-transform duration-700"></div>

                    <div class="rounded-[2.5rem] bg-slate-950 p-4 shadow-2xl transform transition duration-700 group-hover:-rotate-1 group-hover:scale-[1.01]">
                        <div class="rounded-[1.5rem] overflow-hidden border border-white/10 relative">
                            <div class="bg-white/10 backdrop-blur-md px-6 py-3 flex gap-2 border-b border-white/5">
                                <div class="w-2 h-2 rounded-full bg-red-500/40"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-500/40"></div>
                                <div class="w-2 h-2 rounded-full bg-green-500/40"></div>
                            </div>
                            <img src="/asset/software/bharatbill.png"
                                alt="Bharat Bill Book Interface"
                                class="w-full h-auto ">
                        </div>
                    </div>

                    <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-[2rem] shadow-2xl border border-slate-50 max-w-[200px]">
                        <p class="text-blue-600 font-bold  text-2xl mb-1">99.9%</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Uptime for your financial logic</p>
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-slate-900 tracking-tight">Enterprise Billing, <br>Simplified for Growth.</h3>
                        <p class="text-slate-500  leading-relaxed">
                            <strong class="text-slate-950 font-bold">Bharat Bill Book</strong> is more than just an invoice generator. We have engineered a complete financial operating system that automates GST filing, inventory reconciliation, and multi-channel payment settlements.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 font-bold italic">01</div>
                            <h4 class="font-bold text-slate-950">Automated GST Logic</h4>
                            <p class="text-sm text-slate-500 leading-snug">Auto-generate GST reports and HSN-compliant invoices in seconds.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-10 h-10 bg-slate-50 rounded-xl flex items-center justify-center text-slate-900 font-bold italic">02</div>
                            <h4 class="font-bold text-slate-950">Inventory Sync</h4>
                            <p class="text-sm text-slate-500 leading-snug">Real-time stock management across multiple branch locations.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-10 h-10 bg-slate-50 rounded-xl flex items-center justify-center text-slate-900 font-bold italic">03</div>
                            <h4 class="font-bold text-slate-950">Secure HRMS/Payroll</h4>
                            <p class="text-sm text-slate-500 leading-snug">Integrated employee attendance and automated salary disbursement.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 font-bold italic">04</div>
                            <h4 class="font-bold text-slate-950">API Integration</h4>
                            <p class="text-sm text-slate-500 leading-snug">Connect your bank or existing CRM via our hardened secure APIs.</p>
                        </div>
                    </div>

                    <div class="pt-8">
                        <a href="#contact" class="inline-flex items-center gap-4 px-10 py-5 bg-slate-950 text-white rounded-2xl font-bold hover:bg-blue-600 transition-all shadow-xl group">
                            Book a Live Demo
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-24 bg-white overflow-hidden border-t border-slate-100">
        <div class="w-[85%] mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-3xl">
                    <span class="text-blue-600 font-bold uppercase tracking-[0.2em] text-[10px] mb-4 block">International Transport Engineering</span>
                    <h2 class="text-2xl md:text-6xl font-bold  tracking-tighter text-slate-950 leading-[0.9]">
                        NK Distributor: <br>
                        <span class="text-blue-600">Logistics without Borders.</span>
                    </h2>
                </div>
                <div class="hidden md:block">
                    <div class="bg-slate-50 px-6 py-4 rounded-3xl border border-slate-100 flex items-center gap-4">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Market Focus</span>
                            <span class="text-sm font-bold text-slate-900 italic">Burkina Faso, Africa</span>
                        </div>
                        <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center ">🌍</div>
                    </div>
                </div>
            </div>

            <div class="space-y-16">
                <div class="relative group">
                    <div class="absolute -inset-10 bg-blue-50/50 rounded-[5rem] blur-3xl -z-10 group-hover:bg-blue-100/50 transition-colors duration-1000"></div>

                    <div class="rounded-[3.5rem] bg-white p-2 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.12)] border border-slate-100 overflow-hidden transform transition duration-1000 group-hover:-translate-y-2">
                        <div class="bg-slate-950 rounded-[3rem] overflow-hidden relative">
                            <!-- <div class="px-8 py-5 border-b border-white/5 flex items-center justify-between">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500/30"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500/30"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500/30"></div>
                                </div>
                                <div class="text-[10px] font-mono text-slate-500 tracking-widest">DASHBOARD_V2.0_BURKINAFASO</div>
                                <div class="w-4 h-4 text-slate-500"><svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg></div>
                            </div> -->

                            <img src="/asset/software/nk.png"
                                alt="NK Distributor Logistics Management"
                                class="w-full h-auto  ">
                        </div>
                    </div>

                    <div class="absolute top-1/2 -right-10 transform -translate-y-1/2 hidden xl:block">
                        <div class="bg-white/80 backdrop-blur-2xl p-8 rounded-[3rem] shadow-2xl border border-white/20 space-y-4 max-w-[260px]">
                            <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2" />
                                    <path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" stroke-width="2" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900">Fleet Optimization</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Dynamic route tracking and fuel management tailored for West African logistics networks.</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-10">
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-slate-950 flex items-center gap-3">
                            <span class="text-blue-600">01.</span> Supply Chain Sync
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            End-to-end visibility from warehouse to final delivery point in Burkina Faso, ensuring zero inventory leakage.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-slate-950 flex items-center gap-3">
                            <span class="text-blue-600">02.</span> Cross-Border Logic
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Automated documentation handling for international transport regulations and local customs compliance.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-slate-950 flex items-center gap-3">
                            <span class="text-blue-600">03.</span> Real-time Analytics
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Advanced data modeling to predict transit times and optimize cargo distribution across your entire fleet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- <section class="py-32 bg-white overflow-hidden border-t border-slate-100">
        <div class="w-[85%] mx-auto">

            <div class="flex flex-col lg:flex-row justify-between items-start mb-24 gap-12">
                <div class="max-w-3xl">
                    <span class="text-blue-600 font-bold uppercase tracking-[0.3em] text-[11px] mb-6 block">Our Premier Software Solutions</span>
                    <h2 class="text-3xl md:text-6xl font-bold  tracking-tighter text-slate-950 leading-[0.85]">
                        Complex Logic. <br>
                        <span class="text-blue-600">Simplified Assets.</span>
                    </h2>
                </div>
                <div class="lg:pt-12">
                    <p class="text-slate-500  leading-relaxed max-w-lg font-medium">
                        We bridge the gap between high-level business strategy and technical software execution.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">

                <div class=" bg-white rounded-[4rem] p-10 relative overflow-hidden group hover:shadow-xl transition-all duration-700 border border-slate-100">
                    <div class="relative z-10 h-full flex flex-col">
                        <div class="mb-12 flex justify-between items-center">
                            <span class="text-4xl font-bold  text-slate-200 group-hover:text-slate-300 transition">01</span>

                        </div>
                        <h3 class="text-4xl font-bold text-slate-950 mb-6 group-hover:text-blue-600 transition">Enterprise CRM <br>& CMS Architecture</h3>
                        <p class="text-slate-500  leading-r elaxed group-hover:text-slate-600 max-w-md">
                            Total control over your data and digital assets. We build custom CMS platforms that allow for real-time content management with the security of an enterprise CRM.
                        </p>

                        <div class="relative mt-auto  rounded-2xl overflow-hidden shadow-lg border border-white/20 bg-blue-700">
                            <img src="/asset/software/blm.png"
                                alt="CRM Dashboard"
                                class="w-full h-[30vh] object-cover object-right">
                        </div>

                        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-600/5 rounded-full blur-3xl group-hover:bg-blue-600/10 transition-all"></div>
                    </div>
                </div>

                <div class=" bg-white rounded-[4rem] p-10 relative overflow-hidden group hover:shadow-xl transition-all duration-700 border border-slate-100">
                    <div class="mb-12">
                        <span class="text-4xl font-bold  text-slate-300/50">02</span>
                    </div>
                    <h3 class="text-4xl font-bold mb-6  group-hover:text-blue-600 transition">Bharat Bill Book: <br>Automated Finance</h3>
                    <p class="text-slate-500  leading-relaxed mb-10">
                        Revolutionizing financial workflows with automated GST filing and real-time reconciliation logic. Our software ensures precision in every transaction.
                    </p>
                    <div class="relative mt-auto  rounded-2xl overflow-hidden shadow-lg border border-white/20 bg-blue-700">
                        <img src="/asset/software/bharatbill.png"
                            alt="Bharat Bill Book Screenshot"
                            class="w-full h-[30vh] object-cover ">
                    </div>
                </div>

                <div class=" bg-white rounded-[4rem] p-10 relative overflow-hidden group hover:shadow-xl transition-all duration-700 border border-slate-100">
                    <div class="w-full">
                        <span class="text-4xl font-bold  text-slate-200 mb-8 block">03</span>
                        <h3 class="text-4xl  font-bold text-slate-950 mb-6  group-hover:text-blue-600 transition">Logistics & HRMS <br>Powering Global Fleets.</h3>
                        <p class="text-slate-600  leading-relaxed mb-10">
                            As evidenced by our work on <strong class="text-blue-600">NK Distributor</strong> in Burkina Faso, our logistics software manages cross-border transport with military precision and robust HR functionality.
                        </p>

                    </div>
                    <div class="relative mt-auto  rounded-2xl overflow-hidden shadow-lg border border-white/20 bg-blue-700">

                        <img src="/asset/software/nk1.png" class="w-full h-[30vh] object-cover " alt="NK Distributor Logistics Software Screenshot">

                    </div>
                </div>

            </div>
        </div>
    </section> -->



    <section class="py-16 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <span class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4 block">Our Enterprise Products</span>
                    <h2 class="text-5xl md:text-6xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                        Powering business <br>with smart logic
                    </h2>
                </div>
                <div class="flex gap-4">
                    <button id="soft-prev" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M15 19l-7-7 7-7" stroke-width="2.5" />
                        </svg>
                    </button>
                    <button id="soft-next" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7" stroke-width="2.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="owl-carousel software-carousel pb-10">

                <div class="bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col h-full">
                    <div class="flex justify-between items-start mb-8">
                        <h3 class="text-2xl font-bold text-slate-900 leading-tight">
                            Bharat Bill Book <br>(Billing Software)
                        </h3>
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center group-hover:rotate-45 transition-transform duration-500 shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2.5" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-slate-500 text-[15px] leading-relaxed mb-10">
                        A comprehensive financial engine featuring automated GST logic, secure payment gateways, and real-time reconciliation for 99.9% accuracy.
                    </p>
                    <div class="mt-auto rounded-[2rem] overflow-hidden aspect-[4/3] bg-slate-50 border border-slate-100">
                        <img src="/asset/software/bharatbill.png" alt="Bharat Bill Book UI" class="w-full h-full object-cover object-right">
                    </div>
                </div>

                <div class="bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col h-full">
                    <div class="flex justify-between items-start mb-8">
                        <h3 class="text-2xl font-bold text-slate-900 leading-tight">
                            Custom CRM <br>Architecture
                        </h3>
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center group-hover:rotate-45 transition-transform duration-500 shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2.5" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-slate-500 text-[15px] leading-relaxed mb-10">
                        Centralized lead management systems with multi-channel sync (WhatsApp/Email) and automated sales funnels for maximized conversion.
                    </p>
                    <div class="mt-auto rounded-[2rem] overflow-hidden aspect-[4/3] bg-slate-50 border border-slate-100">
                        <img src="/asset/software/2.png" alt="CRM Dashboard" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col h-full">
                    <div class="flex justify-between items-start mb-8">
                        <h3 class="text-2xl font-bold text-slate-900 leading-tight">
                            Precision HRMS <br>& Payroll
                        </h3>
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center group-hover:rotate-45 transition-transform duration-500 shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2.5" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-slate-500 text-[15px] leading-relaxed mb-10">
                        Automated payroll engine with integrated biometric attendance tracking and Employee Self-Service (ESS) portals for operational efficiency.
                    </p>
                    <div class="mt-auto rounded-[2rem] overflow-hidden aspect-[4/3] bg-slate-50 border border-slate-100">
                        <img src="/asset/software/hrm.png" alt="HRMS System" class="w-full h-full object-cover object-left">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0 bg-white relative overflow-hidden">
        <div class="w-[85%] mx-auto bg-slate-50 rounded-[4rem] p-12 md:p-20 relative">
            <div class="grid lg:grid-cols-2 items-center gap-16">

                <div class="space-y-8">
                    <span class="text-blue-600 font-bold uppercase tracking-widest text-[10px] block text-center lg:text-left">System Efficiency</span>
                    <h2 class="text-3xl md:text-5xl font-bold  tracking-tighter text-slate-900 leading-[0.9] text-center lg:text-left">
                        Technology To Optimize <br> Your <span class="text-blue-600">Software Systems</span>
                    </h2>
                    <p class="text-slate-500 text-center lg:text-left max-w-xl mx-auto lg:mx-0">
                        Guide users to unlock the value of your product faster. Rather than being frustrated, they'll want to explore more. With the adoption of additional features comes higher engagement and more continuous use of your product.
                    </p>

                    <div class="grid grid-cols-2 gap-y-6 gap-x-12">
                        <div class="flex items-center justify-end lg:justify-start gap-3">
                            <span class="text-blue-600 text-xl font-bold italic">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                            <span class="text-slate-900 font-bold text-sm">Long-term Viability</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 text-xl font-bold italic">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                            <span class="text-slate-900 font-bold text-sm">Truly Cost Savings</span>
                        </div>
                        <div class="flex items-center justify-end lg:justify-start gap-3">
                            <span class="text-blue-600 text-xl font-bold italic">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                            <span class="text-slate-900 font-bold text-sm">Better Decision-Making</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 text-xl font-bold italic">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                            <span class="text-slate-900 font-bold text-sm">Up-to-date And Optimized</span>
                        </div>
                    </div>

                    <div class="pt-8 text-center lg:text-left">
                        <a href="#get-started" class="inline-flex items-center gap-2 font-bold text-slate-900 group">
                            Get Started Now
                            <span class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all text-blue-600">
                                →
                            </span>
                        </a>
                    </div>
                </div>

                <div class="relative flex justify-center items-center">
                    <div class="relative w-80 h-80 md:w-[450px] md:h-[450px] rounded-full bg-slate-200 overflow-hidden shadow-2xl">
                        <img src="/asset/software/person.avif" class="w-full h-full object-cover">
                    </div>

                    <div class="absolute -left-4 top-1/2 bg-white p-6 rounded-[2rem] shadow-2xl border border-slate-100 animate-bounce-slow">
                        <p class="text-3xl font-bold  text-slate-900">84%</p>
                        <hr class="my-2 border-slate-100">
                        <p class="text-[10px] font-bold text-green-500 uppercase">▲ 108,15% Growth</p>
                    </div>

                    <div class="absolute -right-4 top-20 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 hidden md:block">
                        <div class="flex gap-1 h-12 items-end">
                            <div class="w-2 h-[40%] bg-blue-200 rounded-t-sm"></div>
                            <div class="w-2 h-[70%] bg-blue-600 rounded-t-sm"></div>
                            <div class="w-2 h-[50%] bg-blue-400 rounded-t-sm"></div>
                            <div class="w-2 h-[90%] bg-slate-900 rounded-t-sm"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="text-right mb-16">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4 block">Our Premier Products</span>
                <h2 class="text-3xl md:text-6xl font-bold  tracking-tighter text-slate-900 leading-[0.9]">
                    Scale Your Business With Our <br> <span class="text-blue-600">Software Ecosystem</span>
                </h2>
                <a href="/all-products" class="inline-flex items-center gap-2 text-blue-600 font-bold mt-8 hover:underline">
                    <i class="fa-solid fa-arrow-left"></i>Explore All Solutions
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-4">

                <div class="md:col-span-2 bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col justify-between group relative overflow-hidden shadow-sm hover:shadow-md transition-all">
                    <div class="relative z-10">
                        <h4 class="text-2xl font-bold text-slate-900 mb-2">Bharat Bill Book</h4>
                        <p class="text-slate-500 text-xs leading-relaxed max-w-[80%]">India's leading automated GST billing logic for high-velocity retail.</p>
                    </div>
                    <div class="text-blue-600 mt-6 ">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col items-center justify-center text-center gap-4 group hover:border-blue-200 transition-colors">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">CRM Sync</h4>
                    <p class="text-slate-500 text-[10px]">Automate your sales pipeline.</p>
                </div>

                <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col items-center justify-center text-center gap-4 group hover:border-blue-200 transition-colors">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">HRMS Core</h4>
                    <p class="text-slate-500 text-[10px]">Payroll & attendance logic.</p>
                </div>

                <div class="md:row-span-2 bg-slate-900 p-8 rounded-[2.5rem] text-white flex flex-col justify-between group">
                    <div>
                        <h4 class="text-xl font-bold text-white mb-4">NK Distributor</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">International transport management for Burkina Faso logistics.</p>
                    </div>
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white self-end shadow-lg transform group-hover:-translate-y-2 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="1.5" />
                            <path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 flex items-center justify-between group hover:border-blue-200 transition-colors">
                    <h4 class="text-lg font-bold text-slate-900">Cloud Data</h4>
                    <div class="text-blue-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>

                <div class="md:col-span-2 bg-white p-8 rounded-[2.5rem] border border-slate-100 flex items-center justify-between group hover:border-blue-200 transition-colors">
                    <div>
                        <h4 class="text-xl font-bold text-slate-950">Business Intelligence</h4>
                        <p class="text-slate-500 text-xs">Quality software for data-driven decisions.</p>
                    </div>
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>

                <div class="bg-blue-600 p-8 rounded-[2.5rem] text-white flex flex-col items-center justify-center text-center shadow-lg group">
                    <div class="mb-3 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="2" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-1 tracking-tight">API Sync</h4>
                    <p class="text-blue-100 text-[10px]">Hardened security layers.</p>
                </div>
            </div>
        </div>
    </section>





    <section class="py-24 bg-white overflow-hidden border-t">
        <div class="w-[85%] mx-auto">
            <div class="mb-16">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4 block">Live Software Demo</span>
                <h2 class="text-5xl md:text-6xl font-bold tracking-tighter text-slate-900 leading-[0.9] mb-6">
                    Generate Invoices <span class="text-blue-600">In Real-Time.</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-xl">Experience the automation logic behind Bharat Bill Book. Adjust the fields and paper size to see instant results.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <div class="lg:col-span-4 bg-slate-50 p-8 rounded-[3rem] border border-slate-100 space-y-6">
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-4">Paper Size Selection</label>
                        <div id="tab-container" class="flex gap-2 p-1.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <button onclick="setSize('A4', this)" class="size-tab flex-1 py-3 rounded-xl font-bold text-sm transition-all duration-300 bg-blue-600 text-white shadow-lg shadow-blue-200">
                                A4
                            </button>
                            <button onclick="setSize('A5', this)" class="size-tab flex-1 py-3 rounded-xl font-bold text-sm transition-all duration-300 text-slate-500 hover:bg-slate-50">
                                A5
                            </button>
                            <button onclick="setSize('POS', this)" class="size-tab flex-1 py-3 rounded-xl font-bold text-sm transition-all duration-300 text-slate-500 hover:bg-slate-50">
                                POS
                            </button>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="relative">
                            <input type="text" id="custName" placeholder="Customer Name" oninput="updateInvoice()" class="w-full px-5 py-4 rounded-2xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-600 transition-all text-sm outline-none">
                        </div>
                        <div class="relative">
                            <input type="text" id="itemName" placeholder="Item Name (e.g. Organic Oil)" oninput="updateInvoice()" class="w-full px-5 py-4 rounded-2xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-600 transition-all text-sm outline-none">
                        </div>
                        <div class="flex gap-4">
                            <input type="number" id="qty" placeholder="Qty" oninput="updateInvoice()" class="w-1/2 px-5 py-4 rounded-2xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-600 text-sm outline-none">
                            <input type="number" id="price" placeholder="Price" oninput="updateInvoice()" class="w-1/2 px-5 py-4 rounded-2xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-600 text-sm outline-none">
                        </div>
                    </div>

                    <div class="pt-6">
                        <button class="w-full bg-slate-900 text-white py-5 rounded-[2rem] font-bold hover:bg-blue-600 transition-all shadow-xl flex items-center justify-center gap-3 group">
                            Print Digital Receipt
                            <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-8 flex justify-center bg-slate-100/50 rounded-[3rem] py-12 border border-slate-100">
                    <div id="invoiceFrame" class="bg-white shadow-2xl transition-all duration-500 border border-slate-100 overflow-hidden" style="width: 595px; min-height: 542px; padding: 40px;">
                        <div class="flex justify-between items-start border-b-2 border-slate-900 pb-8 mb-10">
                            <div>
                                <h4 class="text-3xl font-black tracking-tighter uppercase">INVOICE</h4>
                                <p class="text-[9px] font-bold text-slate-400 mt-1 uppercase tracking-widest">Ref: #RT-2026-001</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-slate-900 leading-none">Rudra Tech IT Services</p>
                                <p class="text-[9px] text-slate-500 font-bold uppercase tracking-tighter">Software Engineering Expert</p>
                            </div>
                        </div>

                        <div class="mb-10">
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Bill To:</p>
                            <p id="dispCustName" class="text-xl font-bold text-slate-900 italic underline decoration-blue-600 underline-offset-4 decoration-2">John Doe</p>
                        </div>

                        <table class="w-full mb-10">
                            <thead class="bg-slate-950 text-white text-[9px] uppercase font-bold tracking-widest">
                                <tr>
                                    <th class="text-left px-4 py-3">Service Description</th>
                                    <th class="text-center px-4 py-3">Qty</th>
                                    <th class="text-right px-4 py-3">Price</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-medium text-slate-700">
                                <tr class="border-b border-slate-100">
                                    <td id="dispItem" class="px-4 py-6 font-bold">Bharat Bill Book Setup</td>
                                    <td id="dispQty" class="px-4 py-6 text-center">1</td>
                                    <td id="dispPrice" class="px-4 py-6 text-right">₹50,000</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="flex justify-end pt-6 border-t-2 border-slate-900">
                            <div class="w-48 space-y-2">
                                <div class="flex justify-between text-xs font-bold text-slate-400">
                                    <span>TAX (18%)</span>
                                    <span id="dispTax">₹9,000</span>
                                </div>
                                <div class="flex justify-between text-xl font-black text-slate-950">
                                    <span>TOTAL</span>
                                    <span id="dispGrandTotal">₹59,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function setSize(size, element) {
            // Handle Active Tab State
            const tabs = document.querySelectorAll('.size-tab');
            tabs.forEach(tab => {
                tab.classList.remove('bg-blue-600', 'text-white', 'shadow-lg', 'shadow-blue-200');
                tab.classList.add('text-slate-500');
            });
            element.classList.remove('text-slate-500');
            element.classList.add('bg-blue-600', 'text-white', 'shadow-lg', 'shadow-blue-200');

            // Handle Invoice Resize
            const frame = document.getElementById('invoiceFrame');
            if (size === 'A4') {
                frame.style.width = '595px';
                frame.style.minHeight = '842px';
            }
            if (size === 'A5') {
                frame.style.width = '420px';
                frame.style.minHeight = '595px';
            }
            if (size === 'POS') {
                frame.style.width = '300px';
                frame.style.minHeight = '400px';
                frame.style.padding = '20px';
            }
        }

        function updateInvoice() {
            const name = document.getElementById('custName').value || 'John Doe';
            const item = document.getElementById('itemName').value || 'Software Development';
            const qty = parseFloat(document.getElementById('qty').value) || 1;
            const price = parseFloat(document.getElementById('price').value) || 0;

            const total = qty * price;
            const tax = total * 0.18;
            const grand = total + tax;

            document.getElementById('dispCustName').innerText = name;
            document.getElementById('dispItem').innerText = item;
            document.getElementById('dispQty').innerText = qty;
            document.getElementById('dispPrice').innerText = '₹' + price.toLocaleString();
            document.getElementById('dispTax').innerText = '₹' + tax.toLocaleString();
            document.getElementById('dispGrandTotal').innerText = '₹' + grand.toLocaleString();
        }
    </script>









    <section class="py-28 bg-gradient-to-r from-blue-200 to-blue-100 overflow-hidden font-sans">
        <div class="w-[90%] max-w-7xl mx-auto text-center">

            <div class="relative inline-block mb-24 px-4">
                <span class="text-blue-600 font-bold uppercase tracking-[0.4em] text-[10px] mb-8 block opacity-80">What We Have Accomplished</span>

                <h2 class="text-5xl  font-bold tracking-tighter text-slate-900 leading-[1.1] max-w-6xl mx-auto">
                    Revolutionize Your Operations
                    <span class="inline-block align-middle mx-1 ">
                        <img src="/asset/1 (2).jpeg" class="w-20 h-12 rounded-full shadow-xl object-cover">
                    </span>
                    Optimizing
                    <span class="text-blue-600">Complex Logic With Custom</span>
                    <span class="inline-block align-middle text-2xl shadow-lg shadow-blue-200 transform hover:scale-110 transition-transform">
                        <i class="fa-brands fa-react text-blue-500 text-center text-4xl font-bold"></i>
                    </span>
                    Software.
                    <span class="inline-block align-middle mx-1 ">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=60&fit=crop" class="w-20 h-12 rounded-full  shadow-xl object-cover object-top">
                    </span>
                    Scaling Success For The Future
                    <span class="inline-block align-middle text-blue-600 animate-pulse">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    Industries.
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 mb-24 border-t border-slate-50 pt-20">

                <div class="space-y-4 group">
                    <p class="text-6xl font-black text-slate-900 tracking-tighter group-hover:text-blue-600 transition-colors">80%<span class="text-blue-600">-</span></p>
                    <div class="space-y-1">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-widest leading-tight">Reduced Technical Debt</p>
                        <p class="text-[10px] text-slate-400 font-medium tracking-wide">Verified by Rudra Tech internal code audits</p>
                    </div>
                </div>

                <div class="space-y-4 group border-l lg:border-l-0 border-slate-50">
                    <p class="text-6xl font-black text-slate-900 tracking-tighter group-hover:text-blue-600 transition-colors">95%</p>
                    <div class="space-y-1">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-widest leading-tight">System Scalability Score</p>
                        <p class="text-[10px] text-slate-400 font-medium tracking-wide">Based on high-traffic stress testing</p>
                    </div>
                </div>

                <div class="space-y-4 group border-t lg:border-t-0 border-slate-50 pt-12 lg:pt-0">
                    <p class="text-6xl font-black text-slate-900 tracking-tighter group-hover:text-blue-600 transition-colors">$500K</p>
                    <div class="space-y-1">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-widest leading-tight">Efficiency ROI Realized</p>
                        <p class="text-[10px] text-slate-400 font-medium tracking-wide">Average annually per enterprise deployment</p>
                    </div>
                </div>

                <div class="space-y-4 group border-t lg:border-t-0 border-l lg:border-l-0 border-slate-50 pt-12 lg:pt-0">
                    <p class="text-6xl font-black text-slate-900 tracking-tighter group-hover:text-blue-600 transition-colors">M3.50</p>
                    <div class="space-y-1">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-widest leading-tight">Secure Lines of Code</p>
                        <p class="text-[10px] text-slate-400 font-medium tracking-wide">Engineered for Bharat Bill Book & NK Distributor</p>
                    </div>
                </div>
            </div>

            <div class="max-w-3xl mx-auto px-4 mt-12">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-[3rem] blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>

                    <button class="relative w-full bg-white border border-slate-100 py-8 px-10 rounded-[2.5rem] shadow-sm flex flex-col md:flex-row items-center justify-between gap-6 transition-all duration-500 hover:shadow-2xl hover:-translate-y-1">

                        <div class="text-center md:text-left">
                            <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                                <span class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span>
                                </span>
                                <span class="text-[10px] font-bold text-blue-600 uppercase tracking-widest">Available for New Projects</span>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 tracking-tight">Ready to scale with Rudra Tech?</h3>
                            <p class="text-slate-500 text-xs mt-1">Get a custom quote for your Billing, CRM, or Logistics software.</p>
                        </div>

                        <div class="flex items-center gap-4 group/btn">
                            <span class="text-slate-950 font-black text-lg hidden md:block group-hover/btn:text-blue-600 transition-colors">Start Consultation</span>
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg shadow-blue-200 transform transition-all duration-500 group-hover:rotate-[360deg] group-hover:scale-110">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </button>
                </div>

                <p class="text-center text-[9px] text-slate-400 uppercase tracking-[0.2em] mt-6 font-bold">
                    Trusted by enterprises like NK Distributor & Bharat Bill Book
                </p>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function() {
            var owl = $('.software-carousel');
            owl.owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 3
                    }
                }
            });

            // Custom Navigation
            $('#soft-next').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('#soft-prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>


    <?php include "include/footer.php" ?>

    <!-- <body class="bg-white text-slate-900 antialiased selection:bg-blue-600 selection:text-white">



    <section class="relative w-full min-h-[90vh] flex items-center bg-[#050810] overflow-hidden pt-20">

        <div class="absolute inset-0 opacity-[0.1]" style="background-image: linear-gradient(#1e40af 1px, transparent 1px), linear-gradient(90deg, #1e40af 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-900/20 rounded-full blur-[120px] mix-blend-screen"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-800/10 rounded-full blur-[100px] mix-blend-screen"></div>

        <div class="relative z-10 w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="text-left space-y-8">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-blue-800 bg-blue-900/20 text-blue-400 text-xs font-bold tracking-widest uppercase">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    AI-Driven Development
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] tracking-tight">
                    Software that <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white">Thinks Ahead.</span>
                </h1>

                <p class=" text-slate-400 max-w-lg leading-relaxed border-l-2 border-blue-700 pl-6">
                    We engineer <strong>intelligent digital ecosystems</strong>. From neural-network powered EdTech platforms to high-frequency billing engines, RudraTech builds the future of your enterprise.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#billing-engine" class="px-8 py-4 bg-blue-700 text-white font-bold rounded-none border border-blue-600 hover:bg-blue-600 transition-all shadow-[0_0_20px_rgba(29,78,216,0.3)]">
                        Launch Billing Engine
                    </a>
                    <a href="#exam-ai" class="px-8 py-4 border border-slate-700 text-slate-300 font-bold rounded-none hover:border-white hover:text-white transition-all">
                        Test AI Proctoring
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center">
                <div class="relative w-full max-w-lg aspect-square bg-slate-900/50 rounded-full border border-blue-900/30 flex items-center justify-center animate-[spin_30s_linear_infinite]">
                    <div class="absolute inset-4 border border-dashed border-blue-800/50 rounded-full"></div>
                    <div class="absolute inset-12 border border-blue-900/30 rounded-full"></div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-microchip text-6xl text-blue-500 drop-shadow-[0_0_15px_rgba(59,130,246,0.8)] animate-pulse"></i>
                        <p class="mt-4 text-blue-200 font-mono text-xs uppercase tracking-[0.3em]">Processing Logic</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-b border-slate-200">
        <div class="w-[85%] mx-auto text-center">
            <h2 class="text-5xl font-bold text-slate-900 mb-4">Enterprise-Grade Solutions</h2>
            <p class="text-slate-500 mb-16 max-w-2xl mx-auto">Scalable architecture meets intuitive design. Our core competencies drive business growth.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-file-invoice text-4xl text-blue-600 mb-6"></i>
                    <h3 class=" font-bold mb-3">Custom ERP & Billing</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">High-speed POS systems with GST automation and inventory tracking.</p>
                </div>
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-brain text-4xl text-blue-600 mb-6"></i>
                    <h3 class=" font-bold mb-3">AI & EdTech Apps</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">Smart exam platforms with facial recognition and auto-grading logic.</p>
                </div>
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-cloud text-4xl text-blue-600 mb-6"></i>
                    <h3 class=" font-bold mb-3">Cloud SaaS Platforms</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">Secure, scalable web applications hosted on AWS/Azure infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="billing-engine" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-full bg-gradient-to-b from-blue-900/0 via-blue-600/50 to-blue-900/0"></div>

        <div class="w-[90%] xl:w-[85%] mx-auto relative z-10">

            <div class="text-center mb-16">
                <span class="text-blue-400 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Product Showcase: Bharat Bill Book
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold ">
                    Algorithmic <span class="text-blue-500">Financial Engine</span>
                </h2>
                <p class="text-slate-400 mt-4 max-w-xl mx-auto">
                    Experience our lightning-fast billing logic. Add multiple items on the left and watch the invoice generate instantly.
                </p>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">

                <div class="xl:col-span-4 sticky top-24 z-30">
                    <div class="border rounded-3xl p-6 shadow-2xl">

                        <div class="flex justify-between items-center mb-6 border-b border-slate-700 pb-4">
                            <h3 class="font-bold  text-blue-400"><i class="fas fa-terminal mr-2"></i>Input Data</h3>
                            <div class="flex bg-slate-800 p-1">
                                <button onclick="setPaper('A4')" id="btn-a4" class="px-4 py-1 text-xs font-bold bg-blue-600  transition-all">A4</button>
                                <button onclick="setPaper('thermal')" id="btn-thermal" class="px-4 py-1 text-xs font-bold text-slate-400 hover:text-white transition-all">POS</button>
                            </div>
                        </div>

                        <div class="space-y-4 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
                            <div class="space-y-3 pb-4 border-b border-slate-700">
                                <label class="text-[10px] uppercase font-bold text-slate-500">Client Details</label>
                                <input type="text" id="inpInvNo" value="QTN-2026" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm focus:border-blue-500 outline-none" placeholder="Invoice No" oninput="updateHeader()">
                                <input type="text" id="inpName" placeholder="Client Name" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" oninput="updateHeader()">
                            </div>

                            <div class="space-y-3">
                                <label class="text-[10px] uppercase font-bold text-slate-500">New Item Entry</label>
                                <input type="text" id="newItemDesc" value="Software Service" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none">

                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" id="newItemHsn" value="9983" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="HSN">
                                    <input type="number" id="newItemRate" value="5000" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Rate">
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <input type="number" id="newItemQty" value="1" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Qty">
                                    <input type="number" id="newItemGst" value="18" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="GST%">
                                    <input type="number" id="newItemDisc" value="0" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Disc%">
                                </div>

                                <button onclick="addItem()" class="w-full py-3 bg-blue-700 text-white hover:bg-blue-600  text-xs font-bold uppercase tracking-wider transition mt-2 border border-blue-500">
                                    <i class="fas fa-plus mr-1"></i> Add Record
                                </button>
                            </div>

                            <div class="pt-2">
                                <h4 class="text-xs text-slate-400 font-bold uppercase mb-2">Queue (<span id="itemCount">0</span>)</h4>
                                <div id="controlPanelList" class="space-y-1"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-8 bg-slate-800 p-8 lg:p-12 min-h-[800px] flex justify-center items-start shadow-inner border border-slate-700">

                    <div id="view-a4" class="bg-white shadow-2xl w-[210mm] min-h-[200mm] p-10 text-black text-xs font-sans leading-tight flex flex-col transform transition-transform duration-500 origin-top">
                        <div class="text-center mb-2">
                            <h1 class="font-bold  uppercase tracking-widest text-slate-900">Tax Invoice</h1>
                            <p class="text-[10px] text-slate-500">Original for Recipient</p>
                        </div>

                        <div class="border-2 border-slate-900 flex-grow flex flex-col">
                            <div class="flex border-b-2 border-slate-900">
                                <div class="w-1/2 p-4 border-r-2 border-slate-900">
                                    <h2 class="font-bold  text-blue-900">RudraTech IT Services</h2>
                                    <p class="text-slate-600">Tech Park, Mumbai, India</p>
                                    <p class="font-bold mt-2">GSTIN: 27AAAAA0000A1Z5</p>
                                </div>
                                <div class="w-1/2 p-4">
                                    <div class="flex justify-between mb-2">
                                        <span class="font-bold">Invoice #:</span>
                                        <span id="outInvNo" class="font-mono">QTN-2026</span>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-bold">Date:</span>
                                        <span><?php echo date('d-M-Y'); ?></span>
                                    </div>
                                    <div class="mt-4 pt-2 border-t border-slate-300">
                                        <p class="text-[10px] font-bold uppercase text-slate-500">Bill To:</p>
                                        <p class="font-bold text-md outName">Client Name</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex bg-slate-900 text-white font-bold py-2 text-center text-[11px]">
                                <div class="w-[5%]">#</div>
                                <div class="w-[45%] text-left pl-2">Description</div>
                                <div class="w-[10%]">HSN</div>
                                <div class="w-[10%]">Qty</div>
                                <div class="w-[10%]">Rate</div>
                                <div class="w-[10%]">GST</div>
                                <div class="w-[10%] text-right pr-2">Total</div>
                            </div>

                            <div id="invoiceBody" class="flex-grow"></div>

                            <div class="border-t-2 border-slate-900 p-4">
                                <div class="flex justify-end space-y-1 text-right">
                                    <div class="w-1/2">
                                        <div class="flex justify-between text-slate-500"><span>Taxable Value:</span> <span id="outTotalTaxable">0.00</span></div>
                                        <div class="flex justify-between text-slate-500"><span>CGST:</span> <span id="outTotalCgst">0.00</span></div>
                                        <div class="flex justify-between text-slate-500"><span>SGST:</span> <span id="outTotalSgst">0.00</span></div>
                                        <div class="flex justify-between text-slate-900 font-bold  mt-2 pt-2 border-t border-slate-300">
                                            <span>Grand Total:</span> <span id="outGrandTotal">0.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-[10px] italic text-slate-500">
                                    Amount in words: <span id="outWords" class="font-bold not-italic text-slate-900">Zero Only</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-pos" class="hidden bg-white w-[80mm] p-4 font-mono text-xs shadow-xl">
                        <div class="text-center border-b border-dashed border-black pb-2 mb-2">
                            <h2 class="font-bold">RUDRA POS</h2>
                            <p>Mumbai, India</p>
                        </div>
                        <div class="mb-2">
                            <p>Inv: <span id="posInv">001</span></p>
                            <p>Client: <span class="outName">Name</span></p>
                        </div>
                        <div class="border-b border-black mb-1"></div>
                        <div id="posBody"></div>
                        <div class="border-b border-black mt-1 mb-1"></div>
                        <div class="flex justify-between font-bold text-sm">
                            <span>TOTAL</span>
                            <span id="posTotal">0.00</span>
                        </div>
                        <div class="text-center mt-4 text-[10px]">*** THANK YOU ***</div>
                    </div>

                </div>
            </div>
        </div>
    </section>








    <section class="py-24 bg-[#0f172a]/100 relative overflow-hidden border-t border-slate-800">

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-blue-600/10 rounded-full blur-[120px]"></div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-40 max-md:gap-8  items-center ">

                <div class="order-2 lg:order-1">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-slate-700 bg-slate-800/50 text-blue-400 text-xs font-bold tracking-widest uppercase mb-6">
                        <i class="fab fa-android"></i> <i class="fab fa-apple"></i> Cross-Platform Sync
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                        The Constitution <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white">In Your Pocket.</span>
                    </h2>
                    <p class="text-slate-400  mb-8 leading-relaxed border-l-2 border-blue-700 pl-6">
                        Seamlessly switch between Web and Mobile. Students can practice <strong>Bhartiya Samvidhan</strong> quizzes on the go. Live syncing ensures progress is never lost.
                    </p>

                    <div class="space-y-6">
                        <div class="p-4 bg-slate-800/50 border border-slate-700 rounded-xl">
                            <p class="text-xs text-blue-400 font-bold uppercase mb-1" id="slide-label">FEATURE SPOTLIGHT</p>
                            <h4 class=" font-bold text-white transition-all duration-500" id="slide-title">Smart Dashboard</h4>
                            <p class="text-sm text-slate-400 transition-all duration-500" id="slide-desc">Track progress and view upcoming exams instantly.</p>
                        </div>

                        <div class="flex gap-4 mt-8">
                            <button class="flex items-center gap-3 px-6 py-3 bg-white text-slate-900 rounded-lg hover:bg-blue-50 transition font-bold text-sm">
                                <i class="fab fa-google-play "></i> Get on Android
                            </button>
                            <button class="flex items-center gap-3 px-6 py-3 border border-slate-600 text-white rounded-lg hover:border-white transition font-bold text-sm">
                                <i class="fab fa-apple "></i> App Store
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative order-1 lg:order-2 h-[600px] flex items-center justify-center perspective-1000">

                  <div class="absolute right-0 top-10 w-[260px] h-[520px] bg-slate-900 rounded-[2.5rem] border-[6px] border-slate-800 shadow-2xl transform rotate-y-[-15deg] translate-z-[-50px] opacity-60 z-0">
                        <div class="w-full h-full bg-slate-800 rounded-[2.2rem] overflow-hidden relative">
                            <img src="/asset/software/c1 (2).jpeg" alt="Background Phone" class="w-full h-full object-cover opacity-50">
                        </div>
                    </div> 

                    <div class="absolute left-10 bottom-10 w-[300px] h-[550px] bg-slate-900 rounded-[3rem] border-[8px] border-slate-800 shadow-[0_20px_50px_rgba(37,99,235,0.3)] transform rotate-y-[15deg] translate-z-[50px] transition-transform duration-500 hover:rotate-y-0 hover:scale-105 z-20 overflow-hidden">

                        <div class="w-full h-full bg-slate-900 rounded-[1rem] overflow-hidden relative">

                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-slate-800 rounded-b-xl z-30"></div>

                            <img id="app-slider-img" src="/asset/software/c1 (2).jpeg" alt="App Screen" class="w-full h-full object-cover object-top transition-opacity duration-500 opacity-100">

                            <div class="absolute bottom-4 left-0 w-full flex justify-center gap-2 z-30">
                                <div class="w-2 h-2 rounded-full bg-white transition-all duration-300 slide-dot active" data-index="0"></div>
                                <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300 slide-dot" data-index="1"></div>
                                <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300 slide-dot" data-index="2"></div>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- MOBILE APP CAROUSEL LOGIC ---
            const slides = [{
                    img: '/asset/software/c1 (2).jpeg', // Replace with your image
                    title: 'Smart Dashboard',
                    desc: 'Track progress, view subjects, and check upcoming exams instantly.'
                },
                {
                    img: '/asset/software/c1 (1).jpeg', // Replace with your image
                    title: 'Live Exam Interface',
                    desc: 'Distraction-free environment with timer and auto-save functionality.'
                },
                {
                    img: '/asset/software/c1 (4).jpeg', // Replace with your image
                    title: 'Instant Analytics',
                    desc: 'Detailed scorecards, rank analysis, and performance graphs.'
                }
            ];

            let currentIndex = 0;
            const imgElement = document.getElementById('app-slider-img');
            const titleElement = document.getElementById('slide-title');
            const descElement = document.getElementById('slide-desc');
            const dots = document.querySelectorAll('.slide-dot');

            function showSlide(index) {
                // 1. Fade Out
                imgElement.style.opacity = '0';
                titleElement.style.opacity = '0';
                descElement.style.opacity = '0';

                setTimeout(() => {
                    // 2. Change Content
                    imgElement.src = slides[index].img;
                    titleElement.innerText = slides[index].title;
                    descElement.innerText = slides[index].desc;

                    // 3. Update Dots
                    dots.forEach((dot, i) => {
                        if (i === index) {
                            dot.classList.remove('bg-white/30');
                            dot.classList.add('bg-white', 'w-4'); // Make active dot wider
                        } else {
                            dot.classList.add('bg-white/30');
                            dot.classList.remove('bg-white', 'w-4');
                        }
                    });

                    // 4. Fade In
                    imgElement.style.opacity = '1';
                    titleElement.style.opacity = '1';
                    descElement.style.opacity = '1';
                }, 500);
            }

            // Auto Cycle every 3 seconds
            setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }, 3000);
        });
    </script>


    <section id="exam-ai" class="py-24 bg-white relative overflow-hidden">

        <div class="w-[85%] mx-auto">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Product Showcase: Constitution Study
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                    AI-Proctored <span class="text-blue-600">Exam Platform</span>
                </h2>
                <p class="text-slate-500 mt-2 max-w-2xl mx-auto">
                    Experience our secure testing environment. The simulation below demonstrates <strong>Face Detection</strong>, <strong>Real-time Validation</strong>, and <strong>Instant Result Generation</strong>.
                </p>
            </div>

            <div class="relative bg-slate-900 rounded-xl shadow-2xl border-[12px] border-slate-800 aspect-[16/9] overflow-hidden max-w-5xl mx-auto">

                <div class="w-full h-full bg-slate-50 relative font-sans" id="exam-sim-screen">

                    <div class="absolute top-4 right-4 w-40 h-28 bg-black rounded border-2 border-blue-500 z-50 overflow-hidden shadow-lg">
                        <div class="w-full h-full relative bg-slate-800 flex items-end justify-center">
                            <div class="w-20 h-20 bg-slate-600 rounded-t-full"></div>
                            <div class="absolute top-0 w-full h-[2px] bg-blue-400 shadow-[0_0_15px_#3b82f6] animate-[scan-vertical_2s_linear_infinite]"></div>
                            <div class="absolute top-6 left-10 w-20 h-16 border-2 border-blue-500 rounded hidden" id="face-box">
                                <span class="absolute -top-3 left-0 bg-blue-500 text-black text-[6px] px-1 font-bold">MATCH 98%</span>
                            </div>
                        </div>
                        <div class="absolute bottom-1 left-1 flex items-center gap-1">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-white text-[8px] font-bold">PROCTORING ON</span>
                        </div>
                    </div>

                    <div id="sim-scene-ques" class="absolute inset-0 p-10 flex flex-col justify-center transition-opacity duration-500">
                        <div class="bg-white p-8 rounded-none border-l-4 border-blue-600 shadow-lg w-full max-w-3xl mx-auto">
                            <div class="flex justify-between mb-4">
                                <span class="text-blue-600 font-bold text-xs uppercase">Indian Constitution Quiz</span>
                                <span class="text-slate-400 text-xs font-mono">Timer: 00:15</span>
                            </div>

                            <h3 class="text-2xl font-bold text-slate-800 mb-8 leading-snug">
                                Which Article of the Indian Constitution ensures 'Equality before Law'?
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">A. Article 19</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium" id="correct-ans">B. Article 14</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">C. Article 21</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">D. Article 32</div>
                            </div>
                        </div>
                    </div>

                    <div id="sim-scene-result" class="absolute inset-0 bg-white flex flex-col items-center justify-center opacity-0 transition-opacity duration-500 z-40">
                        <div class="scale-0 transition-transform duration-500 delay-100" id="trophy-anim">
                            <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mb-6 border border-blue-100">
                                <i class="fas fa-trophy text-5xl text-blue-600"></i>
                            </div>
                        </div>

                        <h2 class="text-4xl font-extrabold text-slate-900 mb-2 translate-y-4 opacity-0 transition-all duration-500 delay-200" id="result-text">Exam Passed</h2>
                        <p class="text-slate-500 mb-8 translate-y-4 opacity-0 transition-all duration-500 delay-300" id="result-sub">Your knowledge of the Constitution is excellent.</p>

                        <div class="flex gap-8 translate-y-4 opacity-0 transition-all duration-500 delay-400" id="result-stats">
                            <div class="text-center p-4 bg-slate-50 border border-slate-200 min-w-[100px]">
                                <p class="text-xs text-slate-400 uppercase font-bold">Score</p>
                                <p class="text-2xl font-extrabold text-blue-600">100%</p>
                            </div>
                            <div class="text-center p-4 bg-slate-50 border border-slate-200 min-w-[100px]">
                                <p class="text-xs text-slate-400 uppercase font-bold">Rank</p>
                                <p class="text-2xl font-extrabold text-blue-600">#1</p>
                            </div>
                        </div>

                        <div id="confetti-container" class="absolute inset-0 pointer-events-none overflow-hidden"></div>
                    </div>

                    <div id="sim-cursor" class="absolute top-0 left-0 w-6 h-6 z-50 drop-shadow-xl transition-all duration-700 ease-in-out">
                        <svg class="w-full h-full text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3.5 3.5L10 21.5L13.5 13.5L21.5 10L3.5 3.5Z" stroke="white" stroke-width="2" />
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </section>







    <section class="py-24 bg-white border-t border-slate-100">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    End-to-End Assessment Engine
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                    Beyond Just Questions & Answers. <br>
                    <span class="text-blue-600">A Complete Learning OS.</span>
                </h2>
                <p class="text-slate-500 mt-6 max-w-2xl mx-auto ">
                    Our platform isn't just an exam tool; it's an intelligent ecosystem. From <strong>question bank management</strong> to <strong>automated certification</strong>, every step is optimized by AI.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-blue-500 transition-all group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-blue-600 text-2xl mb-6">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Smart Question Bank</h3>
                        <p class="text-slate-500 mb-6 max-w-md">Upload thousands of questions via Excel/CSV in seconds. Supports <strong>Hindi (Unicode)</strong>, Math Formulas (LaTeX), and Image-based questions for biological or geographical diagrams.</p>
                        <div class="flex gap-3">
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">MCQs</span>
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">Integer Type</span>
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">Comprehension</span>
                        </div>
                    </div>
                </div>

                <div class="md:row-span-2 p-3 rounded-3xl  text-white border border-slate-800 hover:border-blue-500 transition-all group relative overflow-hidden">
                    <img src="/asset/software/onlineexam.webp" alt="" class="h-full w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                </div>

                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-6">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class=" font-bold text-slate-900 mb-2">Auto-Certification</h3>
                    <p class="text-sm text-slate-500">Generate and email PDF certificates instantly upon passing an exam.</p>
                </div>

                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-6">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class=" font-bold text-slate-900 mb-2">Deep Analytics</h3>
                    <p class="text-sm text-slate-500">Identify weak topics (e.g., "History") vs strong ones with AI performance graphs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#020617] relative overflow-hidden">
        <div class="absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-900 to-transparent hidden lg:block"></div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-3xl font-bold text-white">How It Works: <span class="text-blue-500">Zero Friction</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="text-center">
                        <h4 class=" font-bold text-white mb-2">1. Create</h4>
                        <p class="text-slate-400 text-sm">Admin sets up the exam, uploads questions, and sets the timer.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <div class="text-center">
                        <h4 class=" font-bold text-white mb-2">2. Attempt</h4>
                        <p class="text-slate-400 text-sm">Students login via App/Web. AI verifies identity via Face Scan.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="text-center">
                        <h4 class=" font-bold text-white mb-2">3. Auto-Grade</h4>
                        <p class="text-slate-400 text-sm">System calculates score, negative marks, and rank instantly.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="text-center">
                        <h4 class=" font-bold text-white mb-2">4. Result</h4>
                        <p class="text-slate-400 text-sm">Student receives detailed scorecard and topic-wise analysis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="relative">

                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-600 rounded-2xl blur opacity-20"></div>

                <div class="relative bg-slate-900 rounded-xl shadow-2xl border border-slate-800 overflow-hidden">

                    <div class="bg-slate-950 px-4 py-3 flex items-center gap-2 border-b border-slate-800 z-20 relative">
                        <div class="flex gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-blue-500"></div>
                        </div>
                        <div class="ml-4 flex-1 text-center">
                            <span class="text-[10px] font-mono text-slate-500 bg-slate-900 px-3 py-1 rounded border border-slate-800">
                                <i class="fas fa-lock text-[8px] mr-1"></i> secure-exam.rudratech.com
                            </span>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" id="software-showcase">

                        <div class="item relative group">
                            <img src="/asset/software/d1.jpg" class="w-full h-auto object-cover opacity-90" alt="Dashboard">

                            <div class="feature-popup absolute bottom-8 left-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-y-10 opacity-0 transition-all duration-700 delay-300 max-w-[200px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-chart-pie"></i></div>
                                    <span class="text-xs font-bold text-white">Live Dashboard</span>
                                </div>
                                <p class="text-[10px] text-slate-400 leading-tight">Real-time performance monitoring.</p>
                            </div>
                        </div>

                        <div class="item relative group">
                            <img src="/asset/software/d2 (1).jpg" class="w-full h-auto object-cover opacity-90" alt="Exam List">

                            <div class="feature-popup absolute top-8 right-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-y-[-10px] opacity-0 transition-all duration-700 delay-300 max-w-[200px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-list-ul"></i></div>
                                    <span class="text-xs font-bold text-white">Exam Scheduler</span>
                                </div>
                                <p class="text-[10px] text-slate-400 leading-tight">Schedule and manage exams.</p>
                            </div>
                        </div>

                        <div class="item relative group">
                            <img src="/asset/software/d2 (2).jpg" class="w-full h-auto object-cover opacity-90" alt="Question Screen">

                            <div class="feature-popup absolute bottom-8 right-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-x-10 opacity-0 transition-all duration-700 delay-300 max-w-[220px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-user-check"></i></div>
                                    <span class="text-xs font-bold text-white">Exam List</span>
                                </div>
                                <div class="h-1 w-full bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 w-[90%]"></div>
                                </div>
                                <p class="text-[8px] text-blue-400 mt-1 text-right">Completed: 90%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-wider mb-6 border border-slate-200">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span> Live Security Protocols
                </div>

                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                    Ironclad Integrity with <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Neural Surveillance</span>
                </h2>

                <p class="text-slate-500 mb-10  leading-relaxed border-l-4 border-blue-100 pl-4">
                    Our AI doesn't just watch; it understands behavior. We utilize browser-level locking and advanced vision models to guarantee 100% exam sanctity.
                </p>

                <div class="space-y-5">

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-window-maximize"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900  mb-1 group-hover:text-blue-600 transition-colors">Window Locking Mechanism</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">The exam auto-terminates instantly if the student attempts to switch tabs, open dev tools, or minimize the browser.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900  mb-1 group-hover:text-blue-600 transition-colors">Gaze Tracking AI</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Advanced computer vision tracks iris movement to detect if the candidate is looking at notes, another screen, or away from the monitor.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-random"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900  mb-1 group-hover:text-blue-600 transition-colors">Dynamic Randomization</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Prevents collaboration. Every student receives a unique sequence of questions and randomized option ordering.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-28 bg-slate-50 relative overflow-hidden border-t border-slate-200">

        <div class="absolute inset-0 opacity-[0.4]" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

        <div class="w-[85%] mx-auto relative z-10">

            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    System Architecture
                </span>
                <h2 class="text-4xl font-extrabold text-slate-900">
                    Engineered for <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Scale & Speed</span>
                </h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                    Common questions regarding infrastructure, localization, and automated logic.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center  flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-server"></i>
                        </div>
                        <div>
                            <h4 class=" font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Cloud Scalability</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Built on <strong>Node.js & AWS Lambda</strong> architecture. The system auto-scales to handle <strong>10,000+ concurrent students</strong> effortlessly, ensuring zero downtime during peak exam hours.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center  flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-language"></i>
                        </div>
                        <div>
                            <h4 class=" font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Unicode Localization</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Full support for <strong>Hindi, Marathi, & Regional Languages</strong>. Our database handles Unicode fonts perfectly, allowing complex Hindi questions and mathematical formulas without breaking.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center  flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div>
                            <h4 class=" font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Low-Bandwidth Optimization</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Engineered for rural India. Our proprietary <strong>JSON compression</strong> ensures questions load instantly even on 2G/3G networks, consuming minimal data.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center  flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div>
                            <h4 class=" font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Real-Time Result Logic</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Zero manual grading. The moment a student clicks "Submit", our server processes answers, applies <strong>negative marking logic</strong>, and generates a PDF report in < 200ms.
                                    </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-900 text-white text-center">
        <div class="w-[85%] mx-auto">
            <h2 class="text-3xl font-bold mb-6">Ready to digitize your business logic?</h2>
            <p class="text-blue-200 mb-8 max-w-2xl mx-auto">From custom ERPs to AI-powered platforms, RudraTech delivers software that scales.</p>
            <div class="flex justify-center gap-4">
                <a href="contact.php" class="bg-white text-blue-900 font-bold py-3 px-8 hover:bg-blue-50 transition-colors shadow-lg">Start Project</a>
            </div>
        </div>
    </section>



    <script>
        // ==========================================
        // 1. BILLING ENGINE LOGIC
        // ==========================================
        let items = [];
        const fmt = new Intl.NumberFormat('en-IN', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        function setPaper(type) {
            const a4 = document.getElementById('view-a4');
            const pos = document.getElementById('view-pos');
            const btnA4 = document.getElementById('btn-a4');
            const btnPos = document.getElementById('btn-thermal');

            if (type === 'thermal') {
                a4.classList.add('hidden');
                pos.classList.remove('hidden');
                btnPos.classList.replace('text-slate-400', 'text-white');
                btnPos.classList.add('bg-blue-600');
                btnA4.classList.remove('bg-blue-600', 'text-white');
                btnA4.classList.add('text-slate-400');
            } else {
                a4.classList.remove('hidden');
                pos.classList.add('hidden');
                btnA4.classList.add('bg-blue-600', 'text-white');
                btnA4.classList.remove('text-slate-400');
                btnPos.classList.remove('bg-blue-600', 'text-white');
                btnPos.classList.add('text-slate-400');
            }
        }

        function addItem() {
            const desc = document.getElementById('newItemDesc').value;
            const hsn = document.getElementById('newItemHsn').value;
            const rate = parseFloat(document.getElementById('newItemRate').value) || 0;
            const qty = parseFloat(document.getElementById('newItemQty').value) || 0;
            const gst = parseFloat(document.getElementById('newItemGst').value) || 0;
            const disc = parseFloat(document.getElementById('newItemDisc').value) || 0;

            items.push({
                desc,
                hsn,
                rate,
                qty,
                gst,
                disc
            });
            renderInvoice();
            renderControlList();
        }

        function deleteItem(index) {
            items.splice(index, 1);
            renderInvoice();
            renderControlList();
        }

        function renderControlList() {
            const list = document.getElementById('controlPanelList');
            document.getElementById('itemCount').innerText = items.length;
            let html = '';
            items.forEach((item, index) => {
                html += `
                    <div class="flex justify-between items-center bg-slate-700/50 p-2 border border-slate-600 mb-1">
                        <div class="truncate w-2/3">
                            <p class="text-xs font-bold text-white truncate">${item.desc}</p>
                        </div>
                        <button onclick="deleteItem(${index})" class="text-blue-400 hover:text-blue-300"><i class="fas fa-trash"></i></button>
                    </div>`;
            });
            list.innerHTML = html;
        }

        function updateHeader() {
            const inv = document.getElementById('inpInvNo').value;
            const name = document.getElementById('inpName').value || "Client Name";
            document.getElementById('outInvNo').innerText = inv;
            document.getElementById('posInv').innerText = inv;
            document.querySelectorAll('.outName').forEach(el => el.innerText = name);
        }

        function renderInvoice() {
            const tbody = document.getElementById('invoiceBody');
            const posBody = document.getElementById('posBody');
            let htmlA4 = '';
            let htmlPos = '';
            let gTaxable = 0,
                gTotalTax = 0,
                gGrandTotal = 0;

            items.forEach((item, i) => {
                const base = item.rate * item.qty;
                const discAmt = base * (item.disc / 100);
                const taxable = base - discAmt;
                const taxAmt = taxable * (item.gst / 100);
                const total = taxable + taxAmt;

                gTaxable += taxable;
                gTotalTax += taxAmt;
                gGrandTotal += total;

                htmlA4 += `
                <div class="flex text-[11px] border-b border-slate-200 py-1">
                    <div class="w-[5%] text-center">${i + 1}</div>
                    <div class="w-[45%] pl-2 truncate">${item.desc}</div>
                    <div class="w-[10%]">${item.hsn}</div>
                    <div class="w-[10%]">${item.qty}</div>
                    <div class="w-[10%]">${fmt.format(item.rate)}</div>
                    <div class="w-[10%]">${item.gst}%</div>
                    <div class="w-[10%] text-right pr-2 font-bold">${fmt.format(total)}</div>
                </div>`;

                htmlPos += `
                <div class="flex justify-between mb-1 border-b border-dashed border-gray-300 pb-1">
                    <span class="truncate w-2/3">${item.desc}<br>x${item.qty}</span>
                    <span class="font-bold">${Math.round(total)}</span>
                </div>`;
            });

            tbody.innerHTML = htmlA4;
            posBody.innerHTML = htmlPos;

            document.getElementById('outTotalTaxable').innerText = fmt.format(gTaxable);
            document.getElementById('outTotalCgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outTotalSgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outGrandTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('posTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('outWords').innerText = "INR " + Math.round(gGrandTotal) + " Only";
        }

        // ==========================================
        // 2. EXAM SIMULATOR LOGIC
        // ==========================================
        document.addEventListener('DOMContentLoaded', () => {
            const cursor = document.getElementById('sim-cursor');
            const correctAns = document.getElementById('correct-ans');
            const faceBox = document.getElementById('face-box');
            const sceneQues = document.getElementById('sim-scene-ques');
            const sceneResult = document.getElementById('sim-scene-result');
            const screen = document.getElementById('exam-sim-screen');

            // Result Elements
            const trophy = document.getElementById('trophy-anim');
            const resText = document.getElementById('result-text');
            const resSub = document.getElementById('result-sub');
            const resStats = document.getElementById('result-stats');

            const sleep = ms => new Promise(r => setTimeout(r, ms));

            async function runExamSim() {
                // Reset Visuals
                cursor.style.transform = `translate(20px, 20px)`;
                sceneQues.style.opacity = '1';
                sceneResult.style.opacity = '0';
                sceneResult.style.zIndex = '-1';
                faceBox.classList.add('hidden');

                correctAns.classList.remove('bg-blue-100', 'border-blue-500', 'text-blue-900');
                correctAns.classList.add('hover:bg-slate-50', 'border-slate-200');

                // Reset Result Anims
                trophy.classList.remove('scale-100');
                trophy.classList.add('scale-0');
                [resText, resSub, resStats].forEach(el => {
                    el.classList.remove('translate-y-0', 'opacity-100');
                    el.classList.add('translate-y-4', 'opacity-0');
                });
                document.getElementById('confetti-container').innerHTML = '';

                await sleep(1000);

                // 1. Face Detect
                faceBox.classList.remove('hidden');
                await sleep(1500);

                // 2. Move Cursor
                const rect = correctAns.getBoundingClientRect();
                const screenRect = screen.getBoundingClientRect();
                const x = rect.left - screenRect.left + rect.width / 2;
                const y = rect.top - screenRect.top + rect.height / 2;

                cursor.style.transform = `translate(${x}px, ${y}px)`;
                await sleep(1000);

                // 3. Click
                correctAns.classList.remove('hover:bg-slate-50', 'border-slate-200');
                correctAns.classList.add('bg-blue-100', 'border-blue-500', 'text-blue-900');
                cursor.style.transform = `translate(${x-5}px, ${y+5}px)`;
                await sleep(200);
                cursor.style.transform = `translate(${x}px, ${y}px)`;

                await sleep(1000);

                // 4. Result Transition
                sceneQues.style.opacity = '0';
                sceneResult.style.zIndex = '40';
                sceneResult.style.opacity = '1';

                await sleep(300);
                trophy.classList.remove('scale-0');
                trophy.classList.add('scale-100');

                await sleep(200);
                resText.classList.remove('translate-y-4', 'opacity-0');
                resText.classList.add('translate-y-0', 'opacity-100');

                await sleep(100);
                resSub.classList.remove('translate-y-4', 'opacity-0');
                resSub.classList.add('translate-y-0', 'opacity-100');

                await sleep(100);
                resStats.classList.remove('translate-y-4', 'opacity-0');
                resStats.classList.add('translate-y-0', 'opacity-100');

                // 5. Confetti
                createConfetti();

                // Loop
                await sleep(6000);
                runExamSim();
            }

            function createConfetti() {
                const container = document.getElementById('confetti-container');
                const colors = ['#2563eb', '#3b82f6', '#60a5fa', '#93c5fd', '#1e40af']; // Blue Shades
                for (let i = 0; i < 60; i++) {
                    const conf = document.createElement('div');
                    conf.classList.add('absolute', 'w-1.5', 'h-1.5', 'rounded-sm');
                    conf.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    conf.style.left = Math.random() * 100 + '%';
                    conf.style.top = '-10px';
                    conf.style.animation = `fall-blue ${Math.random() * 2 + 1}s linear forwards`;
                    container.appendChild(conf);
                }
            }

            runExamSim();
        });

        // Init Billing
        addItem();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            var owl = $(".owl-carousel");

            owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000, // Time to wait on each slide (5 seconds)
                smartSpeed: 1000, // Speed of the sliding animation (1 second smooth slide)
                autoplayHoverPause: true, // Stops sliding when user hovers

                // Standard Slide Settings (No Fade)
                animateOut: false,
                animateIn: false
            });

            // OPTIONAL: Reset animations when slide changes so they replay
            owl.on('changed.owl.carousel', function(event) {
                $('.feature-popup').removeClass('animated'); // Reset
                setTimeout(function() {
                    $('.owl-item.active .feature-popup').addClass('animated'); // Re-trigger
                }, 100);
            });
        });
    </script>
</body> -->

</html>