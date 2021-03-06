<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="The Near Team"
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS_path('page/jquery.snippet.min.css'); ?>" >
</head>

   <body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('blog-banner.php'); ?>
		<!-- BEGIN: Page content -->
		<div class="view newsroom" style="margin-top: 100px;">
				<div class="content small-top-padding colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row">
                        	<?php include('../includes/_blog-filter.php'); ?>
							<div  class="col-md-9 col-md-pull-9">
                            <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">13</div>
										<div class="post-month">Sep 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('the-near-team.png'); ?>); background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By The Near Team</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/5-tips-apac-marketers-should-consider-in-data-driven-targeting.php"><img class="fluid-width" src="<?php IMAGE('blog/5-tips-apac-marketers-should-consider-in-data-driven-targeting.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/5-tips-apac-marketers-should-consider-in-data-driven-targeting.php">5 Tips APAC Marketers Should Consider in Data-Driven Targeting</a></h2>
											
											<p>Media planning has become a bigger challenge as marketers and agencies become more sophisticated with their data use...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/5-tips-apac-marketers-should-consider-in-data-driven-targeting.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
                              <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">23</div>
										<div class="post-month">Nov 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('the-near-team.png'); ?>); background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By The Near Team</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-the-qsr-industry-can-leverage-mobile-data-in-apac.php"><img class="fluid-width" src="<?php IMAGE('blog/how-the-qsr-industry-can-leverage-mobile-data-in-apac.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-the-qsr-industry-can-leverage-mobile-data-in-apac.php">How the QSR industry can leverage mobile data in APAC</a></h2>
											
											<p>The adoption of mobile as a marketing tool is increasing across verticals, particularly within the Quick Service Restaurant (QSR) industry. As “out of home” food and drink consumption grows, presence in areas with high population...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/how-the-qsr-industry-can-leverage-mobile-data-in-apac.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
								 <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">4</div>
										<div class="post-month">Feb 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('the-near-team.png'); ?>); background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By The Near Team</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/experimenting-with-drones-for-data-collection.php"><img class="fluid-width" src="<?php IMAGE('blog/pic1.jpg'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/experimenting-with-drones-for-data-collection.php">Experimenting With Drones For Data Collection</a></h2>
											<p>
												At AdNear we always think of innovative approaches in technology. Whether it is the way we designed our global location platform or the way we setup our ad-tech infrastructure. One interesting approach is on how we are prepping to collect wireless data across regions...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/experimenting-with-drones-for-data-collection.php" class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
							</div>
							
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
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
	<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});


</script>
  </body>
</html>
