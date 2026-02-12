<?php
$page_title = "Dynamic Website Design | Rudra Tech IT Services";
include "include/header.php";
?>
<!Doctype html>
<html lang="en">

<body class="bg-white text-gray-950 antialiased">

    <?php include "include/navbar.php"; ?>

    <section class="relative min-h-[90vh] flex items-center bg-white overflow-hidden">
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div class="z-10 order-2 lg:order-1">
                <div class="w-20 h-1 bg-blue-600 mb-8"></div>

                <h1 class="text-3xl md:text-6xl font-black leading-[1] tracking-tighter mb-8 text-gray-950">
                    EXPERT <br>
                    <span class="text-blue-600">DYNAMIC WEBSITE</span> <br>
                    DEVELOPMENT.
                </h1>

                <p class=" text-gray-500 max-w-lg mb-10 font-medium leading-relaxed">
                    Rudra Tech is a leading <strong>web development company</strong> specializing in high-performance <strong>custom CMS</strong>, database-driven platforms, and <strong>scalable dynamic websites</strong> designed to convert visitors into customers.
                </p>

                <div class="flex gap-4">
                    <a href="/getquote" title="Get a free quote for web development" class="px-10 py-4 bg-gray-950 text-white text-xs font-black uppercase tracking-widest hover:bg-blue-600 transition-all duration-300">
                        Start Your Project
                    </a>
                </div>
            </div>

            <div class="relative order-1 lg:order-2 h-[60vh] ">
                <div class="absolute inset-0 bg-slate-100 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="/asset/image/bg.jpeg"
                        alt="Professional Dynamic Website Development Services by Rudra Tech"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 border-y border-gray-100 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="98">0</span>%
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Success Rate</p>
                </div>
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Websites Launched</p>
                </div>
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="24">0</span>/7
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Technical Support</p>
                </div>
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="100">0</span>%
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Secure Delivery</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // The lower the slower

            const startCounting = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;
                            const inc = target / speed;

                            if (count < target) {
                                counter.innerText = Math.ceil(count + inc);
                                setTimeout(updateCount, 15);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCount();
                        observer.unobserve(counter); // Stop observing after animation is done
                    }
                });
            };

            const observer = new IntersectionObserver(startCounting, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>

    <section class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-24">

                <div class="w-full lg:w-1/2 relative">
                    <div class="relative  w-2/3 z-20 rounded-2xl shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] border border-slate-100 overflow-hidden transform group-hover:-translate-y-2 transition-all duration-700">
                        <img src="/asset/software/shavison-f.jpg" alt="Modern Frontend Website Design" class="w-full h-auto">
                        <!-- <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest shadow-sm">
                            Frontend View
                        </div> -->
                    </div>

                    <div class="absolute -top-12 -right-8 z-30 w-2/3 rounded-xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] border-4 border-white overflow-hidden hidden md:block animate-bounce-slow">
                        <img src="/asset/software/shavison-b.jpg" alt="Custom Admin Dashboard Panel" class="w-full h-auto">
                        <div class="absolute bottom-4 right-4 bg-blue-600 text-white px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">
                            Admin Engine
                        </div>
                    </div>

                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-blue-50 rounded-full -z-10 blur-3xl opacity-60"></div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="w-16 h-1 bg-blue-600 mb-8"></div>
                    <h4 class="text-blue-600 font-black text-xs uppercase tracking-[0.4em] mb-6 italic">Total Synchronization</h4>
                    <h2 class="text-5xl md:text-6xl font-black text-gray-950 mb-8 leading-[1.1] tracking-tighter">
                        BEAUTIFUL FRONTEND. <br>
                        <span class="text-gray-400">POWERFUL BACKEND.</span>
                    </h2>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                        At Rudra Tech, we bridge the gap between <strong>high-end user experience (UX)</strong> and <strong>efficient content management</strong>. Every website we build comes with a custom-engineered admin dashboard.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-6 mb-12">
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-xl">01</span>
                            <div>
                                <h6 class="font-black text-gray-950 uppercase text-xs tracking-widest mb-1">Dynamic Control</h6>
                                <p class="text-xs text-gray-500 font-medium">Manage images, text, and users instantly.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-xl">02</span>
                            <div>
                                <h6 class="font-black text-gray-950 uppercase text-xs tracking-widest mb-1">SEO Dashboard</h6>
                                <p class="text-xs text-gray-500 font-medium">Update meta tags and alt text with ease.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/getquote" class="inline-flex items-center gap-6 group">
                        <span class="w-12 h-12 rounded-full bg-gray-950 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="text-xs font-black uppercase tracking-[0.3em] text-gray-950">Explore Admin Features</span>
                    </a>
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
                transform: translateY(-20px);
            }
        }

        .animate-bounce-slow {
            animation: bounce-slow 6s ease-in-out infinite;
        }
    </style>

    <!-- <section class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="w-full lg:w-1/2">
                    <div class="relative group">
                        <img src="/asset/custom.jpg" alt="Dynamic Tech" class="w-full h-[550px] object-cover rounded-2xl shadow-2xl">
                        <div class="absolute inset-0 border-[20px] border-white/20 m-6 rounded-lg pointer-events-none"></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h4 class="text-blue-600 font-black text-xs uppercase tracking-[0.4em] mb-6">Expert Architecture</h4>
                    <h2 class="text-5xl font-black text-gray-950 mb-8 leading-tight">
                        Perfect Start. <br>Ongoing Improvements.
                    </h2>
                    <p class="text-lg text-gray-500 mb-10 leading-loose">
                        We don't just build and leave. Rudra Tech dynamic websites are built on a scalable core, allowing your platform to grow from a simple portal to a massive enterprise engine without rebuilding.
                    </p>
                    <ul class="space-y-4 mb-12">
                        <li class="flex items-center gap-4 text-sm font-bold text-gray-900">
                            <span class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">✓</span>
                            Scalable Database Integration
                        </li>
                        <li class="flex items-center gap-4 text-sm font-bold text-gray-900">
                            <span class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">✓</span>
                            Real-time Content Management
                        </li>
                        <li class="flex items-center gap-4 text-sm font-bold text-gray-900">
                            <span class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">✓</span>
                            High-Performance Security
                        </li>
                    </ul>
                    <a href="#" class="inline-block text-xs font-black uppercase tracking-[0.3em] border-b-4 border-blue-600 pb-1 hover:text-blue-600 transition-all">Discover More</a>
                </div>
            </div>
        </div>
    </section> -->

    <section class="py-32 bg-gray-950 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-6xl font-black mb-6">CORE CAPABILITIES</h2>
                <p class="text-gray-400 max-w-xl mx-auto font-medium">We deliver enterprise-grade dynamic features that turn websites into powerful business tools.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-0.5 bg-gray-800 border border-gray-800">
                <div class="bg-gray-950 p-12 hover:bg-blue-600 transition-all duration-500 group">
                    <div class="text-blue-600 text-4xl mb-8 group-hover:text-white transition-colors">
                        <i class="fas fa-code"></i>
                    </div>
                    <h5 class=" font-black mb-4 uppercase tracking-tighter">Live Builder</h5>
                    <p class="text-gray-500 group-hover:text-white/80 transition-colors text-sm leading-relaxed">
                        Effortlessly update your front-end content without any technical hurdles.
                    </p>
                </div>
                <div class="bg-gray-950 p-12 hover:bg-blue-600 transition-all duration-500 group">
                    <div class="text-blue-600 text-4xl mb-8 group-hover:text-white transition-colors">
                        <i class="fas fa-database"></i>
                    </div>
                    <h5 class=" font-black mb-4 uppercase tracking-tighter">Custom CMS</h5>
                    <p class="text-gray-500 group-hover:text-white/80 transition-colors text-sm leading-relaxed">
                        Manage products, users, and blogs through an intuitive dashboard tailored to you.
                    </p>
                </div>
                <div class="bg-gray-950 p-12 hover:bg-blue-600 transition-all duration-500 group">
                    <div class="text-blue-600 text-4xl mb-8 group-hover:text-white transition-colors">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h5 class=" font-black mb-4 uppercase tracking-tighter">Auth Engines</h5>
                    <p class="text-gray-500 group-hover:text-white/80 transition-colors text-sm leading-relaxed">
                        Secure login systems for members, clients, and internal teams.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-6xl font-black text-gray-900 mb-6 tracking-tighter uppercase">
                        The Admin <span class="text-blue-600">Empire.</span>
                    </h2>
                    <p class="text-gray-500 text-lg font-medium border-l-4 border-blue-600 pl-6">
                        Take full command of your digital landscape. Our custom-built backend systems are engineered for speed, security, and total content autonomy.
                    </p>
                </div>
            </div>

            <div class="owl-carousel admin-carousel">
                <div class="px-2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="/asset/software/shavison (1).png" alt="customer management" class="w-full transition-transform duration-500 group-hover:scale-105">
                        <div class="p-8 bg-white border-x border-b border-gray-100">
                            <h5 class="text-lg font-black uppercase mb-2">User Relations</h5>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest">Customer Management System</p>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="/asset/software/shavison (2).png" alt="dashboard" class="w-full transition-transform duration-500 group-hover:scale-105">
                        <div class="p-8 bg-white border-x border-b border-gray-100">
                            <h5 class="text-lg font-black uppercase mb-2">Live Insights</h5>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest">Real-Time Data Dashboard</p>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="/asset/software/shavison (3).png" alt="upcoming event" class="w-full transition-transform duration-500 group-hover:scale-105">
                        <div class="p-8 bg-white border-x border-b border-gray-100">
                            <h5 class="text-lg font-black uppercase mb-2">Event Scheduling</h5>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest">Dynamic Calendar Updates</p>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="/asset/software/shavison (4).png" alt="login shavison" class="w-full transition-transform duration-500 group-hover:scale-105">
                        <div class="p-8 bg-white border-x border-b border-gray-100">
                            <h5 class="text-lg font-black uppercase mb-2">Secure Auth</h5>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest">Access Control & Security</p>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="/asset/software/shavison (5).png" alt="website setting" class="w-full transition-transform duration-500 group-hover:scale-105">
                        <div class="p-8 bg-white border-x border-b border-gray-100">
                            <h5 class="text-lg font-black uppercase mb-2">Global Settings</h5>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-widest">Core Configuration Engine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-40 bg-gray-950 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600/5 -skew-x-12 transform translate-x-20"></div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <span class="text-blue-500 font-black text-xs uppercase tracking-[0.5em] mb-8 block">Ready for the next level?</span>
            <h2 class="text-6xl md:text-8xl font-black text-white tracking-tighter mb-12 uppercase leading-none">
                BUILD YOUR <br> <span class="text-blue-600">EMPIRE.</span>
            </h2>

            <div class="flex flex-col items-center justify-center">
                <a href="/getquote" class="group relative px-16 py-6 bg-blue-600 text-white text-sm font-black uppercase tracking-[0.5em] transition-all duration-500 shadow-[0_20px_50px_rgba(37,99,235,0.3)] hover:shadow-[0_20px_50px_rgba(37,99,235,0.5)] hover:-translate-y-1">
                    <span class="relative z-10">Get Started Now</span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300 mix-blend-difference"></div>
                </a>

                <div class="mt-20 flex flex-col md:flex-row items-center gap-8 md:gap-16 border-t border-white/10 pt-12">
                    <div class="text-left">
                        <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Current Version</p>
                        <p class="text-xs text-white font-bold tracking-widest italic">Rudra Tech v3.0 — 2026</p>
                    </div>
                    <div class="w-px h-8 bg-white/10 hidden md:block"></div>
                    <div class="text-left">
                        <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Service Standard</p>
                        <p class="text-xs text-white font-bold tracking-widest uppercase">Professional Engineering</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

    <script>
        $(document).ready(function() {
            $(".admin-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 5000,
                dots: true,
                responsive: {
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 2.5
                    }
                }
            });
        });
    </script>

</body>

</html>