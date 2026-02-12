<?php
$page_title = "Static Website Design | Rudra Tech IT Services";
include "include/header.php";
?>
<!Doctype html>
<html lang="en">


<body class="bg-white font-body text-gray-800 antialiased">

    <?php include "include/navbar.php"; ?>

    <section class="relative w-full h-[95vh] flex items-center justify-center overflow-hidden bg-white">

        <div class="absolute inset-0 z-0">
            <img src="/asset/software/w.jpg" alt="Static Web Design Architecture"
                class="w-full h-full object-cover filter grayscale-[40%] brightness-[0.85] transition-all duration-[2000ms] hover:scale-105 hover:grayscale-0 hover:brightness-100">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/40 to-white"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 text-center">
            <div class="inline-block mb-8">
                <h4 class="text-[10px] md:text-xs uppercase tracking-[0.6em] text-white  font-bold drop-shadow-md bg-black/10 backdrop-blur-sm px-6 py-2 rounded-full border border-white/20">
                    Crafting Digital Excellence
                </h4>
            </div>

            <h1 class="text-5xl md:text-8xl  font-bold text-white mb-8 leading-tight tracking-tight drop-shadow-2xl ">
                Static <span class="italic opacity-90 text-blue-400">Web</span> Design
            </h1>

            <div class="w-24 h-px bg-blue-500 mx-auto mb-10 shadow-[0_0_15px_rgba(59,130,246,0.8)]"></div>

            <p class="max-w-2xl mx-auto text-white/90 leading-relaxed text-lg md:text-xl font-light italic drop-shadow-md">
                A perfect blend of minimalist aesthetics and modern engineering <br class="hidden md:block"> by Rudra Tech IT Services.
            </p>

            <div class="mt-12">
                <a href="#work" class="inline-block px-10 py-4 bg-white/10 backdrop-blur-md border border-white/30 text-white uppercase text-[10px] tracking-[0.4em]  font-bold hover:bg-white hover:text-gray-900 transition-all duration-500 rounded-sm">
                    Explore Our Vision
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4">
            <span class="text-[9px] uppercase tracking-[0.3em] text-gray-400 font-bold">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-blue-600 to-transparent animate-bounce"></div>
        </div>
    </section>

    <section class="py-24 max-md:py-12  border-b border-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div>
                    <span class="text-blue-600 font-bold text-6xl ">01.</span>
                    <h3 class="text-xl  font-bold  mt-4 mb-4 uppercase tracking-wider">Fast & Secure</h3>
                    <p class="text-sm text-gray-500 leading-loose">
                        By removing the database layer, we deliver websites that are virtually unhackable and load in under a second.
                    </p>
                </div>
                <div>
                    <span class="text-blue-600 font-bold text-6xl ">02.</span>
                    <h3 class="text-xl  font-bold  mt-4 mb-4 uppercase tracking-wider">Modern UI/UX</h3>
                    <p class="text-sm text-gray-500 leading-loose">
                        Inspired by elegant editorial layouts, our designs focus on readability and smooth user transitions.
                    </p>
                </div>
                <div>
                    <span class="text-blue-600 font-bold text-6xl ">03.</span>
                    <h3 class="text-xl  font-bold  mt-4 mb-4 uppercase tracking-wider">SEO Ready</h3>
                    <p class="text-sm text-gray-500 leading-loose">
                        We use the latest semantic HTML and schema markup to ensure your brand ranks where it belongs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-12  bg-white" id="work">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20 max-md:mb-6">
                <h2 class="text-3xl md:text-6xl font-bold  text-gray-900">The Showcase</h2>
                <div class="w-12 h-px bg-blue-600 mx-auto mt-4"></div>
                <p class="text-[10px] uppercase tracking-[0.4em] text-gray-400 mt-6 font-bold">Selected Works by Rudra Tech</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-24">
                <div class="group">
                    <div class="relative overflow-hidden bg-gray-100 shadow-xl">
                        <img src="/asset/software/a.png" alt="Anubhuti Infra"
                            class="w-full h-[550px] max-md:h-[200px] object-cover transition-transform duration-1000 group-hover:scale-110 grayscale-[30%] group-hover:grayscale-0">
                        <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <span class="bg-white/90 backdrop-blur px-4 py-2 text-[10px] uppercase tracking-widest font-bold">Infrastructure Excellence</span>
                        </div>
                    </div>
                    <div class="mt-10 text-center md:text-left">
                        <span class="text-[10px] uppercase tracking-[0.3em] text-blue-600 font-bold">Architecture & Infrastructure</span>
                        <h4 class="text-3xl font-bold mt-3 text-gray-900 group-hover:italic transition-all duration-300">Anubhuti Solutions</h4>
                        <p class="mt-4 text-sm text-gray-500 font-light leading-relaxed max-w-md">
                            A sophisticated digital presence designed for the infrastructure sector, focusing on structural precision and professional corporate identity.
                        </p>
                    </div>
                </div>

                <div class="group md:mt-32">
                    <div class="relative overflow-hidden bg-gray-100 shadow-xl">
                        <img src="/asset/software/s.png" alt="Saptam"
                            class="w-full h-[550px] max-md:h-[200px] object-cover transition-transform duration-1000 group-hover:scale-110 grayscale-[30%] group-hover:grayscale-0">
                        <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <span class="bg-white/90 backdrop-blur px-4 py-2 text-[10px] uppercase tracking-widest font-bold">Premium Digital Layout</span>
                        </div>
                    </div>
                    <div class="mt-10 text-center md:text-left">
                        <span class="text-[10px] uppercase tracking-[0.3em] text-blue-600 font-bold">Digital Innovation / Web</span>
                        <h4 class="text-3xl font-bold mt-3 text-gray-900 group-hover:italic transition-all duration-300">Saptam Digital</h4>
                        <p class="mt-4 text-sm text-gray-500 font-light leading-relaxed max-w-md">
                            A modern, high-performance web architecture built for seamless user journeys and lightning-fast edge delivery.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-28 text-center max-md:mt-12">
                <a href="/getquote" class="group relative inline-block px-16 py-5 border border-gray-900 text-gray-900 uppercase text-[10px] tracking-[0.4em] font-black overflow-hidden transition-all duration-500">
                    <span class="relative z-10 group-hover:text-white transition-colors duration-500">Start Your Story</span>
                    <div class="absolute inset-0 bg-gray-900 -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-12  bg-white overflow-hidden border-t">
        <div class="container mx-auto px-6">

            <div class="text-center mb-20">
                <h4 class="text-[10px] uppercase tracking-[0.5em] text-blue-600  font-bold mb-4">In Focus</h4>
                <h2 class="text-3xl md:text-6xl font-bold  text-gray-900">Featured Architecture</h2>
                <div class="mt-6 w-12 h-px bg-gray-200 mx-auto"></div>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-4">

                <div class="w-full lg:w-1/4 flex flex-col gap-16 text-center lg:text-right">
                    <div class="group">
                        <h5 class="text-xs uppercase tracking-widest  font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Core Performance</h5>
                        <p class="text-sm text-gray-500 leading-relaxed font-light">
                            Static architecture eliminates database queries, resulting in <span class=" text-gray-800">instantaneous</span> load times that keep visitors engaged.
                        </p>
                    </div>
                    <div class="group">
                        <h5 class="text-xs uppercase tracking-widest  font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Secure by Design</h5>
                        <p class="text-sm text-gray-500 leading-relaxed font-light">
                            With no server-side processing, your digital presence becomes a fortress against common web vulnerabilities.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-2/4 relative px-4">
                    <div class="absolute -inset-4 bg-slate-50 rounded-full blur-3xl opacity-50 -z-10"></div>

                    <div class="relative group overflow-hidden rounded-xl shadow-2xl transition-transform duration-500 hover:-translate-y-2">
                        <img src="/asset/software/saptam.png"
                            alt="Static Website Showcase"
                            class="w-full h-auto object-cover border-[8px] border-white shadow-sm">

                        <div class="absolute inset-0 bg-blue-900/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>


                </div>

                <div class="w-full lg:w-1/4 flex flex-col gap-16 text-center lg:text-left">
                    <div class="group">
                        <h5 class="text-xs uppercase tracking-widest  font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Visual Precision</h5>
                        <p class="text-sm text-gray-500 leading-relaxed font-light">
                            We focus on pixel-perfect details that reflect your brand's prestige, ensuring a high-end feel on every device.
                        </p>
                    </div>
                    <div class="group">
                        <h5 class="text-xs uppercase tracking-widest  font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">SEO Dominance</h5>
                        <p class="text-sm text-gray-500 leading-relaxed font-light">
                            Our clean, semantic code structure is a favorite for search engine crawlers, driving organic growth from day one.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24 max-md:py-12  max-md:py-12  max-md:py-10 bg-gray-50 font-sans">
        <div class="w-[85%] mx-auto">
            <div class="flex items-end gap-2 mb-16 max-md:mb-6  max-md:mb-8">
                <span class="text-8xl max-md:text-6xl  font-bold text-blue-500">4</span>
                <div>
                    <h2 class="text-3xl md:text-6xl  font-bold text-gray-900">Static Websites</h2>
                    <p class="text-2xl max-md:text-lg max-md:text-sm  font-serif italic text-gray-600">Explore <span class="text-gray-900 font-sans not-italic font-bold">our latest work </span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="group">
                    <a href="preview-page.php?project=anubhuti" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/anubhuti.png" class="w-full h-full object-cover object-top" alt="anubhuti-infrastructure">
                        </div>
                    </a>
                    <p class="mt-4 text-sm  font-bold text-gray-800 uppercase tracking-widest flex items-center justify-between">
                        Anubhuti Infrastructure
                        <span class="text-blue-500"><i class="fa-solid fa-arrow-right"></i></span>
                    </p>

                </div>

                <div class="group">
                    <a href="preview-page.php?project=armahealthcare" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/arma.png" class="w-full h-full object-cover object-top" alt="armahealthcare">
                        </div>
                    </a>
                    <p class="mt-4 text-sm  font-bold text-gray-800 uppercase tracking-widest flex items-center justify-between">
                        Arma Healthcare
                        <span class="text-blue-500"><i class="fa-solid fa-arrow-right"></i></span>
                    </p>

                </div>

                <div class="group">
                    <a href="preview-page.php?project=laxmikamal" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/laxmikamal.png" class="w-full h-full object-cover object-top" alt="laxmikamal">
                        </div>
                    </a>
                    <p class="mt-4 text-sm  font-bold text-gray-800 uppercase tracking-widest">
                        Laxmi Kamal
                        <span class="text-blue-500">
                            <i class="fa-solid fa-arrow-right mr-4"></i>
                        </span>
                    </p>
                </div>
                <div class="group">
                    <a href="preview-page.php?project=saptam" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/saptam-full.png" class="w-full h-full object-cover object-top" alt="saptam trail">
                        </div>
                    </a>
                    <p class="mt-4 text-sm  font-bold text-gray-800 uppercase tracking-widest">
                        Saptam Trail
                        <span class="text-blue-500">
                            <i class="fa-solid fa-arrow-right mr-4"></i>
                        </span>
                    </p>
                </div>


            </div>
        </div>
    </section>

    <section class="relative py-28  border-t border-gray-100 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 skew-x-[-15deg] translate-x-1/2"></div>

        <div class="w-[80%] mx-auto relative z-10">
            <div class="w-full mx-auto flex flex-col lg:flex-row items-center justify-between gap-16">

                <div class="flex-1 text-center lg:text-left">


                    <h2 class="text-4xl md:text-5xl font-eternal text-gray-900 leading-[1.1] mb-6">
                        Ready to elevate <br>
                        <span class="italic font-light text-gray-400 underline decoration-blue-500/30 underline-offset-8">your digital standard?</span>
                    </h2>

                    <p class="text-sm md:text-base text-gray-500 font-light max-w-md leading-relaxed">
                        Experience the speed of Rudra Tech's static architecture. Click below to start your transformation.
                    </p>
                </div>

                <div class="relative group">

                    <div class="absolute inset-0 bg-blue-500/20 rounded-xl animate-[ping_2s_linear_infinite] scale-105"></div>
                    <div class="absolute inset-0 border border-blue-400/30 rounded-xl animate-[pulse_3s_ease-in-out_infinite] scale-110"></div>

                    <a href="/get-in-touch"
                        class="relative z-10 flex items-center justify-between w-72 h-24 bg-gray-900 text-white rounded-xl px-8 shadow-[0_20px_50px_rgba(0,0,0,0.2)] active:scale-95 transition-transform overflow-hidden">

                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-[0.4em] font-black text-blue-400">Start Now</span>
                            <span class="text-lg font-eternal italic mt-1">New Project</span>
                        </div>

                        <div class="flex items-center justify-center w-12 h-12 bg-white/10 rounded-lg border border-white/10">
                            <svg class="w-5 h-5 animate-[bounce_2s_infinite] text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full h-1 bg-white/5 overflow-hidden">
                            <div class="h-full bg-blue-600 animate-[marquee_3s_linear_infinite] w-1/2"></div>
                        </div>
                    </a>


                </div>

            </div>
        </div>
    </section>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(200%);
            }
        }
    </style>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "./include/footer.php" ?>
</body>

</html>