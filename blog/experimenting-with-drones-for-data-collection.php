<?php include("../includes/_config.php");  $meta_title = 'Experimenting With Drones for Data Collection | Near';
$meta_desc = "Near is always looking for new methods of data collection, so they've begun experimenting with drones. Contact our experts to put our geo-data to work for you!";
$title ='Experimenting With Drones For Data Collection';
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
				<div class="content  colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row"><?php include('../includes/_blog-filter.php'); ?>
							<div class="col-md-9 col-md-pull-9">
								<div class="row post">
									<div class="col-md-3 post-meta sticky1">
									<div class="post-date">
										<div class="post-day">4</div>
										<div class="post-month">Feb 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('the-near-team.png'); ?>); background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By The Near Team</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('blog/pic1.jpg'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>At AdNear we always think of innovative approaches in technology. Whether it is the way we designed our global location platform or the way we setup our ad-tech infrastructure.  One interesting approach is on how we are prepping to collect wireless data across regions. </p>
        <p>Till now AdNear has been using bikes, cars, trains, and even walking up the stairs to collect data including Wi-Fi and cell tower signals. This wireless data helps AdNear’s location platform precisely locate devices without the need of GPS or operator assistance. </p>
        <p>Today we started initial tests with drones to collect data. And the results have been fantastic! Besides, this turns out to be the most efficient mode.</p>
        <img src="<?php IMAGE('blog/pic2.jpg'); ?>" style="width:100%; height:auto" alt=""/><br>
        <p>
          Here are the three most crucial aspects that give us distinctive advantage of using drones over other mediums: <br>
          <ul class="listing">
          <li>Better altitude coverage</li>
          <li>Radius beyond roads</li>
          <li>GPS controlled flight path</li>
          </ul></p>
          
        <p>The usage of drones for location data collection would tremendously reduce human intervention and ease the process of collating data in inaccessible regions. Drones will also enable quick assimilation of a large-scale location data, which would mean faster new market entry for us, since it does take much higher effort at present. We are talking a new level of scale all together.</p>
        
        <p>AdNear plans to use drones in select geographies post successful completion of these tests to collect the wireless data that is crucial to its audience profiling data. Privacy and legal compliance are of highest importance to us.  Just to keep the record straight; we only collect signals passively and do not record videos or photos. And there is no PII involved either. </p>
        
        <img src="<?php IMAGE('blog/pic1.jpg'); ?>" style="width:100%; height:auto" alt=""/><br>
           
        <p>For brands, this would mean more data points for accurate audiences and more location points for consumer insights and targeting.
</p>
        <p>For us, this means a ton of fun!</p>
		<p>Also published in <a href="http://www.bandt.com.au/marketing/adnear-experiments-drones-data-collection" target="_blank">B&T </a>.</p>									
											
											<div class="container news">
             <div class="social-share">
           		 <div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" data-dnt="true" data-counturl="<?php my_url(); ?>"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
          <div class="fb-comments" data-href="<?php my_url(); ?>" data-width="100%" data-numposts="5"></div>
            </div>
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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
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
<script>
var stickySidebar1 = $('.sticky1');

if (stickySidebar1.length > 0) { 
  var stickyHeight1 = stickySidebar1.height(),
      sidebarTop1 = stickySidebar1.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar1.length > 0) { 
    var scrollTop1 = $(window).scrollTop();
            
    if (sidebarTop1 < scrollTop1) {
      stickySidebar1.css('top', scrollTop1 - sidebarTop1);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom1 = stickySidebar1.offset().top + stickyHeight1,
          stickyStop1 = $('.post').offset().top + $('.post').height();
      if (stickyStop1 < sidebarBottom1) {
        var stopPosition1 = $('.post').height() - stickyHeight1;
        stickySidebar1.css('top', stopPosition1);
      }
    }
    else {
      stickySidebar1.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar1.length > 0) { 
    stickyHeight1 = stickySidebar1.height();
  }
});
</script>		
		
  </body>
</html>
