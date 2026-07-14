<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Praktikum HTML — Media Pembelajaran SMK</title>
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- CSS Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            900: '#172B43', // Dark background based on the blue image
                            800: '#1F3A5F', // Header & Sidebar background
                            700: '#294B75', // Borders, inactive elements
                            accent: '#658FAF', // Hover states, active elements, highlights
                        }
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="style.css?v=3.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS CodeMirror -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/dracula.min.css">
    
    <style>
        /* Gaya Kustom CodeMirror */
        .CodeMirror {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        /* Scrollbar kustom untuk bilah samping */
        #sidebar-nav::-webkit-scrollbar {
            width: 6px;
        }
        #sidebar-nav::-webkit-scrollbar-track {
            background: #1F3A5F; 
        }
        #sidebar-nav::-webkit-scrollbar-thumb {
            background: #294B75; 
            border-radius: 4px;
        }
        #sidebar-nav::-webkit-scrollbar-thumb:hover {
            background: #658FAF; 
        }
    </style>
</head>
<body class="bg-brand-900 text-slate-200 antialiased font-sans selection:bg-brand-accent selection:text-white h-screen overflow-hidden">
    
    <div class="h-full flex flex-col">
        <!-- Header / Kepala Halaman -->
        <header class="h-14 flex items-center justify-between px-4 md:px-6 bg-red-800 text-white shadow-md border-b-4 border-red-700 z-10 shrink-0">
            <div class="flex items-center gap-3 md:gap-4">
                <a href="coding-lab.php" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-white/15 hover:bg-white/25 text-white text-sm border border-white/25 transition-colors" title="Kembali">
                    <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                    <span class="hidden sm:inline">Praktikum</span>
                </a>
                <button id="sidebar-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/15 hover:bg-white/25 border border-white/25 transition-colors" title="Sidebar">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <h1 class="font-semibold text-base md:text-lg text-white ml-1">Praktikum HTML</h1>
            </div>
            <div class="flex gap-2 md:gap-3">
                <button id="reset-btn" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-white/15 hover:bg-white/25 text-white text-sm border border-white/25 transition-colors" title="Reset Kode">
                    <i class="fas fa-undo"></i> <span class="hidden md:inline">Reset</span>
                </button>
                <button id="run-btn" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-700 hover:bg-red-600 text-white text-sm font-semibold transition-colors">
                    <i class="fas fa-play"></i> <span class="hidden md:inline">Jalankan</span><span class="md:hidden">Run</span>
                </button>
            </div>
        </header>

        <!-- Ruang Kerja Utama -->
        <main class="flex-grow flex flex-col md:flex-row h-[calc(100vh-4rem)] overflow-hidden">
            
            <!-- Bilah Samping (Sidebar) -->
            <aside id="tutorial-sidebar" class="w-full md:w-[250px] flex-shrink-0 bg-brand-800 text-slate-200 overflow-y-auto hidden md:flex flex-col border-r border-brand-700 transition-all duration-300 ease-in-out">
                <div class="pt-5 pb-3 px-4 text-xl tracking-wide font-bold text-white border-b border-brand-700/50 mb-2">HTML Tutorial</div>
                <nav class="flex flex-col text-[15px] pb-6 flex-grow" id="sidebar-nav">
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Introduction">HTML Introduction</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Headings">HTML Headings</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Paragraphs">HTML Paragraphs</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Links">HTML Links</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Images">HTML Images</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Tables">HTML Tables</a>
                    <a href="#" class="sidebar-item block px-4 py-2 hover:bg-brand-700 transition-colors" data-topic="HTML Forms">HTML Forms</a>
                </nav>
            </aside>

            <div class="flex-grow flex flex-col md:flex-row landscape:flex-row w-full overflow-hidden">
                <!-- Bagian Editor (Kiri / Atas) -->
                <section class="w-full md:w-1/2 landscape:w-1/2 h-1/2 md:h-full landscape:h-full flex flex-col border-b md:border-b-0 landscape:border-b-0 md:border-r landscape:border-r border-brand-700 relative">
                    <div class="bg-brand-800 text-xs py-2 px-4 border-b border-brand-700 text-brand-accent font-mono flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="fab fa-html5 text-orange-500 text-lg"></i> index.php
                        </div>
                    </div>
                    <div class="flex-grow relative w-full h-full bg-[#282a36]">
                        <textarea id="html-editor"></textarea>
                    </div>
                </section>
                
                <!-- Bagian Output (Kanan / Bawah) -->
                <section class="w-full md:w-1/2 landscape:w-1/2 h-1/2 md:h-full landscape:h-full flex flex-col bg-slate-100 p-2 md:p-4">
                    <div class="flex-grow flex flex-col rounded-lg overflow-hidden border border-slate-300 shadow-md bg-white">
                        <!-- Header Jendela macOS -->
                        <div class="bg-[#282a36] h-10 px-4 flex items-center gap-4 shrink-0">
                            <!-- Kontrol Jendela -->
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                            </div>
                            <!-- Judul -->
                            <span class="text-slate-200 text-sm font-medium tracking-wide">Result</span>
                        </div>
                        
                        <!-- Iframe Output -->
                        <div class="flex-grow relative bg-white">
                            <iframe id="output-frame" class="absolute top-0 left-0 w-full h-full border-none"></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Pustaka JS CodeMirror -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/htmlmixed/htmlmixed.min.js"></script>

    <script>
        // Inisialisasi Editor CodeMirror
        let editor = CodeMirror.fromTextArea(document.getElementById('html-editor'), {
            mode: 'htmlmixed',
            theme: 'dracula',
            lineNumbers: true,
            indentUnit: 4,
            lineWrapping: true,
            scrollbarStyle: 'native'
        });

        // Data Tutorial yang memetakan topik ke kode HTML
        const tutorialData = {
            'HTML Introduction': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Introduction</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h1>Apa itu HTML?</h1>
<p>HTML adalah bahasa markup standar untuk membuat halaman web.</p>
<p>HTML mendeskripsikan struktur halaman web menggunakan markup.</p>
<p>Elemen HTML adalah blok pembangun halaman HTML.</p>

</body>
</html>`,
            'HTML Headings': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Headings</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h1>Ini adalah Heading 1</h1>
<h2>Ini adalah Heading 2</h2>
<h3>Ini adalah Heading 3</h3>
<h4>Ini adalah Heading 4</h4>
<h5>Ini adalah Heading 5</h5>
<h6>Ini adalah Heading 6</h6>

<p>Heading digunakan untuk memberikan judul pada bagian konten dengan hierarki tertentu.</p>

</body>
</html>`,
            'HTML Paragraphs': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Paragraphs</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<p>Ini adalah sebuah paragraf.</p>
<p>Ini adalah paragraf lainnya.</p>

<p>Paragraf selalu dimulai pada baris baru, dan browser secara otomatis menambahkan margin (spasi putih) sebelum dan sesudah paragraf.</p>

</body>
</html>`,
            'HTML Links': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Links</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h2>HTML Links</h2>
<p>Link HTML didefinisikan dengan tag &lt;a&gt;:</p>

<a href="https://www.w3schools.com" target="_blank" style="color: blue; text-decoration: underline;">Ini adalah sebuah link ke W3Schools</a>

</body>
</html>`,
            'HTML Images': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Images</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h2>Latihan Mengganti Gambar</h2>
<p>Cobalah ganti link di dalam <b>src</b> dengan link gambar lain, lalu klik "Run Code"!</p>

<!-- Ganti link di bawah ini untuk mencoba gambar lain -->
<img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500" alt="Laptop untuk Coding" width="300" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
</body>
</html>`,
            'HTML Tables': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Tables</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Gunakan kode HEX seperti #f2f2f2 atau nama warna seperti grey tanpa tanda pagar */
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h2>HTML Tables</h2>

<table style="width:100%">
  <tr>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>Umur</th>
  </tr>
  <tr>
    <td>Andi</td>
    <td>Setiawan</td>
    <td>24</td>
  </tr>
  <tr>
    <td>Budi</td>
    <td>Santoso</td>
    <td>29</td>
  </tr>
</table>

</body>
</html>`,
            'HTML Forms': `<!DOCTYPE html>
<html lang="id">
<head>
    <title>HTML Forms</title>
    <style>
        input[type=text] {
            padding: 5px;
            margin: 5px 0 15px 0;
        }
        input[type=submit] {
            padding: 8px 15px;
            background-color: #1F3A5F;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type=submit]:hover {
            background-color: #294B75;
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

<h2>Formulir HTML</h2>

<form onsubmit="event.preventDefault(); alert('Ini hanyalah simulasi. Di dunia nyata, data dari form ini akan dikirim ke server (seperti PHP atau API) yang ada di atribut action untuk diproses atau disimpan ke database.');">
  <label for="fname">Nama Depan:</label><br>
  <input type="text" id="fname" name="fname" value="Budi"><br>
  
  <label for="lname">Nama Belakang:</label><br>
  <input type="text" id="lname" name="lname" value="Santoso"><br>
  
  <input type="submit" value="Kirim">
</form> 

</body>
</html>`
        };

        // Atur Nilai Bawaan ke Editor
        editor.setValue(tutorialData['HTML Introduction']);

        // Logika Menjalankan Kode
        function runCode() {
            let code = editor.getValue();
            
            // Otomatis tambahkan base tag agar gambar dari folder lokal (images/...) bisa terbaca
            const baseTag = '<base href="' + window.location.href + '">';
            if (code.includes('<head>')) {
                code = code.replace('<head>', '<head>' + baseTag);
            } else {
                code = baseTag + code;
            }

            const iframe = document.getElementById('output-frame');
            iframe.srcdoc = code;
        }

        // Jalankan saat tombol Run diklik
        document.getElementById('run-btn').addEventListener('click', runCode);

        // Logika klik bilah samping
        const sidebarItems = document.querySelectorAll('.sidebar-item');
        sidebarItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                // Hapus kelas aktif dari semua item
                sidebarItems.forEach(el => {
                    el.classList.remove('bg-brand-accent', 'text-white', 'font-bold', 'border-l-4', 'border-white');
                    el.classList.add('hover:bg-brand-700');
                });
                
                // Tambahkan kelas aktif ke item yang diklik
                e.target.classList.remove('hover:bg-brand-700');
                e.target.classList.add('bg-brand-accent', 'text-white', 'font-bold', 'border-l-4', 'border-white');
                
                // Perbarui editor dan jalankan
                const topic = e.target.getAttribute('data-topic');
                if(tutorialData[topic]) {
                    editor.setValue(tutorialData[topic]);
                    runCode();
                }
            });
        });

        // Inisialisasi item pertama sebagai aktif
        sidebarItems[0].classList.remove('hover:bg-brand-700');
        sidebarItems[0].classList.add('bg-brand-accent', 'text-white', 'font-bold', 'border-l-4', 'border-white');

        // Logika Pengalih Bilah Samping
        const sidebar = document.getElementById('tutorial-sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        
        sidebarToggle.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('flex');
            } else {
                sidebar.classList.toggle('md:-ml-[250px]');
            }
            // Segarkan tata letak editor setelah animasi selesai
            setTimeout(() => editor.refresh(), 300);
        });

        // Logika Atur Ulang (Reset)
        document.getElementById('reset-btn').addEventListener('click', () => {
            const activeItem = document.querySelector('.sidebar-item.bg-brand-accent');
            if(activeItem) {
                const topic = activeItem.getAttribute('data-topic');
                if(tutorialData[topic] && confirm('Apakah Anda yakin ingin mereset kode ke kondisi awal materi ini?')) {
                    editor.setValue(tutorialData[topic]);
                    runCode();
                }
            }
        });

        // Jalankan kode pada pemuatan pertama
        window.addEventListener('load', runCode);
    </script>
</body>
</html>
