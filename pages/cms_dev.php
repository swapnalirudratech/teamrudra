<?php
$page_title = "website-designing";


?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>


    <div class="relative overflow-hidden">
        <!-- Banner Section with background image and one-sided overlay -->
        <div class="h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center relative z-10 text-white bg-cover bg-center bg-no-repeat"
            style="background-image: url('/asset/Web-design.jpg');">

            <!-- One-sided gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent z-10"></div>

            <!-- Content -->
            <div class="container w-[80%] max-lg:w-[85%] mx-auto px-6 relative z-20">
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Text -->
                    <div class="md:w-1/2">
                        <h1 class=" text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-5xl 2xl:text-6xl  font-semibold leading-tight mb-4">
                            CMS Development
                        </h1>
                        <p class="text-sm text-indigo-100 max-w-md mb-6">
                            Empower your team with scalable, easy-to-manage content solutions built to grow with your business.
                        </p>

                        <a href="/getquote" class="bg-white text-blue-800 hover:bg-indigo-100 font-medium py-2 px-6 rounded-lg transition">
                            Get a Free Quote
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="bg-white py-20 max-lg:py-12   ">
        <div class="w-[80%] max-lg:w-[85%] mx-auto">
            <div class="text-center mb-16 max-lg:mb-4" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-medium mb-6 text-blue-800">Comprehensive CMS Solutions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    End-to-end services from planning and development to deployment and ongoing maintenance
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-lg:gap-4">
                <div class="bg-white p-8 max-lg:p-4 max-md:p-6 rounded-2xl shadow-md border border-blue-100 card-hover" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-blue-100 text-blue-600 rounded-full w-14 h-14 flex items-center justify-center mb-6">
                        <i class="fas fa-code text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">Custom CMS Solutions</h3>
                    <p class="text-gray-600 mb-6 max-lg:text-sm max-lg:mb-0">We create CMS platforms from scratch, customized to your unique business workflows and content needs.</p>
                </div>

                <div class="bg-white p-8 max-lg:p-4 max-md:p-6 rounded-2xl shadow-md border border-blue-100 card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-blue-100 text-blue-600 rounded-full w-14 h-14 flex items-center justify-center mb-6">
                        <i class="fas fa-plug text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">CMS Integration</h3>
                    <p class="text-gray-600 mb-6 max-lg:text-sm max-lg:mb-0">Smooth integration with platforms like WordPress, Drupal, or headless CMS tools like Strapi and Sanity.</p>
                </div>

                <div class="bg-white p-8 max-lg:p-4 max-md:p-6 rounded-2xl shadow-md border border-blue-100 card-hover" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-blue-100 text-blue-600 rounded-full w-14 h-14 flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">Maintenance & Support</h3>
                    <p class="text-gray-600 mb-6 max-lg:text-sm max-lg:mb-0">Reliable updates, monitoring, and performance tuning to keep your CMS running smoothly and securely.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Creative Image Section -->
    <section class="py-20 max-lg:py-12   bg-white border-t  border-gray-200">
        <div class="w-[80%] max-lg:w-[85%] mx-auto">
            <div class="text-center mb-16 max-lg:mb-4">
                <h3 class="text-2xl md:text-4xl font-medium mb-4 text-blue-800">Transforming Content Management</h3>
                <p class="text-gray-600 max-w-xl mx-auto text-lg ">
                    See how our custom CMS solutions transform business operations and content delivery
                </p>
            </div>

            <div class="relative h-[60vh] max-lg:h-[30vh] max-md:h-[40vh] mb-16 max-md:mb-0 max-lg:mb-8 overflow-hidden rounded-2xl shadow-xl" data-aos="fade-up">
                <img src="/asset/interface.jpg" alt="CMS Dashboard Panorama" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-transparent flex items-center">
                    <div class="p-8 md:p-16 max-w-lg">
                        <h4 class="max-lg:text-2xl text-3xl font-medium mb-4 text-white">Modern Interface Design</h4>
                        <p class="text-blue-100 mb-6 max-lg:text-sm">Our CMS interfaces are designed for maximum productivity with minimal training required.</p>
                        <a href="/getquote" class="inline-block bg-white text-blue-800 px-6 py-3 rounded-lg font-medium shadow-lg hover:bg-blue-50 transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-md:hidden">
                <div class="relative h-[40vh] max-lg:h-[20vh] overflow-hidden rounded-2xl shadow-lg" data-aos="fade-right">
                    <img src="/asset/c1.jpg" alt="Content Workflow Diagram" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-blue-900/70 flex items-center justify-center p-8 opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="text-center">
                            <h4 class="text-xl font-bold mb-3 text-white">Streamlined Workflows</h4>
                            <p class="text-blue-100">Automated content approval processes and publishing schedules save time and reduce errors.</p>
                        </div>
                    </div>
                </div>

                <div class="relative h-[40vh] max-lg:h-[20vh] overflow-hidden rounded-2xl shadow-lg">
                    <img src=" /asset/c2.jpg" alt="Mobile CMS Interface" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-blue-900/70 flex items-center justify-center p-8 opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="text-center">
                            <h4 class="text-xl font-bold mb-3 text-white">Mobile-First Experience</h4>
                            <p class="text-blue-100">Manage your content from anywhere with fully responsive interfaces on any device.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section class="light-blue-gradient py-20 max-lg:py-12   border-t border-gray-200">
        <div class="w-[80%] max-lg:w-[85%] mx-auto">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <img src="/asset/bgapp.jpg" alt="Professional CMS Development Team" class="w-full h-[80vh] max-lg:h-[30vh] object-cover rounded-2xl shadow-lg" />
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-3xl font-medium mb-6 text-blue-800">Why Choose RudraTech for CMS Development?</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        With a focus on quality, security, and long-term scalability, we ensure every CMS we develop becomes a long-term asset for your business.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="bg-blue-100 max-md:bg-transparent text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <p class="text-gray-700">Experienced team of CMS development specialists with 10+ years in the industry</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-100 max-md:bg-transparent text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <p class="text-gray-700">Advanced security practices with regular updates and vulnerability testing</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-100 max-md:bg-transparent text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <p class="text-gray-700">Transparent development process with regular client communications</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-100 max-md:bg-transparent text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <p class="text-gray-700">Comprehensive support packages with 24/7 monitoring options</p>
                        </li>
                    </ul>
                </div>
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