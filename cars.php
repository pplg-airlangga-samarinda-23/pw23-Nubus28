<?php
require 'koneksi.php';
$sql = "SELECT * FROM cars";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>cars</title>
</head>
<body>
    <h1>cars</h1>
    
    <table border="1">
        <thead>
            <th>NO</th>
            <th>releasebrand</th>
            <th>namecar </th>
            <th>carfrom</th>
            <th>typecar</th>
            <th>howmanycars</th>
            <th>aksi</th>
            
        </thead>
        <tbody>
            <?php $no=0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?=++$no?></td>
                    
                        <td>2021-9-2</td>
                        <td>pagani</td> 
                        <td>italian</td>
                        <td>supercar</td>
                        <td>4</td>

                       
                
                    <td>
                        
                        <a href="edit.php?id=<?=$row['id']?>">edit</a>
                        <a href="hapus.php?id=<?=$row['id']?>">hapus</a>
                    </td>
                    
                  
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>