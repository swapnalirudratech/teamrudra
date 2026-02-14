<?php
$page_title = "it-consult"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<style>
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 1s ease-out forwards;
    }

    .slide-in-right {
        animation: slideInRight 1.2s ease-out forwards;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>


<body>

    <?php include "include/navbar.php" ?>

    <!-- Header Section for IT Consulting -->
    <div class="w-full flex h-[90vh] max-lg:h-[40vh] max-md:h-[60vh]   relative overflow-hidden gradient-bg">
        <!-- Left Side (Text Content) -->
        <div class="w-full  w-[70%] max-lg:w-[60%] max-md:w-full relative bg-white flex flex-col justify-center  z-10 rounded-br-[50%] shadow-lg">
            <div class="w-[80%] mx-auto fade-in-up">
                <div class="mb-6">
                    <span class="px-4 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Professional IT Consulting</span>
                </div>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-gray-900 leading-tight">
                    Expert IT <br> Consulting Services
                    <span class="block mt-2 text-lg md:text-xl font-normal text-blue-600">Empowering Businesses with Technology-Driven <br> Solutions</span>
                </h2>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#consult"
                        class="px-6 py-3 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-600 transition transform hover:-translate-y-1 shadow-md flex items-center justify-center">
                        <i class="fas fa-laptop-code mr-2"></i>
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side (Image) -->
        <div class="w-[50%] hidden md:block absolute top-20 right-8 z-50 slide-in-right max-lg:-right-20 max-lg:top-32">
            <img src="/asset/contact.jpg" alt="IT Consulting Experts" class="w-[85%] h-[60vh] max-lg:h-[20vh] max-lg:w-2/3 object-cover rounded-lg shadow-2xl">
            <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center gap-2">
                    <div class="flex">
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        <div class="w-3 h-3 bg-gray-300 rounded-full ml-1"></div>
                        <div class="w-3 h-3 bg-gray-300 rounded-full ml-1"></div>
                    </div>
                    <span class="text-xs font-medium text-gray-500">IT Consultants</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section for IT Consulting -->
    <section id="services" class="py-24  max-lg:py-12  bg-white">
        <div class="w-[80%]  max-md:w-[85%] mx-auto">
            <div class="text-center mb-16 max-lg:mb-8">
                <span class="px-4 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Our Services</span>
                <h2 class="text-4xl max-md:text-2xl font-semibold mt-4 mb-4">Strategic IT Consulting Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We empower businesses with tailored IT strategies, technology solutions, and digital innovation to drive efficiency and growth.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-lg:gap-6">
                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white border border-gray-100 p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 card-hover">
                    <div class="w-16 h-16 mb-6 flex items-center justify-center bg-blue-50 rounded-xl">
                        <i class="fas fa-lightbulb text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-3 text-gray-900">IT Strategy & Planning</h3>
                    <p class="text-gray-600 text-base">
                        Develop comprehensive IT roadmaps aligned with your business goals to ensure scalability, security, and digital growth.
                    </p>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white border border-gray-100 p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 card-hover">
                    <div class="w-16 h-16 mb-6 flex items-center justify-center bg-blue-50 rounded-xl">
                        <i class="fas fa-network-wired text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-3 text-gray-900">Infrastructure & Cloud Consulting</h3>
                    <p class="text-gray-600 text-base">
                        Optimize your IT infrastructure and leverage cloud solutions for enhanced flexibility, efficiency, and cost savings.
                    </p>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-white border border-gray-100 p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 card-hover">
                    <div class="w-16 h-16 mb-6 flex items-center justify-center bg-blue-50 rounded-xl">
                        <i class="fas fa-shield-alt text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-3 text-gray-900">Cybersecurity Consulting</h3>
                    <p class="text-gray-600 text-base">
                        Protect your organization with proactive cybersecurity strategies, risk assessments, and compliance-focused solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us Section for IT Consulting -->
    <section class="bg-gray-50 py-24  max-lg:py-12 ">
        <div class="w-[80%]  max-md:w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-16 max-lg:gap-0 max-md:gap-8">
            <!-- Left Content -->
            <div class="lg:w-1/2 order-2 lg:order-1">

                <h2 class="text-4xl max-md:text-2xl font-semibold text-gray-900 leading-tight mt-4 mb-6 max-md:mb-4 max-md:mt-2">
                    IT Consulting Expertise That Powers Business Growth
                </h2>
                <p class="text-gray-700 mb-8 text-sm leading-relaxed">
                    Our team of seasoned IT consultants and engineers brings strategic thinking, technical proficiency, and a business-first approach to every project, ensuring technology fuels your success.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 text-blue-600">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4 class="ml-3 font-semibold text-gray-900 whitespace-nowrap">Industry Experts</h4>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 text-blue-600">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h4 class="ml-3 font-semibold text-gray-900 whitespace-nowrap">Tailored IT Solutions</h4>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 text-blue-600">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="ml-3 font-semibold text-gray-900 whitespace-nowrap">Security-First Approach</h4>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 text-blue-600">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4 class="ml-3 font-semibold text-gray-900 whitespace-nowrap">24/7 Support</h4>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <a href="/get-in-touch" class="mt-6 inline-block w-fit bg-blue-700 text-white hover:bg-blue-600 transition px-8 py-4 rounded-md font-medium shadow-md flex items-center">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Start Your IT Project
                </a>
            </div>

            <!-- Right Image -->
            <div class="lg:w-1/2 flex justify-center order-1 lg:order-2 mb-12 lg:mb-0 max-md:mb-0 max-lg:w-full">
                <div class="relative w-full">
                    <img src="/asset/team.jpg" alt="IT Consulting Team" class="w-full rounded-lg max-lg:h-[30vh] object-cover">
                </div>
            </div>
        </div>
    </section>



    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true
        });
    </script>


<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>