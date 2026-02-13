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

            <div class="relative order-1 lg:order-2 h-[60vh] lg:h-[70vh]">
                <div class="absolute inset-0 bg-gray-900 rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">

                    <video
                        autoplay
                        muted
                        loop
                        playsinline

                        class="w-full h-full object-cover opacity-80">
                        <source src="/asset/software/dynamic.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="absolute inset-0 bg-gradient-to-tr from-gray-950/40 via-transparent to-blue-600/10"></div>


                </div>

                <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-600/20 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </section>

    <section class="py-24 border-y border-gray-100 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <div>
                    <h3 class="text-2xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="98">0</span>%
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Success Rate</p>
                </div>
                <div>
                    <h3 class="text-2xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Websites Launched</p>
                </div>
                <div>
                    <h3 class="text-2xl md:text-5xl font-black text-gray-900 mb-2">
                        <span class="counter" data-target="24">0</span>/7
                    </h3>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Technical Support</p>
                </div>
                <div>
                    <h3 class="text-2xl md:text-5xl font-black text-gray-900 mb-2">
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



    <section class="py-32 bg-gray-950 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-3xl md:text-6xl font-black mb-6">CORE CAPABILITIES</h2>
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





    <section class="py-32 bg-[#fafafa]">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="order-2 lg:order-1 relative h-[500px]">
                    <div class="absolute top-0 left-0 w-4/5 z-10 rounded-3xl shadow-2xl border-8 border-white overflow-hidden transform -rotate-3 hover:rotate-0 transition-all duration-500">
                        <img src="/asset/software/shavison-f.jpg" alt="Frontend" class="w-full">
                    </div>
                    <div class="absolute bottom-0 right-0 w-4/5 z-20 rounded-3xl shadow-2xl border-8 border-white overflow-hidden transform rotate-3 hover:rotate-0 transition-all duration-500">
                        <img src="/asset/software/shavison-b.jpg" alt="Backend" class="w-full">
                        <div class="absolute bottom-4 right-4 bg-blue-600 text-white px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-[0.2em] shadow-xl">
                            Admin Control
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl md:text-6xl font-black text-gray-950 mb-8 leading-none tracking-tighter uppercase">
                        Symmetry in <br> <span class="text-blue-600">Complexity.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-10 leading-relaxed font-medium">
                        We bridge the gap between aesthetic frontend design and rigid backend architecture. Your site won't just look good; it will function as a powerful business engine.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-6 p-6 bg-white rounded-2xl hover:shadow-xl transition-shadow border border-gray-100">
                            <div class="text-3xl">🎨</div>
                            <div>
                                <h5 class="font-black text-gray-900 uppercase text-xs tracking-widest mb-1">Pixel Perfect UI</h5>
                                <p class="text-sm text-gray-500">Immersive user interfaces designed to captivate and convert.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 p-6 bg-white rounded-2xl hover:shadow-xl transition-shadow border border-gray-100">
                            <div class="text-3xl">⚙️</div>
                            <div>
                                <h5 class="font-black text-gray-900 uppercase text-xs tracking-widest mb-1">Robust Admin Core</h5>
                                <p class="text-sm text-gray-500">Complete control over your database, content, and users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="p-12 lg:p-20 flex flex-col justify-center space-y-8">
    <span id="site-tag" class="w-fit px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">
        Dynamic Web Engine
    </span>
    
    <h2 id="site-title" class="text-5xl lg:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
        NEXT-GEN <br> DYNAMIC <br> <span class="text-blue-600">WEBSITES.</span>
    </h2>
    
    <p id="site-desc" class="text-slate-500 text-lg font-medium leading-relaxed max-w-sm">
        Scale your business with high-speed, database-driven platforms that give you total autonomy over your content.
    </p>
    
    <div class="pt-4 flex items-center gap-6">
        <button id="site-btn" class="px-10 py-4 bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-xl shadow-blue-100 hover:scale-105 transition-all">
            Build Your Platform
        </button>
        <div class="hidden sm:flex flex-col border-l border-slate-200 pl-6">
            <span class="text-[11px] font-black text-slate-900 uppercase">Fast Delivery</span>
            <span class="text-[9px] text-slate-400 font-bold uppercase">7-14 Day Turnaround</span>
        </div>
    </div>
