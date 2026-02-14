<?php
$page_title = "shopify"
?>
<!Doctype html>
<html lang="en">

<?php include "include/header.php" ?>

<body>
    <?php include "include/navbar.php" ?>


    <div class="w-full flex  h-[90vh]  max-lg:h-[40vh] max-md:h-[60vh]   relative">
        <!-- Left Side (Text Content) -->
        <div class="w-full relative bg-blue-50 flex flex-col justify-center px-8 z-10 ">
            <div class="w-[90%] mx-auto max-md:text-center">
                <h2 class="text-3xl md:text-4xl font-normal text-blue-500 leading-snug">
                    Shopify Website
                    <span class="block mt-1">Development</span>
                </h2>
                <p class="mt-4 text-base text-gray-700 w-1/2 max-md:w-full">
                    Launch stunning, fast, and fully customized Shopify stores built for conversions and scalability.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a href="/portfolio" class="px-5 py-2.5 max-md:px-3 max-md:py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600 transition transform hover:-translate-y-1">
                        View Projects
                    </a>
                    <a href="/get-in-touch" class="px-5 py-2.5 max-md:px-3 max-md:py-2 border border-blue-500 text-blue-500 font-medium rounded-md hover:bg-blue-500 hover:text-white transition transform hover:-translate-y-1">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side (Image) -->
        <div class="w-0 md:w-[50%] hidden md:block absolute top-32 right-8 z-50 max-lg:top-24">
            <img src="/asset/shopify1.png" alt="Shopify Development Illustration" class="w-full h-[50vh] max-lg:h-[20vh] object-contain">
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-20 max-lg:py-12  bg-white">
        <div class="w-[80%] max-lg:w-[85%] mx-auto">
            <div class="text-center mb-16 max-lg:mb-6">
                <h2 class="text-3xl md:text-4xl font-normal mb-4">Our Shopify Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    From custom design to app integration, we offer end-to-end Shopify development solutions to help your business grow online.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white border border-gray-200 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                    <img src="/asset/store.jpg" class="w-20 h-20 mb-6" alt="">
                    <h3 class="text-xl font-medium mb-2">Custom Store Design</h3>
                    <p class="text-gray-500 text-sm">
                        Beautiful, responsive Shopify themes tailored to your brand and optimized for conversion.
                    </p>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white border border-gray-200 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                    <img src="/asset/app-integration.jpg" class="w-20 h-20 mb-6" alt="">
                    <h3 class="text-xl font-medium mb-2">App Integration</h3>
                    <p class="text-gray-500 text-sm">
                        Seamlessly integrate powerful apps and tools to expand your store’s capabilities and automate workflows.
                    </p>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-white border border-gray-200 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                    <img src="/asset/Migration-Support.png" class="w-20 h-20 mb-6" alt="">
                    <h3 class="text-xl font-medium mb-2">Migration & Support</h3>
                    <p class="text-gray-500 text-sm">
                        Hassle-free migration from any platform and ongoing support to keep your Shopify store running smoothly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 max-lg:py-12  border-t border-gray-200">
        <div class="w-[80%] max-lg:w-[85%] mx-auto flex   text-sm flex-col-reverse lg:flex-row items-center gap-12">

            <!-- Left Content -->
            <div class="lg:w-1/2">
                <h4 class="text-blue-500 font-semibold mb-2">Shopify Development</h4>
                <h2 class="text-2xl sm:text-3xl font-normal text-gray-900 mb-4">
                    Why Choose Shopify for Your Online Store?
                </h2>
                <p class="text-gray-600 mb-6">
                    Shopify offers a powerful and easy-to-use platform for businesses of all sizes to build, manage, and grow their eCommerce stores with style and scalability.
                </p>

                <p class="text-gray-900 font-semibold mb-4">Key Advantages:</p>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start gap-3">
                        <img src="/asset/check1.png" alt="store icon" class="w-8 h-8 mt-1">
                        <span>Quick & Easy Store Setup with Professional Themes</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <img src="/asset/secure.png" alt="security icon" class="w-8 h-8 mt-1">
                        <span>Secure Checkout & Payment Integrations</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <img src="/asset/graph.png" alt="marketing icon" class="w-8 h-8 mt-1">
                        <span>Built-in SEO & Marketing Tools for Growth</span>
                    </li>
                </ul>

                <!-- CTA -->
                <a href="/get-in-touch" class="mt-8 inline-block border border-blue-600 hover:bg-blue-500 hover:text-white transition text-blue-500 font-semibold px-6 py-3 rounded shadow">
                    Let’s Build Your Shopify Store
                </a>
            </div>

            <!-- Right Image -->
            <div class="lg:w-2/3 flex justify-center">
                <img src="/asset/shopifyimg.png" alt="Shopify Illustration" class="w-full h-[80vh] max-lg:h-[30vh] object-contain">
            </div>
        </div>
    </section>



    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>