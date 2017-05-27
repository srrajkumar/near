<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = "Fabric - Just the tool for continuous deployment";
$meta_desc = "A few months back, we decided that we had hit the limits of spending time just to deploy our RTB and DMP offerings to scale. We needed a radical solution to get it right.";
$title = "Fabric - Just the tool for continuous deployment";
?>
<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $meta_title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>" /> 
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <meta property="og:image" content="" />
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS('filter.css'); ?>" />
    <link rel="stylesheet" href="<?php CSS('social-buttons.css'); ?>">	
    <link rel="stylesheet" href="<?php CSS('prism/prism.css'); ?>">
   	<link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/a611d488-9568-4032-baf2-d8b5d04fab15.css"/>
    <style>
		#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}
		.state2 #top-nav li, .state2 #top-nav li > a, .state2 #top-nav .navbar-brand, .state2 #top-nav .navbar-header, .state2 #top-nav .dropdown-menu > li > a{color:#000;}
		.near-logo{fill:#fff !important;}
		.state2 .near-logo{fill:#5C5C5C !important;}
		.full-size{padding-bottom:0px !important;}
		.view > .content { padding-top: 150px; padding-bottom: 60px; }
		.view{top: -48px; margin-bottom:0;}
		@media (min-width:320px) and (max-width:767px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#000 !important;} .full-size{padding-top:60px !important;} img.bann{width:100%;}}
		@media (min-width:320px) and (max-width:991px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}}
	</style>
	
	</head>
	<body class="state1 background-100-e">
		
		<!--div class="page-border bottom colors-e background-solid"><a href="#top" class=" one-third-size">To <span class="highlight">Top</span></a></div-->
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
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
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
		<!--<div class="youtube-bg" data-video="2zLQI4Dfi_w" data-mute="yes" data-volume="50" data-alternative="images/placeholders/1920x1200-0.jpg"></div>-->
	
			<div class="view sub-banner">
				<img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" /><img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" />
				<div class="content background-60" style="z-index:2">
					<div class="container tech-blog-content">
						<p class="date">OCTOBER 20, 2015</p>
                    <h1 class="col-md-6" style="float:none; margin:0 auto"><?php echo $title; ?></h1>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
			 <div class="view" style=" background-color:#f2f2f2">
                <div class="container">
                    <ul class="col-md-10 breadcrumb" style="float:none; margin:10px auto;">
                        <li><a href="<?php echo SITE_URL; ?>engineering/">Engineering</a></li>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
			<div class="view">
				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									
									<div class="col-md-10" style="float:none; margin:0 auto;">
									<div class="col-md-8">
                                    <div class="tech-author">
									  <div style="float:right; margin-top:32px;">
                                                <a href="<?php echo SITE_URL; ?>engineering/intro.php" class="tech-nav-prev" title="Old"></a>
                                                <a href="<?php echo SITE_URL; ?>engineering/apple-blocking-ads-what-does-it-mean-for-advertisers.php" class="tech-nav-next" title="New"></a>
                                            </div>
									<img src="<?php IMAGE('bb.png'); ?>" alt style="width:100px; height:100px; background:url(<?php IMAGE('near-team.png'); ?>) 0 609px/ 100% auto; border-radius:50%; float:left; margin-right: 10px;" />
									<h2 style="padding-top: 40px;"><span>by</span> Saurabh Minni</h2>
                                    <p class="tech-designation" >Technical Architect</p>
									
                                    </div>
										<div class="post-body background-75-e">
                                        <p class="tech-note">One of the big problems with scaling complex and tightly integrated system clusters is deploying changes. As number of tools grow, changes and deploying for scale get all the more complex. Logging into each of the different system is rendered impossible as you grow from a small unknown startup to one building large scale systems.</p>
										<p>A few months back, we decided that we had hit the limits of spending time just to deploy our RTB and DMP offerings to scale. We needed a radical solution to get it right. </p>
                                        <p>Let me get to our problem statement. We need to deploy a setup which involves a concoction of various technologies like HAProxy, Redis, Nginx, PHP-FPM, ZMQ, Kafka, ElasticSeach, Logstash etc. This is just tools which must be configured on deployment of a new machine in our cluster. Besides these you have all the code in PHP which needs to configure location of the services which are different based on regions. I believe this is a fairly typical system which most companies which pan geo setups will be working on.</p>
                                        
                                        	<p>We looked at various options.</p>
                                            <ul>
                                            <li><a href="http://puppetlabs.com/" target="_blank">Puppet</a></li>
                                            <li><a href="https://www.chef.io/chef/" target="_blank">Chef</a></li>
                                            <li><a href="http://www.fabfile.org/" target="_blank">Fabric</a></li>
                                            </ul>
                                            
                                            <p>The first two work on the pull model and the Fabric is the one which uses the push model. </p>
                                            <p>Pull models are good for certain use cases, but becomes a problem because you have to login to each machine and set things up there. With push model, once the machine is ready for ssh, its pretty straight forward to setup a cluster. </p>
                                            <p>Fabric for its part is highly configurable. Code for Fabric is written in Python. Or you can also say that Fabric just another Python library. This really give you great control over the config files that need to be written in each node of your cluster.</p>
                                            <p>Looking at all this, we decided that the base system setup, that involves setting up users and various system level config would be done via puppet as its very effective at that. For setting up various machines in the cluster, we decided to go with fabric. Its customisation and extensibility is what made us use this. With <a href="https://github.com/sebastien/cuisine" target="_blank">Cuisine</a>, fabric was a breeze. Right from setting up nginx, php-fpm to redis to code, we made sure fabric did it just right for us. </p>
                                            <p>The only issue we faced was with deploying Kafka. Fabric cannot run programs with ‘&’ as mentioned in their <a href="http://www.fabfile.org/faq.html#why-can-t-i-run-programs-in-the-background-with-it-makes-fabric-hang" target="_blank">FAQ</a>. The work around was simple with <a href="http://dtach.sourceforge.net/" target="_blank">dtach</a>. </p>
											<p>I love the way Fabric works and it has good future in deployments. </p>
                                            
                                            <p style="margin-bottom:5px;">1. Some important fabric script snippets that we use are</p>
<pre class="line-numbers language-python"><code>def setup_packages():
puts(green(‘Setup EPEL & Remi’))
sudo(“rpm -Uvh –replacepkgs http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm”)
sudo(“rpm -Uvh –replacepkgs http://rpms.famillecollet.com/enterprise/remi-release-6.rpm”)</code></pre>
											
                                            <p style="margin-bottom:5px;">2. To Setup Nginx </p>
<pre class="line-numbers language-python"><code>def install_nginx():
sudo(“rpm -Uvh http://nginx.org/packages/rhel/6/x86_64/RPMS/nginx-1.6.2-1.el6.ngx.x86_64.rpm”)
if cuisine.file_exists(“/etc/nginx/conf.d/default.conf”):
sudo(“mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf.default”)
nginx_conf = “’<span style="color:#E01818">PUT in your Nginx Conf here</span>”’
php_params = “’<span style="color:#E01818">Put in you PHP Param settings here</span>”’
with cuisine.mode_sudo():  
cuisine.file_write(“/etc/nginx/php_params”,php_params)
cuisine.file_write(“/etc/nginx/conf.d/dmp.conf”,nginx_conf)</code></pre>

                                            <p style="margin-bottom:5px;">3. To install PHP FPM with PECL and XHProf</p>
<pre class="line-numbers language-python"><code>def install_php():
sudo(“yum -y –enablerepo=remi install php php-devel php-fpm php-pear php-pecl-xhprof”)</code></pre>
                                            
                                            
                                            

			<div class="container col-lg-12"  style="padding:0;">
             <div class="social-share" style="padding-bottom:14px;">
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
                                        <?php include('../includes/_tech-filter.php'); ?>
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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));		
		</script>
		<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
        <script src="<?php JS('prism/prism.js'); ?>" type="text/javascript"></script>
		<script src="https://use.typekit.net/vel7wke.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

  </body>
</html>