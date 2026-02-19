<?php
$page_title = "IT Consulting & Advisory Services | Rudratech";
$meta_description = "Rudratech delivers expert IT consulting & advisory services to help businesses optimize systems, reduce costs, and scale digitally. Strategy, implementation, and ongoing support.";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include "include/header.php"; ?>

<style>
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 1s ease-out forwards;
    }

    .slide-in-right {
        animation: slideInRight 1.2s ease-out forwards;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Subtle dot pattern for modern sections */
    .bg-dots {
        background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
        background-size: 24px 24px;
    }
</style>

<body class="bg-white text-gray-800 font-sans">

    <?php include "include/navbar.php" ?>

    <div class="w-full flex h-[90vh] max-lg:h-[40vh] max-md:h-[60vh] relative overflow-hidden gradient-bg">
        <div class="w-full lg:w-[70%] max-md:w-full relative bg-white flex flex-col justify-center z-10 rounded-br-[50%] max-md:rounded-none shadow-lg">
            <div class="w-[80%] max-md:w-[85%] mx-auto fade-in-up">
                <div class="mb-6">
                    <span class="px-4 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full border border-blue-100">
                        IT Consulting & Advisory
                    </span>
                </div>
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 leading-tight">
                    Strategic IT Consulting <br class="hidden md:block"> That Drives Growth
                </h1>
                <p class="mt-6 text-lg md:text-xl text-gray-600 max-w-2xl leading-relaxed">
                    Rudratech provides professional IT consulting and advisory services to help businesses plan, implement, and optimize technology for long-term success.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="px-8 py-4 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-800 transition transform hover:-translate-y-1 shadow-lg shadow-blue-700/30 flex items-center justify-center w-fit">
                        <i class="fas fa-headset mr-2"></i>
                        Get Free IT Consultation
                    </a>
                </div>
            </div>
        </div>

        <div class="w-[50%] hidden md:block absolute top-20 right-8 z-50 slide-in-right max-lg:-right-20 max-lg:top-32">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2940&auto=format&fit=crop" alt="IT Consulting Experts" class="w-[85%] h-[60vh] max-lg:h-[20vh] max-lg:w-2/3 object-cover rounded-2xl shadow-2xl border-4 border-white">
            <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-xl shadow-xl border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-900">Digital Strategy</p>
                        <span class="text-xs font-medium text-gray-500">Optimized for Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-24 max-lg:py-16 bg-white overflow-hidden">
        <div class="w-[80%] max-md:w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-blue-600 font-bold tracking-wider text-sm uppercase">About Our Advisory</span>
                <h2 class="text-3xl md:text-5xl font-semibold text-gray-900 mt-4 mb-6 leading-tight">
                    Aligning Your Technology <br> With Business Goals
                </h2>
                <div class="w-16 h-1 bg-blue-600 mb-6 rounded-full"></div>

                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    At <strong>Rudratech</strong>, we offer IT Consulting & Advisory services designed to help organizations make informed IT decisions, modernize legacy systems, and build scalable digital infrastructures.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    From startups to growing enterprises, our IT consultants work closely with your team to analyze existing systems, identify gaps, and recommend practical solutions across web development, CRM, CMS, cloud, blockchain, and AMC services.
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
                    <p class="text-blue-800 font-medium">
                        "Our consulting approach focuses on real implementation, not just recommendations — ensuring measurable business outcomes."
                    </p>
                </div>
            </div>

            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-dots opacity-40"></div>
                <div class="relative z-10 grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop" alt="Consulting Meeting" class="rounded-xl shadow-lg w-full h-[400px] object-cover mt-8">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=2938&auto=format&fit=crop" alt="IT Strategy" class="rounded-xl shadow-lg w-full h-[400px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-lg:py-16 bg-gray-50">
        <div class="w-[80%] max-md:w-[85%] mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-semibold text-gray-900">Turn Technology into a <span class="text-blue-600">Competitive Advantage</span></h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                    Many businesses struggle with fragmented systems, rising IT costs, and unclear digital roadmaps. Professional IT consulting helps you convert challenges into growth opportunities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-arrow-trend-up"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Improve Efficiency</h3>
                        <p class="text-gray-500 text-sm mt-1">Streamline daily operational workflows.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-shield-halved"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Reduce Risks</h3>
                        <p class="text-gray-500 text-sm mt-1">Minimize technical risks and system downtime.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-coins"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Optimize Investments</h3>
                        <p class="text-gray-500 text-sm mt-1">Make smarter, cost-effective IT purchasing decisions.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-sitemap"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Scalable Architecture</h3>
                        <p class="text-gray-500 text-sm mt-1">Plan digital infrastructure that grows with you.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-lock"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Enhance Security</h3>
                        <p class="text-gray-500 text-sm mt-1">Ensure data protection and regulatory compliance.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-start space-x-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-rocket"></i></div>
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">Digital Transformation</h3>
                        <p class="text-gray-500 text-sm mt-1">Accelerate modernization across your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 max-lg:py-16 bg-white relative">
        <div class="absolute inset-0 bg-dots opacity-30 pointer-events-none"></div>
        <div class="w-[80%] max-md:w-[85%] mx-auto relative z-10">
            <div class="text-center mb-16 max-lg:mb-8" data-aos="fade-up">
                <span class="px-4 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">End-to-End Technology Guidance</span>
                <h2 class="text-5xl max-md:text-3xl font-semibold mt-4 mb-4 text-gray-900">Our IT Advisory Services</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-chess-knight text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">IT Strategy & Roadmap</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Clear digital strategies and actionable technology roadmaps aligned strictly with your core business objectives.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-magnifying-glass-chart text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">System Optimization</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Deep evaluation and performance tuning of your existing websites, CRM, CMS, cloud setups, and software platforms.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-microchip text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Digital Transformation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Modernizing legacy operations through smart automation, cloud adoption, and custom software development.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="400" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-layer-group text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Architecture Consulting</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Designing highly scalable and resilient architectures for complex web, CRM, and enterprise-grade systems.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="500" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-cloud text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Cloud & Infrastructure</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Expert guidance on secure cloud migration, server performance optimization, and IT infrastructure cost control.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="600" class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 card-hover group">
                    <div class="w-14 h-14 mb-6 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-shield-virus text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Security & Compliance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Thorough risk assessment, proactive security planning, and robust data protection strategies.</p>
                </div>
            </div>

            <div class="mt-12 text-center" data-aos="fade-up">
                <a href="#contact" class="inline-block px-8 py-3 text-blue-700 font-semibold border-2 border-blue-700 rounded-md hover:bg-blue-50 transition-colors">
                    Request IT Advisory Proposal
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 max-lg:py-16 bg-gray-900 text-white">
        <div class="w-[80%] max-md:w-[85%] mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-semibold">How We Deliver Practical IT Solutions</h2>
                <p class="mt-4 text-gray-400 max-w-2xl mx-auto">Every consulting engagement at Rudratech follows a structured, outcome-driven workflow.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="100">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">01</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Assessment</h3>
                    <p class="text-gray-400 text-sm relative z-10">Deep dive into understanding your goals, challenges, and current IT systems.</p>
                </div>
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="200">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">02</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Gap Analysis</h3>
                    <p class="text-gray-400 text-sm relative z-10">Identifying inefficiencies, security risks, and technological improvement opportunities.</p>
                </div>
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="300">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">03</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Solution Design</h3>
                    <p class="text-gray-400 text-sm relative z-10">Creating tailored IT strategies, selecting software, and designing modern architectures.</p>
                </div>
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="400">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">04</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Implementation</h3>
                    <p class="text-gray-400 text-sm relative z-10">Hands-on execution and deployment in collaboration with our technical development teams.</p>
                </div>
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="500">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">05</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Optimization</h3>
                    <p class="text-gray-400 text-sm relative z-10">Monitoring systems, fixing bottlenecks, and improving overall operational reliability.</p>
                </div>
                <div class="relative p-6 bg-gray-800 rounded-2xl border border-gray-700 hover:border-blue-500 transition-colors" data-aos="fade-up" data-aos-delay="600">
                    <span class="absolute -top-4 right-4 text-6xl font-black text-gray-700/50">06</span>
                    <h3 class="text-xl font-bold mb-2 relative z-10">Ongoing Advisory</h3>
                    <p class="text-gray-400 text-sm relative z-10">Continuous guidance for future scalability, upgrades, and IT maintenance planning.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-lg:py-16 bg-white border-b border-gray-100">
        <div class="w-[80%] max-md:w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="order-2 lg:order-1 relative" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2940&auto=format&fit=crop" alt="Consulting Project Work" class="rounded-2xl shadow-xl w-full h-[500px] object-cover">
                <div class="absolute -bottom-6 -right-6 bg-blue-700 text-white p-6 rounded-xl shadow-lg max-w-[250px] hidden md:block">
                    <p class="font-bold text-lg">Real Business Needs</p>
                    <p class="text-sm mt-2 text-blue-100">Focused on improving efficiency, scalability, and system reliability.</p>
                </div>
            </div>

            <div class="order-1 lg:order-2" data-aos="fade-left">
                <span class="text-blue-600 font-bold tracking-wider text-sm uppercase">Our Project Work</span>
                <h2 class="text-3xl md:text-5xl font-semibold text-gray-900 mt-4 mb-6 leading-tight">
                    Real IT Consulting for <br> Real Business Needs
                </h2>
                <p class="text-gray-600 mb-8 text-lg">
                    We don't just write reports. We deliver IT implementations focused on operational efficiency. Our consulting projects typically include:
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 text-lg"></i>
                        <p class="text-gray-700 font-medium">Digital transformation roadmaps for legacy businesses.</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 text-lg"></i>
                        <p class="text-gray-700 font-medium">CRM and CMS implementation and optimization strategies.</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 text-lg"></i>
                        <p class="text-gray-700 font-medium">Cloud migration & architecture planning for web apps.</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 text-lg"></i>
                        <p class="text-gray-700 font-medium">Blockchain feasibility studies and deployment advice.</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 text-lg"></i>
                        <p class="text-gray-700 font-medium">IT AMC strategy for long-term server/domain maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-24 max-lg:py-16">
        <div class="w-[80%] max-md:w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-16 max-md:gap-8">
            <div class="lg:w-1/2 order-2 lg:order-1" data-aos="fade-right">
                <span class="text-blue-600 font-bold tracking-wider text-sm uppercase">Why Choose Rudratech</span>
                <h2 class="text-3xl md:text-5xl font-semibold text-gray-900 leading-tight mt-4 mb-6">
                    Why Businesses Trust Our IT Advisory
                </h2>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                    Our team brings strategic thinking, technical proficiency, and a business-first approach to ensure your technology fuels your success.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-bullseye"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Business-Focused</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-hammer"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Hands-On Execution</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-expand-arrows-alt"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Scalable Solutions</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-piggy-bank"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Cost Optimization</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-layer-group"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Multi-Domain Expertise</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600"><i class="fas fa-users-cog"></i></div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Dedicated Tech Team</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 flex justify-center order-1 lg:order-2 mb-12 lg:mb-0 w-full" data-aos="fade-left">
                <div class="relative w-full">
                    <img src="/asset/team.jpg" onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2940&auto=format&fit=crop'" alt="IT Consulting Team" class="w-full rounded-2xl shadow-xl h-[400px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-blue-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-dots opacity-20 pointer-events-none"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600 rounded-full blur-3xl opacity-50"></div>

        <div class="w-[80%] max-md:w-[85%] mx-auto relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Optimize Your IT Strategy?</h2>
            <p class="text-blue-100 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                Let Rudratech guide your digital transformation with expert IT consulting and advisory services. Fill out the form below or contact us directly.
            </p>
            <a href="/get-in-touch">
                <button class="bg-white text-blue-700 font-bold py-4 px-10 rounded-full hover:bg-slate-100 transition-colors shadow-lg">
                    Get Free Consultation
                </button>
            </a>

        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true,
            offset: 50
        });
    </script>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>