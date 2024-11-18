<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Nama</th>
            <th>slot</th>
        </tr>
        
        <?php
            foreach($data as $row){
            ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['slot']?></td>
        </tr>
        <?php
            };
            ?>
    </table>
    <a href="index.php">kembali</a>
</body>
</html>