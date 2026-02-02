<?php
$page_title = "biseness-profile";

?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>


    <!-- Hero Section -->
    <section class="relative  h-[90vh]  max-lg:h-[40vh] max-md:h-[60vh]   flex items-center justify-center text-center px-4 py-20">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/asset/businesspro.jpg');"></div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/70"></div>

        <!-- Content -->
        <div class="relative z-10 text-white max-w-2xl">
            <h1 class="text-4xl md:text-4xl lg-text-5xl xl:text-5xl font-extrabold mb-6">
                Business Profile <span class="text-blue-500">Website</span>
            </h1>
            <p class="text-md text-gray-200 mb-8">
                Elevate your brand with a sleek, modern website that builds trust and drives engagement.
            </p>
            <a href="/getin-touch" class="inline-block px-6 py-3 border border-white rounded-md text-white hover:bg-blue-600 hover:border-blue-600 transition duration-300">
                Get Started
            </a>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="relative py-24 max-lg:py-16 bg-white w-full">
        <div class="container mx-auto w-[80%] max-lg:w-[85%]">
            <div class="flex items-center mb-12 max-lg:mb-4">
                <div class="w-16 h-0.5 bg-blue-600 mr-4"></div>
                <h2 class="text-3xl font-medium">Business Profile Website Features</h2>
            </div>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                At <span class="text-blue-600 font-semibold">RudraTech</span>, we design and develop elegant business profile websites that reflect your brand, vision, and professionalism. Whether you’re a startup or an established firm, our websites are built to make an impact.
            </p>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                Our team focuses on responsive design, fast loading speed, and brand-consistent layouts to deliver a seamless user experience across all devices. Every page is built to communicate your value effectively to clients and partners.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-lg:gap-2">
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Responsive Design</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Optimized for mobile, tablet, and desktop viewing.</p>
                </div>
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Fast & Lightweight</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Quick-loading pages for better SEO and user experience.</p>
                </div>
                <div class="bg-black p-6 rounded-tl-[40px] rounded-br-[40px] hover:bg-gray-800 transition duration-300 group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Brand-Oriented UI</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 max-md:text-xs">Custom layouts that align with your business identity.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full py-16 bg-gray-50 text-center px-6">
        <p class="text-sm text-blue-600 tracking-widest uppercase mb-2">Our Services</p>
        <h2 class="text-4xl font-bold mb-4">
            Solution for your <span class="text-blue-500">Business</span>
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            At RudraTech IT Services, we design high-performance business websites that reflect professionalism, engage customers, and drive results. We help businesses create a digital identity they can be proud of.
        </p>

        <div class="w-[80%] max-lg:w-[85%] max-md:w-full mx-auto space-y-8 max-lg:space-y-4">
            <!-- Row 1 -->
            <div class="grid grid-cols-2 gap-8 max-lg:gap-3 max-lg:grid-cols-1">
                <!-- Digital Marketing -->
                <div class="flex max-md:flex-col max-md:rounded max-md:gap-2 max-md:items-start items-center bg-gradient-to-r from-gray-400 to-gray-300 text-white rounded-full px-6 py-6 shadow-lg">
                    <div class="bg-white rounded-full p-4 mr-6 ">
                        <img src="https://img.icons8.com/ios-filled/50/rocket--v1.png" class="w-8 h-8 text-cyan-500" alt="Digital Marketing" />
                    </div>
                    <div class="text-left">
                        <h3 class="text-lg text-black  font-semibold mb-2">Digital Marketing</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Targeted campaigns to boost visibility</li>
                            <li>• SEO strategies for business growth</li>
                            <li>• Social media and ad management</li>
                        </ul>
                    </div>
                </div>

                <!-- Business Management -->
                <div class="flex max-md:flex-col max-md:rounded max-md:gap-2 max-md:items-start items-center  bg-gradient-to-r from-gray-400 to-gray-300 text-white rounded-full px-6 py-6 shadow-lg">
                    <div class="bg-white rounded-full p-4 mr-6">
                        <img src="https://img.icons8.com/ios-filled/50/clipboard.png" class="w-8 h-8 text-cyan-500" alt="Business Management" />
                    </div>
                    <div class="text-left">
                        <h3 class="text-lg font-semibold mb-2 text-black ">Business Management</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Streamlined workflow integration</li>
                            <li>• Tools for client and task tracking</li>
                            <li>• Scalable solutions for growth</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="grid grid-cols-2 gap-8 max-lg:gap-3 max-lg:grid-cols-1">
                <!-- Plan Implementation -->
                <div class="flex max-md:flex-col max-md:rounded max-md:gap-2 max-md:items-start items-center  bg-gradient-to-r from-gray-400 to-gray-300 text-white rounded-full px-6 py-6 shadow-lg">
                    <div class="bg-white rounded-full p-4 mr-6">
                        <img src="https://img.icons8.com/ios-filled/50/combo-chart--v1.png" class="w-8 h-8 text-cyan-500" alt="Plan Implementation" />
                    </div>
                    <div class="text-left">
                        <h3 class="text-lg text-black  font-semibold mb-2">Plan Implementation</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Step-by-step website rollout</li>
                            <li>• Agile development processes</li>
                            <li>• Results-driven execution</li>
                        </ul>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="flex max-md:flex-col max-md:rounded max-md:gap-2 max-md:items-start items-center  bg-gradient-to-r from-gray-400 to-gray-300 text-white rounded-full px-6 py-6 shadow-lg">
                    <div class="bg-white rounded-full p-4 mr-6">
                        <img src="https://img.icons8.com/ios-filled/50/source-code.png" class="w-8 h-8 text-cyan-500" alt="Web Development" />
                    </div>
                    <div class="text-left">
                        <h3 class="text-lg text-black font-semibold mb-2">Web Development</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Modern, responsive design</li>
                            <li>• Secure and scalable codebase</li>
                            <li>• Optimized for speed and SEO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>
</body>

</html>