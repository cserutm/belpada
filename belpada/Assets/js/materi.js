document.addEventListener("DOMContentLoaded", () => {
    // Arahkan target tombol kembali ke materi
    const backButtons = document.querySelectorAll('.go-to-btn');
    const viewSections = document.querySelectorAll('.view-section');

    backButtons.forEach(btn => {
        const target = btn.getAttribute('data-target');
        if (target === 'materi-html-menu' || target === 'materi-css-menu' || target === 'materi-js-menu') {
            btn.setAttribute('data-target', 'materi');
        }

        btn.addEventListener('click', (e) => {
            const targetId = btn.getAttribute('data-target');
            if (targetId) {
                // Sembunyikan semua bagian tampilan
                viewSections.forEach(sec => {
                    sec.classList.remove('active');
                    sec.classList.add('hidden');
                });
                
                // Tampilkan target
                const targetEl = document.getElementById(targetId);
                if (targetEl) {
                    targetEl.classList.remove('hidden');
                    targetEl.classList.add('active');
                    window.scrollTo(0, 0);
                }
            }
        });
    });
});
