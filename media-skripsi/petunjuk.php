<?php
$pageTitle = 'Petunjuk Penggunaan';
require 'includes/head.php';
?>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Inter', 'system-ui', sans-serif;
        background-color: #f7f4f1;
        overflow-x: hidden;
    }
    
    .top-navbar {
        background-color: #171725;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 50px;
        position: relative;
    }
    
    .top-navbar::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 30%;
        height: 4px;
        background-color: #b11f1e;
    }
    
    .nav-icon {
        background-color: #b11f1e;
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: bold;
        margin-right: 15px;
    }
    
    .nav-title {
        color: #b11f1e;
        font-size: 22px;
        font-weight: 800;
    }
    
    .guide-container {
        display: flex;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
        position: relative;
        min-height: calc(100vh - 70px);
    }
    
    .bg-gears {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
    }
    
    .gear {
        position: absolute;
        color: #d1cfcd;
        opacity: 0.5;
    }
    
    .gear-1 { font-size: 350px; top: 10%; left: -100px; }
    .gear-2 { font-size: 200px; top: 50%; left: 150px; }
    .gear-3 { font-size: 250px; top: 70%; left: -50px; }
    .gear-4 { font-size: 300px; top: -50px; right: -50px; }
    .gear-5 { font-size: 200px; bottom: 10%; right: -80px; }
    
    .content-left {
        flex: 1;
        z-index: 1;
        padding-right: 40px;
        position: relative;
    }
    
    .title-main {
        color: #b11f1e;
        font-size: 42px;
        font-weight: 800;
        margin: 0 0 15px 0;
        line-height: 1.2;
    }
    
    .subtitle-main {
        color: #9c2726;
        font-size: 18px;
        font-weight: 600;
        margin: 0;
        line-height: 1.5;
        max-width: 90%;
    }
    
    .character-image {
        position: absolute;
        bottom: -30px;
        left: 20%;
        width: 450px;
        max-width: 120%;
        z-index: 2;
    }
    
    .content-right {
        flex: 1.2;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding-bottom: 40px;
    }
    
    .step-box {
        display: flex;
        gap: 15px;
        align-items: stretch;
    }
    
    .step-num-container {
        display: flex;
        flex-direction: column;
    }
    
    .step-num {
        background-color: #6b0f0f;
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
    }
    
    .step-text {
        background-color: #ab3836;
        color: white;
        padding: 15px 20px;
        border-radius: 0;
        flex: 1;
        font-size: 14.5px;
        line-height: 1.5;
        position: relative;
        overflow: hidden;
    }
    
    .step-text::after {
        content: '\f013';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        right: -30px;
        top: -30px;
        font-size: 150px;
        color: rgba(255,255,255,0.06);
        pointer-events: none;
    }
    
    .step-text ul {
        margin: 8px 0 0 0;
        padding-left: 20px;
    }
    
    .step-text li {
        margin-bottom: 3px;
    }
    
    .sub-item {
        margin-top: 10px;
    }
    
    .sub-title {
        font-weight: bold;
        display: block;
        font-size: 15px;
    }
    
    .sub-desc {
        display: block;
        font-size: 13.5px;
        margin-top: 2px;
        color: #f0f0f0;
    }
    
    .catatan-banner {
        background-color: #b11f1e;
        color: white;
        padding: 25px 0;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        box-sizing: border-box;
        z-index: 2;
    }
    
    .catatan-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
    }
    
    .catatan-content h2 {
        font-size: 22px;
        font-weight: 800;
        margin: 0 0 10px 0;
    }
    
    .catatan-content ul {
        margin: 0;
        padding-left: 20px;
        list-style-type: disc;
    }
    
    .catatan-content li {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 5px;
        line-height: 1.5;
    }
    
    .pengembang-section {
        background-color: #ffffff;
        padding: 60px 0;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        box-sizing: border-box;
        z-index: 2;
    }
    
    .pengembang-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
    }
    
    .pengembang-title {
        font-size: 38px;
        font-weight: 800;
        color: #000000;
        margin: 0 0 5px 0;
    }
    
    .pengembang-subtitle {
        font-size: 16px;
        color: #333333;
        margin: 0 0 40px 0;
        font-weight: 600;
    }
    
    .developer-cards {
        display: flex;
        gap: 30px;
    }
    
    .dev-card {
        flex: 1;
        background-color: #faf8f5;
        border-radius: 12px;
        padding: 25px 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }
    
    .card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
    }
    
    .card-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
    }
    
    .blue-icon-box {
        background-color: #b1c5d6;
    }
    
    .red-icon-box {
        background-color: #c4bebd;
    }
    
    .card-title {
        font-size: 22px;
        font-weight: 800;
        color: #000000;
        margin: 0;
    }
    
    .card-info table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .card-info td {
        padding: 6px 0;
        vertical-align: top;
        font-size: 16px;
        color: #333333;
    }
    
    .info-label {
        width: 130px;
        font-weight: 700;
    }
    
    .info-separator {
        width: 20px;
        text-align: center;
    }
    
    .info-value {
        font-weight: 600;
        color: #111111;
    }
    
    @media (max-width: 900px) {
        .guide-container {
            flex-direction: column;
        }
        .content-left {
            padding-right: 0;
            margin-bottom: 300px; 
        }
        .character-image {
            left: 50%;
            transform: translateX(-50%);
            width: 250px;
        }
        .developer-cards {
            flex-direction: column;
        }
    }
</style>

