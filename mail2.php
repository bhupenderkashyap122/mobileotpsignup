
<center>
<br>
<br>
<br>
<br>
<br>
<?php
session_start();
$message="";
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["message"]==$_POST["captcha"])
{
echo $captcha=$_POST['captcha'];
echo "<br>";
echo "Correct Code Entered";

session_destroy();
//Do you stuff
}
else
{
echo "Wrong Code Entered Try Again";



?>




 <form action="mail2.php" method="post">

<input name="captcha" type="text">


<input type="submit" name="submit" value="submit">
</form>





  
  

<?php } ?>

<a href="index2.php">Index</a>
</center>





