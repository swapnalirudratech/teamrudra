<?php
$page_title = "healthcare"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>





<style>
    @keyframes scroll {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-50%);
        }
    }

    .carousel-scroll {
        animation: scroll 20s linear infinite;
    }

    .carousel-container:hover .carousel-scroll {
        animation-play-state: paused;
    }
</style>



<body>

    <?php include "include/navbar.php" ?>



    <section class="relative bg-gradient-to-r from-pink-50 to-blue-50 py-12 max-md:py-8 overflow-hidden ">
        <div class="w-[80%] mx-auto grid md:grid-cols-2 items-center gap-12 max-md:w-[90%] max-md:gap-4">


            <div class="space-y-6 animate-fade-in max-md:text-center">
                <h1 class="text-5xl max-lg:text-3xl font-bold leading-tight text-gray-900">
                    Turn <span class="text-pink-600">Swipes</span> Into Success
                    Build Your <span class="underline decoration-wavy decoration-pink-400">Dating App</span> With Us
                </h1>
                <p class="text-gray-600 text-base max-lg:text-sm max-md:hidden">
                    Transform your unique dating concept into the next big platform.
                    RudraTech builds beautiful, scalable, and high-performing dating apps that make meaningful connections happen.
                </p>
                <a href="/get-in-touch"
                    class="inline-flex items-center bg-pink-600  text-white max-lg:text-sm  max-md:px-3 max-md:py-2 px-6 py-3 rounded-full text-lg max-md:text-base  font-medium hover:bg-pink-700 transition">
                    Get Free Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>


            <div class="relative text-center">

                <div id="hearts-container" class="absolute inset-0 pointer-events-none"></div>
                <div
                    class="phone-frame w-[260px] h-[480px] max-lg:w-[160px] max-lg:h-[300px] mx-auto rounded-[2rem] max-md:rounded-[1.5rem] border-8 border-gray-900 overflow-hidden shadow-2xl bg-black relative">


                    <div class="carousel-container relative w-full h-full overflow-hidden">
                        <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out">
                            <img src="/asset/d1(1).jpg" alt="Slide 1" class="w-full h-full object-cover flex-shrink-0 rounded-3xl">
                            <img src="/asset/d1(2).jpg" alt="Slide 2" class="w-full h-full object-cover flex-shrink-0 rounded-3xl">
                            <img src="/asset/d1.jpg" alt="Slide 3" class="w-full h-full object-cover flex-shrink-0 rounded-3xl">
                            <!-- <img src="/" alt="Slide 4" class="w-full h-full object-cover flex-shrink-0"> -->
                        </div>
                    </div>


                    <div id="carousel-dots" class="flex justify-center gap-2 mt-3">
                        <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full"></button>
                        <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full"></button>
                        <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full"></button>
                        <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-20 bg-white max-lg:py-12 ">
        <div class="w-[85%] mx-auto max-md:w-[90%]">
            <div class="grid md:grid-cols-2 gap-16 items-center max-lg:gap-8">
                <div class="relative max-md:order-2">
                    <div class="aspect-square rounded-3xl shadow-2xl flex items-center justify-center">
                        <img src="/asset/d2.jpg" class="w-full h-full object-cover rounded-3xl" alt="">
                    </div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 max-md:w-16 max-md:h-16 bg-gray-200 rounded-full opacity-50"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 max-md:w-16 max-md:h-16 bg-gray-200 rounded-full opacity-50"></div>
                </div>
                <div>
                    <h2 class="text-5xl max-lg:text-2xl font-bold  mb-6">Built for Modern Dating</h2>
                    <div class="space-y-6 max-lg:space-y-3">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">✓</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold  mb-2">Video Profiles</h3>
                                <p class="text-gray-600">Showcase your personality with video introductions and stories</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">✓</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold  mb-2">Interest-Based Matching</h3>
                                <p class="text-gray-600">Connect with people who share your hobbies and passions</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">✓</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold  mb-2">Virtual Events</h3>
                                <p class="text-gray-600">Join themed events and speed dating sessions from anywhere</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">✓</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold  mb-2">Verified Profiles</h3>
                                <p class="text-gray-600">Enhanced safety with photo and identity verification</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="pb-10 bg-white overflow-hidden ">
        <div class="w-[85%] mx-auto max-md:w-[90%]">
            <div class=" mb-16  ">
                <h2 class="text-5xl max-lg:text-2xl font-bold text-gray-900 mb-4 leading-[1.3] max-md:leading-tight ">
                    How Your Dating App Development <br> Look When It Gets Ready
                </h2>


                <p class="text-xl text-gray-600  max-md:w-full max-md:text-base">
                    Explore the stunning user interface and seamless experience we deliver
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div class="space-y-8 max-md:order-2 ">
                    <div class="max-md:text-center border-l-4 max-md:border-l-0 max-md:border-b-4 border-pink-600 pl-6 max-md:pl-0 max-md:pb-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Intuitive User Interface</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Clean, modern design that makes navigation effortless. Every element is carefully crafted to provide the best user experience, from smooth animations to intuitive gestures.
                        </p>
                    </div>

                    <div class="max-md:text-center border-l-4 max-md:border-l-0 max-md:border-b-4 border-pink-600 pl-6 max-md:pl-0 max-md:pb-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Profile Customization</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Rich profile pages with photo galleries, video introductions, and detailed preferences. Users can showcase their personality with customizable themes and layouts.
                        </p>
                    </div>

                    <div class="max-md:text-center border-l-4 max-md:border-l-0 max-md:border-b-4 border-pink-600 pl-6 max-md:pl-0 max-md:pb-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Smart Discovery Features</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Advanced swipe mechanics with super likes, rewind options, and intelligent filters. Our discovery screen adapts to user preferences in real-time.
                        </p>
                    </div>

                    <div class="max-md:text-center border-l-4 max-md:border-l-0 max-md:border-b-4 border-pink-600 pl-6 max-md:pl-0 max-md:pb-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Engaging Chat Experience</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Modern messaging interface with emoji reactions, GIF support, voice messages, and video calls. Connect with matches through multiple engaging ways.
                        </p>
                    </div>

                    <div class="max-md:text-center border-l-4 max-md:border-l-0  border-pink-600 pl-6 max-md:pl-0 ">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Match Analytics Dashboard</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Track your dating journey with beautiful analytics, match insights, and compatibility scores. Understand what works best for you.
                        </p>
                    </div>

                    <div class="pt-6 max-md:pt-0 max-md:text-center ">
                        <button class="bg-pink-600 text-white px-8 py-4 rounded-full font-bold hover:bg-pink-700 transition-colors shadow-lg">
                            Get Started
                        </button>
                    </div>
                </div>

                <div class="relative max-md:order-1">
                    <div class="carousel-container h-[700px] max-md:h-[500px] overflow-hidden  bg-pink-50 relative">

                        <div class="absolute top-0 left-0 right-0 h-32 bg-gradient-to-b from-white to-transparent z-10"></div>
                        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent z-10"></div>


                        <div class="carousel-scroll space-y-6 py-6">


                            <div class=" mx-auto w-80 p-6">
                                <div class="bg-white rounded-lg p-6 shadow-md">
                                    <div class="flex items-center space-x-4 mb-6">
                                        <img src="/asset/1 (1).jpeg" class="w-20 h-20 rounded-full object-cover" alt="Alina Smith">
                                        <div class="flex-1">
                                            <div class="font-semibold text-lg max-md:text-base ">Alina Smith</div>
                                            <div class="text-sm text-gray-500">New York, USA</div>
                                        </div>
                                    </div>
                                    <div class="space-y-3 description">
                                        <p class="text-sm leading-relaxed">
                                            Passionate developer who loves hiking, photography, and exploring new cuisines. Looking for someone to share adventures with.
                                        </p>
                                    </div>
                                    <div class="mt-6 grid grid-cols-3 gap-2">
                                        <div class="aspect-square rounded overflow-hidden">
                                            <img src="/asset/1 (1).jpeg" class="w-full h-full object-cover" alt="">
                                        </div>
                                        <div class="aspect-square rounded overflow-hidden">
                                            <img src="/asset/1 (1).jpeg" class="w-full h-full object-cover" alt="">
                                        </div>
                                        <div class="aspect-square rounded overflow-hidden">
                                            <img src="/asset/1 (1).jpeg" class="w-full h-full object-cover" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-sm font-semibold text-gray-700">User Profile</p>
                            </div>


                            <div class=" mx-auto w-80 p-6">
                                <img src="/asset/da4.webp" alt="">
                            </div>


                            <div class=" mx-auto w-80 p-6">
                                <div class="bg-white rounded-lg p-6 shadow-md">
                                    <div class="aspect-[3/4] rounded-lg overflow-hidden mb-4">
                                        <img src="/asset/img5 (2).jpg" class="w-full h-full object-cover" alt="John Doe">
                                    </div>
                                    <div class="flex justify-center space-x-4">
                                        <div class="w-14 h-14 rounded-full overflow-hidden">
                                            <img src="/asset/1 (3).jpeg" class="w-full h-full object-cover" alt="">
                                        </div>
                                        <div class="w-16 h-16 rounded-full overflow-hidden">
                                            <img src="/asset/img6.jpg" class="w-full h-full object-cover" alt="">
                                        </div>
                                        <div class="w-14 h-14 rounded-full overflow-hidden">
                                            <img src="/asset/1 (1).jpeg" class="w-full h-full object-cover" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-sm font-semibold text-gray-700">Discovery Screen</p>
                            </div>


                            <div class=" mx-auto w-80 p-6">
                                <div class="bg-white rounded-lg p-6 shadow-md">
                                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b">
                                        <img src="/asset/img5 (2).jpg" class="w-12 h-12 rounded-full object-cover" alt="John Doe">
                                        <div class="flex-1">
                                            <div class="font-semibold">John Doe</div>
                                            <div class="text-xs text-gray-500">Online</div>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex justify-end">
                                            <div class="bg-blue-500 text-white rounded-lg p-3 max-w-xs">
                                                Hey! How was your weekend?
                                            </div>
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="bg-gray-200 rounded-lg p-3 max-w-xs">
                                                It was great! Went hiking. You?
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <div class="bg-blue-500 text-white rounded-lg p-3 max-w-xs">
                                                Sounds fun! I stayed in and read a book.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 pt-4 border-t">
                                        <input type="text" placeholder="Type a message..." class="w-full h-10 px-4 rounded-full border border-gray-300 focus:outline-none">
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-sm font-semibold text-gray-700">Chat Interface</p>
                            </div>


                            <div class=" mx-auto w-80 p-6">
                                <div class="bg-white rounded-lg p-6 shadow-md space-y-4">
                                    <div class="flex items-center space-x-3 pb-3 border-b">
                                        <img src="/asset/img6.jpg" class="w-16 h-16 rounded-full object-cover" alt="">
                                        <div class="flex-1">
                                            <div class="font-semibold">Emily R.</div>
                                            <div class="text-sm text-gray-500">Los Angeles, 25</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3 pb-3 border-b">
                                        <img src="/asset/1 (3).jpeg" class="w-16 h-16 rounded-full object-cover" alt="">
                                        <div class="flex-1">
                                            <div class="font-semibold">Michael B.</div>
                                            <div class="text-sm text-gray-500">Chicago, 27</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3 pb-3 border-b">
                                        <img src="/asset/1 (1).jpeg" class="w-16 h-16 rounded-full object-cover" alt="">
                                        <div class="flex-1">
                                            <div class="font-semibold">Sophie L.</div>
                                            <div class="text-sm text-gray-500">Miami, 23</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-sm font-semibold text-gray-700">Matches List</p>
                            </div>


                            <div class=" mx-auto w-80 p-6">
                                <div class="bg-white rounded-lg p-6 shadow-md space-y-4">
                                    <div class="flex items-center justify-between pb-3 border-b">
                                        <div class="font-medium">Notifications</div>
                                        <input type="checkbox" class="toggle-checkbox" checked>
                                    </div>
                                    <div class="flex items-center justify-between pb-3 border-b">
                                        <div class="font-medium">Location Sharing</div>
                                        <input type="checkbox" class="toggle-checkbox">
                                    </div>
                                    <div>
                                        <div class="font-medium mb-2">Preferences</div>
                                        <div class="flex justify-between text-sm">
                                            <span>Age: 20-30</span>
                                            <span>Distance: 10 km</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-sm font-semibold text-gray-700">Settings & Preferences</p>
                            </div>

                        </div>
                    </div>


                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-gray-200 rounded-full opacity-30 blur-xl"></div>
                    <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-gray-300 rounded-full opacity-20 blur-xl"></div>
                </div>

            </div>
        </div>
    </section>



    <style>
        .carousel-item {
            position: relative;
            transition: transform 0.5s ease;
        }

        .carousel-item img {
            width: 200px;

            border-radius: 20px;
            transition: transform 0.5s ease;
        }

        @media (max-width: 768px) {
            .owl-carousel .owl-item img {
                width: 180px;
                height: auto;
                margin: auto;
            }
        }

        .owl-item.center .carousel-item img {
            transform: scale(1.1);

            border: #ff4b81 2px solid;
        }

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        .owl-nav button {
            display: none;
        }

        .owl-dots {
            text-align: center;
            margin-top: 15px;
        }

        .owl-stage {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>

    <div class="owl-carousel owl-theme w-[85%] mx-auto max-md:w-[90%]">
        <div class="carousel-item"><img src="/asset/da1 (3).png" alt="Slide 1"></div>
        <div class="carousel-item"><img src="/asset/da1 (1).png" alt="Slide 2"></div>
        <div class="carousel-item"><img src="/asset/db1 (2).png" alt="Slide 3"></div>
        <div class="carousel-item"><img src="/asset/db1 (1).png" alt="Slide 4"></div>
        <div class="carousel-item"><img src="/asset/da1 (2).png" alt="Slide 5"></div>
        <div class="carousel-item"><img src="/asset/db1 (3).png" alt="Slide 6"></div>


    </div>

    <div class="btndating text-center py-10 max-md:pt-0 max-md:pb-10">
        <a href="#"
            class="bg-pink-600 hover:bg-pink-700 text-white font-bold px-8 py-4  max-md:text-sm rounded-full inline-block transition-all duration-300">
            Let's Build Your Dating App
        </a>
    </div>


    <section id="admin-panel" class=" bg-gradient-to-r from-pink-50 to-white py-20 overflow-hidden max-lg:py-12 ">


        <div class="w-[85%] mx-auto max-md:w-[90%]">
            <div class="grid lg:grid-cols-2 gap-12 items-center">


                <div class="space-y-6 max-md:order-2">
                    <h2 class="text-5xl max-md:text-3xl font-bold text-gray-900">
                        Admin App
                    </h2>
                    <p class="text-gray-700 text-lg max-md:text-base ">
                        Manage your dating app effortlessly. Monitor users, track analytics, and control all app settings from a modern, intuitive admin interface.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="text-pink-500 text-xl"><i class="fa-solid fa-check"></i></span>
                            Real-time User Analytics
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-pink-500 text-xl"><i class="fa-solid fa-check"></i></span>
                            Content & Profile Management
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-pink-500 text-xl"><i class="fa-solid fa-check"></i></span>
                            Secure Settings & Permissions
                        </li>
                    </ul>

                </div>


                <div class="relative max-md:order-1">

                    <div class=" overflow-hidden ">
                        <img src="/asset/admindating.png" alt="Admin Panel Mockup" class="w-full h-auto">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="relative py-10 overflow-hidden bg-cover bg-center"
        style="background-image: url('/asset/bgbnr.jpg');">
        <!-- Overlay for better text readability -->
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <div class="w-[85%] mx-auto max-md:w-[90%] lg:flex lg:items-center lg:justify-between relative z-10">
            <div class="text-white w-full text-center ">
                <h1 class="text-4xl font-medium mb-2">Find Your Perfect Match Today!</h1>
                <p class="text-lg max-md:text-base  mb-8">Join thousands of singles and start your love story now.</p>
                <a href="#signup" class="inline-block bg-pink-600 text-white font-bold px-8 py-4 rounded-full shadow-lg hover:scale-105 transition-transform duration-300">
                    Start Matching Now
                </a>
            </div>
        </div>
    </section>




    <script>
        const heartsContainer = document.getElementById('hearts-container');

        function createHeart() {
            const heart = document.createElement('div');
            heart.innerHTML = '&#9829;';
            heart.style.color = 'pink';
            heart.style.position = 'absolute';
            heart.style.fontSize = Math.random() * 24 + 16 + 'px';
            heart.style.left = Math.random() * window.innerWidth + 'px';
            heart.style.top = window.innerHeight + 'px';
            heart.style.opacity = Math.random();
            heartsContainer.appendChild(heart);

            let speed = Math.random() * 2 + 1;
            const animate = () => {
                const top = parseFloat(heart.style.top);
                if (top < -50) {
                    heart.remove();
                    return;
                }
                heart.style.top = top - speed + 'px';
                requestAnimationFrame(animate);
            };
            animate();
        }

        // Generate hearts continuously
        setInterval(createHeart, 300);
    </script>




    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 40,
                center: true,
                items: 3,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
    <script>
        const track = document.getElementById('carousel-track');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = track.children.length;
        let index = 0;
        let autoSlide;

        function showSlide(i) {
            index = i;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, idx) => {
                dot.classList.toggle('bg-pink-500', idx === index);
                dot.classList.toggle('bg-gray-300', idx !== index);
            });
        }


        function startAutoSlide() {
            autoSlide = setInterval(() => {
                index = (index + 1) % totalSlides;
                showSlide(index);
            }, 3000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlide);
        }


        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                showSlide(i);
                stopAutoSlide();
                startAutoSlide();
            });
        });


        document.querySelector('.carousel-container').addEventListener('mouseenter', stopAutoSlide);
        document.querySelector('.carousel-container').addEventListener('mouseleave', startAutoSlide);


        showSlide(0);
        startAutoSlide();
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