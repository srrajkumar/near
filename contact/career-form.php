 <?php include('../includes/_config.php');
$meta_title="Contact Us | Near offices | Ambient Intelligence Platform";
$meta_desc="Reach out to us to know more about our platform and how our SaaS products can help you in your data-driven decisions. ";
$meta_keywords="Near Offices, Near Culture, Connected Data, Connected Environments, SaaS products, Near Leadership, Data products, DaaS API, Allspark, Carbon, Data Partnerships, Data-driven decisions, Omni-channel Marketing, Cross-device Data, Cross-screen Marketing.";
?>
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
.margin-bottom.form-group {margin-bottom: 30px;}
</style>
</head>
<body>
     <form  action="<?php echo SITE_URL; ?>form/resume-process-form.php" class="custom-form" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">
      <div class="form-group margin-bottom col-md-12 row">
      <div class="col-md-6 row">
        <input type="text" id="name" name="name" class="form-control" aria-describedby="Your first and last name" placeholder="Name" required>
       
      </div>
    <div class="col-md-6 row">
     <input id="location" type="text" name="location" required placeholder="Country"  class="form-control"> 
    </div>

      </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="email" id="email" name="email" required class="form-control" aria-describedby="We will respond to this address" placeholder="Email">
    </div>
    <div class="col-md-6 row">
      <input type="text"  name="position" id="position" class="form-control" aria-describedby="jobHelp" placeholder="Applying for">
    </div>
  </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="phone"  class="form-control" name="phone"  aria-describedby="If you prefer a phone call" required placeholder="Contact Number">
    </div>
     <div class="col-md-6 row">
      <input type="text" id="stackoverflow" name="stackoverflow" placeholder="StackOverflow Username"  class="form-control" aria-describedby="textHelp" >
    </div>
   
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="github" name="github" placeholder="GitHub Username"  class="form-control"  aria-describedby="Github">
    </div>
    <div class="col-md-6 row">
             <select id="career-reason" class="form-control" name="contact_reason" required >            
                <option value="" selected="selected" >How did you find us</option>
                <option value="" disabled="disabled"> </option>
                <option value="Search">-  Search</option>
                <option value="Media">- Media</option>
                <option value="Referral">- Referral</option>
                <option value="Saw an ad">- Saw an ad</option>
                <option value="Events">- Events</option>
                <option value="Others">- Others </option>
                <option value="" disabled="disabled"> </option>
            </select>
  </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="file" id="cv" name="cv" required placeholder="Upload Resume"  class="form-control"  aria-describedby="textHelp">
    </div>
     <div class="col-md-6 row reason">
             
          </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
</form>
<?php include('../includes/_java_scripts.php'); ?>
<script>
$('#career-reason').change(function(){
    if( $(this).val() == 'Others'){

        $('.reason').append('<input id="contact_rea" name="contact_reason" type="text" placeholder="How did you find us" />');
    }else{
        $('#contact_rea').remove();
  
    }
});
$('#looking').change(function(){
    if( $(this).val() == 'Others'){
        $('.looking').append('<input id="lookin" name="looking" type="text" placeholder="Looking for" />');
    }else{
        $('#lookin').remove();

    }
});
</script>
</body>
</html>