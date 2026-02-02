<?php
$page_title = "Our Clients | RudraTech IT Service";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body class="font-sans text-gray-800 antialiased">

    <?php include "include/navbar.php" ?>

    <section class="relative w-full h-[60vh] lg:h-[70vh] flex items-center bg-cover bg-center bg-fixed" style="background-image: url(/asset/pack-banr.jpg);">
        <!-- <div class="absolute inset-0 bg-gray-900/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#172010]/90 to-transparent"></div> -->

        <div class="relative z-10 w-[80%] mx-auto text-center md:text-left">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6 drop-shadow-lg">
                    Welcome to Our <span class="text-blue-500">Client Portal</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-2xl drop-shadow-md">
                    Seamless collaboration starts here. Access your project updates, manage your services, and communicate directly with our team.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        At <span class="text-blue-600">RudraTech IT Service</span>
                    </h2>
                    <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                        <p>
                            We take immense pride in being the trusted technology partner for a diverse range of clients. Our unwavering commitment to delivering innovative IT solutions has helped us earn the loyalty of those who believe in our expertise.
                        </p>
                        <div class="border-l-4 border-blue-600 pl-6 bg-blue-50 py-4 pr-4 rounded-r-lg">
                            <p class="italic text-gray-800 font-medium">
                                "At RudraTech, we believe that our clients' success is our success."
                            </p>
                        </div>
                        <p>
                            We’re humbled by the opportunity to collaborate with remarkable teams and organizations across industries.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute top-4 left-4 w-full h-full border-2 border-blue-600 rounded-2xl z-0 transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2"></div>

                    <div class="relative z-10 overflow-hidden rounded-2xl border bg-white">
                        <img src="/asset/team2.png" alt="Team working" class="w-full h-auto object-cover transform transition duration-500 group-hover:scale-105">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 relative overflow-hidden">

        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 translate-x-1/3 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="w-[90%] mx-auto relative z-10">

            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    A <span class="text-blue-600">Trusted Brand</span> in Tech Solutions
                </h2>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mb-4"></div>
                <p class="text-gray-500 max-w-2xl mx-auto">
                    Delivering excellence and innovation you can rely on.
                </p>
            </div>

            <?php
            // Combined Logo Array
            $logos = [
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

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <?php foreach ($logos as $logo): ?>
                    <div class="group bg-white border border-gray-100 rounded-lg p-4 flex items-center justify-center h-28 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 relative overflow-hidden">

                        <div class="absolute inset-0 bg-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <img src="<?= $logo[0] ?>"
                            alt="<?= htmlspecialchars($logo[1]) ?>"
                            class="relative z-10 max-h-14 w-auto object-contain  transition-all duration-300 transform group-hover:scale-110">
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="py-16 bg-[#172010]">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to start your project?</h2>
            <p class="text-gray-300 mb-8">Join our list of satisfied clients and let's build something great together.</p>
            <a href="/getin-touch" class="inline-block bg-blue-600 text-white font-bold py-3 px-8 rounded-md shadow-lg hover:bg-blue-700 hover:shadow-blue-900/50 transition duration-300 transform hover:-translate-y-1">
                Contact Us Today
            </a>
        </div>
    </section>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>