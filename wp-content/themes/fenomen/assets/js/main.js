

$(function () {
   var $page = $('html, body');
   $('a[href*="#"]').click(function () {
      $page.animate({
         scrollTop: $($.attr(this, 'href')).offset().top
      }, 400);
      return false;
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
