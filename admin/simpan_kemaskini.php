<?php
require '../conn.php';

$idpengguna = $_POST['idpengguna'];
$idstaff = $_POST['idstaff'];
$staff_name = $_POST['staff_name'];

$sql = "UPDATE staff SET idstaff = ?, staff_name = ? WHERE idpengguna = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $idstaff, $staff_name, $idpengguna);
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
