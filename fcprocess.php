<?php
$to = "murthyhgs@synergynaturals.in";
$visitorName=isset($_POST['visitorName']) ? $_POST['visitorName'] : "" ;
$visitorPhone = isset($_POST['visitorMobile']) ? $_POST['visitorMobile'] : "";
//$subject=isset($_POST['visitorSubject']) ? $_POST['visitorSubject'] : "" ;

/*$SndCpyToClient=isset($_POST['visitorCopy']) ? ($_POST['visitorCopy']=="Yes") : false;
switch($subject)
{
case "1":$subject="3FT Feedback Received";break;
case "2":$subject="3FT Enquiry: Travel Insurance Enquiry Received";break;
case "3":$subject="3FT Enquiry: International package enquiry received";break;
case "4":$subject="3FT Enquiry: Domestic package enquiry received";break;
case "5":$subject="3FT Enquiry: Ticketing enquiry received";break;
default:$subject="3FT Enquiry: Forex enquiry received";break;
}*/

$subject="Free Demo Request Received";
$message = "
<html>
<head>
<title>Synergy Naturals</title>
</head>
<body>
<h1>Free Demo Request</h1>
<table>
<tr>
<th>Visitor Name</th>
<th>Phone Number</th>
</tr>
<tr>
<td>" .  $visitorName  .  "</td>
<td>" .  $visitorPhone . "</td>
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