
<?php// test github after edite
    if (isset($_POST['submit'])){
        $fristName = $_POST['fristName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $connection = mysqli_connect("localhost","root","","test");

        $query = "INSERT INTO `user`(`fristName`, `lastName`, `email`, `address`) VALUES (";
        $query .= "'".$fristName."','".$lastName."','".$email."','".$address."')";
        $insert = mysqli_query($connection,$query);
        if(!$insert)
            echo "faild";
        else
            header("location: index.php");
    }

?>
<html>

<head>

</head>
<body >
    <?php include"form.php" ?>
</body>
</html>