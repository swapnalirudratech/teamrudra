<div id="bottomRow" class="marquee bg-gradient-to-l from-blue-500 via-blue-300 to-blue-500 text-white overflow-hidden ">
    <div class="marquee-content text-grey-700  py-2">


        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/java-removebg-preview.png" alt="Java" class="w-8 h-8" />
            <span>JAVA </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/python-removebg-preview.png" alt="Python" class="w-8 h-8" />
            <span>PYTHON </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/php-removebg-preview.png" alt="PHP" class="w-8 h-8" />
            <span>PHP </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/node-removebg-preview.png" alt="Node JS" class="w-8 h-8" />
            <span>NODE JS </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/react-removebg-preview.png" alt="CURL" class="w-8 h-8" />
            <span>REACT </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/java-removebg-preview.png" alt="Java" class="w-8 h-8" />
            <span>JAVA </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/python-removebg-preview.png" alt="Python" class="w-8 h-8" />
            <span>PYTHON </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/php-removebg-preview.png" alt="PHP" class="w-8 h-8" />
            <span>PHP </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/node-removebg-preview.png" alt="Node JS" class="w-8 h-8" />
            <span>NODE JS </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/react-removebg-preview.png" alt="CURL" class="w-8 h-8" />
            <span>REACT </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/java-removebg-preview.png" alt="Java" class="w-8 h-8" />
            <span>JAVA </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/python-removebg-preview.png" alt="Python" class="w-8 h-8" />
            <span>PYTHON </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/php-removebg-preview.png" alt="PHP" class="w-8 h-8" />
            <span>PHP </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/node-removebg-preview.png" alt="Node JS" class="w-8 h-8" />
            <span>NODE JS </span>
        </span>
        <span class="mx-6 text-lg font-normal flex items-center space-x-2">
            <img src="/asset/react-removebg-preview.png" alt="CURL" class="w-8 h-8" />
            <span>REACT </span>
        </span>


    </div>
</div>



<script>
    function setupScroll(elementId, direction, speed) {
        const container = document.getElementById(elementId);
        const content = container.querySelector('.scroll-content, .marquee-content');
        let scrollPosition = 0;

        function scroll() {
            scrollPosition += direction * speed;

            // Adjust scroll logic based on direction
            if (elementId === 'bottomRow') {
                if (scrollPosition >= content.offsetWidth / 2) {
                    scrollPosition = 0;
                }
            } else {
                if (scrollPosition <= -content.offsetWidth / 2) {
                    scrollPosition = 0;
                }
            }

            content.style.transform = `translateX(${scrollPosition}px)`;
            requestAnimationFrame(scroll);
        }

        // Clone content for seamless looping
        content.innerHTML += content.innerHTML;

        // Set initial position to start scrolling
        if (elementId === 'bottomRow') {
            scrollPosition = -content.offsetWidth / 2;
        }

        scroll();

    }

    setupScroll('bottomRow', 8, 0.17); // Scroll right
</script>
