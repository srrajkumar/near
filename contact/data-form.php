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
    <form action="<?php echo SITE_URL; ?>form/data-process-form.php" method="post" enctype="multipart/form-data" class="custom-form" role="form" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">
      <div class="form-group margin-bottom col-md-12 row">
        <div class="col-md-6 row">
          <input id="username" type="text" name="name"  class="form-control" aria-describedby="nameHelp" required placeholder="Name">
        </div>
        <div class="col-md-6 row">
        <input  id="email" type="email" name="email"  class="form-control" aria-describedby="emailHelp" required placeholder="Business Email">
          </div>
        </div>
      <div class="form-group margin-bottom col-md-12 row">
   
    <div class="col-md-6 row">
     <input id="phone" type="text" name="phone" required placeholder="Contact Number"  class="form-control"> 
    </div>
    <div class="col-md-6 row">
     <input id="location" type="text" name="location" required placeholder="Country"  class="form-control"> 
    </div>
    </div>
    <div class="form-group margin-bottom col-md-12 row">
        <div class="col-md-6 row">
             <select id="looking" class="form-control" name="looking" required >            
                <option value="" selected="selected" >Looking for</option>
                <option value="" disabled="disabled"> </option>
                <option value="Sourcing data">-  Sourcing data</option>
                <option value="Data Partnership">- Data Partnership</option>
                <option value="DaaS API access">-  DaaS API access</option>
                <option value="Others">- Others </option>
                <option value="" disabled="disabled"> </option>
            </select>
          </div>
          <div class="col-md-6 row">
             <select id="find-us" class="form-control" name="contact_reason" required >            
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
       <div class="form-group margin-bottom col-md-12 row ">
        <div class="col-md-6 row looking">
             
          </div>
            <div class="col-md-6 row reason">
             
          </div>
      </div>
     <div class="form-group margin-bottom col-md-12 row">

     <textarea id="message" style="margin-right:0px;" name="message" class="form-control" placeholder="Query / Message" rows="4"></textarea>
      
  </div>

   <button type="submit" class="btn btn-primary">Submit</button>
   <img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
</form>
<?php include('../includes/_java_scripts.php'); ?>
<script>
$('#find-us').change(function(){
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