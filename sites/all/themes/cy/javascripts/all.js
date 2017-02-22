
$(document).ready(function(){


  $(".solutions-menu-btn").click(function(){

    var $content = $('#solutions-menu-content');
    var isVisible =  $content.is(":visible");
    $('.dropdown-menu').hide();
    if(isVisible) {
      return;
    }
    $content.show();

  });

  $(".products-menu-btn").click(function(){
    var $content = $('#products-menu-content');


    var isVisible =  $content.is(":visible");
    $('.dropdown-menu').hide();
    if(isVisible) {

      return;
    }
    $content.show();
  });


  $(".design-menu-btn").click(function(){
    var $content = $('#design-menu-content');


    var isVisible =  $content.is(":visible");
    $('.dropdown-menu').hide();
    if(isVisible) {

      return;
    }
    $content.show();
  });

  $(".buy-menu-btn").click(function(){
    var $content = $('#buy-menu-content');


    var isVisible =  $content.is(":visible");
    $('.dropdown-menu').hide();
    if(isVisible) {

      return;
    }
    $content.show();
  });


  $(".close-nav").click(function(){
    //$(".dropdown-menu").slideup('slow');
    $('.dropdown-menu').hide();
  });


  // SOCIAL ICONS - SVG


  /*
  * Replace all SVG images with inline SVG
  */
  jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');

  });



});


// CAROUSEL + AUTO PLAY
//

var widthPerItem = window.innerWidth;
$(document).ready(function (){

    $('#button a').click(function(){
        clearInterval(interval);
        var integer = $(this).attr('rel');
        $('#myslide .cover').animate({left:-widthPerItem*(parseInt(integer)-1)})
        $('#button a').each(function(){
            $(this).removeClass('active');
            if($(this).hasClass('button'+integer)){
                $(this).addClass('active')}
        });
    });
        interval = setInterval ( function(){Next();}, 3000 );
    });

    function Next(){
        var _next = false;
        $('#button a').each(function(){
            if(_next){
                $(this).addClass('active');
                _next = false;
            }
            else if($(this).hasClass('active')){
                _next = true;
                $(this).removeClass('active')
            }

        });
        if(_next)
            $("#button a:eq(0)").addClass("active");

       var activeIndex = parseInt($(".active").attr("rel"));
       $('#myslide .cover').animate({left:-widthPerItem*(parseInt(activeIndex)-1)});
    }
