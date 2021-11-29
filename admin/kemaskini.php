<?php
require '../conn.php';
$idpengguna = $_GET['idpengguna'];
$sql = "SELECT * FROM staff WHERE idpengguna = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpengguna);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>
<form action="simpan_kemaskini.php" method="post">
    <input type="hidden" name="idpengguna" value="<?php echo $row->idpengguna; ?>" />
    <table>
        <tr>
            <td><label for="idstaff">Id pengguna </label></td>
            <td>
                <input id="idstaff" type="text" name="idstaff" value="<?php echo $row->idstaff; ?>" required />
            </td>
        </tr>
        <tr>
            <td><label for="staff_name">Nama Staff</label></td>
            <td>
                <input id="staff_name" type="text" step="any" name="staff_name" value="<?php echo $row->staff_name; ?>" required />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>