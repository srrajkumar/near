<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = "Apple blocking Ads - What does it mean for Advertisers?";
$meta_desc = "In September of 2015, Apple made the controversial announcement that it would allow ad-blocking extensions on Safari";
$title = "Apple blocking Ads - What does it mean for Advertisers?";
?>
<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $meta_title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>" /> 
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta name="KEYWORDS" content="Data analytics, Data analysis tools, Business analysis techniques, Marketing data, Mobile advertising platforms" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <meta property="og:image" content="" />
	<?php include('../includes/_head.php'); ?>
   <link rel="stylesheet" href="<?php CSS('filter.css'); ?>" />
    <link rel="stylesheet" href="<?php CSS('social-buttons.css'); ?>">	
   	<link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/a611d488-9568-4032-baf2-d8b5d04fab15.css"/>
    <style>
	#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}
	.state2 #top-nav li, .state2 #top-nav li > a, .state2 #top-nav .navbar-brand, .state2 #top-nav .navbar-header, .state2 #top-nav .dropdown-menu > li > a{color:#000;}
	.near-logo{fill:#fff !important;}
	.state2 .near-logo{fill:#5C5C5C !important;}
	.full-size{padding-bottom:0px !important;}
	.view > .content { padding-top: 150px; padding-bottom: 60px; }
	.view{top: -48px; margin-bottom:0;}
	@media (min-width:320px) and (max-width:767px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#000 !important;} .full-size{padding-top:60px !important;} img.bann{width:100%;}}
	@media (min-width:320px) and (max-width:991px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}}
</style>
	
	</head>
	<body class="state1 background-100-e">
		
		<!--div class="page-border bottom colors-e background-solid"><a href="#top" class=" one-third-size">To <span class="highlight">Top</span></a></div-->
		<!-- BEGIN: Top menu -->
		<?php include('../includes/_header.php'); ?>
		<!-- END: Top menu -->
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<!--li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li-->
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<!--li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li-->
			</ul>
		</div>
		<!-- BEGIN: Page content -->
		<!--<div class="youtube-bg" data-video="2zLQI4Dfi_w" data-mute="yes" data-volume="50" data-alternative="images/placeholders/1920x1200-0.jpg"></div>-->
	
			<div class="view sub-banner">
				<img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" /><img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" />

				<div class="content background-60" style="z-index:2">
					<div class="container tech-blog-content">
						<p class="date">November 03, 2015</p>
                    <h1 class="col-md-7" style="float:none; margin:0 auto"><?php echo $title; ?></h1>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
			 <div class="view" style=" background-color:#f2f2f2">
                <div class="container">
                    <ul class="col-md-10 breadcrumb" style="float:none; margin:10px auto;">
                        <li><a href="<?php echo SITE_URL;?>engineering/">Engineering</a></li>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
			<div class="view">
				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									
									<div class="col-md-10" style="float:none; margin:0 auto;">
                                    	<div class="col-md-8">

                                    <div class="tech-author"> <div style="float:right; margin-top:-4px;">
                                                <a href="<?php echo SITE_URL; ?>engineering/fabric-just-the-tool-for-continuous-deployment.php" class="tech-nav-prev" title="Old"></a>
                                                <a href="<?php echo SITE_URL; ?>engineering/location-intelligence-the-next-frontier.php" class="tech-nav-next" title="New"></a>
                                            </div>
                                  
                                    <h2><span>by</span> Near Tech Team</h2>
                                    <!--p class="tech-designation">Technical Architect</p-->
                                    </div>
										<div class="post-body background-75-e">
                                        <p class="tech-note">In September of 2015, Apple made the controversial announcement that it would allow ad-blocking extensions on Safari, the default iOS web browser. While ad-blocking extensions are nothing new on mobile devices (mobile versions of both Chrome and Firefox have enabled ad-blocking for years), this is the first time Apple has officially condoned ad-blocking software on their iPhone and iPad devices. For marketers who rely on mobile ads to reach their audience, this is a troubling development.</p>
										<p>How bad is it, really? Not as bad as you might think. For one thing, the ability to block ads is purely optional, meaning many users will never bother to enable it. While the use of ad-blocking software is on the rise, particularly with younger users, it's hardly an overwhelming percentage of users. In 2014, an Adobe report estimated that only around 5% of desktop and mobile users had ad-blocking software installed. While that number is certain to rise now that Apple has enabled ad blocking as an option, it's unlikely that a major and dramatic shift will follow.</p>
                                        <p>More importantly, Apple's change in policy only applies to ads displaying on their Safari browser. This move is directly aimed at Google's advertising platform, which may see revenue losses of nearly 14% as a result. Apple's ad-blocking does not, however, extend to app-based advertising. Given that in-app advertising is a key piece of the iOS ecosystem, and the only motivation most developers have to contribute apps to the App Store, it's extremely unlikely that Apple would ever enable app-based ad-blocking. </p>
                                        <p>Given the uncertainty Apple's ad-blocking decision has created, it's worth addressing a few key concerns marketers have about the new policy.</p>
                                        
                                        <h4>Does Apple's ad-blocking option apply to in-app advertisements?</h4>   
                                        <p>No. The ad-blocking announcement only applies to standard web-based ads displayed within the Safari mobile web browser.</p>

                                        <h4>Do ad blockers work in iOS and Android?</h4>   
                                        <p>Yes, but only on mobile web browsers, not apps. Android-based browsers have had ad-blocking tools for years, and Apple's recent decision simply enables Safari users to have the same options that Firefox and Chrome users already have.</p>

                                        <h4>Is the paid impression suppressed, or is the ad still called but not loaded?</h4>   
                                        <p>For mobile web, paid impressions will be suppressed, as no ad call will be made. This effect is purely limited to web browsers like Firefox, Chrome and Safari, and does not impact in-app advertising in any way.</p>

                                        <h4>With less ads being served, will there be a budgetary impact for ad CPM?</h4>   
                                        <p>Probably, but it is likely to be minimal. With a decreased inventory available for mobile website ads, it's certainly possible that CPM prices will rise slightly. It is also possible that we will see increased demand for "unblockable" in-app advertising. Prices have remained relatively stable since Apple's policy change, however, and it seems unlikely that any drastic increase in CPM prices is on the horizon. We'll continue to monitor this trend.</p>

                                        <h4>I'm a Near client. Is there any way to see the impact in my Near reports?</h4>   
                                        <p>Near uses in-app advertising, and the impact of Apple's ad-blocking decision for Safari would be indirect at best. It is extremely unlikely any impact will be visible, and you should not expect to see any impact whatsoever on your Near reports.</p>

                                        <h4>What is Near's methodology to avoid targeting people with the ad blockers installed on their phones?</h4>   
                                        <p>We only run campaigns on mobile apps, not on mobile web browsers like Safari. As a result, our clients won't impacted by Apple's decision at all. There is no reason for our clients to avoid targeting people with an ad blocker installed on their phones.</p>


			<div class="container col-lg-12"  style="padding:0;">
             <div class="social-share" style="padding-bottom:14px;">
           		 <div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" data-dnt="true" data-counturl="<?php my_url(); ?>"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
             <div class="fb-comments" data-href="<?php my_url(); ?>" data-width="100%" data-numposts="5"></div>
           
            </div>
										</div>
										</div>
                                        <?php include('../includes/_tech-filter.php'); ?>
									</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		(function() {
			var pre = document.getElementsByTagName('pre'),
				pl = pre.length;
			for (var i = 0; i < pl; i++) {
				pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
				var num = pre[i].innerHTML.split(/\n/).length;
				for (var j = 0; j < num; j++) {
					var line_num = pre[i].getElementsByTagName('span')[0];
					line_num.innerHTML += '<span>' + (j + 1) + '</span>';
				}
			}
		})();
		</script>
		<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
      	<script src="<?php JS('script-bundle.js'); ?>"></script>  
		<script src="https://use.typekit.net/vel7wke.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
  </body>
</html>