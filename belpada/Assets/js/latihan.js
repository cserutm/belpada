(function () {
  const questions = [
    {
      prompt: "Susunlah potongan tag HTML berikut menjadi struktur yang benar.",
      pool: ["<html>", "<body>", "</html>", "</body>", "<head>", "</head>"],
      correct: ["<html>", "<body>", "</body>", "</html>"]
    },
    {
      prompt: 'Susunlah potongan kode berikut sehingga membentuk elemen paragraf yang menampilkan teks "Selamat Datang".',
      pool: ["</p>", "<h1>", "<p>", "</h1>", "Selamat Datang"],
      correct: ["<p>", "Selamat Datang", "</p>"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk elemen gambar yang benar.",
      pool: ["<img", "src=\"foto.jpg\"", "href=\"foto.jpg\"", "alt=\"gambar\"", ">"],
      correct: ["<img", "src=\"foto.jpg\"", ">"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk tautan menuju halaman Google.",
      pool: ["<a", "Google", "</a>", "<img>", "href=\"https://google.com\">"],
      correct: ["<a", "href=\"https://google.com\">", "Google", "</a>"]
    },
    {
      prompt: "Susunlah tag HTML berikut sehingga membentuk struktur tabel yang benar.",
      pool: ["</table>", "<tr>", "<table>", "<td>Data</td>", "</tr>"],
      correct: ["<table>", "<tr>", "<td>Data</td>", "</tr>", "</table>"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk elemen input pilihan tunggal yang benar.",
      pool: ["<input", ">", "type=\"password\"", "type=\"checkbox\"", "type=\"radio\""],
      correct: ["<input", "type=\"radio\"", ">"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk selector CSS untuk elemen dengan ID \"judul\".",
      pool: ["#", "judul", ".", "*"],
      correct: ["#", "judul"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk aturan CSS yang memberikan jarak dalam sebesar 20px pada elemen.",
      pool: ["padding", ".box {", ": 20px;", "color", "}"],
      correct: [".box {", "padding", ": 20px;", "}"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga mengaktifkan Flexbox pada elemen container.",
      pool: ["display:flex", ";", ".container {", "font-size:20px", "}"],
      correct: [".container {", "display:flex", ";", "}"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk deklarasi variabel JavaScript yang benar.",
      pool: ["let", "=", "nama", ";", "const", "\"Lia\"", "img"],
      correct: ["let", "nama", "=", "\"Lia\"", ";"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk deklarasi variabel dengan tipe data angka yang benar.",
      pool: ["umur", "15", ";", "=", "let", "\"Lia\""],
      correct: ["let", "umur", "=", "15", ";"]
    },
    {
      prompt: "Susunlah potongan kode berikut sehingga membentuk operasi penjumlahan yang benar pada JavaScript.",
      pool: ["let", "5", "+", "hasil", "=", "3", ";", "-"],
      correct: ["let", "hasil", "=", "5", "+", "3", ";"]
    }
  ];

  let currentIndex = 0;
  let activeSoal = null;

  const elPool = document.getElementById('pool');
  const elAnswer = document.getElementById('answerList');
  const elResult = document.getElementById('result');
  const elNow = document.getElementById('soal-now');
  const elTotal = document.getElementById('soal-total');
  const elDesc = document.getElementById('soal-desc');
  const elTimer = document.getElementById('latihan-timer');
  const elWaktuAkhir = document.getElementById('waktu-akhir');
  const btnCheck = document.getElementById('btnCheck');

  let timeElapsed = 0;
  let timerInterval = null;

  function formatTime(seconds) {
    const m = Math.floor(seconds / 60).toString().padStart(2, '0');
    const s = (seconds % 60).toString().padStart(2, '0');
    return `${m}:${s}`;
  }

  function formatDiffTime(seconds) {
    const m = Math.floor(seconds / 60);
    const s = seconds % 60;
    if (m > 0 && s > 0) return `${m} menit ${s} detik`;
    if (m > 0) return `${m} menit`;
    return `${s} detik`;
  }

  function startTimer() {
    if (timerInterval) clearInterval(timerInterval);
    timeElapsed = 0;
    if (elTimer) elTimer.textContent = formatTime(timeElapsed);
    timerInterval = setInterval(() => {
      timeElapsed++;
      if (elTimer) elTimer.textContent = formatTime(timeElapsed);
    }, 1000);
  }

  function stopTimer() {
    if (timerInterval) clearInterval(timerInterval);
  }

  function escapeHtml(s) {
    return s.replaceAll('&', '&amp;').replaceAll('<', '&lt;').replaceAll('>', '&gt;');
  }

  function loadQuestion() {
    const q = questions[currentIndex];
    activeSoal = {
      pool: [...q.pool], // Salin
      correct: q.correct,
      answer: Array(q.correct.length).fill('')
    };
    
    elNow.textContent = currentIndex + 1;
    elTotal.textContent = questions.length;
    elDesc.textContent = q.prompt;
    
    // Sembunyikan tombol check karena kita pakai auto-check
    btnCheck.style.display = 'none';
    
    render();
  }

  function render() {
    // Render area pilihan
    elPool.innerHTML = '';
    activeSoal.pool.forEach((text, idx) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'pill pill-pool';
      btn.dataset.index = idx;
      btn.innerHTML = '<span class="pill-text">' + escapeHtml(text) + '</span>';
      btn.addEventListener('click', () => moveToAnswer(idx));
      elPool.appendChild(btn);
    });

    // Render slot jawaban
    elAnswer.innerHTML = '';
    const slots = activeSoal.correct.length;
    for (let i = 0; i < slots; i++) {
      const li = document.createElement('li');
      li.className = 'answer-row';

      const num = document.createElement('div');
      num.className = 'answer-num';
      num.textContent = String(i + 1) + '.';

      const slot = document.createElement('button');
      slot.type = 'button';
      slot.className = 'pill pill-answer';
      slot.dataset.slot = i;

      const val = activeSoal.answer[i];
      slot.innerHTML = '<span class="pill-text">' + (val ? escapeHtml(val) : '&nbsp;') + '</span>';

      slot.addEventListener('click', () => returnToPool(i));

      li.appendChild(num);
      li.appendChild(slot);
      elAnswer.appendChild(li);
    }

    elResult.textContent = '';
    elResult.className = 'result';
  }

  function moveToAnswer(poolIndex) {
    if (elResult.className === 'result result-ok') return; // Jangan izinkan klik saat sedang transisi pindah soal
    
    const text = activeSoal.pool[poolIndex];
    if (!text) return;
    const emptyIdx = activeSoal.answer.findIndex((x) => !x);
    if (emptyIdx === -1) return;
    activeSoal.answer[emptyIdx] = text;
    activeSoal.pool.splice(poolIndex, 1);
    render();

    // Auto-check jika semua slot jawaban sudah terisi
    if (!activeSoal.answer.some(x => !x)) {
      check();
    }
  }

  function returnToPool(slotIndex) {
    if (elResult.className === 'result result-ok') return; // Jangan izinkan klik saat transisi
    
    const text = activeSoal.answer[slotIndex];
    if (!text) return;
    activeSoal.pool.push(text);
    activeSoal.answer[slotIndex] = '';
    render();
  }

  function reset() {
    if (elResult.className === 'result result-ok') return;
    activeSoal.pool = [...questions[currentIndex].pool];
    activeSoal.answer = Array(activeSoal.correct.length).fill('');
    render();
  }

  function check() {
    if (activeSoal.answer.some((x) => !x)) {
      return; // Jangan lakukan apapun jika belum penuh
    }

    const ok = activeSoal.answer.every((v, i) => v === activeSoal.correct[i]);
    if (ok) {
      elResult.textContent = 'Benar! Memuat soal selanjutnya...';
      elResult.className = 'result result-ok';
      
      if (currentIndex === questions.length - 1) {
        elResult.textContent = 'Luar Biasa! Semua soal berhasil diselesaikan.';
        stopTimer();
        if (elWaktuAkhir) elWaktuAkhir.textContent = formatTime(timeElapsed);
        
        const prevBest = localStorage.getItem('belpada_latihan_best_time');
        let apresiasiMsg = "";
        let showApresiasi = false;
        
        if (prevBest) {
          const prevTime = parseInt(prevBest, 10);
          if (timeElapsed < prevTime) {
            const diff = prevTime - timeElapsed;
            apresiasiMsg = `🎉 Luar biasa! Anda lebih cepat ${formatDiffTime(diff)} dari waktu tercepat Anda sebelumnya!`;
            showApresiasi = true;
            localStorage.setItem('belpada_latihan_best_time', timeElapsed.toString());
          }
        } else {
          localStorage.setItem('belpada_latihan_best_time', timeElapsed.toString());
        }

        setTimeout(() => {
          const modal = document.getElementById('latihan-selesai-modal');
          if(modal) {
            modal.style.display = 'flex';
            const apresiasiEl = document.getElementById('apresiasi-text');
            if (apresiasiEl) {
              if (showApresiasi) {
                apresiasiEl.textContent = apresiasiMsg;
                apresiasiEl.style.display = 'block';
              } else {
                apresiasiEl.style.display = 'none';
              }
            }
          }
        }, 1000);
      } else {
        // Transisi otomatis ke soal berikutnya setelah delay singkat
        setTimeout(() => {
          currentIndex++;
          loadQuestion();
        }, 1200); // Tunggu 1.2 detik agar user sempat membaca tulisan "Benar!"
      }
    } else {
      elResult.textContent = 'Belum tepat. Coba susun lagi.';
      elResult.className = 'result result-bad';
    }
  }

  document.getElementById('btnReset').addEventListener('click', reset);

  const btnMulai = document.getElementById('btn-mulai-latihan');
  const modalMulai = document.getElementById('latihan-mulai-modal');

  loadQuestion();

  if (btnMulai && modalMulai) {
    btnMulai.addEventListener('click', () => {
      modalMulai.style.display = 'none';
      startTimer();
    });
  } else {
    startTimer(); 
  }
})();
