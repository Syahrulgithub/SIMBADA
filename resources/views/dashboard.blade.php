<x-app-layout>
    <!-- Slider Container -->
<div class="mt-0 p-4 relative max-w-6xl mx-auto overflow-hidden">
    <div class="w-full h-48 sm:h-72 relative">
        <div class="flex w-full h-full transition-transform duration-700 ease-in-out" id="slider">
            <div class="w-full flex-shrink-0">
                <img src={{ asset ("/img/Slider.jpeg")}} class="w-full h-48 sm:h-72 object-cover" alt="Slide 1">
            </div>
            <div class="w-full flex-shrink-0">
                <img src={{ asset ("/img/Slider.jpeg")}} class="w-full h-48 sm:h-72 object-cover" alt="Slide 2">
            </div>
            <div class="w-full flex-shrink-0">
                <img src={{ asset ("/img/Slider.jpeg")}} class="w-full h-48 sm:h-72 object-cover" alt="Slide 3">
            </div>
        </div>
    </div>
    
    <!-- Tombol Navigasi -->
    <button onclick="prevSlide()" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-700 text-white px-2 sm:px-3 py-1 sm:py-2 rounded-full z-10">❮</button>
    <button onclick="nextSlide()" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-700 text-white px-2 sm:px-3 py-1 sm:py-2 rounded-full z-10">❯</button>

    <!-- Indikator Navigasi -->
    <div class="flex justify-center mt-4 space-x-2">
        <span class="bar w-6 sm:w-8 h-1 sm:h-2 bg-gray-400 rounded-full cursor-pointer transition-all duration-300" onclick="currentSlide(0)"></span>
        <span class="bar w-6 sm:w-8 h-1 sm:h-2 bg-gray-400 rounded-full cursor-pointer transition-all duration-300" onclick="currentSlide(1)"></span>
        <span class="bar w-6 sm:w-8 h-1 sm:h-2 bg-gray-400 rounded-full cursor-pointer transition-all duration-300" onclick="currentSlide(2)"></span>
    </div>
</div>

<script>
    let index = 0;
    const slider = document.getElementById("slider");
    const totalSlides = slider.children.length;
    const bars = document.querySelectorAll(".bar");

    function showSlide() {
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateBars();
    }

    function prevSlide() {
        index = (index > 0) ? index - 1 : totalSlides - 1;
        showSlide();
    }

    function nextSlide() {
        index = (index < totalSlides - 1) ? index + 1 : 0;
        showSlide();
    }

    function currentSlide(n) {
        index = n;
        showSlide();
    }

    function updateBars() {
        bars.forEach((bar, i) => {
            bar.classList.toggle("bg-blue-500", i === index);
            bar.classList.toggle("bg-gray-400", i !== index);
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSlide();
        setInterval(nextSlide, 5000); 
    });
</script>
</div>

</x-app-layout>