<?php
$backHref = $backHref ?? 'beranda.php';
$backLabel = $backLabel ?? 'Beranda';
$showSettings = $showSettings ?? true;
$pageHeading = $pageHeading ?? null;
?>
<header class="<?= UI_HEADER ?>">
    <div class="max-w-6xl mx-auto px-4 py-3 grid grid-cols-[auto_1fr_auto] items-center gap-3">
        <a href="<?= htmlspecialchars($backHref) ?>" class="<?= UI_BTN_BACK ?>">
            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
            <span class="hidden sm:inline"><?= htmlspecialchars($backLabel) ?></span>
        </a>
        <div class="text-center min-w-0">
            <h1 class="text-sm sm:text-base font-bold text-white truncate"><?= htmlspecialchars($pageHeading ?? 'Pemrograman Web Dasar') ?></h1>
        </div>
        <span class="w-9" aria-hidden="true"></span>
    </div>
</header>
