<?php include('../includes/_config.php');
$meta_title = 'Location Analytics | Audience Insights | Rugby World Cup 2015 | Near';
$meta_desc = " Near brings you the audience trends for Rugby World Cup 2015! Contact us to see how we can help you reach your audience in real-time!";
$title ='15 Audience Insights from the Rugby World Cup, 2015';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
</head>
	<body>
	<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
				<div class="content small-top-padding colors-e background-90-e blog">
					<div class="container" style="    margin-bottom: 100px;">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">01</div>
										<div class="post-month">Oct 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; London</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<a href="<?php PDF('latest-research/rugby-worldcup-2015-near-insights.pdf'); ?>" target="_blank">	<img class="fluid-width" src="<?php IMAGE('news/rwc-2015.png'); ?>" alt="The Rugby World Cup 2015"></a>
											</div>
											<h4 style="text-align:left;"><?php echo $title; ?></h4>
											
             							 <p>Among the UK stadiums hosting the Rugby World Cup, a third of logged mobile users were registered at the Millennium Stadium, according to location intelligence platform Near.</p>
											 

<p>Research taken across eight match venues between 18 September to 27 September found that those aged 36 years and above made up over 41 per cent of all RWC2015 audience spectators. Almost nine out of ten users were male.</p>

<p>Comparing Android and iOS usage, the Google OS represented 58 per cent of devices.</p>

<p>Check out the infographic below for further data.</p>

<p class="img" style="text-align:center;"> <a href="<?php PDF('latest-research/rugby-worldcup-2015-near-insights.pdf'); ?>" target="_blank"><img src="<?php IMAGE('news/rwc-2015-infographic.png'); ?>" alt="The Rugby World Cup 2015" /></a></p>



											
											<div class="container news">
             <div class="social-share">
           		<div class="share">
				  <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//codepen.io/supah/pen/MKNwZV" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
				  <a href="https://twitter.com/home?status=Social%20Share%20by%20%40supahfunk%20http%3A//codepen.io/supah/pen/MKNwZV" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
				  <a href="https://plus.google.com/share?url=http%3A//codepen.io/supah/pen/MKNwZV" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
				  <span class="text"><em>SHARE</em></span>
				  <svg class="ico-share"><use xlink:href="#ico-share"></use></svg>
				</div>
				<div class="share">
				  <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//codepen.io/supah/pen/MKNwZV" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
				  <a href="https://twitter.com/home?status=Social%20Share%20by%20%40supahfunk%20http%3A//codepen.io/supah/pen/MKNwZV" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
				 
				  <span class="text"><em>SHARE</em></span>
				  <svg class="ico-share"><use xlink:href="#ico-share"></use></svg>
				</div>

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
				<symbol id="ico-share" x="0px" y="0px"
				 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				  <g>
				<path fill="#FFFFFF" d="M13.26,10.387c-0.781,0-1.484,0.328-1.982,0.854L5.445,8.385c0.02-0.133,0.034-0.27,0.034-0.41
						c0-0.136-0.013-0.269-0.032-0.399l5.823-2.824c0.5,0.529,1.205,0.861,1.99,0.861c1.514,0,2.74-1.227,2.74-2.74
						s-1.227-2.74-2.74-2.74c-1.513,0-2.739,1.227-2.739,2.74c0,0.136,0.013,0.269,0.032,0.399L4.73,6.097
						c-0.5-0.529-1.205-0.861-1.99-0.861C1.227,5.236,0,6.462,0,7.976c0,1.513,1.227,2.739,2.74,2.739c0.781,0,1.484-0.328,1.983-0.854
						l5.832,2.855c-0.021,0.134-0.035,0.27-0.035,0.41c0,1.514,1.227,2.739,2.74,2.739S16,14.641,16,13.127S14.773,10.387,13.26,10.387z
						"/></g>
				  </symbol></svg>
            
            </div>
            
           
            </div>
										</div>
									</div>
								</div>
							</div>
						<?php include('../includes/_news-filter.php'); ?>
						</div>
					</div>
				</div>
			</div>
		<!-- END: Page content -->
	<div style="clear:both;"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
		<?php include('../includes/_java_scripts.php'); ?>
  </body>
</html>
