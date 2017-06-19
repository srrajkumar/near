<?php include('../../includes/_config.php'); ?>

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
	<body>
		<div class="preloader">
  <?php include('../../includes/preloader.php'); ?>
</div>
	<?php include('../../includes/_navigation.php'); ?>
		<?php include('../news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
				<div class="content small-top-padding colors-e background-90-e blog">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								
								 <div class="row post">
									<div class="col-md-3 post-meta">
                                    <div class="post-date">
										<div class="post-day">10</div>
										<div class="post-month">Oct 2016</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>


									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>news/what-the-near-co-founder-reads-on-the-way-to-work.php"><img class="fluid-width" src="<?php IMAGE('news/what-the-near-co-founder-reads-on-the-way-to-work.png'); ?>" alt="" /></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>news/what-the-near-co-founder-reads-on-the-way-to-work.php">What the Near Co-Founder reads on the way to work</a></h2>
											 <h5>The marketing intelligence entrepreneur depends on his social network for tech news</h5>
											 <p>I travel for work two or three weeks every month. It’s a lot of travel, and I’m not at home in Singapore as often as I would like to be...</p>
											<a href="<?php echo SITE_URL; ?>news/what-the-near-co-founder-reads-on-the-way-to-work.php" class="button2 button2--primary button2--rounded">Read more</a>
                                             <div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
												
											<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/the-financial-times-uk.php">The Financial Times UK</a></li>

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
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../../includes/_footer.php'); ?><!-- END: Footer -->
		<?php include('../../includes/_java_scripts.php'); ?>
		
  </body>
</html>
