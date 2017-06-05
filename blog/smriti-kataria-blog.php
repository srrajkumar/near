<?php include('../includes/_config.php');
$meta_title="Near Blog | Smriti Kataria | Ambient Intelligence Platform";
$meta_desc="Here you will find blogs from Smriti Kataria at Near on topics revolving around using ambient intelligence for enhanced consumer insights, location intelligence omni-channel marketing, cross-screen analytics to get a unified consumer view, SaaS products for real-time attribution analytics and much more.";
$meta_keywords=" Ambient Intelligence Platform, location intelligence, Consumer Research, Consumer Insights, Consumer Intelligence for location-based audience targeting, Smriti Kataria, location-based marketing, audience insights, cross-screen marketing, omnichannel advertising, retail analytics, location analytics, cross screen analytics, OOH analytics";
$title="Smriti Kataria"
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
											<p><a href="<?php echo SITE_URL; ?>blog/all-i-want-for-christmas-is-retail-analytics.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
                           
                          <div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">14</div>
										<div class="post-month">Nov 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -1225px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Smriti Kataria</b></div>
                                        <div class="post-author disgnation">Director, Research &amp; Marketing</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/5-reasons-that-location-is-datas-missing-link.php"><img class="fluid-width" src="<?php IMAGE('blog/5-reasons-that-location-is-datas-missing-link.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/5-reasons-that-location-is-datas-missing-link.php">5 reasons that location is data's missing link</a></h2>
											
											<p>Location data bridges the gap between the digital and physical worlds. There are diverse sources of location data available today, and converging them can give us holistic consumer insights...</p>
											<p><a href="<?php echo SITE_URL; ?>blog/5-reasons-that-location-is-datas-missing-link.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
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
