/**
 * Plosokidul Theme — assets/js/kependudukan.js
 *
 * Mengontrol logika inisialisasi diagram statistik menggunakan Chart.js
 * dan peta wilayah interaktif menggunakan Leaflet.js.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
    
    // Pastikan Chart.js dan Leaflet ter-load sebelum inisialisasi
    if (typeof Chart === 'undefined') {
        console.warn('Chart.js tidak termuat. Grafik tidak dapat diinisialisasi.');
        return;
    }

    // Token Warna Utama Tema (Sesuai panduan token desain)
    const colorPrimary = '#2D6A4F';       // Hijau Menoreh
    const colorSecondary = '#6B4226';     // Coklat Tanah
    const colorAccent = '#F4A51E';        // Oranye Terakota
    const colorAccentSoft = '#8D4D4E';    // Pink Kecoklatan
    const colorPrimaryLight = '#3E8E75';  // Hijau Muda
    
    // =========================================================================
    // 1. CHART - SEBARAN JENIS KELAMIN (DOUGHNUT)
    // =========================================================================
    const ctxGender = document.getElementById('chart-gender');
    if (ctxGender) {
        new Chart(ctxGender, {
            type: 'doughnut',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    data: [515, 535],
                    backgroundColor: [colorPrimary, colorAccent],
                    borderColor: '#ffffff',
                    borderWidth: 2,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: { family: 'Plus Jakarta Sans', size: 12 },
                            color: '#1A1A2E'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let val = context.raw || 0;
                                let total = 1050;
                                let pct = ((val / total) * 100).toFixed(1);
                                return ` ${context.label}: ${val.toLocaleString('id-ID')} jiwa (${pct}%)`;
                            }
                        }
                    }
                }
            }
        });
    }

    // =========================================================================
    // 2. CHART - KELOMPOK USIA (BAR VERTICAL)
    // =========================================================================
    const ctxAge = document.getElementById('chart-age');
    if (ctxAge) {
        new Chart(ctxAge, {
            type: 'bar',
            data: {
                labels: ['0-14 Thn (Anak)', '15-64 Thn (Produktif)', '65+ Thn (Lansia)'],
                datasets: [{
                    label: 'Jumlah Jiwa',
                    data: [215, 695, 140],
                    backgroundColor: [colorAccentSoft, colorPrimary, colorSecondary],
                    borderRadius: 6,
                    maxBarThickness: 50
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ` ${context.parsed.y} Jiwa`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: {
                            font: { family: 'Plus Jakarta Sans', size: 11 },
                            color: '#6B7280'
                        }
                    },
                    y: {
                        grid: { color: '#E5E7EB' },
                        ticks: {
                            font: { family: 'Plus Jakarta Sans', size: 11 },
                            color: '#6B7280'
                        }
                    }
                }
            }
        });
    }

    // =========================================================================
    // 3. CHART - MATA PENCAHARIAN UTAMA (BAR HORIZONTAL)
    // =========================================================================
    const ctxWork = document.getElementById('chart-work');
    if (ctxWork) {
        new Chart(ctxWork, {
            type: 'bar',
            data: {
                labels: [
                    'Petani/Pekebun',
                    'Pembudidaya Ikan',
                    'Buruh Harian Lepas',
                    'Wiraswasta/UMKM',
                    'Karyawan Swasta',
                    'PNS/TNI/Polri',
                    'Lain-lain / Jasa'
                ],
                datasets: [{
                    label: 'Kepala Keluarga',
                    data: [108, 58, 54, 35, 27, 10, 8],
                    backgroundColor: colorPrimary,
                    borderRadius: 4,
                    maxBarThickness: 20
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ` ${context.parsed.x} KK`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { color: '#E5E7EB' },
                        ticks: {
                            font: { family: 'Plus Jakarta Sans', size: 11 },
                            color: '#6B7280'
                        }
                    },
                    y: {
                        grid: { display: false },
                        ticks: {
                            font: { family: 'Plus Jakarta Sans', size: 11 },
                            color: '#6B7280'
                        }
                    }
                }
            }
        });
    }

    // =========================================================================
    // 4. CHART - TINGKAT PENDIDIKAN TERAKHIR (POLAR AREA)
    // =========================================================================
    const ctxEdu = document.getElementById('chart-education');
    if (ctxEdu) {
        new Chart(ctxEdu, {
            type: 'polarArea',
            data: {
                labels: ['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'D3/Sarjana', 'Belum Sekolah'],
                datasets: [{
                    data: [385, 255, 235, 80, 95],
                    backgroundColor: [
                        colorPrimary,
                        colorPrimaryLight,
                        colorAccent,
                        colorAccentSoft,
                        colorSecondary
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: { family: 'Plus Jakarta Sans', size: 11 },
                            color: '#1A1A2E'
                        }
                    }
                },
                scales: {
                    r: {
                        ticks: { display: false },
                        grid: { color: '#E5E7EB' }
                    }
                }
            }
        });
    }

    // =========================================================================
    // 5. PETA INTERAKTIF (LEAFLET.JS)
    // =========================================================================
    const mapElement = document.getElementById('map');
    if (mapElement && typeof L !== 'undefined') {
        
        // Titik pusat koordinat Dusun Ploso Kidul, Ngluwar, Magelang
        const defaultLatLng = [-7.6433, 110.2882];
        const zoomLevel = 15;

        // Inisialisasi peta
        const map = L.map('map', {
            center: defaultLatLng,
            zoom: zoomLevel,
            scrollWheelZoom: false // Mencegah zooming tidak sengaja saat men-scroll halaman
        });

        // Gunakan Tile Layer OpenStreetMap bergaya bersih
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Menambahkan marker/penanda fasilitas utama desa
        const locations = [
            {
                latlng: [-7.6433, 110.2882],
                title: '🏠 Posko Dusun Ploso Kidul',
                desc: 'Pusat koordinasi dan informasi wilayah Dusun Ploso Kidul.'
            },
            {
                latlng: [-7.6465, 110.2900],
                title: '🐟 Kelompok Budidaya Perikanan',
                desc: 'Sentra pembudidayaan ikan air tawar (Nila &amp; Gurame) Dusun Sumber Air.'
            },
            {
                latlng: [-7.6395, 110.2870],
                title: '🌿 Kawasan Pertanian Dusun Ploso Lor',
                desc: 'Sentra ketahanan pangan mandiri berbasis pertanian padi organik lestari.'
            }
        ];

        locations.forEach(function (loc) {
            L.marker(loc.latlng)
                .addTo(map)
                .bindPopup(`
                    <div style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 13px; color: #1A1A2E; line-height: 1.4;">
                        <h4 style="margin: 0 0 6px 0; color: #2D6A4F; font-size: 14px; font-weight: bold;">${loc.title}</h4>
                        <p style="margin: 0; color: #6B7280; font-size: 12px;">${loc.desc}</p>
                    </div>
                `);
        });
    }

});
