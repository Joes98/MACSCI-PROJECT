<?php

include "../macscidbmain/connection.php";


$sql = "SELECT * FROM regions";
$exec = mysqli_query($db,$sql);
while( $fetch = mysqli_fetch_assoc($exec)){
$regions[] = $fetch['region'];
}

$sql = "SELECT ngoname FROM ngos";
$exec = mysqli_query($db,$sql);
while( $fetch = mysqli_fetch_assoc($exec)){
$ngname[] = $fetch['ngoname'];
}


@$error = $_REQUEST['error'];
?>