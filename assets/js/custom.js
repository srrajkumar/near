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
       $('.accordian-header').removeClass('active');
		
    } else {
      container.find('.accordian-section').slideUp(300);	
       $(this).siblings('.accordian-section').slideDown(300);
       $('.accordian-header').removeClass('active');
       $(this).addClass('active');
    }
  });
};


$('#accord1').ashCordian();
$('#accord2').ashCordian();
$('.carousel-news').carousel();


// map Location //

		$(".usa").mouseover(function(){
			$(this).addClass("c-active");
			$(".australia").removeClass("c-active");
			$(".usa-ny").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").addClass("loc-active");
			$(".usa-nyloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
			$(".usa-ny").mouseover(function(){
			$(this).addClass("c-active");
			$(".usa").removeClass("c-active");	
			$(".australia").removeClass("c-active");
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usa-nyloc").addClass("loc-active");
			$(".usaloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".australia").mouseover(function(){
			$(this).addClass("c-active");
			$(".usa").removeClass("c-active");
			$(".usa-ny").removeClass("c-active");	
			$(".uk").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".usa-nyloc").removeClass("loc-active");
			$(".australialoc").addClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").removeClass("loc-active");
		});
		$(".uk").mouseover(function(){
			$(this).addClass("c-active");
			$(".usa").removeClass("c-active");
			$(".usa-ny").removeClass("c-active");
			$(".australia").removeClass("c-active");
			$(".india").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".usa-nyloc").removeClass("loc-active");
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
			$(".usa-ny").removeClass("c-active");
			$(".japan").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".usa-nyloc").removeClass("loc-active");
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
			$(".usa-ny").removeClass("c-active");
			$(".usa").removeClass("c-active");
			$(".singapore").removeClass("c-active");
			$(".usaloc").removeClass("loc-active");
			$(".usa-nyloc").removeClass("loc-active");
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
			$(".usa-nyloc").removeClass("loc-active");
			$(".australialoc").removeClass("loc-active");
			$(".ukloc").removeClass("loc-active");
			$(".indialoc").removeClass("loc-active");
			$(".japanloc").removeClass("loc-active");
			$(".singaporeloc").addClass("loc-active");
		});
AOS.init({
        easing: 'ease-in-out-sine'
      });

$('#myselect').on('change', function (e) {
    var id = $(this).val();
    $('a[href="' + id + '"]').tab('show');
});
$('.carousel-allspark').carousel({interval:2500});

$(document).ready(function() {

    $('.responsive').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow:4,
        slidesToScroll: 1,
		autoplay: false,
        autoplaySpeed: 1500,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                // centerMode: true,

            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                infinite: true,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
                dots: true,
                infinite: true,
                
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1000,
            }
        }]
    });


});
$('.responsive1').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
		  autoplay: true,
  autoplaySpeed: 1500,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
		  autoplay: true,
  autoplaySpeed: 1500
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		  autoplay: true,
  autoplaySpeed: 1500
      }
    }
   
  ]
});

jQuery(document).ready(function($){
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: false,
		slideshow: false,
		smoothHeight: true,
		start: function(){
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});

	//open the testimonials modal page
	$('.cd-see-all').on('click', function(){
		$('.cd-testimonials-all').addClass('is-visible');
	});

	//close the testimonials modal page
	$('.cd-testimonials-all .close-btn').on('click', function(){
		$('.cd-testimonials-all').removeClass('is-visible');
	});
	$(document).keyup(function(event){
		//check if user has pressed 'Esc'
    	if(event.which=='27'){
    		$('.cd-testimonials-all').removeClass('is-visible');	
	    }
    });
    
	//build the grid for the testimonials modal page
	$('.cd-testimonials-all-wrapper').children('ul').masonry({
  		itemSelector: '.cd-testimonials-item'
	});
});

"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var c = document.getElementById("canvas");
var ctx = c.getContext("2d");

var angle = function angle(p1, p2) {
  return Math.atan2(p2.y - p1.y, p2.x - p1.x);
};

