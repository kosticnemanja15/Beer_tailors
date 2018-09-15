  $ = jQuery.noConflict();
  $(document).ready(function(){
   

   $('#menu-button').sidr({
            name: 'sidr-right',
            side: 'right',
            source: '.nav-holder'
        });

        $('body').click(function () {
            $.sidr('close', 'sidr-right');
        });
        $(window).resize(function () {
            $.sidr('close', 'sidr-right');
        });

        var config = {
            sensitivity: 10,
            interval: 5000,
            timeout: 50000
        };

        $('nav > ul > li').stop().hover(function () {
            $(this).children('ul.sub-menu').stop().fadeIn(300);
        }, function () {
            $(this).find('ul.sub-menu').stop().fadeOut(300);
        }, config);

        $('nav > ul > li > ul > li').stop().hover(function () {
            $(this).children('ul.sub-menu').stop().fadeIn(300);
            $(this).addClass('active');
        }, function () {
            $(this).find('ul.sub-menu').stop().fadeOut(300);
            $(this).removeClass('active');
        }, config);
        
         var div_numb = $('aside .col-md-12.col-sm-6').length;
           
           console.log(div_numb);

  (function () {

        var handler = $('.searchBtn');
        if (!handler.length) {
            return;
        }




         $(".searchBtn").click(function () {
        
            $("#searchform input").focus();
        });





        handler.each(function () {
            $(this).click(function (e) {
                e.preventDefault();
                $(".top-search").addClass('push');
                console.log('aa');
                e.stopPropagation();
            });
        });


        $('.top-search').click(function (e) {
            e.stopPropagation();
        });

        $(".close-btn").click(function () {
            $(".top-search").removeClass('push');
        });
        $(".input-holder .close-btn").click(function () {
            $(".top-search").removeClass('push');
        });
    })();



// if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
// window.onmousewheel = document.onmousewheel = wheel;

// function wheel(event) {
//     var delta = 0;
//     if (event.wheelDelta) delta = event.wheelDelta / 120;
//     else if (event.detail) delta = -event.detail / 3;

//     handle(delta);
//     if (event.preventDefault) event.preventDefault();
//     event.returnValue = false;
// }

// var goUp = true;
// var end = null;
// var interval = null;

// function handle(delta) {
//   var animationInterval = 4; //lower is faster
//   var scrollSpeed = 4; //lower is faster

//   if (end == null) {
//     end = $(window).scrollTop();
//   }
//   end -= 20 * delta;
//   goUp = delta > 0;

//   if (interval == null) {
//     interval = setInterval(function () {
//       var scrollTop = $(window).scrollTop();
//       var step = Math.round((end - scrollTop) / scrollSpeed);
//       if (scrollTop <= 0 || 
//           scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
//           goUp && step > -1 || 
//           !goUp && step < 1 ) {
//         clearInterval(interval);
//         interval = null;
//         end = null;
//       }
//       $(window).scrollTop(scrollTop + step );
//     }, animationInterval);
//   }
// }

      $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#totheTop').fadeIn();
            } else {
                $('#totheTop').fadeOut();
            }
        });

        $("#totheTop").click(function () {
           //1 second of animation time
           //html works for FFX but not Chrome
           //body works for Chrome but not FFX
           //This strange selector seems to work universally
           $("html, body").animate({scrollTop: 0}, 1000);
    });

      $(window).scroll(function(){
        if ($(this).scrollTop() > 0){
          $(".main-menu").css({"background" : "rgba(00, 000, 000, 1)"})
        }
        else{
          $(".main-menu").css({"background" : "rgba(00, 000, 000, 0.70)"})
        }
      })
 
  
       $('.swipe').slick({
          dots: true,
          arrows: false,
          autoplay: true,
          fade: true,
          autoplaySpeed: 5000,

        });




        $(".beerrecipe-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".beerrecipe").offset().top - 130
    }, 1000);

    }); 



      $(".beerstyles-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".beer-styles").offset().top - 130
    }, 1000);

    }); 

        $(".alcoholstrength-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".tutorial-ad").offset().top - 130
    }, 1000);

    }); 

          $(".additions-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".additions-beer").offset().top - 130
    }, 1000);

    }); 

            $(".bottles-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".bottles-type").offset().top - 130
    }, 1000);

    }); 

          $(".label-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".label").offset().top - 130
    }, 1000);

    }); 

            $(".custom-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".custom-label").offset().top - 130
    }, 1000);

    }); 

             $(".design-click").click(function() {
    $('html, body').animate({
        scrollTop: $(".design-scratch").offset().top - 130
    }, 1000);

    }); 

            


});