<?php include_once 'includes/dbhandler.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

    <title>Admin Panel</title>
</head>

<style>

    *{
        font-size: 20px;    
    }
    body{
        background: #e8f1ff;
    }
    h1{
        font-size: 40px;
    }
    .box{
        width: 20rem;
        background: #1f6acc;
        margin: 2rem;
        padding-left:1rem;
        padding-right:1rem;
        padding-top:1rem;
        font-family: 'Titillium Web', sans-serif;

    }
    h2{
        padding-left : 10px;
        color: white;

    }
    .white{
        color:white;
    }
    .white2{
        color:black;
        background:white;
        font-family: 'PT Sans', sans-serif;
    }

</style>

<body>
    
    <h1>Admin dashboard</h1>

    <?php



        $sql = "SELECT * from form;";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        
        
        
        if ($rowCount > 0){
            //while($row = mysqli_fetch_assoc($result)){
            //    echo $row['id'];
           // }
                
           while ($row = mysqli_fetch_assoc($result)){

            $formNo= $row['form_id'];
            $fname= $row['firstName'];
            $lname= $row['lastName'];
            $message= $row['message'];

            echo "<div class = \"box\">";
                        echo "<div class = \"white\"> Form #  $formNo </div>";
                        echo "<div class = \"white\"> First Name:  $fname </div>";
                        echo "<div class = \"white\"> Last Name:  $lname </div>";
                        echo '<br>';
                        echo "<div class = \"white\"> Message: </div>";
                        echo "<div class = \"white2\"> $message </div>";
                echo '<br>';
            echo "</div>";

           }
           
        }
    
    ?>


</body>
</html>