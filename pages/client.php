<?php
$page_title = "client"
?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>

    <?php include "include/navbar.php" ?>



    <section class="w-full h-[85vh] max-lg:h-[30vh] bg-cover bg-center relative" style="background-image: url(/asset/pack-banr.jpg);">

        <!-- Heading Content Left-Aligned -->
        <div class="absolute inset-0 flex items-center max-lg:px-20 max-md:px-6 px-32">
            <div class="text-left max-w-2xl">
                <h2 class="max-md:text-xl max-lg:text-3xl max-lg:w-2/3  text-4xl lg-text-5xl xl:text-6xl font-extrabold text-white leading-tight">
                    Welcome to Our Client Portal
                </h2>
                <p class="text-lg text-gray-200 mt-3 max-md:text-xs">
                    Seamless collaboration starts here
                </p>
                <p class="mt-5 text-sm text-gray-300 max-w-md max-md:hidden">
                    Access your project updates, manage your services, and communicate directly with our team.
                </p>
            </div>
        </div>
    </section>


    <section class="bg-white py-16 max-lg:py-12  w-full">
        <div class="w-[80%] mx-auto grid grid-cols-2 max-lg:grid-cols-1 gap-12 items-center text-sm max-lg:w-[85%]">

            <!-- Text Content -->
            <div>
                <h2 class="text-4xl max-md:text-2xl font-medium text-gray-800 mb-6">At RudraTech IT Service</h2>
                <p class="text-gray-700 mb-4">
                    We take immense pride in being the trusted technology partner for a diverse range of clients—startups, enterprises, and forward-thinking organizations. Our unwavering commitment to delivering innovative IT solutions has helped us earn the loyalty of those who believe in our expertise. Every project we take on is a reflection of our clients' bold ideas and our drive to push the boundaries of what technology can achieve.
                </p>
                <p class="text-gray-700 mb-6">
                    At RudraTech, we believe that <strong class="text-black font-medium">our clients' success is our success</strong>. We thrive on building long-term partnerships founded on trust, transparency, and a passion for solving complex challenges with precision and creativity.
                </p>
                <h3 class="text-xl font-medium text-gray-800 mb-2">As We Move Forward</h3>
                <p class="text-gray-700">
                    We’re humbled by the opportunity to collaborate with remarkable teams and organizations across industries. Every project is a shared journey of innovation, where we blend strategic thinking with technical brilliance to bring bold digital visions to life—leaving a lasting impact in the tech world.
                </p>
            </div>

            <!-- Image with Creative Frame -->
            <div class="relative group">
                <div class="overflow-hidden rounded-2xl  transform transition duration-300 group-hover:scale-105">
                    <img src="/asset/team2.png" alt="Team working creatively" class="w-full max-lg:h-[30vh] object-contain ">
                </div>

            </div>

        </div>
    </section>


    <!-- Client Showcase Section -->
    <section class="py-20  bg-gradient-to-b from-gray-100 to-white relative overflow-hidden  max-lg:py-12 ">
        <!-- Background Design Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600 rounded-full opacity-10 translate-x-1/3 -translate-y-1/4 max-md:hidden"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-800 rounded-full opacity-5 -translate-x-1/4 translate-y-1/4 max-md:hidden"></div>
        </div>

        <div class="w-[80%] mx-auto  relative z-10 max-md:w-[85%]">



            <div class="text-center mb-8">
                <h2 class="text-4xl max-md:text-2xl font-bold text-gray-800">A <span class="text-blue-600">Trusted Brand</span> in Tech Solutions</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto my-3"></div>
                <p class="text-gray-600 text-sm">Delivering excellence and innovation you can rely on.</p>
            </div>


            <?php
            // Merge both your existing grid logos and carousel logos here
            $logos = [
                // Now add the rest from your original carousel list
                ["/asset/logos/mingyang-logo.jpg", "Mingyang"],
                ["/asset/logos/fillit.jpg", "Fillit"],
                ["/asset/logos/ayurlogo.jpg", "Ayur"],
                ["/asset/logos/stallion.png", "Stallion"],
                ["/asset/logos/sindukrupa.jpg", "Sindukrupa"],
                ["/asset/logos/simransweet.webp", "Simran Sweet"],
                ["/asset/logos/shavision.png", "Shavision"],
                ["/asset/logos/ashwazep.jpg", "Ashwazep"],
                ["/asset/logos/abyas.jpg", "Abyas"],
                ["/asset/logos/thenewu.webp", "The New U"],
                ["/asset/logos/rba.png", "RBA"],
                ["/asset/logos/weconnect.webp", "We Connect"],
                ["/asset/logos/qe.jpg", "QE"],
                ["/asset/logos/satyavani.webp", "Satyavani"],
                ["/asset/logos/kesarbaug.png", "Kesarbaug"],
                ["/asset/logos/laxmikamll.png", "Laxmikamal"],
                ["/asset/logos/hindustan.jpg", "Hindustan"],
                ["/asset/logos/balajigas.png", "Balaji Gas"],
                ["/asset/logos/fineprint.webp", "Fineprint"],
                ["/asset/logos/weldfab.webp", "Weldfab"],
                ["/asset/logos/dreamkichen.png", "Dream Kitchen"],
                ["/asset/logos/crizio.png", "Crizio"],
                ["/asset/logos/snackita.png", "Snackita"],
                ["/asset/logos/mmid.png", "MMID"],
                ["/asset/logos/saptam.png", "Saptam"],
                ["/asset/logos/bloom.png", "Bloom"],
                ["/asset/logos/fbm.png", "FBM"],
                ["/asset/Alloy-Nation1.png", "Alloy Nation"],
                ["/asset/Vikas-Academy.png", "Vikas Academy"],
                ["/asset/Gurukripa.png", "Gurukripa"],
                ["/asset/isequal.png", "Is Equal"],
                ["/asset/Kalpataru.png", "Kalpataru"],
                ["/asset/Satus-sweets.png", "Satus Sweets"],
                ["/asset/Vi3.png", "Vi3"],
                ["/asset/Khas.png", "Khas"],
                ["/asset/Avatar-World.png", "Avatar World"],
                ["/asset/Impact.png", "Impact"],
                ["/asset/Chellas.png", "Chellas"],
                ["/asset/Ayur.png", "Ayur"],
                ["/asset/Ashira.png", "Ashira"],
                ["/asset/Humble-Horses.png", "Humble Horses"],
                ["/asset/ITT.png", "ITT"],
                ["/asset/Veor.png", "Veor"],
                ["/asset/Y-cafe.png", "Y Cafe"],
                ["/asset/Private-Court.png", "Private Court"],
                ["/asset/Fairview.png", "Fairview"]

            ];
            ?>

            <!-- All Clients Section -->
            <div class="all-clients-carousel mb-16 max-md:mb-0">
                <div class="grid max-md:grid-cols-3 grid-cols-4 gap-4 max-md:gap-2 ">
                    <?php foreach ($logos as $logo): ?>
                        <div class="flex items-center justify-center bg-white border border-gray-200 rounded-lg p-3 sm:p-4 h-24 sm:h-28 lg:h-32 transform transition-all duration-300 hover:shadow-md hover:shadow-blue-500/30">
                            <img src="<?= $logo[0] ?>" alt="<?= htmlspecialchars($logo[1]) ?>"
                                class="max-h-12 sm:max-h-14 lg:max-h-16 object-contain">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function() {
            // Featured Clients Carousel
            $('.featublue-clients-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: [
                    '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>',
                    '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });




        });
    </script>

    <!-- Add this CSS to your stylesheet -->
    <style>
        /* Owl Carousel Custom Navigation Styling */
        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            height: 44px;
            background-color: rgba(0, 0, 0, 0.5) !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
            color: white !important;
            transition: all 0.3s ease;
        }

        .owl-nav button:hover {
            background-color: #DC2626 !important;
            /* blue-600 */
        }

        .owl-nav button.owl-prev {
            left: -22px;
        }

        .owl-nav button.owl-next {
            right: -22px;
        }

        .owl-dots {
            text-align: center;
            margin-top: 20px;
        }

        .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px;
            background: rgba(255, 255, 255, 0.3);
            display: block;
            transition: all 0.3s ease;
            border-radius: 30px;
        }

        .owl-dots .owl-dot.active span,
        .owl-dots .owl-dot:hover span {
            background: #DC2626;
            /* blue-600 */
        }
    </style>



   <?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>