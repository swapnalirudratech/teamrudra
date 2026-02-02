<?php
$page_title = "about"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php" ?>



<body>

    <?php include "include/navbar.php" ?>
    <main>

        <section class="relative min-h-[90vh] flex items-center px-6 lg:px-24 py-16 overflow-hidden bg-white">
            <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[600px] h-[600px] bg-blue-50/60 rounded-full blur-3xl opacity-60"></div>

            <div class="container mx-auto grid lg:grid-cols-2 gap-20 items-center relative z-10">

                <div class="relative z-20">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="h-[2px] w-10 bg-blue-600"></span>
                        <span class="text-[11px] font-bold uppercase tracking-[0.3em] text-slate-400">Our Heritage</span>
                    </div>

                    <h1 class="text-6xl lg:text-8xl font-extrabold tracking-tighter leading-[1.05] pb-8 text-reveal">
                        Building the <br />
                        <span class="italic font-light">next generation</span> <br />
                        of digital.
                    </h1>

                    <p class="text-slate-500 text-lg max-w-lg mb-12 leading-relaxed">
                        Established in 2020, we specialize in high-performance engineering. We don't just build websites; we architect
                        <span class="text-slate-900 font-semibold underline decoration-blue-600 decoration-2 underline-offset-4">scalable technological ecosystems</span>
                        for forward-thinking brands.
                    </p>

                    <div class="flex flex-wrap items-center gap-6">
                        <button class="bg-slate-900 text-white px-10 py-4 rounded-full font-bold shadow-2xl hover:bg-blue-600 hover:text-black transition-all duration-500 transform hover:-translate-y-1">
                            Work With Us
                        </button>
                        <div class="flex -space-x-3">
                            <img src="https://i.pravatar.cc/100?u=1" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                            <img src="https://i.pravatar.cc/100?u=2" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-slate-400">+15</div>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-[80%] aspect-[4/5] rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800"
                            alt="Team working"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                    </div>

                    <div class="absolute -bottom-10 -left-10 lg:left-0 w-[60%] aspect-square rounded-2xl overflow-hidden border-8 border-[#0a0a0a] shadow-[0_20px_50px_rgba(0,0,0,0.5)] animate-float-slow">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=600"
                            alt="Office collaboration"
                            class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md p-2 rounded-lg">
                            <div class="flex gap-1">
                                <div class="w-1 h-1 rounded-full bg-[#B6FF69]"></div>
                                <div class="w-1 h-1 rounded-full bg-white/20"></div>
                                <div class="w-1 h-1 rounded-full bg-white/20"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <style>
            /* Float animation */
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px) scale(1);
                }

                50% {
                    transform: translateY(-20px) scale(1.02);
                }
            }

            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            /* Heading text gradient */
            .text-reveal {
                background: linear-gradient(135deg, #0f172a 30%, #475569 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>

        <section class="relative py-24 bg-white overflow-hidden font-sans">
            <div class="absolute top-0 left-20 w-full h-full opacity-[0.03] pointer-events-none select-none">
                <span class="text-[18rem] font-black absolute -top-20 -left-20">LEAD</span>
            </div>

            <div class="w-[80vw] mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12 items-center justify-between w-full">

                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-[2px] w-8 bg-blue-600"></span>
                            <span class="text-[11px] font-bold uppercase tracking-[0.3em] text-slate-400">Leadership</span>
                        </div>

                        <h2 class="text-5xl lg:text-6xl font-black tracking-tighter text-slate-900 leading-none mb-6">
                            The Vision <br />
                            <span class="text-slate-400 italic font-light">Behind the Tech.</span>
                        </h2>

                        <p class="text-slate-500 text-lg leading-relaxed mb-8">
                            Guided by a passion for architectural excellence, our leadership ensures that every project at Rudra Tech meets the highest standards of scalability and innovation.
                        </p>

                        <div class="border-l-4 border-blue-600 pl-6 py-2 mb-10">
                            <p class="text-slate-800 italic font-medium text-xl">
                                "We don't just write code; we build the infrastructure for tomorrow's digital economy."
                            </p>
                        </div>

                        <div class="flex items-center gap-4">
                            <a href="#" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <button class="bg-slate-900 text-white px-8 py-3 rounded-full font-bold text-sm hover:bg-blue-600 hover:text-white transition-all">
                                Get in Touch
                            </button>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 bg-slate-50 rounded-[3rem] w-[80%] -rotate-3 scale-105 z-0"></div>

                        <div class="relative z-10 w-[80%] h-[600px] lg:aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-700 border-8 border-white">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=1000"
                                alt="Manager Name"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="absolute -bottom-10 -right-6 lg:-right-12 p-8 bg-white/90 backdrop-blur-2xl rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-white z-20 w-80 animate-float">
                            <div class="flex flex-col">
                                <span class="text-blue-600 font-black text-xs uppercase tracking-widest mb-2">Project Manager</span>
                                <h3 class="text-3xl font-black text-slate-900 tracking-tighter leading-none mb-4">Rahul Sachwani</h3>
                                <p class="text-[11px] text-slate-500 leading-relaxed font-medium">
                                    Expert in PHP ecosystem and high-performance database management. Driving technical strategy since 2020.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-15px);
                }
            }

            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
        </style>

        <section class="py-24 bg-white font-sans overflow-hidden hidden">
            <div class="container mx-auto px-6 lg:px-24">

                <div class="mb-20 flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div>
                        <span class="text-[10px] font-bold tracking-[0.4em] text-slate-400 uppercase block mb-4">Our Talent</span>
                        <h2 class="text-6xl font-black text-slate-900 tracking-tighter leading-none">
                            The Collective<span class="text-[#B6FF69]">.</span>
                        </h2>
                    </div>
                    <p class="text-slate-400 text-sm max-w-xs font-medium">
                        A unified team of engineers and designers building the future of Rudra Tech since 2020.
                    </p>
                </div>

                <div class="border-t border-slate-100">

                    <div class="group relative flex flex-wrap items-center justify-between py-8 border-b border-slate-100 transition-all duration-300 hover:bg-slate-50/50 px-4 cursor-crosshair">

                        <div class="fixed pointer-events-none z-50 opacity-0 group-hover:opacity-100 translate-x-12 group-hover:translate-x-0 transition-all duration-500 ease-out hidden lg:block"
                            style="top: 20%; right: 15%;">
                            <div class="relative w-64 h-80 rounded-[2rem] overflow-hidden shadow-2xl rotate-3">
                                <img src="https://i.pravatar.cc/400?u=1" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                            </div>
                        </div>

                        <div class="flex items-center gap-8">
                            <span class="text-slate-300 font-mono text-xs">01</span>
                            <h3 class="text-3xl lg:text-5xl font-bold tracking-tighter text-slate-400 group-hover:text-slate-900 transition-colors">
                                Rudra Sharma
                            </h3>
                        </div>

                        <div class="flex items-center gap-12 mt-4 lg:mt-0">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-400 group-hover:text-[#B6FF69] transition-colors">
                                Project Manager
                            </span>
                            <div class="hidden md:flex gap-2">
                                <span class="px-3 py-1 bg-slate-100 rounded text-[9px] font-bold text-slate-500 uppercase">PHP 8.4</span>
                                <span class="px-3 py-1 bg-slate-100 rounded text-[9px] font-bold text-slate-500 uppercase">System Arch</span>
                            </div>
                        </div>
                    </div>

                    <div class="group relative flex flex-wrap items-center justify-between py-8 border-b border-slate-100 transition-all duration-300 hover:bg-slate-50/50 px-4 cursor-crosshair">
                        <div class="fixed pointer-events-none z-50 opacity-0 group-hover:opacity-100 translate-x-12 group-hover:translate-x-0 transition-all duration-500 ease-out hidden lg:block"
                            style="top: 20%; right: 15%;">
                            <div class="relative w-64 h-80 rounded-[2rem] overflow-hidden shadow-2xl -rotate-2">
                                <img src="https://i.pravatar.cc/400?u=2" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="flex items-center gap-8">
                            <span class="text-slate-300 font-mono text-xs">02</span>
                            <h3 class="text-3xl lg:text-5xl font-bold tracking-tighter text-slate-400 group-hover:text-slate-900 transition-colors">
                                Aryan Malhotra
                            </h3>
                        </div>

                        <div class="flex items-center gap-12 mt-4 lg:mt-0">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-400 group-hover:text-[#B6FF69] transition-colors">
                                Senior Developer
                            </span>
                            <div class="hidden md:flex gap-2">
                                <span class="px-3 py-1 bg-slate-100 rounded text-[9px] font-bold text-slate-500 uppercase">Laravel</span>
                                <span class="px-3 py-1 bg-slate-100 rounded text-[9px] font-bold text-slate-500 uppercase">MySQL</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="py-24 bg-slate-50">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                    <div class="max-w-xl">
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-sm italic">Our Talent</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mt-2">The people behind the pixels.</h2>
                    </div>
                    <p class="text-slate-600 max-w-xs border-l-4 border-blue-600 pl-4">
                        A specialized team of developers and designers turning complex problems into elegant web solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                    <div class="group">
                        <div class="relative overflow-hidden rounded-2xl bg-slate-200 aspect-[4/5]">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=600"
                                alt="Team"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100 group-hover:scale-110">

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                                <div class="flex gap-4 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-slate-900 transition-colors">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-center lg:text-left">
                            <h3 class="text-xl font-bold text-slate-800">Alex Rivers</h3>
                            <p class="text-blue-600 font-semibold text-sm">Backend Architect</p>
                        </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden rounded-2xl bg-slate-200 aspect-[4/5]">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=600"
                                alt="Team"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100 group-hover:scale-110">

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                                <div class="flex gap-4 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-pink-500 transition-colors">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 text-center lg:text-left">
                            <h3 class="text-xl font-bold text-slate-800">Sarah Chen</h3>
                            <p class="text-blue-600 font-semibold text-sm">UI Designer</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

        <!-- About RudraTech Banner -->
        <section class="relative w-full h-[80vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center justify-center overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img
                    src="/asset/rudratech.jpg"
                    alt="About RudraTech IT Services"
                    class="w-full h-full object-cover object-bottom" />
                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center text-white px-6">
                <p class="uppercase tracking-widest text-sm text-gray-300 mb-4">
                    Since 2020
                </p>
                <h1 class="text-5xl md:text-6xl font-semibold mb-6">
                    RudraTech IT Services
                </h1>
                <p class=" text-lg  max-lg:text-base md: text-lg  max-lg:text-base  max-w-2xl mx-auto leading-relaxed text-gray-200">
                    Innovating digital transformation with next-gen IT solutions, cloud expertise,
                    and software excellence for a smarter tomorrow.
                </p>
            </div>
        </section>



        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            .animate-float {
                animation: float 3s ease-in-out infinite;
            }

            @keyframes pulse-slow {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.5;
                }
            }

            .animate-pulse-slow {
                animation: pulse-slow 3s ease-in-out infinite;
            }

            .gradient-border {
                position: relative;
                background: linear-gradient(to right, #1e40af, #3b82f6);
                padding: 2px;
            }

            .gradient-border-content {
                background: white;
            }
        </style>




        <!-- Welcome Section -->
        <section class="py-20 max-lg:py-12 bg-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-blue-50 to-transparent"></div>
            <div class="w-[80%] max-lg:w-[85%] mx-auto relative z-10">
                <div class="grid grid-cols-2 max-lg:grid-cols-1 gap-16 items-center">
                    <div>
                        <div class="mb-6">
                            <i class="fas fa-code text-5xl text-blue-600 max-lg:text-3xl"></i>
                        </div>
                        <p class="text-sm uppercase tracking-widest text-gray-500 mb-4 font-medium">
                            Welcome to RudraTech IT Services
                        </p>
                        <h2 class="max-lg:text-3xl text-5xl font-bold text-gray-900 mb-8 leading-tight">
                            Empowering Digital Growth with Innovative Technology
                        </h2>
                        <p class=" text-lg  max-lg:text-base text-gray-600 leading-relaxed mb-8">
                            Founded in 2020, <span class="font-semibold text-gray-900">RudraTech IT Services</span> is a young and dynamic
                            tech start-up powered by bright minds striving to make a meaningful difference for our clients.
                        </p>
                        <p class=" text-lg  max-lg:text-base text-gray-600 leading-relaxed">
                            We specialize in delivering solutions driven by cutting-edge technologies — helping businesses accelerate
                            their digital transformation journeys with confidence.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="absolute -top-6 -right-6 w-full h-full border-4 border-blue-600 rounded-sm"></div>
                        <div class="relative rounded-sm overflow-hidden shadow-2xl">
                            <img src="/asset/team4 (1).jpg" class="w-full h-[60vh] max-lg:h-[30vh] object-cover" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 max-lg:py-12 bg-gradient-to-b from-slate-50 to-white">
            <div class="w-[80%] max-lg:w-[85%] mx-auto">
                <div class="text-center mb-20 max-lg:mb-8">
                    <p class="text-sm uppercase tracking-widest text-blue-600 mb-4 font-medium">Our Expertise</p>
                    <h2 class="max-lg:text-3xl text-6xl font-bold text-gray-900 mb-6 max-lg:mb-3">Core Services</h2>
                    <p class=" text-lg  max-lg:text-base  text-gray-600 max-w-3xl mx-auto">
                        Smart, scalable, and secure IT solutions crafted to transform your business operations
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-lg:gap-2">
                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-cloud text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Cloud Solutions</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Seamless cloud infrastructure and migration solutions for next-gen enterprises.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-shield-halved text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Cybersecurity</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Advanced protection strategies ensuring your data and assets stay secure.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-bolt text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Automation</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Empowering operations through intelligent automation and AI-driven solutions.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-code text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Custom Development</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Tailored software built for your unique business needs and scalability.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-users text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">IT Consulting</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Strategic consulting to align your technology with business growth.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-award text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Quality Assurance</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Ensuring excellence with rigorous development and testing standards.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="py-20 max-lg:py-12 bg-slate-900 text-white relative overflow-hidden">
            <div class="w-[80%] max-lg:w-[85%] mx-auto relative z-10">
                <div class="grid max-lg:grid-cols-1 grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 w-full h-full border-4 border-blue-600 rounded-sm"></div>
                        <div class="relative bg-white p-12 max-lg:p-6 rounded-sm shadow-2xl">
                            <h3 class="text-3xl font-bold text-gray-900 mb-8">Our Core Values</h3>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Innovation-Driven:</strong> We stay ahead of emerging technologies to build future-ready solutions.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Client-Focused:</strong> Your goals guide everything we do — we deliver solutions that align with your vision.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Quality Assurance:</strong> We uphold the highest standards for performance and reliability.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm uppercase tracking-widest text-blue-400 mb-4 font-medium">What We Stand For</p>
                        <h2 class="max-lg:text-3xl text-5xl font-bold mb-8 leading-tight">
                            Future-Focused, Transparent, and Reliable
                        </h2>
                        <p class=" text-lg  max-lg:text-base  text-gray-300 leading-relaxed mb-6">
                            We believe in close collaboration — understanding your challenges and turning ideas into impactful digital realities.
                        </p>
                        <p class=" text-lg  max-lg:text-base text-gray-400 leading-relaxed">
                            Our team’s commitment to innovation and integrity ensures long-term partnerships, transparent communication, and dependable support every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>