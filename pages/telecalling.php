<?php
$page_title = "telecalling";

?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>



<body>

    <?php include "include/navbar.php" ?>



    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #d4dcffff 0%, #f0e7f8ff 100%);
        }



        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s ease-in-out infinite;
        }

        @keyframes morph {

            0%,
            100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .diagonal-split {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .wave-bottom {
            clip-path: ellipse(100% 100% at 50% 100%);
        }
    </style>


    <!-- Hero Section - Asymmetric Layout -->
    <section class="relative overflow-hidden gradient-bg min-h-screen flex items-center">

        <div class="container mx-auto px-6 py-16 max-lg:py-12  relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class=" space-y-6">
                    <div class="inline-block px-4 py-2 bg-white  rounded-full text-sm backdrop-blur-sm">
                        <i class="fas fa-phone-volume mr-2"></i>Professional Telecalling Services
                    </div>
                    <h1 class="text-5xl font-bold leading-tight">
                        Transform Calls Into <span class="text-blue-600">Conversions</span>
                    </h1>
                    <p class=" ">
                        Elevate your customer engagement with RudraTech's expert telecalling solutions. We don't just make calls—we build relationships.
                    </p>
                    <div class="flex gap-4">
                        <button class="px-8 py-4 bg-white text-blue-700 font-semibold rounded-full hover:bg-blue-600 transition duration-300">
                            Get Started <i class="fas fa-arrow-right ml-2"></i>
                        </button>

                    </div>
                </div>

                <div class="relative">
                    <div class="blob bg-white bg-opacity-10 backdrop-blur-lg p-8 floating">
                        <img src="/asset/professional.png" alt="Telecalling Professional" class="rounded-3xl shadow-2xl w-full h-[60vh] object-cover">
                    </div>
                    <div class="absolute -bottom-10 -left-10 bg-blue-600 rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold text-white">100+</div>
                        <div class="text-sm text-white">Happy Clients</div>
                    </div>
                    <div class="absolute -top-10 -right-10 bg-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold text-gray-800">98%</div>
                        <div class="text-sm text-gray-600">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us - Diagonal Split -->
    <section class="relative py-16 max-lg:py-12  bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="relative">
                        <img src="/asset/telesale.jpg" alt="Team" class="rounded-3xl shadow-2xl w-full object-cover h-[70vh] max-md:h-[50vh] max-lg:h-[60vh]">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-600 to-transparent opacity-30 rounded-3xl"></div>
                    </div>

                </div>

                <div class="space-y-6 order-1 lg:order-2">
                    <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">
                        Why RudraTech?
                    </div>
                    <h2 class="text-5xl font-bold text-gray-800">
                        We Make Every <span class="text-blue-700">Call Count</span>
                    </h2>
                    <p class=" text-gray-600">
                        Our telecalling experts are trained to deliver exceptional customer experiences, driving results that matter to your business.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-2xl card-hover">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 ">Expert Team</h3>
                                <p class="text-gray-600">Trained professionals with industry expertise</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-2xl card-hover">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 ">Proven Results</h3>
                                <p class="text-gray-600">Data-driven approach with measurable outcomes</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-2xl card-hover">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 ">24/7 Support</h3>
                                <p class="text-gray-600">Round-the-clock availability for your business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services - Circular Grid -->
    <section class="py-16 max-lg:py-12  bg-gradient-to-br from-blue-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-semibold mb-4">
                    Our Services
                </div>
                <h2 class="text-5xl font-bold text-gray-800 mb-4">
                    Comprehensive <span class="text-blue-600 ">Telecalling Solutions</span>
                </h2>
                <p class=" text-gray-600 max-w-2xl mx-auto">
                    Tailored services to meet your unique business needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Service 1 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-bullhorn text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Lead Generation</h3>
                        <p class="text-gray-600 mb-6">Identify and qualify potential customers to fuel sales pipeline with high-quality leads.</p>
                        <img src="/asset/lead.jpg" alt="Lead Generation" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-headset text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Customer Support</h3>
                        <p class="text-gray-600 mb-6">Provide exceptional customer service that builds loyalty and satisfaction.</p>
                        <img src="/asset/customersupp.jpg" alt="Customer Support" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-chart-pie text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Market Research</h3>
                        <p class="text-gray-600 mb-6">Gather valuable insights through targeted surveys and data collection.</p>
                        <img src="/asset/result.jpg" alt="Market Research" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-shopping-cart text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Telesales</h3>
                        <p class="text-gray-600 mb-6">Drive revenue with persuasive sales calls that convert prospects into customers.</p>
                        <img src="/asset/telesale.jpg" alt="Telesales" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-redo text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Appointment Setting</h3>
                        <p class="text-gray-600 mb-6">Schedule meetings with qualified prospects to boost productivity.</p>
                        <img src="/asset/appointment.webp" alt="Appointment Setting" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="relative group">
                    <div class="relative bg-white rounded-3xl p-8 shadow-xl card-hover">
                        <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-sync text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Follow-up Calls</h3>
                        <p class="text-gray-600 mb-6">Nurture relationships with timely follow-ups that keep your brand top-of-mind.</p>
                        <img src="/asset/followup.jpg" alt="Follow-up Calls" class="rounded-2xl w-full h-[30vh] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PROCESS SECTION -->
    <section class="relative py-16 max-lg:py-12  bg-white overflow-hidden">

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
                    Our <span class="text-blue-600">Process</span>
                </h2>
                <p class="text-gray-600 text-lg">Simple. Efficient. Results-driven.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Step 1 -->
                <div class="text-center space-y-5">
                    <div class="relative inline-block">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto animate-bounce-slow">
                            <span class="text-4xl font-bold text-white">1</span>
                        </div>

                    </div>
                    <img src="/asset/plan.jpg"
                        alt="Planning" class="rounded-2xl shadow-lg w-full h-48 object-cover mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800">Planning</h3>
                    <p class="text-gray-600 text-sm max-w-xs mx-auto">We analyze your goals and craft a tailored telecalling strategy.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center space-y-5">
                    <div class="relative inline-block">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto animate-bounce-slow delay-100">
                            <span class="text-4xl font-bold text-white">2</span>
                        </div>

                    </div>
                    <img src="/asset/trainin.jpg"
                        alt="Training" class="rounded-2xl shadow-lg w-full h-48 object-cover mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800">Training</h3>
                    <p class="text-gray-600 text-sm max-w-xs mx-auto">Our agents are trained in your products and customer tone.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center space-y-5">
                    <div class="relative inline-block">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto animate-bounce-slow delay-200">
                            <span class="text-4xl font-bold text-white">3</span>
                        </div>

                    </div>
                    <img src="/asset/execution.jpg"
                        alt="Execution" class="rounded-2xl shadow-lg w-full h-48 object-cover mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800">Execution</h3>
                    <p class="text-gray-600 text-sm max-w-xs mx-auto">We run calling campaigns to engage, qualify, and convert leads.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center space-y-5">
                    <div class="relative inline-block">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto animate-bounce-slow delay-300">
                            <span class="text-4xl font-bold text-white">4</span>
                        </div>

                    </div>
                    <img src="/asset/result.jpg"
                        alt="Results" class="rounded-2xl shadow-lg w-full h-48 object-cover mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800">Results</h3>
                    <p class="text-gray-600 text-sm max-w-xs mx-auto">We provide transparent reporting and actionable insights.</p>
                </div>
            </div>
        </div>




    </section>




    <!-- CTA Section - Overlapping Design -->
    <section class="relative py-16 max-lg:py-12  bg-white border-t">
        <div class="container mx-auto px-6">
            <div class="relative bg-gradient-to-br from-blue-600 to-blue-600 rounded-[3rem] overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 opacity-20 rounded-full -mr-48 -mt-48"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 bg-pink-300 opacity-20 rounded-full -ml-40 -mb-40"></div>

                <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10 p-16">
                    <div class="text-white space-y-6">
                        <h2 class="text-5xl font-bold">Ready to Transform Your Business?</h2>
                        <p class=" text-blue-100">Join hundreds of satisfied clients who trust RudraTech for their telecalling needs.</p>
                        <div class="flex gap-4">
                            <button class="px-8 py-4 bg-white text-blue-700 font-bold rounded-full hover:bg-white transition duration-300 shadow-lg">
                                <i class="fas fa-rocket mr-2"></i>Start Now
                            </button>
                            <button class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-700 transition duration-300">
                                <i class="fas fa-phone mr-2"></i>Call Us
                            </button>
                        </div>
                        <div class="flex items-center gap-8 pt-6">
                            <div>
                                <div class="text-4xl font-bold">10K+</div>
                                <div class="text-blue-200">Calls Daily</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold">100+</div>
                                <div class="text-blue-200">Happy Clients</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold">5+</div>
                                <div class="text-blue-200">Years Experience</div>
                            </div>
                        </div>
                    </div>

                    <section class="w-full  flex justify-center items-center">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-3xl shadow-2xl max-w-3xl w-full text-center">


                            <!-- SVG Chart -->
                            <div class="relative w-full h-60">
                                <svg viewBox="0 0 600 300" class="w-full h-full">
                                    <!-- Grid + Axes -->
                                    <g stroke="#d1d5db" stroke-width="1" opacity="0.7">
                                        <!-- Horizontal Grid Lines -->
                                        <line x1="50" y1="250" x2="580" y2="250" />
                                        <line x1="50" y1="200" x2="580" y2="200" />
                                        <line x1="50" y1="150" x2="580" y2="150" />
                                        <line x1="50" y1="100" x2="580" y2="100" />
                                        <line x1="50" y1="50" x2="580" y2="50" />

                                        <!-- Y Axis -->
                                        <line x1="50" y1="30" x2="50" y2="250" stroke="#6b7280" stroke-width="2" />
                                        <!-- X Axis -->
                                        <line x1="50" y1="250" x2="580" y2="250" stroke="#6b7280" stroke-width="2" />
                                    </g>

                                    <!-- Y-Axis Labels -->
                                    <g font-size="12" fill="#374151" text-anchor="end">
                                        <text x="45" y="255">0</text>
                                        <text x="45" y="205">25</text>
                                        <text x="45" y="155">50</text>
                                        <text x="45" y="105">75</text>
                                        <text x="45" y="55">100</text>
                                    </g>

                                    <!-- X-Axis Labels -->
                                    <g font-size="12" fill="#374151" text-anchor="middle">
                                        <text x="120" y="270">Jan</text>
                                        <text x="220" y="270">Mar</text>
                                        <text x="320" y="270">May</text>
                                        <text x="420" y="270">Jul</text>
                                        <text x="520" y="270">Sep</text>
                                    </g>

                                    <!-- Animated Growth Line -->
                                    <path
                                        d="M 50 240 
             C 150 200, 250 160, 350 130 
             S 550 80, 580 60"
                                        fill="none"
                                        stroke="#2563eb"
                                        stroke-width="4"
                                        stroke-linecap="round"
                                        class="animate-line" />

                                    <!-- Area Fill Under the Line -->
                                    <path
                                        d="M 50 240 
             C 150 200, 250 160, 350 130 
             S 550 80, 580 60 
             L 580 250 L 50 250 Z"
                                        fill="url(#grad)"
                                        opacity="0.5"
                                        class="animate-fill" />

                                    <!-- Gradient Definition -->
                                    <defs>
                                        <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.5" />
                                            <stop offset="100%" stop-color="#3b82f6" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>

                            <p class="text-sm text-gray-600 mt-6">
                                Quarterly call success and customer engagement performance.
                            </p>
                        </div>

                        <style>
                            /* Line Draw Animation */
                            .animate-line {
                                stroke-dasharray: 1000;
                                stroke-dashoffset: 1000;
                                animation: drawLine 2.5s ease-out forwards;
                            }

                            @keyframes drawLine {
                                to {
                                    stroke-dashoffset: 0;
                                }
                            }

                            /* Fade In Area Fill */
                            .animate-fill {
                                opacity: 0;
                                animation: fadeInFill 2s ease-out 1.5s forwards;
                            }

                            @keyframes fadeInFill {
                                to {
                                    opacity: 1;
                                }
                            }
                        </style>
                    </section>


                </div>
            </div>
        </div>
    </section>




    <?php include "include/footer.php"; ?>


</body>

</html>