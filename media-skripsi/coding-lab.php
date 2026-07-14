<?php
$pageTitle = 'Praktikum Kode';
$pageHeading = 'Praktikum Kode';
$backHref = 'beranda.php';
$backLabel = 'Dashboard';
require 'includes/head.php';
?>
<body class="<?= UI_BODY ?>">

<?php require 'includes/site-header.php'; ?>

<main class="<?= UI_MAIN ?>">
    <section id="coding-lab" class="view-section active">
        <div class="<?= UI_PAGE_WRAP ?>">
            <div class="<?= UI_PAGE_HEAD ?>">
                <h2 class="<?= UI_PAGE_TITLE ?>">Praktikum Kode</h2>
                <p class="<?= UI_PAGE_SUB ?>">Tulis kode HTML, CSS, atau JavaScript lalu jalankan untuk melihat hasilnya secara langsung.</p>
            </div>
            <div class="<?= UI_TOPIC_GRID ?> max-w-2xl">
                <button id="btn-html-lab" class="<?= UI_TOPIC_BTN ?>" type="button">
                    <i class="fa-brands fa-html5 text-red-700 text-xl" aria-hidden="true"></i>
                    <span>HTML Lab</span>
                </button>
                <button id="btn-css-lab" class="<?= UI_TOPIC_BTN ?>" type="button">
                    <i class="fa-brands fa-css3-alt text-red-700 text-xl" aria-hidden="true"></i>
                    <span>CSS Lab</span>
                </button>
                <button id="btn-js-lab" class="<?= UI_TOPIC_BTN ?>" type="button">
                    <i class="fa-brands fa-js text-red-700 text-xl" aria-hidden="true"></i>
                    <span>JavaScript Lab</span>
                </button>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/site-footer.php'; ?>
<script>
    document.getElementById('btn-html-lab').addEventListener('click', () => window.location.href = 'lab-html.php');
    document.getElementById('btn-css-lab').addEventListener('click', () => window.location.href = 'lab-css.php');
    document.getElementById('btn-js-lab').addEventListener('click', () => window.location.href = 'lab-js.php');
</script>
<script src="app.js?v=3.0"></script>
</body>
</html>
