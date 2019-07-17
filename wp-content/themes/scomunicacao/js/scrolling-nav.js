function openSlideMenu(){
    document.getElementById('side-menu').style.width='300px';
   }
  
  function closeSlideMenu(){
    document.getElementById('side-menu').style.width='0';
  }

  function closeSlideMenu(){
    document.getElementById('side-menu').style.width='0';
 
  }





//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);

        $('body, html').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});



