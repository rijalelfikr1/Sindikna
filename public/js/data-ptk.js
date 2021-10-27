"use strict";

var indo= {
    "sProcessing":     "Memproses...",
    "sLengthMenu":     "Tampilkan _MENU_ entri",
    "sZeroRecords":    "Tidak ada entri yang ditemukan",
    "sEmptyTable":     "Tidak ada entri yang tersedia di tabel ini",
    "sInfo":           "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
    "sInfoEmpty":      "Menampilkan 0 hingga 0 dari 0 entri",
    "sInfoFiltered":   "(disaring dari _MAX_ total entri)",
    "sInfoPostFix":    "",
    "sSearch":         "Pencarian:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Memuat...",
    "oPaginate": {
      "sFirst":    "Pertama",
      "sLast":     "Terakhir",
      "sNext":     "<i class='fas fa-chevron-right'></i>",
      "sPrevious": "<i class='fas fa-chevron-left'></i>"
    },
    "oAria": {
      "sSortAscending":  ": Aktifkan untuk mengurutkan kolom dalam urutan menaik",
      "sSortDescending": ": Aktifkan untuk mengurutkan kolom dalam urutan menurun"
    },
    "buttons": {
      "copyTitle": 'Menyalin ke papan klip',
      "copyKeys": 'Gunakan keyboard atau menu Anda untuk memilih perintah salin',
      "copySuccess": {
        "_": 'Disalin %d baris disalin ke papan klip',
        "1": 'Disalin 1 baris disalin ke papan klip'
      },
      "pageLength": {
        "_": "Tampilkan %d entri",
      }
    }
};

var table = $('#data-ptk').DataTable( {
    lengthChange: true,
    paging: true,
    ordering: true,
    searching: true,
    info: true,
    autoWidth: true,
    language: indo,
    dom: 'Brtip',
    buttons: {
        dom: {
            container:{
              tag:'div',
              className:'flexcontent'
            },
            buttonLiner: {
              tag: null
            }
        },
        buttons: [
          {
            extend: 'excelHtml5',
            text: '<i class="far fa-file-excel"></i>',
            titleAttr: 'Unduh excel',
            className: 'btn btn-icon btn-success btn-kanan',
          },

          {
            extend: 'pdfHtml5',
            text: '<i class="far fa-file-pdf"></i>',
            titleAttr: 'Unduh pdf',
            className: 'btn btn-icon btn-danger btn-kanan mr-2',
          },

          {
            extend: 'print',
            text: '<i class="fa fa-print"></i>',
            titleAttr: 'Cetak',
            className: 'btn btn-icon btn-info btn-kanan mr-2',
          },

          {
            extend: 'copyHtml5',
            text: '<i class="far fa-copy"></i>',
            titleAttr: 'Salin',
            className: 'btn btn-icon btn-primary btn-kanan mr-2',
          },

          {
            extend: 'pageLength',
            titleAttr: 'Tampilkan entri',
            className: 'btn btn-primary mb-2'
        },
        ]
    }
} );

$('#cari-data').on( 'keyup', function () {
    table.search($(this).val()).draw();
} );