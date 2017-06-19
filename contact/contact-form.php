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
<script type="text/javascript" src="<?php JS('jquery.min.js'); ?>"></script>
<script src="<?php JS('js-webshim/minified/polyfiller.js'); ?>"></script>
<script>jQuery.webshims.polyfill('forms'); 
jQuery.webshim.activeLang('en');
jQuery.webshims.cfg.no$Switch = true;
</script>

</head>
<body>

 <form data-enable-shim="true" class="custom-form" action="<?php echo SITE_URL; ?>form/process-form.php" method="post" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">
            <div class="form-group margin-bottom col-md-12 row">
            <div class="col-md-6 row">
              <input type="text" id="name" name="name" required  placeholder="Name" class="form-control" aria-describedby="nameHelp">
            </div>
            <div class="col-md-6 row">
              <input type="text" id="location" name="location" placeholder="Country" class="form-control" required aria-describedby="nameHelp">
            </div>
            </div>

        <div class="form-group margin-bottom col-md-12 row">
          <div class="col-md-6 row">
            <input type="email" id="email" name="email" required placeholder="Business Email" class="form-control" aria-describedby="emailHelp" >
          </div>
          <div class="col-md-6 row">
            <input class="form-control" type="text" id="phone" name="phone" required placeholder="Contact Number">
          </div>
        </div>
        <div class="form-group margin-bottom col-md-12 row">
         <div class="col-md-6 row">
            <input class="form-control" type="text" id="desgination" name="designation" required placeholder="Designation">
          </div>
          <div class="col-md-6 row">
             <select id="contact_reason" class="form-control" name="contact_reason" required >            
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
            <div class="col-md-6 row reason">
             
          </div>
      </div>
       <div class="form-group margin-bottom col-md-12 row">

          <textarea class="form-control" d="message" name="message" rows="5" placeholder="Query / Message"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
<img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
</form>
<script src="<?php JS('tether.min.js'); ?>"></script>
<script src="<?php JS('jquery.min.js'); ?>"></script>
<script src="<?php JS('bootstrap.min.js'); ?>"></script>
<script src="<?php JS('modernizr.js'); ?>"></script>
<script src="<?php JS('bootstrap-formhelpers.js'); ?>"></script>
<script src="<?php JS('bootstrap-formhelpers-countries.js'); ?>"></script>
<script src="<?php JS('custom.js'); ?>"></script>
<script>
$('#contact_reason').change(function(){
    if( $(this).val() == 'Others'){
        $('.reason').append('<input id="contact_rea" name="contact_reason" type="text" placeholder="How did you find us" required />');
    }else{
        $('#contact_rea').remove();
    }
});


</script>
</body>
</html>