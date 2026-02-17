<?php
$page_title = "Custom CRM Development Services – Rudratech";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<style>
    /* Premium UI Logic */
    .hero-gradient {
        background: radial-gradient(circle at top right, #f8fafc, #ffffff);
    }

    .bento-card {
        background: white;
        border: 1px solid rgba(226, 232, 240, 0.8);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .bento-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 40px 80px -15px rgba(0, 0, 0, 0.05);
        border-color: #3b82f6;
    }

    .text-reveal {
        background: linear-gradient(to bottom, #1e293b 30%, #64748b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .floating-ui {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }
</style>

<body class="bg-white font-sans text-slate-900 overflow-x-hidden">
    <?php include "include/navbar.php" ?>

    <section class="relative h-[100vh] max-md:h-[80vh] max-md:pt-10 flex items-center justify-center hero-gradient pt-40 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-50 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-indigo-50 rounded-full blur-[120px] opacity-60"></div>

        <div class="container mx-auto w-[85%] relative z-10">
            <div class="text-center max-w-4xl mx-auto mb-16 max-md:mb-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 border border-slate-200 mb-8">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse max-md:hidden"></span>
                    <span class="text-[10px] font-bold tracking-[0.3em] text-slate-500 uppercase">Enterprise Workflow Engineering</span>
                </div>
                <h1 class="text-3xl md:text-6xl font-black tracking-tighter text-reveal leading-[0.9] mb-8">
                    Transforming Business with <span class="text-blue-600">Custom CRM.</span>
                </h1>
                <p class="text-xl max-md:text-sm text-slate-500 mb-10 leading-relaxed font-medium">
                    Rudratech develops tailored CRM systems to manage leads, automate workflows, and enhance customer relationships with surgical precision.
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="/get-in-touch" class="max-md:text-xs max-md:px-8 max-md:py-2 bg-slate-950 text-white px-12 py-5 rounded-2xl font-bold hover:bg-blue-600 transition-all shadow-2xl shadow-slate-200">Get Free Consultation</a>
                </div>
            </div>


            <div class="relative max-w-6xl mx-auto  ">
                <div class="max-md:rounded bg-white rounded-[3rem]  border-[12px] border-white shadow-[0_60px_120px_-20px_rgba(0,0,0,0.12)] overflow-hidden">
                    <img src="/asset/software/crm-admin.png" class="w-full " alt="CRM Main Dashboard">
                </div>

            </div>
        </div>
    </section>




    <section class="py-20 max-md:py-12 bg-white">
        <div class="w-[85%] mx-auto grid lg:grid-cols-2 gap-24 items-center max-md:gap-8">
            <div>
                <h2 class="text-3xl md:text-6xl font-black tracking-tighter mb-8 leading-tight">Manage Leads & <br /> Processes <span class="text-blue-600">Efficiently.</span></h2>
                <p class=" text-slate-500 leading-relaxed mb-10">
                    A well-built CRM centralizes customer data, tracks interactions, and automates business processes. At Rudratech, we design CRMs that are user-friendly, secure, and scalable, helping you manage your operations efficiently.
                </p>
                <div class="space-y-6">
                    <div class="flex gap-6 items-start">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 font-black">01</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Centralized Customer Data</h4>
                            <p class="text-slate-500 text-sm">Every lead, interaction, and deal stored in one single source of truth.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 font-black">02</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Smart Workflow Automation</h4>
                            <p class="text-slate-500 text-sm">Automate follow-ups and approvals to save your team hundreds of hours.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-4 rounded-2xl overflow-hidden shadow-2xl border border-slate-100 max-md:shadow-none">
                <video
                    class="w-full h-[500px] max-md:h-[200px] object-cover"
                    autoplay
                    muted
                    loop
                    playsinline>
                    <source src="/asset/software/crm.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>


            </div>
            <!-- <div class="relative">
                <div class="absolute -inset-4 bg-slate-50 rounded-[4rem] -rotate-3"></div>
                <img src="/asset/software/hr-crm.webp" class="relative rounded-[3rem] shadow-2xl z-10 border-8 border-white" alt="CRM Logic">
            </div> -->
        </div>
    </section>



    <section class="relative py-24 max-md:py-12 bg-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-30">
            <svg class="absolute inset-0 h-full w-full stroke-slate-200" fill="none">
                <defs>
                    <pattern id="carousel-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                        <path d="M.5 60V.5H60" stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#carousel-grid)" />
            </svg>
        </div>

        <div class="relative z-10 w-[85%] mx-auto max-md:w-[90%]">
            <div class="text-center mb-16 max-md:mb-4">
                <h2 class="text-4xl md:text-7xl font-black text-slate-900 tracking-tighter">
                    Module <span class="text-blue-600">Showcase</span>
                </h2>
            </div>

            <div class="bg-white rounded-[2rem] p-3 max-md:p-1 shadow-xl max-md:shadow-none border border-slate-100 mb-12 flex flex-wrap justify-center gap-2 max-w-4xl mx-auto">
                <button onclick="switchCarousel('patients')" id="btn-patients" class="tab-btn max-md:text-xs max-md:px-4 max-md:py-2  active-tab flex items-center gap-2 px-6 py-3 rounded-2xl font-bold text-sm transition-all">
                    <i class="fas fa-user-injured"></i> Patients
                </button>
                <button onclick="switchCarousel('employees')" id="btn-employees" class="tab-btn max-md:text-xs max-md:px-4 max-md:py-2  flex items-center gap-2 px-6 py-3 rounded-2xl font-bold text-sm transition-all text-slate-500 hover:bg-slate-50">
                    <i class="fas fa-users-cog"></i> Employees
                </button>
                <button onclick="switchCarousel('billing')" id="btn-billing" class="tab-btn max-md:text-xs max-md:px-4 max-md:py-2  flex items-center gap-2 px-6 py-3 rounded-2xl font-bold text-sm transition-all text-slate-500 hover:bg-slate-50">
                    <i class="fas fa-file-invoice-dollar"></i> Billing
                </button>
            </div>

            <div id="carousel-viewport" class="relative min-h-[500px] flex items-center justify-center">
            </div>

            <div id="carousel-dots" class="flex justify-center gap-3 mt-12 max-md:hidden">
            </div>
        </div>
    </section>

    <style>
        .active-tab {
            background: #0f172a !important;
            color: white !important;
        }

        /* Next-level styling for the image container */
        .screenshot-container {

            /* Lighter slate background */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            /* Adds breathing room around the screenshot */
        }

        .screenshot-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Ensures the whole image is visible without cropping */
            filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.1));
            /* Adds depth to the software screen */
            border-radius: 1rem;
        }

        .dot-active {
            background: #2563eb !important;
            width: 2rem !important;
        }

        .dot {
            height: 0.5rem;
            width: 0.5rem;
            background: #cbd5e1;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slide {
            animation: slideIn 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
    </style>

    <script>
        const crmData = {
            patients: [{
                title: "Patient Directory",
                desc: "Centralized SQL-optimized hub for real-time patient data management and history tracking.",
                img: "/asset/software/patient.png",
                tag: "PHP Backend"
            }],
            employees: [{
                title: "Staff Roster",
                desc: "Efficient doctor and nurse scheduling with dynamic shift management and conflict alerts.",
                img: "/asset/software/staff.png",
                tag: "Operations"
            }],
            billing: [{
                title: "Invoice Generator",
                desc: "Automated billing engine with integrated GST calculations and insurance claim processing.",
                img: "/asset/software/bill.png",
                tag: "Finance"
            }]
        };

        let currentCategory = 'patients';
        let currentIndex = 0;

        function switchCarousel(catId) {
            currentCategory = catId;
            currentIndex = 0;

            // Update Tabs
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active-tab');
                btn.classList.add('text-slate-500');
            });
            document.getElementById('btn-' + catId).classList.add('active-tab');

            renderSlide();
        }

        function renderSlide() {
            const viewport = document.getElementById('carousel-viewport');
            const dotsContainer = document.getElementById('carousel-dots');
            const data = crmData[currentCategory][currentIndex];

            // Updated Render Slide with better image handling
            viewport.innerHTML = `
            <div class="w-full bg-white rounded-[4rem] border border-slate-100 shadow-2xl overflow-hidden animate-slide max-md:rounded-xl max-md:shadow-md">
                <div class="flex flex-col lg:flex-row items-stretch min-h-[500px]">
                    <div class="w-full lg:w-2/5 p-8 md:p-16 flex flex-col justify-center">
                        <span class="text-blue-600 font-bold uppercase tracking-[0.2em] text-[10px] mb-4 block">${data.tag}</span>
                        <h3 class="text-3xl md:text-5xl font-black text-slate-900 mb-6 leading-tight">${data.title}</h3>
                        <p class="text-slate-500 text-lg leading-relaxed mb-8">${data.desc}</p>
                        <a href="/contact" class="inline-flex items-center gap-2 text-slate-900 font-bold border-b-2 border-blue-600 pb-1 hover:text-blue-600 transition-colors w-max">
                            Explore Module Features <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="w-full lg:w-3/5 screenshot-container border-l border-slate-100">
                        <img src="${data.img}" alt="${data.title}" class="w-full h-full object-contain border-4 border-black">
                    </div>
                </div>
            </div>
        `;

            // Render Dots (only if more than 1 image in category)
            if (crmData[currentCategory].length > 1) {
                dotsContainer.innerHTML = crmData[currentCategory].map((_, i) => `
                <div onclick="goToIndex(${i})" class="dot ${i === currentIndex ? 'dot-active' : ''}"></div>
            `).join('');
            } else {
                dotsContainer.innerHTML = '';
            }
        }

        function goToIndex(index) {
            currentIndex = index;
            renderSlide();
        }

        switchCarousel('patients');
    </script>



    <section class="relative py-20 max-md:py-12 bg-white overflow-hidden border-t border-slate-100">
        <div class="absolute inset-0 z-0">
            <svg class="absolute inset-0 h-full w-full stroke-slate-100 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="crm-grid" width="60" height="60" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M.5 60V.5H60" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#crm-grid)" />
            </svg>
            <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-blue-50/50 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-[10%] left-[-5%] w-[400px] h-[400px] bg-indigo-50/40 rounded-full blur-[100px]"></div>
        </div>

        <div class="relative z-10 w-[85%] mx-auto">
            <div class="mb-20 max-md:mb-10">
                <h3 class="text-blue-600 font-bold tracking-[0.3em] uppercase text-xs mb-4">Strategic Engineering</h3>
                <h2 class="text-3xl md:text-7xl font-black text-slate-900 tracking-tighter leading-tight">
                    Tailored <span class="text-blue-600">CRM Services</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-md:gap-4">

                <div class="group bg-white rounded-[3rem] p-4 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-blue-200 transition-all duration-500">
                    <div class="rounded-[2.2rem] overflow-hidden h-64 mb-8 relative bg-slate-50">
                        <img src="/asset/software/create-crm.png" alt="Custom CRM Development"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/20 to-transparent"></div>
                    </div>
                    <div class="px-6 pb-6 text-center">
                        <h4 class="text-2xl font-black text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">Custom CRM Development</h4>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Fully customized CRM software built around your business processes. No generic templates, just pure business logic.
                        </p>
                    </div>
                </div>

                <div class="group bg-white rounded-[3rem] p-4 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-blue-200 transition-all duration-500 ">
                    <div class="rounded-[2.2rem] overflow-hidden h-64 mb-8 relative bg-slate-50">
                        <img src="/asset/software/cus-crm.webp" alt="CRM Integration"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/20 to-transparent"></div>
                    </div>
                    <div class="px-6 pb-6 text-center">
                        <h4 class="text-2xl font-black text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">CRM Integration</h4>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Seamlessly sync with WhatsApp, Gmail, ERP, and payment gateways to centralize your operations.
                        </p>
                    </div>
                </div>

                <div class="group bg-white rounded-[3rem] p-4 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-blue-200 transition-all duration-500">
                    <div class="rounded-[2.2rem] overflow-hidden h-64 mb-8 relative bg-slate-50">
                        <img src="/asset/software/analyticc.avif" alt="Analytics & Reporting"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/20 to-transparent"></div>
                    </div>
                    <div class="px-6 pb-6 text-center">
                        <h4 class="text-2xl font-black text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">Analytics & Reporting</h4>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Real-time dashboards to monitor performance and improve decision-making with data-driven insights.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white max-md:py-10">
        <div class="w-[85%] mx-auto flex flex-col lg:flex-row items-start  gap-16  max-md:gap-8">
            <div class="flex flex-col  items-start   gap-16 max-md:gap-6 ">
                <h2 class="text-3xl md:text-6xl font-black leading-tight">CRM Solutions That <br /> <span class="text-blue-600">Deliver Real Results.</span></h2>
                <div class="">
                    <span class="text-xs font-black tracking-widest text-slate-400 uppercase mb-4 block">Logistics Management</span>
                    <h3 class="text-3xl font-black mb-6">Automated Lead Tracking & Shipment Hub</h3>
                    <p class="text-slate-500 text-lg mb-8">Integrated property listings, client communication, and reporting for high-volume sales teams.</p>
                    <a href="/project-details" class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1">View Case Study</a>
                </div>
            </div>



            <div class="lg:w-1/2 overflow-hidden rounded-[3rem] shadow-2xl max-md:rounded-xl">
                <img src="/asset/software/crm2.webp" class="w-full h-[500px] max-md:h-[300px] group-hover:scale-110 transition-transform duration-1000" alt="CRM Project">
            </div>

        </div>
    </section>






    <section class="py-24 bg-white max-md:py-12">
        <div class="w-[85%] mx-auto max-md:w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-start">

                <div class="bg-slate-950 rounded-[2.5rem] pt-12 pl-12 pr-12 text-white relative overflow-hidden max-md:rounded-none">
                    <h2 class="text-4xl font-black mb-6 leading-tight max-md:text-3xl">Build Your CRM <br /> The Rudratech Way</h2>
                    <p class="text-slate-400 mb-10 leading-relaxed">
                        We don't just "setup" software; we write it. Our architects use raw code to build high-concurrency CRM systems that out-perform and out-scale standard market templates.
                    </p>
                    <a href="/get-in-touch" class="inline-flex items-center gap-3 bg-blue-600 px-8 py-4 rounded-2xl font-bold hover:bg-blue-500 transition-all">
                        Start Custom Build <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="mt-12 rounded-2xl overflow-hidden border-4 border-slate-800 shadow-2xl bg-slate-900 p-2">
                        <img src="/asset/software/custom-crm.webp" alt="Rudratech Custom CRM Architecture" class="w-full object-contain rounded-xl">
                    </div>
                </div>

                <div class="max-md:w-[85%] max-md:mx-auto">
                    <div class="mb-10">
                        <span class="px-4 py-1.5 rounded-full border border-blue-400 text-slate-800 text-xs font-bold uppercase tracking-widest bg-white shadow-sm">The Development Advantage</span>
                        <h2 class="text-4xl max-md:text-2xl font-black text-slate-900 mt-6">Why High-Growth Teams <br> Build With Us</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="faq-item bg-white border-2 border-blue-600 rounded-2xl p-6 shadow-sm cursor-pointer transition-all duration-300">
                            <div class="flex justify-between items-center mb-4 faq-trigger">
                                <h4 class="font-bold text-slate-900">1. Do you use PHP and SQL for the core engine?</h4>
                                <i class="fas fa-minus text-xs icon-toggle"></i>
                            </div>
                            <div class="faq-content overflow-hidden transition-all duration-300 max-h-40">
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    Yes. We utilize a robust PHP backend with optimized SQL databases to handle millions of records with millisecond response times. This ensures your CRM is fast, reliable, and easy to maintain.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item bg-white border border-slate-100 rounded-2xl p-6 shadow-sm cursor-pointer hover:border-blue-400 transition-all duration-300">
                            <div class="flex justify-between items-center faq-trigger">
                                <h4 class="font-bold text-slate-900">2. Can we add custom modules like Pharmacy or Payroll later?</h4>
                                <i class="fas fa-plus text-xs icon-toggle"></i>
                            </div>
                            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0">
                                <p class="text-slate-500 text-sm leading-relaxed mt-4">
                                    Absolutely. Because we own the code, we can expand the architecture at any time. Whether it's a Hospital Management module or an Enterprise Payroll system, we build it into your existing core.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item bg-white border border-slate-100 rounded-2xl p-6 shadow-sm cursor-pointer hover:border-blue-400 transition-all duration-300">
                            <div class="flex justify-between items-center faq-trigger">
                                <h4 class="font-bold text-slate-900">3. How do you handle real-time data and notifications?</h4>
                                <i class="fas fa-plus text-xs icon-toggle"></i>
                            </div>
                            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0">
                                <p class="text-slate-500 text-sm leading-relaxed mt-4">
                                    We implement JavaScript and AJAX-based polling or WebSockets for real-time updates. This allows your team to see new leads, messages, or patient status changes instantly without refreshing the page.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item bg-white border border-slate-100 rounded-2xl p-6 shadow-sm cursor-pointer hover:border-blue-400 transition-all duration-300">
                            <div class="flex justify-between items-center faq-trigger">
                                <h4 class="font-bold text-slate-900">4. Will the CRM work on mobile browsers?</h4>
                                <i class="fas fa-plus text-xs icon-toggle"></i>
                            </div>
                            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0">
                                <p class="text-slate-500 text-sm leading-relaxed mt-4">
                                    Yes. Every CRM we develop is 100% responsive. We use CSS Grid and Flexbox to ensure your admin dashboard is as powerful on a smartphone as it is on a desktop.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item bg-white border border-slate-100 rounded-2xl p-6 shadow-sm cursor-pointer hover:border-blue-400 transition-all duration-300">
                            <div class="flex justify-between items-center faq-trigger">
                                <h4 class="font-bold text-slate-900">5. Is there a recurring monthly license fee?</h4>
                                <i class="fas fa-plus text-xs icon-toggle"></i>
                            </div>
                            <div class="faq-content overflow-hidden transition-all duration-300 max-h-0">
                                <p class="text-slate-500 text-sm leading-relaxed mt-4">
                                    No. Once the development is complete, the software belongs to you. You only pay for the initial engineering and any future feature updates you request.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const content = item.querySelector('.faq-content');
                const icon = item.querySelector('.icon-toggle');

                // Toggle current item
                if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                    content.style.maxHeight = '0px';
                    icon.classList.replace('fa-minus', 'fa-plus');
                    item.classList.replace('border-blue-600', 'border-slate-100');
                    item.classList.remove('border-2');
                    item.classList.add('border');
                } else {
                    // Close other open items (optional)
                    document.querySelectorAll('.faq-content').forEach(other => other.style.maxHeight = '0px');
                    document.querySelectorAll('.icon-toggle').forEach(other => other.classList.replace('fa-minus', 'fa-plus'));
                    document.querySelectorAll('.faq-item').forEach(other => {
                        other.classList.replace('border-blue-600', 'border-slate-100');
                        other.classList.remove('border-2');
                        other.classList.add('border');
                    });

                    // Open current
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.replace('fa-plus', 'fa-minus');
                    item.classList.replace('border-slate-100', 'border-blue-600');
                    item.classList.remove('border');
                    item.classList.add('border-2');
                }
            });
        });
    </script>

    <section class="py-24  bg-white relative overflow-hidden max-md:py-12">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[300px] bg-blue-50/50 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 w-[85%] mx-auto">
            <div class="max-w-8xl mx-auto text-center">


                <h2 class="text-xl md:text-5xl font-black text-slate-900 tracking-tighter mb-12">
                    Let's Build Your <span class="text-blue-600">Custom CRM Solution With Rudratech</span>
                </h2>

                <div class="inline-flex flex-col sm:flex-row p-2 bg-white rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] border border-slate-100 gap-2 max-md:shadow-none">
                    <a href="/get-in-touch" class="px-10 py-5 bg-blue-600 text-white rounded-[2rem] font-bold text-lg hover:bg-slate-900 transition-all duration-300 shadow-lg shadow-blue-200">
                        Get Free Consultation
                    </a>
                    <a href="tel:+917208344432" class="px-10 py-5 bg-transparent text-slate-600 rounded-[2rem] font-bold text-lg hover:bg-slate-50 transition-all duration-300 flex items-center justify-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Talk to Expert
                    </a>
                </div>

                <p class="mt-8 text-slate-400 font-medium text-sm">
                    Custom PHP Development | Custom CRM Development | Custom ERP Development
                </p>
            </div>
        </div>
    </section>

    <?php include "include/footer.php" ?>
</body>

</html>