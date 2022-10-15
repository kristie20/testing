<?php
    require_once "dbconnect.php";
?>
<link rel="stylesheet" href="style.css">

 <table>
    <tr>

        <th>id</th>
        <th>Category name</th>
        <th>Category Status</th>
        <th>Actions </th>
    </tr>

    <?php
        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->status?></td>
                    <td>

                    <a class="txtUp" href="addCategory.php?id=<?php echo $row->id?>">Add</a>
                        
                    <a class="txtUp" href="updateCategory.php?id=<?php echo $row->id?>">Update</a>

                    <a class="txtDe" href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a>
                    
                </td>
                </tr>
        <?php
            }   
        ?>
</table>

