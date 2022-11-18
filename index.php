<?php
    if(isset($_POST['sub'])){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "newdemo";

        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $connect = mysqli_connect($hostname,$username,$password,$databaseName);
        $query = "INSERT INTO `login`(`name`,`pass`) VALUES('$name','$pass')";
        $result = mysqli_query($connect,$query);

        if ($result) {
            echo 'Data Inserted';
        }
        else{
            echo 'Data Not Inserted';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="pass" placeholder="pass" required>
        <button type="submit" name="sub" value="Click">Click</button>
    </form>

</body>
</html>




