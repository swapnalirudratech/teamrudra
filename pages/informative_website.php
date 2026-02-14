<?php
$page_title = "website-designing";

?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>


    <section class="relative bg-gradient-to-br from-white to-blue-50  h-[90vh] max-md:h-[70vh] overflow-hidden">

        <!-- Background Image with Black Overlay -->
        <div class="absolute inset-0">
            <!-- Black Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

            <!-- Image -->
            <img src="/asset/infoweb.jpg" alt="Informative Website Background"
                class="w-full h-full object-cover" />
        </div>

        <!-- Overlay Content -->
        <div class="relative z-20 w-[90%] max-w-7xl mx-auto flex flex-col items-center justify-center text-center h-full">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-100 leading-tight">
                Informative Websites <br>
                That Work
            </h1>
            <p class="mt-4 text-base sm:text-lg text-gray-200 max-w-2xl">
                Clean, responsive websites that inform, engage, and convert. Designed with user experience and clarity in mind.
            </p>
            <div class="mt-6">
                <a href="/get-in-touch"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full shadow-md text-sm sm:text-base font-semibold transition duration-300">
                    <i class="fas fa-paper-plane"></i> Get Started
                </a>
            </div>
        </div>

    </section>


    <section class="py-16 bg-white max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto flex max-md:flex-col-reverse max-lg:flex-row lg:flex-row items-center gap-12 ">

            <!-- Images Section -->
            <div class="relative flex gap-6 items-center justify-center lg:w-1/2 w-full max-lg:w-1/2 max-md:w-full">
                <!-- Dotted Background -->
                <div class="absolute left-12 bottom-0 w-64 h-64 z-0 opacity-50">
                    <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
                        <defs>
                            <pattern id="dots" x="0" y="0" width="5" height="5" patternUnits="userSpaceOnUse">
                                <circle cx="1" cy="1" r="0.6" fill="rgb(0, 131, 239)" />
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#dots)" />
                    </svg>
                </div>

                <!-- Image 1 -->
                <div class="rounded-full overflow-hidden w-40 h-56 max-lg:h-[15vh] max-md:h-40 z-10 shadow-md">
                    <img src="asset/team.jpg" alt="Team" class="object-cover w-full h-full" />
                </div>

                <!-- Image 2 -->
                <div class="rounded-full overflow-hidden w-56 h-80  max-lg:h-[30vh] max-md:h-60 relative z-10 shadow-lg">
                    <img src="asset/team1.jpg" alt="Team 2" class="object-cover w-full h-full" />
                </div>
            </div>

            <!-- Content Section -->
            <div class="lg:w-1/2 w-full text-center lg:text-left max-w-xl max-lg:w-1/2 max-lg:text-left max-md:w-full">
                <p class="text-blue-600 text-sm tracking-widest uppercase mb-2">Let’s Talk About</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-black mb-4">
                    Informative Websites
                </h2>
                <p class="text-gray-700 mb-4 max-lg:text-sm">
                    RudraTech IT Services is known for developing professional, responsive, and SEO-friendly informative websites that can enhance your brand identity. Whether you are a startup, an agency, or a small business, our websites are designed for speed, clarity, and performance.
                </p>
                <p class="text-gray-700  max-lg:text-sm">
                    From featuring your services and team members to adding contact forms and Google Maps, we can help you communicate effectively and convert visitors into leads.
                </p>
            </div>

        </div>
    </section>


    <section class="bg-[#ffffff]  py-20 max-lg:py-12 max-md:border-t border-gray-200">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid grid-cols-2 max-lg:grid-cols-1 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <p class="text-sm tracking-widest text-blue-600 mb-2">INFORMATIVE WEBSITE</p>
                <h2 class="text-4xl max-md:text-2xl font-bold leading-tight mb-4">
                    Informative Website is a <br />
                    Business <span class="text-blue-500">Essential</span>
                </h2>
                <p class="text-gray-800 mb-4">
                    At RudraTech IT Services, we are experts in creating informative websites that convey your brand, services, and values effectively. Our aim is to assist businesses in making a great online impact and sharing in-depth information without overwhelming visitors.
                </p>
                <p class="text-gray-800 mb-6">
                    Whether it is a startup or an existing business, our informative websites ensure that your visitors receive the information they are looking for – clearly and professionally.
                </p>
                <div class="flex space-x-10">
                    <div>
                        <p class="text-sm text-gray-400">Small Business</p>
                        <p class="text-2xl font-bold mt-1">+85%</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">New Startups</p>
                        <p class="text-2xl font-bold mt-1">+90%</p>
                    </div>
                </div>
            </div>

            <!-- Right Content Cards -->
            <div class="space-y-6">
                <!-- Card 1 -->
                <div class="flex items-center bg-gradient-to-r from-blue-600 to-blue-400 rounded-full p-5">
                    <div class="w-20 h-20 flex-shrink-0 relative">
                        <!-- Progress Ring SVG -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36">
                            <path class="text-gray-300" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" />
                            <path class="text-blue-400" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-white font-bold text-sm">75%</span>
                    </div>
                    <div class="ml-5 text-white">
                        <h4 class="text-lg font-semibold">Content Strategy</h4>
                        <p class="text-sm text-gray-200">Well-structured layout that emphasizes important services and key messages.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-center bg-gradient-to-r from-blue-600 to-blue-400 rounded-full p-5">
                    <div class="w-20 h-20 flex-shrink-0 relative">
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36">
                            <path class="text-gray-300" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" />
                            <path class="text-blue-200" stroke-dasharray="82, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-white font-bold text-sm">82%</span>
                    </div>
                    <div class="ml-5 text-white">
                        <h4 class="text-lg font-semibold">User Experience</h4>
                        <p class="text-sm text-gray-200">Layout designed for ease of understanding, speed, and navigation.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-center bg-gradient-to-r from-blue-600 to-blue-400 rounded-full p-5">
                    <div class="w-20 h-20 flex-shrink-0 relative">
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36">
                            <path class="text-gray-300" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" />
                            <path class="text-blue-500" stroke-dasharray="90, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-white font-bold text-sm">90%</span>
                    </div>
                    <div class="ml-5 text-white">
                        <h4 class="text-lg font-semibold">SEO Ready</h4>
                        <p class="text-sm text-gray-200">Optimized for high search engine rankings and traffic.</p>
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