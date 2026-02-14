<?php
$page_title = "education";
include "include/header.php";
?>

<!Doctype html>
<html lang="en">




<style>
    /* Smooth scroll effect for full image reveal */
    .scroll-hover img {
        transition: transform 8s ease;
        transform: translateY(0);
    }

    .scroll-hover:hover img {
        /* Move image up by 100% of the overflow height */
        transform: translateY(-90%);
        /* Adjust percentage depending on image/container ratio */
    }

    @keyframes expand {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }
</style>

<body>

    <?php include "include/navbar.php"; ?>
    <section class="relative w-full h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] bg-center bg-cover flex flex-col justify-center text-center bg-no-repeat "
        style="background-image: url('/asset/bannerbg.jpg');">

        <!-- Optional Overlay -->
        <div class="absolute inset-0 bg-blue-300/20"></div>

        <div class="relative z-10 w-[85%] mx-auto ">
            <!-- Heading -->
            <h1 class="text-5xl max-md:text-2xl max-lg:text-4xl font-bold text-black leading-snug animate-fadeInUp">
                Create fast & powerful <br> websites for
                <span id="typing-text" class="underline decoration-blue-400"></span>
            </h1>

            <!-- Subtitle -->
            <p class="mt-4 text-gray-800 max-w-xl mx-auto animate-fadeInUp delay-200">
                Let your creativity shine and start building your website today and impress your visitors.
            </p>

            <!-- Icons Row -->
            <div class="flex justify-center gap-6 mt-8 animate-fadeInUp delay-400 max-md:gap-2">
                <div class="bg-white shadow-lg hover:scale-110 transition-transform duration-300 rounded-full p-4 border">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732212.png" alt="HTML5" class="w-10 h-10 max-md:w-6 max-md:h-6">
                </div>
                <div class="bg-white shadow-lg hover:scale-110 transition-transform duration-300 rounded-full p-4 border">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png" alt="Bootstrap" class="w-10 h-10 max-md:w-6 max-md:h-6">
                </div>
                <div class="bg-white shadow-lg hover:scale-110 transition-transform duration-300 rounded-full p-4 border">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="CSS3" class="w-10 h-10 max-md:w-6 max-md:h-6">
                </div>
                <div class="bg-white shadow-lg hover:scale-110 transition-transform duration-300 rounded-full p-4 border">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" alt="JavaScript" class="w-10 h-10 max-md:w-6 max-md:h-6">
                </div>
            </div>
        </div>
    </section>




    <section class="py-24 max-lg:py-12 bg-white relative overflow-hidden ">
        <div class="w-[85%] mx-auto  text-center relative z-10">

            <!-- Decorative Gradient Circle -->
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50 max-md:hidden"></div>
            <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50 max-md:hidden"></div>

            <!-- Main Heading with Animated Underline -->
            <h3 class="relative inline-block text-3xl md:text-4xl font-extrabold text-gray-900 mt-3 mb-4">
                Stunning Demos
                <span class="absolute left-0 bottom-[-6px] w-full h-[3px] bg-gradient-to-r from-blue-500 to-blue-300 animate-[expand_1s_ease-out]"></span>
            </h3>

            <!-- Features -->
            <div class="flex flex-wrap justify-center gap-6 mt-6 text-gray-700 text-sm md:text-base">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Developer Friendly</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Easy to Customize</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-blue-500 text-lg max-md:text-xs"></i>
                    <span>Free Lifetime Update</span>
                </div>
            </div>
        </div>



        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20 w-[85%] mx-auto max-lg:mt-12 ">

            <!-- Card 1 -->
            <div class="bg-white rounded shadow-lg overflow-hidden border border-gray-200 scroll-hover">
                <div class="overflow-hidden h-48">
                    <img src="/asset/image/web (1).png" alt="iEqualToKlasses" class="w-full object-cover">
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-900 max-lg:text-sm">iEqualToKlasses – Online Educational Platform</h4>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded shadow-lg overflow-hidden border border-gray-200 scroll-hover">
                <div class="overflow-hidden h-48">
                    <img src="/asset/image/web (2).png" alt="Bexley Maths Tutor" class="w-full object-cover">
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-900 max-lg:text-sm">Bexley Maths Tutor – Private Mathematics Tuition in Bexley</h4>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded shadow-lg overflow-hidden border border-gray-200 scroll-hover">
                <div class="overflow-hidden h-48">
                    <img src="/asset/image/web (3).png" alt="Vikas Sawants Academy" class="w-full object-cover">
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-900 max-lg:text-sm">Vikas Sawants Academy – Competitive Exam Coaching</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="py-20 max-lg:py-12 bg-cover bg-center bg-no-repeat bg-blue-950"
        style="background-image: url('/asset/image/Rectangle.png');">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-8 ">

                <!-- Left Text Section -->
                <div class="col-span-1 md:col-span-1 max-md:text-center">
                    <p class="text-blue-500 font-semibold uppercase tracking-wide">Why Choose Us</p>
                    <h2 class="max-lg:text-2xl text-3xl font-bold text-white leading-snug mt-2">
                        Save your time with a<br>lot of features
                    </h2>
                </div>

                <!-- Icon 1 -->
                <div class="flex flex-col items-center text-center border-l border-gray-300 pl-8 max-md:pl-0 max-md:border-none ">
                    <i class="fa-solid fa-code mb-4 text-blue-700 text-5xl"></i>
                    <p class="font-semibold text-white">Standard Code</p>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center text-center">
                    <i class="fa-solid fa-laptop mb-4 text-blue-700 text-5xl"></i>
                    <p class="font-semibold text-white">Responsive Design</p>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center text-center">
                    <i class="fa-solid fa-headset mb-4 text-blue-700 text-5xl"></i>
                    <p class="font-semibold text-white">Quick Support</p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-24 max-lg:py-12 bg-gray-50">
        <div class="w-[85%] mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-12 max-lg:gap-4">

            <!-- Left Image -->
            <div class="flex justify-center">
                <img src="/asset/image/layout.png" alt="Responsive Website Preview"
                    class="">
            </div>

            <!-- Right Content -->
            <div class=" max-md:text-center">
                <!-- Subheading -->
                <p class="text-blue-500 font-semibold uppercase tracking-wide mb-2">
                    Modern Web Experience
                </p>

                <!-- Heading -->
                <h2 class="text-4xl max-lg:text-2xl max-md:text-3xl font-extrabold text-gray-900 leading-snug">
                    Responsive Layout <br>
                    Retina Ready Design
                </h2>

                <!-- Description -->
                <p class="mt-6 text-gray-600 leading-relaxed max-lg:text-sm ">
                    All pages of this template are fully responsive, ensuring a smooth and consistent
                    experience on every device. Built with the latest <span class="font-semibold text-gray-900">Bootstrap 5.x framework</span>,
                    it delivers flexibility, pixel-perfect visuals, and fast performance.
                </p>
                <a href="/get-in-touch"
                    class="inline-block bg-blue-600 text-white font-semibold py-2.5 px-6 rounded-full shadow-md 
          hover:bg-blue-700 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out mt-4">
                    Get Started
                </a>
            </div>

        </div>
    </section>

    <section class="py-16 max-lg:py-12 bg-white">
        <div class="w-[80%] mx-auto text-center">

            <!-- Section Title -->
            <p class="text-blue-500 font-semibold uppercase tracking-wide">Awesome Features</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-2">
                Great collection of websites<br>and enjoy our exclusive features
            </h2>

            <!-- Features Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">

                <!-- Feature Item -->
                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/1.png" alt="HTML5" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">HTML5</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/2.png" alt="Bootstrap 5x" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Bootstrap 5x</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/3.png" alt="CSS3" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">CSS3</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/jquery.png" alt="jQuery" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">jQuery</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/5.png" alt="FontAwesome Pro" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">FontAwesome Pro</p>
                </div>



                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/7.png" alt="Owl Carousel" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Owl Carousel</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/8.png" alt="Google Font" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Google Font</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/9.png" alt="Google Map" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Google Map</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/10.png" alt="Valid HTML5 & CSS3" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Valid HTML5 & CSS3</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/11.png" alt="Clean Code" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Clean Code</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/12.png" alt="Responsive Layout" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Responsive Layout</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/13.png" alt="Speed Optimized" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Speed Optimized</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/14.png" alt="Transition Effect" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Transition Effect</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/15.png" alt="Easy to Customize" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Easy to Customize</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center border border-gray-200">
                    <img src="/asset/icon/16.png" alt="Developer Friendly" class="w-12 h-12 mb-3">
                    <p class="font-semibold text-gray-900">Developer Friendly</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Typing Effect Script -->
    <script>
        const words = ["Students", "Teachers", "Institutions", "E-Learning"];
        let wordIndex = 0,
            charIndex = 0,
            isDeleting = false;
        const typingText = document.getElementById("typing-text");

        function typeEffect() {
            let currentWord = words[wordIndex];
            if (isDeleting) {
                typingText.textContent = currentWord.substring(0, charIndex--);
                if (charIndex < 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                }
            } else {
                typingText.textContent = currentWord.substring(0, charIndex++);
                if (charIndex > currentWord.length) {
                    isDeleting = true;
                    setTimeout(typeEffect, 1000);
                    return;
                }
            }
            setTimeout(typeEffect, isDeleting ? 50 : 100);
        }
        typeEffect();
    </script>

    <!-- Custom Animation Styles -->
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }
    </style>








   <?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>