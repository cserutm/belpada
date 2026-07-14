// Assets/js/evaluasi.js

document.addEventListener('DOMContentLoaded', () => {
    const questions = [
        {
            text: "1. Pemrograman web merupakan proses pembuatan dan pengembangan ....",
            options: ["A. perangkat keras komputer", "B. website atau halaman web", "C. jaringan komputer", "D. sistem operasi komputer", "E. penghapusan data internet"],
            answer: 1 // B. website atau halaman web
        },
        {
            text: "2. World Wide Web (WWW) memungkinkan pengguna untuk ...",
            options: ["A. Memperbaiki perangkat keras komputer", "B. Mengakses halaman web melalui internet", "C. Membuat sistem operasi", "D. Menghapus data jaringan", "E. Membuat kabel internet"],
            answer: 1 // B. Mengakses halaman web melalui internet
        },
        {
            text: `3. Perhatikan URL berikut!\nhttp://www.example.com/2011/samples/first.html\nBagian http:// berfungsi sebagai ...`,
            options: ["A. Nama domain", "B. Alamat server", "C. Protokol komunikasi", "D. Nama browser", "E. Halaman website"],
            answer: 2 // C. Protokol komunikasi
        },
        {
            text: "4. Seorang siswa mengakses sebuah website, tetapi file HTML dari server tidak berhasil dimuat dengan sempurna. Akibat yang paling mungkin terjadi adalah ...",
            options: ["A. Website tampil sempurna", "B. Website tetap dapat diakses normal", "C. Halaman website tidak dapat ditampilkan dengan benar", "D. Browser berubah menjadi server", "E. Koneksi Internet menjadi lebih cepat"],
            answer: 2 // C. Halaman website tidak dapat ditampilkan dengan benar
        },
        {
            text: "5. Website yang digunakan untuk menjual produk melalui internet disebut sebagai ....",
            options: ["A. Website pribadi", "B. Website komunitas", "C. Website pendidikan", "D. Website e-commerce", "E. Website hiburan"],
            answer: 3 // D. Website e-commerce
        },
        {
            text: `6. Tag HTML yang digunakan untuk membuat paragraf adalah …`,
            options: ["A. <h1>", "B. <br>", "C. <p>", "D. <table>", "E. <h2>"],
            answer: 2
        },
        {
            text: `7. \`\`\`html\n<img src="namafile.jpg">\n\`\`\`\nTag <img> pada kode tersebut digunakan untuk ....`,
            options: ["A. Membuat tabel", "B. Menampilkan gambar", "C. Membuat link", "D. Membuat heading", "E. Membuat paragraf"],
            answer: 1
        },
        {
            text: `8. Perhatikan kebutuhan berikut!\nSebuah halaman web memerlukan tautan yang mengarah ke halaman profil.html. Tag HTML yang tepat untuk memenuhi kebutuhan tersebut adalah ....`,
            options: ["A. <img src=\"profil.html\">", "B. <a href=\"profil.html\">Profil</a>", "C. <p>profil.html</p>", "D. <table>profil.html</table>", "E. <form>profil.html</form>"],
            answer: 1
        },
        {
            text: `9. \`\`\`html\n<table border="1">\n  <tr>\n    ? Nama ?\n    ? Kelas ?\n  </tr>\n</table>\n\`\`\`\nTag HTML yang tepat untuk menggantikan tanda tanya agar menjadi judul kolom tabel adalah ....`,
            options: ["A. <td>", "B. <tr>", "C. <th>", "D. <table>", "E. <caption>"],
            answer: 2
        },
        {
            text: `10. \`\`\`html\n<form>\n  Password:\n  <input type="text">\n</form>\n\`\`\`\nSeorang siswa ingin agar karakter password pada form tidak terlihat saat diketik. Perbaikan yang tepat pada kode tersebut adalah ....`,
            options: ["A. mengganti text menjadi radio", "B. mengganti text menjadi checkbox", "C. mengganti text menjadi password", "D. mengganti input menjadi button", "E. mengganti form menjadi table"],
            answer: 2
        },
        {
            text: "11. Kepanjangan dari CSS adalah ....",
            options: ["A. Cascading Style Sheet", "B. Cascading Sensitive Sheet", "C. Cascading select Sheet", "D. Case Style Sheet", "E. Code Style Sheet"],
            answer: 0
        },
        {
            text: `12. \`\`\`css\n#header {\n   color: blue;\n}\n\`\`\`\nSelector #header pada kode tersebut digunakan untuk memilih elemen berdasarkan ....`,
            options: ["A. class", "B. ID", "C. tag HTML", "D. atribut", "E. seluruh elemen"],
            answer: 1
        },
        {
            text: "13. Perhatikan kebutuhan berikut!\nSeorang siswa ingin mengubah warna teks pada halaman web menjadi merah menggunakan CSS. Property yang tepat digunakan adalah ....",
            options: ["A. background-color", "B. font-size", "C. color", "D. text-align", "E. Margin"],
            answer: 2
        },
        {
            text: "14. CSS Box Model digunakan untuk …",
            options: ["A. Membuat database website", "B. Mengatur tata letak elemen pada halaman web", "C. Menambahkan animasi website", "D. Membuat form login", "E. Membuat link halaman"],
            answer: 1
        },
        {
            text: "15. Fungsi properti CSS justify-content: center; adalah ....",
            options: ["A. Mengatur warna elemen", "B. Mengatur ukuran teks", "C. Mengatur posisi elemen secara horizontal", "D. Mengatur tinggi elemen", "E. Mengatur jenis font"],
            answer: 2
        },
        {
            text: "16. Fungsi JavaScript adalah ....",
            options: ["A. mengatur struktur halaman web", "B. mengatur warna halaman web", "C. menambahkan interaktivitas pada website", "D. membuat tabel pada HTML", "E. mengatur jaringan internet"],
            answer: 2
        },
        {
            text: `17. \`\`\`html\n<script>\n  console.log("Halo");\n</script>\n\`\`\`\nTag <script> pada kode tersebut digunakan untuk ....`,
            options: ["A. menampilkan gambar pada halaman web", "B. menambahkan interaktivitas pada halaman web", "C. mengatur tampilan warna halaman web", "D. membuat tabel pada halaman web", "E. membuat paragraf"],
            answer: 1
        },
        {
            text: `18. Perhatikan potongan kode JavaScript berikut!\n\`\`\`js\nfunction sapa(nama) {\n  return "Halo " + nama;\n}\n\`\`\`\nFungsi pada kode tersebut digunakan untuk ....`,
            options: ["A. Menyimpan gambar", "B. Menentukan warna halaman", "C. Menjadi nilai masukan fungsi", "D. Membuat variabel tetap", "E. Menghapus halaman website"],
            answer: 2
        },
        {
            text: "19. Variabel JavaScript yang nilainya dapat diubah menggunakan …",
            options: ["A. const", "B. let", "C. img", "D. title", "E. body"],
            answer: 1
        },
        {
            text: `20. Perhatikan potongan kode JavaScript berikut!\n\`\`\`js\nlet hasil = 5 ___ 3;\n\`\`\`\nOperator yang tepat untuk mengisi bagian kosong agar menghasilkan perkalian adalah ....`,
            options: ["A. +", "B. /", "C. *", "D. %", "E. ="],
            answer: 2
        }
    ];

    let currentQuestionIndex = 0;
    let score = 0;
    
    // Waktu 30 detik per soal
    const SECONDS_PER_QUESTION = 30;
    let timeLeft = SECONDS_PER_QUESTION; 
    let timerInterval;

    // Elemen DOM - Bagian Halaman
    const sectionIdentitas = document.getElementById('section-identitas');
    const sectionSoal = document.getElementById('section-soal');
    const formIdentitas = document.getElementById('form-identitas');

    // Elemen DOM - Soal/Kuis
    const questionTextEl = document.getElementById('question-text');
    const optionsContainerEl = document.getElementById('options-container');
    const infoQuestionEl = document.getElementById('info-question');
    const infoCompletedEl = document.getElementById('info-completed');
    const scoreDisplayEl = document.getElementById('score-display');
    const timerDisplayEl = document.getElementById('timer-display');
    const btnNext = document.getElementById('btn-next');
    const quizContainer = document.getElementById('section-soal');

    // Mencegah select teks pada form soal agar tidak mudah dicopy
    if(quizContainer) {
        quizContainer.style.userSelect = 'none';
    }

    // Transisi dari form identitas ke soal
    if(formIdentitas) {
        formIdentitas.addEventListener('submit', (e) => {
            e.preventDefault(); // Mencegah reload
            
            // Simpan nama dan kelas ke halaman hasil
            const nama = document.getElementById('nama').value;
            const kelas = document.getElementById('kelas').value;
            document.getElementById('hasil-nama').textContent = nama;
            document.getElementById('hasil-kelas').textContent = kelas;

            // Sembunyikan identitas, tampilkan soal
            sectionIdentitas.style.display = 'none';
            sectionSoal.style.display = 'flex';

            // Mulai kuis
            loadQuestion();
        });
    }

    function formatTime(seconds) {
        // Tampilkan hanya format detik karena ini per soal
        return seconds < 10 ? `0${seconds}` : seconds;
    }

    function startTimer(isResume = false) {
        clearInterval(timerInterval); // Hentikan timer sebelumnya
        if (!isResume) {
            timeLeft = SECONDS_PER_QUESTION; // Reset ke 30 jika bukan resume
        }
        timerDisplayEl.textContent = formatTime(timeLeft);
        
        timerInterval = setInterval(() => {
            timeLeft--;
            timerDisplayEl.textContent = formatTime(timeLeft);
            
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                // Waktu habis, proses jawaban yang ada dan lanjut
                handleNext(true); 
            }
        }, 1000);
    }

    function loadQuestion() {
        const q = questions[currentQuestionIndex];
        
        // Escape HTML tags agar kode di soal (seperti <br>, <img>, dll) tampil sebagai teks
        let escapedText = q.text.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        
        // Parse markdown code blocks (```html atau ```css) menjadi desain mockup code editor
        escapedText = escapedText.replace(/```([a-z]*)\n([\s\S]*?)\n```/g, (match, lang, p1) => {
            let title = 'index.html';
            if (lang === 'css') title = 'style.css';
            else if (lang === 'js' || lang === 'javascript') title = 'script.js';
            
            return `<div class="code-editor-mockup"><div class="code-editor-header"><span class="code-editor-dot" style="background: #ff5f56;"></span><span class="code-editor-dot" style="background: #ffbd2e;"></span><span class="code-editor-dot" style="background: #27c93f;"></span><span class="code-editor-title">${title}</span></div><div class="code-editor-body">${p1}</div></div>`;
        });
        
        // Cari URL spesifik dan beri styling ukuran lebih kecil & warna biru
        const urlTarget = "http://www.example.com/2011/samples/first.html";
        escapedText = escapedText.replace(urlTarget, `<span style="font-size: 0.8em; color: #007bff; font-weight: normal;">${urlTarget}</span>`);
        
        // Bungkus dalam div agar tidak terpengaruh arah flexbox row dari parent
        questionTextEl.innerHTML = `<div style="width: 100%;">${escapedText}</div>`;

        // Tampilkan gambar jika soal memiliki properti image
        let imgEl = document.getElementById('question-image');
        if (q.image) {
            if (!imgEl) {
                imgEl = document.createElement('img');
                imgEl.id = 'question-image';
                imgEl.style.cssText = 'max-width:100%; max-height:200px; display:block; margin:10px 0; border-radius:8px; border:1px solid #d4c9a0;';
                questionTextEl.parentNode.insertBefore(imgEl, questionTextEl.nextSibling);
            }
            imgEl.src = q.image;
            imgEl.style.display = 'block';
        } else {
            if (imgEl) imgEl.style.display = 'none';
        }
        
        infoQuestionEl.textContent = `Soal ${currentQuestionIndex + 1} dari ${questions.length}`;
        infoCompletedEl.textContent = `${currentQuestionIndex}/${questions.length}`;
        
        optionsContainerEl.innerHTML = '';
        
        q.options.forEach((opt, index) => {
            const label = document.createElement('label');
            label.className = 'option-item';
            
            const radio = document.createElement('input');
            radio.type = 'radio';
            radio.name = 'jawaban';
            radio.value = index;
            
            const span = document.createElement('span');
            span.className = 'option-text';
            span.textContent = opt; 
            
            label.appendChild(radio);
            label.appendChild(span);
            optionsContainerEl.appendChild(label);
        });

        if (currentQuestionIndex === questions.length - 1) {
            btnNext.textContent = 'Selesai';
        } else {
            btnNext.textContent = 'Selanjutnya';
        }

        // Mulai waktu 15 detik baru untuk soal ini
        startTimer();
    }

    function handleNext(isTimeout = false) {
        clearInterval(timerInterval); // Hentikan timer saat ini
        
        const selectedRadio = document.querySelector('input[name="jawaban"]:checked');

        // Jika tombol Selanjutnya diklik (bukan timeout) tapi belum milih jawaban
        if (!isTimeout && !selectedRadio) {
            alert("Silakan pilih salah satu jawaban terlebih dahulu!");
            startTimer(true); // Lanjutkan waktu dari yang tersisa
            return;
        }

        // Hitung jawaban jika ada yang dipilih (baik karena timeout maupun klik manual)
        if (selectedRadio) {
            const selectedAnswer = parseInt(selectedRadio.value);
            if (selectedAnswer === questions[currentQuestionIndex].answer) {
                score += 5;
                scoreDisplayEl.textContent = `Skor : ${score}`;
            }
        }

        currentQuestionIndex++;
        
        if (currentQuestionIndex < questions.length) {
            loadQuestion();
        } else {
            finishQuiz();
        }
    }

    function finishQuiz() {
        clearInterval(timerInterval);
        
        // Sembunyikan soal, tampilkan hasil
        sectionSoal.style.display = 'none';
        const sectionHasil = document.getElementById('section-hasil');
        sectionHasil.style.display = 'flex';
        
        // Hitung jawaban
        const correct = score / 5;
        const wrong = questions.length - correct;
        
        // Tampilkan data ke UI hasil
        document.getElementById('hasil-nilai-akhir').textContent = score;
        document.getElementById('hasil-benar').textContent = correct;
        document.getElementById('hasil-salah').textContent = wrong;
    }

    if (btnNext) {
        btnNext.addEventListener('click', () => handleNext(false));
    }
});
