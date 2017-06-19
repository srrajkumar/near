
<?php
include("../includes/_config.php");



if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

function isPhone($phone) {
	return(preg_match("/^\+?[0-9]{1,3}\s?[0-9]{10,15}$/",$phone));
}


	error_reporting(E_ALL);
	require '../form/phpmailer/PHPMailerAutoload.php';
	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$phone   = $_POST['phone'];
	$company  = $_POST['company'];
	$country  = $_POST['country'];
	$find  = $_POST['find'];
	$verify	= $_POST['verify'];
	$refererurl =  $_COOKIE['RefererURL'];
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
	$mail->addCC('allspark@near.co');
	//$mail->addCC('rajkumar@near.co');
	//$mail->addCC('info@near.co');
	$mail->isHTML(true);                                  // Set email format to HTML

	
	
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

if(trim($name) == '') {
	echo '<div class="error_message">Attention! You must enter your Name.</div>';
	exit();
}  else  if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid Email Address.</div>';
	exit();
} else if(trim($phone) == '') {
	echo '<div class="error_message">Attention! Please enter a valid Phone Number.</div>';
	exit();
} else if(!isPhone($phone)) {
	echo '<div class="error_message">Attention! Please enter Country code.</div>';
	exit(); 
} else if(!isEmail($email)) {
	echo '<div class="error_message">Attention! You have enter an invalid Email Address, try again.</div>';
	exit();
} 

  if(trim($company) == '') {
	echo '<div class="error_message">Attention! Please enter a Company Name.</div>';
	exit();
} else if(trim($verify) == NULL) {
	echo "<div class='error_message'>Attention! Please go through and accept Allspark's Terms & Conditions</div>";
	exit();
}

//Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "kiran@near.co";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

		$mail->Subject = 'You\'ve been contacted by ' . $name . '.';		 
					
		$mail->Body    = 
		
		"
		
	<table border='0' cellpadding='0' cellspacing='0'>	
		<tr>
			<td style='padding: 10px 0 30px 0;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border: 1px solid rgba(190, 190, 190, 0.42); border-radius:3px;border-collapse: collapse;'>
					<tr>
						<td  bgcolor='#2a3239' style='padding: 0px;font-size: 22px; color:#fff; font-weight: bold; font-family: Arial, sans-serif;'>
							<img src='http://188.166.248.212/images/allspark-logo.jpg' alt='Allspark' width='56' height='48'  style='display: block; float:left; padding: 5px 5px 5px 10px;' />
                            <p style='margin: 10px 0 0px 0;'>Allspark Enquiry</p>
                           
                           
						</td>
                        
					</tr>
					<tr>
						<td bgcolor='#ffffff' style='padding: 20px 36px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #153643; font-family: Arial, sans-serif; font-size: 13px; padding: 10px 10px 15px 0px;'>
										You have been contacted by <b style='text-transform:uppercase;'>$name</b> from <b style='text-transform:uppercase;'>$company</b>.
									</td>
								</tr>
								<tr>
								<td style='border-bottom: 1px solid rgba(0, 0, 0, 0.62);'></td>
								</tr>
								<tr><td style='padding-bottom: 10px;'></td></tr>
								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='100%' valign='top'>
													<table border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.62);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Name : </b> $name
															</td>
                                                            
														</tr>
														<tr>
														<td height='41' style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Email : </b> $email
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Phone : </b> $phone
															</td>
                                                            
														</tr>
														<tr>
														<td height='41' style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Location : </b> $country
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Company : </b> $company
															</td>
                                                           
														</tr>
														<tr>
														<td height='41' style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>How did you find us : </b> $find
															</td>
                                                            
														</tr>
                                                          <tr>
                                                        <td colspan='2' style='line-height: normal; padding: 15px 0px;'><b style='color:rgba(0, 0, 0, 0.64);'>Referer URL : </b><a href='$refererurl' target='_blank'>$refererurl</a></td>
                                                     </tr>
													</table>
												</td>
												
											</tr>
                                          
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>"
		. PHP_EOL . PHP_EOL;



	if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
 echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Thank you for signing up for the Allspark Demo.</h1>";
	echo "<p>Someone from our team will get in touch with you shortly.</p>";
	echo "</div>";
	echo "</fieldset>";
?>
