<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$title="October 2015"
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
										<div class="post-day">19</div>
										<div class="post-month">Oct 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -856px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Ken Parnham</b></div>
                                        <div class="post-author disgnation">General Manager -<br> Europe </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-retailers-can-leverage-mobile-data-in-todays-data-driven-world.php"><img class="fluid-width" src="<?php IMAGE('blog/how-retailers-can-leverage-mobile-data-in-todays-data-driven-world.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/how-retailers-can-leverage-mobile-data-in-todays-data-driven-world.php">How Retailers Can Leverage Mobile Data in Today’s Data-Driven World</a></h2>
											<p>
												As the retail landscape evolves, it’s only natural that brands are shifting their focus away from the traditional online platforms. Increasingly, retailers are casting their gaze at the endless opportunities provided by mobile retail...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/how-retailers-can-leverage-mobile-data-in-todays-data-driven-world.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
										</div>
									</div>
								</div>
							<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">09</div>
										<div class="post-month">Oct 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -856px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Ken Parnham</b></div>
                                        <div class="post-author disgnation">General Manager -<br> Europe </div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blog/harnessing-the-power-of-mobile-data-for-more-effective-cross-channel-marketing.php"><img class="fluid-width" src="<?php IMAGE('blog/harnessing-power-mobile-data-more-effective-cross-channel-marketing.png'); ?>" alt=""></a>
											</div>
											<h2 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blog/harnessing-the-power-of-mobile-data-for-more-effective-cross-channel-marketing.php">Harnessing the Power of Mobile Data for More Effective Cross-Channel Marketing</a></h2>
											<p>
												The retail landscape has changed beyond recognition. Intelligent devices are creating a culture of interconnectivity and consumers now expect a flexible shopping experience that reflects their interests and device preferences...
											</p>
											<p><a href="<?php echo SITE_URL; ?>blog/harnessing-the-power-of-mobile-data-for-more-effective-cross-channel-marketing.php"  class="button2 button2--primary button2--rounded">Read more</a></p>
											
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
