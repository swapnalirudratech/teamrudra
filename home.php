<?php
$page_title = "home";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     print_r($_POST);
//     die();
// }


?>
<!DOCTYPE html>
<html lang="en">

<?php include "./include/header.php" ?>


<style>
    .industry-card {
        perspective: 1000px;
        position: relative;
        overflow: hidden;
    }

    .card-content {
        position: absolute;
        bottom: -100%;
        left: 0;
        right: 0;
        background: white;
        padding: 20px;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transform-origin: bottom;
        transform: rotateX(90deg);
        box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.1);
    }

    .industry-card:hover .card-content {
        bottom: 0;
        transform: rotateX(0deg);
    }

    .industry-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .industry-subtitle {
        font-size: 16px;
        color: rgb(2, 175, 255);
    }

    .square-element {
        width: 20px;
        height: 20px;
        position: absolute;
        top: -10px;
        right: 20px;
        background: rgb(2, 175, 255);
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    .industry-card:hover .square-element {
        transform: rotate(225deg);
    }

    .owl-stage {
        padding-bottom: 10px;
    }

    .aibackground {
        margin: 0 auto;
        /* font-family: Montserrat, sans-serif; */
        /* font-size: 300px; */
        background-image: url(/asset/ai.webp);
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: 100%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .opacity-100 {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }

    .translate-y-0 {
        transform: translateY(0);
    }

    .fade-in {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in.appear {
        opacity: 1;
        transform: translateY(0);
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .scale-in {
        transition: transform 0.5s ease;
    }

    .scale-in:hover {
        transform: scale(1.05);
    }

    .glow {
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
        transition: box-shadow 0.3s ease;
    }

    .glow:hover {
        box-shadow: 0 0 25px rgba(59, 130, 246, 0.8);
    }

    @keyframes twinkle {
        0% {
            opacity: 0.2;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0.2;
        }
    }

    .star {
        position: absolute;
        background-color: white;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        animation: twinkle 3s infinite;
    }



    /* Default State */
    .flip-icon {
        transition: transform 0.6s ease;
    }

    /* Change background color on hover */
    .hover-trigger {

        /* Default */
        transition: background-color 0.3s ease;
        border-radius: 8px;
    }

    .hover-trigger:hover {
        background-color: white;
        /* Light blue Shade */
    }

    /* Flip animation on hover */
    .hover-trigger:hover .flip-icon {
        animation: double-flip 0.6s ease forwards;
    }

    /* Keyframes for Double Flip */
    @keyframes double-flip {
        0% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(180deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }


    .typing-text {
        overflow: hidden;
        white-space: nowrap;
        border-right: 3px solid;
        animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
    }

    .float-element {
        animation: float 6s ease-in-out infinite;
    }

    .pulse-element {
        animation: pulse 4s ease-in-out infinite;
    }

    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .bg-gradient-mesh {
        background-image:
            radial-gradient(at 80% 0%, 0px, transparent 30%),
            radial-gradient(at 0% 50%, 0px, transparent 30%),
            radial-gradient(at 90% 90%, 0px, transparent 30%);
        background-size: 100% 100%;
    }

    .subtle-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23000000' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease forwards;
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

    /* Animation for icons and content */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease forwards;
    }

    .service-item {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
        overflow: hidden;
    }

    .service-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .service-item:nth-child(2) {
        animation-delay: 0.3s;
    }

    .service-item:nth-child(3) {
        animation-delay: 0.5s;
    }

    .img-container {
        transition: transform 0.3s ease;
        overflow: hidden;
    }

    .service-item:hover .img-container {
        transform: scale(1.1);
    }

    .service-item:hover h3 {
        color: rgb(7, 83, 247);
        transition: color 0.3s ease;
    }



    /* Animations */
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

    @keyframes slideIn {
        from {
            transform: translateX(-30px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes borderGlow {
        0% {
            box-shadow: 0 0 0 rgba(220, 38, 38, 0);
        }

        50% {
            box-shadow: 0 0 10px rgba(220, 38, 38, 0.5);
        }

        100% {
            box-shadow: 0 0 0 rgba(220, 38, 38, 0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-slideIn {
        animation: slideIn 0.6s ease-out forwards;
        opacity: 0;
    }

    .animate-pulse {
        animation: pulse 2s infinite;
    }

    .animate-borderGlow {
        animation: borderGlow 3s infinite;
    }

    /* Delay utilities */
    .delay-100 {
        animation-delay: 0.1s;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }

    .delay-500 {
        animation-delay: 0.5s;
    }

    /* Custom interactions */
    .hover-scale {
        transition: transform 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.02);
    }

    /* Gradient background */
    .bg-gradient-subtle {
        background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
    }

    /* Animation keyframes */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            transform: translateY(-10px);
        }
    }

    .text-animate-in {
        animation: fadeIn 0.5s ease forwards;
    }

    .text-animate-out {
        animation: fadeOut 0.5s ease forwards;
    }

    .text-gradient {
        background: linear-gradient(to top, #93c5fd, #ffffff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        z-index: -1;
    }

    .outline-text {
        color: transparent;

        -webkit-text-stroke: 1px #ccc;
    }

    .owl-carousel .owl-nav {
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: 50%;
        left: -60px;
        /* Move left button outside */
        right: -60px;
        /* Move right button outside */
        width: calc(100% + 120px);
        /* Expand width to allow buttons outside */
        transform: translateY(-50%);
        pointer-events: none;
        /* disable interaction except on buttons */
    }

    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel .owl-nav button.owl-next {
        font-size: 32px !important;
        background-color: rgba(6, 90, 247, 0.6);
        color: #fff !important;
        border: none;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        pointer-events: all;
        /* re-enable interaction */
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .owl-carousel .owl-nav button.owl-prev:hover,
    .owl-carousel .owl-nav button.owl-next:hover {
        background-color: #2563eb;
        transform: scale(1.1);
    }

    .owl-carousel .owl-nav button.owl-prev:focus,
    .owl-carousel .owl-nav button.owl-next:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.4);
    }

    .owl-carousel button.owl-dot {
        width: 12px;
        height: 12px;
        margin: 5px;
        background: #ccc;
        border-radius: 50%;
        display: inline-block;
        transition: background 0.3s ease;
    }

    .owl-carousel button.owl-dot.active,
    .owl-carousel button.owl-dot:hover {
        background: #2563eb;
    }

    @media (max-width: 768px) {

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next {
            display: none !important;
        }
    }

    .section-container {
        /* Remove or comment this */
        /* display: flex;
       width: 300vw; */
        transition: none;
    }

    .section {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* Optional */
        overflow-y: auto;
        padding: 4rem 0;
        /* Add spacing */
    }

    /* Custom floating animation */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) translateX(0px);
        }

        50% {
            transform: translateY(-10px) translateX(5px);
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
</style>


<body>

    <?php include "./include/navbar.php" ?>

    <section class="bg-white h-[60vh] py-28 max-md:h-[50vh] max-md:py-16 flex items-center justify-center overflow-hidden w-full relative">

        <div class="relative w-full max-w-7xl mx-auto flex justify-center items-center scale-90 md:scale-100">

            <div class="absolute inset-0 -z-10 grid grid-cols-7 gap-4 opacity-30 h-full w-full pointer-events-none">
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
                <div class="border-r border-gray-300 h-full"></div>
            </div>

            <h1 class="text-6xl sm:text-8xl lg:text-[12rem] font-bold tracking-tighter text-gray-900 select-none text-center whitespace-nowrap z-10">
                Rudra Tech
            </h1>


            <div class="absolute -bottom-16 left-4 lg:-bottom-4 lg:left-10 animate-float z-20" style="animation-delay: 0s;">
                <div class="flex flex-col items-center">
                    <img src="https://i.pravatar.cc/150?u=1" class="w-10 h-10 lg:w-12 lg:h-12 rounded-full border-2 border-white shadow-lg mb-2">
                    <div class="bg-gray-100 text-gray-600 px-3 py-1 text-sm font-medium rounded shadow-sm flex items-center gap-1">
                        <span class="text-[10px] text-green-500">▲</span> Strategist
                    </div>
                </div>
            </div>

            <div class="absolute -top-20 left-4 lg:-top-12 lg:left-64 animate-float z-20" style="animation-delay: 1s;">
                <div class="flex flex-col items-center">
                    <div class="bg-[#B6FF69] text-black px-4 py-1 text-sm font-bold rounded mb-2 shadow-md">
                        Manager
                    </div>
                    <img src="https://i.pravatar.cc/150?u=2" class="w-12 h-12 lg:w-14 lg:h-14 rounded-full border-4 border-[#B6FF69] shadow-xl">
                </div>
            </div>

            <div class="absolute -bottom-24 left-[40%] -translate-x-1/2 lg:translate-x-0 lg:-bottom-10 lg:left-[45%] animate-float z-20" style="animation-delay: 0.5s;">
                <div class="flex flex-col items-center">
                    <img src="https://i.pravatar.cc/150?u=3" class="w-10 h-10 lg:w-12 lg:h-12 rounded-full border-2 border-white shadow-lg mb-2">
                    <div class="bg-gray-100 text-gray-600 px-3 py-1 text-sm font-medium rounded shadow-sm flex items-center gap-1">
                        <span class="text-[10px] text-green-500">▲</span> Designer
                    </div>
                </div>
            </div>

            <div class="absolute -top-14 right-4 lg:-top-10 lg:right-80 animate-float z-20" style="animation-delay: 1.5s;">
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 text-gray-600 px-3 py-1 text-sm font-medium rounded shadow-sm mb-2 flex items-center gap-1">
                        <span class="text-[10px] text-green-500">▲</span> Developer
                    </div>
                    <img src="https://i.pravatar.cc/150?u=4" class="w-10 h-10 lg:w-12 lg:h-12 rounded-full border-2 border-white shadow-lg">
                </div>
            </div>

            <div class="absolute -bottom-20 right-4 lg:-bottom-4 lg:right-40 animate-float z-20" style="animation-delay: 2s;">
                <div class="flex flex-col items-center">
                    <img src="https://i.pravatar.cc/150?u=5" class="w-10 h-10 lg:w-12 lg:h-12 rounded-full border-2 border-white shadow-lg mb-2">
                    <div class="bg-gray-100 text-gray-600 px-3 py-1 text-sm font-medium rounded shadow-sm flex items-center gap-1">
                        <span class="text-[10px] text-green-500">▲</span> Marketer
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="relative bg-white pb-10 lg:pt-14 lg:pb-24 max-lg:pt-10 overflow-hidden">
        <div class="max-md:w-[85%] w-[80%] mx-auto grid max-lg:grid-cols-1 grid-cols-2 items-center gap-16 max-lg:gap-0">

            <div class="relative flex flex-col items-start justify-center z-10">
                <div class="absolute -right-2 md:right-0 top-1/2 transform -translate-y-1/2 w-40 sm:w-56 md:w-64 opacity-80 pointer-events-none z-0">
                    <img src="/asset/image/gif.gif" alt="Global IT Solutions Rudra Tech" class="w-full h-full object-contain" />
                </div>

                <h1 class="relative z-10 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Transforming Ideas into<br />
                    <span class="text-blue-600">Digital Reality</span>
                </h1>
            </div>

            <div class="z-10">
                <p class="text-base sm:text-lg text-gray-800 mb-6 leading-relaxed">
                    <strong>Rudra Tech IT Services</strong> is a leading software development company that specializes in developing scalable websites, high-performance mobile applications, and custom enterprise software solutions.
                </p>

                <ul class="space-y-4 text-sm sm:text-base text-gray-700 mb-8">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">✔</span>
                        <span><strong>Custom Software Development</strong> & Digital Transformation</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">✔</span>
                        <span><strong>Responsive Web & Mobile App</strong> Design (iOS & Android)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">✔</span>
                        <span>Specialized <strong>CRM, ERP, & Cloud Solutions</strong> for Modern Enterprises</span>
                    </li>
                </ul>

                <a href="/get-in-touch"
                    class="inline-flex items-center gap-2 bg-black text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition-all duration-300">
                    Start Your Project Today
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <div class="hidden border-t border-gray-200 py-20 max-lg:py-12 max-lg:w-[85%] flex items-center justify-center container mx-auto w-[80%]">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 w-full">


            <div class="w-full lg:w-1/2 fade-in">
                <div class="inline-block px-4 py-1 rounded-full bg-blue-50 text-blue-600 font-medium text-sm mb-4 delay-100 border border-blue-100">
                    Custom Admin Solutions
                </div>

                <h2 class="text-2xl lg:text-4xl font-normal mb-4 delay-200 text-gray-800 leading-tight">
                    Powerful <span class="text-blue-500">Admin Panels</span> tailored to your needs
                </h2>

                <p class="text-gray-600 mb-6 delay-300 text-base leading-relaxed">
                    We craft intuitive, feature-rich admin dashboards that help businesses manage their operations efficiently.
                </p>

                <div class="flex flex-wrap gap-4 mb-6">
                    <div class="flex items-center text-gray-700 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Real-time analytics</span>
                    </div>
                    <div class="flex items-center text-gray-700 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>User management</span>
                    </div>
                    <div class="flex items-center text-gray-700 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Custom integrations</span>
                    </div>
                </div>

                <div class="flex  gap-4  ">
                    <a href="/getin-touch" class="max-lg:text-sm max-lg:whitespace-nowrap bg-blue-600 hover:bg-blue-700 transition-colors duration-300 text-white py-2 px-6 rounded-lg text-sm font-medium flex items-center delay-300">
                        Request a Demo
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="/portfolio" class="max-lg:text-sm max-lg:whitespace-nowrap border border-blue-200 bg-white hover:bg-blue-50 text-blue-600 transition-colors duration-300 py-2 px-6 rounded-lg text-sm font-medium flex items-center delay-300">
                        View Portfolio
                    </a>
                </div>
            </div>


            <div class="w-full lg:w-1/2 float-animation">


                <div class="relative  overflow-hidden  aspect-video bg-white flex items-center justify-center">
                    <img src="/asset/admin.jpg" alt="Admin Panel Preview" class="w-full h-full object-contain shadow-lg" />
                </div>

            </div>


        </div>

    </div>

    <section class="bg-gray-100 py-20 max-lg:py-12 relative overflow-hidden hidden">
        <div class="container w-[90%] mx-auto">


            <div class="text-center mb-16 max-lg:mb-6">
                <h2 class="text-4xl max-lg:text-3xl font-semibold text-gray-800 tracking-wide">
                    Powerful <span class="text-blue-600">Billing Software</span> Features
                </h2>
                <p class="mt-3 text-gray-600 text-sm">
                    Simplify your business operations with intelligent, reliable, and automated billing solutions.
                </p>
            </div>


            <div class="relative flex items-center justify-center max-lg:flex-col gap-12 w-full max-lg:gap-3">

                <!-- Left Features -->
                <div class="flex flex-col items-end space-y-8 w-1/3 max-lg:w-full max-lg:items-center max-lg:space-y-4">
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-right max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">Smart Invoicing</h4>
                        <p class="text-gray-600 text-sm">Generate and send invoices automatically with custom branding.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-right max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">Real-Time Reports</h4>
                        <p class="text-gray-600 text-sm">Track revenue, expenses, and payments with instant analytics.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-right max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">Multi-User Access</h4>
                        <p class="text-gray-600 text-sm">Empower your team with secure, role-based access control.</p>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="w-1/3 max-lg:w-[80%] relative">
                    <img src="/asset/bg.png" alt="Billing Software Dashboard" class="w-full object-contain ">
                </div>

                <!-- Right Features -->
                <div class="flex flex-col items-start space-y-8 w-1/3 max-lg:w-full max-lg:items-center max-lg:space-y-4">
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-left max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">Automated Reminders</h4>
                        <p class="text-gray-600 text-sm">Send payment reminders and alerts automatically to clients.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-left max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">GST & Tax Management</h4>
                        <p class="text-gray-600 text-sm">Auto-calculate taxes and generate compliant reports easily.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl p-4 w-72 text-left max-lg:text-center hover:shadow-lg transition">
                        <h4 class="text-blue-600 font-semibold text-sm mb-1">Cloud Backup</h4>
                        <p class="text-gray-600 text-sm">Secure your data with automated cloud sync and recovery.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden" id="feature-section">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] bg-blue-100/60 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="container w-[90%] mx-auto">

            <div class="text-center mb-20">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 tracking-tight">
                    Powerful <span class="text-blue-600">Billing Engine</span>
                </h2>
                <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                    Explore the features that automate your finance operations. Click a card to preview.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">

                <div class="flex flex-col gap-6 w-full lg:w-1/4">

                    <button onclick="updateFeature(0)" id="btn-0" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4 flex-row-reverse lg:flex-row">
                            <div class="flex-1 text-right lg:text-right">
                                <h4 class="text-gray-900 font-bold text-base mb-1"> Insightful Dashboard</h4>
                                <p class="text-gray-500 text-sm leading-relaxed">Create and send professional GST invoices in seconds.</p>
                            </div>
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                        </div>
                    </button>

                    <button onclick="updateFeature(1)" id="btn-1" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4 flex-row-reverse lg:flex-row">
                            <div class="flex-1 text-right lg:text-right">
                                <h4 class="text-gray-900 font-bold text-base mb-1"> Real-Time Reports</h4>
                                <p class="text-gray-500 text-sm leading-relaxed"> Track revenue & cash flow instantly with visual graphs. </p>
                            </div>
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </button>

                    <button onclick="updateFeature(2)" id="btn-2" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4 flex-row-reverse lg:flex-row">
                            <div class="flex-1 text-right lg:text-right">
                                <h4 class="text-gray-900 font-bold text-base mb-1"> Smart Invoicing</h4>
                                <p class="text-gray-500 text-sm leading-relaxed"> Create and send professional GST invoices in seconds.</p>
                            </div>
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </button>

                </div>

                <div class="w-full lg:w-1/2 relative h-auto lg:h-auto flex items-center justify-center p-10">
                    <div class="absolute left-0 bottom-4 w-full h-6 bg-gray-700 rounded-full"></div>
                    <div class="w-full relative h-[300px] lg:h-[400px] flex items-center justify-center z-10 border-2 border-gray-700 rounded-2xl">

                        <div class="relative w-full h-full bg-white rounded-2xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] border border-gray-200 overflow-hidden flex flex-col transform transition-transform hover:scale-[1.02] duration-500">
                            <div class="h-10 bg-gray-50 border-b flex items-center px-4 space-x-2 shrink-0">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                <div class="ml-4 bg-white border border-gray-200 h-6 w-full max-w-[200px] rounded text-[10px] flex items-center px-2 text-gray-400 font-mono">rudratech.io/app</div>
                            </div>
                            <img id="feature-image" src="/asset/image/h66.png" alt="Feature Preview" class="w-full h-full object-cover object-top transition-opacity duration-300">
                        </div>

                        <div class="absolute -right-10 -bottom-10 w-24 h-24 bg-blue-600 rounded-full blur-2xl opacity-20 -z-10"></div>
                        <!-- <div class="absolute -left-10 -top-10 w-32 h-32 bg-purple-600 rounded-full blur-2xl opacity-20 -z-10"></div> -->
                    </div>
                </div>

                <div class="flex flex-col gap-6 w-full lg:w-1/4">

                    <button onclick="updateFeature(3)" id="btn-3" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4">
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <!-- barcode icon  -->
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-gray-900 font-bold text-base mb-1">Stock Management</h4>
                                <p class="text-gray-500 text-sm leading-relaxed">Track inventory levels and get low-stock alerts automatically.</p>
                            </div>
                        </div>
                    </button>

                    <button onclick="updateFeature(4)" id="btn-4" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4">
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-gray-900 font-bold text-base mb-1">Payment Reminders</h4>
                                <p class="text-gray-500 text-sm leading-relaxed">Send automated SMS and Email alerts for overdue payments.</p>
                            </div>
                        </div>
                    </button>

                    <button onclick="updateFeature(5)" id="btn-5" class="feature-card group w-full p-6 rounded-2xl text-left border-2 transition-all duration-300 bg-white hover:bg-white border-transparent">
                        <div class="flex items-start gap-4">
                            <div class="icon-box w-10 h-10 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center shrink-0 transition-colors group-hover:bg-blue-50 group-hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-gray-900 font-bold text-base mb-1">Multi-User Access</h4>
                                <p class="text-gray-500 text-sm leading-relaxed">Secure, role-based access for teams.</p>
                            </div>
                        </div>
                    </button>

                </div>

            </div>
        </div>
    </section>

    <script>
        // Configuration Data
        const features = [{
                title: "Real-Time Reports",
                img: "/asset/image/h66.png"
            },
            {
                title: "Smart Invoicing",
                img: "/asset/image/hh9.png"
            },
            {
                title: "Multi-User Access",
                img: "/asset/image/hh5.png"
            },
            {
                title: "Automated Reminders",
                img: "/asset/image/hh0.png"
            },
            {
                title: "GST & Tax Management",
                img: "/asset/image/hh6.jpg"
            },
            {
                title: "Cloud Backup",
                img: "/asset/image/hh3.png"
            }
        ];

        function updateFeature(index) {
            const imgElement = document.getElementById('feature-image');
            const buttons = document.querySelectorAll('.feature-card');
            const icons = document.querySelectorAll('.icon-box');

            // 1. Reset all buttons
            buttons.forEach((btn, idx) => {
                btn.classList.remove('bg-white', 'shadow-xl', 'border-blue-600', 'scale-[1.02]', 'ring-4', 'ring-blue-50');
                btn.classList.add('bg-white/60', 'border-transparent');

                // Reset icon colors inside the button
                const icon = btn.querySelector('.icon-box');
                if (icon) {
                    icon.classList.remove('bg-blue-600', 'text-white');
                    icon.classList.add('bg-gray-100', 'text-gray-500');
                }
            });

            // 2. Highlight active button
            const activeBtn = document.getElementById(`btn-${index}`);
            activeBtn.classList.remove('bg-white/60', 'border-transparent');
            activeBtn.classList.add('bg-white', 'shadow-xl', 'border-blue-600', 'scale-[1.02]', 'ring-4', 'ring-blue-50');

            // Highlight active icon
            const activeIcon = activeBtn.querySelector('.icon-box');
            if (activeIcon) {
                activeIcon.classList.remove('bg-gray-100', 'text-gray-500');
                activeIcon.classList.add('bg-blue-600', 'text-white');
            }

            // 3. Animate and change image
            imgElement.style.opacity = '0';

            setTimeout(() => {
                imgElement.src = features[index].img;
                imgElement.onload = () => {
                    imgElement.style.opacity = '1';
                };
            }, 200);
        }

        // Initialize (No Auto Rotation)
        document.addEventListener('DOMContentLoaded', () => {
            updateFeature(0);
        });
    </script>


    <!-- <div id="projectForm" class="fixed top-[20%] right-0 max-lg:right-2 w-[95%] max-w-sm bg-white shadow-2xl rounded-l-xl p-6 z-50 border border-gray-200 transition-all duration-500">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Project Inquiry</h2>
            <button id="closeFormBtn" class="text-gray-500 hover:text-red-500 text-2xl font-bold">&times;</button>
        </div>

        <form action="/form.php" method="POST" class="space-y-4">

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" required
                    class="w-full border border-gray-300 text-sm rounded-lg px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="e.g., John Doe">
            </div>

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <input type="tel" name="phone" id="phone" required
                        class="w-full border border-gray-300 text-sm rounded-lg px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="e.g., +91 9876543210">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" name="email" id="email" required
                        class="w-full border border-gray-300 text-sm rounded-lg px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="e.g., john@example.com">
                </div>

            </div>

            <div>
                <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company / Business Name</label>
                <input type="text" name="company" id="company"
                    class="w-full border border-gray-300 text-sm rounded-lg px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="e.g., RudraTech Solutions">
            </div>


            <div>
                <label for="requirement" class="block text-sm font-medium text-gray-700 mb-1">Your Requirement <span class="text-red-500">*</span></label>
                <textarea name="requirement" id="requirement" rows="3" required
                    class="w-full border border-gray-300 text-sm rounded-lg px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Briefly describe your project, idea, or requirement..."></textarea>
            </div>


            <div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition-all text-white font-semibold py-2 rounded-lg">
                    Submit Inquiry
                </button>
            </div>
        </form>
    </div> -->





    <section class="bg-white py-28 border-t border-gray-200 max-lg:py-16">
        <div class="max-md:w-[85%] w-[80%] mx-auto flex flex-col">


            <div class="flex items-center justify-between mb-32 max-lg:mb-10">


                <div class="max-w-3xl space-y-4">
                    <h2 class="text-4xl max-md:text-3xl md:text-5xl font-bold text-black leading-tight">
                        Delivering Smart IT Solutions
                    </h2>
                    <p class="text-2xl md:text-3xl text-gray-500">
                        Trusted by <span class="text-black font-bold">3,000+ Businesses</span> Globally
                    </p>
                </div>
            </div>


            <div class="grid grid-cols-1 grid-cols-4 max-lg:grid-cols-4 max-md:grid-cols-1  divide-y sm:divide-y-0 sm:divide-x lg:divide-x divide-gray-400">
                <div class="group transition-transform hover:-translate-y-2 px-6 py-6 flex flex-col items-start">
                    <h3 class="text-6xl sm:text-4xl font-medium text-blue-700">5+</h3>
                    <div class="mt-3 flex items-center space-x-3">
                        <div class="bg-blue-600 p-3 rounded shadow-md">
                            <i class="fas fa-briefcase text-white text-xl"></i>
                        </div>
                        <p class="text-lg max-lg:text-sm text-gray-600">Years of Expertise</p>
                    </div>
                </div>


                <div class="group transition-transform hover:-translate-y-2 px-6 py-6 flex flex-col items-start">
                    <h3 class="text-5xl sm:text-4xl font-medium text-gray-800">100+</h3>
                    <div class="mt-3 flex items-center space-x-3">
                        <div class="bg-blue-600 p-3 rounded shadow-md">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <p class="text-lg max-lg:text-sm  text-gray-600">Clients Served</p>
                    </div>
                </div>


                <div class="group transition-transform hover:-translate-y-2 px-6 py-6 flex flex-col items-start">
                    <h3 class="text-5xl sm:text-4xl font-medium text-gray-800">100+</h3>
                    <div class="mt-3 flex items-center space-x-3">
                        <div class="bg-blue-600 p-3 rounded shadow-md">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <p class="text-lg max-lg:text-sm  text-gray-600">Projects Delivered</p>
                    </div>
                </div>


                <div class="group transition-transform hover:-translate-y-2 px-6 py-6 flex flex-col items-start">
                    <h3 class="text-5xl sm:text-4xl font-medium text-gray-800">20+</h3>
                    <div class="mt-3 flex items-center space-x-3">
                        <div class="bg-blue-600 p-3 rounded shadow-md">
                            <i class="fas fa-industry text-white text-xl"></i>
                        </div>
                        <p class="text-lg max-lg:text-sm  text-gray-600">Industries Served</p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <div class="div1 pb-12 " id="verticalSection">
        <div class="section-container">


            <section class="section bg-gray-50 ">

                <div class="container mx-auto w-[80%] max-lg:w-[85%]">

                    <div class="grid max-lg:grid-cols-1 grid-cols-2 gap-12 items-center text-sm ">
                        <div class="order-1 md:order-1 ">
                            <h2 class=" font-normal text-gray-800 mb-6 uppercase tracking-wide"><span class="text-black uppercase font-semibold text-[3rem] max-lg:text-[2rem] aibackground">About us</span> </h2>
                            <p class="text-gray-600 mb-6   ">
                                RudraTech IT Services, founded in 2020, is a young and vibrant tech start-up that is fueled by bright minds who are eager to make a difference. We are committed to working alongside businesses to enable their digital transformation journey. Our developers, designers, and strategists are passionate about bringing innovation and dedication to every project that we undertake.
                            </p>
                            <div class="space-y-4 max-lg:text-sm">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg  max-lg:text-sm font-medium text-gray-800">Innovation-Driven</h4>
                                        <p class="text-gray-600">We are always at the forefront of technology trends to provide future-ready solutions.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg  max-lg:text-sm font-medium text-gray-800">Client-Focused</h4>
                                        <p class="text-gray-600">Your business needs are our top priority, and this drives every project that we undertake.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg max-lg:text-sm font-medium text-gray-800">Quality Assurance</h4>
                                        <p class="text-gray-600">We conduct rigorous testing to ensure flawless performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-2 md:order-2 max-md:hidden ">
                            <div class="relative">
                                <div class="absolute inset-0 bg-blue-600 transform translate-x-6 translate-y-6 rounded-lg"></div>
                                <img src="/asset/team.jpg" alt="RudraTech Team" class="relative z-10 w-full h-full max-lg:h-[30vh] object-cover rounded-lg shadow-xl">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="w-[80%] mx-auto  py-20  max-lg:py-12  max-lg:w-[85%]">
                <div class=" mb-8 w-full flex items-center justify-between max-lg:flex-col">
                    <h2 class="text-2xl md:text-4xl font-bold  animate-fadeInUp text-slate-800 mb-4">Industries We Serve</h2>

                    <p class=" text-gray-600 w-1/2 max-lg:w-full max-lg:text-center ">Providing innovative IT solutions across diverse sectors to drive digital transformation and business growth.</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 max-md:gap-2">

                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/image/s7.avif" alt="Manufacturing Industry" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content ">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm ">Manufacturing</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>

                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/indus2.jpg" alt="Healthcare Industry" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm">Healthcare</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>


                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/indus3.jpg" alt="Finance Industry" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm">Finance</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>


                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/indus4.jpg" alt="Education Industry" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm">Education</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>


                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/image/s8.avif" alt="Tourism Industry" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm">Tourism</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>


                    <div class="industry-card h-80 max-lg:h-60 max-md:h-40 rounded-lg">
                        <img src="/asset/buil.avif" alt="real estate" class="w-full h-full object-cover">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <div class="square-element"></div>
                            <div class="industry-title max-lg:text-sm">Real Estate</div>
                            <div class="industry-subtitle max-lg:text-sm">Industry</div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="w-full  ">
                <div class="w-[80%] mx-auto ">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                        <div class="lg:w-1/2  max-lg:text-sm max-lg:w-full max-lg:text-center">

                            <div class="mb-6">
                                <span class="bg-blue-100 text-blue-600 text-sm font-semibold py-1 px-3 rounded-full">OUR STACK</span>
                            </div>
                            <h2 class="text-4xl max-lg:text-2xl font-bold mb-4 text-gray-900">Technologies <span class="text-gray-600 font-light">We Use</span></h2>
                            <div class="w-16 h-1 bg-white mb-6 max-lg:hidden"></div>


                            <div class="max-w-2xl mb-6 max-lg:w-full">
                                <p class="text-lg  max-lg:text-sm font-medium text-gray-600 mb-4">
                                    We craft seamless human experiences in the digital world using cutting-edge technologies and design.
                                </p>
                                <p class="text-gray-800 mb-2">
                                    Our strategy shapes our development, and our development brings our strategy to life.
                                </p>
                                <p class="text-gray-800">
                                    We progress through each step of
                                    <a href="#" class="text-gray-600 font-medium underline">our process</a>,
                                    ensuring seamless execution.
                                </p>
                            </div>
                        </div>


                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 w-full lg:w-1/2 max-lg:text-sm  max-lg:hidden">

                            <div class="space-y-4">
                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">WordPress</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Laravel</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">MongoDB</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Bootstrap</h3>
                                </div>
                            </div>


                            <div class="space-y-4">
                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">ReactJS</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">PHP</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Node.js</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">jQuery</h3>
                                </div>
                            </div>


                            <div class="space-y-4">
                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Angular</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Python</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">MySQL</h3>
                                </div>

                                <div class="flex items-center bg-blue-700 p-3 rounded">
                                    <div class="w-8 h-8 flex items-center justify-center bg-white text-blue-600 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-medium text-white">Vue.js</h3>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="mt-10 text-center max-md:mt-4 ">
                        <a href="/getin-touch" class="inline-flex  hover:border border-blue-500 items-center px-6 py-3 bg-blue-200 text-blue-600 font-medium rounded hover:bg-gray-100 transition duration-300">
                            Let's Build Together
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container mx-auto py-20 max-lg:py-12 w-[80%] max-lg:w-[90%] max-md:w-[85%] relative border-t border-gray-200">
        <h2 class="text-2xl md:text-4xl font-normal max-lg:text-center max-lg:mb-8 animate-fadeInUp text-slate-800 mb-16">Rapid Digital Solutions</h2>

        <div class="grid max-md:grid-cols-1 grid-cols-3 gap-8 max-lg:gap-4">

            <div class="service-item p-4 border border-gray-200 rounded-xl">
                <div class="flex flex-col ">

                    <div class="mb-5 img-container ">
                        <div class="  w-full h-48 flex items-center justify-center">
                            <img src="/asset/custom.jpg" alt="Rocket" class="w-full h-full object-cover rounded-xl" />
                        </div>
                    </div>

                    <h3 class="text-base font-medium mb-3 ">Custom Software Solutions</h3>
                    <p class="text-gray-400 max-lg:text-sm">Get your custom software concept designed throuhgh our rapid prototyping system.</p>
                </div>
            </div>


            <div class="service-item p-4 border border-gray-200 rounded-xl">
                <div class="flex flex-col">

                    <div class="mb-5 img-container">
                        <div class=" w-full h-48 flex items-center justify-center">
                            <img src="/asset/digitaltrans.jpg" alt="Digital Transformation" class="w-full h-full object-cover rounded-xl" />
                        </div>
                    </div>

                    <h3 class="text-base font-medium mb-3">End-to-End Digital Transformation</h3>
                    <p class="text-gray-400 max-lg:text-sm">Comprehensive digital transformation services tailored to meet your unique business needs.</p>
                </div>
            </div>


            <div class="service-item p-4 border border-gray-200 rounded-xl">
                <div class="flex flex-col">

                    <div class="mb-5 img-container">
                        <div class=" w-full h-48 flex items-center justify-center">
                            <img src="/asset/enterprises.jpg" alt="Mobile and Enterprise" class="w-full h-full object-cover rounded-xl" />
                        </div>
                    </div>


                    <h3 class="text-base font-medium mb-3">Mobile, Web, and Enterprise Solutions</h3>
                    <p class="text-gray-400 max-lg:text-sm">Solutions for mobile, web, and enterprise environments, ensuring you're covered across all platforms.</p>
                </div>
            </div>

        </div>
    </div>

    <div class=" w-[80%] mx-auto hidden py-20">
        <div class="grid md:grid-cols-3 gap-6 text-start bg-blue-100">
            <div class="p-6 flex items-start space-x-8 hover-trigger transition duration-300">
                <div class="flex justify-center items-center w-32 h-16 rounded-full flip-icon text-gray-700">
                    <img src="/asset/icon (2).png" class="h-full w-full object-cover" alt="">
                </div>
                <div>
                    <h3 class="text-md font-semibold text-blue-800">Increase Visibility</h3>
                    <p class="text-gray-600 mt-2 text-sm">
                        Expand your reach and grow your business with a professional website that works for you 24/7.
                    </p>
                </div>
            </div>
            <div class="p-6   flex items-start space-x-8 hover-trigger">
                <div class="flex justify-center items-center w-32 h-16 rounded-full flip-icon text-gray-700">
                    <img src="/asset/icon (3).png" class="h-full w-full object-cover" alt="">
                </div>
                <div>
                    <h3 class="text-md font-semibold text-blue-800">Build Cblueibility</h3>
                    <p class="text-gray-600 mt-2 text-sm">
                        Build cblueibility and earn customer trust by showcasing your products and services with a stunning online presence.
                    </p>
                </div>
            </div>

            <div class="p-6  flex items-start space-x-8 hover-trigger">
                <div class="flex justify-center items-center w-24 h-16 flip-icon rounded-full  text-gray-700">
                    <img src="/asset/icon (1).png" alt="">
                </div>
                <div>
                    <h3 class="text-md font-semibold text-blue-800">Boost Sales</h3>
                    <p class="text-gray-600 mt-2 text-sm">
                        Boost your sales and maximize conversions with a captivating, user-friendly website.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="  flex items-center justify-center  bg-black relative overflow-hidden">

        <div id="stars"></div>

        <div class="container py-16 max-lg:py-16   w-[80%] max-lg:w-[85%] mx-auto max-lg:py-0 ">

            <div class="grid grid-cols-2 gap-12  max-lg:grid-cols-1 ">

                <div class="space-y-8 max-md:space-y-4 ">
                    <div class="bg-blue-600 px-4 py-2 max-md:text-sm inline-block text-sm font-normal rounded-full  text-white uppercase tracking-widest">
                        Your Vision, Our Passion
                    </div>
                    <h2 class="text-3xl max-md:text-xl sm:text-4xl font-extrabold md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl text-white leading-tight">
                        <span class="block transition-all duration-700 tracking-wider hover:tracking-[0.1em] hover:text-blue-500">
                            Designing Tomorrow's
                        </span>
                        Digital Experiences
                        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mt-2 rounded-full transition-all duration-700 hover:w-32 hover:opacity-100 mx-auto md:mx-0"></div>
                    </h2>

                    <p class="text-sm sm:text-base md:text-lg text-gray-300">
                        We don’t just build websites – we create digital masterpieces that inspire, engage, and lift your brand to unprecedented levels.
                    </p>


                    <div class="flex space-x-4">
                        <a href="/about" class="bg-blue-600 text-white px-6 py-3 max-lg:px-4 max-lg:py-2 max-lg:text-sm rounded-full hover:bg-blue-700 transition">
                            Our Story
                        </a>
                        <a href="/client" class="border border-white text-white px-6 py-3 max-lg:px-4 max-lg:py-2 max-lg:text-sm rounded-full hover:bg-white hover:text-gray-800 transition">
                            Our Success Partners
                        </a>
                    </div>
                </div>


                <div id="stats-section">
                    <div class="grid grid-cols-2 gap-6 mb-12 max-lg:mb-0">
                        <div class="border border-gray-800 p-6 rounded-xl text-center text-white">

                            <div class="flex items-center justify-center text-4xl max-lg:text-2xl">
                                <div class="  counter" data-target="5">0 </div>
                                <span class=" ml-2">+</span>
                            </div>
                            <div class="text-sm uppercase tracking-wider mt-2 max-lg:text-sm">Year Track Record</div>
                        </div>
                        <div class="border border-gray-800 p-6 rounded-xl text-center text-white ">
                            <div class="flex items-center justify-center text-4xl max-lg:text-2xl">
                                <div class=" counter" data-target="100">0 </div>
                                <span class=" ml-2">+</span>
                            </div>
                            <div class="text-sm uppercase tracking-wider mt-2 max-lg:text-sm">Happy Customers</div>
                        </div>
                        <div class="border border-gray-800 p-6 rounded-xl text-center text-white text-4xl max-lg:text-2xl">
                            <div class=" counter" data-target="10">0</div>
                            <div class="text-sm uppercase tracking-wider mt-2 max-lg:text-sm">Expert Team</div>
                        </div>
                        <div class="border border-gray-800 p-6 rounded-xl text-center text-white">

                            <div class="flex items-center justify-center text-4xl max-lg:text-2xl ">
                                <div class=" counter" data-target="98">0</div>

                                <span class=" ml-2">+</span>
                            </div>
                            <div class="text-sm uppercase tracking-wider mt-2 max-lg:text-sm">Total Reviews</div>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>

    <section id="features" class="py-20 max-lg:py-12 border-t border-gray-200 w-[80%] max-lg:w-[85%] mx-auto border-b">


        <h2 class=" text-2xl md:text-4xl font-normal  animate-fadeInUp text-slate-800 mb-8 ">Features</h2>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Real-time Analytics</h3>
                <p class="text-gray-400">Monitor your business performance with dynamic dashboards and real-time data visualization tools.</p>
            </div>


            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Advanced Security</h3>
                <p class="text-gray-400">Role-based access control and multi-factor authentication keep your business data secure and protected.</p>
            </div>


            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Customizable Interface</h3>
                <p class="text-gray-400">Tailor your admin panel to your specific needs with drag-and-drop components and custom widgets.</p>
            </div>


            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Automated Reporting</h3>
                <p class="text-gray-400">Generate and schedule reports automatically, delivering key insights directly to your inbox.</p>
            </div>


            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Rapid Performance</h3>
                <p class="text-gray-400">Blazing-fast load times and optimized database queries ensure a smooth, responsive experience.</p>
            </div>


            <div class="bg-white p-6 rounded-xl border border-gray-300 hover:border-blue-500/50 transition-all fade-in scale-in">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                <p class="text-gray-400">Our support team is available around the clock to assist with any issues or questions.</p>
            </div>
        </div>

    </section>



    <section class="bg-white">
        <div id="customScrollWrapper" class="relative h-[80vh] max-lg:h-[40vh] max-lg:bg-black overflow-hidden flex flex-col justify-center">


            <div class="sticky top-0 h-screen  flex flex-col justify-center">


                <div id="scrollLine1" class="whitespace-nowrap text-[6vw] font-bold tracking-tight text-black -px-80 mb-10">
                    <span class="outline-text max-lg:text-4xl pl-0 max-lg:pl-0 ">RUDRATECH IT SERVICES </span>
                </div>


                <div id="scrollLine2" class="whitespace-nowrap text-[6vw] font-bold tracking-tight text-gray-300 px-10">
                    <span class="outline-text  max-lg:text-4xl pl-80 max-md:pl-10 max-lg:pl-80">RUDRATECH IT SERVICES </span>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-white">
        <div class="w-[80%] mx-auto py-20 bg-white border-t max-lg:py-12 overflow-hidden">

            <div class=" mb-12 flex justify-between max-lg:flex-col max-lg:text-center">
                <div class="inline-block relative">
                    <h2 class="text-4xl max-lg:text-3xl font-normal text-gray-800 relative z-10">
                        Our Digital Masterpieces
                    </h2>

                </div>
                <p class="mt-4 text-md text-gray-600 w-1/2 max-lg:text-center max-lg:w-full ">
                    A showcase of transformative digital experiences we've crafted for businesses across various industries.
                </p>
            </div>

            <div class="owl-carousel website-carousel owl-theme">
                <div class="item bg-yellow-100 py-8 max-lg:p-2  rounded-xl shadow-lg hover:shadow-xl transition-all overflow-hidden group">

                    <div class="flex max-lg:flex-col justify-between gap-6  relative max-lg:p-4 w-[90%] mx-auto max-lg:gap-2">
                        <div class="text-left flex flex-col justify-center max-lg:text-center">
                            <h3 class="text-4xl max-lg:text-2xl font-semibold text-orange-900 ">KESARBAUG</h3>
                            <p class="text-gray-700 mt-2 italic text-xl max-md:text-sm ">The Taste of Nature 🌿</p>
                            <p class="text-blue-600 font-semibold text-sm tracking-wider mt-2">Ecommerce Project</p>
                        </div>
                        <div class="overflow-hidden rounded-xl max-lg:rounded-none">
                            <img src="/asset/image/s (2).jpg" alt="Kesarbag Website" class="h-60 w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                        </div>
                        <div class="absolute top-2 right-2 bg-orange-900 text-white px-3 py-1 rounded-full text-sm opacity-0 group-hover:opacity-100 transition-all">NEW</div>
                    </div>
                </div>


                <div class="item bg-pink-100 py-8 max-lg:p-2 rounded-xl shadow-lg hover:shadow-xl transition-all overflow-hidden group">
                    <div class="flex max-lg:flex-col justify-between gap-6  relative max-lg:p-4 w-[90%] mx-auto max-lg:gap-2">
                        <div class="text-left flex flex-col justify-center max-lg:text-center">
                            <h3 class="text-4xl max-lg:text-2xl font-semibold text-pink-900">RB A PURE SKIN CARE</h3>
                            <p class="text-gray-700 mt-2 italic text-xl max-md:text-sm ">Leading the Beauty Industry with Purity 🛀</p>
                            <p class="text-blue-600 font-semibold text-sm tracking-wider mt-2">Ecommerce Project</p>
                        </div>
                        <div class="overflow-hidden rounded-xl max-lg:rounded-none">
                            <img src="/asset/image/s (1).jpg" alt="RB A PURE SKIN CARE" class="h-60 w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                        </div>
                        <div class="absolute top-2 right-2 bg-pink-900 text-white px-3 py-1 rounded-full text-sm opacity-0 group-hover:opacity-100 transition-all">NEW</div>
                    </div>
                </div>



                <div class="item bg-black py-8 max-lg:p-2 rounded-xl shadow-lg hover:shadow-xl transition-all overflow-hidden group">
                    <div class="flex max-lg:flex-col justify-between gap-6  relative max-lg:p-4 w-[90%] mx-auto max-lg:gap-2">
                        <div class="text-left flex flex-col justify-center max-md:text-center">
                            <h3 class="text-4xl max-lg:text-2xl font-semibold text-white">DATADEFEND TECHNOLOGIES</h3>
                            <p class="text-gray-300 mt-2 italic text-xl max-md:text-sm ">Shielding Your Digital Future, Today</p>
                            <p class="text-blue-500 font-semibold text-sm tracking-wider mt-2">CyberSec Project</p>
                        </div>
                        <div class="overflow-hidden rounded-xl max-lg:rounded-none">
                            <img src="/asset/image/cs.jpg" alt="DATADEFEND TECHNOLOGIES" class="h-60 w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                        </div>
                        <div class="absolute top-2 right-2 bg-white text-black px-3 py-1 rounded-full text-sm opacity-0 group-hover:opacity-100 transition-all">NEW</div>
                    </div>
                </div>



                <div class="item bg-yellow-100 py-8 max-lg:p-2 rounded-xl shadow-lg hover:shadow-xl transition-all overflow-hidden group">
                    <div class="flex max-lg:flex-col justify-between gap-6  relative max-lg:p-4 w-[90%] mx-auto max-md:gap-2">
                        <div class="text-left flex flex-col justify-center max-md:text-center">
                            <h3 class="text-4xl max-lg:text-2xl font-semibold text-black">VR CONSULTANT</h3>
                            <p class="text-gray-700 mt-2 italic text-xl max-md:text-sm ">Invest - Expand - Succeed</p>
                            <p class="text-blue-600 font-semibold text-sm tracking-wider mt-2">Real Estate Project</p>
                        </div>
                        <div class="overflow-hidden rounded-xl max-lg:rounded-none">
                            <img src="/asset/image/vr.jpg" alt="VR CONSULTANT" class="h-60 w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                        </div>
                        <div class="absolute top-2 right-2 bg-black text-white px-3 py-1 rounded-full text-sm opacity-0 group-hover:opacity-100 transition-all">NEW</div>
                    </div>
                </div>


                <div class="item bg-gray-200 py-8 max-lg:p-2 rounded-xl shadow-lg hover:shadow-xl transition-all overflow-hidden group">
                    <div class="flex max-lg:flex-col justify-between gap-6  relative max-lg:p-4 w-[90%] mx-auto max-md:gap-2">
                        <div class="text-left flex flex-col justify-center max-md:text-center">
                            <h3 class="text-4xl max-lg:text-2xl font-semibold text-blue-700">VSA</h3>
                            <p class="text-gray-600 mt-2 italic text-xl max-md:text-sm">Online Platform for Distance Learning</p>
                            <p class="text-blue-600 font-semibold text-sm tracking-wider mt-2">Edutech Project</p>
                        </div>
                        <div class="overflow-hidden rounded-xl max-lg:rounded-none">
                            <img src="/asset/jpeg-optimizer_Vikas-Sawant (1).png" alt="VSA" class="h-60 w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                        </div>
                        <div class="absolute top-2 right-2 bg-blue-700 text-white px-3 py-1 rounded-full text-sm opacity-0 group-hover:opacity-100 transition-all">NEW</div>
                    </div>
                </div>


            </div>
        </div>
    </section>







    <?php include 'pages/company.php' ?>


    <!-- GSAP + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        const text1 = document.getElementById("scrollLine1");
        const text2 = document.getElementById("scrollLine2");

        const scrollDistance = 1000; // Adjust scroll length for smooth animation

        // Right to Left
        gsap.to(text1, {
            xPercent: -100,
            ease: "none",
            scrollTrigger: {
                trigger: text1,
                start: "top center",
                end: `+=${scrollDistance}`,
                scrub: true,
            }
        });

        // Left to Right
        gsap.to(text2, {
            xPercent: 100,
            ease: "none",
            scrollTrigger: {
                trigger: text2,
                start: "top center",
                end: `+=${scrollDistance}`,
                scrub: true,
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");
            const statsSection = document.getElementById("stats-section");

            const options = {
                root: null,
                threshold: 0.5,
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        counters.forEach(counter => {
                            const target = +counter.getAttribute("data-target");
                            let start = 0;
                            let duration = 1000;
                            let stepTime = Math.abs(Math.floor(duration / target));


                            counter.innerText = "0";

                            const interval = setInterval(() => {
                                if (start >= target) {
                                    counter.innerText = target;
                                    clearInterval(interval);
                                } else {
                                    counter.innerText = ++start;
                                }
                            }, stepTime);
                        });
                    }
                });
            }, options);

            observer.observe(statsSection);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const serviceItems = document.querySelectorAll('.service-item');

            serviceItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    gsap.to(this.querySelector('.icon-container'), {
                        zoom: 1.0,
                        duration: 0.3
                    });
                });

                item.addEventListener('mouseleave', function() {
                    gsap.to(this.querySelector('.icon-container'), {
                        zoom: 0.9,
                        duration: 0.3
                    });
                });
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll animation
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                        entry.target.style.opacity = 1;
                    }
                });
            }, {
                threshold: 0.1
            });

            // Select all image containers
            const imageContainers = document.querySelectorAll('.relative.overflow-hidden');

            // Set initial opacity and add to observer
            imageContainers.forEach((container, index) => {
                container.style.opacity = 0;
                container.style.transform = 'translateY(20px)';
                container.style.transition = `opacity 0.5s ease, transform 0.5s ease`;
                container.style.transitionDelay = `${index * 0.1}s`;

                observer.observe(container);
            });
        });
    </script>



    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Animate elements on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(element => {
            gsap.fromTo(element, {
                y: 50,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.8,
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });

        // Alternative animation with vanilla JS
        document.addEventListener("DOMContentLoaded", function() {
            const appearOptions = {
                threshold: 0.25,
                rootMargin: "0px 0px -100px 0px"
            };

            const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        return;
                    } else {
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, appearOptions);

            document.querySelectorAll('.fade-in').forEach(element => {
                appearOnScroll.observe(element);
            });
        });
    </script>
    <script>
        const scrollContainer = document.getElementById("scrollContainer");
        const dots = document.querySelectorAll(".progress-dot");

        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                scrollContainer.style.transform = `translateX(-${index * 100}vw)`;
                dots.forEach(d => d.classList.remove("active"));
                dot.classList.add("active");
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".swiper", {
                effect: "fade",
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                parallax: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                fadeEffect: {
                    crossFade: true
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.website-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    1024: {
                        items: 1,
                    },
                },
            });
        });
    </script>




    <script>
        // Create random stars
        const starsContainer = document.getElementById('stars');
        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            star.style.width = Math.random() * 3 + 'px';
            star.style.height = star.style.width;
            star.style.left = Math.random() * 100 + 'vw';
            star.style.top = Math.random() * 100 + 'vh';
            star.style.animationDelay = Math.random() * 3 + 's';
            starsContainer.appendChild(star);
        }
    </script>
    <script>
        const toggleBtn = document.getElementById('toggleFormBtn');
        const form = document.getElementById('projectForm');
        const closeBtn = document.getElementById('closeFormBtn');


        function setInitialFormState() {
            if (window.innerWidth <= 768) {

                form.classList.add('hidden');
                toggleBtn.classList.remove('hidden');
            } else {

                form.classList.remove('hidden');
                toggleBtn.classList.add('hidden');
            }
        }

        // Run on load
        setInitialFormState();

        // Also adjust if screen is resized
        window.addEventListener('resize', setInitialFormState);

        // Hide form, show button
        closeBtn.addEventListener('click', () => {
            form.classList.add('hidden');
            toggleBtn.classList.remove('hidden');
        });

        // Show form, hide button
        toggleBtn.addEventListener('click', () => {
            form.classList.remove('hidden');
            toggleBtn.classList.add('hidden');
        });
    </script>
    <?php include "include/marquee.php" ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>