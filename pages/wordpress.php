<?php
$page_title = "wordpress"
?>
<!Doctype html>
<html lang="en">

<?php include "include/header.php" ?>

<body>
    <?php include "include/navbar.php" ?>

    <section class="relative bg-gradient-to-br from-[#f9fafb] via-[#f1f5f9] to-[#e2e8f0] overflow-hidden py-16 max-lg:py-4 max-md:py-12">
        <!-- Decorative Shape -->
        <div class="absolute -top-10 -left-10 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply blur-2xl opacity-30 animate-pulse"></div>
        <div class="absolute top-20 right-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply blur-2xl opacity-20"></div>

        <div class="relative z-10 w-[80%]  max-lg:w-[85%] mx-auto flex flex-col lg:flex-row max-lg:flex-row items-center justify-between gap-10">

            <!-- Left Content -->
            <div class="max-w-xl space-y-6">
                <p class="text-blue-500 text-sm font-semibold uppercase tracking-widest">WordPress Development</p>
                <h1 class="max-md:text-3xl text-5xl max-lg:text-3xl font-extrabold text-gray-900 leading-tight">
                    Custom <span class="text-blue-600">WordPress Solutions</span> That Scale with Your Business
                </h1>
                <p class="text-gray-600 ">
                    We craft secure, lightning-fast, and SEO-optimized WordPress websites tailored for startups, businesses & enterprises.
                </p>
                <div>
                    <a href="/getin-touch" class="inline-block max-lg:text-sm bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition">
                        Get a Free Consultation
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div id="svg-container" class="w-[400px] h-[400px] flex items-center justify-center mx-auto cursor-grab active:cursor-grabbing max-md:hidden">
                <?php include 'asset/globe-loop-i1.svg'; ?>
            </div>

        </div>
    </section>

    <section class="bg-gray-100 py-24 max-lg:py-12">
        <div class="w-[80%]  max-lg:w-[85%] mx-auto ">
            <div class="text-center mb-16 max-lg:mb-4">
                <h2 class="max-lg:text-3xl max-md:text-2xl text-4xl font-bold text-gray-800 mb-4">Why Choose <br> Our WordPress Experts?</h2>
                <p class="text-gray-600 ">Get custom-built, SEO-optimized, and blazing fast websites tailored to your business.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-lg:gap-3">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-laptop-code text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl max-lg:text-lg font-semibold mb-2 text-blue-600">Custom Design & Development</h3>
                    <p class="text-gray-600">We build unique WordPress sites that match your brand, not generic templates.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-globe text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl max-lg:text-lg font-semibold mb-2 text-blue-600">SEO-Friendly Structure</h3>
                    <p class="text-gray-600">Boost your visibility with optimized code, clean URLs, and fast loading times.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fa-solid fa-headset text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl max-lg:text-lg font-semibold mb-2 text-blue-600">Dedicated Support</h3>
                    <p class="text-gray-600">Get post-launch support and updates from our expert WordPress team.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 max-lg:py-12 bg-white">
        <div class="w-[80%]  max-lg:w-[85%] mx-auto  flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <img src="/asset/wordpress.png" alt="WordPress Experts" class="rounded-lg w-full">
            </div>
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl max-lg:text-2xl font-bold text-gray-800">Expert WordPress Solutions for Every Business</h2>
                <p class="text-gray-600">From corporate websites to eCommerce stores, our team builds flexible, high-performance WordPress sites.</p>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fa-solid fa-check text-blue-600 mr-2"></i> Mobile-Responsive Designs</li>
                    <li><i class="fa-solid fa-check text-blue-600 mr-2"></i> Plugin Integration & Customization</li>
                    <li><i class="fa-solid fa-check text-blue-600 mr-2"></i> Fast Delivery & Affordable Pricing</li>
                </ul>
                <a href="/getquote" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full">Request a Free Quote</a>
            </div>
        </div>
    </section>

    <section class="bg-black text-white py-24 max-lg:py-12">
        <div class="w-[90%] mx-auto max-lg:h-auto ">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:justify-between items-start mb-10 w-[90%] mx-auto">
                <div>
                    <p class="text-white text-2xl font-semibold uppercase">Featured Projects</p>
                </div>
                <p class="text-gray-300 max-w-2xl mt-4 md:mt-0 md:w-1/2">
                    It is the process that makes our work so much fun, but our greatest joy comes from helping our partners achieve impactful results. Have a look around!
                </p>
            </div>

            <!-- Slider -->
            <div class="flex items-center gap-4 relative w-full">
                <!-- Left Arrow -->
                <button id="custom-prev" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <div class="owl-carousel w-full pt-20 overflow-hidden max-lg:py-6">
                    <!-- Project 1 -->
                    <div class="bg-black  overflow-hidden">
                        <img src="/asset/image/s (2).jpg" alt="Kesarbaoug Website" class="w-full h-[40vh] max-lg:h-auto object-cover" />
                        <div class="p-4 text-white">
                            <h3 class="font-bold text-xl max-lg:text-sm max-lg:text-sm">Kesarbaoug</h3>
                            <p class="text-gray-400 max-lg:text-xs">A clean, SEO-friendly WordPress site for a premium property brand.</p>
                        </div>
                    </div>

                    <!-- Project - RBA Pure Skin Care -->
                    <div class="bg-black  overflow-hidden">
                        <img src="/asset/image/s (1).jpg" alt="RBA Pure Skin Care Website" class="w-full h-[40vh] max-lg:h-auto object-cover" />
                        <div class="p-4 text-white">
                            <h3 class="font-bold text-xl max-lg:text-sm max-lg:text-sm">RBA Pure Skin Care</h3>
                            <p class="text-gray-400 max-lg:text-xs">Elegant WordPress design for a skincare brand with product showcase and contact features.</p>
                        </div>
                    </div>


                    <!-- Project - Laxmi Machinery -->
                    <div class="bg-black  overflow-hidden">
                        <img src="/asset/image/gold.jpg" alt="Laxmi Machinery Jewelry Equipment Website" class="w-full h-[40vh] max-lg:h-auto object-cover" />
                        <div class="p-4 text-white">
                            <h3 class="font-bold text-xl max-lg:text-sm max-lg:text-sm">Laxmi Machinery</h3>
                            <p class="text-gray-400 max-lg:text-xs">WordPress website for a gold and silver jewelry machinery manufacturer with product display and inquiry forms.</p>
                        </div>
                    </div>


                </div>



                <!-- Right Arrow -->
                <button id="custom-next" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>


    <section class="bg-white text-black py-24 max-lg:py-12">
        <div class="w-[80%]  max-lg:w-[85%] mx-auto flex flex-col md:flex-row gap-12">
            <!-- Left Side -->
            <div class="md:w-1/3">
                <p class="text-blue-500 font-semibold uppercase text-3xl max-lg:text-xl max-lg:text-sm">FAQs</p>
                <h2 class="text-4xl font-bold mt-2 max-lg:text-2xl">Know The Process</h2>
            </div>

            <!-- Right Side Accordion -->
            <div class="md:w-2/3 space-y-6 max-lg:space-y-4">
                <!-- FAQ Item -->
                <div class="border-b border-gray-700 pb-4">
                    <button class="w-full text-left flex justify-between items-center group" onclick="toggleFaq(this)">
                        <span class="text-lg max-lg:text-sm font-medium group-hover:text-blue-600 transition">Why choose RudraTech for WordPress development?</span>
                        <span class="text-xl max-lg:text-sm transition group-hover:text-blue-600">+</span>
                    </button>
                    <div class="faq-answer hidden mt-2 text-gray-400 text-sm leading-relaxed">
                        RudraTech specializes in building fast, secure, SEO-friendly WordPress websites with customized features tailored to your business goals.
                    </div>
                </div>

                <div class="border-b border-gray-700 pb-4">
                    <button class="w-full text-left flex justify-between items-center group" onclick="toggleFaq(this)">
                        <span class="text-lg max-lg:text-sm font-medium group-hover:text-blue-600 transition">What is the development process at RudraTech?</span>
                        <span class="text-xl max-lg:text-sm transition group-hover:text-blue-600">+</span>
                    </button>
                    <div class="faq-answer hidden mt-2 text-gray-400 text-sm leading-relaxed">
                        Our process includes requirement gathering, design approval, development, testing, launch, and post-launch support.
                    </div>
                </div>

                <div class="border-b border-gray-700 pb-4">
                    <button class="w-full text-left flex justify-between items-center group" onclick="toggleFaq(this)">
                        <span class="text-lg max-lg:text-sm font-medium group-hover:text-blue-600 transition">Do you offer custom themes or use pre-built ones?</span>
                        <span class="text-xl max-lg:text-sm transition group-hover:text-blue-600">+</span>
                    </button>
                    <div class="faq-answer hidden mt-2 text-gray-400 text-sm leading-relaxed">
                        We offer both! Our team can build fully custom themes from scratch or work with premium themes depending on your needs.
                    </div>
                </div>

                <div class="border-b border-gray-700 pb-4">
                    <button class="w-full text-left flex justify-between items-center group" onclick="toggleFaq(this)">
                        <span class="text-lg max-lg:text-sm font-medium group-hover:text-blue-600 transition">Can I manage my content after the site is built?</span>
                        <span class="text-xl max-lg:text-sm transition group-hover:text-blue-600">+</span>
                    </button>
                    <div class="faq-answer hidden mt-2 text-gray-400 text-sm leading-relaxed">
                        Absolutely! WordPress is user-friendly, and we provide training or documentation so you can easily manage your content.
                    </div>
                </div>

                <div class="border-b border-gray-700 pb-4">
                    <button class="w-full text-left flex justify-between items-center group" onclick="toggleFaq(this)">
                        <span class="text-lg max-lg:text-sm font-medium group-hover:text-blue-600 transition">Do you provide ongoing maintenance and support?</span>
                        <span class="text-xl max-lg:text-sm transition group-hover:text-blue-600">+</span>
                    </button>
                    <div class="faq-answer hidden mt-2 text-gray-400 text-sm leading-relaxed">
                        Yes, we offer affordable maintenance packages including updates, backups, security monitoring, and performance optimization.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .line {
            font-weight: 400;
            transition: font-weight 0.6s ease, transform 0.6s ease;
        }

        .line.visible {
            font-weight: 700;
        }
    </style>

    <section class="relative w-full h-[60vh] max-lg:h-[30vh] bg-cover bg-center text-white flex items-center justify-center px-4 overflow-hidden"
        style="background-image: url('/asset/glass.jpg');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-0"></div>

        <!-- Content -->
        <div class="relative z-10 text-center space-y-4 max-w-3xl">
            <h2 class="text-xl max-lg:text-sm md:text-3xl leading-snug">
                <span class="block line">Ready to Elevate Your Business?</span>
                <span class="block line">Let’s Build Your Dream WordPress Website</span>
                <span class="block line">Fast. Beautiful. SEO-Ready.</span>
            </h2>
        </div>
    </section>

    <script>
        const lines = document.querySelectorAll('.line');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 300); // delay each line by 300ms
                }
            });
        }, {
            threshold: 0.5
        });

        lines.forEach(line => observer.observe(line));
    </script>



    <script>
        function toggleFaq(button) {
            const answer = button.nextElementSibling;
            const allAnswers = document.querySelectorAll('.faq-answer');
            const allButtons = document.querySelectorAll('.faq-answer + span, .faq-answer ~ span');

            allAnswers.forEach(ans => {
                if (ans !== answer) ans.classList.add('hidden');
            });

            // Toggle current
            answer.classList.toggle('hidden');
        }
    </script>

    <script>
        const svg = document.getElementById("svg-container");
        let isDragging = false;
        let lastX = 0;
        let rotation = 0;

        svg.addEventListener("mousedown", (e) => {
            isDragging = true;
            lastX = e.clientX;
        });

        document.addEventListener("mousemove", (e) => {
            if (!isDragging) return;
            const dx = e.clientX - lastX;
            rotation += dx * 0.5;
            svg.style.transform = `rotate(${rotation}deg)`;
            lastX = e.clientX;
        });

        document.addEventListener("mouseup", () => {
            isDragging = false;
        });
    </script>
    <script>
        $(document).ready(function() {
            const $owl = $(".owl-carousel");

            $owl.owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,

                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    }
                }
            });

            // Custom navigation
            $("#custom-prev").click(function() {
                $owl.trigger("prev.owl.carousel");
            });

            $("#custom-next").click(function() {
                $owl.trigger("next.owl.carousel");
            });
        });
    </script>


    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>