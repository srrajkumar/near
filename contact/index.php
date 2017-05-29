<?php include('../includes/_config.php');
$meta_title="Contact Us | Near offices | Ambient Intelligence Platform";
$meta_desc="Reach out to us to know more about our platform and how our SaaS products can help you in your data-driven decisions. ";
$meta_keywords="Near Offices, Near Culture, Connected Data, Connected Environments, SaaS products, Near Leadership, Data products, DaaS API, Allspark, Carbon, Data Partnerships, Data-driven decisions, Omni-channel Marketing, Cross-device Data, Cross-screen Marketing.";
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

</head>
<body  class="the-data">
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
  <?php include('../includes/_java_scripts.php'); ?>
  <script>
$(document).ready(function(){
 $('#contact_form').validate()
})


  
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

</body>
</html>


