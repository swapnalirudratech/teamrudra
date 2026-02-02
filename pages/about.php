<?php
$page_title = "about"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php" ?>



<body>

    <?php include "include/navbar.php" ?>
    <main>

        <!-- About RudraTech Banner -->
        <section class="relative w-full h-[80vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center justify-center overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img
                    src="/asset/rudratech.jpg"
                    alt="About RudraTech IT Services"
                    class="w-full h-full object-cover object-bottom" />
                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center text-white px-6">
                <p class="uppercase tracking-widest text-sm text-gray-300 mb-4">
                    Since 2020
                </p>
                <h1 class="text-5xl md:text-6xl font-semibold mb-6">
                    RudraTech IT Services
                </h1>
                <p class=" text-lg  max-lg:text-base md: text-lg  max-lg:text-base  max-w-2xl mx-auto leading-relaxed text-gray-200">
                    Innovating digital transformation with next-gen IT solutions, cloud expertise,
                    and software excellence for a smarter tomorrow.
                </p>
            </div>
        </section>



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
                animation: float 3s ease-in-out infinite;
            }

            @keyframes pulse-slow {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.5;
                }
            }

            .animate-pulse-slow {
                animation: pulse-slow 3s ease-in-out infinite;
            }

            .gradient-border {
                position: relative;
                background: linear-gradient(to right, #1e40af, #3b82f6);
                padding: 2px;
            }

            .gradient-border-content {
                background: white;
            }
        </style>




        <!-- Welcome Section -->
        <section class="py-20 max-lg:py-12 bg-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-blue-50 to-transparent"></div>
            <div class="w-[80%] max-lg:w-[85%] mx-auto relative z-10">
                <div class="grid grid-cols-2 max-lg:grid-cols-1 gap-16 items-center">
                    <div>
                        <div class="mb-6">
                            <i class="fas fa-code text-5xl text-blue-600 max-lg:text-3xl"></i>
                        </div>
                        <p class="text-sm uppercase tracking-widest text-gray-500 mb-4 font-medium">
                            Welcome to RudraTech IT Services
                        </p>
                        <h2 class="max-lg:text-3xl text-5xl font-bold text-gray-900 mb-8 leading-tight">
                            Empowering Digital Growth with Innovative Technology
                        </h2>
                        <p class=" text-lg  max-lg:text-base text-gray-600 leading-relaxed mb-8">
                            Founded in 2020, <span class="font-semibold text-gray-900">RudraTech IT Services</span> is a young and dynamic
                            tech start-up powered by bright minds striving to make a meaningful difference for our clients.
                        </p>
                        <p class=" text-lg  max-lg:text-base text-gray-600 leading-relaxed">
                            We specialize in delivering solutions driven by cutting-edge technologies — helping businesses accelerate
                            their digital transformation journeys with confidence.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="absolute -top-6 -right-6 w-full h-full border-4 border-blue-600 rounded-sm"></div>
                        <div class="relative rounded-sm overflow-hidden shadow-2xl">
                            <img src="/asset/team4 (1).jpg" class="w-full h-[60vh] max-lg:h-[30vh] object-cover" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 max-lg:py-12 bg-gradient-to-b from-slate-50 to-white">
            <div class="w-[80%] max-lg:w-[85%] mx-auto">
                <div class="text-center mb-20 max-lg:mb-8">
                    <p class="text-sm uppercase tracking-widest text-blue-600 mb-4 font-medium">Our Expertise</p>
                    <h2 class="max-lg:text-3xl text-6xl font-bold text-gray-900 mb-6 max-lg:mb-3">Core Services</h2>
                    <p class=" text-lg  max-lg:text-base  text-gray-600 max-w-3xl mx-auto">
                        Smart, scalable, and secure IT solutions crafted to transform your business operations
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-lg:gap-2">
                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-cloud text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Cloud Solutions</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Seamless cloud infrastructure and migration solutions for next-gen enterprises.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-shield-halved text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Cybersecurity</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Advanced protection strategies ensuring your data and assets stay secure.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-bolt text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Automation</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Empowering operations through intelligent automation and AI-driven solutions.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-code text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Custom Development</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Tailored software built for your unique business needs and scalability.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-users text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">IT Consulting</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Strategic consulting to align your technology with business growth.</p>
                    </div>

                    <div class="group relative bg-white p-10 max-lg:p-6 rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-600">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-blue-600 group-hover:w-full transition-all duration-300"></div>
                        <i class="fas fa-award text-6xl max-lg:text-4xl max-lg:mb-3 text-blue-600 mb-6 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 max-lg:text-lg">Quality Assurance</h3>
                        <p class="text-gray-600 leading-relaxed max-lg:text-xs">Ensuring excellence with rigorous development and testing standards.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="py-20 max-lg:py-12 bg-slate-900 text-white relative overflow-hidden">
            <div class="w-[80%] max-lg:w-[85%] mx-auto relative z-10">
                <div class="grid max-lg:grid-cols-1 grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 w-full h-full border-4 border-blue-600 rounded-sm"></div>
                        <div class="relative bg-white p-12 max-lg:p-6 rounded-sm shadow-2xl">
                            <h3 class="text-3xl font-bold text-gray-900 mb-8">Our Core Values</h3>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Innovation-Driven:</strong> We stay ahead of emerging technologies to build future-ready solutions.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Client-Focused:</strong> Your goals guide everything we do — we deliver solutions that align with your vision.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <i class="fas fa-circle-check text-2xl text-blue-600 flex-shrink-0 mt-1"></i>
                                    <p class="text-gray-700 text-lg  max-lg:text-base "><strong>Quality Assurance:</strong> We uphold the highest standards for performance and reliability.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm uppercase tracking-widest text-blue-400 mb-4 font-medium">What We Stand For</p>
                        <h2 class="max-lg:text-3xl text-5xl font-bold mb-8 leading-tight">
                            Future-Focused, Transparent, and Reliable
                        </h2>
                        <p class=" text-lg  max-lg:text-base  text-gray-300 leading-relaxed mb-6">
                            We believe in close collaboration — understanding your challenges and turning ideas into impactful digital realities.
                        </p>
                        <p class=" text-lg  max-lg:text-base text-gray-400 leading-relaxed">
                            Our team’s commitment to innovation and integrity ensures long-term partnerships, transparent communication, and dependable support every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>