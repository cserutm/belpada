<?php
// materi.php - Materi Pembelajaran
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Materi Pembelajaran — BELPADA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            600: '#6f26dc',
                            700: '#b91c1c',
                            800: '#08d22d',
                            900: '#7f1d1d',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="Assets/css/base.css">
    <link rel="stylesheet" href="Assets/css/materi.css?v=18">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png">
</head>
<body class="custom-materi">

    <div class="top-header">
        <a href="menu.php" class="back-button" id="header-back-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px; display: inline-block; vertical-align: middle;">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            Kembali
        </a>
        <div class="header-logo">
            <img src="Assets/img/logo.png" alt="Logo BELPADA">
            <span class="header-logo-text">BELPADA</span>
        </div>
    </div>

    <main class="w-full min-h-screen">

        <!-- BAGIAN: Menu Materi Utama (Direct 5-Column Dashboard) -->
        <section id="materi" class="view-section active w-full relative">
            <div class="materi-container">
                


                <div class="mb-10 relative z-10">
                    <h2 class="materi-title">Materi Pembelajaran</h2>
                    <p class="materi-subtitle">Pilih topik materi yang ingin dipelajari.</p>
                </div>
                
                <div class="materi-grid">
                    <!-- Kartu 1 -->
                    <button class="materi-card go-to-btn" data-target="materi-pemrograman-web" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fef2f2; border: 1px solid #fee2e2; color: #dc2626;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
                        </div>
                        <h3 class="materi-card-title">Pemrograman WEB</h3>
                        <p class="materi-card-desc">Pengertian, WWW dan HTTP, Client & Server Side, Jenis Website, Manfaat Website.</p>
                    </button>
                    
                    <!-- Kartu 2 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-1" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fff7ed; border: 1px solid #ffedd5; color: #ea580c;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" /><path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /></svg>
                        </div>
                        <h3 class="materi-card-title">Pengenalan HTML</h3>
                        <p class="materi-card-desc">Pengertian, Perangkat Lunak Pendukung, Struktur dasar HTML.</p>
                    </button>
                    
                    <!-- Kartu 3 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-2" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #eef2ff; border: 1px solid #e0e7ff; color: #4f46e5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /><path d="M10 18l5 -5a1.414 1.414 0 0 0 -2 -2l-5 5v2h2" /></svg>
                        </div>
                        <h3 class="materi-card-title">HTML Teks</h3>
                        <p class="materi-card-desc">Pengertian, heading, paragraf.</p>
                    </button>
                    
                    <!-- Kartu 4 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-images" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fdf4ff; border: 1px solid #fae8ff; color: #c026d3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 18h5" /><path d="M14 18h4" /><path d="M15 7h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" /><path d="M3 15l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 13l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /><path d="M3 15h18" /></svg>
                        </div>
                        <h3 class="materi-card-title">HTML Gambar</h3>
                        <p class="materi-card-desc">Pengertian, Atribut gambar, Penggabungan.</p>
                    </button>
                    
                    <!-- Kartu 5 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-tables" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #ecfdf5; border: 1px solid #d1fae5; color: #059669;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14" /><path d="M9 3l-6 6" /><path d="M14 3l-7 7" /><path d="M19 3l-7 7" /><path d="M21 6l-4 4" /><path d="M3 10h18" /><path d="M10 10v11" /></svg>
                        </div>
                        <h3 class="materi-card-title">HTML Tabel</h3>
                        <p class="materi-card-desc">Pengertian, Tag Tabel, Atribut Tabel.</p>
                    </button>
                    
                    <!-- Kartu 6 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-links" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #ecfeff; border: 1px solid #cffafe; color: #0891b2;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 15l6 -6" /><path d="M11 6l.463 -.536a5 5 0 1 1 7.071 7.072l-.534 .464" /><path d="M12.603 18.534a5.07 5.07 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" /><path d="M16 19h6" /></svg>
                        </div>
                        <h3 class="materi-card-title">HTML Link</h3>
                        <p class="materi-card-desc">Pengertian, Struktur dasar tag, Atribut tautan, Jenis-jenis.</p>
                    </button>
                    
                    <!-- Kartu 7 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-html-forms" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fffbeb; border: 1px solid #fef3c7; color: #d97706;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /><path d="M8 11h8v7h-8l0 -7" /><path d="M8 15h8" /><path d="M11 11v7" /></svg>
                        </div>
                        <h3 class="materi-card-title">HTML Formulir</h3>
                        <p class="materi-card-desc">Pengertian, Struktur dasar, Jenis-jenis input.</p>
                    </button>
                    
                    <!-- Kartu 8 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-intro" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #eff6ff; border: 1px solid #dbeafe; color: #2563eb;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" /><path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /></svg>
                        </div>
                        <h3 class="materi-card-title">Pengenalan CSS</h3>
                        <p class="materi-card-desc">Pengertian, Fungsi, Metode.</p>
                    </button>
                    
                    <!-- Kartu 9 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-selector" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fdf2f8; border: 1px solid #fce7f3; color: #db2777;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" /><path d="M7.5 10.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M11.5 7.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M15.5 10.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                        </div>
                        <h3 class="materi-card-title">CSS Selektor dan Properti</h3>
                        <p class="materi-card-desc">Pengertian, Jenis selektor, Properti css.</p>
                    </button>
                    
                    <!-- Kartu 10 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-box-model" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #f5f3ff; border: 1px solid #ede9fe; color: #7c3aed;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
                        </div>
                        <h3 class="materi-card-title">CSS Box Model</h3>
                        <p class="materi-card-desc">Pengertian, Bagian-bagian Box model.</p>
                    </button>
                    
                    <!-- Kartu 11 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-css-flexbox" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fff1f2; border: 1px solid #ffe4e6; color: #e11d48;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" /><path d="M14 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" /><path d="M4 15a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" /><path d="M14 17h6m-3 -3v6" /></svg>
                        </div>
                        <h3 class="materi-card-title">CSS Flexbox</h3>
                        <p class="materi-card-desc">Pengertian, Elemen Container, Elemen Flex Item, Contoh.</p>
                    </button>
                    
                    <!-- Kartu 12 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-intro" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fefce8; border: 1px solid #fef08a; color: #ca8a04;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" /><path d="M7.5 8h3v8l-2 -1" /><path d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /></svg>
                        </div>
                        <h3 class="materi-card-title">Pengenalan JavaScript</h3>
                        <p class="materi-card-desc">Pengertian, Fungsi JS, Penulisan Kode.</p>
                    </button>
                    
                    <!-- Kartu 13 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-functions" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fffbeb; border: 1px solid #fde68a; color: #d97706;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" /></svg>
                        </div>
                        <h3 class="materi-card-title">JS Fungsi</h3>
                        <p class="materi-card-desc">Pengertian, Parameter Fungsi, Contoh Penggunaan.</p>
                    </button>
                    
                    <!-- Kartu 14 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-variables" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #f7fee7; border: 1px solid #d9f99d; color: #65a30d;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" /><path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" /><path d="M10 12l4 0" /></svg>
                        </div>
                        <h3 class="materi-card-title">JS Variabel dan Tipe Data</h3>
                        <p class="materi-card-desc">Pengertian, Variabel pada JavaScript, Tipe data pada JavaScript.</p>
                    </button>
                    
                    <!-- Kartu 15 -->
                    <button class="materi-card go-to-btn" data-target="materi-content-js-operators" type="button">
                        <div class="materi-card-icon" style="display: flex; align-items: center; justify-content: center; background-color: #fff7ed; border: 1px solid #fed7aa; color: #c2410c;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 70%; height: 70%;"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 18l14 -4" /><path d="M5 14l14 -4l-14 -4" /></svg>
                        </div>
                        <h3 class="materi-card-title">JS Operator</h3>
                        <p class="materi-card-desc">Pengertian, Fungsi Operator pada JavaScript, Jenis-jenis.</p>
                    </button>
                </div>
            </div>
        </section>
        <section id="materi-pemrograman-web" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">Pemrograman Web</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="pw-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="pw-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="pw-video">Video</button>
                    </div>
                </div>
                <!-- TAMPILAN SUB 1: Materi -->
                <div id="pw-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengenalan -->
                        <div class="materi-intro-section">
                            <p>Pemrograman web adalah proses membangun halaman website atau aplikasi berbasis web yang dapat diakses melalui web browser. Proses ini dilakukan dengan menulis kode program agar website mampu menampilkan informasi serta menjalankan fungsi sesuai kebutuhan pengguna. Dalam pemrograman web, seorang programmer menulis kode program agar website dapat menampilkan informasi dan menjalankan fungsi tertentu sesuai kebutuhan pengguna.</p>
                            <p>Salah satu teknologi utama dalam pemrograman web adalah HTML (HyperText Markup Language). HTML merupakan bahasa markah yang digunakan untuk menyusun struktur dasar halaman web. HTML pertama kali dikembangkan oleh Tim Berners-Lee pada awal tahun 1990-an. Seiring berkembangnya teknologi internet, HTML terus mengalami pembaruan sehingga mampu menampilkan teks, gambar, audio, video, dan animasi pada halaman website (Limbong et al., 2020).</p>
                            <p>Dalam proses pengembangan website digunakan beberapa teknologi, seperti HTML, CSS, dan JavaScript. HTML digunakan untuk menentukan elemen-elemen seperti teks, gambar, tabel, dan struktur halaman web, sedangkan CSS memberikan gaya dan estetika pada website, termasuk warna, tata letak, dan tipografi dan JavaScript digunakan untuk interaktivitas pada website, seperti validasi formulir, atau membuat elemen dinamis yang merespon tindakan pengguna (Fairuzabadi, 2025).</p>
                            
                            <!-- Kartu visual teknologi inti -->
                            <div class="tech-stack-grid">
                                <div class="tech-stack-card html-card">
                                    <div class="tech-icon"><i class="fab fa-html5"></i></div>
                                    <div class="tech-info">
                                        <h4>HTML</h4>
                                        <span>Menyusun Struktur</span>
                                    </div>
                                </div>
                                <div class="tech-stack-card css-card">
                                    <div class="tech-icon"><i class="fab fa-css3-alt"></i></div>
                                    <div class="tech-info">
                                        <h4>CSS</h4>
                                        <span>Gaya & Estetika</span>
                                    </div>
                                </div>
                                <div class="tech-stack-card js-card">
                                    <div class="tech-icon"><i class="fab fa-js"></i></div>
                                    <div class="tech-info">
                                        <h4>JavaScript</h4>
                                        <span>Interaktivitas Dinamis</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- a. WWW dan HTTP -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">a. WWW dan HTTP</h2>
                            <div class="info-card">
                                <p>WWW (World Wide Web) merupakan kumpulan halaman web yang saling terhubung melalui hyperlink dan dapat diakses melalui internet. HTTP (HyperText Transfer Protocol) adalah protokol yang digunakan untuk mengirim dan menerima data pada website.</p>
                                
                                <!-- Komponen Anatomi URL -->
                                <h4 class="component-label">Contoh & Anatomi URL:</h4>
                                <div class="url-browser-bar">
                                    <div class="url-browser-dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="url-address-field">
                                        <span class="url-part-protocol">http://</span><span class="url-part-domain">www.example.com</span><span class="url-part-path">/2011/samples/first.html</span>
                                    </div>
                                </div>
                                
                                <div class="url-breakdown-grid">
                                    <div class="url-breakdown-item protocol">
                                        <span class="label">http://</span>
                                        <span class="desc"><strong>a. Protokol:</strong> Aturan pengiriman data</span>
                                    </div>
                                    <div class="url-breakdown-item domain">
                                        <span class="label">www.example.com</span>
                                        <span class="desc"><strong>b. Nama Domain:</strong> Alamat server website</span>
                                    </div>
                                    <div class="url-breakdown-item path">
                                        <span class="label">/2011/samples/first.html</span>
                                        <span class="desc"><strong>c. Halaman Web:</strong> File tujuan website</span>
                                    </div>
                                </div>

                                <p style="margin-top: 25px;">Website bekerja ketika pengguna membuka alamat website menggunakan browser. Browser kemudian mengirim permintaan ke server menggunakan protokol HTTP (HyperText Transfer Protocol).</p>
                                <p>Server akan menerima permintaan tersebut lalu mengirimkan file website berupa HTML, CSS, dan JavaScript ke browser. Browser kemudian membaca dan menerjemahkan file tersebut menjadi tampilan halaman website yang dapat dilihat pengguna.</p>

                                <!-- Alur Kerja Website -->
                                <h4 class="component-label" style="margin-top: 30px;">Alur Kerja Website:</h4>
                                <div class="vertical-flow-steps">
                                    <div class="vertical-step">
                                        <div class="step-num">1</div>
                                        <div class="step-desc">Pengguna membuka website melalui browser.</div>
                                    </div>
                                    <div class="vertical-step">
                                        <div class="step-num">2</div>
                                        <div class="step-desc">Browser mengirim permintaan ke server menggunakan HTTP.</div>
                                    </div>
                                    <div class="vertical-step">
                                        <div class="step-num">3</div>
                                        <div class="step-desc">Server mengirim file website.</div>
                                    </div>
                                    <div class="vertical-step">
                                        <div class="step-num">4</div>
                                        <div class="step-desc">Browser membaca HTML, CSS, dan JavaScript.</div>
                                    </div>
                                    <div class="vertical-step">
                                        <div class="step-num">5</div>
                                        <div class="step-desc">Halaman website ditampilkan kepada pengguna.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Client-Side vs Server-Side Scripting -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Scripting pada Pemrograman Web</h2>
                            <p class="section-intro">Secara umum pemrograman web dapat dibagi 2, yaitu: <strong>client side scripting</strong> dan <strong>server side scripting</strong>. Perbedaan dari kedua jenis script ini adalah pada bagaimana script tersebut diproses dan tentu saja dari sintaks program yang digunakan Simarmata, 2006 (dalam Limbong & Sriadhi, 2021).</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
                                <!-- Client Side -->
                                <div class="p-6 rounded-xl border border-blue-100 bg-blue-50/30 text-left">
                                    <h4 class="text-lg font-bold text-blue-900 mb-3 flex items-center gap-2">
                                        <i class="fas fa-desktop"></i> 1. Client Side Scripting
                                    </h4>
                                    <p class="text-sm text-gray-700 leading-relaxed mb-4" style="text-indent: 0 !important;">
                                        Script atau kode program yang diproses pada sisi pengguna melalui web browser. Browser berfungsi untuk membaca dan menerjemahkan kode program agar dapat ditampilkan menjadi halaman website. Jenis script ini biasanya digunakan untuk membuat tampilan website menjadi lebih menarik dan interaktif.
                                    </p>
                                    <div class="mb-3">
                                        <strong class="text-xs font-semibold text-blue-800 uppercase tracking-wider block mb-1">Browser Pendukung:</strong>
                                        <p class="text-xs text-gray-600" style="text-indent: 0 !important;">Google Chrome, Mozilla Firefox, Microsoft Edge, Opera, dan Safari.</p>
                                    </div>
                                    <div>
                                        <strong class="text-xs font-semibold text-blue-800 uppercase tracking-wider block mb-1">Contoh Bahasa/Teknologi:</strong>
                                        <div class="flex flex-wrap gap-2 mt-1">
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-blue-200 text-blue-700 rounded-md">HTML</span>
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-blue-200 text-blue-700 rounded-md">CSS</span>
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-blue-200 text-blue-700 rounded-md">JavaScript</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Server Side -->
                                <div class="p-6 rounded-xl border border-purple-100 bg-purple-50/30 text-left">
                                    <h4 class="text-lg font-bold text-purple-900 mb-3 flex items-center gap-2">
                                        <i class="fas fa-server"></i> 2. Server Side Scripting
                                    </h4>
                                    <p class="text-sm text-gray-700 leading-relaxed mb-4" style="text-indent: 0 !important;">
                                        Script atau kode program yang diproses pada server sebelum ditampilkan pada browser pengguna. Server akan mengolah data terlebih dahulu, kemudian hasilnya dikirim ke browser dalam bentuk halaman website. Jenis script ini digunakan untuk membuat website yang lebih dinamis dan interaktif.
                                    </p>
                                    <div class="mb-3">
                                        <strong class="text-xs font-semibold text-purple-800 uppercase tracking-wider block mb-1">Kelebihan Utama:</strong>
                                        <p class="text-xs text-gray-600" style="text-indent: 0 !important;">Dapat terhubung dengan database, mengelola data pengguna, serta menjaga keamanan data karena proses program dijalankan di server dan tidak dapat langsung dilihat oleh pengguna.</p>
                                    </div>
                                    <div>
                                        <strong class="text-xs font-semibold text-purple-800 uppercase tracking-wider block mb-1">Contoh Bahasa/Teknologi:</strong>
                                        <div class="flex flex-wrap gap-2 mt-1">
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-purple-200 text-purple-700 rounded-md">PHP</span>
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-purple-200 text-purple-700 rounded-md">ASP (Active Server Pages)</span>
                                            <span class="px-2.5 py-1 text-xs font-semibold bg-white border border-purple-200 text-purple-700 rounded-md">JSP (Java Server Pages)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Web Statis vs Web Dinamis -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Web Statis vs Web Dinamis</h2>
                            <p class="section-intro">Berdasarkan sifatnya, website dibedakan menjadi dua jenis, yaitu <strong>web statis</strong> dan <strong>web dinamis</strong> (Limbong & Sriadhi, 2021):</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
                                <!-- Web Statis -->
                                <div class="p-6 rounded-xl border border-gray-200 bg-gray-50/50 text-left">
                                    <h4 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-2">
                                        <i class="fas fa-file-alt"></i> Web Statis
                                    </h4>
                                    <p class="text-sm text-gray-600 leading-relaxed" style="text-indent: 0 !important;">
                                        Website yang isi informasinya tetap dan jarang berubah. Konten di dalamnya ditulis langsung dalam file HTML dan akan tampil sama bagi setiap pengunjung kecuali file kodenya diubah secara manual.
                                    </p>
                                </div>
                                
                                <!-- Web Dinamis -->
                                <div class="p-6 rounded-xl border border-emerald-100 bg-emerald-50/30 text-left">
                                    <h4 class="text-lg font-bold text-emerald-950 mb-2 flex items-center gap-2">
                                        <i class="fas fa-sync-alt"></i> Web Dinamis
                                    </h4>
                                    <p class="text-sm text-emerald-900 leading-relaxed" style="text-indent: 0 !important;">
                                        Website yang informasinya dapat berubah secara real-time dan dinamis. Memungkinkan pengguna berinteraksi secara aktif, seperti melakukan login, mengisi formulir, menyimpan data, atau melihat konten yang disesuaikan dengan preferensi pengguna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- b. Jenis Website -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">b. Jenis Website</h2>
                            <p class="section-intro">Ada berbagai jenis website yang bisa ditemukan di internet (Limbong & Sriadhi, 2021):</p>
                            
                            <div class="types-grid">
                                <div class="type-card">
                                    <div class="type-icon"><i class="fas fa-user"></i></div>
                                    <h5>1. Website Pribadi</h5>
                                    <p>Jenis website yang satu ini dikelola perorangan. Biasanya, website pribadi dibuat menjadi sebuah blog gratis menggunakan layanan blogging, seperti WordPress, Blogger, dan sebagainya. Namun, ada pula website yang digunakan untuk portfolio, seperti galeri fotografi, artikel blog, portfolio video atau desain, dan sebagainya.</p>
                                </div>
                                <div class="type-card">
                                    <div class="type-icon"><i class="fas fa-building"></i></div>
                                    <h5>2. Website Perusahaan</h5>
                                    <p>Jenis website ini dibuat untuk menampilkan informasi terkait brand atau profil perusahaan terkait yang bertujuan untuk menginformasikan kepada pengguna mengenai identitas mereka.</p>
                                </div>
                                <div class="type-card">
                                    <div class="type-icon"><i class="fas fa-users"></i></div>
                                    <h5>3. Website Komunitas</h5>
                                    <p>Website komunitas digunakan sebagai sarana berbagi informasi dan diskusi antar anggota.</p>
                                </div>
                                <div class="type-card">
                                    <div class="type-icon"><i class="fas fa-shopping-cart"></i></div>
                                    <h5>4. Website E-Commerce</h5>
                                    <p>Jenis website ini mengacu pada situs apa pun yang telah dibuat dengan tujuan untuk menjual barang atau layanan online. Selain menjual barang, juga bisa memanfaatkan website e-commerce untuk menampilkan informasi brand atau campaign yang sedang dijalankan dalam bisnis.</p>
                                </div>
                            </div>
                        </div>

                        <!-- c. Manfaat Website -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">c. Manfaat Website</h2>
                            <div class="benefits-container">
                                <div class="benefit-row">
                                    <div class="benefit-number"><i class="fas fa-bullhorn"></i></div>
                                    <div class="benefit-text">
                                        <h5>1. Memperluas jangkauan promosi</h5>
                                        <p>Website dapat digunakan sebagai sarana promosi untuk memperkenalkan informasi, produk, jasa, maupun profil kepada masyarakat luas sehingga dapat menjangkau lebih banyak pengguna.</p>
                                    </div>
                                </div>
                                <div class="benefit-row">
                                    <div class="benefit-number"><i class="fas fa-globe"></i></div>
                                    <div class="benefit-text">
                                        <h5>2. Media informasi tanpa batas</h5>
                                        <p>Website dapat digunakan untuk menyampaikan informasi dan promosi yang dapat diakses kapan saja melalui internet.</p>
                                    </div>
                                </div>
                                <div class="benefit-row">
                                    <div class="benefit-number"><i class="fas fa-comments"></i></div>
                                    <div class="benefit-text">
                                        <h5>3. Sarana komunikasi dan komunitas</h5>
                                        <p>Website dapat digunakan sebagai sarana berbagi informasi dan membentuk komunitas berdasarkan minat atau ketertarikan yang sama.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="pw-contoh" class="materi-tab-content hidden">
                    <div class="contoh-grid">
                        <!-- 1. Website Pribadi -->
                        <div class="contoh-card card-webpribadi">
                            <h3 class="contoh-card-title">Website Pribadi</h3>
                            <img src="Assets/img/webali.png" alt="Website Pribadi" class="contoh-card-img">
                            <p class="contoh-card-source">Sumber : <a href="https://aliabdaal.com/" target="_blank">https://aliabdaal.com/</a></p>
                        </div>
                        
                        <!-- 2. Web Perusahaan -->
                        <div class="contoh-card card-webperusahaan">
                            <h3 class="contoh-card-title">Web Perusahaan</h3>
                            <img src="Assets/img/webperusahaan.png" alt="Web Perusahaan" class="contoh-card-img">
                            <p class="contoh-card-source">Sumber : <a href="https://www.telkom.co.id/" target="_blank">https://www.telkom.co.id/</a></p>
                        </div>
                        
                        <!-- 3. Web Komunitas -->
                        <div class="contoh-card card-webkomunitas">
                            <h3 class="contoh-card-title">Web Komunitas</h3>
                            <img src="Assets/img/webkomunitas.png" alt="Web Komunitas" class="contoh-card-img">
                            <p class="contoh-card-source">Sumber : <a href="https://discord.com/" target="_blank">https://discord.com/</a></p>
                        </div>
                        
                        <!-- 4. Web E-Commerce -->
                        <div class="contoh-card card-webecommerce">
                            <h3 class="contoh-card-title">Web E-Commerce</h3>
                            <img src="Assets/img/webecommerce.png" alt="Web E-Commerce" class="contoh-card-img">
                            <p class="contoh-card-source">Sumber : <a href="https://www.ikea.co.id/in?" target="_blank">https://www.ikea.co.id/in?</a></p>
                        </div>

                        <!-- 5. Cara Kerja Website -->
                        <div class="cara-kerja-card card-carakerja">
                            <h2 class="cara-kerja-title">Cara Kerja Website</h2>
                            <div class="cara-kerja-flow">
                                <!-- Langkah 1: Pengguna / Laptop -->
                                <div class="flow-step">
                                    <div class="flow-icon-wrap">
                                        <img src="Assets/img/rpl.PNG" alt="Orang" class="flow-step-img" style="max-width: 75px; max-height: 75px; object-fit: contain;">
                                    </div>
                                    <div class="flow-step-text">
                                        <strong>Pengguna (Client)</strong>
                                        <p>Memasukkan alamat website (URL) pada kolom browser.</p>
                                    </div>
                                </div>
                                
                                <!-- Panah -->
                                <div class="flow-arrow">
                                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10H25V3L37 15L25 27V20H0V10Z" fill="#a30a14"/>
                                    </svg>
                                </div>
                                
                                <!-- Langkah 2: Browser Chrome -->
                                <div class="flow-step">
                                    <div class="flow-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-chrome">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M12 9h8.4" />
                                            <path d="M14.598 13.5l-4.2 7.275" />
                                            <path d="M9.402 13.5l-4.2 -7.275" />
                                        </svg>
                                    </div>
                                    <div class="flow-step-text">
                                        <strong>Web Browser</strong>
                                        <p>Mengirimkan permintaan (Request) data ke jaringan server.</p>
                                    </div>
                                </div>
                                
                                <!-- Panah -->
                                <div class="flow-arrow">
                                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10H25V3L37 15L25 27V20H0V10Z" fill="#a30a14"/>
                                    </svg>
                                </div>
                                
                                <!-- Langkah 3: Server -->
                                <div class="flow-step">
                                    <div class="flow-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-server-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-2" />
                                            <path d="M3 15a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -2" />
                                            <path d="M7 8l0 .01" />
                                            <path d="M7 16l0 .01" />
                                            <path d="M11 8h6" />
                                            <path d="M11 16h6" />
                                        </svg>
                                    </div>
                                    <div class="flow-step-text">
                                        <strong>Web Server</strong>
                                        <p>Memproses permintaan & mengirim berkas web (HTML, CSS, JS).</p>
                                    </div>
                                </div>
                                
                                <!-- Panah -->
                                <div class="flow-arrow">
                                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10H25V3L37 15L25 27V20H0V10Z" fill="#a30a14"/>
                                    </svg>
                                </div>
                                
                                <!-- Langkah 4: Monitor -->
                                <div class="flow-step">
                                    <div class="flow-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-desktop-analytics">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1l0 -10" />
                                            <path d="M7 20h10" />
                                            <path d="M9 16v4" />
                                            <path d="M15 16v4" />
                                            <path d="M9 12v-4" />
                                            <path d="M12 12v-1" />
                                            <path d="M15 12v-2" />
                                            <path d="M12 12v-1" />
                                        </svg>
                                    </div>
                                    <div class="flow-step-text">
                                        <strong>Tampilan Web</strong>
                                        <p>Browser menerjemahkan kode menjadi tampilan visual website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="pw-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/Pemrograman_web.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: Pengenalan HTML -->
        <section id="materi-content-html-1" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">Pengenalan HTML</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="html1-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="html1-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="html1-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="html1-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>HTML (HyperText Markup Language) adalah bahasa markup standar yang digunakan untuk membuat halaman website. HTML berfungsi untuk menyusun struktur halaman web seperti teks, gambar, tabel, dan form agar dapat ditampilkan melalui browser. Setiap halaman website yang diakses melalui internet pada dasarnya disusun menggunakan HTML.</p>
                            <p>HTML juga menjadi dasar dalam penggunaan CSS dan JavaScript untuk mengembangkan website yang lebih interaktif. HTML disusun menggunakan tag atau simbol tertentu yang ditulis dalam sebuah file dokumen. Saat file HTML dibuka melalui browser, browser akan membaca dan menerjemahkan kode tersebut menjadi tampilan halaman web.</p>
                            <p>Dalam pembuatan HTML diperlukan text editor dan web browser. Text editor digunakan untuk menulis kode HTML, sedangkan web browser digunakan untuk menampilkan hasil halaman web.</p>
                        </div>

                        <!-- Kisi Editor Teks & Web Browser -->
                        <div class="tools-grid">
                            <div class="tool-card">
                                <h4><i class="fas fa-edit" style="color: #a30a14;"></i> Contoh Text Editor</h4>
                                <ul class="tool-list">
                                    <li class="tool-item sublime"><i class="fas fa-code"></i> Sublime Text</li>
                                    <li class="tool-item vscode"><i class="fas fa-terminal"></i> Visual Studio Code</li>
                                    <li class="tool-item notepad"><i class="fas fa-file-code"></i> Notepad++</li>
                                </ul>
                            </div>
                            <div class="tool-card">
                                <h4><i class="fas fa-globe" style="color: #a30a14;"></i> Contoh Browser</h4>
                                <ul class="tool-list">
                                    <li class="tool-item chrome"><i class="fab fa-chrome"></i> Google Chrome</li>
                                    <li class="tool-item firefox"><i class="fab fa-firefox-browser"></i> Mozilla Firefox</li>
                                    <li class="tool-item edge"><i class="fab fa-edge"></i> Microsoft Edge</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Struktur Dasar HTML -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Struktur Dasar HTML</h2>
                            <p>HTML disusun menggunakan elemen atau tag tertentu yang digunakan untuk membentuk struktur halaman web. Setiap tag HTML memiliki tag pembuka <code>&lt; &gt;</code> dan tag penutup <code>&lt;/ &gt;</code>. Beberapa elemen dasar HTML antara lain:</p>
                            
                            <h4 class="component-label">Struktur Dasar HTML:</h4>
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Tag</th>
                                        <th>Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;html&gt;</span></td>
                                        <td>Digunakan sebagai pembuka dokumen HTML.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;head&gt;</span></td>
                                        <td>Berisi informasi halaman website.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;title&gt;</span></td>
                                        <td>Digunakan untuk menampilkan judul tab browser.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;body&gt;</span></td>
                                        <td>Berisi isi utama halaman website yang akan ditampilkan pada browser.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="html1-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Setelah memahami struktur dasar HTML beserta fungsi setiap tag utama, langkah berikutnya adalah menerapkan struktur tersebut ke dalam kode HTML sederhana agar dapat ditampilkan pada halaman web.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE (Gambar 1.1) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan Dasar HTML (Text Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html</span> <span class="syntax-attr">lang</span>=<span class="syntax-string">"en"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Judul Halaman<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    Berisi tentang text, gambar atau apapun yang</span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    tampil pada dokumen web.</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser (Gambar 1.2) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Judul Halaman
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/index.html
                                            </div>
                                        </div>
                                        <div class="browser-content">
                                            Berisi tentang text, gambar atau apapun yang tampil pada dokumen web.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="html1-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/pengenalan_hmtl.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: HTML Teks -->
        <section id="materi-content-html-2" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">HTML Teks</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="html2-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="html2-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="html2-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="html2-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>HTML Text digunakan untuk menampilkan berbagai bentuk teks pada halaman web. Dengan HTML Text, pengembang dapat mengatur judul, paragraf, serta format teks seperti tebal, miring, dan ukuran kecil.</p>
                        </div>

                        <!-- 1. Heading -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Heading</h2>
                            <p>Tag heading digunakan untuk mengatur heading seperti judul dan subjudul pada halaman web. Setiap jenis heading memiliki ukuran huruf yang berbeda, di mana semakin besar angka pada heading, maka ukuran teks akan semakin kecil (misalnya, tag <code>&lt;h1&gt;</code> memiliki ukuran terbesar, sedangkan <code>&lt;h6&gt;</code> memiliki ukuran terkecil).</p>
                            
                            <!-- Perbandingan visual heading -->
                            <h4 class="component-label">Perbandingan Ukuran Heading:</h4>
                            <div class="heading-demo-box">
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h1&gt;</span><h1>Heading 1 (Judul Utama)</h1></div>
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h2&gt;</span><h2>Heading 2 (Sub-Judul Utama)</h2></div>
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h3&gt;</span><h3>Heading 3 (Sub-Sub Judul)</h3></div>
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h4&gt;</span><h4>Heading 4</h4></div>
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h5&gt;</span><h5>Heading 5</h5></div>
                                <div class="heading-demo-item"><span class="demo-tag">&lt;h6&gt;</span><h6>Heading 6</h6></div>
                            </div>
                        </div>

                        <!-- 2. Paragraf -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Paragraf</h2>
                            <p>Tag HTML untuk paragraf adalah <code>&lt;p&gt;</code>, dengan tag penutup <code>&lt;/p&gt;</code> digunakan untuk menampilkan teks dalam bentuk paragraf agar isi halaman web dapat tersusun lebih rapi dan mudah dibaca.</p>
                            <p>Paragraf pada HTML juga dapat diatur posisi atau perataannya sesuai kebutuhan tampilan halaman web menggunakan atribut <code>align</code>.</p>
                            
                            <h4 class="component-label">Pengaturan Letak Paragraf:</h4>
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Tag / Atribut</th>
                                        <th style="width: 25%;">Fungsi</th>
                                        <th>Cara Pemakaian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">align="center"</span></td>
                                        <td>Rata Tengah (Center)</td>
                                        <td><code>&lt;p align="center"&gt;Teks Rata Tengah&lt;/p&gt;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align="left"</span></td>
                                        <td>Rata Kiri (Left)</td>
                                        <td><code>&lt;p align="left"&gt;Teks Rata Kiri&lt;/p&gt;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align="right"</span></td>
                                        <td>Rata Kanan (Right)</td>
                                        <td><code>&lt;p align="right"&gt;Teks Rata Kanan&lt;/p&gt;</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- 3. Pemformatan Teks -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">Pemformatan Teks</h2>
                            <p>Selain mengatur letak paragraf, HTML juga menyediakan berbagai tag pemformatan teks untuk memperjelas tampilan tulisan pada halaman web.</p>
                            
                            <h4 class="component-label">Tag HTML Pemformatan Teks:</h4>
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Tag</th>
                                        <th style="width: 45%;">Fungsi</th>
                                        <th>Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;b&gt;</span></td>
                                        <td>Membuat teks tebal (bold)</td>
                                        <td><strong>Teks Tebal</strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;i&gt;</span></td>
                                        <td>Membuat teks miring (italic)</td>
                                        <td><em>Teks Miring</em></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;u&gt;</span></td>
                                        <td>Membuat memberi garis bawah teks (underline)</td>
                                        <td><u>Teks Bergaris Bawah</u></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;br&gt;</span></td>
                                        <td>Memberi baris baru (line break)</td>
                                        <td>Berpindah ke<br>baris baru</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="html2-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Setelah memahami berbagai tag teks pada HTML, berikut contoh penerapan heading, paragraf, perataan letak, dan tag pemformatan teks dalam satu file HTML utuh.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE (Gambar 1.4) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan HTML Text (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> text-example.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Belajar HTML Teks<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;h1&gt;</span>Belajar HTML Teks<span class="syntax-tag">&lt;/h1&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;h2&gt;</span>Menggunakan Heading &amp; Paragraf<span class="syntax-tag">&lt;/h2&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">    <span class="syntax-tag">&lt;p</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"center"</span><span class="syntax-tag">&gt;</span>Ini paragraf rata tengah.<span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">    <span class="syntax-tag">&lt;p</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"left"</span><span class="syntax-tag">&gt;</span>Ini paragraf rata kiri.<span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">&lt;p</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"right"</span><span class="syntax-tag">&gt;</span>Ini paragraf rata kanan.<span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">    <span class="syntax-tag">&lt;p&gt;</span>Teks ini memiliki format <span class="syntax-tag">&lt;b&gt;</span>tebal<span class="syntax-tag">&lt;/b&gt;</span>,</span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">       <span class="syntax-tag">&lt;i&gt;</span>miring<span class="syntax-tag">&lt;/i&gt;</span>, dan <span class="syntax-tag">&lt;u&gt;</span>garis bawah<span class="syntax-tag">&lt;/u&gt;</span>.<span class="syntax-tag">&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">       Gunakan tag br untuk pindah baris.</span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">    <span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser (Gambar 1.5) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Utama Halaman Web (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Belajar HTML Teks
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/text-example.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; font-size: 14px; padding: 20px;">
                                            <h1 style="font-size: 2em; font-weight: bold; margin-top: 0.67em; margin-bottom: 0.67em; text-align: left;">Belajar HTML Teks</h1>
                                            <h2 style="font-size: 1.5em; font-weight: bold; margin-top: 0.83em; margin-bottom: 0.83em; text-align: left;">Menggunakan Heading &amp; Paragraf</h2>
                                            <p style="text-align: center; text-indent: 0; margin-bottom: 1em;">Ini paragraf rata tengah.</p>
                                            <p style="text-align: left; text-indent: 0; margin-bottom: 1em;">Ini paragraf rata kiri.</p>
                                            <p style="text-align: right; text-indent: 0; margin-bottom: 1em;">Ini paragraf rata kanan.</p>
                                            <p style="text-align: left; text-indent: 0; margin-bottom: 1em;">Teks ini memiliki format <strong>tebal</strong>, <em>miring</em>, dan <u>garis bawah</u>.<br>Gunakan tag br untuk pindah baris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="html2-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/html_text.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 4: HTML Tabel -->
        <section id="materi-content-html-tables" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">HTML Tabel</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="tables-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="tables-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="tables-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="tables-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>Tabel dalam HTML digunakan untuk menampilkan informasi dalam bentuk sel yang terdiri atas baris dan kolom. Untuk menampilkan data dalam bentuk tabel pada HTML, digunakan Tag <code>&lt;table&gt;</code>.</p>
                        </div>

                        <!-- Tag Utama Tabel -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Tag Utama untuk Tabel</h2>
                            <p>Untuk membentuk sebuah tabel minimal diperlukan beberapa tag pendukung seperti baris, judul kolom, dan sel data.</p>
                            
                            <h4 class="component-label">Tag Utama untuk Tabel:</h4>
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Tag</th>
                                        <th>Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;table&gt;...&lt;/table&gt;</span></td>
                                        <td>Mendefinisikan Tabel.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;tr&gt;...&lt;/tr&gt;</span></td>
                                        <td>Mendefinisikan table row atau baris tabel.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;td&gt;...&lt;/td&gt;</span></td>
                                        <td>Mendefinisikan table data atau sel data dalam tabel.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">&lt;th&gt;...&lt;/th&gt;</span></td>
                                        <td>Mendefinisikan table heading atau judul tiap kolom.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Atribut Elemen Tabel -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Atribut Elemen Tabel</h2>
                            <p>Digunakan untuk mengatur ukuran, tampilan, dan posisi tabel secara keseluruhan pada halaman web.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Atribut</th>
                                        <th style="width: 25%;">Nilai / Satuan</th>
                                        <th>Fungsi / Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">width</span></td>
                                        <td><code>pixel</code> atau <code>persen (%)</code></td>
                                        <td>Lebar tabel (contoh: <code>width="500"</code> atau <code>width="100%"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">height</span></td>
                                        <td><code>pixel</code> atau <code>persen (%)</code></td>
                                        <td>Tinggi tabel (contoh: <code>height="200"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">border</span></td>
                                        <td><code>pixel</code></td>
                                        <td>Tebal garis tepi tabel (contoh: <code>border="1"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">cellspacing</span></td>
                                        <td><code>pixel</code></td>
                                        <td>Spasi atau jarak antar sel tabel (contoh: <code>cellspacing="2"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">cellpadding</span></td>
                                        <td><code>pixel</code></td>
                                        <td>Jarak antara dinding sel dengan isi sel di dalamnya (contoh: <code>cellpadding="5"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align</span></td>
                                        <td><code>left</code>, <code>center</code>, <code>right</code></td>
                                        <td>Perataan posisi tabel secara horizontal pada halaman.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">bgcolor</span></td>
                                        <td><code>warna</code> (hex / nama)</td>
                                        <td>Warna latar belakang tabel (contoh: <code>bgcolor="#f2f2f2"</code>).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Atribut Baris Tabel (Table Row) -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Atribut Table Row (Baris)</h2>
                            <p>Digunakan untuk mengatur perataan dan warna latar belakang pada baris tertentu secara keseluruhan.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Atribut</th>
                                        <th style="width: 25%;">Nilai / Satuan</th>
                                        <th>Fungsi / Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">align</span></td>
                                        <td><code>left</code>, <code>center</code>, <code>right</code></td>
                                        <td>Perataan horizontal sebaris sel sekaligus.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">valign</span></td>
                                        <td><code>top</code>, <code>middle</code>, <code>bottom</code></td>
                                        <td>Perataan vertikal sebaris sel sekaligus.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">bgcolor</span></td>
                                        <td><code>warna</code> (hex / nama)</td>
                                        <td>Warna latar belakang baris tabel (contoh: <code>bgcolor="yellow"</code>).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Atribut Data Tabel (Table Data) -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">Atribut Table Data &amp; Heading (Sel)</h2>
                            <p>Digunakan untuk mengatur tampilan per sel individu agar tabel menjadi lebih rapi dan teratur.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Atribut</th>
                                        <th style="width: 25%;">Nilai / Satuan</th>
                                        <th>Fungsi / Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">align</span></td>
                                        <td><code>left</code>, <code>center</code>, <code>right</code></td>
                                        <td>Perataan horizontal isi sel individu.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">valign</span></td>
                                        <td><code>top</code>, <code>middle</code>, <code>bottom</code></td>
                                        <td>Perataan vertikal isi sel individu.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">height</span></td>
                                        <td><code>pixel</code> atau <code>persen (%)</code></td>
                                        <td>Tinggi sel individu (contoh: <code>height="50"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">bgcolor</span></td>
                                        <td><code>warna</code> (hex / nama)</td>
                                        <td>Warna latar belakang sel individu (contoh: <code>bgcolor="lightblue"</code>).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="tables-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh kode implementasi tabel HTML yang menggunakan tag baris, judul kolom, sel data, serta beberapa atribut dekoratif seperti perataan cell, border, dan warna latar belakang.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE (Gambar 1.6) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan HTML Table (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> table-example.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Belajar HTML Tabel<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;h2&gt;</span>Daftar Nilai Siswa<span class="syntax-tag">&lt;/h2&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;table</span> <span class="syntax-attr">border</span>=<span class="syntax-string">"1"</span> <span class="syntax-attr">cellpadding</span>=<span class="syntax-string">"8"</span> <span class="syntax-attr">cellspacing</span>=<span class="syntax-string">"0"</span> <span class="syntax-attr">width</span>=<span class="syntax-string">"100%"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">        <span class="syntax-tag">&lt;tr</span> <span class="syntax-attr">bgcolor</span>=<span class="syntax-string">"#a30a14"</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"center"</span> <span class="syntax-attr">style</span>=<span class="syntax-string">"color: white;"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">            <span class="syntax-tag">&lt;th&gt;</span>No<span class="syntax-tag">&lt;/th&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">            <span class="syntax-tag">&lt;th&gt;</span>Nama<span class="syntax-tag">&lt;/th&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">            <span class="syntax-tag">&lt;th&gt;</span>Nilai<span class="syntax-tag">&lt;/th&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">        <span class="syntax-tag">&lt;/tr&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">        <span class="syntax-tag">&lt;tr</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"center"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">            <span class="syntax-tag">&lt;td&gt;</span>1<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">            <span class="syntax-tag">&lt;td</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"left"</span><span class="syntax-tag">&gt;</span>Budi Santoso<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">            <span class="syntax-tag">&lt;td&gt;</span>90<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content">        <span class="syntax-tag">&lt;/tr&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content">        <span class="syntax-tag">&lt;tr</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"center"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">20</span><span class="ide-content">            <span class="syntax-tag">&lt;td&gt;</span>2<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">21</span><span class="ide-content">            <span class="syntax-tag">&lt;td</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"left"</span><span class="syntax-tag">&gt;</span>Siti Aminah<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">22</span><span class="ide-content">            <span class="syntax-tag">&lt;td&gt;</span>95<span class="syntax-tag">&lt;/td&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">23</span><span class="ide-content">        <span class="syntax-tag">&lt;/tr&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">24</span><span class="ide-content">    <span class="syntax-tag">&lt;/table&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">25</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">26</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser (Gambar 1.7) -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Utama Halaman Web (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Belajar HTML Tabel
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/table-example.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; font-size: 14px; padding: 25px;">
                                            <h2 style="font-size: 1.5em; font-weight: bold; margin-top: 0; margin-bottom: 0.83em; text-align: left;">Daftar Nilai Siswa</h2>
                                            
                                            <!-- Tabel mentah bergaya standar untuk meniru Gambar 1.7 -->
                                            <table style="border: 1px solid black; border-collapse: collapse; width: 100%; text-indent: 0;">
                                                <tr style="background-color: #a30a14; color: white; text-align: center; font-weight: bold;">
                                                    <th style="border: 1px solid black; padding: 8px;">No</th>
                                                    <th style="border: 1px solid black; padding: 8px;">Nama</th>
                                                    <th style="border: 1px solid black; padding: 8px;">Nilai</th>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td style="border: 1px solid black; padding: 8px;">1</td>
                                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">Budi Santoso</td>
                                                    <td style="border: 1px solid black; padding: 8px;">90</td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td style="border: 1px solid black; padding: 8px;">2</td>
                                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">Siti Aminah</td>
                                                    <td style="border: 1px solid black; padding: 8px;">95</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="tables-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/html_tables.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 5: HTML Gambar -->
        <section id="materi-content-html-images" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">HTML Gambar</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="images-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="images-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="images-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="images-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>HTML image digunakan untuk menambahkan konten multimedia seperti gambar, audio, dan video di halaman web. HTML telah menyediakan tag khusus untuk keperluan ini, yaitu <code>&lt;img&gt;</code>. Tag ini merupakan tag tunggal atau tidak memiliki penutup. Atribut terpenting dari tag <code>&lt;img&gt;</code> adalah <strong>SRC (source atau sumber)</strong>, yang berisi file gambar yang akan ditampilkan ke dalam halaman web.</p>
                        </div>

                        <!-- Sintaks Dasar -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Sintaks Dasar Tag &lt;img&gt;</h2>
                            <p>Penulisan tag <code>&lt;img&gt;</code> paling sederhana hanya membutuhkan atribut <code>src</code> untuk menunjukkan lokasi file gambar.</p>
                            
                            <h4 class="component-label">Sintaks Dasar Tag &lt;img&gt;:</h4>
                            <div class="ide-mockup" style="margin: 10px 0 20px 0;">
                                <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                    <span class="syntax-tag">&lt;img</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"namafile.jpg"</span><span class="syntax-tag">&gt;</span>
                                </div>
                            </div>

                            <p>Jika gambar berada di folder berbeda, maka lokasi folder harus dituliskan secara lengkap (relative/absolute path).</p>
                            
                            <h4 class="component-label">Penyebutan lokasi folder:</h4>
                            <div class="ide-mockup" style="margin: 10px 0 20px 0;">
                                <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                    <span class="syntax-tag">&lt;img</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"images/komputer.jpg"</span> <span class="syntax-attr">width</span>=<span class="syntax-string">"320"</span> <span class="syntax-attr">height</span>=<span class="syntax-string">"230"</span> <span class="syntax-tag">/&gt;</span>
                                </div>
                            </div>
                        </div>

                        <!-- Atribut Gambar -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Atribut Elemen Gambar (Images)</h2>
                            <p>Tag <code>&lt;img&gt;</code> memiliki beberapa atribut utama yang digunakan untuk mengatur sumber, ukuran, dan deskripsi gambar.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Atribut</th>
                                        <th style="width: 25%;">Nilai / Satuan</th>
                                        <th>Fungsi / Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">src</span></td>
                                        <td><code>URL / File Path</code></td>
                                        <td>Digunakan untuk menentukan lokasi gambar yang akan ditampilkan.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">width</span></td>
                                        <td><code>pixel</code> atau <code>persen (%)</code></td>
                                        <td>Menentukan ukuran lebar gambar (contoh: <code>width="300"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">height</span></td>
                                        <td><code>pixel</code> atau <code>persen (%)</code></td>
                                        <td>Menentukan ukuran tinggi gambar (contoh: <code>height="200"</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">title</span></td>
                                        <td><code>teks</code></td>
                                        <td>Menampilkan tooltip/teks melayang saat kursor mouse diarahkan ke gambar.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">alt</span></td>
                                        <td><code>teks alternatif</code></td>
                                        <td>Menampilkan teks alternatif sebagai pengganti jika gambar gagal dimuat.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Menggabungkan Gambar dan Teks -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">Menggabungkan Gambar dan Teks</h2>
                            <p>Agar tampilan halaman web menjadi lebih menarik, gambar dapat dipadukan dengan teks menggunakan pengaturan posisi tertentu menggunakan atribut <code>align</code>.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Nilai Align</th>
                                        <th>Fungsi / Posisi Teks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">top</span></td>
                                        <td>Teks sejajar dengan bagian atas gambar.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">middle</span></td>
                                        <td>Teks sejajar dengan bagian tengah (rata tengah) gambar.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">bottom</span></td>
                                        <td>Teks sejajar dengan bagian bawah gambar.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h4 class="component-label">Menggabungkan Gambar dan Teks:</h4>
                            <div class="ide-mockup" style="margin: 10px 0 0 0;">
                                <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                    <span class="syntax-tag">&lt;img</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"gambar.jpg"</span> <span class="syntax-attr">align</span>=<span class="syntax-string">"left"</span><span class="syntax-tag">&gt;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="images-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Setelah memahami cara menggabungkan gambar dan teks, berikut adalah contoh penggunaan HTML Images beserta hasil tampilannya pada halaman web.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan HTML Images (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> image-example.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Judul Halaman<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;h2&gt;</span>Contoh Gambar<span class="syntax-tag">&lt;/h2&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;img</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"komputer.jpg"</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">         <span class="syntax-attr">width</span>=<span class="syntax-string">"300"</span></span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">         <span class="syntax-attr">height</span>=<span class="syntax-string">"200"</span></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">         <span class="syntax-attr">title</span>=<span class="syntax-string">"Komputer Desktop"</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">         <span class="syntax-attr">alt</span>=<span class="syntax-string">"Gambar Komputer"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-tag">&lt;p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">        contoh penggunaan tag img pada HTML.</span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">    <span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Judul Halaman
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/image-example.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; font-size: 14px; padding: 25px;">
                                            <h2 style="font-size: 1.5em; font-weight: bold; margin-top: 0; margin-bottom: 0.83em; text-align: left;">Contoh Gambar</h2>
                                            
                                            <!-- Render gambar komputer asli dengan dimensi yang ditentukan -->
                                            <div style="margin-bottom: 15px;">
                                                <img src="Assets/img/imgkom.png" width="300" height="200" title="Komputer Desktop" alt="Gambar Komputer" style="border: 1px solid #ddd; border-radius: 4px; max-width: 100%; height: auto; display: block;">
                                            </div>
                                            
                                            <p style="margin-top: 10px; line-height: 1.5;">
                                                contoh penggunaan tag img pada HTML.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="images-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/html_images.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 6: HTML Link -->
        <section id="materi-content-html-links" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">HTML Link</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="links-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="links-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="links-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="links-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>HTML Link (hyperlink) adalah penghubung antar halaman web yang digunakan untuk memudahkan pengguna berpindah dari satu halaman ke halaman lainnya. Link dibuat menggunakan tag <code>&lt;a&gt;</code>.</p>
                        </div>

                        <!-- Struktur Dasar -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Struktur dasar Tag &lt;a&gt;</h2>
                            <p>Untuk membuat link, kita menggunakan tag <code>&lt;a&gt;</code> dengan atribut <code>href</code> untuk menentukan halaman tujuan.</p>
                            
                            <h4 class="component-label">Struktur dasar Tag &lt;a&gt;:</h4>
                            <div class="ide-mockup" style="margin: 10px 0 20px 0;">
                                <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                    <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"halaman.html"</span><span class="syntax-tag">&gt;</span>Klik di sini<span class="syntax-tag">&lt;/a&gt;</span>
                                </div>
                            </div>

                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 15px; margin-top: 15px;">
                                <h4 style="margin-top: 0; margin-bottom: 10px; font-weight: bold; color: #444;">Penjelasan:</h4>
                                <ul style="list-style-type: none; padding-left: 0; margin: 0;">
                                    <li style="margin-bottom: 8px; display: flex; align-items: start;">
                                        <code style="background-color: #f5f5f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; margin-right: 10px; min-width: 60px; text-align: center; border: 1px solid #e5e5e4;">&lt;a&gt;</code>
                                        <span style="font-size: 14px; color: #555;">tag untuk membuat link.</span>
                                    </li>
                                    <li style="margin-bottom: 8px; display: flex; align-items: start;">
                                        <code style="background-color: #f5f5f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; margin-right: 10px; min-width: 60px; text-align: center; border: 1px solid #e5e5e4;">href</code>
                                        <span style="font-size: 14px; color: #555;">tujuan link.</span>
                                    </li>
                                    <li style="display: flex; align-items: start;">
                                        <code style="background-color: #f5f5f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; margin-right: 10px; min-width: 60px; text-align: center; border: 1px solid #e5e5e4;">Teks</code>
                                        <span style="font-size: 14px; color: #555;">teks yang tampil di halaman web.</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <p style="margin-top: 20px;">Setelah memahami struktur dasar tag <code>&lt;a&gt;</code>, terdapat beberapa atribut penting yang digunakan untuk mengatur fungsi dan perilaku link pada halaman web.</p>
                        </div>

                        <!-- Atribut Penting -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Atribut Penting dalam Tag &lt;a&gt;</h2>
                            <p>Tabel berikut menampilkan atribut-atribut yang sering digunakan pada tag link:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Atribut</th>
                                        <th>Fungsi / Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">href</span></td>
                                        <td>Menentukan URL tujuan link.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">target</span></td>
                                        <td>Menentukan cara membuka link.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">title</span></td>
                                        <td>Menampilkan tooltip saat kursor diarahkan ke link.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">rel</span></td>
                                        <td>Menentukan hubungan antara dokumen saat ini dan tujuan link.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">download</span></td>
                                        <td>Memungkinkan pengguna mengunduh file.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">id</span></td>
                                        <td>Menandai elemen unik yang bisa menjadi target link anchor.</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <p style="margin-top: 20px;">Selain memahami atribut pada tag <code>&lt;a&gt;</code>, pengguna juga perlu mengetahui jenis-jenis link yang umum digunakan dalam HTML.</p>
                        </div>

                        <!-- Jenis-Jenis Link -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">Jenis-Jenis Link</h2>
                            <p>Terdapat beberapa jenis link yang umum digunakan dalam dokumen HTML untuk memenuhi berbagai kebutuhan navigasi:</p>
                            
                            <!-- 1. Link Internal -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 20px; margin-bottom: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                                <h3 style="font-size: 16px; font-weight: bold; margin-top: 0; margin-bottom: 10px; color: #0891b2; display: flex; align-items: center; gap: 8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l6 -6" /><path d="M11 6l.463 -.536a5 5 0 1 1 7.071 7.072l-.534 .464" /><path d="M13 18l-.397 .534a5.07 5.07 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" /></svg>
                                    Link Internal
                                </h3>
                                <p style="margin-bottom: 15px; color: #4b5563;">Digunakan untuk menghubungkan halaman-halaman yang berada dalam satu website yang sama.</p>
                                
                                <h4 class="component-label">Contoh Kode:</h4>
                                <div class="ide-mockup" style="margin: 10px 0 15px 0;">
                                    <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"index.html"</span><span class="syntax-tag">&gt;</span>Beranda<span class="syntax-tag">&lt;/a&gt;</span><br>
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"about.html"</span><span class="syntax-tag">&gt;</span>Tentang Kami<span class="syntax-tag">&lt;/a&gt;</span><br>
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"contact.html"</span><span class="syntax-tag">&gt;</span>Kontak<span class="syntax-tag">&lt;/a&gt;</span>
                                    </div>
                                </div>
                                
                                <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 6px; padding: 12px 15px;">
                                    <strong style="font-size: 13px; color: #374151; display: block; margin-bottom: 6px;">Penjelasan:</strong>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 13px; color: #4b5563; line-height: 1.5;">
                                        <li><code>index.html</code>: Mengarah ke halaman Beranda (utama).</li>
                                        <li><code>about.html</code>: Mengarah ke halaman Tentang Kami.</li>
                                        <li><code>contact.html</code>: Mengarah ke halaman informasi Kontak.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 2. Link Eksternal -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 20px; margin-bottom: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                                <h3 style="font-size: 16px; font-weight: bold; margin-top: 0; margin-bottom: 10px; color: #0891b2; display: flex; align-items: center; gap: 8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>
                                    Link Eksternal
                                </h3>
                                <p style="margin-bottom: 15px; color: #4b5563;">Digunakan untuk mengarahkan pengguna ke halaman di luar situs web (misalnya ke website lain).</p>
                                
                                <h4 class="component-label">Contoh Kode:</h4>
                                <div class="ide-mockup" style="margin: 10px 0 15px 0;">
                                    <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://www.google.com"</span> <span class="syntax-attr">target</span>=<span class="syntax-string">"_blank"</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"noopener noreferrer"</span><span class="syntax-tag">&gt;</span>Google<span class="syntax-tag">&lt;/a&gt;</span>
                                    </div>
                                </div>
                                
                                <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 6px; padding: 12px 15px;">
                                    <strong style="font-size: 13px; color: #374151; display: block; margin-bottom: 6px;">Penjelasan:</strong>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 13px; color: #4b5563; line-height: 1.5;">
                                        <li><code>href</code>: Menentukan URL tujuan eksternal (menggunakan protokol lengkap <code>https://</code>).</li>
                                        <li><code>target="_blank"</code>: Membuka tautan di tab atau jendela baru.</li>
                                        <li><code>rel="noopener noreferrer"</code>: Meningkatkan keamanan dengan mencegah akses ke halaman asal dari halaman baru.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Kotak Penamaan File -->
                            <div style="background-color: #fffbeb; border: 1px solid #fef3c7; border-left: 4px solid #d97706; border-radius: 8px; padding: 18px; margin: 25px 0;">
                                <h4 style="margin-top: 0; margin-bottom: 8px; color: #b45309; font-weight: bold; display: flex; align-items: center; gap: 8px; font-size: 15px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M12 17h.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
                                    Aturan Penting Penamaan File Website
                                </h4>
                                <p style="margin: 0 0 12px 0; font-size: 13.5px; color: #78350f; line-height: 1.5;">
                                    Agar link dapat bekerja dengan baik dan file mudah dikelola, penamaan file dalam website perlu diperhatikan dengan benar. Gunakan <strong>huruf kecil semua</strong>, <strong>jangan gunakan spasi</strong>, serta <strong>hindari karakter non-alfabet</strong>.
                                </p>
                                <div style="display: flex; flex-wrap: wrap; gap: 15px; font-size: 13px;">
                                    <span style="color: #16a34a; font-weight: 600; display: flex; align-items: center; gap: 5px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                        Benar: <code style="background: rgba(22, 163, 74, 0.08); padding: 2px 6px; border-radius: 4px; border: 1px solid rgba(22, 163, 74, 0.2); font-weight: 500; font-family: monospace;">about.html</code>
                                    </span>
                                    <span style="color: #dc2626; font-weight: 600; display: flex; align-items: center; gap: 5px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                        Salah: <code style="background: rgba(220, 38, 38, 0.08); padding: 2px 6px; border-radius: 4px; border: 1px solid rgba(220, 38, 38, 0.2); font-weight: 500; font-family: monospace;">About Kami.html</code>
                                    </span>
                                </div>
                            </div>

                            <!-- 3. Link dalam Satu Halaman -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 20px; margin-bottom: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                                <h3 style="font-size: 16px; font-weight: bold; margin-top: 0; margin-bottom: 10px; color: #0891b2; display: flex; align-items: center; gap: 8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19l4 -4" /><path d="M19 5v14H5V5h14M19 5l-4 4" /></svg>
                                    Link dalam Satu Halaman (Anchor Link)
                                </h3>
                                <p style="margin-bottom: 15px; color: #4b5563;">Link juga dapat digunakan untuk berpindah ke bagian tertentu dalam halaman yang sama menggunakan atribut <code>id</code>.</p>
                                
                                <h4 class="component-label">Contoh Kode:</h4>
                                <div class="ide-mockup" style="margin: 10px 0 15px 0;">
                                    <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"#pantai"</span><span class="syntax-tag">&gt;</span>Menuju bagian pantai<span class="syntax-tag">&lt;/a&gt;</span><br>
                                        <span class="syntax-tag">&lt;h2</span> <span class="syntax-attr">id</span>=<span class="syntax-string">"pantai"</span><span class="syntax-tag">&gt;</span>Pantai Parangtritis<span class="syntax-tag">&lt;/h2&gt;</span><br>
                                        <span class="syntax-tag">&lt;p&gt;</span>pantai ini terkenal dengan pemandangan matahari terbenam.<span class="syntax-tag">&lt;/p&gt;</span>
                                    </div>
                                </div>
                                
                                <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 6px; padding: 12px 15px;">
                                    <strong style="font-size: 13px; color: #374151; display: block; margin-bottom: 6px;">Penjelasan:</strong>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 13px; color: #4b5563; line-height: 1.5;">
                                        <li><code>href="#pantai"</code>: Mengarahkan ke elemen dengan <code>id="pantai"</code>.</li>
                                        <li><code>id</code>: Atribut unik untuk marking elemen tujuan (jangkar).</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 4. Link untuk Mengunduh File -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 20px; margin-bottom: 0; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                                <h3 style="font-size: 16px; font-weight: bold; margin-top: 0; margin-bottom: 10px; color: #0891b2; display: flex; align-items: center; gap: 8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4v12" /></svg>
                                    Link untuk Mengunduh File
                                </h3>
                                <p style="margin-bottom: 15px; color: #4b5563;">HTML menyediakan fitur untuk mengunduh file secara langsung melalui link dengan menggunakan atribut <code>download</code>.</p>
                                
                                <h4 class="component-label">Contoh Kode:</h4>
                                <div class="ide-mockup" style="margin: 10px 0 15px 0;">
                                    <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"brosur-pariwisata.pdf"</span> <span class="syntax-attr">download</span><span class="syntax-tag">&gt;</span>brosur-pariwisata<span class="syntax-tag">&lt;/a&gt;</span>
                                    </div>
                                </div>
                                
                                <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 6px; padding: 12px 15px;">
                                    <strong style="font-size: 13px; color: #374151; display: block; margin-bottom: 6px;">Penjelasan:</strong>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 13px; color: #4b5563; line-height: 1.5;">
                                        <li><code>href</code>: Lokasi file yang akan diunduh.</li>
                                        <li><code>download</code>: Menginstruksikan browser untuk langsung mengunduh file alih-alih membukanya di browser.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="links-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Setelah mempelajari berbagai jenis dan fungsi link dalam HTML, berikut merupakan contoh penggunaan HTML link beserta hasil tampilannya pada halaman web.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan HTML Link (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> link-example.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Contoh HTML Link<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;h2&gt;</span>Menu Navigasi<span class="syntax-tag">&lt;/h2&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"index.html"</span><span class="syntax-tag">&gt;</span>Beranda<span class="syntax-tag">&lt;/a&gt;</span> | </span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">    <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"profil.html"</span><span class="syntax-tag">&gt;</span>Profil<span class="syntax-tag">&lt;/a&gt;</span> | </span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">    <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"kontak.html"</span><span class="syntax-tag">&gt;</span>Kontak<span class="syntax-tag">&lt;/a&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">&lt;hr&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">    <span class="syntax-tag">&lt;p&gt;</span>Link: <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://google.com"</span> <span class="syntax-attr">target</span>=<span class="syntax-string">"_blank"</span><span class="syntax-tag">&gt;</span>Google<span class="syntax-tag">&lt;/a&gt;</span><span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-tag">&lt;p&gt;</span>Unduh: <span class="syntax-tag">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"brosur.pdf"</span> <span class="syntax-attr">download</span><span class="syntax-tag">&gt;</span>Brosur<span class="syntax-tag">&lt;/a&gt;</span><span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh HTML Link
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/link-example.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; font-size: 14px; padding: 25px; color: #333; line-height: 1.5;">
                                            <h2 style="font-size: 1.5em; font-weight: bold; margin-top: 0; margin-bottom: 0.83em; text-align: left; color: #000;">Menu Navigasi</h2>
                                            
                                            <div style="margin-bottom: 15px;">
                                                <span style="color: #0000ee; text-decoration: underline; cursor: pointer;">Beranda</span> | 
                                                <span style="color: #0000ee; text-decoration: underline; cursor: pointer;">Profil</span> | 
                                                <span style="color: #0000ee; text-decoration: underline; cursor: pointer;">Kontak</span>
                                            </div>
                                            
                                            <hr style="border: 0; border-top: 1px solid #ccc; margin: 15px 0;">
                                            
                                            <p style="margin: 10px 0;">
                                                Link: <span style="color: #0000ee; text-decoration: underline; cursor: pointer;">Google</span>
                                            </p>
                                            
                                            <p style="margin: 10px 0;">
                                                Unduh: <span style="color: #0000ee; text-decoration: underline; cursor: pointer;">Brosur</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="links-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/html_links.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 7: HTML Formulir -->
        <section id="materi-content-html-forms" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">HTML Formulir</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="forms-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="forms-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="forms-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="forms-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>Form (formulir) merupakan bagian dari halaman web yang digunakan untuk menerima input atau data dari pengguna. Data yang dimasukkan tersebut kemudian dapat diproses menggunakan bahasa pemrograman web, baik di sisi server (seperti PHP dan JSP) maupun di sisi client (seperti JavaScript).</p>
                            <p>Form biasanya digunakan untuk berbagai kebutuhan seperti login, transaksi penjualan, pengumpulan informasi, pemberian saran atau umpan balik, serta layanan pemesanan atau penawaran barang dan jasa secara online.</p>
                        </div>

                        <!-- Struktur Dasar -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Struktur Dasar Form</h2>
                            <p>Form dalam HTML memiliki struktur dasar yang digunakan untuk mengatur proses pengisian dan pengiriman data dari pengguna ke server. Struktur ini didefinisikan menggunakan tag <code>&lt;form&gt;</code>.</p>
                            
                            <h4 class="component-label">Struktur dasar Form:</h4>
                            <div class="ide-mockup" style="margin: 10px 0 20px 0;">
                                <div class="ide-code" style="padding: 12px 18px; font-size: 13.5px; line-height: 1.4;">
                                    <span class="syntax-tag">&lt;form</span> <span class="syntax-attr">action</span>=<span class="syntax-string">"proses.php"</span> <span class="syntax-attr">method</span>=<span class="syntax-string">"post"</span><span class="syntax-tag">&gt;</span><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-comment">&lt;!-- Elemen input ditempatkan di sini --&gt;</span><br>
                                    <span class="syntax-tag">&lt;/form&gt;</span>
                                </div>
                            </div>

                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 15px; margin-top: 15px;">
                                <h4 style="margin-top: 0; margin-bottom: 10px; font-weight: bold; color: #444;">Penjelasan Atribut:</h4>
                                <ul style="list-style-type: none; padding-left: 0; margin: 0;">
                                    <li style="margin-bottom: 8px; display: flex; align-items: start;">
                                        <code style="background-color: #f5f5f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; margin-right: 10px; min-width: 80px; text-align: center; border: 1px solid #e5e5e4;">action</code>
                                        <span style="font-size: 14px; color: #555;">Menentukan tujuan pengiriman data (lokasi file server untuk memproses data).</span>
                                    </li>
                                    <li style="display: flex; align-items: start;">
                                        <code style="background-color: #f5f5f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; margin-right: 10px; min-width: 80px; text-align: center; border: 1px solid #e5e5e4;">method</code>
                                        <span style="font-size: 14px; color: #555;">Menentukan metode pengiriman data (seperti <code>get</code> atau <code>post</code>).</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Input pada Form -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Input pada Form</h2>
                            <p>Elemen input digunakan untuk menangkap berbagai jenis data dari pengguna. Elemen <code>&lt;input&gt;</code> mendukung berbagai macam tipe (<code>type</code>) sesuai dengan kebutuhan formulir.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Tipe (Type)</th>
                                        <th>Fungsi / Kegunaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">text</span></td>
                                        <td>Input teks standar satu baris (misalnya untuk Nama, Username).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">password</span></td>
                                        <td>Input kata sandi (karakter disamarkan demi keamanan).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">radio</span></td>
                                        <td>Pilihan satu opsi dari beberapa pilihan yang tersedia (misalnya Jenis Kelamin).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">checkbox</span></td>
                                        <td>Pilihan berganda atau memilih lebih dari satu opsi (misalnya Hobi).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">submit</span></td>
                                        <td>Tombol untuk mengirimkan data form ke server.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">reset</span></td>
                                        <td>Tombol untuk mereset/mengosongkan seluruh input form kembali ke awal.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="forms-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh kode implementasi HTML formulir beserta hasil tampilannya pada halaman web.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Penggunaan HTML Formulir (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> form-example.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;title&gt;</span>Contoh HTML Form<span class="syntax-tag">&lt;/title&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;h2&gt;</span>Formulir Biodata<span class="syntax-tag">&lt;/h2&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;form&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">        Nama :<span class="syntax-tag">&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"text"</span><span class="syntax-tag">&gt;&lt;br&gt;&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">        Jenis Kelamin :<span class="syntax-tag">&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"radio"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"jk"</span><span class="syntax-tag">&gt;</span> Laki-laki</span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"radio"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"jk"</span><span class="syntax-tag">&gt;</span> Perempuan</span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">        <span class="syntax-tag">&lt;br&gt;&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">        Hobi :<span class="syntax-tag">&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"checkbox"</span><span class="syntax-tag">&gt;</span> Musik</span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"checkbox"</span><span class="syntax-tag">&gt;</span> Game</span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content">        <span class="syntax-tag">&lt;br&gt;&lt;br&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content">        <span class="syntax-tag">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"submit"</span> <span class="syntax-attr">value</span>=<span class="syntax-string">"Kirim"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">20</span><span class="ide-content">    <span class="syntax-tag">&lt;/form&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">21</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">22</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh HTML Form
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/form-example.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; font-size: 14px; padding: 25px; color: #333; line-height: 1.5;">
                                            <h2 style="font-size: 1.5em; font-weight: bold; margin-top: 0; margin-bottom: 0.83em; text-align: left; color: #000;">Formulir Biodata</h2>
                                            
                                            <form onsubmit="event.preventDefault();" style="text-align: left;">
                                                Nama :<br>
                                                <input type="text" style="border: 1px solid #ccc; padding: 4px 8px; border-radius: 3px; width: 180px; margin-top: 4px;"><br><br>
                                                
                                                Jenis Kelamin :<br>
                                                <div style="margin-top: 4px;">
                                                    <input type="radio" name="jk" id="jk-l"> <label for="jk-l" style="margin-right: 15px; cursor: pointer;">Laki-laki</label>
                                                    <input type="radio" name="jk" id="jk-p"> <label for="jk-p" style="cursor: pointer;">Perempuan</label>
                                                </div>
                                                <br>
                                                
                                                Hobi :<br>
                                                <div style="margin-top: 4px;">
                                                    <input type="checkbox" id="hobi-m"> <label for="hobi-m" style="margin-right: 15px; cursor: pointer;">Musik</label>
                                                    <input type="checkbox" id="hobi-g"> <label for="hobi-g" style="cursor: pointer;">Game</label>
                                                </div>
                                                <br>
                                                
                                                <input type="submit" value="Kirim" style="padding: 4px 12px; border: 1px solid #767676; background-color: #f0f0f0; border-radius: 3px; cursor: pointer;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="forms-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/html_form.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 8: Pengenalan CSS -->
        <section id="materi-content-css-intro" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">Pengenalan CSS</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="css-intro-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="css-intro-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="css-intro-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="css-intro-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p>Cascading Style Sheet atau lebih sering disebut dengan istilah <strong>CSS</strong> merupakan salah satu dokumen website yang bertujuan untuk mengatur gaya (style) tampilan website. CSS tidak hanya digunakan untuk mempercantik tampilan website, tetapi juga membantu mengatur tata letak dan format halaman web agar lebih terstruktur.</p>
                        </div>

                        <!-- Fungsi CSS -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Fungsi Cascading Style Sheet</h2>
                            <p>Berikut adalah fungsi utama dari penggunaan CSS dalam pengembangan website:</p>
                            
                            <ul style="list-style-type: none; padding-left: 0; margin: 15px 0;">
                                <li style="margin-bottom: 12px; display: flex; align-items: start;">
                                    <span style="color: #2563eb; margin-right: 12px; font-size: 16px;"><i class="fas fa-font"></i></span>
                                    <span style="font-size: 14.5px; color: #333;">Mengubah jenis font, ukuran font, warna, serta format font pada teks halaman web.</span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; align-items: start;">
                                    <span style="color: #2563eb; margin-right: 12px; font-size: 16px;"><i class="fas fa-layer-group"></i></span>
                                    <span style="font-size: 14.5px; color: #333;">Mengatur ukuran layout, lebar, tinggi, warna latar belakang elemen, serta mengubah tampilan formulir agar lebih modern.</span>
                                </li>
                                <li style="display: flex; align-items: start;">
                                    <span style="color: #2563eb; margin-right: 12px; font-size: 16px;"><i class="fas fa-palette"></i></span>
                                    <span style="font-size: 14.5px; color: #333;">Membuat antarmuka dan visualisasi website menjadi jauh lebih menarik, interaktif, dan profesional.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Metode CSS -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Metode CSS</h2>
                            <p>Terdapat tiga metode utama untuk menghubungkan atau menerapkan aturan CSS ke dalam dokumen HTML:</p>

                            <!-- CSS Inline -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 18px; margin-bottom: 15px;">
                                <h4 style="margin-top: 0; margin-bottom: 8px; font-weight: bold; color: #1e3a8a; font-size: 15px;">CSS Inline</h4>
                                <p style="margin-bottom: 10px; font-size: 14px; color: #555;">Diterapkan langsung ke elemen HTML spesifik menggunakan atribut <code>style</code>.</p>
                                <div class="ide-mockup" style="margin: 5px 0 0 0;">
                                    <div class="ide-code" style="padding: 10px 15px; font-size: 13px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;p</span> <span class="syntax-attr">style</span>=<span class="syntax-string">"color: blue;"</span><span class="syntax-tag">&gt;</span>ini adalah teks berwarna biru.<span class="syntax-tag">&lt;/p&gt;</span>
                                    </div>
                                </div>
                                <p style="margin-top: 8px; margin-bottom: 0; font-size: 13px; color: #666; font-style: italic;">Penjelasan: Atribut style digunakan langsung untuk mengatur properti color dengan nilai blue.</p>
                            </div>

                            <!-- CSS Internal -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 18px; margin-bottom: 15px;">
                                <h4 style="margin-top: 0; margin-bottom: 8px; font-weight: bold; color: #1e3a8a; font-size: 15px;">CSS Internal</h4>
                                <p style="margin-bottom: 10px; font-size: 14px; color: #555;">Metode pengelolaan gaya yang ditulis langsung dalam dokumen HTML di dalam tag <code>&lt;style&gt;</code>, yang diletakkan di dalam elemen <code>&lt;head&gt;</code>.</p>
                                <div class="ide-mockup" style="margin: 5px 0 0 0;">
                                    <div class="ide-code" style="padding: 10px 15px; font-size: 13px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;head&gt;</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-tag">&lt;title&gt;</span>Judul Halaman<span class="syntax-tag">&lt;/title&gt;</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-tag">&lt;style&gt;</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-tag">p</span> {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-attr">color</span>: <span class="syntax-string">red</span>;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="syntax-tag">&lt;/style&gt;</span><br>
                                        <span class="syntax-tag">&lt;/head&gt;</span>
                                    </div>
                                </div>
                            </div>

                            <!-- CSS Eksternal -->
                            <div style="background-color: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; padding: 18px; margin-bottom: 0;">
                                <h4 style="margin-top: 0; margin-bottom: 8px; font-weight: bold; color: #1e3a8a; font-size: 15px;">CSS Eksternal</h4>
                                <p style="margin-bottom: 10px; font-size: 14px; color: #555;">CSS yang ditempatkan pada file tersendiri, biasanya menggunakan ekstensi <code>.css</code>, dan dihubungkan ke HTML menggunakan tag <code>&lt;link&gt;</code> di dalam elemen <code>&lt;head&gt;</code>.</p>
                                <div class="ide-mockup" style="margin: 5px 0 0 0;">
                                    <div class="ide-code" style="padding: 10px 15px; font-size: 13px; line-height: 1.4;">
                                        <span class="syntax-tag">&lt;link</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"stylesheet"</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"styles.css"</span><span class="syntax-tag">&gt;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="css-intro-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh penggunaan CSS internal untuk mengubah warna latar belakang halaman (background-color) menjadi biru muda (lightblue) dan warna teks judul (color) menjadi biru tua (navy).</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Implementasi CSS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">        <span class="syntax-tag">body</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content">            <span class="syntax-attr">background-color</span>: <span class="syntax-string">lightblue</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">        <span class="syntax-tag">h1</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">            <span class="syntax-attr">color</span>: <span class="syntax-string">navy</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">&lt;/style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">    <span class="syntax-tag">&lt;h1&gt;</span>Belajar CSS<span class="syntax-tag">&lt;/h1&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh CSS
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/css-intro.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; background-color: lightblue; color: navy; min-height: 200px; transition: background-color 0.3s ease;">
                                            <h1 style="color: navy; font-weight: bold; font-size: 24px; margin-top: 0; text-align: left;">Belajar CSS</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="css-intro-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/pengenalan_css.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 9: CSS Selektor dan Properti -->
        <section id="materi-content-css-selector" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">CSS Selektor dan Properti</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="css-selector-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="css-selector-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="css-selector-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="css-selector-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p>Bagian-bagian utama dari sebuah CSS dalam pengaturan desain halaman web terdiri dari dua hal penting: <strong>selektor (selector)</strong> dan <strong>properti (property)</strong>.</p>
                        </div>

                        <!-- Selector -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Selector</h2>
                            <p>Selector merupakan cara untuk memilih elemen HTML yang akan diberi gaya, baik berdasarkan tag, ID, atau class. Sementara itu, properti adalah atribut yang digunakan untuk mendefinisikan gaya visual pada elemen HTML yang dipilih, seperti warna, ukuran font, margin, dan padding.</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Selector</th>
                                        <th style="width: 25%;">Sintaks</th>
                                        <th>Fungsi</th>
                                        <th style="width: 35%;">Penggunaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Tag</strong></td>
                                        <td>
                                            <code>tag {<br>
                                            &nbsp;&nbsp;properti: nilai;<br>
                                            }</code>
                                        </td>
                                        <td>Menargetkan semua elemen dengan nama tag tertentu.</td>
                                        <td>
                                            <code>p {<br>
                                            &nbsp;&nbsp;color: blue;<br>
                                            &nbsp;&nbsp;font-size: 20px;<br>
                                            }</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>ID</strong></td>
                                        <td>
                                            <code>#id {<br>
                                            &nbsp;&nbsp;properti: nilai;<br>
                                            }</code>
                                        </td>
                                        <td>Menargetkan satu elemen unik berdasarkan atribut ID.</td>
                                        <td>
                                            <code>#judul-utama {<br>
                                            &nbsp;&nbsp;color: green;<br>
                                            &nbsp;&nbsp;text-align: center;<br>
                                            }</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Class</strong></td>
                                        <td>
                                            <code>.class {<br>
                                            &nbsp;&nbsp;properti: nilai;<br>
                                            }</code>
                                        </td>
                                        <td>Menargetkan semua elemen yang memiliki atribut class tertentu.</td>
                                        <td>
                                            <code>.highlight {<br>
                                            &nbsp;&nbsp;color: orange;<br>
                                            &nbsp;&nbsp;font-weight: bold;<br>
                                            }</code>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Properti CSS -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Properti CSS</h2>
                            <p>Properti CSS digunakan untuk melakukan pengaturan gaya visual dan tata letak pada elemen HTML. Berikut adalah properti CSS yang sering digunakan:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Properti</th>
                                        <th>Deskripsi / Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">color</span></td>
                                        <td>Mengatur warna teks atau font pada elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">background-color</span></td>
                                        <td>Mengatur warna latar belakang elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">font-size</span></td>
                                        <td>Menentukan ukuran teks atau font pada elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">font-family</span></td>
                                        <td>Menentukan jenis font yang digunakan untuk teks.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">font-weight</span></td>
                                        <td>Mengatur ketebalan font atau teks (seperti bold).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">line-height</span></td>
                                        <td>Mengatur tinggi garis antara baris teks.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">margin</span></td>
                                        <td>Mengatur jarak luar (spasi) antara elemen dan elemen lainnya.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">padding</span></td>
                                        <td>Mengatur jarak dalam (spasi) antara konten dan batas elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">border</span></td>
                                        <td>Mengatur batas atau garis yang mengelilingi elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">width</span></td>
                                        <td>Mengatur lebar elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">height</span></td>
                                        <td>Mengatur tinggi elemen.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">display</span></td>
                                        <td>Menentukan bagaimana elemen akan ditampilkan dalam tata letak halaman (block, inline, flex, grid).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">position</span></td>
                                        <td>Menentukan jenis penempatan elemen pada halaman (static, relative, absolute, fixed).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">z-index</span></td>
                                        <td>Mengatur urutan lapisan (stacking order) elemen yang tumpang tindih.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">text-align</span></td>
                                        <td>Menentukan perataan teks dalam elemen (left, center, right, justify).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">overflow</span></td>
                                        <td>Menentukan cara konten yang meluap dari batas elemen ditampilkan.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">box-shadow</span></td>
                                        <td>Menambahkan efek bayangan pada elemen.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="css-selector-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh kode implementasi CSS Selector & Properties menggunakan tag selector <code>h1</code> (untuk mengetengahkan dan mewarnai teks biru) dan class selector <code>.paragraf</code> (untuk mengatur ukuran font 20px dan warna hijau).</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode CSS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">        <span class="syntax-tag">h1</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content">            <span class="syntax-attr">color</span>: <span class="syntax-string">blue</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">            <span class="syntax-attr">text-align</span>: <span class="syntax-string">center</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">        <span class="syntax-tag">.paragraf</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">            <span class="syntax-attr">font-size</span>: <span class="syntax-string">20px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">            <span class="syntax-attr">color</span>: <span class="syntax-string">green</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-tag">&lt;/style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">    <span class="syntax-tag">&lt;h1&gt;</span>Belajar CSS<span class="syntax-tag">&lt;/h1&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">    <span class="syntax-tag">&lt;p</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"paragraf"</span><span class="syntax-tag">&gt;</span>Ini adalah paragraf.<span class="syntax-tag">&lt;/p&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh CSS
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/css-selector.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 200px; text-align: left; background-color: #fff; transition: background-color 0.3s ease;">
                                            <h1 style="color: blue; text-align: center; font-weight: bold; font-size: 24px; margin-top: 0; margin-bottom: 15px;">Belajar CSS</h1>
                                            <p style="font-size: 20px; color: green; margin: 10px 0;">Ini adalah paragraf.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="css-selector-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/css_selektor.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 10: CSS Box Model -->
        <section id="materi-content-css-box-model" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">CSS Box Model</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="css-box-model-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="css-box-model-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="css-box-model-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="css-box-model-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p><strong>CSS Box Model</strong> adalah konsep dasar dalam CSS untuk mengatur tata letak pada halaman web. Box model memungkinkan pengembang untuk membuat border (garis batas) di sekeliling elemen serta mengatur spasi antar elemen yang saling berhubungan.</p>
                        </div>

                        <!-- Struktur & Penjelasan Box Model -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Bagian-Bagian CSS Box Model</h2>
                            <p>CSS Box Model terdiri dari beberapa bagian yang saling berkaitan dalam membentuk tampilan dimensi akhir dari suatu elemen:</p>
                            
                            <div style="display: flex; flex-direction: column; gap: 20px; margin-top: 20px;">
                                <!-- Atas: Deskripsi Berwarna -->
                                <div style="display: flex; flex-direction: column; gap: 12px;">
                                    <div style="background-color: #fffbeb; border-left: 5px solid #d97706; border-radius: 4px; padding: 12px 15px;">
                                        <h4 style="margin: 0 0 4px 0; color: #b45309; font-weight: bold; font-size: 14.5px;">Margin</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.4;">Daerah paling luar yang membatasi elemen dengan elemen HTML lainnya di sekitarnya. Bagian ini bersifat transparan (tidak memiliki warna latar belakang).</p>
                                    </div>
                                    <div style="background-color: #fef2f2; border-left: 5px solid #dc2626; border-radius: 4px; padding: 12px 15px;">
                                        <h4 style="margin: 0 0 4px 0; color: #b91c1c; font-weight: bold; font-size: 14.5px;">Border</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.4;">Garis batas yang mengelilingi padding dan konten. Garis ini dapat diatur ketebalan, gaya garis (solid, dashed, dll.), dan warnanya.</p>
                                    </div>
                                    <div style="background-color: #f0fdf4; border-left: 5px solid #16a34a; border-radius: 4px; padding: 12px 15px;">
                                        <h4 style="margin: 0 0 4px 0; color: #15803d; font-weight: bold; font-size: 14.5px;">Padding</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.4;">Area kosong di dalam border yang mengelilingi konten utama. Warna latar belakang padding secara otomatis mengikuti warna latar belakang (background) dari elemen tersebut.</p>
                                    </div>
                                    <div style="background-color: #eff6ff; border-left: 5px solid #2563eb; border-radius: 4px; padding: 12px 15px;">
                                        <h4 style="margin: 0 0 4px 0; color: #1d4ed8; font-weight: bold; font-size: 14.5px;">Content</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.4;">Isi utama dari elemen (box) tersebut, yang dapat berupa teks, gambar, video, atau elemen HTML anak lainnya.</p>
                                    </div>
                                </div>

                                <!-- Bawah: Gambar Ilustrasi -->
                                <div style="text-align: center;">
                                    <img src="Assets/img/boxmodel.png" alt="Ilustrasi CSS Box Model" style="max-width: 100%; border-radius: 8px; border: 1px solid #e7e5e4; padding: 10px; background-color: white; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="css-box-model-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh implementasi CSS Box Model pada sebuah elemen <code>&lt;div&gt;</code> dengan lebar konten 300px, padding 20px, border setebal 5px solid berwarna biru, margin luar 30px, dan warna latar belakang abu-abu muda.</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode CSS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">        <span class="syntax-tag">.box</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content">            <span class="syntax-attr">width</span>: <span class="syntax-string">300px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">            <span class="syntax-attr">padding</span>: <span class="syntax-string">20px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">            <span class="syntax-attr">border</span>: <span class="syntax-string">5px solid blue</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">            <span class="syntax-attr">margin</span>: <span class="syntax-string">30px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">            <span class="syntax-attr">background-color</span>: <span class="syntax-string">lightgray</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">    <span class="syntax-tag">&lt;/style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">    <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"box"</span><span class="syntax-tag">&gt;</span>Belajar CSS Box Model<span class="syntax-tag">&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh CSS
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/css-boxmodel.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 15px; color: #333; min-height: 220px; text-align: left; background-color: #fff; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s ease;">
                                            <div style="width: 100%; max-width: 300px; padding: 20px; border: 5px solid blue; margin: 30px; background-color: lightgray; font-size: 15px; font-weight: bold; box-sizing: border-box; text-align: center;">
                                                Belajar CSS Box Model
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="css-box-model-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/css_boxmodel.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 11: CSS Flexbox -->
        <section id="materi-content-css-flexbox" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">CSS Flexbox</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="css-flexbox-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="css-flexbox-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="css-flexbox-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="css-flexbox-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p><strong>CSS Flexbox (Flexible Box Layout)</strong> dirancang untuk memberikan fleksibilitas dan efisiensi dalam menyusun tata letak elemen, menangani desain halaman yang kompleks, serta menjadikannya responsif. Dengan Flexbox, tata letak elemen dapat diatur dengan mudah secara dinamis.</p>
                        </div>

                        <!-- Flex Container -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Elemen Flexbox Container</h2>
                            <p>Flex container adalah elemen pembungkus (parent) yang menggunakan properti <code>display: flex;</code> atau <code>display: inline-flex;</code> untuk mengaktifkan tata letak fleksibel bagi elemen-elemen anak (flex items) di dalamnya. Berikut adalah properti yang digunakan pada flex container:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Properti</th>
                                        <th>Deskripsi / Fungsi</th>
                                        <th style="width: 30%;">Contoh Penggunaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">display</span></td>
                                        <td>Mengaktifkan tata letak flexbox pada elemen pembungkus.</td>
                                        <td><code>display: flex;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">flex-direction</span></td>
                                        <td>Menentukan arah susunan flex items (searah baris atau kolom).</td>
                                        <td><code>flex-direction: row;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">justify-content</span></td>
                                        <td>Mengatur posisi flex items secara horizontal (axis utama).</td>
                                        <td><code>justify-content: center;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align-items</span></td>
                                        <td>Mengatur posisi flex items secara vertikal (cross axis).</td>
                                        <td><code>align-items: stretch;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align-content</span></td>
                                        <td>Mengatur perataan baris flex items secara vertikal pada multi-baris.</td>
                                        <td><code>align-content: space-between;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">flex-wrap</span></td>
                                        <td>Mengatur apakah flex items akan turun ke baris baru jika ruang tidak cukup.</td>
                                        <td><code>flex-wrap: wrap;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">gap</span></td>
                                        <td>Mengatur jarak atau celah di antara elemen-elemen flex items.</td>
                                        <td><code>gap: 10px;</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Flex Items -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Elemen Flex Items</h2>
                            <p>Flex item adalah semua elemen anak langsung yang berada di dalam sebuah flex container. Properti berikut dapat ditambahkan secara khusus pada masing-masing flex item untuk mengontrol perilakunya:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Properti</th>
                                        <th>Deskripsi / Fungsi</th>
                                        <th style="width: 30%;">Contoh Penggunaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">flex</span></td>
                                        <td>Singkatan praktis untuk mengatur flex-grow, flex-shrink, dan flex-basis sekaligus.</td>
                                        <td><code>flex: 1;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">flex-grow</span></td>
                                        <td>Menentukan seberapa banyak elemen akan tumbuh relatif terhadap item lainnya.</td>
                                        <td><code>flex-grow: 2;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">flex-shrink</span></td>
                                        <td>Menentukan seberapa banyak elemen akan menyusut jika ruang container kurang.</td>
                                        <td><code>flex-shrink: 0;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">flex-basis</span></td>
                                        <td>Menentukan ukuran awal elemen sebelum ruang sisa didistribusikan.</td>
                                        <td><code>flex-basis: 100px;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">align-self</span></td>
                                        <td>Mengatur perataan vertikal elemen tertentu secara mandiri (mengabaikan align-items parent).</td>
                                        <td><code>align-self: center;</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">order</span></td>
                                        <td>Mengubah urutan kemunculan elemen secara visual di dalam container.</td>
                                        <td><code>order: 2;</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="css-flexbox-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh implementasi layout Flexbox sederhana dengan container pembungkus yang memiliki <code>display: flex</code> dan <code>gap: 10px</code>, menyejajarkan tiga elemen kotak secara horizontal:</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode CSS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content">    <span class="syntax-tag">&lt;style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">        <span class="syntax-tag">.container</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content">            <span class="syntax-attr">display</span>: <span class="syntax-string">flex</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">            <span class="syntax-attr">gap</span>: <span class="syntax-string">10px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">        <span class="syntax-tag">.box</span> {</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">            <span class="syntax-attr">background-color</span>: <span class="syntax-string">skyblue</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">            <span class="syntax-attr">padding</span>: <span class="syntax-string">20px</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">        }</span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-tag">&lt;/style&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;/head&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">    <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"container"</span><span class="syntax-tag">&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">        <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"box"</span><span class="syntax-tag">&gt;</span>Box 1<span class="syntax-tag">&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content">        <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"box"</span><span class="syntax-tag">&gt;</span>Box 2<span class="syntax-tag">&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content">        <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"box"</span><span class="syntax-tag">&gt;</span>Box 3<span class="syntax-tag">&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">20</span><span class="ide-content">    <span class="syntax-tag">&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">21</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">22</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh CSS
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/css-flexbox.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 220px; text-align: left; background-color: #fff; transition: background-color 0.3s ease;">
                                            <div style="display: flex; gap: 10px; background-color: #f8fafc; padding: 15px; border-radius: 6px; border: 1px dashed #cbd5e1;">
                                                <div style="background-color: skyblue; padding: 20px; border-radius: 4px; font-weight: bold; color: #334155; text-align: center; min-width: 60px;">Box 1</div>
                                                <div style="background-color: skyblue; padding: 20px; border-radius: 4px; font-weight: bold; color: #334155; text-align: center; min-width: 60px;">Box 2</div>
                                                <div style="background-color: skyblue; padding: 20px; border-radius: 4px; font-weight: bold; color: #334155; text-align: center; min-width: 60px;">Box 3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="css-flexbox-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/css_flexbox.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 12: Pengenalan JavaScript -->
        <section id="materi-content-js-intro" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">Pengenalan JavaScript</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="js-intro-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="js-intro-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="js-intro-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="js-intro-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p><strong>JavaScript</strong> adalah bahasa pemrograman interaktif yang digunakan untuk menghidupkan halaman web. Bahasa ini memberikan kemampuan tambahan terhadap HTML dengan mengeksekusi instruksi di sisi pengguna (*client-side*), artinya kode diproses langsung oleh peramban (browser) milik pengguna, bukan oleh server web.</p>
                            <p>Dengan JavaScript, website Anda dapat memiliki fungsionalitas modern seperti validasi form secara langsung, animasi antarmuka, dan tombol-tombol interaktif yang merespons tindakan klik atau input pengguna secara nyata (real-time).</p>
                        </div>

                        <!-- Aturan Penulisan -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Aturan Penulisan Kode JavaScript</h2>
                            <p>Untuk menulis kode JavaScript pada dokumen web, terdapat beberapa aturan dasar penting yang harus dipahami:</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div style="background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px; padding: 18px; display: flex; gap: 15px; align-items: flex-start;">
                                    <div style="background-color: #fef9c3; border-radius: 6px; padding: 10px; display: flex; align-items: center; justify-content: center; color: #ca8a04;">
                                        <i class="fas fa-code-branch" style="font-size: 18px;"></i>
                                    </div>
                                    <div style="text-align: left;">
                                        <h4 style="margin: 0 0 6px 0; color: #854d0e; font-weight: bold; font-size: 15px; text-align: left;">Tag Script</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.45; text-align: left; text-indent: 0;">Kode JavaScript harus diletakkan di antara tag pembuka <code>&lt;script&gt;</code> dan tag penutup <code>&lt;/script&gt;</code>.</p>
                                    </div>
                                </div>
                                <div style="background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px; padding: 18px; display: flex; gap: 15px; align-items: flex-start;">
                                    <div style="background-color: #fef9c3; border-radius: 6px; padding: 10px; display: flex; align-items: center; justify-content: center; color: #ca8a04;">
                                        <i class="fas fa-text-height" style="font-size: 18px;"></i>
                                    </div>
                                    <div style="text-align: left;">
                                        <h4 style="margin: 0 0 6px 0; color: #854d0e; font-weight: bold; font-size: 15px; text-align: left;">Case Sensitive</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.45; text-align: left; text-indent: 0;">JavaScript <strong>membedakan huruf besar dan huruf kecil secara ketat</strong>. Sebagai contoh, variabel <code>nama</code>, <code>Nama</code>, dan <code>NAMA</code> <strong>dianggap sebagai tiga variabel yang sepenuhnya berbeda</strong>. Demikian juga dengan fungsi <code>pesan()</code> yang <strong>tidak bisa dipanggil</strong> menggunakan kata <code>Pesan()</code>.</p>
                                    </div>
                                </div>
                                <div style="background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px; padding: 18px; display: flex; gap: 15px; align-items: flex-start;">
                                    <div style="background-color: #fef9c3; border-radius: 6px; padding: 10px; display: flex; align-items: center; justify-content: center; color: #ca8a04;">
                                        <i class="fas fa-terminal" style="font-size: 18px;"></i>
                                    </div>
                                    <div style="text-align: left;">
                                        <h4 style="margin: 0 0 6px 0; color: #854d0e; font-weight: bold; font-size: 15px; text-align: left;">Pemisah Kode</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.45; text-align: left; text-indent: 0;">Setiap baris kode dipisahkan oleh baris baru atau dapat diakhiri secara eksplisit menggunakan tanda titik koma (<code>;</code>).</p>
                                    </div>
                                </div>
                                <div style="background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px; padding: 18px; display: flex; gap: 15px; align-items: flex-start;">
                                    <div style="background-color: #fef9c3; border-radius: 6px; padding: 10px; display: flex; align-items: center; justify-content: center; color: #ca8a04;">
                                        <i class="fas fa-comment-dots" style="font-size: 18px;"></i>
                                    </div>
                                    <div style="text-align: left;">
                                        <h4 style="margin: 0 0 6px 0; color: #854d0e; font-weight: bold; font-size: 15px; text-align: left;">Komentar Pendukung</h4>
                                        <p style="margin: 0; font-size: 13.5px; color: #6b7280; line-height: 1.45; text-align: left; text-indent: 0;">Komentar satu baris ditulis dengan <code>//</code>. Untuk komentar multi-baris diapit menggunakan format <code>/* komentar */</code>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="js-intro-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh penggunaan fungsi JavaScript interaktif <code>pesan()</code> yang dijalankan saat tombol (<code>button</code>) diklik oleh pengguna untuk menampilkan pesan alert:</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode HTML & JS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">    <span class="syntax-tag">&lt;button</span> <span class="syntax-attr">onclick</span>=<span class="syntax-string">"pesan()"</span><span class="syntax-tag">&gt;</span>Klik Saya<span class="syntax-tag">&lt;/button&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">function</span> <span class="syntax-attr">pesan</span>() {</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">        <span class="syntax-attr">alert</span>(<span class="syntax-string">"Hello JavaScript!"</span>);</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">    }</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">&lt;/script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh JavaScript
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/js-intro.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 220px; text-align: center; background-color: #fff; position: relative; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s ease;">
                                            <div>
                                                <button onclick="showJsIntroDemoAlert()" style="background-color: #f3f4f6; color: #111827; border: 1px solid #d1d5db; padding: 10px 20px; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 14px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">Klik Saya</button>
                                            </div>
                                            
                                            <!-- Simulasi Alert Popup -->
                                            <div id="js-intro-demo-alert" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); justify-content: center; align-items: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; z-index: 10;">
                                                <div style="background: white; border-radius: 8px; width: 80%; max-width: 250px; padding: 15px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: left;">
                                                    <p style="margin: 0 0 15px 0; font-size: 13px; color: #4b5563; text-indent: 0 !important;">Hello JavaScript!</p>
                                                    <div style="text-align: right;">
                                                        <button onclick="closeJsIntroDemoAlert()" style="background-color: #3b82f6; color: white; border: none; padding: 6px 20px; border-radius: 4px; font-size: 12px; font-weight: bold; cursor: pointer;">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="js-intro-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/js.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 13: JS Fungsi -->
        <section id="materi-content-js-functions" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">JavaScript Fungsi</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="js-functions-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="js-functions-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="js-functions-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="js-functions-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengertian -->
                        <div class="materi-intro-section">
                            <p><strong>Pengertian Function</strong></p>
                            <p>Function adalah sekumpulan kode yang digunakan untuk menjalankan tugas tertentu dan dapat digunakan kembali kapan saja. Dengan function, program menjadi lebih rapi dan mengurangi penulisan kode yang berulang.</p>
                        </div>

                        <!-- 1. Deklarasi Fungsi -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">1. Deklarasi Fungsi</h2>
                            <p>Deklarasi fungsi dibuat menggunakan kata kunci <code>function</code> yang diikuti nama fungsi.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">penjumlahan</span>(a, b) {
    <span style="color: #c586c0;">return</span> a + b;
}

document.<span style="color: #dcdcaa;">write</span>(<span style="color: #dcdcaa;">penjumlahan</span>(<span style="color: #b5cea8;">3</span>, <span style="color: #b5cea8;">5</span>));
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li><code>function</code> digunakan untuk membuat fungsi.</li>
                                <li><code>penjumlahan</code> adalah nama fungsi.</li>
                                <li><code>a</code> dan <code>b</code> merupakan parameter.</li>
                                <li><code>return</code> digunakan untuk mengembalikan hasil.</li>
                            </ul>
                            <p><strong>Hasil:</strong> 8</p>
                        </div>

                        <!-- 2. Parameter dan Nilai Default -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">2. Parameter dan Nilai Default</h2>
                            <p>Fungsi dapat menerima parameter dari luar. Jika parameter tidak diisi, kita dapat memberikan nilai default.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">sapa</span>(nama = <span style="color: #ce9178;">"Pengunjung"</span>) {
    <span style="color: #c586c0;">return</span> <span style="color: #ce9178;">"Halo, "</span> + nama + <span style="color: #ce9178;">"!"</span>;
}

document.<span style="color: #dcdcaa;">write</span>(<span style="color: #dcdcaa;">sapa</span>(<span style="color: #ce9178;">"Budi"</span>));
document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"&lt;br&gt;"</span>);
document.<span style="color: #dcdcaa;">write</span>(<span style="color: #dcdcaa;">sapa</span>());
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li>Parameter <code>nama</code> memiliki nilai default <code>"Pengunjung"</code>.</li>
                                <li>Jika fungsi dipanggil tanpa parameter, nilai default akan digunakan.</li>
                            </ul>
                            <p><strong>Hasil:</strong><br>Halo, Budi!<br>Halo, Pengunjung!</p>
                        </div>

                        <!-- 3. Function Expression -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">3. Function Expression</h2>
                            <p>Function dapat disimpan ke dalam variabel. Bentuk ini disebut Function Expression.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">let</span> <span style="color: #9cdcfe;">kali</span> = <span style="color: #569cd6;">function</span>(a, b) {
    <span style="color: #c586c0;">return</span> a * b;
};

document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"Hasil perkalian: "</span> + <span style="color: #dcdcaa;">kali</span>(<span style="color: #b5cea8;">4</span>, <span style="color: #b5cea8;">5</span>));
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li>Fungsi tanpa nama (anonymous function) disimpan dalam variabel <code>kali</code>.</li>
                                <li>Fungsi dipanggil menggunakan nama variabel.</li>
                            </ul>
                            <p><strong>Hasil:</strong> Hasil perkalian: 20</p>
                        </div>

                        <!-- 4. Arrow Function -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">4. Arrow Function</h2>
                            <p>Arrow Function adalah cara singkat mendefinisikan fungsi dalam JavaScript menggunakan tanda <code>=&gt;</code>.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">const</span> <span style="color: #79c0ff;">tambah</span> = (a, b) <span style="color: #569cd6;">=&gt;</span> a + b;

document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"Hasil penjumlahan: "</span> + <span style="color: #dcdcaa;">tambah</span>(<span style="color: #b5cea8;">2</span>, <span style="color: #b5cea8;">3</span>));
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li>Tidak perlu menuliskan kata kunci <code>function</code>.</li>
                                <li>Jika hanya satu baris kode, kurung kurawal <code>{}</code> dan <code>return</code> dapat dihilangkan.</li>
                            </ul>
                            <p><strong>Hasil:</strong> Hasil penjumlahan: 5</p>
                        </div>

                        <!-- 5. Fungsi Rekursif -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">5. Fungsi Rekursif</h2>
                            <p>Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri hingga mencapai kondisi berhenti.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">faktorial</span>(n) {
    <span style="color: #c586c0;">if</span> (n === <span style="color: #b5cea8;">0</span>) <span style="color: #c586c0;">return</span> <span style="color: #b5cea8;">1</span>;
    <span style="color: #c586c0;">return</span> n * <span style="color: #dcdcaa;">faktorial</span>(n - <span style="color: #b5cea8;">1</span>);
}

document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"Faktorial dari 5 adalah: "</span> + <span style="color: #dcdcaa;">faktorial</span>(<span style="color: #b5cea8;">5</span>));
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li>Fungsi memanggil dirinya sendiri.</li>
                                <li>Kondisi berhenti menggunakan <code>if (n === 0)</code>.</li>
                            </ul>
                            <p><strong>Hasil:</strong> Faktorial dari 5 adalah: 120</p>
                        </div>

                        <!-- 6. Struktur Fungsi Callback -->
                        <div class="materi-sub-section" style="border-bottom: none; padding-bottom: 0;">
                            <h2 class="sub-section-title">6. Struktur Fungsi Callback</h2>
                            <p>Callback adalah fungsi yang dikirim sebagai parameter ke fungsi lain dan akan dijalankan ketika diperlukan.</p>
                            
                            <h4 class="component-label">Contoh:</h4>
                            <div class="code-block" style="background-color: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: monospace; white-space: pre; overflow-x: auto;">
<span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">proses</span>(callback) {
    document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"Data diproses...&lt;br&gt;"</span>);
    <span style="color: #dcdcaa;">callback</span>();
}

