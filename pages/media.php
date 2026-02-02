<?php
$page_title = "media"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>



<style>
    .gallery-item {
        transition: all 0.4s ease;
        transform: scale(1);
        opacity: 0.9;
    }

    .gallery-item:hover {
        transform: scale(1.03);
        opacity: 1;
        z-index: 10;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 0.8s ease forwards;
        opacity: 0;
    }

    .delay-1 {
        animation-delay: 0.1s;
    }

    .delay-2 {
        animation-delay: 0.2s;
    }

    .delay-3 {
        animation-delay: 0.3s;
    }

    .delay-4 {
        animation-delay: 0.4s;
    }

    .delay-5 {
        animation-delay: 0.5s;
    }

    .delay-6 {
        animation-delay: 0.6s;
    }

    .delay-7 {
        animation-delay: 0.7s;
    }

    .delay-8 {
        animation-delay: 0.8s;
    }

    .gradient-overlay {
        background: linear-gradient(to right, rgba(30, 41, 59, 0.8), rgba(30, 41, 59, 0.6));
    }
</style>



<body>

    <?php include "include/navbar.php" ?>

    <div class="w-full flex flex-col md:flex-row h-[85vh] max-md:h-[60vh] max-lg:h-[40vh] relative overflow-hidden bg-blue-50" style="background-image: url(/asset/testimonialbg.jpg); background-size: cover; background-position: center;">
        <!-- Left Side (Content) -->
        <div class="w-full md:w-[50%] flex items-center justify-center text-center md:text-left p-6 md:p-12 z-10 max-md:mt-20">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-snug font-[Poppins]">
                Media <br /> Moments With Our Team
            </h2>
        </div>

        <!-- Right Side -->
        <div class="w-full md:w-[50%] bg-blue-800 relative flex items-center justify-center flex-col text-white text-center max-md:p-0 p-8 z-20 md:rounded-bl-[100%]">
            <img src="/asset/media.png" alt="Media Showcase"
                class="w-[80%] md:w-[100%] max-w-sm md:max-w-none object-contain md:absolute md:right-24 md:bottom-0">
        </div>
    </div>



    <div class="py-20 px-6  text-center  max-w-4xl mx-auto max-md:py-12">
        <div class="flex flex-col bg-gray-50  items-center justify-center space-y-6 rounded-xl shadow-lg p-8 border border-blue-600 ">
            <!-- Icon Placeholder -->
            <div class="w-20 h-20 max-lg:w-16 max-lg:h-16 bg-blue-100 text-blue-600 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>
            </div>

            <!-- Text Content -->
            <h2 class="text-3xl font-normal text-gray-700">Media </h2>
            <p class="text-sm text-gray-600 max-w-xl max-md:text-xs">
                We’re crafting something exciting. Our latest press coverage, announcements, and media content will be available here soon.
            </p>

            <!-- Coming Soon Badge -->
            <span class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-md">
                Coming Soon
            </span>
        </div>
    </div>


<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>