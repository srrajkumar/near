<?php include("../../includes/_config.php"); include("../../includes/_lib.php"); ?>

<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Near Newsroom - Stay up to date on our latest announcements, Consumer Insights and much more!</title>
   
<!--META TAG-->

    <meta name="title" content="Near Newsroom - Stay up to date on our latest announcements, Consumer Insights and much more!" />
    <meta name="description" content="Here you will find our latest product and partnership announcements, consumer insights, Near mention in industry news, recognition and much more. Be up to date on the latest industry news here!" />
    <meta name="KEYWORDS" content="" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
	<?php include('../../includes/_head.php'); ?>
    </head>
	<body class="state1 background-100-e">
		<!-- BEGIN: Top menu -->
			<?php include('../../includes/_header.php'); ?>
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
	
            
            <div class="view sub-banner">
        <div class="overlay-vdo2" ></div>
				<img alt class="bg" src="<?php IMAGE('bg-news.png'); ?>" /><img alt class="bg" src="<?php IMAGE('bg-news.png'); ?>" />
				<div class="content one-third-size colors-e background-60" style="z-index:2">
					<div class="container">
						<h2>Newsroom</h2>
						<!--p class="title">Awards</p-->
					</div>
				</div>
			</div>
		<!-- BEGIN: Page content -->
		<section>
			<div class="view">
				<div class="content small-top-padding colors-e background-90-e blog">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								
								 <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">28</div>
										<div class="post-month">Nov 2012</div></div>
										
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>news/location-based-mobile-advertising-platform-adnear-raises-$6.3m-from-sequoia-canaan-partners.php"><img class="fluid-width" src="<?php  IMAGE('news/Location-based-mobile-advertising-platform-Near-raises-$6.3M-from-Sequoia-&-Canaan-Partners.png'); ?>" alt=""></a>
											</div>
											<h4 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>news/location-based-mobile-advertising-platform-adnear-raises-$6.3m-from-sequoia-canaan-partners.php">Location-based mobile advertising platform Near raises $6.3M from Sequoia & Canaan Partners</a></h4>
											 <p>Near, a location-based mobile advertising platform that supports both feature phones and smartphones, has raised Rs 35 crore ($6.3 million) in Series A funding from Sequoia Capital and Canaan Partners. The money raised will be primarily used to support the company’s expansion plans across the Asia-Pacific region and also to expand the team.</p>
											<p><a href="<?php echo SITE_URL; ?>news/location-based-mobile-advertising-platform-adnear-raises-$6.3m-from-sequoia-canaan-partners.php" class="btn-sm page-transition">Read more...</a></p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/techcircle.php">Techcircle</a></li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>				 
							</div>
										<?php include('../../includes/_news-filter.php'); ?>
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
		<?php include('../../includes/_footer.php'); ?><!-- END: Footer -->
		<?php include('../../includes/_java_scripts.php'); ?>
		<script src="<?php JS('slick.js/slick/slick.min.js'); ?>"></script> 
  </body>
</html>
