<?php
require '../conn.php';

$nama = $_POST['nama'];
$ic = $_POST['ic'];

$sql = "INSERT INTO senaraipelajar (nama, ic) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $nama, $ic);
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
