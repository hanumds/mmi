<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide dan Card Berdampingan dengan Autoplay</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>


<body class="bg-gray-100 font-poppins">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center mb-8">Slide dan Card Berdampingan</h2>
        
        <!-- Section grid untuk slide dan card -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Slideshow Section -->
            <section class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1" class="w-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2" class="w-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3" class="w-full rounded-lg">
                    </div>
                </div>
                <!-- Pagination and Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </section>

            <!-- Card Section -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Gambar Card" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Card</h3>
                    <p class="mt-2 text-gray-600">Deskripsi singkat tentang konten yang ada di dalam card ini.</p>
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">Detail</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000, // Durasi antara setiap slide dalam milidetik
                disableOnInteraction: false, // Tetap autoplay meskipun user berinteraksi
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
@include('components.footer')
</html>
