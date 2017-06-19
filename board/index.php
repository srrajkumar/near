<?php include('../includes/_config.php');
$meta_title="Near Investors - Believers in Ambient Intelligence Platform | Connected Data | Cross-Channel Marketing | Data-Driven Decisions | Consumer Insights | Unified Consumer View | SaaS Audience Product";
$meta_desc="Here you will find Near's Investors & Board who believe in using Ambient Intelligence Platform & SaaS Products for Audience Insights, Attribution Analytics, Data-driven Marketing & Data-driven Decisions. Contact us to see how our SaaS product, Allspark can help in your strategy.";
$meta_keywords="Near Investors, Near Board, believers in ambient intelligence, location data, connected data, data products, SAAS products, consumer insights, data-driven marketing, location analytics, data-driven decisions, enterprise products";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
 
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
<style>
  .custom_btn{
    border: 1px solid #000 !important;
    position: absolute;
    bottom: 20px;
    left: 40px;
    width: 35px;
    height: 35px;
    z-index: 3;
    transition: all 0.2s ease-in-out;
    overflow: hidden;
    text-transform: uppercase;
    font-weight:700;
   
}
.col-md-4:hover .custom_btn,.col-md-3:hover .custom_btn, .col-md-6:hover .custom_btn{
  width: 120px;
}
 .col-md-4:hover .btn__text, .col-md-3:hover .btn__text, .col-md-6:hover .btn__text{
  right: 0;
  z-index:3;
}

 .custom_btn .btn__text{
    right: 100%;
    color: #fff !important;
    height: 35px;
    width: 120px;
    background: #000 !important;
    position: absolute;
        line-height: 33px;
    transition: all 0.2s ease-in-out;

}
 .custom_btn .icon{
  top: 4px;
  left: -8px;
}
.btn__text-inner{
  margin-left: 28px;
   color: #fff !important;
}
.custom_btn {border-radius:30px;}
 .custom_btn .icon svg{
  width: 35px;
  height: 35px;
 left: 0;
  position: absolute;
  top: -4px;
  transition: all 0.2s ease-in-out;
  z-index: 3;

}
.color_change{
  fill: #000 !important;
  transition: all 0.2s ease-in-out;
}
 .col-md-4:hover .color_change, .col-md-6:hover .color_change, .col-md-3:hover .color_change{
  fill: #ED1C24 !important;
}
 .col-md-4:hover .custom_btn,.col-md-6:hover .custom_btn, .col-md-3:hover .custom_btn{border:1px solid #000 !important}
 .col-md-4:hover:before,.col-md-6:hover:before, .col-md-3:hover:before{
  opacity: 0.7;
}
.col-md-4:hover .custom_btn .icon svg, .col-md-6:hover .custom_btn .icon svg,.col-md-3:hover .custom_btn .icon svg{left:85px;}
#cycler, #cycler1{position:relative;}
#cycler img, #cycler1 img, #cycler2 img, #cycler3 img{position:absolute;z-index:1}
#cycler img.active, #cycler1 img.active, #cycler2 img.active, #cycler3 img.active{z-index:3}
</style>

</head>
<body>
<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
  <script src="<?php JS('build/three.js'); ?>"></script>

  <script src="<?php JS('build/Projector.js'); ?>"></script>
  <script src="<?php JS('build/CanvasRenderer.js'); ?>"></script>
      <script>

      var $anchors = $('.icon-anim .icon_hover'), counter = 0;
      setInterval(function(){
        $anchors.removeClass('active');
        $anchors.eq(counter++ % $anchors.length).addClass('active');

      }, 3000);
      $anchors.hover(
        function () {
          $anchors.removeClass('active');
          $(this).addClass("active");
      },
      );

function cycleImages(){
      var $active = $('#cycler .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

function cycleImages1(){
      var $active = $('#cycler1 .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler1 img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
function cycleImages2(){
      var $active = $('#cycler2 .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler2 img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
function cycleImages3(){
      var $active = $('#cycler3 .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler3 img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
$(document).ready(function(){
// run every 7s
setInterval('cycleImages()', 3000);
setInterval('cycleImages1()', 4000);
setInterval('cycleImages2()', 3000);
setInterval('cycleImages3()', 4000);
});

  </script>
   <script type="x-shader/x-vertex" id="vertexshader">

      attribute float size;
      attribute vec3 customColor;
      varying vec3 vColor;

      void main() {
          vColor = customColor;
          vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
          gl_PointSize = size * ( 10.0 / length( mvPosition.xyz ) );
          gl_Position = projectionMatrix * mvPosition;
      }
  </script>
</body>
</html>


