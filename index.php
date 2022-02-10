<?php
    require("./opration.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>

    <div style="background-color:  red; text-align:center; height:50px; width: 100%; ">
        <h1 style="text-align:center; color:black;">book store</h1>
    </div>
    <br>

    <div style="text-align: center; " class="inpuy date">
        <form style="text-align: center; " action="" method="POST">
            <label for = "ID"> ID:</label>
            <input type = text placeholder="ID" name="ID"><br>
            <label for = "Publisher">Bookname: </label>
            <input type = text placeholder="Bookname" name="bookname"><br>
            <label for = "ID"> Publisher:</label>
            <input type = text placeholder="Publisher" name = "publisher"><br>
            <label for = "Publisher">Price: </label>
            <input type = text placeholder="Price" name="price">
              
            <div style="text-align: center; "class="button">
                <button style="color:green; width:50px; height: 50px; " name="create" title="create">Create</button>
                <button style="color:orange; width:50px; height: 50px; " name="read" title="read">read</button>
                <button style="color:blue; width:50px; height: 50px; " name="update" title="update">update</button>
                <button style="color:red; width:50px; height: 50px; " name="delete" title="delete">delete</button> 
                </div>
    </form>
     </div>
    

    
    <br>
    <br>
    <br>

    <table style="text-align:center; height:50px; width: 100%; border: 1px solid black;" class="table">
        <tr>
            <th>ID</th>
            <th>Bookname</th>
            <th>Publisher</th>
            <th>Price</th>

        </tr>


    </table>






</body>

</html>