<?php
    require_once "dbconnect.php";
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<h4>Product list</h4>

<table>
    <tr>
        <th>id</th>
        <th>Category name</th>
        <th>Product name</th>
        <th>Product price</th>
        <th>action</th>
        <th>action</th>
    </tr>
    
    <?php
        $sql = "SELECT * from product";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->category</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->price</td>";
            echo "<td><a href=\"#\">Update</a></td>";
            echo "<td><a href=\"#\">Delete</a></td>";
            echo "</tr>";
        }
    
    ?>

</table>
