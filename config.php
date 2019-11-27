<?php
$db_host="localhost";
$db_user = "root";
$db_pass = "";
$db_name = "useraccounts";


$con=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");
if($con)
{
    echo " ";
}
else{
    echo  "error";
}
//$db = new PDO('mysql:host=localhost;dbname=' .$db_name. ';charset=utf8',$db_user,$db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>