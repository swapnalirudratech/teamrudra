<?php
$page_title = "packages"
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <?php include "include/navbar.php" ?>

    <style>
        .grid-gallery {
            --size: 100px;
            display: grid;
            grid-template-columns: repeat(6, var(--size));
            grid-auto-rows: var(--size);
            gap: 5px;
            place-items: start center;
            margin-bottom: var(--size);
        }

        .grid-gallery img {
            width: calc(var(--size) * 2);
            height: calc(var(--size) * 2);
            object-fit: cover;
            grid-column: auto / span 2;
            border-radius: 5px;
            clip-path: path("M90,10 C100,0 100,0 110,10 190,90 190,90 190,90 200,100 200,100 190,110 190,110 110,190 110,190 100,200 100,200 90,190 90,190 10,110 10,110 0,100 0,100 10,90Z");
        }

        .grid-gallery img:nth-child(5n - 1) {
            grid-column: 2 / span 2
        }

        .grid-gallery:has(img:hover) img:not(:hover) {
            filter: brightness(0.5) contrast(0.5);
        }

        .grid-gallery img {
            transition: clip-path 0.25s, filter 0.75s;
        }

        .grid-gallery img:hover {
            clip-path: path("M0,0 C0,0 200,0 200,0 200,0 200,100 200,100 200,100 200,200 200,200 200,200 100,200 100,200 100,200 100,200 0,200 0,200 0,100 0,100 0,100 0,100 0,100Z");
            transition: clip-path 0.25s, filter 0.25s;
            z-index: 1;
        }

        .grid-gallery a:focus {
            outline: 1px dashed black;
            outline-offset: -5px;
        }

        @media (max-width: 768px) {
            .grid-gallery {
                --size: 80px;
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: auto;
                gap: 8px;
                margin-bottom: 20px;
            }

            .grid-gallery img {
                width: 100%;
                height: auto;
                grid-column: auto / span 1 !important;
                clip-path: none;
                border-radius: 8px;
            }
        }
    </style>

    <section class="w-full h-[85vh] max-md:h-[80vh] max-lg:h-[40vh] relative bg-gradient-to-tr from-gray-200 via-rwhite to-gray-200 py-20 max-lg:py-12">
        <div class="flex items-center max-lg:px-12 max-md:px-2 px-32 max-md:flex-col max-md:gap-4">
            <div class="text-center md:text-left max-w-2xl mx-auto px-4 max-lg:w-full">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-blue-600 leading-tight">
                    Website Packages
                </h2>
                <p class="text-base sm:text-lg text-gray-800 mt-3">
                    Tailored to your business needs
                </p>
                <p class="mt-5 text-sm sm:text-base text-gray-800 max-w-md mx-auto md:mx-0">
                    Choose the perfect package to establish your digital presence with our professionally designed, feature-rich website solutions.
                </p>
            </div>

            <div class="w-[80%] mx-auto">
                <article class="grid-gallery w-full flex items-center justify-center">
                    <img src="./asset/StockPhotos/1.jpg" class="w-full" alt="description of picture 1" />
                    <img src="./asset/StockPhotos/2.jpg" alt="description of picture 2" />
                    <img src="./asset/StockPhotos/3.jpg" alt="description of picture 3" />
                    <img src="./asset/StockPhotos/4.jpg" alt="description of picture 4" />
                    <img src="./asset/StockPhotos/5.jpg" alt="description of picture 5" />
                    <img src="./asset/StockPhotos/6.jpg" alt="description of picture 6" />
                    <img src="./asset/StockPhotos/7.jpg" alt="description of picture 7" />
                    <img src="./asset/StockPhotos/8.jpg" alt="description of picture 8" />
                </article>
            </div>
        </div>
    </section>

    <section class="py-16 max-lg:py-12">
        <div class="w-[80%] mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 auto-rows-fr">
                <div class="border relative border-gray-200 rounded-lg shadow-md overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1 bg-white h-full flex flex-col">
                    <div class="p-6 relative flex-grow">
                        <h3 class="text-lg font-medium text-gray-900 flex items-center mb-4">Static Website Package</h3>
                        <div class="absolute top-0 right-0">
                            <div class="text-xs font-normal bg-blue-500 text-white px-3 py-1 rounded-bl-lg">4-pages</div>
                        </div>
                        <div class="flex items-baseline text-gray-900 mb-6">
                            <span class="text-3xl font-bold">₹20,999</span>
                            <span class="ml-2 text-sm text-gray-500">INR</span>
                        </div>
                        <ul class="space-y-1 text-gray-600 text-xs">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>HTML5 & CSS3 Based Website</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Responsive Design (Mobile-Friendly)</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Basic Theme + Two Home Page Banners</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Up to 4 Pages</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Query Form (Name, Email, Phone, Message)</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Social Media Integration</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>3 Working Days Delivery</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border relative border-gray-200 rounded-lg shadow-md overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1 bg-white h-full flex flex-col">
                    <div class="p-6 relative flex-grow">
                        <h3 class="text-lg font-medium text-gray-900 flex items-center mb-4">WordPress Dynamic Package</h3>
                        <div class="absolute top-0 right-0">
                            <div class="text-xs font-normal bg-blue-500 text-white px-3 py-1 rounded-bl-lg">1-8 pages</div>
                        </div>
                        <div class="flex items-baseline text-gray-900 mb-6">
                            <span class="text-3xl font-bold">₹25,000</span>
                            <span class="ml-2 text-sm text-gray-500">INR</span>
                        </div>
                        <ul class="space-y-1 text-gray-600 text-xs">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>WordPress Dynamic Website</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Normal Theme</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Up to 4 Banners in Home Page</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>No of Pages Up to 8</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Query Form with 4 Fields</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Social Media Page Linking</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Admin Dashboard to Manage Services Pages</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Admin Can Manage Banner, Images, and Content</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>1 Month AMC for Bugs, Errors, or Security Issues</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>5 Working Days Delivery</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border relative border-gray-200 rounded-lg shadow-md overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1 bg-white h-full flex flex-col">
                    <div class="p-6 relative flex-grow">
                        <h3 class="text-lg font-medium text-gray-900 flex items-center mb-4">Enterprise Website Package</h3>
                        <div class="absolute top-0 right-0">
                            <div class="text-xs font-normal bg-blue-500 text-white px-3 py-1 rounded-bl-lg">Up to 12-pages</div>
                        </div>
                        <div class="flex items-baseline text-gray-900 mb-6">
                            <span class="text-3xl font-bold">₹40,000</span>
                            <span class="ml-2 text-sm text-gray-500">INR</span>
                        </div>
                        <ul class="space-y-1 text-gray-600 text-xs">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Technology: HTML5, CSS3, Laravel, MySQL</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Responsive Design for Mobile</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Up to 4 Banners on Home Page</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Dynamic Website</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>No of Pages: Up to 12</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Query Form with 4 Fields</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Social Media Page Linking</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Admin Dashboard</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Admin Can Manage Banner, Images, and Content</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>1 Month AMC for Bug/Error/Security Issues</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">Starter</span>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Basic Website Package</h3>
                        <p class="text-gray-600 mb-6">Perfect for small businesses or personal projects looking for an online presence.</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold">₹35,999</span>
                            <span class="text-gray-500 text-sm">/ one-time</span>
                        </div>
                        <ul class="space-y-2 text-gray-600 text-sm mb-6">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>3 Pages Website</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Responsive Design</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Contact Form</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>1 Month Free Support</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">Popular</span>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Business Dynamic Website Package</h3>
                        <p class="text-gray-600 mb-6">Best for growing businesses needing a dynamic, editable website.</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold">₹45,999</span>
                            <span class="text-gray-500 text-sm">/ one-time</span>
                        </div>
                        <ul class="space-y-2 text-gray-600 text-sm mb-6">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>8 Pages Dynamic Website</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Admin Panel for Editing</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Mobile & Tablet Optimized</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>3 Months Free Support</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">Advanced</span>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">E-Commerce Website Package</h3>
                        <p class="text-gray-600 mb-6">Ideal for selling products online with a secure and fast store.</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold">₹49,999</span>
                            <span class="text-gray-500 text-sm">/ one-time</span>
                        </div>
                        <ul class="space-y-2 text-gray-600 text-sm mb-6">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>15+ Product Pages</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Secure Payment Gateway</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>Inventory Management</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span>6 Months Free Support</li>
                        </ul>
                        <div class="w-full mt-6">
                            <a href="/getin-touch" class="block w-full text-center text-sm py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'include/marquee.php' ?>
    <?php include "include/upperfooter.php"; ?>
    <?php include "include/footer.php" ?>

</body>

</html>