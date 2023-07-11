<?php
include 'connection.php';
$id = $_GET['id'];
$name = $_GET['name'];
var_dump($name);
print $id;
    $sql = "UPDATE indictments SET status='confirmed' WHERE id='$id'";
    $query = mysqli_query($db,$sql);
    if($query)
    {
       header("location:../admins/adminconfirmaction.php");
    }
    else
    {
        print "fail";
    }

?>