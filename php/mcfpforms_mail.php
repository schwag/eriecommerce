<?php

// Mail function
$formName = $_POST['form_submitted'];
$senderName = $_POST['name'];
$reqType = $_POST['select-serv'];
$business = $_POST['business'];
$emailAdy = $_POST['email'];
$msgBody = $_POST['message'];

if( isset( $emailAdy ) ) {
$to = 'adam.yakish@myriadcore.com' . ', ';

//$to .= '';



$subject = 'New Message From the ' . $_POST['form_submitted'];

$m = ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Plyler Email</title>

</head>
 
<body bgcolor="#FFFFFF">
<style type="text/css">
#body tr td:first-of-type {width:20%; text-align:right; padding-right:8px;}
#head tr th {color:#fff; font-size:20px; padding:0 10px;}
</style>

<table id="head" width="960px" cellpadding="10px" border="0" style="margin:20px auto; background:#5ba73b">
    <tr>
        <th>You have recieved a request for more information</th>
    </tr>
</table>
<table id="body" width="960px" style="margin:20px auto; ">

    <tr>
    	<td>Customer Name:</td>
        <td>'. $senderName .' </td>
    </tr>
     <tr>
    	<td>Business Name:</td>
        <td>'. $business.' </td>
    </tr>
     <tr>
    	<td>Customer email:</td>
        <td>'. $emailAdy .' </td>
    </tr>
     <tr>
    	<td>Message</td>
        <td>'. $msgBody  .' </td>
    </tr>

</table>
<table width="960px" style="margin:20px auto;">
    <tr>
        <th>Message sent from: '. $formName .'</th>
    </tr>
</table>

</body>
</html>


';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: WebForm <DoNotReply@PlylerDoor.com>' . "\r\n";
$headers .= 'Bcc: kevin@myriadcore.com' . "\r\n";

mail($to, $subject, $m, $headers);	


}


?>