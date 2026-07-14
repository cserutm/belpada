<?php
session_start();

if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: kuis.php");
    exit();
}

$identity_set = false;
if (isset($_POST['submit_identity'])) {
    $_SESSION['nama_siswa'] = htmlspecialchars($_POST['nama_siswa']);
    $_SESSION['kelas_siswa'] = htmlspecialchars($_POST['kelas_siswa']);
    $identity_set = true;
} elseif (isset($_SESSION['nama_siswa']) && isset($_SESSION['kelas_siswa'])) {
    $identity_set = true;
}

$nama_siswa = $_SESSION['nama_siswa'] ?? '';
$kelas_siswa = $_SESSION['kelas_siswa'] ?? '';

$pageTitle = 'Evaluasi';
$pageHeading = 'Evaluasi Pilihan Ganda';
$backHref = 'beranda.php';
$backLabel = 'Dashboard';
require 'includes/head.php';
?>
<body class="<?= UI_BODY ?>">

<?php require 'includes/site-header.php'; ?>

<main class="<?= UI_MAIN ?>">
    <section id="kuis" class="view-section active">
        <div class="<?= UI_PAGE_WRAP ?>">
            <?php if (!$identity_set): ?>
            <div class="<?= UI_PAGE_HEAD ?>">
                <h2 class="<?= UI_PAGE_TITLE ?>">Identitas Peserta</h2>
                <p class="<?= UI_PAGE_SUB ?>">Lengkapi data berikut sebelum memulai evaluasi.</p>
            </div>
            <div class="<?= UI_CARD_PAD ?> max-w-md mx-auto">
                <form action="kuis.php" method="POST" class="space-y-4">
                    <div>
                        <label for="nama_siswa" class="<?= UI_LABEL ?>">Nama Lengkap</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" required class="<?= UI_INPUT ?>" placeholder="Masukkan nama lengkap">
                    </div>
                    <div>
                        <label for="kelas_siswa" class="<?= UI_LABEL ?>">Kelas</label>
                        <input type="text" name="kelas_siswa" id="kelas_siswa" required class="<?= UI_INPUT ?>" placeholder="Contoh: XII RPL 1">
                    </div>
                    <button type="submit" name="submit_identity" class="<?= UI_BTN_PRIMARY ?> w-full">Simpan dan Lanjut</button>
                </form>
            </div>
            <?php else: ?>
            <div class="<?= UI_PAGE_HEAD ?>">
                <span class="<?= UI_BADGE ?>"><?= htmlspecialchars($nama_siswa) ?> — <?= htmlspecialchars($kelas_siswa) ?></span>
                <h2 class="<?= UI_PAGE_TITLE ?>">Evaluasi Pilihan Ganda</h2>
                <p class="<?= UI_PAGE_SUB ?>">Bacalah setiap soal dengan teliti, lalu pilih satu jawaban yang paling tepat.</p>
                <button class="<?= UI_BTN_PRIMARY ?> go-to-btn mt-2" data-target="kuis-test" type="button">
                    <i class="fa-solid fa-play" aria-hidden="true"></i>
                    Mulai Evaluasi
                </button>
                <p class="mt-4">
                    <a href="kuis.php?reset=1" class="text-sm text-red-700 hover:underline">Ganti identitas peserta</a>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="kuis-test" class="view-section hidden w-full">
        <div class="max-w-3xl mx-auto px-4 py-6">
            <div class="flex justify-between items-start mb-6 gap-4">
                <button class="<?= UI_BTN_BACK_LIGHT ?> go-to-btn shrink-0" data-target="kuis" type="button">
                    <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                    <span>Kembali</span>
                </button>
                <div id="quiz-top-right-info" class="flex items-center gap-3 shrink-0">
                    <div class="text-right text-sm">
                        <p class="font-semibold text-red-800"><?= htmlspecialchars($nama_siswa) ?></p>
                        <p class="text-gray-500"><?= htmlspecialchars($kelas_siswa) ?></p>
                    </div>
                    <div id="quiz-points-box" class="bg-white rounded-lg shadow-md border border-gray-200 px-3 py-1.5 flex items-center gap-2 text-sm">
                        <span class="text-gray-500">Skor</span>
                        <span id="quiz-points" class="font-bold text-red-700">0</span>
                    </div>
                </div>
            </div>

            <div id="quiz-container" class="<?= UI_CARD_PAD ?>">
                <div class="flex items-center justify-between gap-4 mb-4">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-gray-200 bg-gray-50 text-sm">
                        <i class="fa-solid fa-clock text-red-700"></i>
                        <span id="quiz-timer" class="font-mono font-semibold text-gray-800">00:00</span>
                    </div>
                    <div id="quiz-indicator-status" class="text-sm font-medium text-gray-600">
                        Soal <span id="current-q-num">1</span> / <span id="total-q-num">20</span>
                    </div>
                </div>
                <div class="w-full h-2 bg-gray-200 rounded-lg mb-6 overflow-hidden">
                    <div id="quiz-progress-bar" class="h-full bg-red-700 rounded-lg w-0 transition-all duration-300"></div>
                </div>

                <h2 id="quiz-question-text" class="text-lg md:text-xl font-semibold text-gray-800 text-center mb-4 leading-relaxed">—</h2>

                <div id="selected-answer-box" class="w-full border border-gray-200 rounded-lg p-3 mb-4 bg-gray-50 min-h-[3rem] flex items-center justify-center">
                    <span id="selected-answer-text" class="text-sm text-gray-500">Belum ada jawaban dipilih</span>
                </div>

                <div id="quiz-options-container" class="flex flex-col gap-2"></div>
            </div>

            <div id="quiz-result" class="hidden <?= UI_CARD_PAD ?> max-w-lg mx-auto mt-8 text-center">
                <h2 class="text-xl font-bold text-red-800 mb-2">Hasil Evaluasi</h2>
                <p class="text-sm text-gray-600 mb-1"><?= htmlspecialchars($nama_siswa) ?></p>
                <p class="text-sm text-gray-500 mb-6">Kelas: <?= htmlspecialchars($kelas_siswa) ?></p>

                <p class="text-sm font-medium text-gray-600 mb-1">Nilai Akhir</p>
                <p id="quiz-final-score" class="text-5xl font-bold text-red-700 mb-6">0</p>

                <div class="flex justify-between items-center px-4 py-2 bg-gray-50 rounded-lg border border-gray-200 mb-2 text-sm">
                    <span>Jawaban Benar</span>
                    <span id="quiz-correct-count" class="font-bold text-emerald-700">0</span>
                </div>
                <div class="flex justify-between items-center px-4 py-2 bg-gray-50 rounded-lg border border-gray-200 mb-2 text-sm">
                    <span>Jawaban Salah</span>
                    <span id="quiz-wrong-count" class="font-bold text-red-600">0</span>
                </div>

                <a href="beranda.php" class="<?= UI_BTN_PRIMARY ?> mt-6">Kembali ke Dashboard</a>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/site-footer.php'; ?>
<style>#kuis-test.is-results #quiz-points-box { display: none !important; }</style>
<script src="app.js?v=3.0"></script>
</body>
</html>
