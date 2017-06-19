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
										<div class="post-day">15</div>
										<div class="post-month">Jul 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Singapore</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>news/singapore-sales-research-consumer-insights.php"><img class="fluid-width" src="<?php IMAGE('news/gss.jpg'); ?>" alt="Singapore Sales" /></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>news/singapore-sales-research-consumer-insights.php">Near’s Shopper Insights reveals Singapore’s hot spots during The Great Singapore Sale</a></h2>
											  <p>Near, the location intelligence company, today unveiled its research on The Great Singapore Sale 2015. One of the key findings was that Orchard Road had the highest footfall amongst the locations covered under the study.</p>
											<a href="<?php echo SITE_URL; ?>news/singapore-sales-research-consumer-insights.php" class="button2 button2--primary button2--rounded">Read more</a>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/research.php">Research</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/channelnewsasia.php">Channel News Asia</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/cnbc.php">CNBC</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/enterpriseinnovation.php">Enterprise Innovation</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/singapore-business-review.php">Singapore Business Review</a></li>
												
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
