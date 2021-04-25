<?php

if(isSet($_GET['submit'])){


    $enteredID = $_GET['id'];
    $enteredpass = $_GET['password'];
    
    $sql = "
        SELECT * from user 
        WHERE 
            id = $enteredID 
            AND 
            password = $enteredpass;
    ";
    
    $result = mysqli_query($conn, $sql);
    
    if (!$result) 
    {
        $text = "<h4> Login Failed </h3>";
    }    else{
        $text = "
        <h4> Login Successful --- </h3>
        ";
    }

    
    echo $text;
    
    
    }

?>

