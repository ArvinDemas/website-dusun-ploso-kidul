/**
 * Plosokidul Theme — assets/js/layanan.js
 *
 * Mengontrol logika interaksi akordeon Tanya Jawab (FAQ)
 * dan validasi formulir pengaduan warga di halaman Layanan.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
    
    // =========================================================================
    // 1. FAQ ACCORDION INTERACTIVITY (Aksesibilitas Tinggi / WCAG AA)
    // =========================================================================
    const faqTriggers = document.querySelectorAll('.faq-trigger');

    faqTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
            const answerId = trigger.getAttribute('aria-controls');
            const answerEl = document.getElementById(answerId);

            // Sembunyikan akordeon lainnya yang sedang aktif (single-open behavior)
            faqTriggers.forEach(function (otherTrigger) {
                if (otherTrigger !== trigger) {
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    const otherAnswerId = otherTrigger.getAttribute('aria-controls');
                    const otherAnswerEl = document.getElementById(otherAnswerId);
                    if (otherAnswerEl) {
                        otherAnswerEl.style.maxHeight = null;
                        otherAnswerEl.setAttribute('aria-hidden', 'true');
                        otherTrigger.querySelector('.faq-icon-arrow').style.transform = 'rotate(0deg)';
                    }
                }
            });

            // Toggle element yang diklik
            if (isExpanded) {
                trigger.setAttribute('aria-expanded', 'false');
                if (answerEl) {
                    answerEl.style.maxHeight = null;
                    answerEl.setAttribute('aria-hidden', 'true');
                }
                trigger.querySelector('.faq-icon-arrow').style.transform = 'rotate(0deg)';
            } else {
                trigger.setAttribute('aria-expanded', 'true');
                if (answerEl) {
                    answerEl.style.maxHeight = answerEl.scrollHeight + "px";
                    answerEl.setAttribute('aria-hidden', 'false');
                }
                trigger.querySelector('.faq-icon-arrow').style.transform = 'rotate(180deg)';
            }
        });
    });

    // =========================================================================
    // 2. VALIDASI FORM PENGADUAN WARGA (Client-side Validation)
    // =========================================================================
    const form = document.querySelector('.pengaduan-form');
    
    if (form) {
        form.addEventListener('submit', function (event) {
            const nama = document.getElementById('pengaduan_nama').value.trim();
            const kontak = document.getElementById('pengaduan_kontak').value.trim();
            const laporan = document.getElementById('pengaduan_laporan').value.trim();
            const captcha = document.getElementById('captcha_input').value.trim();
            
            let errors = [];

            // 1. Validasi Nama
            if (nama.length < 3) {
                errors.push('Nama Lengkap harus berisi minimal 3 karakter.');
            }

            // 2. Validasi Kontak (Harus email valid atau nomor telepon angka)
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^[0-9+\-\s]{7,16}$/;
            if (!emailRegex.test(kontak) && !phoneRegex.test(kontak)) {
                errors.push('Kontak yang diisi harus merupakan Email valid atau Nomor Telepon aktif.');
            }

            // 3. Validasi Isi Laporan
            if (laporan.length < 15) {
                errors.push('Isi Laporan / Pengaduan terlalu pendek (minimal 15 karakter).');
            }

            // 4. Validasi CAPTCHA Terisi
            if (captcha === '') {
                errors.push('Kolom Hitung Matematika wajib diisi.');
            }

            // Tampilkan error jika ada
            if (errors.length > 0) {
                event.preventDefault(); // Batalkan submit
                
                // Cari atau buat kotak alert error di atas form
                let alertBox = document.querySelector('.alert-box--error');
                if (!alertBox) {
                    alertBox = document.createElement('div');
                    alertBox.className = 'alert-box alert-box--error';
                    alertBox.setAttribute('role', 'alert');
                    alertBox.style.backgroundColor = '#FDE8E8';
                    alertBox.style.borderLeft = '4px solid var(--color-tertiary)';
                    alertBox.style.color = 'var(--color-tertiary)';
                    alertBox.style.padding = 'var(--spacing-sm)';
                    alertBox.style.borderRadius = '4px';
                    alertBox.style.marginBottom = 'var(--spacing-md)';
                    form.parentNode.insertBefore(alertBox, form);
                }
                
                // Tulis isi error
                alertBox.innerHTML = '<span aria-hidden="true">❌</span> <strong>Gagal Mengirim Laporan:</strong><br><ul style="margin: 6px 0 0 16px; padding: 0;">' + 
                    errors.map(err => `<li>${err}</li>`).join('') + '</ul>';
                
                // Scroll up ke kotak error
                alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }

});
