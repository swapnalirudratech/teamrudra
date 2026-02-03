<style>

    /* Hide scrollbar */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Smooth 'Snap' Animation Curve */
    .snap-transition {
        transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    /* Subtle Grid Background Pattern */
    .bg-grid-pattern {
        background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
        background-size: 40px 40px;
    }
</style>

<body class="bg-slate-50">

    <section class="py-12 lg:py-24 relative overflow-hidden">

        <div class="absolute inset-0 bg-grid-pattern opacity-[0.4] pointer-events-none"></div>
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-[10%] -left-[10%] w-[400px] lg:w-[700px] h-[400px] lg:h-[700px] bg-blue-100 rounded-full blur-[80px] lg:blur-[120px] opacity-40 mix-blend-multiply"></div>
            <div class="absolute top-[20%] -right-[10%] w-[300px] lg:w-[600px] h-[300px] lg:h-[600px] bg-purple-100 rounded-full blur-[80px] lg:blur-[120px] opacity-40 mix-blend-multiply"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-6 relative z-10">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 h-auto lg:h-[800px]">

                <div class="lg:w-1/3 flex flex-col justify-center shrink-0 z-20 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white border border-blue-100 text-blue-600 px-4 lg:px-5 py-2 rounded-full text-[10px] lg:text-xs font-bold tracking-wide uppercase shadow-sm mb-6 lg:mb-8 w-fit mx-auto lg:mx-0">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Client Success Stories
                    </div>

                    <h2 class="text-4xl lg:text-6xl font-bold text-slate-900 leading-[1.1] mb-4 lg:mb-6 tracking-tight">
                        Loved by <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-violet-600">Market Leaders.</span>
                    </h2>

                    <p class="text-slate-500 text-base lg:text-lg mb-8 lg:mb-10 leading-relaxed max-w-md mx-auto lg:mx-0">
                        Join 100+ businesses who transformed their operations with RudraTech. Hover over any review to read their full story.
                    </p>

                    <div class="flex items-center justify-center lg:justify-start gap-6 pt-8 border-t border-slate-200/60">
                        <div>
                            <div class="text-2xl lg:text-3xl font-bold text-slate-900">4.9<span class="text-base lg:text-lg text-slate-400 font-medium">/5</span></div>
                            <div class="flex text-yellow-400 text-xs lg:text-sm mt-1">★★★★★</div>
                        </div>
                        <div class="h-8 lg:h-10 w-px bg-slate-200"></div>
                        <div>
                            <div class="text-2xl lg:text-3xl font-bold text-slate-900">100<span class="text-lg text-blue-600">+</span></div>
                            <div class="text-[10px] lg:text-xs font-semibold text-slate-400 uppercase tracking-wide mt-1">Happy Clients</div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-2/3 relative h-[600px] lg:h-full">

                    <div class="absolute top-0 left-0 w-full h-20 lg:h-32 bg-gradient-to-b from-slate-50 to-transparent z-10 pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-full h-24 lg:h-32 bg-gradient-to-t from-slate-50 to-transparent z-10 pointer-events-none"></div>

                    <div class="flex gap-3 lg:gap-8 h-full overflow-hidden">

                        <div id="col-1" class="w-1/2 flex flex-col gap-4 lg:gap-8 snap-transition hover:cursor-pointer pb-8 hover:scroll-pause" onmouseenter="pauseScroll('col-1')" onmouseleave="resumeScroll('col-1')">

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="absolute top-4 right-4 lg:top-6 lg:right-8 text-6xl lg:text-9xl leading-none text-slate-50 font-serif opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-500 select-none">”</div>
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                        <span class="hidden lg:flex text-xs font-medium text-slate-400 ml-2 items-center gap-1">
                                            Verified
                                        </span>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "Getting our work done from RudraTech was an absolute pleasure. Their team delivered <span class="text-blue-600 font-semibold bg-blue-50 px-1 rounded">Snackita.in</span> beyond expectations."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Tanvi Watwani</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Founder, Snackita</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "They are the best team you can work with. I’m very impressed by their professionalism. Customer for life."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Kashesh Agarwaal</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "Rudratech has got a very hard working team, their support and service is very prompt. Highly efficient."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Santosh Kalamkar</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Business Owner</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "Very good and reasonable, specially very hardworking and polite team. Highly recommended."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Kunal Gala</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Retail Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="col-2" class="w-1/2 flex flex-col gap-4 lg:gap-8 mt-10 lg:mt-20 snap-transition hover:cursor-pointer pb-12 hover:scroll-pause" onmouseenter="pauseScroll('col-2')" onmouseleave="resumeScroll('col-2')">

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="absolute top-4 right-4 lg:top-6 lg:right-8 text-6xl lg:text-9xl leading-none text-slate-50 font-serif opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-500 select-none">”</div>
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "We truly appreciate your team's creativity. Delivered a <span class="text-blue-600 font-semibold bg-blue-50 px-1 rounded">visually impressive</span> website."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Priti Kuniyath</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Marketing Head</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "Their professional team are very supportive. If you need IT professionals go for <span class="font-bold text-slate-900">RudraTech</span>."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Sharon Cardoz</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "Best IT service by Rudra Tech. Both Directors Roshan & Rahul are very supportive & knowledgeable. A+"
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Vikas Sawants</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">Education Academy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative bg-white p-5 lg:p-8 rounded-2xl lg:rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-200 transition-all duration-500">
                                <div class="relative z-10">
                                    <div class="flex items-center gap-1 mb-3 lg:mb-4">
                                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                    </div>
                                    <p class="text-slate-700 text-xs lg:text-[15px] leading-relaxed font-medium mb-4 lg:mb-6">
                                        "What I want I got. Thank you Rudratech for making my vision into reality."
                                    </p>
                                    <div class="flex items-center gap-3 lg:gap-4 pt-4 border-t border-slate-50">
                                        <img src="/asset/user.jpg" alt="User" class="w-8 h-8 lg:w-12 lg:h-12 rounded-full object-cover ring-2 lg:ring-4 ring-slate-50">
                                        <div>
                                            <h4 class="font-bold text-slate-900 text-xs lg:text-sm">Diaans Kitchen</h4>
                                            <p class="text-[10px] lg:text-xs text-slate-500">F&B Owner</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        const intervals = {};

        function startScrolling(columnId, intervalTime) {
            const column = document.getElementById(columnId);

            intervals[columnId] = setInterval(() => {
                const firstCard = column.firstElementChild;
                if (!firstCard) return;

                // 1. Calculate height of first card + gap.
                // Mobile gap is 16px (gap-4), Desktop is 32px (gap-8).
                // We detect screen size via window width to set correct gap.
                const isMobile = window.innerWidth < 1024;
                const gap = isMobile ? 16 : 32;

                const scrollAmount = firstCard.offsetHeight + gap;

                // 2. Slide the column up
                column.style.transform = `translateY(-${scrollAmount}px)`;

                // 3. Reset after animation
                setTimeout(() => {
                    column.classList.remove('snap-transition'); // Disable anim
                    column.appendChild(firstCard); // Move top to bottom
                    column.style.transform = 'translateY(0)'; // Reset pos

                    // Force reflow
                    void column.offsetWidth;

                    column.classList.add('snap-transition'); // Re-enable anim
                }, 800); // Wait for CSS transition to finish

            }, intervalTime);
        }

        function pauseScroll(columnId) {
            clearInterval(intervals[columnId]);
        }

        function resumeScroll(columnId) {
            const time = columnId === 'col-1' ? 3000 : 4000;
            startScrolling(columnId, time);
        }

        document.addEventListener('DOMContentLoaded', () => {
            startScrolling('col-1', 3000);
            setTimeout(() => {
                startScrolling('col-2', 4000);
            }, 1500);
        });
    </script>

</body>