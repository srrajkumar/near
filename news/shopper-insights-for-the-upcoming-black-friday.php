<?php include('../includes/_config.php');
$meta_title = 'Shopper Trends | Mobile Data Insights | Location Analytics | Black Friday 2015 | Near';
$meta_desc = " This news sheds light on UK's hot spots and shopper trends for the upcoming Black Friday. Contact us to see how we can put our mobile location data work for your company for the forthcoming Black Friday!";
$title ='Shopper Insights for the upcoming Black Friday';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta property="og:image" content="http://www.near.co/images/news/rwc-2015.png" />
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
										<div class="post-day">24</div>
										<div class="post-month">Nov 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<img class="fluid-width" src="<?php  IMAGE('news/shopper-trends-for-black-friday.png'); ?>" alt="Black Friday">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											
             							 <p><b>Social Apps Lead the Way on Black Friday</b></p>
											 

<p>Social apps are expected to see high levels of use among shoppers on this year’s Black Friday, with 16 per cent of shoppers’ time spent in apps dedicated to social media, sharing their finds and checking in with friends.</p>


<p>The figure comes from a new infographic from location intelligence firm Near, which also explores demographic breakdowns across five of the UK’s largest shopping centres, drawn from mobile data.</p>
<p>You can find this information and more in the infographic below</p>
<p class="img"><a href="<?php PDF('consumer-intelligence/black-friday-near-research.pdf'); ?>" target="_blank"> <img src="<?php  IMAGE('news/black-friday-infographic.jpg'); ?>" alt="Black friday Infographic" style="width:100%;" /></a></p>


 <p>As published in <a href="http://mobilemarketingmagazine.com/94942-2/" target="_blank">Mobile Marketing Magazine</a>. </p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/mobile-marketing-magazine.php">Mobile Marketing Magazine</a></li>
												
												</ul>
											</div>
											
											<div class="container news">
             <div class="social-share">
           		<div class="social-sharing is-clean" data-permalink="https://near.co/news/shopper-insights-for-the-upcoming-black-friday.php">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://near.co/news/shopper-insights-for-the-upcoming-black-friday.php" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=https://near.co/news/shopper-insights-for-the-upcoming-black-friday.php&amp;text=Shopper Insights for the Upcoming Black Friday &amp;via=Near&amp;count=true" class="share-twitter" > <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
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
