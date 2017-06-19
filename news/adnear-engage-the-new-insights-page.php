<?php include('../includes/_config.php');
$meta_title = 'Near Engage: Campaign Results and Customer Discovery | Near';
$meta_desc = "Near is proud to bring you Near Engage, which now not only offers campaign results but helps you discover potential customers through data. Contact us today!";
$title ='Near Engage- The New Insights Page';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

	<meta property="og:image" content="http://near.co/images/news/near-insight.jpg" />
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
										<div class="post-day">6</div>
										<div class="post-month">May 2014</div>
										</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/near-insight.jpg'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>We are coming up with the revamped Near Engage shortly, which shall offer not just campaign results, but will help you discover your customers through data.</p>
                
                <p>Below is a Sneak Peak into the Insights Page of Engage, through which brands can know which audience is most responsive in a geography and the kind of campaigns they are responding to.</p>
              
                
                <p>Near Insights would enable you to view the spread of audiences across the geography, the split of audiences who are engaging with campaigns from various verticals, the consumer engagement in various ad-targeting techniques etc.</p>

<p>The spread of audiences across geographies can help brands make product launch and promotion decisions which are more data driven.</p>

<p>The difference in consumer engagement without any targeting, and with specific targeting schemes can help marketers pick and choose the scheme they want to run, and try different targeting methods to check which one works best for their product.</p>
											
											
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
