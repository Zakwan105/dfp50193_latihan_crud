<?php require 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>

<body>
    <a href="tambah.php">Add new</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Nama</th>
            <th>No Kad Pengenalan</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM senaraipelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->ic; ?></td>
                    <td>
                        <a href="kemaskini.php?idsenarai=<?php echo $row->idsenarai; ?>">Edit</a>
                        |
                        <a href="padam.php?idsenarai=<?php echo $row->idsenarai; ?>" onclick="return confirm('Adakah anda ingin padam!??');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>