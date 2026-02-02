<?php
$page_title = "packages";
include "include/header.php";
include "include/navbar.php";

// Testimonials Array
$testimonials = [
    [
        "name" => "Vijay Bhatia",
        "position" => "Partner & CEO, Vi3edutech Pvt_ Ltd_",
        "image" => "asset/16192637751619251704t3.jpg",
        "quote" => "Thank you rudratech for making my website Great work.",
        "highlight" => false
    ],
    [
        "name" => "Diaans Kitchen",
        "position" => "Snop Owner, Restaurant Product Supplier",
        "image" => "asset/Diaans-Kitchen-e1693806400903.png",
        "quote" => "What i want i getted thank you rudratech to making my vision into reality also thanks to my collegue akshar who is refer you",
        "highlight" => false
    ],

    [
        "name" => "Sharon Cardoz",
        "position" => "Director, Humble Horses Advisory Pvt. Ltd.",
        "image" => "asset/unnamed-2.png",
        "quote" => "Getting our work done from RudraTech IT Services has been an absolute pleasure. Their professional team are very supportive and dedicated to understand our unique needs and provided us the software beyond our expectations. If you are looking for IT professionals please go for *RudraTech*",
        "highlight" => true
    ],
    [
        "name" => "Kashesh Agarwaal",
        "position" => "Founder, Adorable Raw Indian Hair (USA)",
        "image" => "asset/unnamed-1.png",
        "quote" => "They are the best team you can work with for all your digital needs. I'm very impressed by their professionalism, dedication and attention to detail. They make a phenomenal team to work with and have so much respect towards their customers. Excellent service. Highly recommend them. They have me as their customer for life. Kudos to the entire team",
        "highlight" => true
    ],
    [
        "name" => "Vikas Sawant",
        "position" => "Founder, Vikas Sawants Academy",
        "image" => "asset/unnamed-3.png",
        "quote" => "Best IT service by Rudra Tech Pvt. Ltd. Both DirectorsRoshan & Rahul are very supportive & knowledgeablealso very committed toward their commitment.",
        "highlight" => false
    ],
    [
        "name" => "Jeevi",
        "position" => "Founder & COO, Iris",
        "image" => "asset/Absolute_Reality_v16_background_sea_3.jpg",
        "quote" => "!! Thanks from ITT west africa making our site a very professional !!",
        "highlight" =>  false
    ]
];
?>

<section class="w-full h-[85vh] bg-cover bg-center relative" style="background-image: url(/asset/pack-banr.jpg);">
    <div class="absolute inset-0 flex items-center px-6 md:px-32">
        <div class="text-left max-w-2xl z-10">
            <p class="text-sm md:text-base text-gray-300 uppercase tracking-widest mb-4">Real Feedback. Real Results.</p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">What Our Clients Say</h2>
            <p class="mt-6 text-base md:text-lg text-gray-300">Discover how RudraTech empowers businesses with intuitive design, dependable development, and dedicated support.</p>
        </div>
    </div>
</section>
<div class="w-[80%] mx-auto py-20">
    <?php
    $regularChunks = [];
    $highlighted = [];

    // Separate highlighted and non-highlighted
    foreach ($testimonials as $t) {
        if ($t['highlight']) {
            $highlighted[] = $t;
        } else {
            $regularChunks[] = $t;
        }
    }

    // Group regular testimonials into chunks of 3
    $chunks = array_chunk($regularChunks, 3);
    ?>

    <?php foreach ($chunks as $index => $group): ?>
        <!-- Regular Testimonials Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <?php foreach ($group as $testimonial): ?>
                <div class="bg-white rounded-lg border border-gray-300 p-6 relative transition-all hover:translate-y-[-5px] hover:shadow-lg">
                    <div class="quote-mark absolute top-2 right-4 text-6xl text-gray-300 opacity-10">“</div>
                    <div class="flex items-center mb-5">
                        <div class="w-12 h-12 mr-4 rounded-full overflow-hidden border shadow">
                            <img src="<?= $testimonial['image'] ?>" alt="<?= $testimonial['name'] ?>" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <p class="text-gray-800 text-base mb-4 leading-relaxed"><?= $testimonial['quote'] ?></p>
                    <div class="mt-4">
                        <h3 class="font-medium text-gray-900"><?= $testimonial['name'] ?></h3>
                        <p class="text-sm text-gray-500"><?= $testimonial['position'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Insert Highlighted Testimonial after first group -->
        <?php if ($index < count($highlighted)): ?>
            <?php $highlight = $highlighted[$index]; ?>
            <div class="bg-white p-6 rounded-lg border border-gray-300 flex flex-col md:flex-row items-center justify-between gap-6 mb-10">
                <div class="flex-1">
                    <p class="text-gray-600 mb-2">
                        <span class="text-blue-600 font-semibold"><?= $highlight['name'] ?></span>,
                        <span class="italic"><?= $highlight['position'] ?></span>
                    </p>
                    <blockquote class="text-sm text-gray-800 leading-relaxed border-r-4 border-blue-500 pr-8 max-md:pr-0 max-md:border-0">
                        “<?= $highlight['quote'] ?>”
                    </blockquote>
                </div>
                <div class="w-24 h-24 rounded-full overflow-hidden border shadow">
                    <img src="<?= $highlight['image'] ?>" alt="<?= $highlight['name'] ?>" class="w-full h-full object-cover" />
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<?php include "include/footer.php"; ?>