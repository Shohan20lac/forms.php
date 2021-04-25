<?php include_once 'includes/dbhandler.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $sql = "SELECT * from form;";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result); 
        
        if ($rowCount > 0){
            //while($row = mysqli_fetch_assoc($result)){
            //    echo $row['id'];
           // }
            
           $row = mysqli_fetch_assoc($result);
           echo 'Form ID: '. $row['form_id'].'<br>';
           echo 'First Name: '. $row['firstName'].'<br>';
           echo 'Last Name: '. $row['lastName'].'<br>';
           echo 'Message: '. $row['message'].'<br>';

        }
    
    ?>


</body>
</html>