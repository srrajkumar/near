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
										<div class="post-day">22</div>
										<div class="post-month">May 2017</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Singapore</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>news/how-ambient-intelligence-is-changing-how-business-is-done.php"><img class="fluid-width" src="<?php IMAGE('news/how-ambient-intelligence-is-changing-how-business-is-done.png'); ?>" alt="" /></a>
											</div>
											<h4 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>news/how-ambient-intelligence-is-changing-how-business-is-done.php">How Ambient Intelligence Is Changing How Business Is Done</a></h4>
											
											<p><em>HQ Asia spoke with Shobhit Shukla, our Co-founder & Chief Revenue Officer on the work the future of data and the role of leadership in a cutting-edge tech company...</em></p>
											 
											<p><a href="<?php echo SITE_URL; ?>news/how-ambient-intelligence-is-changing-how-business-is-done.php" class="page-transition btn-sm">Read more...</a></p>
						<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
												
												<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/hq-asia.php">HQ Asia</a></li>
												
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
