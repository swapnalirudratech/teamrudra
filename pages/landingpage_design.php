<?php
$page_title = "Landing Page Design & Conversion Services | Rudratech";
include "include/header.php";
include "include/navbar.php";
?>

<section class="relative py-20 max-md:py-12 bg-[#f8f9ff] overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 text-left">
                <div class="inline-block px-4 py-1.5 mb-6 text-sm font-bold text-blue-600 bg-blue-50 rounded-full border border-blue-100">
                    Trusted Landing Page Agency
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-[#0f172a] leading-tight mb-6">
                    Launch Pages That <span class="text-blue-600">Drive Growth</span>
                </h1>
                <p class=" text-gray-600 mb-8 max-w-lg">
                    We design and develop high-converting landing pages for businesses that want more leads, more sales, and better ROI.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/get-started" class="px-8 py-4 bg-black text-white rounded-xl font-bold hover:bg-blue-600 transition-all shadow-xl">Start Your Project</a>
                    <a href="#work" class="px-8 py-4 bg-white border border-gray-200 text-gray-900 rounded-xl font-bold hover:bg-gray-50 transition-all">View Our Work</a>
                </div>
            </div>

            <div class="lg:w-1/2 relative">
                <div class="relative z-20 animate-float">
                    <img src="/asset/software/landing-page.png" alt="Rudratech Landing Page Design" class="rounded-2xl shadow-2xl border-4 border-white">
                </div>
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-200 rounded-full blur-3xl opacity-50"></div>
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-200 rounded-full blur-3xl opacity-50"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-24  max-md:py-12 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 max-md:mb-4">Why Businesses Choose Rudratech</h2>

        <div class="grid md:grid-cols-3 gap-10 max-md:gap-3">
            <div class="p-10 rounded-3xl bg-[#f8f9ff] border border-gray-100 hover:shadow-lg transition-all text-left">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-md mb-6">
                    <i class="fa-solid fa-rocket text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Conversion Focused</h3>
                <p class="text-gray-600 leading-relaxed">We don't just make it pretty. We use heatmaps and psychology to ensure users take action on your page.</p>
            </div>

            <div class="p-10 rounded-3xl bg-[#f8f9ff] border border-gray-100 hover:shadow-lg transition-all text-left">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-md mb-6">
                    <i class="fa-solid fa-code text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Advanced Tech Stack</h3>
                <p class="text-gray-600 leading-relaxed">Built with Tailwind CSS and lightweight code for lightning-fast loading speeds under 1.5 seconds.</p>
            </div>

            <div class="p-10 rounded-3xl bg-[#f8f9ff] border border-gray-100 hover:shadow-lg transition-all text-left">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-md mb-6">
                    <i class="fa-solid fa-magnifying-glass text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">SEO Optimized</h3>
                <p class="text-gray-600 leading-relaxed">Proper heading hierarchy and fast loading times mean your page ranks higher on Google automatically.</p>
            </div>
        </div>
    </div>
</section>
<style>
    /* Smooth easing for the scroll effect */
    .scroll-container img {
        transition: transform 5s ease-in-out, filter 0.5s ease;
        will-change: transform;
        /* Optimization for smoother motion */
    }
</style>

<section id="work" class="py-24  max-md:py-12 bg-[#0f172a] text-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 max-md:items-start max-md:mb-8">
            <div class="max-w-xl">
                <h2 class="text-4xl max-md:text-3xl font-bold mb-4">Our Latest Work</h2>
                <p class="text-gray-400 ">Hover over the designs to see the full page layout.</p>
            </div>
            <a href="/portfolio" class="text-blue-400 font-bold hover:text-white transition-all flex items-center gap-2 max-md:mt-3">
                Explore All Projects <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 ">

            <div class="group relative  rounded-3xl border border-white/10 overflow-hidden shadow-2xl transition-all scroll-container">
                <div class="h-[450px] w-full overflow-hidden relative">
                    <img src="/asset/software/dreamkichen-landing.png"
                        class="w-full absolute top-0 left-0  group-hover:translate-y-[calc(-100%+450px)]"
                        alt="Dream Kitchen Landing">
                </div>
                <div class="p-5 bg-slate-900/80 backdrop-blur-md relative z-20">
                    <h4 class="font-bold ">Dream Kitchen</h4>
                    <p class="text-xs text-blue-400 font-semibold uppercase">Interior Design</p>
                </div>
            </div>

            <div class="group relative  rounded-3xl border border-white/10 overflow-hidden shadow-2xl transition-all scroll-container lg:mt-12">
                <div class="h-[450px] w-full overflow-hidden relative">
                    <img src="/asset/software/fuel-landing.png"
                        class="w-full absolute top-0 left-0  group-hover:translate-y-[calc(-100%+450px)]"
                        alt="Fuel Landing">
                </div>
                <div class="p-5 bg-slate-900/80 backdrop-blur-md relative z-20">
                    <h4 class="font-bold ">Fuel</h4>
                    <p class="text-xs text-blue-400 font-semibold uppercase">Automotive</p>
                </div>
            </div>

            <div class="group relative  rounded-3xl border border-white/10 overflow-hidden shadow-2xl transition-all scroll-container">
                <div class="h-[450px] w-full overflow-hidden relative">
                    <img src="/asset/software/packer-movers-landing.png"
                        class="w-full absolute top-0 left-0  group-hover:translate-y-[calc(-100%+450px)]"
                        alt="Packer Movers Landing">
                </div>
                <div class="p-5 bg-slate-900/80 backdrop-blur-md relative z-20">
                    <h4 class="font-bold ">Fast Movers</h4>
                    <p class="text-xs text-blue-400 font-semibold uppercase">Logistics</p>
                </div>
            </div>

            <div class="group relative  rounded-3xl border border-white/10 overflow-hidden shadow-2xl transition-all scroll-container lg:mt-12">
                <div class="h-[450px] w-full overflow-hidden relative">
                    <img src="/asset/software/washing-machin-landing.png"
                        class="w-full absolute top-0 left-0  group-hover:translate-y-[calc(-100%+450px)]"
                        alt="Washing Machine Landing">
                </div>
                <div class="p-5 bg-slate-900/80 backdrop-blur-md relative z-20">
                    <h4 class="font-bold ">Smart Repair</h4>
                    <p class="text-xs text-blue-400 font-semibold uppercase">Service Booking</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24  max-md:py-12 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16 max-md:gap-10">
            <div class="lg:w-1/2 relative">
                <div class="absolute -top-10 -left-10 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-60"></div>
                <div class="relative z-10 bg-gradient-to-tr from-blue-600 to-indigo-700 p-1 rounded-[2.5rem] shadow-2xl max-md:shadow-none">
                    <div class="bg-white rounded-[2.3rem] overflow-hidden">
                        <img src="/asset/software/landing-page1.png" alt="Rudratech Design Process" class="w-full h-auto">
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2">
                <h2 class="text-2xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                    Custom Landing Page <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Services by Rudratech</span>
                </h2>
                <div class="space-y-6 text-gray-600  leading-relaxed">
                    <p>
                        At Rudratech, we specialize in <strong class="text-gray-900">high-performance landing page design</strong> that transforms casual visitors into loyal customers. We understand that your destination page is the engine of your sales funnel.
                    </p>
                    <p>
                        Our strategy blends <strong class="text-gray-900">behavioral psychology</strong> with cutting-edge UI/UX prototyping. Whether it's for PPC campaigns or organic growth, we build assets that perform.
                    </p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4">
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-800">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Lead Generation Pages
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-800">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> High-Ticket Sales Pages
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-800">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Click-Through Funnels
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-800">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Webinar Landing Pages
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24  max-md:py-12 bg-[#fcfdfe] border-y border-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 max-md:mb-8">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Engineered for Performance</h2>
            <p class="text-gray-500 italic">"Design is not just what it looks like, it's how it works."</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-md:gap-4">
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl hover:border-blue-500 transition-all hover:-translate-y-2">
                <h4 class="text-6xl font-black text-gray-100 group-hover:text-blue-50 transition-colors mb-4">01</h4>
                <h5 class="text-xl font-bold text-gray-900 mb-2">Mobile First</h5>
                <p class="text-gray-500 text-sm">Perfectly responsive layouts that look stunning on every screen size.</p>
            </div>
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl hover:border-blue-500 transition-all hover:-translate-y-2">
                <h4 class="text-6xl font-black text-gray-100 group-hover:text-blue-50 transition-colors mb-4">02</h4>
                <h5 class="text-xl font-bold text-gray-900 mb-2">Ultra Fast</h5>
                <p class="text-gray-500 text-sm">Optimized code and assets for sub-second load times and better SEO.</p>
            </div>
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl hover:border-blue-500 transition-all hover:-translate-y-2">
                <h4 class="text-6xl font-black text-gray-100 group-hover:text-blue-50 transition-colors mb-4">03</h4>
                <h5 class="text-xl font-bold text-gray-900 mb-2">SEO Ready</h5>
                <p class="text-gray-500 text-sm">Semantic HTML structure to help search engines index your page instantly.</p>
            </div>
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl hover:border-blue-500 transition-all hover:-translate-y-2">
                <h4 class="text-6xl font-black text-gray-100 group-hover:text-blue-50 transition-colors mb-4">04</h4>
                <h5 class="text-xl font-bold text-gray-900 mb-2">Secure</h5>
                <p class="text-gray-500 text-sm">Clean, updated code following the latest web security protocols.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="bg-slate-900 rounded-[3rem] p-8 md:p-16 flex flex-col md:flex-row items-center justify-between gap-10">
            <div class="text-left">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Start your transformation.</h2>
                <p class="text-gray-400 ">Stop losing potential revenue to bad design.</p>
            </div>
            <div class="flex gap-4">
                <button class="px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 transition-all shadow-lg">Work With Us</button>

            </div>
        </div>
    </div>
</section>

<?php
include "include/marquee.php";
include "include/upperfooter.php";
include "include/footer.php";
?>