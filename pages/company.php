<style>
.owl-nav,
.owl-dots {
    display: none !important;
}
</style>

<section class="py-16 bg-white border-t border-gray-200 overflow-hidden" aria-labelledby="client-heading">

<div class="container mx-auto w-[80%] text-center">

<!-- SEO Heading -->
<h2 id="client-heading" class="text-3xl max-md:text-2xl font-normal text-gray-800 mb-10 uppercase tracking-wide">
Companies We Have Worked For
<span class="block w-20 h-1 bg-gradient-to-r from-blue-600 to-blue-300 mx-auto mt-2"></span>
</h2>

<p class="sr-only">
Trusted by 40+ businesses for web development, app development, and IT services.
</p>

<?php
$logos = [
["/asset/Alloy-Nation1.png","Alloy Nation"],
["/asset/logos/ashira-logo.jpg","Ashira"],
["/asset/logos/ycafe-logo.png","Y Cafe"],
["/asset/logos/fairview-logo.png","Fairview"],
["/asset/logos/humblehorse.png","Humble Horses"],
["/asset/Chellas.png","Chellas"],
["/asset/logos/impact-logo.png","Impact"],
["/asset/Khas.png","Khas"],
["/asset/Gurukripa.png","Gurukripa"],
["/asset/logos/mingyang-logo.jpg","Mingyang"],
["/asset/Satus-sweets.png","Satus Sweets"],
["/asset/Veor.png","Veor"],
["/asset/logos/fillit.jpg","Fillit"],
["/asset/logos/vikaslogo.png","Vikas Academy"],
["/asset/logos/ayurlogo.jpg","Ayur"],
["/asset/logos/vi3logo.jpg","Vi3"],
["/asset/logos/stallion.png","Stallion"],
["/asset/logos/sindukrupa.jpg","Sindukrupa"],
["/asset/logos/simransweet.webp","Simran Sweet"],
["/asset/logos/shavision.png","Shavision"],
["/asset/logos/ashwazep.jpg","Ashwazep"],
["/asset/logos/abyas.jpg","Abyas"],
["/asset/logos/thenewu.webp","The New U"],
["/asset/logos/rba.png","RBA"],
["/asset/logos/weconnect.webp","We Connect"],
["/asset/logos/qe.jpg","QE"],
["/asset/logos/satyavani.webp","Satyavani"],
["/asset/logos/kesarbaug.png","Kesarbaug"],
["/asset/logos/laxmikamll.png","Laxmikamal"],
["/asset/logos/hindustan.jpg","Hindustan"],
["/asset/logos/gurukrupa.png","Gurukrupa"],
["/asset/logos/balajigas.png","Balaji Gas"],
["/asset/logos/fineprint.webp","Fineprint"],
["/asset/logos/weldfab.webp","Weldfab"],
["/asset/logos/dreamkichen.png","Dream Kitchen"],
["/asset/logos/crizio.png","Crizio"],
["/asset/logos/snackita.png","Snackita"],
["/asset/logos/mmid.png","MMID"],
["/asset/logos/saptam.png","Saptam"],
["/asset/logos/bloom.png","Bloom"],
["/asset/logos/fbm.png","FBM"]
];

$logos_reversed = array_reverse($logos);
?>

<!-- TOP CAROUSEL -->
<div class="owl-carousel owl-theme rudra-top-carousel mb-10" role="list">
<?php foreach($logos as $logo): ?>
<div class="flex items-center justify-center p-4 bg-white rounded-xl shadow-sm h-28" role="listitem">
<img src="<?= $logo[0] ?>"
alt="<?= htmlspecialchars($logo[1]) ?> Client Logo"
loading="lazy"
width="150"
height="80"
class="max-h-20 max-w-[150px] object-contain"/>
</div>
<?php endforeach; ?>
</div>

<!-- BOTTOM CAROUSEL -->
<div class="owl-carousel owl-theme rudra-bottom-carousel max-md:hidden" role="list">
<?php foreach($logos_reversed as $logo): ?>
<div class="flex items-center justify-center p-4 bg-white rounded-xl shadow-sm h-28" role="listitem">
<img src="<?= $logo[0] ?>"
alt="<?= htmlspecialchars($logo[1]) ?> Partner Logo"
loading="lazy"
width="150"
height="80"
class="max-h-20 max-w-[150px] object-contain"/>
</div>
<?php endforeach; ?>
</div>

</div>
</section>

<!-- Organization Schema -->
<script type="application/ld+json">
{
"@context":"https://schema.org",
"@type":"Organization",
"name":"RudraTech IT Services",
"url":"https://yourdomain.com",
"sameAs":[],
"knowsAbout":["Web Development","Mobile App Development","IT Services","Digital Marketing"]
}
</script>

<script>
$(document).ready(function(){

$(".rudra-top-carousel").owlCarousel({
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:2000,
autoplaySpeed:1500,
nav:false,
dots:false,
responsive:{
0:{items:2},
640:{items:4},
1024:{items:6}
}
});

$(".rudra-bottom-carousel").owlCarousel({
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:2500,
autoplaySpeed:1800,
rtl:true,
nav:false,
dots:false,
responsive:{
0:{items:2},
640:{items:4},
1024:{items:6}
}
});

});
</script>
