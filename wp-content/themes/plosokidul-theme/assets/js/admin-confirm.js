/**
 * Plosokidul Theme — assets/js/admin-confirm.js
 *
 * Mengontrol dialog modal konfirmasi sebelum menghapus data postingan/halaman
 * di dalam dasbor wp-admin WordPress.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

jQuery(document).ready(function($) {
    
    // Intersep aksi klik tombol hapus / buang ke tong sampah (Trash & Delete)
    $(document).on('click', '.submitdelete, a.submitdelete, .trash a, #delete-action a, .row-actions .trash a', function(e) {
        
        var confirmMsg = "Apakah Anda yakin ingin memindahkan data ini ke Tong Sampah?";
        
        // Cek jika aksi berupa penghapusan permanen
        if ($(this).hasClass('delete-permanently') || $(this).text().indexOf('Permanen') !== -1 || $(this).text().indexOf('Hapus Selamanya') !== -1) {
            confirmMsg = "⚠️ PERINGATAN: Data ini akan dihapus secara PERMANEN dan tidak dapat dikembalikan. Apakah Anda yakin ingin melanjutkan?";
        }
        
        // Tampilkan modal dialog konfirmasi browser (WCAG AA Compliant & Lightweight)
        if (!confirm(confirmMsg)) {
            e.preventDefault();
            return false;
        }
    });

});
