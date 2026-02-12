<?php
$page_title = "website-designing"; ?>

<?php include "include/header.php"; ?>
<!DOCTYPE html>
<html lang="en">


<body>
    <?php
    include "include/navbar.php";
    ?>



    <section class="relative h-[90vh] max-md:h-[80vh] flex items-center py-12 bg-white overflow-hidden font-sans">

        <div class="absolute inset-0 opacity-20 pointer-events-none z-10 bg-center bg-no-repeat bg-cover"
            style="background-image: url('./asset/software/bge.png'); "></div>

        <div class="w-[90%] md:w-[80%] mx-auto text-center relative z-10">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 border border-slate-100 mb-10 animate-fade-in">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                </span>
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Scaling Digital Brands <?php echo date('Y'); ?></span>
            </div>

            <h1 class="text-xl md:text-5xl  italic text-slate-400 mb-6 tracking-tight">
                Boost Your Products Online
            </h1>

            <h2 class="text-2xl md:text-8xl font-black tracking-tighter text-slate-950 uppercase leading-[0.85] mb-8">
                Strategic <span class="text-blue-600">E-commerce</span> <br>
                Services.
            </h2>

            <p class="text-slate-500  font-medium tracking-tight max-w-2xl mx-auto mb-12 text-lg max-md:text-sm  leading-relaxed">
                Maximize your market reach with <strong class="text-slate-950">Tailwind CSS</strong> and custom <strong class="text-slate-950">PHP frameworks</strong>. We build the high-speed architecture required to transform your product inventory into a global digital empire.
            </p>

            <div class="relative inline-block w-full max-w-lg mb-12">
                <svg class="absolute -top-16 left-1/2 -translate-x-1/2 w-full h-32 pointer-events-none opacity-30" viewBox="0 0 400 100">
                    <path d="M10,80 Q100,10 200,80 T390,20" fill="none" stroke="#2563eb" stroke-width="2" stroke-dasharray="6 6" class="animate-draw" />
                </svg>
                <a href="#consultation" class="text-sm font-black text-slate-900 uppercase tracking-widest border-b-2 border-slate-950 pb-2 hover:text-blue-600 hover:border-blue-600 transition-all">
                    Boost My Sales Now
                </a>
            </div>
        </div>
    </section>




    <section class="py-24 max-md:py-12  bg-white overflow-hidden font-sans">
        <div class="w-[90%] md:w-[85%] mx-auto">

            <div class="flex items-end gap-4 mb-16 max-md:mb-6 ">
                <span class="text-7xl font-bold text-blue-600">5</span>
                <div>
                    <h2 class="text-3xl max-md:text-2xl font-black text-slate-900 tracking-tighter uppercase">Curated Storefronts</h2>
                    <p class="text-2xl  italic text-slate-400">Strategic <span class="text-slate-950 font-sans not-italic font-bold">Industry Solutions </span></p>
                </div>
            </div>

            <div class="owl-carousel owl-theme ecommerce-slider">

                <div class="item group px-2">
                    <div class="relative h-[400px] rounded-sm overflow-hidden border border-slate-100 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <img src="/asset/software/1(6).jpg" class="w-full h-full object-cover object-center grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="High-End Furniture">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest leading-relaxed">Luxury interiors & bespoke kitchen engineering.</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em] mb-1">High-End Furniture</h4>

                    </div>
                </div>

                <div class="item group px-2">
                    <div class="relative h-[400px] rounded-sm overflow-hidden border border-slate-100 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <img src="/asset/software/1(2).jpeg" class="w-full h-full object-cover object-top grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="Fashion & Retail">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest leading-relaxed">Dynamic fashion storefronts with custom checkout logic.</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em] mb-1">Fashion & Retail</h4>

                    </div>
                </div>

                <div class="item group px-2">
                    <div class="relative h-[400px] rounded-sm overflow-hidden border border-slate-100 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <img src="/asset/software/1(5).png" class="w-full h-full object-cover object-center grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="organic product">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest leading-relaxed">Organic products & sustainable supply chains.</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em] mb-1">Organic Products</h4>

                    </div>
                </div>

                <div class="item group px-2">
                    <div class="relative h-[400px] rounded-sm overflow-hidden border border-slate-100 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <img src="/asset/software/1 (4).jpg" class="w-full h-full object-cover object-center grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="Beauty Wellness">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest leading-relaxed">Aesthetic UI/UX for beauty & premium wellness products.</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em] mb-1">Beauty Wellness</h4>

                    </div>
                </div>

                <div class="item group px-2">
                    <div class="relative h-[400px] rounded-sm overflow-hidden border border-slate-100 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <img src="/asset/software/1(3).jpg" class="w-full h-full object-cover object-center grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="Industrial B2B">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest leading-relaxed">B2B commerce hubs for industrial machinery & parts.</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em] mb-1">Industrial B2B</h4>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $(".ecommerce-slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>


    <section class="py-20 max-md:py-12  bg-gray-50/50">
        <div class="w-[90%] md:w-[85%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-md:gap-2">
                <div class="bg-white p-12 border border-slate-100 text-center space-y-4">
                    <div class="w-12 h-12 mx-auto rounded-full border border-slate-100 flex items-center justify-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" stroke-width="2" />
                        </svg></div>
                    <h5 class="text-xs font-black text-slate-900 uppercase tracking-widest">Fast & Free Shipping</h5>
                    <p class="text-[10px] font-bold text-slate-400 uppercase">Seamless Logistics Integration</p>
                </div>
                <div class="bg-white p-12 border border-slate-100 text-center space-y-4">
                    <div class="w-12 h-12 mx-auto rounded-full border border-slate-100 flex items-center justify-center text-blue-600"><span class="font-bold text-xl">$</span></div>
                    <h5 class="text-xs font-black text-slate-900 uppercase tracking-widest">Money Guarantee</h5>
                    <p class="text-[10px] font-bold text-slate-400 uppercase">30 Days Secure Backend</p>
                </div>
                <div class="bg-white p-12 border border-slate-100 text-center space-y-4">
                    <div class="w-12 h-12 mx-auto rounded-full border border-slate-100 flex items-center justify-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" stroke-width="2" />
                        </svg></div>
                    <h5 class="text-xs font-black text-slate-900 uppercase tracking-widest">Online Support</h5>
                    <p class="text-[10px] font-bold text-slate-400 uppercase">24/7 Technical Reliability</p>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="py-24 max-md:py-12  bg-white overflow-hidden font-sans">
        <div class="w-[90%] md:w-[85%] mx-auto">

            <div class="mb-16 max-md:mb-6  text-center">
                <h4 class="text-serif italic text-slate-400 text-2xl mb-2">Our Digital Creations</h4>
                <h2 class="text-5xl md:text-7xl font-black tracking-tighter text-slate-950 uppercase leading-none mb-8">
                    Proven <span class="text-blue-600">Storefronts.</span>
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[700px]">

                <div class="md:col-span-7 relative group overflow-hidden rounded-sm shadow-xl">
                    <img src="/asset/portfolio/nova-main.jpg" class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700" alt="Nova Clothing Storefront">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent flex flex-col justify-end p-12">
                        <p class="text-blue-400 font-black uppercase tracking-[0.4em] text-[10px] mb-4">Fashion & Retail</p>
                        <h3 class="text-white text-4xl font-black tracking-tighter uppercase mb-4">Street Style Fashion</h3>
                        <p class="text-slate-300 text-xs max-w-sm mb-6 leading-relaxed">High-performance clothing store engineered with Tailwind CSS and custom PHP logic.</p>
                        <a href="https://nova.bloomcrm.in/" target="_blank" class="text-white text-xs font-black uppercase tracking-widest border-b border-white pb-1 w-fit hover:text-blue-400 hover:border-blue-400 transition-all">Explore Project</a>
                    </div>
                </div>

                <div class="md:col-span-5 flex flex-col gap-6">
                    <div class="h-1/2 relative group overflow-hidden rounded-sm shadow-xl">
                        <img src="/asset/portfolio/dreamkitchen-thumb.jpg" class="w-full h-full object-cover" alt="Dream Kitchens Furniture">
                        <div class="absolute inset-0 bg-white/10 group-hover:bg-transparent transition-all"></div>
                        <div class="absolute top-8 right-8 text-right">
                            <p class="text-slate-900  italic text-lg max-md:text-sm  leading-none mb-1">Sale 30% Off Up To</p>
                            <h4 class="text-slate-900 font-black text-xl tracking-tighter uppercase">High-End Furniture</h4>
                        </div>
                    </div>
                    <div class="h-1/2 relative group overflow-hidden rounded-sm shadow-xl">
                        <img src="/asset/portfolio/kesarbaug-thumb.jpg" class="w-full h-full object-cover" alt="Kesarbaug Grocery">
                        <div class="absolute inset-0 bg-slate-950/20 flex flex-col justify-center items-center p-8 text-center">
                            <p class="text-white  italic text-2xl mb-2">2018 Collection</p>
                            <h4 class="text-white font-black text-xl tracking-tighter uppercase mb-4">FMCG & Grocery</h4>
                            <a href="https://kesarbaug.in/" class="text-white text-[10px] font-black uppercase tracking-widest border-b border-white pb-1">View Live Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section class="py-24 max-md:py-12  bg-white overflow-hidden font-sans">
        <div class="w-[90%] md:w-[85%] mx-auto">

            <div class="owl-carousel owl-theme ecosystem-slider">

                <div class="item pt-10 pb-20 max-md:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative order-2 lg:order-1">
                            <div class="relative z-20 shadow-2xl rounded-sm overflow-hidden border border-slate-100 bg-white">
                                <img src="/asset/software/novahome.jpg" alt="Home Page Preview" class="w-full h-auto">
                            </div>

                            <div class="absolute -top-10 -left-10 w-64 h-64 bg-blue-100/50 rounded-full -z-10"></div>
                        </div>
                        <div class="order-1 lg:order-2 space-y-8 max-md:space-y-2 ">
                            <h4 class="text-blue-600 font-bold  uppercase tracking-[0.3em] text-[10px]">Customer Experience</h4>
                            <h2 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight">Beautiful In Every Aspect of Design</h2>
                            <p class="text-slate-500 text-lg max-md:text-sm  leading-relaxed">
                                Easily craft high-performance homepages with our custom PHP logic. Building a brand identity is seamless even for non-tech users.
                            </p>
                            <div class="pt-4 flex items-center gap-6">
                                <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-blue-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-width="2" />
                                    </svg></div>
                                <span class="font-black text-slate-900 uppercase tracking-widest text-xs">Modern Home Architecture</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item pt-10 pb-20 max-md:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative order-2 lg:order-1">
                            <div class="relative z-20 shadow-2xl rounded-sm overflow-hidden border border-slate-100 bg-white">
                                <img src="/asset/software/p-1.jpg" alt="Product Page" class="w-full h-auto">
                            </div>

                        </div>
                        <div class="order-1 lg:order-2 space-y-8 max-md:space-y-2 ">
                            <h4 class="text-blue-600 font-bold  uppercase tracking-[0.3em] text-[10px]">Inventory Logic</h4>
                            <h2 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight">Optimized For Conversions</h2>
                            <p class="text-slate-500 text-lg max-md:text-sm  leading-relaxed">
                                Engineered with Tailwind CSS for rapid mobile deployment. Showcase your product inventory with high-speed listing architecture.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item pt-10 pb-20 max-md:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative order-2 lg:order-1">
                            <div class="relative z-20 shadow-2xl rounded-sm overflow-hidden border border-slate-100 bg-white  ">
                                <img src="/asset/software/admin.jpg" alt="Admin Access" class="w-full h-auto">
                            </div>

                        </div>
                        <div class="order-1 lg:order-2 space-y-8 max-md:space-y-2 ">
                            <h4 class="text-blue-600 font-bold  uppercase tracking-[0.3em] text-[10px]">Merchant Backend</h4>
                            <h2 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight">Hardened Admin Security</h2>
                            <p class="text-slate-500 text-lg max-md:text-sm  leading-relaxed">
                                Custom PHP frameworks ensure your business data is protected. Manage global storefronts with enterprise-grade login protocols.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $(".ecosystem-slider").owlCarousel({
                items: 1, // 1 slide at a time
                loop: true,
                margin: 30,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 800,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            });
        });
    </script>

    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>





    <section class="pb-24 max-md:pb-12 bg-white font-sans overflow-hidden ">
        <div class="w-[85%] mx-auto">

            <div class="mb-20 max-md:mb-4 text-center lg:text-left max-w-5xl">
                <span class="inline-block px-4 py-1.5 bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest rounded-sm mb-6">
                    The Future of Retail, Now
                </span>
                <h2 class="text-2xl md:text-6xl  font-bold tracking-tighter text-slate-900 leading-[0.9] mb-8 max-md:mb-3">
                    Our <span class="text-blue-600">E-Commerce</span> Creative Process From Vision to Launch.
                </h2>
                <p class="text-slate-500 text-lg max-md:text-sm  md:text-xl font-medium tracking-tight">
                    We blend cutting-edge design with complex logic to build storefronts that scale.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/1.jpeg" class="w-full h-full object-cover " alt="Strategy">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-black text-slate-950 shadow-lg">01</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-black text-slate-950 mb-2 uppercase tracking-tighter">Strategy & Discovery</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Understanding your brand and market to lay a high-conversion foundation.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/2.jpeg" class="w-full h-full object-cover " alt="UI Design">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-black text-slate-950 shadow-lg">02</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-black text-slate-950 mb-2 uppercase tracking-tighter">UI/UX & Design</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Crafting intuitive interfaces engineered with Tailwind CSS for rapid mobile deployment.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/3.jpeg" class="w-full h-full object-cover " alt="PHP Dev">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-black text-slate-950 shadow-lg">03</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-black text-slate-950 mb-2 uppercase tracking-tighter">Logic & Development</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Implementing secure custom PHP frameworks and API integrations for enterprise scale.</p>
                    </div>
                </div>

                <div class="group space-y-6">
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-100 shadow-xl group-hover:-translate-y-2 transition-transform duration-500">
                        <img src="/asset/software/4.jpg" class="w-full h-full object-cover " alt="Launch">
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white rounded-full flex items-center justify-center font-black text-slate-950 shadow-lg">04</div>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xl font-black text-slate-950 mb-2 uppercase tracking-tighter">Launch & Growth</h4>
                        <p class="text-xs font-bold text-slate-400 leading-relaxed">Post-launch SEO optimization and continuous technical support for global success.</p>
                    </div>
                </div>

            </div>

            <div class="mt-24 max-md:mt-12 text-center">
                <a href="/portfolio" class="inline-flex items-center gap-4 group">
                    <span class="text-xs font-black uppercase tracking-[0.3em] text-slate-950 border-b-2 border-slate-950 pb-1 group-hover:text-blue-600 group-hover:border-blue-600 transition-all">View Our Portfolio</span>
                    <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>






    <section class="py-24 max-md:py-12  max-md:py-10 bg-gray-50 font-sans">
        <div class="w-[85%] mx-auto">
            <div class="flex items-end gap-2 mb-16 max-md:mb-6  max-md:mb-8">
                <span class="text-8xl max-md:text-6xl font-bold text-blue-500">4</span>
                <div>
                    <h2 class="text-3xl md:text-6xl font-bold text-gray-900">Featured Stores</h2>
                    <p class="text-2xl max-md:text-lg max-md:text-sm  font-serif italic text-gray-600">Explore <span class="text-gray-900 font-sans not-italic font-bold">our e-commerce work </span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="group">
                    <a href="preview-page.php?project=kesarbaug" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/keserbg.png" class="w-full h-full object-cover object-top" alt="kesarbaug organic products">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest flex items-center justify-between">
                        Kesarbaug
                        <span class="text-blue-500"><i class="fa-solid fa-arrow-right"></i></span>
                    </p>

                </div>

                <div class="group">
                    <a href="preview-page.php?project=snackita" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
                        <div class="h-[450px] overflow-hidden">
                            <img src="/asset/software/snackita.png" class="w-full h-full object-cover object-top" alt="Snackita Sindhi Snacks">
                        </div>
                    </a>
                    <p class="mt-4 text-sm font-bold text-gray-800 uppercase tracking-widest flex items-center justify-between">
                        Snackita
                        <span class="text-blue-500"><i class="fa-solid fa-arrow-right"></i></span>
                    </p>

                </div>

                <div class="group">
                    <a href="preview-page.php?project=nova" target="_blank" class="block bg-white shadow-xl rounded-sm overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2">
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


            </div>
        </div>
    </section>



    <div class="bg-white font-sans antialiased">

        <section class="px-6 pt-20 pb-12 max-md:pt-12 text-center">
            <div class="mx-auto max-w-3xl">
                <h1 class="text-4xl max-md:text-2xl font-extrabold tracking-tight text-gray-900 sm:text-6xl mb-6">
                    Elevate Your Digital Storefront with <span class="text-blue-600">Nova</span>
                </h1>
                <p class="text-lg max-md:text-sm  leading-8 text-gray-600">
                    The ultimate clothing e-commerce experience. Seamlessly integrated, SEO optimized, and built for conversion.
                </p>
            </div>
        </section>

        <section class="px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-100 transition-all hover:shadow-[0_20px_50px_rgba(0,0,0,0.1)]">
                <img
                    src="/asset/software/nova4.png"
                    alt="Nova Clothing E-commerce Website Dashboard Preview"
                    class="w-full h-full object-contain" />
            </div>
        </section>

        <section class="w-[80%] mx-auto py-24 max-md:py-12 ">
            <div class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-4 max-md:gap-y-8">

                <div class="relative pl-16">
                    <dt class="text-base font-bold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 18H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 12h11.25" />
                            </svg>
                        </div>
                        Powerful Admin Panel
                    </dt>
                    <dd class="mt-2 text-sm leading-7 text-gray-600">
                        We provide a robust dashboard to manage products, orders, and customers in one proper, organized place.
                    </dd>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-bold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        Live Order Tracking
                    </dt>
                    <dd class="mt-2 text-sm leading-7 text-gray-600">
                        Integrated GPS tracking systems so your customers always know exactly where their fashion haul is.
                    </dd>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-bold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                        </div>
                        Secure Payments
                    </dt>
                    <dd class="mt-2 text-sm leading-7 text-gray-600">
                        Complete setup of secure payment gateways (UPI, Cards, Wallets) for a smooth and safe checkout experience.
                    </dd>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-bold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253" />
                            </svg>
                        </div>
                        Logistics Integration
                    </dt>
                    <dd class="mt-2 text-sm leading-7 text-gray-600">
                        Automated shipping labels and courier partnership integrations to handle your global deliveries properly.
                    </dd>
                </div>

            </div>
        </section>

    </div>

    <section class="bg-gray-50 py-24 max-md:py-12 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-16 max-md:mb-10">
                <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase font-eternal">Mobile-First Experience</h2>
                <p class="mt-2 text-3xl max-md:text-2xl font-extrabold text-gray-900 sm:text-4xl ">
                    Powerful Features in the Palm of Your Hand
                </p>
            </div>

            <div class="relative flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-20">

                <div class="hidden lg:flex flex-col gap-24 w-1/4 text-right">
                    <div class="relative">
                        <h4 class="font-bold text-gray-900 uppercase text-xs tracking-widest mb-2">App-Like Speed</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Lightning fast browsing via static edge delivery.</p>
                        <svg class="absolute -right-16 top-0 text-indigo-300 w-12 h-12 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h4 class="font-bold text-gray-900 uppercase text-xs tracking-widest mb-2">One-Tap Checkout</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Seamless payment transitions for higher conversions.</p>
                        <svg class="absolute -right-16 top-0 text-indigo-300 w-12 h-12 transform -rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <div class="relative z-10">
                    <div class="absolute -inset-10 bg-indigo-500/10 rounded-full blur-3xl"></div>

                    <div class="relative border-gray-900 bg-gray-900 border-[14px] rounded-[2.5rem] h-[580px] w-[300px] shadow-2xl overflow-hidden">
                        <div class="absolute top-0 inset-x-0 h-6 bg-gray-900 z-20">
                            <div class="mx-auto w-20 h-1 bg-gray-800 rounded-full"></div>
                        </div>

                        <div class="h-full w-full bg-white relative">
                            <video class="h-full w-full object-cover" autoplay loop muted playsinline>
                                <source src="/asset/software/nova5.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <div class="absolute -left-[17px] top-24 h-12 w-[3px] bg-gray-800 rounded-l-lg"></div>
                        <div class="absolute -left-[17px] top-40 h-12 w-[3px] bg-gray-800 rounded-l-lg"></div>
                        <div class="absolute -right-[17px] top-32 h-20 w-[3px] bg-gray-800 rounded-r-lg"></div>
                    </div>
                </div>

                <div class="hidden lg:flex flex-col gap-24 w-1/4 text-left">
                    <div class="relative">
                        <h4 class="font-bold text-gray-900 uppercase text-xs tracking-widest mb-2">Responsive Admin</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Manage your site on the go with our mobile panel.</p>
                        <svg class="absolute -left-16 top-0 text-indigo-300 w-12 h-12 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h4 class="font-bold text-gray-900 uppercase text-xs tracking-widest mb-2">SEO Optimized</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Perfectly indexed for mobile-first search ranking.</p>
                        <svg class="absolute -left-16 top-0 text-indigo-300 w-12 h-12 transform -rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 sm:grid-cols-3 text-center lg:hidden mt-10">
                    <div>
                        <h4 class="font-bold text-gray-900">App-Like Speed</h4>
                        <p class="text-sm text-gray-600 mt-1">Lightning fast browsing.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">One-Tap Checkout</h4>
                        <p class="text-sm text-gray-600 mt-1">Seamless payment integration.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Responsive Admin</h4>
                        <p class="text-sm text-gray-600 mt-1">Manage anywhere, anytime.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-blue-600 rounded-2xl p-8 sm:p-12 relative overflow-hidden shadow-xl">

            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-blue-500 rounded-full opacity-50 blur-3xl"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                        Ready to build your online store?
                    </h2>
                    <p class="mt-2 text-blue-100 text-base">
                        Get a professional eCommerce solution tailored to your brand.
                    </p>
                </div>

                <div class="flex-shrink-0">
                    <a href="#" class="inline-flex items-center px-8 py-3.5 border border-transparent text-base font-bold rounded-lg text-blue-600 bg-white hover:bg-blue-50 transition-all transform hover:scale-105 active:scale-95 shadow-md">
                        Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>





    <!-- <section class="relative w-full h-[85vh] max-md:h-[70vh] flex items-center justify-center overflow-hidden">

        <div class="absolute inset-0 z-0">
            <img src="/asset/image/ebg.jpg" alt="E-Commerce Background"
                class="w-full h-full object-cover object-center scale-105" />

            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 text-center">

            <p class="text-xs md:text-sm font-bold tracking-[0.2em] text-gray-300 uppercase mb-6 animate-fade-in-down">
                E-Commerce Design
            </p>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-8 tracking-tight leading-tight drop-shadow-lg">
                E-Commerce <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-blue-200 to-blue-400">
                    Excellence.
                </span>
            </h1>

            <p class="text-lg max-md:text-sm  md:text-xl text-gray-200 max-w-2xl mx-auto mb-12 font-light leading-relaxed opacity-90">
                We build digital storefronts that blend high-fashion aesthetics with powerful backend technology.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">

                <a href="/portfolio"
                    class="px-10 py-4 bg-white text-black rounded-full font-bold hover:bg-gray-200 transition-all duration-300 transform hover:-translate-y-1 shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                    View Projects
                </a>

                <a href="/getquote"
                    class="px-10 py-4 border border-white/30 bg-white/5 backdrop-blur-sm text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300">
                    Start Project
                </a>
            </div>
        </div>
    </section> -->
    <!-- <section class="relative overflow-hidden h-auto max-lg:h-[40vh] max-md:h-[80vh] bg-white  flex items-center w-full ">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[500px] h-[500px] bg-gray-50 rounded-full z-0"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[400px] h-[400px] bg-blue-50/50 rounded-full z-0"></div>
        <div class="relative z-20 w-[90%] mx-auto flex flex-col py-20 max-md:py-12   items-center justify-center  gap-10">
           
            <div class="w-full lg:w-1/2 text-black space-y-5 text-center">
                <h1 class="max-md:text-2xl max-lg:text-4xl text-5xl font-bold leading-tight">
                    Smart Ecommerce <br>Solutions by <span class="text-blue-600">RudraTech</span>
                </h1>
                <p class="text-lg max-md:text-sm  text-gray-600">
                    Launch faster. Sell more. Scale seamlessly.
                </p>

            </div>

           
            <div class="  flex justify-center ">
                <img src="/asset/bnr/1 (1).png" alt="Ecommerce Illustration" class="w-full h-[80vh] max-lg:h-[30vh] object-contain rounded-xl">
            </div>
        </div>
    </section>

    <section class="w-full bg-gradient-to-b from-pink-100 to-white py-16 rounded-t-[80px] max-lg:rounded-t-[40px] ">
        <div class="w-[80%] mx-auto space-y-6">

         
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full">
                    <img src="/asset/image/e2.png" alt="Desktop E-commerce" class="w-full h-auto object-contain">
                </div>
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Desktop E-commerce Experience</h2>
                    <p class="text-base sm:text-lg max-md:text-sm  text-gray-600 leading-relaxed">
                        Create responsive, high-performing e-commerce websites with smooth navigation, product showcases, and fast checkout—optimized for desktops.
                    </p>
                </div>
            </div>

         
            <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Mobile-Optimized Commerce</h2>
                    <p class="text-base sm:text-lg max-md:text-sm  text-gray-600 leading-relaxed">
                        Deliver a fast, intuitive, mobile-first shopping experience with touch-friendly design and seamless one-click checkout.
                    </p>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center">
                    <img src="/asset/image/e3.png" alt="Mobile E-commerce" class="w-full h-auto object-contain">
                </div>
            </div>

            
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 w-full flex justify-center">
                    <img src="/asset/image/e4.png" alt="Admin Panel" class="w-full h-auto object-contain">
                </div>
                <div class="lg:w-1/2 w-full">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 text-gray-900">Powerful Admin Panel</h2>
                    <p class="text-base sm:text-lg max-md:text-sm  text-gray-600 leading-relaxed">
                        Easily manage products, orders, and reports through a secure, user-friendly dashboard built for control and efficiency.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-white flex items-center justify-center">
        <div class="w-[80%] mx-auto max-lg:w-[85%] max-lg:border-t flex flex-col py-20 max-md:py-12  max-md:py-12 items-center justify-center bg-white max-md:border-t border-gray-200">
            <h2 class="max-lg:text-3xl text-4xl font-normal text-gray-800 mb-4 max-lg:text-center">Key Features of Our E-commerce Website</h2>

            <div class="grid max-md:grid-cols-1 grid-cols-3 max-lg:grid-cols-2 gap-10  mt-10 max-md:gap-4">

              
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-mobile-alt text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Mobile-Friendly Design</h3>
                    </div>
                </div>

               
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-user-circle text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Customer-Focused UI</h3>
                    </div>
                </div>

               
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-globe text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Cross-Device Compatibility</h3>
                    </div>
                </div>

               
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-gauge-high text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">High-Speed Performance</h3>
                    </div>
                </div>

               
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-chart-line text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">SEO-Optimized Structure</h3>
                    </div>
                </div>

                
                <div class="flex rounded-xl bg-white border p-4 items-center shadow-md w-[300px] group hover-trigger">
                    <div class="flex p-4 w-14 h-14 rounded-xl items-center justify-center bg-black group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-pen-nib text-2xl text-white flip-icon"></i>
                    </div>
                    <div class="feature-content pl-4">
                        <h3 class="feature-title">Custom Branding & UI</h3>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>