<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$staff_name = $_POST['staff_name'];

$sql = "INSERT INTO staff (idstaff, staff_name) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $idstaff, $staff_name);
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
