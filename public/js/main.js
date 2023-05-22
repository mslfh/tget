(function () {

  /*=====================================
  Sticky
  ======================================= */
  window.onscroll = function () {
    var header_navbar = document.querySelector(".navbar-area");
    var header_img = document.querySelector("#header_img");
    var sticky = header_navbar.offsetTop;

    var logo = document.querySelector('.navbar-brand img')
      var currentURL = window.location.href;
    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      if(header_img){
          header_img.style.display = 'none';
      }
        logo.src = currentURL.split('/').slice(0, 3).join('/') + '/assets/images/logo/bule-logo.png';
    } else {
      header_navbar.classList.remove("sticky");
        logo.src = currentURL.split('/').slice(0, 3).join('/') + '/assets/images/logo/logo.png';
        if(header_img){
            header_img.style.display = 'block';
        }
    }
  };

  //search
    $(document).ready(function () {
        $('#search-button').click(function () {
            if (window.location.href.indexOf("home") === -1) {
                window.location.href = "trading?keywords="+$('#search-input').val();
            } else {
                $('html, body').animate({
                    scrollTop: $('#energy-list').offset().top - 150
                }, 1000);

                var searchValue = $('#search-input').val().toLowerCase();

                $('.single-testimonial').each(function () {
                    var text = $(this).find('h4').text().toLowerCase();
                    var match = text.indexOf(searchValue) !== -1;
                    $(this).toggle(match);
                });
            }
        });
    });

})();
