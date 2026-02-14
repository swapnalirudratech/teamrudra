<?php
$page_title = "domain"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>


    <!-- Hero Section -->
    <div class="w-full flex h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] relative overflow-hidden">
        <!-- Left Side (Text Content) -->
        <div class="w-full relative bg-blue-100 flex flex-col justify-center z-10">
            <div class="w-[80%] max-lg:w-[85%] mx-auto">
                <h2 class="max-lg:text-3xl text-5xl lg:text-6xl xl:text8xl font-bold text-blue-900 leading-snug">
                    Domain Name
                    <span class="block mt-1">Services</span>
                </h2>
                <p class="mt-4 text-base text-gray-700 w-1/2 max-md:w-full">
                    Find the perfect domain for your brand with seamless registration, transfer, and management options.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a href="/portfolio"
                        class="px-5 py-2.5 max-md:text-sm bg-blue-800 text-white font-medium rounded-md hover:bg-blue-600 transition transform hover:-translate-y-1">
                        View Projects
                    </a>
                    <a href="/get-in-touch"
                        class="px-5 py-2.5 max-md:text-sm border border-blue-800 text-blue-800 font-medium rounded-md hover:bg-blue-800 hover:text-white transition transform hover:-translate-y-1">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div class="w-0 md:w-[50%] hidden md:block absolute top-32 right-8 z-50 max-lg:right-0 max-lg:top-10">
            <img src="/asset/domain.png" alt="Domain Services Illustration"
                class="w-full h-[50vh] max-lg:h-[30vh] object-contain">
        </div>
    </div>


    <!-- Domain Registration Section -->
    <section id="domain-register" class="bg-white py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text -->
            <div class="space-y-6">
                <div
                    class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-lg text-sm font-medium">
                    <i class="fas fa-globe mr-2"></i> Domain Registration
                </div>
                <h2 class="max-lg:text-3xl text-5xl font-bold text-blue-900">Secure Your Online Identity</h2>
                <p class="text-gray-700 leading-relaxed ">
                    Start your digital journey by claiming the perfect domain name for your brand. With transparent
                    pricing, quick activation, and reliable management tools, we make it effortless to establish your online
                    presence.
                </p>
                <p class="text-gray-700 leading-relaxed ">
                    Whether for startups or large enterprises, our platform ensures your brand stands out globally with
                    trusted domain extensions and consistent uptime.
                </p>
            </div>

            <!-- Image -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl">
                <img src="/asset/dom1.jpg" alt="Domain Registration"
                    class="w-full h-[50vh] max-lg:h-[30vh] max-md:h-[20vh] object-cover">
            </div>
        </div>
    </section>


    <!-- Domain Transfer Section -->
    <section id="domain-transfer" class="bg-gray-50 py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl order-1 max-lg:order-2 ">
                <img src="/asset/dom2.png" alt="Domain Transfer"
                    class="w-full h-[50vh] max-lg:h-[30vh] max-md:h-[20vh] object-cover">
            </div>

            <!-- Text -->
            <div class="space-y-6 order-2 max-lg:order-1">
                <div
                    class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-lg text-sm font-medium">
                    <i class="fas fa-random mr-2"></i> Domain Transfer
                </div>
                <h2 class="max-lg:text-3xl text-5xl font-bold text-blue-900">Effortless Domain Migration</h2>
                <p class="text-gray-700 leading-relaxed ">
                    Move your existing domains to our secure and reliable platform without downtime. Our expert team
                    simplifies every step of the migration to ensure smooth transitions.
                </p>
                <p class="text-gray-700 leading-relaxed ">
                    Experience uninterrupted service, full DNS control, and round-the-clock technical support as you bring
                    your domains under one unified management system.
                </p>
            </div>
        </div>
    </section>


    <!-- DNS Management Section -->
    <section id="dns" class="bg-white py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text -->
            <div class="space-y-6">
                <div
                    class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-lg text-sm font-medium">
                    <i class="fas fa-network-wired mr-2"></i> DNS Management
                </div>
                <h2 class="max-lg:text-3xl text-5xl font-bold text-blue-900">Powerful & Reliable DNS Tools</h2>
                <p class="text-gray-700 leading-relaxed ">
                    Manage your DNS settings effortlessly through our intuitive control panel. Achieve faster load times,
                    better performance, and seamless integration with websites, email servers, and apps.
                </p>
                <p class="text-gray-700 leading-relaxed ">
                    Our secure infrastructure ensures zero lag and maximum uptime, giving you total control and
                    peace of mind.
                </p>
            </div>

            <!-- Image -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl">
                <img src="/asset/dom3.jpg" alt="DNS Management"
                    class="w-full h-[50vh] max-lg:h-[30vh] max-md:h-[20vh] object-cover">
            </div>
        </div>
    </section>


    <!-- WHOIS Privacy Protection Section -->
    <section id="whois" class="bg-gray-50 py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl max-lg:order-2">
                <img src="/asset/dom4.jpg" alt="Privacy Protection"
                    class="w-full h-[50vh] max-lg:h-[30vh] max-md:h-[20vh] object-cover">
            </div>

            <!-- Text -->
            <div class="space-y-6 max-lg:order-1">
                <div
                    class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-lg text-sm font-medium">
                    <i class="fas fa-user-secret mr-2"></i> WHOIS Privacy Protection
                </div>
                <h2 class="max-lg:text-3xl text-5xl font-bold text-blue-900">Protect Your Personal Information</h2>
                <p class="text-gray-700 leading-relaxed ">
                    Keep your identity and data secure from spammers and cyber threats with WHOIS privacy protection. We
                    mask your personal details in public records while keeping your domain accessible and secure.
                </p>
                <p class="text-gray-700 leading-relaxed ">
                    Enjoy total control with built-in security layers designed to maintain compliance and privacy at every
                    level.
                </p>
            </div>
        </div>
    </section>


    <!-- Final CTA Banner -->
    <section class="bg-blue-900 py-14">
        <div class="max-w-6xl mx-auto px-6  flex flex-col md:flex-row items-center justify-between text-white">
            <h2 class="max-lg:text-2xl text-3xl font-bold mb-4 md:mb-0">
                Ready to Secure Your Perfect Domain?
            </h2>
            <a href="/get-in-touch"
                class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100 transition">
                Get in Touch
            </a>
        </div>
    </section>



    <section class="bg-gray-50 text-gray-800 py-20   max-lg:py-12">
        <div class="w-[80%] mx-auto flex flex-col lg:flex-row gap-10 items-start">
            <!-- Step List -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-semibold mb-2">
                    Why <span class="text-blue-600">Domains</span> Matter
                </h2>
                <p class="text-gray-600 text-sm mb-8">
                    Establish your brand identity and make your business discoverable online with the right domain.
                </p>

                <div id="step-list" class="space-y-2">
                    <!-- Steps will be injected here -->
                </div>
            </div>

            <!-- Step Content -->
            <div class="relative w-full lg:w-1/2">
                <img id="step-image"
                    src="/asset/domaindes.jpg"
                    alt="Step Visual"
                    class="rounded-xl  w-full h-[60vh] max-md:h-[50vh] max-lg:h-[30vh] object-cover transition duration-500" />

                <div class=" w-1/2 max-md:w-full absolute bottom-0 right-0 bg-black/80 p-6 rounded-lg max-w-md transition-all duration-300">
                    <p class="text-sm text-blue-400 font-bold mb-1" id="step-number">STEP 01</p>
                    <h3 class="text-lg font-semibold mb-2 text-white " id="step-title">Domain Discovery</h3>
                    <p class="text-sm text-gray-300 mb-4 " id="step-description">
                        Find the perfect domain that fits your brand identity and business goals.
                    </p>

                </div>
            </div>
        </div>
    </section>




    <!-- CTA / FINAL BANNER -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 py-20 max-lg:py-12 text-white text-center overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('/asset/pattern.svg')] bg-cover bg-center"></div>
        <div class="relative w-[85%] mx-auto space-y-6">
            <h2 class="text-4xl font-bold leading-tight">Ready to Secure Your Perfect Domain?</h2>
            <p class="text-gray-200 max-w-2xl mx-auto">
                Start building your online identity today with RudraTech — where innovation meets reliability.
            </p>
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                <a href="/get-in-touch" class="px-6 py-3 bg-white text-blue-900 font-semibold rounded-md hover:bg-blue-100 transition">
                    Get Started
                </a>
                <a href="/portfolio" class="px-6 py-3 border border-white font-semibold rounded-md hover:bg-white hover:text-blue-900 transition">
                    Explore More
                </a>
            </div>
        </div>
    </section>


    <!-- Step Navigation JS -->
    <script>
        const steps = [{
                number: "01",
                title: "Domain Discovery",
                description: "Find the perfect domain that fits your brand identity and business goals.",
                image: "/asset/domaindes.jpg",
            },
            {
                number: "02",
                title: "Domain Registration",
                description: "Secure your domain name easily and start building your online presence.",
                image: "/asset/dom1.jpg",
            },
            {
                number: "03",
                title: "Domain Transfer",
                description: "Move your existing domain to our secure and reliable platform effortlessly.",
                image: "/asset/dom2.png",
            },
            {
                number: "04",
                title: "DNS Configuration",
                description: "Configure DNS settings for email, website, and other services with ease.",
                image: "/asset/dom3.jpg",
            },
            {
                number: "05",
                title: "Privacy Protection",
                description: "Shield your personal info and protect your brand with domain privacy tools.",
                image: "/asset/dom4.jpg",
            }
        ];

        const stepList = document.getElementById("step-list");
        const stepImage = document.getElementById("step-image");
        const stepTitle = document.getElementById("step-title");
        const stepDesc = document.getElementById("step-description");
        const stepNum = document.getElementById("step-number");

        let activeStepIndex = 0;

        function renderSteps() {
            stepList.innerHTML = "";
            steps.forEach((step, index) => {
                const stepItem = document.createElement("div");
                stepItem.className =
                    `flex items-center justify-between px-4 py-3 rounded-l-full transition-all cursor-pointer
        ${index === activeStepIndex ? "bg-blue-600 text-white" : "text-gray-400 "}`;
                stepItem.innerHTML = `
        <div class="flex items-center gap-3 font-medium">
          <i class="fas fa-circle text-xs"></i>
          <span>${step.title}</span>
        </div>
        <span class="font-semibold">${step.number}</span>
      `;
                stepItem.onclick = () => setStep(index);
                stepList.appendChild(stepItem);
            });
        }

        function setStep(index) {
            activeStepIndex = index;
            const step = steps[index];

            // Update image with fade effect
            stepImage.classList.add("opacity-0");
            setTimeout(() => {
                stepImage.src = step.image;
                stepImage.classList.remove("opacity-0");
            }, 200);

            // Update text content
            stepTitle.textContent = step.title;
            stepDesc.textContent = step.description;
            stepNum.textContent = `STEP ${step.number}`;

            renderSteps();
        }

        // Initialize
        renderSteps();
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