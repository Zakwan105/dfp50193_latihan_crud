<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
        .wrapper {
            width: 1300px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    
<br><a href="tambah.php">Add New</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#66CDAA">
            <th><center>Bil</center></th>
           <th><center>Nama Pelajar</center></th>
            <th><center>No Kad Pengenalan</center></th>
            <th><center>Tindakan</center></th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM senaraipelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->ic; ?></td>
                    <td>
                        <a href="update.php?idsenarai=<?php echo $row->idsenarai; ?>">Edit</a>
                        |
                        <a href="padam.php?idsenarai=<?php echo $row->idsenarai; ?>" onclick="return confirm('Are you sure you want to delete ?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>