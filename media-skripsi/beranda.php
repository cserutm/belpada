<?php
$pageTitle = 'Dashboard';
require 'includes/head.php';
?>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
        background-color: #13131f;
        color: #ffffff;
        min-height: 100vh;
        overflow-x: hidden;
    }
    
    .top-header {
        padding: 20px 50px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
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
        transition: background-color 0.2s;
    }
    
    .back-btn:hover {
        background-color: #8b1515;
    }
    
    .dashboard-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px 40px;
    }
    
    .welcome-title {
        font-size: 48px;
        font-weight: 800;
        margin: 0 0 20px 0;
        color: white;
    }
    
    .welcome-title span {
        color: #b11f1e;
    }
    
    .welcome-desc {
        font-size: 16px;
        color: #a0a0b0;
        line-height: 1.6;
        margin: 0 0 50px 0;
        max-width: 70%;
    }
    
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
    
    .menu-card {
        text-decoration: none;
        border-radius: 8px;
        padding: 35px 30px;
        display: flex;
        align-items: center;
        gap: 25px;
        position: relative;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .menu-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
    }
    
    .card-materi {
        background-color: #3b1113;
    }
    .card-latihan {
        background-color: #0f3b25;
    }
    .card-lab {
        background-color: #0e123b;
    }
    .card-evaluasi {
        background-color: #3b2112;
    }
    
    .card-icon-box {
        width: 70px;
        height: 70px;
        border-radius: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        color: white;
        flex-shrink: 0;
    }
    
    .icon-materi {
        background-color: #b11f1e;
    }
    .icon-latihan {
        background-color: #00b259;
    }
    .icon-lab {
        background-color: #2121ff;
    }
    .icon-evaluasi {
        background-color: #f97316;
    }
    
    .card-text {
        flex-grow: 1;
        z-index: 1;
    }
    
    .card-text h3 {
        font-size: 22px;
        font-weight: 700;
        color: white;
        margin: 0 0 10px 0;
    }
    
    .card-text p {
        font-size: 14.5px;
        color: #d1cfcd;
        line-height: 1.5;
        margin: 0;
    }
    
    .card-watermark {
        position: absolute;
        right: -30px;
        bottom: -30px;
        font-size: 220px;
        pointer-events: none;
        z-index: 0;
        transition: transform 0.3s;
    }
    
    .menu-card:hover .card-watermark {
        transform: scale(1.05) rotate(-3deg);
    }
    
    .wm-materi {
        color: rgba(177, 31, 30, 0.08);
    }
    .wm-latihan {
        color: rgba(0, 178, 89, 0.08);
    }
    .wm-lab {
        color: rgba(33, 33, 255, 0.08);
    }
    .wm-evaluasi {
        color: rgba(249, 115, 22, 0.08);
    }
    
    footer {
        background-color: #13131f !important;
        color: #a0a0b0 !important;
        border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
        padding: 30px 0 !important;
    }
    
    @media (max-width: 900px) {
        .menu-grid {
            grid-template-columns: 1fr;
        }
        .welcome-desc {
            max-width: 100%;
        }
        .dashboard-container {
            padding: 30px 20px;
        }
        .top-header {
            padding: 20px;
        }
        .welcome-title {
            font-size: 36px;
        }
    }
</style>

<body class="custom-dashboard">

    <div class="top-header">
        <a href="awal.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
    </div>
    
    <div class="dashboard-container">
        <h1 class="welcome-title">Selamat Datang di <span>Belpada</span> !</h1>
        <p class="welcome-desc">
            Pilih menu pembelajaran di bawah untuk memulai belajar. Pelajari materi, lakukan latihan penyusunan kode, praktik melalui laboratorium pemrograman, dan uji pemahamanmu melalui evaluasi.
        </p>
        
        <div class="menu-grid">
            <!-- Card 1: Materi Pembelajaran -->
            <a href="materi.php" class="menu-card card-materi">
                <div class="card-icon-box icon-materi">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div class="card-text">
                    <h3>Materi Pembelajaran</h3>
                    <p>Pelajari materi pemrograman dasar yang disajikan secara terstruktur untuk membantu memahami konsep-konsep pemrograman dasar.</p>
                </div>
                <i class="fa-solid fa-book-open card-watermark wm-materi"></i>
            </a>
            
            <!-- Card 2: Latihan Penyusunan Kode -->
            <a href="latihan.php" class="menu-card card-latihan">
                <div class="card-icon-box icon-latihan">
                    <i class="fa-solid fa-puzzle-piece"></i>
                </div>
                <div class="card-text">
                    <h3>Latihan Penyusunan Kode</h3>
                    <p>Latih kemampuan menyusun kode program dengan urutan yang tepat sesuai materi yang telah dipelajari.</p>
                </div>
                <i class="fa-solid fa-puzzle-piece card-watermark wm-latihan"></i>
            </a>
            
            <!-- Card 3: Laboratorium Pemrograman -->
            <a href="coding-lab.php" class="menu-card card-lab">
                <div class="card-icon-box icon-lab">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="card-text">
                    <h3>Laboratorium Pemrograman</h3>
                    <p>Praktikkan penulisan dan pengujian kode program untuk meningkatkan keterampilan pemrograman.</p>
                </div>
                <i class="fa-solid fa-desktop card-watermark wm-lab"></i>
            </a>
            
            <!-- Card 4: Evaluasi Pembelajaran -->
            <a href="kuis.php" class="menu-card card-evaluasi">
                <div class="card-icon-box icon-evaluasi">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div class="card-text">
                    <h3>Evaluasi Pembelajaran</h3>
                    <p>Uji pemahaman terhadap materi yang telah dipelajari melalui soal-soal evaluasi.</p>
                </div>
                <i class="fa-solid fa-file-pen card-watermark wm-evaluasi"></i>
            </a>
        </div>
    </div>

    <?php require 'includes/site-footer.php'; ?>
    <script src="app.js?v=3.0"></script>
</body>
</html>
