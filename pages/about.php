<?php
$page_title = "about"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php" ?>

<style>
    /* Optional: Smooth transition for hover effects */
    .count-up {
        transition: all 0.3s ease-out;
    }
</style>

<body>

    <?php include "include/navbar.php" ?>
    <main>

        <section class="relative min-h-[90vh] flex items-center px-6 lg:px-24 pt-16 pb-28 bg-white overflow-x-hidden">
            <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[600px] h-[600px] bg-blue-50/60 rounded-full blur-3xl opacity-60"></div>

            <div class="container mx-auto grid lg:grid-cols-2 gap-20 items-center relative z-10">

                <div class="relative z-20">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="h-[2px] w-10 bg-blue-600"></span>
                        <span class="text-[11px] font-bold uppercase tracking-[0.3em] text-slate-400">Our Heritage</span>
                    </div>

                    <h1 class="text-3xl lg:text-6xl font-extrabold tracking-tighter leading-[1.05] pb-8 text-reveal">
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
                        <a href="/career" class="bg-slate-900 text-white px-10 py-4 rounded-full font-bold shadow-2xl hover:bg-blue-600  transition-all duration-500 transform hover:-translate-y-1">
                            Work With Us
                        </a>
                        <div class="flex -space-x-5">
                            <img src="/asset/image/sarvesh.jpeg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm">
                            <img src="/asset/image/naresh.jpg" class="w-16 h-16 rounded-full border-2 border-white shadow-sm">
                            <img src="/asset/image/nikita.jpeg" class="w-16 h-16 rounded-full border-2 border-white shadow-sm">
                            <div class="w-16 h-16 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-slate-400">+15</div>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-[80%] aspect-[4/4] rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="/asset/image/ofc.avif"
                            alt="Team working"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                    </div>

                    <div class="absolute -bottom-4 -left-10 lg:left-0 w-[50%] aspect-square rounded-2xl overflow-hidden border-8 border-[#0a0a0a] shadow-[0_20px_50px_rgba(0,0,0,0.5)] animate-float-slow">
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

        <section id="stats-section" class="py-20 text-white overflow-hidden bg-[#0a0f08]">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                    <div class="lg:col-span-8 relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500/20 to-blue-500/20 rounded-3xl blur-2xl opacity-50"></div>
                        <div class="absolute inset-0 opacity-90">
                            <svg class="w-full h-full" viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="400" cy="200" r="100" fill="url(#centerGlow)" opacity="0.2" />
                                <defs>
                                    <radialGradient id="centerGlow" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(400 200) rotate(90) scale(100)">
                                        <stop stop-color="#105cb9" />
                                        <stop offset="1" stop-color="#105cb9" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                                <g stroke="#105cb9" stroke-width="0.5" opacity="0.4">
                                    <path d="M400 200 L400 0" />
                                    <path d="M400 200 L800 0" />
                                    <path d="M400 200 L800 200" />
                                    <path d="M400 200 L800 400" />
                                    <path d="M400 200 L400 400" />
                                    <path d="M400 200 L0 400" />
                                    <path d="M400 200 L0 200" />
                                    <path d="M400 200 L0 0" />
                                </g>
                                <g stroke="#105cb9" stroke-width="0.8" opacity="0.3" fill="none">
                                    <path d="M400 160 L440 200 L400 240 L360 200 Z" />
                                    <path d="M400 100 L550 50 L600 200 L550 350 L400 300 L250 350 L200 200 L250 50 Z" />
                                    <path d="M400 40 L700 0 L780 200 L700 400 L400 360 L100 400 L20 200 L100 0 Z" stroke-dasharray="2 2" />
                                </g>
                                <circle cx="400" cy="200" r="4" fill="#3b82f6" class="animate-pulse">
                                    <animate attributeName="r" values="4;8;4" dur="2s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" values="1;0.5;1" dur="2s" repeatCount="indefinite" />
                                </circle>
                                <!-- <circle r="3" fill="#60a5fa">
                                    <animateMotion dur="4s" repeatCount="indefinite" path="M400 200 L800 0" />
                                </circle> -->
                            </svg>
                        </div>

                        <div class="bg-gradient-to-br from-[#0d150b] to-[#050804] border border-white/10 rounded-3xl p-8 md:p-12 overflow-hidden h-[450px] flex flex-col justify-between">

                            <div class="relative z-10">
                                <div class="flex items-center gap-2 mb-6">
                                    <span class="relative flex h-3 w-3">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                                    </span>
                                    <h2 class="text-xl font-medium text-blue-400 tracking-[0.2em] uppercase">Global Network</h2>
                                </div>

                                <h3 class="text-4xl md:text-5xl font-bold mb-12">We've Empowered</h3>

                                <div class="flex flex-wrap gap-12 md:gap-24">
                                    <div class="group/stat">
                                        <div class="text-6xl md:text-7xl font-bold mb-2 group-hover/stat:text-blue-400 transition-colors duration-500 flex">
                                            <span class="counter" data-target="10000">0</span>
                                            <span class="text-blue-500 font-light">+</span>
                                        </div>
                                        <p class="text-gray-400 uppercase tracking-widest text-xs font-semibold">Active Businesses</p>
                                    </div>
                                    <div class="w-px h-20 bg-gradient-to-b from-transparent via-white/20 to-transparent hidden md:block"></div>
                                    <div class="group/stat">
                                        <div class="text-6xl md:text-7xl font-bold mb-2 group-hover/stat:text-blue-400 transition-colors duration-500 flex">
                                            <span class="counter" data-target="150">0</span>
                                            <span class="text-blue-500 font-light">+</span>
                                        </div>
                                        <p class="text-gray-400 uppercase tracking-widest text-xs font-semibold">Digital Economies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-[#050804] to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 space-y-10 pl-4 lg:pl-12">

                        <div class="flex items-start gap-6 group">
                            <div class="p-3 rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-4xl font-bold flex">
                                    <span class="counter" data-target="2000">0</span>
                                    <span class="text-blue-500 font-light text-2xl ml-1">+</span>
                                </div>
                                <p class="text-gray-400 font-medium">Enterprise Solutions</p>
                            </div>
                        </div>

                        <div class="h-px bg-white/5 w-full"></div>

                        <div class="flex items-start gap-6 group">
                            <div class="p-3 rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-4xl font-bold flex">
                                    <span class="counter" data-target="6000">0</span>
                                    <span class="text-blue-500 font-light text-2xl ml-1">+</span>
                                </div>
                                <p class="text-gray-400 font-medium">Startups Empowered</p>
                            </div>
                        </div>

                        <div class="h-px bg-white/5 w-full"></div>

                        <div class="flex items-start gap-6 group">
                            <div class="p-3 rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-4xl font-bold flex">
                                    <span class="counter" data-target="120">0</span>
                                    <span class="text-blue-500 font-light text-2xl ml-1">+</span>
                                </div>
                                <p class="text-gray-400 font-medium">Million-Funded Startups</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script>
            // Configuration
            const duration = 2000; // Animation duration in milliseconds (2 seconds)

            function animateValue(obj, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);

                    // Ease-out function for smooth effect (starts fast, slows down)
                    const easeProgress = 1 - Math.pow(1 - progress, 3);

                    obj.innerHTML = Math.floor(easeProgress * (end - start) + start).toLocaleString(); // .toLocaleString() adds commas (e.g., 10,000)

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            // Intersection Observer to trigger animation when scrolled into view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.counter');
                        counters.forEach((counter) => {
                            const target = +counter.getAttribute('data-target');
                            animateValue(counter, 0, target, duration);
                        });
                        observer.unobserve(entry.target); // Run only once
                    }
                });
            }, {
                threshold: 0.5
            }); // Trigger when 50% of the section is visible

            // Start observing the section
            const section = document.getElementById('stats-section');
            if (section) {
                observer.observe(section);
            }
        </script>

        <section class="relative py-24 bg-white overflow-hidden font-sans">
            <!-- <div class="absolute top-0 left-20 w-full h-full opacity-[0.03] pointer-events-none select-none">
                <span class="text-[18rem] font-black absolute -top-20 -left-20">LEAD</span>
            </div> -->

            <div class="w-[80vw] max-md:w-full mx-auto px-6">
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
                            <a href="https://in.linkedin.com/in/rahul-sachwani-b3395a153?trk=people-guest_people_search-card" target="_blank" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all duration-300">
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
                        <div class="absolute inset-0 bg-slate-50 rounded-[3rem] w-[80%] max-md:w-full -rotate-3 scale-105 z-0"></div>

                        <div class="relative z-10 w-[80%] max-md:w-full h-[600px] max-md:h-[400px] lg:aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-700 border-8 border-white">
                            <img src="/asset/image/manager.jpeg"
                                alt="Manager Name"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="absolute -bottom-24 -right-2 lg:-right-12 lg:-bottom-10 p-8 max-md:p-6 bg-white/90 backdrop-blur-2xl rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-white z-20 w-80 max-md:w-60 animate-float">
                            <div class="flex flex-col">
                                <span class="text-blue-600 font-black text-xs uppercase tracking-widest mb-2">Chief Operating Officer</span>
                                <h3 class="text-2xl max-md:text-xl font-black text-slate-900 tracking-tighter leading-none mb-4">Mr. Rahul Sachwani</h3>
                                <p class="text-[11px] text-slate-500 leading-relaxed font-medium">
                                    Specializing in operational excellence and strategic scaling. Optimizing internal workflows and driving sustainable business growth since 2020.
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

        <section class="pt-24 px-4">

            <div class="max-w-3xl mx-auto text-center mb-24">
                <h2 class="text-4xl lg:text-6xl font-bold text-slate-900 tracking-tight mb-6">
                    Building <span class="text-blue-600">RudraTech.</span>
                </h2>
                <p class="text-lg text-slate-500">
                    A chronological look at how we went from a two-person team to a leading IT partner.
                </p>
            </div>

            <div class="max-w-5xl mx-auto space-y-12 pb-24">

                <div class="sticky top-24 min-h-[400px] bg-white rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-slate-100 flex flex-col lg:flex-row gap-10 overflow-hidden group transition-transform duration-500">

                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <span class="inline-block px-4 py-2 rounded-full bg-slate-100 text-slate-600 font-semibold text-sm w-fit mb-4">Chapter 01</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-slate-200 tracking-tighter group-hover:text-blue-50 transition-colors duration-500">2020</h3>
                    </div>

                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">The Foundation</h4>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            Rahul & Roshan founded <span class="font-semibold text-slate-900">RudraTech</span> in a small home office. We didn't have big servers, just big ideas and a commitment to writing clean code.
                        </p>
                        <div class="flex gap-3">
                            <div class="px-4 py-2 bg-slate-50 rounded-lg text-xs font-semibold text-slate-500 border border-slate-100">Web Design</div>
                            <div class="px-4 py-2 bg-slate-50 rounded-lg text-xs font-semibold text-slate-500 border border-slate-100">HTML/CSS</div>
                        </div>
                    </div>
                </div>

                <div class="sticky top-32 min-h-[400px] bg-gradient-to-br from-cyan-50 to-white rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-cyan-100 flex flex-col lg:flex-row gap-10 overflow-hidden group">

                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <span class="inline-block px-4 py-2 rounded-full bg-cyan-100 text-slate-600 font-semibold text-sm w-fit mb-4">Chapter 02</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-cyan-100/80 tracking-tighter group-hover:text-cyan-200 transition-colors duration-500">2021</h3>
                    </div>

                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Going Custom</h4>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            We pivoted from simple websites to <strong>Custom Software Solutions</strong>. We onboarded our first major educational clients and built our first proprietary CRM tool.
                        </p>
                        <div class="flex gap-3">
                            <div class="px-4 py-2 bg-white rounded-lg text-xs font-semibold text-cyan-600 border border-cyan-100">PHP Development</div>
                            <div class="px-4 py-2 bg-white rounded-lg text-xs font-semibold text-cyan-600 border border-cyan-100">Database Mgmt</div>
                        </div>
                    </div>
                </div>

                <div class="sticky top-40 min-h-[400px] bg-gradient-to-br from-blue-50 to-white rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-blue-100 flex flex-col lg:flex-row gap-10 overflow-hidden group">
                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-600 font-semibold text-sm w-fit mb-4">Chapter 03</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-blue-100/80 tracking-tighter group-hover:text-blue-200 transition-colors duration-500">2023</h3>
                    </div>
                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Enterprise Excellence</h4>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            We expanded into high-traffic enterprise applications. By mastering the <strong>MERN Stack</strong>, we delivered scalable solutions for industrial leaders and complex ERP systems.
                        </p>
                        <div class="flex gap-3">
                            <div class="px-4 py-2 bg-white rounded-lg text-xs font-semibold text-blue-600 border border-blue-100">Node.js</div>
                            <div class="px-4 py-2 bg-white rounded-lg text-xs font-semibold text-blue-600 border border-blue-100">React.js</div>
                            <div class="px-4 py-2 bg-white rounded-lg text-xs font-semibold text-blue-600 border border-blue-100">MongoDB</div>
                        </div>
                    </div>
                </div>

                <div class="sticky top-48 min-h-[400px] bg-gradient-to-br from-indigo-50 to-white rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-indigo-100 flex flex-col lg:flex-row gap-10 overflow-hidden group">

                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <span class="inline-block px-4 py-2 rounded-full bg-indigo-100 text-indigo-600 font-semibold text-sm w-fit mb-4">Chapter 04</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-indigo-100/80 tracking-tighter group-hover:text-indigo-200 transition-colors duration-500">2024</h3>
                    </div>

                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Rapid Scale</h4>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            The team grew to 10+ developers. We mastered the MERN stack and built complex enterprise apps for clients like <strong>The Indian Constitution Study</strong>.
                        </p>
                        <ul class="grid grid-cols-2 gap-2 text-sm text-slate-600 font-medium">
                            <li class="flex items-center gap-2">✓ 50+ Happy Clients</li>
                            <li class="flex items-center gap-2">✓ New Office Space</li>
                            <li class="flex items-center gap-2">✓ React & Node.js</li>
                        </ul>
                    </div>
                </div>

                <div class="sticky top-56 min-h-[400px] bg-gradient-to-br from-purple-50 to-white rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-purple-100 flex flex-col lg:flex-row gap-10 overflow-hidden group">
                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <span class="inline-block px-4 py-2 rounded-full bg-purple-100 text-purple-600 font-semibold text-sm w-fit mb-4">Chapter 05</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-purple-100/80 tracking-tighter group-hover:text-purple-200 transition-colors duration-500">2025</h3>
                    </div>
                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">The Smart Era</h4>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            We integrated <strong>AI-driven analytics</strong> and transitioned into a "Mobile-First" agency. Our team grew to 15+ experts, specializing in cross-platform apps and intelligent automation.
                        </p>
                        <ul class="grid grid-cols-2 gap-2 text-sm text-slate-600 font-medium">
                            <li class="flex items-center gap-2">✓ AI Automation</li>
                            <li class="flex items-center gap-2">✓ Flutter & React Native</li>
                            <li class="flex items-center gap-2">✓ Cloud Infrastructure</li>
                            <li class="flex items-center gap-2">✓ 80+ Global Projects</li>
                        </ul>
                    </div>
                </div>

                <div class="sticky top-72 min-h-[400px] bg-slate-900 rounded-[2.5rem] p-8 lg:p-12 shadow-2xl border border-slate-700 flex flex-col lg:flex-row gap-10 overflow-hidden relative">

                    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600 rounded-full blur-[150px] opacity-20 pointer-events-none"></div>

                    <div class="lg:w-1/3 flex flex-col justify-between relative z-10">
                        <span class="inline-block px-4 py-2 rounded-full bg-green-500/20 text-green-400 font-semibold text-sm w-fit mb-4 animate-pulse">● Live</span>
                        <h3 class="text-7xl lg:text-9xl font-bold text-slate-800 tracking-tighter">NOW</h3>
                    </div>

                    <div class="lg:w-2/3 flex flex-col justify-center relative z-10">
                        <h4 class="text-2xl lg:text-3xl font-bold text-white mb-4">Market Leaders</h4>
                        <p class="text-slate-400 text-lg leading-relaxed mb-8">
                            Today, RudraTech is a premier IT ecosystem. With <strong>100+ clients</strong> and products like <em>Snackita.in</em>, we aren't just coding—we are defining the digital future for businesses.
                        </p>

                        <a href="/get-in-touch" class="bg-white text-slate-900 px-8 py-4 rounded-full font-bold hover:bg-blue-50 transition-colors w-fit flex items-center gap-2 group">
                            Be Part of Our Future
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- best layoyt hover effect -->
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

        <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>


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