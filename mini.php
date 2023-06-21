<?php

$name=$_REQUEST["name"];
$address=$_REQUEST["address"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$doubt=$_REQUEST["doubt"];
$yen=$_REQUEST["yen"];
$db=mysqli_connect("localhost","root","", "mini project");
if(!$db)
{
    echo"unable to connect";
    exit();
}

mysqli_select_db($db,"contact");
$sql="INSERT INTO contact VALUES('$name', '$address', '$email' , '$phone', '$doubt', '$yen')";

if(mysqli_query($db,$sql))
echo "<br><br><br><br><br><br><H2><center>THANKYOU. WE WILL REVERT BACK SOON...!</center></H2>";
else
echo"<br><br><br><br><br><br><h2>INVALID ENTRIES</h2>";

mysqli_close($db);


?>