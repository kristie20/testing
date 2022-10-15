<?php
  include "dbconnect.php";
?>

<form action="saveProduct.php" method="get">

  <label for="cars">Choose a category name:</label>

  <select name="cars" id="cars">
    
    <?php
         $sqlQuery = "SELECT * from category";
         $res = $conn->query($sqlQuery);

         while ($row =mysqli_fetch_object($res)){
          echo "<option value=\"$row->name\">$row->name</option>";
         }
     ?>
  </select>
  <br>

  <input type="text" placeholder="Enter Name" name="name">
    <br>
    <input type="text" placeholder="Enter Price" name="price">
    <br>
    <input type="submit">
    
 </form>