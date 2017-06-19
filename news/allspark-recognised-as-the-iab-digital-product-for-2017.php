<?php include('../includes/_config.php');
$meta_title = "Allspark wins IAB Digital Product Award for 2017 | SaaS product";
$meta_desc = "We are please to announce that Allspark, Near’s SaaS audience product has won the Digital Product of the Year Award from IAB New Zealand. Allspark has data from over a billion devices across 44 countries, and has 1.7 million users mapped for New Zealand alone. Visit https://near.co/allspark/signup.php to set up a demo of Allspark";
$title ="Allspark recognised as the IAB Digital Product for 2017";
$meta_keywords="Allspark, SaaS products, SaaS platform, Data products, Digital Product, IAB New Zealand, Australian Marketers, New Zealand Marketers, Enterprise Technology, Brand Marketers, Data Platforms, Real-world Data, Consumer Insights, Location-based Targeting, CRM onboarding, Consumer Journey, Consumer Experience, Data-Driven Marketing, Consumer Experience, OOH Analytics, Offline Attribution, Media Planning, Omni-channel experience";
$meta_image="news/allspark-recognised-as-the-iab-digital-product-for-2017.png";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
</head>
	<body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
				<div class="content  colors-e background-90-e">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">25</div>
										<div class="post-month">May 2017</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Australia and New Zealand</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE($meta_image); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											
										<p>We are proud and honoured to announce that <a href="<?php echo SITE_URL ; ?>allspark/" target="_blank">Allspark</a>, Near’s SaaS audience product has won the Digital Product of the Year Award from IAB New Zealand. Allspark has data from over a billion devices across 44 countries, with over 1.7 million users mapped from New Zealand alone, and is used by organisations, enterprises and brands to make data-driven decisions. </p>

										<p>Allspark can be used by organisations for mapping consumer journeys, audience curation, consumer insights, media planning, measuring offline attribution, out-of-home analytics, retail analytics, CRM onboarding and for providing an omni-channel customer experience.</p>

										<p><img src="<?php IMAGE('news/allspark-dashboard.png'); ?>" alt  style="width:100%;"/></p>

										<p style="margin-bottom: 30px;">Check out other winners of IAB NZ awards <a href="http://www.mad-daily.com/furtado-wins-at-iab/"  target="_blank">here</a>. </p>
											
											
										<div class="container news">
									             <div class="social-share">
									           		<div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

													    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
													      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
													      <span class="share-count">0</span>
													    </a>

													    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;via=Near&amp;text=<?php echo $title; ?>&amp;count=true" class="share-twitter"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
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
