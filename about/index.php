<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
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


