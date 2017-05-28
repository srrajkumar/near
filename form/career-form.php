<?php ob_start('ob_gzhandler'); ?>
<?php include("../includes/_config.php"); include("../includes/_lib.php"); ?>
<?php $b = $_GET['vacancy'];  ?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Near career Form</title>
	<link href="<?php CSS_PATH('form/career.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="<?php CSS_PATH('linecons/style.css'); ?>" />
   
    <script type="text/javascript" src="<?php JS('form/main.js'); ?>"></script>
    <script src="<?php JS('js-webshim/minified/polyfiller.js'); ?>"></script>
    <script> 
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
	<style>
		input[type="submit"] { background:#ec222b !important; transition: all 0.5s ease 0s; box-shadow: 0 0 #DB1A21 inset;}
		iframe{width: 100%; height: 275px; border: none;}
		input[type="submit"]:hover{box-shadow: 0px -62px #DB1A21 inset; cursor:pointer;}
		input, textarea, select { background: transparent;}
			.field{width:320px;}
		@media (min-width:320px) and (max-width:480px){.field.submit {width: 290px !important;}}
	</style>
		
			<!--[if lt IE 9]>
			<link href="<?php CSS('form/ie.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
			<![endif]-->
		</head>
		<body style="padding:0; margin:0; background:transparent;">

		<div id="contact-wrapper" class="clearfix row">

		<div class="clearfix col-lg-12">



					<form id="contact-form" class="container row" style="display:inline-block"  action="<?php echo SITE_URL; ?>form/resume-process-form.php" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">

						<fieldset>
				  <div class="float_left">
							<div class="field" style="margin-bottom:13px; display:block; overflow:hidden;">
								<!--label for="name">I am an*</label-->
							</div>

							<div class="field">
							   <input type="text" id="name" autocomplete="off"  name="name"  placeholder="Name*" title="Your first and last name" required  >
							  <input name="position" type="hidden" id="position" value="<?php echo $b;  ?>"/>
							</div>

							<div class="field">
							  <input type="email" id="email" autocomplete="off" name="email" required placeholder="Email*" title="We will respond to this address">
							</div>

							<div class="field">
							  <input type="text" id="phone" autocomplete="off" name="phone" placeholder="Phone*" title="If you prefer a phone call"  required >
						  </div>

						  <div class="field">
							  <input type="text" id="location" name="location" required pattern="[a-zA-Z0-9,.]+[a-zA-Z0-9 ]+"  oninvalid="setCustomValidity('Please fill in without  special characters')"  onchange="try{setCustomValidity('')}catch(e){}"  placeholder="Your Location *" title="Your Location">
						  </div>

		</div>
		<div class="float_left" style="margin-right:0px;">
							<div class="field" style="margin-top:24px;">
							  <input type="text" id="vacancy" name="vacancy" required placeholder="How did you find out about this vacancy? *" >
						  </div>

						  <div class="field">
							  <input type="text" id="github" name="github" placeholder="GitHub Username" >
						  </div>

						  <div class="field">
							  <input type="text" id="stackoverflow" name="stackoverflow" placeholder="StackOverflow Username" >
						  </div>

						  <div class="field">
							  <input type="file" id="cv" name="cv" required placeholder="Upload Resume">
						  </div>

		</div>
							<div class="field submit" style="text-align:center; width:550px; clear:both;">
								<input type="submit" value="Send it!" />
								<img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
							</div>

						</fieldset>

					</form>
			  </div>
			</div>


</body>
</html>