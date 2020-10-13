$(document).ready(function(){
    $('.loginclick').hide();

    $('.login').click(function(){	
      if ($(".drop").is(':hidden')) {
        $(".drop").slideDown().animate({height:'330px'},{queue:false, duration:600, easing: 'easeOutBounce'}),
        $('#link').removeClass('login').addClass('loginclick');
      }
      else {
        $('.drop').slideUp(),
        $('#link').removeClass('loginclick').addClass('login');
      }
      return false;
    });
    $('.drop').click(function(e) {
      e.stopPropagation();
    });
    $(document).click(function() {
      $('.drop').fadeOut('fast'),
      $('#link').removeClass('loginclick').addClass('login');
    });

});

