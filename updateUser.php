<?php
    if (isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","","test");
        
        $ID = $_POST['ID'];
        if(isset ($_POST['fristName'])){ //action come from the same page to update the database 
            $fristName = $_POST['fristName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $query = "UPDATE `user` SET `fristName`='$fristName',
                                    `lastName`='$lastName',
                                    `email`='$email',
                                    `address`='$address'
                    WHERE `ID`= '$ID'";      
            $insert = mysqli_query($connection,$query);
            if(!$insert)
                echo'update faild';
            else
                header("location: viewRecords.php");
            
        }else{ //action come from viewRecordPage with only ID 
        
            $query = "SELECT * FROM `user` WHERE `ID` ='$ID'";
            $selectUser = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($selectUser)){
                $fristName = $row['fristName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $address = $row['address'];
            }
        }
    }
?>
<html>

<head>

</head>
<body >
    <?php  include"form.php" ?>

</body>
</html>