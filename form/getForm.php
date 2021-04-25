<?php

//INCLUSIONS------------------------------------------
include_once 'includes/dbhandler.php';


//FUNCTIONS--------------------------------------------


function formSubmitted(){
    return isSet($_GET['submit']);
}

function showConfirmation(){
    echo " <h3 class=\"text-success\"> Form submitted!    </h3>  ";
}


//MAIN CODE--------------------------------------------
if (  formSubmitted() )
{
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $sql = "
    INSERT into FORM (firstName, lastName, email, message)
    VALUES (
        '$fname',
        '$lname',
        '$email',
        '$message'
    )";

    mysqli_query($conn, $sql);

    showConfirmation();    
}


?>