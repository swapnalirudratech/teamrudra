<?php
$page_title = "professional-portfolio-development";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body class="bg-white font-sans text-slate-900 overflow-x-hidden">
    <?php include "include/navbar.php"; ?>

    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* High-speed rendering optimization */
        .content-visibility-auto {
            content-visibility: auto;
        }
    </style>

    <section class="relative w-full h-[90vh] max-md:h-[70vh] flex items-center justify-center overflow-hidden bg-gray-900">



        <div class="absolute inset-0">

            <img src="/asset/portfolioback.jpg" alt="Portfolio Background"

                class="w-full h-full object-cover object-center scale-105 animate-[pulse_10s_ease-in-out_infinite]" />



            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/90"></div>

        </div>



        <div class="relative z-20 text-center px-6 sm:px-8 md:px-12 max-w-5xl mx-auto flex flex-col items-center animate-fade-up">



            <span class="mb-4 inline-block px-4 py-1.5 text-sm font-bold tracking-[0.2em] text-gray-300 border-b border-gray-500 uppercase">

                Personal Branding

            </span>



            <h1 class="text-white font-extrabold tracking-tight leading-none drop-shadow-2xl

                   text-5xl sm:text-6xl md:text-8xl mb-6">

                YOUR <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-400">PORTFOLIO</span>

            </h1>



            <h2 class="text-gray-200 text-xl md:text-2xl font-light mb-8 max-w-2xl mx-auto leading-relaxed max-md:hidden">

                A creative showcase that builds <b class="text-white">Trust</b> and defines your <b class="text-white">Identity</b>.

            </h2>



            <div class="flex flex-col sm:flex-row gap-4">

                <a href="/get-in-touch"

                    class="inline-flex items-center justify-center bg-white text-black font-bold text-base px-8 py-4 rounded-full

                       hover:bg-gray-200 transition-all duration-300 transform hover:-translate-y-1">

                    Start Building

                </a>

                <a href="/portfolio"

                    class="inline-flex items-center justify-center px-8 py-4 text-white border border-white/30 rounded-full

                       hover:bg-white/10 backdrop-blur-md transition-all duration-300">

                    View Examples

                </a>

            </div>

        </div>

    </section>

    <section class="py-32 bg-white relative">
        <div class="container mx-auto w-[85%] relative z-10 flex flex-col lg:flex-row items-center gap-20">
            <div class="w-full lg:w-1/2">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4 inline-block">Strategic Development</span>
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight mb-8">
                    Dominating the <br /> <span class="text-blue-600">Digital Market.</span>
                </h2>
                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                    At **RudraTech IT Services**, our focus is on building platforms that increase visibility. By utilizing clean code and semantic structures, we ensure your expertise is easily discoverable by potential clients.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center gap-5 p-6 rounded-[2rem] bg-slate-50 border border-slate-100 transition-all hover:bg-white hover:shadow-2xl hover:shadow-blue-900/5 duration-500">
                        <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Rank-Ready Structure</h4>
                            <p class="text-sm text-slate-500 font-medium">Engineered for maximum reach and high search visibility.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-5 p-6 rounded-[2rem] bg-slate-50 border border-slate-100 transition-all hover:bg-white hover:shadow-2xl hover:shadow-blue-900/5 duration-500">
                        <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg"><i class="fas fa-users"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Conversion Focused</h4>
                            <p class="text-sm text-slate-500 font-medium">Layouts designed to turn casual visitors into loyal clients.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 relative">
                <div class="rounded-t-[10rem] rounded-b-[2rem] overflow-hidden shadow-2xl border-[12px] border-slate-50">
                    <img src="/asset/indianteam.jpg" alt="Expert Team in Mumbai" class="w-full h-[65vh] object-cover object-top" />
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="py-32 bg-slate-50 content-visibility-auto">
        <div class="w-[85%] mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h3 class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4">Our Track Record</h3>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter">Impactful Digital Portals</h2>
                <p class="text-slate-500 font-medium mt-6 leading-relaxed">Custom-built solutions for professionals who demand excellence in their respective industries.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="group bg-white rounded-[3rem] p-5 shadow-sm hover:shadow-3xl transition-all duration-700 border border-slate-100 overflow-hidden">
                    <div class="rounded-[2.2rem] overflow-hidden h-72 mb-8 bg-slate-100 relative">
                        <img src="/asset/software/portfolio (3).jpeg" alt="Creative Interface" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-2xl font-bold text-slate-900 mb-2">Creative Portfolio</h4>
                        <p class="text-slate-500 font-medium leading-relaxed">Immersive galleries designed for designers, photographers, and architects.</p>
                    </div>
                </div>
                <div class="group bg-white rounded-[3rem] p-5 shadow-sm hover:shadow-3xl transition-all duration-700 border border-slate-100 overflow-hidden">
                    <div class="rounded-[2.2rem] overflow-hidden h-72 mb-8 bg-slate-100 relative">
                        <img src="/asset/software/portfolio (1).jpeg" alt="Consultancy Hub" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-2xl font-bold text-slate-900 mb-2">Executive Showcase</h4>
                        <p class="text-slate-500 font-medium leading-relaxed">Professional platforms for consultants, speakers, and corporate leaders.</p>
                    </div>
                </div>
                <div class="group bg-white rounded-[3rem] p-5 shadow-sm hover:shadow-3xl transition-all duration-700 border border-slate-100 overflow-hidden">
                    <div class="rounded-[2.2rem] overflow-hidden h-72 mb-8 bg-slate-100 relative">
                        <img src="/asset/software/portfolio (2).jpeg" alt="Developer UI" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-2xl font-bold text-slate-900 mb-2">Technical Engine</h4>
                        <p class="text-slate-500 font-medium leading-relaxed">Minimalist, lightning-fast portals for software engineers and specialists.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto ">

            <div class="flex flex-col md:flex-row justify-between items-end gap-8 mb-20">
                <div class="max-w-2xl">
                    <span class="text-blue-600 font-bold uppercase tracking-widest text-xs mb-4 inline-block">Visual Excellence</span>
                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tighter leading-tight">
                        Showcasing Our <br /> <span class="text-blue-600">Digital Craftsmanship.</span>
                    </h2>
                </div>
                <p class="text-slate-500 font-medium max-w-sm leading-relaxed mb-2">
                    A glimpse into the high-performance platforms we've engineered for professionals worldwide.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <div class="group relative rounded-[3rem] overflow-hidden shadow-2xl bg-slate-900 aspect-[4/5] md:aspect-auto md:h-[700px]">
                    <video
                        class="w-full h-full object-cover object-top transition-transform duration-1000 group-hover:scale-110"
                        autoplay
                        muted
                        loop
                        playsinline>
                        <source src="/asset/software/port.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-12">
                        <div class="transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                            <h4 class="text-white text-3xl font-bold">Modern Corporate Interface</h4>
                            <p class="text-blue-400 font-medium mt-2 uppercase tracking-widest text-sm">
                                Custom PHP Architecture & Authority Design
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-10">

                    <div class="group relative rounded-[3rem] overflow-hidden shadow-2xl bg-slate-100 h-[330px]">
                        <img src="/asset/software/port (1).jpeg" alt="Premium Portfolio UI"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center p-10">
                            <h4 class="text-white text-2xl font-bold">Creative Digital Profile</h4>
                        </div>
                    </div>

                    <div class="group relative rounded-[3rem] overflow-hidden shadow-2xl bg-slate-100 h-[330px]">
                        <img src="/asset/software/port (2).jpeg" alt="Consultancy Web Design"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center p-10">
                            <h4 class="text-white text-2xl font-bold">Authority Hub Design</h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-20 flex flex-wrap justify-center items-center gap-12 opacity-30 grayscale pointer-events-none">
                <div class="text-2xl font-black italic">Clean-Code</div>
                <div class="text-2xl font-black italic">Responsive-UI</div>
                <div class="text-2xl font-black italic">High-Performance</div>
                <div class="text-2xl font-black italic">User-Centered</div>
            </div>
        </div>
    </section>
    <section class="py-32 bg-white">
        <div class="w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="relative order-2 lg:order-1">
                <div class="flex gap-6 items-end">

                    <div class="w-full rounded-[2.5rem] overflow-hidden  ">
                        <img src="/asset/software/port3.webp" alt="Mobile Optimized UI" class="w-full h-auto">
                    </div>
                </div>
            </div>
            <div class="lg:pl-10 order-1 lg:order-2">
                <h3 class="text-4xl md:text-6xl font-black text-slate-900 mb-10 leading-tight">Lightning Fast <br /> <span class="text-blue-600">Global Accessibility.</span></h3>
                <div class="space-y-10">
                    <div class="flex gap-8 group">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all"><i class="fas fa-rocket text-2xl"></i></div>
                        <div>
                            <h4 class="font-bold text-2xl text-slate-900 mb-2">Optimized Core Web Vitals</h4>
                            <p class="text-slate-500 text-lg leading-relaxed">We prioritize page speed to ensure a bounce-free experience for your visitors.</p>
                        </div>
                    </div>
                    <div class="flex gap-8 group">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all"><i class="fas fa-shield-alt text-2xl"></i></div>
                        <div>
                            <h4 class="font-bold text-2xl text-slate-900 mb-2">Advanced Security Layers</h4>
                            <p class="text-slate-500 text-lg leading-relaxed">Robust PHP backends protect your digital assets and reputation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white border-y border-slate-100">
        <div class="w-[80%] mx-auto ">
            <div class="relative bg-slate-50 rounded-[2rem] p-8 md:p-12 shadow-sm border border-slate-100 overflow-hidden">

                <div class="absolute -right-20 -top-20 w-64 h-64 bg-blue-100 rounded-full blur-[80px] opacity-40"></div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-10">

                    <div class="lg:w-3/5 text-center lg:text-left">
                        <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight leading-tight mb-3">
                            Secure Your <span class="text-blue-600">Digital Authority.</span>
                        </h2>
                        <p class="text-slate-500 font-medium text-lg leading-relaxed">
                            Partner with **RudraTech IT Services** to architect a high-performance digital presence that works for you, 24/7.
                        </p>
                    </div>

                    <div class="lg:w-2/5 flex flex-col sm:flex-row gap-4 w-full justify-center lg:justify-end">
                        <a href="/get-in-touch"
                            class="px-10 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-slate-900 transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-blue-600/20 text-center">
                            Start Now
                        </a>
                        <a href="tel:+917208344434"
                            class="px-10 py-4 bg-white text-slate-800 border border-slate-200 font-bold rounded-xl hover:bg-slate-50 transition-all text-center flex items-center justify-center gap-2">
                            <i class="fas fa-phone text-blue-600 text-sm"></i> Talk to Experts
                        </a>
                    </div>

                </div>
            </div>

            <div class="mt-8 text-center lg:text-left">
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.5em]">
                    Strategic Development • Mumbai
                </p>
            </div>
        </div>
    </section>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>