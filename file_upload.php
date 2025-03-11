<?php
    $con = mysqli_connect("localhost", "root", "", "bs_23");

    if (isset($_POST['submit'])) {
        
        $username = $_POST['Username']; 
        $password = $_POST['Password'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $img_folder = "images/" . basename($image);

        $file = $_FILES['cv']['name'];
        $tmp_file = $_FILES['cv']['tmp_name'];
        $file_folder = "files/" . basename($file);

        $img_uploaded = move_uploaded_file($tmp_image, $img_folder);
        $file_uploaded = move_uploaded_file($tmp_file, $file_folder);
        $qr="INSERT INTO data_entry (username,password,image,file)
        VALUES ('$username','$password','$img_folder','$file_folder')";
        $result = mysqli_query($con,$qr);
        if ($result) {
            echo "succesfull";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="Username" placeholder="USERNAME" id=""><br>    
    <input type="password" name="Password" placeholder="Enter Password" id=""><br>
    <input type="file" name="cv" id=""><br>
    <input type="file" name="image" accept="image/*"><br>
    <input type="submit" name="submit" value="Submit"><br>
</form>

</body>
</html>