ctx.strokeStyle = "rgba(140,211,255,1)";
ctx.fillStyle = "rgba(232,137,118,1)";
ctx.lineWidth = 2;

var Particle = function () {
  function Particle(x, y, life, angle, speed) {
    _classCallCheck(this, Particle);

    this.position = {
      x: x,
      y: y
    };

    this.group = '';
    this.closest = {};
    this.id = Math.random() * 1000000;
    this.life = life;
    this.speed = speed;
    this.age = 0;
    this.color = 'rgba(140,211,255,1)';
    this.angle = angle;
    this.static = false;
    this.infinite = true;
    this.opacity = 0;
    this.velocity = {
      x: speed * Math.cos(this.angle),
      y: speed * Math.sin(this.angle)
    };
  }

  Particle.prototype.update = function update(dt) {
    if (this.infinite !== true) {
      this.life -= dt;
    }

    this.age += 1;

    this.velocity = {
      x: this.speed * Math.cos(this.angle),
      y: this.speed * Math.sin(this.angle)
    };

    this.position.x += this.velocity.x * dt;
    this.position.y += this.velocity.y * dt;
  };

  return Particle;
}();

var particles = [];

setInterval(function () {
  if (particles.length < 1500) {
    var particleCount = 30 + 60 * Math.random();
    var speed = -1 + Math.random() * 2;
    var group = 'middle' + Math.random();
    var r = 260 + Math.random()* 360;

    if (r > 400) {
      speed = 1 * Math.random();
    }

    if (r < 400) {
      speed = -1 * Math.random();
    }

    for (var i = 0; i < particleCount; i++) {
      var theta = Math.PI * 2 / particleCount * i;
      var x = canvas.width / 2 + r * Math.cos(theta);
      var y = canvas.height / 2 + r * Math.sin(theta);

      var rotation = angle({
        x: x,
        y: y
      }, {
        x: canvas.width / 2,
        y: canvas.height / 2
      });

      var rnd = Math.round(Math.random() * 1);
      var particle = new Particle(x, y, 100 + 100 * Math.random(), rotation, speed);

      particle.infinite = false;
      particle.group = group;

      particles.push(particle);
    }
  }
}, 200);

setInterval(function () {
  if (particles.length < 700) {
    var rnd = Math.round(Math.random() * 1);
    var particle = new Particle(Math.random() * c.width, Math.random() * c.height, 100 + 100 * Math.random(), Math.random(), 0.8 + Math.random());
    particle.group = 'nonsense' + Math.random();
    particles.push(particle);
  }
}, 50);

var count = 40;
var time;
function draw() {
  var start = new Date().getTime();

  ctx.clearRect(0, 0, c.width, c.height);
  ctx.save();

  for (var i = particles.length - 1; i >= 0; i--) {
    var particle = particles[i];

    if (particle.life <= 0) {
      particles.splice(i, 1);
    }

    if (particle.position.x <= 0 || particle.position.x > canvas.width) {
      particles.splice(i, 1);
    }

    if (particle.position.y <= 0 || particle.position.y > canvas.height) {
      particles.splice(i, 1);
    }
  }

  for (var _i = particles.length - 1; _i >= 0; _i--) {
    var _particle = particles[_i];

    _particle.update(1);

    var closest = [];
    for (var j = particles.length - 1; j >= 0; j--) {
      var closestParticle = particles[j];
      var closestParticlePosition = closestParticle.position;
      var d = Math.sqrt(Math.pow(_particle.position.x - closestParticlePosition.x, 2) + Math.pow(_particle.position.y - closestParticlePosition.y, 2));
      if (d < 30 && d > 1 && _particle.group !== closestParticle.group) {
        closest.push([closestParticlePosition.x, closestParticlePosition.y, d]);
        if (closest.length > 2) {
          break;
        }
      }
    }

    for (var _i2 = closest.length - 1; _i2 >= 0; _i2--) {
      var _closestParticle = closest[_i2];
      //console.log(closestParticle);
      //particle.life += 100;
      ctx.beginPath();
      ctx.lineWidth = 0.5;
      var strokeOpacity = _closestParticle[2] / 50;
      ctx.strokeStyle = "rgba(140,211,255, " + strokeOpacity + ")";

      ctx.moveTo(_closestParticle[0], _closestParticle[1]);
      ctx.lineTo(_particle.position.x, _particle.position.y);
      ctx.stroke();
      ctx.closePath();
    }

    var particleOpacity = 1;
    if (_particle.life < 100) {
      particleOpacity = _particle.life / 100;
    }

    if (_particle.age < 100) {
      particleOpacity = _particle.age / 100;
    }

    ctx.beginPath();
    ctx.rect(_particle.position.x, _particle.position.y, 1, 1);
    ctx.fillStyle = "rgba(232,137,118, " + particleOpacity + ")";
    ctx.fill();
    ctx.closePath();
  }

  ctx.restore();

  var end = new Date().getTime();
  time = end - start;

  window.requestAnimationFrame(draw);
}

