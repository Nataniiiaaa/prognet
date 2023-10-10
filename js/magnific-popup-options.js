magnifPopup = function () {
  $('.popup-image').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade mfp-with-zoom', // Kombinasikan efek fade dan zoom
    gallery: {
      enabled: true,
      navigateByImgClick: true,
    },
    zoom: {
      enabled: true,
      duration: 500,
      easing: 'ease-out',
      opener: function (openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      },
    },
    callbacks: {
      open: function () {
        // Mendapatkan judul gambar dari atribut 'data-title' dan menampilkannya
        var title = $(this.currItem.el).data('title');
        this.content.find('div.mfp-title').html(title);
      },
    },
  });
};
