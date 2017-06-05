<?php include('../includes/_config.php');
$meta_title = 'Location Data | Mobile Location Analytics | Location Insights | Consumer Insights | Black Friday';
$meta_desc = " This news glean insights into location specific shopper trends seen during the Black Friday month compared to the previous month. This location data analysis provides marketers powerful consumer insights on their mobile behavior in order to plan their marketing & business strategies for Black Friday 2016. Contact us to get more such insights";
$title ='Location Insights from Black Friday';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

    <meta property="og:image" content="<?php IMAGE('news/location-insights-black-friday.png'); ?>" />
</head>
	<body>
	<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
				<div class="content small-top-padding colors-e background-90-e blog">
					<div class="container" style="    margin-bottom: 100px;">
				<div class="content  colors-e background-90-e">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">15</div>
										<div class="post-month">Dec 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<img class="fluid-width" src="<?php IMAGE('news/location-insights-black-friday.png'); ?>" alt="The Black Friday 2015">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											
             							 <p>Female shoppers were almost 1.2 times more engaged on mobile during Black Friday, most likely due to the increase in price comparison and mobile research taking place during the shopping process, even while out and about at major shopping centres.</p>
											 

<p>The figure comes from a new infographic from location specialists Near, who studied location data from five of the UK’s most popular shopping centres to compare Black Friday shopper demographics and data to those from a similar week the previous month.</p>

<p>Among the company’s findings was the fact that Black Friday saw a significant increase in shoppers aged 46 and above, with almost twice as many compared to the month before. This could be due to shoppers aged 16 to 25 preferring to browse the sales online.</p>

<p>You can explore these insights and more in the infographic below.</p>

<p class="img" style="text-align:center;"> <a href="<?php PDF('consumer-intelligence/shopper-insights-black-friday-near-research.pdf'); ?>" target="_blank"><img src="<?php IMAGE('news/location-insights-black-friday-infographic.jpg'); ?>" style="width:100%;" alt="The Black Friday 2015" /></a></p>

<p>As published in <a href="http://mobilemarketingmagazine.com/infographic-location-insights-black-friday/" target="_blank">Mobile Marketing Magazine</a></p>
<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/mobile-marketing-magazine.php">Mobile Marketing Magazine</a></li>
													
												</ul>
											</div>

											
											<div class="container news">
             <div class="social-share">
           		<div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" > <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
            
           
            </div>
										</div>
									</div>
								</div>
							</div>
						<?php include('../includes/_news-filter.php'); ?>
						</div>
					</div>
				</div>
			</div>
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>

  </body>
</html>
