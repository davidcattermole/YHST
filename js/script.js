!function ($) {

  $(function(){


    // carousel demo
    $('#quoteCarousel').carousel()

    // Javascript to enable link to tab
    var hash = document.location.hash;
    var prefix = "";
    if (hash) {
        $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
    } 

    // Change hash for page-reload
    $('.nav-tabs a').on('shown', function (e) {
        window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });

    $('.forgotLink').click(function (e) {
      e.preventDefault();
      $('.nav-tabs a').tab('show');
    });


  });

}(window.jQuery)