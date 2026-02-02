<style>
    .perspective {
        perspective: 1000px;
    }

    .flip-card-inner {
        transition: transform 1s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        backface-visibility: hidden;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }

    .marquee-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .marquee-content {
        display: flex;
        animation: marquee 30s linear infinite;
        width: max-content;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .marquee-content:hover {
        animation-play-state: paused;
    }
</style>


<div class="w-full bg-gradient-to-t from-white to-gray-100 rounded-t-[50px] py-12">
    <h2 class="text-4xl max-md:text-3xl font-medium text-center mb-6">
        What Our Clients <span class="text-blue-600 ">Say About Us</span>
    </h2>
    <p class="text-center text-gray-600 mb-10"> 😊 100+ Satisfied Clients</p>

    <div class="marquee-container">
        <div class="marquee-content" id="marquee">
            <!-- Original Cards -->
            <div class="card-group flex gap-6 px-4">
                <div class="flip-card w-64 h-80 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">Tanvi Watwani</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Getting our work done from RudraTech IT Services has been an absolute pleasure. Their professional team are very supportive and dedicated to understand our unique needs and provided us the ' Snackita.in ' website beyond our expectations. If you are looking for Website maker then must go for *RudraTech*
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4 ">
                                <h4 class="font-semibold">Priti Kuniyath</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                We truly appreciate your team's creativity, professionalism, and attention to detail. You perfectly captured our vision and delivered a user-friendly, visually impressive website. Excellent work!
                            </p>

                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Kashesh Agarwaal</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                They are the best team you can work with for all your digital needs. I’m very impressed by their professionalism, dedication and attention to detail. They make a phenomenal team to work with and have so much respect towards their customers. Excellent service. Highly recommend them. They have me as their customer for life. Kudos to the entire team👏
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover  ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">Saloni Makhija</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                I was searching to create a software for my business and the Rudratech helped me in the same. They provided the best service for making my dream software. Thank you so much the Rudra team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Harsh Mulchandani</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Your hardwork and your team efforts make our good response to the business
                                Let us b together for further deals
                                Thank u so much
                                RudraIttech team and Rahul sir
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">Sharon Cardoz</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Getting our work done from RudraTech IT Services has been an absolute pleasure. Their professional team are very supportive and dedicated to understand our unique needs and provided us the software beyond our expectations. If you are looking for IT professionals please go for *RudraTech*
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80  cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Vikas Sawants Academy</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Best IT service by Rudra Tech Pvt. Ltd.
                                Both Directors Roshan & Rahul are very supportive & knowledgeable also very committed toward their commitment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Anchal Nihalani</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                I got perfect Accounting software for my accounts work , they understand my requirements very well and give Amazing results in response. </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80  cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Santosh Kalamkar</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Rudratech has got a very hard working team, there support and service is very prompt. </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">

                                    diaans kitchen</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                What i want i getted thank you rudratech to making my vision into reality also thanks to my collegue akshar who refer you
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80  cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    kunal gala</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                👌🏻 very good and reasonable specially very hardworking and polite</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">

                                    HARSH VALECHA</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Amazing hospitality and working according to our needs and best service
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80  cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Vikas Sawants Academy</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                Best IT service by Rudra Tech Pvt. Ltd.
                                Both Directors Roshan & Rahul are very supportive & knowledgeable also very committed toward their commitment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-64 h-80 mt-16 cursor-pointer perspective">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">
                        <div class="flip-card-front absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col justify-end  z-10 backface-hidden">
                            <img src="/asset/user.jpg" alt="Person" class="absolute inset-0 w-full h-full object-cover ">
                            <div class="z-10 text-white bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="font-semibold">
                                    Anchal Nihalani</h4>

                            </div>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white shadow-lg rounded-lg overflow-hidden p-4 backface-hidden transform rotate-y-180 flex items-center justify-center text-center">
                            <p class="text-gray-800 text-sm">
                                I got perfect Accounting software for my accounts work , they understand my requirements very well and give Amazing results in response. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Duplicate Cards for infinite scroll effect will be added by JavaScript -->
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.getElementById('marquee');
        const cardGroup = document.querySelector('.card-group');

        // Clone the card group to create an infinite loop effect
        const clone = cardGroup.cloneNode(true);
        marquee.appendChild(clone);

        // Function to adjust animation speed based on screen size
        function adjustMarqueeSpeed() {
            const marqueeContent = document.querySelector('.marquee-content');
            const speed = window.innerWidth > 768 ? '30s' : '20s';
            marqueeContent.style.animationDuration = speed;
        }

        // Call the function on load and resize
        adjustMarqueeSpeed();
        window.addEventListener('resize', adjustMarqueeSpeed);

        // Check if we need to add more clones for very wide screens
        function checkScreenWidth() {
            const container = document.querySelector('.marquee-container');
            const containerWidth = container.offsetWidth;
            const cardGroupWidth = cardGroup.offsetWidth;

            // If two copies of cards aren't enough to fill screen twice (for smooth looping)
            if (cardGroupWidth * 2 < containerWidth * 2) {
                const additionalClones = Math.ceil((containerWidth * 2) / cardGroupWidth) - 2;
                for (let i = 0; i < additionalClones; i++) {
                    const extraClone = cardGroup.cloneNode(true);
                    marquee.appendChild(extraClone);
                }
            }
        }

        // Run initial check
        setTimeout(checkScreenWidth, 100); // Short delay to ensure DOM is ready
    });
</script>