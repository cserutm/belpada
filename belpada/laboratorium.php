<?php
// laboratorium.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Laboratorium Pemrograman — BELPADA</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="Assets/css/base.css">
    <link rel="stylesheet" href="Assets/css/laboratorium.css?v=5">
    <link rel="shortcut icon" href="Assets/img/logo.png" type="image/png">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/dracula.min.css">
</head>
<body>
    <!-- Navbar -->
    <header class="lab-navbar">
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

    <!-- Konten Utama -->
    <main class="lab-container">
        <!-- Bagian Header -->
        <div class="lab-header">
            <div class="lab-title-area">
                <h1 class="lab-title">Laboratorium Pemrograman</h1>
                <p class="lab-subtitle">Tulis, Jalankan, dan Uji kode programmu di sini.</p>
            </div>
            <button class="btn-menu-burger" id="openSidebar" type="button" aria-label="Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Grid Ruang Kerja -->
        <div class="lab-workspace">
            <!-- Kolom Editor Kode -->
            <div class="lab-col">
                <div class="col-header">
                    <h2 class="col-title">Editor Kode</h2>
                    <div style="display: flex; gap: 8px;">
                        <button id="btnSimpan" class="btn-run" type="button" style="background-color: #047857; color: white;">
                            <i class="fa-solid fa-file-pdf"></i> Cetak PDF
                        </button>
                        <button id="btnReset" class="btn-reset" type="button">
                            <i class="fa-solid fa-rotate-right"></i> Reset
                        </button>
                    </div>
                </div>
                <div class="col-body editor-body">
                    <textarea id="codeEditor"><!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Introduction</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h1>Apa itu HTML?</h1>
<p>HTML adalah bahasa markup standar untuk membuat
halaman web.</p>
<p>HTML mendeskripsikan struktur halaman web 
menggunakan markup.</p>
<p>Elemen HTML adalah blok pembangun halaman HTML.</p>

</body>
</html></textarea>
                </div>
            </div>

            <!-- Kolom Output -->
            <div class="lab-col">
                <div class="col-header">
                    <h2 class="col-title">Output</h2>
                    <div style="display: flex; gap: 8px;">
                        <button id="btnToggleConsole" class="btn-console-toggle" type="button">
                            <i class="fa-solid fa-terminal"></i> Konsol <span id="errorCountBadge" class="error-badge" style="display: none;">0</span>
                        </button>
                        <button id="btnRun" class="btn-run" type="button">
                            <i class="fa-solid fa-play"></i> Jalankan
                        </button>
                    </div>
                </div>
                <div class="col-body output-body" style="flex-direction: column;">
                    <div style="flex: 1; min-height: 0; position: relative;">
                        <iframe id="outputFrame" class="output-iframe"></iframe>
                    </div>
                    <!-- Console Panel like VS Code -->
                    <div id="consolePanel" class="console-panel">
                        <div class="console-header">
                            <span class="console-header-title"><i class="fa-solid fa-terminal"></i> KONSOL & MASALAH</span>
                            <div class="console-actions">
                                <button id="btnClearConsole" type="button" title="Bersihkan Konsol"><i class="fa-solid fa-ban"></i></button>
                                <button id="btnCloseConsole" type="button" title="Tutup Konsol"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <div id="consoleLogs" class="console-logs">
                            <div class="console-placeholder">Jalankan kode untuk melihat output konsol atau pesan eror.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Menu Sidebar -->
        <div id="sidebarOverlay" class="sidebar-overlay"></div>
        <div id="labSidebar" class="lab-sidebar">
            <div class="sidebar-header">
                <button class="btn-menu-burger" id="closeSidebar" type="button" aria-label="Tutup Menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-item active">Pengenalan HTML</li>
                <li class="sidebar-item">HTML Teks</li>
                <li class="sidebar-item">HTML Gambar</li>
                <li class="sidebar-item">HTML Tabel</li>
                <li class="sidebar-item">HTML Link</li>
                <li class="sidebar-item">HTML Form</li>
                <li class="sidebar-item">Pengenalan CSS</li>
                <li class="sidebar-item">CSS Selektor dan Properti</li>
                <li class="sidebar-item">CSS Box Model</li>
                <li class="sidebar-item">CSS Flexbox</li>
                <li class="sidebar-item">Pengenalan JS</li>
                <li class="sidebar-item">JS Function</li>
                <li class="sidebar-item">JS Variabel dan Tipe data</li>
                <li class="sidebar-item">JS Operator</li>
            </ul>
        </div>
    </main>

    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/htmlmixed/htmlmixed.min.js"></script>
    
    <!-- Script Kustom Laboratorium -->
    <script src="Assets/js/laboratorium.js?v=8"></script>
</body>
</html>
