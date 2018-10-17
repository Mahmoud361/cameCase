<?php
    $connection = mysqli_connect("localhost","root","","test");

    if (isset($_POST['submit'])){
        
    $email = $_POST['email'];
    $query = "DELETE FROM `user` WHERE `email` = '$email'";
    $delete = mysqli_query($connection,$query);

    }


    $query = "select * from user";

    $selectAllPosts = mysqli_query($connection,$query);

?>
<html>

<head>
</head>
<body>
    <table>
        <tr>
            <td>Frist Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($selectAllPosts)){
                $ID = $row['ID'];
                $fristName = $row['fristName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $address = $row['address'];
        ?>
        <tr>
            <form action="viewRecords.php" method="post">
                <td><p><?php echo $fristName ?></p></td>
                <td><p><?php echo $lastName ?></p></td>
                <td><input  type="text" name="email" value=<?php echo $email ?> > </td>
                <td><p><?php echo $address ?></p></td>
                <td>
                    <input type=submit name="submit" value="delete"> 
                </td>    
            </form>
            <td>
                <form action="updateUser.php" method="post">
                    <input  type='hidden' name="ID" value=<?php echo $ID ?> >
                    <input type=submit name="submit" value="update"> 
                </form>
                
            </td>
            
            
            
        </tr>
        <?php } ?>
    </table>

</body>
</html>