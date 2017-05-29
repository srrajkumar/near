<?php include("../includes/_config.php"); 
$meta_title="Careers | Open Positions | Near";
$meta_desc="Near is the largest location intelligence platform providing real-time information on places, people and products. The Near platform powers its flagship product to leverage historical location and context for data driven marketing. Check out the open positions here and start your career today!";
$meta_keywords="";
$title="Careers";
?>


<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
    <?php include('../includes/_head.php'); ?>
    <link href="<?php CSS_PATH ('careers.css'); ?>" media="screen" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="<?php CSS_PATH('popup.css'); ?>" />
 
    <style>
    .space {padding: 30px;}
    .header-team h2{color: #e21e27; font-weight:300;border-bottom:1px solid #f5f5f5;}
   body.careers-main{background-color:#f5f5f5;}
   
        .tech-image{ height:484px;}
        
        @media (min-width:320px) and (max-width:540px){ .tech-image{height:300px; background-position:0 -180px;}.careers-page .feature-block{height:130px; } .careers-page .feature-block img{height:130px;} }
        @media (min-width:320px) and (max-width:360px){.careers-page .feature-block_content{top:17%}.tech-image{  height: 300px;  background-position: 0 -75px;}}
        @media (min-width:361px) and (max-width:480px){.careers-page .feature-block_content{top:17%}.tech-image{    background-position: 0 -135px;}.careers-page .feature-block{height:115px; } .careers-page .feature-block img{height:115px;} .careers-page h1{font-size:18px;}}      
        @media(min-width:541px) and (max-width:639px){.tech-image{height:360px; background-position:0 -180px;}}
   
.next:before, .next:after{ display:none;}
.overlay-vdo{background:rgba(0,0,0,0.75);}
.field input { background:transparent; }
.field input::-webkit-input-placeholder {color: #FFFFFF !important;} 
.field input:-moz-placeholder {color: #FFFFFF !important;} 
.field input::-moz-placeholder { color: #FFFFFF !important; } 
.field input:-ms-input-placeholder { color: #FFFFFF !important; }
.ans-form input:focus{ outline:none !important;}
.ans-form {background:#db1a21;}
.ans-form .button-container{margin-top:0px;}
.ans-form .button{margin-top: 25px; float:left;  background: transparent; border-color: #fc4600 !important; margin-right: 0px;}
[placeholder]:focus::-webkit-input-placeholder {transition: opacity 0.2s 0.2s ease; opacity: 0;}        
@media (max-width: 767px){.slick-initialized {margin-top: 0px !important;}}
.ex3.image {
    position: relative;
    display: block;
    width: auto;
  
    text-align: center;
}

.image a {
    display:block; 
    position: relative;
}

    /* Gets rid of the extra white space that follows an inline element*/
.image img {
    vertical-align: bottom;
    width: 100%;
}
    </style>

</head>
    <body class="careers-main">
      
    <div class="preloader"></div>
    <?php include('../includes/_navigation.php'); ?>
        <div class="col-lg-12  k carousel-custom the-data" style="background-color: #fafafa; " data-particles='{"color":"#a2a2a2"}'> 
<div class="banner-space container allspark-space" style="    height: 100px;"></div>
  <div class="container aboutus banner">
   <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <h1><span><?php echo $title; ?></span> </h1>
        <!--<hr />
        <h2>Content</h2>
        <p>Content</p>-->
      </div>
   </div>
  </div>
  <div class="banner-space container allspark-space"></div>
  <div class="mouse"></div>

</div>
<div class="page ">
        <div class="grid-control">

<div class="col-4">
    <div class="feature-block career-background"><div class="feature-block_content">
                <div class="career-work">
                    <div class='feature-block_category sub-title'> Good Work Equals  Work Vacation </div>
                    <hr style="border-color:#fff;">
                    <figcaption class="feature-block_title">Win the "Employee of the Quarter" &amp; choose to work from any of our office locations for a week!</figcaption>
                   <!-- <div class="button-container">
                        <a href="#" class="button" style="display:inline-block;">Check what winners did</a>
                    </div>-->
                </div>
            </div>
            <!--img src="<?#php IMAGE('office.png'); ?>" class="feature-block_image " data-osrc="<?#php IMAGE('office.png'); ?>"/-->
              
               <div id="background_cycler" class="feature-block_image " >
                   
                    <img class="active"  src="<?php IMAGE('careers/vacation.png'); ?>"  alt="">
                    <img  src="<?php IMAGE('careers/fun-life-near-2.png'); ?>"  alt="">
                 
                </div>	
           
    </div>
</div>
<div class="col-4">
    <div class="cta-block cta-block--bg-light career-best"  >	
        <div class="cta-block_content current-open" style="text-align:center">
            <div style="width:220px; text-align:center; display:inline-block">
                <h3 class='cta-block_title' style="text-align:center">We look for the<br> best fit</h3>	
                <hr style="border-color:#fff;">
                <div class="button-container">
                    <a href="#career-current" class="button" style="padding: 12px 12px;">Current Openings</a>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="feature-block career-background">
     <div id="background_cycler2" class="feature-block_image" >
                     <img class="active feature-block_image" src="<?php IMAGE('careers/snacks.png'); ?>" data-osrc="<?php IMAGE('careers/snacks.png'); ?>"  alt="">
                    <img  src="<?php IMAGE('careers/gourmet-breakfast.png'); ?>" class="feature-block_image"  data-osrc="<?php IMAGE('careers/gourmet-breakfast.png'); ?>" alt="">
                 <a class="bla-2" href="https://www.youtube.com/watch?v=NX5TvifOvv4"  style="z-index:4;"><img  src="<?php IMAGE('careers/nearvana.png'); ?>" class="feature-block_image"  data-osrc="<?php IMAGE('careers/nearvana.png'); ?>" alt=""></a>
                </div>	
    <div class="feature-block_content">
                <div class="career-stock">
                    <div class='feature-block_category sub-title'>Gourmet breakfast, lunches  &amp; snacks</div>
                    <hr style="border-color:#fff;">
                    
                <figcaption class="feature-block_title">Enjoy a fully stocked kitchen and live counters for food. Get a glimpse of Nearvana.</figcaption>
                </div>
            </div>
          
          
    </div>
</div>



<div class="col-5">
    <div class="cta-block cta-block--bg-image " data-position="top">
    	                 <img class="feature-block_image" src="<?php IMAGE('careers/flexi-timings.png'); ?>" data-osrc="<?php IMAGE('careers/flexi-timings.png'); ?>" alt="">
        <div class="feature-block_content">
        	<div class="career-timings">
                <div class='feature-block_category sub-title'>Flexi timings; as long as you meet your goals</div>
                <hr style="border-color:#fff;">
                 <figcaption class="feature-block_title">Set your own goals, and timelines.</figcaption>
            </div>
        </div>
    </div>
</div>
<div class="col-7 m-whole">	
	<div class="cta-block cta-block--bg-image career-background-1" data-position="top">
     <div id="background_cycler3" class="cta-block_image" >
      
           
    		
    		<img class="active" src="<?php IMAGE('careers/out-of-work-party.png'); ?>" data-osrc="<?php IMAGE('careers/out-of-work-party.png'); ?>" alt="">
            <img  src="<?php IMAGE('careers/out-of-work-party-2.jpg'); ?>" data-osrc="<?php IMAGE('careers/out-of-work-party-2.jpg'); ?>" alt="">
            <img src="<?php IMAGE('careers/out-of-work-party-3.png'); ?>" data-osrc="<?php IMAGE('careers/out-of-work-party-3.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/party.png'); ?>" data-osrc="<?php IMAGE('careers/party.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/party-1.png'); ?>" data-osrc="<?php IMAGE('careers/party-1.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/party-2.png'); ?>" data-osrc="<?php IMAGE('careers/party-2.png'); ?>" alt="">
         </div>		
			
        <div class="feature-block_content">
        	<div class="career-party">
                <h3 class='cta-block_title'>The out of work party</h3>	
                <hr style="border-color:#fff;">
                <figcaption class="feature-block_title">Take your team out, anytime. Team outings, fun activities and much more.</figcaption>
            </div>
		</div>
	</div>
</div>
<div class="col-6 ">	
	<div class="cta-block cta-block--bg-image career-background-1" data-position="top">
		<img src="<?php IMAGE('careers/anil-and-shobhit.jpg'); ?>" class="cta-block_image " data-osrc="<?php IMAGE('careers/anil-and-shobhit.jpg'); ?>"/>				     <div id="background_cycler4" class="cta-block_image" >
                  <img src="<?php IMAGE('careers/anil-and-shobhit.jpg'); ?>" class="active feature-block_image" data-osrc="<?php IMAGE('careers/anil-and-shobhit.jpg'); ?>"/>		
                    <img  src="<?php IMAGE('careers/executive-team.png'); ?>" class="feature-block_image"  data-osrc="<?php IMAGE('careers/executive-team.png'); ?>" alt="">
                    <img  src="<?php IMAGE('careers/anil-presentation.png'); ?>" class="feature-block_image"  data-osrc="<?php IMAGE('careers/anil-presentation.png'); ?>" alt="">
                   
                </div>	
        <div class="feature-block_content">
        	<div class="career-amazing">
                <h3 class='cta-block_title'>Amazing Leadership!</h3>	
                <hr style="border-color:#fff;">
                <figcaption class="feature-block_title">A leadership that has successfully pivoted the company to become the most valuable startup in its category, globally. Instills a well balanced work+life <a href="<?php echo SITE_URL; ?>culture.php" style="color:#ec222b; font-weight:normal;  text-shadow:0px 0px 0px #ec222b;">culture.</a></figcaption>
            </div>
		</div>
	</div>
</div>

<div class="col-6">
    <div class="cta-block cta-block--bg-image career-background-1" data-position="top">
    	 <div id="background_cycler2" class="feature-block_image" >
                    <img class="active" src="<?php IMAGE('careers/health.png'); ?>" class="feature-block_image" data-osrc="<?php IMAGE('careers/health.png'); ?>" alt="">
                    <img  src="<?php IMAGE('careers/health-1.png'); ?>" class="feature-block_image"  data-osrc="<?php IMAGE('careers/health-1.png'); ?>" alt="">
                   
                </div>	
                
        <div class="feature-block_content">
        	<div class="career-health">
                <div class='feature-block_category sub-title'>Healthy You is a Happy You </div>
                <hr style="border-color:#fff;">
                 <figcaption class="feature-block_title">We have corporate tie-ups with leading fitness centres and also provide 100% coverage of your health insurance premiums. </figcaption>
            </div>
        </div>
    </div>
</div>




<div class="col-7 col-height">
	<div class="cta-block cta-block--bg-image career-background-1" data-position="top">
     <div id="background_cycler5" class="cta-block_image" >
      
           
    		<img class="active" src="<?php IMAGE('careers/birthday-celebrations-1.png'); ?>" data-osrc="<?php IMAGE('careers/birthday-celebrations-1.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/birthday-celebrations-2.png'); ?>" data-osrc="<?php IMAGE('careers/birthday-celebrations-2.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/fun-life-near-4.png'); ?>" data-osrc="<?php IMAGE('careers/fun-life-near-4.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/fun-life-near-1.png'); ?>" data-osrc="<?php IMAGE('careers/fun-life-near-1.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/fun-life-near-3.png'); ?>" data-osrc="<?php IMAGE('careers/fun-life-near-3.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/foosball.png'); ?>" data-osrc="<?php IMAGE('careers/foosball.png'); ?>" alt="">
            <img src="<?php IMAGE('careers/fun-friday.png'); ?>" data-osrc="<?php IMAGE('careers/fun-friday.png'); ?>" alt="">
         </div>		
    	
        <div class="feature-block_content">
        	<div class="career-fun">
                <div class='feature-block_category sub-title'>Fun Fridays - Every Week</div>
                <hr style="border-color:#fff;">
                <figcaption class="feature-block_title">Be part of our weekly fun activities! From bowling, watching movies, birthday celebrations to outstation trips.</figcaption>
            </div>
        </div>
    </div>
</div>
<div class="col-5 col-height">	
	<div class="cta-block cta-block--bg-image " data-position="top" >
		<img src="<?php IMAGE('careers/award.png'); ?>" class="cta-block_image " data-osrc="<?php IMAGE('careers/award.png'); ?>"/>		
        <div class="feature-block_content">
        	<div class="career-employee">
                <h3 class='cta-block_title'>Employee Stocks,<br> Bonus &amp; Referrals</h3>	
                <hr style="border-color:#fff;">
                <figcaption class="feature-block_title">Make more for doing well every quarter. Also enjoy financial rewards for referring superstars who would help us build.</figcaption>
            </div>
		</div>
	</div>
</div>



<div id="career-scroll" class="col-12 careers-page " style="background:#fff;">
<div class="feature-block " data-position="top">
	
		<img src="<?php IMAGE('careers/great-workplace.png'); ?>" class="feature-block_image " data-osrc="<?php IMAGE('careers/great-workplace.png'); ?>"/>	
        <div class="feature-block_content">
				<h1>“Great workplace is <br>about great colleagues”</h1>		
		</div>

</div>
</div>

<div id="career-current" class="col-8 " style="background:#FFFFFF;">
    <div class="content-block " data-position="top" style="padding:20px;margin-bottom: -15px;padding-bottom: 0;">
        <div class="content-block_width-control">
            <h3>Current Openings </h3> 
            <section class="block">
                <article id="marketing" class="accordion">
                    <div class="accordion_item"><input class="accordion_input" type="checkbox" checked />
                        <h4 class="accordion_label">Software Engineer <br class="career-add"><span class="career-location">Bangalore</span></h4>
                        <div class="accordion_content">
                            <div class="text-block">
                                <p>Tasks include</p>
                                <ul>
                                   <li> Design and develop our platform, product APIs that work on our data pipelines</li>
                                    <li>Build all support infrastructure to scale our data delivery pipelines - endpoints, security, logging, messaging</li>
                                    <li>Middle-ware and product development activity - UI support, data querying from our various stores, real-time visualization</li>
                                    <li>Activity spans both front-end and back-end roles for our data and product systems</li>
                                    <li>Mobile SDK, App development and analytics integration</li>
                                </ul>
                                <a href="<?php echo SITE_URL; ?>careers/software-engineer.php" class="careers-link"> Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion_item"><input class="accordion_input" type="checkbox" />
                        <h4 class="accordion_label">Data Scientist <br class="career-add"><span class="career-location">Bangalore / San Francisco</span></h4>
                        <div class="accordion_content">
                            <div class="text-block">
                                <p>Tasks include</p>
                                <ul>
                                    <li>Developing “core” data science models that power the Near Location Intelligence Platform and its associated products</li>
                                    <li>Data types include structured and unstructured data in multiple formats (text,audio,video) spanning multiple domains including user profile data, geo-spatial data, network data and retail data</li>
                                    <li>Model development including data cleanup, model building and testing</li>
                                    <li>Working closely with the Engineering team to “operationalize” and deploy the models</li>
                                    <li>Mentoring Near’s data science teams globally</li>
                                </ul>
                                <a href="<?php echo SITE_URL; ?>careers/data-scientist.php" class="careers-link"> Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion_item"><input class="accordion_input" type="checkbox" />
                        <h4 class="accordion_label">Data Engineer <br class="career-add"><span class="career-location">Bangalore / San Francisco</span></h4>
                        <div class="accordion_content">
                            <div class="text-block">
                            <p>Tasks include</p>
                            <ul>
                                <li>Designing and implementing our data processing pipelines for different kinds of data sources, formats and content for the Near Platform</li>
                                <li>Developing techniques to analyze and enhance both structured and unstructured data</li>
                                <li>Develop/operationalize data science models in application contexts</li>
                                <li>Participate in product design and development activities supporting Near’s suite of location intelligence products</li>
                            </ul>
                            <a href="<?php echo SITE_URL; ?>careers/data-engineer.php" class="careers-link"> Learn More</a>
                            </div>
                        </div>
                    </div>
				</article>  
   			</section>  
		</div>
	</div>
			</div>
			<div class="col-4 tech-video">
			<div class ="image ex3">
    <a class="bla-2" id="tech-video" href="https://www.youtube.com/watch?v=E63AtUpwyp4">
        <img src="<?php IMAGE('bb.png'); ?>" style="background-image: url(../assets/images/careers/tech-video-screen.png); background-repeat: no-repeat; background-size:100%;" class="tech-image" alt="video">
        <div class="tag tag--play">
           <div class="fa fa-play icon-play"></div>
	</div>
    </a>
</div>
			</div>

	

</div><!-- End Current Openings -->
</div><!-- End. Grid Control -->     
</div><!-- End . Page -->

</body>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
		<?php include('../includes/_java_scripts.php'); ?>
		
<script type="text/javascript" src="<?php JS ('lightbox/html5lightbox.js'); ?>"></script>	
<script type="text/javascript" src="<?php JS ('popup.jquery.js'); ?>"></script>
	<script type="text/javascript">
		jQuery(function(){
			
			jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
		});
	</script>
<script>

$(function(){
  $('ul.tabs li:first').addClass('active');
  $('.block article').hide();
  $('.block article:first').show();
  $('ul.tabs li').on('click',function(){
    $('ul.tabs li').removeClass('active');
    $(this).addClass('active')
    $('.block article').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).show();
    return false;
  });
})
//Work Vacation
$('#background_cycler').hide();
function cycleImages(){
      var $active = $('#background_cycler .active');
      var $next = ($('#background_cycler .active').next().length > 0) ? $('#background_cycler .active').next() : $('#background_cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2000,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });

    }

    $(window).load(function(){
		$('#background_cycler').fadeIn(2000);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages()', 4000);
    })
// Offices
$('#background_cycler1').hide();
function cycleImages1(){
      var $active = $('#background_cycler1 .active');
      var $next = ($('#background_cycler1 .active').next().length > 0) ? $('#background_cycler1 .active').next() : $('#background_cycler1 img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 $(window).load(function(){
		$('#background_cycler1').fadeIn(2500);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages1()', 5000);
    })
	
   //Healthy You
	$('#background_cycler2').hide();
function cycleImages2(){
      var $active = $('#background_cycler2 .active');
      var $next = ($('#background_cycler2 .active').next().length > 0) ? $('#background_cycler2 .active').next() : $('#background_cycler2 img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2000,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 $(window).load(function(){
		$('#background_cycler2').fadeIn(2000);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages2()', 4000);
    })
   //Awards
   	$('#background_cycler3').hide();
function cycleImages3(){
      var $active = $('#background_cycler3 .active');
      var $next = ($('#background_cycler3 .active').next().length > 0) ? $('#background_cycler3 .active').next() : $('#background_cycler3 img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 $(window).load(function(){
		$('#background_cycler3').fadeIn(2500);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages3()', 5000);
    })
   
   //Fun Friday
   	$('#background_cycler4').hide();
function cycleImages4(){
      var $active = $('#background_cycler4 .active');
      var $next = ($('#background_cycler4 .active').next().length > 0) ? $('#background_cycler4 .active').next() : $('#background_cycler4 img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2000,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 $(window).load(function(){
		$('#background_cycler4').fadeIn(2000);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages4()', 4000);
    })
   //Fun Friday
   	$('#background_cycler5').hide();
function cycleImages5(){
      var $active = $('#background_cycler5 .active');
      var $next = ($('#background_cycler5 .active').next().length > 0) ? $('#background_cycler5 .active').next() : $('#background_cycler5 img:first');
      $next.css('z-index',2);//move the next image up the pile
	  $active.fadeOut(2000,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 $(window).load(function(){
		$('#background_cycler5').fadeIn(2000);//fade the background back in once all the images are loaded
		  // run every 7s
		  setInterval('cycleImages5()', 4000);
    })
  
  var styles;
$('[data-position]').each(function(){
  $(this).attr('data-top',$(this).position().top)
})

window.onscroll = function(){
  var theOffset = window.pageYOffset + window.innerHeight - 100;
  $('[data-position]:not([data-position="center"])').each(function(){
    if (theOffset > (parseInt($(this).attr('data-top')))){
      
      styles = {opacity:1}
      styles[$(this).attr('data-position')] = 0
      $(this).css(styles)
      $(this).attr('data-position','center')

    }
  })
}



</script>
<script>
$('input.accordion_input').on('change', function() {
    $('input.accordion_input').not(this).prop('checked', false);  
});
</script>
<script>
var url = window.location.href;
if (url.search("#tech-video") >= 0) {
$(document).ready(function(){
$('#tech-video').trigger('click');
    });
}
		</script>
</html>