<?php
$page_title = "mobileapp_developement"
?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>



    <style>
        .hero-bg {
            background-image: url('/asset/framework (1).jpg');
            background-size: cover;
            background-position: top;
            position: relative;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.85) 30%, rgba(0, 0, 0, 0.1) 100%);
            z-index: 1;
        }

        @keyframes floatUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .animate-float {
            animation: floatUpDown 3s ease-in-out infinite;
        }
    </style>
    <div class="relative overflow-hidden">

        <div class="hero-bg  h-[90vh]  max-lg:h-[40vh] max-md:h-[60vh]    flex items-center relative z-10 text-white">
            <div class="container mx-auto w-[80%] max-lg:w-[85%] relative z-20 flex flex-col md:flex-row items-center justify-between gap-10">


                <div class="md:w-1/2 space-y-6">
                    <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold leading-tight">
                        Expert Mobile App <br />
                        <span class="text-blue-500">Development</span>
                    </h1>
                    <p class="text-lg text-indigo-100 max-w-md">
                        We build fast, scalable mobile apps tailored to your business.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/getquote" class="bg-blue-600 hover:bg-blue-600 text-white font-medium py-2.5 px-6 rounded-lg transition flex items-center gap-2">
                            Build Your App
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="bg-white py-20 max-lg:py-12">
        <div class="w-[80%] max-lg:w-[85%] mx-auto grid grid-cols-2 max-lg:grid-cols-1 gap-12 items-center">

            <div class="max-md:text-left">
                <h2 class="max-md:text-2xl text-5xl max-lg:text-4xl font-medium text-gray-800 mb-6">
                    Start-to-end app development agency
                </h2>
                <p class="text-gray-500 mb-4">
                    Pellentesque posuere vestibulum lorem, ut efficitur erat tristique sed. Ut vitae tincidunt ante.
                </p>
                <p class="text-gray-500 mb-8 max-lg:mb-0">
                    Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.
                </p>

            </div>


            <div class="grid grid-cols-2 gap-6 max-md:grid-cols-1">

                <div class="bg-white shadow-md p-6 rounded-t-[40px] rounded-bl-[40px] hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 hover:text-white transition-all duration-300 group">
                    <div class="text-blue-500 group-hover:text-white mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 01-8 0"></path>
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.045 12.045 0 01.84 2.098L12 19l-7-4.324a12.045 12.045 0 01.84-2.098L12 14z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium mb-2">Mobility Services Strategy</h4>
                    <p class="text-sm">Morbi pharetra sapien ut mattis viverra. Curabitur sit amet mattis.</p>
                </div>

                <div class="bg-gradient-to-r from-blue-600 to-cyan-400 rounded-t-[40px] rounded-br-[40px] text-white shadow-md p-6  transition-all duration-300">
                    <div class="mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4h16v16H4z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4 class="font-medium mb-2">Design & User Experience</h4>
                    <p class="text-sm">Donec pellentesque turpis ut lorem imperdiet semper viverra.</p>
                </div>


                <div class="bg-white shadow-md p-6  rounded-b-[40px] rounded-tl-[40px] hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 hover:text-white transition-all duration-300 group">
                    <div class="text-blue-500 group-hover:text-white mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 20l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 12l9-5-9-5-9 5 9 5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium mb-2">Native App Development</h4>
                    <p class="text-sm">Proin arcu ligula, malesuada id tincidunt laoreet.</p>
                </div>

                <div class="bg-white shadow-md p-6 rounded-b-[40px] rounded-tr-[40px] hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 hover:text-white transition-all duration-300 group">
                    <div class="text-blue-500 group-hover:text-white mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3v18h18"></path>
                            <path d="M18 13l-4-4-4 4"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium mb-2">Maintenance & Monitoring</h4>
                    <p class="text-sm">Facilisi arcu ligula, malesuada id tincidunt laoreet.</p>
                </div>
            </div>
        </div>
    </section>



    <div class="container mx-auto py-16 max-lg:py-12  bg-gray-100  rounded-tl-[20%] max-md:rounded-none rounded-br-[20%] max-lg:rounded-none">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 max-lg:gap-3">

            <div class="w-full md:w-1/2 lg:w-5/12 flex justify-center ">
                <div class="relative w-64 max-md:w-40">


                    <div class="bg-gray-800 rounded-3xl shadow-xl overflow-hidden border-8 border-gray-900">

                        <div class="bg-blue-500 h-6 relative">
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-20 h-4 bg-gray-800 rounded-b-lg"></div>
                        </div>

                        <div class="bg-white h-full">

                            <div class="p-2 bg-blue-500">
                                <div class="bg-white rounded-md flex items-center px-3 py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <span class="ml-2 text-xs text-gray-400">Apartments...</span>
                                </div>
                            </div>

                            <div class="">
                                <img src="/asset/image/m1 (1).jpg" class="w-full h-full object-cover" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/2 lg:w-7/12 space-y-8 max-md:w-[85%]">

                <div>
                    <div class="flex items-center gap-2  mb-2">
                        <div class="flex items-center justify-center w-16 h-16  max md:px-4 max-md:py-1 max-md:text-xs max-md:w-8 max-md:h-8 rounded-full bg-blue-100 text-blue-500 font-medium text-xl">1</div>
                        <h3 class="text-lg font-medium text-gray-700 max-md:text-sm">Design and UX that ensures your app will be loved and used</h3>
                    </div>
                    <ul class="ml-12 space-y-2 max-md:text-xs">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Quisque nec consectetur arcu. Duis tellus ante, sodales sed molestie at, sagittis</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Id risque. Quisque condimentum libero arcu. Mauris tellus sem, ultrices varius</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">nisi at.</p>
                        </li>
                    </ul>
                </div>


                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <div class="flex items-center justify-center w-16 h-16 max md:px-4 max-md:py-1 max-md:text-xs max-md:w-8 max-md:h-8   rounded-full bg-blue-100 text-blue-500 font-medium text-xl">2</div>
                        <h3 class="text-lg font-medium text-gray-700 max-md:text-sm">Enterprise-grade development secures reliability and quality</h3>
                    </div>
                    <ul class="ml-12 space-y-2 max-md:text-xs">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Praesent tortor nulla, ullamcorper vel ante at, varius tincidunt augue. Cras vitae</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">consectetur arcu. Proin at velit vel risus elementum accumsan sed non neque.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Aenean risus.</p>
                        </li>
                    </ul>
                </div>


                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <div class="flex items-center justify-center  w-16 h-16 max md:px-4 max-md:py-1 max-md:text-xs max-md:w-8 max-md:h-8  rounded-full bg-blue-100 text-blue-500 font-medium text-xl">3</div>
                        <h3 class="text-lg font-medium text-gray-700 max-md:text-sm">A proven and tested process guarantees your success</h3>
                    </div>
                    <ul class="ml-12 space-y-2 max-md:text-xs">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Aliquam bibendum risit ut ante cursus, et efficitur lectus rutrum. Maecenas ac</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">venenatis lorem, non ultrices sem. Duis elit metus, ullamcorper sed ante sed,</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">viverra bibendum neque.</p>
                        </li>
                    </ul>
                </div>


                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <div class="flex items-center justify-center  w-16 h-16 max md:px-4 max-md:py-1 max-md:text-xs max-md:w-8 max-md:h-8  rounded-full bg-blue-100 text-blue-500 font-medium text-xl">4</div>
                        <h3 class="text-lg font-medium text-gray-700 max-md:text-sm">Start-to-end app development agency</h3>
                    </div>
                    <ul class="ml-12 space-y-2 max-md:text-xs">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">Cras imperdiet faucibus sem, a dignissim urna feugiat sed. Interdum et</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">malesuada fames ac ante ipsum primis in faucibus. Pellentesque possuere</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <p class="text-gray-500">vestibulum lorem.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>





    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>