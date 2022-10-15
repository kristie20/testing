<?php
    require_once "dbconnect.php";

    $catID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "DELETE from category WHERE id = $catID";  
    $res = $conn->query($sqlQuery);

    if($res){
        header("Location: index.php");
    }
?>