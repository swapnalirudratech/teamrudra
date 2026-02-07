<?php
$page_title = "custom-website-designing";

?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>



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
            animation: float 6s ease-in-out infinite;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (max-width: 768px) {
            .parallax {
                background-attachment: scroll;
            }
        }
    </style>


    <!-- Hero Section -->
    <section class="relative h-[85vh] max-md:h-[70vh] flex items-center bg-white border-b border-gray-100 bg-cover bg-center"
        style="background-image: url('/asset/bgweb.png');">

        <div class=" absolute   overlay bg-black/50 inset-0"></div>
        <div class="w-[80%] max-lg:w-[85%] mx-auto py-20 relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">


                <div class="relative hidden lg:block">
                    <!-- <img src="" class="w-full h-[50vh] object-cover" alt=""> -->
                </div>

                <div class="space-y-8 text-white max-lg:space-y-4">
                    <div class="space-y-4">

                        <h1 class="text-5xl max-lg:text-4xl max-md:text-3xl  font-bold  leading-tight">
                            Custom Website Development
                        </h1>
                    </div>

                    <p class=" leading-relaxed max-lg:w-2/3 max-md:w-full">
                        Professional web solutions tailored to your business needs. We build websites that deliver results.
                    </p>

                    <div class="flex gap-4 pt-4 ">
                        <a href="/getquote" class="px-8 max-lg:px-4 max-lg:py-2 py-4 bg-white text-black font-medium transition-colors">
                            Get Started
                        </a>
                        <a href="/portfolio" class="px-8 max-lg:px-4 max-lg:py-2 py-4 border border-white text-white font-bold hover:bg-black  transition-colors">
                            View Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 max-lg:py-12  bg-white">
        <div class="w-[80%] max-lg:w-[85%] mx-auto ">
            <div class="mb-16 max-lg:mb-8  ">
                <div class="w-12 h-1 bg-black mb-6"></div>
                <h2 class="text-4xl lg:text-5xl max-lg:text-3xl  font-bold text-black mb-4">Our Services</h2>
                <p class=" text-gray-600 max-w-2xl">Everything you need to establish a powerful online presence</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="border border-gray-200 p-8 hover:border-black transition-colors">

                    <i class="fa-solid fa-paint-brush text-3xl mb-3"></i>

                    <h3 class=" font-bold text-black mb-3">Web Design</h3>
                    <p class="text-gray-600">Clean, modern designs that represent your brand</p>
                </div>

                <div class="border border-gray-200 p-8 hover:border-black transition-colors">
                    <i class="fa-solid fa-code text-3xl mb-3"></i>
                    <h3 class=" font-bold text-black mb-3">Development</h3>
                    <p class="text-gray-600">Custom coded solutions for your unique needs</p>
                </div>

                <div class="border border-gray-200 p-8 hover:border-black transition-colors">
                    <i class="fa-solid fa-cart-shopping text-3xl mb-3"></i>
                    <h3 class=" font-bold text-black mb-3">E-Commerce</h3>
                    <p class="text-gray-600">Complete online stores with payment integration</p>
                </div>

                <div class="border border-gray-200 p-8 hover:border-black transition-colors">
                    <i class="fa-solid fa-wrench text-3xl mb-3"></i>
                    <h3 class=" font-bold text-black mb-3">Maintenance</h3>
                    <p class="text-gray-600">Ongoing support and updates for your website</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Recent Work Section -->
    <section id="work" class="py-24 max-lg:py-12 bg-white">
        <div class="max-w-[1400px] mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-baseline mb-20 gap-4">
                <h2 class="text-5xl md:text-7xl font-bold tracking-tighter text-slate-900">
                    Selected <span class="text-slate-300">Works</span>
                </h2>
                <p class="text-slate-500 font-medium text-lg italic">2024 — 2026 Projects</p>
            </div>

            <div class="grid grid-cols-1 gap-24 max-md:gap-12">

                <div class="group relative block" data-aos="fade-up">
                    <div class="relative md:h-[600px] rounded-[2.5rem] bg-[#f5f5f7] overflow-hidden border border-slate-100">
                        <img src="/asset/bnr/4.png" class="w-full h-full rounded-xl object-contain p-12 max-md:p-4 transition-transform duration-1000 ease-out group-hover:scale-105" alt="E-Commerce">

                        <div class="absolute top-8 left-8 flex gap-2">
                            <span class="px-4 py-2 bg-white/80 backdrop-blur-md rounded-full text-[10px] font-bold uppercase tracking-widest text-slate-900 shadow-sm">Tailwind CSS</span>
                            <span class="px-4 py-2 bg-blue-600 rounded-full text-[10px] font-bold uppercase tracking-widest text-white shadow-sm">PHP</span>
                        </div>

                        <div class="absolute bottom-6 left-6 right-6 p-8 bg-white/40 backdrop-blur-xl rounded-[1.5rem] border border-white/20 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Fashion Retail Store</h3>
                                    <p class="text-slate-700 mt-1">Full-stack e-commerce solution with custom checkout flow.</p>
                                </div>
                                <a href="#" class="h-14 w-14 rounded-full bg-slate-900 text-white flex items-center justify-center hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="group cursor-pointer" data-aos="fade-right">
                        <div class="rounded-[2.5rem] bg-indigo-50 border border-indigo-100 overflow-hidden mb-6 flex items-center justify-center p-12 relative">
                            <img src="/asset/bnr/18.png" class="w-full h-full rounded-xl object-contain transition-transform duration-700 group-hover:scale-110" alt="Corporate">
                        </div>
                        <div class="px-4">
                            <span class="text-blue-600 font-bold text-xs uppercase tracking-widest">Consulting</span>
                            <h3 class="text-2xl font-bold text-slate-900 mt-2">Tech Consulting Firm</h3>
                        </div>
                    </div>

                    <div class="group cursor-pointer" data-aos="fade-left">
                        <div class="rounded-[2.5rem] bg-indigo-50 border border-indigo-100 overflow-hidden mb-6 flex items-center justify-center p-12 relative">
                            <img src="/asset/bnr/17.png" class="w-full h-full rounded-xl object-contain transition-transform duration-700 group-hover:scale-110" alt="Trading">
                        </div>
                        <div class="px-4">
                            <span class="text-indigo-600 font-bold text-xs uppercase tracking-widest">Fintech</span>
                            <h3 class="text-2xl font-bold text-slate-900 mt-2">Crypto Trading Platform</h3>
                        </div>
                    </div>

                </div>

                <div class="group relative rounded-[2.5rem] bg-slate-900 p-12 md:p-24 overflow-hidden flex flex-col md:flex-row items-center gap-12" data-aos="zoom-in">
                    <div class="md:w-1/2 z-10">
                        <span class="text-blue-400 font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Logistics Solution</span>
                        <h3 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">Cargo Tracking <br> & Logistics.</h3>
                        <p class="text-slate-400 text-lg mb-8 max-w-sm">Real-time inventory management and supply chain tracking for Rudra Tech clients.</p>
                        <a href="/portfolio" class="inline-block px-8 py-4 border border-white/20 text-white rounded-full hover:bg-white hover:text-black transition-all">View Project Details</a>
                    </div>
                    <div class="md:w-1/2 relative">
                        <img src="/asset/bnr/33.png" class="w-full h-auto rounded-xl object-contain transition-transform duration-700  group-hover:scale-110" alt="Logistics">
                    </div>
                    <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px]"></div>
                </div>

            </div>

            <div class="mt-32 max-lg:mt-12 text-center">
                <a href="/portfolio" class="group text-slate-900 font-bold text-lg inline-flex items-center gap-4">
                    View more work
                    <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center group-hover:bg-slate-900 group-hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 max-lg:py-12  bg-gradient-to-b from-gray-50 to-white border-t relative overflow-hidden">
        <!-- Decorative Background Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_40%,rgba(59,130,246,0.1),transparent_70%)]"></div>

        <div class="relative w-[80%] max-lg:w-[85%] mx-auto" data-aos="fade-up" data-aos-duration="800">
            <div class="mb-16 max-lg:mb-8   text-center">
                <div class="w-12 h-1 bg-black mb-6 mx-auto"></div>
                <h2 class="text-4xl lg:text-5xl max-lg:text-3xl  font-bold text-black mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Answers to some of the most common queries about our services</p>
            </div>

            <!-- FAQ Accordion -->
            <div class="max-w-3xl mx-auto space-y-4" x-data="{ open: null }">

                <!-- FAQ Item -->
                <template x-for="(faq, index) in [
        { q: 'How long does it take to build a website?', a: 'Typically 4-8 weeks depending on complexity and features required. We’ll provide a detailed timeline during consultation.' },
        { q: 'Do you provide website maintenance?', a: 'Yes, we offer ongoing maintenance packages to keep your website secure, updated, and running smoothly.' },
        { q: 'Can you redesign my existing website?', a: 'Absolutely! We can modernize your existing website while preserving your content and improving functionality.' },
        { q: 'Will my website be mobile-friendly?', a: 'Yes, all our websites are fully responsive and optimized for all devices including smartphones and tablets.' },
        { q: 'What if I need changes after launch?', a: 'We include a revision period after launch and offer support packages for ongoing changes and updates.' }
      ]" :key="index">

                    <div
                        class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 cursor-pointer overflow-hidden"
                        :class="open === index ? 'border-blue-500 shadow-md' : ''"
                        @click="open = open === index ? null : index"
                        data-aos="fade-up" data-aos-delay="100">

                        <!-- Question -->
                        <div class="flex items-center justify-between p-6">
                            <h3 class="font-semibold text-lg text-black max-lg:text-base" x-text="faq.q"></h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600 transform transition-transform duration-300"
                                :class="open === index ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Answer -->
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed text-base max-lg:text-sm transition-all duration-500"
                            x-show="open === index"
                            x-collapse
                            x-text="faq.a">
                        </div>
                    </div>
                </template>
            </div>
        </div>


    </section>


    <!-- CTA Section -->
    <section id="contact" class="py-20 max-lg:py-10 bg-black text-white">
        <div class="w-[80%] max-lg:w-[85%] mx-auto  text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-5xl max-lg:text-3xl   font-bold mb-4">
                    Ready to Start Your Project?
                </h2>
                <p class=" text-gray-400 mb-12 max-lg:mb-8">
                    Let's discuss how we can help bring your vision to life
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/getin-touch" class="px-10 py-5 bg-white text-black font-bold hover:bg-gray-100 transition-colors">
                        Get in Touch
                    </a>
                    <a href="tel:+1234567890" class="px-10 py-5 border border-white text-white font-bold hover:bg-white hover:text-black transition-colors">
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>







    <?php include "include/marquee.php"; ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
    <!-- AOS Init -->
    <script>
        AOS.init({
            once: true,
            offset: 100,
        });
    </script>

</body>

</html>