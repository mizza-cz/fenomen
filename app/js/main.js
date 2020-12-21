$(function () {
   $("[data-scroll]").on("click", function (event) {
      event.preventDefault();

      var $this = $(this),
         blockId = $this.data('scroll'),
         blockOffset = $(blockId).offset().top;

      $("#nav a").removeClass("active");
      $this.addClass("active");

      $("html, body").animate({
         scrollTop: blockOffset
      }, 1000);
   });

   $('.video__name').on('click', function () {
      $(this).toggleClass('video__name--close');
      $(this).next().slideToggle();
   });
   $('.gallery').each(function () {
      $(this).magnificPopup({
         delegate: 'a',
         type: 'image',
         gallery: {
            enabled: true
         }
      });
   });


   $("#nav_toggle").on("click", function (event) {
      event.preventDefault();

      $(this).toggleClass("open");
      $("#nav").toggleClass("open");
   });
   $('.video__link-video').magnificPopup({
      type: 'inline',
      midClick: true,
   });

});
