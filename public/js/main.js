(function() {
  "use strict";
  
  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

jQuery(window).on("load", function() {
  $('#preloader').delay(100).fadeOut('slow', function() { $(this).remove(); });
});

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

$(document).ready(function() {
  var table = $('#provinsi').DataTable( {
      lengthChange: true,
      paging: true,
      ordering: true,
      searching: true,
      info: true,
      autoWidth: true,
      language: indo,
      dom: "<'row'<'col-sm-12'f>>" +
      "<'row'<'col-sm-12'B>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
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
            extend: 'copyHtml5',
            text: '<i class="far fa-copy"></i>',
            title:'Data PTK Non ASN Provinsi Kepulauan Riau',
            titleAttr: 'Salin',
            className: 'btn-app export',
          },

          {
            extend: 'excelHtml5',
            text: '<i class="far fa-file-excel"></i>',
            title:'Data PTK Non ASN Provinsi Kepulauan Riau',
            titleAttr: 'Unduh excel',
            className: 'btn-app export excel',
          },

          {
            extend: 'pdfHtml5',
            text: '<i class="far fa-file-pdf"></i>',
            title:'Data PTK Non ASN Provinsi Kepulauan Riau',
            titleAttr: 'Unduh pdf',
            className: 'btn-app export pdf',
          },

          {
            extend: 'print',
            text: '<i class="fa fa-print"></i>',
            title:'Data PTK Non ASN Provinsi Kepulauan Riau',
            titleAttr: 'Cetak',
            className: 'btn-app export cetak',
          },

          {
            extend: 'pageLength',
            titleAttr: 'Tampilkan entri',
            className: 'selectTable'
          },
        ]
      }
  } );
} );