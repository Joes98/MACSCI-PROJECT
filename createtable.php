<?php
include 'connection.php';

    $sql = "CREATE TABLE regions (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        region VARCHAR(30) NOT NULL,
        creator_name VARCHAR(30) NOT NULL,
        creator_organization VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $sql = "CREATE TABLE  stations (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        stationname VARCHAR(30) NOT NULL,
        region VARCHAR(30) NOT NULL,
        address VARCHAR(30) NOT NULL,
        creator_name VARCHAR(30) NOT NULL,
        creator_organization VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $sql = "CREATE TABLE  ngos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6),
        ngoname VARCHAR(30) NOT NULL,
        region VARCHAR(30) NOT NULL,
        address VARCHAR(30) NOT NULL,
        creator_name VARCHAR(30) NOT NULL,
        creator_organization VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    $sql = "CREATE TABLE  users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(50) NOT NULL,
        username VARCHAR(30) NOT NULL,
        region VARCHAR(30) NOT NULL,
        dob VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        organization VARCHAR(30) NOT NULL,
        bornarea VARCHAR(30) NOT NULL,
        nin VARCHAR(30) NOT NULL,
        phone VARCHAR(30) NOT NULL,
        usertype VARCHAR(30) NOT NULL,
        creator_name VARCHAR(30) NOT NULL,
        creator_organization VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $sql = "CREATE TABLE  indictments (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(50) NOT NULL,
        dob VARCHAR(30) NOT NULL,
        victimtype VARCHAR(30) NOT NULL,
        region VARCHAR(30) NOT NULL,
        street VARCHAR(30) NOT NULL,
        relname VARCHAR(30) NOT NULL,
        address VARCHAR(30) NOT NULL,
        phone VARCHAR(30) NOT NULL,
        crinfo VARCHAR(30) NOT NULL,
        creator_name VARCHAR(30) NOT NULL,
        creator_organization VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $exec = mysqli_query($db,$sql);
    if($exec == true){
        print "table created successfully";
    }else{
        print "error creating table";
    }
?>