</div> -->


    <div class="flex  bg-[#F1F5F9] font-sans text-slate-900">

        <main class="flex-1 p-6 lg:p-10 overflow-y-auto relative">

            <div class="max-w-5xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-200">
                            <span class="text-blue-600 font-black text-xl">RT</span>
                        </div>
                        <div>
                            <h1 class="text-sm font-bold text-slate-900 tracking-tight">Rudra_Tech_Main_v3</h1>
                            <div class="flex items-center gap-2 mt-0.5">
                                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                <p class="text-[9px] text-slate-400 font-black uppercase tracking-widest">SEO Mode: Optimized</p>
                            </div>
                        </div>
                    </div>
                    <div id="status-tag" class="px-4 py-2 rounded-xl bg-white text-slate-600 text-[10px] font-black uppercase tracking-widest shadow-sm border border-slate-200 transition-all">
                        Ready to Deploy
                    </div>
                </div>

                <div class="relative">
                    <div id="loading-overlay" class="absolute inset-0 z-50 bg-slate-900/10 backdrop-blur-md flex flex-col items-center justify-center rounded-[2.5rem] opacity-0 pointer-events-none transition-all duration-500">
                        <div class="bg-white p-8 rounded-3xl shadow-2xl flex flex-col items-center">
                            <div class="w-10 h-10 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
                            <p class="mt-4 text-[10px] font-black uppercase tracking-[0.3em] text-slate-900">Syncing to Rudra Tech Server...</p>
                        </div>
                    </div>

                    <div id="website-frame" class="bg-white rounded-[2.5rem] shadow-[0_40px_100px_-20px_rgba(0,0,0,0.1)] border border-white overflow-hidden min-h-[600px] flex flex-col">
                        <div class="px-8 py-5 flex items-center justify-between bg-slate-50/50 border-b border-slate-100">
                            <div class="flex gap-2 items-center">
                                <div class="w-2.5 h-2.5 rounded-full bg-slate-200"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-slate-200"></div>
                                <div class="ml-4 px-4 py-1 bg-white rounded-lg border border-slate-100 text-[10px] text-slate-400 font-medium">
                                    rudratech.io/solutions/it-services
                                </div>
                            </div>
                            <i class="fas fa-shield-alt text-[10px] text-green-500"></i>
                        </div>

                        <div class="grid lg:grid-cols-2 flex-1">
                            <div class="p-12 lg:p-20 flex flex-col justify-center space-y-8">
                                <span id="site-tag" class="w-fit px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">
                                    Software Development Experts
                                </span>

                                <h2 id="site-title" class="text-5xl  font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                                    INNOVATING <br> THE DIGITAL <br> <span class="text-blue-600">FRONTIER.</span>
                                </h2>

                                <p id="site-desc" class="text-slate-500 text-xs font-medium leading-relaxed max-w-sm">
                                    We build high-performance software, bespoke websites, and scalable mobile apps designed to dominate the digital landscape.
                                </p>

                                <div class="pt-4 flex items-center gap-6">
                                    <button id="site-btn" class="px-10 py-4 bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-xl shadow-blue-100 hover:scale-105 transition-all">
                                        Start Your Project
                                    </button>
                                    <div class="hidden sm:block">
                                        <div class="flex -space-x-2">
                                            <div class="w-6 h-6 rounded-full bg-slate-200 border-2 border-white"></div>
                                            <div class="w-6 h-6 rounded-full bg-slate-300 border-2 border-white"></div>
                                            <div class="w-6 h-6 rounded-full bg-slate-400 border-2 border-white"></div>
                                        </div>
                                        <p class="text-[9px] text-slate-400 font-bold mt-1 uppercase">Trusted by 50+ Brands</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative bg-slate-50 p-6 lg:p-10">
                                <div class="w-full h-[40vh] rounded-[2rem] overflow-hidden shadow-inner relative group">
                                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80" class="w-full h-full object-cover grayscale-[0.2]" alt="IT Development">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                                    <div class="absolute bottom-8 left-8 text-white">
                                        <p class="text-[8px] font-black uppercase tracking-[0.3em] opacity-60">Tech Stack</p>
                                        <p class="text-sm font-bold uppercase">React • PHP • Tailwind</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <aside class="w-[400px] bg-white border-l border-slate-200 flex flex-col shadow-2xl z-10">
            <div class="p-10 border-b border-slate-100 bg-slate-50/30">
                <h5 class="text-xs font-black uppercase tracking-[0.2em] text-slate-900">Rudra Tech Editor</h5>
                <p class="text-[11px] text-slate-400 mt-2 font-medium">SEO & Visual Control Center</p>
            </div>

            <div class="flex-1 overflow-y-auto p-10 space-y-2">
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Main Heading</label>
                        <span class="text-[8px] bg-blue-100 px-2 py-0.5 rounded text-blue-700 font-bold uppercase">H2 Target</span>
                    </div>
                    <textarea id="input-title" rows="3" class="w-full bg-slate-50 border border-slate-100 p-5 rounded-2xl text-sm font-bold focus:ring-4 focus:ring-blue-600/5 focus:border-blue-600 outline-none transition-all resize-none" placeholder="Enter heading..."></textarea>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Value Proposition</label>
                    <textarea id="input-desc" rows="4" class="w-full bg-slate-50 border border-slate-100 p-5 rounded-2xl text-sm font-medium text-slate-600 focus:ring-4 focus:ring-blue-600/5 focus:border-blue-600 outline-none transition-all resize-none" placeholder="Enter description..."></textarea>
                </div>

                <div class="space-y-5">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Brand Accent</label>
                    <div id="color-grid" class="grid grid-cols-4 gap-4">
                        <button onclick="setAccent('#2563eb', this)" class="color-btn relative aspect-square rounded-2xl bg-blue-600 ring-4 ring-blue-100 border-2 border-white shadow-lg transition-all flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs"></i>
                        </button>
                        <button onclick="setAccent('#000000', this)" class="color-btn relative aspect-square rounded-2xl bg-slate-900 hover:scale-105 transition-all flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs opacity-0"></i>
                        </button>
                        <button onclick="setAccent('#10b981', this)" class="color-btn relative aspect-square rounded-2xl bg-emerald-600 hover:scale-105 transition-all flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs opacity-0"></i>
                        </button>
                        <button onclick="setAccent('#f59e0b', this)" class="color-btn relative aspect-square rounded-2xl bg-amber-500 hover:scale-105 transition-all flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs opacity-0"></i>
                        </button>
                    </div>
                </div>
                <div class="p-10">
                    <button onclick="publishChanges()" class="w-full py-6 bg-slate-900 text-white rounded-3xl font-black text-[11px] uppercase tracking-[0.3em] hover:bg-blue-600 transition-all active:scale-[0.98] shadow-2xl shadow-slate-200">
                        Deploy Changes
                    </button>
                </div>
            </div>


        </aside>
    </div>

    <script>
        let activeColor = '#2563eb';

        function setAccent(color, btnElement) {
            activeColor = color;
            document.querySelectorAll('.color-btn').forEach(btn => {
                btn.classList.remove('ring-4', 'ring-blue-100', 'border-2', 'border-white', 'shadow-lg');
                btn.querySelector('i').classList.add('opacity-0');
            });
            btnElement.classList.add('ring-4', 'ring-blue-100', 'border-2', 'border-white', 'shadow-lg');
            btnElement.querySelector('i').classList.remove('opacity-0');
        }

        function publishChanges() {
            const overlay = document.getElementById('loading-overlay');
            const status = document.getElementById('status-tag');

            const newTitle = document.getElementById('input-title').value;
            const newDesc = document.getElementById('input-desc').value;

            const displayTitle = document.getElementById('site-title');
            const displayDesc = document.getElementById('site-desc');
            const displayBtn = document.getElementById('site-btn');
            const displayTag = document.getElementById('site-tag');

            overlay.classList.remove('opacity-0', 'pointer-events-none');
            status.innerHTML = `<i class="fas fa-rocket fa-spin mr-2"></i> Deploying...`;

            setTimeout(() => {
                if (newTitle.trim()) displayTitle.innerHTML = newTitle.replace(/\n/g, '<br>');
                if (newDesc.trim()) displayDesc.innerText = newDesc;

                displayBtn.style.backgroundColor = activeColor;
                displayBtn.style.boxShadow = `0 20px 40px -10px ${activeColor}40`;
                displayTag.style.color = activeColor;
                displayTag.style.backgroundColor = activeColor + '10';

                const span = displayTitle.querySelector('span');
                if (span) span.style.color = activeColor;

                overlay.classList.add('opacity-0', 'pointer-events-none');
                status.innerHTML = `<i class="fas fa-check-circle mr-1 text-green-500"></i> Live & Synced`;
            }, 1500);
        }
    </script>





    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-3xl md:text-6xl font-black text-gray-900 uppercase tracking-tighter">Command Center</h2>
                <p class="text-blue-600 font-black uppercase tracking-[0.5em] text-xs mt-4 italic">The Admin Empire</p>
            </div>

            <div class="owl-carousel admin-carousel no-dots">
                <?php
                $admins = [
                    ['shavison (1).png', 'User Relations', 'CRM'],
                    ['shavison (2).png', 'Live Insights', 'Analytics'],
                    ['shavison (3).png', 'Event Manager', 'Scheduling'],
                    ['shavison (4).png', 'Access Guard', 'Security'],
                    ['shavison (5).png', 'Core Config', 'Settings']
                ];
                foreach ($admins as $admin): ?>
                    <div class="px-4">
                        <div class="group relative overflow-hidden rounded-[2rem] bg-gray-50 border border-gray-100">
                            <div class="p-4">
                                <img src="/asset/software/<?= $admin[0] ?>" alt="<?= $admin[1] ?>" class="w-full rounded-2xl ">
                            </div>
                            <div class="p-8 pt-0 flex justify-between items-end">
                                <div>
                                    <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest mb-1"><?= $admin[2] ?></p>
                                    <h5 class="text-xl font-black text-gray-950 uppercase"><?= $admin[1] ?></h5>
                                </div>
                                <div class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all">
                                    <i class="fas fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-40 bg-gray-950 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-600/20 blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-600/10 blur-[150px]"></div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-7xl md:text-[12rem] font-black text-white/5 leading-none select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 tracking-tighter uppercase">
                EMPIRE
            </h2>

            <div class="relative">
                <h3 class="text-3xl md:text-6xl font-black text-white mb-12 tracking-tighter uppercase">
                    Ready to scale <br> your <span class="text-blue-600 underline decoration-8 decoration-blue-600/20 underline-offset-8">vision?</span>
                </h3>

                <div class="flex flex-col items-center">
                    <a href="/getquote" class="group relative px-20 py-8 bg-blue-600 text-white text-xs font-black uppercase tracking-[0.5em] transition-all duration-500 hover:scale-105 shadow-[0_0_50px_rgba(37,99,235,0.4)] overflow-hidden">
                        <span class="relative z-10">Get Started Now</span>
                        <div class="absolute inset-0 bg-white translate-x-full group-hover:translate-x-0 transition-transform duration-500 mix-blend-difference"></div>
                    </a>

                    <div class="mt-24 grid grid-cols-2 md:grid-cols-3 gap-12 border-t border-white/5 pt-16 w-full max-w-4xl mx-auto">
                        <div class="text-left">
                            <span class="text-gray-600 text-[10px] font-black uppercase tracking-widest block mb-2">Build Version</span>
                            <span class="text-white font-bold text-xs uppercase tracking-widest">RT-Dynamic 2026</span>
                        </div>
                        <div class="text-left hidden md:block">
                            <span class="text-gray-600 text-[10px] font-black uppercase tracking-widest block mb-2">Global HQ</span>
                            <span class="text-white font-bold text-xs uppercase tracking-widest">Rudra Tech IT</span>
                        </div>
                        <div class="text-left">
                            <span class="text-gray-600 text-[10px] font-black uppercase tracking-widest block mb-2">Service Type</span>
                            <span class="text-white font-bold text-xs uppercase tracking-widest">Full-Stack Dynamic</span>
                        </div>
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
            // Admin Carousel
            $(".admin-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 4000,
                nav: false,
                dots: false,
                responsive: {
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });

            // Intersection Observer for Counters
            const counters = document.querySelectorAll('.counter');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = +entry.target.getAttribute('data-target');
                        let count = 0;
                        const updateCount = () => {
                            const speed = target / 50;
                            if (count < target) {
                                count += speed;
                                entry.target.innerText = Math.ceil(count);
                                setTimeout(updateCount, 20);
                            } else {
                                entry.target.innerText = target;
                            }
                        };
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });
            counters.forEach(c => observer.observe(c));
        });
    </script>

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
            animation: bounce-slow 5s ease-in-out infinite;
        }

        /* Custom Owl Carousel Styles to look like Empire */
        .admin-carousel .owl-item {
            opacity: 0.3;
            transition: all 0.5s ease;
        }

        .admin-carousel .owl-item.active {
            opacity: 1;
        }
    </style>
</body>

</html>