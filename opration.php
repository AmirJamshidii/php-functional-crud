<?php 
require("./db.php");
Createdb();

$con = Createdb();

//create button clock
if(isset($_POST['create'])){
    createdata();
}

function Createdata(){
    $bookname = textboxvalue(value: "bookname");
    $publisher = textboxvalue(value: "publisher");
    $price = textboxvalue(value: "price");

    if($bookname && $publisher && $price){
        $sql = "INSERT INTO books (bookname, publisher, price)
                VALUES ('$bookname', '$publisher', '$price')";
        if(mysqli_query($GLOBALS['con'], $sql)){
            echo "record inserted successfully";
        }else{
            echo "error";
        }
    }else{
        echo "provide data in textbox";
    }
    
}


function textboxvalue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(isset($textbox)){
        return $textbox;
    }else{
        return false;
    }
}



?>