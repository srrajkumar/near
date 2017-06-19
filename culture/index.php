<?php include('../includes/_config.php');
$meta_title=" Near Culture - Believers in Work plus Life | Game Changers | Data Experts | SaaS product Experts | Ambient Intelligence Platform | Best Places to Work";
$meta_desc="At Near, Culture is important to us. If a challenging work environment interests you, come join us to start your new career today!";
$meta_keywords="Believers in Work plus Life, Near culture, fun at work, best rewards and remuneration, amazing leadership, go-getter, best places to work, Start-ups Culture, Global Startups";
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
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('popup.css'); ?>" />
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
<body  class="the-data">
<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
 
       <script type="text/javascript" src="<?php JS ('lightbox/html5lightbox.js'); ?>"></script>   
<script type="text/javascript" src="<?php JS ('popup.jquery.js'); ?>"></script>
    <script type="text/javascript">
        jQuery(function(){
            
            jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
        });
    </script>
</body>
</html>


