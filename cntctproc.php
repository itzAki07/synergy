<?php
$to = "murthyhgs@synergynaturals.in";
$visitorName=isset($_POST['cntFrmName']) ? $_POST['cntFrmName'] : "" ;
$visitorPhone = isset($_POST['cntFrmMobile']) ? $_POST['cntFrmMobile'] : "";

$subject=isset($_POST['cntFrmSubject']) ? $_POST['cntFrmSubject'] : "" ;
$visitorEmail=isset($_POST['cntFrmEmail'])? $_POST['cntFrmEmail'] : "" ;

/*$SndCpyToClient=isset($_POST['visitorCopy']) ? ($_POST['visitorCopy']=="Yes") : false;*/
switch($subject)
{
case "1":$subject="Website: Dealership enquiry received";break;
case "2":$subject="Website: Freelancer enquiry received";break;
case "3":$subject="Website: Free Demo enquiry received";break;
case "4":$subject="Website: Support request received";break;
case "5":$subject="Website: Contact Form message received";break;
default:$subject="Website: Unknown Subject message received";break;
}

$message = "
<html>
<head>
<title>Synergy Naturals</title>
</head>
<body>
<h1>" . $subject  . "</h1>
<table>
<tr>
<th>Name</th>
<th>Mobile Number</th>
<th>Email </th>
</tr>
<tr>
<td>" .  $visitorName  .  "</td>
<td>" .  $visitorPhone . "</td>
<td>" .  $visitorEmail . "</td>
</tr>
<tr>
<td colspan='3'>" .  $visitorMessage . "</td>
</tr>
</table>
<p>This mail generated at " . date("l jS \of F Y h:i:s A") . "</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@synergynaturals.in>' . "\r\n";
//For Testing
//$headers .= 'Cc: dev@icraftweb.com' . "\r\n";

mail($to,$subject,$message,$headers);

//Send me copy send separately for safety
/*if($SndCpyToClient){
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@threefoolstravel.com>' . "\r\n";
$headers .= 'Cc:' .  $vistorMailId  . "\r\n";
$message=$visitorMessage;
$subject="Copy of the message for your reference" ;
mail($to,$subject,$message,$headers);
}*/
header("location:index.html");
?>