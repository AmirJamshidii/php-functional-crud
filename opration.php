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
            textnode("success", "record inserted successfully"); 
        }else{
            echo "error";
        }
    }else{
        textnode("error", "provide data in the textbox" );
    }
    
}

//read button
// in index.php tables


//update button
if(isset($_POST['update'])){
    updatedata();
}


//delete button
if(isset($_POST['delete'])){
    deleterecord();
}


//deleteall bustton
if(isset($_POST['deleteall'])){
    deleteall();
}

function textboxvalue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(isset($textbox)){
        return $textbox;
    }else{
        return false;
    }
}

function textnode($classname, $msg){
    $element = "<h6 class = '$classname'> $msg </h6>";
    echo $element;
}


// get data from sql

function getdata(){
    $sql = "select * from books";

    $result = mysqli_query($GLOBALS['con'], $sql);
        if(mysqli_num_rows($result) > 0){
            // برای تست دریافت اطلاعات به صورت خام
            // while($row = mysqli_fetch_assoc($result)){
            //     echo "id:".$row['id']. "book name:". $row['bookname'];
            // }
            return $result;
        }
    
}


//update data
function updatedata(){
    $bookid = textboxvalue(value: "book_id");
    $bookname = textboxvalue(value: "name");
    $bookpublisher = textboxvalue(value: "publisher");
    $bookprice = textboxvalue(value: "price");

    if($bookid && $bookname && $bookprice){
        $sql = "UPDATE books SET name = '$bookname',
        publisher = '$bookpublisher',
        price = '$bookprice',
        WHERE id = '$bookid'
        ";
        if(mysqli_query($GLOBALS['con'], $sql)){
            textnode("success", "data updated successfully");
        }else{
            textnode("error", "unable to updated ");
        }
    }else{
        textnode("error", "select data ");

    }
}


//delete record
function deleterecord(){
    $bookid = textboxvalue(value: "book_id");
    $sql = "DELETE FROM books WHERE id = $bookid";
    if(mysqli_query($GLOBALS['con'], $sql)){
        textnode("success", "record deleted successfully");
    }else{
        textnode("error", "unable to delete");
    }
}


//deleteallbutton
function deleteallbutton(){
    $result = getdate();
    $i = 0;
    if($result){
        while($row = mysqli_fetch_assoc($result) > 0){
            $i++;
            if($i > 3){
                $element = "<button > deleteall </button";  
            }
        }
    }
}

function deleteall(){
    $sql = "DROP TABLE books";
    if(mysqli_query($GLOBALS['con'], $sql)){
        textnode("success", "all records deleted successfully");
    }else{
        textnode("error", "record cannot deleted");
    }
}
?>

