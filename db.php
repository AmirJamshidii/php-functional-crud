<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";
    
    // create connection
    $con = mysqli_connect($servername, $username, $password);

    //error check
    if(!$con){
        die("connection error" .mysqli_connect_error());
    }

    //create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    
    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
        //create table
        $sql = "CREATE TABLE IF NOT EXISTS books(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            bookname VARCHAR (13) NOT NULL,
            publisher VARCHAR (20),
            price FLOAT(6) NOT NULL)";
            
            if(mysqli_query($con, $sql)){
                return $con;
            }else{
                echo "cannot create table" .mysqli_error($con);
            }
   
    } else{
        echo "error while creating database " .mysqli_error($con);
    }

}

?>