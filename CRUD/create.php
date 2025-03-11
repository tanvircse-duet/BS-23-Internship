<?php
    $con = mysqli_connect("localhost","root","","bs_23");
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];

        $qr="INSERT INTO create_op
        VALUES ('$username','$email','$mobile','$password')";
        $result = mysqli_query($con,$qr);
        if($result){
            echo "Successfull";
        }
        else{
            echo "Not Successfull";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="">Enter Mobile</label>
            <input type="text" id="" name="mobile" placeholder="01xxxxxxxxx" required>

            <button type="submit" name="submit" class="submit-btn">Register</button>
        </form>
    </div>

</body>
</html>
