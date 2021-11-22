<?php
require 'conn.php';
$idsenarai = $_GET['idsenarai'];
$sql = "SELECT * FROM senaraipelajar WHERE idsenarai = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idsenarai);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>
<form action="simpan_kemaskini.php" method="post">
    <input type="hidden" name="idsenarai" value="<?php echo $row->idsenarai; ?>" />
    <table>
        <tr>
            <td><label for="nama">Nama </label></td>
            <td>
                <input id="nama" type="text" name="nama" value="<?php echo $row->nama; ?>" required />
            </td>
        </tr>
        <tr>
            <td><label for="ic">No Kad Pengenalan</label></td>
            <td>
                <input id="ic" type="text" step="any" name="ic" value="<?php echo $row->ic; ?>" required />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>