<?php 
//db settings
$db_username = "root";
$dd_password = "";
$db_name = "portfolio_";
$db_host = "localhost";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
 
$sql="INSERT INTO contact(name,email,subject,message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

if(!mysqli_query($mysqli,$sql))
{
    die('Error: '.mysqli_error($mysqli));
}
mysqli_close($mysqli);
header("location: index.php")
?>
<?php
echo "Thanks we will get back to you soon";
?>
