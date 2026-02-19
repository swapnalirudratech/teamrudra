<?php
$page_title = "Cloud Solutions & Infrastructure | RudraTech IT Services";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body class="bg-white font-sans text-slate-900 overflow-x-hidden">
    <?php include "include/navbar.php" ?>

    <section class="relative h-[80vh] flex items-center overflow-hidden bg-white py-20">
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <div class="absolute top-[-5%] right-[-5%] w-[600px] h-[600px] bg-blue-50 rounded-full blur-[100px] opacity-60"></div>
            <div class="absolute bottom-[10%] left-[-5%] w-[400px] h-[400px] bg-indigo-50 rounded-full blur-[100px] opacity-50"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#2563eb 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
        </div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left" data-aos="fade-right">
                    <div class="inline-flex items-center space-x-2 bg-blue-50 border border-blue-100 px-4 py-2 rounded-full shadow-sm">
                        <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                        <span class="text-blue-700 text-xs font-bold tracking-widest uppercase ">Enterprise Cloud Excellence</span>
                    </div>

                    <h1 class="text-3xl lg:text-7xl font-black text-slate-900 leading-[1.05] tracking-tight">
                        Architecting the <br>
                        <span class="text-blue-600">Elastic Enterprise</span>
                    </h1>

                    <p class="text-slate-600 text-lg lg:text-xl max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                        RudraTech empowers your business with high-performance, secure, and auto-scaling cloud infrastructure designed for global resilience.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="/get-in-touch" class="px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-blue-100 hover:bg-blue-700 transition-all active:scale-95">
                            Consult Our Experts
                        </a>
                        <a href="#challenges" class="px-8 py-4 border-2 border-slate-100 text-slate-700 font-bold rounded-2xl hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                            Explore Solutions <i class="fa-solid fa-arrow-down text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 relative max-md:hidden" data-aos="zoom-in">
                    <div class="relative z-20 group">
                        <div class="absolute -inset-4 bg-blue-100 rounded-[2.5rem] blur-2xl opacity-30 group-hover:opacity-50 transition duration-1000"></div>
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1000&auto=format&fit=crop"
                            alt="Advanced Cloud Hub"
                            class="relative rounded-[2rem] border-8 border-white shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="challenges" class="w-[85%] mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 py-12 border-y border-slate-100">
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl max-md:text-xl max-md:mb-1 font-black text-blue-600">99.9%</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Uptime SLA</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl max-md:text-xl max-md:mb-1 font-black text-blue-600">256-Bit</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Encryption</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl max-md:text-xl max-md:mb-1 font-black text-blue-600">24/7</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">DevOps Support</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl max-md:text-xl max-md:mb-1 font-black text-blue-600">Scalable</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Infrastructure</p>
        </div>
    </div>

    <section class="py-24 max-md:py-12  bg-white border-t border-slate-100">
        <div class="w-[85%] mx-auto ">

            <div class="text-center max-w-3xl mx-auto mb-16 max-md:mb-8 ">
                <h2 class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3">RudraTech Cloud Services</h2>
                <h3 class="text-3xl md:text-6xl font-bold text-slate-900 mb-4">
                    Secure Cloud Solutions for <br>
                    <span class="text-slate-500">Modern Businesses</span>
                </h3>
                <p class="text-slate-600 text-lg">
                    We simplify the cloud journey. From migration to management, RudraTech ensures your infrastructure is scalable, secure, and cost-effective.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="group p-8 bg-slate-50 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-blue-600 text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Cloud Migration</h4>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Seamlessly move your legacy applications and data to the cloud (AWS, Azure, or GCP) with zero downtime and full data integrity.
                    </p>
                </div>

                <div class="group p-8 bg-slate-50 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-blue-600 text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Managed Security</h4>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Protect your digital assets with enterprise-grade firewalls, 24/7 threat monitoring, and automated compliance auditing.
                    </p>
                </div>

                <div class="group p-8 bg-slate-50 rounded-2xl border border-slate-100 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-blue-600 text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Infrastructure Management</h4>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Focus on your core business while we handle server patching, backups, auto-scaling, and performance optimization.
                    </p>
                </div>

            </div>

            <div class="mt-16 text-center">
                <a href="/get-in-touch" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold leading-6 text-white transition duration-150 ease-in-out bg-blue-600 rounded-full hover:bg-blue-700 shadow-lg hover:shadow-blue-500/30">
                    Discuss Your Cloud Strategy <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

        </div>
    </section>

    <section class="py-24 max-md:py-12  bg-slate-50">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-16 max-md:mb-8 " data-aos="fade-up">
                <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Strategic Advantage</h2>
                <h3 class="text-3xl lg:text-5xl font-black text-slate-900">Why RudraTech Cloud?</h3>
            </div>

            <div class="space-y-12">
                <div class="flex flex-col md:flex-row items-center gap-12" data-aos="fade-up">
                    <div class="w-full md:w-1/2">
                        <div class="relative group">
                            <div class="absolute -inset-2 bg-blue-600 rounded-3xl opacity-10 group-hover:opacity-20 transition"></div>
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=800" alt="Cloud Migration" class="rounded-2xl shadow-lg w-full h-[600px] max-md:h-[300px] object-cover">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 space-y-4">
                        <span class="text-6xl font-black text-blue-100">01</span>
                        <h4 class="text-2xl font-bold text-slate-900 leading-tight">Zero-Downtime <br>Cloud Migration</h4>
                        <p class="text-slate-600">Migrate legacy workloads to AWS, Azure, or GCP without interrupting your business operations. Our phased approach ensures data integrity and immediate performance gains.</p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700"><i class="fa-solid fa-check-circle text-blue-600"></i> Hybrid Cloud Ready</div>
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700"><i class="fa-solid fa-check-circle text-blue-600"></i> DB Optimization</div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row-reverse items-center gap-12" data-aos="fade-up">
                    <div class="w-full md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800" alt="Scalability" class="rounded-2xl shadow-lg w-full h-[600px] max-md:h-[300px] object-cover">
                    </div>
                    <div class="w-full md:w-1/2 space-y-4">
                        <span class="text-6xl font-black text-blue-100">02</span>
                        <h4 class="text-2xl font-bold text-slate-900 leading-tight">Elastic Auto-Scaling <br>& Cost Optimization</h4>
                        <p class="text-slate-600">Stop paying for idle servers. We implement intelligent auto-scaling that shrinks or grows your infrastructure based on real-time traffic demand.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 bg-white p-3 rounded-xl border border-slate-100 shadow-sm font-semibold"><i class="fa-solid fa-wallet text-blue-600"></i> Reduce Monthly Spend by up to 30%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24 max-md:py-12  bg-white">
        <div class="w-[85%] mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Enterprise Performance</h2>
                <h3 class="text-3xl lg:text-5xl font-black text-slate-900 leading-tight mb-6">Built for Speed, <br>Architected for Power.</h3>
                <p class="text-slate-600 text-lg mb-8">We don't just host; we optimize. RudraTech's custom-tuned cloud environments outperform standard hosting by up to 300% in data retrieval and processing speeds.</p>

                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-slate-900 font-bold">Latency Reduction</span>
                            <span class="text-blue-600 font-bold">94%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-blue-600 h-full w-[94%]"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-slate-900 font-bold">Deployment Speed</span>
                            <span class="text-blue-600 font-bold">88% Faster</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-blue-600 h-full w-[88%]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex items-center gap-20" data-aos="fade-left">
                <img src="/asset/software/cloud.jpg" class="rounded-[2rem] shadow-2xl border-t border-l border-white/20 h-[600px] max-md:h-[300px] object-cover" alt="Server Speed">
                <div class="absolute -bottom-6 -left-6 bg-slate-900 text-white p-6 rounded-2xl shadow-xl max-md:hidden">
                    <p class="text-3xl font-black text-blue-400">0.2ms</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold">Average Response Time</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 max-md:py-12  bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
        <div class="w-[85%] mx-auto relative z-10 text-center">
            <h3 class="text-blue-500 font-bold tracking-widest uppercase text-sm mb-4">Uncompromising Security</h3>
            <h2 class="text-4xl lg:text-6xl font-black text-white mb-16 max-md:mb-8 ">Your Data, Under <br><span class="text-blue-400 ">Total Lockdown.</span></h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl text-left hover:bg-white/10 transition">
                    <i class="fa-solid fa-fingerprint text-blue-400 text-3xl mb-6"></i>
                    <h4 class="text-xl font-bold text-white mb-3">Identity Governance</h4>
                    <p class="text-slate-400 text-sm">Multi-factor authentication and role-based access control (RBAC) to ensure only authorized personnel touch your data.</p>
                </div>
                <div class="p-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl text-left hover:bg-white/10 transition">
                    <i class="fa-solid fa-shield-virus text-blue-400 text-3xl mb-6"></i>
                    <h4 class="text-xl font-bold text-white mb-3">Threat Intelligence</h4>
                    <p class="text-slate-400 text-sm">AI-driven threat detection that identifies and neutralizes attacks before they even reach your perimeter.</p>
                </div>
                <div class="p-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl text-left hover:bg-white/10 transition">
                    <i class="fa-solid fa-file-shield text-blue-400 text-3xl mb-6"></i>
                    <h4 class="text-xl font-bold text-white mb-3">Compliance Ready</h4>
                    <p class="text-slate-400 text-sm">Pre-configured environments that meet GDPR, HIPAA, and ISO 27001 standards automatically.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="py-24 max-md:pb-10  bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:40px_40px]"></div>

        <div class="w-[85%] mx-auto grid lg:grid-cols-2 gap-16 items-center relative z-10">

            <div class="relative" data-aos="fade-right">
                <div class="relative z-20 bg-white p-8 max-md:p-6 rounded-3xl shadow-2xl max-md:shadow-none max-md:border-none max-md:bg-transparent border border-slate-100 text-center max-w-sm mx-auto">
                    <div class="w-16 h-16 max-md:w-8 max-md:h-8 max-md:mb-1 max-md:shadow-none bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-white text-2xl shadow-lg shadow-blue-200">
                        <i class="fa-solid fa-network-wired max-md:text-xs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">RudraTech Core</h3>
                    <p class="text-slate-500 text-sm">Unified Cloud Management</p>

                    <div class="absolute -top-12 left-1/2 w-0.5 h-12 bg-slate-200 -z-10"></div>
                    <div class="absolute -bottom-12 left-1/2 w-0.5 h-12 bg-slate-200 -z-10"></div>
                    <div class="absolute top-1/2 -left-12 w-12 h-0.5 bg-slate-200 -z-10"></div>
                    <div class="absolute top-1/2 -right-12 w-12 h-0.5 bg-slate-200 -z-10"></div>
                </div>

                <div class="absolute -top-10 left-10 bg-slate-50 p-4 rounded-xl border border-slate-200 shadow-sm animate-bounce-slow">
                    <i class="fa-brands fa-aws text-2xl text-slate-700"></i>
                </div>
                <div class="absolute -bottom-10 right-10 bg-slate-50 p-4 rounded-xl border border-slate-200 shadow-sm animate-bounce-slow" style="animation-delay: 1s;">
                    <i class="fa-solid fa-server text-2xl text-slate-700"></i>
                </div>
                <div class="absolute -bottom-10 left-10 bg-slate-50 p-4 rounded-xl border border-slate-200 shadow-sm animate-bounce-slow" style="animation-delay: 2s;">
                    <i class="fa-brands fa-google text-2xl text-slate-700"></i>
                </div>
                <div class="absolute -top-10 right-10 bg-slate-50 p-4 rounded-xl border border-slate-200 shadow-sm animate-bounce-slow" style="animation-delay: 0.5s;">
                    <i class="fa-brands fa-microsoft text-2xl text-slate-700"></i>
                </div>
            </div>

            <div class="space-y-8" data-aos="fade-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    <span class="text-blue-600 text-xs font-bold tracking-widest uppercase">Enterprise Integration</span>
                </div>

                <h2 class="text-3xl lg:text-5xl font-black text-slate-900 leading-tight">
                    Seamless Hybrid <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-indigo-600">Cloud Architecture.</span>
                </h2>

                <p class="text-slate-600 text-lg leading-relaxed">
                    Bridge the gap between your legacy on-premise servers and modern public cloud infrastructure. RudraTech engineers low-latency, secure hybrid environments that deliver maximum scalability without compromising control.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                    <div class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 text-blue-600">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm uppercase mb-1">Compliance & Security</h4>
                            <p class="text-slate-500 text-sm">Maintain critical data residency on-site while leveraging cloud power for analytics.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 text-blue-600">
                            <i class="fa-solid fa-arrows-rotate"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm uppercase mb-1">Intelligent Bursting</h4>
                            <p class="text-slate-500 text-sm">Automatically offload peak traffic surges to the cloud to ensure 100% uptime.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <a href="/get-in-touch" class="text-blue-600 font-bold hover:text-blue-800 transition-colors flex items-center gap-2 group">
                        Get Started Now
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>




    <section class="py-24 max-md:py-12 bg-slate-50  bg-white">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-16 max-md:mb-8 ">
                <h3 class="text-blue-600 font-bold uppercase text-sm mb-3">Our Process</h3>
                <h2 class="text-3xl lg:text-5xl font-black text-slate-900">3 Steps to Cloud Freedom</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-12 relative">
                <div class="hidden lg:block absolute top-1/4 left-0 w-full h-0.5 bg-slate-100 -z-10"></div>

                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-white border-2 border-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all text-blue-600 font-black text-2xl">01</div>
                    <h4 class="text-xl font-bold mb-3">Deep Audit</h4>
                    <p class="text-slate-500 text-sm">We analyze your current stack to find leaks, risks, and optimization opportunities.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-white border-2 border-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all text-blue-600 font-black text-2xl">02</div>
                    <h4 class="text-xl font-bold mb-3">Seamless Migration</h4>
                    <p class="text-slate-500 text-sm">Our DevOps team moves your data with zero downtime using automated migration tools.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-white border-2 border-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all text-blue-600 font-black text-2xl">03</div>
                    <h4 class="text-xl font-bold mb-3">Active Management</h4>
                    <p class="text-slate-500 text-sm">We monitor your cloud 24/7, patching security and scaling resources as you grow.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 max-md:py-12  bg-slate-50">
        <div class="w-[85%] mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-500 transition cursor-default">
                        <i class="fa-solid fa-cart-shopping text-blue-600 text-2xl mb-4"></i>
                        <p class="font-bold">E-Commerce</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-500 transition cursor-default">
                        <i class="fa-solid fa-hospital text-blue-600 text-2xl mb-4"></i>
                        <p class="font-bold">Healthcare</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-500 transition cursor-default">
                        <i class="fa-solid fa-building-columns text-blue-600 text-2xl mb-4"></i>
                        <p class="font-bold">Finance</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-500 transition cursor-default">
                        <i class="fa-solid fa-graduation-cap text-blue-600 text-2xl mb-4"></i>
                        <p class="font-bold">Education</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-blue-600 font-bold uppercase text-sm mb-3">Industry Expertise</h3>
                    <h2 class="text-4xl font-black text-slate-900 mb-6">Tailored Solutions for <br>Every Sector.</h2>
                    <p class="text-slate-600 leading-relaxed">No two businesses are the same. We architect cloud environments that respect the specific compliance and speed requirements of your specific industry.</p>
                    <a href="/industries" class="mt-8 inline-block text-blue-600 font-bold hover:underline">See how we help your industry <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </section>



    <section class="py-12 md:py-24 px-4 md:px-0 overflow-hidden">
        <div class="w-full md:w-[85%] mx-auto">

            <div class="relative bg-slate-900 rounded-3xl md:rounded-[3rem] p-8 md:p-20 overflow-hidden shadow-2xl border border-slate-800 group" data-aos="zoom-in">

                <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px] opacity-20"></div>

                <div class="absolute top-[-50%] right-[-50%] md:top-[-20%] md:right-[-10%] w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-blue-600 rounded-full blur-[80px] md:blur-[120px] opacity-40 animate-pulse-slow"></div>

                <div class="relative z-10 max-w-3xl mx-auto text-center">

                    <h2 class="text-3xl sm:text-4xl md:text-6xl font-black text-white leading-tight mb-4 md:mb-6">
                        Future-Proof Your <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Cloud Infrastructure</span>
                    </h2>

                    <p class="text-slate-400 text-sm md:text-xl mb-8 md:mb-10 max-w-xl mx-auto leading-relaxed">
                        Join 200+ enterprises leveraging RudraTech for secure, automated cloud operations.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/get-in-touch" class="group overflow-hidden relative w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-bold rounded-xl md:rounded-2xl transition-all hover:bg-blue-500 hover:scale-[1.02] shadow-lg shadow-blue-900/50">
                            <span>Book Free Audit</span>
                            <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>

                            <div class="absolute inset-0 -translate-x-full group-hover:animate-[shimmer_2s_infinite] bg-gradient-to-r from-transparent via-white/20 to-transparent z-10"></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }
    </style>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(10px, -20px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-10px, 20px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce 4s infinite;
        }
    </style>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>
</body>

</html>