<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Contoh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@yield('content')
</head>

<footer class="container mx-auto py-10 md:py-20">
    <div id="contact" class="mx-10 md:mx-20">
        <div class="flex justify-between items-center">
            <h1 class="flex flex-col md:flex-row md:gap-4 text-2xl md:text-5xl font-dmsans text-blue-600 font-bold">
                <span>Everything, </span><span><span class="text-primary">Here!
                        {{-- </span> There!</span> --}}
            </h1>
            <div class="hidden md:flex bg-blue-600 rounded-full">
                <div class="flex justify-between text-lg">
                    <button class="p-1">
                        <i
                            class="fa-solid fa-arrow-right bg-white rounded-full p-3 hover:bg-gray-100 transition duration-300 ease-in-out"></i>
                    </button>
                    <button onclick="window.location.href='https://wa.me/6285223303712';"
                        class="text-sm bg-blue-600 rounded-full py-3 px-6 font-semibold hover:bg-blue-700 text-white transition duration-300 ease-in-out">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
        <hr class="border-t-[1px] border-gray-300 mt-10 mb-10" />

        <div class="flex flex-col md:grid md:grid-cols-3 py-0 md:py-5 gap-16">
            <div class="order-3 md:order-1">
                <div class="flex flex-col gap-y-8">
                    <div class="flex items-center">
                        <a href="#"><img src="/assets/img/Frame 15 (3).png" class="h-8"
                                alt="" /></a>
                        <a href="#"
                            class="ml-3 text-2xl text-blue-600 font-medium font-faktum"><b>MMI</b>Ind</a>
                    </div>
                    <p class="text-sm md:text-base text-gray-500 font-dm-sans">
                        Website Resmi Pemerintah <br />Desa Payungagung, Kecamatan Panumbangan, Kabupaten Ciamis.
                    </p>
                    <div class="flex flex-row space-x-3">
                        <a href="" target="_blank">
                            <i
                                class="fa-brands fa-square-facebook text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                        </a>
                        <a href="https://www.instagram.com/desa.payungagung" target="_blank">
                            <i
                                class="fa-brands fa-instagram text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                        </a>

                        <a href="" target="_blank">
                            <i
                                class="fa-brands fa-youtube text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                        </a>
                        <a href="https://wa.me/6285223303712" target="_blank">
                            <i
                                class="fa-brands fa-whatsapp text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 grid grid-cols-2 font-dm-sans">
                <div>
                    <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                        Navigasi
                    </h3>
                    <div class="flex flex-col gap-y-5">
                        <a href="#" class="text-gray-500 text-xs md:text-sm">Beranda</a>
                        <a href="#" class="text-gray-500 text-xs md:text-sm">Profil</a>
                        <a href="#" class="text-gray-500 text-xs md:text-sm">Demografi</a>
                        <a href="/showcase/lapak" class="text-gray-500 text-xs md:text-sm">Potensi</a>
                        <a href="/showcase/berita" class="text-gray-500 text-xs md:text-sm">Berita</a>
                    </div>
                </div>
                <div>
                    <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                        Kontak
                    </h3>
                    <div class="flex flex-col gap-y-5">
                        <h5 class="text-gray-500 text-xs md:text-sm">
                            +62-8522-3024-909
                        </h5>
                        <h5 class="text-gray-500 text-xs md:text-sm">
                            www.example.com
                        </h5>
                        <h5 class="text-gray-500 text-xs md:text-sm">
                            name@gmail.com
                        </h5>
                        <h5 class="text-gray-500 text-xs md:text-sm">
                            6 Rancapetir Street,<br />Ciamis 46211
                        </h5>
                        <h5 class="text-gray-500 text-xs md:text-sm">Blogs</h5>
                        <h5 class="text-gray-500 text-xs md:text-sm">FAQs</h5>
                    </div>
                </div>
            </div>
            <div class="order-2 md:order-3">
                <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                    Dapatkan informasi terbaru
                </h3>
                <div class="bg-white rounded-lg flex overflow-hidden">
                    <input type="email" placeholder="Alamat email"
                        class="py-2 px-4 bg-gray-100 text-gray-700 focus:outline-none" />
                    <button
                        class="bg-primary hover:bg-primaryhover rounded-tr-lg rounded-br-lg p-4 flex items-center justify-center text-white transition duration-300 ease-in-out">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>

        <hr class="border-t-[1px] border-gray-300 mt-14 mb-14" />

        <div
            class="flex flex-col md:flex-row md:justify-between text-center md:text-justify text-gray-800 font-dm-sans text-sm md:text-base">
            <h5>
                Copyright &copy;
                <a href="https://instagram.com/ffahrimf" target="_blank"
                    class="text-primary">SI<b>PAGUNG</b></a>. All
                Rights Reserved.
            </h5>
            <h5 class="hidden md:inline">
                <a class="hover:text-primary transition duration-300 ease-in-out" href="">User Terms &
                    Conditions</a> | <a class="hover:text-primary transition duration-300 ease-in-out"
                    href="">Privacy Policy</a>
            </h5>
        </div>
    </div>
</footer>
