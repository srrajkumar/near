<?php ob_start('ob_gzhandler'); ?>
<?php include("../includes/_config.php");
 $b = $_GET['vacancy'];  ?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
 
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
<style>
.btn-primary{background-color: #e50000;
    border-color: #e50000;    border-radius: 30px;}
    .btn-primary:hover{background-color: #fff;
    border-color: #e50000; color:#e50000;}
</style>

</head>
<body style="padding:0; margin:0; background:transparent;">

		<div id="contact-wrapper" class="clearfix row">

		<div class="clearfix col-lg-12">


 <form  action="<?php echo SITE_URL; ?>form/resume-process-form.php" class="custom-form" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">
      <div class="form-group margin-bottom col-md-12 row">
      <div class="col-md-6 row">
        <input type="text" id="name" name="name" class="form-control" aria-describedby="Your first and last name" placeholder="Name*" required>
       
      </div>
      <div class="col-md-6 row">
        <input type="text" id="location" name="location"  class="form-control" aria-describedby="TextHelp" placeholder="Location*" required>
       
      </div>

      </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="email" id="email" name="email" required class="form-control" aria-describedby="We will respond to this address" placeholder="Email*">
    </div>
    <div class="col-md-6 row">
      <input type="text"  name="position" id="position" class="form-control" aria-describedby="jobHelp" placeholder="Job Title">
    </div>
  </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="phone"  class="form-control" name="phone"  aria-describedby="If you prefer a phone call" required placeholder="Contact Number*">
    </div>
    <div class="col-md-6 row">
      <input type="text" id="vacancy" name="vacancy" required class="form-control" aria-describedby="textHelp" placeholder="How did you find us">
    </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="github" name="github" placeholder="GitHub Username"  class="form-control"  aria-describedby="Github">
    </div>
    <div class="col-md-6 row">
      <input type="text" id="stackoverflow" name="stackoverflow" placeholder="StackOverflow Username"  class="form-control" aria-describedby="textHelp" >
    </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="file" id="cv" name="cv" required placeholder="Upload Resume"  class="form-control"  aria-describedby="textHelp">
    </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
</form>
			  </div>
			</div>


</body>
</html>