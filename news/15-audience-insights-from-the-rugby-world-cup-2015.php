<?php include('../includes/_config.php');
$meta_title = 'Location Analytics | Audience Insights | Rugby World Cup 2015 | Near';
$meta_desc = " Near brings you the audience trends for Rugby World Cup 2015! Contact us to see how we can help you reach your audience in real-time!";
$title ='15 Audience Insights from the Rugby World Cup, 2015';
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
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">01</div>
										<div class="post-month">Oct 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<a href="<?php PDF('latest-research/rugby-worldcup-2015-near-insights.pdf'); ?>" target="_blank">	<img class="fluid-width" src="<?php IMAGE('news/rwc-2015.png'); ?>" alt="The Rugby World Cup 2015"></a>
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											
             							 <p>Among the UK stadiums hosting the Rugby World Cup, a third of logged mobile users were registered at the Millennium Stadium, according to location intelligence platform Near.</p>
											 

<p>Research taken across eight match venues between 18 September to 27 September found that those aged 36 years and above made up over 41 per cent of all RWC2015 audience spectators. Almost nine out of ten users were male.</p>

<p>Comparing Android and iOS usage, the Google OS represented 58 per cent of devices.</p>

<p>Check out the infographic below for further data.</p>

<p class="img" style="text-align:center;"> <a href="<?php PDF('latest-research/rugby-worldcup-2015-near-insights.pdf'); ?>" target="_blank"><img src="<?php IMAGE('news/rwc-2015-infographic.png'); ?>" alt="The Rugby World Cup 2015" /></a></p>


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
	<div style="clear:both;"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
		<?php include('../includes/_java_scripts.php'); ?>
  </body>
</html>
