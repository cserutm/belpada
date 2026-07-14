document.addEventListener('DOMContentLoaded', () => {
    const templates = {
        "Pengenalan HTML": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>Pengenalan HTML</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px;">\n\n<h1>Apa itu HTML?</h1>\n<p>HTML adalah bahasa markup standar untuk membuat\nhalaman web.</p>\n<p>HTML mendeskripsikan struktur halaman web \nmenggunakan markup.</p>\n<p>Elemen HTML adalah blok pembangun halaman HTML.</p>\n\n</body>\n</html>`,
        "HTML Teks": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>HTML Headings</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px;">\n\n<h1>Ini adalah Heading 1</h1>\n<h2>Ini adalah Heading 2</h2>\n<h3>Ini adalah Heading 3</h3>\n<h4>Ini adalah Heading 4</h4>\n<h5>Ini adalah Heading 5</h5>\n<h6>Ini adalah Heading 6</h6>\n\n<p>Heading digunakan untuk memberikan judul pada\nbagian konten dengan hierarki tertentu.</p>\n\n</body>\n</html>`,
        "HTML Tabel": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>HTML Tabel</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px;">\n\n<h2>Tabel Siswa</h2>\n\n<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">\n  <tr>\n    <th>Nama</th>\n    <th>Kelas</th>\n    <th>Nilai</th>\n  </tr>\n  <tr>\n    <td>Andi</td>\n    <td>X RPL</td>\n    <td>90</td>\n  </tr>\n  <tr>\n    <td>Budi</td>\n    <td>X TKJ</td>\n    <td>85</td>\n  </tr>\n</table>\n\n</body>\n</html>`,
        "HTML Gambar": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>HTML Gambar</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px; text-align: center;">\n\n<h2>Menampilkan Gambar</h2>\n<p>Gunakan tag &lt;img&gt; untuk menampilkan gambar.</p>\n\n<img src="Assets/img/logo.png" alt="Logo Belpada" width="200" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">\n\n</body>\n</html>`,
        "HTML Link": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>HTML Link</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px;">\n\n<h2>Membuat Tautan (Link)</h2>\n\n<p>Klik teks di bawah ini untuk mengunjungi website sekolah:</p>\n\n<a href="https://web.smksemengresik.sch.id/" target="_blank" style="color: blue; text-decoration: underline; font-size: 18px;">Kunjungi Website SMK Semen Gresik</a>\n\n</body>\n</html>`,
        "HTML Form": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>HTML Form</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 20px;">\n\n<h2>Formulir Pendaftaran</h2>\n\n<form action="#" method="get">\n  <label for="nama">Nama Lengkap:</label><br>\n  <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required style="padding: 5px; margin-bottom: 10px;"><br>\n  \n  <label for="password">Kata Sandi:</label><br>\n  <input type="password" id="password" name="password" style="padding: 5px; margin-bottom: 15px;"><br>\n  \n  <input type="submit" value="Daftar" style="padding: 8px 15px; background: #007bff; color: white; border: none; cursor: pointer; border-radius: 4px;">\n</form>\n\n</body>\n</html>`,
        
        "Pengenalan CSS": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>Pengenalan CSS</title>\n    <style>\n        body {\n            background-color: #f4f4f9;\n            font-family: Arial, sans-serif;\n        }\n        h1 {\n            color: darkblue;\n            text-align: center;\n        }\n        p {\n            font-size: 18px;\n            color: #555;\n        }\n    </style>\n</head>\n<body>\n\n<h1>Selamat Datang di CSS!</h1>\n<p>CSS (Cascading Style Sheets) digunakan untuk mengatur gaya halaman web.</p>\n<p>Coba ubah background-color pada tag <code>style</code> di atas menjadi warna lain!</p>\n\n</body>\n</html>`,
        "CSS Selektor dan Properti": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>CSS Selektor</title>\n    <style>\n        /* Tag Selector */\n        h2 { color: crimson; }\n        \n        /* Class Selector */\n        .teks-tebal {\n            font-weight: bold;\n            color: green;\n        }\n        \n        /* ID Selector */\n        #sorotan {\n            background-color: yellow;\n            padding: 5px;\n            border-radius: 3px;\n        }\n    </style>\n</head>\n<body style="font-family: sans-serif; margin: 20px;">\n\n<h2>Ini dikontrol oleh Tag Selector</h2>\n<p class="teks-tebal">Paragraf ini menggunakan Class Selector (.teks-tebal)</p>\n<p>Sedangkan kalimat ini memiliki <span id="sorotan">ID Selector (#sorotan)</span> di tengah-tengahnya.</p>\n\n</body>\n</html>`,
        "CSS Box Model": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>CSS Box Model</title>\n    <style>\n        .box {\n            width: 250px;\n            background-color: lightblue;\n            border: 5px solid darkblue;\n            padding: 20px; /* Jarak bagian dalam */\n            margin: 30px auto; /* Jarak bagian luar (auto untuk rata tengah) */\n            text-align: center;\n        }\n    </style>\n</head>\n<body style="font-family: Arial, sans-serif;">\n\n<h2 style="text-align:center;">Memahami Box Model</h2>\n<div class="box">\n  Saya adalah sebuah BOX!\n  <br><br>\n  (Padding 20px, Border 5px, Margin 30px)\n</div>\n\n</body>\n</html>`,
        "CSS Flexbox": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>CSS Flexbox</title>\n    <style>\n        .container {\n            display: flex;\n            justify-content: space-around; /* Opsi lain: center, space-between */\n            align-items: center;\n            background-color: #2b2b2b;\n            padding: 20px;\n            height: 150px;\n        }\n        .item {\n            background-color: #ff5722;\n            color: white;\n            padding: 20px 40px;\n            font-size: 20px;\n            font-weight: bold;\n            border-radius: 8px;\n        }\n    </style>\n</head>\n<body style="font-family: sans-serif; margin: 0;">\n\n<h3 style="text-align:center;">Flexbox Container</h3>\n<div class="container">\n    <div class="item">Satu</div>\n    <div class="item">Dua</div>\n    <div class="item">Tiga</div>\n</div>\n<p style="text-align:center; color:#666;">Coba ubah <code>justify-content</code> di CSS untuk melihat efek pergerakannya.</p>\n\n</body>\n</html>`,
        
        "Pengenalan JS": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>Pengenalan JS</title>\n</head>\n<body style="font-family: Arial, sans-serif; margin: 30px; text-align: center;">\n\n<h1>Halo JavaScript!</h1>\n<p id="teks">Teks ini akan diubah oleh JavaScript.</p>\n\n<button onclick="ubahTeks()" style="padding: 10px 20px; font-size: 16px;">Klik Saya!</button>\n\n<script>\n    function ubahTeks() {\n        document.getElementById("teks").innerHTML = "Berhasil! JavaScript memberikan interaksi!";\n        document.getElementById("teks").style.color = "green";\n        document.getElementById("teks").style.fontWeight = "bold";\n    }\n</script>\n\n</body>\n</html>`,
        "JS Function": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>JS Function</title>\n</head>\n<body style="font-family: sans-serif; padding: 20px;">\n\n<h2>Membuat Fungsi JavaScript</h2>\n<p id="hasil" style="font-size: 20px; font-weight: bold; color: blue;"></p>\n\n<script>\n    // Mendeklarasikan fungsi bernama 'sapa'\n    function sapa(nama) {\n        return "Halo, selamat datang " + nama + "!";\n    }\n\n    // Memanggil fungsi dan menampilkannya di HTML\n    let pesan = sapa("Siswa Pintar");\n    document.getElementById("hasil").innerHTML = pesan;\n</script>\n\n</body>\n</html>`,
        "JS Variabel dan Tipe data": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>JS Variabel</title>\n</head>\n<body style="font-family: monospace; padding: 20px; font-size: 16px;">\n\n<h2>Variabel dan Tipe Data</h2>\n<div id="output" style="background:#eee; padding:15px; border-radius:5px;"></div>\n\n<script>\n    // Deklarasi variabel (let bisa diubah, const tetap)\n    const namaSiswa = "Budi";  // Tipe: String\n    let umur = 16;             // Tipe: Number\n    let statusAktif = true;    // Tipe: Boolean\n\n    // Ubah nilai variabel\n    umur = 17;\n\n    // Susun pesan\n    let teks = "Nama: " + namaSiswa + "<br>";\n    teks += "Umur: " + umur + " tahun<br>";\n    teks += "Status Aktif: " + statusAktif;\n\n    // Tampilkan\n    document.getElementById("output").innerHTML = teks;\n</script>\n\n</body>\n</html>`,
        "JS Operator": `<!DOCTYPE html>\n<html lang="id">\n<head>\n    <title>JS Operator</title>\n</head>\n<body style="font-family: Arial, sans-serif; padding: 20px;">\n\n<h2>Operator Matematika</h2>\n<ul id="daftar-hasil" style="font-size: 18px; line-height: 1.8;"></ul>\n\n<script>\n    let a = 15;\n    let b = 5;\n\n    let tambah = a + b;\n    let kurang = a - b;\n    let kali = a * b;\n    let bagi = a / b;\n\n    // Memasukkan hasil ke dalam elemen daftar (ul)\n    let listHtml = "";\n    listHtml += "<li>Penjumlahan (" + a + " + " + b + ") = " + tambah + "</li>";\n    listHtml += "<li>Pengurangan (" + a + " - " + b + ") = " + kurang + "</li>";\n    listHtml += "<li>Perkalian (" + a + " * " + b + ") = " + kali + "</li>";\n    listHtml += "<li>Pembagian (" + a + " / " + b + ") = " + bagi + "</li>";\n\n    document.getElementById("daftar-hasil").innerHTML = listHtml;\n</script>\n\n</body>\n</html>`
    };

    // Fungsi pembantu untuk menangani klik/sentuhan secara responsif baik di desktop maupun mobile
    function bindClick(element, callback) {
        if (!element) return;
        let lastTriggerTime = 0;
        
        function handler(e) {
            const now = Date.now();
            if (now - lastTriggerTime < 500) {
                e.preventDefault();
                return;
            }
            lastTriggerTime = now;
            callback(e);
        }
        
        element.addEventListener('click', handler);
        element.addEventListener('touchend', (e) => {
            e.preventDefault(); // Mencegah emulated click untuk aksi yang cepat dan responsif
            handler(e);
        }, { passive: false });
    }

    // Logika Sidebar
    const openSidebarBtn = document.getElementById("openSidebar");
    const closeSidebarBtn = document.getElementById("closeSidebar");
    const sidebar = document.getElementById("labSidebar");
    const overlay = document.getElementById("sidebarOverlay");

    if (openSidebarBtn && closeSidebarBtn && sidebar && overlay) {
        bindClick(openSidebarBtn, () => {
            sidebar.classList.add("active");
            overlay.classList.add("active");
        });

        const closeSidebar = () => {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        };

        bindClick(closeSidebarBtn, closeSidebar);
        bindClick(overlay, closeSidebar);
    }

    // Inisialisasi CodeMirror pada textarea
    const editorElement = document.getElementById('codeEditor');
    
    // Pastikan CodeMirror tersedia sebelum inisialisasi
    if (typeof CodeMirror !== 'undefined' && editorElement) {
        const editor = CodeMirror.fromTextArea(editorElement, {
            mode: 'htmlmixed',
            theme: 'dracula',
            lineNumbers: true,
            autoCloseTags: true,
            lineWrapping: true,
            inputStyle: 'textarea' // Sangat penting agar virtual keyboard responsif & stabil di mobile
        });

        // Set ukuran editor agar mengisi parent penuh
        editor.setSize("100%", "100%");

        // Simpan kode default untuk fungsi reset
        let defaultCode = editor.getValue();
        
        const outputFrame = document.getElementById('outputFrame');
        const btnRun = document.getElementById('btnRun');
        const btnReset = document.getElementById('btnReset');

        // Klik di manapun pada editor container untuk memicu focus editor pada mobile
        const editorContainer = document.querySelector('.editor-body');
        if (editorContainer) {
            editorContainer.addEventListener('click', () => {
                editor.focus();
            });
            editorContainer.addEventListener('touchend', (e) => {
                editor.focus();
            });
        }



        const consolePanel = document.getElementById('consolePanel');
        const btnToggleConsole = document.getElementById('btnToggleConsole');
        const btnCloseConsole = document.getElementById('btnCloseConsole');
        const btnClearConsole = document.getElementById('btnClearConsole');
        const consoleLogs = document.getElementById('consoleLogs');
        const errorCountBadge = document.getElementById('errorCountBadge');
        let errorCount = 0;
        let errorLineHandle = null;

        // Injected error and console instrumentation script
        const injectScript = `<script>
        (function() {
            // MANUAL_RUN_FLAG
            if (typeof IS_MANUAL_RUN === 'undefined') {
                var IS_MANUAL_RUN = false;
            }

            // Listen for errors
            window.addEventListener('error', function(e) {
                window.parent.postMessage({
                    source: 'iframe-error',
                    message: e.message || 'Error occurred',
                    filename: e.filename || '',
                    lineno: e.lineno || 0,
                    colno: e.colno || 0
                }, '*');
            });

            window.addEventListener('unhandledrejection', function(e) {
                window.parent.postMessage({
                    source: 'iframe-error',
                    message: 'Unhandled Promise Rejection: ' + (e.reason ? (e.reason.message || e.reason) : 'Unknown reason'),
                    filename: '',
                    lineno: 0,
                    colno: 0
                }, '*');
            });

            // Suppress popups during auto-run
            if (!IS_MANUAL_RUN) {
                window.alert = function(msg) {
                    window.parent.postMessage({
                        source: 'iframe-console',
                        type: 'info',
                        message: '[Simulasi Alert]: ' + msg
                    }, '*');
                };
                window.confirm = function(msg) {
                    window.parent.postMessage({
                        source: 'iframe-console',
                        type: 'info',
                        message: '[Simulasi Confirm]: ' + msg
                    }, '*');
                    return true;
                };
                window.prompt = function(msg) {
                    window.parent.postMessage({
                        source: 'iframe-console',
                        type: 'info',
                        message: '[Simulasi Prompt]: ' + msg
                    }, '*');
                    return '';
                };
            }

            // Capture console output
            var _log = console.log;
            var _error = console.error;
            var _warn = console.warn;
            var _info = console.info;

            function sendToParent(type, args) {
                var message = Array.prototype.slice.call(args).map(function(arg) {
                    if (arg === null) return 'null';
                    if (arg === undefined) return 'undefined';
                    if (typeof arg === 'object') {
                        try {
                            return JSON.stringify(arg);
                        } catch (err) {
                            return String(arg);
                        }
                    }
                    return String(arg);
                }).join(' ');

                window.parent.postMessage({
                    source: 'iframe-console',
                    type: type,
                    message: message
                }, '*');
            }

            console.log = function() {
                _log.apply(console, arguments);
                sendToParent('log', arguments);
            };
            console.error = function() {
                _error.apply(console, arguments);
                sendToParent('error', arguments);
            };
            console.warn = function() {
                _warn.apply(console, arguments);
                sendToParent('warn', arguments);
            };
            console.info = function() {
                _info.apply(console, arguments);
                sendToParent('info', arguments);
            };
        })();
        <\/script>\n`;

        const injectLines = injectScript.split('\n').length - 1;

        function openConsole() {
            if (consolePanel) consolePanel.classList.add('active');
            if (btnToggleConsole) btnToggleConsole.classList.add('active');
        }

        function closeConsole() {
            if (consolePanel) consolePanel.classList.remove('active');
            if (btnToggleConsole) btnToggleConsole.classList.remove('active');
        }

        if (btnToggleConsole) {
            bindClick(btnToggleConsole, () => {
                if (consolePanel && consolePanel.classList.contains('active')) {
                    closeConsole();
                } else {
                    openConsole();
                }
            });
        }

        if (btnCloseConsole) {
            bindClick(btnCloseConsole, closeConsole);
        }

        if (btnClearConsole) {
            bindClick(btnClearConsole, () => {
                clearConsole();
            });
        }

        function updateErrorBadge() {
            if (errorCountBadge) {
                if (errorCount > 0) {
                    errorCountBadge.textContent = errorCount;
                    errorCountBadge.style.display = 'inline-block';
                } else {
                    errorCountBadge.style.display = 'none';
                }
            }
        }

        function clearConsole() {
            if (consoleLogs) {
                consoleLogs.innerHTML = '<div class="console-placeholder">Jalankan kode untuk melihat output konsol atau pesan eror.</div>';
            }
            errorCount = 0;
            updateErrorBadge();
            clearErrorHighlight();
        }

        function clearErrorHighlight() {
            if (errorLineHandle !== null) {
                editor.removeLineClass(errorLineHandle, 'background', 'cm-error-line');
                errorLineHandle = null;
            }
        }

        function highlightErrorLine(lineNo) {
            clearErrorHighlight();
            if (lineNo > 0 && lineNo <= editor.lineCount()) {
                errorLineHandle = editor.addLineClass(lineNo - 1, 'background', 'cm-error-line');
            }
        }

        // Auto-run debounced listener (real-time error checking)
        let autoRunTimeout = null;
        editor.on('change', () => {
            clearErrorHighlight();
            if (autoRunTimeout) {
                clearTimeout(autoRunTimeout);
            }
            autoRunTimeout = setTimeout(() => {
                runCode(false);
            }, 1000);
        });

        function handleSandboxError(error) {
            errorCount++;
            updateErrorBadge();

            let lineNo = error.lineno;
            const isInline = !error.filename || 
                             error.filename === 'about:srcdoc' || 
                             error.filename.indexOf('http') === -1;

            if (isInline && lineNo > 0) {
                lineNo = lineNo - injectLines;
            }

            if (consoleLogs) {
                const placeholder = consoleLogs.querySelector('.console-placeholder');
                if (placeholder) placeholder.remove();

                const lineDiv = document.createElement('div');
                lineDiv.className = 'console-line console-line-error';

                const icon = document.createElement('i');
                icon.className = 'fa-solid fa-circle-xmark console-line-icon';
                lineDiv.appendChild(icon);

                const msgSpan = document.createElement('span');
                msgSpan.className = 'console-line-message';
                msgSpan.textContent = error.message;
                lineDiv.appendChild(msgSpan);

                if (isInline && lineNo > 0 && lineNo <= editor.lineCount()) {
                    const locSpan = document.createElement('span');
                    locSpan.className = 'console-line-location';
                    locSpan.textContent = `[Baris ${lineNo}]`;
                    locSpan.addEventListener('click', () => {
                        highlightErrorLine(lineNo);
                        editor.setSelection({line: lineNo - 1, ch: 0}, {line: lineNo - 1, ch: 999});
                        editor.focus();
                    });
                    lineDiv.appendChild(locSpan);

                    highlightErrorLine(lineNo);
                }

                consoleLogs.appendChild(lineDiv);
                consoleLogs.scrollTop = consoleLogs.scrollHeight;
            }

            openConsole();
        }

        function handleSandboxConsole(log) {
            if (consoleLogs) {
                const placeholder = consoleLogs.querySelector('.console-placeholder');
                if (placeholder) placeholder.remove();

                const lineDiv = document.createElement('div');
                lineDiv.className = 'console-line console-line-' + log.type;

                const icon = document.createElement('i');
                let iconClass = 'fa-solid fa-angle-right';
                if (log.type === 'error') {
                    iconClass = 'fa-solid fa-circle-xmark';
                    errorCount++;
                    updateErrorBadge();
                } else if (log.type === 'warn') {
                    iconClass = 'fa-solid fa-triangle-exclamation';
                } else if (log.type === 'info') {
                    iconClass = 'fa-solid fa-circle-info';
                }
                icon.className = iconClass + ' console-line-icon';
                lineDiv.appendChild(icon);

                const msgSpan = document.createElement('span');
                msgSpan.className = 'console-line-message';
                msgSpan.textContent = log.message;
                lineDiv.appendChild(msgSpan);

                consoleLogs.appendChild(lineDiv);
                consoleLogs.scrollTop = consoleLogs.scrollHeight;

                if (log.type === 'error') {
                    openConsole();
                }
            }
        }

        window.addEventListener('message', (event) => {
            if (event.source !== outputFrame.contentWindow) return;
            
            const payload = event.data;
            if (!payload || typeof payload !== 'object') return;

            if (payload.source === 'iframe-error') {
                handleSandboxError(payload);
            } else if (payload.source === 'iframe-console') {
                handleSandboxConsole(payload);
            }
        });

        // Fungsi untuk memvalidasi struktur tag HTML secara mandiri
        function validateHTML(htmlCode) {
            const errors = [];
            const stack = [];
            
            // Tag yang tidak butuh tag penutup (self-closing)
            const selfClosingTags = new Set([
                'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 
                'link', 'meta', 'param', 'source', 'track', 'wbr', '!doctype'
            ]);
            
            let pos = 0;
            const len = htmlCode.length;
            let lineNo = 1;
            
            while (pos < len) {
                const char = htmlCode[pos];
                if (char === '\n') {
                    lineNo++;
                    pos++;
                    continue;
                }
                
                // Lewati komentar HTML <!-- ... -->
                if (htmlCode.startsWith('<!--', pos)) {
                    const endComment = htmlCode.indexOf('-->', pos + 4);
                    if (endComment === -1) {
                        errors.push({
                            message: "Komentar HTML tidak ditutup dengan '-->'",
                            line: lineNo
                        });
                        break;
                    }
                    const commentContent = htmlCode.substring(pos, endComment + 3);
                    const commentLines = (commentContent.match(/\n/g) || []).length;
                    lineNo += commentLines;
                    pos = endComment + 3;
                    continue;
                }
                
                // Deteksi tag HTML < ... >
                if (char === '<') {
                    const endTag = htmlCode.indexOf('>', pos);
                    if (endTag === -1) {
                        errors.push({
                            message: "Tag HTML tidak ditutup dengan '>'",
                            line: lineNo
                        });
                        break;
                    }
                    
                    const tagContent = htmlCode.substring(pos + 1, endTag).trim();
                    const tagLines = (tagContent.match(/\n/g) || []).length;
                    
                    if (tagContent.length > 0) {
                        if (tagContent.startsWith('/')) {
                            // Tag penutup, misal: </p>
                            const tagName = tagContent.substring(1).split(/\s+/)[0].toLowerCase();
                            if (tagName) {
                                if (stack.length === 0) {
                                    errors.push({
                                        message: `Tag penutup </${tagName}> ditemukan tanpa ada tag pembuka <${tagName}> sebelumnya.`,
                                        line: lineNo
                                    });
                                } else {
                                    const last = stack.pop();
                                    if (last.name !== tagName) {
                                        errors.push({
                                            message: `Tag penutup </${tagName}> tidak cocok. Seharusnya menutup <${last.name}> (dibuka pada baris ${last.line}).`,
                                            line: lineNo
                                        });
                                    }
                                }
                            }
                        } else {
                            // Tag pembuka, misal: <p> atau <img />
                            const parts = tagContent.split(/\s+/);
                            const tagName = parts[0].toLowerCase();
                            const isSelfClosing = tagContent.endsWith('/') || selfClosingTags.has(tagName);
                            
                            if (!isSelfClosing && !tagName.startsWith('!') && !tagName.startsWith('?')) {
                                stack.push({
                                    name: tagName,
                                    line: lineNo
                                });
                                
                                // Lewati isi dari blok <script> dan <style> agar tidak mengganggu parser HTML
                                if (tagName === 'script' || tagName === 'style') {
                                    const closingTag = `</${tagName}>`;
                                    const nextPos = htmlCode.toLowerCase().indexOf(closingTag, endTag + 1);
                                    if (nextPos !== -1) {
                                        const blockContent = htmlCode.substring(endTag + 1, nextPos);
                                        const blockLines = (blockContent.match(/\n/g) || []).length;
                                        lineNo += blockLines;
                                        pos = nextPos;
                                        continue;
                                    } else {
                                        pos = len; // Tidak ditutup, langsung skip ke akhir berkas
                                        continue;
                                    }
                                }
                            }
                        }
                    }
                    
                    lineNo += tagLines;
                    pos = endTag + 1;
                    continue;
                }
                
                pos++;
            }
            
            // Sisa tag di stack yang belum ditutup
            while (stack.length > 0) {
                const unclosed = stack.pop();
                errors.push({
                    message: `Tag pembuka <${unclosed.name}> tidak memiliki tag penutup </${unclosed.name}>.`,
                    line: unclosed.line
                });
            }
            
            return errors;
        }

        // Fungsi untuk mengambil kode dari editor dan merendernya di iframe
        function runCode(manual = false) {
            clearConsole();
            const code = editor.getValue();
            
            // Validasi HTML secara mandiri sebelum dieksekusi
            const htmlErrors = validateHTML(code);
            if (htmlErrors.length > 0) {
                htmlErrors.forEach((err) => {
                    handleSandboxError({
                        message: `HTML Lint: ${err.message}`,
                        lineno: err.line,
                        filename: 'local' // Menggunakan 'local' agar baris kode tidak digeser oleh skrip injeksi
                    });
                });
            }
            
            const iframeDoc = outputFrame.contentDocument || outputFrame.contentWindow.document;
            
            // Set isManualRun in the injected script
            const currentInjectScript = injectScript.replace(
                '// MANUAL_RUN_FLAG',
                `var IS_MANUAL_RUN = ${manual};`
            );
            
            // Script tambahan untuk mencegah pengiriman form sungguhan
            const interceptScript = `
            <script>
                document.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Pemberitahuan: Ini hanyalah simulasi form HTML.\\nData Anda tidak akan benar-benar dikirimkan ke server.');
                });
            <\/script>
            `;
            
            iframeDoc.open();
            iframeDoc.write(currentInjectScript + code + interceptScript);
            iframeDoc.close();
        }

        // Jalankan kode untuk pertama kali saat halaman dimuat
        runCode(false);

        // Listener untuk tombol "Jalankan"
        if (btnRun) {
            bindClick(btnRun, () => {
                runCode(true);
            });
        }

        // Listener untuk tombol "Reset"
        if (btnReset) {
            bindClick(btnReset, () => {
                if (confirm("Apakah Anda yakin ingin mereset kode ke awal materi ini? Semua perubahan kodingan Anda akan hilang.")) {
                    editor.setValue(defaultCode);
                    runCode(false);
                }
            });
        }

        const btnSimpan = document.getElementById('btnSimpan');
        if (btnSimpan) {
            bindClick(btnSimpan, () => {
                const code = editor.getValue();
                
                const escapeHtml = (unsafe) => {
                    return unsafe
                         .replace(/&/g, "&amp;")
                         .replace(/</g, "&lt;")
                         .replace(/>/g, "&gt;")
                         .replace(/"/g, "&quot;")
                         .replace(/'/g, "&#039;");
                };
                
                const escapedCode = escapeHtml(code);
                
                const htmlContent = `<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Hasil Karya Laboratorium BELPADA</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; padding: 20px; color: #333; margin: 0; }
        .container { max-width: 900px; margin: 0 auto; background: #ffffff; padding: 30px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border-radius: 12px; }
        .header { text-align: center; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 2px solid #f3f4f6; }
        h1 { color: #b91c1c; margin: 0 0 10px 0; font-size: 28px; }
        p.subtitle { color: #6b7280; margin: 0; font-size: 15px; }
        .section-title { font-size: 18px; font-weight: 700; margin: 25px 0 15px 0; display: flex; align-items: center; color: #1f2937; }
        .section-title::before { content: ""; display: inline-block; width: 4px; height: 18px; background-color: #b91c1c; margin-right: 10px; border-radius: 2px; }
        pre { background: #1e1e1e; color: #d4d4d4; padding: 20px; border-radius: 8px; overflow-x: auto; font-family: Consolas, Monaco, monospace; font-size: 14px; line-height: 1.5; }
        iframe { width: 100%; height: 400px; border: 1px solid #e5e7eb; border-radius: 8px; background: #ffffff; }
        .footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #f3f4f6; color: #9ca3af; font-size: 13px; }
        
        @media print {
            body { background: white; padding: 0; }
            .container { box-shadow: none; max-width: 100%; padding: 0; border: none; }
            pre { white-space: pre-wrap; word-wrap: break-word; border: 1px solid #ddd; }
            iframe { border: 1px solid #ccc; height: 500px; }
            @page { margin: 1cm; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Laboratorium BELPADA</h1>
            <p class="subtitle">Dokumen Hasil Karya Kodingan Siswa</p>
        </div>
        
        <div class="section-title">Kode Program Anda</div>
        <pre><code>${escapedCode}</code></pre>
        
        <div class="section-title">Hasil Output Program</div>
        <iframe srcdoc="${escapedCode}"></iframe>
        
        <div class="footer">
            Dibuat menggunakan Laboratorium BELPADA &copy; ${new Date().getFullYear()}
        </div>
    </div>
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.print();
            }, 800); // Tunggu 800ms agar iframe selesai dirender sebelum print dialog muncul
        };
    </script>
</body>
</html>`;

                const printWindow = window.open('', '_blank');
                if (printWindow) {
                    printWindow.document.open();
                    printWindow.document.write(htmlContent);
                    printWindow.document.close();
                } else {
                    alert("Pop-up diblokir. Harap izinkan pop-up (pop-up blocker) untuk mencetak PDF.");
                }
            });
        }
        
        // Listener sidebar items untuk mengganti template kode
        const sidebarItems = document.querySelectorAll('.sidebar-item');
        sidebarItems.forEach(item => {
            bindClick(item, () => {
                // Perbarui kelas active (aktif)
                sidebarItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                
                const menuName = item.textContent.trim();
                
                if (templates[menuName]) {
                    // Set isi editor dengan template baru
                    editor.setValue(templates[menuName]);
                    // Update default code agar tombol reset mengembalikan ke kode materi ini
                    defaultCode = templates[menuName];
                    // Langsung jalankan untuk menampilkan output
                    runCode();
                }
                
                // Tutup sidebar setelah diklik (berguna untuk mode mobile)
                if (sidebar && overlay) {
                    sidebar.classList.remove("active");
                    overlay.classList.remove("active");
                }
            });
        });
    }
});