<span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">selesai</span>() {
    document.<span style="color: #dcdcaa;">write</span>(<span style="color: #ce9178;">"Proses selesai"</span>);
}

<span style="color: #dcdcaa;">proses</span>(selesai);
</div>
                            <h4 class="component-label">Penjelasan:</h4>
                            <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 15px;">
                                <li>Fungsi <code>selesai()</code> dikirim sebagai callback.</li>
                                <li>Callback akan dijalankan setelah proses utama selesai.</li>
                            </ul>
                            <p><strong>Hasil:</strong><br>Data diproses...<br>Proses selesai</p>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="js-functions-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh fungsi <code>sapaUser(nama)</code> yang menerima satu buah parameter bernama <code>nama</code> untuk menampilkan pesan sapaan interaktif yang dinamis berdasarkan tombol yang diklik:</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode HTML & JS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">    <span class="syntax-tag">&lt;button</span> <span class="syntax-attr">onclick</span>=<span class="syntax-string">"sapaUser('Budi')"</span><span class="syntax-tag">&gt;</span>Sapa Budi<span class="syntax-tag">&lt;/button&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content">    <span class="syntax-tag">&lt;button</span> <span class="syntax-attr">onclick</span>=<span class="syntax-string">"sapaUser('Ani')"</span><span class="syntax-tag">&gt;</span>Sapa Ani<span class="syntax-tag">&lt;/button&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">&lt;script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">    <span class="syntax-tag">function</span> <span class="syntax-attr">sapaUser</span>(<span class="syntax-string">nama</span>) {</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">        <span class="syntax-attr">alert</span>(<span class="syntax-string">"Halo "</span> + nama + <span class="syntax-string">", selamat belajar JavaScript!"</span>);</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    }</span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">    <span class="syntax-tag">&lt;/script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh JavaScript
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/js-functions.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 220px; text-align: center; background-color: #fff; position: relative; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s ease;">
                                            <div>
                                                <button onclick="showJsFuncDemoAlert('Budi')" style="background-color: #f3f4f6; color: #111827; border: 1px solid #d1d5db; padding: 10px 20px; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 14px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s; margin-right: 8px;">Sapa Budi</button>
                                                <button onclick="showJsFuncDemoAlert('Ani')" style="background-color: #f3f4f6; color: #111827; border: 1px solid #d1d5db; padding: 10px 20px; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 14px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">Sapa Ani</button>
                                            </div>
                                            
                                            <!-- Simulasi Alert Popup -->
                                            <div id="js-func-demo-alert" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); justify-content: center; align-items: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; z-index: 10;">
                                                <div style="background: white; border-radius: 8px; width: 80%; max-width: 250px; padding: 15px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: left;">
                                                    <p id="js-func-demo-alert-text" style="margin: 0 0 15px 0; font-size: 13px; color: #4b5563; text-indent: 0 !important;">Halo Budi, selamat belajar JavaScript!</p>
                                                    <div style="text-align: right;">
                                                        <button onclick="closeJsFuncDemoAlert()" style="background-color: #3b82f6; color: white; border: none; padding: 6px 20px; border-radius: 4px; font-size: 12px; font-weight: bold; cursor: pointer;">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="js-functions-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/js function.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 14: JS Variabel dan Tipe Data -->
        <section id="materi-content-js-variables" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">JavaScript Variabel dan Tipe Data</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="js-variables-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="js-variables-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="js-variables-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="js-variables-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p>Dalam JavaScript, <strong>variabel</strong> dan <strong>tipe data</strong> merupakan konsep dasar paling penting yang digunakan dalam pembuatan program. Keduanya berfungsi untuk menyimpan data serta menentukan jenis data yang digunakan di dalam program.</p>
                        </div>

                        <!-- Variabel -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Variabel pada JavaScript</h2>
                            <p>Variabel adalah suatu obyek atau wadah yang berisi data, di mana nilainya dapat dimodifikasi atau diubah selama eksekusi program berlangsung. JavaScript memiliki beberapa kriteria khusus untuk penulisan nama variabel:</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-4">
                                <div style="background-color: #f7fee7; border: 1px solid #d9f99d; border-radius: 8px; padding: 15px; text-align: left;">
                                    <h4 style="margin: 0 0 6px 0; color: #3f6212; font-size: 14.5px; font-weight: bold; text-align: left;">Karakter Pertama</h4>
                                    <p style="margin: 0; font-size: 13px; color: #6b7280; line-height: 1.4; text-align: left; text-indent: 0;">Nama variabel harus dimulai dengan huruf (besar/kecil) atau karakter garis bawah (<code>_</code>).</p>
                                </div>
                                <div style="background-color: #f7fee7; border: 1px solid #d9f99d; border-radius: 8px; padding: 15px; text-align: left;">
                                    <h4 style="margin: 0 0 6px 0; color: #3f6212; font-size: 14.5px; font-weight: bold; text-align: left;">Kombinasi Nama</h4>
                                    <p style="margin: 0; font-size: 13px; color: #6b7280; line-height: 1.4; text-align: left; text-indent: 0;">Boleh dikombinasikan dengan angka, karakter <code>_</code>, dan <code>$</code>. Spasi kosong tidak diperbolehkan.</p>
                                </div>
                                <div style="background-color: #f7fee7; border: 1px solid #d9f99d; border-radius: 8px; padding: 15px; text-align: left;">
                                    <h4 style="margin: 0 0 6px 0; color: #3f6212; font-size: 14.5px; font-weight: bold; text-align: left;">Bukan Keyword</h4>
                                    <p style="margin: 0; font-size: 13px; color: #6b7280; line-height: 1.4; text-align: left; text-indent: 0;">Tidak boleh menggunakan kata kunci bawaan JavaScript (seperti <code>function</code>, <code>if</code>, dll).</p>
                                </div>
                            </div>

                            <p>Terdapat dua istilah dalam pembuatan variabel: <strong>Deklarasi</strong> (proses permintaan alokasi memori ke sistem) dan <strong>Inisialisasi</strong> (proses pengisian nilai awal ke dalam variabel). Berikut cara membuat variabel:</p>

                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 20%;">Keyword</th>
                                        <th style="width: 30%;">Contoh Penulisan</th>
                                        <th>Penjelasan / Perilaku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">var</span></td>
                                        <td><code>var umur = 17;</code></td>
                                        <td>Cara lama untuk membuat variabel pada JavaScript. Memiliki cakupan fungsi (function scope).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">let</span></td>
                                        <td><code>let nama = "budi";</code></td>
                                        <td>Digunakan untuk variabel yang nilainya dapat diubah di kemudian hari. Memiliki cakupan blok (block scope).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">const</span></td>
                                        <td><code>const sekolah = "SMK";</code></td>
                                        <td>Digunakan untuk membuat variabel konstanta yang nilainya tetap (tidak dapat diubah setelah diinisialisasi).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Tipe Data -->
                        <div class="materi-sub-section" style="margin-top: 25px;">
                            <h2 class="sub-section-title">Tipe Data pada JavaScript</h2>
                            <p>JavaScript membagi tipe data menjadi dua jenis, yaitu <strong>Primitif</strong> (menyimpan nilai langsung pada memori) dan <strong>Referensi</strong> (menyimpan alamat acuan data). Berikut jenis tipe data utama:</p>

                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 20%;">Tipe Data</th>
                                        <th>Deskripsi / Penjelasan</th>
                                        <th style="width: 30%;">Contoh Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge">String</span></td>
                                        <td>Kumpulan karakter atau teks, diapit tanda petik.</td>
                                        <td><code>"helo dunia"</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Number</span></td>
                                        <td>Nilai angka, baik bilangan bulat maupun pecahan desimal.</td>
                                        <td><code>42</code> atau <code>3.14</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Boolean</span></td>
                                        <td>Nilai kebenaran logika.</td>
                                        <td><code>true</code> atau <code>false</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Null</span></td>
                                        <td>Menyatakan nilai kosong atau ketiadaan data secara sengaja.</td>
                                        <td><code>null</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Undefined</span></td>
                                        <td>Variabel yang sudah dideklarasikan tetapi belum diberi nilai.</td>
                                        <td><code>let a;</code> (a bernilai undefined)</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Object</span></td>
                                        <td>Kumpulan pasangan kunci (key) dan nilai (value) untuk data kompleks.</td>
                                        <td><code>{nama: "budi"}</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge">Array</span></td>
                                        <td>Kumpulan data sejenis atau berbeda dalam daftar terurut dengan indeks.</td>
                                        <td><code>[1, 2, 3, 4]</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="js-variables-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh penggunaan variabel (<code>let</code>, <code>const</code>) dan beberapa tipe data (String, Number, Array) untuk mencetak profil siswa ke dalam halaman web:</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode HTML & JS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">    <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">id</span>=<span class="syntax-string">"hasil-var"</span><span class="syntax-tag">&gt;&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-comment">// Deklarasi & Inisialisasi</span></span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">    <span class="syntax-tag">let</span> nama = <span class="syntax-string">"Budi"</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content">    <span class="syntax-tag">const</span> umur = <span class="syntax-string">17</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">let</span> nilai = [<span class="syntax-string">80</span>, <span class="syntax-string">90</span>, <span class="syntax-string">85</span>]; <span class="syntax-comment">// Array</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-comment">// Mengakses & menampilkan data</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content">    document.getElementById(<span class="syntax-string">"hasil-var"</span>).innerHTML = </span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Nama: "</span> + nama + <span class="syntax-string">"&lt;/p&gt;"</span> +</span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Umur: "</span> + umur + <span class="syntax-string">" tahun&lt;/p&gt;"</span> +</span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Nilai Matematika: "</span> + nilai[0] + <span class="syntax-string">"&lt;/p&gt;"</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content">    <span class="syntax-tag">&lt;/script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">20</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">21</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh JavaScript
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/js-variables.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 220px; text-align: left; background-color: #fff; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s ease;">
                                            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; width: 100%; max-width: 280px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                                                <h5 style="margin: 0 0 12px 0; color: #1e293b; font-size: 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; padding-bottom: 6px;">Profil Siswa</h5>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;"><strong>Nama:</strong> Budi</p>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;"><strong>Umur:</strong> 17 tahun</p>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;"><strong>Nilai Matematika:</strong> 80</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="js-variables-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/_jas_variabletipedata.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 15: JS Operator -->
        <section id="materi-content-js-operators" class="view-section hidden w-full relative">
            <div class="materi-content-container">
                <div class="materi-content-header">
                    <h1 class="materi-content-title">JavaScript Operator</h1>
                    <div class="materi-tabs">
                        <button class="materi-tab active" data-tab-target="js-operators-materi">Materi</button>
                        <button class="materi-tab" data-tab-target="js-operators-contoh">Contoh</button>
                        <button class="materi-tab" data-tab-target="js-operators-video">Video</button>
                    </div>
                </div>

                <!-- TAMPILAN SUB 1: Materi -->
                <div id="js-operators-materi" class="materi-tab-content active">
                    <div class="materi-content-body">
                        <!-- Pengantar -->
                        <div class="materi-intro-section">
                            <p><strong>Operator</strong> dalam JavaScript digunakan untuk melakukan operasi matematis, perbandingan nilai, atau operasi logika. Dengan operator, kita dapat memanipulasi dan mengolah data program secara dinamis.</p>
                        </div>

                        <!-- Aritmatika -->
                        <div class="materi-sub-section">
                            <h2 class="sub-section-title">Operator Aritmatika</h2>
                            <p>Digunakan untuk melakukan operasi matematika dasar pada bilangan (nilai numerik):</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Operator</th>
                                        <th>Deskripsi / Fungsi</th>
                                        <th style="width: 35%;">Contoh & Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">+</span></td>
                                        <td>Penjumlahan (menambahkan dua nilai).</td>
                                        <td><code>5 + 3</code> menghasilkan <code>8</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">-</span></td>
                                        <td>Pengurangan (mengurangkan nilai kanan dari kiri).</td>
                                        <td><code>5 - 2</code> menghasilkan <code>3</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">*</span></td>
                                        <td>Perkalian (mengalikan dua nilai).</td>
                                        <td><code>4 * 3</code> menghasilkan <code>12</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">/</span></td>
                                        <td>Pembagian (membagi nilai kiri dengan kanan).</td>
                                        <td><code>10 / 2</code> menghasilkan <code>5</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">%</span></td>
                                        <td>Modulus (sisa hasil bagi dari pembagian).</td>
                                        <td><code>5 % 2</code> menghasilkan <code>1</code> (karena 5 dibagi 2 adalah 2 sisa 1)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Perbandingan -->
                        <div class="materi-sub-section" style="margin-top: 25px;">
                            <h2 class="sub-section-title">Operator Perbandingan</h2>
                            <p>Digunakan untuk membandingkan dua buah nilai. Operasi ini selalu menghasilkan nilai kebenaran Boolean, yaitu <code>true</code> atau <code>false</code>:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Operator</th>
                                        <th>Deskripsi / Fungsi</th>
                                        <th>Contoh (Bila x = 7)</th>
                                        <th style="width: 25%;">Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">==</span></td>
                                        <td>Sama Dengan (membandingkan nilai saja).</td>
                                        <td><code>x == 7</code> atau <code>x == "7"</code></td>
                                        <td><code>true</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">===</span></td>
                                        <td>Identik / Sama Nilai & Tipe Data secara ketat.</td>
                                        <td><code>x === "7"</code> (karena tipe datanya beda)</td>
                                        <td><code>false</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">!=</span></td>
                                        <td>Tidak Sama Dengan.</td>
                                        <td><code>x != 7</code></td>
                                        <td><code>false</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">&gt;</span></td>
                                        <td>Lebih Besar Dari.</td>
                                        <td><code>x &gt; 5</code></td>
                                        <td><code>true</code></td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">&lt;</span></td>
                                        <td>Lebih Kecil Dari.</td>
                                        <td><code>x &lt; 7</code></td>
                                        <td><code>false</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Logika -->
                        <div class="materi-sub-section" style="margin-top: 25px;">
                            <h2 class="sub-section-title">Operator Logika</h2>
                            <p>Digunakan untuk menggabungkan beberapa ekspresi perbandingan atau kondisi logis untuk menghasilkan satu nilai Boolean:</p>
                            
                            <table class="html-table">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Operator</th>
                                        <th>Nama / Deskripsi</th>
                                        <th>Contoh (Bila x = 7)</th>
                                        <th style="width: 35%;">Hasil & Penjelasan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">&&</span></td>
                                        <td>AND (Logika Dan)</td>
                                        <td><code>x &gt; 5 && x &lt; 10</code></td>
                                        <td><code>true</code>, karena kedua kondisi bernilai benar (7 &gt; 5 dan 7 &lt; 10).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">||</span></td>
                                        <td>OR (Logika Atau)</td>
                                        <td><code>x &gt; 10 || x == 7</code></td>
                                        <td><code>true</code>, karena salah satu kondisi bernilai benar (x sama dengan 7).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="html-tag-badge" style="background-color: #fff7ed; border-color: #fed7aa; color: #c2410c;">!</span></td>
                                        <td>NOT (Negasi / Kebalikan)</td>
                                        <td><code>!(x == 7)</code></td>
                                        <td><code>false</code>, karena membalikkan hasil asli (yang tadinya true menjadi false).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 2: Contoh -->
                <div id="js-operators-contoh" class="materi-tab-content hidden">
                    <div class="materi-content-body">
                        <p>Berikut adalah contoh penggunaan operator aritmatika (<code>+</code>, <code>%</code>) dan perbandingan (<code>&gt;</code>) di dalam kode JavaScript:</p>
                        
                        <div class="tools-grid">
                            <!-- Kiri: Mockup IDE -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-code" style="color: #a30a14; margin-right: 8px;"></i> Kode HTML & JS (Code Editor)</h4>
                                <div class="ide-mockup">
                                    <div class="ide-header">
                                        <div class="ide-file-tab">
                                            <i class="fab fa-html5"></i> index.html
                                        </div>
                                        <div class="browser-controls">
                                            <span style="background-color: #ff5f56; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #ffbd2e; width: 8px; height: 8px;"></span>
                                            <span style="background-color: #27c93f; width: 8px; height: 8px;"></span>
                                        </div>
                                    </div>
                                    <div class="ide-code">
                                        <div class="ide-line"><span class="ide-num">1</span><span class="ide-content"><span class="syntax-doctype">&lt;!DOCTYPE html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">2</span><span class="ide-content"><span class="syntax-tag">&lt;html&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">3</span><span class="ide-content"><span class="syntax-tag">&lt;body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">4</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">5</span><span class="ide-content">    <span class="syntax-tag">&lt;div</span> <span class="syntax-attr">id</span>=<span class="syntax-string">"hasil-operator"</span><span class="syntax-tag">&gt;&lt;/div&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">6</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">7</span><span class="ide-content">    <span class="syntax-tag">&lt;script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">8</span><span class="ide-content">    <span class="syntax-tag">let</span> a = <span class="syntax-string">10</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">9</span><span class="ide-content">    <span class="syntax-tag">let</span> b = <span class="syntax-string">3</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">10</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">11</span><span class="ide-content">    <span class="syntax-tag">let</span> tambah = a + b; <span class="syntax-comment">// Penjumlahan</span></span></div>
                                        <div class="ide-line"><span class="ide-num">12</span><span class="ide-content">    <span class="syntax-tag">let</span> sisaBagi = a % b; <span class="syntax-comment">// Modulus</span></span></div>
                                        <div class="ide-line"><span class="ide-num">13</span><span class="ide-content">    <span class="syntax-tag">let</span> banding = (a &gt; b); <span class="syntax-comment">// Perbandingan</span></span></div>
                                        <div class="ide-line"><span class="ide-num">14</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">15</span><span class="ide-content">    document.getElementById(<span class="syntax-string">"hasil-operator"</span>).innerHTML = </span></div>
                                        <div class="ide-line"><span class="ide-num">16</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Hasil Penjumlahan (10 + 3): "</span> + tambah + <span class="syntax-string">"&lt;/p&gt;"</span> +</span></div>
                                        <div class="ide-line"><span class="ide-num">17</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Sisa Bagi / Modulus (10 % 3): "</span> + sisaBagi + <span class="syntax-string">"&lt;/p&gt;"</span> +</span></div>
                                        <div class="ide-line"><span class="ide-num">18</span><span class="ide-content">        <span class="syntax-string">"&lt;p&gt;Apakah 10 &gt; 3? "</span> + banding + <span class="syntax-string">"&lt;/p&gt;"</span>;</span></div>
                                        <div class="ide-line"><span class="ide-num">19</span><span class="ide-content">    <span class="syntax-tag">&lt;/script&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">20</span><span class="ide-content"></span></div>
                                        <div class="ide-line"><span class="ide-num">21</span><span class="ide-content"><span class="syntax-tag">&lt;/body&gt;</span></span></div>
                                        <div class="ide-line"><span class="ide-num">22</span><span class="ide-content"><span class="syntax-tag">&lt;/html&gt;</span></span></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kanan: Mockup Browser -->
                            <div>
                                <h4 class="component-label"><i class="fas fa-desktop" style="color: #a30a14; margin-right: 8px;"></i> Tampilan Halaman Utama Website (Browser Preview)</h4>
                                <div class="browser-mockup">
                                    <div class="browser-mockup-inner">
                                        <div class="browser-header">
                                            <div class="browser-top-row">
                                                <div class="browser-controls">
                                                    <span style="background-color: #ff5f56;"></span>
                                                    <span style="background-color: #ffbd2e;"></span>
                                                    <span style="background-color: #27c93f;"></span>
                                                </div>
                                                <div class="browser-tab-area">
                                                    <div class="browser-tab">
                                                        <i class="fab fa-html5"></i> Contoh JavaScript
                                                    </div>
                                                </div>
                                                <div style="width: 50px;"></div>
                                            </div>
                                        </div>
                                        <div class="browser-bar">
                                            <div class="browser-nav-icons">
                                                <i class="fas fa-arrow-left"></i>
                                                <i class="fas fa-arrow-right"></i>
                                                <i class="fas fa-redo"></i>
                                            </div>
                                            <div class="browser-address">
                                                <i class="fas fa-file-code"></i> D:/coba run/js-operators.html
                                            </div>
                                        </div>
                                        <div class="browser-content" style="font-family: Arial, sans-serif; padding: 25px; color: #333; min-height: 220px; text-align: left; background-color: #fff; display: flex; justify-content: center; align-items: center; transition: background-color 0.3s ease;">
                                            <div style="background-color: #fffbeb; border: 1px solid #fed7aa; border-radius: 8px; padding: 20px; width: 100%; max-width: 320px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                                                <h5 style="margin: 0 0 12px 0; color: #c2410c; font-size: 14px; font-weight: bold; border-bottom: 1px solid #fed7aa; padding-bottom: 6px;">Output Operasi JS</h5>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;">Hasil Penjumlahan (10 + 3): <strong style="color: #ea580c;">13</strong></p>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;">Sisa Bagi / Modulus (10 % 3): <strong style="color: #ea580c;">1</strong></p>
                                                <p style="margin: 6px 0; font-size: 13px; color: #475569;">Apakah 10 &gt; 3? <strong style="color: #16a34a;">true</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN SUB 3: Video -->
                <div id="js-operators-video" class="materi-tab-content hidden">
                    <div class="materi-content-body" style="text-align: center; padding: 20px;">
                        <video width="100%" style="max-width: 800px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" controls>
                            <source src="Assets/video/js_operator.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <script>
        function showJsIntroDemoAlert() {
            document.getElementById('js-intro-demo-alert').style.display = 'flex';
        }
        function closeJsIntroDemoAlert() {
            document.getElementById('js-intro-demo-alert').style.display = 'none';
        }
        function showJsFuncDemoAlert(nama) {
            document.getElementById('js-func-demo-alert-text').textContent = "Halo " + nama + ", selamat belajar JavaScript!";
            document.getElementById('js-func-demo-alert').style.display = 'flex';
        }
        function closeJsFuncDemoAlert() {
            document.getElementById('js-func-demo-alert').style.display = 'none';
        }
        </script>

    </main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const goToBtns = document.querySelectorAll('.go-to-btn');
    const viewSections = document.querySelectorAll('.view-section');
    const headerBackBtn = document.getElementById('header-back-btn');

    goToBtns.forEach(btn => {
        // Alihkan target tombol kembali ke materi
        const target = btn.getAttribute('data-target');
        if (target === 'materi-html-menu' || target === 'materi-css-menu' || target === 'materi-js-menu') {
            btn.setAttribute('data-target', 'materi');
        }

        btn.addEventListener('click', (e) => {
            const targetId = btn.getAttribute('data-target');
            if (targetId) {
                // Sembunyikan semua bagian tampilan
                viewSections.forEach(sec => {
                    sec.classList.remove('active');
                    sec.classList.add('hidden');
                });
                
                // Tampilkan target
                const targetEl = document.getElementById(targetId);
                if (targetEl) {
                    targetEl.classList.remove('hidden');
                    targetEl.classList.add('active');
                    window.scrollTo(0, 0);
                }
            }
        });
    });

    if (headerBackBtn) {
        headerBackBtn.addEventListener('click', (e) => {
            const activeDetailSection = document.querySelector('.view-section.active:not(#materi)');
            if (activeDetailSection) {
                e.preventDefault(); // Cegah kembali ke menu.php
                
                // Sembunyikan semua bagian
                viewSections.forEach(sec => {
                    sec.classList.remove('active');
                    sec.classList.add('hidden');
                });
                
                // Tampilkan grid materi utama
                const mainMateriSection = document.getElementById('materi');
                if (mainMateriSection) {
                    mainMateriSection.classList.remove('hidden');
                    mainMateriSection.classList.add('active');
                }
                window.scrollTo(0, 0);
            }
        });
    }

    // Logika pergantian tab berlingkup (scoped)
    const sections = document.querySelectorAll('.view-section');
    sections.forEach(sec => {
        const tabButtons = sec.querySelectorAll('.materi-tab');
        const tabContents = sec.querySelectorAll('.materi-tab-content');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.getAttribute('data-tab-target');
                if (targetTab) {
                    // Setel kelas aktif pada tombol di bagian ini saja
                    tabButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    // Alihkan visibilitas konten tab di bagian ini saja
                    tabContents.forEach(content => {
                        if (content.id === targetTab) {
                            content.classList.remove('hidden');
                            content.classList.add('active');
                        } else {
                            content.classList.remove('active');
                            content.classList.add('hidden');
                        }
                    });
                }
            });
        });
    });
});
</script>
</body>
</html>
