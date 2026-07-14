<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>BELPADA - Belajar Pemrograman Dasar</title>
  <!-- Tautan ke lembar gaya modern kustom -->
  <link rel="stylesheet" href="Assets/css/base.css">
  <link rel="stylesheet" href="Assets/css/index.css?v=3">
  <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png">
</head>
<body class="landing-page">

  
  <header class="header" id="app-header">
    <a href="index.php" class="logo-container" id="logo-link">
      <img src="Assets/img/logo.png" alt="Logo BELPADA" class="logo-img" id="logo-image">
      <span class="logo-text" id="logo-text">BELPADA</span>
    </a>
    
    <div class="header-right">
      <a href="petunjuk.php" class="help-link" id="help-navigation-link">
        <div class="help-icon-wrapper" id="help-icon">?</div>
        <span id="help-text">Petunjuk & Informasi Pengembang</span>
      </a>
    </div>
  </header>

  <div class="header-divider" id="header-divider-line"></div>


  <main class="hero-container" id="landing-hero">
    
  
    <section class="hero-content" id="hero-marketing-content">
      <h1 class="main-title" id="hero-main-title">
        <span class="title-white-1">Belajar</span>
        <span class="title-red">Pemrograman</span>
        <span class="title-white-2">Dasar</span>
      </h1>
      
      <!-- Garis dekoratif merah di bawah judul -->
      <hr class="red-divider" id="title-separator-line">
      
      <p class="subtitle" id="hero-subtitle-description">
        Media pembelajaran berbasis web yang dirancang untuk membantu siswa mempelajari pemrograman dasar secara mandiri.
      </p>
      
      <!-- Daftar Kartu Informasi / Metadata -->
      <div class="info-list" id="hero-info-list">
        
        <!-- Kartu Sekolah / Institusi -->
        <div class="info-item" id="info-school-card">
          <div class="icon-container" id="school-icon-box">
            <!-- SVG Sekolah dengan garis tepi kustom -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-svg">
              <path d="M22 21H2M19 21V10L12 3L5 10V21M9 21v-4a3 3 0 0 1 6 0v4"/>
              <path d="M12 3v-2M12 1h3M7 13h2v2H7zm8 0h2v2h-2z"/>
            </svg>
          </div>
          <div class="info-text" id="school-info-text">
            <strong>SMK Semen Indonesia Group</strong>
          </div>
        </div>
        
        <!-- Kartu Kelas / Keahlian -->
        <div class="info-item" id="info-curriculum-card">
          <div class="icon-container" id="curriculum-icon-box">
            <!-- SVG Siswa & Buku dengan garis tepi kustom -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-svg">
              <circle cx="12" cy="7" r="4.5" />
              <path d="M5 21v-1.5A3.5 3.5 0 0 1 8.5 16h7a3.5 3.5 0 0 1 3.5 3.5V21" />
              <path d="M12 18c-1.5 0-3 .5-4 1.5v-3c1-.8 2.5-1 4-1M12 18c1.5 0 3 .5 4 1.5v-3c-1-.8-2.5-1-4-1" />
            </svg>
          </div>
          <div class="info-text" id="curriculum-info-text">
            <span>Program keahlian Rekayasa Perangkat Lunak (RPL)</span><br>
            <strong>Kelas X</strong>
          </div>
        </div>
        
      </div>
      
      <!-- Tombol Tindakan CTA (Mulai Belajar) -->
      <a href="menu.php" class="cta-button" id="start-learning-btn">Mulai Belajar</a>
    </section>
    
    <!-- Kolom Kanan: Ilustrasi Pembelajaran -->
    <section class="hero-illustration" id="hero-illustration-section">
      <div class="illustration-wrapper" id="illustration-holder">
        <img src="Assets/img/rpl.PNG" alt="Developer Belajar Pemrograman" class="main-illustration" id="hero-student-illustration" style="max-height: 400px; object-fit: contain;">
      </div>
    </section>
    
  </main>

</body>
</html>
