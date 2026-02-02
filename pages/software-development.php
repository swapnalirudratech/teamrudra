<?php
$page_title = "software-development"
?>




<!DOCTYPE html>
<html lang="en">

<?php include "include/header.php"; ?>

<body>
    <?php
    include "include/navbar.php";
    ?>

    <style>
        .div2 {
            background: linear-gradient(135deg, #032541 0%, #01162a 100%);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        .form-input {
            transition: all 0.3s ease;

        }

        .form-input:focus {
            border-color: rgb(0, 119, 255);
            box-shadow: 0 0 0 3px rgba(0, 210, 255, 0.2);
            background: rgba(227, 227, 230, 0.8);
        }

        #typed-text::after {
            content: '|';
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .text-gradient {
            background: linear-gradient(to top, rgb(3, 120, 255), rgb(2, 90, 206));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .btn-submit {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 198, 255, 0.3);
        }

        .service-card {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            background-color: white;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .icon-container {
            background-color: #f1f5f9;
            transition: all 0.3s ease;
        }

        .service-card:hover .icon-container {
            background-color: rgb(224, 237, 255);
        }

        .check-item {
            transition: all 0.2s ease;
        }

        .service-card:hover .check-item {
            transform: translateX(2px);
        }

        .check-icon {
            color: #4283fa;
        }

        @keyframes typing {
            0% {
                width: 0
            }

            40%,
            60% {
                width: 100%
            }

            80%,
            100% {
                width: 0
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent
            }
        }

        .typing {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;

            animation: typing 6s steps(30, end) infinite, blink 0.75s step-end infinite;
        }
    </style>

    <div class="relative w-full h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] flex items-center justify-center p-4 bg-cover bg-center bg-no-repeat" style="background-image: url('/asset/bgimg.jpg');">

        <!-- Overlay -->
        <!-- <div class="absolute inset-0 bg-black/60 z-0"></div> -->

        <!-- Content Wrapper -->
        <div class="relative z-10 container mx-auto w-[85%]">
            <div class="flex flex-col lg:flex-row gap-8 items-center justify-between w-full">

                <!-- Left Content Column -->
                <div class="w-full lg:w-1/2 space-y-6">
                    <div class="flex items-center space-x-2 w-fit rounded-full border border-blue-600 px-4 py-1">
                        <div class="w-3 h-3 bg-blue-600 rounded-full animate-pulse"></div>
                        <h3 class="text-lg font-medium text-blue-600">Leading</h3>
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-5xl md:text-6xl font-medium text-gradient">
                            SOFTWARE
                        </h2>
                        <div class="h-16 flex items-center">
                            <span id="typed-element" class="text-4xl md:text-5xl font-medium text-white"></span>
                        </div>
                    </div>

                    <div class="h-1 w-32 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full"></div>
                </div>

            </div>
        </div>
    </div>




    <div class="container mx-auto w-[80%] max-lg:w-[85%] py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4 typing">How We Help Your Business</h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
        </div>

        <div class="grid max-lg:grid-cols-3  max-md:grid-cols-1 grid-cols-3 gap-6">
            <!-- Process Automation Card -->
            <div class="service-card p-6 rounded-lg h-full flex flex-col max-lg:p-3">
                <div class="mb-5 flex justify-start">
                    <div class="icon-container p-3 rounded-lg">
                        <img src="/asset/process.png" class="w-12 h-12 max-lg:w-6 max-lg:h-6" alt="">
                    </div>
                </div>

                <h3 class="text-xl max-lg:text-base font-medium text-gray-800 mb-4">Process Automation</h3>

                <div class="flex-grow space-y-3 max-lg:text-sm">
                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Streamline Business Operations</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Eliminate Manual Repetitive Tasks</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Optimize Your Efficiency</span>
                    </div>
                </div>
            </div>

            <!-- Unlock Scalability Card -->
            <div class="service-card p-6 rounded-lg h-full flex flex-col max-lg:p-3">
                <div class="mb-5 flex justify-start">
                    <div class="icon-container p-3 rounded-lg">
                        <img src="/asset/graph.png" class="w-12 h-12 max-lg:w-6 max-lg:h-6" alt="">
                    </div>
                </div>

                <h3 class="text-xl max-lg:text-base font-medium text-gray-800 mb-4">Unlock Scalability</h3>

                <div class="flex-grow space-y-3 max-lg:text-sm">
                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Scale To Multi-Million User Base</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Add Features Without Limitations</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Expand Without Constraints</span>
                    </div>
                </div>
            </div>

            <!-- Reduce Costs Card -->
            <div class="service-card p-6 rounded-lg h-full flex flex-col max-lg:p-3">
                <div class="mb-5 flex justify-start">
                    <div class="icon-container p-3 rounded-lg">
                        <img src="/asset/cost.png" class="w-12 h-12 max-lg:w-6 max-lg:h-6" alt="">
                    </div>
                </div>

                <h3 class="text-xl max-lg:text-base font-medium text-gray-800 mb-4">Reduce Costs</h3>

                <div class="flex-grow space-y-3 max-lg:text-sm">
                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Eliminate Recurring Monthly Costs</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Optimize Tech Infrastructure</span>
                    </div>

                    <div class="check-item flex items-start">
                        <svg class="check-icon flex-shrink-0 h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Streamline Operational Expense</span>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Features Section -->
    <section class="py-16 border-t border-gray-200 w-full w-[80%] max-lg:w-[85%] mx-auto">
        <h2 class="text-2xl md:text-4xl font-normal text-slate-800 mb-8">
            End-to-End <br>Software Development Services
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Software Consulting -->
            <div class="relative bg-cover  bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/coding.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Software Consulting</h3>
                </div>
            </div>

            <!-- Custom Software Development -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/custom.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Custom Software Development</h3>
                </div>
            </div>

            <!-- Enterprise Software Development -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/Enterprise-Software Development.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Enterprise Software Development</h3>
                </div>
            </div>

            <!-- Software Product Development -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/Software-Product Development.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Software Product Development</h3>
                </div>
            </div>

            <!-- Software Migration & Integration -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/Software Migration & Integration.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Software Migration & Integration</h3>
                </div>
            </div>

            <!-- Agile Application Development -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/Agile Application Development.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Agile Application Development</h3>
                </div>
            </div>

            <!-- API Development -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/API.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">API Development</h3>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/UIUX Design.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">UI/UX Design</h3>
                </div>
            </div>

            <!-- Application Modernization -->
            <div class="relative bg-cover bg-center h-64 rounded-xl border border-gray-300 overflow-hidden"
                style="background-image: url('/asset/Application Modernization.jpg');">
                <div class="absolute inset-0 bg-black/40 rounded-xl"></div>
                <div class="absolute bottom-4 left-4 z-10">
                    <h3 class="text-lg font-semibold text-white drop-shadow-md">Application Modernization</h3>
                </div>
            </div>

        </div>
    </section>




    <section class="relative text-white flex items-center max-lg:h-[30vh] max-md:h-[50vh] h-[50vh] bg-cover bg-center" style="background-image: url('/asset/glass.jpg');">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

        <!-- Content -->
        <div class="relative  max-w-5xl max-lg:w-[80%] mx-auto text-center">
            <h2 class="max-lg:text-4xl max-md:text-2xl text-4xl font-semibold mb-4">
                Got a Unique Software Idea? <span class="text-blue-400">We’ll Build It.</span>
            </h2>

            <p class="text-lg max-md:text-sm max-lg:text-xl text-gray-300 mb-6">
                Custom solutions. Top developers. Fast execution.
            </p>

            <div class="mt-8">
                <a href="/getin-touch" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 transition-colors duration-300 text-white px-6 py-3 rounded-full text-lg font-medium group">
                    Let’s Discuss
                    <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>



    <div class="container w-[80%] max-lg:w-[85%] mx-auto py-20 max-lg:py-16 border-t border-gray-200">
        <!-- Hero Section -->
        <div class="flex flex-col md:flex-row items-center mb-24 max-md:mb-8">
            <!-- Left Text -->
            <div class="w-full ">
                <h2 class="text-4xl max-lg:text-2xl font-normal mb-2  max-lg:text-left max-md:mb-6">
                    Time move forward <span class="block ">With cutting edge technologies.</span>
                </h2>
            </div>


            <!-- Right Call to Action Box -->
            <div class="w-full lg:w-2/3  flex items-end justify-end">
                <div class="w-full max-lg:w-full bg-black text-white p-4 rounded flex items-center max-md:w-full ">
                    <div class="mr-4">
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-base ">Let's Leverage <span class="font-bold">New-Gen cutting edge Technologies</span> to make your Business Future-Proof.</p>
                        <div class="w-4 h-4 bg-black rotate-45 absolute -bottom-6 -left-10"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Image and Grid Section -->
        <div class="relative flex flex-col md:flex-row items-center ">
            <!-- Main Image -->
            <div class="w-full h-full mb-6 relative">
                <img src="/asset/technology-person.jpg" alt="Technology Person" class="w-3/4 h-[70vh]  max-lg:h-[40vh] max-md:w-full object-cover object-top rounded-lg shadow-lg" />
            </div>

            <!-- Grid overlay -->
            <div class="absolute -top-16 right-0 w-3/6 h-full max-md:w-full max-md:relative  max-md:top-4">
                <div class="grid grid-cols-2 h-full max-md:text-xs">
                    <!-- Generative AI -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">Generative AI for Businesses</p>
                            </div>
                        </div>

                    </div>

                    <!-- IoT -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">(IOT)<br>Internet of Things</p>
                            </div>
                        </div>

                    </div>

                    <!-- Blockchain -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">Blockchain &<br>Decentralization</p>
                            </div>
                        </div>

                    </div>

                    <!-- AI & ML -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">Artificial<br>Intelligence & ML</p>
                            </div>
                        </div>

                    </div>

                    <!-- Big Data Analytics -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">Big Data Analytics</p>
                            </div>
                        </div>

                    </div>

                    <!-- Data Science -->
                    <div class="border border-gray-200 bg-white p-4 flex items-center justify-between">
                        <div class="flex max-md:flex-col max-md:items-start max-md:gap-2 items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold">Data Science</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <style>
        .hero-container {
            display: flex;
            min-height: 100vh;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .left-panel {
            width: 50%;
            position: sticky;
            top: 40px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 4rem 0 2rem;

            z-index: 10;
        }

        .cta-button {
            display: inline-block;
            background: #3182ce;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(49, 130, 206, 0.25);
            animation: fadeIn 1.6s ease-in;
            font-size: 1rem;
            text-align: center;
        }

        .cta-button:hover {
            background: #2c5282;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(49, 130, 206, 0.3);
        }

        .right-panel {
            width: 50%;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            /* gap: 2rem; */
        }

        .image-container {
            width: 100%;
            padding: 1rem 0;
            transition: transform 0.3s ease;
        }

        .image-container:hover {
            transform: translateY(-5px);
        }

        .solution-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
            display: block;
        }

        .caption {
            text-align: center;
            margin-top: 1rem;
            color: #4a5568;
            font-weight: 500;
            font-size: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ✅ Mobile & Tablet Responsive Styles */
        @media (max-width: 768px) {
            .hero-container {
                flex-direction: column;
                /* padding: 2rem 1rem; */
            }

            .left-panel,
            .right-panel {
                width: 100%;
                position: relative;
                height: auto;
                min-height: auto;
                padding: 0;
            }

            .left-panel {
                padding-bottom: 1rem;
            }

            .cta-button {
                font-size: 0.95rem;
                padding: 0.6rem 1.5rem;
            }

            .caption {
                font-size: 0.9rem;
            }

            .tagline {

                text-align: center;
            }

            .subheading {
                font-size: 1.25rem;
                text-align: center;
            }
        }
    </style>


    <div class="w-full flex items-center justify-center bg-gray-100">

        <div class="hero-container w-[80%] max-lg:w-[85%] mx-auto">
            <!-- Left Sticky Panel -->
            <div class="left-panel gap-4 max-md:flex-col max-md:items-center max-md:text-center">
                <h2 class="tagline text-3xl max-md:text-2xl">Custom Software Development Solutions For Every Business Function</h2>
                <p class="subheading text-xl">Focused on Your Success</p>
                <a href="/getin-touch" class="cta-button mt-6 w-fit max-md:mt-2 max-md:mb-8">Get Started</a>
            </div>

            <!-- Right Scrollable Panel -->
            <div class="right-panel">
                <div class="image-container">
                    <img src="/asset/image/1 (2).png" alt="HRMS SOFTWARE" class="solution-image">
                    <p class="caption">HRMS Software</p>
                </div>

                <div class="image-container">
                    <img src="/asset/image/2 (2).png" alt="ERP Software" class="solution-image">
                    <p class="caption">ERP Software</p>
                </div>

                <div class="image-container">
                    <img src="/asset/image/3 (2).png" alt="Billing Software" class="solution-image">
                    <p class="caption">Billing Software</p>
                </div>

                <div class="image-container">
                    <img src="/asset/image/CRM.png" alt="CRM Software" class="solution-image">
                    <p class="caption">CRM Software</p>
                </div>
            </div>

        </div>


    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Make sure Typed.js is properly loaded
            if (typeof Typed !== 'undefined') {
                var typed = new Typed('#typed-element', {
                    strings: ['DEVELOPMENT', 'SOLUTIONS', 'INNOVATION', 'EXCELLENCE'],
                    typeSpeed: 80,
                    backSpeed: 40,
                    backDelay: 1500,
                    startDelay: 500,
                    loop: true,
                    showCursor: false
                });
            } else {
                console.error('Typed.js library not loaded properly');
                // Fallback if Typed.js fails
                document.getElementById('typed-element').textContent = 'DEVELOPMENT';
            }


        });
    </script>



    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "./include/footer.php" ?>
</body>

</html>