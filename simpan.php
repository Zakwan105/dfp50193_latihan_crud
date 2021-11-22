<?php
require 'conn.php';

$name = $_POST['name'];
$ic = $_POST['ic'];

$sql = "INSERT INTO senaraipelajar (name, ic) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $name, $ic);
$stmt->execute();

if ($mysqli->error) {
?>
    <script>
        alert('Sorry! The name already exists in the list');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
