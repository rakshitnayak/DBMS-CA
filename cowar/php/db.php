<?php

function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bedmanagement";

    //create connection
    $con = mysqli_connect($servername, $username, $password);

    //check connction
    if (!$con) {
        die("connection failed:" . mysqli_connect_error());
    }

    //create Databse
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "
        CREATE TABLE IF NOT EXISTS hospitals(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        hospital_name VARCHAR(25) NOT NULL,
        hospital_address VARCHAR (20),
        pincode INT(10) NOT NULL,
        contact VARCHAR(12) NOT NULL
        );";

        $sql = "
        CREATE TABLE IF NOT EXISTS bed_availablity(
	    hospital_id INT ,
        total_beds INT ,
        available_beds INT ,
        occupied_beds INT ,
         FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL

        );
        
        ";

        if (mysqli_query($con, $sql)) {
            return $con;
        } else {
            echo "cannot create table";
        }
    } else {
        echo "error while connecting database" . mysqli_error($con);
    }
}
