
<center>
<?php
session_start();



$_SESSION["numbers"]=$numbers;


// Authorisation details.
$username = "enter username here";
$hash = "enter api ky here";


// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";


// Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers=$_POST['code'].$_POST['mobile'];
$message = rand(22222,99999);
$_SESSION["message"]=$message;
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API


if($result == true){


echo "mesage is sent";
}


curl_close($ch);

?>


   
   <form action="mail2.php" method="post">

<input name="captcha" type="text">


<input type="submit" name="submit" value="submit">
</form>
