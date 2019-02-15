<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = "mail.sparinfosys.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'ats@sparinfosys.com';
$mail->Password = '*ww_*?]GOpo1';
$mail->SMTPSecure = "tls";
$mail->setFrom('ats@sparinfosys.com', 'From Spar website Contact Us form');
$mail->isHTML(true);

//$mail->addAddress('sastrysk@sparinfosys.com', 'Sastry');
//$mail->addAddress('saikiran@sparinfosys.com', 'Saikiran');
//$mail->addAddress('vinaydatta@sparinfosys.com', 'Vinay');
//$mail->addAddress('john.hampton@sparinfosys.com', 'John');
$mail->addAddress('venk@sparinfosys.com', 'Venkat');
$mail->addAddress('pramod@sparinfosys.com', 'Pramod');
//$mail->addAddress('arjun@sparinfosys.com', 'Arjun');
//$mail->addAddress('thota@sparinfosys.com', 'Thota');
//$mail->AddCC('arjun@sparinfosys.com', 'Arjun');
//$mail->AddCC('pkumar@sparinfosys.com', 'Pankaj');


$bodytext = '<table width="600" border="0" cellspacing="0" cellpadding="6" style="font-family:Arial, Helvetica, sans-serif;">
  <tr>
    <th width="200" height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Name</th>
    <th width="5" align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$fname.' '.$lname.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Corporate Mail Id</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$email.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Message</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$message.'</th>
  </tr>
</table>';

$mail->Subject  = "From Spar website Contact Us form";
$mail->Body  = $bodytext;
		if(!$mail->send()) {
		 echo 'failed';
		} else {
		 echo "success";
		}
 
?>