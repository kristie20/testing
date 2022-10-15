<?php

    require_once "dbconnect.php";
    
    if($_GET){
        $prodCat = $_GET['category'];
        $prodName = $_GET['name'];
        $prodPrice = $_GET['price'];

        $sql = "INSERT into product (category, name, price) values ('$prodCat', '$catName',  $prodPrice)";
        $result = $conn->query($sql);

        if($result)
            header("Location: indexProd.php");
        else
            echo "Failed";
    }

?>

<form action="saveProduct.php" method="get">
    <input type="text" placeholder="Enter Category" name="category">
    <br>
    <input type="text" placeholder="Enter name" name="name">
    <br>
    <input type="text" placeholder="Enter price" name="price">
    <br>
    <input type="submit">
</form>