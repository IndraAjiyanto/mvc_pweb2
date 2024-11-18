<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?program=''">Program Studi</a>
    <table border=1>
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
            <th>NIM</th>
        </tr>
        
        <?php
            foreach($data as $row){
            ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td><?php echo $row['prodi']?></td>
            <td><a href="index.php?id=<?php echo $row['id']?>">detail</a></td>
        </tr>
        <?php
            };
            ?>
    </table>
</body>
</html>