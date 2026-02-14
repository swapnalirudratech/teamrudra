<?php
$page_title = "healthcare"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>



    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out;
        }

        .img-placeholder {

            position: relative;
            overflow: hidden;
        }

        .img-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            100% {
                left: 100%;
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
        }
    </style>




    <!-- Hero Section -->
    <section id="hero-section"
        class="relative bg-cover h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] bg-center bg-no-repeat text-white"
        style="background-image: url('/asset/f4.webp');">

        <!-- <div class="absolute inset-0 bg-black/60"></div> Dark overlay -->

        <div class="relative w-[85%] mx-auto max-lg:w-[85%]  py-20  max-md:py-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h1 class="text-5xl max-md:text-2xl  max-lg:text-4xl font-bold mb-6 leading-tight">
                        Fintech Solutions Powering Digital Finance
                    </h1>
                    <p class="text-xl max-md:text-lg  mb-8 text-white">
                        Empowering financial institutions with secure, scalable, and innovative technology solutions for the modern digital economy. </p>
                    <div class="flex gap-4">
                        <a href="/get-in-touch" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
                            Get Started
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- About Fintech Services -->
    <section id="about-fintech" class="py-20 max-lg:py-12  bg-gray-50">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="grid lg:grid-cols-2 gap-16 items-center max-lg:gap-8">
                <div class="max-lg:order-2">
                    <div class=" rounded-2xl shadow-xl h-[70vh] max-md:h-[40vh] max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f1.jpg" alt="" class="w-full h-full object-cover rounded-2xl">
                    </div>
                </div>
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Why Choose Us</span>
                    <h2 class="text-4xl max-md:text-2xl  font-bold mb-6 mt-2 text-gray-900">Transforming Financial Services Through Technology</h2>
                    <p class="text-gray-600 text-lg max-md:text-base  mb-8 leading-relaxed">In today's rapidly evolving financial landscape, institutions need robust, secure, and scalable technology solutions to stay competitive, meet regulatory requirements, and deliver exceptional customer experiences.</p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-lock text-blue-600 text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg  font-bold mb-2 text-gray-900">Bank-Grade Security</h3>
                                <p class="text-gray-600">Military-grade encryption and multi-layer security protocols protecting financial data and transactions.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-balance-scale text-blue-600 text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg  font-bold mb-2 text-gray-900">Regulatory Compliance</h3>
                                <p class="text-gray-600">Full compliance with PCI-DSS, SOC 2, GDPR, and other financial regulations worldwide.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-rocket text-blue-600 text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg  font-bold mb-2 text-gray-900">Rapid Deployment</h3>
                                <p class="text-gray-600">Quick implementation with minimal disruption to existing operations and workflows.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services -->
    <section id="core-services" class="py-20 max-lg:py-12  bg-white">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="text-center mb-16 max-lg:mb-8">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Our Services</span>
                <h2 class="text-4xl max-md:text-2xl  font-bold mb-4 mt-2 text-gray-900">Comprehensive Fintech Solutions</h2>
                <p class="text-gray-600 text-lg max-md:text-base  max-w-3xl mx-auto">End-to-end technology services designed for banks, payment processors, and financial institutions</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-lg:gap-4">
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f5.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Digital Banking Platform</h3>
                        <p class="text-gray-600 leading-relaxed">Modern mobile and web banking solutions with seamless user experience, real-time transactions, and advanced security features.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f6.png" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Payment Gateway</h3>
                        <p class="text-gray-600 leading-relaxed">Secure payment processing solutions supporting multiple payment methods, currencies, and instant settlement capabilities.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f7.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Core Banking System</h3>
                        <p class="text-gray-600 leading-relaxed">Complete core banking solutions managing accounts, loans, deposits, and all banking operations efficiently.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f8.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Fraud Detection</h3>
                        <p class="text-gray-600 leading-relaxed">AI-powered fraud detection and prevention systems with real-time monitoring and risk assessment capabilities.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f9.png" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Financial Analytics</h3>
                        <p class="text-gray-600 leading-relaxed">Advanced analytics and business intelligence for data-driven decision making and predictive insights.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f10.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Robo-Advisory</h3>
                        <p class="text-gray-600 leading-relaxed">Automated investment advisory platforms using AI algorithms for personalized portfolio management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section id="technology-stack" class="py-20 max-lg:py-12  bg-gray-50">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Technology</span>
                <h2 class="text-4xl max-md:text-2xl  font-bold mb-4 mt-2 text-gray-900">Cutting-Edge Fintech Technologies</h2>
                <p class="text-gray-600 text-lg max-md:text-base  max-w-3xl mx-auto">Leveraging industry-leading platforms and frameworks for financial innovation</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fas fa-coins text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">Blockchain</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-node-js text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">Node.js</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-react text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">React</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-aws text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">AWS</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fas fa-database text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">MongoDB</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-python text-5xl max-md:text-2xl  text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">Python</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section id="key-features" class="py-20 max-lg:py-12  bg-white">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="grid lg:grid-cols-2 gap-16 items-center max-md:gap-8">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Features</span>
                    <h2 class="text-4xl max-md:text-2xl  font-bold mb-8 mt-2 text-gray-900">Built For Financial Excellence</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg  font-semibold mb-2 text-gray-900">Real-Time Processing</h4>
                                <p class="text-gray-600">Instant transaction processing and real-time balance updates for seamless customer experience.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg  font-semibold mb-2 text-gray-900">Multi-Currency Support</h4>
                                <p class="text-gray-600">Support for 150+ currencies with real-time exchange rates and automated conversion.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg  font-semibold mb-2 text-gray-900">API-First Architecture</h4>
                                <p class="text-gray-600">RESTful APIs enabling seamless integration with third-party services and applications.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg "></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg  font-semibold mb-2 text-gray-900">Scalable Infrastructure</h4>
                                <p class="text-gray-600">Cloud-native architecture handling millions of transactions with 99.99% uptime guarantee.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=" rounded-2xl shadow-xl h-[70vh] max-md:h-[40vh] max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f3.webp" class="w-full h-full object-cover rounded-2xl" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section id="statistics-section" class="py-20 max-lg:py-12  bg-blue-600 text-white">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="grid md:grid-cols-4 gap-8 text-center max-md:gap-4">
                <div>
                    <div class="text-5xl max-lg:text-2xl  font-bold mb-2">$50B+</div>
                    <p class="text-blue-200 text-lg max-md:text-base ">Transactions Processed</p>
                </div>
                <div>
                    <div class="text-5xl max-lg:text-2xl  font-bold mb-2">99.99%</div>
                    <p class="text-blue-200 text-lg max-md:text-base ">System Uptime</p>
                </div>
                <div>
                    <div class="text-5xl max-lg:text-2xl  font-bold mb-2">200+</div>
                    <p class="text-blue-200 text-lg max-md:text-base ">Financial Institutions</p>
                </div>
                <div>
                    <div class="text-5xl max-lg:text-2xl  font-bold mb-2">50M+</div>
                    <p class="text-blue-200 text-lg max-md:text-base ">Active Users</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions -->
    <section id="solutions" class="py-20 max-lg:py-12  bg-gray-50">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="text-center mb-16 max-lg:mb-8">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Solutions</span>
                <h2 class="text-4xl max-md:text-2xl  font-bold mb-4 mt-2 text-gray-900">Fintech Solutions For Every Need</h2>
                <p class="text-gray-600 text-lg max-md:text-base  max-w-3xl mx-auto">Tailored solutions addressing specific financial service challenges</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-lg:gap-4">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f11.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Neo Banking Platform</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Complete digital banking solution with account management, fund transfers, bill payments, and personalized financial insights for modern customers.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Zero-balance digital accounts
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Instant KYC verification
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                AI-powered personal finance
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f12.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Digital Wallet Solution</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Secure mobile wallet platform enabling peer-to-peer transfers, merchant payments, bill payments, and cashless transactions with QR code support.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                P2P instant transfers
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                QR code payments
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Loyalty & rewards program
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f13.png" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Digital Lending Platform</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">End-to-end loan origination system with credit scoring, automated underwriting, disbursement, and collection management for personal and business loans.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                AI credit scoring engine
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Instant loan approval
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Automated disbursement
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh]  max-lg:h-[20vh]  flex items-center justify-center">
                        <img src="/asset/f14.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Merchant Payment Solutions</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive payment acceptance platform for merchants with POS systems, online payment gateway, inventory management, and analytics dashboard.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Multi-channel payments
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Real-time settlements
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Business analytics
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Features -->
    <section id="security-features" class="py-20 max-lg:py-12  bg-white">
        <div class="w-[85%] mx-auto max-md:w-[90%] ">
            <div class="grid lg:grid-cols-2 gap-16 items-center max-md:gap-8">
                <div>
                    <div class="img-placeholder h-[70vh] max-md:h-[40vh] max-lg:h-[20vh]  flex items-center justify-center rounded-2xl">
                        <img src="/asset/f15.jpg" class="w-full h-full object-cover rounded-2xl" alt="">
                    </div>
                </div>
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Security</span>
                    <h2 class="text-4xl max-md:text-2xl  font-bold mb-6 mt-2 text-gray-900">Bank-Grade Security Standards</h2>
                    <p class="text-gray-600 text-lg max-md:text-base  mb-8 leading-relaxed">We implement multiple layers of security to protect your financial data and ensure compliance with global regulatory standards.</p>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-key text-blue-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">256-bit Encryption</h4>
                                <p class="text-gray-600 text-sm">Military-grade encryption for all data transmission</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-fingerprint text-blue-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Biometric Authentication</h4>
                                <p class="text-gray-600 text-sm">Multi-factor authentication with fingerprint & face ID</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-search text-blue-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Fraud Monitoring</h4>
                                <p class="text-gray-600 text-sm">24/7 AI-powered fraud detection and prevention</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-certificate text-blue-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Compliance Certified</h4>
                                <p class="text-gray-600 text-sm">PCI-DSS, SOC 2, ISO 27001 certified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Add before </body> -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>