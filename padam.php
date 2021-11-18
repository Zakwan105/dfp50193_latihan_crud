<?php
require 'conn.php';

$idsenarai = $_GET['idsenarai'];

$sql = "DELETE FROM senaraipelajar WHERE idsenarai = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idsenarai);
$stmt->execute();

header('location: index.php')
;