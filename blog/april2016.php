<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="April 2016"
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
	<div class="preloader"></div>
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
										<div class="post-day">21</div>
										<div class="post-month">Apr 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -245px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; <b>By Madhusudan Therani</b></div>

										 <div class="post-author disgnation">Chief Technology Officer </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/understanding-the-three-location-data-conundrums.php"><img class="fluid-width" src="<?php IMAGE('blog/understanding-the-three-location-data-conundrums.jpg'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/understanding-the-three-location-data-conundrums.php">Understanding the 3 Location Data conundrums</a></h2>
											<p>
												With the increasing adoption of mobile by most brands, utilising location data to understand and reach consumers better is essential in 2016. However, understanding the implications of location data quality and the associated location intelligence is necessary for correct business decisions...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/understanding-the-three-location-data-conundrums.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
											
										</div>
									</div>
								</div>
                            <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">11</div>
										<div class="post-month">Apr 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -121px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; <b>By Shobhit Shukla</b></div>

										 <div class="post-author disgnation">Co-Founder &amp; Chief Revenue Officer </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-location-intelligence-helps-businesses-improve-marketing-effectiveness-in-the-now.php"><img class="fluid-width" src="<?php IMAGE('blog/how-location-intelligence-helps-businesses-improve-marketing-effectiveness.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-location-intelligence-helps-businesses-improve-marketing-effectiveness-in-the-now.php">How Location Intelligence Helps Businesses Improve Marketing Effectiveness In The Now</a></h2>
											<p>
												With today’s ever-evolving technological climate, mobile devices are a sort of extension of ourselves. Rarely do they ever actually leave our sides and rarely do we ever not need, or use them...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/how-location-intelligence-helps-businesses-improve-marketing-effectiveness-in-the-now.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
											
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
