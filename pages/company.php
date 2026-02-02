<style>
    .owl-nav,
    .owl-dots {
        display: none !important;
    }
</style>

<section class="py-16 bg-white border-t border-gray-200 overflow-hidden">
    <div class="container mx-auto w-[80%] text-center">
        <h2 class="text-3xl max-md:text-2xl font-normal text-gray-800 mb-10 uppercase tracking-wide">
            Companies We Have Worked For
            <span class="block w-20 h-1 bg-gradient-to-r from-blue-600 to-blue-300 mx-auto mt-2"></span>
        </h2>

        <?php
        // All client logos
        $logos = [
            ["/asset/Alloy-Nation1.png", "Alloy Nation"],
            ["/asset/logos/ashira-logo.jpg", "Ashira"],
            ["/asset/logos/ycafe-logo.png", "Y Cafe"],
            ["/asset/logos/fairview-logo.png", "Fairview"],
            ["/asset/logos/humblehorse.png", "Humble Horses"],
            ["/asset/Chellas.png", "Chellas"],
            ["/asset/logos/impact-logo.png", "Impact"],
            ["/asset/Khas.png", "Khas"],
            ["/asset/Gurukripa.png", "Gurukripa"],
            ["/asset/logos/mingyang-logo.jpg", "Mingyang"],
            ["/asset/Satus-sweets.png", "Satus Sweets"],
            ["/asset/Veor.png", "Veor"],
            ["/asset/logos/fillit.jpg", "Fillit"],
            ["/asset/logos/vikaslogo.png", "Vikas Academy"],
            ["/asset/logos/ayurlogo.jpg", "Ayur"],
            ["/asset/logos/vi3logo.jpg", "Vi3"],
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
            ["/asset/logos/gurukrupa.png", "Gurukrupa"],
            ["/asset/logos/balajigas.png", "Balaji Gas"],
            ["/asset/logos/fineprint.webp", "Fineprint"],
            ["/asset/logos/weldfab.webp", "Weldfab"],
            ["/asset/logos/dreamkichen.png", "Dream Kitchen"],
            ["/asset/logos/crizio.png", "Crizio"],
            ["/asset/logos/snackita.png", "Snackita"],
            ["/asset/logos/mmid.png", "MMID"],
            ["/asset/logos/saptam.png", "Saptam"],
            ["/asset/logos/bloom.png", "Bloom"],
            ["/asset/logos/fbm.png", "FBM"]
        ];

        // Create reversed array for bottom carousel
        $logos_reversed = array_reverse($logos);
        ?>

        <!-- Top Carousel (Left → Right, Normal Order) -->
        <div class="owl-carousel owl-theme rudra-top-carousel mb-10">
            <?php foreach ($logos as $logo): ?>
                <div class="flex items-center justify-center p-4 bg-white rounded-xl shadow-sm h-28">
                    <img src="<?= $logo[0] ?>" alt="<?= htmlspecialchars($logo[1]) ?>" class="max-h-20 max-w-[150px] object-contain" />
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Carousel (Right → Left, Reversed Order) -->
        <div class="owl-carousel owl-theme rudra-bottom-carousel max-md:hidden">
            <?php foreach ($logos_reversed as $logo): ?>
                <div class="flex items-center justify-center p-4 bg-white rounded-xl shadow-sm h-28">
                    <img src="<?= $logo[0] ?>" alt="<?= htmlspecialchars($logo[1]) ?>" class="max-h-20 max-w-[150px] object-contain" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Top carousel (normal direction)
        $(".rudra-top-carousel").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 1500,
            autoplayHoverPause: false,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                640: {
                    items: 4
                },
                1024: {
                    items: 6
                }
            }
        });

        // Bottom carousel (reversed direction)
        $(".rudra-bottom-carousel").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplaySpeed: 1800,
            autoplayHoverPause: false,
            rtl: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                640: {
                    items: 4
                },
                1024: {
                    items: 6
                }
            }
        });
    });
</script>




