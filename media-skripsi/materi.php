<?php
$pageTitle = 'Materi Pembelajaran';
$pageHeading = 'Materi Pembelajaran';
$backHref = 'beranda.php';
$backLabel = 'Beranda';
require 'includes/head.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    
    body {
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
        background-color: #f7f4eb;
        color: #111111;
        min-height: 100vh;
        overflow-x: hidden;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    body:has(.view-section.active:not(#materi)) {
        background-color: #13131f;
        color: #ffffff;
    }
    
    .top-header {
        background-color: #171725;
        padding: 15px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 70px;
        box-sizing: border-box;
        position: relative;
        z-index: 10;
    }
    
    .top-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 30%;
        height: 4px;
        background-color: #b11f1e;
    }
    
    .back-btn {
        background-color: #6b0f0f;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: bold;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    
    .back-btn:hover {
        background-color: #8b1515;
    }
    
    .header-logo {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .header-logo img {
        height: 42px;
        width: auto;
    }
    
    .header-logo-text {
        color: white;
        font-size: 22px;
        font-weight: 800;
        letter-spacing: 1px;
    }
    
    .materi-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 50px;
        position: relative;
        min-height: calc(100vh - 70px);
        box-sizing: border-box;
    }
    
    .materi-title {
        font-size: 46px;
        font-weight: 800;
        margin: 0 0 10px 0;
        color: #111111;
        text-align: left;
    }
    
    .materi-subtitle {
        font-size: 20px;
        color: #333333;
        margin: 0 0 40px 0;
        text-align: left;
        font-weight: 500;
    }
    
    /* 5-Column Grid Layout */
    .materi-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        position: relative;
        z-index: 2;
    }
    
    .materi-card {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 24px 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        text-align: left;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border: 1px solid rgba(0, 0, 0, 0.02);
        cursor: pointer;
        min-height: 220px;
        height: 100%;
        width: 100%;
        box-sizing: border-box;
    }
    
    .materi-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
    }
    
    .materi-card-icon {
        width: 36px;
        height: 36px;
        border-radius: 4px;
        overflow: hidden;
        margin-bottom: 16px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
    }
    
    .materi-card-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .materi-card-title {
        font-size: 17px;
        font-weight: 800;
        color: #000000;
        margin: 0 0 10px 0;
        line-height: 1.3;
    }
    
    .materi-card-desc {
        font-size: 12.5px;
        color: #555555;
        line-height: 1.5;
        margin: 0;
        font-weight: 400;
    }
    
    /* Watermark SVG Styling */
    .watermark-bg {
        position: absolute;
        top: 15%;
        right: 2%;
        width: 55%;
        height: 70%;
        pointer-events: none;
        z-index: 0;
        color: #000000;
        opacity: 0.05;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .watermark-bg svg {
        width: 100%;
        height: 100%;
    }
    
    /* Content Glass Cards Overrides */
    .glass-card {
        background: rgba(255, 255, 255, 0.03) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        backdrop-filter: blur(10px);
        border-radius: 12px !important;
    }
    
    /* Code Editor Overrides to look premium */
    .code-editor-container {
        background-color: #0b0b13 !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        border-radius: 8px !important;
    }
    
    /* Restyle back buttons in content pages */
    button.go-to-btn:has(i.fa-arrow-left),
    .go-to-btn:has(.fa-arrow-left) {
        background-color: #6b0f0f !important;
        color: white !important;
        padding: 10px 20px !important;
        border-radius: 4px !important;
        font-weight: bold !important;
        font-size: 14px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 8px !important;
        border: none !important;
        cursor: pointer !important;
        transition: background-color 0.2s !important;
        box-shadow: none !important;
    }
    button.go-to-btn:has(i.fa-arrow-left):hover,
    .go-to-btn:has(.fa-arrow-left):hover {
        background-color: #8b1515 !important;
    }
    button.go-to-btn:has(i.fa-arrow-left) span,
    .go-to-btn:has(.fa-arrow-left) span {
        color: white !important;
        font-weight: bold !important;
    }
    
    footer {
        background-color: #13131f !important;
        color: #a0a0b0 !important;
        border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
        padding: 30px 0 !important;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }
    
    body:has(#materi.active) footer {
        background-color: #f7f4eb !important;
        color: #555555 !important;
        border-top: 1px solid rgba(0, 0, 0, 0.06) !important;
    }
    
    @media (max-width: 1200px) {
        .materi-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }
    @media (max-width: 992px) {
        .materi-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media (max-width: 768px) {
        .materi-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .top-header {
            padding: 15px 20px;
        }
        .materi-container {
            padding: 30px 20px;
        }
        .materi-title {
            font-size: 32px;
        }
        .materi-subtitle {
            font-size: 16px;
        }
        .watermark-bg {
            width: 80%;
            right: 10%;
            opacity: 0.02;
        }
    }
    @media (max-width: 480px) {
        .materi-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<body class="custom-materi">

    <div class="top-header">
        <a href="beranda.php" class="back-btn" id="header-back-btn">
            <i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
        <div class="header-logo">
            <img src="images/logoweb.png" alt="Belpada Logo">
            <span class="header-logo-text">BELPADA</span>
        </div>
    </div>

    <main class="w-full min-h-screen">

        <!-- BAGIAN: Menu Materi Utama (Direct 5-Column Dashboard) -->
        <section id="materi" class="view-section active w-full relative">
            <div class="materi-container">
                
                <!-- Watermark Buku Terbuka SVG -->
                <div class="watermark-bg">
                    <svg viewBox="0 0 800 600" fill="none" stroke="currentColor" stroke-width="4">
                        <!-- Book outline paths -->
                        <path d="M 400 480 C 300 450 150 450 80 480 L 80 180 C 150 150 300 150 400 180 Z" />
                        <path d="M 400 480 C 500 450 650 450 720 480 L 720 180 C 650 150 500 150 400 180 Z" />
                        <!-- Left Pages details -->
                        <path d="M 400 470 C 300 440 155 440 85 470" />
                        <path d="M 400 460 C 300 430 160 430 90 460" />
                        <path d="M 400 450 C 300 420 165 420 95 450" />
                        <path d="M 400 440 C 300 410 170 410 100 440" />
                        <!-- Right Pages details -->
                        <path d="M 400 470 C 500 440 645 440 715 470" />
                        <path d="M 400 460 C 500 430 640 430 710 460" />
                        <path d="M 400 450 C 500 420 635 420 705 450" />
                        <path d="M 400 440 C 500 410 630 410 700 440" />
                        <!-- Spine line -->
                        <line x1="400" y1="180" x2="400" y2="480" />
                        <!-- Pages lines -->
                        <path d="M 130 220 L 350 220" stroke-width="2" />
                        <path d="M 130 250 L 350 250" stroke-width="2" />
                        <path d="M 130 280 L 350 280" stroke-width="2" />
                        <path d="M 130 310 L 350 310" stroke-width="2" />
                        <path d="M 130 340 L 350 340" stroke-width="2" />
                        <path d="M 130 370 L 350 370" stroke-width="2" />
                        <path d="M 130 400 L 350 400" stroke-width="2" />

                        <path d="M 450 220 L 670 220" stroke-width="2" />
                        <path d="M 450 250 L 670 250" stroke-width="2" />
                        <path d="M 450 280 L 670 280" stroke-width="2" />
                        <path d="M 450 310 L 670 310" stroke-width="2" />
                        <path d="M 450 340 L 670 340" stroke-width="2" />
                        <path d="M 450 370 L 670 370" stroke-width="2" />
                        <path d="M 450 400 L 670 400" stroke-width="2" />
                    </svg>
                </div>

                <div class="mb-10 relative z-10">
                    <h2 class="materi-title">Materi Pembelajaran</h2>
                    <p class="materi-subtitle">Pilih topik materi yang ingin dipelajari.</p>
                </div>
                
                <div class="materi-grid">
                    <!-- Card 1 -->
                    <button class="materi-card go-to-btn" data-target="materi-pemrograman-web" type="button">
                        <div class="materi-card-icon">
                            <img src="images/pemrograman-web.png" alt="Pemrograman Web">
                        </div>
                        <h3 class="materi-card-title">1. Pemrograman WEB</h3>
                        <p class="materi-card-desc">Pengertian, Sejarah Web, WWW dan HTTP, Jenis Website, Manfaat Website.</p>
                    </button>
                    
                    <!-- Card 2 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-1" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-introduction.png" alt="Pengenalan HTML">
                        </div>
                        <h3 class="materi-card-title">2. Pengenalan HTML</h3>
                        <p class="materi-card-desc">Pengertian, Perangkat Lunak Pendukung, Struktur dasar HTML.</p>
                    </button>
                    
                    <!-- Card 3 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-2" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-text.png" alt="HTML Teks">
                        </div>
                        <h3 class="materi-card-title">3. HTML Teks</h3>
                        <p class="materi-card-desc">Pengertian, heading, paragraf.</p>
                    </button>
                    
                    <!-- Card 4 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-tables" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-tables.png" alt="HTML Tabel">
                        </div>
                        <h3 class="materi-card-title">4. HTML Tabel</h3>
                        <p class="materi-card-desc">Pengertian, Tag Tabel, Atribut Tabel.</p>
                    </button>
                    
                    <!-- Card 5 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-images" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-images.png" alt="HTML Gambar">
                        </div>
                        <h3 class="materi-card-title">5. HTML Gambar</h3>
                        <p class="materi-card-desc">Pengertian, Atribut gambar, Penggabungan.</p>
                    </button>
                    
                    <!-- Card 6 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-links" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-links.png" alt="HTML Link">
                        </div>
                        <h3 class="materi-card-title">6. HTML Link</h3>
                        <p class="materi-card-desc">Pengertian, Struktur dasar tag, Atribut tautan, Jenis-jenis.</p>
                    </button>
                    
                    <!-- Card 7 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-forms" type="button">
                        <div class="materi-card-icon">
                            <img src="images/html-forms.png" alt="HTML Formulir">
                        </div>
                        <h3 class="materi-card-title">7. HTML Formulir</h3>
                        <p class="materi-card-desc">Pengertian, Struktur dasar, Jenis-jenis input.</p>
                    </button>
                    
                    <!-- Card 8 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-intro" type="button">
                        <div class="materi-card-icon">
                            <img src="images/css-introduction.png" alt="Pengenalan CSS">
                        </div>
                        <h3 class="materi-card-title">8. Pengenalan CSS</h3>
                        <p class="materi-card-desc">Pengertian, Fungsi, Metode.</p>
                    </button>
                    
                    <!-- Card 9 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-selector" type="button">
                        <div class="materi-card-icon">
                            <img src="images/css-selector&properties.png" alt="CSS Selektor dan Properti">
                        </div>
                        <h3 class="materi-card-title">9. CSS Selektor dan Properti</h3>
                        <p class="materi-card-desc">Pengertian, Jenis selektor, Properti css.</p>
                    </button>
                    
                    <!-- Card 10 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-box-model" type="button">
                        <div class="materi-card-icon">
                            <img src="images/css-box-model.png" alt="CSS Box Model">
                        </div>
                        <h3 class="materi-card-title">10. CSS Box Model</h3>
                        <p class="materi-card-desc">Pengertian, Bagian-bagian Box model.</p>
                    </button>
                    
                    <!-- Card 11 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-flexbox" type="button">
                        <div class="materi-card-icon">
                            <img src="images/css-flexbox.png" alt="CSS Flexbox">
                        </div>
                        <h3 class="materi-card-title">11. CSS Flexbox</h3>
                        <p class="materi-card-desc">Pengertian, Elemen Container, Elemen Flex Item, Contoh.</p>
                    </button>
                    
                    <!-- Card 12 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-intro" type="button">
                        <div class="materi-card-icon">
                            <img src="images/js-introduction.png" alt="Pengenalan JavaScript">
                        </div>
                        <h3 class="materi-card-title">12. Pengenalan JavaScript</h3>
                        <p class="materi-card-desc">Pengertian, Fungsi JS, Penulisan Kode.</p>
                    </button>
                    
                    <!-- Card 13 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-variables" type="button">
                        <div class="materi-card-icon">
                            <img src="images/js-variables&operators.png" alt="Variabel & Operator">
                        </div>
                        <h3 class="materi-card-title">13. Variabel &amp; Operator</h3>
                        <p class="materi-card-desc">Variabel, Konstanta, Operator Aritmatika, Operator Perbandingan.</p>
                    </button>
                    
                    <!-- Card 14 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-functions" type="button">
                        <div class="materi-card-icon">
                            <img src="images/js-functions.png" alt="Fungsi">
                        </div>
                        <h3 class="materi-card-title">14. Fungsi</h3>
                        <p class="materi-card-desc">Pengertian, Parameter Fungsi, Contoh Penggunaan.</p>
                    </button>
                </div>
            </div>
        </section>
        <section id="materi-pemrograman-web" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8">
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-blue-500 mr-4"></i> Pemrograman Web
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed">
                        Pemrograman web adalah proses menulis dan menyusun kode untuk membuat desain serta menjalankan sebuah website di internet.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-gears text-purple-500 mr-3"></i> Fungsi
                        </h3>
                        <p class="text-slate-300 leading-relaxed">
                            Dalam dunia pengembangan web, kode berfungsi sebagai bahasa komunikasi antara pengembang dan browser untuk mengatur tampilan, fungsi, dan interaktivitas sebuah website.
                        </p>
                    </div>

                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-laptop-code text-emerald-500 mr-3"></i> Cara Kerja Website Sederhana
                        </h3>
                        <p class="text-slate-300 leading-relaxed">
                            Pemrograman web tidak hanya tentang menulis kode, tetapi juga memahami bagaimana kode diterjemahkan oleh browser menjadi halaman web yang dapat dilihat dan digunakan oleh pengguna. Selain itu, pemrograman web juga memperhatikan aspek performa, desain responsif, dan pengelolaan aset web agar website dapat berjalan dengan baik pada berbagai perangkat dan jaringan.
                        </p>
                    </div>
                </div>

                <div class="glass-card p-8 border-l-4 border-l-warning animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-layer-group text-warning mr-3"></i> HTML, CSS, dan JavaScript sebagai Teknologi Web
                    </h3>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Pemrograman web menggabungkan beberapa teknologi utama, yaitu HTML (HyperText Markup Language), CSS (Cascading Style Sheets), dan JavaScript yang memiliki peran masing-masing:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-brand-800/50 p-5 rounded-2xl border border-white/5">
                            <h4 class="text-lg font-bold text-white mb-2">HTML</h4>
                            <p class="text-sm text-slate-400">Kerangka dasar sebuah website, seperti fondasi pada sebuah bangunan.</p>
                        </div>
                        <div class="bg-brand-800/50 p-5 rounded-2xl border border-white/5">
                            <h4 class="text-lg font-bold text-white mb-2">CSS</h4>
                            <p class="text-sm text-slate-400">Digunakan untuk memberikan gaya dan tampilan agar lebih menarik.</p>
                        </div>
                        <div class="bg-brand-800/50 p-5 rounded-2xl border border-white/5">
                            <h4 class="text-lg font-bold text-white mb-2">JavaScript</h4>
                            <p class="text-sm text-slate-400">Digunakan untuk menambahkan interaktivitas pada website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Introduction -->
        <section id="materi-content-html-1" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-brands fa-html5 text-orange-500 mr-4"></i> Apa itu HTML?
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-blue-400 font-bold">HTML (HyperText Markup Language)</span> adalah bahasa markup standar yang digunakan untuk membuat halaman website.
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        HTML berfungsi untuk menyusun struktur halaman web seperti teks, gambar, tabel, dan form agar dapat ditampilkan melalui browser. Setiap halaman website yang dibuka melalui internet pada dasarnya disusun menggunakan HTML.
                    </p>
                </div>

                <!-- Fungsi HTML -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-list-check text-purple-500 mr-3"></i> Fungsi HTML
                        </h3>
                        <ul class="space-y-3 text-slate-300">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-circle-check text-purple-500 mt-1"></i>
                                <span>Membuat struktur dasar halaman web.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-circle-check text-purple-500 mt-1"></i>
                                <span>Menampilkan teks, gambar, tabel, dan video.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-circle-check text-purple-500 mt-1"></i>
                                <span>Membuat formulir online (form).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-circle-check text-purple-500 mt-1"></i>
                                <span>Menjadi dasar bagi penggunaan CSS dan JavaScript.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-microchip text-emerald-500 mr-3"></i> Cara Kerja HTML
                        </h3>
                        <p class="text-slate-300 leading-relaxed">
                            HTML disusun menggunakan <span class="text-emerald-400 font-mono">tag</span> atau simbol tertentu yang ditulis dalam sebuah file dokumen. Saat file HTML dibuka melalui browser, browser akan membaca dan menerjemahkan kode tersebut menjadi tampilan halaman web.
                        </p>
                    </div>
                </div>

                <!-- Alat yang Dibutuhkan -->
                <div class="glass-card p-8 border-l-4 border-l-warning animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-toolbox text-warning mr-3"></i> Alat yang Dibutuhkan
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fa-solid fa-pen-nib text-slate-400 mr-2"></i> Text Editor
                            </h4>
                            <p class="text-sm text-slate-400 mb-4">Digunakan untuk menulis kode HTML.</p>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Notepad</span>
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Visual Studio Code</span>
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Notepad++</span>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fa-solid fa-globe text-slate-400 mr-2"></i> Web Browser
                            </h4>
                            <p class="text-sm text-slate-400 mb-4">Digunakan untuk menampilkan hasil halaman web.</p>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Google Chrome</span>
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Mozilla Firefox</span>
                                <span class="bg-brand-800/80 px-4 py-2 rounded-xl border border-white/10 text-slate-300">Microsoft Edge</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Struktur Dasar HTML -->
                <div class="glass-card p-8 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-sitemap text-pink-500 mr-3"></i> Struktur Dasar HTML
                    </h3>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        HTML disusun menggunakan elemen atau tag tertentu. Setiap tag HTML biasanya memiliki <span class="text-pink-400 font-mono">&lt;tag pembuka&gt;</span> dan <span class="text-pink-400 font-mono">&lt;/tag penutup&gt;</span>.
                    </p>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-white/10">
                                    <th class="py-4 px-4 text-white font-bold">Tag</th>
                                    <th class="py-4 px-4 text-white font-bold">Fungsi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-300">
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;html&gt;</td>
                                    <td class="py-4 px-4">Digunakan sebagai pembuka dokumen HTML.</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;head&gt;</td>
                                    <td class="py-4 px-4">Berisi informasi halaman website.</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;title&gt;</td>
                                    <td class="py-4 px-4">Digunakan untuk menampilkan judul tab browser.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;body&gt;</td>
                                    <td class="py-4 px-4">Berisi isi utama halaman website yang akan ditampilkan pada browser.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh Penulisan Dasar HTML -->
                <div class="glass-card p-8 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.5s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-orange-500 mr-3"></i> Contoh Penulisan Dasar HTML
                    </h3>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Berikut adalah contoh susunan kode HTML sederhana sesuai dengan struktur yang telah dipelajari:
                    </p>
                    
                    <div class="code-editor-container overflow-hidden">
                        <div class="code-line">
                            <div class="line-number">1</div>
                            <div class="code-content"><span class="text-slate-500">&lt;!DOCTYPE html&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">2</div>
                            <div class="code-content"><span class="text-blue-400">&lt;html</span> <span class="text-emerald-400">lang=</span><span class="text-orange-400">"en"</span><span class="text-blue-400">&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">3</div>
                            <div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">4</div>
                            <div class="code-content">    <span class="text-blue-400">&lt;title&gt;</span>Judul Halaman<span class="text-blue-400">&lt;/title&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">5</div>
                            <div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">6</div>
                            <div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">7</div>
                            <div class="code-content">    Berisi tentang text, gambar</div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">8</div>
                            <div class="code-content">    atau apapun yang</div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">9</div>
                            <div class="code-content">    tampil pada dokumen web.</div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">10</div>
                            <div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">11</div>
                            <div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Text -->
        <section id="materi-content-html-2" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML Text -->
                <div class="glass-card p-8 border-l-4 border-l-orange-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-font text-orange-500 mr-4"></i> HTML Text
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed">
                        <span class="text-orange-400 font-bold">HTML Text</span> digunakan untuk menampilkan berbagai jenis teks dalam halaman web. Dengan ini pengembang dapat mengatur judul, paragraf, serta pemformatan teks seperti tebal, miring, dan garis bawah.
                    </p>
                </div>

                <!-- Heading & Paragraf -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Heading -->
                    <div class="glass-card p-6 border-l-4 border-l-blue-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-heading text-blue-500 mr-3"></i> Heading
                        </h3>
                        <p class="text-slate-300 leading-relaxed mb-4">
                            Tag heading berfungsi untuk memformat judul dan sub-judul. Semakin besar angka heading (h1 ke h6), maka ukuran teks akan semakin kecil.
                        </p>
                        <div class="space-y-4">
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 space-y-2">
                                <h1 class="text-2xl font-bold text-white">Heading 1 (&lt;h1&gt;)</h2>
                                <h2 class="text-xl font-bold text-slate-200">Heading 2 (&lt;h2&gt;)</h2>
                                <h3 class="text-lg font-bold text-slate-300">Heading 3 (&lt;h3&gt;)</h3>
                            </div>
                            <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                                <div class="code-line">
                                    <div class="line-number">7</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h1&gt;</span>This is heading 1<span class="text-blue-400">&lt;/h1&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">8</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h2&gt;</span>This is heading 2<span class="text-blue-400">&lt;/h2&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">9</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h3&gt;</span>This is heading 3<span class="text-blue-400">&lt;/h3&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">10</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h4&gt;</span>This is heading 4<span class="text-blue-400">&lt;/h4&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">11</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h5&gt;</span>This is heading 5<span class="text-blue-400">&lt;/h5&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">12</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;h6&gt;</span>This is heading 6<span class="text-blue-400">&lt;/h6&gt;</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paragraf -->
                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-paragraph text-emerald-500 mr-3"></i> Paragraf
                        </h3>
                        <p class="text-slate-300 leading-relaxed mb-4">
                            Tag HTML untuk paragraf adalah <span class="text-emerald-400 font-mono">&lt;p&gt;</span>, yang digunakan untuk membungkus satu blok teks.
                        </p>
                        <div class="space-y-4">
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5">
                                <p class="text-slate-300 text-sm italic">"Tag p akan memberikan spasi (margin) secara otomatis di atas dan di bawah blok teks."</p>
                            </div>
                            <div class="code-editor-container overflow-hidden text-xs">
                                <div class="code-line">
                                    <div class="line-number">7</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;p&gt;</span>ini adalah paragrap<span class="text-blue-400">&lt;/p&gt;</span></div>
                                </div>
                                <div class="code-line">
                                    <div class="line-number">8</div>
                                    <div class="code-content"><span class="text-blue-400">&lt;p&gt;</span>Ini paragrap yang lain<span class="text-blue-400">&lt;/p&gt;</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Format Teks -->
                <div class="glass-card p-8 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-italic text-purple-500 mr-3"></i> Pemformatan Teks
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-white/10">
                                    <th class="py-4 px-4 text-white font-bold">Tag</th>
                                    <th class="py-4 px-4 text-white font-bold">Fungsi</th>
                                    <th class="py-4 px-4 text-white font-bold">Hasil</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-300">
                                <tr class="border-b border-white/5">
                                    <td class="py-4 px-4 font-mono text-purple-400">&lt;b&gt;</td>
                                    <td class="py-4 px-4">Membuat teks tebal</td>
                                    <td class="py-4 px-4 font-bold text-white">Teks Tebal</td>
                                </tr>
                                <tr class="border-b border-white/5">
                                    <td class="py-4 px-4 font-mono text-purple-400">&lt;i&gt;</td>
                                    <td class="py-4 px-4">Membuat teks miring</td>
                                    <td class="py-4 px-4 italic text-white">Teks Miring</td>
                                </tr>
                                <tr class="border-b border-white/5">
                                    <td class="py-4 px-4 font-mono text-purple-400">&lt;u&gt;</td>
                                    <td class="py-4 px-4">Memberi garis bawah</td>
                                    <td class="py-4 px-4 underline text-white">Garis Bawah</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 font-mono text-purple-400">&lt;br&gt;</td>
                                    <td class="py-4 px-4">Memberi baris baru (Enter)</td>
                                    <td class="py-4 px-4 text-slate-400 font-mono small">(Line Break)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh Penggunaan -->
                <div class="glass-card p-8 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-eye text-pink-500 mr-3"></i> Contoh Penggunaan
                    </h3>
                    <div class="code-editor-container overflow-hidden">
                        <div class="code-line">
                            <div class="line-number">1</div>
                            <div class="code-content"><span class="text-blue-400">&lt;h1&gt;</span>Belajar HTML<span class="text-blue-400">&lt;/h1&gt;</span></div>
                        </div>
                        <div class="code-line">
                            <div class="line-number">2</div>
                            <div class="code-content"><span class="text-blue-400">&lt;p&gt;</span>Ini adalah teks <span class="text-purple-400">&lt;b&gt;</span>tebal<span class="text-purple-400">&lt;/b&gt;</span> dan <span class="text-purple-400">&lt;i&gt;</span>miring<span class="text-purple-400">&lt;/i&gt;</span>.<span class="text-blue-400">&lt;/p&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Images -->
        <section id="materi-content-html-images" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML Images -->
                <div class="glass-card p-8 border-l-4 border-l-orange-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-image text-orange-500 mr-4"></i> HTML IMAGES
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-orange-400 font-bold">HTML IMAGES</span> digunakan untuk menambahkan konten multimedia seperti gambar, audio, dan video dihalaman web. 
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        HTML telah menyediakan tag khusus untuk keperluan ini, yaitu <span class="text-orange-400 font-mono">&lt;img&gt;</span>. Tag ini merupakan tag tunggal atau tidak memiliki penutup. Atribut terpenting dari tag <span class="text-orange-400 font-mono">&lt;img&gt;</span> adalah **SRC** (source atau sumber), yang berisi file gambar yang akan ditampilkan ke dalam halaman web.
                    </p>
                </div>

                <!-- Struktur Dasar & Ukuran -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Struktur Dasar -->
                    <div class="glass-card p-6 border-l-4 border-l-blue-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-code text-blue-500 mr-3"></i> Struktur Dasar Tag &lt;img&gt;
                        </h3>
                        <div class="code-editor-container overflow-hidden text-xs mb-6">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"namafile.jpg"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                        </div>
                        <p class="text-slate-300 text-sm mb-4 italic leading-relaxed">
                            Jika gambar berada di folder berbeda, maka lokasi folder harus dituliskan.
                        </p>
                        <div class="code-editor-container overflow-hidden text-xs">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"images/namafile.jpg"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Mengatur Ukuran Gambar -->
                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-expand text-emerald-500 mr-3"></i> Mengatur Ukuran Gambar
                        </h3>
                        <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                            Ukuran gambar dapat diatur menggunakan atribut: <br>
                            <span class="text-emerald-400 font-bold">Width</span> = lebar gambar <br>
                            <span class="text-emerald-400 font-bold">Height</span> = tinggi gambar
                        </p>
                        <p class="text-xs text-slate-400 mb-2">Contoh penggunaan:</p>
                        <div class="code-editor-container overflow-hidden text-xs mb-4">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"images/komputer.jpg"</span> <span class="text-emerald-400">width=</span><span class="text-orange-400">"320"</span> <span class="text-emerald-400">height=</span><span class="text-orange-400">"230"</span> <span class="text-blue-400">/&gt;</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Keterangan & Perataan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Memberi Keterangan pada Gambar -->
                    <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-comment-dots text-purple-500 mr-3"></i> Memberi Keterangan pada Gambar
                        </h3>
                        <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                            Keterangan gambar dapat dibuat menggunakan atribut: <br>
                            <span class="text-purple-400 font-bold">Title</span> = Menampilkan tooltip saat mouse diarahkan ke gambar <br>
                            <span class="text-purple-400 font-bold">Alt</span> = Menampilkan teks alternatif jika gambar gagal dimuat
                        </p>
                        <p class="text-xs text-slate-400 mb-2">Contoh Penggunaan:</p>
                        <div class="code-editor-container overflow-hidden text-xs">
                            <div class="code-line">
                                <div class="line-number">1</div>
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"namafile"</span> <span class="text-emerald-400">title=</span><span class="text-orange-400">"keterangan"</span> <span class="text-blue-400">/&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">2</div>
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"namafile"</span> <span class="text-emerald-400">alt=</span><span class="text-orange-400">"keterangan"</span> <span class="text-blue-400">/&gt;</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Menggabungkan Gambar dan Teks -->
                    <div class="glass-card p-6 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-align-left text-pink-500 mr-3"></i> Menggabungkan Gambar dan Teks
                        </h3>
                        <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                            Gambar dapat digabungkan dengan teks menggunakan atribut <span class="text-pink-400 font-mono">align</span>. <br>
                            <span class="text-pink-400 font-bold">Top</span> = Teks sejajar bagian atas gambar <br>
                            <span class="text-pink-400 font-bold">Middle</span> = Teks sejajar tengah gambar <br>
                            <span class="text-pink-400 font-bold">Bottom</span> = Teks sejajar bawah gambar
                        </p>
                        <p class="text-xs text-slate-400 mb-2">Contoh penggunaan:</p>
                        <div class="code-editor-container overflow-hidden text-xs">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"gambar.jpg"</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"middle"</span><span class="text-blue-400">&gt;</span> Teks di sini</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Lengkap HTML IMAGES -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up" style="animation-delay: 0.5s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-star text-yellow-500 mr-3"></i> Contoh Lengkap HTML IMAGES
                    </h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line">
                                <div class="line-number">1</div>
                                <div class="code-content"><span class="text-slate-400">&lt;!DOCTYPE html&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">2</div>
                                <div class="code-content"><span class="text-blue-400">&lt;html</span> <span class="text-emerald-400">lang=</span><span class="text-orange-400">"en"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">3</div>
                                <div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">4</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;title&gt;</span>Judul Halaman<span class="text-blue-400">&lt;/title&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">5</div>
                                <div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">6</div>
                                <div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">7</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;h2&gt;</span>Contoh Gambar<span class="text-blue-400">&lt;/h2&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">8</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;img</span> <span class="text-emerald-400">src=</span><span class="text-orange-400">"komputer.jpg"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">9</div>
                                <div class="code-content">         <span class="text-emerald-400">width=</span><span class="text-orange-400">"300"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">10</div>
                                <div class="code-content">         <span class="text-emerald-400">height=</span><span class="text-orange-400">"200"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">11</div>
                                <div class="code-content">         <span class="text-emerald-400">title=</span><span class="text-orange-400">"Komputer Desktop"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">12</div>
                                <div class="code-content">         <span class="text-emerald-400">alt=</span><span class="text-orange-400">"Gambar Komputer"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">13</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;p&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">14</div>
                                <div class="code-content">        contoh penggunaan tag img pada HTML.</div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">15</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;/p&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">16</div>
                                <div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">17</div>
                                <div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div>
                            </div>
                        </div>

                        <!-- Pratinjau Langsung (Simulasi Browser) -->
                        <div class="flex flex-col">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan (Run):
                            </h4>
                            <!-- Wadah Jendela Browser -->
                            <div class="bg-white rounded-xl shadow-2xl overflow-hidden border border-slate-300 flex flex-col">
                                <!-- Header Browser -->
                                <div class="bg-slate-100 border-b border-slate-300 p-2 flex flex-col space-y-1">
                                    <div class="flex items-center space-x-2 px-2">
                                        <div class="flex space-x-1">
                                            <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                                            <div class="w-2.5 h-2.5 rounded-full bg-emerald-400"></div>
                                        </div>
                                        <div class="bg-white border border-slate-300 rounded px-3 py-0.5 text-[10px] text-slate-600 flex items-center space-x-2 w-48">
                                            <i class="fa-solid fa-globe text-slate-400"></i>
                                            <span class="truncate">Judul Halaman</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 px-2">
                                        <div class="flex space-x-3 text-slate-400 text-xs">
                                            <i class="fa-solid fa-arrow-left"></i>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <i class="fa-solid fa-rotate-right"></i>
                                        </div>
                                        <div class="flex-1 bg-white border border-slate-300 rounded px-3 py-1 text-[10px] text-slate-500 flex items-center space-x-2">
                                            <i class="fa-solid fa-info-circle text-slate-400"></i>
                                            <span class="truncate">File | D:/coba run/index.htm</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Konten Browser -->
                                <div class="p-6 text-slate-900 bg-white min-h-[300px]">
                                    <h2 class="text-2xl font-serif font-bold mb-4">Contoh Gambar</h2>
                                    <img src="images/komputer.jpg" width="300" height="200" alt="Komputer" class="mb-4">
                                    <p class="text-sm font-serif">
                                        contoh penggunaan tag img pada HTML.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Tables -->
        <section id="materi-content-html-tables" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML Tables -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-table text-emerald-500 mr-4"></i> HTML Tables
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-emerald-400 font-bold">Tabel dalam HTML</span> digunakan untuk menampilkan informasi dalam bentuk sel yang terdiri atas baris dan kolom. 
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Untuk menampilkan data dalam bentuk tabel pada HTML, digunakan tag <span class="text-emerald-400 font-mono">&lt;table&gt;</span>.
                    </p>
                </div>

                <!-- Tag Utama Tabel -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-tags text-blue-500 mr-3"></i> Tag Utama untuk Tabel
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-white/10 text-white">
                                    <th class="py-4 px-4 font-bold">Tag</th>
                                    <th class="py-4 px-4 font-bold">Fungsi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-300">
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;table&gt;...&lt;/table&gt;</td>
                                    <td class="py-4 px-4">Mendefinisikan Tabel</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;tr&gt;...&lt;/tr&gt;</td>
                                    <td class="py-4 px-4">Mendefinisikan table row atau baris</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;td&gt;...&lt;/td&gt;</td>
                                    <td class="py-4 px-4">Data pada tabel / sel</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="py-4 px-4 font-mono text-blue-400">&lt;th&gt;...&lt;/th&gt;</td>
                                    <td class="py-4 px-4">Mendefinisikan table heading atau judul tiap kolom</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Atribut Elemen Tabel -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Atribut Tabel -->
                    <div class="glass-card p-6 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <i class="fa-solid fa-sliders text-orange-500 mr-3"></i> Atribut Elemen Tabel
                        </h3>
                        <div class="space-y-4">
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Width / Height</span>
                                <span class="text-xs text-slate-400">Lebar & Tinggi (px atau %)</span>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Border</span>
                                <span class="text-xs text-slate-400">Tebal garis tepi (pixel)</span>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Cellspacing</span>
                                <span class="text-xs text-slate-400">Spasi antar sel (pixel)</span>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Cellpadding</span>
                                <span class="text-xs text-slate-400">Spasi di dalam sel (pixel)</span>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Align</span>
                                <span class="text-xs text-slate-400">left | center | right</span>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5 flex justify-between items-center group hover:border-orange-500/30 transition-all">
                                <span class="text-orange-400 font-mono">Bgcolor</span>
                                <span class="text-xs text-slate-400">Warna latar belakang</span>
                            </div>
                        </div>
                    </div>

                    <!-- Atribut Row & Data -->
                    <div class="space-y-8 animate-fade-in-up" style="animation-delay: 0.3s;">
                        <!-- Atribut Row -->
                        <div class="glass-card p-6 border-l-4 border-l-purple-500 transition-colors">
                            <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                                <i class="fa-solid fa-grip-lines text-purple-500 mr-3"></i> Atribut Table Row
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between border-b border-white/5 pb-2">
                                    <span class="text-purple-400 font-mono">Align</span>
                                    <span class="text-sm text-slate-400">Perataan sebaris sel secara horizontal</span>
                                </div>
                                <div class="flex justify-between border-b border-white/5 pb-2">
                                    <span class="text-purple-400 font-mono">Valign</span>
                                    <span class="text-sm text-slate-400">Perataan sebaris sel secara vertikal</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-purple-400 font-mono">Bgcolor</span>
                                    <span class="text-sm text-slate-400">Warna latar belakang baris</span>
                                </div>
                            </div>
                        </div>
                        <!-- Atribut Data -->
                        <div class="glass-card p-6 border-l-4 border-l-pink-500 transition-colors">
                            <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                                <i class="fa-solid fa-database text-pink-500 mr-3"></i> Atribut Tabel Data
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between border-b border-white/5 pb-2">
                                    <span class="text-pink-400 font-mono">Align / Valign</span>
                                    <span class="text-sm text-slate-400">Perataan horizontal & vertikal</span>
                                </div>
                                <div class="flex justify-between border-b border-white/5 pb-2">
                                    <span class="text-pink-400 font-mono">Width / Height</span>
                                    <span class="text-sm text-slate-400">Ukuran sel (pixel atau %)</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-pink-400 font-mono">Bgcolor</span>
                                    <span class="text-sm text-slate-400">Warna latar belakang sel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Penggunaan Kompleks -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-vials text-yellow-500 mr-3"></i> Contoh Penggunaan Kompleks
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Contoh di bawah ini menunjukkan penggunaan atribut <span class="text-yellow-400 font-mono">colspan</span> untuk menggabungkan kolom, <span class="text-yellow-400 font-mono">rowspan</span> untuk menggabungkan baris, dan tag <span class="text-yellow-400 font-mono">&lt;caption&gt;</span> untuk memberikan judul pada tabel.
                    </p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line">
                                <div class="line-number">1</div>
                                <div class="code-content"><span class="text-blue-400">&lt;table</span> <span class="text-emerald-400">border=</span><span class="text-orange-400">"1"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">2</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;caption&gt;</span>Daftar wiraniaga<span class="text-blue-400">&lt;/caption&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">3</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">4</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th</span> <span class="text-emerald-400">colspan=</span><span class="text-orange-400">"2"</span> <span class="text-emerald-400">rowspan=</span><span class="text-orange-400">"2"</span><span class="text-blue-400">&gt;</span>WIRANIAGA<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">5</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th</span> <span class="text-emerald-400">colspan=</span><span class="text-orange-400">"3"</span><span class="text-blue-400">&gt;</span>KOTA<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">6</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;/tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">7</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">8</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th&gt;</span>SEMARANG<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">9</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th&gt;</span>Kudus<span class="text-blue-400">&lt;/th&gt;</span> <span class="text-blue-400">&lt;th&gt;</span>Solo<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">10</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;/tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">11</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">12</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th</span> <span class="text-emerald-400">rowspan=</span><span class="text-orange-400">"2"</span><span class="text-blue-400">&gt;</span>Jenis Kelamin<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">13</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th&gt;</span>Pria<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">14</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>30<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">15</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>20<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">16</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>30<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">17</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;/tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">18</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">19</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;th&gt;</span>wanita<span class="text-blue-400">&lt;/th&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">20</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>20<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">21</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>8<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">22</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;td</span> <span class="text-emerald-400">align=</span><span class="text-orange-400">"right"</span><span class="text-blue-400">&gt;</span>18<span class="text-blue-400">&lt;/td&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">23</div>
                                <div class="code-content">  <span class="text-blue-400">&lt;/tr&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">24</div>
                                <div class="code-content"><span class="text-blue-400">&lt;/table&gt;</span></div>
                            </div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full justify-center">
                            <h4 class="text-white font-bold mb-4">Hasil Tampilan:</h4>
                            <div class="bg-white p-4 rounded-xl text-black shadow-inner overflow-x-auto h-full flex items-center justify-center">
                                <table border="1" class="w-full border-collapse border-2 border-black text-[10px] md:text-xs">
                                    <caption class="font-bold mb-2 text-sm uppercase">Daftar wiraniaga</caption>
                                    <thead class="bg-slate-200">
                                        <tr>
                                            <th colspan="2" rowspan="2" class="border-2 border-black p-1 md:p-2">WIRANIAGA</th>
                                            <th colspan="3" class="border-2 border-black p-1 md:p-2">KOTA</th>
                                        </tr>
                                        <tr>
                                            <th class="border-2 border-black p-1 md:p-2">SEMARANG</th>
                                            <th class="border-2 border-black p-1 md:p-2">Kudus</th>
                                            <th class="border-2 border-black p-1 md:p-2">Solo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th rowspan="2" class="border-2 border-black p-1 md:p-2 bg-slate-50">Jenis Kelamin</th>
                                            <th class="border-2 border-black p-1 md:p-2 bg-slate-50">Pria</th>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">30</td>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">20</td>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">30</td>
                                        </tr>
                                        <tr>
                                            <th class="border-2 border-black p-1 md:p-2 bg-slate-50">wanita</th>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">20</td>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">8</td>
                                            <td align="right" class="border-2 border-black p-1 md:p-2">18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Forms -->
        <section id="materi-content-html-forms" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML Forms -->
                <div class="glass-card p-8 border-l-4 border-l-brand-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-list-check text-brand-500 mr-4"></i> HTML FORMS
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-brand-400 font-bold">Form</span> merupakan bagian dari halaman web yang digunakan untuk menerima input atau data dari pengguna.
                    </p>
                    <p class="text-slate-300 leading-relaxed italic">
                        Data yang dimasukkan tersebut kemudian dapat diproses menggunakan bahasa pemrograman web, baik yang berjalan di sisi server seperti PHP dan JSP maupun di sisi client seperti JavaScript. Form biasanya digunakan untuk berbagai kebutuhan, seperti login, transaksi penjualan, pengumpulan informasi, pemberian saran atau umpan balik, serta layanan pemesanan atau penawaran barang dan jasa secara online.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Struktur Dasar Form -->
                    <div class="glass-card p-6 border-l-4 border-l-blue-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-code text-blue-500 mr-3"></i> Struktur Dasar Form
                        </h3>
                        <div class="code-editor-container overflow-hidden text-xs mb-6">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;form</span> <span class="text-emerald-400">action=</span><span class="text-orange-400">""</span> <span class="text-emerald-400">method=</span><span class="text-orange-400">""</span><span class="text-blue-400">&gt;&lt;/form&gt;</span></div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5">
                                <p class="text-slate-300 text-sm leading-relaxed">
                                    <span class="text-blue-400 font-bold">Action</span> = menentukan tujuan pengiriman data<br>
                                    <span class="text-blue-400 font-bold">Method</span> = menentukan metode pengiriman data (get atau post)
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tag Input dan Jenisnya -->
                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <i class="fa-solid fa-keyboard text-emerald-500 mr-3"></i> Tag Input & Jenisnya
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm text-slate-300">
                                <thead class="text-xs text-slate-400 uppercase bg-white/5">
                                    <tr>
                                        <th class="px-4 py-2">Type</th>
                                        <th class="px-4 py-2">Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Text</td>
                                        <td class="px-4 py-3">Input teks</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Password</td>
                                        <td class="px-4 py-3">Input kata sandi</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Radio</td>
                                        <td class="px-4 py-3">Pilihan satu</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Checkbox</td>
                                        <td class="px-4 py-3">Pilihan lebih dari satu</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Submit</td>
                                        <td class="px-4 py-3">Tombol kirim</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-mono text-emerald-400 italic">Reset</td>
                                        <td class="px-4 py-3">Tombol reset</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Contoh Form Lengkap -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-star text-yellow-500 mr-3"></i> Contoh Form Lengkap
                    </h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line">
                                <div class="line-number">1</div>
                                <div class="code-content"><span class="text-blue-400">&lt;form</span> <span class="text-emerald-400">action=</span><span class="text-orange-400">"simpan.php"</span> <span class="text-emerald-400">method=</span><span class="text-orange-400">"post"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">2</div>
                                <div class="code-content">    Nama Lengkap: <span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">3</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"text"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"nama"</span><span class="text-blue-400">&gt;</span><span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">4</div>
                                <div class="code-content">    Password: <span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">5</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"password"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"pass"</span><span class="text-blue-400">&gt;</span><span class="text-blue-400">&lt;br&gt;</span><span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">6</div>
                                <div class="code-content">    Jenis Kelamin: <span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">7</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"radio"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"jk"</span> <span class="text-emerald-400">value=</span><span class="text-orange-400">"L"</span><span class="text-blue-400">&gt;</span> Laki-laki</div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">8</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"radio"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"jk"</span> <span class="text-emerald-400">value=</span><span class="text-orange-400">"P"</span><span class="text-blue-400">&gt;</span> Perempuan <span class="text-blue-400">&lt;br&gt;</span><span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">9</div>
                                <div class="code-content">    Hobi: <span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">10</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"checkbox"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"hobi1"</span><span class="text-blue-400">&gt;</span> Membaca</div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">11</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"checkbox"</span> <span class="text-emerald-400">name=</span><span class="text-orange-400">"hobi2"</span><span class="text-blue-400">&gt;</span> Olahraga <span class="text-blue-400">&lt;br&gt;</span><span class="text-blue-400">&lt;br&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">12</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"submit"</span> <span class="text-emerald-400">value=</span><span class="text-orange-400">"Kirim"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">13</div>
                                <div class="code-content">    <span class="text-blue-400">&lt;input</span> <span class="text-emerald-400">type=</span><span class="text-orange-400">"reset"</span> <span class="text-emerald-400">value=</span><span class="text-orange-400">"Batal"</span><span class="text-blue-400">&gt;</span></div>
                            </div>
                            <div class="code-line">
                                <div class="line-number">14</div>
                                <div class="code-content"><span class="text-blue-400">&lt;/form&gt;</span></div>
                            </div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan (Run):
                            </h4>
                            <div class="bg-white p-6 rounded-2xl shadow-2xl border-4 border-brand-500/20 text-slate-800">
                                <div class="space-y-4">
                                    <div>
                                        <p class="text-xs font-bold text-slate-500 mb-1">Nama Lengkap:</p>
                                        <input type="text" class="w-full border border-slate-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-500" placeholder="Masukkan nama...">
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-500 mb-1">Password:</p>
                                        <input type="password" class="w-full border border-slate-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-500" value="********">
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-500 mb-1">Jenis Kelamin:</p>
                                        <div class="flex space-x-4">
                                            <label class="flex items-center text-sm"><input type="radio" name="jk_preview" class="mr-2"> Laki-laki</label>
                                            <label class="flex items-center text-sm"><input type="radio" name="jk_preview" class="mr-2"> Perempuan</label>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-500 mb-1">Hobi:</p>
                                        <div class="flex space-x-4">
                                            <label class="flex items-center text-sm"><input type="checkbox" class="mr-2"> Membaca</label>
                                            <label class="flex items-center text-sm"><input type="checkbox" class="mr-2"> Olahraga</label>
                                        </div>
                                    </div>
                                    <div class="flex space-x-2 pt-2">
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded text-sm font-bold shadow-lg hover:bg-blue-700 transition-colors">Kirim</button>
                                        <button class="bg-slate-200 text-slate-700 px-6 py-2 rounded text-sm font-bold hover:bg-slate-300 transition-colors">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-slate-400 text-[10px] mt-4 italic text-center">* Preview di atas adalah simulasi visual dari kode form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi HTML Links -->
        <section id="materi-content-html-links" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-html-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian HTML Links -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-link text-blue-500 mr-4"></i> HTML LINKS
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed">
                        <span class="text-blue-400 font-bold">Link (hyperlink)</span> adalah penghubung antar halaman web yang digunakan untuk memudahkan pengguna berpindah dari satu halaman ke halaman lainnya. Link dibuat menggunakan tag <span class="text-blue-400 font-mono">&lt;a&gt;</span>.
                    </p>
                </div>

                <!-- Struktur Dasar & Atribut -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Struktur Dasar -->
                    <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-code text-purple-500 mr-3"></i> Struktur dasar Tag &lt;a&gt;
                        </h3>
                        <div class="code-editor-container overflow-hidden text-xs mb-6">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"index.html"</span><span class="text-blue-400">&gt;</span>Klik di sini<span class="text-blue-400">&lt;/a&gt;</span></div>
                            </div>
                        </div>
                        <div class="space-y-3 text-sm text-slate-300">
                            <p><span class="text-purple-400 font-mono">&lt;a&gt;</span> = Tag untuk membuat link.</p>
                            <p><span class="text-purple-400 font-mono">Href</span> = Tujuan link.</p>
                            <p><span class="text-purple-400 font-mono">Klik di sini</span> = Teks yang tampil di halaman web.</p>
                        </div>
                    </div>

                    <!-- Atribut Penting -->
                    <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-list-ul text-emerald-500 mr-3"></i> Atribut Penting
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs text-slate-300">
                                <thead class="text-slate-400 border-b border-white/10">
                                    <tr>
                                        <th class="py-2 pr-2">Atribut</th>
                                        <th class="py-2">Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Href</td>
                                        <td class="py-2">Menentukan URL tujuan tautan.</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Target</td>
                                        <td class="py-2">Menentukan cara membuka tautan.</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Title</td>
                                        <td class="py-2">Menampilkan tooltip saat kursor diarahkan.</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Rel</td>
                                        <td class="py-2">Menentukan hubungan antar dokumen.</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Download</td>
                                        <td class="py-2">Memungkinkan pengguna mengunduh file.</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pr-2 font-mono text-emerald-400">Id</td>
                                        <td class="py-2">Menandai elemen unik (target anchor).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Internal & External Links -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Link Internal -->
                    <div class="glass-card p-6 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-house-link text-orange-500 mr-3"></i> Contoh Link Internal
                        </h3>
                        <p class="text-sm text-slate-300 mb-4 italic">Digunakan untuk menghubungkan halaman dalam satu website.</p>
                        <div class="code-editor-container overflow-hidden text-[10px] mb-4">
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"index.html"</span><span class="text-blue-400">&gt;</span>Home<span class="text-blue-400">&lt;/a&gt;</span></div></div>
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"about.html"</span><span class="text-blue-400">&gt;</span>About<span class="text-blue-400">&lt;/a&gt;</span></div></div>
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"contact.html"</span><span class="text-blue-400">&gt;</span>Contact<span class="text-blue-400">&lt;/a&gt;</span></div></div>
                        </div>
                        <div class="space-y-1 text-xs text-slate-400">
                            <p><span class="text-orange-400">index.html</span> = Halaman utama.</p>
                            <p><span class="text-orange-400">about.html</span> = Mengarah ke halaman about.</p>
                            <p><span class="text-orange-400">contact.html</span> = Halaman informasi kontak.</p>
                        </div>
                    </div>

                    <!-- Link Eksternal -->
                    <div class="glass-card p-6 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-arrow-up-right-from-square text-pink-500 mr-3"></i> Contoh Link Eksternal
                        </h3>
                        <p class="text-sm text-slate-300 mb-4 italic">Digunakan untuk mengarahkan pengguna ke luar situs web.</p>
                        <div class="code-editor-container overflow-hidden text-[10px] mb-4">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"https://www.google.com"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="code-content">   <span class="text-emerald-400">target=</span><span class="text-orange-400">"_blank"</span></div>
                            </div>
                            <div class="code-line">
                                <div class="code-content">   <span class="text-emerald-400">rel=</span><span class="text-orange-400">"noopener noreferrer"</span><span class="text-blue-400">&gt;</span>Google<span class="text-blue-400">&lt;/a&gt;</span></div>
                            </div>
                        </div>
                        <div class="space-y-1 text-xs text-slate-400">
                            <p><span class="text-pink-400">target="_blank"</span> = Membuka tautan di tab baru.</p>
                            <p><span class="text-pink-400">rel="noopener noreferrer"</span> = Meningkatkan keamanan halaman.</p>
                        </div>
                    </div>
                </div>

                <!-- Aturan Penamaan File -->
                <div class="glass-card p-8 border-l-4 border-l-warning animate-fade-in-up" style="animation-delay: 0.5s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-file-signature text-warning mr-3"></i> Aturan Penamaan File
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Penamaan file dengan huruf kecil semua, jangan ada spasi, dan hindari karakter non-alfabet.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-emerald-500/10 border border-emerald-500/20 p-4 rounded-xl">
                            <span class="text-emerald-400 font-bold block mb-1 uppercase text-xs">Benar:</span>
                            <code class="text-white">about.html</code>
                        </div>
                        <div class="bg-red-500/10 border border-red-500/20 p-4 rounded-xl">
                            <span class="text-red-400 font-bold block mb-1 uppercase text-xs">Salah:</span>
                            <code class="text-white">About Kami.html</code>
                        </div>
                    </div>
                </div>

                <!-- Link Dalam Satu Halaman & Download -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Link Satu Halaman -->
                    <div class="glass-card p-6 border-l-4 border-l-indigo-500 animate-fade-in-up" style="animation-delay: 0.6s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-anchor text-indigo-500 mr-3"></i> Link dalam Satu Halaman
                        </h3>
                        <p class="text-sm text-slate-300 mb-4 italic">Melompat ke elemen dengan id tertentu di halaman yang sama.</p>
                        <div class="code-editor-container overflow-hidden text-[10px] mb-4">
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"#pantai"</span><span class="text-blue-400">&gt;</span>Menuju bagian panatai<span class="text-blue-400">&lt;/a&gt;</span></div></div>
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;h2</span> <span class="text-emerald-400">id=</span><span class="text-orange-400">"pantai"</span><span class="text-blue-400">&gt;</span>Pantai Parangtritis<span class="text-blue-400">&lt;/h2&gt;</span></div></div>
                            <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;p&gt;</span>pantai ini terkenal dengan pemandangan matahari terbenam.<span class="text-blue-400">&lt;/p&gt;</span></div></div>
                        </div>
                        <div class="space-y-1 text-xs text-slate-400">
                            <p><span class="text-indigo-400">Href="#pantai"</span> = Mengarahkan ke elemen dengan id="pantai".</p>
                            <p><span class="text-indigo-400">Id</span> = Atribut unik untuk menandai elemen tujuan.</p>
                        </div>
                    </div>

                    <!-- Link Download -->
                    <div class="glass-card p-6 border-l-4 border-l-teal-500 animate-fade-in-up" style="animation-delay: 0.7s;">
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fa-solid fa-file-arrow-down text-teal-500 mr-3"></i> Mengunduh File
                        </h3>
                        <p class="text-sm text-slate-300 mb-4 italic">Atribut download memungkinkan pengguna mengunduh file langsung.</p>
                        <div class="code-editor-container overflow-hidden text-[10px] mb-4">
                            <div class="code-line">
                                <div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"materi.pdf"</span> <span class="text-emerald-400">download</span><span class="text-blue-400">&gt;</span>Unduh Materi<span class="text-blue-400">&lt;/a&gt;</span></div>
                            </div>
                        </div>
                        <div class="space-y-1 text-xs text-slate-400">
                            <p><span class="text-teal-400">Href</span> = Lokasi file yang akan diunduh.</p>
                            <p><span class="text-teal-400">Download</span> = Menginstruksikan browser untuk mengunduh.</p>
                        </div>
                    </div>
                </div>

                <!-- Contoh Lengkap -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up" style="animation-delay: 0.8s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-yellow-500 mr-3"></i> Contoh Lengkap Link
                    </h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"about.html"</span><span class="text-blue-400">&gt;</span>Tentang Kami<span class="text-blue-400">&lt;/a&gt;</span><span class="text-blue-400">&lt;br&gt;&lt;br&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"https://www.google.com"</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content">   <span class="text-emerald-400">target=</span><span class="text-orange-400">"_blank"</span></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content">   <span class="text-emerald-400">title=</span><span class="text-orange-400">"Buka Google"</span><span class="text-blue-400">&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content">   Google</div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content"><span class="text-blue-400">&lt;/a&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content"><span class="text-blue-400">&lt;br&gt;&lt;br&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"#pantai"</span><span class="text-blue-400">&gt;</span>Ke Pantai<span class="text-blue-400">&lt;/a&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content"><span class="text-blue-400">&lt;h2</span> <span class="text-emerald-400">id=</span><span class="text-orange-400">"pantai"</span><span class="text-blue-400">&gt;</span>Pantai<span class="text-blue-400">&lt;/h2&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content"><span class="text-blue-400">&lt;p&gt;</span>Pantai adalah tempat wisata yang indah.<span class="text-blue-400">&lt;/p&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">15</div><div class="code-content"><span class="text-blue-400">&lt;a</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"brosur-pariwisata.pdf"</span> <span class="text-emerald-400">download</span><span class="text-blue-400">&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">16</div><div class="code-content">   Download File</div></div>
                            <div class="code-line"><div class="line-number">17</div><div class="code-content"><span class="text-blue-400">&lt;/a&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white p-6 rounded-2xl shadow-xl text-slate-800 min-h-[300px]">
                                <div class="space-y-4">
                                    <div class="mb-4">
                                        <a href="#" class="text-blue-600 underline">Tentang Kami</a>
                                    </div>
                                    <div class="mb-4">
                                        <a href="#" class="text-blue-600 underline" title="Buka Google">Google</a>
                                    </div>
                                    <div class="mb-4">
                                        <a href="#" class="text-blue-600 underline">Ke Pantai</a>
                                    </div>
                                    <div>
                                        <h2 class="text-2xl font-bold text-slate-900 border-b-2 border-slate-200 mb-2">Pantai</h2>
                                        <p class="text-slate-600">Pantai adalah tempat wisata yang indah.</p>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="inline-flex items-center text-blue-600 underline">
                                            <i class="fa-solid fa-file-pdf mr-2 text-red-500"></i> Download File
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi CSS Introduction -->
        <section id="materi-content-css-intro" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-css-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto">
                <!-- Pengertian CSS -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-brands fa-css3-alt text-blue-500 mr-4"></i> CSS Introduction
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-blue-400 font-bold">Cascading Style Sheet</span> atau lebih sering disebut dengan istilah CSS merupakan salah satu dokumen website yang bertujuan untuk mengatur gaya (style) tampilan website.
                    </p>
                </div>
                
                <!-- Fungsi CSS -->
                <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-wand-magic-sparkles text-purple-500 mr-3"></i> Fungsi Cascading Style Sheet
                    </h3>
                    <ul class="space-y-3 text-slate-300 list-none ml-2">
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-3 mt-1"><i class="fa-solid fa-check-circle"></i></span>
                            <span>Mengubah font, ukuran font, warna dan format font.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-3 mt-1"><i class="fa-solid fa-check-circle"></i></span>
                            <span>Mengatur ukuran layout, lebar, tinggi dan warna element, mengubah tampilan form.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-3 mt-1"><i class="fa-solid fa-check-circle"></i></span>
                            <span>Membuat tampilan website lebih menarik.</span>
                        </li>
                    </ul>
                </div>

                <!-- Cara Penggunaan CSS -->
                <div class="space-y-6">
                    <h3 class="text-3xl font-extrabold text-white text-center mb-8 drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.2s;">Metode CSS</h3>
                    
                    <div class="grid grid-cols-1 gap-8">
                        <!-- CSS Inline -->
                        <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                            <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                                <i class="fa-solid fa-code text-emerald-500 mr-3"></i> CSS Inline
                            </h4>
                            <p class="text-slate-300 mb-4">
                                Digunakan untuk menerapkan gaya langsung ke elemen HTML melalui atribut <span class="text-emerald-400 font-mono">style</span>.
                            </p>
                            <div class="code-editor-container overflow-hidden text-[10px] md:text-xs mb-4">
                                <div class="code-line">
                                    <div class="code-content"><span class="text-blue-400">&lt;p</span> <span class="text-emerald-400">style=</span><span class="text-orange-400">"color: blue;"</span><span class="text-blue-400">&gt;</span>ini adalah teks berwarna biru.<span class="text-blue-400">&lt;/p&gt;</span></div>
                                </div>
                            </div>
                            <div class="bg-brand-900/50 p-4 rounded-xl border border-white/5">
                                <p class="text-sm text-slate-300">
                                    <i class="fa-solid fa-info-circle text-emerald-400 mr-2"></i> Atribut <span class="font-mono text-emerald-400">style</span> digunakan untuk mengatur properti <span class="font-mono text-emerald-400">color</span> dengan nilai <span class="font-mono text-emerald-400">blue</span> sehingga teks akan berwarna biru.
                                </p>
                            </div>
                        </div>

                        <!-- CSS Internal -->
                        <div class="glass-card p-6 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                            <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                                <i class="fa-solid fa-file-code text-orange-500 mr-3"></i> CSS Internal
                            </h4>
                            <p class="text-slate-300 mb-4 leading-relaxed">
                                Metode pengelolaan gaya yang ditulis langsung dalam dokumen HTML di dalam tag <span class="text-orange-400 font-mono">&lt;style&gt;</span>, yang diletakkan di dalam elemen <span class="text-orange-400 font-mono">&lt;head&gt;</span>. Metode ini memungkinkan pengembang untuk mendefinisikan anturan halaman web tertentu tanpa perlu mengubah file eksternal.
                            </p>
                            <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                                <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;style&gt;</span></div></div>
                                <div class="code-line"><div class="code-content"><span class="text-yellow-400">p</span> {</div></div>
                                <div class="code-line"><div class="code-content">    <span class="text-blue-300">color</span>: <span class="text-orange-400">red</span>;</div></div>
                                <div class="code-line"><div class="code-content">}</div></div>
                                <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;/style&gt;</span></div></div>
                            </div>
                        </div>

                        <!-- CSS Eksternal -->
                        <div class="glass-card p-6 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.5s;">
                            <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                                <i class="fa-solid fa-link text-pink-500 mr-3"></i> CSS Eksternal
                            </h4>
                            <p class="text-slate-300 mb-4 leading-relaxed">
                                CSS yang ditempatkan pada file tersendiri, biasanya menggunakan ekstensi <span class="text-pink-400 font-mono">.css</span>. External CSS digunakan agar satu file CSS dapat dipakai oleh banyak halaman HTML sekaligus. CSS eksternal dapat disertakan dalam dokumen HTML menggunakan tag <span class="text-pink-400 font-mono">&lt;link&gt;</span> yang diletakkan dalam bagian <span class="text-pink-400 font-mono">&lt;head&gt;</span>. Tag <span class="text-pink-400 font-mono">&lt;link&gt;</span> menghubungkan file CSS eksternal dengan dokumen HTML.
                            </p>
                            <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                                <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;link</span> <span class="text-emerald-400">rel=</span><span class="text-orange-400">"stylesheet"</span> <span class="text-emerald-400">href=</span><span class="text-orange-400">"styles.css"</span><span class="text-blue-400">&gt;</span></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Penggunaan CSS Lengkap -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up" style="animation-delay: 0.6s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-laptop-code text-yellow-500 mr-3"></i> Contoh Penggunaan CSS
                    </h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;!DOCTYPE html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-blue-400">&lt;html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"><span class="text-blue-400">&lt;style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-yellow-400">body</span> {</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content">    <span class="text-blue-300">background-color</span>: <span class="text-orange-400">lightblue</span>;</div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content"><span class="text-yellow-400">h1</span> {</div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content">    <span class="text-blue-300">color</span>: <span class="text-orange-400">navy</span>;</div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content"><span class="text-blue-400">&lt;/style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">15</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">16</div><div class="code-content"><span class="text-blue-400">&lt;h1&gt;</span>Belajar CSS<span class="text-blue-400">&lt;/h1&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">17</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">18</div><div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">19</div><div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-[lightblue] p-6 rounded-2xl shadow-xl text-black flex-grow min-h-[250px]">
                                <h1 style="color: navy; font-size: 2em; font-weight: bold; margin-bottom: 0.5em;">Belajar CSS</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi CSS Selectors & Properties -->
        <section id="materi-content-css-selector" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-css-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian Selector & Property -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-object-group text-blue-500 mr-4"></i> Selector & Properties
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        Bagian utama dari sebuah CSS dalam pengaturan desain halaman web adalah <span class="text-blue-400 font-bold">selektor</span> dan <span class="text-blue-400 font-bold">properti</span>.
                    </p>
                    <p class="text-slate-300 leading-relaxed italic">
                        <span class="text-emerald-400 font-bold">Selector</span> adalah cara untuk memilih elemen HTML yang akan diberi gaya, baik berdasarkan tag, ID, atau class. Sementara itu <span class="text-orange-400 font-bold">Property</span> adalah atribut yang digunakan untuk mendefinisikan gaya visual pada elemen HTML, seperti warna, ukuran font, margin, dan padding.
                    </p>
                </div>

                <!-- Jenis Selector -->
                <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-list-ul text-purple-500 mr-3"></i> Jenis Selector
                    </h3>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 min-w-[700px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5">
                                <tr>
                                    <th class="px-4 py-2">Selector</th>
                                    <th class="px-4 py-2">Sintaks</th>
                                    <th class="px-4 py-2">Fungsi</th>
                                    <th class="px-4 py-2">Penggunaan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr>
                                    <td class="px-4 py-3 font-bold text-emerald-400">Tag</td>
                                    <td class="px-4 py-3 font-mono text-xs">
                                        <div class="text-blue-300">Tag <span class="text-white">{</span></div>
                                        <div class="ml-2"><span class="text-blue-300">property</span><span class="text-white">:</span> <span class="text-orange-400">nilai</span><span class="text-white">;</span></div>
                                        <div class="text-white">}</div>
                                    </td>
                                    <td class="px-4 py-3">Menargetkan semua elemen dengan nama tag.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">
                                        p {<br>
                                        &nbsp;&nbsp;color: blue;<br>
                                        &nbsp;&nbsp;font-size: 20px;<br>
                                        }
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 font-bold text-emerald-400">ID</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">
                                        <div class="text-blue-300">#id <span class="text-white">{</span></div>
                                        <div class="ml-2"><span class="text-blue-300">property</span><span class="text-white">:</span> <span class="text-orange-400">nilai</span><span class="text-white">;</span></div>
                                        <div class="text-white">}</div>
                                    </td>
                                    <td class="px-4 py-3">Menargetkan elemen unik berdasarkan ID.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">
                                        #judul-utama {<br>
                                        &nbsp;&nbsp;color: green;<br>
                                        &nbsp;&nbsp;text-align: center;<br>
                                        }
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 font-bold text-emerald-400">Class</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">
                                        <div class="text-blue-300">.class <span class="text-white">{</span></div>
                                        <div class="ml-2"><span class="text-blue-300">property</span><span class="text-white">:</span> <span class="text-orange-400">nilai</span><span class="text-white">;</span></div>
                                        <div class="text-white">}</div>
                                    </td>
                                    <td class="px-4 py-3">Menargetkan elemen berdasarkan atribut class.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">
                                        .highlight {<br>
                                        &nbsp;&nbsp;color: orange;<br>
                                        &nbsp;&nbsp;font-weight: bold;<br>
                                        }
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Property CSS -->
                <div class="glass-card p-6 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-palette text-orange-500 mr-3"></i> Property CSS
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Digunakan untuk pengaturan elemen HTML.
                    </p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[600px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3 w-1/3">Property</th>
                                    <th class="px-4 py-3 w-2/3">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">color</td>
                                    <td class="px-4 py-3">Mengatur warna teks atau font pada elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">background-color</td>
                                    <td class="px-4 py-3">Mengatur warna latar belakang elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">font-size</td>
                                    <td class="px-4 py-3">Menentukan ukuran teks atau font pada elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">font-family</td>
                                    <td class="px-4 py-3">Menentukan jenis font yang digunakan untuk teks.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">font-weight</td>
                                    <td class="px-4 py-3">Mengatur ketebalan font atau teks.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">line-height</td>
                                    <td class="px-4 py-3">Mengatur tinggi garis antara baris teks.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">margin</td>
                                    <td class="px-4 py-3">Mengatur jarak luar (spasi) antara elemen dan elemen lainnya.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">padding</td>
                                    <td class="px-4 py-3">Mengatur jarak dalam (spasi) antara konten dan batas elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">border</td>
                                    <td class="px-4 py-3">Mengatur batas atau garis yang mengelilingi elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">width</td>
                                    <td class="px-4 py-3">Mengatur lebar elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">height</td>
                                    <td class="px-4 py-3">Mengatur tinggi elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">display</td>
                                    <td class="px-4 py-3">Menentukan bagaimana elemen akan ditampilkan dalam tata letak halaman.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">position</td>
                                    <td class="px-4 py-3">Menentukan jenis penempatan elemen pada halaman.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">z-index</td>
                                    <td class="px-4 py-3">Mengatur urutan lapisan (stacking order) elemen yang tumpang tindih.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">text-align</td>
                                    <td class="px-4 py-3">Menentukan perataan teks dalam elemen.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">overflow</td>
                                    <td class="px-4 py-3">Menentukan cara konten yang meluap dari elemen ditampilkan.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-orange-400 font-bold">box-shadow</td>
                                    <td class="px-4 py-3">Menambahkan bayangan pada elemen.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh penggunaan Selector&Properties -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-emerald-500 mr-3"></i> Contoh Penggunaan Selector & Properties
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;!DOCTYPE html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-blue-400">&lt;html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"><span class="text-blue-400">&lt;style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-yellow-400">h1</span> {</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content">    <span class="text-blue-300">color</span>: <span class="text-orange-400">blue</span>;</div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content">    <span class="text-blue-300">text-align</span>: <span class="text-orange-400">center</span>;</div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content"><span class="text-yellow-400">.paragraf</span> {</div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content">    <span class="text-blue-300">font-size</span>: <span class="text-orange-400">20px</span>;</div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content">    <span class="text-blue-300">color</span>: <span class="text-orange-400">green</span>;</div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"><span class="text-blue-400">&lt;/style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">15</div><div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">16</div><div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">17</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">18</div><div class="code-content"><span class="text-blue-400">&lt;h1&gt;</span>Belajar CSS<span class="text-blue-400">&lt;/h1&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">19</div><div class="code-content"><span class="text-blue-400">&lt;p</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"paragraf"</span><span class="text-blue-400">&gt;</span>Ini adalah paragraf.<span class="text-blue-400">&lt;/p&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">20</div><div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">21</div><div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white p-6 rounded-2xl shadow-xl text-black flex-grow min-h-[200px] flex flex-col justify-center">
                                <h1 style="color: blue; text-align: center; font-size: 2em; font-weight: bold; margin-bottom: 0.5em;">Belajar CSS</h2>
                                <p style="font-size: 20px; color: green;">Ini adalah paragraf.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi CSS Box Model -->
        <section id="materi-content-css-box-model" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-css-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian Box Model -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-box-open text-blue-500 mr-4"></i> CSS Box Model
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-blue-400 font-bold">CSS Box Model</span> adalah konsep dasar dalam CSS untuk mengatur tata letak pada halaman web.
                    </p>
                    <p class="text-slate-300 leading-relaxed italic">
                        Box model memungkinkan untuk membuat border di sekeliling elemen dan space elemen yang saling berhubungan.
                    </p>
                </div>

                <!-- Box Model Components -->
                <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-layer-group text-purple-500 mr-3"></i> Box Model Terdiri Dari:
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white/5 p-4 rounded-lg border border-white/10 hover:bg-white/10 transition-colors">
                            <h4 class="text-lg font-bold text-orange-400 mb-2">a. Margin</h4>
                            <p class="text-slate-300 text-sm">Daerah paling diluar yang membatasi dengan elemen HTML yang lainnya dan tidak berwarna.</p>
                        </div>
                        <div class="bg-white/5 p-4 rounded-lg border border-white/10 hover:bg-white/10 transition-colors">
                            <h4 class="text-lg font-bold text-emerald-400 mb-2">b. Border</h4>
                            <p class="text-slate-300 text-sm">Border mengelilingi padding dan content. Garis yang mempunyai warna dan ketebalan.</p>
                        </div>
                        <div class="bg-white/5 p-4 rounded-lg border border-white/10 hover:bg-white/10 transition-colors">
                            <h4 class="text-lg font-bold text-blue-400 mb-2">c. Padding</h4>
                            <p class="text-slate-300 text-sm">Area yang mengelilingi content. Warna padding dipengaruhi oleh background dari box.</p>
                        </div>
                        <div class="bg-white/5 p-4 rounded-lg border border-white/10 hover:bg-white/10 transition-colors">
                            <h4 class="text-lg font-bold text-purple-400 mb-2">d. Content</h4>
                            <p class="text-slate-300 text-sm">Isi dari box, bisa berupa teks maupun gambar.</p>
                        </div>
                    </div>

                    <div class="flex justify-center p-4 bg-white/5 rounded-xl border border-white/10">
                        <img src="images/boxmodel.png" alt="Ilustrasi CSS Box Model" class="max-w-full h-auto rounded-lg shadow-2xl">
                    </div>
                </div>

                <!-- Contoh Penggunaan Box Model -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-emerald-500 mr-3"></i> Contoh Penggunaan Box Model
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;!DOCTYPE html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-blue-400">&lt;html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"><span class="text-blue-400">&lt;style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-yellow-400">.box</span> {</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content">    <span class="text-blue-300">width</span>: <span class="text-orange-400">300px</span>;</div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content">    <span class="text-blue-300">padding</span>: <span class="text-orange-400">20px</span>;</div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content">    <span class="text-blue-300">border</span>: <span class="text-orange-400">5px solid blue</span>;</div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content">    <span class="text-blue-300">margin</span>: <span class="text-orange-400">30px</span>;</div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content">    <span class="text-blue-300">background-color</span>: <span class="text-orange-400">lightgray</span>;</div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content"><span class="text-blue-400">&lt;/style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">15</div><div class="code-content"><span class="text-blue-400">&lt;div</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"box"</span><span class="text-blue-400">&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">16</div><div class="code-content">Belajar CSS Box Model</div></div>
                            <div class="code-line"><div class="line-number">17</div><div class="code-content"><span class="text-blue-400">&lt;/div&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">18</div><div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">19</div><div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full overflow-hidden">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white rounded-2xl shadow-xl text-black flex-grow min-h-[300px] flex items-center justify-center p-4 relative overflow-x-auto">
                                <!-- Background pattern to represent the document body/canvas -->
                                <div class="absolute inset-0 bg-slate-100" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 15px 15px; min-width: 400px;"></div>
                                
                                <div style="width: 300px; padding: 20px; border: 5px solid blue; margin: 30px; background-color: lightgray; position: relative; z-index: 10; font-family: sans-serif; box-sizing: content-box;">
                                    Belajar CSS Box Model
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi CSS Flexbox -->
        <section id="materi-content-css-flexbox" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-css-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian Flexbox -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-layer-group text-blue-500 mr-4"></i> CSS Flexbox
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-blue-400 font-bold">Flexible box layout</span> dirancang untuk memberikan fleksibilitas dan efisiensi dalam menyusun elemen.
                    </p>
                    <p class="text-slate-300 leading-relaxed italic">
                        Termasuk menangani desain yang dinamis, kompleks, serta responsif.
                    </p>
                </div>

                <!-- Elemen Flexbox Container -->
                <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-box text-purple-500 mr-3"></i> Elemen Flexbox Container
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Flex container adalah elemen pembungkus yang menggunakan <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">display: flex;</code> untuk mengaktifkan tata letak fleksibel pada elemen flex item didalamnya.
                    </p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[700px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Properti</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">display</td>
                                    <td class="px-4 py-3">Mengaktifkan tata letak flexbox pada elemen container.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">display: flex;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">flex-direction</td>
                                    <td class="px-4 py-3">Menentukan arah susunan elemen flex item (row, column, dll).</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex-direction: row;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">justify-content</td>
                                    <td class="px-4 py-3">Mengatur perataan elemen flex item secara horizontal di dalam container.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">justify-content: center;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">align-items</td>
                                    <td class="px-4 py-3">Mengatur perataan elemen flex item secara vertikal di dalam container.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">align-items: stretch;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">align-content</td>
                                    <td class="px-4 py-3">Mengatur perataan baris secara vertikal.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">align-content: space-between;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">flex-wrap</td>
                                    <td class="px-4 py-3">Mengatur apakah elemen flex item akan pindah baris jika tidak cukup ruang.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex-wrap: wrap;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">gap</td>
                                    <td class="px-4 py-3">Memberikan jarak antar elemen flex item.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">gap: 10px;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Elemen Flex Item -->
                <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-cubes text-emerald-500 mr-3"></i> Elemen Flex Item
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Flex item adalah semua elemen yang berada di dalam flex container.
                    </p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[700px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Properti</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">flex</td>
                                    <td class="px-4 py-3">Kombinasi flex-grow, flex-shrink, dan flex-basis untuk menentukan ukuran elemen.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex: 1;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">flex-grow</td>
                                    <td class="px-4 py-3">Menentukan seberapa banyak elemen tumbuh dalam ruang yang tersedia.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex-grow: 2;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">flex-shrink</td>
                                    <td class="px-4 py-3">Menentukan seberapa banyak elemen menyusut jika ruang tidak cukup.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex-shrink: 0;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">flex-basis</td>
                                    <td class="px-4 py-3">Menentukan ukuran awal elemen sebelum ruang didistribusikan.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">flex-basis: 100px;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">align-self</td>
                                    <td class="px-4 py-3">Mengatur perataan vertikal elemen tertentu didalam container.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">align-self: center;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">order</td>
                                    <td class="px-4 py-3">Mengubah urutan elemen dalam flex container.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">order: 2;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh Penggunaan Flexbox -->
                <div class="glass-card p-8 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-orange-500 mr-3"></i> Contoh Penggunaan Flexbox
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;!DOCTYPE html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-blue-400">&lt;html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"><span class="text-blue-400">&lt;style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-yellow-400">.container</span> {</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content">    <span class="text-blue-300">display</span>: <span class="text-orange-400">flex</span>;</div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content">    <span class="text-blue-300">gap</span>: <span class="text-orange-400">10px</span>;</div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content"><span class="text-yellow-400">.box</span> {</div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content">    <span class="text-blue-300">background-color</span>: <span class="text-orange-400">skyblue</span>;</div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content">    <span class="text-blue-300">padding</span>: <span class="text-orange-400">20px</span>;</div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"><span class="text-blue-400">&lt;/style&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">15</div><div class="code-content"><span class="text-blue-400">&lt;/head&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">16</div><div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">17</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">18</div><div class="code-content"><span class="text-blue-400">&lt;div</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"container"</span><span class="text-blue-400">&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">19</div><div class="code-content">    <span class="text-blue-400">&lt;div</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"box"</span><span class="text-blue-400">&gt;</span>Box 1<span class="text-blue-400">&lt;/div&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">20</div><div class="code-content">    <span class="text-blue-400">&lt;div</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"box"</span><span class="text-blue-400">&gt;</span>Box 2<span class="text-blue-400">&lt;/div&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">21</div><div class="code-content">    <span class="text-blue-400">&lt;div</span> <span class="text-emerald-400">class=</span><span class="text-orange-400">"box"</span><span class="text-blue-400">&gt;</span>Box 3<span class="text-blue-400">&lt;/div&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">22</div><div class="code-content"><span class="text-blue-400">&lt;/div&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">23</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">24</div><div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">25</div><div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full overflow-hidden">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white rounded-2xl shadow-xl text-black flex-grow min-h-[300px] flex items-center justify-center p-4 relative overflow-x-auto">
                                <div style="display: flex; gap: 10px; width: 100%;">
                                    <div style="background-color: skyblue; padding: 20px; font-family: sans-serif; font-weight: bold; flex-grow: 1; text-align: center;">Box 1</div>
                                    <div style="background-color: skyblue; padding: 20px; font-family: sans-serif; font-weight: bold; flex-grow: 1; text-align: center;">Box 2</div>
                                    <div style="background-color: skyblue; padding: 20px; font-family: sans-serif; font-weight: bold; flex-grow: 1; text-align: center;">Box 3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- BAGIAN: Materi JS Introduction -->
        <section id="materi-content-js-intro" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-js-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian JS -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-400 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-brands fa-js text-yellow-400 mr-4"></i> JS Introduction
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-yellow-400 font-bold">JavaScript</span> adalah bahasa pemrograman interaktif yang digunakan untuk menghidupkan halaman web.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        Bahasa ini adalah bahasa pemrograman untuk memberikan kemampuan tambahan terhadap HTML dengan mengijinkan pengeksekusian perintah perintah di sisi user, yang artinya di sisi browser bukan di sisi server web.
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Dengan JavaScript website dapat menambahkan berbagai fungsionalitas seperti validasi form, animasi, membuat tombol interaktif. JavaScript memungkinkan halaman web merespons tindakan pengguna secara real-time, seperti klik tombol atau input data.
                    </p>
                </div>

                <!-- Cara Menambahkan JS -->
                <div class="glass-card p-6 border-l-4 border-l-orange-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-code-branch text-orange-500 mr-3"></i> Cara Menambahkan JavaScript
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Untuk menggunakan JavaScript di dalam HTML, Anda bisa menggunakan tag <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">&lt;script&gt;</code>.
                    </p>
                    <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                        <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;script&gt;</span></div></div>
                        <div class="code-line"><div class="code-content">    <span class="text-slate-400 italic">// kode javascript</span></div></div>
                        <div class="code-line"><div class="code-content"><span class="text-blue-400">&lt;/script&gt;</span></div></div>
                    </div>
                </div>

                <!-- Contoh Penggunaan JS -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-laptop-code text-emerald-500 mr-3"></i> Contoh JavaScript
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;!DOCTYPE html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-blue-400">&lt;html&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-blue-400">&lt;body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-blue-400">&lt;button</span> <span class="text-emerald-400">onclick=</span><span class="text-orange-400">"pesan()"</span><span class="text-blue-400">&gt;</span>Klik Saya<span class="text-blue-400">&lt;/button&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content"><span class="text-blue-400">&lt;script&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content"><span class="text-purple-400">function</span> <span class="text-yellow-300">pesan</span>() {</div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content">    <span class="text-blue-300">alert</span>(<span class="text-orange-400">"Hello JavaScript!"</span>);</div></div>
                            <div class="code-line"><div class="line-number">10</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">11</div><div class="code-content"><span class="text-blue-400">&lt;/script&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">12</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">13</div><div class="code-content"><span class="text-blue-400">&lt;/body&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">14</div><div class="code-content"><span class="text-blue-400">&lt;/html&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full overflow-hidden">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white rounded-2xl shadow-xl text-black flex-grow min-h-[250px] flex items-center justify-center p-4 relative overflow-x-auto">
                                <button onclick="alert('Hello JavaScript!')" class="bg-slate-200 hover:bg-slate-300 text-black border border-slate-400 px-4 py-1 rounded" style="font-family: sans-serif;">
                                    Klik Saya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi JS Variables & Operators -->
        <section id="materi-content-js-variables" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-js-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian Variable -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-cube text-blue-500 mr-4"></i> JS Variables & Operators
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-blue-400 font-bold">Variable</span> adalah suatu obyek yang berisi data data, yang mana dapat dimodifikasi selama eksekusi program.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        Di Javascript terdapat beberapa kriteria untuk penamaan variable, seperti ditunjukkan berikut ini:
                    </p>
                    <ul class="list-disc list-inside text-slate-300 space-y-2 mb-4">
                        <li>Nama variable harus dimulai oleh satu huruf (huruf besar maupun huruf kecil) atau satu karakter <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">_</code> (garis bawah).</li>
                        <li>Nama variable bisa terdiri dari kombinasi huruf, angka atau karakter <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">_</code> dan <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">$</code> (spasi kosong tidak diperbolehkan).</li>
                        <li>Nama variable tidak boleh memakai nama-nama yang termasuk ke dalam kata kunci bahasa Javascript.</li>
                    </ul>
                </div>

                <!-- Cara Membuat Variable -->
                <div class="glass-card p-6 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-code text-emerald-500 mr-3"></i> Cara Membuat Variable
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Pada JavaScript, variable dapat dibuat menggunakan:
                    </p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[500px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Variable</th>
                                    <th class="px-4 py-3">Contoh</th>
                                    <th class="px-4 py-3">Penjelasan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">var</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">var umur = 17;</td>
                                    <td class="px-4 py-3">Digunakan untuk membuat variabel pada JavaScript.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">let</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">let nama = "budi";</td>
                                    <td class="px-4 py-3">Digunakan untuk nilai yang bisa diubah.</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-emerald-400 font-bold">const</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">const sekolah = "SMK";</td>
                                    <td class="px-4 py-3">Digunakan untuk nilai yang tetap.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tipe Data -->
                <div class="glass-card p-6 border-l-4 border-l-purple-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-database text-purple-500 mr-3"></i> Tipe Data
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Tipe data dalam JavaScript dibagi menjadi primitif dan referensi:
                    </p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[600px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Tipe Data</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">String</td>
                                    <td class="px-4 py-3">Teks atau karakter.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">"helo dunia"</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Number</td>
                                    <td class="px-4 py-3">Angka (bilangan bulat/desimal).</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">42, 3.14</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Boolean</td>
                                    <td class="px-4 py-3">Nilai benar atau salah.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">true, false</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Null</td>
                                    <td class="px-4 py-3">Nilai kosong atau tidak ada.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">null</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Undefined</td>
                                    <td class="px-4 py-3">Variable yang belum memiliki nilai.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">let a;</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Object</td>
                                    <td class="px-4 py-3">Kumpulan properti dalam pasangan key-value.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">{nama: "budi"}</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-purple-400 font-bold">Array</td>
                                    <td class="px-4 py-3">Kumpulan data dalam daftar berurutan.</td>
                                    <td class="px-4 py-3 font-mono text-xs text-orange-300">[1, 2, 3, 4]</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Operator -->
                <div class="glass-card p-6 border-l-4 border-l-pink-500 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-calculator text-pink-500 mr-3"></i> Operator
                    </h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Digunakan untuk melakukan operasi matematis, perbandingan, atau logis.
                    </p>

                    <h4 class="text-xl font-bold text-white mb-4">A. Operator Aritmatika</h4>
                    <p class="text-slate-300 mb-4 text-sm">Digunakan untuk operasi matematika dasar.</p>
                    <div class="overflow-x-auto pb-4 w-full mb-6">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[500px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Operator</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold text-lg">+</td>
                                    <td class="px-4 py-3">Penjumlahan</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 + 3 = 8</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold text-lg">-</td>
                                    <td class="px-4 py-3">Pengurangan</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 - 2 = 3</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold text-lg">*</td>
                                    <td class="px-4 py-3">Perkalian</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">4 * 3 = 12</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold text-lg">/</td>
                                    <td class="px-4 py-3">Pembagian</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">10 / 2 = 5</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold text-lg">%</td>
                                    <td class="px-4 py-3">Sisa bagi (modulus)</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 % 2 = 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-xl font-bold text-white mb-4">B. Operator Perbandingan</h4>
                    <p class="text-slate-300 mb-4 text-sm">Digunakan untuk membandingkan dua nilai menghasilkan true atau false.</p>
                    <div class="overflow-x-auto pb-4 w-full mb-6">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[600px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Operator</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                    <th class="px-4 py-3">Hasil</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">==</td>
                                    <td class="px-4 py-3">Sama dengan</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 == "5"</td>
                                    <td class="px-4 py-3 font-mono text-emerald-400">true</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">===</td>
                                    <td class="px-4 py-3">Identik (tipe + nilai)</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 === "5"</td>
                                    <td class="px-4 py-3 font-mono text-red-400">false</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">!=</td>
                                    <td class="px-4 py-3">Tidak sama</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">5 != 3</td>
                                    <td class="px-4 py-3 font-mono text-emerald-400">true</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">&gt;</td>
                                    <td class="px-4 py-3">Lebih besar</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">10 &gt; 5</td>
                                    <td class="px-4 py-3 font-mono text-emerald-400">true</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">&lt;</td>
                                    <td class="px-4 py-3">Lebih kecil</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">3 &lt; 5</td>
                                    <td class="px-4 py-3 font-mono text-emerald-400">true</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-xl font-bold text-white mb-4">C. Operator Logika</h4>
                    <p class="text-slate-300 mb-4 text-sm">Digunakan untuk menggabungkan beberapa kondisi logis.</p>
                    <div class="overflow-x-auto pb-2 w-full">
                        <table class="w-full text-left text-sm text-slate-300 border-collapse min-w-[600px]">
                            <thead class="text-xs text-slate-400 uppercase bg-white/5 border-b border-white/10">
                                <tr>
                                    <th class="px-4 py-3">Operator</th>
                                    <th class="px-4 py-3">Deskripsi</th>
                                    <th class="px-4 py-3">Contoh</th>
                                    <th class="px-4 py-3">Hasil</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">&amp;&amp;</td>
                                    <td class="px-4 py-3">AND (dan)</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">true &amp;&amp; false</td>
                                    <td class="px-4 py-3 font-mono text-red-400">false</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">||</td>
                                    <td class="px-4 py-3">OR (atau)</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">true || false</td>
                                    <td class="px-4 py-3 font-mono text-emerald-400">true</td>
                                </tr>
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-4 py-3 font-mono text-pink-400 font-bold">!</td>
                                    <td class="px-4 py-3">NOT (kebalikan)</td>
                                    <td class="px-4 py-3 font-mono text-xs text-blue-300">!true</td>
                                    <td class="px-4 py-3 font-mono text-red-400">false</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh Penggunaan -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-emerald-500 mr-3"></i> Contoh Penggunaan
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;script&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"><span class="text-purple-400">let</span> a = <span class="text-orange-400">10</span>;</div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-purple-400">let</span> b = <span class="text-orange-400">5</span>;</div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content"><span class="text-blue-300">document</span>.<span class="text-yellow-300">write</span>(a + b);</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content"><span class="text-blue-400">&lt;/script&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full overflow-hidden">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white rounded-2xl shadow-xl text-black flex-grow min-h-[150px] flex items-center justify-center p-4 relative overflow-x-auto text-3xl font-bold font-mono">
                                15
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN: Materi JS Functions -->
        <section id="materi-content-js-functions" class="view-section hidden pt-8 pb-12 fade-enter px-6 w-full relative">
            <div class="max-w-6xl mx-auto px-4 pt-4"><button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="materi-js-menu" type="button"><i class="fa-solid fa-arrow-left"></i><span>Kembali</span></button></div>

            <div class="mt-12 md:mt-16 space-y-8 max-w-5xl mx-auto w-full">
                <!-- Pengertian Function -->
                <div class="glass-card p-8 border-l-4 border-l-yellow-500 animate-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-code text-yellow-500 mr-4"></i> JS Functions
                    </h2>
                    <p class="text-xl text-slate-300 leading-relaxed mb-4">
                        <span class="text-yellow-400 font-bold">Fungsi</span> dalam pemrograman merupakan suatu mekanisme yang digunakan untuk mengelompokkan program dalam menyelesaikan suatu kasus, proses atau rumus aritmatika tertentu.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        Dengan pengertian yang sama pengelompokkan kode ini juga sering disebut subprogram (program bagian), prosedur ataupun metode.
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Dalam javascript semuanya itu disebut fungsi, karena Javascript hanya menyediakan satu kata kunci untuk membuat fungsi ini, yaitu <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">function</code>.
                    </p>
                </div>

                <!-- Parameter Function -->
                <div class="glass-card p-8 border-l-4 border-l-blue-500 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fa-solid fa-square-root-variable text-blue-500 mr-3"></i> Parameter Fungsi
                    </h3>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        Fungsi dalam proses pemanggilannya (eksekusi) ada yang membutuhkan data tertentu agar dapat berjalan. Data tertentu yang perlu diberikan saat pemanggilan fungsi ini dikenal dengan nama parameter. Setiap fungsi dapat tidak memiliki atau memiliki lebih dari satu parameter.
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Parameter adalah nilai masukan yang diberikan ke dalam function agar function dapat mengolah data tertentu. Parameter ditulis di dalam tanda kurung <code class="text-orange-400 bg-white/10 px-1 py-0.5 rounded">()</code> setelah nama function.
                    </p>
                </div>

                <!-- Contoh Penggunaan -->
                <div class="glass-card p-8 border-l-4 border-l-emerald-500 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-laptop-code text-emerald-500 mr-3"></i> Contoh Penggunaan
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- Editor Kode -->
                        <div class="code-editor-container overflow-hidden text-[10px] md:text-xs">
                            <div class="code-line"><div class="line-number">1</div><div class="code-content"><span class="text-blue-400">&lt;script&gt;</span></div></div>
                            <div class="code-line"><div class="line-number">2</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">3</div><div class="code-content"><span class="text-purple-400">function</span> <span class="text-yellow-300">salam</span>(<span class="text-orange-300">nama</span>) {</div></div>
                            <div class="code-line"><div class="line-number">4</div><div class="code-content">    <span class="text-blue-300">document</span>.<span class="text-yellow-300">write</span>(<span class="text-orange-400">"Halo "</span> + nama);</div></div>
                            <div class="code-line"><div class="line-number">5</div><div class="code-content">}</div></div>
                            <div class="code-line"><div class="line-number">6</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">7</div><div class="code-content"><span class="text-yellow-300">salam</span>(<span class="text-orange-400">"budi"</span>);</div></div>
                            <div class="code-line"><div class="line-number">8</div><div class="code-content"></div></div>
                            <div class="code-line"><div class="line-number">9</div><div class="code-content"><span class="text-blue-400">&lt;/script&gt;</span></div></div>
                        </div>

                        <!-- Pratinjau Langsung -->
                        <div class="flex flex-col h-full overflow-hidden">
                            <h4 class="text-white font-bold mb-4 flex items-center">
                                <i class="fa-solid fa-play text-emerald-400 mr-2"></i> Hasil Tampilan:
                            </h4>
                            <div class="bg-white rounded-2xl shadow-xl text-black flex-grow min-h-[150px] flex items-center justify-center p-4 relative overflow-x-auto text-2xl font-sans">
                                Halo budi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php require 'includes/site-footer.php'; ?>
<script src="app.js?v=3.0"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    // Intercept back button target to materi
    const backButtons = document.querySelectorAll('button.go-to-btn');
    backButtons.forEach(btn => {
        const target = btn.getAttribute('data-target');
        if (target === 'materi-html-menu' || target === 'materi-css-menu' || target === 'materi-js-menu') {
            btn.setAttribute('data-target', 'materi');
        }
    });
});
</script>
</body>
</html>
