<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="August 2015"
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
										<div class="post-day">03</div>
										<div class="post-month">Aug 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 0; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Anil Mathews</b></div>
                                        <div class="post-author disgnation">Founder & CEO</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/adnear-drops-ad-in-its-name-rebrands-to-near.php"><img class="fluid-width" src="<?php IMAGE('blog/AdNear-drops-the-ad.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/adnear-drops-ad-in-its-name-rebrands-to-near.php">AdNear drops the ‘Ad’ in its name, rebrands to ‘Near’</a></h2>
											<p>
												Today is a very exciting day. Two years back, we started using our location data for intelligent mobile advertising. For a while now, we have been empowering brands to create custom audiences, derive powerful real-time consumer insights and measure offline attribution...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/adnear-drops-ad-in-its-name-rebrands-to-near.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
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
