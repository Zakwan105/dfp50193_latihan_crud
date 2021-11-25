<?php
require '../conn.php';

if (!isset($_SESSION['idpengguna'])) header('location: ../');
$idpengguna = $_SESSION['idpengguna'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>

<body>
 <?php echo "Selamat Datang Admin"; ?><br><br>

    <a href="tambah.php">Add new</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#B0E0E6">
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
  <br> <p><a href="../logout.php">Logout</a></p>
</body>

</html>