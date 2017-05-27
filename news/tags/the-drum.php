<?php 
include('../../includes/_config.php'); include('../../includes/_lib.php'); ?>

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
	<?php include('../../includes/_head.php'); ?>
    </head>
	<body>
		<div class="preloader"></div>
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
										<div class="post-day">16</div>
										<div class="post-month">Jun 2015</div></div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>news/adnear-continues-global-growth-path-with-expansion-into-europe.php"><img class="fluid-width" src="<?php IMAGE('news/Near-continues-global-growth-path-with-expansion-into-Europe.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>news/adnear-continues-global-growth-path-with-expansion-into-europe.php">Near continues global growth path with expansion into Europe</a></h2>
											<p><em>Ken Parnham, appointed General Manager of Europe, based in London office</em></p>
					<p>Near, the leading mobile data intelligence platform, today announced its expansion into Europe with Ken Parnham – formerly Managing Director of data privacy management company, TrustE – appointed as General Manager of Europe, to be based in its new London office.</p>
                      
											<a href="<?php echo SITE_URL; ?>news/adnear-continues-global-growth-path-with-expansion-into-europe.php" class="button2 button2--primary button2--rounded">Read more</a>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/the-drum.php">The Drum</a></li>
													
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
