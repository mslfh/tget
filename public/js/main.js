(function () {

  /*=====================================
  Sticky
  ======================================= */
  window.onscroll = function () {
    var header_navbar = document.querySelector(".navbar-area");
    var sticky = header_navbar.offsetTop;

    var logo = document.querySelector('.navbar-brand img')
    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      logo.src = 'assets/images/logo/bule-logo.png';
    } else {
      header_navbar.classList.remove("sticky");
      logo.src = 'assets/images/logo/logo.png';
    }

    // show or hide the back-top-top button
    var backToTo = document.querySelector(".scroll-top");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      backToTo.style.display = "flex";
    } else {
      backToTo.style.display = "none";
    }
  };

  $(document).ready(function () {
    $('#search-button').click(function () {
      $('html, body').animate({
    scrollTop: $('#energy-list').offset().top - 150
  }, 1000);
      var searchValue = $('#search-input').val().toLowerCase();

      $('.single-testimonial').each(function () {
        var text = $(this).find('h4').text().toLowerCase();
        var match = text.indexOf(searchValue) !== -1;
        $(this).toggle(match);
      });
    });
  });
})();