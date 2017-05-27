<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = 'PlaceMatrix | Building Footprints Repository | Proprietary First- Party Building Outlines | Near Platform |  Allspark';
$meta_desc = "PlaceMatrix is the proprietary repository of building footprints developed by the Near Platform and clearly differentiate consumers ‘around’ the stores from the ones ‘inside’ the stores.";
$title ='Near platform introduces PlaceMatrix, enhances spatial precision';
?>

<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title><?php echo $meta_title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>" />    
    <meta name="KEYWORDS" content="Proprietary Building Footprints, Repository, Location Data, Intelligence Platform, Accurate Location Analytics, Consumer Insights, SAAS Products, Predictive Location Analytics, Real World Audience Behavior, Attribution, ROI Measurement" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta property="og:image" content="<?php IMAGE('blog/near-platform-introduces-placematrix-enhances-spatial-precision.jpg'); ?>" />
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS('filter.css');?>" />
    <link rel="stylesheet" href="<?php CSS('social-buttons.css');?>">	
    <style>
	.placematrix{background: url(../images/blog/placematrix-play.png) no-repeat; background-size: 100%; -webkit-transition:all 0.2s ease; -moz-transition: all 0.2s ease;  -ms-transition: all 0.2s ease; -o-transition: all 0.2s ease-in-out;    transition: all 0.2s ease-in-out;}
.video-popup:hover .placematrix{background: url(../images/blog/placematrix-play-hover.png) no-repeat; background-size: 100%; -webkit-transition:all 0.2s ease; -moz-transition: all 0.2s ease;  -ms-transition: all 0.2s ease; -o-transition: all 0.2s ease;    transition: all 0.2s ease;}
	</style>
	</head>
	<body class="state1 background-100-e">
		<!-- BEGIN: Top menu -->
		<?php include('../includes/_header.php'); ?>
		<!-- END: Top menu -->
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<!--li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li-->
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<!--li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li-->
			</ul>
		</div>
		<!-- BEGIN: Page content -->
	
            
            <div class="view sub-banner">
        <div class="overlay-vdo2" ></div>
				<img alt class="bg" src="<?php IMAGE('bg-blog.png');?>" /><img alt class="bg" src="<?php IMAGE('bg-blog.png');?>" />
				<div class="content one-third-size colors-e background-60" style="z-index:2">
					<div class="container">
						<h2><?php echo $title; ?></h2>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
		<section>
			<div class="view">
				<div class="content  colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row"><?php include('../includes/_blog-filter.php'); ?>
							<div class="col-md-9 col-md-pull-9">
								<div class="row post">
									<div class="col-md-3 post-meta sticky1">
									<div class="post-date">
										<div class="post-day">08</div>
										<div class="post-month">Nov 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -245px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Madhusudan Therani</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('blog/near-platform-introduces-placematrix-enhances-spatial-precision.jpg'); ?>" alt="">
											</div>
											<h4 style="text-align:left;"><?php echo $title; ?></h4>
											<p>We are pleased to publicly announce the availability of PlaceMatrix - our proprietary repository of building footprints in the Near Platform - currently being used in Allspark, our audience curation product. At Near, we believe that places are not dots in the real world, and hence we have mapped them as precise building shapes in our platform, as they are in the real world. We have been working on building a rich first-party dataset of plan views of a variety of branded commercial establishments in the US, Europe and Asia-Pacific since 2015.</p>

<p>PlaceMatrix is a collection of top polygon views of commercial buildings. Such polygons can highlight the location of store in a strip-mall or provide outline plans of retail establishments in major malls. PlaceMatrix currently contains millions of these polygons for establishments in markets mentioned above. We have also extended these outline views to showcase multiple levels within buildings.</p>

 <a href="https://youtu.be/WYOj4oIctjQ" class="html5lightbox video-popup" id="placematrix-video" style="position:relative;" ><img  src="<?php IMAGE('blog/bb2.png'); ?>" alt="PlaceMatrix" class="placematrix" style="width:100%" /> </a>

<p>PlaceMatrix facilitates a number of activities- </p>
<ul class="listing">
<li>Provides better audience estimates</li>
<li>Allows more detailed locational analysis for audience curation</li>
<li>Enhances accuracy of measuring offline attribution and tracking visit histories</li>
<li>Boosts our ongoing effort in fusing different geo-indexed data streams from apps, wifi-hotspots and other sources by providing more detailed modeling for combining these disparate data sets.</li>
</ul>
<p>Overall, PlaceMatrix complements our analytics offerings by allowing us to combine outdoor consumer journeys with their “indoor activity”, and clearly differentiating consumers ‘around’ the stores from the ones ‘inside’ the stores. In the near future, we believe this will allow us to better exploit in-door data assets to understand the consumer journey with greater fidelity.</p>
<p>Our current customers can also utilize PlaceMatrix by overlaying their in-house data with the heterogeneous data in the Near platform for granular consumer insights.</p>
<p>Watch this space for future updates.</p>


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
       <script type="text/javascript" src="<?php JS ('lightbox/html5lightbox.js'); ?>"></script>	
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
 <script>
var url = window.location.href;
if (url.search("#placematrix-video") >= 0) {
$(document).ready(function(){
$('#placematrix-video').trigger('click');
    });
}
		</script>
     </body>
</html>