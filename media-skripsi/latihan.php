<?php
$pageTitle = 'Latihan Susun Kode';
$pageHeading = 'Latihan Susun Kode';
$backHref = 'beranda.php';
$backLabel = 'Dashboard';
require 'includes/head.php';
?>
<body class="<?= UI_BODY ?>">

<script src="https://cdn.jsdelivr.net/npm/interactjs@1.10.27/dist/interact.min.js"></script>

<?php require 'includes/site-header.php'; ?>

<main class="<?= UI_MAIN ?>">
    <section id="latihan" class="view-section active">
        <div class="<?= UI_PAGE_WRAP ?>">
            <div class="<?= UI_PAGE_HEAD ?>">
                <h2 class="<?= UI_PAGE_TITLE ?>">Latihan Susun Kode HTML</h2>
                <p class="<?= UI_PAGE_SUB ?>">Bacalah setiap soal dengan teliti, lalu susun potongan sintaks HTML pada posisi yang benar.</p>
                <button class="<?= UI_BTN_PRIMARY ?> go-to-btn mt-2" data-target="latihan-test" type="button">
                    <i class="fa-solid fa-play" aria-hidden="true"></i>
                    Mulai Latihan
                </button>
            </div>
        </div>
    </section>

    <section id="latihan-test" class="view-section hidden max-w-5xl mx-auto px-4 py-6 w-full">
        <div class="flex justify-between items-center mb-4">
            <button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn" data-target="latihan" type="button">
                <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                <span>Kembali</span>
            </button>
            <button id="hint-btn" class="hint-btn" type="button">
                <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
                Petunjuk
            </button>
        </div>

        <div class="flex justify-between items-center mb-2">
            <span id="dnd-question-counter" class="text-sm font-semibold text-red-800">Soal 1/10</span>
        </div>
        <div class="dnd-progress-container">
            <div id="dnd-progress-bar"></div>
        </div>

        <p id="dnd-question-text" class="dnd-question-box"></p>
        <div id="dnd-drop-area" class="dnd-drop-container"></div>

        <div id="hint-box" class="hint-box">
            <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
            <span id="hint-text"></span>
        </div>

        <div id="feedback-box" class="feedback-box">
            <span class="feedback-title" id="feedback-title"></span>
            <span id="feedback-text"></span>
        </div>

        <div id="draggables-container" class="dnd-inventory"></div>

        <div class="mt-6 mb-4">
            <p class="text-sm font-medium text-gray-600 mb-2">Pratinjau hasil:</p>
            <div id="dnd-preview-container"></div>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <button id="check-dnd-btn" class="<?= UI_BTN_PRIMARY ?>" type="button">Periksa Jawaban</button>
            <button id="reset-dnd-btn" class="<?= UI_BTN_SECONDARY ?>" type="button">Reset Soal</button>
        </div>
    </section>

    <section id="latihan-finish" class="view-section hidden">
        <div class="<?= UI_PAGE_WRAP ?> text-center">
            <h2 class="<?= UI_PAGE_TITLE ?>">Latihan Selesai</h2>
            <p class="<?= UI_PAGE_SUB ?> mb-6">Anda telah menyelesaikan seluruh latihan susun kode pada modul ini.</p>
            <div class="flex flex-wrap justify-center gap-3">
                <button id="reset-latihan-btn" class="<?= UI_BTN_SECONDARY ?>" type="button">Ulangi Latihan</button>
                <a href="beranda.php" class="<?= UI_BTN_PRIMARY ?>">Kembali ke Dashboard</a>
            </div>
        </div>
    </section>
</main>

<div id="success-modal" class="fixed inset-0 z-[200] flex items-center justify-center p-4 bg-gray-900/40 opacity-0 pointer-events-none transition-opacity">
    <div class="<?= UI_CARD_PAD ?> max-w-md w-full text-center">
        <h3 class="text-lg font-semibold text-red-800 mb-2">Jawaban Benar</h3>
        <p class="text-sm text-gray-600 mb-6">Susunan kode sudah tepat. Lanjut ke soal berikutnya.</p>
        <button id="next-soal-btn" class="<?= UI_BTN_PRIMARY ?> w-full" type="button">Soal Berikutnya</button>
    </div>
</div>

<?php require 'includes/site-footer.php'; ?>
<script src="app.js?v=3.0"></script>
</body>
</html>
