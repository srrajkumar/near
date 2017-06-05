<?php include('../includes/_config.php');
$meta_title = 'Mobile Location Analytics | Rugby Audience Insights | Location Insights | Near';
$meta_desc = "Near brings you the audience trends for Rugby World Cup 2015! Contact us to see how we can put our location data work for your company.";
$title ='Audience Insights for the Rugby World Cup, 2015';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

    <meta property="og:image" content="http://www.near.co/images/news/audience-insights-rugby.png" />
</head>
	<body>
	<div class="preloader"></div>
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
										<div class="post-day">10</div>
										<div class="post-month">Nov 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<img class="fluid-width" src="<?php IMAGE('news/audience-insights-rugby.png'); ?>" alt="The Rugby World Cup 2015">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											
             							 <p>Location intelligence platform Near has used mobile behaviour of audiences at Rugby World Cup matches to pin point advertisers key audience.</p>
											 

<p>This is a game changer for marketing companies as brands can now achieve more accurate targeting and attribution than ever before.  </p>

<p>Heineken scored big with their £20 million partnership deal as the audience was primarily males aged 26 to 50.</p>
<p>However during the final both the female demographic and audience members aged 16 to 26 increased.  </p>
<p>Check out the infographic below.</p>
<a href="<?php PDF('consumer-intelligence/the-rugby-world-cup-2015-infographic.pdf'); ?>" target="_blank"><p class="img" style="text-align:center;"><img src="<?php IMAGE('news/near-insights-rugby.jpg'); ?>" style="width:100%;" alt="Audience Insights for the Rugby World Cup, 2015" /></p></a>




											
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
