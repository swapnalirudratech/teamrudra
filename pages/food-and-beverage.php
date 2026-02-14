<!DOCTYPE html>
<html lang="en">


<?php
$page_title = "food-and-beverage"
?>

<?php include "include/header.php" ?>



<style>
    .management-card.active {
        background-color: #2563eb;
        /* Tailwind blue-600 */
    }

    .management-card.active .card-text {
        align-items: flex-start !important;
    }

    .management-card.active .card-text h3 {
        transform: translateY(-40%);
    }

    .management-card.active .card-image {
        bottom: 1.5rem;
        /* bottom-6 */
    }

    .owl-case-carousel .owl-stage,
    .owl-case-carousel .owl-item {
        height: 100%;
    }

    .owl-case-carousel .owl-item>div {
        height: 100%;
    }
</style>


<body>
    <?php include "include/navbar.php" ?>


    <!-- Banner Section -->
    <section class="relative h-[90vh] max-lg:h-[40vh] max-md:h-[60vh]  bg-cover bg-center flex items-center " style="background-image: url('/asset/bnr/foodbnr.jpg');">
        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full  text-center max-md:px-4 mx-auto ">
            <h1 class=" text-5xl max-lg:text-2xl font-bold leading-tight">
                Fuel Your Food Business With<br />
                <span class="text-orange-400">A Complete Technology Solution</span>
            </h1>

            <!-- Features -->
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 mt-6">
                <div class="flex items-center space-x-2">
                    <img src="/asset/Ordering_Tech.webp" class="w-5 h-5 sm:w-6 sm:h-6" alt="Ordering Icon" />
                    <span class="font-medium text-xs sm:text-sm md:text-base">Ordering Tech</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="/asset/Delivery_Tech.webp" class="w-5 h-5 sm:w-6 sm:h-6" alt="Delivery Icon" />
                    <span class="font-medium text-xs sm:text-sm md:text-base">Delivery Tech</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="/asset/Management_Tech.webp" class="w-5 h-5 sm:w-6 sm:h-6" alt="Management Icon" />
                    <span class="font-medium text-xs sm:text-sm md:text-base">Management Tech</span>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-6 sm:mt-8">
                <a href="/get-in-touch"
                    class="bg-orange-500 hover:bg-orange-600 text-white text-sm sm:text-base md:text-lg font-semibold py-2 sm:py-3 px-5 sm:px-6 rounded-md transition transform hover:-translate-y-1 shadow-lg">
                    Book Your Demo Now!
                </a>
            </div>

            <!-- Description -->
            <p class="mt-6 sm:mt-8 text-xs sm:text-sm md:text-base text-slate-900 leading-relaxed max-md:hidden max-lg:w-2/3">
                From planning to promotion, leverage the most advanced food delivery technology<br class="hidden sm:block" />
                backed by industry experts at every stage of your journey.
            </p>
        </div>
    </section>

    <!-- Admin Panel Overlapping Image -->
    <div class="relative z-30 w-full flex justify-center -mt-16 sm:-mt-20 md:-mt-12 max-lg:pb-0 pb-20 max-md:-mt-8">
        <div class="w-[95%] sm:w-[90%] md:w-2/3 rounded-xl overflow-hidden ">
            <img src="/asset/stakeholder.png" alt="Admin Panel" class="w-full h-auto object-cover" />
        </div>
    </div>


    <!-- Stats Section -->
    <section class="w-full  py-12 px-4 max-md:py-8 ">
        <div class="w-[80%]  max-lg:w-[85%]  mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-[#fff2dc] border border-orange-200 rounded-lg p-6 flex items-center space-x-4">
                <img src="/asset/package.png" alt="Orders Icon" class="w-16 " />
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-800">1.5M</h3>
                    <p class="text-sm text-gray-600">Orders Processed</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#fff2dc] border border-orange-200 rounded-lg p-6 flex items-center space-x-4">
                <img src="/asset/review_7678598.png" alt="Reviews Icon" class="w-10 h-10" />
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-800">60K</h3>
                    <p class="text-sm text-gray-600">Customer Reviews</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#fff2dc] border border-orange-200 rounded-lg p-6 flex items-center space-x-4">
                <img src="/asset/money-transfer_4635361.png" alt="Transactions Icon" class="w-10 h-10" />
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-800">230K</h3>
                    <p class="text-sm text-gray-600">Monthly Transactions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study CTA Section -->
    <section class="w-full bg-black text-white">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 items-center">
            <!-- Image -->
            <div class="flex justify-center w-full order-1 md:order-none">
                <img src="/asset/port_scr1.png"
                    alt="App Preview"
                    class="w-full h-auto max-h-[300px] md:max-h-none object-cover object-right rounded-md shadow-lg" />
            </div>

            <!-- Text & Button -->
            <div class="px-4 text-center md:text-left order-2 md:order-none max-md:py-6">
                <h2 class="max-lg:text-lg text-3xl font-bold leading-snug">
                    We've Created Some Of ‘The Most Downloaded’ Apps In The Region
                </h2>
                <p class="text-gray-300 max-lg:mt-2 mt-4 max-lg:text-xs">
                    Explore Their Journey To Success With RudraTech
                </p>
                <a href="/get-in-touch"
                    class="inline-block max-lg:mt-3  max-lg:mb-2 mt-6 px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 text-xs sm:text-sm md:text-base bg-orange-500 text-white font-semibold rounded-md hover:bg-orange-600 transition">
                    View Case Study
                </a>
            </div>
        </div>
    </section>

    <!-- Custom Development Promo Section -->
    <section class="w-full bg-white py-12  ">
        <div class="w-[80%]  max-lg:w-[85%]   mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-10">

            <!-- Left Content -->
            <div>
                <p class="text-sm text-gray-500 font-semibold uppercase mb-2">Want To Beat The Competition?</p>
                <h2 class="text-3xl max-lg:text-xl font-bold text-gray-800 leading-snug">
                    Thinking Beyond Zomato & Swiggy?<br />
                    Launch Your Own Custom Food Delivery Platform
                </h2>
                <div class="mt-6 relative inline-block">
                    <div class="bg-gradient-to-r from-orange-400 to-orange-500 text-white italic font-semibold px-6 py-4 rounded-xl shadow-lg">
                        Ditch the Limitations of Pre-Built Platforms –<br />
                        Build a Fully Custom Solution with RudraTech
                    </div>
                    <!-- Pointer -->
                    <div class="absolute w-6 h-6 bg-orange-500 
                    transform rotate-45 
                    -right-2 top-4 
                    max-md:rotate-[135deg] max-md:top-auto max-md:left-1/2 max-md:-translate-x-1/2 max-md:-bottom-3">
                    </div>
                </div>
            </div>

            <!-- Right Illustration -->
            <div class="flex justify-center">
                <img src="/asset/appdevfood.png" alt="Custom App Dev" class="w-full max-w-md" />
            </div>
        </div>
    </section>

    <section class="bg-orange-50  py-12 max-lg:py-12 w-full ">
        <div class="text-center mb-12 w-[80%]  max-lg:w-[85%]  mx-auto">
            <h2 class="text-3xl max-md:text-2xl font-bold uppercase text-slate-900">The Major Species of Management Systems</h2>
            <p class="text-slate-600 mt-4 max-w-3xl mx-auto max-md:text-sm">
                The complexity and types of management systems vary depending on each business's needs. Our restaurant management software development company will help you determine your eatery’s needs.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-[80%]  max-lg:w-[85%]  mx-auto text-white uppercase">
            <!-- CARD -->
            <div class="management-card group relative bg-gray-800 transition duration-300 overflow-hidden rounded-xl h-60 flex items-center justify-center cursor-pointer">
                <div class="card-text absolute inset-0 flex items-center justify-center px-4 pt-6 text-center transition-all duration-500 ease-in-out">
                    <h3 class="font-normal text-xl transition-all duration-500 ease-in-out">
                        Online Food <br> Ordering
                    </h3>
                </div>
                <div class="card-image absolute bottom-[-100%] left-1/2 transform -translate-x-1/2 transition-all duration-500 ease-in-out w-60 h-40 border-t-2 border-white pt-2">
                    <img src="/asset/dashboard (1).jpg" alt="Online Food Ordering" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- CARD -->
            <div class="management-card group relative bg-gray-800 transition duration-300 overflow-hidden rounded-xl h-60 flex items-center justify-center cursor-pointer">
                <div class="card-text absolute inset-0 flex items-center justify-center px-4 pt-6 text-center transition-all duration-500 ease-in-out">
                    <h3 class="font-normal  text-xl transition-all duration-500 ease-in-out">
                        Inventory Management
                    </h3>
                </div>
                <div class="card-image absolute bottom-[-100%] left-1/2 transform -translate-x-1/2 transition-all duration-500 ease-in-out w-60 h-40 border-t-2 border-white pt-2">
                    <img src="/asset/dashboard (1).png" alt="Inventory" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- CARD -->
            <div class="management-card group relative bg-gray-800 transition duration-300 overflow-hidden rounded-xl h-60 flex items-center justify-center cursor-pointer">
                <div class="card-text absolute inset-0 flex items-center justify-center px-4 pt-6 text-center transition-all duration-500 ease-in-out">
                    <h3 class="font-normal  text-xl transition-all duration-500 ease-in-out">
                        The Table <br> Reservation
                    </h3>
                </div>
                <div class="card-image absolute bottom-[-100%] left-1/2 transform -translate-x-1/2 transition-all duration-500 ease-in-out w-60 h-40 border-t-2 border-white pt-2">
                    <img src="/asset/dashboard (2).jpg" alt="Reservation" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="management-card group relative bg-gray-800 transition duration-300 overflow-hidden rounded-xl h-60 flex items-center justify-center cursor-pointer">
                <div class="card-text absolute inset-0 flex items-center justify-center px-4 pt-6 text-center transition-all duration-500 ease-in-out">
                    <h3 class="font-normal  text-xl transition-all duration-500 ease-in-out">
                        Human resource <br> management
                    </h3>
                </div>
                <div class="card-image absolute bottom-[-100%] left-1/2 transform -translate-x-1/2 transition-all duration-500 ease-in-out w-60 h-40 border-t-2 border-white pt-2">
                    <img src="/asset/dashboard (2).jpg" alt="Reservation" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Section with moving dots background -->
    <section id="dot-background" class="h-screen max-md:h-[60vh] max-lg:h-[40vh] flex items-center justify-center text-slate-900 relative">
        <div class="text-center z-10 max-md:px-6">
            <h1 class="text-2xl md:text-4xl font-bold uppercase">
                Our Cases as a
                Restaurant Management <br />
                Software Development Company
            </h1>
            <div class="mt-6 text-xl animate-bounce">↓</div>
        </div>
    </section>


    <!-- Carousel Container -->
    <section class="">
        <div class="owl-carousel owl-case-carousel text-white">

            <!-- Slide 1 -->
            <div class="bg-[#121212] px-6 max-lg:py-12 max-lg:h-[60vh] max-md:h-[40vh] h-screen  py-10 flex items-center justify-center">
                <div class="w-[85%] mx-auto grid md:grid-cols-3 items-center gap-10 max-lg:w-[95%]">
                    <div>
                        <p class="text-sm mb-1">Case</p>
                        <h2 class="text-3xl max-md:text-xl font-bold uppercase leading-tight mb-4">
                            Global Restaurant Brand App Development
                        </h2>
                        <div class="w-10 h-10 border border-white rounded-full flex items-center justify-center">
                            <span class="text-xl">→</span>
                        </div>
                    </div>
                    <div class="relative w-[240px] h-[485px] max-md:w-[180px] max-md:h-[340px]">
                        <img src="/asset/download.svg" alt="Phone Frame" class="w-full h-full z-10 relative pointer-events-none max-lg:p-2" />
                        <img src="/asset/imgi_61_grbd81.png"
                            alt="App Screenshot"
                            class="absolute top-[7px] left-0 max-md:w-[150px] max-md:h-[310px] w-[225px] h-[470px] object-contain rounded-[30px] z-0" />
                    </div>
                    <div>
                        <p class="text-gray-300 text-sm leading-6 max-lg:p-2">
                            Our team has been honored to work as a restaurant management software development company...
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="bg-[#131b47] px-6 max-lg:py-12 max-lg:h-[60vh] h-screen py-10 flex items-center justify-center">
                <div class="w-[85%] mx-auto grid md:grid-cols-3 items-center gap-10 max-lg:w-[95%]">
                    <div>
                        <p class="text-sm mb-1">Case</p>
                        <h2 class="text-3xl max-md:text-xl font-bold uppercase leading-tight mb-4">
                            Chain Restaurant Management System
                        </h2>
                        <div class="w-10 h-10 border border-white rounded-full flex items-center justify-center">
                            <span class="text-xl">→</span>
                        </div>
                    </div>
                    <div class="relative w-[240px] h-[485px] max-md:w-[160px] max-md:h-[320px]">
                        <img src="/asset/download.svg" alt="Phone Frame" class="w-full h-full z-10 relative pointer-events-none" />
                        <img src="/asset/imgi_63_Screenleto.png"
                            alt="App Screenshot"
                            class="absolute top-[7px] left-0 max-md:w-[150px] max-md:h-[310px] w-[225px] h-[470px] object-contain rounded-[30px] z-0" />
                    </div>
                    <div>
                        <p class="text-gray-300 text-sm leading-6 max-lg:p-2">
                            We have delivered sophisticated restaurant management software development services for this client...
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="bg-[#a7086a] px-6 max-lg:py-12 max-lg:h-[60vh] h-screen py-10 flex items-center justify-center">
                <div class="w-[85%] mx-auto grid md:grid-cols-3 items-center gap-10 max-lg:w-[95%]">
                    <div>
                        <p class="text-sm mb-1">Case</p>
                        <h2 class="text-3xl max-md:text-xl font-bold uppercase leading-tight mb-4">
                            Food Ordering Service for Restaurant Networks
                        </h2>
                        <div class="w-10 h-10 border border-white rounded-full flex items-center justify-center">
                            <span class="text-xl">→</span>
                        </div>
                    </div>
                    <div class="relative w-[240px] h-[485px] max-md:w-[160px] max-md:h-[320px]">
                        <img src="/asset/download.svg" alt="Phone Frame" class="w-full h-full z-10 relative pointer-events-none" />
                        <img src="/asset/imgi_61_grbd81.png"
                            alt="App Screenshot"
                            class="absolute top-[7px] left-0 max-md:w-[150px] max-md:h-[310px] w-[225px] h-[470px] object-contain rounded-[30px] z-0" />
                    </div>
                    <div>
                        <p class="text-gray-300 text-sm leading-6 max-lg:p-2">
                            This client had a clear vision of what case they wanted to achieve to seamlessly manage all three sides...
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="bg-white text-slate-900 py-20 max-lg:py-12 ">
        <div class="w-[80%]  max-lg:w-[85%]  mx-auto">
            <div class="mb-12 max-md:hidden">
                <h2 class="text-3xl md:text-4xl font-extrabold uppercase"></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-lg:gap-4 ">
                <div class=" rounded-xl max-md:text-center max-lg:text-3xl max-md:text-2xl text-4xl font-menium text-left p-6 flex flex-col items-start ">
                    STRENGTHS OF OUR IT SERVICES CASES
                </div>
                <!-- Item 1 -->
                <div class="border border-black/60 rounded-xl p-6 max-lg:p-4 flex flex-col items-center text-center">
                    <div class="mb-4 text-blue-600 text-3xl">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="font-bold uppercase mb-2">Artificial Intelligence</h3>
                    <p class="text-sm text-gray-600 max-lg:text-xs">
                        We’ll implement AI into your system to simplify some of the routine tasks, such as reporting, compiling statistics, supplier comparison, etc.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="border border-black/60 rounded-xl p-6 max-lg:p-4 flex flex-col items-center text-center">
                    <div class="mb-4 text-blue-600 text-3xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="font-bold uppercase mb-2">Safety</h3>
                    <p class="text-sm text-gray-600 max-lg:text-xs">
                        Rest assured that all user and transaction data is encrypted securely.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="border border-black/60 rounded-xl p-6 max-lg:p-4 flex flex-col items-center text-center">
                    <div class="mb-4 text-blue-600 text-3xl">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="font-bold uppercase mb-2">Usability</h3>
                    <p class="text-sm text-gray-600 max-lg:text-xs">
                        We always create our products with our customers in mind, including the admin side. Even if your employees aren't familiar with modern technologies, with our help, they will easily handle everything.
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="border border-black/60 rounded-xl p-6 max-lg:p-4 flex flex-col items-center text-center">
                    <div class="mb-4 text-blue-600 text-3xl">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="font-bold uppercase mb-2">High Performance</h3>
                    <p class="text-sm text-gray-600 max-lg:text-xs">
                        Even if your client base is enormously large, you must ensure that it operates well.
                    </p>
                </div>

                <!-- Item 5 -->
                <div class="border border-black/60 rounded-xl p-6 max-lg:p-4 flex flex-col items-center text-center">
                    <div class="mb-4 text-blue-600 text-3xl">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3 class="font-bold uppercase mb-2">Scalability</h3>
                    <p class="text-sm text-gray-600 max-lg:text-xs">
                        Our platforms are continuously available to broaden the database by onboarding additional clients, partners, and services.
                    </p>
                </div>
            </div>
        </div>


        <div class=" text-center mt-12">
            <a href="" class="rounded-full border border-blue-600 text-blue-600 font-medium hover:bg-blue-600 hover:text-white  px-5 py-2.5 text-center">Get in touch</a>
        </div>
    </section>



    <script>
        $(document).ready(function() {
            $(".owl-case-carousel").owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000,
                smartSpeed: 1000,
                navText: [
                    "<span class='text-white text-2xl'>&#10094;</span>",
                    "<span class='text-white text-2xl'>&#10095;</span>"
                ]
            });
        });
    </script>
    <script>
        const cards = document.querySelectorAll('.management-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Remove active class from all
                cards.forEach(c => c.classList.remove('active'));

                // Add active class to hovered one
                card.classList.add('active');
            });
        });
    </script>


    <script>
        VANTA.DOTS({
            el: "#dot-background",
            mouseControls: true,
            touchControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 0.0,
            scaleMobile: 0.0,
            color: 0xffffff,
            backgroundColor: 0xfafafa,
            spacing: 20.00

        });
    </script>

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