<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mydb = 'uts_php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $mydb);

    if(! $conn){
        die('Could not connect:' . mysqli_error());
    }


    // mysqli_close($conn);
?>