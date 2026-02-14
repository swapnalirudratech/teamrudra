<?php
$page_title = "web-calculator"
?>



<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>


<style>
    /* Custom scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
        width: 5px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    /* Checkbox animation */
    .checkbox-item {
        transition: all 0.3s ease;
    }

    .checkbox-item:hover {
        transform: translateY(-2px);
    }

    /* Banner gradient overlay */
    .gradient-overlay {
        background: linear-gradient(to right, rgba(17, 24, 39, 0.8), rgba(37, 99, 235, 0.5));
    }

    /* Banner wave separator */
    .wave-separator {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .wave-separator svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }

    .wave-separator .shape-fill {
        fill: #FFFFFF;
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>



<body>

    <?php include "include/navbar.php" ?>

    <!-- Hero Section -->
    <section class="relative py-24  max-lg:py-12 h-[80vh] max-md:h-[60vh] max-lg:h-[40vh]">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-gray-900 z-0"></div>
        <div class="  mx-auto w-[80%] relative z-10 max-lg:w-[85%]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-md:pt-12">
                <div>
                    <h1 class="text-4xl max-lg:text-3xl lg-text-5xl xl:text-5xl font-extrabold  text-white leading-tight mb-6">Website Development <span class="text-blue-600">Costs</span></h1>
                    <p class="text-base text-gray-300 mb-8 max-w-lg max-lg:text-sm">In 2024, a strong online presence is essential. Understand the investment required to elevate your digital footprint.</p>
                    <div class="flex gap-2">

                        <a href="/get-in-touch" class="bg-transparent max-md:text-xs border border-white  text-white px-6 py-3 rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-1 inline-flex items-center">
                            Book Appointment
                        </a>
                    </div>
                </div>
                <div class="relative w-full max-md:hidden">
                    <img src="/asset/web1.jpg" alt="Website Development" class="relative z-10 w-full h-full object-cover rounded-lg shadow-2xl transform ">
                </div>
            </div>
        </div>
    </section>


    <div class="w-full py-8  bg-gray-100 max-md:p-0">
        <div class=" w-[80%] max-md:w-[100%] max-lg:w-[90%] container mx-auto flex items-start justify-between flex-wrap lg:flex-nowrap gap-8">
            <!-- Left side content container -->
            <div id="leftContent" class="w-full lg:w-3/4  flex flex-col justify-start items-start">



                <form action="form.php" method="POST" enctype="multipart/form-data" class="w-full  rounded-lg shadow-sm bg-white border border-gray-300 p-8 space-y-6">

                    <!-- Are You Looking For -->
                    <div>
                        <h2 class="text-lg font-medium mb-2 border-b border-gray-300 p-2">Are You Looking For?</h2>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-1 text-xs">
                            <?php
                            $options = ["Static / Information", "Dynamic", "Corporate Website", "One Page Site", "E-commerce"];
                            foreach ($options as $opt) {
                                echo '<label class="flex items-center space-x-2 border border-gray-300 p-2">
                                <input type="checkbox" name="looking_for[]" value="' . $opt . '">
                                <span>' . $opt . '</span>
                              </label>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Number Of Pages -->
                    <div>
                        <h2 class="text-lg font-medium mb-2 border-b border-gray-300 p-2">Number Of Pages</h2>
                        <div class="grid grid-cols-2 md:grid-cols-6 gap-3 text-xs">
                            <?php
                            $pages = ["1 - 4", "5 - 8", "9 - 20", "20 - 25", "Unlimited"];
                            foreach ($pages as $p) {
                                echo '<label class="flex items-center space-x-2 border border-gray-300 p-2">
                                <input type="radio" name="pages" value="' . $p . '">
                                <span>' . $p . '</span>
                              </label>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Domain, Hosting, Email -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 border-b border-gray-300 p-2 text-sm">
                        <div class="border border-gray-300 p-2">
                            <h3 class="font-medium mb-2">Do You Want Domain?</h3>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="want_domain" value="Yes">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="border border-gray-300 p-2">
                            <h3 class="font-medium mb-2">Do You Want Hosting?</h3>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="want_hosting" value="Yes">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="border border-gray-300 p-2">
                            <h3 class="font-medium mb-2">Do You Want Official Email Ids?</h3>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="want_email" value="Yes">
                                <span>Yes</span>
                            </label>
                        </div>
                    </div>

                    <!-- Domain Name -->
                    <div class="border-b border-gray-300 p-2 flex items-center justify-between text-sm">
                        <input type="text" name="domain_name" placeholder="Enter Your Domain Name" class="w-1/2 mt-2 border rounded p-2">
                        <p class="text-blue-500 text-sm mt-1">Space As Per Need</p>
                    </div>

                    <!-- Pages Name -->
                    <div class="text-xs">
                        <h2 class="text-lg font-medium mb-2 border-b border-gray-300 p-2">Pages Name</h2>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-2 w-full">
                            <?php
                            $pagesList = ["Home", "About Us", "Contact Us", "Services", "Career", "Gallery", "Product", "Product Detail", "Portfolio", "Media", "Testimonial", "Clients", "Enquiry", "Get A Quote", "Blog", "Vision Page", "Mission Page", "Team", "Faq's", "News", "Events", "Awards", "Achievement", "CSR", "Terms & Conditions", "Privacy Policy", "Refund Policy", "Cancellation Policy", "Studies", "Industries", "Site Map", "Complaint"];
                            foreach ($pagesList as $page) {
                                echo '<label class="flex items-center space-x-2 border border-gray-300 p-2">
                                <input type="checkbox" name="pages_name[]" value="' . $page . '">
                                <span>' . $page . '</span>
                              </label>';
                            }
                            ?>
                        </div>

                    </div>

                    <!-- Special Requirement -->
                    <div class="border-b border-gray-300 p-2 text-xs">
                        <h2 class="text-lg font-medium mb-2">Special Requirement</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <?php
                            $special = ["SEO Friendly", "On Page SEO", "Social Media Linking", "Popup Enquiry", "Banner", "Dynamic Admin Panel", "Edit Pages", "Manage Pages", "Content Writing", "Tawk Live Chat", "Google My Business Page", "Whatsapp Chat", "Call Button", "Payment Gateway", "SMS API", "Highly Professional Look"];
                            foreach ($special as $s) {
                                echo '<label class="flex items-center space-x-2 border border-gray-300 p-2">
                                <input type="checkbox" name="special_req[]" value="' . $s . '">
                                <span>' . $s . '</span>
                              </label>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Technology -->
                    <div class="border-b border-gray-300 p-2 text-xs">
                        <h2 class="text-lg font-medium mb-2">Technology</h2>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $tech = ["PHP", "HTML", "CSS", "jQuery", "AJAX", "JavaScript", "MySQL"];
                            foreach ($tech as $t) {
                                echo '<label class="flex items-center space-x-2 border border-gray-300 p-2">
                                <input type="checkbox" name="technology[]" value="' . $t . '">
                                <span>' . $t . '</span>
                              </label>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Extra Requirement and File -->
                    <div class="flex items-center justify-between gap-4 text-xs max-md:flex-col">
                        <div class="w-1/2 max-md:w-full">
                            <h2 class="text-lg font-medium mb-2">Extra Requirement</h2>
                            <textarea rows="4" name="extra_requirement" class="w-full border rounded p-2" placeholder="Write here..."></textarea>
                        </div>
                        <div class="flex flex-col space-y-2 max-md:w-full">
                            <h2 class="text-lg font-medium mb-2">Attachment File</h2>
                            <input type="file" name="attachment" class="border p-2 rounded">
                            <p class="text-xs p-3 text-gray-500">Maximum file size is 1GB</p>
                        </div>
                    </div>

                    <div class="pt-6 text-center">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded">Submit Form</button>
                    </div>

                </form>


            </div>

            <!-- Right side content (Static Package Section) -->
            <div class="w-1/3 max-lg:w-[90%]  max-md:shadow-none max-lg:mx-auto h-[60vh] max-lg:h-[30vh] bg-gradient-to-br from-white via-blue-50 to-blue-100 shadow-xl mb-10 sticky z-[50] top-32 rounded-lg border border-gray-200 overflow-hidden">



                <img src="/asset/image/w4.jpg"
                    alt="Order Summary Image"
                    class="w-full h-full object-cover drop-shadow-md">


            </div>
        </div>
    </div>


    <!-- About Section -->
    <section id="about" class="py-20 bg-white w-full  max-lg:py-12 ">
        <div class="container mx-auto w-[80%] max-lg:w-[85%]">

            <div class="flex items-center mb-12">
                <div class="w-16 h-0.5 bg-blue-600 mr-4 max-md:w-8"></div>
                <h2 class="text-4xl font-medium">Our Approach</h2>
            </div>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                At <span class="text-blue-600 font-semibold">RudraTech</span>, we prioritize transparency and customization to help you navigate website development costs effectively. Whether you're a startup, a growing small business, a corporate entity, or an e-commerce platform, our services are designed to align with your unique vision and goals.
            </p>
            <p class="text-gray-800 text-base leading-relaxed mb-4">
                We provide a detailed breakdown of website development costs based on the type of website, design complexity, desired functionalities, and additional features. This ensures you receive a tailored solution that not only fits your budget but also meets your specific needs.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-lg:gap-2">
                <div class="bg-black p-6 rounded-sm hover:bg-gray-800 transition duration-300 ease-in-out group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Data-Driven</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 transition duration-300">We base our pricing on extensive market analysis and project requirements.</p>
                </div>
                <div class="bg-black p-6 rounded-sm hover:bg-gray-800 transition duration-300 ease-in-out group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl text-white  font-medium mb-3">Transparent</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 transition duration-300">No hidden costs. We provide detailed breakdowns of every aspect of your project.</p>
                </div>
                <div class="bg-black p-6 rounded-sm hover:bg-gray-800 transition duration-300 ease-in-out group">
                    <div class="text-blue-600 text-4xl mb-4 group-hover:text-white transition duration-300">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl text-white font-medium mb-3">Customized</h3>
                    <p class="text-gray-400 group-hover:text-gray-200 transition duration-300">Every solution is tailored to your specific business needs and objectives.</p>
                </div>
            </div>

        </div>
    </section>


    <div class="w-full  bg-[url('/asset/glass.jpg')] bg-cover bg-left  ">
        <div class="max-lg:w-[90%] w-[80%] mx-auto flex flex-col justify-center py-20 h-[90vh] max-md:h-screen max-lg:h-[40vh]">

            <!-- Heading -->
            <div class="flex flex-col md:flex-row items-start md:items-center mb-8 md:mb-12 gap-2">
                <div class="w-16 h-0.5 bg-blue-600 mr-0 md:mr-4 max-lg:w-8"></div>
                <h2 class="max-lg:text-3xl text-4xl font-medium text-white leading-snug">
                    Website Types
                </h2>
            </div>

            <!-- Cards -->
            <div class="grid max-md:grid-cols-1 grid-cols-2 gap-6 w-2/3 max-lg:w-full max-lg:grid-cols-4 max-md:gap-2 ">
                <!-- Card 1 -->
                <div class="flex flex-col text-gray-300 border border-gray-500 bg-gray-50/10 p-6 max-lg:p-4  rounded-lg shadow h-full">
                    <h2 class="text-lg font-semibold mb-2 max-lg:text-base">Small Business Website</h2>
                    <p class="text-sm mb-1"><strong>Best for:</strong> Local businesses</p>
                    <p class="text-sm mb-1"><strong>Includes:</strong> SEO, service pages, lead capture</p>

                </div>

                <!-- Card 2 -->
                <div class="flex flex-col text-gray-300 border border-gray-500 bg-gray-50/10 p-6 max-lg:p-4  rounded-lg shadow h-full">
                    <h2 class="text-lg font-semibold mb-2 max-lg:text-base">Corporate Website</h2>
                    <p class="text-sm mb-1"><strong>Best for:</strong> Larger or established businesses</p>
                    <p class="text-sm mb-1"><strong>Includes:</strong> Blog, case studies</p>

                </div>

                <!-- Card 3 -->
                <div class="flex flex-col text-gray-300 border border-gray-500 bg-gray-50/10 p-6 max-lg:p-4  rounded-lg shadow h-full">
                    <h2 class="text-lg font-semibold  mb-2 max-lg:text-base ">E-Commerce Website</h2>
                    <p class="text-sm mb-1"><strong>Best for:</strong> Product-based businesses</p>
                    <p class="text-sm mb-1"><strong>Includes:</strong> Cart, payment gateway, product pages</p>

                </div>

                <!-- Card 4 -->
                <div class="flex flex-col text-gray-300 border border-gray-500 bg-gray-50/10 p-6 max-lg:p-4  rounded-lg shadow h-full">
                    <h2 class="text-lg font-semibold mb-2 max-lg:text-base">Custom Website</h2>
                    <p class="text-sm mb-1"><strong>Best for:</strong> Unique functionality & tailored branding</p>
                    <p class="text-sm mb-1"><strong>Includes:</strong> Fully tailored design, automation, integrations</p>

                </div>
            </div>
        </div>
    </div>



    <?php include "include/footer.php" ?>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            // 🔹 show loader instantly
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

                Swal.close(); // close loader

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
                    icon: 'error',
                    title: 'Network Error!',
                    text: 'Unable to submit form. Please check your connection.',
                    confirmButtonColor: '#e11d48'
                });
            }
        });
    </script>


</body>

</html>