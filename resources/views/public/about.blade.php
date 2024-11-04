<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Vite</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Mengatur font default menjadi Poppins */
        body, h1, h2, h3, h4, h5, h6, p, button {
            font-family: 'Poppins', sans-serif;
        }

        /* Mengatur gambar background */
        .bg-custom {
            background-image: url('{{ asset('assets/img/Frame 21.png') }}');
            background-size: 1500px;
            background-position: center;
        }
    </style>
</head>
<body class="bg-slate-300">

    <!-- Include Navbar -->
    @include('components.navbar')

    <div class="bg-custom min-h-screen flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white">PT Mahkota Maharaja Indonesia</h1>
            <p class="text-xl text-white mt-4">Everything You Need Here.</p>
            <button class="mt-6 px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-lg hover:bg-gray-200 transition duration-300">Jelajahi</button>
        </div>
    </div>
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-center mb-8 text-white">Kartu Informasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/img/card-image1.jpg') }}" alt="Gambar Kartu 1" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Kartu 1</h3>
                    <p class="mt-2 text-gray-600">Deskripsi singkat tentang kartu ini. Informasi tambahan bisa ditambahkan di sini.</p>
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">Detail</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/img/card-image2.jpg') }}" alt="Gambar Kartu 2" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Kartu 2</h3>
                    <p class="mt-2 text-gray-600">Deskripsi singkat tentang kartu ini. Informasi tambahan bisa ditambahkan di sini.</p>
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">Detail</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/img/card-image3.jpg') }}" alt="Gambar Kartu 3" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Kartu 3</h3>
                    <p class="mt-2 text-gray-600">Deskripsi singkat tentang kartu ini. Informasi tambahan bisa ditambahkan di sini.</p>
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">Detail</button>
                </div>
            </div>
        </div>
    </div>

</body>

@include('public.about')

</html>
