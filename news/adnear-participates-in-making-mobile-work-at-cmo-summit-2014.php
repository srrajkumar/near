<?php include('../includes/_config.php');
$meta_title = 'Making Mobile Work at CMO Mobile Summit 2014 | Near';
$meta_desc = "Near participates in 'Making Mobile Work' at the CMO Mobile Summit 2014 in the Philippines. This was conducted to give marketers the right tools to utilize mobile in their strategies.";
$title ='Near participates in &ldquo;Making Mobile Work&rdquo; at the CMO Mobile Summit 2014 in Philippines';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

	<meta property="og:image" content="http://near.co/images/news/amrita-mobext.jpg" />
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
										<div class="post-day">19</div>
										<div class="post-month">Nov 2014</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Manila, Philippines</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/amrita-mobext.jpg'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>The CMO Mobile Summit 2014 co-organized by the Philippine Association of National Advertisers (PANA) was conducted recently in Philippines with the theme &ldquo;Making Mobile Work&rdquo;. Since Philippines is known to be a mobile-first country and has most mobile engaged consumers, this summit was conducted to equip the marketers with the right tools so they can start to tie in mobile into their marketing strategy.</p>
                
                <p><b>Amrita De La Pena, Regional Director, SEA & HK participating in the "Mobile Advertising that works" discussion</b></p>
     <p>Near's Regional Director for SEA and HK, Amrita De La Pena who was present at the event talked about bring context to mobile advertising strategies in the &ldquo;Mobile Advertising that works&rdquo; discussion. She also gave some insights on unique ways of ad targeting, how context mattered, and importance of innovations in the mobile ad creatives to drive superior consumer engagement. </p>
	 More on the CMO Mobile Summit 2014, <a href="http://technology.inquirer.net/39444/cmo-mobile-summit-to-focus-on-making-mobile-work" target="_blank">here</a>
	 
								<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													
											<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/CMO.php">CMO </a></li>
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