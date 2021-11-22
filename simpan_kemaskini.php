<?php
require 'conn.php';

$idsenarai = $_POST['idsenarai'];
$nama = $_POST['nama'];
$ic = $_POST['ic'];

$sql = "UPDATE senaraipelajar SET nama = ?, ic = ? WHERE idsenarai = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $nama, $ic, $idsenarai);
$stmt->execute();

if ($conn->error) {
?>
    <script>
        alert('Maaf! Nama tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