window.requestAnimationFrame(draw);


var Circle = (function () {
    function Circle() {
        this.canvas = document.getElementById('circle');
        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.ratio = window.innerHeight < 400 ? 0.6 : 1;
        this.r = 1250;
        this.counter = 0;
    }
    Circle.prototype.init = function () {
        this.createElement();
        this.loop();
    };
    Circle.prototype.createElement = function () {
        var scale = this.ratio;
        this.canvas.width = 1200;
        this.canvas.height =1200;
        this.canvas.style.background = 'transparent';
        this.ctx.transform(scale, 0, 0, -scale, this.canvas.width / 2, this.canvas.height / 2);
        document.body.appendChild(this.canvas);
        for (var i = 0; i < 1000; i++) {
            this.createParticle();
        }
    };
    Circle.prototype.createParticle = function () { 
        this.particles.push({
            color: Math.random() > 0.5 ? "#e88976" : "#8cd3ff",
            radius: Math.random() * 3,
            x: Math.cos(Math.random() * 7 + Math.PI) * this.r,
            y: Math.sin(Math.random() * 7 + Math.PI) * this.r,
            ring: Math.random() * this.r,
            move: ((Math.random() * 3) + 1) / 500000,
            random: Math.random() * 1190
        });
    };
    Circle.prototype.moveParticle = function (p) {
        p.ring = Math.min(p.ring + 1, this.r);
        p.random += p.move;
        p.x = Math.cos(p.random + Math.PI) * p.ring;
        p.y = Math.sin(p.random + Math.PI) * p.ring;
    };
    Circle.prototype.resetParticle = function (p) {
        p.ring = Math.random() * this.r;
        p.radius = Math.random() * 3;
    };
    Circle.prototype.disappear = function (p) {
        if (p.radius < 0.8) {
            this.resetParticle(p);
        }
        p.radius *= 0.992;
    };
    Circle.prototype.draw = function (p) {
        this.ctx.beginPath();
        this.ctx.fillStyle = p.color;
        this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        this.ctx.fill();
    };
    Circle.prototype.loop = function () {
        var _this = this;
        this.ctx.clearRect(-this.canvas.width / 2, -this.canvas.height , this.canvas.width, this.canvas.height * 2);
        if (this.counter < this.particles.length) {
            this.counter++;
        }
        for (var i = 0; i < this.counter; i++) {
            this.disappear(this.particles[i]);
            this.moveParticle(this.particles[i]);
            this.draw(this.particles[i]);
        }
        requestAnimationFrame(function () { return _this.loop(); });
    };
    return Circle;
})();
window.onload = function () {
    var canvas = new Circle();
    canvas.init();
};


function blink(){
    $('.map-dots').eq(Math.round(Math.random() * (50 * 1) + 25))
    .fadeOut(2000)
    .fadeIn(2000);
    
    setTimeout(blink,50);
}

blink();



