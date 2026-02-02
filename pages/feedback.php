<?php
$page_title = "website-designing";


?>


<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<body>

    <?php include "include/navbar.php" ?>


    <!-- Feedback Page - RudraTech IT Services -->
    <div class="min-h-screen bg-gray-50 text-gray-800 w-[80%] max-md:w-[85%] mx-auto max-md:pt-16">
        <!-- Hero Section -->
        <div class="relative bg-white ">
            <div class="w-full  py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl max-md:text-3xl max-md:text-center font-bold text-gray-900 leading-tight mb-4">
                        We'd love your <span class="text-blue-600">feedback</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-6 max-md:text-center max-md:text-sm">
                        Help us improve by sharing your experience with RudraTech IT Services.
                    </p>
                    <form class="space-y-6 bg-white p-6 rounded-2xl ">
                        <!-- Name Field -->
                        <div class="relative">
                            <input type="text" id="name" required
                                class="peer w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none bg-transparent pt-6 placeholder-transparent" />
                            <label for="name" class="absolute left-0 top-2 text-gray-500 text-sm transition-all 
                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-500 
                            peer-valid:top-0 peer-valid:text-sm peer-valid:text-blue-500">
                                Name
                            </label>
                        </div>


                        <!-- Email Field -->
                        <div class="relative">
                            <input type="email" id="email" required
                                class="peer w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none bg-transparent pt-6 placeholder-transparent" />
                            <label for="email" class="absolute left-0 top-2 text-gray-500 text-sm transition-all 
                        peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-500 
                        peer-valid:top-0 peer-valid:text-sm peer-valid:text-blue-500">
                                Email
                            </label>
                        </div>

                        <!-- Feedback Field -->
                        <div class="relative">
                            <textarea id="feedback" rows="4" required
                                class="peer w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none bg-transparent pt-6 resize-none placeholder-transparent"></textarea>
                            <label for="feedback" class="absolute left-0 top-2 text-gray-500 text-sm transition-all 
                        peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-500 
                        peer-valid:top-0 peer-valid:text-sm peer-valid:text-blue-500">
                                Your Feedback
                            </label>
                        </div>

                        <button type="submit" class="p-0 border-0 bg-transparent cursor-pointer ">
                            <img src="/asset/feedbk.png" alt="Submit Feedback" class="h-20 w-auto">
                        </button>



                    </form>
                </div>

                <!-- Creative Image -->
                <div class="relative">
                    <div class="w-full h-[400px] max-md:h-[300px] bg-gradient-to-tr from-blue-100 to-purple-100 rounded-3xl shadow-lg flex items-center justify-center p-4">
                        <img src="/asset/feedback.jpg" alt="Feedback" class="w-full h-full object-cover rounded-2xl mix-blend-multiply hover:scale-105 transition-transform duration-500" />
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'include/marquee.php' ?>
<?php include "include/upperfooter.php"; ?>
<?php include "include/footer.php" ?>

</body>

</html>