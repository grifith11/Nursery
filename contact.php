<?php
try {
    $db = new mysqli("localhost", "root", "", "contact");
}
catch(Exception $exc){
    echo  $exc->getTraceAsString();
}
if (isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['msg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $is_insert=$db->query("INSERT INTO `data`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

    if ($is_insert==TRUE){
        echo "<h2>Thanks ,your request submitted.</h2>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: "Comic Sans MS";
        }
        body {
            background-image: url("images/img19.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        h1{
            text-align: center;
            padding-top: 150px;
        }
        form{
            text-align: center;
            padding-top: 80px;
        }
    </style>
</head>
<body>
<h1>CONTACT US</h1>
<form method="post" action="">
    <label>Name</label>
    <input type="text" name="name" placeholder="Name"><br><br>
    <label>Email</label>
    <input type="email" name="email" placeholder="Email"><br><br>
    <label >Message</label>
    <textarea name="msg" placeholder="Type Your Request"></textarea><br><br>
    <input type="submit" value="submit request">
</form>
</body>
</html>

