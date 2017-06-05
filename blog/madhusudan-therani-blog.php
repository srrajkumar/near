<?php include('../includes/_config.php');
$meta_title=" Near Blog | Madhusudan Therani | Ambient Intelligence Platform";
$meta_desc="Here you will find blogs from Madhusudan Therani, CTO at Near on topics revolving around technology, Near ambient intelligence platform, location data, location data accuracy, spend data, weather data, SaaS products, data products, mobile intelligence and much more.";
$meta_keywords="Machine Learning, Artificial Intelligence, SaaS products, Data products, ambient intelligence platform, location intelligence, data platform, Madhusudan Therani, cross-screen marketing, location data accuracy, data cleansing, mobile data, data accuracy, consumer analytics, attribution measurement, location-based marketing";
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
										<div class="post-day">08</div>
										<div class="post-month">Nov 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -245px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; <b>By Madhusudan Therani</b></div>

										 <div class="post-author disgnation">Chief Technology Officer </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/near-platform-introduces-placematrix-enhances-spatial-precision.php"><img class="fluid-width" src="<?php IMAGE('blog/near-platform-introduces-placematrix-enhances-spatial-precision.jpg'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/near-platform-introduces-placematrix-enhances-spatial-precision.php">Near platform introduces PlaceMatrix, enhances spatial precision</a></h2>
											
											<p>We are pleased to publicly announce the availability of PlaceMatrix - our proprietary repository of building footprints in the Near Platform - currently being used in Allspark, our audience curation product...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/near-platform-introduces-placematrix-enhances-spatial-precision.php"   class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
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

var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) { 
  var stickyHeight = stickySidebar.height(),
      sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar.length > 0) { 
    var scrollTop = $(window).scrollTop();
            
    if (sidebarTop < scrollTop) {
      stickySidebar.css('top', scrollTop - sidebarTop);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
          stickyStop = $('.blog').offset().top + $('.blog').height();
      if (stickyStop < sidebarBottom) {
        var stopPosition = $('.blog').height() - stickyHeight;
        stickySidebar.css('top', stopPosition);
      }
    }
    else {
      stickySidebar.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar.length > 0) { 
    stickyHeight = stickySidebar.height();
  }
});
</script>
  </body>
</html>
