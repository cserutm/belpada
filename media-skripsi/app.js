document.addEventListener('DOMContentLoaded', () => {

    // Pembantu untuk mendapatkan nama file saat ini (Helper)
    const currentPage = window.location.pathname.split("/").pop() || "index.php";

    // --- LOGIKA LAYAR SPLASH ---
    const splashScreen = document.getElementById('splash-screen');
    const loadingBar = document.getElementById('loading-bar');

    if (splashScreen && loadingBar) {
        document.body.style.overflow = 'hidden';
        let progress = 0;
        const loadingInterval = setInterval(() => {
            progress += Math.random() * 15;
            if (progress > 100) progress = 100;

            loadingBar.style.width = `${progress}%`;



            if (progress === 100) {
                clearInterval(loadingInterval);
                setTimeout(() => {
                    splashScreen.classList.add('opacity-0');
                    splashScreen.classList.remove('pointer-events-auto');
                    splashScreen.classList.add('pointer-events-none');
                    setTimeout(() => {
                        splashScreen.remove();
                        document.body.style.overflow = ''; // Pulihkan pengguliran (Restore scrolling)
                    }, 700);
                }, 500);
            }
        }, 150);
    }

    // --- LOGIKA NAVIGASI ---
    const navBtns = document.querySelectorAll('.nav-btn, .nav-btn-mobile, .go-to-btn');
    const viewSections = document.querySelectorAll('.view-section');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNav = document.getElementById('mobileNav');

    function switchView(targetId) {
        const targetSection = document.getElementById(targetId);

        // Jika bagian target ada di halaman SAAT INI, beralih ke bagian tersebut
        if (targetSection) {
            // Sembunyikan semua tampilan di halaman ini
            viewSections.forEach(section => {
                section.classList.remove('active');
                section.classList.add('hidden');
            });

            targetSection.classList.remove('hidden');
            setTimeout(() => {
                targetSection.classList.add('active');
            }, 10);

            // Perbarui tombol navigasi
            document.querySelectorAll('.nav-btn, .nav-btn-mobile').forEach(btn => {
                if (btn.dataset.target === targetId) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Tangani visibilitas Navigasi Atas berdasarkan bagian
            const topNav = document.querySelector('nav.glass-nav');
            if (topNav) {
                const hiddenNavSections = ['home', 'settings-view', 'info-view', 'main-menu', 'materi', 'materi-html-menu', 'kuis', 'kuis-test', 'latihan'];
                if (hiddenNavSections.includes(targetId)) {
                    topNav.classList.add('hidden');
                } else {
                    topNav.classList.remove('hidden');
                }
            }

            window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            // Jika target tidak ada di halaman ini, alihkan ke halaman yang benar
            const pageMap = {
                'home': 'index.php',
                'main-menu': 'beranda.php',
                'materi': 'materi.php?v=1.3',
                'materi-html-menu': 'materi.php?v=1.3',
                'materi-css-menu': 'materi.php?v=1.3',
                'materi-js-menu': 'materi.php?v=1.3',
                'materi-pemrograman-web': 'materi.php?v=1.3',
                'materi-content-html-1': 'materi.php?v=1.3',
                'materi-content-html-2': 'materi.php?v=1.3',
                'kuis': 'kuis.php',
                'kuis-test': 'kuis.php',
                'latihan': 'latihan.php',
                'latihan-test': 'latihan.php',
                'settings-view': 'pengaturan.php?v=1.3',
                'info-view': 'profil.php'
            };

            if (pageMap[targetId]) {
                window.location.href = pageMap[targetId];
            }
        }

        // Tutup navigasi seluler jika terbuka
        if (mobileNav && mobileNav.classList.contains('opacity-100')) {
            toggleMobileNav();
        }
    }

    navBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            if (btn.tagName === 'A') return; // Biarkan perilaku tautan default terjadi

            // Atur ulang poin/skor saat memulai sesi baru
            if (btn.dataset.target === 'latihan-test' || btn.dataset.target === 'kuis-test') {
                points = 0;
                score = 0;
                currentQuestionIdx = 0;
                syncPoints();
                if (btn.dataset.target === 'kuis-test') renderQuestion();
                if (btn.dataset.target === 'latihan-test') renderLatihan();
            }

            switchView(btn.dataset.target);
        });
    });

    function toggleMobileNav() {
        if (!mobileNav) return;
        if (mobileNav.classList.contains('opacity-0')) {
            mobileNav.classList.remove('opacity-0', 'pointer-events-none');
            mobileNav.classList.add('opacity-100', 'pointer-events-auto');
            document.body.style.overflow = 'hidden';
            if (mobileMenuBtn) mobileMenuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        } else {
            mobileNav.classList.add('opacity-0', 'pointer-events-none');
            mobileNav.classList.remove('opacity-100', 'pointer-events-auto');
            document.body.style.overflow = '';
            if (mobileMenuBtn) mobileMenuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', toggleMobileNav);


    // --- UTILITAS GLOBAL ---
    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    // --- LOGIKA KUIS ---
    const quizData = [
        {
            question: "Fungsi HTML ditunjukkan oleh nomor …<br>1. Mengatur warna halaman<br>2. Menampilkan gambar dan teks<br>3. Menyusun struktur halaman web<br>4. Menambahkan animasi interaktif",
            options: ["1 dan 4", "2 dan 3", "1 dan 2", "3 dan 4"],
            correct: 1
        },
        {
            question: "HTML singkatan dari?",
            options: ["Hyper Trainer Markup Language", "Hyper Text Markup Language", "High Text Machine", "Hyper Text Machine"],
            correct: 1
        },
        {
            question: "Tag HTML yang digunakan untuk menampilkan isi utama halaman web adalah …",
            options: ["&lt;head&gt;", "&lt;title&gt;", "&lt;body&gt;", "&lt;html&gt;"],
            correct: 2
        },
        {
            question: "Tag yang digunakan untuk membuat paragraf pada HTML adalah …",
            options: ["&lt;h1&gt;", "&lt;br&gt;", "&lt;p&gt;", "&lt;b&gt;"],
            correct: 2
        },
        {
            question: "Tag &lt;img&gt; pada HTML digunakan untuk …",
            options: ["Membuat tabel", "Menampilkan gambar", "Membuat link", "Membuat heading"],
            correct: 1
        },
        {
            question: "Kode hyperlink digunakan untuk …",
            options: ["Menampilkan gambar", "Membuat form", "Membuat hyperlink", "Membuat tabel"],
            correct: 2
        },
        {
            question: "Tag yang digunakan untuk membuat judul kolom pada tabel HTML adalah …",
            options: ["&lt;td&gt;", "&lt;tr&gt;", "&lt;th&gt;", "&lt;table&gt;"],
            correct: 2
        },
        {
            question: "Jenis input yang tepat untuk password adalah …",
            options: ["text", "radio", "checkbox", "password"],
            correct: 3
        },
        {
            question: "CSS digunakan untuk …",
            options: ["Membuat database", "Mengatur tampilan website", "Menjalankan server", "Membuat jaringan komputer"],
            correct: 1
        },
        {
            question: "CSS yang ditulis langsung pada atribut elemen HTML disebut …",
            options: ["Internal CSS", "External CSS", "Inline CSS", "Flexbox CSS"],
            correct: 2
        },
        {
            question: "Selector CSS untuk memilih elemen berdasarkan ID adalah …",
            options: [".", "#", "*", "@"],
            correct: 1
        },
        {
            question: "Property CSS untuk mengatur warna teks adalah …",
            options: ["background-color", "font-size", "color", "text-align"],
            correct: 2
        },
        {
            question: "CSS Box Model digunakan untuk …",
            options: ["Membuat database website", "Mengatur tata letak elemen pada halaman web", "Menambahkan animasi website", "Membuat form login"],
            correct: 1
        },
        {
            question: "Fungsi justify-content:center; adalah …",
            options: ["Mengatur warna elemen", "Mengatur ukuran teks", "Mengatur posisi elemen secara horizontal", "Mengatur tinggi elemen"],
            correct: 2
        },
        {
            question: "JavaScript digunakan untuk …",
            options: ["Mengatur struktur halaman", "Mengatur warna halaman", "Menambahkan interaktivitas website", "Membuat tabel pada HTML"],
            correct: 2
        },
        {
            question: "Penulisan JavaScript di dalam HTML menggunakan tag …",
            options: ["&lt;js&gt;", "&lt;style&gt;", "&lt;script&gt;", "&lt;javascript&gt;"],
            correct: 2
        },
        {
            question: "Fungsi parameter nama pada function JavaScript adalah …",
            options: ["Menyimpan gambar", "Menentukan warna halaman", "Menjadi nilai masukan fungsi", "Membuat variabel tetap"],
            correct: 2
        },
        {
            question: "Variabel JavaScript yang nilainya dapat diubah menggunakan …",
            options: ["const", "let", "img", "title"],
            correct: 1
        },
        {
            question: "Hasil operasi 5 + 3 adalah …",
            options: ["15", "53", "8", "2"],
            correct: 2
        },
        {
            question: "Menghubungkan file CSS eksternal ke dokumen HTML menggunakan tag …",
            options: ["&lt;script&gt;", "&lt;style&gt;", "&lt;link&gt;", "&lt;a&gt;"],
            correct: 2
        }
    ];

    let currentQuestionIdx = 0;
    let score = 0;
    let points = parseInt(localStorage.getItem('userPoints')) || 0;
    let selectedOptionIdx = null;
    let activeQuizData = [];
    let timeLeft = 0;
    let timerInterval = null;
    const SECONDS_PER_QUESTION = 20; // 20 detik per soal

    const quizQuestionText = document.getElementById('quiz-question-text');
    const optionsContainer = document.getElementById('quiz-options-container');
    const selectedAnswerText = document.getElementById('selected-answer-text');
    const selectedAnswerBox = document.getElementById('selected-answer-box');
    const pointsDisplay = document.getElementById('quiz-points');
    const nextBtn = document.getElementById('quiz-next-btn');
    const quizResult = document.getElementById('quiz-result');
    const quizContainer = document.getElementById('quiz-container');
    const successModal = document.getElementById('success-modal');

    // Elemen Timer & Kemajuan
    const quizTimerDisplay = document.getElementById('quiz-timer');
    const quizProgressBar = document.getElementById('quiz-progress-bar');
    const currentQNumDisplay = document.getElementById('current-q-num');
    const totalQNumDisplay = document.getElementById('total-q-num');

    if (pointsDisplay) pointsDisplay.textContent = points;

    function startQuiz() {
        // Ambil 20 soal secara acak dari total 20 soal yang ada
        activeQuizData = shuffleArray([...quizData]).slice(0, 20).map(q => {
            // Acak urutan pilihan untuk setiap soal
            const options = [...q.options];
            const correctText = options[q.correct];
            shuffleArray(options);
            const newCorrect = options.indexOf(correctText);
            return { ...q, options, correct: newCorrect };
        });

        currentQuestionIdx = 0;
        score = 0;

        if (totalQNumDisplay) totalQNumDisplay.textContent = activeQuizData.length;

        renderQuestion();
        startTimer();
    }

    function startTimer() {
        if (timerInterval) clearInterval(timerInterval);

        timeLeft = SECONDS_PER_QUESTION; // Reset waktu untuk soal baru
        updateTimerDisplay();

        timerInterval = setInterval(() => {
            timeLeft--;
            updateTimerDisplay();

            if (timeLeft <= 0) {
                // Waktu habis untuk soal ini, lanjut otomatis
                goToNextQuestion();
            }
        }, 1000);
    }

    function updateTimerDisplay() {
        if (!quizTimerDisplay) return;
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        quizTimerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        // Beri warna merah jika waktu hampir habis (kurang dari 10 detik)
        if (timeLeft <= 10) {
            quizTimerDisplay.parentElement.classList.add('bg-red-600', 'border-red-400');
            quizTimerDisplay.parentElement.classList.remove('bg-red-500/20', 'border-red-500/30');
        } else {
            quizTimerDisplay.parentElement.classList.add('bg-red-500/20', 'border-red-500/30');
            quizTimerDisplay.parentElement.classList.remove('bg-red-600', 'border-red-400');
        }
    }

    function renderQuestion() {
        if (!quizQuestionText || !optionsContainer || !activeQuizData.length) return;
        selectedOptionIdx = null;
        if (nextBtn) {
            nextBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            nextBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
        }

        // Reset timer untuk setiap soal baru
        timeLeft = SECONDS_PER_QUESTION;
        updateTimerDisplay();

        // Update Progress UI
        if (currentQNumDisplay) currentQNumDisplay.textContent = currentQuestionIdx + 1;
        if (quizProgressBar) {
            const progress = ((currentQuestionIdx) / activeQuizData.length) * 100;
            quizProgressBar.style.width = `${progress}%`;
        }

        const kuisTest = document.getElementById('kuis-test');
        if (kuisTest) kuisTest.classList.remove('is-results');

        const topRightInfo = document.getElementById('quiz-top-right-info');
        if (topRightInfo) topRightInfo.style.display = 'flex';

        if (selectedAnswerText) {
            selectedAnswerText.textContent = "Belum ada jawaban dipilih";
            selectedAnswerText.classList.replace('text-white', 'text-slate-400');
        }
        if (selectedAnswerBox) selectedAnswerBox.classList.replace('border-brand-accent', 'border-[#333]');

        const qData = activeQuizData[currentQuestionIdx];
        quizQuestionText.innerHTML = qData.question;

        optionsContainer.innerHTML = qData.options.map((opt, idx) => `
            <div class="quiz-choice-box" data-idx="${idx}">${opt}</div>
        `).join('');

        document.querySelectorAll('.quiz-choice-box').forEach(opt => {
            opt.addEventListener('click', function () {
                if (selectedOptionIdx !== null) return; // Cegah klik ganda

                selectedOptionIdx = parseInt(this.dataset.idx);
                const qData = activeQuizData[currentQuestionIdx];
                const isCorrect = selectedOptionIdx === qData.correct;

                // Nonaktifkan semua opsi
                document.querySelectorAll('.quiz-choice-box').forEach(o => {
                    o.style.pointerEvents = 'none';
                    if (parseInt(o.dataset.idx) === qData.correct) {
                        o.classList.add('correct-choice');
                    }
                });

                if (isCorrect) {
                    score++;
                    points += Math.round(100 / activeQuizData.length);
                    localStorage.setItem('userPoints', points);
                    if (pointsDisplay) {
                        pointsDisplay.textContent = points;
                    }
                } else {
                    this.classList.add('incorrect-choice');
                }

                if (selectedAnswerText) {
                    selectedAnswerText.innerHTML = this.innerHTML;
                    selectedAnswerText.classList.replace('text-slate-400', 'text-white');
                }
                if (selectedAnswerBox) {
                    selectedAnswerBox.classList.replace('border-[#333]', isCorrect ? 'border-emerald-500' : 'border-red-500');
                }

                // Otomatis lanjut setelah 1.5 detik
                setTimeout(() => {
                    goToNextQuestion();
                }, 1500);
            });
        });
    }

    // nextBtn tidak lagi digunakan untuk transisi manual, tetapi kita tetap menyimpan pendengar untuk keamanan.
    // Kita akan menyembunyikannya di HTML.
    if (nextBtn) {
        nextBtn.classList.add('hidden');
    }

    function goToNextQuestion() {
        currentQuestionIdx++;
        if (currentQuestionIdx < activeQuizData.length) {
            renderQuestion();
            // Timer sudah di-reset di dalam renderQuestion, tapi kita pastikan interval tetap jalan
            // Sebenarnya setInterval tetap jalan, tapi kita ingin detiknya mulai dari 15 lagi.
            // Paling aman panggil startTimer lagi.
            startTimer();
        } else {
            showQuizResult();
        }
    }

    // Tangani Tutup Modal X
    const closeModalX = document.getElementById('close-modal-x');
    if (closeModalX && successModal) {
        closeModalX.addEventListener('click', () => {
            successModal.classList.remove('opacity-100');
            successModal.classList.add('opacity-0', 'pointer-events-none');
        });
    }

    function showQuizResult() {
        if (!quizResult || !quizContainer) return;

        if (timerInterval) clearInterval(timerInterval);

        quizContainer.style.display = 'none';
        quizResult.classList.remove('hidden');
        quizResult.classList.add('flex', 'animate-fade-in-up');

        // Sembunyikan info kanan atas saat menampilkan hasil
        const kuisTest = document.getElementById('kuis-test');
        if (kuisTest) kuisTest.classList.add('is-results');

        const topRightInfo = document.getElementById('quiz-top-right-info');
        if (topRightInfo) topRightInfo.style.display = 'none';

        // Perbarui bilah kemajuan menjadi 100% saat hasil
        if (quizProgressBar) quizProgressBar.style.width = '100%';

        const finalScore = Math.round((score / activeQuizData.length) * 100);
        const correctCount = score;
        const wrongCount = activeQuizData.length - score;

        const scoreEl = document.getElementById('quiz-final-score');
        const correctEl = document.getElementById('quiz-correct-count');
        const wrongEl = document.getElementById('quiz-wrong-count');

        if (scoreEl) scoreEl.textContent = finalScore;
        if (correctEl) correctEl.textContent = correctCount;
        if (wrongEl) wrongEl.textContent = wrongCount;

        syncPoints();
    }

    function syncPoints() {
        localStorage.setItem('userPoints', points);
        const displays = ['quiz-points', 'dnd-points', 'total-points', 'final-points', 'settings-points', 'score-points'];
        displays.forEach(id => {
            const el = document.getElementById(id);
            if (el) el.textContent = points;
        });
    }

    const retryBtn = document.getElementById('quiz-retry-btn');
    if (retryBtn) {
        retryBtn.addEventListener('click', () => {
            quizResult.classList.add('hidden');
            quizResult.classList.remove('flex');
            quizContainer.style.display = '';
            startQuiz();
        });
    }

    // Pemicu Kuis Mulai saat memasuki bagian
    if (currentPage === "kuis.php") {
        const startQuizBtn = document.querySelector('[data-target="kuis-test"]');
        if (startQuizBtn) {
            startQuizBtn.addEventListener('click', () => {
                setTimeout(startQuiz, 100);
            });
        }
    }

    // --- LOGIKA DRAG AND DROP ---
    const draggablesContainer = document.getElementById('draggables-container');
    const resetDndBtn = document.getElementById('reset-dnd-btn');
    const checkDndBtn = document.getElementById('check-dnd-btn');
    const nextSoalBtn = document.getElementById('next-soal-btn');
    const dndQuestionText = document.getElementById('dnd-question-text');
    const dropArea = document.getElementById('dnd-drop-area');
    const previewContainer = document.getElementById('dnd-preview-container');

    const latihanData = [
        {
            id: 1,
            question: "Susun potongan kode <html>, <body>, </body>, </html> menjadi struktur HTML yang benar",
            template: '[[slot0]]\n  [[slot1]]\n  [[slot2]]\n[[slot3]]',
            answers: ["<html>", "<body>", "</body>", "</html>"],
            options: ["<html>", "<body>", "</body>", "</html>", "<head>", "</head>"],
            preview: "html",
            hint: "<html> diletakkan paling luar (sebagai pembuka & penutup), sedangkan <body> berada di dalam.",
            explanation: "Struktur dasar dokumen HTML terdiri atas tag pembuka <html>, diikuti <body> untuk konten, lalu ditutup dengan penutup </body> dan </html>."
        },
        {
            id: 2,
            question: "Lengkapi tag paragraf untuk membungkus kalimat 'Selamat Datang'",
            template: '[[slot0]] Selamat Datang [[slot1]]',
            answers: ["<p>", "</p>"],
            options: ["<p>", "</p>", "<h1>", "</h1>", "<span>", "</span>"],
            preview: "html",
            hint: "Tag paragraf menggunakan huruf tunggal 'p'.",
            explanation: "Tag <p> digunakan untuk mendefinisikan sebuah paragraf teks, dan ditutup dengan tag </p>."
        },
        {
            id: 3,
            question: "Lengkapi atribut yang tepat untuk menentukan sumber berkas foto.jpg",
            template: '<img [[slot0]]="foto.jpg">',
            answers: ["src"],
            options: ["src", "href", "alt", "link"],
            preview: "html",
            hint: "Atribut ini merupakan singkatan dari 'source'.",
            explanation: "Atribut src (source) pada tag <img> menentukan lokasi atau sumber berkas gambar yang akan ditampilkan."
        },
        {
            id: 4,
            question: "Lengkapi atribut tag anchor agar mengarah ke alamat URL Google",
            template: '<a [[slot0]]="https://google.com">Google</a>',
            answers: ["href"],
            options: ["href", "src", "link", "alt"],
            preview: "html",
            hint: "Atribut ini singkatan dari Hypertext Reference.",
            explanation: "Atribut href digunakan pada tag anchor (<a>) untuk menentukan URL halaman tujuan dari tautan tersebut."
        },
        {
            id: 5,
            question: "Lengkapi tag pembuka tabel untuk membungkus struktur baris dan data di bawah ini",
            template: '[[slot0]]\n  <tr>\n    <td>Data</td>\n  </tr>\n</table>',
            answers: ["<table>"],
            options: ["<table>", "</table>", "<tr>", "<td>"],
            preview: "html",
            hint: "Tag ini menggunakan nama elemen tabel itu sendiri dalam bahasa Inggris.",
            explanation: "Tag <table> mendefinisikan batas awal dari sebuah tabel di dokumen HTML."
        },
        {
            id: 6,
            question: "Lengkapi tipe input agar karakter yang dimasukkan disamarkan demi keamanan sandi",
            template: '<input type="[[slot0]]">',
            answers: ["password"],
            options: ["password", "checkbox", "radio", "text"],
            preview: "html",
            hint: "Gunakan kata bahasa Inggris untuk 'kata sandi'.",
            explanation: "Tipe input 'password' akan menyamarkan teks yang diketik oleh pengguna menjadi titik atau bintang demi keamanan."
        },
        {
            id: 7,
            question: "Lengkapi selector CSS berikut agar menargetkan elemen dengan ID 'judul'",
            template: '[[slot0]]judul {\n  color: blue;\n}',
            answers: ["#"],
            options: ["#", ".", "*", "@"],
            preview: "css",
            hint: "Gunakan karakter hash/pagar untuk selector ID.",
            explanation: "Selector '#' digunakan di CSS untuk menargetkan elemen HTML tertentu berdasarkan nilai atribut ID-nya."
        },
        {
            id: 8,
            question: "Lengkapi properti Box Model CSS berikut untuk mengatur jarak dalam (padding) sebesar 20px",
            template: '.box {\n  [[slot0]]: 20px;\n}',
            answers: ["padding"],
            options: ["padding", "margin", "color", "border"],
            preview: "css",
            hint: "Properti ini mengatur batas dalam elemen, berbeda dengan margin yang mengatur batas luar.",
            explanation: "Properti padding digunakan untuk menciptakan ruang di dalam elemen (di antara konten dan border)."
        },
        {
            id: 9,
            question: "Lengkapi properti CSS berikut agar elemen container menggunakan layout Flexbox",
            template: '.container {\n  [[slot0]];\n}',
            answers: ["display:flex"],
            options: ["display:flex", "font-size:20px", "text-align:center", "position:absolute"],
            preview: "css",
            hint: "Gunakan properti display dengan nilai flex.",
            explanation: "Deklarasi 'display: flex' mengubah container menjadi flex container, memungkinkan penyusunan elemen anak secara fleksibel."
        },
        {
            id: 10,
            question: "Lengkapi deklarasi variabel JavaScript agar nilainya fleksibel (dapat diubah kembali)",
            template: '[[slot0]] nama = "Budi";',
            answers: ["let"],
            options: ["let", "const", "img", "var"],
            preview: "js",
            hint: "Gunakan deklarasi block-scoped modern selain const.",
            explanation: "Keyword let digunakan untuk mendeklarasikan variabel block-scoped yang nilainya dapat diubah di kemudian waktu."
        }
    ];

    let currentLatihanIdx = 0;
    let draggedItem = null;

    // Elemen Edukasi
    const dndProgressBar = document.getElementById('dnd-progress-bar');
    const hintBtn = document.getElementById('hint-btn');
    const hintBox = document.getElementById('hint-box');
    const hintText = document.getElementById('hint-text');
    const feedbackBox = document.getElementById('feedback-box');
    const feedbackText = document.getElementById('feedback-text');
    const feedbackTitle = document.getElementById('feedback-title');

    if (hintBtn) {
        hintBtn.addEventListener('click', () => {
            if (hintBox.style.display === 'flex') {
                hintBox.style.display = 'none';
            } else {
                const data = latihanData[currentLatihanIdx];
                hintText.textContent = data.hint;
                hintBox.style.display = 'flex';
            }
        });
    }

    function renderLatihan() {
        // Atur ulang elemen edukasi
        if (hintBox) hintBox.style.display = 'none';
        if (feedbackBox) feedbackBox.style.display = 'none';
        if (dndProgressBar) {
            const progress = (currentLatihanIdx / latihanData.length) * 100;
            dndProgressBar.style.width = `${progress}%`;
        }

        // Perbarui Penghitung Pertanyaan (Question Counter)
        const dndCounter = document.getElementById('dnd-question-counter');
        if (dndCounter) {
            dndCounter.textContent = `Soal ${currentLatihanIdx + 1}/${latihanData.length}`;
        }

        const data = latihanData[currentLatihanIdx];
        if (dndQuestionText) dndQuestionText.textContent = data.question;

        // Atur ulang area
        dropArea.innerHTML = '';
        draggablesContainer.innerHTML = '';
        dropArea.className = 'dnd-drop-container animate-fade-in-up';

        // Render Slot Templat (Mendukung Multi-baris)
        const lines = data.template.split('\n');
        lines.forEach(line => {
            const lineEl = document.createElement('div');
            lineEl.className = 'flex items-center gap-1 w-full flex-wrap mb-1';

            // Periksa ruang terdepan dan pertahankan indentasi
            const leadingSpaces = line.match(/^ +/);
            if (leadingSpaces) {
                const indent = document.createElement('div');
                indent.style.width = `${leadingSpaces[0].length * 1.5}ch`;
                lineEl.appendChild(indent);
            }

            const parts = line.split(/(\[\[slot\d+\]\])/g);
            parts.forEach(part => {
                if (part.match(/\[\[slot\d+\]\]/)) {
                    const slotIdx = part.match(/\d+/)[0];
                    const slot = document.createElement('div');
                    slot.className = 'dnd-drop-slot';
                    slot.dataset.slot = slotIdx;
                    slot.innerHTML = `<div class="feedback-icon opacity-0"></div>`;
                    lineEl.appendChild(slot);
                } else if (part.trim() !== "") {
                    const span = document.createElement('span');
                    span.className = 'text-white/70 font-mono text-lg mx-1';
                    span.textContent = part.trim();
                    lineEl.appendChild(span);
                }
            });
            dropArea.appendChild(lineEl);
        });

        // Render Opsi sebagai Tag (acak urutan tiap soal)
        [...data.options].sort(() => Math.random() - 0.5).forEach(opt => {
            const tag = document.createElement('div');
            tag.className = 'draggable-tag';
            tag.dataset.value = opt;
            tag.textContent = opt;
            draggablesContainer.appendChild(tag);
        });

        // Inisialisasi event drag-and-drop setelah elemen dibuat
        initDnDEvents();
    }

    // --- FUNGSI DRAG AND DROP (Interact.js - kompatibel Desktop, Android, iOS) ---
    function initDnDEvents() {
        try {
            interact('.draggable-tag').unset();
            interact('.dnd-drop-slot').unset();
        } catch (e) { }

        if (typeof interact === 'undefined') {
            console.error('Interact.js belum dimuat!');
            return;
        }

        interact('.draggable-tag').draggable({
            inertia: false,
            autoScroll: { container: document.body, margin: 50, distance: 5, interval: 10 },
            listeners: {
                start(event) {
                    event.target.classList.add('dragging');
                    event.target.style.zIndex = 9999;
                },
                move(event) {
                    const target = event.target;
                    const x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
                    const y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
                    target.style.transform = `translate(${x}px, ${y}px)`;
                    target.setAttribute('data-x', x);
                    target.setAttribute('data-y', y);
                },
                end(event) {
                    const target = event.target;
                    target.classList.remove('dragging');
                    target.style.zIndex = '';
                    target.style.transform = '';
                    target.removeAttribute('data-x');
                    target.removeAttribute('data-y');
                }
            }
        });

        interact('.dnd-drop-slot').dropzone({
            accept: '.draggable-tag',
            overlap: 0.3,
            ondragenter(event) { event.target.classList.add('drag-over'); },
            ondragleave(event) { event.target.classList.remove('drag-over'); },
            ondrop(event) {
                const draggable = event.relatedTarget;
                const slot = event.target;
                slot.classList.remove('drag-over');
                const existing = slot.querySelector('.draggable-tag');
                if (existing && existing !== draggable) {
                    existing.classList.remove('in-slot');
                    existing.style.transform = '';
                    existing.removeAttribute('data-x');
                    existing.removeAttribute('data-y');
                    existing.style.zIndex = '';
                    draggablesContainer.appendChild(existing);
                }
                slot.appendChild(draggable);
                draggable.classList.add('in-slot');
                draggable.classList.remove('dragging');
                draggable.style.transform = '';
                draggable.removeAttribute('data-x');
                draggable.removeAttribute('data-y');
                draggable.style.zIndex = '';
            },
            ondropdeactivate(event) { event.target.classList.remove('drag-over'); }
        });
    }

    if (checkDndBtn) {
        checkDndBtn.addEventListener('click', () => {
            const slots = document.querySelectorAll('.dnd-drop-slot');
            const data = latihanData[currentLatihanIdx];
            let allCorrect = true;

            slots.forEach((s, i) => {
                const item = s.querySelector('.draggable-tag');
                const f = s.querySelector('.feedback-icon');

                s.classList.remove('correct', 'incorrect');

                if (!item) {
                    allCorrect = false;
                    f.innerHTML = '❓';
                    s.classList.add('incorrect');
                }
                else if (item.dataset.value === data.answers[i]) {
                    f.innerHTML = '✅';
                    s.classList.add('correct');
                }
                else {
                    allCorrect = false;
                    f.innerHTML = '❌';
                    s.classList.add('incorrect');
                }
                f.classList.remove('opacity-0');
            });

            if (allCorrect) {
                if (feedbackBox) {
                    feedbackTitle.textContent = "Jawaban Benar";
                    feedbackText.textContent = "Susunan kode sudah tepat. Anda dapat melihat pratinjau hasil di bawah.";
                    feedbackBox.className = "feedback-box correct-feedback flex";
                }
                generateLivePreview();
                if (successModal) {
                    successModal.classList.remove('opacity-0', 'pointer-events-none');
                    successModal.classList.add('opacity-100', 'pointer-events-auto');
                }
            } else {
                // Tambahkan animasi getar ke slot yang salah
                slots.forEach(s => {
                    if (s.classList.contains('incorrect')) {
                        s.classList.remove('shake-animation');
                        void s.offsetWidth; // Memicu reflow untuk memulai ulang animasi
                        s.classList.add('shake-animation');
                    }
                });

                if (feedbackBox) {
                    feedbackTitle.textContent = "Jawaban Belum Tepat";
                    feedbackText.textContent = data.explanation;
                    feedbackBox.className = "feedback-box flex";
                }
            }
        });
    }

    function generateLivePreview() {
        if (!previewContainer) return;
        const data = latihanData[currentLatihanIdx];
        const slots = document.querySelectorAll('.dnd-drop-slot');

        let fullCode = data.template;
        slots.forEach((slot, i) => {
            const item = slot.querySelector('.draggable-tag');
            const value = item ? item.dataset.value : '...';
            fullCode = fullCode.replace(`[[slot${i}]]`, value);
        });

        // Heuristik untuk menampilkan konten jika latihan bersifat struktural
        let displayCode = fullCode;
        if (fullCode.includes('<body>')) {
            const bodyContent = fullCode.match(/<body>([\s\S]*?)<\/body>/);
            if (bodyContent) displayCode = bodyContent[1].trim();
            else displayCode = fullCode.replace(/<html[^>]*>|<\/html>|<head[^>]*>|<\/head>|<body>|<\/body>|<title[^>]*>.*?<\/title>/gi, '').trim();
        }

        if (displayCode) {
            previewContainer.innerHTML = displayCode;
        } else {
            previewContainer.innerHTML = `<div class="preview-error">Opps! Kode tidak menghasilkan tampilan visual.</div>`;
        }
    }

    if (nextSoalBtn) {
        nextSoalBtn.addEventListener('click', () => {
            if (successModal) {
                successModal.classList.remove('opacity-100', 'pointer-events-auto');
                successModal.classList.add('opacity-0', 'pointer-events-none');
            }
            currentLatihanIdx++;
            if (currentLatihanIdx < latihanData.length) {
                renderLatihan();
            } else {
                // Kemajuan akhir (Final progress)
                if (dndProgressBar) dndProgressBar.style.width = '100%';

                // Tampilkan layar apresiasi (Finish Screen)
                setTimeout(() => {
                    switchView('latihan-finish');
                }, 500);
            }
        });
    }

    if (resetDndBtn) resetDndBtn.addEventListener('click', renderLatihan);
    const resetLatihanBtn = document.getElementById('reset-latihan-btn');
    if (resetLatihanBtn) {
        resetLatihanBtn.addEventListener('click', () => {
            if (successModal) {
                successModal.classList.remove('opacity-100', 'pointer-events-auto');
                successModal.classList.add('opacity-0', 'pointer-events-none');
            }
            currentLatihanIdx = 0;
            renderLatihan();
        });
    }

    if (dropArea) renderLatihan();

    // --- FUNGSI AUDIO GLOBAL ---
    window.updateMusicIcons = function () {
        const isPaused = localStorage.getItem('musicPaused') === 'true';
        const soundIcons = document.querySelectorAll('#sound-icon');
        const soundIconFa = document.getElementById('sound-icon-fa');
        const soundLabel = document.getElementById('sound-label');

        soundIcons.forEach(icon => {
            if (isPaused) {
                icon.src = 'images/suara-off.png';
            } else {
                icon.src = 'images/suara-on.png';
            }
        });

        if (soundIconFa) {
            soundIconFa.className = isPaused
                ? 'fa-solid fa-volume-xmark'
                : 'fa-solid fa-volume-high';
        }
        if (soundLabel) {
            soundLabel.textContent = isPaused ? 'Suara Nonaktif' : 'Suara Aktif';
        }
    };

    window.toggleMusic = function () {
        let bgMusic;

        // Coba dapatkan dari parent (konteks Laragon/Server)
        try {
            bgMusic = (window.parent && window.parent.document.getElementById('bg-music'));
        } catch (e) {
            console.log("Cannot access parent frame, checking local document.");
        }

        // Cadangan ke dokumen lokal (Fallback)
        if (!bgMusic) {
            bgMusic = document.getElementById('bg-music');
        }

        if (!bgMusic) {
            console.warn("Background music element not found.");
            return;
        }

        const isPaused = localStorage.getItem('musicPaused') === 'true';

        if (isPaused) {
            bgMusic.play().catch(e => {
                console.log("Play failed. User must interact with the page first.", e);
            });
            localStorage.setItem('musicPaused', 'false');
            // Kirim pesan ke parent jika ada
            if (window.parent) window.parent.postMessage('playMusic', '*');
        } else {
            bgMusic.pause();
            localStorage.setItem('musicPaused', 'true');
            // Kirim pesan ke parent jika ada
            if (window.parent) window.parent.postMessage('pauseMusic', '*');
        }
        window.updateMusicIcons();
    };

    window.startMusic = function () {
        let bgMusic;
        try {
            bgMusic = (window.parent && window.parent.document.getElementById('bg-music'));
        } catch (e) { }
        if (!bgMusic) bgMusic = document.getElementById('bg-music');

        if (bgMusic) {
            bgMusic.play().catch(e => console.log("Audio play failed:", e));
            localStorage.setItem('musicPaused', 'false');
            window.updateMusicIcons();
        }
        // Kirim pesan ke parent untuk menyalakan musik
        if (window.parent) window.parent.postMessage('playMusic', '*');
    };

    window.startMusicAndNavigate = function (url) {
        window.startMusic();
        setTimeout(() => {
            window.location.href = url;
        }, 200);
    };

    // --- FUNGSI MODAL PETUNJUK ---
    window.openGuide = function () {
        const modal = document.getElementById('guide-modal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Hentikan pengguliran (Stop scrolling)
        }
    };

    window.closeGuide = function () {
        const modal = document.getElementById('guide-modal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = ''; // Restore scrolling
        }
    };

    // --- INISIALISASI AUDIO ---
    window.updateMusicIcons();
});
