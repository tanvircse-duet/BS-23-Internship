<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "bs_23";         

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; 
        }
        .container h2 {
            text-align: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        input[type="text"], input[type="password"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Entry Login</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <label>Upload Image:</label>
            <input type="file" name="image" accept="image/*" required>
            <label>Upload File:</label>
            <input type="file" name="file" required>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
