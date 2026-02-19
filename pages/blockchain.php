<?php
$page_title = "Blockchain Development Services | Rudratech";
$meta_description = "Build secure, decentralized applications with Rudratech’s blockchain development services. Custom blockchain solutions, smart contracts, and enterprise-grade platforms.";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563EB',
                        secondary: '#1E293B',
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Dot Pattern */
        .bg-dot-pattern {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>

<body class="font-sans antialiased text-slate-800 bg-white">

    <?php include "include/navbar.php" ?>

    <div class="relative w-full min-h-[85vh] flex items-center justify-center overflow-hidden bg-slate-900">

        <div class="absolute inset-0 z-0">
            <img src="/asset/software/blockchain.avif"
                onerror="this.src='https://images.unsplash.com/photo-1639762681485-074b7f938ba0?q=80&w=2832&auto=format&fit=crop'"
                alt="Blockchain Background"
                class="w-full h-full object-cover opacity-50" />
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-slate-900/30"></div>

            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-blob"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-blob animation-delay-2000"></div>
        </div>

        <div class="relative z-10 w-[85%] mx-auto flex flex-col justify-center">
            <div data-aos="fade-up" data-aos-duration="1000">
                <span class="inline-block py-1 px-3 mb-6 text-xs font-bold tracking-wider text-blue-400 uppercase bg-blue-500/10 border border-blue-500/20 rounded-full">
                    Secure & Scalable Solutions
                </span>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight tracking-tight max-w-4xl">
                    Blockchain <br class="hidden md:block" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500">
                        Development Services
                    </span>
                </h1>

                <p class="mt-6 text-lg md:text-xl text-slate-300 max-w-2xl leading-relaxed">
                    Rudratech delivers custom blockchain development services that help businesses automate processes, improve transparency, and build trust with decentralized technology.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="/get-in-touch"
                        class="px-8 py-4 text-base font-bold text-white bg-blue-600 rounded-lg shadow-lg shadow-blue-600/30 hover:bg-blue-500 transition-all duration-300 transform hover:-translate-y-1 text-center">
                        Get Free Consultation
                    </a>
                    <a href="/portfolio"
                        class="px-8 py-4 text-base font-semibold text-slate-300 border border-slate-700 rounded-lg hover:bg-white/5 hover:text-white hover:border-white transition-all duration-300 text-center backdrop-blur-sm">
                        View Projects
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="space-y-8" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-slate-900">
                            Trusted by <span class="text-blue-600">Enterprises</span>
                        </h2>
                        <div class="w-20 h-1.5 bg-blue-600 mt-4 rounded-full"></div>
                    </div>

                    <p class="text-lg text-slate-600 leading-relaxed">
                        At <strong>Rudratech</strong>, we provide professional blockchain development services for businesses looking to leverage decentralized technology for automation, security, and transparency.
                    </p>

                    <p class="text-lg text-slate-600 leading-relaxed">
                        Whether you’re launching a blockchain-based product or integrating blockchain into existing systems, we help you design secure architectures that scale. We develop on modern ecosystems like <strong>Ethereum</strong> and <strong>Hyperledger</strong>.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <span class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-sm font-medium border border-slate-200">Ethereum</span>
                        <span class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-sm font-medium border border-slate-200">Hyperledger</span>
                        <span class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-sm font-medium border border-slate-200">Solana</span>
                        <span class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-sm font-medium border border-slate-200">Polygon</span>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="absolute -top-4 -right-4 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
                    <div class="absolute -bottom-8 -left-4 w-64 h-64 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

                    <div class="relative rounded-2xl shadow-2xl overflow-hidden border border-slate-100 group">
                        <img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=2832&auto=format&fit=crop"
                            alt="Enterprise Blockchain Architecture"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700 ease-out">

                        <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-md p-6 rounded-xl shadow-lg border border-white/50">
                            <div class="flex items-center gap-4">
                                <div class="p-3 bg-blue-600 rounded-lg text-white">
                                    <i class="fa-solid fa-shield-halved text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900">Bank-Grade Security</p>
                                    <p class="text-xs text-slate-500 mt-1">Immutable Data & Smart Contracts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">

        <div class="absolute inset-0 bg-dot-pattern opacity-30 pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-50 rounded-full mix-blend-multiply filter blur-[100px] opacity-60 animate-pulse"></div>

        <div class="w-[85%] mx-auto relative z-10">

            <div class="max-w-3xl mb-16" data-aos="fade-up">
                <div class="flex items-center gap-2 mb-4">
                    <span class="h-px w-8 bg-blue-600"></span>
                    <span class="text-blue-600 font-bold tracking-widest text-xs uppercase">Business Logic</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 tracking-tight leading-tight">
                    Why Blockchain Matters <br>
                    <span class="text-slate-400">for the Modern Enterprise.</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-2 bg-white rounded-3xl p-8 lg:p-10 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-blue-200 transition-all duration-500 group relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row gap-8 items-start relative z-10">
                        <div class="flex-1">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <i class="fa-solid fa-robot text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Workflow Automation</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Replace manual verification with <strong>Smart Contracts</strong>. These self-executing protocols automate complex multi-party workflows, reducing processing time from days to seconds.
                            </p>
                        </div>
                        <div class="w-full md:w-1/3 bg-slate-50 rounded-xl p-4 border border-slate-100 mt-4 md:mt-0 group-hover:translate-x-1 transition-transform duration-500">
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                    <div class="h-2 w-20 bg-slate-200 rounded"></div>
                                </div>
                                <div class="h-px w-full bg-slate-200"></div>
                                <div class="flex items-center gap-3 opacity-50">
                                    <div class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></div>
                                    <div class="h-2 w-16 bg-slate-200 rounded"></div>
                                </div>
                                <div class="h-px w-full bg-slate-200"></div>
                                <div class="flex items-center gap-3 opacity-30">
                                    <div class="w-2 h-2 rounded-full bg-slate-400"></div>
                                    <div class="h-2 w-12 bg-slate-200 rounded"></div>
                                </div>
                                <p class="text-[10px] text-slate-400 mt-4 uppercase tracking-wider font-semibold">Auto-Executing Logic</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-50 to-transparent opacity-50 rounded-bl-full"></div>
                </div>

                <div class="md:col-span-1 row-span-2 bg-slate-900 rounded-3xl p-8 lg:p-10 text-white relative overflow-hidden shadow-2xl group" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#334155 1px, transparent 1px), linear-gradient(to right, #334155 1px, transparent 1px); background-size: 20px 20px;"></div>

                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center mb-6 border border-slate-700 shadow-inner">
                                <i class="fa-solid fa-shield-halved text-blue-400 text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Immutable Security</h3>
                            <p class="text-slate-400 leading-relaxed">
                                We utilize cryptographic hashing and decentralized consensus. Once data is written, it cannot be altered, removing single points of failure.
                            </p>
                        </div>
                        <div class="mt-10 relative">
                            <div class="p-4 bg-slate-800/50 rounded-xl border border-slate-700 backdrop-blur-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs text-slate-500 uppercase">Status</span>
                                    <span class="text-xs text-green-400 font-bold flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span> Secured
                                    </span>
                                </div>
                                <div class="h-1.5 w-full bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 w-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start justify-between">
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">Transparency</h4>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">Transactions are verifiable by all authorized parties in real-time.</p>
                        </div>
                        <div class="w-10 h-10 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start justify-between">
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">Cost Efficiency</h4>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">Remove intermediaries and reduce reconciliation costs instantly.</p>
                        </div>
                        <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center text-green-600 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-950 relative overflow-hidden">

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="w-[85%] mx-auto relative z-10">

            <div class="text-center mb-20" data-aos="fade-up">
                <span class="inline-block py-1 px-3 mb-4 text-xs font-bold tracking-wider text-blue-400 uppercase bg-blue-900/20 border border-blue-500/20 rounded-full">
                    Service Spectrum
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tight">
                    End-to-End <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Blockchain Solutions</span>
                </h2>
                <p class="mt-6 text-lg text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    From architectural design to mainnet deployment, we engineer decentralized systems that are secure, scalable, and built for growth.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-solid fa-code text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Custom Blockchain</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Tailor-made blockchain platforms built specifically around your unique business logic and scalability needs.
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-solid fa-file-contract text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Smart Contracts</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Automated, self-executing contracts for transactions, approvals, and complex workflows. Audited for security.
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-brands fa-hive text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">dApp Development</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Decentralized applications with secure backend logic and modern, intuitive user interfaces (UI/UX).
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-solid fa-network-wired text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Enterprise Blockchain</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Permissioned private blockchain networks (like Hyperledger) designed strictly for internal business operations.
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-solid fa-plug text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">System Integration</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Seamlessly connecting blockchain layers with your existing CRM, CMS, cloud systems, and web apps.
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

                <div class="group relative p-8 bg-slate-900/60 border border-slate-800/60 rounded-3xl hover:bg-slate-900 hover:border-blue-500/30 transition-all duration-300 hover:-translate-y-1 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-900/20 border border-blue-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-300 shadow-[0_0_15px_rgba(37,99,235,0.1)] group-hover:shadow-[0_0_25px_rgba(37,99,235,0.4)]">
                            <i class="fa-solid fa-headset text-2xl text-blue-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Support & Maintenance</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Ongoing monitoring, node management, smart contract upgrades, and performance optimization to keep you running.
                        </p>
                    </div>
                    <div class="absolute bottom-6 right-6 opacity-0 transform translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                        <i class="fa-solid fa-arrow-right text-blue-500"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest text-sm uppercase">The Process</span>
                <h2 class="mt-4 text-4xl md:text-5xl font-bold text-slate-900">
                    How We Build <br class="hidden md:block" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Production-Ready Platforms</span>
                </h2>
                <p class="mt-6 text-xl text-slate-500 max-w-2xl mx-auto">
                    A rigorous, six-step methodology designed to take your blockchain concept from whiteboard to mainnet securely.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2940&auto=format&fit=crop"
                            alt="Requirement Analysis Team"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            01
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Requirement Analysis</h3>
                        <p class="text-slate-400 leading-relaxed">
                            We define business use-cases, technical scope, and feasibility to ensure a solid foundation before writing a single line of code.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?q=80&w=2940&auto=format&fit=crop"
                            alt="Blockchain Architecture"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            02
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Architecture Design</h3>
                        <p class="text-slate-400 leading-relaxed">
                            Selecting the optimal blockchain (L1/L2), consensus mechanism, and designing secure data flow models for scalability.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=2832&auto=format&fit=crop"
                            alt="Smart Contract Coding"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            03
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Smart Contracts</h3>
                        <p class="text-slate-400 leading-relaxed">
                            Writing secure, gas-optimized contract logic (Solidity/Rust) to automate on-chain business processes efficiently.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop"
                            alt="dApp User Interface"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            04
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">App Development</h3>
                        <p class="text-slate-400 leading-relaxed">
                            Building modern frontend dashboards (React/Next.js) and robust backend services to interact seamlessly with the chain.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1639815188546-c43c240ff4df?q=80&w=2832&auto=format&fit=crop"
                            alt="Security Audit"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            05
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Security Audit</h3>
                        <p class="text-slate-400 leading-relaxed">
                            Rigorous testing of logic, performance bottlenecks, and vulnerability scanning before any mainnet deployment.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-slate-800 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="h-[250px] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1517976487492-5750f3195933?q=80&w=2940&auto=format&fit=crop"
                            alt="Mainnet Deployment"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-20">
                        <div class="absolute -top-10 right-8 w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-2xl flex items-center justify-center shadow-lg border-4 border-slate-800 group-hover:bg-blue-500 transition-colors">
                            06
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Deployment</h3>
                        <p class="text-slate-400 leading-relaxed">
                            Launching blockchain systems to Mainnet, integrating with existing enterprise platforms, and ensuring smooth handover.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-12 text-center">Real Business Use Cases</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="flex flex-col lg:flex-row bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-slate-200">
                    <div class="lg:w-2/5 h-64 lg:h-auto relative">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2000&auto=format&fit=crop"
                            alt="Supply Chain Blockchain"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-8 lg:w-3/5 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Supply Chain Tracking</h3>
                        <p class="text-slate-600 text-sm mb-4">Trace every product lifecycle with immutable blockchain records.</p>
                        <ul class="text-sm text-slate-500 space-y-1 mb-4">
                            <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Real-time tracking</li>
                            <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Anti-counterfeit verification</li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-slate-200">
                    <div class="lg:w-2/5 h-64 lg:h-auto relative">
                        <img src="/asset/software/defi.jpg"
                            alt="DeFi Platform"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-8 lg:w-3/5 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">DeFi Platforms</h3>
                        <p class="text-slate-600 text-sm mb-4">Secure transaction systems and digital asset management.</p>
                        <ul class="text-sm text-slate-500 space-y-1 mb-4">
                            <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Automated Liquidity</li>
                            <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Wallet Integration</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/asset/pattern.png')] opacity-10"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your Blockchain Solution?</h2>
            <p class="text-blue-100 text-lg mb-10">
                Let Rudratech help you implement secure and scalable blockchain technology for your business.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/get-in-touch" class="bg-white text-blue-700 font-bold py-4 px-10 rounded-full hover:bg-slate-100 transition-colors shadow-lg">
                    Get Free Consultation
                </a>
            </div>
        </div>
    </section>

    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
        });
    </script>
</body>

</html>