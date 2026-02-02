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
    <section class="relative h-[85vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center bg-white border-b border-gray-100 bg-cover bg-center"
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
                        <a href="#contact" class="px-8 max-lg:px-4 max-lg:py-2 py-4 bg-white text-black font-medium transition-colors">
                            Get Started
                        </a>
                        <a href="#work" class="px-8 max-lg:px-4 max-lg:py-2 py-4 border border-white text-white font-bold hover:bg-black  transition-colors">
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
    <section id="work" class="py-16 max-lg:py-12  bg-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white opacity-60"></div>

        <div class="relative w-[80%] max-lg:w-[85%] mx-auto z-10">
            <!-- Section Heading -->
            <div class="mb-16 max-lg:mb-8  " data-aos="fade-up" data-aos-duration="800">
                <div class="w-12 h-1 bg-black mb-6"></div>
                <h2 class="text-4xl lg:text-5xl max-lg:text-3xl  font-bold text-black mb-4">Recent Work</h2>
                <p class="text-gray-600 max-w-2xl">Explore our latest projects and success stories</p>
            </div>

            <!-- Projects Grid -->
            <div class="space-y-12 max-lg:space-y-6">
                <!-- Project 1 -->
                <div data-aos="fade-right" data-aos-duration="1000"
                    class="group max-lg:p-6 flex flex-col md:flex-row items-center justify-between bg-white shadow-lg hover:shadow-2xl rounded-3xl overflow-hidden transition-all duration-700 hover:scale-[1.02]">
                    <div class="w-full md:w-1/2 overflow-hidden">
                        <img src="/asset/bnr/4.png"
                            class="w-full h-[50vh] object-contain max-lg:h-[30vh]" alt="">
                    </div>
                    <div class="p-10 max-lg:p-0 md:w-1/2 space-y-3">
                        <span class="text-sm text-gray-500 uppercase tracking-wider">E-Commerce</span>
                        <h3 class="text-3xl max-lg:text-2xl font-bold text-black group-hover:text-blue-600 transition-colors">Fashion Retail Store</h3>
                        <p class="text-gray-600 leading-relaxed">Complete online shopping experience with a custom checkout flow.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div data-aos="fade-left" data-aos-duration="1000"
                    class="group max-lg:p-6 flex flex-col md:flex-row-reverse items-center justify-between bg-white shadow-lg hover:shadow-2xl rounded-3xl overflow-hidden transition-all duration-700 hover:scale-[1.02]">
                    <div class="w-full md:w-1/2 overflow-hidden">
                        <img src="/asset/bnr/18.png"
                            class="w-full h-[50vh] object-contain max-lg:h-[30vh]" alt="">
                    </div>
                    <div class="p-10 max-lg:p-0 md:w-1/2 space-y-3">
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Corporate</span>
                        <h3 class="text-3xl max-lg:text-2xl font-bold text-black group-hover:text-blue-600 transition-colors">Tech Consulting Firm</h3>
                        <p class="text-gray-600 leading-relaxed">Professional corporate website with elegant service showcase.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div data-aos="fade-right" data-aos-duration="1000"
                    class="group max-lg:p-6 flex flex-col md:flex-row items-center justify-between bg-white shadow-lg hover:shadow-2xl rounded-3xl overflow-hidden transition-all duration-700 hover:scale-[1.02]">
                    <div class="w-full md:w-1/2 overflow-hidden">
                        <img src="/asset/bnr/33.png"
                            class="w-full h-[50vh] object-contain max-lg:h-[30vh]" alt="">
                    </div>
                    <div class="p-10 max-lg:p-0 md:w-1/2 space-y-3">
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Transport</span>
                        <h3 class="text-3xl max-lg:text-2xl font-bold text-black group-hover:text-blue-600 transition-colors">Cargo Logistics Company</h3>
                        <p class="text-gray-600 leading-relaxed">Efficient cargo tracking system with real-time updates.</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div data-aos="fade-left" data-aos-duration="1000"
                    class="group max-lg:p-6 flex flex-col md:flex-row-reverse items-center justify-between bg-white shadow-lg hover:shadow-2xl rounded-3xl overflow-hidden transition-all duration-700 hover:scale-[1.02]">
                    <div class="w-full md:w-1/2 overflow-hidden">
                        <img src="/asset/bnr/17.png"
                            class="w-full h-[50vh] object-contain max-lg:h-[30vh]" alt="">
                    </div>
                    <div class="p-10 max-lg:p-0 md:w-1/2 space-y-3">
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Trading</span>
                        <h3 class="text-3xl max-lg:text-2xl font-bold text-black group-hover:text-blue-600 transition-colors">Crypto Trading Platform</h3>
                        <p class="text-gray-600 leading-relaxed">Advanced crypto trading platform with real-time signals.</p>
                    </div>
                </div>

            </div>

            <!-- Button -->
            <div class="text-center mt-16" data-aos="zoom-in" data-aos-duration="800">
                <a href="/portfolio"
                    class="inline-block px-10 py-4 border border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-500">
                    View All Projects
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