<!-- <section class="relative py-16 bg-gray-100 bg-cover bg-center bg-no-repeat" style="background-image: url(/asset/testimonialbg.jpg);">
   
    <div class="absolute inset-0 bg-gradient-to-b from-black/100 to-white opacity-75"></div>
    <div class="w-[80%] mx-auto  relative">
       
        <div class="mb-6 ">
            <button class="border border-white text-white font-medium rounded-full px-8 py-2">
                Testimonials
            </button>
        </div>

       
        <div class="mb-10 relative">
            <h2 class="text-4xl font-medium text-white">What our <span class="text-white bg-red-600 px-2 py-1 rounded-sm"> client's say</h2>
          
            <button class="custom-prev absolute right-8 top-1/2 transform -translate-y-1/2 -translate-x-4 bg-white text-gray-600 rounded-full w-12 h-12 flex items-center justify-center shadow-md z-10 focus:outline-none">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button class="custom-next absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 bg-red-600 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-md z-10 focus:outline-none">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        
        <div class="custom-testimonial-wrapper relative">
            <div class="custom-testimonial-carousel text-sm">
                
                <div class="p-2">
                    <div class="bg-white rounded-2xl p-8 shadow-sm h-full">
                        <div class="flex items-center mb-6">
                            <div class="h-16 w-16 rounded-full overflow-hidden">
                                <img src="/asset/1 (1).jpeg" alt="Amit Sharma" class="h-full w-full object-cover" />
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg text-gray-800">AmitA Sharma</h4>
                                <p class="text-gray-500">IT Project Manager</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-600">"RudraTech IT Services has been instrumental in transforming our digital infrastructure. Their expertise and support have streamlined our operations, making our workflow more efficient."</p>
                        </div>
                        <div class="flex mb-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            <span>Posted on: 15.03.2024</span>
                        </div>
                    </div>
                </div>

              
                <div class="p-2">
                    <div class="bg-white rounded-2xl p-8 shadow-sm h-full ">
                        <div class="flex items-center mb-6">
                            <div class="h-16 w-16 rounded-full overflow-hidden">
                                <img src="/asset/1 (2).jpeg" alt="Priya Deshmukh" class="h-full w-full object-cover" />
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg text-gray-800">Priyank Bhatiya</h4>
                                <p class="text-gray-500">Entrepreneur</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-600">"Their web development team delivered a seamless and visually appealing website for our business. The user-friendly design and robust backend have greatly improved our customer engagement."</p>
                        </div>
                        <div class="flex mb-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            <span>Posted on: 22.02.2024</span>
                        </div>
                    </div>
                </div>

                
                <div class="p-2">
                    <div class="bg-white rounded-2xl p-8 shadow-sm h-full">
                        <div class="flex items-center mb-6">
                            <div class="h-16 w-16 rounded-full overflow-hidden">
                                <img src="/asset/1 (3).jpeg" alt="Ravi Iyer" class="h-full w-full object-cover" />
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg text-gray-800">Ravina Iyer</h4>
                                <p class="text-gray-500">Software Developer</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-600">"I am extremely satisfied with RudraTech’s custom software solutions. Their team understood our needs perfectly and provided us with a scalable and efficient system."</p>
                        </div>
                        <div class="flex mb-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            <span>Posted on: 05.01.2024</span>
                        </div>
                    </div>
                </div>

               
                <div class="p-2">
                    <div class="bg-white rounded-2xl p-8 shadow-sm h-full">
                        <div class="flex items-center mb-6">
                            <div class="h-16 w-16 rounded-full overflow-hidden">
                                <img src="/asset/1(4).jpeg" alt="Neha Kapoor" class="h-full w-full object-cover" />
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg text-gray-800">Neha Kapoor</h4>
                                <p class="text-gray-500">Startup Founder</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-600">"Their app development team exceeded our expectations. The mobile app they built for us is intuitive, responsive, and has received great feedback from our users."</p>
                        </div>
                        <div class="flex mb-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            <span>Posted on: 10.12.2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<script>
    $(document).ready(function() {
        // Initialize the custom carousel
        $('.custom-testimonial-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            arrows: true,
            prevArrow: $('.custom-prev'),
            nextArrow: $('.custom-next'),
            infinite: true,
            speed: 500,
            cssEase: 'ease',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>