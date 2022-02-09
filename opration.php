<?php 
require_once("./db.php");
Createdb();

$con = Createdb();

//create button clock
if(isset($_POST['create'])){
    createdata();
}

function Createdata(){
    $bookname = $_POST['bookname'];
    $publisher = 
}


function textboxvalue(){
    $textbox = mysqli_real_escape_string($GLOBALS['$con'], trim($_POST['$values']));

}



?>