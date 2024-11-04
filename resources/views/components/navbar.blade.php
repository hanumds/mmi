<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Contoh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Navbar dengan transisi smooth */
        .navbar {
            transition: background-color 0.9s ease-in-out, box-shadow 0.6s ease-in-out, height 0.6s ease-in-out, border-radius 0.6s ease-in-out;
            position: fixed;
            font-family: 'Poppins', sans-serif;  /* Menggunakan font Poppins untuk navbar */
            font-size: 10px;  /* Ukuran font navbar */
            font-weight: 200;  /* Berat font normal */
            top: 19px;
            width: 100%;
            z-index: 100;
            padding: 0.5rem 0.5rem;
            background-color: transparent;
        }

        .navbar-scrolled .container {
            background-color: rgba(255, 255, 255, 0.92);  /* Warna background saat di-scroll */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.25);  /* Bayangan lebih halus */
            border-radius: 100px;
        }

        .menu-link {
            color: white;
            transition: color 0.3s ease;
        }

        /* Warna teks menu saat di-scroll */
        .navbar-scrolled .menu-link {
            color: black;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav id="navbar" class="navbar">
        <div class="container max-w-screen-lg mx-auto px-4 lg:px-8 flex items-center justify-between h-16">
            <div class="text-xl font-semibold flex items-center space-x-2">
                <a href="#" class="nav-link">
                    <img src="/assets/img/Frame 15 (3).png" class="h-8" alt="Logo" />
                </a>
                <a href="#" class="text-blue-600 font-medium"><b>MMI</b>Ind</a>
            </div>
            <div class="hidden md:flex space-x-6 justify-center flex-grow text-lg items-center">
                <a href="#" class="menu-link transition duration-200 ease-in-out">Beranda</a>
                <a href="#" class="menu-link transition duration-200 ease-in-out">Tentang</a>
                <a href="#" class="menu-link transition duration-200 ease-in-out">Layanan</a>
                <div class="relative">
                    <button id="dropdown-button" class="menu-link transition duration-200 ease-in-out hover:text-blue-600 focus:outline-none flex items-center">
                        Dropdown
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden md:flex">
                <a href="{{ route('register') }}" class="bg-blue-600 text-white font-semibold px-5 py-2 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                    Masuk
                </a>
            </div>

            <div class="md:hidden">
                <button id="menu-button" class="text-gray-800 hover:text-blue-600 focus:outline-none">
                    &#9776;
                </button>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->

    <script>
        window.onscroll = function() {
            const navbar = document.getElementById("navbar");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.add("navbar-scrolled");
            } else {
                navbar.classList.remove("navbar-scrolled");
            }
        };
    </script>
</body>
</html>
