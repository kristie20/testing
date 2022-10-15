<?php
    require_once "dbconnect.php";
    
    //var_dump($_POST);
    $prodCat = $_GET['cars'];
    $prodName = $_GET ['name'];
    $prodPrice = $_GET['price'];

    $sql = "INSERT INTO product (category, name, price) values ('$prodCat', '$prodName', '$prodPrice')";
    $result = $conn->query($sql);

    if($result)
    header("Location: ProdList.php");
    else
    echo "Failed";