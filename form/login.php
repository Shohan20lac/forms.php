<?php 

    include_once 'includes/dbhandler.php';


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'header.php';?>
    

</head>

<body>

    <div class="container" style="margin:auto; width:25rem; padding:2fr; padding-bottom: 3rem;" id="mycontainer">
        <h2 class="text-center mt-4">Admin login </h2>
        <form method="GET" action="adminpanel.php">
            <div class="form-group">
                <label for="">user ID</label>
                <input type="text" class="form-control" name="id" requried>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" required>
            </div>

        <div class="row justify-content-center">

            <?php include_once 'loginchecker.php'?>

        <input type="submit" name="submit" class="btn btn-primary text-center">    
        </div>
        
        </form>
    </div>

</body>
</html>