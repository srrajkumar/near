<?php include("../includes/_config.php"); 
 $meta_title = "Software Engineer | Near";
$meta_desc = "Define and Plan QA processes and test plan for Nears’ platform and products";
$title ="Software Engineer";
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
h2{color:#ff1d25;}
.post .post-body{padding-bottom:30px;}
iframe {width: 100%; border:0;  height:450px; margin-top:30px;}
	@media (min-width:320px) and (max-width:768px){ .full-size{padding-top:60px !important;} img.bann{width:100%;}}
	@media (min-width:320px) and (max-width:991px){
	.career-form{margin-top:-15px;}}

	</style>
 </head>
	<body class="career-sub">

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

		<section class="sub-bg careers" style=" background: rgba(255,255,255,0.97) url(<?php IMAGE('open-positions-bg.png');?>); background-repeat: repeat; z-index:10;">

			<div class="container content  colors-e background-90-e" style="overflow: hidden; position: relative;"><div class="space" style="display: block; margin: 80px;"></div>
							<div class="col-md-12 row" style="margin-top: 15px;">
									<div class="col-md-9">
										<div class="post-body background-75-e">
         
         <h2>Tasks include</h2>
         <ul class="listing">
			<li>Design and develop our  platform, product APIs that work on our data pipelines</li>
            <li>Build all support infrastructure to scale our data delivery pipelines - endpoints, security, logging, messaging</li>
            <li>Middle-ware and product development activity - UI support, data querying from our various stores, real-time visualization</li>
            <li>Activity spans both front-end and back-end roles for our data and product systems</li> 
            <li>Mobile SDK, App development and analytics integration</li>
         </ul>
		  
         <h2>Skills</h2>
         <ul class="listing">
		 	<li>Expertise in one or more of the following - Java, PHP, Ruby on Rails, Javascript, Python</li>
            <li>Basic CS/Engg training, with 2+ years of experience in building and deploying products/services</li>
            <li>Familiarity with REST API development standards, protocols (HTTP, websockets and more)</li>
            <li>Expertise in scaling, tuning API-services, querying DBs</li> 
            <li>Familiarity with text processing, big data is a plus</li>
         </ul>
         
		 <h2>Open Positions for All Levels</h2>	
			<ul class="listing">
                <li>Principal Software Engineer</li>
                <li>Senior Software Engineer</li>
                <li>Associate Software Engineer</li>
                <li>Interns</li> 
            </ul>
											
								<div>
                                    
                                        <h2>Apply to join us</h2>
							
                                <iframe src="<?php echo SITE_URL; ?>form/career-form.php?vacancy=Software Engineer" class="career-form" style="overflow-y: hidden !important;" scrolling="no" seamless></iframe>
								
							</div>
                                        
                                       
                                        
									</div>
									</div>
                                    <div class="col-md-3  career-date">
										
										
										<div class="current">
                                            <img src="<?php IMAGE('career-icon1.png'); ?>" alt="" style=" float:left;"/>
                                            <h4>Current <br><span>Openings </span></h4>
                                            <ul>
                                                <li><a href="<?php echo SITE_URL; ?>careers/data-engineer.php">Data Engineer</a></li>
                                                <li><a href="<?php echo SITE_URL; ?>careers/data-scientist.php">Data Scientist</a></li>
                                              
                                                <li class="active"><a href="<?php echo SITE_URL; ?>careers/software-engineer.php">Software Engineer (All Levels)</a></li>
                                           
                                              
                                            </ul>  
                                           <a href="<?php echo SITE_URL; ?>engineering/"> <img src="<?php IMAGE('icon.png'); ?>" alt="" style="float:left;  margin-top: 20px;" />				                                      	<h4 style="padding-left:56px; padding-top:20px;">Check out our<br><span>Tech Blog</span></h4></a>
                                           <hr style=" border-top: 1px dashed #454545;" />
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
		

  </body>
</html>
