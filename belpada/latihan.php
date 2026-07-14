<?php
// latihan.php - Latihan Menyusun Kode
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Latihan Menyusun Kode — BELPADA</title>
  <link rel="stylesheet" href="Assets/css/base.css?v=2" />
  <link rel="stylesheet" href="Assets/css/latihan.css?v=7" />
  <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png" />
</head>
<body class="latihan-page">
  <header class="latihan-header">
    <a href="menu.php" class="back-button" id="latihan-back-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px; display: inline-block; vertical-align: middle;">
        <line x1="19" y1="12" x2="5" y2="12"></line>
        <polyline points="12 19 5 12 12 5"></polyline>
      </svg>
      Kembali
    </a>

    <div class="header-brand" aria-label="BELPADA">
      <img src="Assets/img/logo.png" alt="Logo BELPADA" class="brand-logo" />
      <span class="brand-text">BELPADA</span>
    </div>
  </header>

  <main class="latihan-container">
    <section class="latihan-intro">
      <h1 class="latihan-title">Latihan Menyusun Kode</h1>
      <p class="latihan-subtitle">Susun potongan kode berikut menjadi program yang benar.</p>
    </section>

    <section class="latihan-grid" aria-label="Latihan menyusun kode">
      <!-- KIRI: Soal -->
      <div class="panel panel-left">
        <div class="panel-head" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px;">
          <div>
            <div class="soal-badge">Soal <strong id="soal-now">1</strong> dari <strong id="soal-total">12</strong></div>
            <p class="soal-desc" id="soal-desc">
              Susun potongan kode <code>&lt;/body&gt;</code>, <code>&lt;html&gt;</code>, <code>&lt;body&gt;</code>, <code>&lt;/html&gt;</code> menjadi struktur HTML yang benar
            </p>
          </div>
          <div style="background-color: #A30A14; color: white; padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 6px rgba(163,10,20,0.2);">
            ⏱ Waktu: <span id="latihan-timer">00:00</span>
          </div>
        </div>

        <div class="panel-hint">klik untuk memindah</div>
        <div class="pool" id="pool" aria-label="Potongan kode"></div>
      </div>

      <!-- KANAN: Jawaban -->
      <div class="panel panel-right">
        <div class="panel-head panel-head-center">
          <div class="jawaban-title">AREA JAWABAN</div>
          <div class="jawaban-subtitle">(Klik Untuk Mengembalikan)</div>
        </div>

        <ol class="answer-list" id="answerList" aria-label="Area jawaban"></ol>

        <div class="panel-actions">
          <button class="btn btn-reset" id="btnReset" type="button">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="1 4 1 10 7 10"></polyline>
              <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
            </svg>
            Reset
          </button>
          <button class="btn btn-check" id="btnCheck" type="button">Periksa Jawaban</button>
        </div>

        <div class="result" id="result" role="status" aria-live="polite"></div>
      </div>
    </section>
  </main>

  <!-- Modal Mulai -->
  <div id="latihan-mulai-modal" class="modal-overlay">
    <div class="modal-content">
      <h2 class="modal-title">Latihan Menyusun Kode</h2>
      <p class="modal-text" style="margin-bottom: 20px; line-height: 1.6; text-align: left;">
        Selamat datang di <strong>Latihan Menyusun Kode!</strong> Di sini Anda akan diuji pemahaman Anda tentang HTML, CSS, dan JavaScript dasar.<br><br>
        <strong>Cara Pengerjaan:</strong><br>
        1. Baca instruksi soal pada bagian atas layar.<br>
        2. Klik potongan kode pada area sebelah kiri untuk memindahkannya ke area jawaban di sebelah kanan.<br>
        3. Susun potongan-potongan tersebut hingga membentuk sintaks yang benar.<br>
        4. Klik potongan kode pada area jawaban jika Anda ingin mengembalikannya ke tempat semula.<br>
        5. Jawaban akan otomatis diperiksa setelah semua slot terisi.<br><br>
        Waktu akan dihitung saat Anda menekan tombol di bawah ini. Semoga berhasil!
      </p>
      <button id="btn-mulai-latihan" class="btn btn-check" style="padding: 12px 24px; font-size: 16px; cursor: pointer;">Mulai Latihan</button>
    </div>
  </div>

  <!-- Modal Selesai -->
  <div id="latihan-selesai-modal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
      <img src="Assets/img/centang.webp" alt="Selesai" class="modal-img">
      <h2 class="modal-title">Latihan Selesai!</h2>
      <p class="modal-text" style="margin-bottom: 10px;">Luar biasa! Anda telah berhasil menyusun semua baris kode dengan benar.</p>
      <p id="apresiasi-text" style="color: #059669; font-weight: 600; font-size: 15px; margin-bottom: 15px; background-color: #ecfdf5; padding: 10px; border-radius: 8px; border: 1px solid #10b981; display: none;"></p>
      <p style="font-weight: 700; color: #333; font-size: 18px; margin-bottom: 20px; background-color: #f0f0f0; padding: 10px 20px; border-radius: 8px;">Waktu Pengerjaan: <span id="waktu-akhir">00:00</span></p>
      <a href="menu.php" class="btn btn-check" style="text-decoration: none; display: inline-block; padding: 12px 24px; margin-top: 15px;">Kembali ke Menu Utama</a>
    </div>
  </div>

<script src="Assets/js/latihan.js?v=6"></script>
</body>
</html>

