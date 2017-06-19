<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="June 2016"
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
										<div class="post-day">12</div>
										<div class="post-month">Jun 2017</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -856px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Ken Parnham</b></div>
                                        <div class="post-author disgnation">General Manager -<br> Europe</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/is-untapped-data-the-biggest-missed-opportunity-for-telcos.php"><img class="fluid-width" src="<?php IMAGE('blog/is-untapped-data-the-biggest-missed-opportunity-for-telcos.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/is-untapped-data-the-biggest-missed-opportunity-for-telcos.php">Is untapped data the biggest missed opportunity for telcos?</a></h2>
											
											<p>Much has changed since Motorola first made mobile handsets accessible to the masses in 1984. Smartphones now account for over half of global mobile subscriptions and 8.4 billion connected devices are expected to be in use worldwide by the end of this year...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/is-untapped-data-the-biggest-missed-opportunity-for-telcos.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
                           <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">02</div>
										<div class="post-month">Jun 2017</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -245px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; <b>By Madhusudan Therani</b></div>

										 <div class="post-author disgnation">Chief Technology Officer </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/ai-and-robots-arent-about-to-take-over-the-world-yet.php"><img class="fluid-width" src="<?php IMAGE('blog/ai-and-robots-arent-about-to-take-over-the-world-yet.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/ai-and-robots-arent-about-to-take-over-the-world-yet.php">AI and Robots Aren’t About to Take Over the World, Yet</a></h2>
											
											<p>The concept of Artificial Intelligence (AI) – especially in the form of humanoid robots – is by no means a new phenomenon, with intelligent machines appearing on our screens as early as 1984...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/ai-and-robots-arent-about-to-take-over-the-world-yet.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
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
