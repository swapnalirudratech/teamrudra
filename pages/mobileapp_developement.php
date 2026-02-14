<?php
$page_title = "Mobile App Development | Rudratech IT Services";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body class="font-sans antialiased text-slate-600 bg-white selection:bg-blue-500 selection:text-white">

    <?php include "include/navbar.php"; ?>

    <style>
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Modern Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glassmorphism Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        /* Hero Animation */
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

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* Custom Background Blobs */
        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.4;
        }
    </style>





    <section class="relative py-20 overflow-hidden">
        <div class="blob bg-blue-300 w-96 h-96 rounded-full top-0 left-0 mix-blend-multiply animate-blob"></div>
        <div class="blob bg-blue-200 w-96 h-96 rounded-full top-0 right-0 mix-blend-multiply animate-blob animation-delay-2000"></div>

        <div class="w-[85%] mx-auto  relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6 text-slate-900">
                        Top-Rated Mobile App <br>
                        <span class="text-blue-600">Development Company</span>
                    </h1>
                    <p class="text-lg text-slate-500 mb-8 leading-relaxed max-w-lg">
                        Looking for expert <strong>Android & iOS developers</strong>? We transform business ideas into high-performance mobile experiences with modern, scalable, and user-centric code.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/getquote" class="px-8 py-4 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition transform hover:-translate-y-1 shadow-lg shadow-blue-500/30">
                            Start Your Project
                        </a>
                        <a href="#showcase" class="px-8 py-4 bg-white text-blue-600 border border-blue-100 rounded-full font-semibold hover:bg-blue-50 transition">
                            View Portfolio
                        </a>
                    </div>

                    <div class="mt-12 flex gap-8 border-t border-slate-100 pt-8">
                        <div>
                            <h4 class="text-3xl font-bold text-slate-900">100+</h4>
                            <p class="text-sm text-slate-500">Apps Launched</p>
                        </div>
                        <div class="w-px h-10 bg-slate-200"></div>
                        <div>
                            <h4 class="text-3xl font-bold text-slate-900">4.9/5</h4>
                            <p class="text-sm text-slate-500">Client Rating</p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 relative z-10" data-aos="fade-left">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-purple-400 rounded-full opacity-20 blur-3xl transform scale-110 -z-10"></div>

                    <div class="relative mx-auto  w-full max-w-[650px] ">

                        <div class="w-full lg:w-full relative h-auto lg:h-auto flex items-center justify-center p-10">
                            <div class="absolute left-0 bottom-4 w-full h-6 bg-gray-700 rounded-full"></div>
                            <div class="w-full relative h-[320px]  flex items-center justify-center z-10 border-4 border-gray-700 rounded-2xl">

                                <div class="relative w-full h-full bg-white rounded-2xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] border border-gray-200 overflow-hidden flex flex-col ">
                                    <div class="h-10 bg-gray-50 border-b flex items-center px-4 space-x-2 shrink-0">
                                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                        <div class="ml-4 bg-white border border-gray-200 h-6 w-full max-w-[200px] rounded text-[10px] flex items-center px-2 text-gray-400 font-mono">rudratech.io/app</div>
                                    </div>
                                    <img id="feature-image" src="/asset/software/nova.jpg" alt="Feature Preview" class="w-full h-full object-cover object-top transition-opacity duration-300">
                                </div>

                                <div class="absolute -right-10 -bottom-10 w-24 h-24 bg-blue-600 rounded-full blur-2xl opacity-20 -z-10"></div>
                                <!-- <div class="absolute -left-10 -top-10 w-32 h-32 bg-purple-600 rounded-full blur-2xl opacity-20 -z-10"></div> -->
                            </div>
                        </div>


                        <!-- <div class="absolute -bottom-6 -right-4 w-[120px] sm:w-[140px] md:w-[160px] z-30">
                            <div class="bg-gray-900 border-[6px] border-gray-800 rounded-[2rem] shadow-2xl overflow-hidden ring-1 ring-black">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-gray-800 rounded-b-xl z-20"></div>

                                <div class="bg-slate-800 w-full aspect-[9/19] relative overflow-hidden group">
                                    <div class="w-full animate-scroll-mobile">
                                        <img src="/asset/software/app1.webp" alt="Mobile App Preview" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute top-0 right-0 w-full h-1/2 bg-gradient-to-b from-white/10 to-transparent pointer-events-none"></div>
                                </div>
                            </div>
                        </div> -->

                    </div>

                    <style>
                        /* Desktop Scroll (Slower, wider view) */
                        @keyframes scrollDesktop {

                            0%,
                            15% {
                                transform: translateY(0%);
                            }

                            50%,
                            65% {
                                transform: translateY(calc(-100% + 280px));
                            }

                            /* Scrolls to bottom */
                            100% {
                                transform: translateY(0%);
                            }
                        }

                        /* Mobile Scroll (Faster, narrower view) */
                        @keyframes scrollMobile {

                            0%,
                            15% {
                                transform: translateY(0%);
                            }

                            50%,
                            65% {
                                transform: translateY(calc(-100% + 250px));
                            }

                            /* Scrolls to bottom */
                            100% {
                                transform: translateY(0%);
                            }
                        }

                        .animate-scroll-desktop {
                            animation: scrollDesktop 18s ease-in-out infinite;
                        }

                        .animate-scroll-mobile {
                            animation: scrollMobile 14s ease-in-out infinite;
                            /* Slightly different speed for realism */
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-slate-50 border-y border-slate-100">
        <div class="container mx-auto text-center mb-8">
            <p class="text-sm font-semibold text-slate-400 uppercase tracking-widest">Powered by Modern Technologies</p>
        </div>
        <div class="w-[85%] mx-auto  flex flex-wrap justify-center gap-8 lg:gap-16 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
            <span class="text-xl font-bold text-slate-700">Flutter</span>
            <span class="text-xl font-bold text-slate-700">React Native</span>
            <span class="text-xl font-bold text-slate-700">iOS (Swift)</span>
            <span class="text-xl font-bold text-slate-700">Android (Kotlin)</span>
            <span class="text-xl font-bold text-slate-700">Node.js</span>
            <span class="text-xl font-bold text-slate-700">Firebase</span>
        </div>
    </section>



    <section class="py-24 bg-white relative">
        <div class="w-[85%] mx-auto ">
            <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold text-slate-900 mb-4">Complete Mobile Solutions</h2>
                <p class="text-slate-500">From concept to deployment, Rudratech covers every aspect of mobile app development.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group p-8 bg-white border border-slate-100 rounded-3xl hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Native iOS & Android</h3>
                    <p class="text-slate-500 leading-relaxed">High-performance native apps built with Swift and Kotlin for the ultimate user experience.</p>
                </div>
                <div class="group p-8 bg-white border border-slate-100 rounded-3xl hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cross-Platform</h3>
                    <p class="text-slate-500 leading-relaxed">Save time and cost with Flutter or React Native apps that work flawlessly on both iPhone and Android.</p>
                </div>
                <div class="group p-8 bg-white border border-slate-100 rounded-3xl hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">UI/UX Design</h3>
                    <p class="text-slate-500 leading-relaxed">Award-winning interfaces that are intuitive, engaging, and designed to maximize user retention.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gradient-to-br from-slate-50 to-blue-50 relative overflow-hidden">
        <div class="absolute top-10 right-0 text-9xl font-bold text-slate-300 opacity-20 pointer-events-none select-none">CONSTITUTION</div>

        <div class="w-[85%] mx-auto  relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-5/12 relative" data-aos="fade-right">
                    <div class="absolute inset-0 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>

                    <div class="relative mx-auto border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl flex flex-col justify-between overflow-hidden ring-1 ring-slate-900/5">

                        <div class="h-[32px] w-[3px] bg-gray-800 absolute -left-[17px] top-[72px] rounded-l-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>

                        <div class="rounded-[2rem] overflow-hidden w-full h-full relative bg-white font-sans">

                            <style>
                                /* --- TIMELINE CONFIG (Total Loop: 20 Seconds) --- */
                                .screen-home {
                                    animation: cycleHome 20s infinite;
                                }

                                .screen-q1 {
                                    animation: cycleQ1 20s infinite;
                                }

                                .screen-q2 {
                                    animation: cycleQ2 20s infinite;
                                }

                                .screen-res {
                                    animation: cycleRes 20s infinite;
                                }

                                .click-finger {
                                    animation: fingerAction 20s infinite;
                                }

                                .opt-correct-q1 {
                                    animation: highlightQ1 20s infinite;
                                }

                                .opt-correct-q2 {
                                    animation: highlightQ2 20s infinite;
                                }

                                .confetti-piece {
                                    animation: fall 20s infinite;
                                }

                                /* --- SCREEN CYCLES --- */
                                @keyframes cycleHome {

                                    0%,
                                    14% {
                                        opacity: 1;
                                        z-index: 50;
                                    }

                                    15%,
                                    100% {
                                        opacity: 0;
                                        z-index: 10;
                                    }
                                }

                                @keyframes cycleQ1 {

                                    0%,
                                    14% {
                                        opacity: 0;
                                        z-index: 10;
                                    }

                                    15%,
                                    39% {
                                        opacity: 1;
                                        z-index: 50;
                                    }

                                    40%,
                                    100% {
                                        opacity: 0;
                                        z-index: 10;
                                    }
                                }

                                @keyframes cycleQ2 {

                                    0%,
                                    39% {
                                        opacity: 0;
                                        z-index: 10;
                                    }

                                    40%,
                                    64% {
                                        opacity: 1;
                                        z-index: 50;
                                    }

                                    65%,
                                    100% {
                                        opacity: 0;
                                        z-index: 10;
                                    }
                                }

                                @keyframes cycleRes {

                                    0%,
                                    64% {
                                        opacity: 0;
                                        z-index: 10;
                                    }

                                    65%,
                                    95% {
                                        opacity: 1;
                                        z-index: 50;
                                    }

                                    100% {
                                        opacity: 0;
                                        z-index: 10;
                                    }
                                }

                                /* --- FINGER TAPPING --- */
                                @keyframes fingerAction {

                                    0%,
                                    10% {
                                        opacity: 0;
                                        transform: scale(1);
                                        top: 80%;
                                        left: 50%;
                                    }

                                    /* Tap Start Button */
                                    12% {
                                        opacity: 1;
                                        top: 72%;
                                        left: 50%;
                                        transform: scale(1);
                                    }

                                    13% {
                                        transform: scale(0.9);
                                    }

                                    14% {
                                        opacity: 0;
                                        transform: scale(1);
                                    }

                                    /* Tap Q1 Answer */
                                    25% {
                                        opacity: 0;
                                        top: 55%;
                                        left: 50%;
                                    }

                                    27% {
                                        opacity: 1;
                                        transform: scale(1);
                                    }

                                    28% {
                                        transform: scale(0.9);
                                    }

                                    29% {
                                        opacity: 0;
                                        transform: scale(1);
                                    }

                                    /* Tap Q2 Answer */
                                    50% {
                                        opacity: 0;
                                        top: 63%;
                                        left: 50%;
                                    }

                                    52% {
                                        opacity: 1;
                                        transform: scale(1);
                                    }

                                    53% {
                                        transform: scale(0.9);
                                    }

                                    54% {
                                        opacity: 0;
                                        transform: scale(1);
                                    }

                                    100% {
                                        opacity: 0;
                                    }
                                }

                                /* --- HIGHLIGHT CORRECT ANSWERS --- */
                                @keyframes highlightQ1 {

                                    0%,
                                    28% {
                                        background-color: white;
                                        color: #475569;
                                        border-color: #e2e8f0;
                                    }

                                    29%,
                                    40% {
                                        background-color: #dcfce7;
                                        color: #166534;
                                        border-color: #22c55e;
                                    }

                                    100% {
                                        background-color: white;
                                    }
                                }

                                @keyframes highlightQ2 {

                                    0%,
                                    53% {
                                        background-color: white;
                                        color: #475569;
                                        border-color: #e2e8f0;
                                    }

                                    54%,
                                    65% {
                                        background-color: #dcfce7;
                                        color: #166534;
                                        border-color: #22c55e;
                                    }

                                    100% {
                                        background-color: white;
                                    }
                                }

                                /* --- CONFETTI --- */
                                @keyframes fall {

                                    0%,
                                    65% {
                                        transform: translateY(-100%) rotate(0deg);
                                        opacity: 0;
                                    }

                                    66% {
                                        opacity: 1;
                                    }

                                    100% {
                                        transform: translateY(600px) rotate(720deg);
                                        opacity: 0;
                                    }
                                }

                                /* Tricolor Confetti Colors */
                                .confetti-piece:nth-child(1) {
                                    left: 10%;
                                    background: #ea580c;
                                    animation-delay: 0.1s;
                                }

                                /* Saffron */
                                .confetti-piece:nth-child(2) {
                                    left: 25%;
                                    background: #16a34a;
                                    animation-delay: 0.3s;
                                }

                                /* Green */
                                .confetti-piece:nth-child(3) {
                                    left: 40%;
                                    background: #ea580c;
                                    animation-delay: 0.1s;
                                }

                                .confetti-piece:nth-child(4) {
                                    left: 55%;
                                    background: #2563eb;
                                    animation-delay: 0.4s;
                                }

                                /* Blue (Chakra) */
                                .confetti-piece:nth-child(5) {
                                    left: 70%;
                                    background: #16a34a;
                                    animation-delay: 0.2s;
                                }

                                .confetti-piece:nth-child(6) {
                                    left: 85%;
                                    background: #ea580c;
                                    animation-delay: 0.3s;
                                }
                            </style>

                            <div class="screen-home absolute inset-0 w-full h-full bg-gradient-to-b from-orange-100 via-white to-green-100 flex flex-col items-center justify-center p-6 text-slate-800">

                                <div class="w-24 h-24 bg-white rounded-3xl flex items-center justify-center shadow-xl shadow-orange-500/10 mb-6 border border-orange-100">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg" class="w-16 h-16" alt="Logo">
                                </div>

                                <h3 class="text-3xl font-bold text-center mb-1 text-slate-900">Samvidhan</h3>
                                <p class="text-slate-500 text-sm mb-12 font-medium tracking-wide">The Learning App</p>

                                <button class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-orange-500/30 w-full transform transition hover:scale-105">
                                    Start Exam
                                </button>
                            </div>

                            <div class="screen-q1 absolute inset-0 w-full h-full bg-slate-50 flex flex-col p-6">
                                <div class="flex justify-between items-center mb-6 mt-4">
                                    <span class="font-bold text-slate-700">Q. 1/10</span>
                                    <span class="text-xs bg-orange-100 text-orange-600 px-2 py-1 rounded font-bold">Timer: 45s</span>
                                </div>
                                <div class="bg-white p-4 rounded-2xl shadow-sm mb-4 border border-slate-100">
                                    <p class="text-slate-700 font-medium text-sm leading-relaxed">Which Article deals with Equality before Law?</p>
                                </div>
                                <div class="space-y-3">
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">A. Article 19</div>
                                    <div class="opt-correct-q1 p-3 border rounded-xl text-xs font-semibold flex justify-between items-center">B. Article 14 <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg></div>
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">C. Article 21</div>
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">D. Article 32</div>
                                </div>
                                <div class="mt-auto"><button class="w-full bg-slate-800 text-white py-3 rounded-xl font-semibold text-sm">Next</button></div>
                            </div>

                            <div class="screen-q2 absolute inset-0 w-full h-full bg-slate-50 flex flex-col p-6">
                                <div class="flex justify-between items-center mb-6 mt-4">
                                    <span class="font-bold text-slate-700">Q. 2/10</span>
                                    <span class="text-xs bg-orange-100 text-orange-600 px-2 py-1 rounded font-bold">Timer: 40s</span>
                                </div>
                                <div class="bg-white p-4 rounded-2xl shadow-sm mb-4 border border-slate-100">
                                    <p class="text-slate-700 font-medium text-sm leading-relaxed">Who is the custodian of the Indian Constitution?</p>
                                </div>
                                <div class="space-y-3">
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">A. President</div>
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">B. Parliament</div>
                                    <div class="opt-correct-q2 p-3 border rounded-xl text-xs font-semibold flex justify-between items-center">C. Supreme Court <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg></div>
                                    <div class="p-3 border rounded-xl bg-white text-slate-600 text-xs">D. Prime Minister</div>
                                </div>
                                <div class="mt-auto"><button class="w-full bg-slate-800 text-white py-3 rounded-xl font-semibold text-sm">Next</button></div>
                            </div>

                            <div class="screen-res absolute inset-0 w-full h-full bg-white flex flex-col items-center justify-center p-6 text-center overflow-hidden">
                                <div class="absolute inset-0 pointer-events-none">
                                    <i class="confetti-piece absolute top-0 w-2 h-4 rounded-sm"></i>
                                    <i class="confetti-piece absolute top-0 w-3 h-3 rounded-full"></i>
                                    <i class="confetti-piece absolute top-0 w-2 h-5 transform rotate-45"></i>
                                    <i class="confetti-piece absolute top-0 w-2 h-2 rounded-sm"></i>
                                    <i class="confetti-piece absolute top-0 w-3 h-4 rounded-sm"></i>
                                    <i class="confetti-piece absolute top-0 w-2 h-3 rounded-full"></i>
                                </div>

                                <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mb-4  border border-orange-100">
                                    <span class="text-4xl">🏆</span>
                                </div>
                                <h2 class="text-xl font-bold text-slate-800 mb-1">Jai Hind!</h2>
                                <p class="text-slate-500 text-xs mb-6">Quiz Completed Successfully.</p>

                                <div class="bg-gradient-to-r from-orange-50 via-white to-green-50 p-4 rounded-xl w-full border border-slate-100 mb-4 shadow-sm">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <p class="text-xs text-slate-400 uppercase font-bold text-left">Total Score</p>
                                            <p class="text-3xl font-bold text-slate-800">20/20</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-green-600 font-bold text-sm bg-white px-2 py-1 rounded shadow-sm">100% Accuracy</span>
                                        </div>
                                    </div>
                                </div>
                                <button class="w-full bg-slate-900 text-white py-3 rounded-xl font-semibold text-sm shadow-lg">Leaderboard</button>
                            </div>

                            <div class="click-finger absolute w-8 h-8 bg-white/50 border-2 border-white rounded-full z-[60] pointer-events-none transform -translate-x-1/2 -translate-y-1/2 shadow-xl" style="top: 110%;"></div>

                        </div>
                    </div>


                </div>

                <div class="lg:w-7/12" data-aos="fade-left">
                    <div class="mb-6">
                        <span class="text-blue-600 font-bold tracking-wider uppercase text-sm bg-blue-100 px-3 py-1 rounded-full">Featured Case Study</span>
                    </div>
                    <h2 class="text-4xl font-bold text-slate-900 mb-4">
                        Indian Constitution Study <br>
                        <span class="text-slate-400 text-2xl font-normal">(Abhyas Savidhanacha)</span>
                    </h2>
                    <p class="text-lg text-slate-600 mb-6">
                        Digitizing the framework of the world's largest democracy. In partnership with <strong>Ashwazep Training & Consultancy</strong>, Rudratech developed a comprehensive learning ecosystem.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Mock Tests & Quizzes</h4>
                                <p class="text-sm text-slate-500">Real-time exam simulation.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Complete Database</h4>
                                <p class="text-sm text-slate-500">Articles, Schedules, & Amendments.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">High Performance</h4>
                                <p class="text-sm text-slate-500">Offline capabilities for seamless study.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Concept Learning</h4>
                                <p class="text-sm text-slate-500">Simplified notes and history.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="https://play.google.com/store/apps/details?id=com.indianconstitutionstudy" target="_blank" class="transform hover:scale-105 transition duration-300">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play" class="h-16">
                        </a>
                        <div class="text-sm text-slate-400">
                            <p>Compatible with</p>
                            <p class="font-semibold text-slate-600">Android 5.0+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Inside the Application</span>
                <h2 class="text-3xl lg:text-5xl font-bold text-slate-900 mt-2">A Closer Look at the Features</h2>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-12 mb-24">
                <div class="md:w-1/2 relative" data-aos="fade-right">
                    <div class="absolute inset-0 bg-blue-100 rounded-full transform -rotate-6 scale-90 -z-10"></div>
                    <img src="/asset/software/app1.webp" alt="App Dashboard Interface" class="rounded-3xl shadow-2xl border border-slate-200 mx-auto w-[280px] hover:scale-105 transition duration-500">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">Structured Legal Database</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">Organized data of the Indian Constitution into an intuitive format. Users can browse Parts, Articles, and Schedules with a clean reading interface.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-slate-700"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span> Categorized by Parts & Articles</li>
                        <li class="flex items-center text-slate-700"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span> Fast Search functionality</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-12 mb-24">
                <div class="md:w-1/2 relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-orange-100 rounded-full transform rotate-6 scale-90 -z-10"></div>
                    <img src="/asset/software/app2.webp" alt="Quiz Interface" class="rounded-3xl shadow-2xl border border-slate-200 mx-auto w-[280px] hover:scale-105 transition duration-500">
                </div>
                <div class="md:w-1/2" data-aos="fade-right">
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">Interactive Mock Tests</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">Integrated robust exam engine with instant feedback. The UI highlights correct and incorrect answers immediately for active learning.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-slate-700"><span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span> Real-time Timer & Scoring</li>
                        <li class="flex items-center text-slate-700"><span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span> Dynamic Question Randomization</li>
                    </ul>
                </div>
            </div>



        </div>
    </section>

    <section class="py-20 bg-slate-900 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 translate-y-1/2 -translate-x-1/2"></div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 ">

                <div class="lg:w-2/3" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                        Inspired by this App? <br>
                        <span class="text-blue-400">Let's Build Yours.</span>
                    </h2>
                    <p class="text-slate-300 text-lg leading-relaxed mb-8 max-w-2xl">
                        Whether you need an educational platform, an e-commerce store, or a custom business tool, Rudratech IT Services has the expertise to bring your vision to life.
                    </p>


                </div>

                <div class="lg:w-1/3 flex justify-center lg:justify-end" data-aos="zoom-in">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/get-in-touch" class="px-8 py-4 bg-blue-600 text-white rounded-full font-bold hover:bg-blue-500 transition shadow-lg shadow-blue-500/25 text-center">
                            Get In Touch
                        </a>
                        <!-- <a href="tel:+911234567890" class="px-8 py-4 bg-transparent border border-white/30 text-white rounded-full font-bold hover:bg-white hover:text-slate-900 transition text-center flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Talk to Our Developer
                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="py-24 bg-black relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-blue-600 opacity-20 filter blur-[100px] rounded-full"></div>
        <div class="w-[85%] mx-auto  relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">Crafted for a Seamless Experience</h2>
                <p class="text-slate-400 text-lg">We believe an educational app should be beautiful. Our design ensures zero eye strain.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="transform md:translate-y-12 transition duration-500 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
                    <div class="bg-gray-800 p-2 rounded-[2.5rem] shadow-2xl border border-gray-700">
                        <div class="overflow-hidden rounded-[2rem] h-[500px]">
                            <img src="/asset/image/screenshot_menu.jpg" alt="Menu" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-center text-slate-300 mt-6 font-semibold">Easy Navigation</p>
                </div>
                <div class="transform scale-110 z-10 transition duration-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gray-800 p-2 rounded-[2.5rem] shadow-[0_0_50px_rgba(37,99,235,0.3)] border border-blue-500/50">
                        <div class="overflow-hidden rounded-[2rem] h-[500px]">
                            <img src="/asset/image/screenshot_home.jpg" alt="Home" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-center text-blue-400 mt-6 font-bold text-lg">Home Dashboard</p>
                </div>
                <div class="transform md:translate-y-12 transition duration-500 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gray-800 p-2 rounded-[2.5rem] shadow-2xl border border-gray-700">
                        <div class="overflow-hidden rounded-[2rem] h-[500px]">
                            <img src="/asset/image/screenshot_settings.jpg" alt="Settings" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-center text-slate-300 mt-6 font-semibold">User Settings</p>
                </div>
            </div>
            <div class="mt-20 text-center">
                <a href="https://play.google.com/store/apps/details?id=com.indianconstitutionstudy" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-50 transition shadow-lg hover:shadow-xl">
                    <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                    </svg>
                    Experience it Yourself on Play Store
                </a>
            </div>
        </div>
    </section> -->

    <section id="showcase" class="py-24 bg-slate-50 text-slate-800 relative">
        <div class="w-[85%] mx-auto ">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 ">
                <div>
                    <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">More Work</span>
                    <h2 class="text-4xl font-bold mt-2 text-slate-900">Other Recent Masterpieces</h2>
                </div>
                <a href="/portfolio" class="inline-flex items-center gap-2 text-blue-600 border-b border-blue-600 pb-1 hover:text-blue-800 transition mt-6 md:mt-0">
                    View All Projects <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 scroll-hover ">
                    <div class="overflow-hidden h-[40vh]">
                        <img src="/asset/software/app4.JPG" alt="Online Exam Software" class="w-full object-cover object-top hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-blue-500 uppercase">EdTech</span>
                        <h4 class="text-xl font-bold text-gray-900 mt-2">Online Exam Platform</h4>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 scroll-hover ">
                    <div class="overflow-hidden h-[40vh]">
                        <img src="/asset/software/weconnect.JPG" alt="WeConnect Beauty" class="w-full  object-cover object-top hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-blue-500 uppercase">Lifestyle</span>
                        <h4 class="text-xl font-bold text-gray-900 mt-2">WeConnect Beauty</h4>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 scroll-hover ">
                    <div class="overflow-hidden h-[40vh]">
                        <img src="/asset/software/kesarbaug.JPG" alt="Kesarbaug App" class="w-full object-cover object-top hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-blue-500 uppercase">E-Commerce</span>
                        <h4 class="text-xl font-bold text-gray-900 mt-2">Kesarbaug Cold Press Oil</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="w-[85%] mx-auto ">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-slate-900">How We Create Success</h2>
                <p class="text-slate-500 mt-4">Our agile development methodology ensures transparency and quality.</p>
            </div>
            <div class="relative">
                <div class="hidden lg:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-200 -translate-y-1/2 z-0"></div>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                    <div class="relative z-10 bg-white p-6 rounded-xl border border-slate-100 shadow-lg text-center" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-16 h-16 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl font-bold mb-4 border-4 border-white shadow-sm">1</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Discovery</h3>
                        <p class="text-sm text-slate-500">We analyze your requirements, market, and competition.</p>
                    </div>
                    <div class="relative z-10 bg-white p-6 rounded-xl border border-slate-100 shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl font-bold mb-4 border-4 border-white shadow-sm">2</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Design</h3>
                        <p class="text-sm text-slate-500">Creating wireframes and prototypes that focus on user engagement.</p>
                    </div>
                    <div class="relative z-10 bg-white p-6 rounded-xl border border-slate-100 shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl font-bold mb-4 border-4 border-white shadow-sm">3</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Development</h3>
                        <p class="text-sm text-slate-500">Experts code your app using the latest scalable technologies.</p>
                    </div>
                    <div class="relative z-10 bg-white p-6 rounded-xl border border-slate-100 shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-16 h-16 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl font-bold mb-4 border-4 border-white shadow-sm">4</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Launch</h3>
                        <p class="text-sm text-slate-500">Deploying to app stores with ongoing maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[85%] mx-auto ">
            <div class="bg-blue-600 rounded-[3rem] p-12 lg:p-20 text-center relative overflow-hidden shadow-2xl shadow-blue-500/40" data-aos="zoom-in">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full -ml-20 -mb-20"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">Have an App Idea?</h2>
                    <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">Let Rudratech IT Services turn your vision into a reality. Get a free consultation and quote today.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/get-in-touch" class="px-10 py-4 bg-white text-blue-600 rounded-full font-bold hover:bg-slate-100 transition shadow-lg">
                            Get In Touch
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>