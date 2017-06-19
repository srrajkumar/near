<?php include('../includes/_config.php');
$meta_title = 'The Near Story - Over 100 Million Profiled Users | Near';
$meta_desc = "Find out more about The Near Story, with Over 100 Million profiled user, Near's user base and location footprints continue to grow! Contact us today!";
$title ='100+ million profiled users in 2 years. 2.1 billion location footprints in 4000 cities. The Near story';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

    <meta property="og:image" content="//near.co/images/news/near-minimal-graphic-1.jpg" />
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
										<div class="post-day">10</div>
										<div class="post-month">Mar 2014</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; India</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/near-minimal-graphic-1.jpg'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											 <p>You are heading into a supermarket to buy monthly groceries. After you park the car, you check your phone and see that your chat app shows a message from a friend. You open it to reply, and find that next to the chat, there’s an ad displaying discount deals at another supermarket nearby. You make a mental note to try that grocer next time. Bingo! Near has bagged another potential customer for their client, the rival supermarket.</p>
                
                <p> This is just one of the countless ways Near, a big data company in the mobile ad tech space, leverages geo-location and other data points to create intelligent targeting capabilities for ads across mobile devices. Today, <b>Near has 2.1 billion location footprints across 4000 cities; they serve targeted ads from 40,000 apps to over 100 million users</b>. Currently headquartered in Singapore, and backed by Sequoia Capital and Canaan Partners, they process billions of ads and terabytes of data every month.</p>
				<p> <a href="http://yourstory.com/2014/03/adnear/" target="_blank">Yourstory </a></p>
               
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/yourstory.php">Yourstory</a></li>
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
