/*jshint devel:true */
/*jslint eqeq: true*/
/*jshint unused:false*/

// Navigation Controls
  var top = jQuery(window).scrollTop();
  var left = jQuery(window).scrollLeft();

  function navOpen() {
    //   jQuery('body').css('overflow', 'hidden');
      jQuery(window).scroll(function(){
          jQuery(this).scrollTop(top).scrollLeft(left);
      });

      jQuery('span#navText').hide("slide", { direction: "right" }, 250);
      jQuery('div#navClick').toggleClass('open');
      jQuery('nav#acme').show();
      jQuery("ul#navigationContainer li").hide();
      jQuery('div#navigation').show("slide", { direction: "right" }, 500, function() {

          jQuery("ul#navigationContainer li").hide().each(function(i) {
              jQuery(this).delay(i*100).animate( { opacity: "toggle" }, 250, 'easeOutCubic');
          });

      });
      jQuery('div#case-studies').show("slide", { direction: "left" }, 500);

      clickState = 1;
  }
  function navClose() {
    //   jQuery('body').css('overflow', 'auto');
      jQuery(window).unbind('scroll');
      jQuery('span#navText').show("slide", { direction: "right" }, 250);
      jQuery('div#navClick').toggleClass('open');
      jQuery('div#navigation').hide("slide", { direction: "right" }, 500, function() {
          jQuery("ul#navigationContainer li").hide();
          jQuery('nav#acme').hide();
      });

      jQuery('div#case-studies').hide("slide", { direction: "left" }, 500);

      clickState = 0;
  }

  var clickState = 0;

  jQuery('div#navClick').on('click', function() {
      if (clickState == 0) {
          navOpen();
      } else {
          navClose();
      }
  });

//  Smooth Scrolling Jump Links
jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//  Work With Us
jQuery(document).ready(function() {
  //  Close/Open Work With Us
  jQuery(function() {
    jQuery('.work-with-us-launch a').on('click', function(e) {
      e.preventDefault();
      jQuery('section#work-with-us').slideToggle();
    });
  });
});

function formFadeOut() {
  jQuery('div.screen-reader-response').hide();
  jQuery('div#work-with-us-form').slideUp(500);
  navClose();
  jQuery('section#work-with-us').delay( 5000 ).slideToggle();
}

//  More Questions
jQuery(function() {
  var textOpen = "« Oh, never mind.";
  var textClosed = "Time for a few more questions? »";
  var toggleState = 0;
  jQuery('a#more').on('click', function(e) {
    e.preventDefault();
    jQuery('div#more-expand').slideToggle();
    if (toggleState == 0) {
      jQuery(this).html( textOpen );
      toggleState = 1;
    } else {
      jQuery(this).html( textClosed );
      toggleState = 0;
    }
  });
});
