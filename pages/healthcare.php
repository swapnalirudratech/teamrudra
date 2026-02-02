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
        class="relative bg-cover bg-center bg-no-repeat text-blue-600 h-[90vh] max-lg:h-[40vh] max-md:h-[60vh]"
        style="background-image: url('/asset/healthcarebg.jpg');">

        <!-- <div class="absolute inset-0 bg-black/60"></div> Dark overlay -->

        <div class="relative w-[90%] mx-auto max-lg:w-[85%]  py-20 max-md:py-12 flex items-center ">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h1 class="text-5xl max-lg:text-4xl  max-md:text-2xl  font-bold mb-6 leading-tight">
                        Healthcare IT Solutions That Transform Patient Care
                    </h1>
                    <p class="text-xl  max-md:text-base mb-8 text-white max-md:mb-2">
                        Empowering healthcare providers with secure, scalable, and intelligent technology solutions for modern medical facilities.
                    </p>
                    <div class="flex gap-4">
                        <a href="/getin-touch" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
                            Get Started
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Healthcare Services -->
    <section id="about-services" class="py-24 max-lg:py-12   bg-gray-50">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="grid lg:grid-cols-2 gap-16 items-center max-md:gap-8">
                <div class="max-lg:order-2">
                    <div class=" rounded-2xl shadow-xl h-[80vh] max-lg:h-[20vh] max-md:h-[40vh] flex items-center justify-center">
                        <img src="/asset/healthcare1.jpg" class="w-full h-full object-cover  rounded-2xl" alt="">
                    </div>
                </div>
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Why Choose Us</span>
                    <h2 class="text-4xl  max-md:text-2xl font-bold mb-6 mt-2 text-gray-900">Advanced IT Infrastructure for Healthcare Excellence</h2>
                    <p class="text-gray-600 text-lg max-md:text-base mb-8 leading-relaxed">In today's digital healthcare landscape, robust IT infrastructure is essential for delivering quality patient care, ensuring data security, and maintaining operational efficiency across all medical facilities.</p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-shield-alt text-blue-600 text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-2 text-gray-900">HIPAA Compliant Security</h3>
                                <p class="text-gray-600">Complete compliance with healthcare regulations protecting sensitive patient information.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-blue-600 text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-2 text-gray-900">24/7 System Reliability</h3>
                                <p class="text-gray-600">Mission-critical systems ensuring continuous patient care and emergency response.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-network-wired text-blue-600 text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-2 text-gray-900">Seamless Integration</h3>
                                <p class="text-gray-600">Unified platform connecting EMR, billing, pharmacy, and laboratory systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services -->
    <section id="core-services" class="py-24 max-lg:py-12   bg-white">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="text-center mb-16 max-lg:mb-6 ">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Our Services</span>
                <h2 class="text-4xl  max-md:text-2xl font-bold mb-4 mt-2 text-gray-900">Comprehensive Healthcare IT Solutions</h2>
                <p class="text-gray-600 text-lg max-md:text-base max-w-3xl mx-auto">Tailored technology services designed specifically for healthcare providers, hospitals, and medical facilities</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-lg:gap-4">
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class=" h-[30vh] flex items-center justify-center">
                        <img src="/asset/ehr.png" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">EMR/EHR Systems</h3>
                        <p class="text-gray-600 leading-relaxed">Implementation and optimization of Electronic Medical Records systems for efficient patient data management and accessibility across departments.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="h-[30vh] flex items-center justify-center">
                        <img src="/asset/cloudit.png" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">Cloud Infrastructure</h3>
                        <p class="text-gray-600 leading-relaxed">Secure cloud solutions for scalable data storage, backup, and disaster recovery with HIPAA-compliant architecture and encryption.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="h-[30vh] flex items-center justify-center">
                        <img src="/asset/telemedicine.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">Telemedicine Platform</h3>
                        <p class="text-gray-600 leading-relaxed">Custom telehealth platforms enabling remote consultations, patient monitoring, and virtual care delivery with HD video quality.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="h-[30vh] flex items-center justify-center">
                        <img src="/asset/cybersecurity.jpeg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">Cybersecurity Solutions</h3>
                        <p class="text-gray-600 leading-relaxed">Advanced security measures protecting patient data from breaches, ransomware, and unauthorized access with real-time monitoring.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="h-[30vh] flex items-center justify-center">
                        <img src="/asset/dataanalytics.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">Data Analytics</h3>
                        <p class="text-gray-600 leading-relaxed">Business intelligence and predictive analytics to improve patient outcomes, operational efficiency, and strategic decision-making.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden card-hover">
                    <div class="h-[30vh] flex items-center justify-center">
                        <img src="/asset/support.webp" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-3 max-md:text-xl  text-gray-900">24/7 IT Support</h3>
                        <p class="text-gray-600 leading-relaxed">Round-the-clock technical support and maintenance ensuring your healthcare systems run smoothly without interruption.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section id="technology-stack" class="py-24 max-lg:py-12   bg-gray-50">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="text-center mb-16 max-lg:mb-6 ">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Technology</span>
                <h2 class="text-4xl  max-md:text-2xl font-bold mb-4 mt-2 text-gray-900">Industry-Leading Platforms We Work With</h2>
                <p class="text-gray-600 text-lg max-md:text-base max-w-3xl mx-auto">Leveraging cutting-edge technologies to deliver robust healthcare solutions</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-lg:gap-4">
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fas fa-database text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">SQL Server</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-aws text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">AWS Cloud</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-microsoft text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">Azure</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fas fa-fire text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">HL7/FHIR</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-python text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">Python</p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-xl text-center card-hover">
                    <i class="fab fa-react text-4xl  max-md:text-2xl text-blue-600 mb-4"></i>
                    <p class="font-semibold text-gray-900">React</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits-section" class="py-24 max-lg:py-12   bg-white">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="grid lg:grid-cols-2 gap-16 items-center max-lg:gap-8">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Benefits</span>
                    <h2 class="text-4xl  max-md:text-2xl font-bold mb-8 mt-2 text-gray-900">Transform Your Healthcare Operations</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg max-md:text-base font-semibold mb-2 text-gray-900">Enhanced Patient Care</h4>
                                <p class="text-gray-600">Improved data accessibility enables faster diagnosis and more personalized treatment plans for better outcomes.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg max-md:text-base font-semibold mb-2 text-gray-900">Operational Efficiency</h4>
                                <p class="text-gray-600">Streamlined workflows and automated processes significantly reduce administrative overhead and costs.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg max-md:text-base font-semibold mb-2 text-gray-900">Enterprise Security</h4>
                                <p class="text-gray-600">Multi-layered security protocols protect sensitive patient information from cyber threats and breaches.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check text-white text-xl max-md:text-lg max-md:text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-xl max-md:text-lg max-md:text-base font-semibold mb-2 text-gray-900">Regulatory Compliance</h4>
                                <p class="text-gray-600">Stay compliant with HIPAA, HITECH, and other healthcare regulations automatically with built-in controls.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=" rounded-2xl shadow-xl h-[80vh] max-md:h-[40vh] max-lg:h-[20vh] flex items-center justify-center rounded-2xl">
                        <img src="/asset/HEALTHCARE.jpg" class="w-full h-full object-cover  rounded-2xl" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section id="statistics-section" class="py-24 max-lg:py-12   bg-blue-600 text-white">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl  max-md:text-2xl font-bold mb-2">500+</div>
                    <p class="text-blue-200 text-lg max-md:text-base">Healthcare Facilities</p>
                </div>
                <div>
                    <div class="text-4xl  max-md:text-2xl font-bold mb-2">99.9%</div>
                    <p class="text-blue-200 text-lg max-md:text-base">System Uptime</p>
                </div>
                <div>
                    <div class="text-4xl  max-md:text-2xl font-bold mb-2">24/7</div>
                    <p class="text-blue-200 text-lg max-md:text-base">Technical Support</p>
                </div>
                <div>
                    <div class="text-4xl  max-md:text-2xl font-bold mb-2">15+</div>
                    <p class="text-blue-200 text-lg max-md:text-base">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section id="use-cases" class="py-24 max-lg:py-12 bg-gray-50">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="text-center mb-16 max-lg:mb-6  max-md:mb-8">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Solutions</span>
                <h2 class="text-4xl  max-md:text-2xl font-bold mb-4 mt-2 text-gray-900">Healthcare IT Use Cases</h2>
                <p class="text-gray-600 text-lg max-md:text-base max-w-3xl mx-auto">Real-world applications transforming healthcare delivery</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-lg:gap-4">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh] max-lg:h-[20vh]   flex items-center justify-center">
                        <img src="/asset/h1.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 max-md:text-xl  ">Hospital Management System</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Complete integrated solution managing patient records, appointments, billing, pharmacy, and laboratory operations from a single unified platform.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 max-md:text-sm">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Centralized patient data management
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Automated billing & insurance claims
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Real-time inventory tracking
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh] max-lg:h-[20vh]    flex items-center justify-center">
                        <img src="/asset/telemedicine.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 max-md:text-xl  ">Telemedicine Platform</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Enable virtual consultations with secure video conferencing, e-prescriptions, and remote patient monitoring capabilities for modern healthcare delivery.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                HD video consultations & chat
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Digital prescriptions & records
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Patient portal access
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh] max-lg:h-[20vh]    flex items-center justify-center">
                        <img src="/asset/h2.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 max-md:text-xl  ">AI-Powered Diagnostics</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Machine learning algorithms assist in early disease detection, medical imaging analysis, and predictive patient risk assessment for improved outcomes.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Medical image recognition AI
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Predictive analytics engine
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Patient risk stratification
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-gray-200">
                    <div class="img-placeholder h-[40vh] max-lg:h-[20vh]    flex items-center justify-center">
                        <img src="asset/pharmacy.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="p-8 max-lg:text-sm max-lg:p-4">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 max-md:text-xl  ">Pharmacy Management</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive pharmacy system with inventory control, prescription management, drug interaction alerts, and automated reordering capabilities.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Automated inventory management
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Drug interaction alerts
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                Expiry date tracking
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Process -->
    <section id="implementation-process" class="py-24 max-lg:py-12   bg-white">
        <div class="w-[80%] mx-auto max-lg:w-[85%] ">
            <div class="text-center mb-16 max-lg:mb-6 ">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Process</span>
                <h2 class="text-4xl  max-md:text-2xl font-bold mb-4 mt-2 text-gray-900">Our Implementation Approach</h2>
                <p class="text-gray-600 text-lg max-md:text-base max-w-3xl mx-auto">A systematic methodology ensuring successful healthcare IT transformation</p>
            </div>
            <div class="grid grid-cols-4  max-md:grid-cols-1 max-lg:grid-cols-2 gap-12 max-md:gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">1</div>
                    <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-3 text-gray-900">Discovery & Analysis</h3>
                    <p class="text-gray-600 leading-relaxed">Understanding your facility's unique needs, current infrastructure, and strategic objectives.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">2</div>
                    <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-3 text-gray-900">Solution Design</h3>
                    <p class="text-gray-600 leading-relaxed">Creating customized architecture that aligns with healthcare regulations and clinical workflows.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">3</div>
                    <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-3 text-gray-900">Development & Testing</h3>
                    <p class="text-gray-600 leading-relaxed">Building and configuring systems with rigorous quality assurance and security testing.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">4</div>
                    <h3 class="text-xl max-md:text-lg max-md:text-base font-bold mb-3 text-gray-900">Deployment & Support</h3>
                    <p class="text-gray-600 leading-relaxed">Seamless migration with comprehensive training and 24/7 ongoing technical support.</p>
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