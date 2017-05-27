<?php include("../includes/_config.php"); include("../includes/_lib.php"); ?>

<head>
<link href="<?php CSS('form/career.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php CSS('style.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
<style>
	h4{font-size:24px;}
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	var name = '<?php echo $_POST['name']; ?>';
	var email = '<?php echo $_POST['email']; ?>';
	var vacancy ='<?php echo $_POST['vacancy']; ?>';
	var position ='<?php echo $_POST['position']; ?>';
	var location1 ='<?php echo $_POST['location']; ?>';
	var github ='<?php echo $_POST['github']; ?>';
	var stackoverflow ='<?php echo $_POST['stackoverflow']; ?>';
	$.ajax({
		url: "https://docs.google.com/forms/d/e/1FAIpQLSfBlSKAWtQAFi9BDxDkllsHeyvgIPFyMz_kSMhl304p5zDhTQ/formResponse",		
		data: { "entry_2005620554": name,"entry_1045781291": email,"entry_1065046570": vacancy,"entry_1166974658": position,"entry_839337160": location1,"entry_1158234621": github,"entry_1237189747": stackoverflow},
		type: "POST",
		dataType: "xml",
		 statusCode: {

		}
	});
</script>
</head>
 

<?php
error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';

 $name= $_POST['name'];
 $vacancy = $_POST['vacancy'];
 $position = $_POST['position'];
 $github = $_POST['github'];
 $stackoverflow = $_POST['stackoverflow'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $location = $_POST['location'];

 $mail = new PHPMailer;
	$mail->isSMTP();    
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';  
	$mail->Host = 'email-smtp.us-west-2.amazonaws.com';
	$mail->Port = 25;   
	$mail->Username = "AKIAJZDQV2VXA3I2EJOQ";
	$mail->Password = "Aj2jGfhdARQWVCtJ03Ku5IEL/ybFo/LVMZjFcMDJWKxS";
	$mail->isHTML(true); 
	$mail->setFrom('careers@adnear.net');     //Set who the message is to be sent from
	$mail->addReplyTo($email,$name);  //Set an alternative reply-to address
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addCC('kiran@near.co');
	//$mail->addCC('rajkumar@near.co');
   //$mail->addCC('gokul@near.co');
    //$mail->addCC('smriti@near.co');
	$mail->addCC('careers@near.co');
	//$mail->addCC('arun@near.co');
	$mail->isHTML(true);                                  // Set email format to HTML


		$mail->Subject =  "Applied for Job:" .$position.'';		 
					
		$mail->Body    = "		
		<table border='0' cellspacing='0' cellpadding='5'>
  <tbody>
    <tr>
      <td height='40' align='left' valign='bottom' bgcolor='#F1EEEE'>&nbsp;</td>
      <td height='40' colspan='2' align='left' valign='bottom' bgcolor='#F1EEEE'><img src='https://near.co/images/near.png' width='100' height='27' alt=''/></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><strong>How did ". $name ." find out about this vacancy?</strong></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>". $vacancy ."</td>
    </tr>
    <tr>
      <td width='2' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td width='181' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'><strong>GitHub Account:</strong></td>
      <td width='305' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'><a href='//www.github.com/". $github ."' target='_blank'>". $github ."</a></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><strong>StackOverflow Profile URL: </strong></td>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><a href='//stackoverflow.com/users/". $stackoverflow ."' target='_blank'>". $stackoverflow ."</a></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><strong>Referer URL:</strong></td>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><a href='".$_COOKIE["RefererURL"]."' target='_blank'>".$_COOKIE["RefererURL"]."</a</td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style=font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>-------------------</td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'><strong>". $name ."</strong><br>
      <strong>Ph:</strong> ".$phone ."<strong> Email:</strong><a href='mailto:". $email ."'>". $email ."</a> <strong>Location: </strong>".$location ."</td>
    </tr>
  </tbody>
</table>";

		
		$mail->addAttachment($_FILES['cv']['tmp_name'],$_FILES['cv']['name']); 

	if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
  echo "<div class='col-md-11'><h4 class='success'>Message Sent</h4>";
  echo "<p class='success'>Thank you <strong>" .$name. "</strong>, for your interest in Near. Your profile has been passed on to the respective department. </p></div>";


?>