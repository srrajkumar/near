<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
 $meta_title = 'Meet the Team | Near';
$meta_desc = "In this section, you will get to know the members of Team Near who play a key role in driving Near’s mission, values and day-to-day operations. Reach out to us to know more about the interesting things we do at Near. ";
$title ='Know Your Colleague – Ashwin Nair';
$meta_image="kyc/ashwin.png";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<style>
	.space {padding: 30px;}
	h2{font-weight:700;}
	</style>

   <link rel="stylesheet" href="<?php CSS_PATH('social-buttons.css');?>">	
 </head>
		<body>
	<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('kyc-banner.php'); ?>
	<div class="view newsroom" style="margin: 50px 0 100px 0;">
			<div class="view">
				<div class="content kyc-main" style="padding-top:0px;" >
					<div class="container">
						<div class="row">	 
							<?php include('../includes/_kyc-filter.php'); ?>		
							<div class="col-md-9 ">
								<div class="row post">
								
									<div class="col-md-11">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('kyc/ashwin-banner-image.png'); ?>" alt="Ashwin Nair">
											</div>
											<h4 style="text-align:left;"><?php echo $title; ?></h4>
											<p class="date_kyc">March 27, 2017 </p>
											<div class=" news" style="padding-right: 0; margin-bottom: 15px; width: calc(100% + 25px); ">
												<div class="social-share" style="border-top: 0; padding-top: 0px;">
													<div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

														<!-- https://developers.facebook.com/docs/plugins/share-button/ -->
														<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
														<span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:9px;"></i><i class="share">Share</i></span>
														
														</a>

														<!-- https://dev.twitter.com/docs/intents -->
														<a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" data-dnt="true" data-counturl="<?php my_url(); ?>"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share twit">Tweet</i></span>
														
														</a>

													</div>

												</div>

											</div>
											
											<p>In Near’s Know Your Colleague series, you will get to know the members of Team Near who play a key role in driving Near’s mission, values and day-to-day operations. This is a monthly series, and we shall have one employee cover every month. This month we asked a few questions to Ashwin Nair, our Senior Engineer of Data Integrations who is based out of our Bangalore office and has been with Near for over two years. Here’s what he had to say: </p>
											<p style="text-align: center"><br>

												<img src="<?php IMAGE('kyc/ashwin.png'); ?>" alt="Ashwin Nair">
												<br><br>

											</p>
<h4 style="text-align:left; font-size:16px;">Ashwin, tell us what made you chose Near and how has your journey been so far?</h4>

<p>Joined as an intern in July 2014, I was fortunate to get hands on with some very interesting projects with direct business impact working with some really smart engineering minds.</p>
<p>This being my first job, the experience so far has been great. Thirty months into the job, it’s been a very rewarding experience being mentored by some of the finest in the industry, while working on developing path breaking solutions.</p>

<h4 style="text-align:left; font-size:16px;">What are your key responsibilities in your current role? </h4>
<p>I drive the engineering part of Near Places - Near’s Geo data repository of millions of real world locations and all services built on top of this data.</p>
<p>As part of the Platforms Engineering team, I also support the fault free upkeep of our RTB stack and support variety of incoming and outgoing data integrations with external partners.</p>



<h4 style="text-align:left; font-size:16px;">Tell us one interesting thing that you love about your work?</h4>
<p>It’s been a never ending supply of fun things to learn.</p>


<h4 style="text-align:left; font-size:16px;">What do you like to do outside of work?</h4>
<p>I spend my free time watching TV Shows and documentaries. If not, then I am mostly hooked up to “THE XBOX”.</p>
<p>Also, recently have picked up a habit of FaceTime-ing with my four month old nephew daily.</p>



<h4 style="text-align:left; font-size:16px;">A gadget you would love to own?</h4>
<p>The “Nintendo Switch” without a doubt.</p>


<h4 style="text-align:left; font-size:16px;">Lastly, any interesting experience or thing about you that you’d like to share that most of us don’t know?</h4>
<p>I am a movie buff. Have watched 88 of IMDB’s Top 100 greatest movies of all time.</p>





										</div>
									</div>
									<div class="col-md-1"></div>
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

window.onload = function() {
  document.getElementById('kyc4').className = 'active';

};


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
		$('.sticky1').addClass("scrolled");
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
		$('.sticky1').removeClass("scrolled");
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