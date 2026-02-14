<?php
$page_title = "blockchain"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php" ?>


<style>
    .hero-bg {
        background-image: url('/asset/blockchain.jpg');
        background-size: cover;
        background-position: left;
        position: relative;
        background-repeat: no-repeat;
    }

    .hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.85) 35%, rgba(0, 0, 0, 0.2) 100%);
        z-index: 1;
    }
</style>

<body>
    <?php include "include/navbar.php" ?>


    <div class="w-full flex h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] relative ">
        <div class="w-full hero-bg relative flex flex-col justify-center z-10 ">
            <div class="w-[80%] max-lg:w-[85%] mx-auto relative z-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-normal text-white leading-snug"> Blockchain Development </h2>
                <p class="mt-4 text-base text-gray-300 w-1/2 max-md:w-full"> Secure, decentralized, and scalable blockchain solutions designed to transform your business processes. </p>
                <div class="mt-6 flex space-x-4"> <a href="/portfolio" class="px-5 py-2.5 max-md:text-sm bg-gray-100 text-gray-800 font-medium rounded-md transition transform hover:-translate-y-1"> View Projects </a> <a href="/get-in-touch" class="px-5 py-2.5 max-md:text-sm border border-gray-200 text-gray-100 font-medium rounded-md transition transform hover:-translate-y-1"> Get in Touch </a> </div>
            </div>
        </div>
    </div>


    <section class="relative bg-white py-24 max-lg:py-12 overflow-hidden">
        <div class="w-[80%] max-lg:w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-12 max-lg:gap-8">

            <div class="lg:w-1/2 relative max-lg:order-2">
                <img src="/asset/blockchain2.webp" alt="Blockchain Network"
                    class="rounded-3xl shadow-2xl object-cover h-[60vh] max-lg:h-[30vh] w-full">
                <div class="absolute -bottom-8 -left-8 bg-white/90 backdrop-blur-lg shadow-xl p-6 rounded-2xl w-2/3 max-md:hidden">
                    <h4 class="text-blue-600 font-semibold mb-1">Decentralized Power</h4>
                    <p class="text-gray-600 text-sm">Empowering systems through transparency and security.</p>
                </div>
            </div>

            <div class="lg:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                    Building the <span class="text-blue-600">Future of Digital Trust</span>
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    We design blockchain ecosystems that simplify complex business processes with unmatched transparency and efficiency. Our team integrates blockchain technology into your systems seamlessly.
                </p>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 bg-blue-600 rounded-full"></span> Enterprise-grade dApps
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 bg-blue-600 rounded-full"></span> Smart Contract Integration
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 bg-blue-600 rounded-full"></span> Cross-chain Connectivity
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="bg-gradient-to-br from-gray-900 to-blue-950 text-white py-20 max-md:py-12">
        <div class="w-[80%] max-lg:w-[80%]  mx-auto">
            <h2 class="text-4xl max-lg:text-4xl max-md:text-3xl font-semibold text-center mb-16 max-lg:mb-8">Core Blockchain Solutions</h2>

            <div class="flex flex-col lg:flex-row items-center max-lg:items-start gap-12 mb-20 max-md:gap-8 max-md:mb-12">
                <div class="lg:w-1/2 space-y-4">
                    <h3 class="text-2xl font-medium text-blue-400">Smart Contract Development</h3>
                    <p class="text-gray-300">
                        Secure, automated contracts that execute seamlessly across blockchain networks — improving efficiency and trust between parties.
                    </p>
                </div>
                <img src="/asset/blockchain3.webp" alt="Smart Contract Visual"
                    class="lg:w-1/2 rounded-2xl shadow-2xl object-cover h-[50vh] max-lg:h-[30vh]">
            </div>


            <div class="flex flex-col-reverse lg:flex-row items-center max-lg:items-start gap-12 max-md:gap-8">
                <img src="/asset/blockchain4.jpg" alt="Wallet Visual"
                    class="lg:w-1/2 rounded-2xl shadow-2xl object-cover h-[50vh] max-lg:h-[30vh]">
                <div class="lg:w-1/2 space-y-4">
                    <h3 class="text-2xl font-medium text-blue-400">Crypto Wallet Solutions</h3>
                    <p class="text-gray-300">
                        Custom-built wallets that support multi-currency transactions with military-grade encryption and seamless UX.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="relative py-24 max-lg:py-12 bg-gradient-to-br from-white via-blue-50 to-blue-100 overflow-hidden">
        <div class="w-[80%] max-lg:w-[85%] max-lg:w-[85%] mx-auto text-center mb-16 max-md:mb-8     ">
            <h2 class="text-5xl max-lg:text-4xl font-bold text-gray-900 mb-4">Industries We Empower</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Blockchain is transforming industries — from financial institutions to creative ecosystems.
            </p>
        </div>


        <div class=" w-[80%] max-lg:w-[85%]  mx-auto grid grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1 gap-3 max-md:flex-col max-lg:gap-6 ">


            <div class="  bg-white rounded-3xl overflow-hidden shadow-lg relative group">
                <img src="/asset/finance.jpg" alt="Finance" class="w-full h-[40vh] max-lg:h-[30vh] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Finance & Banking</h3>
                    <p class="text-gray-600 text-sm">
                        Faster, transparent cross-border payments and digital asset management.
                    </p>
                </div>
            </div>

            <div class="  bg-white rounded-3xl overflow-hidden shadow-lg relative group">
                <img src="/asset/supplychin.avif" alt="Supply Chain" class="w-full h-[40vh] max-lg:h-[30vh] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Supply Chain</h3>
                    <p class="text-gray-600 text-sm">
                        Trace every product lifecycle with immutable blockchain records.
                    </p>
                </div>
            </div>


            <div class="  bg-white rounded-3xl overflow-hidden shadow-lg relative group">
                <img src="/asset/healthcare1.jpg" alt="Healthcare" class="w-full h-[40vh] max-lg:h-[30vh] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Healthcare</h3>
                    <p class="text-gray-600 text-sm">
                        Enhancing data security and transparency for patient records.
                    </p>
                </div>
            </div>


            <div class="  bg-white rounded-3xl overflow-hidden shadow-lg relative group">
                <img src="/asset/buil.avif" alt="Real Estate" class="w-full h-[40vh] max-lg:h-[30vh] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Real Estate</h3>
                    <p class="text-gray-600 text-sm">
                        Tokenization of properties and smart contracts for transparent deals.
                    </p>
                </div>
            </div>

        </div>
    </section>





    <section class="relative bg-white py-24 max-lg:py-12 overflow-hidden">



        <div class="relative w-[80%] max-lg:w-[85%]  mx-auto grid md:grid-cols-2 gap-12 items-center">


            <div class="space-y-6 max-md:text-center">
                <h2 class="max-lg:text-3xl text-5xl font-semibold text-gray-900 leading-tight">
                    Let’s Build Your <span class="text-blue-600">Blockchain Future</span>
                </h2>
                <p class="text-gray-600 max-w-md">
                    From strategy to deployment, we craft blockchain solutions that are secure, scalable, and built for tomorrow’s business ecosystem.
                </p>
                <div>
                    <a href="/get-in-touch"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-lg shadow-md transition-all">
                        Get in Touch
                    </a>
                </div>
            </div>


            <div class="relative">
                <img src="/asset/blockchain1.jpg" alt="Blockchain Future"
                    class="w-full h-[60vh] max-lg:h-[30vh]  object-cover rounded-2xl shadow-lg">

                <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/10 via-transparent to-transparent rounded-2xl"></div>
            </div>
        </div>
    </section>





    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>


</body>

</html>