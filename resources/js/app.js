import 'bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

// =========================================================
// FITUR AJAX: CEK SISA KURSI (PDF Halaman 13)
// =========================================================
$(document).on('change', '#course_id', function () {
    const id = this.value;
    
    // Jika belum pilih kursus
    if (!id) {
        $('#availability')
            .removeClass('alert-success-custom alert-danger-custom')
            .addClass('alert-info-custom')
            .text('Pilih kursus untuk melihat sisa kursi.');
        return;
    }

    // Tampilkan loading
    $('#availability')
        .removeClass('alert-success-custom alert-danger-custom')
        .addClass('alert-info-custom')
        .text('Memuat ketersediaan...');

    // Request AJAX ke route JSON
    $.ajax({
        url: `/courses/${id}/availability`,
        method: 'GET',
        dataType: 'json',
        success(data) {
            $('#availability')
                .removeClass('alert-info-custom alert-danger-custom')
                .addClass('alert-success-custom')
                .text(`${data.remaining} kursi tersisa untuk ${data.course}.`);
        },
        error() {
            $('#availability')
                .removeClass('alert-info-custom alert-success-custom')
                .addClass('alert-danger-custom')
                .text('Gagal memuat ketersediaan kursus.');
        }
    });
});