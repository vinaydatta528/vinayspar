<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$cname = $_POST["cname"];
$designation = $_POST["designation"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$areainterest = $_POST["areainterest"];
$business = $_POST["business"];


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = "mail.sparinfosys.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'ats@sparinfosys.com';
$mail->Password = '*ww_*?]GOpo1';
$mail->SMTPSecure = "tls";
$mail->setFrom('ats@sparinfosys.com', 'Spar website');
$mail->isHTML(true);

//$mail->addAddress('sastrysk@sparinfosys.com', 'Sastry');
$mail->addAddress('john.hampton@sparinfosys.com', 'John');
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
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Company Name</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$cname.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Designation</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$designation.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Corporate Mail Id</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$email.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Office Phone</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$phone.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">State Area of Interest</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$areainterest.'</th>
  </tr>
  <tr>
    <th height="50" align="right" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">Indicate desired Business Outcome</th>
    <th align="center" valign="middle" style="font-size:16px; color:#2b2b9e" scope="col">:</th>
    <th align="left" valign="middle" scope="col" style="font-size:14px; color:#222323; font-weight:normal">'.$business.'</th>
  </tr>
</table>';

$mail->Subject  = "Mail from Request Form of Spar Website";
$mail->Body  = $bodytext;
		if(!$mail->send()) {
		 echo 'failed';
		} else {
		 echo "success";
		}
 
?>