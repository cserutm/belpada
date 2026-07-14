<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Menu Pembelajaran - BELPADA</title>
  <link rel="stylesheet" href="Assets/css/base.css?v=2">
  <link rel="stylesheet" href="Assets/css/menu.css?v=4">
  <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png">
</head>
<body>

  <!-- Bagian Header Menu -->
  <header class="menu-header" id="menu-app-header">
    <a href="index.php" class="logo-container" id="logo-link">
      <img src="Assets/img/logo.png" alt="Logo BELPADA" class="logo-img" id="logo-image">
      <span class="logo-text" id="logo-text">BELPADA</span>
    </a>
    
    <div class="header-right">
      <!-- Tombol Kembali Persegi Panjang sesuai tangkapan layar -->
      <a href="index.php" class="back-button" id="menu-back-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px; display: inline-block; vertical-align: middle;">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        Kembali
      </a>
    </div>
  </header>

  <!-- Garis Pembatas Header -->
  <div class="header-divider" id="header-divider-line"></div>

  <!-- Kontainer Tata Letak Menu -->
  <main class="menu-container" id="menu-main-content">
    
    <!-- Judul Sambutan & Deskripsi -->
    <section class="menu-welcome-section" id="welcome-intro">
      <h1 class="menu-title" id="welcome-title">
        <span>Selamat Datang di </span><span class="highlight">Belpada</span> !
      </h1>
      <p class="menu-desc" id="welcome-description">
        Pilih menu pembelajaran di bawah untuk memulai belajar. Pelajari materi, lakukan latihan menyusun kode, praktik melalui laboratorium pemrograman, dan uji pemahamanmu melalui evaluasi.
      </p>
    </section>
    
    <!-- Kisi Empat Kartu Interaktif -->
    <section class="menu-grid" id="menu-cards-grid">
      
      <!-- Kartu 1: Materi Pembelajaran -->
      <a href="materi.php" class="menu-card card-materi" id="card-learning-materials">
        <div class="menu-card-icon-wrap" id="icon-wrap-materi">
          <!-- SVG Buku Putih -->
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
          </svg>
        </div>
        <div class="menu-card-info">
          <h2 class="menu-card-title">Materi Pembelajaran</h2>
          <p class="menu-card-desc">Pelajari materi pemrograman dasar yang disajikan secara terstruktur untuk membantu memahami konsep-konsep pemrograman dasar.</p>
        </div>
        <!-- Latar Belakang SVG Buku Besar -->
        <svg class="menu-card-deco" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
      </a>

      <!-- Kartu 2: Latihan Menyusun Kode -->
      <a href="latihan.php" class="menu-card card-latihan" id="card-coding-exercises">
        <div class="menu-card-icon-wrap" id="icon-wrap-latihan">
        <!-- SVG Kepingan Puzzle Putih -->
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
        </svg>
      </div>
      <div class="menu-card-info">
        <h2 class="menu-card-title">Latihan Menyusun Kode</h2>
        <p class="menu-card-desc">Latih kemampuan menyusun kode program dengan urutan yang tepat sesuai materi yang telah dipelajari.</p>
      </div>
      <!-- Latar Belakang SVG Puzzle Besar -->
      <svg class="menu-card-deco" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
      </svg>
      </a>

      <!-- Kartu 3: Laboratorium Pemrograman -->
      <a href="laboratorium.php" class="menu-card card-lab" id="card-coding-lab">
        <div class="menu-card-icon-wrap" id="icon-wrap-lab">
          <!-- SVG Konsol Terminal Putih -->
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <path d="M3 9h18M8 13l-3 3 3 3M16 13l3 3-3 3M13 13l-2 6"/>
          </svg>
        </div>
        <div class="menu-card-info">
          <h2 class="menu-card-title">Laboratorium Pemrograman</h2>
          <p class="menu-card-desc">Praktikkan penulisan dan pengujian kode program untuk meningkatkan keterampilan pemrograman.</p>
        </div>
        <!-- Latar Belakang SVG Monitor Besar -->
        <svg class="menu-card-deco" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <rect x="3" y="3" width="18" height="18" rx="2"/>
          <path d="M3 9h18M8 13l-3 3 3 3M16 13l3 3-3 3M13 13l-2 6"/>
        </svg>
      </a>

      <!-- Kartu 4: Evaluasi Pembelajaran -->
      <a href="evaluasi.php" class="menu-card card-evaluasi" id="card-learning-evaluation">
        <div class="menu-card-icon-wrap" id="icon-wrap-evaluasi">
          <!-- SVG Papan Klip Daftar Periksa Putih -->
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
            <rect x="8" y="2" width="8" height="4" rx="1" />
            <path d="M9 14h6M9 18h6M9 10h6"/>
          </svg>
        </div>
        <div class="menu-card-info">
          <h2 class="menu-card-title">Evaluasi Pembelajaran</h2>
          <p class="menu-card-desc">Uji pemahaman terhadap materi yang telah dipelajari melalui soal-soal evaluasi.</p>
        </div>
        <!-- Latar Belakang SVG Daftar Periksa Besar -->
        <svg class="menu-card-deco" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
          <rect x="8" y="2" width="8" height="4" rx="1" />
          <path d="M9 14h6M9 18h6M9 10h6"/>
        </svg>
      </a>

    </section>
  </main>

</body>
</html>
