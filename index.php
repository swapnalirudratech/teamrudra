<?php

use function PHPSTORM_META\map;

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$router = new AltoRouter();

$routes = [
    [
        "route" => "/",
        "method" => ["GET", "POST"],
        "page" => "home.php",
    ],
    [
        "route" => "/website-development",
        "method" => ["GET", "POST"],
        "page" => "pages/website.php",
    ],
    [
        "route" => "/software-development",
        "method" => ["GET", "POST"],
        "page" => "pages/software.php",
    ],

    [
        "route" => "/software",
        "method" => ["GET", "POST"],
        "page" => "pages/software.php",
    ],
    [
        "route" => "/portfolio",
        "method" => ["GET", "POST"],
        "page" => "pages/portfolio.php",
    ],


    [
        "route" => "/customize-website",
        "method" => ["GET", "POST"],
        "page" => "pages/customizewebsite.php",
    ],
    [
        "route" => "/website-design",
        "method" => ["GET", "POST"],
        "page" => "pages/website_designing.php",
    ],
    [
        "route" => "/static-website-design",
        "method" => ["GET", "POST"],
        "page" => "pages/static_website_design.php",
    ],
    [
        "route" => "/dynamic-website-design",
        "method" => ["GET", "POST"],
        "page" => "pages/dynamic_webdesign.php",
    ],

    [
        "route" => "/cms-development",
        "method" => ["GET", "POST"],
        "page" => "pages/cms_dev.php",
    ],
    [
        "route" => "/corporate-website-design",
        "method" => ["GET", "POST"],
        "page" => "pages/corporate_webdesign.php",
    ],
    [
        "route" => "/crm-development",
        "method" => ["GET", "POST"],
        "page" => "pages/crm_dev.php",
    ],
    [
        "route" => "/custom-website-development",
        "method" => ["GET", "POST"],
        "page" => "pages/custom_webdev.php",
    ],
    [
        "route" => "/e-commerce-website",
        "method" => ["GET", "POST"],
        "page" => "pages/e-com.php",
    ],
    [
        "route" => "/travel-transport",
        "method" => ["GET", "POST"],
        "page" => "pages/travel-transport.php",
    ],

    [
        "route" => "/landing-page-website",
        "method" => ["GET", "POST"],
        "page" => "pages/landingpage_design.php",
    ],

    [
        "route" => "/business-profile-website",
        "method" => ["GET", "POST"],
        "page" => "pages/business_profile_web.php",
    ],
    [
        "route" => "/informative-website",
        "method" => ["GET", "POST"],
        "page" => "pages/informative_website.php",
    ],
    [
        "route" => "/portfolio-website",
        "method" => ["GET", "POST"],
        "page" => "pages/portfolio_website.php",
    ],
    [
        "route" => "/multi-vendor-website",
        "method" => ["GET", "POST"],
        "page" => "pages/multi_vendor_website.php",
    ],
    [
        "route" => "/client",
        "method" => ["GET", "POST"],
        "page" => "pages/client.php",
    ],
    [
        "route" => "/testimonial",
        "method" => ["GET", "POST"],
        "page" => "pages/testimonial.php",
    ],

    [
        "route" => "/get-in-touch",
        "method" => ["GET", "POST"],
        "page" => "pages/getin-touch.php",
    ],

    [
        "route" => "/mobile-app-development",
        "method" => ["GET", "POST"],
        "page" => "pages/mobileapp_developement.php",
    ],


    [
        "route" => "/education",
        "method" => ["GET", "POST"],
        "page" => "pages/education.php",
    ],
    [
        "route" => "/real-estate",
        "method" => ["GET", "POST"],
        "page" => "pages/realestate.php",
    ],




    [
        "route" => "/email-hosting",
        "method" => ["GET", "POST"],
        "page" => "pages/email_hosting.php",
    ],

    [
        "route" => "/domain",
        "method" => ["GET", "POST"],
        "page" => "pages/domain.php",
    ],
    [
        "route" => "/annual-maintenance-contract",
        "method" => ["GET", "POST"],
        "page" => "pages/amc.php",
    ],



    [
        "route" => "/cloud-services",
        "method" => ["GET", "POST"],
        "page" => "pages/cloud_services.php",
    ],
    [
        "route" => "/it-consulting-services",
        "method" => ["GET", "POST"],
        "page" => "pages/it-consult.php",
    ],
    [
        "route" => "/blockchain",
        "method" => ["GET", "POST"],
        "page" => "pages/blockchain.php",
    ],
    [
        "route" => "/php_dev",
        "method" => ["GET", "POST"],
        "page" => "pages/php_dev.php",
    ],
    [
        "route" => "/wordpress",
        "method" => ["GET", "POST"],
        "page" => "pages/wordpress.php",
    ],

    [
        "route" => "/career",
        "method" => ["GET", "POST"],
        "page" => "pages/career.php",
    ],
    [
        "route" => "/about-us",
        "method" => ["GET", "POST"],
        "page" => "pages/about.php",
    ],
    [
        "route" => "/feedback",
        "method" => ["GET", "POST"],
        "page" => "pages/feedback.php",
    ],
    [
        "route" => "/sitemap",
        "method" => ["GET", "POST"],
        "page" => "pages/sitemap.php",
    ],
    [
        "route" => "/refund-policy",
        "method" => ["GET", "POST"],
        "page" => "pages/refundpolicy.php",
    ],
    [
        "route" => "/privacy-policy",
        "method" => ["GET", "POST"],
        "page" => "pages/privacypolicy.php",
    ],
    [
        "route" => "/terms-and-conditions",
        "method" => ["GET", "POST"],
        "page" => "pages/termsconditions.php",
    ],
    [
        "route" => "/website-development-in-khopoli",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-khopoli.php",
    ],
    [
        "route" => "/website-development-in-karjat",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-karjat.php",
    ],
    [
        "route" => "/website-development-in-badlapur",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-badlapur.php",
    ],
    [
        "route" => "/website-development-in-kalyan",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-kalyan.php",
    ],

    [
        "route" => "/website-development-in-dombivli",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-dombivli.php",
    ],

    [
        "route" => "/website-development-in-ambernath",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-ambernath.php",
    ],
    [
        "route" => "/website-development-in-neral",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-neral.php",
    ],
    [
        "route" => "/website-development-in-vangani",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-vangani.php",
    ],
    [
        "route" => "/website-development-in-ulhasnagar",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-ulhasnagar.php",
    ],
    [
        "route" => "/website-development-in-vitthalwadi",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-vitthalwadi.php",
    ],
    [
        "route" => "/website-development-in-shahad",
        "method" => ["GET", "POST"],
        "page" => "pages/website-development-in-shahad.php",
    ],
    [
        "route" => "/software-development-in-khopoli",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-khopoli.php",
    ],
    [
        "route" => "/software-development-in-karjat",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-karjat.php",
    ],
    [
        "route" => "/software-development-in-neral",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-neral.php",
    ],
    [
        "route" => "/software-development-in-vangani",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-vangani.php",
    ],
    [
        "route" => "/software-development-in-badlapur",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-badlapur.php",
    ],
    [
        "route" => "/software-development-in-ambernath",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-ambernath.php",
    ],
    [
        "route" => "/software-development-in-ulhasnagar",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-ulhasnagar.php",
    ],
    [
        "route" => "/software-development-in-vitthalwadi",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-vitthalwadi.php",
    ],
    [
        "route" => "/software-development-in-kalyan",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-kalyan.php",
    ],
    [
        "route" => "/software-development-in-dombivli",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-dombivli.php",
    ],
    [
        "route" => "/software-development-in-shahad",
        "method" => ["GET", "POST"],
        "page" => "pages/software-development-in-shahad.php",
    ],
    [
        "route" => "/food-and-beverage",
        "method" => ["GET", "POST"],
        "page" => "pages/food-and-beverage.php",
    ],
    [
        "route" => "/logistics-delivery-service",
        "method" => ["GET", "POST"],
        "page" => "pages/Logistics-delivery-service.php",
    ],
    [
        "route" => "/fitness",
        "method" => ["GET", "POST"],
        "page" => "pages/fitness.php",
    ],

    [
        "route" => "/healthcare",
        "method" => ["GET", "POST"],
        "page" => "pages/healthcare.php",
    ],

    [
        "route" => "/fintech",
        "method" => ["GET", "POST"],
        "page" => "pages/fintech.php",
    ],
    [
        "route" => "/dating-app",
        "method" => ["GET", "POST"],
        "page" => "pages/dating.php",
    ],
];



foreach ($routes as $route) {
    foreach ($route["method"] as $meth) {
        $router->map($meth, $route["route"], function () use ($route) {
            require $route["page"];
        });
    }
}



$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // require __DIR__ . '/404.php';
    echo 'not found';
}
