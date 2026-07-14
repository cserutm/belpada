<?php
// evaluasi.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Evaluasi Pembelajaran — BELPADA</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="Assets/css/base.css">
    <link rel="stylesheet" href="Assets/css/evaluasi.css?v=19">
    <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="soal-page">
    <!-- Navbar -->
    <header class="evaluasi-navbar">
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
    </header>

    <!-- Pola Latar Belakang -->
    <div class="eval-bg-pattern">
        <div class="pattern-overlay"></div>
    </div>

    <!-- BAGIAN 1: IDENTITAS PESERTA -->
    <main class="eval-container" id="section-identitas">
        <div class="eval-card">
            <h1 class="eval-title">IDENTITAS PESERTA</h1>
            <form id="form-identitas" class="eval-form">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" placeholder="Contoh : X RPL 1" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan dan Lanjut</button>
                </div>
            </form>
        </div>
    </main>

    <!-- BAGIAN 2: KUIS SOAL (Disembunyikan di awal) -->
    <main class="soal-container" id="section-soal" style="display: none;">
        <div class="soal-top-bar">
            <div class="soal-title-box">
                <h1>Evaluasi Pembelajaran</h1>
                <p>Kerjakan soal pilihan ganda berikut.</p>
            </div>
            <div class="soal-score-box">
                <span class="score-label" id="score-display">Skor : 0</span>
            </div>
        </div>

        <div class="soal-grid">
            <div class="soal-sidebar">
                <h2>Informasi</h2>
                <div class="info-item" style="margin-bottom: 20px;" id="info-question">Soal 1 dari 20</div>
                <div class="info-item">
                    <span class="info-label">Waktu</span>
                    <span class="info-value" id="timer-display" style="color: #a30000; font-weight: 800; font-size: 20px;">15</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Selesai</span>
                    <span class="info-value" id="info-completed">0/20</span>
                </div>
            </div>

            <div class="soal-content">
                <div class="question-text" id="question-text">
                    Memuat soal...
                </div>
                
                <form id="question-form" class="question-form">
                    <div class="question-options" id="options-container">
                        <!-- Pilihan jawaban akan dimuat oleh JS -->
                    </div>
                    <div class="question-actions">
                        <button type="button" class="btn-next" id="btn-next">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- BAGIAN 3: HASIL EVALUASI (Disembunyikan di awal) -->
    <main class="eval-container" id="section-hasil" style="display: none;">
        <div class="hasil-card">
            <h1 class="hasil-title">HASIL<br>EVALUASI</h1>
            <div class="hasil-identitas">
                <p>Nama : <span id="hasil-nama"></span></p>
                <p>Kelas : <span id="hasil-kelas"></span></p>
            </div>
            <h2 class="hasil-subtitle">NILAI AKHIR</h2>
            <div class="hasil-nilai-box">
                <span id="hasil-nilai-akhir">0</span>
            </div>
            <div class="hasil-stats">
                <div class="stat-box">
                    Jawaban Benar : <span id="hasil-benar">0</span>
                </div>
                <div class="stat-box">
                    Jawaban Salah : <span id="hasil-salah">0</span>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="Assets/js/evaluasi.js?v=22"></script>
</body>
</html>
