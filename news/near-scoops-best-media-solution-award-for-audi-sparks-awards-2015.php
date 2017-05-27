<?php include('../includes/_config.php');
$meta_title = 'Near scoops the Best Media Solution award for Audi at the Sparks Awards, 2015 | Near';
$meta_desc = "The Art of Progress (Audi A8 campaign) was declared the winner at the Spark Awards for Media Excellence 2015 held yesterday at The Singapore Marriott Tang Plaza Hotel.";
$title ='Near scoops the Best Media Solution award for Audi at the Sparks Awards, 2015 ';
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
	<meta property="og:url" content="//www.near.co/news/near-scoops-best-media-solution-award-for-audi-sparks-awards-2015.php" />
	<meta property="og:image" content="http://near.co/images/news/spark-awards.png" />
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
										<div class="post-day">28</div>
										<div class="post-month">Aug 2015</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Singapore</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/spark-awards.png'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											 <p>We are happy to take home the award in the Best Media Solution category for Audi. The Art of Progress (Audi A8 campaign) was declared the winner at the Spark Awards for Media Excellence 2015 held yesterday at The Singapore Marriott Tang Plaza Hotel.</p>

<p><em>Benjamin Pavanetto (left) from Near receiving the award</em></p>

<p>Organised by Marketing magazine, The Spark Awards celebrates best practices in media solutions, products and services. It is the premier platform for media owners across the South Asia, Southeast Asia and ANZ regions to showcase their innovation, effectiveness, and value proposition to advertisers, agencies and clients.  </p>




<p>Audi A8 campaign also won Gold for the Best Campaign for Tablets category at Mob-Ex Awards, held earlier this year. To know more about this, click <a href="http://near.co/news/adnear-scoops-gold-at-mob-ex-awards-2015-for-audi.php" target="_blank">here.</a></p>
											<!--div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="tags/drum.php">Drum</a></li>
												</ul>
											</div-->
											
											<div class="container news">
             <div class="social-share">
           		  <div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;via=<?php echo $title; ?>&amp;count=true" class="share-twitter"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
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
