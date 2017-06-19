<?php include('../includes/_config.php');

  $bg = array('engineer-1', 'engineer-2', 'engineer-3', 'engineer-4' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
$meta_title = 'Near Tech Blog - Thought Leadership Pieces from our Location Intelligence Experts';
$meta_desc = "Near's tech blog section showcases our tech leader's opinion on various topics starting from bleeding-edge technologies in distributed systems, large-scale data processing pipelines, data storage to data sciences. Explore this section to stay up to date!";
$title ='Near Tech Blog - Thought Leadership Pieces from our Location Intelligence Experts ';
$meta_keywords="Near Engineering, data platform, data products, location intelligence platforms, social data streams, wearables data, IoT data, mobile app data, data and technology blogs, location data tech blogs, mobile location, Allspark, Carbon, DaaS API, SaaS products";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
<link rel="stylesheet" href="<?php CSS_PATH('social-buttons.css');?>">	
	<link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/a611d488-9568-4032-baf2-d8b5d04fab15.css"/>
	 <style>
	 .navbar .nav ul li a{
	 	color: #fff;
	 }
	 .s-header__trigger-icon{
	 	background-color: #fff;
	 }
	 	footer{
		z-index: 99;
	    position: relative;
	    }
	    .navbar.shrink{color: #5c5c5c !important;}
	    .checkBox.shrink #burger span{background:#5c5c5c !important;}
	#burger span {background: #fff !important;}
	.checkBox.anim-rect #burger span{background:#5c5c5c !important;}
	.near-logo{fill:#fff !important;}
	.state2 .near-logo{fill:#fff !important;}
	.state2 #top-nav{ background-color:rgba(0,0,0,0.7) !important;}
	@media (min-width:320px) and (max-width:767px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#000 !important;} .full-size{padding-top:60px !important;} img.bann{width:100%;}}
	@media (min-width:320px) and (max-width:991px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}}
</style>
</head>
	<body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	
		<!-- BEGIN: Top menu -->
			<?php include('../includes/_navigation.php'); ?>
		<!-- END: Top menu -->
       	<!-- BEGIN: Page content -->
        <div class="bg banner-mobile1" style="right:0;">
        <video autoplay loop muted style="width:100%">
        <source src="<?php echo VDO_ASSETS_URL;?><?php echo $selectedBg.'.ogv';?>" type='video/ogg; codecs="theora, vorbis"'/>
        <source src="<?php echo VDO_ASSETS_URL;?><?php echo $selectedBg.'.webm';?>" type='video/webm' >
        <source src="<?php echo VDO_ASSETS_URL;?><?php echo $selectedBg.'.mp4';?>" type='video/mp4'>
        </video>
		
        <div class="overlay-blk"></div>
        </div>
		
        <!-- Career
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   <div class="container-fluid privacy tech-blog " style="    padding-top: 250px; padding-bottom: 249px;" >

	 <!-- Three columns of text below the carousel -->
        <div class="row content home-mary full-size">
            <div class="container" style="margin-top:-20px;" >
                <div class="col-xs-12">
                <a href="<?php echo SITE_URL; ?>engineering/location-intelligence-the-next-frontier.php">
                    <p class="date">May 02, 2016</p>
                    <h1 id="string1"></h1>
                    <p class="first-story col-xs-9" style="padding-left:0;">Location Intelligence Platforms are the next tech frontier (on the same scale as search or e-commerce) as mobile,  →</p>	
                    </a>
                </div>
            </div>
            <div class="container" style="border-bottom:none; margin-bottom:-60px; margin-top:30px; " >
            <div class="post-image">
                <div class="slider">
                    <div>
                    <ul class="tech-list">
                    <li class="col-sm-3">
                        <a href="<?php echo SITE_URL; ?>engineering/apple-blocking-ads-what-does-it-mean-for-advertisers.php">
                    <p class="date">November 03, 2015</p>
                 <h2>Apple blocking Ads - What does it mean for Advertisers?</h2>
                   
                    </a>
                        </li>
                    	
                        <li class="col-sm-3">
                        <a href="<?php echo SITE_URL; ?>engineering/intro.php">
                        <p class="date">OCTOBER 14, 2015</p>
                        <h2>Near Engineering</h2>
                        </a>
                        </li>
                        
                    </ul>
                    </div>
                    

                </div>
            </div>
            
            
        </div>
        </div>
        
      </div><!-- /.row -->
 
 
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
	 
		<script src="https://use.typekit.net/vel7wke.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script>
		$('.slider').slick({
		  autoplay: false,
		  infinite: false,
		});
		setInterval(typeStr, 85);
		var str = "Location Intelligence: The Next Frontier";
		var typestring = str.length;
		var inx1 = -1;
		var inx2 = 0;
		function typeStr() {
			if (typestring !== -1) {
				document.getElementById('string1').innerHTML += str.substring(inx1,inx2);
				inx1++;
				  inx2++;
				typestring--;
			} else {
				clearInterval(typeStr);
			};
		};
		</script>

  </body>
</html>