<body>
    
    <div class="top-navbar">
        <a href="index.php" style="display:flex; align-items:center; text-decoration:none;">
            <div class="nav-icon">?</div>
            <div class="nav-title">Petunjuk</div>
        </a>
    </div>
    
    <div class="guide-container">
        <div class="bg-gears">
            <i class="fa-solid fa-gear gear gear-1"></i>
            <i class="fa-solid fa-gear gear gear-2"></i>
            <i class="fa-solid fa-gear gear gear-3"></i>
            <i class="fa-solid fa-gear gear gear-4"></i>
            <i class="fa-solid fa-gear gear gear-5"></i>
        </div>
        
        <div class="content-left">
            <h1 class="title-main">Petunjuk Penggunaan</h1>
            <p class="subtitle-main">Halaman ini berisi petunjuk penggunaan website Belpada<br>sebagai media pembelajaran pemrograman dasar.</p>
            
            <img src="images/gambarpetunjuk.png" alt="Karakter" class="character-image">
        </div>
        
        <div class="content-right">
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">1</div>
                </div>
                <div class="step-text">
                    Setelah website dibuka, pengguna akan melihat halaman utama yang berisi informasi media pembelajaran BELPADA.
                </div>
            </div>
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">2</div>
                </div>
                <div class="step-text">
                    Klik tombol "Mulai Belajar" untuk masuk ke halaman pembelajaran.
                </div>
            </div>
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">3</div>
                </div>
                <div class="step-text">
                    Pada halaman pembelajaran tersedia beberapa menu utama, yaitu:
                    <ul>
                        <li>Materi</li>
                        <li>Latihan Penyusunan Code</li>
                        <li>Laboratorium Pemrograman</li>
                        <li>Evaluasi Pembelajaran</li>
                    </ul>
                </div>
            </div>
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">4</div>
                </div>
                <div class="step-text">
                    Gunakan menu pembelajaran secara berurutan agar proses belajar lebih terarah:
                    
                    <div class="sub-item">
                        <span class="sub-title">a. Materi</span>
                        <span class="sub-desc">Pada menu ini siswa mempelajari materi dasar pemrograman yang telah disediakan. Bacalah materi dengan teliti sebelum melanjutkan ke tahap berikutnya.</span>
                    </div>
                    
                    <div class="sub-item">
                        <span class="sub-title">b. Latihan Penyusunan Kode</span>
                        <span class="sub-desc">Setelah mempelajari materi, siswa dapat mencoba menyusun potongan kode program sesuai instruksi yang diberikan untuk melatih pemahaman logika pemrograman.</span>
                    </div>
                    
                    <div class="sub-item">
                        <span class="sub-title">c. Laboratorium Pemrograman</span>
                        <span class="sub-desc">Pada menu ini siswa dapat mempraktikkan langsung penulisan kode program secara mandiri melalui fitur coding yang tersedia.</span>
                    </div>
                    
                    <div class="sub-item">
                        <span class="sub-title">d. Evaluasi Pembelajaran</span>
                        <span class="sub-desc">Setelah menyelesaikan seluruh pembelajaran, siswa mengerjakan evaluasi atau kuis untuk mengetahui tingkat pemahaman terhadap materi yang telah dipelajari.</span>
                    </div>
                </div>
            </div>
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">5</div>
                </div>
                <div class="step-text">
                    Gunakan tombol navigasi atau menu yang tersedia untuk berpindah halaman.
                </div>
            </div>
            
            <div class="step-box">
                <div class="step-num-container">
                    <div class="step-num">6</div>
                </div>
                <div class="step-text">
                    Setelah selesai menggunakan website, pengguna dapat keluar atau kembali ke halaman utama.
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="catatan-banner">
        <div class="catatan-content">
            <h2>Catatan:</h2>
            <ul>
                <li>Pastikan perangkat terhubung dengan internet agar seluruh fitur dapat digunakan dengan baik.</li>
                <li>Website dapat diakses melalui laptop maupun smartphone.</li>
            </ul>
        </div>
    </div>
    
    <div class="pengembang-section">
        <div class="pengembang-container">
            <h1 class="pengembang-title">Informasi Pengembang</h1>
            <p class="pengembang-subtitle">Informasi Pengembang Media Pembelajaran Belpada</p>
            
            <div class="developer-cards">
                <!-- Card 1 -->
                <div class="dev-card">
                    <div class="card-header">
                        <div class="card-icon blue-icon-box">
                            <i class="fa-solid fa-user" style="color: #2196F3;"></i>
                        </div>
                        <h2 class="card-title">Pengembang</h2>
                    </div>
                    <div class="card-info">
                        <table>
                            <tr>
                                <td class="info-label">Nama</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Riswanda Rurye Aprilianyani</td>
                            </tr>
                            <tr>
                                <td class="info-label">NIM</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">220631100131</td>
                            </tr>
                            <tr>
                                <td class="info-label">Program Studi</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Pendidikan Informatika</td>
                            </tr>
                            <tr>
                                <td class="info-label">Instansi</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Universitas Trunodjoyo Madura</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="dev-card">
                    <div class="card-header">
                        <div class="card-icon red-icon-box">
                            <i class="fa-solid fa-user" style="color: #a31c1a;"></i>
                        </div>
                        <h2 class="card-title">Dosen Pembimbing</h2>
                    </div>
                    <div class="card-info">
                        <table>
                            <tr>
                                <td class="info-label">Nama</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Muhamad Afif Effindi, S.Kom., M.T.</td>
                            </tr>
                            <tr>
                                <td class="info-label">NIP</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">198808232018031001</td>
                            </tr>
                            <tr>
                                <td class="info-label">Jabatan</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Dosen Pendidikan Informatika</td>
                            </tr>
                            <tr>
                                <td class="info-label">Instansi</td>
                                <td class="info-separator">:</td>
                                <td class="info-value">Universitas Trunodjoyo Madura</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="app.js?v=3.0"></script>
</body>
</html>
