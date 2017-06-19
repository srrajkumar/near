<?php include("../includes/_config.php"); ?>

<head>

<style>
	h4{font-size:24px;}
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	var name = '<?php echo $_POST['name']; ?>';
	var email = '<?php echo $_POST['email']; ?>';
	var reason ='<?php echo $_POST['contact_reason']; ?>';
	var position ='<?php echo $_POST['position']; ?>';
  var phone ='<?php echo $_POST['phone']; ?>';
	var location1 ='<?php echo $_POST['location']; ?>';
	var github ='<?php echo $_POST['github']; ?>';
	var stackoverflow ='<?php echo $_POST['stackoverflow']; ?>';
	$.ajax({
	url: "https://docs.google.com/a/near.co/forms/d/e/1FAIpQLSdgUqlg4rzDbWQeKM1hyeuGP-o_2t6F4RmELqMyvrv6IvFeWQ/formResponse",		
	data: { 
    "entry_1085218782": name,
    "entry_1416570745": email,
    "entry_845444240": reason,
    "entry_1777394288": position,
    "entry_839337160": location1,
    "entry_2058489917": github,
    "entry_1840415751": phone,
    "entry_1401146226": stackoverflow
  },
	type: "POST",
		dataType: "xml",
		statusCode: {

		},
  timeout: 3000 
	});
</script>
</head>
 

<?php
error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';

 $name= $_POST['name'];
 $contact_reason  = $_POST['contact_reason'];
 $position = $_POST['position'];
 $github = $_POST['github'];
 $stackoverflow = $_POST['stackoverflow'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $location = $_POST['location'];
if (empty($name) && empty($email) && empty($phone) && empty($contact_reason)) {
    echo 'Please enter the values';
    return false;
}else{
 $mail = new PHPMailer;
	$mail->isSMTP();    
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';  
	 $mail->Host = 'email-smtp.us-east-1.amazonaws.com';
  $mail->Port = 25;   
  $mail->Username = "AKIAJEZG67GJOXXDJQ3Q";
  $mail->Password = "Ak6BnuLjQoheV3Iz1mIQeU5Ndfve7WoNLwjOLdfkMxmt";
  $mail->isHTML(true); 
  $mail->setFrom('contact@near.co');  
	$mail->addReplyTo($email,$name);  //Set an alternative reply-to address
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addCC('kiran@near.co');
	$mail->addCC('careers@near.co');
  //$mail->addCC('gokul@near.co');
  //$mail->addCC('rajkumar@near.co');
	//$mail->addCC('careers@near.co');
	//$mail->addCC('arun@near.co');
	$mail->isHTML(true);                                  // Set email format to HTML


		$mail->Subject =  "Applied for Job:" .$position.'';		 
					
		$mail->Body    = "		
		<table border='0' cellspacing='0' cellpadding='5'>
  <tbody>
    <tr>
      <td height='40' align='left' valign='bottom' bgcolor='#F1EEEE'>&nbsp;</td>
      <td height='40' colspan='2' align='left' valign='bottom' bgcolor='#F1EEEE'><img src='https://near.co/assets/images/near.png' width='100' height='27' alt=''/></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><strong>How did ". $name ." find out about this vacancy?</strong></td>
    </tr>
    <tr>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>&nbsp;</td>
      <td colspan='2' bgcolor='#FeFeFe' style='font-family: Arial, sans-serif; font-size: 12px; color: #333333;'>". $position ."</td>
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
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'><strong>StackOverflow Profile URL: </strong></td>
      <td bgcolor='#FeFeFe' style='font-family: Arial,sans-serif; font-size: 12px; color: #333333;'>". $contact_reason ."</td>
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
}

?>
