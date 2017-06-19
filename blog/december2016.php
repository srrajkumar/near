<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="December 2016"
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
										<div class="post-day">21</div>
										<div class="post-month">Dec 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -1225px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Smriti Kataria</b></div>
                                        <div class="post-author disgnation">Director, Research &amp; Marketing</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/all-i-want-for-christmas-is-retail-analytics.php"><img class="fluid-width" src="<?php IMAGE('blog/all-i-want-for-christmas-is-retail-analytics.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/all-i-want-for-christmas-is-retail-analytics.php">All I want for Christmas is… retail analytics</a></h2>
											
											<p>Singapore’s retail sector has hit some tough times. Several home-grown names have been dealt blows and malls are feeling the brunt of escalating vacancy rates, highlighting the growing plight of retailers here...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/all-i-want-for-christmas-is-retail-analytics.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
                                <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">13</div>
										<div class="post-month">Dec 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -856px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Ken Parnham</b></div>
                                        <div class="post-author disgnation">General Manager -<br> Europe</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-did-2016-put-location-on-the-map-for-businesses.php"><img class="fluid-width" src="<?php IMAGE('blog/how-did-2016-put-location-on-the-map-for-businesses.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-did-2016-put-location-on-the-map-for-businesses.php">How did 2016 put location on the map for businesses</a></h2>
											
											<p>In 2016 the penny dropped, businesses finally realised what consumers have known for a while: location plays a bigger part in our lives than anyone gives it credit for. Lost? GPS. Need a lift? Uber. Peckish? Just Eat, Deliveroo, Hungry House...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/how-did-2016-put-location-on-the-map-for-businesses.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
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
