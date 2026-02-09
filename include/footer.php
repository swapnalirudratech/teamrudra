<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <style>
        .testimonial-slide {
            transition: all 0.5s ease;
        }

        .fade-enter {
            opacity: 0;
            transform: translateX(20px);
        }

        .fade-enter-active {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-leave {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-leave-active {
            opacity: 0;
            transform: translateX(-20px);
        }

        .gradient-text1 {
            background: linear-gradient(90deg, #e11d48 0%, #f97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Floating button styles */
        .floating-btn {
            position: fixed;
            right: 0;
            top: 61%;
            transform: translateY(-50%);
            z-index: 100;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .floating-btn {

                top: auto;
                bottom: 75px;
                transform: none;
            }
        }

        .floating-btn-inner {
            position: relative;
            overflow: hidden;
        }

        .floating-btn-inner::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.1) 50%,
                    rgba(255, 255, 255, 0) 100%);
            transform: rotate(45deg);
            animation: shimmer 3s infinite;
        }

        .attention-pulse {
            animation: attention-pulse 2s infinite;
        }

        @keyframes attention-pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(225, 29, 72, 0.7);
                transform: translateY(-50%) scale(1);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(225, 29, 72, 0);
                transform: translateY(-50%) scale(1.05);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(225, 29, 72, 0);
                transform: translateY(-50%) scale(1);
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        .btn-expand {
            transition: width 0.3s ease;
            overflow: hidden;
            white-space: nowrap;
        }

        .floating-btn:hover .btn-expand {
            width: 140px;
        }
    </style>
</head> -->





<!-- Floating Download Brochure Button -->
<div
    class=" hidden floating-btn attention-pulse hidden"
    x-data="{ showFullButton: false }"
    @mouseenter="showFullButton = true"
    @mouseleave="showFullButton = false"
    id="downloadButton">
    <div class="flex items-center">
        <a href="#" onclick="downloadBrochure(event)" class="floating-btn-inner bg-gradient-to-r from-red-600 to-red-700 text-white px-3 py-2 rounded-l-lg shadow-lg flex items-center justify-center transition duration-300 hover:from-red-700 hover:to-red-800">
            <div class="flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <div class="btn-expand" :class="showFullButton ? 'w-32' : 'w-0'">
                    <span class="text-xs ml-2 font-medium">Download Brochure</span>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Smooth WhatsApp Button -->
<div
    class=" hidden fixed bottom-1/2 right-0 max-lg:bottom-36 z-30 max-md:hidden"
    x-data="{ hover: false }"
    @mouseenter="hover = true"
    @mouseleave="hover = false">

    <a href="https://wa.me/7208344434?text=Hi%20Rudratech%20IT%20Service%2C%20I%E2%80%99m%20looking%20for%20a%20professional%20team%20to%20help%20me%20build%20a%20website%20or%20software%20solution.%20I%E2%80%99d%20love%20to%20discuss%20my%20requirements%20further."
        target="_blank"
        class="flex items-center bg-green-500 rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-500 ease-in-out overflow-hidden ">

        <div class="w-10 h-10 flex items-center justify-center">
            <i class="fab fa-whatsapp text-2xl text-white"></i>
        </div>

        <span
            class=" text-white font-medium whitespace-nowrap text-xs transition-all duration-500 ease-in-out"
            :class="hover ? 'opacity-100 max-w-xs' : 'opacity-0 max-w-0'">
            Chat on WhatsApp&nbsp;&nbsp;
        </span>
    </a>
</div>


<!-- Smooth Call Button -->
<div
    class=" hidden fixed bottom-[43%] max-lg:bottom-48 right-0 z-30 max-md:hidden"
    x-data="{ hover: false }"
    @mouseenter="hover = true"
    @mouseleave="hover = false">

    <a href="tel:7208344434"
        class="flex items-center bg-blue-500 rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-500 ease-in-out overflow-hidden ">

        <div class="w-10 h-10 flex items-center justify-center">
            <i class="fas fa-phone text-xl text-white"></i>
        </div>

        <span
            class="text-white font-medium whitespace-nowrap  transition-all duration-500 text-xs ease-in-out "
            :class="hover ? 'opacity-100 max-w-xs' : 'opacity-0 max-w-0'">
            Call Now&nbsp;&nbsp;
        </span>
    </a>
</div>

<div class="fixed right-0 top-1/2 -translate-y-1/2 z-[9999] flex flex-col items-end">

    <a href="https://wa.me/917208344434" target="_blank"
        class="group flex items-center justify-end bg-[#25D366] text-white h-14 w-14 hover:w-44 transition-all duration-300 ease-in-out overflow-hidden shadow-lg">
        <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap font-bold text-sm absolute right-16">
            WhatsApp Us
        </span>
        <div class="w-14 h-14 flex items-center justify-center shrink-0 bg-[#25D366]">
            <i class="fab fa-whatsapp text-2xl"></i>
        </div>
    </a>

    <a href="tel:+917208344434"
        class="group flex items-center justify-end bg-blue-600 text-white h-14 w-14 hover:w-44 transition-all duration-300 ease-in-out overflow-hidden shadow-lg border-t border-white/10">
        <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap font-bold text-sm absolute right-16">
            Call Now
        </span>
        <div class="w-14 h-14 flex items-center justify-center shrink-0 bg-blue-600">
            <i class="fas fa-phone text-xl"></i>
        </div>
    </a>

</div>


<!-- Advanced Floating Top-Down Scroll Button -->
<button id="scrollButton"
    class=" fixed z-50 bottom-[10%] right-1 max-md:right-0 max-lg:bottom-[8%]
           w-10 h-10 max-md:w-10 max-md:h-10 roundedflex items-center justify-center shadow-lg
           bg-gradient-to-br from-blue-500 to-purple-600 text-white border border-white/30
           hover:scale-110 transition-all duration-300 ease-in-out
           animate-pulseGlow"
    title="Scroll">
    <i class="fa-solid fa-chevron-down text-xs " id="scrollIcon"></i>
</button>

<script>
    const scrollButton = document.getElementById('scrollButton');
    const scrollIcon = document.getElementById('scrollIcon');

    function updateButton() {
        const scrollTop = window.scrollY;
        const scrollHeight = document.documentElement.scrollHeight;
        const innerHeight = window.innerHeight;

        if (scrollTop === 0) {
            // At top
            scrollIcon.className = "fa-solid fa-chevron-down text-lg";
            scrollButton.onclick = () => window.scrollTo({
                top: scrollHeight,
                behavior: 'smooth'
            });
        } else if (scrollTop + innerHeight >= scrollHeight - 2) {
            // At bottom
            scrollIcon.className = "fa-solid fa-chevron-up text-lg";
            scrollButton.onclick = () => window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        } else {
            // In between
            scrollIcon.className = "fa-solid fa-chevron-up text-lg";
            scrollButton.onclick = () => window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }

    window.addEventListener('scroll', updateButton);
    window.addEventListener('load', updateButton);
</script>

<style>
    .animate-pulseGlow {
        animation: pulseGlow 2s infinite;
    }
</style>







<script>
    function downloadBrochure(event) {
        event.preventDefault();
        const pdfUrl = '/path-to-your-brochure.pdf';
        const link = document.createElement('a');
        link.href = pdfUrl;
        link.download = 'company-brochure.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        showNotification();
    }

    function focusDownloadButton(event) {
        event.preventDefault();
        const downloadButton = document.getElementById('downloadButton');
        loadButton.classList.add('super-attention');
        window.scrollTo({
            top: window.innerHeight / 2,
            behavior: 'smooth'
        });
        downloadButton.style.animation = 'attention-pulse 0.5s 3';
        setTimeout(() => {
            downloadButton.classList.remove('super-attention');
            downloadButton.style.animation = '';
        }, 1500);
    }


    function showNotification() {

        const notification = document.createElement('div');
        notification.className = 'fixed bottom-4 right-4  bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform transition-all duration-500 translate-y-20 opacity-0';
        notification.innerHTML = `
        <div class="flex items-center">
          <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Brochure download started!</span>
        </div>
      `;


        document.body.appendChild(notification);


        setTimeout(() => {
            notification.classList.remove('translate-y-20', 'opacity-0');
        }, 100);


        setTimeout(() => {
            notification.classList.add('translate-y-20', 'opacity-0');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500);
        }, 3000);
    }
</script>



<?php include "pages/clientcarousel.php"; ?>


<div id="getInTouchBtn" class="fixed bottom-0 left-0 right-0 mx-auto w-full z-50 md:hidden transition-all duration-300 ease-in-out opacity-0 translate-y-10 pointer-events-none">
    <a href="/getin-touch" class="block w-full bg-blue-600 text-white text-center py-3 rounded shadow-lg text-base font-semibold hover:bg-blue-700">
        <i class=" fas fa-phone mr-2"></i> Get in Touch
    </a>
</div>

<script>
    let lastScrollTop = 0;
    const btn = document.getElementById('getInTouchBtn');

    window.addEventListener('scroll', function() {
        const st = window.pageYOffset || document.documentElement.scrollTop;

        if (st > lastScrollTop) {

            btn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            btn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
        } else {

            btn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
            btn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
        }

        lastScrollTop = st <= 0 ? 0 : st;
    }, false);
</script>




<footer class="bg-gray-800 text-gray-300 relative max-md:pb-12">



    <div class="w-[85%] mx-auto  py-12 flex max-lg:flex-col justify-between">

        <div class="w-full md:w-1/3">

            <div class="mb-6">
                <a href="/">
                    <div class="flex items-center text-xl md:text-3xl font-medium tracking-wider  ">
                        RudraTech
                    </div>
                </a>
            </div>
            <p class=" text-sm mb-4 w-full md:w-3/4">Your trusted partner for innovative IT solutions. We help businesses transform with technology.</p>


            <div class="mt-8 grid grid-cols-1 md:grid-cols-1 gap-2">
                <h3 class="text-lg font-medium">Contact Us</h3>
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class=" text-sm">Globe Business Park 331,

                        Ambernath<br></span>
                </div>
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2  mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class=" text-sm">+91-720 834 4434
                    </span>
                </div>
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2  mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class=" text-sm">business@teamrudra.com</span>
                </div>
            </div>

            <div class="flex mt-4 md:mt-8 flex-col w-max hidden ">
                <h3 class="text-lg font-medium mb-3">Find Us Online</h3>

                <div class="grid grid-cols-4 gap-3">

                    <a href="#" class="bg-blue-600 p-2 rounded-md flex items-center justify-center">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>


                    <a href="#" class="bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 p-2 rounded-md flex items-center justify-center">
                        <i class="fab fa-instagram text-white"></i>
                    </a>


                    <a href="#" class="bg-blue-500 p-2 rounded-md flex items-center justify-center">
                        <i class="fab fa-linkedin-in text-white"></i>
                    </a>
                    <a href="#" class="bg-gradient-to-tr from-green-400 via-green-500 to-green-600 p-2 rounded-md flex items-center justify-center">
                        <i class="fa-brands fa-x-twitter text-white"></i>
                    </a>
                </div>
            </div>

            <div class="w-full  rounded-lg  mt-8 max-lg:mb-4 ">
                <h3 class="text-base font-semibold text-white mb-2">Stay in the Loop</h3>
                <form class="flex ">
                    <input
                        type="email"
                        placeholder="Enter your email"
                        class=" px-3 py-2 text-sm text-gray-900 rounded-l-md border-none focus:outline-none max-lg:w-1/2"
                        required />
                    <button
                        type="submit"
                        class="bg-blue-600 text-white px-4 py-2 text-sm font-medium rounded-r-md hover:bg-blue-700 transition-all duration-200">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>



        <div class="w-full md:w-2/3 grid max-lg:grid-cols-1 grid-cols-2 lg:grid-cols-3 gap-12">

            <div>
                <h4 class="text-sm font-normal mb-4 border-b border-blue-500 pb-2">About Us</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-blue-400 transition">Any Grievance Home</a></li>
                    <li><a href="/about" class="hover:text-blue-400 transition">Know More About</a></li>
                    <li><a href="/client" class="hover:text-blue-400 transition">Our Supporter Clients</a></li>




                </ul>

            </div>

            <div>
                <h4 class="text-sm font-normal mb-4 border-b border-blue-500 pb-2">Our Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/website-design" class="hover:text-blue-400 transition">Website Designing</a></li>
                    <li><a href="/static-website-design" class="hover:text-blue-400 transition">Static Website Design</a></li>
                    <li><a href="/corporate-website-design" class="hover:text-blue-400 transition">Corporate Website Design</a></li>
                    <li><a href="/cms-development" class="hover:text-blue-400 transition">CMS Development</a></li>
                    <li><a href="/e-commerce-website" class="hover:text-blue-400 transition">E-commerce Website Development</a></li>

                </ul>
            </div>


            <div>
                <h4 class="text-sm font-normal mb-4 border-b border-blue-500 pb-2">Additional Services</h4>
                <ul class="space-y-2 text-sm">

                    <li><a href="/landing-page-website" class="hover:text-blue-400 transition">Landing Page Website</a></li>

                    <li><a href="/customize-website" class="hover:text-blue-400 transition">Custom Website Development</a></li>
                    <li><a href="/multi-vendor-website" class="hover:text-blue-400 transition">Multi Vendor Website Development</a></li>
                    <li><a href="/business-profile-website" class="hover:text-blue-400 transition">Business Profile Website</a></li>
                    <li><a href="/informative-website" class="hover:text-blue-400 transition">Informative Website</a></li>
                </ul>
            </div>


            <div>
                <h4 class="text-sm font-normal mb-4 border-b border-blue-500 pb-2">Policies & Contact</h4>
                <ul class="space-y-2 text-sm">

                    <li><a href="/email-hosting" class="hover:text-blue-400 transition">Email Hosting</a></li>
                    <li><a href="/domain" class="hover:text-blue-400 transition">Domain</a></li>
                    <li><a href="/amc" class="hover:text-blue-400 transition">Annual Maintenance</a></li>
                    <li><a href="/refund-policy" class="hover:text-blue-400 transition">Refund Policy</a></li>
                    <li><a href="/privacy-policy" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                    <li> <a href="/sitemap" class="text-gray-600 transition text-sm border px-3 py-1  border-gray-600"> Sitemap</a></li>


                </ul>
            </div>


            <div>
                <h4 class="text-sm font-normal mb-4 border-b border-blue-500 pb-2">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/website-development" class="hover:text-blue-400 transition">Website Development</a></li>
                    <li><a href="/software-development" class="hover:text-blue-400 transition">Software Development</a></li>
                    <li><a href="/portfolio" class="hover:text-blue-400 transition">Portfolio</a></li>

                    <li><a href="/career" class="hover:text-blue-400 transition">Career</a></li>

                </ul>

            </div>

            <div class="mt-10">
                <h3 class="text-base font-semibold text-gray-100 mb-4">We Accept</h3>
                <div class="flex flex-wrap items-center gap-4 bg-gray-800">

                    <img src="/asset/icon/master.webp" alt="Master card" class="h-10 w-16 rounded-md object-cover" />
                    <img src="/asset/icon/visa.jpg" alt="Visa" class="h-10 w-16 rounded-md object-cover" />
                    <img src="/asset/icon/amex-card1708.jpg" alt="American Express" class="h-10 w-16 rounded-md object-cover" />

                </div>
            </div>
        </div>
    </div>


    <div class="terms flex items-center justify-center w-full bg-white text-black h-[10vh] rounded-t-[50px] max-lg:h-auto max-lg:py-6">
        <div class="copyright w-[80%] flex items-center justify-between max-lg:flex-col max-lg:w-full max-lg:gap-4">

            <a href="/terms-and-conditions">
                <p class="text-sm max-lg:text-center"><b>Terms &amp; Conditions</b></p>
            </a>
            <p class="text-sm max-lg:text-center">© All rights reserved <?php echo date('Y'); ?> <b>RudraTech IT Services</b></p>
            <div class="social_media flex items-center justify-center gap-[10px] text-[23px] max-lg:mt-4">

                <a href="https://www.facebook.com/rudratechitservices2020/" target="_blank" class="text-white bg-blue-500 hover:bg-black rounded-full h-10 w-10 flex items-center justify-center hover:text-blue-600 cursor-pointer">
                    <i class="fa-brands fa-facebook-f text-sm" aria-hidden="true"></i>
                </a>

                <a href="https://www.instagram.com/rudratechitservice/" target="_blank" class="text-white bg-pink-500 hover:bg-black rounded-full h-10 w-10 flex items-center justify-center hover:text-pink-600 cursor-pointer">
                    <i class="fa-brands fa-instagram text-sm" aria-hidden="true"></i>
                </a>
                <a href="#" target="_blank"
                    class="text-white bg-black hover:bg-gray-800 rounded-full h-10 w-10 flex items-center justify-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1227" fill="white" class="w-3 h-3">
                        <path d="M1096.6 0H878.8L598.5 431.2 317.7 0H0L457.7 652.2 0 1227h217.8l303.7-437.5L825 1227h317.7L676.4 578.8 1096.6 0z" />
                    </svg>
                </a>



                <a href="https://in.linkedin.com/company/rudratech-it-services" target="_blank" class="text-white bg-blue-500 hover:bg-black rounded-full h-10 w-10 flex items-center justify-center hover:text-green-600 cursor-pointer">
                    <i class="fa-brands fa-linkedin-in text-sm" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
</footer>