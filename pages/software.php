<?php
$page_title = "software";
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include "include/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>

<body class="text-gray-800 antialiased bg-gray-50">

    <?php include "include/navbar.php" ?>

    <section class="relative w-full min-h-[90vh] flex items-center bg-[#172010] overflow-hidden pt-20">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-[-10%] left-[-10%] w-[20vw] h-[20vw] bg-blue-600 rounded-full mix-blend-screen filter blur-[100px] animate-pulse"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[20vw] h-[20vw] bg-green-600 rounded-full mix-blend-screen filter blur-[100px]"></div>
        </div>

        <div class="relative z-10 w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="text-left space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-green-500/30 bg-green-900/30 backdrop-blur-md text-green-400 text-xs font-bold tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Version 3.0 Live
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] tracking-tight">
                    Billing <span class="text-gray-500">Reimagined.</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">Simple & Fast.</span>
                </h1>

                <p class="text-lg text-gray-400 max-w-lg leading-relaxed border-l-2 border-gray-700 pl-6">
                    The ultimate POS ecosystem. Manage inventory, GST compliance, and customer relationships in a single, beautiful interface.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#live-demo" class="px-8 py-4 bg-white text-[#172010] font-bold rounded-lg shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] transition-all transform hover:-translate-y-1">
                        Try Live Engine
                    </a>
                    <a href="#features" class="px-8 py-4 border border-gray-700 text-gray-300 font-bold rounded-lg hover:border-white hover:text-white transition-all backdrop-blur-sm bg-white/5">
                        Explore Features
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center group perspective-1000">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-green-500 rounded-2xl blur-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                <img src="asset/software/bill1.jpg" alt="Dashboard" class="relative z-10 rounded-xl shadow-2xl border border-gray-700/50 w-full transform rotate-y-6 group-hover:rotate-y-0 transition duration-700 ease-out">
            </div>
        </div>


    </section>

    <section id="features" class="py-24 bg-white relative z-20">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#172010]">Powering Your Business</h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Everything you need to scale, simplified into one dashboard.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $features = [
                    ['icon' => 'fa-barcode', 'color' => 'blue', 'title' => 'Barcode Scanning', 'desc' => 'Instant product lookup compatible with all scanners.'],
                    ['icon' => 'fa-file-invoice-dollar', 'color' => 'green', 'title' => 'GST Compliant', 'desc' => 'Auto-tax calculation for GSTR-1 & 3B reports.'],
                    ['icon' => 'fa-boxes', 'color' => 'blue', 'title' => 'Inventory Tracking', 'desc' => 'Real-time stock alerts and expiry management.'],
                    ['icon' => 'fa-users', 'color' => 'orange', 'title' => 'Multi-User Role', 'desc' => 'Set permissions for Admins, Managers & Cashiers.'],
                    ['icon' => 'fa-comment-dots', 'color' => 'red', 'title' => 'WhatsApp Invoicing', 'desc' => 'Share bills instantly via WhatsApp API.'],
                    ['icon' => 'fa-chart-line', 'color' => 'teal', 'title' => 'Smart Analytics', 'desc' => 'Visualize profit, loss, and growth trends.'],
                    ['icon' => 'fa-wifi', 'color' => 'indigo', 'title' => 'Offline Mode', 'desc' => 'Works without internet. Syncs when back online.'],
                    ['icon' => 'fa-print', 'color' => 'pink', 'title' => 'Thermal Ready', 'desc' => 'Optimized for 2-inch and 3-inch POS printers.']
                ];

                foreach ($features as $f): ?>
                    <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:bg-white hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                        <div class="w-14 h-14 bg-<?= $f['color'] ?>-50 rounded-xl flex items-center justify-center text-<?= $f['color'] ?>-600 text-2xl mb-6 group-hover:scale-110 transition-transform">
                            <i class="fas <?= $f['icon'] ?>"></i>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-3"><?= $f['title'] ?></h3>
                        <p class="text-sm text-gray-500 leading-relaxed"><?= $f['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#172010] relative overflow-hidden">


        <div class="w-[85%] mx-auto relative z-10 pt-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

                <div class="relative order-2 lg:order-1">
                    <div class="relative mx-auto bg-gray-900 rounded-t-2xl border-[8px] border-gray-700 shadow-2xl overflow-hidden group">
                        <div class="aspect-video bg-gray-800 relative overflow-hidden">
                            <img id="laptop-screen" src="/asset/software/bill2 (1).jpg" alt="Interface" class="w-full h-full object-fit transition-all duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-tr from-white/10 to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                    <div class="h-4 bg-gray-800 rounded-b-xl mx-4 shadow-lg"></div>
                </div>

                <div class="order-1 lg:order-2">
                    <span class="text-green-400 font-bold tracking-widest uppercase text-xs">Seamless Workflow</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mt-4 mb-8 leading-tight">
                        Complete Control Over <br> Your Empire
                    </h2>

                    <div class="space-y-4">
                        <button onclick="changeScreen('dashboard', this)" class="feature-tab active w-full text-left p-5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/5 hover:border-green-500/50 transition-all group flex items-center gap-4">
                            <div class="p-3 bg-blue-500/20 rounded-lg text-blue-400"><i class="fas fa-chart-pie"></i></div>
                            <div>
                                <h3 class="text-white font-bold">Smart Dashboard</h3>
                                <p class="text-gray-400 text-sm">Real-time sales & cash flow tracking.</p>
                            </div>
                        </button>

                        <button onclick="changeScreen('billing', this)" class="feature-tab w-full text-left p-5 rounded-xl bg-transparent hover:bg-white/10 border border-transparent hover:border-green-500/50 transition-all group flex items-center gap-4">
                            <div class="p-3 bg-green-500/20 rounded-lg text-green-400"><i class="fas fa-file-invoice"></i></div>
                            <div>
                                <h3 class="text-white font-bold">Fast Invoicing</h3>
                                <p class="text-gray-400 text-sm">Create bills in seconds via keyboard.</p>
                            </div>
                        </button>

                        <button onclick="changeScreen('reports', this)" class="feature-tab w-full text-left p-5 rounded-xl bg-transparent hover:bg-white/10 border border-transparent hover:border-green-500/50 transition-all group flex items-center gap-4">
                            <div class="p-3 bg-blue-500/20 rounded-lg text-blue-400"><i class="fas fa-chart-line"></i></div>
                            <div>
                                <h3 class="text-white font-bold">Deep Reports</h3>
                                <p class="text-gray-400 text-sm">Profit/Loss, Tax, and Inventory analysis.</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="w-[85%] mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Built for Every Business</h2>
            <p class="text-gray-500 mb-12">One platform, endless possibilities.</p>

            <div class="flex flex-wrap justify-center gap-4">
                <?php
                $industries = [
                    ['name' => 'Retail Shops', 'icon' => 'fa-store'],
                    ['name' => 'Pharmacy', 'icon' => 'fa-prescription-bottle-medical'],
                    ['name' => 'Textile', 'icon' => 'fa-tshirt'],
                    ['name' => 'Hardware', 'icon' => 'fa-hammer'],
                    ['name' => 'Supermarket', 'icon' => 'fa-shopping-cart'],
                    ['name' => 'Restaurant', 'icon' => 'fa-utensils'],
                    ['name' => 'Electronics', 'icon' => 'fa-plug'],
                    ['name' => 'FMCG', 'icon' => 'fa-box-open']
                ];

                foreach ($industries as $ind): ?>
                    <div class="group px-6 py-3 bg-white border border-gray-200 rounded-full shadow-sm text-gray-700 font-bold hover:bg-[#172010] hover:text-white hover:border-[#172010] transition-all cursor-default flex items-center gap-3">
                        <i class="fas <?= $ind['icon'] ?> text-blue-500 group-hover:text-green-400 transition-colors"></i>
                        <span><?= $ind['name'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="live-demo" class="py-24 bg-white relative">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-24 bg-gradient-to-b from-transparent to-gray-300"></div>

        <div class="w-[90%] xl:w-[85%] mx-auto">

            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-bold uppercase mb-4">
                    <i class="fas fa-bolt"></i> Interactive Demo
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Experience the Engine</h2>
                <p class="text-gray-500 mt-4">Add multiple items on the left. Watch the invoice build itself.</p>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">

                <div class="xl:col-span-4 sticky top-24 z-30">
                    <div class="bg-[#172010] text-white p-6 rounded-3xl shadow-2xl border border-gray-800">

                        <div class="flex justify-between items-center mb-6 border-b border-gray-700 pb-4">
                            <h3 class="font-bold text-lg"><i class="fas fa-sliders-h mr-2"></i>Controls</h3>
                            <div class="flex bg-gray-800 rounded-lg p-1">
                                <button onclick="setPaper('A4')" id="btn-a4" class="px-3 py-1 text-xs font-bold rounded bg-green-500 text-white transition-all">A4</button>
                                <button onclick="setPaper('thermal')" id="btn-thermal" class="px-3 py-1 text-xs font-bold rounded text-gray-400 hover:text-white transition-all">POS</button>
                            </div>
                        </div>

                        <div class="space-y-4 max-h-[65vh] overflow-y-auto pr-2 custom-scrollbar">

                            <div class="space-y-3 pb-4 border-b border-gray-700">
                                <h4 class="text-xs text-green-400 font-bold uppercase">1. Bill To</h4>
                                <div>
                                    <input type="text" id="inpInvNo" value="QTN-2026" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none mb-2" placeholder="Invoice No" oninput="updateHeader()">
                                    <input type="text" id="inpName" placeholder="Client Name" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none" oninput="updateHeader()">
                                </div>
                            </div>

                            <div class="space-y-3">
                                <h4 class="text-xs text-green-400 font-bold uppercase">2. Add Products</h4>

                                <div>
                                    <label class="text-[10px] uppercase font-bold text-gray-400">Description</label>
                                    <input type="text" id="newItemDesc" value="Web Service" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                </div>

                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <label class="text-[10px] uppercase font-bold text-gray-400">HSN</label>
                                        <input type="text" id="newItemHsn" value="9983" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                    </div>
                                    <div>
                                        <label class="text-[10px] uppercase font-bold text-gray-400">Rate</label>
                                        <input type="number" id="newItemRate" value="5000" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div>
                                        <label class="text-[10px] uppercase font-bold text-gray-400">Qty</label>
                                        <input type="number" id="newItemQty" value="1" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                    </div>
                                    <div>
                                        <label class="text-[10px] uppercase font-bold text-gray-400">GST %</label>
                                        <input type="number" id="newItemGst" value="18" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                    </div>
                                    <div>
                                        <label class="text-[10px] uppercase font-bold text-gray-400">Disc %</label>
                                        <input type="number" id="newItemDisc" value="0" class="w-full bg-gray-800 border border-gray-700 rounded p-2 text-sm text-white focus:border-green-500 outline-none">
                                    </div>
                                </div>

                                <button onclick="addItem()" class="w-full py-2 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold rounded-lg transition mt-2">
                                    <i class="fas fa-plus mr-1"></i> Add to Invoice
                                </button>
                            </div>

                            <div class="pt-2">
                                <h4 class="text-xs text-gray-400 font-bold uppercase mb-2">Current Items (<span id="itemCount">0</span>)</h4>
                                <div id="controlPanelList" class="space-y-2 max-h-[150px] overflow-y-auto">
                                    <div class="text-xs text-gray-500 italic text-center py-2">No items added yet.</div>
                                </div>
                            </div>

                        </div>

                        <div class="mt-4 pt-4 border-t border-gray-700">
                            <button class="w-full py-3 bg-green-600 hover:bg-green-500 text-white font-bold rounded-xl transition shadow-lg shadow-green-900/50 flex justify-center items-center gap-2">
                                <i class="fas fa-print"></i> Print / Download
                            </button>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-8 bg-gray-100 rounded-3xl border border-gray-200 p-8 lg:p-12 min-h-[800px] flex justify-center items-start overflow-hidden relative shadow-inner">
                    <div class="absolute inset-0 opacity-[0.05]" style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 20px 20px;"></div>

                    <div id="view-a4" class="bg-white shadow-2xl w-[210mm] min-h-[207mm] p-8 text-black text-xs font-sans leading-tight flex flex-col transform transition-transform duration-500 origin-top">

                        <div class="text-center mb-1">
                            <h1 class="font-bold text-lg uppercase underline decoration-2 underline-offset-2">Quotation Invoice (Original)</h1>
                        </div>

                        <div class="border-2 border-black flex-grow flex flex-col">

                            <div class="flex border-b border-black">
                                <div class="w-1/2 p-2 border-r border-black">
                                    <h2 class="font-bold text-lg">RudraTech IT Services</h2>
                                    <p>Ambernath, Maharashtra</p>
                                    <p class="font-bold">GSTIN/UIN: 27AAAAA0000A1Z5</p>
                                    <p>State: Maharashtra, Code: 27</p>
                                </div>
                                <div class="w-1/2 flex flex-col">
                                    <div class="flex border-b border-black h-1/2">
                                        <div class="w-1/2 p-1 border-r border-black">
                                            <p class="text-[10px] font-bold">Invoice No.</p>
                                            <p class="font-bold text-sm" id="outInvNo">QTN-2026</p>
                                        </div>
                                        <div class="w-1/2 p-1">
                                            <p class="text-[10px] font-bold">Dated</p>
                                            <p class="font-bold"><?php echo date('d-M-y'); ?></p>
                                        </div>
                                    </div>
                                    <div class="flex h-1/2">
                                        <div class="w-1/2 p-1 border-r border-black">
                                            <p class="text-[10px] font-bold">Delivery Note</p>
                                            <p>-</p>
                                        </div>
                                        <div class="w-1/2 p-1">
                                            <p class="text-[10px] font-bold">Payment Terms</p>
                                            <p>Immediate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex border-b border-black">
                                <div class="w-1/2 p-2 border-r border-black">
                                    <p class="text-[10px] font-bold mb-1">Consignee (Ship to)</p>
                                    <p class="font-bold text-sm outName">Client Name</p>
                                    <p>Ambernath, Maharashtra</p>
                                    <p class="font-bold mt-1">GSTIN: 27AAHFA7639L1ZZ</p>
                                </div>
                                <div class="w-1/2 p-2">
                                    <p class="text-[10px] font-bold mb-1">Buyer (Bill to)</p>
                                    <p class="font-bold text-sm outName">Client Name</p>
                                    <p>Ambernath, Maharashtra</p>
                                    <p class="font-bold mt-1">GSTIN: 27AAHFA7639L1ZZ</p>
                                </div>
                            </div>

                            <div class="flex border-b border-black bg-gray-100 text-center font-bold text-[11px]">
                                <div class="w-[5%] border-r border-black p-1">SI</div>
                                <div class="w-[40%] border-r border-black p-1 text-left">Description of Goods</div>
                                <div class="w-[10%] border-r border-black p-1">HSN/SAC</div>
                                <div class="w-[10%] border-r border-black p-1">Quantity</div>
                                <div class="w-[10%] border-r border-black p-1">Rate</div>
                                <div class="w-[10%] border-r border-black p-1">Disc %</div>
                                <div class="w-[15%] p-1">Amount</div>
                            </div>

                            <div class="flex-grow flex flex-col relative min-h-[300px]">
                                <div class="absolute inset-0 flex pointer-events-none">
                                    <div class="w-[5%] border-r border-black h-full"></div>
                                    <div class="w-[40%] border-r border-black h-full"></div>
                                    <div class="w-[10%] border-r border-black h-full"></div>
                                    <div class="w-[10%] border-r border-black h-full"></div>
                                    <div class="w-[10%] border-r border-black h-full"></div>
                                    <div class="w-[10%] border-r border-black h-full"></div>
                                    <div class="w-[15%] h-full"></div>
                                </div>

                                <div id="invoiceBody" class="z-10 w-full"></div>
                            </div>

                            <div class="border-t border-black">
                                <div class="flex border-b border-black">
                                    <div class="w-[85%] border-r border-black p-1 text-right font-bold">Total Discount (-)</div>
                                    <div class="w-[15%] p-1 text-right" id="outTotalDisc">0.00</div>
                                </div>
                                <div class="flex border-b border-black">
                                    <div class="w-[85%] border-r border-black p-1 text-right text-[10px]">CGST (Total)</div>
                                    <div class="w-[15%] p-1 text-right" id="outTotalCgst">0.00</div>
                                </div>
                                <div class="flex border-b border-black">
                                    <div class="w-[85%] border-r border-black p-1 text-right text-[10px]">SGST (Total)</div>
                                    <div class="w-[15%] p-1 text-right" id="outTotalSgst">0.00</div>
                                </div>
                                <div class="flex font-bold bg-gray-200">
                                    <div class="w-[65%] border-r border-black p-2 text-right">Total</div>
                                    <div class="w-[20%] border-r border-black p-2 text-center" id="outTotalQty">0</div>
                                    <div class="w-[15%] p-2 text-right text-sm" id="outGrandTotal">0.00</div>
                                </div>
                            </div>

                            <div class="border-t border-black p-2 flex justify-between items-end">
                                <div class="w-2/3">
                                    <p class="text-[10px]">Amount Chargeable (in words):</p>
                                    <p class="font-bold italic" id="outWords">Zero Only</p>
                                </div>
                                <div class="w-1/3 text-right">
                                    <p class="text-[10px] font-bold">for RudraTech IT Services</p>
                                    <br><br>
                                    <p class="text-[10px]">(Authorised Signatory)</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="view-pos" class="hidden bg-white shadow-xl w-[80mm] p-4 font-mono text-xs text-gray-900 min-h-[100mm] flex flex-col">
                        <div class="text-center border-b-2 border-dashed border-gray-800 pb-2 mb-2">
                            <h2 class="font-bold text-sm">RudraTech POS</h2>
                            <p class="text-[10px]">Date: <?php echo date('d-M'); ?></p>
                        </div>
                        <div class="mb-2">Customer: <span class="outName font-bold">Client</span></div>

                        <div class="border-b border-gray-800 mb-2"></div>
                        <div class="flex justify-between font-bold mb-1"><span>Item</span><span>Amt</span></div>

                        <div id="posBody" class="w-full mb-2"></div>

                        <div class="border-b border-gray-800 mb-2"></div>

                        <div class="flex justify-between"><span>Total Tax</span><span id="posTax">0.00</span></div>
                        <div class="flex justify-between font-bold text-sm mt-2"><span>TOTAL</span><span id="posTotal">0.00</span></div>

                        <div class="text-center mt-4 text-[10px]">*** Thank You ***</div>
                        <div class="h-8 bg-black w-3/4 mx-auto mt-2"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="py-24 bg-[#172010] relative overflow-hidden">

        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600 rounded-full blur-[150px]"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-green-600 rounded-full blur-[150px]"></div>
        </div>

        <div class="w-[85%] mx-auto relative z-10">

            <div class="text-center mb-16">
                <span class="text-green-400 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Automated Workflow
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-white">
                    See It <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">Generate Reports</span>
                </h2>
                <p class="text-gray-400 mt-4">
                    Watch how fast Bharat Bill Book processes data. No manual errors. Just results.
                </p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <div class="relative bg-gray-900 rounded-t-2xl border-[12px] border-gray-800 shadow-2xl overflow-hidden aspect-[16/10]">

                    <div class="bg-gray-100 w-full h-full relative font-sans overflow-hidden" id="sim-screen">

                        <div class="bg-white border-b border-gray-200 h-12 flex items-center px-4 justify-between">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="text-xs font-bold text-gray-400">Bharat Bill Book v3.0</div>
                            <div class="w-4"></div>
                        </div>

                        <div id="scene-form" class="p-8 absolute inset-0 top-12 transition-opacity duration-500 opacity-100">
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Create New Invoice</h3>

                            <div class="space-y-4 max-w-md">
                                <div>
                                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Customer Name</label>
                                    <input type="text" id="sim-input-name" class="w-full border border-gray-300 rounded p-2 text-sm text-gray-800 bg-white" placeholder="">
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-1/2">
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Item</label>
                                        <select class="w-full border border-gray-300 rounded p-2 text-sm bg-white">
                                            <option>Consulting Service</option>
                                        </select>
                                    </div>
                                    <div class="w-1/2">
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Amount (₹)</label>
                                        <input type="text" id="sim-input-amt" class="w-full border border-gray-300 rounded p-2 text-sm text-gray-800 bg-white" placeholder="">
                                    </div>
                                </div>
                                <button id="sim-btn" class="mt-4 px-6 py-2 bg-blue-600 text-white text-sm font-bold rounded shadow-lg transform transition-transform scale-100">
                                    Generate Invoice
                                </button>
                            </div>
                        </div>

                        <div id="scene-loading" class="absolute inset-0 top-12 bg-white flex flex-col items-center justify-center opacity-0 transition-opacity duration-300">
                            <div class="w-10 h-10 border-4 border-blue-200 border-t-blue-600 rounded-full animate-spin mb-4"></div>
                            <p class="text-sm font-bold text-gray-500">Calculating Taxes...</p>
                        </div>

                        <div id="scene-result" class="absolute inset-0 top-12 bg-gray-50 p-8 flex flex-col items-center justify-center opacity-0 transition-opacity duration-500 transform translate-y-10">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 shadow-sm">
                                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Invoice Created!</h3>
                            <p class="text-gray-500 mb-6">#INV-2026 sent via WhatsApp</p>

                            <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-lg w-64 text-center">
                                <p class="text-xs text-gray-400 uppercase">Total Amount</p>
                                <p class="text-2xl font-bold text-blue-600">₹ 12,500</p>
                                <div class="mt-2 w-full bg-gray-100 h-1 rounded-full overflow-hidden">
                                    <div class="bg-green-500 h-full w-[80%]"></div>
                                </div>
                                <p class="text-[10px] text-gray-400 mt-1 text-right">Paid Online</p>
                            </div>
                        </div>

                        <div id="ghost-cursor" class="absolute top-0 left-0 pointer-events-none z-50 transition-all duration-700 ease-in-out">
                            <svg class="w-6 h-6 text-black drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3.5 3.5L10 21.5L13.5 13.5L21.5 10L3.5 3.5Z" stroke="white" stroke-width="2" />
                            </svg>
                        </div>

                    </div>
                </div>

                <div class="h-5 bg-gray-800 rounded-b-xl mx-12 shadow-lg flex justify-center">
                    <div class="w-32 h-1.5 bg-gray-700 rounded-b-md"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cursor = document.getElementById('ghost-cursor');
            const inputName = document.getElementById('sim-input-name');
            const inputAmt = document.getElementById('sim-input-amt');
            const btn = document.getElementById('sim-btn');
            const sceneForm = document.getElementById('scene-form');
            const sceneLoad = document.getElementById('scene-loading');
            const sceneResult = document.getElementById('scene-result');

            const sleep = ms => new Promise(r => setTimeout(r, ms));

            async function typeText(element, text) {
                element.value = "";
                // Cursor moves to element
                const rect = element.getBoundingClientRect();
                const containerRect = document.getElementById('sim-screen').getBoundingClientRect();

                // Calculate relative position inside the laptop screen
                const x = rect.left - containerRect.left + 20;
                const y = rect.top - containerRect.top + 20;

                cursor.style.transform = `translate(${x}px, ${y}px)`;
                await sleep(800); // Wait for cursor to arrive

                // Focus effect
                element.classList.add('border-blue-500', 'ring-2', 'ring-blue-200');

                // Type characters
                for (let char of text) {
                    element.value += char;
                    await sleep(100); // Typing speed
                }

                await sleep(400);
                element.classList.remove('border-blue-500', 'ring-2', 'ring-blue-200');
            }

            async function runAnimation() {
                // Reset State
                inputName.value = "";
                inputAmt.value = "";
                sceneForm.style.opacity = "1";
                sceneResult.style.opacity = "0";
                sceneResult.classList.remove('translate-y-0');
                sceneResult.classList.add('translate-y-10');
                sceneLoad.style.opacity = "0";

                await sleep(1000);

                // 1. Type Name
                await typeText(inputName, "Rohan Sharma");

                // 2. Type Amount
                await typeText(inputAmt, "12500");

                // 3. Move to Button
                const btnRect = btn.getBoundingClientRect();
                const containerRect = document.getElementById('sim-screen').getBoundingClientRect();
                const btnX = btnRect.left - containerRect.left + btnRect.width / 2;
                const btnY = btnRect.top - containerRect.top + btnRect.height / 2;

                cursor.style.transform = `translate(${btnX}px, ${btnY}px)`;
                await sleep(800);

                // 4. Click Effect
                btn.classList.add('scale-95', 'bg-blue-700');
                await sleep(150);
                btn.classList.remove('scale-95', 'bg-blue-700');

                // 5. Loading State
                sceneForm.style.opacity = "0";
                sceneLoad.style.opacity = "1";

                // Move cursor away
                cursor.style.transform = `translate(90%, 90%)`;

                await sleep(1500); // Simulate processing time

                // 6. Show Result
                sceneLoad.style.opacity = "0";
                sceneResult.style.opacity = "1";
                sceneResult.classList.remove('translate-y-10');
                sceneResult.classList.add('translate-y-0');

                // 7. Loop
                await sleep(4000); // Show result for 4 seconds
                runAnimation();
            }

            // Start Loop
            runAnimation();
        });
    </script>

    <section class="py-24 bg-white relative z-20">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Universal Compatibility
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Connects with <span class="text-blue-600">Everything</span></h2>
                <p class="text-gray-500 max-w-2xl mx-auto">
                    No need to buy expensive new gadgets. Bharat Bill Book works instantly with the hardware you already own.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative p-8 rounded-3xl bg-gray-50 border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-blue-600 text-3xl mb-6">
                        <i class="fas fa-print"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Any Printer</h3>
                    <p class="text-sm text-gray-500 mb-4">Laser, Inkjet, or Thermal (2-inch & 3-inch). We support them all automatically.</p>
                    <ul class="text-xs text-gray-400 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Epson / Canon</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> TVS / Posiflex</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Bluetooth Thermal</li>
                    </ul>
                </div>

                <div class="group relative p-8 rounded-3xl bg-[#172010] text-white border border-gray-800 overflow-hidden shadow-2xl transform md:-translate-y-4">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-green-500/20 rounded-full blur-3xl group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-16 h-16 bg-gray-800 rounded-2xl shadow-inner border border-gray-700 flex items-center justify-center text-green-400 text-3xl mb-6">
                        <i class="fas fa-barcode"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Barcode Scanners</h3>
                    <p class="text-sm text-gray-400 mb-4">Plug in your scanner and start billing. Zero configuration required.</p>
                    <div class="w-full bg-gray-800 h-1 rounded-full overflow-hidden mb-2">
                        <div class="bg-green-500 h-full w-[0%] animate-[width_2s_ease-in-out_infinite]"></div>
                    </div>
                    <p class="text-[10px] text-green-400 uppercase font-bold tracking-wider">Scan Speed: < 0.2ms</p>
                </div>

                <div class="group relative p-8 rounded-3xl bg-gray-50 border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-blue-600 text-3xl mb-6">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Weighing Scales</h3>
                    <p class="text-sm text-gray-500 mb-4">Directly pull weight from digital scales. Perfect for Kirana and Sweet shops.</p>
                    <ul class="text-xs text-gray-400 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> CAS / Essae</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Cash Drawers</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Touch POS Machines</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">



        <div class="w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">

            <div class="relative flex justify-center order-2 lg:order-1">
                <div class="relative w-[300px] h-[600px] bg-gray-900 rounded-[3rem] border-[8px] border-gray-800 shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-white relative">
                        <div class="bg-blue-600 h-20 p-6 flex items-end justify-between text-white">
                            <span class="font-bold">Dashboard</span>
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="p-4 space-y-4">
                            <div class="bg-blue-50 p-4 rounded-xl border border-blue-100">
                                <p class="text-xs text-gray-500">Total Sales Today</p>
                                <p class="text-2xl font-bold text-blue-700">₹ 24,500</p>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-xs font-bold text-gray-400 uppercase">
                                    <span>Recent Bills</span>
                                    <span>Amt</span>
                                </div>
                                <div class="flex justify-between p-3 bg-gray-50 rounded-lg text-sm">
                                    <span>Rohan Sharma</span>
                                    <span class="font-bold">₹ 500</span>
                                </div>
                                <div class="flex justify-between p-3 bg-gray-50 rounded-lg text-sm">
                                    <span>Amit General</span>
                                    <span class="font-bold">₹ 1,200</span>
                                </div>
                                <div class="flex justify-between p-3 bg-gray-50 rounded-lg text-sm">
                                    <span>Cash Sale</span>
                                    <span class="font-bold">₹ 150</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 w-full h-16 bg-white border-t flex justify-around items-center text-gray-400">
                            <i class="fas fa-home text-blue-600"></i>
                            <i class="fas fa-plus-circle text-4xl text-blue-600 -mt-8 bg-white rounded-full p-1 shadow-lg"></i>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="absolute top-20 -right-10 bg-white p-3 rounded-xl shadow-xl  hidden md:block">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-600"><i class="fas fa-check"></i></div>
                        <div>
                            <p class="text-[10px] text-gray-500">Sync Status</p>
                            <p class="text-xs font-bold">Live Updated</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 text-left">
                <span class="text-green-400 font-bold tracking-widest uppercase text-xs mb-3 block">
                    Android & iOS App
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold  mb-6">
                    Your Shop in <br> Your <span class="text-blue-500">Pocket.</span>
                </h2>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                    Not at the counter? No problem. Check live sales, stock levels, and create bills from your phone. Data syncs instantly between PC and Mobile.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="flex items-center gap-3 px-6 py-3 border shadow-lg text-black rounded-xl hover:bg-gray-200 transition">
                        <i class="fab fa-google-play text-2xl text-green-600"></i>
                        <div class="text-left">
                            <p class="text-[10px] font-bold uppercase">Get it on</p>
                            <p class="text-sm font-bold leading-none">Google Play</p>
                        </div>
                    </button>
                    <button class="flex items-center gap-3 px-6 py-3 bg-black border border-gray-600 text-white rounded-xl hover:border-white transition">
                        <i class="fab fa-apple text-2xl"></i>
                        <div class="text-left">
                            <p class="text-[10px] font-bold uppercase">Download on</p>
                            <p class="text-sm font-bold leading-none">App Store</p>
                        </div>
                    </button>
                </div>
            </div>

        </div>
    </section>


    <section class="py-20 bg-[#172010] text-white text-center">
        <h2 class="text-3xl font-bold mb-6">Ready for the Future?</h2>
        <div class="flex justify-center gap-4">
            <a href="contact.php" class="bg-green-600 text-white font-bold py-3 px-8 rounded-full hover:bg-green-500 transition-colors">Get Started Now</a>
        </div>
    </section>

    <?php include "include/footer.php" ?>

    <script>
        // --- 1. GLOBAL STATE & UTILS ---
        let items = [];
        const fmt = new Intl.NumberFormat('en-IN', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        // --- 2. SCREEN/IMAGE SWITCHER (LAPTOP DEMO) ---
        function changeScreen(feature, element) {
            const images = {
                'dashboard': '/asset/software/bill2 (1).jpg',
                'billing': '/asset/software/bill2 (2).jpg',
                'reports': '/asset/software/bill2 (3).jpg'
            };
            const screen = document.getElementById('laptop-screen');
            screen.style.opacity = '0';
            setTimeout(() => {
                if (images[feature]) screen.src = images[feature];
                screen.style.opacity = '1';
            }, 300);

            document.querySelectorAll('.feature-tab').forEach(tab => {
                tab.classList.remove('bg-white/10', 'border-green-500/50');
                tab.classList.add('bg-transparent', 'border-transparent');
            });
            element.classList.remove('bg-transparent', 'border-transparent');
            element.classList.add('bg-white/10', 'border-green-500/50');
        }

        // --- 3. PAPER SIZE SWITCHER (A4 vs POS) ---
        function setPaper(type) {
            const a4 = document.getElementById('view-a4');
            const pos = document.getElementById('view-pos');
            const btnA4 = document.getElementById('btn-a4');
            const btnPos = document.getElementById('btn-thermal');

            if (type === 'thermal') {
                a4.classList.add('hidden');
                pos.classList.remove('hidden');
                btnPos.classList.replace('text-gray-400', 'text-white');
                btnPos.classList.add('bg-green-500');
                btnA4.classList.remove('bg-green-500', 'text-white');
                btnA4.classList.add('text-gray-400');
            } else {
                a4.classList.remove('hidden');
                pos.classList.add('hidden');
                btnA4.classList.add('bg-green-500', 'text-white');
                btnA4.classList.remove('text-gray-400');
                btnPos.classList.remove('bg-green-500', 'text-white');
                btnPos.classList.add('text-gray-400');
            }
        }

        // --- 4. ITEM MANAGEMENT (ADD/DELETE) ---
        function addItem() {
            const desc = document.getElementById('newItemDesc').value;
            const hsn = document.getElementById('newItemHsn').value;
            const rate = parseFloat(document.getElementById('newItemRate').value) || 0;
            const qty = parseFloat(document.getElementById('newItemQty').value) || 0;
            const gst = parseFloat(document.getElementById('newItemGst').value) || 0;
            const disc = parseFloat(document.getElementById('newItemDisc').value) || 0;

            if (!desc) {
                alert("Please enter description");
                return;
            }

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

            // Reset input fields
            document.getElementById('newItemDesc').value = "";
            document.getElementById('newItemRate').value = "";
        }

        function deleteItem(index) {
            items.splice(index, 1);
            renderInvoice();
            renderControlList();
        }

        function renderControlList() {
            const list = document.getElementById('controlPanelList');
            document.getElementById('itemCount').innerText = items.length;

            if (items.length === 0) {
                list.innerHTML = '<div class="text-xs text-gray-500 italic text-center py-2">No items added yet.</div>';
                return;
            }

            let html = '';
            items.forEach((item, index) => {
                html += `
                    <div class="flex justify-between items-center bg-gray-800 p-2 rounded border border-gray-700">
                        <div class="truncate w-2/3">
                            <p class="text-xs font-bold text-white truncate">${item.desc}</p>
                            <p class="text-[10px] text-gray-400">${item.qty} x ${item.rate}</p>
                        </div>
                        <button onclick="deleteItem(${index})" class="text-red-400 hover:text-red-300"><i class="fas fa-trash"></i></button>
                    </div>`;
            });
            list.innerHTML = html;
        }

        // --- 5. INVOICE RENDERING & CALCULATIONS ---
        function updateHeader() {
            const inv = document.getElementById('inpInvNo').value;
            const name = document.getElementById('inpName').value || "Client Name";
            document.getElementById('outInvNo').innerText = inv;
            document.querySelectorAll('.outName').forEach(el => el.innerText = name);
        }

        function renderInvoice() {
            const tbody = document.getElementById('invoiceBody');
            const posBody = document.getElementById('posBody');

            let htmlA4 = '';
            let htmlPos = '';

            let gTotalQty = 0;
            let gTotalDisc = 0;
            let gTotalTax = 0;
            let gGrandTotal = 0;

            items.forEach((item, i) => {
                const baseAmt = item.rate * item.qty;
                const discAmt = baseAmt * (item.disc / 100);
                const taxable = baseAmt - discAmt;
                const taxAmt = taxable * (item.gst / 100);
                const total = taxable + taxAmt;

                gTotalQty += item.qty;
                gTotalDisc += discAmt;
                gTotalTax += taxAmt;
                gGrandTotal += total;

                // A4 Row
                htmlA4 += `
                <div class="flex text-[11px] border-b border-gray-100 last:border-0 relative hover:bg-gray-50">
                    <div class="w-[5%] p-2 text-center">${i + 1}</div>
                    <div class="w-[40%] p-2 font-bold truncate">${item.desc}</div>
                    <div class="w-[10%] p-2 text-center">${item.hsn}</div>
                    <div class="w-[10%] p-2 text-center">${item.qty}</div>
                    <div class="w-[10%] p-2 text-right">${fmt.format(item.rate)}</div>
                    <div class="w-[10%] p-2 text-center">${item.disc}%</div>
                    <div class="w-[15%] p-2 text-right font-bold">${fmt.format(taxable)}</div>
                </div>`;

                // POS Row
                htmlPos += `
                <div class="flex justify-between mb-1">
                    <span class="w-2/3 truncate"><span class="text-[10px] font-bold">${item.qty}</span> x ${item.desc}</span>
                    <span class="w-1/3 text-right">${fmt.format(baseAmt)}</span>
                </div>`;
            });

            // Empty State
            if (items.length === 0) {
                htmlA4 = `<div class="flex text-[11px] h-10 items-center justify-center text-gray-400 italic">Add items from left panel</div>`;
                htmlPos = `<div class="text-center text-[10px] text-gray-400">No items</div>`;
            }

            tbody.innerHTML = htmlA4;
            posBody.innerHTML = htmlPos;

            // Update Totals
            document.getElementById('outTotalQty').innerText = gTotalQty.toFixed(2);
            document.getElementById('outTotalDisc').innerText = fmt.format(gTotalDisc);
            document.getElementById('outTotalCgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outTotalSgst').innerText = fmt.format(gTotalTax / 2);
            document.getElementById('outGrandTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('posTax').innerText = fmt.format(gTotalTax);
            document.getElementById('posTotal').innerText = fmt.format(gGrandTotal);
            document.getElementById('outWords').innerText = "INR " + Math.round(gGrandTotal) + " Only";
        }

        // Init
        addItem(); // Add one default item
    </script>
</body>

</html>