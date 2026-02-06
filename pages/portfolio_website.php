<?php
$page_title = "website-designing";

?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>
    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeUp 1s ease-out forwards;
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
                YOUR <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-blue-400">PORTFOLIO</span>
            </h1>

            <h2 class="text-gray-200 text-xl md:text-2xl font-light mb-8 max-w-2xl mx-auto leading-relaxed max-md:hidden">
                A creative showcase that builds <b class="text-white">Trust</b> and defines your <b class="text-white">Identity</b>.
            </h2>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/getin-touch"
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

    <section class="py-16 bg-white">
        <div class="container mx-auto w-[80%] max-lg:w-[85%] flex max-md:flex-col max-lg:flex-row lg:flex-row items-center gap-12">
            <!-- Text Content -->
            <div class="w-full lg:w-1/2">
                <p class="uppercase text-sm tracking-wider text-blue-500 mb-3">
                    WHY PORTFOLIO WEBSITE
                </p>
                <h2 class="text-4xl max-lg:text-3xl font-bold text-gray-800 mb-4">
                    Establish a Strong Online <br />
                    <span class="text-blue-600">Presence & Credibility</span>
                </h2>
                <p class="text-gray-600 mb-6">
                    Your portfolio is your digital identity. RudraTech builds impactful, responsive, and professional portfolio websites designed to showcase your work, style, and experience.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="h-3 w-3 mt-1 rounded-full bg-blue-500"></span>
                        <p><strong>Personal Branding</strong> – Position yourself as a trusted expert with a customized look & feel.</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="h-3 w-3 mt-1 rounded-full bg-teal-500"></span>
                        <p><strong>Project Highlights</strong> – Showcase your best work with visuals, case studies, and testimonials.</p>
                    </li>
                </ul>
            </div>

            <!-- Image & Graphic Overlay -->
            <div class="w-full lg:w-1/2 relative">
                <div class="rounded-t-full  overflow-hidden ">
                    <img
                        src="/asset/indianteam.jpg"
                        alt="Team working on portfolio website"
                        class="w-full h-[80vh] max-md:h-[50vh] max-lg:h-[50vh] object-cover object-top" />
                    <div class="absolute max-md:-top-10 max-lg:w-20 max-lg:h-20 max-md:right-0 -right-10 top-10 w-36 h-36 bg-gradient-to-r from-white/80 to-blue-500 rounded-full opacity-80"></div>
                    <div class="absolute -bottom-6 left-6 w-24 h-24 bg-gradient-to-r from-white/90 to-blue-500 opacity-40 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-t from-white to-gray-100 py-16">
        <div class="w-[80%] max-lg:w-[85%] mx-auto  text-center">
            <!-- Heading -->
            <p class="text-sm uppercase tracking-widest text-blue-500 mb-2">Our Value</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Benefit of Working <span class="text-blue-500">With RudraTech</span>
            </h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Explore our journey of delivering custom portfolio websites tailored to elevate personal branding and online presence.
            </p>

            <!-- Timeline -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Item 1 -->
                <div class="flex flex-col items-center relative">

                    <div class="w-10 h-10 bg-white border-4 border-blue-400 rounded-full flex items-center justify-center text-xl font-semibold mb-4 shadow">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-gray-800">Initial Concept</h3>
                    <p class="text-sm text-gray-500 mt-1">Sketching unique personal brand identities.</p>
                    <span class="mt-3 text-sm text-gray-400">2019</span>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-center relative">

                    <div class="w-10 h-10 bg-white border-4 border-blue-400 rounded-full flex items-center justify-center text-xl font-semibold mb-4 shadow">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-gray-800">Design Evolution</h3>
                    <p class="text-sm text-gray-500 mt-1">Refining layouts for better visual storytelling.</p>
                    <span class="mt-3 text-sm text-gray-400">2020</span>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col items-center relative">

                    <div class="w-10 h-10 bg-white border-4 border-blue-400 rounded-full flex items-center justify-center text-xl font-semibold mb-4 shadow">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-gray-800">Development</h3>
                    <p class="text-sm text-gray-500 mt-1">Built using responsive, high-performance code.</p>
                    <span class="mt-3 text-sm text-gray-400">2021</span>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col items-center relative">

                    <div class="w-10 h-10 bg-white border-4 border-blue-400 rounded-full flex items-center justify-center text-xl font-semibold mb-4 shadow">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-gray-800">Launch & Growth</h3>
                    <p class="text-sm text-gray-500 mt-1">Launched 50+ successful portfolio sites globally.</p>
                    <span class="mt-3 text-sm text-gray-400">2022</span>
                </div>
            </div>
        </div>
    </section>


    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>