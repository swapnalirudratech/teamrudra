<?php
$page_title = "career"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    <?php include "include/navbar.php" ?>


    <section class="bg-gradient-to-br from-blue-100 to-white text-white  w-full   h-[85vh] max-md:h-[60vh] max-lg:h-[40vh] ">
        <div class="grid md:grid-cols-2 gap-12 items-center   justify-center w-[80%] mx-auto max-md:grid-cols-1 py-20 max-lg:py-12">
            <!-- Text Content -->
            <div class="flex items-start justify-start flex-col w-full max-md:justify-center max-md:items-center max-md:text-center">
                <p class="text-sm w-fit bg-blue-600 px-2 py-1 uppercase mb-2">• Join our team •</p>
                <h1 class="text-5xl max-lg:text-3xl text-4xl lg-text-5xl xl:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Build Your Future <br />
                    with <span class="text-blue-600">RudraTech</span>
                </h1>
                <p class="text-lg max-md:text-sm  text-gray-800 mb-6">
                    At RudraTech, we turn ideas into powerful digital products.
                </p>
                <div class="flex gap-4 mb-4">

                    <a href="#vacancy" class="border border-gray-800 text-gray-800 px-6 py-2 font-bold rounded hover:bg-white hover:text-[#0C2E2E] transition">
                        Vacancies
                    </a>
                </div>

            </div>

            <!-- Images -->
            <div class="grid grid-cols-2 gap-4  max-md:hidden">
                <img src="/asset/develope.jpg" alt="Happy developer" class="rounded-lg shadow-lg row-span-2 w-full h-full object-cover hover:scale-105 transition transform duration-500 ease-in-out" />
                <img src="/asset/planing.jpg" alt="Office" class="rounded-lg shadow-lg w-full h-full object-cover hover:scale-105 transition transform duration-500 ease-in-out" />
                <img src="/asset/framework (1).jpg" alt="Team collaboration" class="rounded-lg shadow-lg w-full h-full object-cover hover:scale-105 transition transform duration-500 ease-in-out" />
            </div>
        </div>
    </section>




    <section id="vacancy" class="bg-gray-50 py-20 max-lg:py-12  px-4 max-md:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="max-md:px-4 mb-8">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-2 max-md:text-2xl ">Latest Developer Openings</h2>
                <p class="text-center text-gray-500 mb-8">— IT Company Jobs in Mumbai & Nearby —</p>

            </div>
            <div class="bg-white shadow-md max-md:shadow-none rounded-lg overflow-hidden">
                <div class="divide-y divide-gray-200">

                    <!-- React Developer -->
                    <div class="flex items-center justify-between px-6 py-4 max-md:px-4 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-2 max-md:gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/1126/1126012.png" alt="React" class="w-6 h-6">
                            <div>
                                <p class="text-blue-600 font-semibold max-md:text-sm">Frontend React Developer</p>
                                <div class="flex items-center text-sm max-md:text-xs  text-gray-500 gap-2">
                                    <span>Ambernath, Mumbai</span>
                                </div>
                            </div>
                        </div>
                        <a href="#applynow" class="text-sm max-md:text-xs text-blue-600 border border-blue-600 px-4 py-1.5 rounded-full hover:bg-blue-50 transition">
                            Apply Now
                        </a>
                    </div>

                    <!-- PHP Developer -->
                    <div class="flex items-center justify-between px-6 py-4 max-md:px-4 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png" alt="PHP" class="w-6 h-6">
                            <div>
                                <p class="text-blue-600 font-semibold max-md:text-sm">Backend PHP Developer</p>
                                <div class="flex items-center text-sm max-md:text-xs  text-gray-500 gap-2">
                                    <span>Ambernath , Mumbai</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-sm max-md:text-xs text-white bg-gray-400 px-4 py-1.5 rounded-full font-medium">
                            Coming Soon
                        </span>
                    </div>

                    <!-- Full Stack Developer -->
                    <div class="flex items-center justify-between px-6 py-4 max-md:px-4 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/919/919827.png" alt="Full Stack" class="w-6 h-6">
                            <div>
                                <p class="text-blue-600 font-semibold max-md:text-sm">Full Stack Developer (MERN)</p>
                                <div class="flex items-center text-sm max-md:text-xs  text-gray-500 gap-2">
                                    <span>Ambernath </span>
                                </div>
                            </div>
                        </div>
                        <a href="#applynow" class="text-sm max-md:text-xs text-blue-600 border border-blue-600 px-4 py-1.5 rounded-full hover:bg-blue-50 transition">
                            Apply Now
                        </a>
                    </div>

                    <!-- WordPress Developer -->
                    <div class="flex items-center justify-between px-6 py-4 max-md:px-4 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/919/919851.png" alt="WordPress" class="w-6 h-6">
                            <div>
                                <p class="text-blue-600 font-semibold max-md:text-sm">WordPress Developer</p>
                                <div class="flex items-center text-sm max-md:text-xs  text-gray-500 gap-2">
                                    <span>Ambernath, Maharashtra</span>
                                </div>
                            </div>
                        </div>
                        <a href="#applynow" class="text-sm max-md:text-xs text-blue-600 border border-blue-600 px-4 py-1.5 rounded-full hover:bg-blue-50 transition">
                            Apply Now
                        </a>
                    </div>

                    <!-- UI/UX Designer -->
                    <div class="flex items-center justify-between px-6 py-4 max-md:px-4 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048944.png" alt="Design" class="w-6 h-6">
                            <div>
                                <p class="text-blue-600 font-semibold max-md:text-sm">UI/UX Designer</p>
                                <div class="flex items-center text-sm max-md:text-xs  text-gray-500 gap-2">
                                    <span>Ambernath, Maharashtra</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-sm max-md:text-xs text-white bg-gray-400 px-4 py-1.5 rounded-full font-medium">
                            Coming Soon
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>





    <div class="w-[80%] mx-auto py-20 max-lg:py-12  border-t border-gray-300 hidden">
        <div class="flex flex-col md:flex-row">
            <!-- Left Content Section -->
            <div class="w-full md:w-1/2  flex flex-col justify-center">
                <div class="mb-2">
                    <span class="text-sm text-gray-600">- Benefits -</span>
                </div>

                <h1 class="text-4xl font-bold text-gray-800 mb-6">Feel and Do Your Best</h1>

                <p class="mb-6 text-gray-700">
                    We really care about our employees.
                </p>

                <p class="mb-6 text-gray-700">
                    Working in Rudratech IT Services, you get a range of benefits, resources, and expert
                    guidance to help you to prioritize your well-being and find a work-life
                    balance. The main benefits include:
                </p>

                <ul class="mb-6">
                    <li class="flex items-start mb-3">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 bg-blue-100 rounded-sm text-blue-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700">Full healthcare coverage for you and your family;</span>
                    </li>
                    <li class="flex items-start mb-3">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 bg-blue-100 rounded-sm text-blue-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700">Wellbeing reimbursement (up to $500 every month);</span>
                    </li>
                    <li class="flex items-start mb-3">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 bg-blue-100 rounded-sm text-blue-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700">Home office budget to make your home workplace comfortable;</span>
                    </li>
                </ul>

                <p class="mb-8 text-gray-700">
                    You also can get paid sick leaves, 28 vacation days per year, separate
                    budgets on education, your hobbies, family time, and so on. Being a part of
                    our team is beneficial and really exciting!
                </p>

                <div>
                    <button class="px-6 py-3 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-sm transition duration-300">
                        Learn More
                    </button>
                </div>
            </div>

            <!-- Right Image Section -->
            <div class="w-full md:w-1/2 bg-teal-600  rounded-tl-[80px] rounded-br-[80px]">
                <img src="/asset/maintanace.jpg" alt="IT professional working" class="w-full h-full rounded-br-[80px] rounded-tl-[80px] object-cover">
            </div>
        </div>
    </div>



    <div id="applynow" class="w-full bg-white text-gray-800 py-16 max-md:py-12 bg-no-repeat bg-bottom bg-contain scroll-mt-32" style="background-image: url('/asset/banner-botm-bg1.png');">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-start">

            <!-- Left Content -->
            <div class="space-y-6 max-md:space-y-4 animate-fade-in">
                <span class="text-blue-600 text-sm max-md:text-xs  font-medium uppercase tracking-widest">Apply now</span>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Send Your CV</h2>
                <p class="text-gray-600 text-lg max-md:text-sm ">Join a team that's passionate, creative, and growing fast.</p>

                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-blue-600 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                            </svg>
                        </span>
                        Extensive career growth opportunities
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-blue-600 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                            </svg>
                        </span>
                        Up to 28 vacation days & travel allowance
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-blue-600 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                            </svg>
                        </span>
                        Paid sick leaves & healthcare benefits
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-blue-600 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                            </svg>
                        </span>
                        Competitive salary & modern work culture
                    </li>
                </ul>

                <p class="text-sm text-gray-500">We respect your time and ensure a fast response process.</p>
            </div>

            <!-- Right Form -->
            <div class="bg-white shadow-lg rounded-xl p-6 space-y-4 animate-fade-in delay-200 border">
                <form class="space-y-4" method="POST" action="/career-mail.php" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Full Name*"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300" required>

                    <input type="tel" name="phone" placeholder="Phone Number*"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300" required>

                    <input type="email" name="email" placeholder="Email*"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300" required>

                    <textarea rows="4" name="message" placeholder="Your Message"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>

                    <div>
                        <label for="cv-upload" class="flex items-center justify-between px-4 py-2 bg-gray-100 text-sm border border-gray-300 rounded-md cursor-pointer hover:bg-gray-200">
                            <span id="file-label" class="text-gray-600">Upload CV (PDF only) <span class="text-red-600">*</span></span>
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </label>
                        <input type="file" required name="cv" id="cv-upload" accept=".pdf" class="hidden">
                    </div>

                    <button type="submit"
                        class="w-full py-2 bg-blue-700 hover:bg-blue-800 text-white rounded-md font-medium transition duration-300">
                        Apply Now
                    </button>
                </form>
            </div>
        </div>
    </div>



    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            // Show loader
            Swal.fire({
                text: 'Please wait while we submit your details.',
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            try {
                const response = await fetch(form.action, {
                    method: form.method,
                    body: formData
                });
                const result = await response.json();
                Swal.close();

                if (result.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank You!',
                        text: result.message,
                        confirmButtonColor: '#2563eb'
                    }).then(() => {
                        form.reset();
                        window.location.href = '/';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: result.message || 'Something went wrong. Please try again.',
                        confirmButtonColor: '#e11d48'
                    });
                }
            } catch (error) {
                Swal.close();
                Swal.fire({
                    text: 'Please check your mobile number.',
                    confirmButtonColor: '#e11d48'
                });
            }
        });
    </script>

</body>

</html>