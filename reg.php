<html>
<head>
    <style>
        button {
            background-color: blue;
            border: currentColor;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

        }
    </style>
</head>
<body style="background-image: url('img16.jpg');background-repeat: no-repeat; ">
<h2 align="center">REGISTER DETAILS</h2>
<?php
include 'config.php';

if(isset($_GET['id'])){
    $email=$_GET['id'];
    $msg=mysqli_query($con,"delete from users where email='$email'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}

?>
<table align="center" border="1">
    <thead>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>phonenumber</th>
    <th>Password</th>

    </thead>
    <tbody>
    <?php


    $sql="SELECT  * FROM users";
    $result=$con->query($sql);
    if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        ?>

        <tr>
            <td><input type='text' id='firstname' name='firstname' value="<?php echo $row['firstname']; ?> "></td>
            <td><input type='text' id='lastname' name='lastname' value="<?php echo $row['lastname']; ?> "></td>
            <td><input type='text' id=email'' name='email' value="<?php echo $row['email']; ?> "></td>
            <td><input type='text' id='phonenumber' name='phonenumber' value="<?php echo $row['phonenumber']; ?> "></td>
            <td><input type='text' id='password' name='password' value="<?php echo $row['password']; ?> "></td>
                      <td>
                <a href="reg.php?id=<?php echo $row['email']; ?>">
                    <button onClick="return confirm('Do you really want to delete');" class="btn btn-danger">Delete</button>
                </a>
            </td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
    </br>
<?php
}
?>
<script>
    function goBack() {
        window.history.back()
    }
</script>

<button onclick="goBack()">Go Back</button>

</body>
</html>
