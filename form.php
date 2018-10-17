<?php
    if(!isset($ID)){
        $ID = "";
    }
    if(!isset($fristName)){
        $fristName = "";
    }
    if(!isset($lastName)){
        $lastName = "";
    }
    if(!isset($email)){
        $email = "";
    }
    if(!isset($address)){
        $address = "";
    }
?>

<form action="" method="post"> 
    <input type=hidden name="ID" value= <?php echo $ID; ?> >
    
    <label>Frist Name: </label>
    <input type="text" name="fristName" value = <?php echo $fristName; ?> >
    
    <label>last Name: </label>
    <input type="text" name="lastName" value = <?php echo $lastName; ?> >
    
    <label>email </label>
    <input type="email" name="email" value =<?php echo $email; ?>    >
    
    <label>address: </label>
    <input type="text" name="address" value = <?php echo $address; ?>  >
    <input type=submit name="submit" value="submite">
</form>