<?php

    include 'connection.php';

    $sql = "CREATE DATABASE macscidb";
    if(mysqli_query($db, $sql)){
        echo "databse created successfull";
    }else{
        echo "error creating database; it might be found already" . mysqli_error($db);
    }

    mysqli_close($db);
?>