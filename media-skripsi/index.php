<?php
$pageTitle = 'Halaman Awal';
require 'includes/head.php';
?>
<style>
    .hero-bg-mock {
        background-color: #0b1025;
    }
    .hero-btn-mock {
        background-color: #b30000;
        color: white;
        box-shadow: none;
        transition: all 0.3s ease;
    }
    .hero-btn-mock:hover {
        background-color: #d60000;
    }
    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
        100% { transform: translateY(0); }
    }
    .float-btn {
        animation: float 2.5s ease-in-out infinite;
    }
</style>
<body class="antialiased min-h-screen hero-bg-mock text-white flex flex-col overflow-x-hidden">

<audio id="bg-music" loop>
    <source src="bg-musik/bg-musik.mp3" type="audio/mpeg">
</audio>

<main class="flex-grow flex flex-col">
    <section id="home" class="view-section active flex flex-col flex-grow relative">

        <!-- Header -->
        <header class="flex justify-between items-center px-6 lg:px-16 pt-4 shrink-0">
            <!-- Logo -->
            <a href="index.php" class="inline-flex items-center gap-3 no-underline text-white">
                <img
                    src="images/logoweb.png"
                    alt="Logo BELPADA"
                    class="h-10 lg:h-12 w-auto">
                <span class="text-[1.1rem] lg:text-[1.25rem] font-bold tracking-[0.08em] uppercase text-white leading-none">
                    BELPADA
                </span>
            </a>

            <!-- Petunjuk -->
            <a href="petunjuk.php" class="flex items-center gap-3 text-white hover:text-gray-300 transition-colors">
                <div class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-[#b30000] flex items-center justify-center text-lg lg:text-xl font-bold">
                    ?
                </div>
                <span class="text-base lg:text-lg hidden sm:block">Petunjuk & Info Pengembang</span>
            </a>
        </header>

        <!-- Garis Tipis -->
        <div class="w-full h-[1px] bg-white/10 mt-4 shrink-0"></div>

        <!-- Hero 2 kolom -->
        <div class="flex-grow grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8 items-center px-6 lg:px-16 py-6 lg:py-4">

            <!-- Kiri: judul + sub + tombol -->
            <div class="flex flex-col justify-center order-2 lg:order-1 text-left z-10 -mt-6 lg:-mt-16">
                <h1 class="font-black uppercase leading-[1.0] tracking-tight">
                    <span class="block text-white text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem]">BELAJAR</span>
                    <span class="block text-[#b30000] text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem]">PEMROGRAMAN</span>
                    <span class="block text-white text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem]">DASAR</span>
                </h1>
                
                <div class="w-full max-w-[200px] lg:max-w-[250px] h-[2px] bg-[#b30000] mt-2 mb-3 lg:mt-3 lg:mb-4"></div>
                
                <p class="text-sm lg:text-base xl:text-lg text-white/90 leading-relaxed max-w-xl">
                    Media pembelajaran berbasis web yang dirancang
                    untuk membantu siswa mempelajari pemrograman
                    dasar secara mandiri.
                </p>
                
                <div class="mt-4 lg:mt-5 space-y-2 lg:space-y-3">
                    <div class="flex items-center gap-3 lg:gap-4">
                        <!-- Icon Sekolah (Red Outline) -->
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 text-[#b30000] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <p class="text-sm lg:text-base xl:text-lg text-white/90">SMK Semen Indonesia Group</p>
                    </div>

                    <div class="flex items-center gap-3 lg:gap-4">
                        <!-- Icon User Reading (Red Outline) -->
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 text-[#b30000] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 16l-4 2v4l4-2 4 2v-4l-4-2z"></path>
                        </svg>
                        <p class="text-sm lg:text-base xl:text-lg text-white/90">
                            Program keahlian Rekayasa Perangkat Lunak (RPL)<br>
                            Kelas X
                        </p>
                    </div>
                </div>
                
                <div class="mt-5 lg:mt-6 flex justify-start">
                    <a href="#"
                       onclick="event.preventDefault(); startMusicAndNavigate('beranda.php')"
                       class="hero-btn-mock float-btn inline-flex items-center justify-center
                                px-6 py-3 lg:px-8 lg:py-4
                                rounded-full font-bold text-lg lg:text-xl gap-3">
                            <span>Mulai Belajar</span>
                            <span class="text-2xl lg:text-3xl leading-none">&longrightarrow;</span>
                    </a>
                </div>
            </div>

            <!-- Kanan: ilustrasi besar -->
            <div class="flex items-center justify-center lg:justify-end order-1 lg:order-2 w-full -mt-6 lg:-mt-12">
                <img
                    src="images/pelajar.png"
                    alt="Ilustrasi"
                    class="w-full max-w-[280px] sm:max-w-[350px] lg:max-w-[500px] xl:max-w-[650px] h-auto object-contain">
            </div>

        </div>
    </section>
</main>
<script src="app.js?v=3.0"></script>
</body>
</html>
