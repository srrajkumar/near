<?php include('../includes/_config.php');
$meta_title = "Fabric - Just the tool for continuous deployment";
$meta_desc = "A few months back, we decided that we had hit the limits of spending time just to deploy our RTB and DMP offerings to scale. We needed a radical solution to get it right.";
$title = "Fabric - Just the tool for continuous deployment";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php CSS_PATH('prism.css'); ?>">
</head>
	<body>
	<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('_banner.php'); ?>
<div class="view" style=" background-color:#eceeef">
                <div class="container">
                    <ul class="col-md-12 breadcrumb" style="float:none; margin:0px auto;">
                        <li><a href="<?php echo SITE_URL;?>engineering/">Engineering</a></li>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top:0px;">

				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									
									<div class="col-md-12 row" style="float:none; margin:0 auto;">
									<div class="col-md-9 row">
                                			<div style="margin-right: 50px;width: 95%;">
                                    <div class="tech-author"> <div style="float:right; margin-top:-4px;">
                                                <a href="<?php echo SITE_URL; ?>engineering/fabric-just-the-tool-for-continuous-deployment.php" class="tech-nav-prev" title="Old"></a>
                                                <a href="<?php echo SITE_URL; ?>engineering/location-intelligence-the-next-frontier.php" class="tech-nav-next" title="New"></a>
                                            </div>
                                            <div class="line-break-bottom"><h4><span>by</span> Near Tech Team</h4></div>
                                  	<p class="date">November 03, 2015</p>
                                    <h2 style="margin-top: 0;"><?php echo $title; ?></h2>
                                    <!--p class="tech-designation">Technical Architect</p-->

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
										</div>
                                        <?php include('../includes/_tech-filter.php'); ?>
									</div>
						</div>
					</div>
				</div>
			</div>
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
		<script src="<?php JS('prism.js'); ?>" type="text/javascript"></script>   
        

  </body>
</html>