<?php
$page_title = "AI Custom Software & ERP Solutions | RudraTech";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include "include/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    /* Custom Scrollbar (Blue/Black) */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #0f172a;
    }

    ::-webkit-scrollbar-thumb {
        background: #1e40af;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #3b82f6;
    }

    /* Animations */
    @keyframes scan-vertical {

        0%,
        100% {
            top: 5%;
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        50% {
            top: 90%;
        }
    }

    @keyframes fall-blue {
        to {
            transform: translateY(500px) rotate(720deg);
            opacity: 0;
        }
    }

    .glass-dark {
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(59, 130, 246, 0.2);
    }
</style>
<style>
    /* 1. Base State: Hidden & Slightly to the right */
    .feature-popup {
        opacity: 0;
        visibility: hidden;
        transform: translateX(50px);
        /* Start 50px to the right */
        transition: all 0.8s ease-out;
    }

    /* 2. Active State: Visible & In Position */
    .owl-item.active .feature-popup {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
        /* Slide into place */
    }

    /* 3. Custom Dots Styling */
    .owl-theme .owl-dots {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 30;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 30px;
        /* Long bars instead of dots */
        height: 4px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .owl-theme .owl-dots .owl-dot.active span {
        background: #3b82f6;
        /* Blue active bar */
        width: 50px;
        /* Grow when active */
    }
</style>

<body class="bg-white text-slate-900 antialiased selection:bg-blue-600 selection:text-white">

    <?php include "include/navbar.php" ?>

    <section class="relative w-full min-h-[90vh] flex items-center bg-[#050810] overflow-hidden pt-20">

        <div class="absolute inset-0 opacity-[0.1]" style="background-image: linear-gradient(#1e40af 1px, transparent 1px), linear-gradient(90deg, #1e40af 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-900/20 rounded-full blur-[120px] mix-blend-screen"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-800/10 rounded-full blur-[100px] mix-blend-screen"></div>

        <div class="relative z-10 w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="text-left space-y-8">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-blue-800 bg-blue-900/20 text-blue-400 text-xs font-bold tracking-widest uppercase">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    AI-Driven Development
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] tracking-tight">
                    Software that <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white">Thinks Ahead.</span>
                </h1>

                <p class="text-lg text-slate-400 max-w-lg leading-relaxed border-l-2 border-blue-700 pl-6">
                    We engineer <strong>intelligent digital ecosystems</strong>. From neural-network powered EdTech platforms to high-frequency billing engines, RudraTech builds the future of your enterprise.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#billing-engine" class="px-8 py-4 bg-blue-700 text-white font-bold rounded-none border border-blue-600 hover:bg-blue-600 transition-all shadow-[0_0_20px_rgba(29,78,216,0.3)]">
                        Launch Billing Engine
                    </a>
                    <a href="#exam-ai" class="px-8 py-4 border border-slate-700 text-slate-300 font-bold rounded-none hover:border-white hover:text-white transition-all">
                        Test AI Proctoring
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center">
                <div class="relative w-full max-w-lg aspect-square bg-slate-900/50 rounded-full border border-blue-900/30 flex items-center justify-center animate-[spin_30s_linear_infinite]">
                    <div class="absolute inset-4 border border-dashed border-blue-800/50 rounded-full"></div>
                    <div class="absolute inset-12 border border-blue-900/30 rounded-full"></div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-microchip text-6xl text-blue-500 drop-shadow-[0_0_15px_rgba(59,130,246,0.8)] animate-pulse"></i>
                        <p class="mt-4 text-blue-200 font-mono text-xs uppercase tracking-[0.3em]">Processing Logic</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-b border-slate-200">
        <div class="w-[85%] mx-auto text-center">
            <h2 class="text-5xl font-bold text-slate-900 mb-4">Enterprise-Grade Solutions</h2>
            <p class="text-slate-500 mb-16 max-w-2xl mx-auto">Scalable architecture meets intuitive design. Our core competencies drive business growth.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-file-invoice text-4xl text-blue-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-3">Custom ERP & Billing</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">High-speed POS systems with GST automation and inventory tracking.</p>
                </div>
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-brain text-4xl text-blue-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-3">AI & EdTech Apps</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">Smart exam platforms with facial recognition and auto-grading logic.</p>
                </div>
                <div class="group p-8 border border-slate-200 hover:border-blue-600 hover:bg-slate-900 hover:text-white transition-all duration-300">
                    <i class="fas fa-cloud text-4xl text-blue-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-3">Cloud SaaS Platforms</h3>
                    <p class="text-sm text-slate-500 group-hover:text-slate-400">Secure, scalable web applications hosted on AWS/Azure infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="billing-engine" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-full bg-gradient-to-b from-blue-900/0 via-blue-600/50 to-blue-900/0"></div>

        <div class="w-[90%] xl:w-[85%] mx-auto relative z-10">

            <div class="text-center mb-16">
                <span class="text-blue-400 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Product Showcase: Bharat Bill Book
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold ">
                    Algorithmic <span class="text-blue-500">Financial Engine</span>
                </h2>
                <p class="text-slate-400 mt-4 max-w-xl mx-auto">
                    Experience our lightning-fast billing logic. Add multiple items on the left and watch the invoice generate instantly.
                </p>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">

                <div class="xl:col-span-4 sticky top-24 z-30">
                    <div class="border rounded-3xl p-6 shadow-2xl">

                        <div class="flex justify-between items-center mb-6 border-b border-slate-700 pb-4">
                            <h3 class="font-bold text-lg text-blue-400"><i class="fas fa-terminal mr-2"></i>Input Data</h3>
                            <div class="flex bg-slate-800 p-1">
                                <button onclick="setPaper('A4')" id="btn-a4" class="px-4 py-1 text-xs font-bold bg-blue-600  transition-all">A4</button>
                                <button onclick="setPaper('thermal')" id="btn-thermal" class="px-4 py-1 text-xs font-bold text-slate-400 hover:text-white transition-all">POS</button>
                            </div>
                        </div>

                        <div class="space-y-4 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
                            <div class="space-y-3 pb-4 border-b border-slate-700">
                                <label class="text-[10px] uppercase font-bold text-slate-500">Client Details</label>
                                <input type="text" id="inpInvNo" value="QTN-2026" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm focus:border-blue-500 outline-none" placeholder="Invoice No" oninput="updateHeader()">
                                <input type="text" id="inpName" placeholder="Client Name" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" oninput="updateHeader()">
                            </div>

                            <div class="space-y-3">
                                <label class="text-[10px] uppercase font-bold text-slate-500">New Item Entry</label>
                                <input type="text" id="newItemDesc" value="Software Service" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none">

                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" id="newItemHsn" value="9983" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="HSN">
                                    <input type="number" id="newItemRate" value="5000" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Rate">
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <input type="number" id="newItemQty" value="1" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Qty">
                                    <input type="number" id="newItemGst" value="18" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="GST%">
                                    <input type="number" id="newItemDisc" value="0" class="w-full bg-slate-50 border border-slate-700 p-3 text-sm  focus:border-blue-500 outline-none" placeholder="Disc%">
                                </div>

                                <button onclick="addItem()" class="w-full py-3 bg-blue-700 text-white hover:bg-blue-600  text-xs font-bold uppercase tracking-wider transition mt-2 border border-blue-500">
                                    <i class="fas fa-plus mr-1"></i> Add Record
                                </button>
                            </div>

                            <div class="pt-2">
                                <h4 class="text-xs text-slate-400 font-bold uppercase mb-2">Queue (<span id="itemCount">0</span>)</h4>
                                <div id="controlPanelList" class="space-y-1"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-8 bg-slate-800 p-8 lg:p-12 min-h-[800px] flex justify-center items-start shadow-inner border border-slate-700">

                    <div id="view-a4" class="bg-white shadow-2xl w-[210mm] min-h-[200mm] p-10 text-black text-xs font-sans leading-tight flex flex-col transform transition-transform duration-500 origin-top">
                        <div class="text-center mb-2">
                            <h1 class="font-bold text-xl uppercase tracking-widest text-slate-900">Tax Invoice</h1>
                            <p class="text-[10px] text-slate-500">Original for Recipient</p>
                        </div>

                        <div class="border-2 border-slate-900 flex-grow flex flex-col">
                            <div class="flex border-b-2 border-slate-900">
                                <div class="w-1/2 p-4 border-r-2 border-slate-900">
                                    <h2 class="font-bold text-lg text-blue-900">RudraTech IT Services</h2>
                                    <p class="text-slate-600">Tech Park, Mumbai, India</p>
                                    <p class="font-bold mt-2">GSTIN: 27AAAAA0000A1Z5</p>
                                </div>
                                <div class="w-1/2 p-4">
                                    <div class="flex justify-between mb-2">
                                        <span class="font-bold">Invoice #:</span>
                                        <span id="outInvNo" class="font-mono">QTN-2026</span>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-bold">Date:</span>
                                        <span><?php echo date('d-M-Y'); ?></span>
                                    </div>
                                    <div class="mt-4 pt-2 border-t border-slate-300">
                                        <p class="text-[10px] font-bold uppercase text-slate-500">Bill To:</p>
                                        <p class="font-bold text-md outName">Client Name</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex bg-slate-900 text-white font-bold py-2 text-center text-[11px]">
                                <div class="w-[5%]">#</div>
                                <div class="w-[45%] text-left pl-2">Description</div>
                                <div class="w-[10%]">HSN</div>
                                <div class="w-[10%]">Qty</div>
                                <div class="w-[10%]">Rate</div>
                                <div class="w-[10%]">GST</div>
                                <div class="w-[10%] text-right pr-2">Total</div>
                            </div>

                            <div id="invoiceBody" class="flex-grow"></div>

                            <div class="border-t-2 border-slate-900 p-4">
                                <div class="flex justify-end space-y-1 text-right">
                                    <div class="w-1/2">
                                        <div class="flex justify-between text-slate-500"><span>Taxable Value:</span> <span id="outTotalTaxable">0.00</span></div>
                                        <div class="flex justify-between text-slate-500"><span>CGST:</span> <span id="outTotalCgst">0.00</span></div>
                                        <div class="flex justify-between text-slate-500"><span>SGST:</span> <span id="outTotalSgst">0.00</span></div>
                                        <div class="flex justify-between text-slate-900 font-bold text-lg mt-2 pt-2 border-t border-slate-300">
                                            <span>Grand Total:</span> <span id="outGrandTotal">0.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-[10px] italic text-slate-500">
                                    Amount in words: <span id="outWords" class="font-bold not-italic text-slate-900">Zero Only</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-pos" class="hidden bg-white w-[80mm] p-4 font-mono text-xs shadow-xl">
                        <div class="text-center border-b border-dashed border-black pb-2 mb-2">
                            <h2 class="font-bold">RUDRA POS</h2>
                            <p>Mumbai, India</p>
                        </div>
                        <div class="mb-2">
                            <p>Inv: <span id="posInv">001</span></p>
                            <p>Client: <span class="outName">Name</span></p>
                        </div>
                        <div class="border-b border-black mb-1"></div>
                        <div id="posBody"></div>
                        <div class="border-b border-black mt-1 mb-1"></div>
                        <div class="flex justify-between font-bold text-sm">
                            <span>TOTAL</span>
                            <span id="posTotal">0.00</span>
                        </div>
                        <div class="text-center mt-4 text-[10px]">*** THANK YOU ***</div>
                    </div>

                </div>
            </div>
        </div>
    </section>








    <section class="py-24 bg-[#0f172a]/100 relative overflow-hidden border-t border-slate-800">

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-blue-600/10 rounded-full blur-[120px]"></div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-40 max-md:gap-8  items-center ">

                <div class="order-2 lg:order-1">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-slate-700 bg-slate-800/50 text-blue-400 text-xs font-bold tracking-widest uppercase mb-6">
                        <i class="fab fa-android"></i> <i class="fab fa-apple"></i> Cross-Platform Sync
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                        The Constitution <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white">In Your Pocket.</span>
                    </h2>
                    <p class="text-slate-400 text-lg mb-8 leading-relaxed border-l-2 border-blue-700 pl-6">
                        Seamlessly switch between Web and Mobile. Students can practice <strong>Bhartiya Samvidhan</strong> quizzes on the go. Live syncing ensures progress is never lost.
                    </p>

                    <div class="space-y-6">
                        <div class="p-4 bg-slate-800/50 border border-slate-700 rounded-xl">
                            <p class="text-xs text-blue-400 font-bold uppercase mb-1" id="slide-label">FEATURE SPOTLIGHT</p>
                            <h4 class="text-xl font-bold text-white transition-all duration-500" id="slide-title">Smart Dashboard</h4>
                            <p class="text-sm text-slate-400 transition-all duration-500" id="slide-desc">Track progress and view upcoming exams instantly.</p>
                        </div>

                        <div class="flex gap-4 mt-8">
                            <button class="flex items-center gap-3 px-6 py-3 bg-white text-slate-900 rounded-lg hover:bg-blue-50 transition font-bold text-sm">
                                <i class="fab fa-google-play text-xl"></i> Get on Android
                            </button>
                            <button class="flex items-center gap-3 px-6 py-3 border border-slate-600 text-white rounded-lg hover:border-white transition font-bold text-sm">
                                <i class="fab fa-apple text-xl"></i> App Store
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative order-1 lg:order-2 h-[600px] flex items-center justify-center perspective-1000">

                    <!-- <div class="absolute right-0 top-10 w-[260px] h-[520px] bg-slate-900 rounded-[2.5rem] border-[6px] border-slate-800 shadow-2xl transform rotate-y-[-15deg] translate-z-[-50px] opacity-60 z-0">
                        <div class="w-full h-full bg-slate-800 rounded-[2.2rem] overflow-hidden relative">
                            <img src="/asset/software/c1 (2).jpeg" alt="Background Phone" class="w-full h-full object-cover opacity-50">
                        </div>
                    </div> -->

                    <div class="absolute left-10 bottom-10 w-[300px] h-[550px] bg-slate-900 rounded-[3rem] border-[8px] border-slate-800 shadow-[0_20px_50px_rgba(37,99,235,0.3)] transform rotate-y-[15deg] translate-z-[50px] transition-transform duration-500 hover:rotate-y-0 hover:scale-105 z-20 overflow-hidden">

                        <div class="w-full h-full bg-slate-900 rounded-[1rem] overflow-hidden relative">

                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-slate-800 rounded-b-xl z-30"></div>

                            <img id="app-slider-img" src="/asset/software/c1 (2).jpeg" alt="App Screen" class="w-full h-full object-cover object-top transition-opacity duration-500 opacity-100">

                            <div class="absolute bottom-4 left-0 w-full flex justify-center gap-2 z-30">
                                <div class="w-2 h-2 rounded-full bg-white transition-all duration-300 slide-dot active" data-index="0"></div>
                                <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300 slide-dot" data-index="1"></div>
                                <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300 slide-dot" data-index="2"></div>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- MOBILE APP CAROUSEL LOGIC ---
            const slides = [{
                    img: '/asset/software/c1 (2).jpeg', // Replace with your image
                    title: 'Smart Dashboard',
                    desc: 'Track progress, view subjects, and check upcoming exams instantly.'
                },
                {
                    img: '/asset/software/c1 (1).jpeg', // Replace with your image
                    title: 'Live Exam Interface',
                    desc: 'Distraction-free environment with timer and auto-save functionality.'
                },
                {
                    img: '/asset/software/c1 (4).jpeg', // Replace with your image
                    title: 'Instant Analytics',
                    desc: 'Detailed scorecards, rank analysis, and performance graphs.'
                }
            ];

            let currentIndex = 0;
            const imgElement = document.getElementById('app-slider-img');
            const titleElement = document.getElementById('slide-title');
            const descElement = document.getElementById('slide-desc');
            const dots = document.querySelectorAll('.slide-dot');

            function showSlide(index) {
                // 1. Fade Out
                imgElement.style.opacity = '0';
                titleElement.style.opacity = '0';
                descElement.style.opacity = '0';

                setTimeout(() => {
                    // 2. Change Content
                    imgElement.src = slides[index].img;
                    titleElement.innerText = slides[index].title;
                    descElement.innerText = slides[index].desc;

                    // 3. Update Dots
                    dots.forEach((dot, i) => {
                        if (i === index) {
                            dot.classList.remove('bg-white/30');
                            dot.classList.add('bg-white', 'w-4'); // Make active dot wider
                        } else {
                            dot.classList.add('bg-white/30');
                            dot.classList.remove('bg-white', 'w-4');
                        }
                    });

                    // 4. Fade In
                    imgElement.style.opacity = '1';
                    titleElement.style.opacity = '1';
                    descElement.style.opacity = '1';
                }, 500);
            }

            // Auto Cycle every 3 seconds
            setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }, 3000);
        });
    </script>


    <section id="exam-ai" class="py-24 bg-white relative overflow-hidden">

        <div class="w-[85%] mx-auto">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Product Showcase: Constitution Study
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                    AI-Proctored <span class="text-blue-600">Exam Platform</span>
                </h2>
                <p class="text-slate-500 mt-2 max-w-2xl mx-auto">
                    Experience our secure testing environment. The simulation below demonstrates <strong>Face Detection</strong>, <strong>Real-time Validation</strong>, and <strong>Instant Result Generation</strong>.
                </p>
            </div>

            <div class="relative bg-slate-900 rounded-xl shadow-2xl border-[12px] border-slate-800 aspect-[16/9] overflow-hidden max-w-5xl mx-auto">

                <div class="w-full h-full bg-slate-50 relative font-sans" id="exam-sim-screen">

                    <div class="absolute top-4 right-4 w-40 h-28 bg-black rounded border-2 border-blue-500 z-50 overflow-hidden shadow-lg">
                        <div class="w-full h-full relative bg-slate-800 flex items-end justify-center">
                            <div class="w-20 h-20 bg-slate-600 rounded-t-full"></div>
                            <div class="absolute top-0 w-full h-[2px] bg-blue-400 shadow-[0_0_15px_#3b82f6] animate-[scan-vertical_2s_linear_infinite]"></div>
                            <div class="absolute top-6 left-10 w-20 h-16 border-2 border-blue-500 rounded hidden" id="face-box">
                                <span class="absolute -top-3 left-0 bg-blue-500 text-black text-[6px] px-1 font-bold">MATCH 98%</span>
                            </div>
                        </div>
                        <div class="absolute bottom-1 left-1 flex items-center gap-1">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-white text-[8px] font-bold">PROCTORING ON</span>
                        </div>
                    </div>

                    <div id="sim-scene-ques" class="absolute inset-0 p-10 flex flex-col justify-center transition-opacity duration-500">
                        <div class="bg-white p-8 rounded-none border-l-4 border-blue-600 shadow-lg w-full max-w-3xl mx-auto">
                            <div class="flex justify-between mb-4">
                                <span class="text-blue-600 font-bold text-xs uppercase">Indian Constitution Quiz</span>
                                <span class="text-slate-400 text-xs font-mono">Timer: 00:15</span>
                            </div>

                            <h3 class="text-2xl font-bold text-slate-800 mb-8 leading-snug">
                                Which Article of the Indian Constitution ensures 'Equality before Law'?
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">A. Article 19</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium" id="correct-ans">B. Article 14</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">C. Article 21</div>
                                <div class="sim-opt p-4 border border-slate-200 hover:bg-slate-50 cursor-pointer transition text-slate-700 font-medium">D. Article 32</div>
                            </div>
                        </div>
                    </div>

                    <div id="sim-scene-result" class="absolute inset-0 bg-white flex flex-col items-center justify-center opacity-0 transition-opacity duration-500 z-40">
                        <div class="scale-0 transition-transform duration-500 delay-100" id="trophy-anim">
                            <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mb-6 border border-blue-100">
                                <i class="fas fa-trophy text-5xl text-blue-600"></i>
                            </div>
                        </div>

                        <h2 class="text-4xl font-extrabold text-slate-900 mb-2 translate-y-4 opacity-0 transition-all duration-500 delay-200" id="result-text">Exam Passed</h2>
                        <p class="text-slate-500 mb-8 translate-y-4 opacity-0 transition-all duration-500 delay-300" id="result-sub">Your knowledge of the Constitution is excellent.</p>

                        <div class="flex gap-8 translate-y-4 opacity-0 transition-all duration-500 delay-400" id="result-stats">
                            <div class="text-center p-4 bg-slate-50 border border-slate-200 min-w-[100px]">
                                <p class="text-xs text-slate-400 uppercase font-bold">Score</p>
                                <p class="text-2xl font-extrabold text-blue-600">100%</p>
                            </div>
                            <div class="text-center p-4 bg-slate-50 border border-slate-200 min-w-[100px]">
                                <p class="text-xs text-slate-400 uppercase font-bold">Rank</p>
                                <p class="text-2xl font-extrabold text-blue-600">#1</p>
                            </div>
                        </div>

                        <div id="confetti-container" class="absolute inset-0 pointer-events-none overflow-hidden"></div>
                    </div>

                    <div id="sim-cursor" class="absolute top-0 left-0 w-6 h-6 z-50 drop-shadow-xl transition-all duration-700 ease-in-out">
                        <svg class="w-full h-full text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3.5 3.5L10 21.5L13.5 13.5L21.5 10L3.5 3.5Z" stroke="white" stroke-width="2" />
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </section>







    <section class="py-24 bg-white border-t border-slate-100">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    End-to-End Assessment Engine
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                    Beyond Just Questions & Answers. <br>
                    <span class="text-blue-600">A Complete Learning OS.</span>
                </h2>
                <p class="text-slate-500 mt-6 max-w-2xl mx-auto text-lg">
                    Our platform isn't just an exam tool; it's an intelligent ecosystem. From <strong>question bank management</strong> to <strong>automated certification</strong>, every step is optimized by AI.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-blue-500 transition-all group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-blue-600 text-2xl mb-6">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Smart Question Bank</h3>
                        <p class="text-slate-500 mb-6 max-w-md">Upload thousands of questions via Excel/CSV in seconds. Supports <strong>Hindi (Unicode)</strong>, Math Formulas (LaTeX), and Image-based questions for biological or geographical diagrams.</p>
                        <div class="flex gap-3">
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">MCQs</span>
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">Integer Type</span>
                            <span class="px-3 py-1 bg-white border border-slate-200 rounded text-xs font-bold text-slate-600">Comprehension</span>
                        </div>
                    </div>
                </div>

                <div class="md:row-span-2 p-3 rounded-3xl  text-white border border-slate-800 hover:border-blue-500 transition-all group relative overflow-hidden">
                    <img src="/asset/software/onlineexam.webp" alt="" class="h-full w-full max-lg:h-40 max-lg:w-full object-cover group-hover:scale-105 transition-all duration-500 max-lg:object-contain">
                </div>

                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-6">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Auto-Certification</h3>
                    <p class="text-sm text-slate-500">Generate and email PDF certificates instantly upon passing an exam.</p>
                </div>

                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-6">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Deep Analytics</h3>
                    <p class="text-sm text-slate-500">Identify weak topics (e.g., "History") vs strong ones with AI performance graphs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#020617] relative overflow-hidden">
        <div class="absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-900 to-transparent hidden lg:block"></div>

        <div class="w-[85%] mx-auto relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-3xl font-bold text-white">How It Works: <span class="text-blue-500">Zero Friction</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold text-white mb-2">1. Create</h4>
                        <p class="text-slate-400 text-sm">Admin sets up the exam, uploads questions, and sets the timer.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold text-white mb-2">2. Attempt</h4>
                        <p class="text-slate-400 text-sm">Students login via App/Web. AI verifies identity via Face Scan.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold text-white mb-2">3. Auto-Grade</h4>
                        <p class="text-slate-400 text-sm">System calculates score, negative marks, and rank instantly.</p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="w-20 h-20 bg-slate-800 border-4 border-slate-700 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 relative z-10 group-hover:border-blue-500 transition-colors">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold text-white mb-2">4. Result</h4>
                        <p class="text-slate-400 text-sm">Student receives detailed scorecard and topic-wise analysis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="relative">

                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-600 rounded-2xl blur opacity-20"></div>

                <div class="relative bg-slate-900 rounded-xl shadow-2xl border border-slate-800 overflow-hidden">

                    <div class="bg-slate-950 px-4 py-3 flex items-center gap-2 border-b border-slate-800 z-20 relative">
                        <div class="flex gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-blue-500"></div>
                        </div>
                        <div class="ml-4 flex-1 text-center">
                            <span class="text-[10px] font-mono text-slate-500 bg-slate-900 px-3 py-1 rounded border border-slate-800">
                                <i class="fas fa-lock text-[8px] mr-1"></i> secure-exam.rudratech.com
                            </span>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" id="software-showcase">

                        <div class="item relative group">
                            <img src="/asset/software/d1.jpg" class="w-full h-auto object-cover opacity-90" alt="Dashboard">

                            <div class="feature-popup absolute bottom-8 left-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-y-10 opacity-0 transition-all duration-700 delay-300 max-w-[200px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-chart-pie"></i></div>
                                    <span class="text-xs font-bold text-white">Live Dashboard</span>
                                </div>
                                <p class="text-[10px] text-slate-400 leading-tight">Real-time performance monitoring.</p>
                            </div>
                        </div>

                        <div class="item relative group">
                            <img src="/asset/software/d2 (1).jpg" class="w-full h-auto object-cover opacity-90" alt="Exam List">

                            <div class="feature-popup absolute top-8 right-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-y-[-10px] opacity-0 transition-all duration-700 delay-300 max-w-[200px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-list-ul"></i></div>
                                    <span class="text-xs font-bold text-white">Exam Scheduler</span>
                                </div>
                                <p class="text-[10px] text-slate-400 leading-tight">Schedule and manage exams.</p>
                            </div>
                        </div>

                        <div class="item relative group">
                            <img src="/asset/software/d2 (2).jpg" class="w-full h-auto object-cover opacity-90" alt="Question Screen">

                            <div class="feature-popup absolute bottom-8 right-8 bg-slate-900/90 backdrop-blur-md border border-slate-700 p-4 rounded-xl shadow-2xl transform translate-x-10 opacity-0 transition-all duration-700 delay-300 max-w-[220px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs"><i class="fas fa-user-check"></i></div>
                                    <span class="text-xs font-bold text-white">Exam List</span>
                                </div>
                                <div class="h-1 w-full bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 w-[90%]"></div>
                                </div>
                                <p class="text-[8px] text-blue-400 mt-1 text-right">Completed: 90%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-wider mb-6 border border-slate-200">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span> Live Security Protocols
                </div>

                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                    Ironclad Integrity with <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Neural Surveillance</span>
                </h2>

                <p class="text-slate-500 mb-10 text-lg leading-relaxed border-l-4 border-blue-100 pl-4">
                    Our AI doesn't just watch; it understands behavior. We utilize browser-level locking and advanced vision models to guarantee 100% exam sanctity.
                </p>

                <div class="space-y-5">

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-window-maximize"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-blue-600 transition-colors">Window Locking Mechanism</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">The exam auto-terminates instantly if the student attempts to switch tabs, open dev tools, or minimize the browser.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-blue-600 transition-colors">Gaze Tracking AI</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Advanced computer vision tracks iris movement to detect if the candidate is looking at notes, another screen, or away from the monitor.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-random"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-blue-600 transition-colors">Dynamic Randomization</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Prevents collaboration. Every student receives a unique sequence of questions and randomized option ordering.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-28 bg-slate-50 relative overflow-hidden border-t border-slate-200">

        <div class="absolute inset-0 opacity-[0.4]" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

        <div class="w-[85%] mx-auto relative z-10">

            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    System Architecture
                </span>
                <h2 class="text-4xl font-extrabold text-slate-900">
                    Engineered for <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Scale & Speed</span>
                </h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                    Common questions regarding infrastructure, localization, and automated logic.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-server"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Cloud Scalability</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Built on <strong>Node.js & AWS Lambda</strong> architecture. The system auto-scales to handle <strong>10,000+ concurrent students</strong> effortlessly, ensuring zero downtime during peak exam hours.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-language"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Unicode Localization</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Full support for <strong>Hindi, Marathi, & Regional Languages</strong>. Our database handles Unicode fonts perfectly, allowing complex Hindi questions and mathematical formulas without breaking.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Low-Bandwidth Optimization</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Engineered for rural India. Our proprietary <strong>JSON compression</strong> ensures questions load instantly even on 2G/3G networks, consuming minimal data.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 rounded-l-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">Real-Time Result Logic</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Zero manual grading. The moment a student clicks "Submit", our server processes answers, applies <strong>negative marking logic</strong>, and generates a PDF report in < 200ms.
                                    </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-900 text-white text-center">
        <div class="w-[85%] mx-auto">
            <h2 class="text-3xl font-bold mb-6">Ready to digitize your business logic?</h2>
            <p class="text-blue-200 mb-8 max-w-2xl mx-auto">From custom ERPs to AI-powered platforms, RudraTech delivers software that scales.</p>
            <div class="flex justify-center gap-4">
                <a href="contact.php" class="bg-white text-blue-900 font-bold py-3 px-8 hover:bg-blue-50 transition-colors shadow-lg">Start Project</a>
            </div>
        </div>
    </section>

    <?php include "include/footer.php" ?>

    <script>
        // ==========================================
        // 1. BILLING ENGINE LOGIC
        // ==========================================
        let items = [];
        const fmt = new Intl.NumberFormat('en-IN', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        function setPaper(type) {
            const a4 = document.getElementById('view-a4');
            const pos = document.getElementById('view-pos');
            const btnA4 = document.getElementById('btn-a4');
            const btnPos = document.getElementById('btn-thermal');

            if (type === 'thermal') {
                a4.classList.add('hidden');
                pos.classList.remove('hidden');
                btnPos.classList.replace('text-slate-400', 'text-white');
                btnPos.classList.add('bg-blue-600');
                btnA4.classList.remove('bg-blue-600', 'text-white');
                btnA4.classList.add('text-slate-400');
            } else {
                a4.classList.remove('hidden');
                pos.classList.add('hidden');
                btnA4.classList.add('bg-blue-600', 'text-white');
                btnA4.classList.remove('text-slate-400');
                btnPos.classList.remove('bg-blue-600', 'text-white');
                btnPos.classList.add('text-slate-400');
            }
        }

        function addItem() {
            const desc = document.getElementById('newItemDesc').value;
            const hsn = document.getElementById('newItemHsn').value;
            const rate = parseFloat(document.getElementById('newItemRate').value) || 0;
            const qty = parseFloat(document.getElementById('newItemQty').value) || 0;
            const gst = parseFloat(document.getElementById('newItemGst').value) || 0;
            const disc = parseFloat(document.getElementById('newItemDisc').value) || 0;

            items.push({
                desc,
                hsn,
                rate,
                qty,
                gst,
                disc
            });
            renderInvoice();
            renderControlList();
        }

        function deleteItem(index) {
            items.splice(index, 1);
            renderInvoice();
            renderControlList();
        }

        function renderControlList() {
            const list = document.getElementById('controlPanelList');
            document.getElementById('itemCount').innerText = items.length;
            let html = '';
            items.forEach((item, index) => {
                html += `
                    <div class="flex justify-between items-center bg-slate-700/50 p-2 border border-slate-600 mb-1">
                        <div class="truncate w-2/3">
                            <p class="text-xs font-bold text-white truncate">${item.desc}</p>
                        </div>
                        <button onclick="deleteItem(${index})" class="text-blue-400 hover:text-blue-300"><i class="fas fa-trash"></i></button>
                    </div>`;
            });
            list.innerHTML = html;
        }

        function updateHeader() {
            const inv = document.getElementById('inpInvNo').value;
            const name = document.getElementById('inpName').value || "Client Name";
            document.getElementById('outInvNo').innerText = inv;
            document.getElementById('posInv').innerText = inv;
            document.querySelectorAll('.outName').forEach(el => el.innerText = name);
        }

        function renderInvoice() {
            const tbody = document.getElementById('invoiceBody');
            const posBody = document.getElementById('posBody');
            let htmlA4 = '';
            let htmlPos = '';
            let gTaxable = 0,
                gTotalTax = 0,
                gGrandTotal = 0;

            items.forEach((item, i) => {
                const base = item.rate * item.qty;
                const discAmt = base * (item.disc / 100);
                const taxable = base - discAmt;
                const taxAmt = taxable * (item.gst / 100);
                const total = taxable + taxAmt;

                gTaxable += taxable;
                gTotalTax += taxAmt;
                gGrandTotal += total;

                htmlA4 += `
                <div class="flex text-[11px] border-b border-slate-200 py-1">
                    <div class="w-[5%] text-center">${i + 1}</div>
                    <div class="w-[45%] pl-2 truncate">${item.desc}</div>
                    <div class="w-[10%]">${item.hsn}</div>
                    <div class="w-[10%]">${item.qty}</div>
                    <div class="w-[10%]">${fmt.format(item.rate)}</div>
                    <div class="w-[10%]">${item.gst}%</div>
                    <div class="w-[10%] text-right pr-2 font-bold">${fmt.format(total)}</div>
                </div>`;

                htmlPos += `
                <div class="flex justify-between mb-1 border-b border-dashed border-gray-300 pb-1">
                    <span class="truncate w-2/3">${item.desc}<br>x${item.qty}</span>
                    <span class="font-bold">${Math.round(total)}</span>
                </div>`;
            });

            tbody.innerHTML = htmlA4;
            posBody.innerHTML = htmlPos;

            document.getElementById('outTotalTaxable').innerText = fmt.format(gTaxable);
            document.getElementById('outTotalCgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outTotalSgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outGrandTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('posTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('outWords').innerText = "INR " + Math.round(gGrandTotal) + " Only";
        }

        // ==========================================
        // 2. EXAM SIMULATOR LOGIC
        // ==========================================
        document.addEventListener('DOMContentLoaded', () => {
            const cursor = document.getElementById('sim-cursor');
            const correctAns = document.getElementById('correct-ans');
            const faceBox = document.getElementById('face-box');
            const sceneQues = document.getElementById('sim-scene-ques');
            const sceneResult = document.getElementById('sim-scene-result');
            const screen = document.getElementById('exam-sim-screen');

            // Result Elements
            const trophy = document.getElementById('trophy-anim');
            const resText = document.getElementById('result-text');
            const resSub = document.getElementById('result-sub');
            const resStats = document.getElementById('result-stats');

            const sleep = ms => new Promise(r => setTimeout(r, ms));

            async function runExamSim() {
                // Reset Visuals
                cursor.style.transform = `translate(20px, 20px)`;
                sceneQues.style.opacity = '1';
                sceneResult.style.opacity = '0';
                sceneResult.style.zIndex = '-1';
                faceBox.classList.add('hidden');

                correctAns.classList.remove('bg-blue-100', 'border-blue-500', 'text-blue-900');
                correctAns.classList.add('hover:bg-slate-50', 'border-slate-200');

                // Reset Result Anims
                trophy.classList.remove('scale-100');
                trophy.classList.add('scale-0');
                [resText, resSub, resStats].forEach(el => {
                    el.classList.remove('translate-y-0', 'opacity-100');
                    el.classList.add('translate-y-4', 'opacity-0');
                });
                document.getElementById('confetti-container').innerHTML = '';

                await sleep(1000);

                // 1. Face Detect
                faceBox.classList.remove('hidden');
                await sleep(1500);

                // 2. Move Cursor
                const rect = correctAns.getBoundingClientRect();
                const screenRect = screen.getBoundingClientRect();
                const x = rect.left - screenRect.left + rect.width / 2;
                const y = rect.top - screenRect.top + rect.height / 2;

                cursor.style.transform = `translate(${x}px, ${y}px)`;
                await sleep(1000);

                // 3. Click
                correctAns.classList.remove('hover:bg-slate-50', 'border-slate-200');
                correctAns.classList.add('bg-blue-100', 'border-blue-500', 'text-blue-900');
                cursor.style.transform = `translate(${x-5}px, ${y+5}px)`;
                await sleep(200);
                cursor.style.transform = `translate(${x}px, ${y}px)`;

                await sleep(1000);

                // 4. Result Transition
                sceneQues.style.opacity = '0';
                sceneResult.style.zIndex = '40';
                sceneResult.style.opacity = '1';

                await sleep(300);
                trophy.classList.remove('scale-0');
                trophy.classList.add('scale-100');

                await sleep(200);
                resText.classList.remove('translate-y-4', 'opacity-0');
                resText.classList.add('translate-y-0', 'opacity-100');

                await sleep(100);
                resSub.classList.remove('translate-y-4', 'opacity-0');
                resSub.classList.add('translate-y-0', 'opacity-100');

                await sleep(100);
                resStats.classList.remove('translate-y-4', 'opacity-0');
                resStats.classList.add('translate-y-0', 'opacity-100');

                // 5. Confetti
                createConfetti();

                // Loop
                await sleep(6000);
                runExamSim();
            }

            function createConfetti() {
                const container = document.getElementById('confetti-container');
                const colors = ['#2563eb', '#3b82f6', '#60a5fa', '#93c5fd', '#1e40af']; // Blue Shades
                for (let i = 0; i < 60; i++) {
                    const conf = document.createElement('div');
                    conf.classList.add('absolute', 'w-1.5', 'h-1.5', 'rounded-sm');
                    conf.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    conf.style.left = Math.random() * 100 + '%';
                    conf.style.top = '-10px';
                    conf.style.animation = `fall-blue ${Math.random() * 2 + 1}s linear forwards`;
                    container.appendChild(conf);
                }
            }

            runExamSim();
        });

        // Init Billing
        addItem();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            var owl = $(".owl-carousel");

            owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000, // Time to wait on each slide (5 seconds)
                smartSpeed: 1000, // Speed of the sliding animation (1 second smooth slide)
                autoplayHoverPause: true, // Stops sliding when user hovers

                // Standard Slide Settings (No Fade)
                animateOut: false,
                animateIn: false
            });

            // OPTIONAL: Reset animations when slide changes so they replay
            owl.on('changed.owl.carousel', function(event) {
                $('.feature-popup').removeClass('animated'); // Reset
                setTimeout(function() {
                    $('.owl-item.active .feature-popup').addClass('animated'); // Re-trigger
                }, 100);
            });
        });
    </script>
</body>

</html>