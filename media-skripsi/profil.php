<?php
$pageTitle = 'Profil Pengembang';
$pageHeading = 'Profil Pengembang';
$backHref = 'petunjuk.php';
$backLabel = 'Petunjuk';
require 'includes/head.php';
?>
<body class="<?= UI_BODY ?>">

<?php require 'includes/site-header.php'; ?>

<main class="<?= UI_MAIN ?>">
    <section id="info-view" class="view-section active">
        <div class="<?= UI_PAGE_WRAP ?>">
            <div class="flex flex-col md:flex-row items-start gap-8 max-w-4xl mx-auto">
                <img src="images/foto-profil.jpg" alt="Foto profil pengembang" class="w-44 md:w-52 aspect-[3/4] object-cover rounded-lg shadow-md border border-gray-200 mx-auto md:mx-0">

                <div class="<?= UI_CARD_PAD ?> flex-1 w-full">
                    <h2 class="text-xl font-bold text-red-800 border-b border-gray-200 pb-3 mb-5">Identitas Pengembang</h2>

                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-0.5">Nama</p>
                            <p class="font-medium text-gray-800">Riswanda Rurye Aprilianyani</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-0.5">NIM</p>
                            <p class="font-mono text-gray-800">220631100131</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-0.5">Program Studi</p>
                            <p class="text-gray-800">Pendidikan Informatika</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-0.5">Produk</p>
                            <p class="text-gray-800">Media Pembelajaran Pemrograman Web Dasar (SMK)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/site-footer.php'; ?>
<script src="app.js?v=3.0"></script>
</body>
</html>
