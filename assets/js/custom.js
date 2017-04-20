$(function(){
 var shrinkHeader = 100;
    $(window).scroll(function() {
      var scroll = getCurrentScroll();
    if ( scroll >= shrinkHeader ) {
       $('.navbar').addClass('shrink');
    }
        else {
            $('.navbar').removeClass('shrink');
        }
    });
  function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
  }
});


jQuery(document).ready(function($){
  var $lateral_menu_trigger = $('#cd-menu-trigger'),
    $content_wrapper = $('.cd-main-content'),
    $navigation = $('header');

  //open-close lateral menu clicking on the menu icon
  $lateral_menu_trigger.on('click', function(event){
    event.preventDefault();
    
    $lateral_menu_trigger.toggleClass('is-clicked');
    $navigation.toggleClass('lateral-menu-is-open');
    $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
      // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
      $('body').toggleClass('overflow-hidden');
    });
    $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
    
    //check if transitions are not supported - i.e. in IE9
    if($('html').hasClass('no-csstransitions')) {
      $('body').toggleClass('overflow-hidden');
    }
  });

  //close lateral menu clicking outside the menu itself
  $content_wrapper.on('click', function(event){
    if( !$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span') ) {
      $lateral_menu_trigger.removeClass('is-clicked');
      $navigation.removeClass('lateral-menu-is-open');
      $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        $('body').removeClass('overflow-hidden');
      });
      $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
      //check if transitions are not supported
      if($('html').hasClass('no-csstransitions')) {
        $('body').removeClass('overflow-hidden');
      }

    }
  });

  //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
  $('.item-has-children').children('a').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
  });
});



var Global = function() {
  "use strict";
  var t = function() {
      $(".carousel").carousel({
        interval: 5e3,
        pause: "hover"
      }), $(".tooltips").tooltip(), $(".tooltips-show").tooltip("show"), $(".tooltips-hide").tooltip("hide"), $(".tooltips-toggle").tooltip("toggle"), $(".tooltips-destroy").tooltip("destroy"), $(".popovers").popover(), $(".popovers-show").popover("show"), $(".popovers-hide").popover("hide"), $(".popovers-toggle").popover("toggle"), $(".popovers-destroy").popover("destroy")
    },
    e = function() {
      $(function() {
        $("a[href*=#js__scroll-to-]:not([href=#js__scroll-to-])").on("click", function() {
          if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var t = $(this.hash);
            if (t = t.length ? t : $("[name=" + this.hash.slice(1) + "]"), t.length) return $("html,body").animate({
              scrollTop: t.offset().top - 90
            }, 1e3), !1
          }
        })
      })
    },
    o = function() {
      $(".js__fullwidth-img").each(function() {
        $(this).css("background-image", "url(" + $(this).children("img").attr("src") + ")"), $(this).children("img").hide()
      })
    },
    i = function() {
      var t = $(".js__bg-overlay"),
        e = $(".js__header-overlay"),
        o = $(".js__trigger");
      o.on("click", function() {
        t.toggleClass("-is-open"), e.toggleClass("-is-open"), o.toggleClass("-is-active")
      })
    },
    s = function() {
      $(".js__ver-center-aligned").each(function() {
        $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2)
      }), $(window).resize(function() {
        $(".js__ver-center-aligned").each(function() {
          $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2)
        })
      })
    },
    h = function() {
      $("[data-auto-height]").each(function() {
        var t = $(this),
          e = $("[data-height]", t),
          o = 0,
          i = t.attr("data-mode"),
          s = parseInt(t.attr("data-offset") ? t.attr("data-offset") : 0);
        e.each(function() {
          "height" == $(this).attr("data-height") ? $(this).css("height", "") : $(this).css("min-height", "");
          var t = "base-height" == i ? $(this).outerHeight() : $(this).outerHeight(!0);
          t > o && (o = t)
        }), o += s, e.each(function() {
          "height" == $(this).attr("data-height") ? $(this).css("height", o) : $(this).css("min-height", o)
        }), t.attr("data-related") && $(t.attr("data-related")).css("height", t.height())
      })
    };
  return {
    init: function() {
      t(), e(), o(), i(), s(), h()
    }
  }
}();
$(document).ready(function() {
  Global.init()
});


//Awards//
$(function() {
    var tabCarousel = setInterval(function() {
        var tabs = $('.awards > li'),
            active = tabs.filter('.active'),
            next = active.next('li'),
            toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

        toClick.trigger('click');
    }, 8000);
});




// type //

document.addEventListener('DOMContentLoaded', function(){
  Typed.new("#typed", {
      stringsElement: document.getElementById('typed-strings'),
      typeSpeed: 50,
      backDelay: 2000,
      loop: true,
      contentType: 'html', // or text
      // defaults to null for infinite loop
      loopCount: null,
      //callback: function(){ foo(); },
      resetCallback: function() { newTyped(); }
  });

  var resetElement = document.querySelector('.reset');
  if(resetElement) {
      resetElement.addEventListener('click', function() {
          document.getElementById('typed')._typed.reset();
      });
  }

});
function newTyped(){ /* A new typed object */ }
//function foo(){ console.log("Callback"); }

$.fn.ashCordian = function() {
  
  var container = $(this);

  container.find('.accordian-header').click(function() {
    if($(this).siblings('.accordian-section').css('display') == 'block'){
       container.find('.accordian-section').slideUp(300);
		
    } else {
      container.find('.accordian-section').slideUp(300);	
       $(this).siblings('.accordian-section').slideDown(300);
		
		
    }
  });
};


$('#accord1').ashCordian();
$('#accord2').ashCordian();

// map Location //

		$(".usa").mouseover(function(){
			$(this).addClass("c-active");
			$(".australia").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").addClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".australia").mouseover(function(){
			$(this).addClass("c-active");
			$(".usa").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").addClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".uk").mouseover(function(){
			$(this).addClass("c-active");
			$(".usa").removeClass("c-active");
			$(".australia").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").addClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".india").mouseover(function(){
			$(this).addClass("c-active");
			$(".australia").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".usa").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").addClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".japan").mouseover(function(){
			$(this).addClass("c-active");
			$(".australia").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".usa").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").addClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".singapore").mouseover(function(){
			$(this).addClass("c-active");
			$(".australia").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".usa").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").addClass("loc-active");
		});

//Footer bounceup animation on scroll
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');