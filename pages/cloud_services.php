<?php
$page_title = "Cloud Solutions & Infrastructure | RudraTech IT Services";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body class="bg-white font-sans text-slate-900 overflow-x-hidden">
    <?php include "include/navbar.php" ?>

    <section class="relative h-[80vh] flex items-center overflow-hidden bg-white">
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
                        <span class="text-blue-700 text-xs font-bold tracking-widest uppercase italic">Enterprise Cloud Excellence</span>
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-black text-slate-900 leading-[1.05] tracking-tight">
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

                <div class="lg:col-span-5 relative" data-aos="zoom-in">
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
            <h3 class="text-3xl font-black text-blue-600">99.9%</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Uptime SLA</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl font-black text-blue-600">256-Bit</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Encryption</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl font-black text-blue-600">24/7</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">DevOps Support</p>
        </div>
        <div class="text-center border-r border-slate-100 last:border-0">
            <h3 class="text-3xl font-black text-blue-600">Scalable</h3>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Infrastructure</p>
        </div>
    </div>

    <section class="relative py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                    Optimizing the <br>
                    <span class="text-blue-600">Digital Bottleneck</span>
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed font-medium italic">
                    "Complexity is the enemy of execution."
                </p>
                <p class="text-slate-500 leading-relaxed">
                    Legacy systems and fragmented cloud setups drain resources. RudraTech provides the architectural precision to automate compliance and eliminate infrastructure overhead.
                </p>
                <div class="pt-6">
                    <div class="flex items-center gap-4 p-4 bg-blue-50 rounded-2xl border border-blue-100">
                        <div class="h-12 w-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fa-solid fa-bolt-lightning text-white"></i>
                        </div>
                        <div>
                            <p class="text-slate-900 font-bold">Fast-Track Migration</p>
                            <p class="text-slate-500 text-sm italic">Reduce cloud transition time by 40%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative min-h-[500px] flex items-center justify-center" data-aos="fade-left">
                <div class="relative z-20">
                    <div class="h-32 w-32 bg-blue-600 rounded-3xl shadow-2xl flex items-center justify-center border-4 border-white animate-pulse">
                        <i class="fa-solid fa-shield-halved text-white text-5xl"></i>
                    </div>
                </div>
                <div class="absolute top-0 left-0 bg-white shadow-xl p-4 rounded-2xl border border-slate-50 animate-float">
                    <p class="text-blue-600 font-black text-sm uppercase italic">Cost Waste</p>
                    <p class="text-slate-500 text-[11px]">Eliminate over-provisioned resources.</p>
                </div>
                <div class="absolute bottom-10 right-0 bg-white shadow-xl p-4 rounded-2xl border border-slate-50 animate-float-delayed">
                    <p class="text-blue-600 font-black text-sm uppercase italic">Data Silos</p>
                    <p class="text-slate-500 text-[11px]">Unified storage for global accessibility.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Strategic Advantage</h2>
                <h3 class="text-4xl lg:text-5xl font-black text-slate-900">Why RudraTech Cloud?</h3>
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


    <section class="py-24 bg-white">
        <div class="w-[85%] mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Enterprise Performance</h2>
                <h3 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight mb-6">Built for Speed, <br>Architected for Power.</h3>
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
                <img src="/asset/software/cloud.jpg" class="rounded-[2rem] shadow-2xl border-t border-l border-white/20 h-[600px] object-cover" alt="Server Speed">
                <div class="absolute -bottom-6 -left-6 bg-slate-900 text-white p-6 rounded-2xl shadow-xl">
                    <p class="text-3xl font-black text-blue-400">0.2ms</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold">Average Response Time</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
        <div class="w-[85%] mx-auto relative z-10 text-center">
            <h3 class="text-blue-500 font-bold tracking-widest uppercase text-sm mb-4">Uncompromising Security</h3>
            <h2 class="text-4xl lg:text-6xl font-black text-white mb-16">Your Data, Under <br><span class="text-blue-400 italic">Total Lockdown.</span></h2>

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



    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-50 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#2563eb 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>

        <div class="w-[85%] mx-auto flex flex-col lg:flex-row items-center gap-16 relative z-10">

            <div class="lg:w-1/2 space-y-6" data-aos="fade-right">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 border border-blue-100">
                    <span class="text-blue-600 text-xs font-black uppercase tracking-widest">Financial Efficiency</span>
                </div>

                <h2 class="text-4xl lg:text-6xl font-black text-slate-900 leading-tight">
                    Stop Overpaying <br>
                    <span class="text-blue-600 italic">for the Cloud.</span>
                </h2>

                <p class="text-slate-600 text-lg leading-relaxed font-medium">
                    Most businesses waste 30% of their cloud budget on idle resources. RudraTech’s <span class="text-slate-900 font-bold">Smart-Scale™</span> technology ensures your infrastructure costs align perfectly with your actual usage.
                </p>

                <ul class="space-y-4 pt-4">
                    <li class="flex items-center gap-4 text-slate-700 font-bold group">
                        <div class="h-8 w-8 rounded-lg bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chart-line-down text-white text-sm"></i>
                        </div>
                        Automated Resource Downsizing
                    </li>
                    <li class="flex items-center gap-4 text-slate-700 font-bold group">
                        <div class="h-8 w-8 rounded-lg bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-microchip text-white text-sm"></i>
                        </div>
                        Reserved Instance Management
                    </li>
                    <li class="flex items-center gap-4 text-slate-700 font-bold group">
                        <div class="h-8 w-8 rounded-lg bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-magnifying-glass-dollar text-white text-sm"></i>
                        </div>
                        Weekly Cost Efficiency Audits
                    </li>
                </ul>
            </div>

            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="relative p-1 bg-gradient-to-br from-blue-600 to-indigo-400 rounded-[3rem] shadow-2xl">
                    <div class="bg-white p-12 rounded-[2.8rem] text-center space-y-6">
                        <p class="text-slate-500 font-bold uppercase tracking-widest text-sm">Average Client Savings</p>

                        <div class="relative inline-block">
                            <h3 class="text-8xl font-black text-slate-900">35<span class="text-blue-600">%</span></h3>
                            <div class="absolute inset-0 blur-2xl bg-blue-100 opacity-50 -z-10"></div>
                        </div>

                        <div class="py-6 px-4 bg-slate-50 rounded-2xl border border-slate-100 italic text-slate-600">
                            "RudraTech cut our AWS bill by <span class="text-blue-600 font-bold">$4,000/month</span> in the first 30 days of implementation."
                        </div>

                        <div class="flex items-center justify-center gap-3 pt-4">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white bg-slate-200" src="https://i.pravatar.cc/100?u=1" alt="user">
                                <img class="w-8 h-8 rounded-full border-2 border-white bg-slate-200" src="https://i.pravatar.cc/100?u=2" alt="user">
                            </div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Verified by RudraTech Analytics</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    

    <section class="py-24 bg-white">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-blue-600 font-bold uppercase text-sm mb-3">Our Process</h3>
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900">3 Steps to Cloud Freedom</h2>
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
    <section class="py-24 bg-slate-50">
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



    <section class="py-24 relative overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="relative bg-slate-900 rounded-[3rem] p-12 lg:p-20 overflow-hidden shadow-2xl">
                <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                <div class="absolute top-[-20%] right-[-10%] w-[400px] h-[400px] bg-blue-600 rounded-full blur-[120px] opacity-40"></div>

                <div class="relative z-10 max-w-3xl mx-auto text-center space-y-8" data-aos="zoom-in">
                    <h2 class="text-4xl lg:text-6xl font-black text-white leading-tight">
                        Future-Proof Your <br>Cloud Infrastructure
                    </h2>
                    <p class="text-slate-400 text-lg lg:text-xl">
                        Join 200+ enterprises leveraging RudraTech for secure, high-speed, and automated cloud operations.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="/get-in-touch" class="bg-blue-600 text-white font-bold px-10 py-4 rounded-2xl hover:bg-blue-700 transition shadow-xl shadow-blue-900/40">
                            Book Free Audit <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



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